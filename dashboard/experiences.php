<?php
// ============================================================
// Nom du fichier : dashboard/experiences.php
// Description    : Gestion des experiences professionnelles
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

$dashboardTitle = 'Experiences';
require_once __DIR__ . '/../includes/dashboard-layout.php';
?>

<!-- Quill.js CSS -->
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">

<div x-data="experiencesPage()" x-init="init()">

    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <div>
            <p class="text-sm text-gray-500">Ajoutez et organisez vos experiences professionnelles.</p>
        </div>
        <button @click="openForm()" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 transition-colors">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
            Ajouter
        </button>
    </div>

    <!-- Empty state -->
    <template x-if="!loading && items.length === 0">
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-12 text-center">
            <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0"/></svg>
            <h3 class="text-lg font-semibold text-gray-900 mb-1">Aucune experience</h3>
            <p class="text-sm text-gray-500 mb-4">Commencez par ajouter votre premiere experience professionnelle.</p>
            <button @click="openForm()" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 transition-colors">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                Ajouter une experience
            </button>
        </div>
    </template>

    <!-- Loading -->
    <div x-show="loading" class="flex justify-center py-12">
        <svg class="w-8 h-8 animate-spin text-blue-600" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
    </div>

    <!-- Timeline list -->
    <div x-show="!loading && items.length > 0" id="exp-list" class="space-y-4">
        <template x-for="item in items" :key="item.id">
            <div :data-id="item.id" class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-5 hover:shadow-md transition-shadow group">
                <div class="flex items-start gap-4">
                    <!-- Drag handle -->
                    <div class="cursor-grab active:cursor-grabbing text-gray-300 hover:text-gray-500 pt-1 drag-handle">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M7 2a2 2 0 10.001 4.001A2 2 0 007 2zm0 6a2 2 0 10.001 4.001A2 2 0 007 8zm0 6a2 2 0 10.001 4.001A2 2 0 007 14zm6-8a2 2 0 10-.001-4.001A2 2 0 0013 6zm0 2a2 2 0 10.001 4.001A2 2 0 0013 8zm0 6a2 2 0 10.001 4.001A2 2 0 0013 14z"/></svg>
                    </div>

                    <!-- Timeline dot -->
                    <div class="shrink-0 mt-1.5">
                        <div class="w-3 h-3 rounded-full" :class="item.is_current ? 'bg-green-500 ring-4 ring-green-500/20' : 'bg-blue-500'"></div>
                    </div>

                    <!-- Content -->
                    <div class="flex-1 min-w-0">
                        <div class="flex items-start justify-between gap-2">
                            <div>
                                <h3 class="text-base font-semibold text-gray-900" x-text="item.job_title"></h3>
                                <p class="text-sm text-blue-600 font-medium" x-text="item.company_name"></p>
                            </div>
                            <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity shrink-0">
                                <button @click="openForm(item)" class="p-1.5 rounded-lg text-gray-400 hover:text-blue-600 hover:bg-blue-50" title="Modifier">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Z"/></svg>
                                </button>
                                <button @click="duplicate(item)" class="p-1.5 rounded-lg text-gray-400 hover:text-green-600 hover:bg-green-50" title="Dupliquer">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75"/></svg>
                                </button>
                                <button @click="remove(item.id)" class="p-1.5 rounded-lg text-gray-400 hover:text-red-600 hover:bg-red-50" title="Supprimer">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/></svg>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center gap-x-3 gap-y-1 mt-1.5 text-xs text-gray-500">
                            <span x-show="item.location" x-text="item.location"></span>
                            <span x-show="item.work_type" x-text="workTypeLabels[item.work_type]"></span>
                            <span x-show="item.contract_type" x-text="contractLabels[item.contract_type]"></span>
                            <span x-text="formatDateRange(item)"></span>
                            <span x-show="item.is_current" class="px-1.5 py-0.5 rounded-full bg-green-100 text-green-700 text-[10px] font-semibold">En poste</span>
                        </div>
                        <div x-show="item.key_points && item.key_points.length > 0" class="mt-2">
                            <ul class="list-disc list-inside text-sm text-gray-600 space-y-0.5">
                                <template x-for="(kp, ki) in (item.key_points || []).slice(0, 3)" :key="ki">
                                    <li x-text="kp"></li>
                                </template>
                                <li x-show="item.key_points && item.key_points.length > 3" class="text-gray-400" x-text="'+ ' + (item.key_points.length - 3) + ' autres...'"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <!-- ============================================================ -->
    <!-- MODAL formulaire                                             -->
    <!-- ============================================================ -->
    <div x-show="formOpen" x-cloak class="fixed inset-0 z-[80] flex items-start justify-center overflow-y-auto p-4 pt-10 pb-10">
        <div class="absolute inset-0 bg-gray-900/60" @click="formOpen = false"
             x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>

        <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-2xl z-10"
             x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
             @click.outside="formOpen = false">

            <!-- Modal header -->
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900 font-heading" x-text="editing ? 'Modifier l\'experience' : 'Ajouter une experience'"></h2>
                <button @click="formOpen = false" class="p-1 rounded-lg text-gray-400 hover:text-gray-600 hover:bg-gray-100">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- Modal body -->
            <div class="px-6 py-5 max-h-[70vh] overflow-y-auto space-y-5">
                <!-- Poste + Entreprise -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Intitule du poste <span class="text-red-500">*</span></label>
                        <input type="text" x-model="form.job_title" required maxlength="255" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Developpeur Full Stack">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Entreprise <span class="text-red-500">*</span></label>
                        <input type="text" x-model="form.company_name" required maxlength="255" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Nom de l'entreprise">
                    </div>
                </div>

                <!-- URL + Logo -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">URL entreprise</label>
                        <input type="url" x-model="form.company_url" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://...">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Logo (URL)</label>
                        <input type="url" x-model="form.company_logo" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://...logo.png">
                    </div>
                </div>

                <!-- Lieu + Type -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Localisation</label>
                        <input type="text" x-model="form.location" maxlength="255" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Paris, France">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Type de lieu</label>
                        <select x-model="form.work_type" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                            <option value="onsite">Presentiel</option>
                            <option value="remote">Teletravail</option>
                            <option value="hybrid">Hybride</option>
                        </select>
                    </div>
                </div>

                <!-- Dates -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Date de debut <span class="text-red-500">*</span></label>
                        <input type="month" x-model="form.start_date" required class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Date de fin</label>
                        <input type="month" x-model="form.end_date" :disabled="form.is_current" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none disabled:bg-gray-100 disabled:text-gray-400">
                        <label class="flex items-center gap-2 mt-2 cursor-pointer">
                            <input type="checkbox" x-model="form.is_current" class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm text-gray-600">Poste actuel</span>
                        </label>
                    </div>
                </div>

                <!-- Contrat -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Type de contrat</label>
                    <select x-model="form.contract_type" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                        <option value="">Non precise</option>
                        <option value="cdi">CDI</option>
                        <option value="cdd">CDD</option>
                        <option value="freelance">Freelance</option>
                        <option value="stage">Stage</option>
                        <option value="alternance">Alternance</option>
                        <option value="benevolat">Benevolat</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <div id="exp-quill-editor" class="rounded-lg border border-gray-300 overflow-hidden" style="min-height: 120px;"></div>
                </div>

                <!-- Points cles -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Points cles</label>
                    <div class="space-y-2">
                        <template x-for="(point, i) in form.key_points" :key="i">
                            <div class="flex items-center gap-2">
                                <span class="text-gray-300 text-sm">•</span>
                                <input type="text" x-model="form.key_points[i]" class="flex-1 rounded-lg border border-gray-300 px-3 py-1.5 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Resultat ou responsabilite cle">
                                <button type="button" @click="form.key_points.splice(i, 1)" class="p-1 text-gray-400 hover:text-red-500">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg>
                                </button>
                            </div>
                        </template>
                    </div>
                    <button type="button" @click="form.key_points.push('')" class="mt-2 inline-flex items-center gap-1 text-sm text-blue-600 hover:text-blue-700 font-medium">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                        Ajouter un point
                    </button>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200">
                <button @click="formOpen = false" type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">Annuler</button>
                <button @click="save()" :disabled="saving" class="inline-flex items-center gap-2 px-5 py-2 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">
                    <svg x-show="saving" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
                    <span x-text="saving ? 'Enregistrement...' : (editing ? 'Mettre a jour' : 'Ajouter')"></span>
                </button>
            </div>
        </div>
    </div>

</div>

<!-- Quill.js -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<script>
function experiencesPage() {
    return {
        items: [],
        loading: true,
        saving: false,
        formOpen: false,
        editing: false,
        editingId: null,
        quill: null,

        workTypeLabels: { onsite: 'Presentiel', remote: 'Teletravail', hybrid: 'Hybride' },
        contractLabels: { cdi: 'CDI', cdd: 'CDD', freelance: 'Freelance', stage: 'Stage', alternance: 'Alternance', benevolat: 'Benevolat', autre: 'Autre' },

        form: {
            job_title: '', company_name: '', company_url: '', company_logo: '',
            location: '', work_type: 'onsite', contract_type: '',
            start_date: '', end_date: '', is_current: false,
            description: '', key_points: [],
        },

        emptyForm() {
            return {
                job_title: '', company_name: '', company_url: '', company_logo: '',
                location: '', work_type: 'onsite', contract_type: '',
                start_date: '', end_date: '', is_current: false,
                description: '', key_points: [],
            };
        },

        async init() {
            await this.load();
            this.$nextTick(() => {
                initSortable('#exp-list', {
                    handle: '.drag-handle',
                    onEnd: () => this.onReorder(),
                });
            });
        },

        async load() {
            this.loading = true;
            try {
                const res = await apiCall('experiences');
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
                    start_date: item.start_date ? item.start_date.substring(0, 7) : '',
                    end_date: item.end_date ? item.end_date.substring(0, 7) : '',
                    is_current: !!item.is_current,
                    contract_type: item.contract_type || '',
                    key_points: [...(item.key_points || [])],
                };
            } else {
                this.editing = false;
                this.editingId = null;
                this.form = this.emptyForm();
            }
            this.formOpen = true;
            this.$nextTick(() => this.initQuill());
        },

        initQuill() {
            const container = document.getElementById('exp-quill-editor');
            if (!container) return;
            container.innerHTML = '';
            this.quill = new Quill(container, {
                theme: 'snow',
                placeholder: 'Decrivez votre role et vos responsabilites...',
                modules: { toolbar: [['bold', 'italic'], [{ list: 'ordered' }, { list: 'bullet' }], ['link'], ['clean']] }
            });
            if (this.form.description) {
                this.quill.root.innerHTML = this.form.description;
            }
        },

        async save() {
            if (this.quill) this.form.description = this.quill.root.innerHTML;
            if (this.form.description === '<p><br></p>') this.form.description = '';

            this.saving = true;
            try {
                if (this.editing) {
                    const res = await apiCall('experiences?id=' + this.editingId, 'PUT', this.form);
                    const idx = this.items.findIndex(i => i.id === this.editingId);
                    if (idx >= 0) this.items[idx] = res.data;
                    showToast('Experience mise a jour', 'success');
                } else {
                    const res = await apiCall('experiences', 'POST', this.form);
                    this.items.push(res.data);
                    showToast('Experience ajoutee', 'success');
                }
                this.formOpen = false;
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async duplicate(item) {
            const copy = { ...item };
            delete copy.id;
            delete copy.created_at;
            delete copy.updated_at;
            copy.job_title += ' (copie)';
            try {
                const res = await apiCall('experiences', 'POST', copy);
                this.items.push(res.data);
                showToast('Experience dupliquee', 'success');
            } catch (e) { showToast(e.message, 'error'); }
        },

        async remove(id) {
            const app = document.querySelector('[x-data]').__x.$data;
            app.confirmModal = {
                show: true,
                title: 'Supprimer cette experience ?',
                message: 'Cette action est irreversible.',
                onConfirm: async () => {
                    try {
                        await apiCall('experiences?id=' + id, 'DELETE', { id });
                        this.items = this.items.filter(i => i.id !== id);
                        showToast('Experience supprimee', 'success');
                    } catch (e) { showToast(e.message, 'error'); }
                }
            };
        },

        async onReorder() {
            const ids = [...document.querySelectorAll('#exp-list [data-id]')].map(el => parseInt(el.dataset.id));
            // Reordonner le tableau local
            const map = {};
            this.items.forEach(i => map[i.id] = i);
            this.items = ids.map(id => map[id]).filter(Boolean);
            try {
                await apiCall('experiences', 'PUT', { reorder: ids });
            } catch (e) { showToast(e.message, 'error'); }
        },

        formatDateRange(item) {
            const fmt = (d) => {
                if (!d) return '';
                const [y, m] = d.split('-');
                const months = ['', 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aout', 'Sep', 'Oct', 'Nov', 'Dec'];
                return months[parseInt(m)] + ' ' + y;
            };
            const start = fmt(item.start_date);
            const end = item.is_current ? 'Aujourd\'hui' : fmt(item.end_date);
            return start + (end ? ' — ' + end : '');
        },
    };
}
</script>

<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>
