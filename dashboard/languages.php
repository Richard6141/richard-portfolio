<?php
// ============================================================
// Nom du fichier : dashboard/languages.php
// Description    : Gestion des langues parlees
// Auth requise   : Oui
// ============================================================
declare(strict_types=1);
$dashboardTitle = 'Langues';
require_once __DIR__ . '/../includes/dashboard-layout.php';
?>
<div x-data="crudPage({
    endpoint: 'languages',
    entityName: 'langue',
    emptyForm: () => ({ name:'', flag_emoji:'', level:'intermediate', level_percent:50 })
})" x-init="init()">

    <div class="flex items-center justify-between mb-6">
        <p class="text-sm text-gray-500">Langues que vous parlez.</p>
        <button @click="openForm()" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 transition-colors">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
            Ajouter
        </button>
    </div>

    <div x-show="loading" class="flex justify-center py-12"><svg class="w-8 h-8 animate-spin text-blue-600" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg></div>

    <template x-if="!loading && items.length === 0">
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-12 text-center">
            <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5a17.92 17.92 0 0 1-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418"/></svg>
            <h3 class="text-lg font-semibold text-gray-900 mb-1">Aucune langue</h3>
            <button @click="openForm()" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 mt-3">Ajouter</button>
        </div>
    </template>

    <div x-show="!loading && items.length > 0" :id="listId" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <template x-for="item in items" :key="item.id">
            <div :data-id="item.id" class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-5 hover:shadow-md transition-shadow group">
                <div class="flex items-center gap-3 mb-3">
                    <div class="cursor-grab active:cursor-grabbing text-gray-300 hover:text-gray-500 drag-handle"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M7 2a2 2 0 10.001 4.001A2 2 0 007 2zm0 6a2 2 0 10.001 4.001A2 2 0 007 8zm0 6a2 2 0 10.001 4.001A2 2 0 007 14zm6-8a2 2 0 10-.001-4.001A2 2 0 0013 6zm0 2a2 2 0 10.001 4.001A2 2 0 0013 8zm0 6a2 2 0 10.001 4.001A2 2 0 0013 14z"/></svg></div>
                    <span class="text-2xl" x-text="item.flag_emoji || '🌍'"></span>
                    <div class="flex-1 min-w-0">
                        <h3 class="text-sm font-semibold text-gray-900" x-text="item.name"></h3>
                        <p class="text-xs text-gray-500 capitalize" x-text="({native:'Natif',fluent:'Courant',advanced:'Avance',intermediate:'Intermediaire',beginner:'Debutant'})[item.level]"></p>
                    </div>
                    <div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <button @click="openForm(item)" class="p-1 rounded-lg text-gray-400 hover:text-blue-600 hover:bg-blue-50"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Z"/></svg></button>
                        <button @click="remove(item.id)" class="p-1 rounded-lg text-gray-400 hover:text-red-600 hover:bg-red-50"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/></svg></button>
                    </div>
                </div>
                <!-- Level bar -->
                <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                    <div class="h-full bg-blue-600 rounded-full transition-all" :style="'width:' + item.level_percent + '%'"></div>
                </div>
                <p class="text-right text-xs text-gray-400 mt-1" x-text="item.level_percent + '%'"></p>
            </div>
        </template>
    </div>

    <!-- Modal -->
    <div x-show="formOpen" x-cloak class="fixed inset-0 z-[80] flex items-center justify-center p-4">
        <div class="absolute inset-0 bg-gray-900/60" @click="formOpen = false" x-transition.opacity></div>
        <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-sm z-10 p-6" x-transition>
            <h2 class="text-lg font-semibold text-gray-900 mb-4" x-text="editing ? 'Modifier' : 'Ajouter une langue'"></h2>
            <div class="space-y-4">
                <div class="grid grid-cols-3 gap-3">
                    <div class="col-span-2"><label class="block text-sm font-medium text-gray-700 mb-1">Langue <span class="text-red-500">*</span></label><input type="text" x-model="form.name" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Francais"></div>
                    <div><label class="block text-sm font-medium text-gray-700 mb-1">Drapeau</label><input type="text" x-model="form.flag_emoji" maxlength="10" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-center text-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="🇫🇷"></div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Niveau</label>
                    <select x-model="form.level" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                        <option value="native">Natif</option>
                        <option value="fluent">Courant</option>
                        <option value="advanced">Avance</option>
                        <option value="intermediate">Intermediaire</option>
                        <option value="beginner">Debutant</option>
                    </select>
                </div>
                <div>
                    <div class="flex justify-between mb-1">
                        <label class="text-sm font-medium text-gray-700">Niveau (%)</label>
                        <span class="text-sm font-mono text-gray-500" x-text="form.level_percent + '%'"></span>
                    </div>
                    <input type="range" x-model.number="form.level_percent" min="0" max="100" step="5" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-blue-600">
                    <div class="h-2 bg-gray-100 rounded-full mt-2 overflow-hidden">
                        <div class="h-full bg-blue-600 rounded-full transition-all" :style="'width:' + form.level_percent + '%'"></div>
                    </div>
                </div>
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
