<?php
// ============================================================
// Nom du fichier : dashboard/projects.php
// Description    : Gestion des projets / realisations
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

$dashboardTitle = 'Projets';
require_once __DIR__ . '/../includes/dashboard-layout.php';
?>

<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">

<div x-data="projectsPage()" x-init="init()">

    <!-- ============================================================ -->
    <!-- VIEW: List                                                   -->
    <!-- ============================================================ -->
    <div x-show="view === 'list'" x-cloak>

        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
            <!-- Filters -->
            <div class="flex gap-2">
                <template x-for="f in statusFilters" :key="f.v">
                    <button @click="filterStatus = f.v"
                            :class="filterStatus === f.v ? 'bg-blue-600 text-white border-blue-600' : 'bg-white text-gray-600 border-gray-300 hover:bg-gray-50'"
                            class="px-3 py-1.5 rounded-lg text-sm font-medium border transition-colors" x-text="f.l">
                    </button>
                </template>
            </div>
            <button @click="openNew()" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 transition-colors shrink-0">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                Nouveau projet
            </button>
        </div>

        <div x-show="loading" class="flex justify-center py-12">
            <svg class="w-8 h-8 animate-spin text-blue-600" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
        </div>

        <template x-if="!loading && filteredItems.length === 0">
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-12 text-center">
                <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z"/></svg>
                <h3 class="text-lg font-semibold text-gray-900 mb-1">Aucun projet</h3>
                <p class="text-sm text-gray-500 mb-4">Ajoutez vos realisations pour les montrer au monde.</p>
                <button @click="openNew()" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 transition-colors">Creer un projet</button>
            </div>
        </template>

        <!-- Grid -->
        <div x-show="!loading && filteredItems.length > 0" id="projects-list" class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-5">
            <template x-for="item in filteredItems" :key="item.id">
                <div :data-id="item.id" class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 overflow-hidden hover:shadow-md transition-shadow group cursor-pointer" @click="openEdit(item)">
                    <!-- Thumbnail -->
                    <div class="relative aspect-video bg-gray-100">
                        <template x-if="item.image_url">
                            <img :src="'/uploads/' + item.image_url" class="w-full h-full object-cover" :alt="item.title">
                        </template>
                        <template x-if="!item.image_url">
                            <div class="w-full h-full flex items-center justify-center text-gray-300">
                                <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909M3.75 21h16.5A2.25 2.25 0 0 0 22.5 18.75V5.25A2.25 2.25 0 0 0 20.25 3H3.75A2.25 2.25 0 0 0 1.5 5.25v13.5A2.25 2.25 0 0 0 3.75 21Z"/></svg>
                            </div>
                        </template>
                        <!-- Status + Badge -->
                        <div class="absolute top-2 left-2 flex gap-1.5">
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-semibold"
                                  :class="statusColors[item.status]" x-text="statusLabels[item.status]"></span>
                            <span x-show="item.badge_text" class="px-2 py-0.5 rounded-full text-[10px] font-semibold text-white" :style="'background:' + (item.badge_color || '#6b7280')" x-text="item.badge_text"></span>
                        </div>
                        <div x-show="item.is_featured" class="absolute top-2 right-2">
                            <svg class="w-5 h-5 text-amber-400 drop-shadow" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-gray-900 mb-1 truncate" x-text="item.title"></h3>
                        <div class="flex items-center gap-2 text-xs text-gray-500">
                            <span x-show="item.category" x-text="item.category"></span>
                            <span x-show="item.year" x-text="item.year"></span>
                        </div>
                        <div x-show="item.technologies && item.technologies.length" class="flex flex-wrap gap-1 mt-2">
                            <template x-for="t in item.technologies.slice(0, 3)" :key="t">
                                <span class="px-1.5 py-0.5 rounded bg-gray-100 text-[10px] text-gray-600" x-text="t"></span>
                            </template>
                            <span x-show="item.technologies.length > 3" class="text-[10px] text-gray-400" x-text="'+' + (item.technologies.length - 3)"></span>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- ============================================================ -->
    <!-- VIEW: Form (full page)                                       -->
    <!-- ============================================================ -->
    <div x-show="view === 'form'" x-cloak>

        <!-- Back + title -->
        <div class="flex items-center gap-3 mb-6">
            <button @click="backToList()" class="p-2 rounded-lg text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/></svg>
            </button>
            <h2 class="text-lg font-semibold text-gray-900 font-heading" x-text="editing ? 'Modifier le projet' : 'Nouveau projet'"></h2>
            <div class="ml-auto flex gap-2">
                <button @click="backToList()" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">Annuler</button>
                <button @click="save()" :disabled="saving" class="inline-flex items-center gap-2 px-5 py-2 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">
                    <svg x-show="saving" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
                    <span x-text="saving ? '...' : 'Enregistrer'"></span>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

            <!-- Main column -->
            <div class="xl:col-span-2 space-y-6">

                <!-- Informations generales -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <h3 class="text-base font-semibold text-gray-900 font-heading mb-5">Informations generales</h3>
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Titre <span class="text-red-500">*</span></label>
                                <input type="text" x-model="form.title" @input="autoSlug()" maxlength="255" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Mon Super Projet">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Slug</label>
                                <input type="text" x-model="form.slug" maxlength="255" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm font-mono text-gray-500 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="mon-super-projet">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Categorie</label>
                                <input type="text" x-model="form.category" maxlength="100" list="cat-suggestions" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Web">
                                <datalist id="cat-suggestions">
                                    <template x-for="c in existingCategories" :key="c"><option :value="c"></option></template>
                                </datalist>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Annee</label>
                                <input type="number" x-model.number="form.year" min="1990" max="2100" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" :placeholder="new Date().getFullYear()">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Duree</label>
                                <input type="text" x-model="form.duration" maxlength="100" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="3 mois">
                            </div>
                        </div>
                        <div>
                            <label class="flex items-center justify-between text-sm font-medium text-gray-700 mb-1">
                                <span>Description courte</span>
                                <span class="text-xs font-normal" :class="(form.description_short || '').length > 280 ? 'text-amber-600' : 'text-gray-400'" x-text="(form.description_short || '').length + ' / 300'"></span>
                            </label>
                            <textarea x-model="form.description_short" maxlength="500" rows="2" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none resize-none" placeholder="Resume du projet en quelques phrases..."></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Description longue</label>
                            <div id="project-quill" class="rounded-lg border border-gray-300 overflow-hidden" style="min-height: 160px;"></div>
                        </div>
                    </div>
                </div>

                <!-- Etude de cas — ajoutee le 21/08/2026.
                     Ces quatre sections n'apparaissent sur /realisations/{slug} que
                     si elles sont remplies : on peut donc les completer une par une
                     sans jamais casser l'affichage de la fiche. -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <h3 class="text-base font-semibold text-gray-900 font-heading mb-1">Etude de cas</h3>
                    <p class="text-xs text-gray-500 mb-4">
                        Chaque bloc rempli ajoute sa section sur la page publique du projet.
                        <strong class="text-gray-700">Le resultat n'engage que ce que vous pouvez justifier</strong> :
                        un chiffre publie sur un client identifiable doit etre verifiable, et le client d'accord pour qu'il paraisse.
                    </p>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Le contexte</label>
                            <p class="text-xs text-gray-500 mb-1">Le client, son activite, sa situation avant le projet.</p>
                            <textarea x-model="form.case_contexte" rows="4" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Qui est le client et dans quel contexte le projet est arrive."></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Le probleme a resoudre</label>
                            <p class="text-xs text-gray-500 mb-1">Ce qui coincait concretement, avant.</p>
                            <textarea x-model="form.case_probleme" rows="4" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Le probleme reel, pas une generalite sur le secteur."></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Ce qui a ete mis en place</label>
                            <p class="text-xs text-gray-500 mb-1">Ce qui a ete concu, et pourquoi ces choix.</p>
                            <textarea x-model="form.case_solution" rows="4" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="La solution livree et les partis pris de conception."></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Le resultat</label>
                            <p class="text-xs text-gray-500 mb-1">Ce que ca a change. Chiffres justifiables uniquement.</p>
                            <textarea x-model="form.case_resultat" rows="4" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Ce que le client constate depuis. Aucun chiffre invente."></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Lieu</label>
                            <input type="text" x-model="form.case_lieu" maxlength="120" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Cotonou, Benin">
                        </div>
                    </div>
                </div>

                <!-- Client + Liens -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                        <h3 class="text-base font-semibold text-gray-900 font-heading mb-4">Client</h3>
                        <div class="space-y-3">
                            <input type="text" x-model="form.client_name" maxlength="255" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Nom du client">
                            <input type="url" x-model="form.client_url" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://client.com">
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                        <h3 class="text-base font-semibold text-gray-900 font-heading mb-4">Liens</h3>
                        <div class="space-y-3">
                            <input type="url" x-model="form.link_live" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="URL live du projet">
                            <input type="url" x-model="form.link_github" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="URL GitHub">
                            <input type="url" x-model="form.link_demo" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="URL demo">
                        </div>
                    </div>
                </div>

                <!-- Technologies (tags) -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <h3 class="text-base font-semibold text-gray-900 font-heading mb-4">Technologies</h3>
                    <div class="flex flex-wrap gap-2 mb-3">
                        <template x-for="(tag, i) in form.technologies" :key="i">
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg bg-blue-50 text-blue-700 text-sm font-medium">
                                <span x-text="tag"></span>
                                <button @click="form.technologies.splice(i, 1)" class="p-0.5 rounded hover:bg-blue-200 transition-colors">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg>
                                </button>
                            </span>
                        </template>
                    </div>
                    <div class="flex gap-2">
                        <input type="text" x-model="newTag" @keydown.enter.prevent="addTag()" list="tag-suggestions"
                               class="flex-1 rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Ajouter une technologie...">
                        <button @click="addTag()" type="button" class="px-3 py-2 rounded-lg text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 transition-colors">Ajouter</button>
                    </div>
                    <datalist id="tag-suggestions">
                        <template x-for="t in existingTags" :key="t"><option :value="t"></option></template>
                    </datalist>
                </div>

                <!-- Medias -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6" x-show="editing">
                    <h3 class="text-base font-semibold text-gray-900 font-heading mb-4">Medias</h3>

                    <!-- Image principale -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Image principale</label>
                        <div class="flex items-start gap-4">
                            <div class="w-32 aspect-video rounded-lg bg-gray-100 overflow-hidden shrink-0 flex items-center justify-center">
                                <template x-if="form.image_url"><img :src="'/uploads/' + form.image_url" class="w-full h-full object-cover"></template>
                                <template x-if="!form.image_url"><span class="text-gray-300 text-xs">Aucune</span></template>
                            </div>
                            <label class="inline-flex items-center gap-2 px-3 py-2 rounded-lg text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 cursor-pointer transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5"/></svg>
                                Choisir
                                <input type="file" class="hidden" accept="image/*" @change="uploadImage($event, 'main')">
                            </label>
                        </div>
                    </div>

                    <!-- Galerie -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Galerie (max 10 images)</label>
                        <div class="grid grid-cols-3 sm:grid-cols-5 gap-3 mb-3" id="gallery-grid">
                            <template x-for="(img, i) in form.gallery" :key="i">
                                <div class="relative aspect-video rounded-lg bg-gray-100 overflow-hidden group/img">
                                    <img :src="'/uploads/' + img" class="w-full h-full object-cover">
                                    <button @click="removeGalleryImage(img)" class="absolute inset-0 bg-black/50 opacity-0 group-hover/img:opacity-100 flex items-center justify-center transition-opacity">
                                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/></svg>
                                    </button>
                                </div>
                            </template>
                        </div>
                        <label x-show="form.gallery.length < 10" class="inline-flex items-center gap-2 px-3 py-2 rounded-lg text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 cursor-pointer transition-colors">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                            Ajouter des images
                            <input type="file" class="hidden" accept="image/*" multiple @change="uploadGalleryImages($event)">
                        </label>
                    </div>
                </div>
            </div>

            <!-- Sidebar column -->
            <div class="space-y-6">
                <!-- Statut -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <h3 class="text-base font-semibold text-gray-900 font-heading mb-4">Publication</h3>
                    <select x-model="form.status" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none mb-3">
                        <option value="draft">Brouillon</option>
                        <option value="published">Publie</option>
                        <option value="archived">Archive</option>
                    </select>
                    <div class="flex items-center gap-2 p-3 rounded-lg" :class="{'bg-green-50 text-green-700': form.status === 'published', 'bg-amber-50 text-amber-700': form.status === 'draft', 'bg-gray-50 text-gray-500': form.status === 'archived'}">
                        <div class="w-2 h-2 rounded-full" :class="{'bg-green-500': form.status === 'published', 'bg-amber-500': form.status === 'draft', 'bg-gray-400': form.status === 'archived'}"></div>
                        <span class="text-sm font-medium" x-text="statusLabels[form.status]"></span>
                    </div>
                </div>

                <!-- Options -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <h3 class="text-base font-semibold text-gray-900 font-heading mb-4">Options</h3>
                    <div class="space-y-4">
                        <label class="flex items-center justify-between p-3 rounded-xl bg-gray-50 cursor-pointer hover:bg-gray-100 transition-colors">
                            <span class="text-sm font-medium text-gray-700">Mettre en avant</span>
                            <input type="checkbox" x-model="form.is_featured" class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        </label>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Badge</label>
                            <input type="text" x-model="form.badge_text" maxlength="50" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Projet phare">
                        </div>
                        <div x-show="form.badge_text">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Couleur du badge</label>
                            <div class="flex gap-2">
                                <input type="color" :value="form.badge_color || '#6b7280'" @input="form.badge_color = $event.target.value" class="w-10 h-10 rounded-lg border border-gray-300 cursor-pointer p-0.5">
                                <input type="text" :value="form.badge_color" @input="form.badge_color = $event.target.value" maxlength="7" class="flex-1 rounded-lg border border-gray-300 px-3 py-2 text-sm font-mono focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                            </div>
                            <!-- Preview badge -->
                            <div class="mt-2">
                                <span class="inline-block px-2.5 py-1 rounded-full text-xs font-semibold text-white" :style="'background:' + (form.badge_color || '#6b7280')" x-text="form.badge_text"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Danger zone (editing only) -->
                <div x-show="editing" class="bg-white rounded-2xl shadow-sm ring-1 ring-red-200 p-6">
                    <h3 class="text-base font-semibold text-red-700 mb-3">Zone de danger</h3>
                    <button @click="remove(editingId)" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-red-600 bg-red-50 hover:bg-red-100 transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/></svg>
                        Supprimer ce projet
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<script>
function projectsPage() {
    return {
        view: 'list',
        items: [],
        loading: true,
        saving: false,
        editing: false,
        editingId: null,
        filterStatus: 'all',
        newTag: '',
        quill: null,
        existingTags: [],
        existingCategories: [],

        statusFilters: [
            { v: 'all', l: 'Tous' },
            { v: 'published', l: 'Publies' },
            { v: 'draft', l: 'Brouillons' },
            { v: 'archived', l: 'Archives' },
        ],
        statusLabels: { published: 'Publie', draft: 'Brouillon', archived: 'Archive' },
        statusColors: {
            published: 'bg-green-100 text-green-700',
            draft: 'bg-amber-100 text-amber-700',
            archived: 'bg-gray-100 text-gray-500',
        },

        form: {
            title: '', slug: '', description_short: '', description_long: '',
            category: '', client_name: '', client_url: '',
            link_live: '', link_github: '', link_demo: '',
            technologies: [], duration: '', year: new Date().getFullYear(),
            status: 'draft', badge_text: '', badge_color: '',
            is_featured: false, image_url: '', gallery: [],
            // Etude de cas (21/08/2026) : ces colonnes existaient en base et
            // s'affichaient sur /realisations/{slug}, sans etre editables ici.
            case_contexte: '', case_probleme: '', case_solution: '',
            case_resultat: '', case_lieu: '',
        },

        emptyForm() {
            return {
                title: '', slug: '', description_short: '', description_long: '',
                category: '', client_name: '', client_url: '',
                link_live: '', link_github: '', link_demo: '',
                technologies: [], duration: '', year: new Date().getFullYear(),
                status: 'draft', badge_text: '', badge_color: '',
                is_featured: false, image_url: '', gallery: [],
                case_contexte: '', case_probleme: '', case_solution: '',
                case_resultat: '', case_lieu: '',
            };
        },

        get filteredItems() {
            if (this.filterStatus === 'all') return this.items;
            return this.items.filter(i => i.status === this.filterStatus);
        },

        async init() {
            await this.load();
        },

        async load() {
            this.loading = true;
            try {
                const res = await apiCall('projects');
                this.items = res.data.items;
                this.existingTags = res.data.tags;
                this.existingCategories = res.data.categories;
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.loading = false; }
        },

        openNew() {
            this.editing = false;
            this.editingId = null;
            this.form = this.emptyForm();
            this.view = 'form';
            this.$nextTick(() => this.initQuill());
        },

        openEdit(item) {
            this.editing = true;
            this.editingId = item.id;
            this.form = {
                ...item,
                is_featured: !!item.is_featured,
                technologies: [...(item.technologies || [])],
                gallery: [...(item.gallery || [])],
                badge_text: item.badge_text || '',
                badge_color: item.badge_color || '',
                // NULL en base doit devenir '' cote formulaire, sinon le
                // textarea affiche litteralement "null".
                case_contexte: item.case_contexte || '',
                case_probleme: item.case_probleme || '',
                case_solution: item.case_solution || '',
                case_resultat: item.case_resultat || '',
                case_lieu: item.case_lieu || '',
            };
            this.view = 'form';
            this.$nextTick(() => this.initQuill());
        },

        backToList() {
            this.view = 'list';
            this.quill = null;
        },

        initQuill() {
            const el = document.getElementById('project-quill');
            if (!el) return;
            el.innerHTML = '';
            this.quill = new Quill(el, {
                theme: 'snow',
                placeholder: 'Description detaillee du projet...',
                modules: { toolbar: [[{ header: [2, 3, false] }], ['bold', 'italic', 'underline'], [{ list: 'ordered' }, { list: 'bullet' }], ['link'], ['clean']] }
            });
            if (this.form.description_long) {
                this.quill.root.innerHTML = this.form.description_long;
            }
        },

        autoSlug() {
            if (this.editing) return;
            // Voir dashboard/blog.php : les accents etaient supprimes, pas translitteres.
            // Doit rester identique a generateSlug() dans helpers/functions.php.
            this.form.slug = this.form.title
                .replace(/[œŒ]/g, 'oe').replace(/[æÆ]/g, 'ae')
                .normalize('NFD').replace(/[\u0300-\u036f]/g, '')
                .toLowerCase()
                .replace(/[^a-z0-9]+/g, '-')
                .replace(/^-|-$/g, '');
        },

        addTag() {
            const tag = this.newTag.trim();
            if (tag && !this.form.technologies.includes(tag)) {
                this.form.technologies.push(tag);
            }
            this.newTag = '';
        },

        async save() {
            if (this.quill) {
                this.form.description_long = this.quill.root.innerHTML;
                if (this.form.description_long === '<p><br></p>') this.form.description_long = '';
            }

            this.saving = true;
            try {
                if (this.editing) {
                    const res = await apiCall('projects?id=' + this.editingId, 'PUT', this.form);
                    const idx = this.items.findIndex(i => i.id === this.editingId);
                    if (idx >= 0) this.items[idx] = res.data;
                    showToast('Projet mis a jour', 'success');
                } else {
                    const res = await apiCall('projects', 'POST', this.form);
                    this.items.push(res.data);
                    this.editing = true;
                    this.editingId = res.data.id;
                    this.form.image_url = res.data.image_url || '';
                    this.form.gallery = res.data.gallery || [];
                    showToast('Projet cree — vous pouvez ajouter des images', 'success');
                }
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async remove(id) {
            const app = document.querySelector('[x-data]').__x.$data;
            app.confirmModal = {
                show: true, title: 'Supprimer ce projet ?', message: 'Toutes les images seront aussi supprimees. Cette action est irreversible.',
                onConfirm: async () => {
                    try {
                        await apiCall('projects?id=' + id, 'DELETE', { id });
                        this.items = this.items.filter(i => i.id !== id);
                        this.view = 'list';
                        showToast('Projet supprime', 'success');
                    } catch (e) { showToast(e.message, 'error'); }
                }
            };
        },

        // -- Image uploads --
        async uploadImage(event, type) {
            const file = event.target.files[0];
            if (!file || !this.editingId) return;

            const fd = new FormData();
            fd.append('file', file);
            fd.append('type', type);
            fd.append('project_id', this.editingId);
            fd.append('action', 'upload_gallery');

            try {
                const res = await fetch('/api/projects.php', {
                    method: 'POST',
                    headers: { 'X-CSRF-Token': CSRF_TOKEN },
                    body: fd,
                });
                const json = await res.json();
                if (!json.success) throw new Error(json.message);

                if (type === 'main') {
                    this.form.image_url = json.data.path;
                    const idx = this.items.findIndex(i => i.id === this.editingId);
                    if (idx >= 0) this.items[idx].image_url = json.data.path;
                }
                showToast('Image uploadee', 'success');
            } catch (e) { showToast(e.message, 'error'); }
            event.target.value = '';
        },

        async uploadGalleryImages(event) {
            const files = event.target.files;
            if (!files.length || !this.editingId) return;

            for (const file of files) {
                if (this.form.gallery.length >= 10) {
                    showToast('Maximum 10 images', 'warning');
                    break;
                }

                const fd = new FormData();
                fd.append('file', file);
                fd.append('type', 'gallery');
                fd.append('project_id', this.editingId);
                fd.append('action', 'upload_gallery');

                try {
                    const res = await fetch('/api/projects.php', {
                        method: 'POST',
                        headers: { 'X-CSRF-Token': CSRF_TOKEN },
                        body: fd,
                    });
                    const json = await res.json();
                    if (!json.success) throw new Error(json.message);
                    this.form.gallery.push(json.data.path);
                } catch (e) { showToast(e.message, 'error'); }
            }
            event.target.value = '';
        },

        async removeGalleryImage(imagePath) {
            try {
                await apiCall('projects', 'DELETE', { gallery_image: imagePath, project_id: this.editingId });
                this.form.gallery = this.form.gallery.filter(img => img !== imagePath);
                showToast('Image supprimee', 'success');
            } catch (e) { showToast(e.message, 'error'); }
        },
    };
}
</script>

<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>
