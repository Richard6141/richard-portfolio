<?php
// ============================================================
// Nom du fichier : dashboard/appearance.php
// Description    : Personnalisation de l'apparence du portfolio
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

$dashboardTitle = 'Apparence';
require_once __DIR__ . '/../includes/dashboard-layout.php';

$userId = getCurrentUserId();

// Charger les donnees
$stmt = $pdo->prepare("SELECT * FROM profiles WHERE user_id = ?");
$stmt->execute([$userId]);
$profile = $stmt->fetch();

$stmt = $pdo->prepare("SELECT * FROM appearance_config WHERE user_id = ?");
$stmt->execute([$userId]);
$appearance = $stmt->fetch();

// Nom pour le preview
$previewName = trim(($profile['first_name'] ?? '') . ' ' . ($profile['last_name'] ?? '')) ?: 'Votre Nom';
$previewTitle = $profile['profession'] ?? 'Votre Profession';
?>

<div x-data="appearancePage()" x-init="init()" class="flex flex-col xl:flex-row gap-6">

<!-- ============================================================ -->
<!-- LEFT: Tabs + forms                                           -->
<!-- ============================================================ -->
<div class="flex-1 min-w-0">

    <!-- Tabs navigation -->
    <div class="border-b border-gray-200 mb-6">
        <nav class="-mb-px flex gap-1 overflow-x-auto" aria-label="Tabs">
            <template x-for="tab in tabs" :key="tab.id">
                <button @click="activeTab = tab.id"
                        :class="activeTab === tab.id
                            ? 'border-blue-600 text-blue-600'
                            : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                        class="whitespace-nowrap border-b-2 py-3 px-3 text-sm font-medium transition-colors">
                    <span x-text="tab.label"></span>
                </button>
            </template>
        </nav>
    </div>

    <!-- ======== TEMPLATES ======== -->
    <div x-show="activeTab === 'templates_tab'" x-cloak>
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
            <h3 class="text-base font-semibold text-gray-900 font-heading mb-1">Choisir un template</h3>
            <p class="text-sm text-gray-500 mb-5">Le template change completement la structure et le design de votre portfolio.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <template x-for="t in templatesList" :key="t.id">
                    <button @click="applyTemplate(t.id)" type="button"
                            class="text-left rounded-xl border-2 overflow-hidden transition-all hover:shadow-lg"
                            :class="currentTemplate === t.id ? 'border-blue-600 ring-2 ring-blue-600/20' : 'border-gray-200 hover:border-gray-300'">
                        <!-- Preview miniature -->
                        <div class="h-40 relative overflow-hidden" :style="'background:' + t.preview_bg">
                            <div class="absolute inset-0 p-3" v-html="t.preview_html" x-html="t.preview_html"></div>
                        </div>
                        <div class="p-3">
                            <div class="flex items-center justify-between">
                                <p class="text-sm font-semibold text-gray-900" x-text="t.name"></p>
                                <span x-show="currentTemplate === t.id" class="text-xs font-bold text-blue-600">Actif</span>
                            </div>
                            <p class="text-xs text-gray-500 mt-0.5" x-text="t.desc"></p>
                        </div>
                    </button>
                </template>
            </div>
        </div>
    </div>

    <!-- ======== COULEURS ======== -->
    <div x-show="activeTab === 'colors'" x-cloak>
        <form @submit.prevent="saveColors()" class="space-y-6">
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-5">Palette de couleurs</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <template x-for="c in colorFields" :key="c.key">
                        <div>
                            <label :for="'color_' + c.key" class="block text-sm font-medium text-gray-700 mb-1.5" x-text="c.label"></label>
                            <div class="flex items-center gap-2">
                                <input type="color" :id="'color_' + c.key"
                                       :value="colors[c.key]" @input="colors[c.key] = $event.target.value"
                                       class="w-10 h-10 rounded-lg border border-gray-300 cursor-pointer p-0.5">
                                <input type="text" :value="colors[c.key]" @input="colors[c.key] = $event.target.value"
                                       maxlength="7" pattern="#[0-9a-fA-F]{6}"
                                       class="flex-1 rounded-lg border border-gray-300 px-3 py-2 text-sm font-mono text-gray-900 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none uppercase">
                            </div>
                        </div>
                    </template>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" :disabled="saving" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">
                    <svg x-show="saving" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
                    <span x-text="saving ? 'Enregistrement...' : 'Enregistrer les couleurs'"></span>
                </button>
            </div>
        </form>
    </div>

    <!-- ======== THEMES ======== -->
    <div x-show="activeTab === 'themes'" x-cloak>
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
            <h3 class="text-base font-semibold text-gray-900 font-heading mb-1">Themes predéfinis</h3>
            <p class="text-sm text-gray-500 mb-5">Cliquez sur un theme pour l'appliquer instantanement.</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3">
                <template x-for="(theme, id) in themes" :key="id">
                    <button @click="applyTheme(id)" type="button"
                            class="group relative rounded-xl overflow-hidden border-2 transition-all hover:shadow-lg"
                            :class="currentTheme === id ? 'border-blue-600 ring-2 ring-blue-600/20' : 'border-gray-200 hover:border-gray-300'">
                        <!-- Color preview -->
                        <div class="h-20 flex flex-col">
                            <div class="h-3" :style="'background:' + theme.header_bg"></div>
                            <div class="flex-1 flex items-center justify-center p-2" :style="'background:' + theme.bg">
                                <div class="w-full space-y-1">
                                    <div class="h-2 rounded-full w-3/4 mx-auto" :style="'background:' + theme.primary"></div>
                                    <div class="h-1.5 rounded-full w-1/2 mx-auto" :style="'background:' + theme.accent"></div>
                                    <div class="flex gap-1 justify-center mt-1">
                                        <div class="w-4 h-3 rounded" :style="'background:' + theme.card_bg + ';border:1px solid ' + theme.border"></div>
                                        <div class="w-4 h-3 rounded" :style="'background:' + theme.card_bg + ';border:1px solid ' + theme.border"></div>
                                        <div class="w-4 h-3 rounded" :style="'background:' + theme.card_bg + ';border:1px solid ' + theme.border"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-2.5" :style="'background:' + theme.footer_bg"></div>
                        </div>
                        <div class="px-2 py-2 text-center border-t border-gray-100">
                            <span class="text-xs font-medium text-gray-700" x-text="theme.name"></span>
                        </div>
                        <div x-show="currentTheme === id" class="absolute top-1 right-1 w-5 h-5 bg-blue-600 rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"/></svg>
                        </div>
                    </button>
                </template>
            </div>
        </div>
    </div>

    <!-- ======== TYPOGRAPHIE ======== -->
    <div x-show="activeTab === 'typography'" x-cloak>
        <form @submit.prevent="saveTypography()" class="space-y-6">
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-5">Polices</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Police des titres</label>
                        <select x-model="typo.font_heading" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                            <template x-for="f in fonts" :key="f">
                                <option :value="f" :style="'font-family:' + f" x-text="f"></option>
                            </template>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Police du corps</label>
                        <select x-model="typo.font_body" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                            <template x-for="f in fonts" :key="f">
                                <option :value="f" :style="'font-family:' + f" x-text="f"></option>
                            </template>
                        </select>
                    </div>
                </div>
                <!-- Font preview -->
                <div class="mt-5 p-5 rounded-xl bg-gray-50 border border-gray-100">
                    <p class="text-2xl font-bold mb-1" :style="'font-family:' + typo.font_heading" x-text="'<?= sanitize($previewName) ?>'"></p>
                    <p class="text-base" :style="'font-family:' + typo.font_body">
                        Voici un apercu de la police du corps de texte. Elle sera utilisee pour tous les paragraphes et descriptions de votre portfolio.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-5">Reglages</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Taille de base</label>
                        <div class="flex gap-2">
                            <template x-for="s in [{v:'sm',l:'S'},{v:'md',l:'M'},{v:'lg',l:'L'},{v:'xl',l:'XL'}]" :key="s.v">
                                <button type="button" @click="typo.font_size = s.v"
                                        :class="typo.font_size === s.v ? 'bg-blue-600 text-white border-blue-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-50'"
                                        class="flex-1 py-2 rounded-lg text-sm font-medium border transition-colors" x-text="s.l"></button>
                            </template>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Espacement lettres</label>
                        <div class="flex gap-2">
                            <template x-for="s in [{v:'tight',l:'Serre'},{v:'normal',l:'Normal'},{v:'wide',l:'Large'}]" :key="s.v">
                                <button type="button" @click="typo.letter_spacing = s.v"
                                        :class="typo.letter_spacing === s.v ? 'bg-blue-600 text-white border-blue-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-50'"
                                        class="flex-1 py-2 rounded-lg text-sm font-medium border transition-colors" x-text="s.l"></button>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" :disabled="saving" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">
                    <span x-text="saving ? 'Enregistrement...' : 'Enregistrer la typographie'"></span>
                </button>
            </div>
        </form>
    </div>

    <!-- ======== LAYOUT ======== -->
    <div x-show="activeTab === 'layout'" x-cloak>
        <form @submit.prevent="saveLayout()" class="space-y-6">
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-5">Style global</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3">
                    <template x-for="s in layoutStyles" :key="s.v">
                        <button type="button" @click="layout.layout_style = s.v"
                                :class="layout.layout_style === s.v ? 'border-blue-600 ring-2 ring-blue-600/20' : 'border-gray-200 hover:border-gray-300'"
                                class="p-4 rounded-xl border-2 text-center transition-all">
                            <div class="text-2xl mb-1" x-text="s.icon"></div>
                            <p class="text-xs font-semibold text-gray-700" x-text="s.l"></p>
                        </button>
                    </template>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Mode -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Mode</label>
                        <div class="flex gap-2">
                            <template x-for="s in [{v:'light',l:'Clair',i:'☀️'},{v:'dark',l:'Sombre',i:'🌙'},{v:'auto',l:'Auto',i:'💻'}]" :key="s.v">
                                <button type="button" @click="layout.dark_mode = s.v"
                                        :class="layout.dark_mode === s.v ? 'bg-blue-600 text-white border-blue-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-50'"
                                        class="flex-1 py-2.5 rounded-lg text-sm font-medium border transition-colors">
                                    <span x-text="s.i + ' ' + s.l"></span>
                                </button>
                            </template>
                        </div>
                    </div>
                    <!-- Coins -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Coins des elements</label>
                        <select x-model="layout.corner_style" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                            <option value="none">Aucun (0px)</option>
                            <option value="small">Petit (4px)</option>
                            <option value="medium">Moyen (8px)</option>
                            <option value="large">Grand (16px)</option>
                            <option value="round">Rond (full)</option>
                        </select>
                    </div>
                    <!-- Espacement -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Espacement des sections</label>
                        <div class="flex gap-2">
                            <template x-for="s in [{v:'compact',l:'Compact'},{v:'normal',l:'Normal'},{v:'large',l:'Large'}]" :key="s.v">
                                <button type="button" @click="layout.section_spacing = s.v"
                                        :class="layout.section_spacing === s.v ? 'bg-blue-600 text-white border-blue-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-50'"
                                        class="flex-1 py-2 rounded-lg text-sm font-medium border transition-colors" x-text="s.l"></button>
                            </template>
                        </div>
                    </div>
                    <!-- Largeur -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Largeur du contenu</label>
                        <div class="flex gap-2">
                            <template x-for="s in [{v:'narrow',l:'Etroit'},{v:'normal',l:'Normal'},{v:'wide',l:'Large'},{v:'full',l:'Plein'}]" :key="s.v">
                                <button type="button" @click="layout.content_width = s.v"
                                        :class="layout.content_width === s.v ? 'bg-blue-600 text-white border-blue-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-50'"
                                        class="flex-1 py-2 rounded-lg text-sm font-medium border transition-colors" x-text="s.l"></button>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" :disabled="saving" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">
                    <span x-text="saving ? 'Enregistrement...' : 'Enregistrer le layout'"></span>
                </button>
            </div>
        </form>
    </div>

    <!-- ======== HEADER ======== -->
    <div x-show="activeTab === 'header'" x-cloak>
        <form @submit.prevent="saveHeader()" class="space-y-6">
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-5">Style du header</h3>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-5">
                    <template x-for="s in [{v:'fixed',l:'Fixe en haut'},{v:'transparent',l:'Transparent'},{v:'sidebar',l:'Sidebar'},{v:'hidden',l:'Cache'}]" :key="s.v">
                        <button type="button" @click="header.header_style = s.v"
                                :class="header.header_style === s.v ? 'bg-blue-600 text-white border-blue-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-50'"
                                class="py-3 rounded-lg text-sm font-medium border transition-colors" x-text="s.l"></button>
                    </template>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Fond du header</label>
                        <select x-model="header.header_bg_style" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                            <option value="solid">Couleur solide</option>
                            <option value="transparent">Transparent</option>
                            <option value="glass">Glassmorphism</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Position logo</label>
                        <select x-model="header.header_logo_position" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                            <option value="left">Gauche</option>
                            <option value="center">Centre</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Texte du header</label>
                        <select x-model="header.header_text_color" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                            <option value="dark">Sombre</option>
                            <option value="light">Clair</option>
                            <option value="auto">Automatique</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-4">Elements visibles</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 mb-5">
                    <template x-for="t in headerToggles" :key="t.key">
                        <label class="flex items-center gap-2.5 p-3 rounded-xl bg-gray-50 cursor-pointer hover:bg-gray-100 transition-colors">
                            <input type="checkbox" x-model="header[t.key]" class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm text-gray-700" x-text="t.label"></span>
                        </label>
                    </template>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Texte du bouton CTA</label>
                        <input type="text" x-model="header.header_cta_text" maxlength="100"
                               class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none"
                               placeholder="Me contacter">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Lien du CTA</label>
                        <input type="text" x-model="header.header_cta_url" maxlength="500"
                               class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none"
                               placeholder="#contact">
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" :disabled="saving" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">
                    <span x-text="saving ? 'Enregistrement...' : 'Enregistrer le header'"></span>
                </button>
            </div>
        </form>
    </div>

    <!-- ======== FOOTER ======== -->
    <div x-show="activeTab === 'footer'" x-cloak>
        <form @submit.prevent="saveFooter()" class="space-y-6">
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-5">Configuration du footer</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Style de fond</label>
                        <select x-model="footer.footer_bg_style" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                            <option value="dark">Fond sombre</option>
                            <option value="light">Fond clair</option>
                            <option value="solid">Couleur solide</option>
                            <option value="gradient">Degrade</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Disposition</label>
                        <select x-model="footer.footer_layout" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                            <option value="centered">Centre</option>
                            <option value="columns">Colonnes</option>
                            <option value="minimal">Minimal</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Texte du copyright</label>
                    <input type="text" x-model="footer.footer_copyright_text" maxlength="255"
                           class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none"
                           placeholder="© 2025 Votre Nom">
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-4">Elements visibles</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                    <template x-for="t in footerToggles" :key="t.key">
                        <label class="flex items-center gap-2.5 p-3 rounded-xl bg-gray-50 cursor-pointer hover:bg-gray-100 transition-colors">
                            <input type="checkbox" x-model="footer[t.key]" class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm text-gray-700" x-text="t.label"></span>
                        </label>
                    </template>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" :disabled="saving" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">
                    <span x-text="saving ? 'Enregistrement...' : 'Enregistrer le footer'"></span>
                </button>
            </div>
        </form>
    </div>

    <!-- ======== ANIMATIONS ======== -->
    <div x-show="activeTab === 'animations'" x-cloak>
        <form @submit.prevent="saveAnimations()" class="space-y-6">
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <div class="flex items-center justify-between mb-5">
                    <h3 class="text-base font-semibold text-gray-900 font-heading">Animations au scroll</h3>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" x-model="anim.animations_enabled" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:bg-blue-600 peer-focus:ring-4 peer-focus:ring-blue-500/20 after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:after:translate-x-full"></div>
                    </label>
                </div>
                <div x-show="anim.animations_enabled" class="space-y-5">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Vitesse</label>
                            <div class="flex gap-2">
                                <template x-for="s in [{v:'slow',l:'Lente'},{v:'normal',l:'Normale'},{v:'fast',l:'Rapide'}]" :key="s.v">
                                    <button type="button" @click="anim.animation_speed = s.v"
                                            :class="anim.animation_speed === s.v ? 'bg-blue-600 text-white border-blue-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-50'"
                                            class="flex-1 py-2 rounded-lg text-sm font-medium border transition-colors" x-text="s.l"></button>
                                </template>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Style d'animation</label>
                            <div class="flex gap-2">
                                <template x-for="s in [{v:'fade',l:'Fade'},{v:'slide',l:'Slide'},{v:'scale',l:'Scale'},{v:'bounce',l:'Bounce'}]" :key="s.v">
                                    <button type="button" @click="anim.animation_style = s.v"
                                            :class="anim.animation_style === s.v ? 'bg-blue-600 text-white border-blue-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-50'"
                                            class="flex-1 py-2 rounded-lg text-xs font-medium border transition-colors" x-text="s.l"></button>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-4">Effets speciaux</h3>
                <div class="space-y-3">
                    <label class="flex items-center justify-between p-3 rounded-xl bg-gray-50 cursor-pointer hover:bg-gray-100 transition-colors">
                        <div>
                            <p class="text-sm font-medium text-gray-700">Typewriter sur le titre hero</p>
                            <p class="text-xs text-gray-500">Anime le titre lettre par lettre</p>
                        </div>
                        <input type="checkbox" x-model="anim.typewriter_enabled" class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                    </label>
                    <label class="flex items-center justify-between p-3 rounded-xl bg-gray-50 cursor-pointer hover:bg-gray-100 transition-colors">
                        <div>
                            <p class="text-sm font-medium text-gray-700">Compteur anime sur les stats</p>
                            <p class="text-xs text-gray-500">Les chiffres se comptent de 0 a la valeur</p>
                        </div>
                        <input type="checkbox" x-model="anim.counter_enabled" class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                    </label>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" :disabled="saving" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">
                    <span x-text="saving ? 'Enregistrement...' : 'Enregistrer les animations'"></span>
                </button>
            </div>
        </form>
    </div>

</div><!-- /LEFT -->

<!-- ============================================================ -->
<!-- RIGHT: Live preview                                          -->
<!-- ============================================================ -->
<div class="xl:w-80 2xl:w-96 shrink-0">
    <div class="sticky top-20">
        <h4 class="text-sm font-medium text-gray-500 mb-3">Apercu en direct</h4>
        <div class="rounded-2xl shadow-lg ring-1 ring-gray-900/10 overflow-hidden bg-white">
            <!-- Browser chrome -->
            <div class="flex items-center gap-1.5 px-3 py-2 bg-gray-100 border-b border-gray-200">
                <div class="w-2.5 h-2.5 rounded-full bg-red-400"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-amber-400"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-green-400"></div>
                <div class="flex-1 ml-2 px-2 py-0.5 rounded bg-white text-[9px] text-gray-400 truncate" x-text="'<?= BASE_DOMAIN ?>'"></div>
            </div>
            <!-- Preview content -->
            <div class="relative overflow-hidden" style="height: 480px;">
                <div class="absolute inset-0 overflow-y-auto" :style="previewStyle()">
                    <!-- Header -->
                    <div class="px-3 py-2 flex items-center justify-between text-[8px]" :style="'background:' + colors.header_bg + ';border-bottom:1px solid ' + colors.border_color">
                        <span class="font-bold" :style="'color:' + colors.color_primary + ';font-family:' + typo.font_heading" x-text="'<?= sanitize($previewName) ?>'"></span>
                        <div class="flex gap-1.5">
                            <span :style="'color:' + colors.text_color">A propos</span>
                            <span :style="'color:' + colors.text_color">Projets</span>
                            <span class="px-1.5 py-0.5 rounded text-white text-[7px]" :style="'background:' + colors.color_primary" x-text="header.header_cta_text || 'Contact'"></span>
                        </div>
                    </div>
                    <!-- Hero -->
                    <div class="px-4 py-8 text-center" :style="'background:' + colors.bg_color">
                        <div class="w-10 h-10 rounded-full mx-auto mb-2" :style="'background:' + colors.color_primary + '33'"></div>
                        <p class="text-sm font-bold mb-0.5" :style="'color:' + colors.text_color + ';font-family:' + typo.font_heading" x-text="'<?= sanitize($previewName) ?>'"></p>
                        <p class="text-[9px] mb-2" :style="'color:' + colors.color_primary + ';font-family:' + typo.font_body"><?= sanitize($previewTitle) ?></p>
                        <div class="flex gap-1 justify-center">
                            <span class="px-2 py-0.5 rounded text-white text-[7px]" :style="'background:' + colors.color_primary">Contact</span>
                            <span class="px-2 py-0.5 rounded text-[7px] border" :style="'color:' + colors.color_primary + ';border-color:' + colors.color_primary">CV</span>
                        </div>
                    </div>
                    <!-- Stats -->
                    <div class="grid grid-cols-4 gap-1 px-3 py-3" :style="'background:' + colors.bg_color">
                        <template x-for="i in 4" :key="i">
                            <div class="text-center p-1.5 rounded" :style="'background:' + colors.card_bg + ';border:1px solid ' + colors.border_color">
                                <p class="text-xs font-bold" :style="'color:' + colors.color_primary">5+</p>
                                <p class="text-[7px]" :style="'color:' + colors.text_color">Label</p>
                            </div>
                        </template>
                    </div>
                    <!-- Section -->
                    <div class="px-3 py-3" :style="'background:' + colors.bg_color">
                        <p class="text-[10px] font-bold mb-2 text-center" :style="'color:' + colors.text_color + ';font-family:' + typo.font_heading">Competences</p>
                        <div class="space-y-1.5">
                            <template x-for="w in [85, 70, 60]" :key="w">
                                <div>
                                    <div class="flex justify-between text-[7px] mb-0.5" :style="'color:' + colors.text_color">
                                        <span>Skill</span><span x-text="w + '%'"></span>
                                    </div>
                                    <div class="h-1 rounded-full" :style="'background:' + colors.border_color">
                                        <div class="h-1 rounded-full" :style="'background:' + colors.color_primary + ';width:' + w + '%'"></div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                    <!-- Projects -->
                    <div class="px-3 py-3" :style="'background:' + colors.bg_color">
                        <p class="text-[10px] font-bold mb-2 text-center" :style="'color:' + colors.text_color + ';font-family:' + typo.font_heading">Projets</p>
                        <div class="grid grid-cols-2 gap-1.5">
                            <template x-for="i in 4" :key="'proj'+i">
                                <div class="rounded overflow-hidden" :style="'background:' + colors.card_bg + ';border:1px solid ' + colors.border_color">
                                    <div class="h-8" :style="'background:' + colors.color_accent + '22'"></div>
                                    <div class="p-1.5">
                                        <div class="h-1 rounded mb-1" :style="'background:' + colors.text_color + ';width:60%'"></div>
                                        <div class="h-0.5 rounded" :style="'background:' + colors.border_color + ';width:80%'"></div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                    <!-- Footer -->
                    <div class="px-3 py-4 text-center" :style="'background:' + colors.footer_bg">
                        <p class="text-[8px] font-medium" :style="'color:' + getFooterTextColor()" x-text="'<?= sanitize($previewName) ?>'"></p>
                        <p class="text-[7px] mt-0.5" :style="'color:' + getFooterTextColor() + '99'">© <?= date('Y') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div><!-- /flex row -->

<script>
function appearancePage() {
    return {
        activeTab: 'templates_tab',
        saving: false,
        currentTheme: '',
        currentTemplate: <?= json_encode($profile['template'] ?? 'starter') ?>,

        templatesList: [
            {
                id: 'horizon', name: 'Horizon (refonte)', desc: 'Nouveau design : navy + emeraude, services en bento, anime',
                preview_bg: '#ffffff',
                preview_html: '<div><div style="padding:10px"><div style="height:5px;width:55%;background:#0f2460;border-radius:2px;margin-bottom:4px"></div><div style="height:3px;width:35%;background:#10b981;border-radius:2px;margin-bottom:8px"></div><div style="display:flex;gap:4px"><div style="width:34px;height:14px;background:#10b981;border-radius:3px"></div><div style="width:34px;height:14px;border:1px solid #e5e9f2;border-radius:3px"></div></div></div><div style="background:#0f2460;height:8px;margin:6px 0"></div><div style="padding:0 10px;display:grid;grid-template-columns:1fr 1fr 1fr;gap:3px"><div style="height:18px;background:#0f2460;border-radius:3px;grid-row:span 2"></div><div style="height:14px;background:#fff;border:1px solid #e5e9f2;border-radius:3px"></div><div style="height:14px;background:#fff;border:1px solid #e5e9f2;border-radius:3px"></div><div style="height:14px;background:#fff;border:1px solid #e5e9f2;border-radius:3px"></div><div style="height:14px;background:#fff;border:1px solid #e5e9f2;border-radius:3px"></div></div></div>',
            },
            {
                id: 'starter', name: 'Starter', desc: 'Design classique, sections empilees',
                preview_bg: '#f8fafc',
                preview_html: '<div style="text-align:center;padding-top:20px"><div style="width:24px;height:24px;border-radius:50%;background:#2563eb;margin:0 auto 6px"></div><div style="height:4px;width:50%;background:#1e293b;margin:0 auto 3px;border-radius:2px"></div><div style="height:3px;width:30%;background:#94a3b8;margin:0 auto 12px;border-radius:2px"></div><div style="display:flex;gap:4px;justify-content:center"><div style="width:30px;height:16px;background:#2563eb;border-radius:3px"></div><div style="width:30px;height:16px;border:1px solid #2563eb;border-radius:3px"></div></div></div>',
            },
            {
                id: 'developer', name: 'Developer', desc: 'Sidebar gauche avec infos, contenu a droite',
                preview_bg: '#f8fafc',
                preview_html: '<div style="display:flex;height:100%"><div style="width:35%;background:#2563eb;padding:8px"><div style="width:20px;height:20px;border-radius:50%;background:rgba(255,255,255,0.3);margin:0 auto 4px"></div><div style="height:2px;background:rgba(255,255,255,0.4);margin-bottom:2px"></div><div style="height:2px;width:70%;background:rgba(255,255,255,0.2);margin:0 auto 8px"></div><div style="height:3px;background:rgba(255,255,255,0.15);margin-bottom:3px;border-radius:1px"></div><div style="height:3px;width:80%;background:rgba(255,255,255,0.15);margin-bottom:3px;border-radius:1px"></div><div style="height:3px;width:60%;background:rgba(255,255,255,0.15);border-radius:1px"></div></div><div style="flex:1;padding:8px"><div style="height:4px;width:60%;background:#1e293b;margin-bottom:4px;border-radius:2px"></div><div style="height:2px;width:80%;background:#e2e8f0;margin-bottom:8px;border-radius:1px"></div><div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:3px"><div style="height:20px;background:#fff;border:1px solid #e2e8f0;border-radius:3px"></div><div style="height:20px;background:#fff;border:1px solid #e2e8f0;border-radius:3px"></div><div style="height:20px;background:#fff;border:1px solid #e2e8f0;border-radius:3px"></div></div></div></div>',
            },
            {
                id: 'creative', name: 'Creative', desc: 'Hero plein ecran, sections alternees, design epure',
                preview_bg: '#f8fafc',
                preview_html: '<div><div style="background:linear-gradient(135deg,#2563eb,#7c3aed);padding:12px;text-align:center"><div style="width:20px;height:20px;border-radius:50%;background:rgba(255,255,255,0.3);margin:0 auto 4px"></div><div style="height:4px;width:50%;background:#fff;margin:0 auto 3px;border-radius:2px"></div><div style="height:2px;width:30%;background:rgba(255,255,255,0.5);margin:0 auto;border-radius:2px"></div></div><div style="padding:6px"><div style="display:grid;grid-template-columns:1fr 1fr;gap:3px;margin-top:4px"><div style="height:12px;background:#fff;border:1px solid #e2e8f0;border-radius:3px"></div><div style="height:12px;background:#fff;border:1px solid #e2e8f0;border-radius:3px"></div></div></div></div>',
            },
        ],

        tabs: [
            { id: 'templates_tab', label: 'Templates' },
            { id: 'colors',     label: 'Couleurs' },
            { id: 'themes',     label: 'Themes' },
            { id: 'typography', label: 'Typographie' },
            { id: 'layout',     label: 'Layout' },
            { id: 'header',     label: 'Header' },
            { id: 'footer',     label: 'Footer' },
            { id: 'animations', label: 'Animations' },
        ],

        fonts: [
            'Inter','Poppins','Raleway','Montserrat','Playfair Display','Lora',
            'Roboto','Open Sans','Nunito','Josefin Sans','Space Grotesk',
            'DM Sans','Outfit','Sora','Manrope','Plus Jakarta Sans',
            'Merriweather','Source Serif 4','Bitter','Crimson Text',
        ],

        colorFields: [
            { key: 'color_primary',   label: 'Principale' },
            { key: 'color_secondary', label: 'Secondaire' },
            { key: 'color_accent',    label: 'Accent' },
            { key: 'bg_color',        label: 'Fond page' },
            { key: 'text_color',      label: 'Texte' },
            { key: 'header_bg',       label: 'Fond header' },
            { key: 'footer_bg',       label: 'Fond footer' },
            { key: 'card_bg',         label: 'Fond cards' },
            { key: 'border_color',    label: 'Bordures' },
        ],

        layoutStyles: [
            { v: 'minimal',   l: 'Minimal',   icon: '◻️' },
            { v: 'creative',  l: 'Creatif',   icon: '🎨' },
            { v: 'corporate', l: 'Corporate', icon: '🏢' },
            { v: 'bold',      l: 'Bold',      icon: '⚡' },
            { v: 'elegant',   l: 'Elegant',   icon: '✨' },
        ],

        headerToggles: [
            { key: 'header_show_logo',     label: 'Logo / initiales' },
            { key: 'header_show_name',     label: 'Nom' },
            { key: 'header_show_nav',      label: 'Navigation' },
            { key: 'header_show_cta',      label: 'Bouton CTA' },
            { key: 'header_show_cv',       label: 'Bouton CV' },
            { key: 'header_show_darkmode', label: 'Toggle sombre' },
        ],

        footerToggles: [
            { key: 'footer_show_name',      label: 'Nom' },
            { key: 'footer_show_title',     label: 'Titre / profession' },
            { key: 'footer_show_bio',       label: 'Bio courte' },
            { key: 'footer_show_social',    label: 'Reseaux sociaux' },
            { key: 'footer_show_copyright', label: 'Copyright' },
            { key: 'footer_show_credit',    label: 'Cree avec...' },
            { key: 'footer_show_nav',       label: 'Liens de navigation' },
        ],

        themes: <?= json_encode([
            'ocean'    => ['name'=>'Ocean Blue',      'primary'=>'#0369a1','secondary'=>'#0284c7','accent'=>'#06b6d4','bg'=>'#f0f9ff','text'=>'#0c4a6e','header_bg'=>'#ffffff','footer_bg'=>'#0c4a6e','card_bg'=>'#ffffff','border'=>'#bae6fd'],
            'forest'   => ['name'=>'Forest Green',    'primary'=>'#15803d','secondary'=>'#166534','accent'=>'#a16207','bg'=>'#f7fdf4','text'=>'#14532d','header_bg'=>'#ffffff','footer_bg'=>'#14532d','card_bg'=>'#ffffff','border'=>'#bbf7d0'],
            'sunset'   => ['name'=>'Sunset Orange',   'primary'=>'#ea580c','secondary'=>'#dc2626','accent'=>'#f59e0b','bg'=>'#fff7ed','text'=>'#431407','header_bg'=>'#ffffff','footer_bg'=>'#431407','card_bg'=>'#ffffff','border'=>'#fed7aa'],
            'purple'   => ['name'=>'Purple Night',    'primary'=>'#7c3aed','secondary'=>'#6d28d9','accent'=>'#a78bfa','bg'=>'#0f0b1a','text'=>'#e9e5f5','header_bg'=>'#1a1425','footer_bg'=>'#0a0710','card_bg'=>'#1a1425','border'=>'#2e2547'],
            'mono'     => ['name'=>'Monochrome',      'primary'=>'#171717','secondary'=>'#404040','accent'=>'#737373','bg'=>'#fafafa','text'=>'#171717','header_bg'=>'#ffffff','footer_bg'=>'#171717','card_bg'=>'#ffffff','border'=>'#e5e5e5'],
            'rosegold' => ['name'=>'Rose Gold',       'primary'=>'#be185d','secondary'=>'#9d174d','accent'=>'#d97706','bg'=>'#fdf2f8','text'=>'#4a044e','header_bg'=>'#ffffff','footer_bg'=>'#4a044e','card_bg'=>'#ffffff','border'=>'#fbcfe8'],
            'techdark' => ['name'=>'Tech Dark',       'primary'=>'#22c55e','secondary'=>'#16a34a','accent'=>'#4ade80','bg'=>'#09090b','text'=>'#d4d4d8','header_bg'=>'#18181b','footer_bg'=>'#09090b','card_bg'=>'#18181b','border'=>'#27272a'],
            'navy'     => ['name'=>'Corporate Navy',  'primary'=>'#1e3a5f','secondary'=>'#1e40af','accent'=>'#b45309','bg'=>'#f8fafc','text'=>'#0f172a','header_bg'=>'#ffffff','footer_bg'=>'#0f172a','card_bg'=>'#ffffff','border'=>'#cbd5e1'],
            'earth'    => ['name'=>'Warm Earth',      'primary'=>'#b45309','secondary'=>'#92400e','accent'=>'#d97706','bg'=>'#fffbeb','text'=>'#451a03','header_bg'=>'#ffffff','footer_bg'=>'#451a03','card_bg'=>'#ffffff','border'=>'#fde68a'],
            'candy'    => ['name'=>'Candy Pop',       'primary'=>'#ec4899','secondary'=>'#db2777','accent'=>'#eab308','bg'=>'#fdf2f8','text'=>'#500724','header_bg'=>'#ffffff','footer_bg'=>'#500724','card_bg'=>'#ffffff','border'=>'#fbcfe8'],
        ]) ?>,

        // Data
        colors: {
            color_primary:   <?= json_encode($profile['color_primary'] ?? '#2563eb') ?>,
            color_secondary: <?= json_encode($profile['color_secondary'] ?? '#1e40af') ?>,
            color_accent:    <?= json_encode($profile['color_accent'] ?? '#f59e0b') ?>,
            bg_color:        <?= json_encode($appearance['bg_color'] ?? '#ffffff') ?>,
            text_color:      <?= json_encode($appearance['text_color'] ?? '#1f2937') ?>,
            header_bg:       <?= json_encode($appearance['header_bg'] ?? '#ffffff') ?>,
            footer_bg:       <?= json_encode($appearance['footer_bg'] ?? '#111827') ?>,
            card_bg:         <?= json_encode($appearance['card_bg'] ?? '#ffffff') ?>,
            border_color:    <?= json_encode($appearance['border_color'] ?? '#e5e7eb') ?>,
        },

        typo: {
            font_heading:    <?= json_encode($profile['font_heading'] ?? 'Inter') ?>,
            font_body:       <?= json_encode($profile['font_body'] ?? 'Inter') ?>,
            font_size:       <?= json_encode($appearance['font_size'] ?? 'md') ?>,
            letter_spacing:  <?= json_encode($appearance['letter_spacing'] ?? 'normal') ?>,
        },

        layout: {
            layout_style:    <?= json_encode($profile['layout_style'] ?? 'minimal') ?>,
            dark_mode:       <?= json_encode($profile['dark_mode'] ?? 'light') ?>,
            corner_style:    <?= json_encode($profile['corner_style'] ?? 'medium') ?>,
            section_spacing: <?= json_encode($appearance['section_spacing'] ?? 'normal') ?>,
            content_width:   <?= json_encode($appearance['content_width'] ?? 'normal') ?>,
        },

        header: {
            header_style:         <?= json_encode($appearance['header_style'] ?? 'fixed') ?>,
            header_bg_style:      <?= json_encode($appearance['header_bg_style'] ?? 'solid') ?>,
            header_show_logo:     <?= ($appearance['header_show_logo'] ?? 1) ? 'true' : 'false' ?>,
            header_show_name:     <?= ($appearance['header_show_name'] ?? 1) ? 'true' : 'false' ?>,
            header_show_nav:      <?= ($appearance['header_show_nav'] ?? 1) ? 'true' : 'false' ?>,
            header_show_cta:      <?= ($appearance['header_show_cta'] ?? 1) ? 'true' : 'false' ?>,
            header_show_cv:       <?= ($appearance['header_show_cv'] ?? 1) ? 'true' : 'false' ?>,
            header_show_darkmode: <?= ($appearance['header_show_darkmode'] ?? 1) ? 'true' : 'false' ?>,
            header_cta_text:      <?= json_encode($appearance['header_cta_text'] ?? 'Me contacter') ?>,
            header_cta_url:       <?= json_encode($appearance['header_cta_url'] ?? '#contact') ?>,
            header_logo_position: <?= json_encode($appearance['header_logo_position'] ?? 'left') ?>,
            header_text_color:    <?= json_encode($appearance['header_text_color'] ?? 'auto') ?>,
        },

        footer: {
            footer_bg_style:      <?= json_encode($appearance['footer_bg_style'] ?? 'dark') ?>,
            footer_show_name:     <?= ($appearance['footer_show_name'] ?? 1) ? 'true' : 'false' ?>,
            footer_show_title:    <?= ($appearance['footer_show_title'] ?? 1) ? 'true' : 'false' ?>,
            footer_show_bio:      <?= ($appearance['footer_show_bio'] ?? 0) ? 'true' : 'false' ?>,
            footer_show_social:   <?= ($appearance['footer_show_social'] ?? 1) ? 'true' : 'false' ?>,
            footer_show_copyright:<?= ($appearance['footer_show_copyright'] ?? 1) ? 'true' : 'false' ?>,
            footer_show_credit:   <?= ($appearance['footer_show_credit'] ?? 1) ? 'true' : 'false' ?>,
            footer_show_nav:      <?= ($appearance['footer_show_nav'] ?? 0) ? 'true' : 'false' ?>,
            footer_copyright_text:<?= json_encode($appearance['footer_copyright_text'] ?? '') ?>,
            footer_layout:        <?= json_encode($appearance['footer_layout'] ?? 'centered') ?>,
        },

        anim: {
            animations_enabled: <?= ($appearance['animations_enabled'] ?? 1) ? 'true' : 'false' ?>,
            animation_speed:    <?= json_encode($appearance['animation_speed'] ?? 'normal') ?>,
            animation_style:    <?= json_encode($appearance['animation_style'] ?? 'fade') ?>,
            typewriter_enabled: <?= ($appearance['typewriter_enabled'] ?? 1) ? 'true' : 'false' ?>,
            counter_enabled:    <?= ($appearance['counter_enabled'] ?? 1) ? 'true' : 'false' ?>,
        },

        init() {
            // Charger les Google Fonts pour le preview
            this.$watch('typo.font_heading', (v) => this.loadFont(v));
            this.$watch('typo.font_body', (v) => this.loadFont(v));
            this.loadFont(this.typo.font_heading);
            this.loadFont(this.typo.font_body);
        },

        loadFont(name) {
            const id = 'gf-' + name.replace(/\s+/g, '-').toLowerCase();
            if (document.getElementById(id)) return;
            const link = document.createElement('link');
            link.id = id;
            link.rel = 'stylesheet';
            link.href = 'https://fonts.googleapis.com/css2?family=' + encodeURIComponent(name) + ':wght@400;600;700&display=swap';
            document.head.appendChild(link);
        },

        previewStyle() {
            return `font-family: ${this.typo.font_body}, sans-serif;`;
        },

        getFooterTextColor() {
            // Determine si le footer est sombre ou clair
            const hex = this.colors.footer_bg.replace('#', '');
            const r = parseInt(hex.substr(0, 2), 16);
            const g = parseInt(hex.substr(2, 2), 16);
            const b = parseInt(hex.substr(4, 2), 16);
            const lum = (0.299 * r + 0.587 * g + 0.114 * b) / 255;
            return lum > 0.5 ? '#1f2937' : '#f9fafb';
        },

        // -- Save methods --
        async saveColors() {
            this.saving = true;
            try {
                await apiCall('appearance', 'PUT', { section: 'colors', ...this.colors });
                showToast('Couleurs mises a jour', 'success');
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async applyTheme(id) {
            this.currentTheme = id;
            const t = this.themes[id];
            // Appliquer au preview instantanement
            this.colors.color_primary   = t.primary;
            this.colors.color_secondary = t.secondary;
            this.colors.color_accent    = t.accent;
            this.colors.bg_color        = t.bg;
            this.colors.text_color      = t.text;
            this.colors.header_bg       = t.header_bg;
            this.colors.footer_bg       = t.footer_bg;
            this.colors.card_bg         = t.card_bg;
            this.colors.border_color    = t.border;

            try {
                await apiCall('appearance', 'PUT', { section: 'theme', theme_id: id });
                showToast('Theme "' + t.name + '" applique', 'success');
            } catch (e) { showToast(e.message, 'error'); }
        },

        async saveTypography() {
            this.saving = true;
            try {
                await apiCall('appearance', 'PUT', { section: 'typography', ...this.typo });
                showToast('Typographie mise a jour', 'success');
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async saveLayout() {
            this.saving = true;
            try {
                await apiCall('appearance', 'PUT', { section: 'layout', ...this.layout });
                showToast('Layout mis a jour', 'success');
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async saveHeader() {
            this.saving = true;
            try {
                await apiCall('appearance', 'PUT', { section: 'header', ...this.header });
                showToast('Header mis a jour', 'success');
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async saveFooter() {
            this.saving = true;
            try {
                await apiCall('appearance', 'PUT', { section: 'footer', ...this.footer });
                showToast('Footer mis a jour', 'success');
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async saveAnimations() {
            this.saving = true;
            try {
                await apiCall('appearance', 'PUT', { section: 'animations', ...this.anim });
                showToast('Animations mises a jour', 'success');
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async applyTemplate(templateId) {
            this.currentTemplate = templateId;
            try {
                await apiCall('appearance', 'PUT', { section: 'template', template: templateId });
                showToast('Template "' + this.templatesList.find(t => t.id === templateId).name + '" applique !', 'success');
            } catch (e) { showToast(e.message, 'error'); }
        },
    };
}
</script>

<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>
