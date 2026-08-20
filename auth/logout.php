<?php
// ============================================================
// Nom du fichier : auth/logout.php
// Description    : Deconnexion de l'utilisateur
// Auth requise   : Non (si pas connecte, simple redirection)
// ============================================================

declare(strict_types=1);

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/session.php';

// Supprimer le token remember_me en base si connecte
if (isLoggedIn()) {
    try {
        $pdo = getPDO();
        $stmt = $pdo->prepare("UPDATE users SET remember_token = NULL WHERE id = ?");
        $stmt->execute([getCurrentUserId()]);
    } catch (\Throwable $e) {
        // Silencieux — on deconnecte quand meme
    }
}

// Supprimer le cookie remember_me
$secure = (APP_ENV === 'production');
setcookie('remember_me', '', [
    'expires'  => time() - 42000,
    'path'     => '/',
    'domain'   => '.' . BASE_DOMAIN,
    'secure'   => $secure,
    'httponly'  => true,
    'samesite' => 'Strict',
]);

// Detruire la session
destroySession();

// Redemarrer une session pour le flash message
initSession();
$_SESSION['flash'] = [
    'type'    => 'success',
    'message' => 'Vous avez ete deconnecte avec succes.',
];

header('Location: /auth/login.php');
exit;
