<?php
// ============================================================
// Nom du fichier : dashboard/skills.php
// Description    : Gestion des competences avec categories
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

$dashboardTitle = 'Competences';
require_once __DIR__ . '/../includes/dashboard-layout.php';
?>

<div x-data="skillsPage()" x-init="init()">

    <div class="flex items-center justify-between mb-6">
        <p class="text-sm text-gray-500">Organisez vos competences par categorie.</p>
        <button @click="openSkillForm()" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 transition-colors">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
            Ajouter une competence
        </button>
    </div>

    <div x-show="loading" class="flex justify-center py-12">
        <svg class="w-8 h-8 animate-spin text-blue-600" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
    </div>

    <div x-show="!loading" class="grid grid-cols-1 lg:grid-cols-12 gap-6">

        <!-- ============================================================ -->
        <!-- LEFT: Categories                                             -->
        <!-- ============================================================ -->
        <div class="lg:col-span-4 xl:col-span-3">
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-4">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="text-sm font-semibold text-gray-900">Categories</h3>
                    <button @click="openCatForm()" class="p-1 rounded-lg text-gray-400 hover:text-blue-600 hover:bg-blue-50" title="Ajouter">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                    </button>
                </div>

                <!-- All skills (no category filter) -->
                <button @click="selectCategory(null)"
                        :class="selectedCatId === null ? 'bg-blue-50 text-blue-700 border-blue-200' : 'bg-white text-gray-700 border-gray-100 hover:bg-gray-50'"
                        class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-sm font-medium border mb-2 transition-colors">
                    <span>Toutes</span>
                    <span class="text-xs px-1.5 py-0.5 rounded-full bg-gray-100 text-gray-600" x-text="allSkills.length"></span>
                </button>

                <!-- Category list -->
                <div id="cat-list" class="space-y-1">
                    <template x-for="cat in categories" :key="cat.id">
                        <div :data-id="cat.id" class="group">
                            <button @click="selectCategory(cat.id)"
                                    :class="selectedCatId === cat.id ? 'bg-blue-50 text-blue-700 border-blue-200' : 'bg-white text-gray-700 border-gray-100 hover:bg-gray-50'"
                                    class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-sm font-medium border transition-colors">
                                <div class="flex items-center gap-2 min-w-0">
                                    <span class="cursor-grab active:cursor-grabbing text-gray-300 drag-handle shrink-0">
                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M7 2a2 2 0 10.001 4.001A2 2 0 007 2zm0 6a2 2 0 10.001 4.001A2 2 0 007 8zm0 6a2 2 0 10.001 4.001A2 2 0 007 14zm6-8a2 2 0 10-.001-4.001A2 2 0 0013 6zm0 2a2 2 0 10.001 4.001A2 2 0 0013 8zm0 6a2 2 0 10.001 4.001A2 2 0 0013 14z"/></svg>
                                    </span>
                                    <span x-show="cat.icon" x-text="cat.icon" class="shrink-0"></span>
                                    <span class="truncate" x-text="cat.name"></span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="text-xs px-1.5 py-0.5 rounded-full bg-gray-100 text-gray-600" x-text="cat.skill_count"></span>
                                    <div class="hidden group-hover:flex items-center gap-0.5">
                                        <button @click.stop="openCatForm(cat)" class="p-0.5 text-gray-400 hover:text-blue-600">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Z"/></svg>
                                        </button>
                                        <button @click.stop="removeCat(cat)" class="p-0.5 text-gray-400 hover:text-red-600">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg>
                                        </button>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </template>
                </div>

                <template x-if="categories.length === 0">
                    <p class="text-xs text-gray-400 text-center py-4">Aucune categorie. Cliquez + pour en creer.</p>
                </template>
            </div>
        </div>

        <!-- ============================================================ -->
        <!-- RIGHT: Skills                                                -->
        <!-- ============================================================ -->
        <div class="lg:col-span-8 xl:col-span-9">

            <template x-if="filteredSkills.length === 0 && !loading">
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-12 text-center">
                    <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z"/></svg>
                    <h3 class="text-lg font-semibold text-gray-900 mb-1" x-text="selectedCatId ? 'Aucune competence dans cette categorie' : 'Aucune competence'"></h3>
                    <p class="text-sm text-gray-500 mb-4">Commencez par ajouter vos competences.</p>
                    <button @click="openSkillForm()" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                        Ajouter
                    </button>
                </div>
            </template>

            <!-- Skills list -->
            <div id="skill-list" class="space-y-3">
                <template x-for="skill in filteredSkills" :key="skill.id">
                    <div :data-id="skill.id" class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-4 hover:shadow-md transition-shadow group">
                        <div class="flex items-center gap-3">
                            <!-- Drag -->
                            <div class="cursor-grab active:cursor-grabbing text-gray-300 hover:text-gray-500 drag-handle shrink-0">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M7 2a2 2 0 10.001 4.001A2 2 0 007 2zm0 6a2 2 0 10.001 4.001A2 2 0 007 8zm0 6a2 2 0 10.001 4.001A2 2 0 007 14zm6-8a2 2 0 10-.001-4.001A2 2 0 0013 6zm0 2a2 2 0 10.001 4.001A2 2 0 0013 8zm0 6a2 2 0 10.001 4.001A2 2 0 0013 14z"/></svg>
                            </div>

                            <!-- Icon -->
                            <template x-if="skill.icon_url">
                                <img :src="skill.icon_url" class="w-8 h-8 rounded object-contain shrink-0" :alt="skill.name">
                            </template>
                            <template x-if="!skill.icon_url">
                                <div class="w-8 h-8 rounded flex items-center justify-center shrink-0 text-xs font-bold text-white" :style="'background:' + (skill.color || '#6b7280')" x-text="skill.name.substring(0,2).toUpperCase()"></div>
                            </template>

                            <!-- Name + Level bar -->
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-sm font-semibold text-gray-900" x-text="skill.name"></span>
                                    <div class="flex items-center gap-2 text-xs text-gray-500">
                                        <span x-text="levelLabels[skill.level_label] || skill.level_label"></span>
                                        <span class="font-mono" x-text="skill.level + '%'"></span>
                                    </div>
                                </div>
                                <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                                    <div class="h-full rounded-full transition-all" :style="'width:' + skill.level + '%;background:' + (skill.color || '#2563eb')"></div>
                                </div>
                                <div class="flex items-center gap-3 mt-1 text-[11px] text-gray-400">
                                    <span x-show="skill.years_experience" x-text="skill.years_experience + ' ans'"></span>
                                    <span x-show="skill.category_name" x-text="skill.category_name"></span>
                                    <span x-text="displayLabels[skill.display_type]"></span>
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity shrink-0">
                                <button @click="openSkillForm(skill)" class="p-1.5 rounded-lg text-gray-400 hover:text-blue-600 hover:bg-blue-50" title="Modifier">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Z"/></svg>
                                </button>
                                <button @click="removeSkill(skill.id)" class="p-1.5 rounded-lg text-gray-400 hover:text-red-600 hover:bg-red-50" title="Supprimer">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <!-- ============================================================ -->
            <!-- Preview section                                              -->
            <!-- ============================================================ -->
            <template x-if="allSkills.length > 0">
                <div class="mt-8 bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <h3 class="text-sm font-medium text-gray-500 mb-4">Apercu sur le portfolio</h3>
                    <template x-for="cat in categoriesWithSkills" :key="'prev-' + cat.id">
                        <div class="mb-6 last:mb-0">
                            <h4 class="text-xs font-semibold uppercase tracking-wider text-gray-400 mb-3" x-text="(cat.icon ? cat.icon + ' ' : '') + cat.name"></h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <template x-for="s in cat.skills" :key="'ps-' + s.id">
                                    <div>
                                        <!-- Bar -->
                                        <template x-if="s.display_type === 'bar'">
                                            <div>
                                                <div class="flex justify-between text-sm mb-1">
                                                    <span class="font-medium text-gray-700" x-text="s.name"></span>
                                                    <span class="text-gray-400" x-text="s.level + '%'"></span>
                                                </div>
                                                <div class="h-2 bg-gray-100 rounded-full"><div class="h-full rounded-full" :style="'width:' + s.level + '%;background:' + (s.color || '#2563eb')"></div></div>
                                            </div>
                                        </template>
                                        <!-- Circle -->
                                        <template x-if="s.display_type === 'circle'">
                                            <div class="flex items-center gap-3">
                                                <div class="relative w-12 h-12 shrink-0">
                                                    <svg class="w-12 h-12 -rotate-90" viewBox="0 0 36 36">
                                                        <circle cx="18" cy="18" r="15.9" fill="none" stroke="#e5e7eb" stroke-width="3"/>
                                                        <circle cx="18" cy="18" r="15.9" fill="none" :stroke="s.color || '#2563eb'" stroke-width="3"
                                                                :stroke-dasharray="s.level + ', 100" stroke-linecap="round"/>
                                                    </svg>
                                                    <span class="absolute inset-0 flex items-center justify-center text-[10px] font-bold text-gray-700" x-text="s.level"></span>
                                                </div>
                                                <span class="text-sm font-medium text-gray-700" x-text="s.name"></span>
                                            </div>
                                        </template>
                                        <!-- Stars -->
                                        <template x-if="s.display_type === 'stars'">
                                            <div class="flex items-center gap-2">
                                                <span class="text-sm font-medium text-gray-700" x-text="s.name"></span>
                                                <div class="flex gap-0.5">
                                                    <template x-for="star in 5" :key="'star-'+s.id+'-'+star">
                                                        <svg class="w-4 h-4" :class="star <= Math.round(s.level / 20) ? '' : 'opacity-20'" :style="'color:' + (s.color || '#f59e0b')" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                                    </template>
                                                </div>
                                            </div>
                                        </template>
                                        <!-- Tags -->
                                        <template x-if="s.display_type === 'tags'">
                                            <span class="inline-block px-3 py-1.5 rounded-full text-sm font-medium text-white" :style="'background:' + (s.color || '#2563eb')" x-text="s.name"></span>
                                        </template>
                                        <!-- Dots -->
                                        <template x-if="s.display_type === 'dots'">
                                            <div class="flex items-center gap-2">
                                                <span class="text-sm font-medium text-gray-700" x-text="s.name"></span>
                                                <div class="flex gap-1">
                                                    <template x-for="d in 5" :key="'dot-'+s.id+'-'+d">
                                                        <div class="w-2.5 h-2.5 rounded-full" :style="d <= Math.round(s.level / 20) ? 'background:' + (s.color || '#2563eb') : 'background:#e5e7eb'"></div>
                                                    </template>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </template>
                </div>
            </template>
        </div>
    </div>

    <!-- ============================================================ -->
    <!-- MODAL: Category form                                         -->
    <!-- ============================================================ -->
    <div x-show="catFormOpen" x-cloak class="fixed inset-0 z-[80] flex items-center justify-center p-4">
        <div class="absolute inset-0 bg-gray-900/60" @click="catFormOpen = false" x-transition.opacity></div>
        <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-sm z-10 p-6" x-transition>
            <h2 class="text-lg font-semibold text-gray-900 mb-4" x-text="editingCat ? 'Modifier la categorie' : 'Nouvelle categorie'"></h2>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nom <span class="text-red-500">*</span></label>
                    <input type="text" x-model="catForm.name" maxlength="100" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Frontend" @keydown.enter="saveCat()">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Icone (emoji)</label>
                    <input type="text" x-model="catForm.icon" maxlength="10" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="💻">
                </div>
            </div>
            <div class="flex justify-end gap-3 mt-6">
                <button @click="catFormOpen = false" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">Annuler</button>
                <button @click="saveCat()" :disabled="saving" class="px-5 py-2 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 disabled:opacity-50">
                    <span x-text="saving ? '...' : 'Enregistrer'"></span>
                </button>
            </div>
        </div>
    </div>

    <!-- ============================================================ -->
    <!-- MODAL: Skill form                                            -->
    <!-- ============================================================ -->
    <div x-show="skillFormOpen" x-cloak class="fixed inset-0 z-[80] flex items-start justify-center overflow-y-auto p-4 pt-10 pb-10">
        <div class="absolute inset-0 bg-gray-900/60" @click="skillFormOpen = false" x-transition.opacity></div>
        <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-lg z-10" x-transition @click.outside="skillFormOpen = false">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900" x-text="editingSkill ? 'Modifier la competence' : 'Ajouter une competence'"></h2>
                <button @click="skillFormOpen = false" class="p-1 rounded-lg text-gray-400 hover:text-gray-600 hover:bg-gray-100">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <div class="px-6 py-5 space-y-5 max-h-[70vh] overflow-y-auto">
                <!-- Nom + Categorie -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nom <span class="text-red-500">*</span></label>
                        <input type="text" x-model="skillForm.name" maxlength="100" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="JavaScript">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Categorie</label>
                        <select x-model="skillForm.category_id" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                            <option value="">Sans categorie</option>
                            <template x-for="c in categories" :key="c.id">
                                <option :value="c.id" x-text="(c.icon ? c.icon + ' ' : '') + c.name"></option>
                            </template>
                            <option value="__new__">+ Nouvelle categorie...</option>
                        </select>
                        <!-- Champ creation nouvelle categorie -->
                        <div x-show="skillForm.category_id === '__new__'" class="mt-2 flex gap-2">
                            <input type="text" x-model="newCatName" maxlength="100" class="flex-1 rounded-lg border border-gray-300 px-3 py-1.5 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Nom de la categorie">
                            <button type="button" @click="createCatInline()" class="px-3 py-1.5 rounded-lg text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 transition-colors">Creer</button>
                        </div>
                    </div>
                </div>

                <!-- Level slider -->
                <div>
                    <div class="flex items-center justify-between mb-1">
                        <label class="text-sm font-medium text-gray-700">Niveau</label>
                        <span class="text-sm font-mono text-gray-500" x-text="skillForm.level + '%'"></span>
                    </div>
                    <input type="range" x-model.number="skillForm.level" min="0" max="100" step="5"
                           @input="autoSuggestLabel()"
                           class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-blue-600">
                    <div class="h-2.5 bg-gray-100 rounded-full mt-2 overflow-hidden">
                        <div class="h-full rounded-full transition-all" :style="'width:' + skillForm.level + '%;background:' + (skillForm.color || '#2563eb')"></div>
                    </div>
                </div>

                <!-- Label + Annees -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Label</label>
                        <select x-model="skillForm.level_label" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                            <option value="debutant">Debutant</option>
                            <option value="intermediaire">Intermediaire</option>
                            <option value="avance">Avance</option>
                            <option value="expert">Expert</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Annees d'experience</label>
                        <input type="number" x-model.number="skillForm.years_experience" min="0" max="99" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="3">
                    </div>
                </div>

                <!-- Display type -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Type d'affichage</label>
                    <div class="flex flex-wrap gap-2">
                        <template x-for="t in [{v:'bar',l:'Barre'},{v:'circle',l:'Cercle'},{v:'stars',l:'Etoiles'},{v:'tags',l:'Tag'},{v:'dots',l:'Points'}]" :key="t.v">
                            <button type="button" @click="skillForm.display_type = t.v"
                                    :class="skillForm.display_type === t.v ? 'bg-blue-600 text-white border-blue-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-50'"
                                    class="px-3 py-1.5 rounded-lg text-xs font-medium border transition-colors" x-text="t.l"></button>
                        </template>
                    </div>
                </div>

                <!-- Icon URL + Color -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Icone / Logo (URL)</label>
                        <input type="url" x-model="skillForm.icon_url" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://...icon.svg">
                        <div x-show="skillForm.icon_url" class="mt-2 flex items-center gap-2">
                            <img :src="skillForm.icon_url" class="w-6 h-6 object-contain" onerror="this.style.display='none'">
                            <span class="text-xs text-gray-400">Apercu</span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Couleur</label>
                        <div class="flex items-center gap-2">
                            <input type="color" :value="skillForm.color || '#2563eb'" @input="skillForm.color = $event.target.value" class="w-10 h-10 rounded-lg border border-gray-300 cursor-pointer p-0.5">
                            <input type="text" :value="skillForm.color" @input="skillForm.color = $event.target.value" maxlength="7" class="flex-1 rounded-lg border border-gray-300 px-3 py-2 text-sm font-mono focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="#2563eb">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200">
                <button @click="skillFormOpen = false" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">Annuler</button>
                <button @click="saveSkill()" :disabled="saving" class="inline-flex items-center gap-2 px-5 py-2 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50">
                    <span x-text="saving ? '...' : (editingSkill ? 'Mettre a jour' : 'Ajouter')"></span>
                </button>
            </div>
        </div>
    </div>

</div>

<script>
function skillsPage() {
    return {
        loading: true,
        saving: false,
        categories: [],
        allSkills: [],
        selectedCatId: null,

        catFormOpen: false,
        editingCat: false,
        editingCatId: null,
        catForm: { name: '', icon: '' },

        skillFormOpen: false,
        editingSkill: false,
        editingSkillId: null,
        skillForm: { name: '', category_id: '', level: 50, level_label: 'intermediaire', icon_url: '', color: '', years_experience: null, display_type: 'bar' },
        newCatName: '',

        levelLabels: { debutant: 'Debutant', intermediaire: 'Intermediaire', avance: 'Avance', expert: 'Expert' },
        displayLabels: { bar: 'Barre', circle: 'Cercle', stars: 'Etoiles', tags: 'Tag', dots: 'Points' },

        emptySkillForm() {
            return { name: '', category_id: '', level: 50, level_label: 'intermediaire', icon_url: '', color: '', years_experience: null, display_type: 'bar' };
        },

        async createCatInline() {
            if (!this.newCatName.trim()) return;
            try {
                const res = await apiCall('skill-categories', 'POST', { name: this.newCatName.trim(), icon: '' });
                this.categories.push(res.data);
                this.skillForm.category_id = res.data.id;
                this.newCatName = '';
                showToast('Categorie creee', 'success');
            } catch (e) { showToast(e.message, 'error'); }
        },

        get filteredSkills() {
            if (this.selectedCatId === null) return this.allSkills;
            return this.allSkills.filter(s => s.category_id == this.selectedCatId);
        },

        get categoriesWithSkills() {
            const result = [];
            const catMap = {};
            this.categories.forEach(c => { catMap[c.id] = { ...c, skills: [] }; });
            const uncategorized = { id: 0, name: 'Autres', icon: '', skills: [] };
            this.allSkills.forEach(s => {
                if (s.category_id && catMap[s.category_id]) catMap[s.category_id].skills.push(s);
                else uncategorized.skills.push(s);
            });
            this.categories.forEach(c => { if (catMap[c.id].skills.length > 0) result.push(catMap[c.id]); });
            if (uncategorized.skills.length > 0) result.push(uncategorized);
            return result;
        },

        async init() {
            await Promise.all([this.loadCategories(), this.loadSkills()]);
            this.loading = false;
            this.$nextTick(() => {
                initSortable('#cat-list', { handle: '.drag-handle', onEnd: () => this.reorderCats() });
                initSortable('#skill-list', { handle: '.drag-handle', onEnd: () => this.reorderSkills() });
            });
        },

        async loadCategories() {
            try {
                const res = await apiCall('skill-categories');
                this.categories = res.data;
            } catch (e) { showToast(e.message, 'error'); }
        },

        async loadSkills() {
            try {
                const res = await apiCall('skills');
                this.allSkills = res.data;
            } catch (e) { showToast(e.message, 'error'); }
        },

        selectCategory(id) { this.selectedCatId = id; },

        // ---- Category CRUD ----
        openCatForm(cat = null) {
            if (cat) {
                this.editingCat = true;
                this.editingCatId = cat.id;
                this.catForm = { name: cat.name, icon: cat.icon || '' };
            } else {
                this.editingCat = false;
                this.editingCatId = null;
                this.catForm = { name: '', icon: '' };
            }
            this.catFormOpen = true;
        },

        async saveCat() {
            this.saving = true;
            try {
                if (this.editingCat) {
                    await apiCall('skill-categories?id=' + this.editingCatId, 'PUT', this.catForm);
                    const c = this.categories.find(c => c.id === this.editingCatId);
                    if (c) { c.name = this.catForm.name; c.icon = this.catForm.icon; }
                    showToast('Categorie mise a jour', 'success');
                } else {
                    const res = await apiCall('skill-categories', 'POST', this.catForm);
                    this.categories.push(res.data);
                    showToast('Categorie creee', 'success');
                }
                this.catFormOpen = false;
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async removeCat(cat) {
            const msg = cat.skill_count > 0
                ? `Cette categorie contient ${cat.skill_count} competence(s). Elles seront deplacees dans "Sans categorie".`
                : 'Cette action est irreversible.';
            const app = document.querySelector('[x-data]').__x.$data;
            app.confirmModal = {
                show: true, title: 'Supprimer "' + cat.name + '" ?', message: msg,
                onConfirm: async () => {
                    try {
                        await apiCall('skill-categories?id=' + cat.id, 'DELETE', { id: cat.id });
                        this.categories = this.categories.filter(c => c.id !== cat.id);
                        // Detacher les skills
                        this.allSkills.forEach(s => { if (s.category_id == cat.id) { s.category_id = null; s.category_name = null; } });
                        if (this.selectedCatId === cat.id) this.selectedCatId = null;
                        showToast('Categorie supprimee', 'success');
                    } catch (e) { showToast(e.message, 'error'); }
                }
            };
        },

        async reorderCats() {
            const ids = [...document.querySelectorAll('#cat-list [data-id]')].map(el => parseInt(el.dataset.id));
            const map = {};
            this.categories.forEach(c => map[c.id] = c);
            this.categories = ids.map(id => map[id]).filter(Boolean);
            try { await apiCall('skill-categories', 'PUT', { reorder: ids }); }
            catch (e) { showToast(e.message, 'error'); }
        },

        // ---- Skill CRUD ----
        openSkillForm(skill = null) {
            if (skill) {
                this.editingSkill = true;
                this.editingSkillId = skill.id;
                this.skillForm = {
                    name: skill.name, category_id: skill.category_id || '',
                    level: skill.level, level_label: skill.level_label,
                    icon_url: skill.icon_url || '', color: skill.color || '',
                    years_experience: skill.years_experience,
                    display_type: skill.display_type || 'bar',
                };
            } else {
                this.editingSkill = false;
                this.editingSkillId = null;
                this.skillForm = this.emptySkillForm();
                if (this.selectedCatId) this.skillForm.category_id = this.selectedCatId;
            }
            this.skillFormOpen = true;
        },

        autoSuggestLabel() {
            const l = this.skillForm.level;
            this.skillForm.level_label = l >= 85 ? 'expert' : l >= 65 ? 'avance' : l >= 35 ? 'intermediaire' : 'debutant';
        },

        async saveSkill() {
            this.saving = true;
            try {
                if (this.editingSkill) {
                    const res = await apiCall('skills?id=' + this.editingSkillId, 'PUT', this.skillForm);
                    const idx = this.allSkills.findIndex(s => s.id === this.editingSkillId);
                    if (idx >= 0) this.allSkills[idx] = res.data;
                    showToast('Competence mise a jour', 'success');
                } else {
                    const res = await apiCall('skills', 'POST', this.skillForm);
                    this.allSkills.push(res.data);
                    showToast('Competence ajoutee', 'success');
                }
                // Recharger les categories pour le compteur
                this.loadCategories();
                this.skillFormOpen = false;
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async removeSkill(id) {
            const app = document.querySelector('[x-data]').__x.$data;
            app.confirmModal = {
                show: true, title: 'Supprimer cette competence ?', message: 'Cette action est irreversible.',
                onConfirm: async () => {
                    try {
                        await apiCall('skills?id=' + id, 'DELETE', { id });
                        this.allSkills = this.allSkills.filter(s => s.id !== id);
                        this.loadCategories();
                        showToast('Competence supprimee', 'success');
                    } catch (e) { showToast(e.message, 'error'); }
                }
            };
        },

        async reorderSkills() {
            const ids = [...document.querySelectorAll('#skill-list [data-id]')].map(el => parseInt(el.dataset.id));
            const map = {};
            this.allSkills.forEach(s => map[s.id] = s);
            // Reorder just filtered
            const reordered = ids.map(id => map[id]).filter(Boolean);
            this.allSkills = [...reordered, ...this.allSkills.filter(s => !ids.includes(s.id))];
            try { await apiCall('skills', 'PUT', { reorder: ids }); }
            catch (e) { showToast(e.message, 'error'); }
        },
    };
}
</script>

<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>
