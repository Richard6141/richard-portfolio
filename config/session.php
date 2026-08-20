<?php
// ============================================================
// Nom du fichier : config/session.php
// Description    : Gestion des sessions securisees, auth et CSRF
// Auth requise   : Non (fichier de configuration)
// ============================================================

declare(strict_types=1);

require_once __DIR__ . '/constants.php';

/**
 * Demarre la session avec des parametres securises.
 * Appeler en haut de chaque page qui utilise les sessions.
 */
function initSession(): void
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        return;
    }

    $secure = (APP_ENV === 'production');

    session_set_cookie_params([
        'lifetime' => SESSION_LIFETIME,
        'path'     => '/',
        'domain'   => '.' . BASE_DOMAIN,
        'secure'   => $secure,
        'httponly'  => true,
        'samesite' => 'Strict',
    ]);

    session_name('PORTFOLIO_SESS');
    session_start();
}

// Demarrer la session automatiquement a l'inclusion
initSession();

// Tenter la reconnexion via cookie remember_me si non connecte
autoLoginFromCookie();

/**
 * Verifie que l'utilisateur est connecte.
 * Redirige vers /auth/login.php sinon.
 */
function requireAuth(): void
{
    if (!isLoggedIn()) {
        header('Location: /auth/login.php');
        exit;
    }
}

/**
 * Verifie si un utilisateur est connecte.
 */
function isLoggedIn(): bool
{
    return isset($_SESSION['user_id']) && is_int($_SESSION['user_id']);
}

/**
 * Retourne l'ID de l'utilisateur connecte.
 *
 * @throws RuntimeException Si non connecte.
 */
function getCurrentUserId(): int
{
    if (!isLoggedIn()) {
        throw new RuntimeException('Utilisateur non connecte');
    }

    return $_SESSION['user_id'];
}

/**
 * Retourne les donnees completes de l'utilisateur connecte depuis la DB.
 *
 * @return array<string, mixed>
 * @throws RuntimeException Si non connecte ou utilisateur introuvable.
 */
function getCurrentUser(): array
{
    $userId = getCurrentUserId();
    $pdo = getPDO();

    $stmt = $pdo->prepare("
        SELECT u.*, p.first_name, p.last_name, p.avatar_url, p.profession
        FROM users u
        LEFT JOIN profiles p ON p.user_id = u.id
        WHERE u.id = ?
    ");
    $stmt->execute([$userId]);
    $user = $stmt->fetch();

    if (!$user) {
        destroySession();
        throw new RuntimeException('Utilisateur introuvable');
    }

    return $user;
}

/**
 * Connecte un utilisateur en creant sa session.
 */
function loginUser(int $userId): void
{
    session_regenerate_id(true);
    $_SESSION['user_id'] = $userId;
    $_SESSION['login_time'] = time();
    $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'] ?? '';
}

/**
 * Detruit la session et deconnecte l'utilisateur.
 */
function destroySession(): void
{
    $_SESSION = [];

    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params['path'],
            $params['domain'],
            $params['secure'],
            $params['httponly']
        );
    }

    session_destroy();
}

/**
 * Tente de reconnecter l'utilisateur via le cookie remember_me.
 */
function autoLoginFromCookie(): void
{
    if (isLoggedIn()) {
        return;
    }

    $cookie = $_COOKIE['remember_me'] ?? '';
    if ($cookie === '' || strpos($cookie, ':') === false) {
        return;
    }

    [$userId, $token] = explode(':', $cookie, 2);
    $userId = (int) $userId;

    if ($userId <= 0 || $token === '') {
        return;
    }

    try {
        $pdo = getPDO();
        $stmt = $pdo->prepare("
            SELECT id, remember_token FROM users WHERE id = ? AND is_active = 1
        ");
        $stmt->execute([$userId]);
        $user = $stmt->fetch();

        if ($user && $user['remember_token'] !== null && hash_equals($user['remember_token'], $token)) {
            loginUser((int) $user['id']);

            // Renouveler le token pour eviter la reutilisation
            $newToken = bin2hex(random_bytes(32));
            $stmt = $pdo->prepare("UPDATE users SET remember_token = ? WHERE id = ?");
            $stmt->execute([$newToken, $user['id']]);

            $secure = (APP_ENV === 'production');
            setcookie('remember_me', $user['id'] . ':' . $newToken, [
                'expires'  => time() + REMEMBER_ME_LIFETIME,
                'path'     => '/',
                'domain'   => '.' . BASE_DOMAIN,
                'secure'   => $secure,
                'httponly'  => true,
                'samesite' => 'Strict',
            ]);
        }
    } catch (\Throwable $e) {
        // Silencieux
    }
}

// ----------------------------------------------------------
// CSRF Protection
// ----------------------------------------------------------

/**
 * Genere et retourne un token CSRF.
 * Le token est stocke en session et est valide pour toute la session.
 */
function generateCsrfToken(): string
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['csrf_token'];
}

/**
 * Valide un token CSRF soumis.
 *
 * @param string|null $token Le token a verifier (depuis POST ou header).
 * @return bool True si le token est valide.
 */
function validateCsrfToken(?string $token): bool
{
    if ($token === null || empty($_SESSION['csrf_token'])) {
        return false;
    }

    return hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Verifie le CSRF et arrete l'execution si invalide.
 * Utilise le header X-CSRF-Token pour AJAX ou le champ POST csrf_token.
 */
function requireCsrf(): void
{
    $token = $_SERVER['HTTP_X_CSRF_TOKEN']
        ?? $_POST['csrf_token']
        ?? null;

    if (!validateCsrfToken($token)) {
        http_response_code(403);
        echo json_encode([
            'success' => false,
            'message' => 'Token CSRF invalide. Rechargez la page.',
            'data'    => null,
        ]);
        exit;
    }
}
