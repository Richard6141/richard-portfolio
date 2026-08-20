<?php
// ============================================================
// Nom du fichier : dashboard/seo.php
// Description    : Configuration SEO du portfolio
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

$dashboardTitle = 'SEO';
require_once __DIR__ . '/../includes/dashboard-layout.php';

$userId = getCurrentUserId();
$stmt = $pdo->prepare("SELECT * FROM seo_config WHERE user_id = ?");
$stmt->execute([$userId]);
$seo = $stmt->fetch();
?>

<div x-data="seoPage()" x-init="init()">

    <div class="flex items-center justify-between mb-6">
        <p class="text-sm text-gray-500">Optimisez le referencement de votre portfolio.</p>
        <button @click="save()" :disabled="saving" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">
            <svg x-show="saving" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
            <span x-text="saving ? '...' : 'Enregistrer'"></span>
        </button>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
        <!-- Main -->
        <div class="xl:col-span-2 space-y-6">

            <!-- Meta tags -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-5">Balises Meta</h3>
                <div class="space-y-5">
                    <div>
                        <label class="flex items-center justify-between text-sm font-medium text-gray-700 mb-1">
                            <span>Meta Title</span>
                            <span class="text-xs font-normal" :class="form.meta_title.length > 55 ? 'text-red-500' : form.meta_title.length > 45 ? 'text-amber-600' : 'text-gray-400'"
                                  x-text="form.meta_title.length + ' / 60'"></span>
                        </label>
                        <input type="text" x-model="form.meta_title" maxlength="60" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Votre Nom — Votre Metier">
                        <div class="mt-1.5 h-1.5 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full rounded-full transition-all" :class="form.meta_title.length > 55 ? 'bg-red-500' : form.meta_title.length > 45 ? 'bg-amber-500' : 'bg-green-500'" :style="'width:' + Math.min(100, form.meta_title.length / 60 * 100) + '%'"></div>
                        </div>
                    </div>

                    <div>
                        <label class="flex items-center justify-between text-sm font-medium text-gray-700 mb-1">
                            <span>Meta Description</span>
                            <span class="text-xs font-normal" :class="form.meta_description.length > 150 ? 'text-red-500' : form.meta_description.length > 120 ? 'text-amber-600' : 'text-gray-400'"
                                  x-text="form.meta_description.length + ' / 160'"></span>
                        </label>
                        <textarea x-model="form.meta_description" maxlength="160" rows="3" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none resize-none" placeholder="Description de votre portfolio pour les moteurs de recherche..."></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Mots-cles</label>
                        <div class="flex flex-wrap gap-1.5 mb-2">
                            <template x-for="(kw, i) in keywords" :key="i">
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-lg bg-gray-100 text-gray-700 text-sm">
                                    <span x-text="kw"></span>
                                    <button @click="keywords.splice(i, 1)" class="p-0.5 rounded hover:bg-gray-200"><svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg></button>
                                </span>
                            </template>
                        </div>
                        <div class="flex gap-2">
                            <input type="text" x-model="newKeyword" @keydown.enter.prevent="addKeyword()" class="flex-1 rounded-lg border border-gray-300 px-3 py-1.5 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Ajouter un mot-cle...">
                            <button @click="addKeyword()" type="button" class="px-3 py-1.5 rounded-lg text-sm text-blue-600 bg-blue-50 hover:bg-blue-100">+</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Open Graph -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-5">Open Graph (reseaux sociaux)</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">OG Title</label>
                        <input type="text" x-model="form.og_title" maxlength="100" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Titre affiche sur les reseaux sociaux">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">OG Description</label>
                        <textarea x-model="form.og_description" maxlength="200" rows="2" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none resize-none" placeholder="Description pour le partage social"></textarea>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Twitter Card</label>
                            <select x-model="form.twitter_card" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                                <option value="summary_large_image">Grande image</option>
                                <option value="summary">Resume</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Google Analytics ID</label>
                            <input type="text" x-model="form.google_analytics_id" maxlength="50" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm font-mono focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="G-XXXXXXXX">
                        </div>
                    </div>

                    <!-- Google Search Console -->
                    <div class="pt-4 border-t border-gray-100">
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Google Search Console — Code de vérification
                            <span class="text-xs font-normal text-gray-400 ml-1">(valeur de content="...")</span>
                        </label>
                        <input type="text" x-model="form.google_site_verification" maxlength="100"
                               class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm font-mono focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none"
                               placeholder="XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX">
                        <p class="mt-1.5 text-xs text-gray-400">Dans Google Search Console → Ajouter une propriété → Balise HTML → copier uniquement la valeur du champ <code class="bg-gray-100 px-1 rounded">content</code>.</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Indexation</label>
                        <select x-model="form.robots" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                            <option value="index">Indexer (visible sur Google)</option>
                            <option value="noindex">Ne pas indexer (cache de Google)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Preview sidebar -->
        <div class="space-y-6">
            <!-- Google preview -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-5">
                <h4 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Apercu Google</h4>
                <div class="p-4 rounded-xl bg-gray-50 border border-gray-100">
                    <p class="text-sm text-blue-800 hover:underline cursor-pointer truncate" x-text="form.meta_title || 'Titre de votre portfolio'"></p>
                    <p class="text-xs text-green-700 mt-0.5 truncate" x-text="'https://<?= BASE_DOMAIN ?>'"></p>
                    <p class="text-xs text-gray-600 mt-1 line-clamp-2" x-text="form.meta_description || 'Description de votre portfolio...'"></p>
                </div>
            </div>

            <!-- Social preview -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-5">
                <h4 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Apercu reseaux sociaux</h4>
                <div class="rounded-xl border border-gray-200 overflow-hidden">
                    <div class="aspect-video bg-gray-100 flex items-center justify-center text-gray-300 text-xs">
                        Image OG
                    </div>
                    <div class="p-3 bg-gray-50">
                        <p class="text-[10px] text-gray-400 uppercase"><?= BASE_DOMAIN ?></p>
                        <p class="text-sm font-semibold text-gray-900 truncate mt-0.5" x-text="form.og_title || form.meta_title || 'Titre'"></p>
                        <p class="text-xs text-gray-500 line-clamp-2 mt-0.5" x-text="form.og_description || form.meta_description || 'Description...'"></p>
                    </div>
                </div>
            </div>

            <!-- Indexation status -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-5">
                <h4 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Statut</h4>
                <div class="flex items-center gap-3 p-3 rounded-xl" :class="form.robots === 'index' ? 'bg-green-50' : 'bg-red-50'">
                    <div class="w-3 h-3 rounded-full" :class="form.robots === 'index' ? 'bg-green-500' : 'bg-red-500'"></div>
                    <div>
                        <p class="text-sm font-medium" :class="form.robots === 'index' ? 'text-green-700' : 'text-red-700'" x-text="form.robots === 'index' ? 'Indexe' : 'Non indexe'"></p>
                        <p class="text-xs" :class="form.robots === 'index' ? 'text-green-600' : 'text-red-600'" x-text="form.robots === 'index' ? 'Votre portfolio apparaitra dans les resultats Google.' : 'Votre portfolio est cache des moteurs de recherche.'"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function seoPage() {
    return {
        saving: false,
        newKeyword: '',
        keywords: <?= json_encode($seo['meta_keywords'] ? explode(',', $seo['meta_keywords']) : []) ?>.map(k => k.trim()).filter(k => k),
        form: {
            meta_title: <?= json_encode($seo['meta_title'] ?? '') ?>,
            meta_description: <?= json_encode($seo['meta_description'] ?? '') ?>,
            og_title: <?= json_encode($seo['og_title'] ?? '') ?>,
            og_description: <?= json_encode($seo['og_description'] ?? '') ?>,
            twitter_card: <?= json_encode($seo['twitter_card'] ?? 'summary_large_image') ?>,
            google_analytics_id: <?= json_encode($seo['google_analytics_id'] ?? '') ?>,
            google_site_verification: <?= json_encode($seo['google_site_verification'] ?? '') ?>,
            robots: <?= json_encode($seo['robots'] ?? 'index') ?>,
        },

        init() {},

        addKeyword() {
            const kw = this.newKeyword.trim();
            if (kw && !this.keywords.includes(kw)) this.keywords.push(kw);
            this.newKeyword = '';
        },

        async save() {
            this.saving = true;
            try {
                await apiCall('seo', 'PUT', {
                    ...this.form,
                    meta_keywords: this.keywords.join(', '),
                });
                showToast('SEO mis a jour', 'success');
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },
    };
}
</script>

<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>
