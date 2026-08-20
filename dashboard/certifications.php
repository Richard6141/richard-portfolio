<?php
// ============================================================
// Nom du fichier : dashboard/certifications.php
// Description    : Gestion des certifications
// Auth requise   : Oui
// ============================================================
declare(strict_types=1);
$dashboardTitle = 'Certifications';
require_once __DIR__ . '/../includes/dashboard-layout.php';
?>
<div x-data="crudPage({
    endpoint: 'certifications',
    entityName: 'certification',
    emptyForm: () => ({ name:'', issuer:'', issuer_logo:'', credential_id:'', credential_url:'', issue_date:'', expiry_date:'', no_expiry:true, description:'', badge_image:'', related_skills:[] })
})" x-init="init()">

    <div class="flex items-center justify-between mb-6">
        <p class="text-sm text-gray-500">Vos certifications et badges professionnels.</p>
        <button @click="openForm()" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 transition-colors">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
            Ajouter
        </button>
    </div>

    <div x-show="loading" class="flex justify-center py-12"><svg class="w-8 h-8 animate-spin text-blue-600" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg></div>

    <template x-if="!loading && items.length === 0">
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-12 text-center">
            <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"/></svg>
            <h3 class="text-lg font-semibold text-gray-900 mb-1">Aucune certification</h3>
            <button @click="openForm()" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 mt-3">Ajouter</button>
        </div>
    </template>

    <div x-show="!loading && items.length > 0" :id="listId" class="space-y-4">
        <template x-for="item in items" :key="item.id">
            <div :data-id="item.id" class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-5 hover:shadow-md transition-shadow group">
                <div class="flex items-start gap-4">
                    <div class="cursor-grab active:cursor-grabbing text-gray-300 hover:text-gray-500 pt-1 drag-handle"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M7 2a2 2 0 10.001 4.001A2 2 0 007 2zm0 6a2 2 0 10.001 4.001A2 2 0 007 8zm0 6a2 2 0 10.001 4.001A2 2 0 007 14zm6-8a2 2 0 10-.001-4.001A2 2 0 0013 6zm0 2a2 2 0 10.001 4.001A2 2 0 0013 8zm0 6a2 2 0 10.001 4.001A2 2 0 0013 14z"/></svg></div>
                    <div class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"/></svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-start justify-between gap-2">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-900" x-text="item.name"></h3>
                                <p class="text-xs text-gray-500" x-text="item.issuer"></p>
                            </div>
                            <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity shrink-0">
                                <button @click="openForm(item)" class="p-1.5 rounded-lg text-gray-400 hover:text-blue-600 hover:bg-blue-50"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Z"/></svg></button>
                                <button @click="remove(item.id)" class="p-1.5 rounded-lg text-gray-400 hover:text-red-600 hover:bg-red-50"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/></svg></button>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center gap-2 mt-1.5 text-xs text-gray-400">
                            <span x-text="item.issue_date"></span>
                            <span x-show="item.no_expiry" class="px-1.5 py-0.5 rounded-full bg-green-100 text-green-700 text-[10px] font-semibold">Permanent</span>
                            <span x-show="!item.no_expiry && item.expiry_date" x-text="'Expire : ' + item.expiry_date"></span>
                        </div>
                        <div x-show="item.related_skills && item.related_skills.length" class="flex flex-wrap gap-1 mt-2">
                            <template x-for="sk in (item.related_skills || [])" :key="sk">
                                <span class="px-1.5 py-0.5 rounded bg-blue-50 text-blue-600 text-[10px] font-medium" x-text="sk"></span>
                            </template>
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
                <h2 class="text-lg font-semibold text-gray-900" x-text="editing ? 'Modifier' : 'Ajouter une certification'"></h2>
                <button @click="formOpen = false" class="p-1 rounded-lg text-gray-400 hover:text-gray-600 hover:bg-gray-100"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg></button>
            </div>
            <div class="px-6 py-5 max-h-[70vh] overflow-y-auto space-y-4" x-data="{ newSkill: '' }">
                <div><label class="block text-sm font-medium text-gray-700 mb-1">Nom <span class="text-red-500">*</span></label><input type="text" x-model="form.name" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="AWS Solutions Architect"></div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div><label class="block text-sm font-medium text-gray-700 mb-1">Organisme <span class="text-red-500">*</span></label><input type="text" x-model="form.issuer" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Amazon Web Services"></div>
                    <div><label class="block text-sm font-medium text-gray-700 mb-1">Logo (URL)</label><input type="url" x-model="form.issuer_logo" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://..."></div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div><label class="block text-sm font-medium text-gray-700 mb-1">ID Credential</label><input type="text" x-model="form.credential_id" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="ABC-123"></div>
                    <div><label class="block text-sm font-medium text-gray-700 mb-1">URL verification</label><input type="url" x-model="form.credential_url" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://verify..."></div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div><label class="block text-sm font-medium text-gray-700 mb-1">Date obtention <span class="text-red-500">*</span></label><input type="date" x-model="form.issue_date" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none"></div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Expiration</label>
                        <input type="date" x-model="form.expiry_date" :disabled="form.no_expiry" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none disabled:bg-gray-100">
                        <label class="flex items-center gap-2 mt-1.5 cursor-pointer"><input type="checkbox" x-model="form.no_expiry" class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500"><span class="text-xs text-gray-600">N'expire pas</span></label>
                    </div>
                </div>
                <div><label class="block text-sm font-medium text-gray-700 mb-1">Description</label><textarea x-model="form.description" rows="2" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none resize-none" placeholder="Description..."></textarea></div>
                <div><label class="block text-sm font-medium text-gray-700 mb-1">Image badge (URL)</label><input type="url" x-model="form.badge_image" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://...badge.png"></div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Competences liees</label>
                    <div class="flex flex-wrap gap-1.5 mb-2">
                        <template x-for="(sk, i) in (form.related_skills || [])" :key="i">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-lg bg-blue-50 text-blue-700 text-sm">
                                <span x-text="sk"></span>
                                <button @click="form.related_skills.splice(i, 1)" class="p-0.5 rounded hover:bg-blue-200"><svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg></button>
                            </span>
                        </template>
                    </div>
                    <div class="flex gap-2">
                        <input type="text" x-model="newSkill" @keydown.enter.prevent="if(newSkill.trim()){form.related_skills.push(newSkill.trim());newSkill=''}" class="flex-1 rounded-lg border border-gray-300 px-3 py-1.5 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="PHP, AWS...">
                        <button type="button" @click="if(newSkill.trim()){form.related_skills.push(newSkill.trim());newSkill=''}" class="px-3 py-1.5 rounded-lg text-sm text-blue-600 bg-blue-50 hover:bg-blue-100">Ajouter</button>
                    </div>
                </div>
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
