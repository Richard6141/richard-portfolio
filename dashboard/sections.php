<?php
// ============================================================
// Nom du fichier : dashboard/sections.php
// Description    : Gestion de l'ordre et visibilite des sections
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

$dashboardTitle = 'Sections & ordre';
require_once __DIR__ . '/../includes/dashboard-layout.php';

$sectionIcons = [
    'hero' => '🏠', 'about' => '👤', 'experiences' => '💼', 'education' => '🎓',
    'skills' => '🛠️', 'services' => '🎯', 'projects' => '📁', 'testimonials' => '💬',
    'certifications' => '🏆', 'languages' => '🌍', 'awards' => '🏅', 'blog' => '📝', 'contact' => '📬',
];
?>

<div x-data="sectionsPage()" x-init="init()">

    <div class="flex items-center justify-between mb-6">
        <p class="text-sm text-gray-500">Reorganisez, masquez ou personnalisez vos sections.</p>
    </div>

    <div x-show="loading" class="flex justify-center py-12"><svg class="w-8 h-8 animate-spin text-blue-600" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg></div>

    <div x-show="!loading" class="grid grid-cols-1 xl:grid-cols-3 gap-6">

        <!-- Sections list -->
        <div class="xl:col-span-2">
            <div id="sections-list" class="space-y-3">
                <template x-for="s in sections" :key="s.id">
                    <div :data-id="s.id" class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-4 transition-all"
                         :class="s.is_visible ? '' : 'opacity-50'">
                        <div class="flex items-center gap-3">
                            <!-- Drag handle -->
                            <div class="cursor-grab active:cursor-grabbing text-gray-300 hover:text-gray-500 drag-handle shrink-0">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M7 2a2 2 0 10.001 4.001A2 2 0 007 2zm0 6a2 2 0 10.001 4.001A2 2 0 007 8zm0 6a2 2 0 10.001 4.001A2 2 0 007 14zm6-8a2 2 0 10-.001-4.001A2 2 0 0013 6zm0 2a2 2 0 10.001 4.001A2 2 0 0013 8zm0 6a2 2 0 10.001 4.001A2 2 0 0013 14z"/></svg>
                            </div>

                            <!-- Icon -->
                            <span class="text-xl shrink-0" x-text="sectionIcons[s.section] || '📄'"></span>

                            <!-- Info -->
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2">
                                    <h3 class="text-sm font-semibold text-gray-900" x-text="s.title || s.section"></h3>
                                    <span class="text-[10px] font-mono text-gray-400 bg-gray-100 px-1.5 py-0.5 rounded" x-text="s.section"></span>
                                </div>
                                <p x-show="s.subtitle" class="text-xs text-gray-500 truncate" x-text="s.subtitle"></p>
                            </div>

                            <!-- Edit button -->
                            <button @click="editSection(s)" class="p-1.5 rounded-lg text-gray-400 hover:text-blue-600 hover:bg-blue-50 shrink-0">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Z"/></svg>
                            </button>

                            <!-- Toggle -->
                            <label class="relative inline-flex items-center cursor-pointer shrink-0">
                                <input type="checkbox" :checked="s.is_visible" @change="toggleVisibility(s)" class="sr-only peer">
                                <div class="w-9 h-5 bg-gray-200 rounded-full peer peer-checked:bg-blue-600 after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:after:translate-x-full"></div>
                            </label>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <!-- Preview sidebar -->
        <div>
            <div class="sticky top-20 space-y-4">
                <!-- Nav preview -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-5">
                    <h4 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Navigation du portfolio</h4>
                    <div class="space-y-1">
                        <template x-for="s in visibleSections" :key="'nav-' + s.id">
                            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg hover:bg-gray-50 text-sm">
                                <span class="text-base" x-text="sectionIcons[s.section] || '📄'"></span>
                                <span class="text-gray-700" x-text="s.title || s.section"></span>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- Stats -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-5">
                    <h4 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Resume</h4>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="text-center p-3 rounded-xl bg-green-50">
                            <p class="text-xl font-bold text-green-600" x-text="visibleSections.length"></p>
                            <p class="text-xs text-green-700">Visibles</p>
                        </div>
                        <div class="text-center p-3 rounded-xl bg-gray-50">
                            <p class="text-xl font-bold text-gray-500" x-text="sections.length - visibleSections.length"></p>
                            <p class="text-xs text-gray-500">Masquees</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit modal -->
    <div x-show="editOpen" x-cloak class="fixed inset-0 z-[80] flex items-center justify-center p-4">
        <div class="absolute inset-0 bg-gray-900/60" @click="editOpen = false" x-transition.opacity></div>
        <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-sm z-10 p-6" x-transition>
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Modifier la section</h2>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
                    <input type="text" x-model="editForm.title" maxlength="255" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Titre personnalise...">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sous-titre</label>
                    <input type="text" x-model="editForm.subtitle" maxlength="500" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Description de la section...">
                </div>
            </div>
            <div class="flex justify-end gap-3 mt-6">
                <button @click="editOpen = false" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">Annuler</button>
                <button @click="saveSection()" :disabled="saving" class="px-5 py-2 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 disabled:opacity-50">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<script>
function sectionsPage() {
    return {
        loading: true,
        saving: false,
        sections: [],
        editOpen: false,
        editingId: null,
        editForm: { title: '', subtitle: '' },

        sectionIcons: <?= json_encode($sectionIcons) ?>,

        get visibleSections() {
            return this.sections.filter(s => s.is_visible);
        },

        async init() {
            this.loading = true;
            try {
                const res = await apiCall('sections');
                this.sections = res.data.map(s => ({ ...s, is_visible: !!parseInt(s.is_visible) }));
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.loading = false; }

            this.$nextTick(() => {
                initSortable('#sections-list', {
                    handle: '.drag-handle',
                    onEnd: () => this.reorder(),
                });
            });
        },

        async toggleVisibility(section) {
            section.is_visible = !section.is_visible;
            try {
                await apiCall('sections', 'PUT', {
                    id: section.id,
                    title: section.title,
                    subtitle: section.subtitle,
                    is_visible: section.is_visible,
                });
            } catch (e) { showToast(e.message, 'error'); section.is_visible = !section.is_visible; }
        },

        editSection(s) {
            this.editingId = s.id;
            this.editForm = { title: s.title || '', subtitle: s.subtitle || '' };
            this.editOpen = true;
        },

        async saveSection() {
            this.saving = true;
            try {
                const s = this.sections.find(s => s.id === this.editingId);
                await apiCall('sections', 'PUT', {
                    id: this.editingId,
                    title: this.editForm.title,
                    subtitle: this.editForm.subtitle,
                    is_visible: s.is_visible,
                });
                s.title = this.editForm.title;
                s.subtitle = this.editForm.subtitle;
                this.editOpen = false;
                showToast('Section mise a jour', 'success');
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async reorder() {
            const ids = [...document.querySelectorAll('#sections-list [data-id]')].map(el => parseInt(el.dataset.id));
            const map = {};
            this.sections.forEach(s => map[s.id] = s);
            this.sections = ids.map(id => map[id]).filter(Boolean);
            try { await apiCall('sections', 'PUT', { reorder: ids }); }
            catch (e) { showToast(e.message, 'error'); }
        },
    };
}
</script>

<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>
