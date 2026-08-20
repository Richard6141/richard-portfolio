<?php
// ============================================================
// Nom du fichier : dashboard/contact.php
// Description    : Gestion des coordonnees et formulaire de contact
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

$dashboardTitle = 'Contact';
require_once __DIR__ . '/../includes/dashboard-layout.php';

$userId = getCurrentUserId();
$stmt = $pdo->prepare("SELECT * FROM contact_info WHERE user_id = ?");
$stmt->execute([$userId]);
$contact = $stmt->fetch();
if (!$contact) {
    $pdo->prepare("INSERT INTO contact_info (user_id) VALUES (?)")->execute([$userId]);
    $stmt->execute([$userId]);
    $contact = $stmt->fetch();
}
?>

<div x-data="contactPage()" x-init="init()">

    <div class="flex items-center justify-between mb-6">
        <p class="text-sm text-gray-500">Vos coordonnees publiques et parametres du formulaire de contact.</p>
        <button @click="save()" :disabled="saving" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">
            <svg x-show="saving" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
            <span x-text="saving ? 'Enregistrement...' : 'Enregistrer'"></span>
        </button>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">

        <!-- BLOC: Coordonnees -->
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
            <h3 class="text-base font-semibold text-gray-900 font-heading mb-5">
                <svg class="w-5 h-5 inline text-blue-600 mr-1" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                Coordonnees publiques
            </h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email public</label>
                    <input type="email" x-model="form.email_public" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="contact@votrenom.dev">
                    <p class="text-xs text-gray-400 mt-1">Peut etre different de votre email de compte.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Telephone</label>
                        <input type="tel" x-model="form.phone" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="+33 6 12 34 56 78">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">WhatsApp</label>
                        <input type="tel" x-model="form.whatsapp" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="+33612345678">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
                    <input type="text" x-model="form.address" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="12 Rue de la Paix">
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Ville</label>
                        <input type="text" x-model="form.city" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Lyon">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Pays</label>
                        <input type="text" x-model="form.country" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="France">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Lien Google Maps</label>
                    <input type="url" x-model="form.google_maps_url" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://maps.google.com/...">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Lien Calendly</label>
                    <input type="url" x-model="form.calendly_url" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://calendly.com/votrenom">
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Horaires</label>
                        <input type="text" x-model="form.availability_hours" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Lun-Ven 9h-18h">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Delai de reponse</label>
                        <input type="text" x-model="form.response_time" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Reponse sous 24h">
                    </div>
                </div>
            </div>
        </div>

        <!-- BLOC: Formulaire de contact -->
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
            <div class="flex items-center justify-between mb-5">
                <h3 class="text-base font-semibold text-gray-900 font-heading">
                    <svg class="w-5 h-5 inline text-blue-600 mr-1" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                    Formulaire de contact
                </h3>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" x-model="form.form_enabled" class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:bg-blue-600 peer-focus:ring-4 peer-focus:ring-blue-500/20 after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:after:translate-x-full"></div>
                </label>
            </div>

            <div x-show="form.form_enabled" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email de reception</label>
                    <input type="email" x-model="form.form_email" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="votre@email.com">
                    <p class="text-xs text-gray-400 mt-1">Les messages du formulaire seront envoyes a cette adresse.</p>
                </div>

                <!-- Preview du formulaire -->
                <div class="mt-6 pt-5 border-t border-gray-200">
                    <p class="text-xs font-medium text-gray-400 uppercase tracking-wider mb-3">Apercu du formulaire</p>
                    <div class="space-y-3 p-4 rounded-xl bg-gray-50 border border-gray-100">
                        <div class="grid grid-cols-2 gap-3">
                            <div>
                                <div class="h-2 w-8 bg-gray-300 rounded mb-1.5"></div>
                                <div class="h-8 bg-white rounded-lg border border-gray-200"></div>
                            </div>
                            <div>
                                <div class="h-2 w-8 bg-gray-300 rounded mb-1.5"></div>
                                <div class="h-8 bg-white rounded-lg border border-gray-200"></div>
                            </div>
                        </div>
                        <div>
                            <div class="h-2 w-8 bg-gray-300 rounded mb-1.5"></div>
                            <div class="h-8 bg-white rounded-lg border border-gray-200"></div>
                        </div>
                        <div>
                            <div class="h-2 w-12 bg-gray-300 rounded mb-1.5"></div>
                            <div class="h-20 bg-white rounded-lg border border-gray-200"></div>
                        </div>
                        <div class="h-9 bg-blue-600 rounded-lg flex items-center justify-center">
                            <span class="text-xs text-white font-medium">Envoyer le message</span>
                        </div>
                    </div>
                </div>
            </div>

            <div x-show="!form.form_enabled" class="py-8 text-center text-gray-400">
                <svg class="w-12 h-12 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                <p class="text-sm">Le formulaire de contact est desactive.</p>
                <p class="text-xs mt-1">Activez-le pour permettre aux visiteurs de vous envoyer des messages.</p>
            </div>
        </div>

    </div>
</div>

<script>
function contactPage() {
    return {
        saving: false,
        form: {
            email_public: <?= json_encode($contact['email_public'] ?? '') ?>,
            phone: <?= json_encode($contact['phone'] ?? '') ?>,
            whatsapp: <?= json_encode($contact['whatsapp'] ?? '') ?>,
            address: <?= json_encode($contact['address'] ?? '') ?>,
            city: <?= json_encode($contact['city'] ?? '') ?>,
            country: <?= json_encode($contact['country'] ?? '') ?>,
            google_maps_url: <?= json_encode($contact['google_maps_url'] ?? '') ?>,
            calendly_url: <?= json_encode($contact['calendly_url'] ?? '') ?>,
            availability_hours: <?= json_encode($contact['availability_hours'] ?? '') ?>,
            response_time: <?= json_encode($contact['response_time'] ?? '') ?>,
            form_enabled: <?= ($contact['form_enabled'] ?? 1) ? 'true' : 'false' ?>,
            form_email: <?= json_encode($contact['form_email'] ?? '') ?>,
        },

        init() {},

        async save() {
            this.saving = true;
            try {
                await apiCall('contact', 'PUT', this.form);
                showToast('Coordonnees enregistrees', 'success');
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },
    };
}
</script>

<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>
