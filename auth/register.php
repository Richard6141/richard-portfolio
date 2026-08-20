<?php
// ============================================================
// Nom du fichier : auth/register.php
// Description    : Inscription d'un nouvel utilisateur
// Auth requise   : Non (redirige si deja connecte)
// ============================================================

declare(strict_types=1);

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/session.php';
require_once __DIR__ . '/../config/defaults.php';
require_once __DIR__ . '/../helpers/functions.php';
require_once __DIR__ . '/../helpers/mailer.php';

// Rediriger si deja connecte
if (isLoggedIn()) {
    header('Location: /dashboard/index.php');
    exit;
}

$errors   = [];
$old      = [];

// ----------------------------------------------------------
// Traitement POST
// ----------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // CSRF
    if (!validateCsrfToken($_POST['csrf_token'] ?? null)) {
        $errors[] = 'Token de securite invalide. Veuillez recharger la page.';
    }

    // Recuperer et nettoyer les inputs
    $fullName        = trim($_POST['fullname'] ?? '');
    $email           = trim(strtolower($_POST['email'] ?? ''));
    $password        = $_POST['password'] ?? '';
    $passwordConfirm = $_POST['password_confirm'] ?? '';

    $old = ['fullname' => $fullName, 'email' => $email];

    // --- Validations ---
    if (empty($errors)) {
        if (mb_strlen($fullName) < 2 || mb_strlen($fullName) > 100) {
            $errors[] = 'Le nom complet doit contenir entre 2 et 100 caracteres.';
        }
        if (!isValidEmail($email)) {
            $errors[] = 'L\'adresse email n\'est pas valide.';
        }
        if (mb_strlen($password) < 8) {
            $errors[] = 'Le mot de passe doit contenir au moins 8 caracteres.';
        }
        if ($password !== $passwordConfirm) {
            $errors[] = 'Les mots de passe ne correspondent pas.';
        }
    }

    // Generer le slug automatiquement depuis le nom
    $slug = generateSlug($fullName);
    if (mb_strlen($slug) < 3) $slug .= '-portfolio';

    // Verifier unicite email
    if (empty($errors)) {
        $pdo = getPDO();

        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ((int) $stmt->fetchColumn() > 0) {
            $errors[] = 'Cette adresse email est deja utilisee.';
        }
    }

    // --- Creation du compte ---
    if (empty($errors)) {
        $pdo = getPDO();

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
        $verificationToken = generateToken(64);

        // Extraire prenom / nom
        $nameParts = explode(' ', $fullName, 2);
        $firstName = $nameParts[0];
        $lastName  = $nameParts[1] ?? '';

        try {
            $pdo->beginTransaction();

            // Creer l'utilisateur
            $stmt = $pdo->prepare("
                INSERT INTO users (email, password, slug, is_active, email_verification_token)
                VALUES (?, ?, ?, 1, ?)
            ");
            $stmt->execute([$email, $hashedPassword, $slug, $verificationToken]);
            $userId = (int) $pdo->lastInsertId();

            // Inserer les donnees par defaut
            insertDefaultData($pdo, $userId);

            // Mettre a jour le profil avec le nom
            $stmt = $pdo->prepare("
                UPDATE profiles SET first_name = ?, last_name = ? WHERE user_id = ?
            ");
            $stmt->execute([$firstName, $lastName, $userId]);

            $pdo->commit();

            // Connecter l'utilisateur
            loginUser($userId);

            // Envoyer email de bienvenue (non bloquant)
            try {
                sendWelcome($email, $firstName, $slug);
            } catch (\Throwable $e) {
                // L'echec d'envoi d'email ne bloque pas l'inscription
            }

            // PRG : rediriger avec message de bienvenue
            $_SESSION['flash'] = [
                'type'    => 'success',
                'message' => 'Bienvenue sur ' . APP_NAME . ' ! Votre portfolio est pret a etre personnalise.',
            ];
            header('Location: /dashboard/index.php');
            exit;

        } catch (\PDOException $e) {
            $pdo->rollBack();
            $errors[] = 'Une erreur est survenue lors de la creation du compte. Veuillez reessayer.';
        }
    }
}

// ----------------------------------------------------------
// Affichage
// ----------------------------------------------------------
$pageTitle    = 'Creer un compte';
$pageSubtitle = 'Creez votre portfolio professionnel en quelques minutes';
include __DIR__ . '/../includes/auth-layout.php';
?>

<form method="POST" action="" class="space-y-5" x-data="registerForm()" @submit="validateForm($event)">
    <input type="hidden" name="csrf_token" value="<?= sanitize($csrfToken) ?>">

    <!-- Erreurs serveur -->
    <?php if (!empty($errors)): ?>
        <div class="rounded-lg bg-red-50 border border-red-200 p-4">
            <ul class="list-disc list-inside text-sm text-red-700 space-y-1">
                <?php foreach ($errors as $error): ?>
                    <li><?= sanitize($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Nom complet -->
    <div>
        <label for="fullname" class="block text-sm font-medium text-gray-700">Nom complet</label>
        <input type="text" id="fullname" name="fullname" required autocomplete="name"
               value="<?= sanitize($old['fullname'] ?? '') ?>"
               class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-gray-900 shadow-sm placeholder:text-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none sm:text-sm"
               placeholder="Jean Dupont">
    </div>

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
        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
        <input type="password" id="password" name="password" required autocomplete="new-password"
               minlength="8"
               class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-gray-900 shadow-sm placeholder:text-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none sm:text-sm"
               placeholder="Minimum 8 caracteres">
    </div>

    <!-- Confirmation mot de passe -->
    <div>
        <label for="password_confirm" class="block text-sm font-medium text-gray-700">Confirmer le mot de passe</label>
        <input type="password" id="password_confirm" name="password_confirm" required autocomplete="new-password"
               minlength="8"
               class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-gray-900 shadow-sm placeholder:text-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none sm:text-sm"
               placeholder="Retapez votre mot de passe">
    </div>

    <!-- Submit -->
    <button type="submit"
            class="flex w-full justify-center rounded-lg bg-blue-600 px-3 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition-colors">
        Creer mon portfolio
    </button>
</form>

<p class="mt-6 text-center text-sm text-gray-500">
    Deja un compte ?
    <a href="/auth/login.php" class="font-semibold text-blue-600 hover:text-blue-500">Se connecter</a>
</p>

<script>
function registerForm() {
    return {

        validateForm(event) {
            const pw = document.getElementById('password').value;
            const pwc = document.getElementById('password_confirm').value;
            if (pw !== pwc) {
                event.preventDefault();
                alert('Les mots de passe ne correspondent pas.');
            }
        }
    };
}
</script>

<?php include __DIR__ . '/../includes/auth-footer.php'; ?>
