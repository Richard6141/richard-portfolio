<?php
// ============================================================
// Nom du fichier : dashboard/testimonials.php
// Description    : Gestion des temoignages clients
// Auth requise   : Oui
// ============================================================
declare(strict_types=1);
$dashboardTitle = 'Temoignages';
require_once __DIR__ . '/../includes/dashboard-layout.php';
?>
<div x-data="crudPage({
    endpoint: 'testimonials',
    entityName: 'temoignage',
    emptyForm: () => ({ author_name:'', author_role:'', author_company:'', author_photo:'', author_linkedin:'', content:'', rating:5, date:'', is_featured:false }),
    fields: 'testimonials'
})" x-init="init()">

    <div class="flex items-center justify-between mb-6">
        <p class="text-sm text-gray-500">Avis et recommandations de vos clients.</p>
        <button @click="openForm()" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 transition-colors">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
            Ajouter
        </button>
    </div>

    <div x-show="loading" class="flex justify-center py-12"><svg class="w-8 h-8 animate-spin text-blue-600" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg></div>

    <template x-if="!loading && items.length === 0">
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-12 text-center">
            <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z"/></svg>
            <h3 class="text-lg font-semibold text-gray-900 mb-1">Aucun temoignage</h3>
            <p class="text-sm text-gray-500 mb-4">Ajoutez les retours de vos clients satisfaits.</p>
            <button @click="openForm()" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100">Ajouter</button>
        </div>
    </template>

    <!-- List -->
    <div x-show="!loading && items.length > 0" :id="listId" class="space-y-4">
        <template x-for="item in items" :key="item.id">
            <div :data-id="item.id" class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-5 hover:shadow-md transition-shadow group">
                <div class="flex items-start gap-4">
                    <div class="cursor-grab active:cursor-grabbing text-gray-300 hover:text-gray-500 pt-1 drag-handle"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M7 2a2 2 0 10.001 4.001A2 2 0 007 2zm0 6a2 2 0 10.001 4.001A2 2 0 007 8zm0 6a2 2 0 10.001 4.001A2 2 0 007 14zm6-8a2 2 0 10-.001-4.001A2 2 0 0013 6zm0 2a2 2 0 10.001 4.001A2 2 0 0013 8zm0 6a2 2 0 10.001 4.001A2 2 0 0013 14z"/></svg></div>
                    <!-- Avatar -->
                    <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center shrink-0 text-lg font-bold text-blue-600" x-text="item.author_name.charAt(0).toUpperCase()"></div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-start justify-between gap-2">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-900" x-text="item.author_name"></h3>
                                <p class="text-xs text-gray-500" x-text="[item.author_role, item.author_company].filter(Boolean).join(' — ')"></p>
                            </div>
                            <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity shrink-0">
                                <button @click="openForm(item)" class="p-1.5 rounded-lg text-gray-400 hover:text-blue-600 hover:bg-blue-50"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Z"/></svg></button>
                                <button @click="remove(item.id)" class="p-1.5 rounded-lg text-gray-400 hover:text-red-600 hover:bg-red-50"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/></svg></button>
                            </div>
                        </div>
                        <!-- Stars -->
                        <div x-show="item.rating" class="flex gap-0.5 mt-1">
                            <template x-for="s in 5" :key="s">
                                <svg class="w-4 h-4" :class="s <= item.rating ? 'text-amber-400' : 'text-gray-200'" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </template>
                        </div>
                        <p class="text-sm text-gray-600 mt-2 line-clamp-2" x-text="item.content"></p>
                        <div class="flex items-center gap-2 mt-1.5">
                            <span x-show="item.is_featured" class="px-1.5 py-0.5 rounded-full bg-amber-100 text-amber-700 text-[10px] font-semibold">Mis en avant</span>
                            <span x-show="item.date" class="text-[11px] text-gray-400" x-text="item.date"></span>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <!-- Modal -->
    <div x-show="formOpen" x-cloak class="fixed inset-0 z-[80] flex items-start justify-center overflow-y-auto p-4 pt-10 pb-10">
        <div class="absolute inset-0 bg-gray-900/60" @click="formOpen = false" x-transition.opacity></div>
        <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-lg z-10" x-transition @click.outside="formOpen = false">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900" x-text="editing ? 'Modifier' : 'Ajouter un temoignage'"></h2>
                <button @click="formOpen = false" class="p-1 rounded-lg text-gray-400 hover:text-gray-600 hover:bg-gray-100"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg></button>
            </div>
            <div class="px-6 py-5 max-h-[70vh] overflow-y-auto space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div><label class="block text-sm font-medium text-gray-700 mb-1">Nom <span class="text-red-500">*</span></label><input type="text" x-model="form.author_name" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Marie Laurent"></div>
                    <div><label class="block text-sm font-medium text-gray-700 mb-1">Role</label><input type="text" x-model="form.author_role" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Directrice Produit"></div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div><label class="block text-sm font-medium text-gray-700 mb-1">Entreprise</label><input type="text" x-model="form.author_company" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Acme Inc."></div>
                    <div><label class="block text-sm font-medium text-gray-700 mb-1">LinkedIn</label><input type="url" x-model="form.author_linkedin" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://linkedin.com/in/..."></div>
                </div>
                <div><label class="block text-sm font-medium text-gray-700 mb-1">Photo (URL)</label><input type="url" x-model="form.author_photo" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://...photo.jpg"></div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Temoignage <span class="text-red-500">*</span></label>
                    <textarea x-model="form.content" rows="4" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none resize-none" placeholder="Ce que le client dit de vous..."></textarea>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Note</label>
                        <div class="flex gap-1">
                            <template x-for="s in 5" :key="'star'+s">
                                <button type="button" @click="form.rating = s" class="p-0.5">
                                    <svg class="w-7 h-7 transition-colors" :class="s <= form.rating ? 'text-amber-400' : 'text-gray-200 hover:text-amber-200'" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </button>
                            </template>
                        </div>
                    </div>
                    <div><label class="block text-sm font-medium text-gray-700 mb-1">Date</label><input type="date" x-model="form.date" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none"></div>
                </div>
                <label class="flex items-center justify-between p-3 rounded-xl bg-gray-50 cursor-pointer hover:bg-gray-100"><span class="text-sm font-medium text-gray-700">Mettre en avant</span><input type="checkbox" x-model="form.is_featured" class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500"></label>
            </div>
            <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200">
                <button @click="formOpen = false" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">Annuler</button>
                <button @click="save()" :disabled="saving" class="px-5 py-2 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50"><span x-text="saving ? '...' : (editing ? 'Mettre a jour' : 'Ajouter')"></span></button>
            </div>
        </div>
    </div>
</div>
<script>
<?php include __DIR__ . '/../includes/crud-page-script.php'; ?>
</script>
<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>
