<?php
// ============================================================
// Nom du fichier : auth/reset-password.php
// Description    : Reinitialisation du mot de passe via token
// Auth requise   : Non
// ============================================================

declare(strict_types=1);

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/session.php';
require_once __DIR__ . '/../helpers/functions.php';

if (isLoggedIn()) {
    header('Location: /dashboard/index.php');
    exit;
}

$token      = trim($_GET['token'] ?? '');
$errors     = [];
$tokenValid = false;

// ----------------------------------------------------------
// Verifier le token
// ----------------------------------------------------------
if ($token === '') {
    $errors[] = 'Lien de reinitialisation invalide.';
} else {
    $pdo = getPDO();

    $stmt = $pdo->prepare("
        SELECT id, email, expires_at, used
        FROM password_resets
        WHERE token = ?
        ORDER BY created_at DESC
        LIMIT 1
    ");
    $stmt->execute([$token]);
    $reset = $stmt->fetch();

    if (!$reset) {
        $errors[] = 'Lien de reinitialisation invalide ou expire.';
    } elseif ($reset['used']) {
        $errors[] = 'Ce lien a deja ete utilise. Demandez un nouveau lien.';
    } elseif (strtotime($reset['expires_at']) < time()) {
        $errors[] = 'Ce lien a expire. Demandez un nouveau lien (valide 1 heure).';
    } else {
        $tokenValid = true;
    }
}

// ----------------------------------------------------------
// Traitement POST
// ----------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $tokenValid) {

    if (!validateCsrfToken($_POST['csrf_token'] ?? null)) {
        $errors[] = 'Token de securite invalide. Veuillez recharger la page.';
    }

    $password        = $_POST['password'] ?? '';
    $passwordConfirm = $_POST['password_confirm'] ?? '';

    if (mb_strlen($password) < 8) {
        $errors[] = 'Le mot de passe doit contenir au moins 8 caracteres.';
    }
    if ($password !== $passwordConfirm) {
        $errors[] = 'Les mots de passe ne correspondent pas.';
    }

    if (empty($errors)) {
        $pdo = getPDO();

        try {
            $pdo->beginTransaction();

            // Mettre a jour le mot de passe
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
            $stmt = $pdo->prepare("
                UPDATE users SET password = ?, login_attempts = 0, locked_until = NULL
                WHERE email = ?
            ");
            $stmt->execute([$hashedPassword, $reset['email']]);

            // Marquer le token comme utilise
            $stmt = $pdo->prepare("
                UPDATE password_resets SET used = 1 WHERE id = ?
            ");
            $stmt->execute([$reset['id']]);

            $pdo->commit();

            // PRG : rediriger avec message
            $_SESSION['flash'] = [
                'type'    => 'success',
                'message' => 'Mot de passe reinitialise avec succes. Vous pouvez vous connecter.',
            ];
            header('Location: /auth/login.php');
            exit;

        } catch (\PDOException $e) {
            $pdo->rollBack();
            $errors[] = 'Une erreur est survenue. Veuillez reessayer.';
        }
    }
}

// ----------------------------------------------------------
// Affichage
// ----------------------------------------------------------
$pageTitle    = 'Nouveau mot de passe';
$pageSubtitle = 'Choisissez un nouveau mot de passe securise';
include __DIR__ . '/../includes/auth-layout.php';
?>

<?php if (!$tokenValid && !empty($errors)): ?>
    <!-- Token invalide -->
    <div class="text-center">
        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-red-100 mb-4">
            <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
            </svg>
        </div>
        <div class="rounded-lg bg-red-50 border border-red-200 p-4 mb-4">
            <?php foreach ($errors as $error): ?>
                <p class="text-sm text-red-700"><?= sanitize($error) ?></p>
            <?php endforeach; ?>
        </div>
        <a href="/auth/forgot-password.php"
           class="inline-flex items-center gap-1 text-sm font-semibold text-blue-600 hover:text-blue-500">
            Demander un nouveau lien &rarr;
        </a>
    </div>
<?php else: ?>
    <form method="POST" action="?token=<?= sanitize($token) ?>" class="space-y-5">
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

        <!-- Nouveau mot de passe -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Nouveau mot de passe</label>
            <input type="password" id="password" name="password" required autocomplete="new-password"
                   minlength="8"
                   class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-gray-900 shadow-sm placeholder:text-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none sm:text-sm"
                   placeholder="Minimum 8 caracteres">
        </div>

        <!-- Confirmation -->
        <div>
            <label for="password_confirm" class="block text-sm font-medium text-gray-700">Confirmer</label>
            <input type="password" id="password_confirm" name="password_confirm" required autocomplete="new-password"
                   minlength="8"
                   class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-gray-900 shadow-sm placeholder:text-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none sm:text-sm"
                   placeholder="Retapez votre mot de passe">
        </div>

        <!-- Submit -->
        <button type="submit"
                class="flex w-full justify-center rounded-lg bg-blue-600 px-3 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition-colors">
            Reinitialiser le mot de passe
        </button>
    </form>
<?php endif; ?>

<p class="mt-6 text-center text-sm text-gray-500">
    <a href="/auth/login.php" class="font-semibold text-blue-600 hover:text-blue-500">
        &larr; Retour a la connexion
    </a>
</p>

<?php include __DIR__ . '/../includes/auth-footer.php'; ?>
