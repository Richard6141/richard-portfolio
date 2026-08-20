<?php
// ============================================================
// Nom du fichier : dashboard/education.php
// Description    : Gestion des formations et diplomes
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

$dashboardTitle = 'Formation';
require_once __DIR__ . '/../includes/dashboard-layout.php';
?>

<div x-data="educationPage()" x-init="init()">

    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <p class="text-sm text-gray-500">Ajoutez et organisez vos formations et diplomes.</p>
        <button @click="openForm()" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 transition-colors">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
            Ajouter
        </button>
    </div>

    <!-- Empty state -->
    <template x-if="!loading && items.length === 0">
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-12 text-center">
            <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5"/></svg>
            <h3 class="text-lg font-semibold text-gray-900 mb-1">Aucune formation</h3>
            <p class="text-sm text-gray-500 mb-4">Ajoutez votre parcours academique.</p>
            <button @click="openForm()" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 transition-colors">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                Ajouter une formation
            </button>
        </div>
    </template>

    <!-- Loading -->
    <div x-show="loading" class="flex justify-center py-12">
        <svg class="w-8 h-8 animate-spin text-blue-600" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
    </div>

    <!-- List -->
    <div x-show="!loading && items.length > 0" id="edu-list" class="space-y-4">
        <template x-for="item in items" :key="item.id">
            <div :data-id="item.id" class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-5 hover:shadow-md transition-shadow group">
                <div class="flex items-start gap-4">
                    <!-- Drag handle -->
                    <div class="cursor-grab active:cursor-grabbing text-gray-300 hover:text-gray-500 pt-1 drag-handle">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M7 2a2 2 0 10.001 4.001A2 2 0 007 2zm0 6a2 2 0 10.001 4.001A2 2 0 007 8zm0 6a2 2 0 10.001 4.001A2 2 0 007 14zm6-8a2 2 0 10-.001-4.001A2 2 0 0013 6zm0 2a2 2 0 10.001 4.001A2 2 0 0013 8zm0 6a2 2 0 10.001 4.001A2 2 0 0013 14z"/></svg>
                    </div>

                    <!-- Icon -->
                    <div class="shrink-0 mt-1">
                        <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5"/></svg>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="flex-1 min-w-0">
                        <div class="flex items-start justify-between gap-2">
                            <div>
                                <h3 class="text-base font-semibold text-gray-900" x-text="item.degree"></h3>
                                <p class="text-sm text-blue-600 font-medium" x-text="item.institution"></p>
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
                            <span x-show="item.field_of_study" x-text="item.field_of_study"></span>
                            <span x-show="item.location" x-text="item.location"></span>
                            <span x-text="item.start_year + ' — ' + (item.is_current ? 'En cours' : (item.end_year || ''))"></span>
                            <span x-show="item.grade" class="px-1.5 py-0.5 rounded-full bg-amber-100 text-amber-700 text-[10px] font-semibold" x-text="item.grade"></span>
                            <span x-show="item.is_current" class="px-1.5 py-0.5 rounded-full bg-green-100 text-green-700 text-[10px] font-semibold">En cours</span>
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

            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900 font-heading" x-text="editing ? 'Modifier la formation' : 'Ajouter une formation'"></h2>
                <button @click="formOpen = false" class="p-1 rounded-lg text-gray-400 hover:text-gray-600 hover:bg-gray-100">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <div class="px-6 py-5 max-h-[70vh] overflow-y-auto space-y-5">
                <!-- Diplome + Domaine -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Diplome / Titre <span class="text-red-500">*</span></label>
                        <input type="text" x-model="form.degree" required maxlength="255" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Master Informatique">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Domaine d'etude</label>
                        <input type="text" x-model="form.field_of_study" maxlength="255" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Genie Logiciel">
                    </div>
                </div>

                <!-- Etablissement + URL -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Etablissement <span class="text-red-500">*</span></label>
                        <input type="text" x-model="form.institution" required maxlength="255" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Universite de Lyon">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">URL etablissement</label>
                        <input type="url" x-model="form.institution_url" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://...">
                    </div>
                </div>

                <!-- Logo + Localisation -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Logo (URL)</label>
                        <input type="url" x-model="form.institution_logo" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://...logo.png">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Ville / Pays</label>
                        <input type="text" x-model="form.location" maxlength="255" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Lyon, France">
                    </div>
                </div>

                <!-- Annees -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Annee debut <span class="text-red-500">*</span></label>
                        <input type="number" x-model.number="form.start_year" required min="1950" max="2100" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="2020">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Annee fin</label>
                        <input type="number" x-model.number="form.end_year" min="1950" max="2100" :disabled="form.is_current" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none disabled:bg-gray-100" placeholder="2023">
                    </div>
                    <div class="flex items-end pb-2">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" x-model="form.is_current" class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm text-gray-600">En cours</span>
                        </label>
                    </div>
                </div>

                <!-- Mention -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Mention / Note</label>
                    <input type="text" x-model="form.grade" maxlength="100" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Mention Bien, GPA 3.8...">
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea x-model="form.description" rows="3" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none resize-none" placeholder="Description de la formation, cours principaux..."></textarea>
                </div>

                <!-- Activites -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Activites et associations</label>
                    <textarea x-model="form.activities" rows="2" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none resize-none" placeholder="Club info, projets tutores, associations..."></textarea>
                </div>
            </div>

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

<script>
function educationPage() {
    return {
        items: [],
        loading: true,
        saving: false,
        formOpen: false,
        editing: false,
        editingId: null,

        form: {
            degree: '', field_of_study: '', institution: '', institution_url: '',
            institution_logo: '', location: '', start_year: new Date().getFullYear(),
            end_year: null, is_current: false, grade: '', description: '', activities: '',
        },

        emptyForm() {
            return {
                degree: '', field_of_study: '', institution: '', institution_url: '',
                institution_logo: '', location: '', start_year: new Date().getFullYear(),
                end_year: null, is_current: false, grade: '', description: '', activities: '',
            };
        },

        async init() {
            await this.load();
            this.$nextTick(() => {
                initSortable('#edu-list', {
                    handle: '.drag-handle',
                    onEnd: () => this.onReorder(),
                });
            });
        },

        async load() {
            this.loading = true;
            try {
                const res = await apiCall('education');
                this.items = res.data;
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.loading = false; }
        },

        openForm(item = null) {
            if (item) {
                this.editing = true;
                this.editingId = item.id;
                this.form = { ...item, is_current: !!item.is_current };
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
                    const res = await apiCall('education?id=' + this.editingId, 'PUT', this.form);
                    const idx = this.items.findIndex(i => i.id === this.editingId);
                    if (idx >= 0) this.items[idx] = res.data;
                    showToast('Formation mise a jour', 'success');
                } else {
                    const res = await apiCall('education', 'POST', this.form);
                    this.items.push(res.data);
                    showToast('Formation ajoutee', 'success');
                }
                this.formOpen = false;
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async duplicate(item) {
            const copy = { ...item };
            delete copy.id; delete copy.created_at; delete copy.updated_at;
            copy.degree += ' (copie)';
            try {
                const res = await apiCall('education', 'POST', copy);
                this.items.push(res.data);
                showToast('Formation dupliquee', 'success');
            } catch (e) { showToast(e.message, 'error'); }
        },

        async remove(id) {
            const app = document.querySelector('[x-data]').__x.$data;
            app.confirmModal = {
                show: true,
                title: 'Supprimer cette formation ?',
                message: 'Cette action est irreversible.',
                onConfirm: async () => {
                    try {
                        await apiCall('education?id=' + id, 'DELETE', { id });
                        this.items = this.items.filter(i => i.id !== id);
                        showToast('Formation supprimee', 'success');
                    } catch (e) { showToast(e.message, 'error'); }
                }
            };
        },

        async onReorder() {
            const ids = [...document.querySelectorAll('#edu-list [data-id]')].map(el => parseInt(el.dataset.id));
            const map = {};
            this.items.forEach(i => map[i.id] = i);
            this.items = ids.map(id => map[id]).filter(Boolean);
            try {
                await apiCall('education', 'PUT', { reorder: ids });
            } catch (e) { showToast(e.message, 'error'); }
        },
    };
}
</script>

<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>
