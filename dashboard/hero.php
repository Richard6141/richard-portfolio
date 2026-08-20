<?php
// ============================================================
// Nom du fichier : dashboard/hero.php
// Description    : Gestion de la section Hero (titres animés, CTAs, avatar)
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

$dashboardTitle = 'Section Hero';
require_once __DIR__ . '/../includes/dashboard-layout.php';

$userId = getCurrentUserId();

$stmt = $pdo->prepare("SELECT * FROM hero_sections WHERE user_id = ?");
$stmt->execute([$userId]);
$hero = $stmt->fetch();

$animatedTitles = json_decode($hero['title_animated'] ?? '[]', true) ?: [];
?>

<div x-data="heroPage()" x-init="init()">

    <div class="flex items-center justify-between mb-6">
        <p class="text-sm text-gray-500">Gérez les titres animés, les boutons d'action et la forme de votre avatar.</p>
        <button @click="save()" :disabled="saving"
                class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">
            <svg x-show="saving" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/>
            </svg>
            <span x-text="saving ? 'Enregistrement...' : 'Enregistrer'"></span>
        </button>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

        <!-- Colonne principale -->
        <div class="xl:col-span-2 space-y-6">

            <!-- Titres animés -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 mb-1">Titres animés <span class="text-sm font-normal text-gray-400">(typewriter)</span></h3>
                <p class="text-sm text-gray-500 mb-5">Ce sont les textes qui s'écrivent et changent sous votre nom dans la section hero. Ajoutez-en plusieurs pour créer l'effet de rotation.</p>

                <!-- Tags existants -->
                <div class="flex flex-wrap gap-2 mb-3 min-h-[2rem]">
                    <template x-for="(title, i) in titles" :key="i">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-blue-50 text-blue-700 text-sm font-medium">
                            <span x-text="title"></span>
                            <button @click="removeTitle(i)" type="button"
                                    class="p-0.5 rounded hover:bg-blue-100 text-blue-500 hover:text-blue-700 transition-colors">
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </span>
                    </template>
                    <span x-show="titles.length === 0" class="text-sm text-gray-400 italic">Aucun titre — votre profession sera affichée par défaut.</span>
                </div>

                <!-- Champ d'ajout -->
                <div class="flex gap-2">
                    <input type="text" x-model="newTitle"
                           @keydown.enter.prevent="addTitle()"
                           maxlength="80"
                           placeholder="Ex: Développeur Full Stack"
                           class="flex-1 rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                    <button @click="addTitle()" type="button"
                            class="px-4 py-2 rounded-lg text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 transition-colors">
                        Ajouter
                    </button>
                </div>
                <p class="mt-2 text-xs text-gray-400">Appuyez sur Entrée ou cliquez "Ajouter". L'effet typewriter nécessite au moins 1 titre.</p>
            </div>

            <!-- Boutons CTA -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 mb-5">Boutons d'action (CTA)</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- CTA Principal -->
                    <div class="space-y-3">
                        <p class="text-sm font-medium text-gray-700">Bouton principal</p>
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Texte</label>
                            <input type="text" x-model="form.cta_primary_text" maxlength="100"
                                   placeholder="Me contacter"
                                   class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">URL / Ancre</label>
                            <input type="text" x-model="form.cta_primary_url" maxlength="500"
                                   placeholder="#contact"
                                   class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm font-mono focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                        </div>
                    </div>
                    <!-- CTA Secondaire -->
                    <div class="space-y-3">
                        <p class="text-sm font-medium text-gray-700">Bouton secondaire</p>
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Texte</label>
                            <input type="text" x-model="form.cta_secondary_text" maxlength="100"
                                   placeholder="Voir mes projets"
                                   class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">URL / Ancre</label>
                            <input type="text" x-model="form.cta_secondary_url" maxlength="500"
                                   placeholder="#projects"
                                   class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm font-mono focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Forme de l'avatar -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 mb-5">Forme de la photo</h3>
                <div class="flex gap-4">
                    <template x-for="shape in avatarShapes" :key="shape.value">
                        <label class="cursor-pointer flex flex-col items-center gap-2">
                            <div class="w-16 h-16 bg-gray-100 overflow-hidden border-2 transition-colors"
                                 :class="[shape.class, form.avatar_shape === shape.value ? 'border-blue-500 ring-2 ring-blue-500/20' : 'border-transparent']">
                                <div class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600"></div>
                            </div>
                            <span class="text-xs text-gray-600" x-text="shape.label"></span>
                            <input type="radio" :value="shape.value" x-model="form.avatar_shape" class="sr-only">
                        </label>
                    </template>
                </div>
            </div>

        </div>

        <!-- Aperçu -->
        <div class="space-y-6">
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-5">
                <h4 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-4">Aperçu hero</h4>
                <div class="bg-gray-50 rounded-xl p-5 text-center space-y-3">
                    <!-- Avatar -->
                    <div class="flex justify-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 overflow-hidden"
                             :class="avatarShapes.find(s => s.value === form.avatar_shape)?.class || 'rounded-full'">
                        </div>
                    </div>
                    <!-- Nom -->
                    <div class="text-sm font-bold text-gray-800">Votre Nom</div>
                    <!-- Titre animé -->
                    <div class="text-xs text-blue-600 font-medium min-h-[1.25rem]">
                        <span x-show="titles.length > 0" x-text="titles[previewIdx] || titles[0]"></span>
                        <span x-show="titles.length === 0" class="text-gray-400 italic">Votre profession</span>
                    </div>
                    <!-- CTAs -->
                    <div class="flex gap-2 justify-center flex-wrap pt-1">
                        <span x-show="form.cta_primary_text"
                              x-text="form.cta_primary_text"
                              class="px-3 py-1 bg-blue-600 text-white text-xs rounded-lg"></span>
                        <span x-show="form.cta_secondary_text"
                              x-text="form.cta_secondary_text"
                              class="px-3 py-1 border border-gray-300 text-gray-600 text-xs rounded-lg"></span>
                    </div>
                </div>
            </div>

            <!-- Conseils -->
            <div class="bg-amber-50 rounded-2xl ring-1 ring-amber-200 p-5">
                <h4 class="text-xs font-semibold text-amber-700 uppercase tracking-wider mb-3">Conseils</h4>
                <ul class="space-y-2 text-xs text-amber-700">
                    <li>• Mettez <strong>2 à 4 titres</strong> pour un effet fluide</li>
                    <li>• Commencez par votre <strong>métier principal</strong></li>
                    <li>• Restez concis : <strong>max 5-6 mots</strong> par titre</li>
                    <li>• Ex: <em>"Développeur Full Stack"</em>, <em>"Freelance disponible"</em></li>
                </ul>
            </div>
        </div>

    </div>
</div>

<script>
function heroPage() {
    return {
        saving: false,
        newTitle: '',
        previewIdx: 0,
        previewInterval: null,

        titles: <?= json_encode($animatedTitles) ?>,

        form: {
            cta_primary_text:   <?= json_encode($hero['cta_primary_text']   ?? '') ?>,
            cta_primary_url:    <?= json_encode($hero['cta_primary_url']    ?? '#contact') ?>,
            cta_secondary_text: <?= json_encode($hero['cta_secondary_text'] ?? '') ?>,
            cta_secondary_url:  <?= json_encode($hero['cta_secondary_url']  ?? '#projects') ?>,
            avatar_shape:       <?= json_encode($hero['avatar_shape']       ?? 'circle') ?>,
        },

        avatarShapes: [
            { value: 'circle',  label: 'Cercle',    class: 'rounded-full' },
            { value: 'rounded', label: 'Arrondi',   class: 'rounded-2xl' },
            { value: 'hexagon', label: 'Hexagone',  class: 'rounded-lg' },
        ],

        init() {
            // Rotation de l'aperçu
            if (this.titles.length > 1) {
                this.previewInterval = setInterval(() => {
                    this.previewIdx = (this.previewIdx + 1) % this.titles.length;
                }, 2000);
            }
        },

        addTitle() {
            const t = this.newTitle.trim();
            if (t && !this.titles.includes(t) && this.titles.length < 8) {
                this.titles.push(t);
            }
            this.newTitle = '';
        },

        removeTitle(i) {
            this.titles.splice(i, 1);
            this.previewIdx = 0;
        },

        async save() {
            this.saving = true;
            try {
                await apiCall('hero', 'PUT', {
                    ...this.form,
                    title_animated: this.titles,
                });
                showToast('Section Hero mise à jour', 'success');
            } catch (e) {
                showToast(e.message, 'error');
            } finally {
                this.saving = false;
            }
        },
    };
}
</script>

<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>
