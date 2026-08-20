<?php
// ============================================================
// Nom du fichier : auth/forgot-password.php
// Description    : Demande de reinitialisation de mot de passe
// Auth requise   : Non
// ============================================================

declare(strict_types=1);

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/session.php';
require_once __DIR__ . '/../helpers/functions.php';
require_once __DIR__ . '/../helpers/mailer.php';

if (isLoggedIn()) {
    header('Location: /dashboard/index.php');
    exit;
}

$submitted = false;

// ----------------------------------------------------------
// Traitement POST
// ----------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!validateCsrfToken($_POST['csrf_token'] ?? null)) {
        $_SESSION['flash'] = [
            'type'    => 'error',
            'message' => 'Token de securite invalide. Veuillez recharger la page.',
        ];
        header('Location: /auth/forgot-password.php');
        exit;
    }

    $email = trim(strtolower($_POST['email'] ?? ''));
    $submitted = true;

    // Toujours afficher le meme message (ne pas reveler si l'email existe)
    if (isValidEmail($email)) {
        $pdo = getPDO();

        $stmt = $pdo->prepare("
            SELECT id, slug, email FROM users WHERE email = ? AND is_active = 1
        ");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user) {
            // Invalider les anciens tokens non utilises
            $stmt = $pdo->prepare("
                UPDATE password_resets SET used = 1 WHERE email = ? AND used = 0
            ");
            $stmt->execute([$email]);

            // Generer un nouveau token
            $token = generateToken(64);
            $expiresAt = date('Y-m-d H:i:s', time() + 3600); // 1 heure

            $stmt = $pdo->prepare("
                INSERT INTO password_resets (email, token, expires_at)
                VALUES (?, ?, ?)
            ");
            $stmt->execute([$email, $token, $expiresAt]);

            // Envoyer l'email (non bloquant)
            try {
                $name = $user['slug']; // On n'a pas le prenom ici, le slug suffira
                // Recuperer le prenom depuis le profil
                $stmtProfile = $pdo->prepare("SELECT first_name FROM profiles WHERE user_id = ?");
                $stmtProfile->execute([$user['id']]);
                $profile = $stmtProfile->fetch();
                if ($profile && !empty($profile['first_name'])) {
                    $name = $profile['first_name'];
                }

                sendPasswordReset($email, $name, $token);
            } catch (\Throwable $e) {
                // Silencieux
            }
        }
    }
}

// ----------------------------------------------------------
// Affichage
// ----------------------------------------------------------
$pageTitle    = 'Mot de passe oublie';
$pageSubtitle = 'Recevez un lien de reinitialisation par email';
include __DIR__ . '/../includes/auth-layout.php';
?>

<?php if ($submitted): ?>
    <!-- Message de confirmation (affiche toujours le meme message) -->
    <div class="text-center">
        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-100 mb-4">
            <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
        </div>
        <h3 class="text-lg font-semibold text-gray-900 mb-2">Verifiez vos emails</h3>
        <p class="text-sm text-gray-600 mb-6">
            Si un compte existe avec cette adresse email, vous recevrez un lien de reinitialisation dans quelques minutes.
        </p>
        <p class="text-sm text-gray-500">
            Pensez a verifier votre dossier spam.
        </p>
    </div>
<?php else: ?>
    <form method="POST" action="" class="space-y-5">
        <input type="hidden" name="csrf_token" value="<?= sanitize($csrfToken) ?>">

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Adresse email</label>
            <input type="email" id="email" name="email" required autocomplete="email"
                   class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-gray-900 shadow-sm placeholder:text-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none sm:text-sm"
                   placeholder="jean@exemple.com">
        </div>

        <!-- Submit -->
        <button type="submit"
                class="flex w-full justify-center rounded-lg bg-blue-600 px-3 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition-colors">
            Envoyer le lien de reinitialisation
        </button>
    </form>
<?php endif; ?>

<p class="mt-6 text-center text-sm text-gray-500">
    <a href="/auth/login.php" class="font-semibold text-blue-600 hover:text-blue-500">
        &larr; Retour a la connexion
    </a>
</p>

<?php include __DIR__ . '/../includes/auth-footer.php'; ?>
