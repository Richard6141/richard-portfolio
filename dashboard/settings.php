<?php
// ============================================================
// Nom du fichier : dashboard/settings.php
// Description    : Parametres du compte et du portfolio
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

$dashboardTitle = 'Parametres';
require_once __DIR__ . '/../includes/dashboard-layout.php';

$userId = getCurrentUserId();

$stmt = $pdo->prepare("SELECT * FROM profiles WHERE user_id = ?");
$stmt->execute([$userId]);
$profile = $stmt->fetch();

$stmt = $pdo->prepare("SELECT robots FROM seo_config WHERE user_id = ?");
$stmt->execute([$userId]);
$seo = $stmt->fetch();
?>

<div x-data="settingsPage()" x-init="init()">

    <!-- Tabs -->
    <div class="border-b border-gray-200 mb-6">
        <nav class="-mb-px flex gap-1 overflow-x-auto">
            <template x-for="tab in tabs" :key="tab.id">
                <button @click="activeTab = tab.id"
                        :class="activeTab === tab.id
                            ? (tab.id === 'danger' ? 'border-red-500 text-red-600' : 'border-blue-600 text-blue-600')
                            : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                        class="whitespace-nowrap border-b-2 py-3 px-3 text-sm font-medium transition-colors" x-text="tab.label"></button>
            </template>
        </nav>
    </div>

    <!-- ======== MON COMPTE ======== -->
    <div x-show="activeTab === 'account'" x-cloak class="space-y-6">

        <!-- Email -->
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
            <h3 class="text-base font-semibold text-gray-900 font-heading mb-4">Adresse email</h3>
            <p class="text-sm text-gray-500 mb-4">Email actuel : <strong class="text-gray-700"><?= sanitize($currentUser['email']) ?></strong></p>
            <div class="space-y-3 max-w-md">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nouvel email</label>
                    <input type="email" x-model="emailForm.email" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="nouveau@email.com">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Mot de passe actuel</label>
                    <input type="password" x-model="emailForm.current_password" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Pour confirmer le changement">
                </div>
                <button @click="updateEmail()" :disabled="saving" class="px-5 py-2 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">Mettre a jour</button>
            </div>
        </div>

        <!-- Password -->
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
            <h3 class="text-base font-semibold text-gray-900 font-heading mb-4">Mot de passe</h3>
            <div class="space-y-3 max-w-md">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Mot de passe actuel</label>
                    <input type="password" x-model="passForm.current_password" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nouveau mot de passe</label>
                    <input type="password" x-model="passForm.new_password" minlength="8" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Minimum 8 caracteres">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Confirmer</label>
                    <input type="password" x-model="passForm.confirm_password" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                </div>
                <button @click="updatePassword()" :disabled="saving" class="px-5 py-2 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">Changer le mot de passe</button>
            </div>
        </div>
    </div>

    <!-- ======== MON PORTFOLIO ======== -->
    <div x-show="activeTab === 'portfolio'" x-cloak class="space-y-6">

        <!-- Slug -->
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
            <h3 class="text-base font-semibold text-gray-900 font-heading mb-4">Sous-domaine</h3>
            <p class="text-sm text-gray-500 mb-4">Votre portfolio est accessible a <strong class="text-blue-600"><?= BASE_DOMAIN ?></strong></p>
            <div class="max-w-md">
                <div class="flex rounded-lg shadow-sm">
                    <input type="text" x-model="slugForm.slug" @input.debounce.400ms="checkSlug()"
                           pattern="[a-z0-9][a-z0-9-]{2,29}" maxlength="30"
                           class="flex-1 rounded-l-lg border border-r-0 border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                    <span class="inline-flex items-center rounded-r-lg border border-l-0 border-gray-300 bg-gray-50 px-3 text-sm text-gray-500">.<?= BASE_DOMAIN ?></span>
                </div>
                <div class="mt-1.5 min-h-[20px]">
                    <p x-show="slugStatus === 'available'" class="text-sm text-green-600 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"/></svg>
                        Disponible
                    </p>
                    <p x-show="slugStatus === 'taken'" class="text-sm text-red-600" x-text="slugMessage"></p>
                    <p x-show="slugStatus === 'checking'" class="text-sm text-gray-400">Verification...</p>
                </div>
                <button @click="updateSlug()" :disabled="saving || slugStatus !== 'available'" class="mt-2 px-5 py-2 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">Changer le sous-domaine</button>
            </div>
        </div>

        <!-- Visibility -->
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
            <h3 class="text-base font-semibold text-gray-900 font-heading mb-4">Visibilite</h3>
            <div class="space-y-4">
                <label class="flex items-center justify-between p-4 rounded-xl bg-gray-50 cursor-pointer hover:bg-gray-100 transition-colors">
                    <div>
                        <p class="text-sm font-medium text-gray-700">Portfolio public</p>
                        <p class="text-xs text-gray-500">Visible par tous les visiteurs</p>
                    </div>
                    <input type="checkbox" x-model="visForm.is_published" @change="saveVisibility()" class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                </label>
                <label class="flex items-center justify-between p-4 rounded-xl bg-gray-50 cursor-pointer hover:bg-gray-100 transition-colors">
                    <div>
                        <p class="text-sm font-medium text-gray-700">Mode maintenance</p>
                        <p class="text-xs text-gray-500">Affiche un message "Bientot disponible"</p>
                    </div>
                    <input type="checkbox" x-model="visForm.is_maintenance" @change="saveVisibility()" class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                </label>
                <div x-show="visForm.is_maintenance" x-collapse>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Message de maintenance</label>
                    <textarea x-model="visForm.maintenance_message" @change="saveVisibility()" rows="2" maxlength="500" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none resize-none" placeholder="Portfolio en cours de construction. Revenez bientot !"></textarea>
                </div>
            </div>
        </div>
    </div>

    <!-- ======== CONFIDENTIALITE ======== -->
    <div x-show="activeTab === 'privacy'" x-cloak class="space-y-6">
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
            <h3 class="text-base font-semibold text-gray-900 font-heading mb-4">Indexation</h3>
            <div class="space-y-4">
                <label class="flex items-center justify-between p-4 rounded-xl bg-gray-50 cursor-pointer hover:bg-gray-100 transition-colors">
                    <div>
                        <p class="text-sm font-medium text-gray-700">Autoriser l'indexation par Google</p>
                        <p class="text-xs text-gray-500">Si desactive, votre portfolio n'apparaitra pas dans les resultats de recherche</p>
                    </div>
                    <input type="checkbox" x-model="privacyForm.indexable" @change="savePrivacy()" class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                </label>
            </div>
        </div>
    </div>

    <!-- ======== DANGER ZONE ======== -->
    <div x-show="activeTab === 'danger'" x-cloak class="space-y-6">

        <!-- Reset content -->
        <div class="bg-red-50 rounded-2xl ring-1 ring-red-200 p-6">
            <h3 class="text-base font-semibold text-red-800 mb-2">Reinitialiser le contenu</h3>
            <p class="text-sm text-red-700 mb-4">Supprime toutes vos experiences, projets, competences, temoignages, articles et fichiers uploades. Votre compte, nom et parametres sont conserves.</p>
            <div class="max-w-md">
                <label class="block text-sm font-medium text-red-700 mb-1">Tapez <strong>REINITIALISER</strong> pour confirmer</label>
                <input type="text" x-model="resetConfirm" class="w-full rounded-lg border border-red-300 px-3 py-2 text-sm focus:border-red-500 focus:ring-2 focus:ring-red-500/20 focus:outline-none" placeholder="REINITIALISER">
                <button @click="resetContent()" :disabled="resetConfirm !== 'REINITIALISER' || saving"
                        class="mt-3 px-5 py-2 rounded-lg text-sm font-semibold text-white bg-red-600 hover:bg-red-700 disabled:opacity-50 transition-colors">
                    Reinitialiser tout le contenu
                </button>
            </div>
        </div>

        <!-- Delete account -->
        <div class="bg-red-50 rounded-2xl ring-1 ring-red-200 p-6">
            <h3 class="text-base font-semibold text-red-800 mb-2">Supprimer le compte</h3>
            <p class="text-sm text-red-700 mb-4">Supprime definitivement votre compte, toutes vos donnees et tous vos fichiers. Cette action est <strong>irreversible</strong>.</p>
            <div class="max-w-md">
                <label class="block text-sm font-medium text-red-700 mb-1">Tapez <strong>SUPPRIMER</strong> pour confirmer</label>
                <input type="text" x-model="deleteConfirm" class="w-full rounded-lg border border-red-300 px-3 py-2 text-sm focus:border-red-500 focus:ring-2 focus:ring-red-500/20 focus:outline-none" placeholder="SUPPRIMER">
                <button @click="deleteAccount()" :disabled="deleteConfirm !== 'SUPPRIMER' || saving"
                        class="mt-3 px-5 py-2 rounded-lg text-sm font-semibold text-white bg-red-600 hover:bg-red-700 disabled:opacity-50 transition-colors">
                    Supprimer definitivement mon compte
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function settingsPage() {
    return {
        activeTab: 'account',
        saving: false,

        tabs: [
            { id: 'account',  label: 'Mon compte' },
            { id: 'portfolio', label: 'Mon portfolio' },
            { id: 'privacy',  label: 'Confidentialite' },
            { id: 'danger',   label: 'Danger Zone' },
        ],

        emailForm: { email: '', current_password: '' },
        passForm: { current_password: '', new_password: '', confirm_password: '' },

        slugForm: { slug: <?= json_encode($userSlug) ?> },
        slugStatus: '', // '', 'checking', 'available', 'taken'
        slugMessage: '',
        originalSlug: <?= json_encode($userSlug) ?>,

        visForm: {
            is_published: <?= ($profile['is_published'] ?? 1) ? 'true' : 'false' ?>,
            is_maintenance: <?= ($profile['is_maintenance'] ?? 0) ? 'true' : 'false' ?>,
            maintenance_message: <?= json_encode($profile['maintenance_message'] ?? '') ?>,
        },

        privacyForm: {
            indexable: <?= ($seo['robots'] ?? 'index') === 'index' ? 'true' : 'false' ?>,
        },

        resetConfirm: '',
        deleteConfirm: '',

        init() {},

        // --- Email ---
        async updateEmail() {
            if (!this.emailForm.email || !this.emailForm.current_password) {
                return showToast('Remplissez tous les champs', 'error');
            }
            this.saving = true;
            try {
                await apiCall('settings', 'PUT', { action: 'email', ...this.emailForm });
                showToast('Email mis a jour', 'success');
                this.emailForm = { email: '', current_password: '' };
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        // --- Password ---
        async updatePassword() {
            if (this.passForm.new_password !== this.passForm.confirm_password) {
                return showToast('Les mots de passe ne correspondent pas', 'error');
            }
            this.saving = true;
            try {
                await apiCall('settings', 'PUT', { action: 'password', ...this.passForm });
                showToast('Mot de passe change', 'success');
                this.passForm = { current_password: '', new_password: '', confirm_password: '' };
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        // --- Slug ---
        async checkSlug() {
            const slug = this.slugForm.slug.trim().toLowerCase();
            if (slug === this.originalSlug) { this.slugStatus = ''; return; }
            if (slug.length < 3) { this.slugStatus = slug.length > 0 ? 'taken' : ''; this.slugMessage = 'Minimum 3 caracteres'; return; }
            this.slugStatus = 'checking';
            try {
                const res = await fetch('/api/check-slug.php?slug=' + encodeURIComponent(slug));
                const json = await res.json();
                if (this.slugForm.slug.trim().toLowerCase() !== slug) return;
                this.slugStatus = json.success ? 'available' : 'taken';
                this.slugMessage = json.message;
            } catch { this.slugStatus = ''; }
        },

        async updateSlug() {
            this.saving = true;
            try {
                const res = await apiCall('settings', 'PUT', { action: 'slug', slug: this.slugForm.slug });
                this.originalSlug = res.data.slug;
                showToast('Sous-domaine mis a jour', 'success');
                this.slugStatus = '';
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        // --- Visibility ---
        async saveVisibility() {
            try {
                await apiCall('settings', 'PUT', { action: 'visibility', ...this.visForm });
                showToast('Parametres mis a jour', 'success');
            } catch (e) { showToast(e.message, 'error'); }
        },

        // --- Privacy ---
        async savePrivacy() {
            try {
                await apiCall('settings', 'PUT', {
                    action: 'privacy',
                    robots: this.privacyForm.indexable ? 'index' : 'noindex',
                });
                showToast('Confidentialite mise a jour', 'success');
            } catch (e) { showToast(e.message, 'error'); }
        },

        // --- Reset ---
        async resetContent() {
            this.saving = true;
            try {
                await apiCall('settings', 'POST', { action: 'reset_content', confirm: this.resetConfirm });
                this.resetConfirm = '';
                showToast('Contenu reinitialise', 'success');
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        // --- Delete ---
        async deleteAccount() {
            this.saving = true;
            try {
                await fetch('/api/settings.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-Token': CSRF_TOKEN, 'X-HTTP-Method-Override': 'DELETE' },
                    body: JSON.stringify({ confirm: this.deleteConfirm }),
                });
                window.location.href = '/auth/login.php';
            } catch (e) { showToast(e.message, 'error'); this.saving = false; }
        },
    };
}
</script>

<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>
