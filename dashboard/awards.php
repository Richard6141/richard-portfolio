<?php
// ============================================================
// Nom du fichier : dashboard/awards.php
// Description    : Gestion des prix et distinctions
// Auth requise   : Oui
// ============================================================
declare(strict_types=1);
$dashboardTitle = 'Prix & Distinctions';
require_once __DIR__ . '/../includes/dashboard-layout.php';
?>
<div x-data="crudPage({
    endpoint: 'awards',
    entityName: 'prix',
    emptyForm: () => ({ title:'', issuer:'', date:'', description:'', url:'', image:'' })
})" x-init="init()">

    <div class="flex items-center justify-between mb-6">
        <p class="text-sm text-gray-500">Vos prix, recompenses et distinctions.</p>
        <button @click="openForm()" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 transition-colors">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
            Ajouter
        </button>
    </div>

    <div x-show="loading" class="flex justify-center py-12"><svg class="w-8 h-8 animate-spin text-blue-600" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg></div>

    <template x-if="!loading && items.length === 0">
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-12 text-center">
            <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M18.75 4.236c.982.143 1.954.317 2.916.52A6.003 6.003 0 0 1 16.27 9.728M18.75 4.236V4.5c0 2.108-.966 3.99-2.48 5.228m0 0a48.454 48.454 0 0 1-7.54 0"/></svg>
            <h3 class="text-lg font-semibold text-gray-900 mb-1">Aucun prix</h3>
            <button @click="openForm()" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 mt-3">Ajouter</button>
        </div>
    </template>

    <div x-show="!loading && items.length > 0" :id="listId" class="space-y-4">
        <template x-for="item in items" :key="item.id">
            <div :data-id="item.id" class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-5 hover:shadow-md transition-shadow group">
                <div class="flex items-start gap-4">
                    <div class="cursor-grab active:cursor-grabbing text-gray-300 hover:text-gray-500 pt-1 drag-handle"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M7 2a2 2 0 10.001 4.001A2 2 0 007 2zm0 6a2 2 0 10.001 4.001A2 2 0 007 8zm0 6a2 2 0 10.001 4.001A2 2 0 007 14zm6-8a2 2 0 10-.001-4.001A2 2 0 0013 6zm0 2a2 2 0 10.001 4.001A2 2 0 0013 8zm0 6a2 2 0 10.001 4.001A2 2 0 0013 14z"/></svg></div>
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M18.75 4.236c.982.143 1.954.317 2.916.52A6.003 6.003 0 0 1 16.27 9.728M18.75 4.236V4.5c0 2.108-.966 3.99-2.48 5.228m0 0a48.454 48.454 0 0 1-7.54 0"/></svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-start justify-between gap-2">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-900" x-text="item.title"></h3>
                                <p class="text-xs text-gray-500" x-text="[item.issuer, item.date].filter(Boolean).join(' — ')"></p>
                            </div>
                            <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity shrink-0">
                                <button @click="openForm(item)" class="p-1.5 rounded-lg text-gray-400 hover:text-blue-600 hover:bg-blue-50"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Z"/></svg></button>
                                <button @click="remove(item.id)" class="p-1.5 rounded-lg text-gray-400 hover:text-red-600 hover:bg-red-50"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/></svg></button>
                            </div>
                        </div>
                        <p x-show="item.description" class="text-sm text-gray-600 mt-1 line-clamp-2" x-text="item.description"></p>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <!-- Modal -->
    <div x-show="formOpen" x-cloak class="fixed inset-0 z-[80] flex items-center justify-center p-4">
        <div class="absolute inset-0 bg-gray-900/60" @click="formOpen = false" x-transition.opacity></div>
        <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-md z-10 p-6" x-transition>
            <h2 class="text-lg font-semibold text-gray-900 mb-4" x-text="editing ? 'Modifier' : 'Ajouter un prix'"></h2>
            <div class="space-y-4">
                <div><label class="block text-sm font-medium text-gray-700 mb-1">Titre <span class="text-red-500">*</span></label><input type="text" x-model="form.title" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Prix UX 2024"></div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div><label class="block text-sm font-medium text-gray-700 mb-1">Organisme</label><input type="text" x-model="form.issuer" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Awwwards"></div>
                    <div><label class="block text-sm font-medium text-gray-700 mb-1">Date</label><input type="date" x-model="form.date" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none"></div>
                </div>
                <div><label class="block text-sm font-medium text-gray-700 mb-1">Description</label><textarea x-model="form.description" rows="3" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none resize-none" placeholder="Description du prix..."></textarea></div>
                <div><label class="block text-sm font-medium text-gray-700 mb-1">URL</label><input type="url" x-model="form.url" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://..."></div>
                <div><label class="block text-sm font-medium text-gray-700 mb-1">Image (URL)</label><input type="url" x-model="form.image" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://...trophy.jpg"></div>
            </div>
            <div class="flex justify-end gap-3 mt-6">
                <button @click="formOpen = false" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">Annuler</button>
                <button @click="save()" :disabled="saving" class="px-5 py-2 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 disabled:opacity-50"><span x-text="saving ? '...' : (editing ? 'Mettre a jour' : 'Ajouter')"></span></button>
            </div>
        </div>
    </div>
</div>
<script>
<?php include __DIR__ . '/../includes/crud-page-script.php'; ?>
</script>
<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>
