<?php
// ============================================================
// Nom du fichier : auth/login.php
// Description    : Connexion utilisateur avec rate limiting
// Auth requise   : Non (redirige si deja connecte)
// ============================================================

declare(strict_types=1);

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/session.php';
require_once __DIR__ . '/../helpers/functions.php';

// Rediriger si deja connecte
if (isLoggedIn()) {
    header('Location: /dashboard/index.php');
    exit;
}

$errors = [];
$old    = [];

// ----------------------------------------------------------
// Traitement POST
// ----------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // CSRF
    if (!validateCsrfToken($_POST['csrf_token'] ?? null)) {
        $errors[] = 'Token de securite invalide. Veuillez recharger la page.';
    }

    $email      = trim(strtolower($_POST['email'] ?? ''));
    $password   = $_POST['password'] ?? '';
    $rememberMe = isset($_POST['remember_me']);

    $old = ['email' => $email];

    if (empty($errors)) {
        if (!isValidEmail($email) || $password === '') {
            $errors[] = 'Identifiants incorrects.';
        }
    }

    if (empty($errors)) {
        $pdo = getPDO();

        // Recuperer l'utilisateur
        $stmt = $pdo->prepare("
            SELECT id, email, password, slug, is_active, login_attempts, locked_until
            FROM users WHERE email = ?
        ");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if (!$user) {
            // Ne pas reveler que l'email n'existe pas
            $errors[] = 'Identifiants incorrects.';
        } else {
            // Verifier le verrouillage
            if ($user['locked_until'] !== null && strtotime($user['locked_until']) > time()) {
                $minutesLeft = (int) ceil((strtotime($user['locked_until']) - time()) / 60);
                $errors[] = "Compte temporairement verrouille. Reessayez dans {$minutesLeft} minute(s).";
            } elseif (!password_verify($password, $user['password'])) {
                // Incrementer les tentatives
                $attempts = (int) $user['login_attempts'] + 1;

                if ($attempts >= MAX_LOGIN_ATTEMPTS) {
                    $lockedUntil = date('Y-m-d H:i:s', time() + LOGIN_LOCKOUT_MINUTES * 60);
                    $stmt = $pdo->prepare("
                        UPDATE users SET login_attempts = ?, locked_until = ? WHERE id = ?
                    ");
                    $stmt->execute([$attempts, $lockedUntil, $user['id']]);
                    $errors[] = "Trop de tentatives. Compte verrouille pour " . LOGIN_LOCKOUT_MINUTES . " minutes.";
                } else {
                    $stmt = $pdo->prepare("
                        UPDATE users SET login_attempts = ? WHERE id = ?
                    ");
                    $stmt->execute([$attempts, $user['id']]);
                    $remaining = MAX_LOGIN_ATTEMPTS - $attempts;
                    $errors[] = "Identifiants incorrects. {$remaining} tentative(s) restante(s).";
                }
            } else {
                // Connexion reussie — reset des tentatives
                $updateData = [
                    'login_attempts' => 0,
                    'locked_until'   => null,
                    'last_login_at'  => date('Y-m-d H:i:s'),
                ];

                // Remember me
                $rememberToken = null;
                if ($rememberMe) {
                    $rememberToken = generateToken(64);
                    $updateData['remember_token'] = $rememberToken;
                }

                $setClauses = [];
                $params = [];
                foreach ($updateData as $col => $val) {
                    $setClauses[] = "{$col} = ?";
                    $params[] = $val;
                }
                $params[] = $user['id'];

                $stmt = $pdo->prepare("
                    UPDATE users SET " . implode(', ', $setClauses) . " WHERE id = ?
                ");
                $stmt->execute($params);

                // Creer la session
                loginUser((int) $user['id']);

                // Cookie Remember Me
                if ($rememberMe && $rememberToken) {
                    $cookieValue = $user['id'] . ':' . $rememberToken;
                    $secure = (APP_ENV === 'production');
                    setcookie('remember_me', $cookieValue, [
                        'expires'  => time() + REMEMBER_ME_LIFETIME,
                        'path'     => '/',
                        'domain'   => '.' . BASE_DOMAIN,
                        'secure'   => $secure,
                        'httponly'  => true,
                        'samesite' => 'Strict',
                    ]);
                }

                // PRG
                $_SESSION['flash'] = [
                    'type'    => 'success',
                    'message' => 'Connexion reussie. Bienvenue !',
                ];
                header('Location: /dashboard/index.php');
                exit;
            }
        }
    }
}

// ----------------------------------------------------------
// Affichage
// ----------------------------------------------------------
$pageTitle    = 'Se connecter';
$pageSubtitle = 'Accedez a votre tableau de bord';
include __DIR__ . '/../includes/auth-layout.php';
?>

<form method="POST" action="" class="space-y-5">
    <input type="hidden" name="csrf_token" value="<?= sanitize($csrfToken) ?>">

    <!-- Erreurs -->
    <?php if (!empty($errors)): ?>
        <div class="rounded-lg bg-red-50 border border-red-200 p-4">
            <ul class="list-disc list-inside text-sm text-red-700 space-y-1">
                <?php foreach ($errors as $error): ?>
                    <li><?= sanitize($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Email -->
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Adresse email</label>
        <input type="email" id="email" name="email" required autocomplete="email"
               value="<?= sanitize($old['email'] ?? '') ?>"
               class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-gray-900 shadow-sm placeholder:text-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none sm:text-sm"
               placeholder="jean@exemple.com">
    </div>

    <!-- Mot de passe -->
    <div>
        <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
            <a href="/auth/forgot-password.php" class="text-sm font-medium text-blue-600 hover:text-blue-500">
                Mot de passe oublie ?
            </a>
        </div>
        <input type="password" id="password" name="password" required autocomplete="current-password"
               class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-gray-900 shadow-sm placeholder:text-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none sm:text-sm"
               placeholder="Votre mot de passe">
    </div>

    <!-- Remember me -->
    <div class="flex items-center">
        <input id="remember_me" name="remember_me" type="checkbox"
               class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
        <label for="remember_me" class="ml-2 block text-sm text-gray-700">
            Se souvenir de moi pendant 30 jours
        </label>
    </div>

    <!-- Submit -->
    <button type="submit"
            class="flex w-full justify-center rounded-lg bg-blue-600 px-3 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition-colors">
        Se connecter
    </button>
</form>

<p class="mt-6 text-center text-sm text-gray-500">
    Pas encore de compte ?
    <a href="/auth/register.php" class="font-semibold text-blue-600 hover:text-blue-500">Creer un portfolio</a>
</p>

<?php include __DIR__ . '/../includes/auth-footer.php'; ?>
