<?php
// ============================================================
// Nom du fichier : dashboard/services.php
// Description    : Gestion des services proposes
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

$dashboardTitle = 'Services';
require_once __DIR__ . '/../includes/dashboard-layout.php';
?>

<div x-data="servicesPage()" x-init="init()">

    <div class="flex items-center justify-between mb-6">
        <p class="text-sm text-gray-500">Presentez les services que vous proposez.</p>
        <button @click="openForm()" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 transition-colors">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
            Ajouter
        </button>
    </div>

    <div x-show="loading" class="flex justify-center py-12">
        <svg class="w-8 h-8 animate-spin text-blue-600" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
    </div>

    <!-- Empty state -->
    <template x-if="!loading && items.length === 0">
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-12 text-center">
            <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.048.58.024 1.194-.14 1.743Z"/></svg>
            <h3 class="text-lg font-semibold text-gray-900 mb-1">Aucun service</h3>
            <p class="text-sm text-gray-500 mb-4">Decrivez les services que vous proposez a vos clients.</p>
            <button @click="openForm()" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 transition-colors">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                Ajouter un service
            </button>
        </div>
    </template>

    <!-- Grid de cards -->
    <div x-show="!loading && items.length > 0" id="services-list" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">
        <template x-for="item in items" :key="item.id">
            <div :data-id="item.id" class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 overflow-hidden hover:shadow-md transition-shadow group relative">
                <!-- Featured badge -->
                <div x-show="item.is_featured" class="absolute top-3 right-3 z-10">
                    <span class="px-2 py-0.5 rounded-full bg-amber-100 text-amber-700 text-[10px] font-bold uppercase tracking-wide">Populaire</span>
                </div>

                <!-- Drag handle -->
                <div class="absolute top-3 left-3 z-10 cursor-grab active:cursor-grabbing text-gray-300 hover:text-gray-500 drag-handle opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M7 2a2 2 0 10.001 4.001A2 2 0 007 2zm0 6a2 2 0 10.001 4.001A2 2 0 007 8zm0 6a2 2 0 10.001 4.001A2 2 0 007 14zm6-8a2 2 0 10-.001-4.001A2 2 0 0013 6zm0 2a2 2 0 10.001 4.001A2 2 0 0013 8zm0 6a2 2 0 10.001 4.001A2 2 0 0013 14z"/></svg>
                </div>

                <div class="p-5">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mb-4 text-2xl">
                        <span x-text="item.icon || '🔧'"></span>
                    </div>

                    <!-- Title + Price -->
                    <h3 class="text-base font-semibold text-gray-900 mb-1" x-text="item.title"></h3>
                    <p x-show="item.price" class="text-sm font-medium text-blue-600 mb-2" x-text="item.price"></p>

                    <!-- Description -->
                    <p x-show="item.description" class="text-sm text-gray-500 mb-3 line-clamp-2" x-text="item.description"></p>

                    <!-- Features -->
                    <ul x-show="item.features && item.features.length > 0" class="space-y-1 mb-4">
                        <template x-for="(f, i) in (item.features || []).slice(0, 4)" :key="i">
                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"/></svg>
                                <span x-text="f"></span>
                            </li>
                        </template>
                        <li x-show="item.features && item.features.length > 4" class="text-xs text-gray-400 pl-6" x-text="'+ ' + (item.features.length - 4) + ' autres'"></li>
                    </ul>

                    <!-- CTA -->
                    <div x-show="item.cta_text" class="mt-auto">
                        <span class="inline-block px-4 py-2 rounded-lg text-sm font-medium text-blue-600 bg-blue-50 w-full text-center" x-text="item.cta_text"></span>
                    </div>
                </div>

                <!-- Actions bar -->
                <div class="flex border-t border-gray-100 divide-x divide-gray-100 opacity-0 group-hover:opacity-100 transition-opacity">
                    <button @click="openForm(item)" class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-xs font-medium text-gray-500 hover:text-blue-600 hover:bg-blue-50 transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Z"/></svg>
                        Modifier
                    </button>
                    <button @click="duplicate(item)" class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-xs font-medium text-gray-500 hover:text-green-600 hover:bg-green-50 transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75"/></svg>
                        Dupliquer
                    </button>
                    <button @click="remove(item.id)" class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-xs font-medium text-gray-500 hover:text-red-600 hover:bg-red-50 transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/></svg>
                        Supprimer
                    </button>
                </div>
            </div>
        </template>
    </div>

    <!-- ============================================================ -->
    <!-- MODAL formulaire                                             -->
    <!-- ============================================================ -->
    <div x-show="formOpen" x-cloak class="fixed inset-0 z-[80] flex items-start justify-center overflow-y-auto p-4 pt-8 pb-10">
        <div class="absolute inset-0 bg-gray-900/60" @click="formOpen = false" x-transition.opacity></div>

        <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-3xl z-10" x-transition @click.outside="formOpen = false">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900 font-heading" x-text="editing ? 'Modifier le service' : 'Ajouter un service'"></h2>
                <button @click="formOpen = false" class="p-1 rounded-lg text-gray-400 hover:text-gray-600 hover:bg-gray-100">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <div class="flex flex-col lg:flex-row">
                <!-- Form fields -->
                <div class="flex-1 px-6 py-5 space-y-5 max-h-[70vh] overflow-y-auto border-r border-gray-100">
                    <!-- Titre -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Titre du service <span class="text-red-500">*</span></label>
                        <input type="text" x-model="form.title" required maxlength="255" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Developpement Web Sur Mesure">
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea x-model="form.description" rows="3" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none resize-none" placeholder="Decrivez ce service en quelques phrases..."></textarea>
                    </div>

                    <!-- Icone -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Icone</label>
                        <div class="flex flex-wrap gap-2 p-3 rounded-xl bg-gray-50 border border-gray-100 mb-2">
                            <template x-for="e in emojis" :key="e">
                                <button type="button" @click="form.icon = e"
                                        :class="form.icon === e ? 'ring-2 ring-blue-500 bg-white shadow-sm' : 'hover:bg-white'"
                                        class="w-9 h-9 rounded-lg flex items-center justify-center text-xl transition-all cursor-pointer" x-text="e"></button>
                            </template>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-sm text-gray-500">Ou saisir :</span>
                            <input type="text" x-model="form.icon" maxlength="10" class="w-20 rounded-lg border border-gray-300 px-2 py-1 text-center text-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                        </div>
                    </div>

                    <!-- Prix -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Prix indicatif</label>
                        <input type="text" x-model="form.price" maxlength="100" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="A partir de 500 EUR">
                    </div>

                    <!-- Fonctionnalites -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Fonctionnalites incluses</label>
                        <div class="space-y-2">
                            <template x-for="(f, i) in form.features" :key="i">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"/></svg>
                                    <input type="text" x-model="form.features[i]" class="flex-1 rounded-lg border border-gray-300 px-3 py-1.5 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Fonctionnalite...">
                                    <button type="button" @click="form.features.splice(i, 1)" class="p-1 text-gray-400 hover:text-red-500">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg>
                                    </button>
                                </div>
                            </template>
                        </div>
                        <button type="button" @click="form.features.push('')" class="mt-2 inline-flex items-center gap-1 text-sm text-blue-600 hover:text-blue-700 font-medium">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                            Ajouter
                        </button>
                    </div>

                    <!-- Contenu detaille (SEO) -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Contenu detaille <span class="text-gray-400 font-normal">(SEO, accepte le HTML)</span></label>
                        <p class="text-xs text-gray-500 mb-2">Texte long et unique de la page (methode, livrables, FAQ...). C'est ce contenu qui fait indexer et remonter la page sur Google. Collez ici le HTML fourni. Une section titree "Questions frequentes" genere automatiquement un balisage FAQ.</p>
                        <textarea x-model="form.content_html" rows="12" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm font-mono focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="&lt;h2&gt;Titre de section&lt;/h2&gt;&#10;&lt;p&gt;Paragraphe...&lt;/p&gt;"></textarea>
                        <p class="text-xs text-gray-400 mt-1" x-show="form.content_html" x-text="'Environ ' + form.content_html.replace(/<[^>]+>/g,' ').split(/\s+/).filter(Boolean).length + ' mots'"></p>
                    </div>

                    <!-- CTA -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Texte du bouton</label>
                            <input type="text" x-model="form.cta_text" maxlength="100" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Me contacter">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Lien du bouton</label>
                            <input type="text" x-model="form.cta_url" maxlength="500" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="#contact">
                        </div>
                    </div>

                    <!-- Featured -->
                    <label class="flex items-center justify-between p-3 rounded-xl bg-gray-50 cursor-pointer hover:bg-gray-100 transition-colors">
                        <div>
                            <p class="text-sm font-medium text-gray-700">Mettre en avant</p>
                            <p class="text-xs text-gray-500">Ajoute un badge "Populaire" sur cette card</p>
                        </div>
                        <input type="checkbox" x-model="form.is_featured" class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                    </label>
                </div>

                <!-- Live preview -->
                <div class="w-full lg:w-72 xl:w-80 shrink-0 p-5 bg-gray-50">
                    <p class="text-xs font-medium text-gray-400 uppercase tracking-wider mb-3">Apercu</p>
                    <div class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 overflow-hidden">
                        <!-- Featured badge -->
                        <div x-show="form.is_featured" class="px-4 pt-3 flex justify-end">
                            <span class="px-2 py-0.5 rounded-full bg-amber-100 text-amber-700 text-[10px] font-bold uppercase tracking-wide">Populaire</span>
                        </div>

                        <div class="p-5" :class="form.is_featured ? '' : 'pt-5'">
                            <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mb-3 text-2xl">
                                <span x-text="form.icon || '🔧'"></span>
                            </div>
                            <h4 class="text-sm font-semibold text-gray-900 mb-0.5" x-text="form.title || 'Titre du service'"></h4>
                            <p x-show="form.price" class="text-xs font-medium text-blue-600 mb-2" x-text="form.price"></p>
                            <p class="text-xs text-gray-500 mb-3 line-clamp-3" x-text="form.description || 'Description du service...'"></p>

                            <ul class="space-y-1 mb-3">
                                <template x-for="(f, i) in form.features.filter(f => f.trim())" :key="'pf'+i">
                                    <li class="flex items-start gap-1.5 text-xs text-gray-600">
                                        <svg class="w-3.5 h-3.5 text-green-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"/></svg>
                                        <span x-text="f"></span>
                                    </li>
                                </template>
                            </ul>

                            <div x-show="form.cta_text">
                                <span class="block px-3 py-1.5 rounded-lg text-xs font-medium text-center text-white bg-blue-600" x-text="form.cta_text || 'CTA'"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200">
                <button @click="formOpen = false" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">Annuler</button>
                <button @click="save()" :disabled="saving" class="inline-flex items-center gap-2 px-5 py-2 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">
                    <svg x-show="saving" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
                    <span x-text="saving ? 'Enregistrement...' : (editing ? 'Mettre a jour' : 'Ajouter')"></span>
                </button>
            </div>
        </div>
    </div>

</div>

<script>
function servicesPage() {
    return {
        items: [],
        loading: true,
        saving: false,
        formOpen: false,
        editing: false,
        editingId: null,

        emojis: ['💻','🌐','📱','🎨','🔧','🚀','📊','🔒','📦','⚡','🛠️','📝','🎯','💡','🤝','📈','🔍','☁️','🗄️','🧩'],

        form: {
            title: '', description: '', icon: '💻', price: '',
            features: [], content_html: '', cta_text: 'Me contacter', cta_url: '#contact',
            is_featured: false,
        },

        emptyForm() {
            return {
                title: '', description: '', icon: '💻', price: '',
                features: [], content_html: '', cta_text: 'Me contacter', cta_url: '#contact',
                is_featured: false,
            };
        },

        async init() {
            await this.load();
            this.$nextTick(() => {
                initSortable('#services-list', {
                    handle: '.drag-handle',
                    onEnd: () => this.onReorder(),
                });
            });
        },

        async load() {
            this.loading = true;
            try {
                const res = await apiCall('services');
                this.items = res.data;
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.loading = false; }
        },

        openForm(item = null) {
            if (item) {
                this.editing = true;
                this.editingId = item.id;
                this.form = {
                    ...item,
                    is_featured: !!item.is_featured,
                    features: [...(item.features || [])],
                    content_html: item.content_html || '',
                    cta_text: item.cta_text || '',
                    cta_url: item.cta_url || '',
                    icon: item.icon || '💻',
                };
            } else {
                this.editing = false;
                this.editingId = null;
                this.form = this.emptyForm();
            }
            this.formOpen = true;
        },

        async save() {
            this.saving = true;
            try {
                if (this.editing) {
                    const res = await apiCall('services?id=' + this.editingId, 'PUT', this.form);
                    const idx = this.items.findIndex(i => i.id === this.editingId);
                    if (idx >= 0) this.items[idx] = res.data;
                    showToast('Service mis a jour', 'success');
                } else {
                    const res = await apiCall('services', 'POST', this.form);
                    this.items.push(res.data);
                    showToast('Service ajoute', 'success');
                }
                this.formOpen = false;
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async duplicate(item) {
            const copy = { ...item, features: [...(item.features || [])] };
            delete copy.id; delete copy.created_at; delete copy.updated_at;
            copy.title += ' (copie)';
            try {
                const res = await apiCall('services', 'POST', copy);
                this.items.push(res.data);
                showToast('Service duplique', 'success');
            } catch (e) { showToast(e.message, 'error'); }
        },

        async remove(id) {
            const app = document.querySelector('[x-data]').__x.$data;
            app.confirmModal = {
                show: true, title: 'Supprimer ce service ?', message: 'Cette action est irreversible.',
                onConfirm: async () => {
                    try {
                        await apiCall('services?id=' + id, 'DELETE', { id });
                        this.items = this.items.filter(i => i.id !== id);
                        showToast('Service supprime', 'success');
                    } catch (e) { showToast(e.message, 'error'); }
                }
            };
        },

        async onReorder() {
            const ids = [...document.querySelectorAll('#services-list [data-id]')].map(el => parseInt(el.dataset.id));
            const map = {};
            this.items.forEach(i => map[i.id] = i);
            this.items = ids.map(id => map[id]).filter(Boolean);
            try { await apiCall('services', 'PUT', { reorder: ids }); }
            catch (e) { showToast(e.message, 'error'); }
        },
    };
}
</script>

<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>
