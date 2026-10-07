<?php
// ============================================================
// Nom du fichier : dashboard/blog.php
// Description    : Gestion des articles de blog
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

$dashboardTitle = 'Blog';
require_once __DIR__ . '/../includes/dashboard-layout.php';
?>

<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
<style>
/* Éditeur enrichi */
#blog-quill { min-height: 500px; font-size: 1rem; font-family: inherit; }
#blog-quill .ql-editor { min-height: 460px; font-size: 1rem; line-height: 1.75; padding: 1.25rem 1.5rem; }
#blog-quill .ql-editor h1 { font-size: 1.75rem; font-weight: 800; margin-bottom: .5rem; }
#blog-quill .ql-editor h2 { font-size: 1.375rem; font-weight: 700; margin-bottom: .5rem; }
#blog-quill .ql-editor h3 { font-size: 1.125rem; font-weight: 700; margin-bottom: .5rem; }
#blog-quill .ql-editor blockquote { border-left: 4px solid #3b82f6; padding: .5rem 1rem; margin: 1rem 0; background: #eff6ff; border-radius: 0 6px 6px 0; color: #1e40af; }
#blog-quill .ql-editor pre { background: #1e293b; color: #e2e8f0; padding: 1rem; border-radius: 8px; font-size: .875rem; }
#blog-quill .ql-toolbar.ql-snow { border-radius: 10px 10px 0 0; background: #f9fafb; border-color: #d1d5db; padding: .5rem; position: sticky; top: 0; z-index: 10; }
#blog-quill .ql-container.ql-snow { border-color: #d1d5db; border-radius: 0 0 10px 10px; }
</style>

<div x-data="blogPage()" x-init="init()">

    <!-- ============================================================ -->
    <!-- VIEW: List                                                   -->
    <!-- ============================================================ -->
    <div x-show="view === 'list'" x-cloak>
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
            <div class="flex gap-2">
                <template x-for="f in statusFilters" :key="f.v">
                    <button @click="filterStatus = f.v"
                            :class="filterStatus === f.v ? 'bg-blue-600 text-white border-blue-600' : 'bg-white text-gray-600 border-gray-300 hover:bg-gray-50'"
                            class="px-3 py-1.5 rounded-lg text-sm font-medium border transition-colors" x-text="f.l"></button>
                </template>
            </div>
            <button @click="openNew()" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 transition-colors shrink-0">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                Nouvel article
            </button>
        </div>

        <div x-show="loading" class="flex justify-center py-12"><svg class="w-8 h-8 animate-spin text-blue-600" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg></div>

        <template x-if="!loading && filteredItems.length === 0">
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-12 text-center">
                <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125"/></svg>
                <h3 class="text-lg font-semibold text-gray-900 mb-1">Aucun article</h3>
                <p class="text-sm text-gray-500 mb-4">Partagez vos idees et votre expertise.</p>
                <button @click="openNew()" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100">Ecrire un article</button>
            </div>
        </template>

        <div x-show="!loading && filteredItems.length > 0" class="space-y-3">
            <template x-for="item in filteredItems" :key="item.id">
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 hover:shadow-md transition-shadow group cursor-pointer" @click="openEdit(item)">
                    <div class="flex items-center gap-4 p-4">
                        <!-- Thumbnail -->
                        <div class="w-20 h-14 rounded-lg bg-gray-100 overflow-hidden shrink-0">
                            <template x-if="item.cover_image"><img :src="'/uploads/' + item.cover_image" class="w-full h-full object-cover"></template>
                            <template x-if="!item.cover_image"><div class="w-full h-full flex items-center justify-center text-gray-300"><svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Z"/></svg></div></template>
                        </div>
                        <!-- Content -->
                        <div class="flex-1 min-w-0">
                            <h3 class="text-sm font-semibold text-gray-900 truncate" x-text="item.title"></h3>
                            <div class="flex flex-wrap items-center gap-2 mt-1 text-xs text-gray-500">
                                <span class="px-1.5 py-0.5 rounded-full text-[10px] font-semibold"
                                      :class="item.status === 'published' ? 'bg-green-100 text-green-700' : 'bg-amber-100 text-amber-700'"
                                      x-text="item.status === 'published' ? 'Publie' : 'Brouillon'"></span>
                                <span x-show="item.category" x-text="item.category"></span>
                                <span x-show="item.reading_time" x-text="item.reading_time + ' min de lecture'"></span>
                                <span x-show="item.published_at" x-text="item.published_at ? item.published_at.substring(0, 10) : ''"></span>
                            </div>
                        </div>
                        <!-- Actions -->
                        <div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity shrink-0">
                            <button @click.stop="openEdit(item)" class="p-1.5 rounded-lg text-gray-400 hover:text-blue-600 hover:bg-blue-50"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Z"/></svg></button>
                            <button @click.stop="remove(item.id)" class="p-1.5 rounded-lg text-gray-400 hover:text-red-600 hover:bg-red-50"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/></svg></button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- ============================================================ -->
    <!-- VIEW: Form                                                   -->
    <!-- ============================================================ -->
    <div x-show="view === 'form'" x-cloak>
        <div class="flex items-center gap-3 mb-6">
            <button @click="backToList()" class="p-2 rounded-lg text-gray-400 hover:text-gray-600 hover:bg-gray-100">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/></svg>
            </button>
            <h2 class="text-lg font-semibold text-gray-900 font-heading" x-text="editing ? 'Modifier l\'article' : 'Nouvel article'"></h2>
            <div class="ml-auto flex gap-2">
                <button @click="previewOpen = true" class="px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                    <svg class="w-4 h-4 inline mr-1" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg>
                    Apercu
                </button>
                <button @click="backToList()" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">Annuler</button>
                <button @click="save()" :disabled="saving" class="inline-flex items-center gap-2 px-5 py-2 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">
                    <svg x-show="saving" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
                    <span x-text="saving ? '...' : 'Enregistrer'"></span>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
            <div class="xl:col-span-2 space-y-6">
                <!-- Titre + Slug -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Titre <span class="text-red-500">*</span></label>
                            <input type="text" x-model="form.title" @input="autoSlug()" maxlength="255" class="w-full rounded-lg border border-gray-300 px-3 py-2.5 text-base font-semibold focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Un titre accrocheur...">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Slug</label>
                            <div class="flex items-center gap-1 text-sm text-gray-500">
                                <span>/blog/</span>
                                <input type="text" x-model="form.slug" maxlength="255" class="flex-1 rounded-lg border border-gray-300 px-3 py-1.5 text-sm font-mono focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Resume -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <label class="flex items-center justify-between text-sm font-medium text-gray-700 mb-1">
                        <span>En bref (2 à 4 phrases, affiché sous le titre)</span>
                        <span class="text-xs font-normal" :class="(form.summary||'').length > 270 ? 'text-amber-600' : 'text-gray-400'" x-text="(form.summary||'').length + ' / 300'"></span>
                    </label>
                    <textarea x-model="form.summary" maxlength="500" rows="2" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none resize-none" placeholder="Resume affiche dans la liste des articles..."></textarea>
                    <label class="block text-sm font-semibold text-gray-700 mb-1 mt-4">Meta description
                      <span class="text-xs font-normal" :class="(form.meta||'').length < 140 || (form.meta||'').length > 155 ? 'text-amber-600' : 'text-gray-400'" x-text="(form.meta||'').length + ' / 140 à 155'"></span>
                    </label>
                    <textarea x-model="form.meta" maxlength="160" rows="2" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none resize-none" placeholder="Phrase complète affichée par Google sous le titre..."></textarea>
                </div>

                <!-- Contenu -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <div class="flex items-center justify-between mb-2">
                        <label class="text-sm font-medium text-gray-700">Contenu</label>
                        <div class="flex items-center gap-3">
                            <button type="button" @click="toggleHtmlMode()"
                                    class="text-xs font-medium inline-flex items-center gap-1"
                                    :class="htmlMode ? 'text-amber-600 hover:text-amber-700' : 'text-gray-500 hover:text-gray-700'">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m8 6-6 6 6 6M16 6l6 6-6 6"/></svg>
                                <span x-text="htmlMode ? 'Éditeur visuel' : 'Code HTML'"></span>
                            </button>
                            <button type="button" x-show="!htmlMode" @click="showImport = !showImport" class="text-xs font-medium text-blue-600 hover:text-blue-700 inline-flex items-center gap-1">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
                                Importer HTML
                            </button>
                            <span class="text-xs text-gray-400" x-text="readingTimeText"></span>
                        </div>
                    </div>
                    <div x-show="showImport" x-cloak class="mb-3 rounded-lg border border-blue-200 bg-blue-50 p-3">
                        <p class="text-xs text-gray-600 mb-2">Colle ici le <strong>code HTML</strong> d'un article (ex. fourni par Claude), puis clique sur « Insérer ». Il sera converti en texte mis en forme.</p>
                        <textarea x-model="importHtmlText" rows="6" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-xs font-mono focus:border-blue-500 focus:outline-none" placeholder="<p>Votre HTML ici...</p>"></textarea>
                        <div class="flex gap-2 mt-2">
                            <button type="button" @click="doImport()" class="px-3 py-1.5 rounded-lg bg-blue-600 text-white text-xs font-medium hover:bg-blue-700">Insérer dans l'éditeur</button>
                            <button type="button" @click="showImport = false" class="px-3 py-1.5 rounded-lg bg-white border border-gray-300 text-gray-600 text-xs">Annuler</button>
                        </div>
                    </div>
                    <!-- Mode code HTML : enregistre le contenu tel quel, sans passer par Quill.
                         Quill ne connait pas le format "table" et supprime tout <table> qu'il
                         rencontre : c'est le seul moyen d'inserer un tableau comparatif. -->
                    <div x-show="htmlMode" x-cloak>
                        <div class="mb-2 rounded-lg border border-amber-200 bg-amber-50 p-3 text-xs text-amber-900 leading-relaxed">
                            <strong>Mode code HTML.</strong> Ce que vous écrivez ici est enregistré <strong>tel quel</strong>.
                            C'est le seul moyen de conserver un tableau <code class="font-mono">&lt;table&gt;</code>.<br>
                            ⚠️ Repasser à l'éditeur visuel <strong>supprimera les tableaux</strong> : enregistrez depuis ce mode.
                        </div>
                        <textarea x-model="htmlSource" rows="24" spellcheck="false"
                                  class="w-full rounded-lg border border-gray-300 px-3 py-2 text-xs font-mono leading-relaxed focus:border-blue-500 focus:outline-none"
                                  placeholder="<p>Votre HTML...</p>"></textarea>
                    </div>
                    <div id="blog-quill" x-show="!htmlMode" class="rounded-lg border border-gray-300 overflow-hidden" style="min-height: 300px;"></div>
                </div>

                <!-- URL externe -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">URL externe <span class="font-normal text-gray-400">(si l'article est publie ailleurs)</span></label>
                    <input type="url" x-model="form.external_url" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://medium.com/...">
                    <p class="text-xs text-gray-400 mt-1">Si renseigne, le lien pointera vers cette URL au lieu d'afficher le contenu.</p>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Statut + Date -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <h3 class="text-base font-semibold text-gray-900 mb-4">Publication</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
                            <select x-model="form.status" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                                <option value="draft">Brouillon</option>
                                <option value="published">Publie</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Date de publication</label>
                            <input type="datetime-local" x-model="form.published_at" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                        </div>
                    </div>
                </div>

                <!-- Image de couverture -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <h3 class="text-base font-semibold text-gray-900 mb-3">Image de couverture</h3>
                    <div class="aspect-video rounded-lg bg-gray-100 overflow-hidden mb-3 flex items-center justify-center">
                        <template x-if="form.cover_image"><img :src="coverPreview || ('/uploads/' + form.cover_image)" class="w-full h-full object-cover"></template>
                        <template x-if="!form.cover_image && !coverPreview"><span class="text-gray-300 text-xs">Aucune image</span></template>
                        <template x-if="!form.cover_image && coverPreview"><img :src="coverPreview" class="w-full h-full object-cover"></template>
                    </div>
                    <label class="inline-flex items-center gap-2 px-3 py-2 rounded-lg text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 cursor-pointer transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5"/></svg>
                        Choisir
                        <input type="file" class="hidden" accept="image/*" @change="uploadCover($event)">
                    </label>
                </div>

                <!-- Galerie d'images -->
                <div x-show="editing" class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="text-base font-semibold text-gray-900">Galerie</h3>
                        <span class="text-xs text-gray-400" x-text="galleryImages.length + ' image(s)'"></span>
                    </div>
                    <div class="grid grid-cols-3 gap-2 mb-3" x-show="galleryImages.length > 0">
                        <template x-for="img in galleryImages" :key="img.id">
                            <div class="relative group aspect-square rounded-lg overflow-hidden bg-gray-100">
                                <img :src="'/uploads/' + img.image_path" class="w-full h-full object-cover" loading="lazy">
                                <button @click="removeGalleryImage(img.id)"
                                        class="absolute inset-0 flex items-center justify-center bg-red-600/0 group-hover:bg-red-600/80 transition-all text-white opacity-0 group-hover:opacity-100"
                                        aria-label="Supprimer cette image">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/></svg>
                                </button>
                            </div>
                        </template>
                    </div>
                    <label class="flex items-center gap-2 px-3 py-2 rounded-lg text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 cursor-pointer transition-colors w-full justify-center"
                           :class="galleryUploading ? 'opacity-50 pointer-events-none' : ''">
                        <svg x-show="!galleryUploading" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5"/></svg>
                        <svg x-show="galleryUploading" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
                        <span x-text="galleryUploading ? 'Upload en cours...' : 'Ajouter des images'"></span>
                        <input type="file" class="hidden" accept="image/*" multiple
                               @change="uploadGalleryImage($event)"
                               :disabled="galleryUploading">
                    </label>
                    <p class="text-xs text-gray-400 mt-2">JPG, PNG, WebP — max 5 Mo par image. Sélection multiple possible.</p>
                </div>

                <!-- Categorie -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <h3 class="text-base font-semibold text-gray-900 mb-3">Categorie</h3>
                    <input type="text" x-model="form.category" list="blog-cat-suggestions" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Tutoriel, Reflexion...">
                    <datalist id="blog-cat-suggestions">
                        <template x-for="c in existingCategories" :key="c"><option :value="c"></option></template>
                    </datalist>
                </div>

                <!-- Tags -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <h3 class="text-base font-semibold text-gray-900 mb-3">Tags</h3>
                    <div class="flex flex-wrap gap-1.5 mb-2">
                        <template x-for="(tag, i) in form.tags" :key="i">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-lg bg-blue-50 text-blue-700 text-sm">
                                <span x-text="tag"></span>
                                <button @click="form.tags.splice(i, 1)" class="p-0.5 rounded hover:bg-blue-200"><svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg></button>
                            </span>
                        </template>
                    </div>
                    <div class="flex gap-2">
                        <input type="text" x-model="newTag" @keydown.enter.prevent="addTag()" list="blog-tag-suggestions" class="flex-1 rounded-lg border border-gray-300 px-3 py-1.5 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Ajouter un tag...">
                        <button @click="addTag()" type="button" class="px-3 py-1.5 rounded-lg text-sm text-blue-600 bg-blue-50 hover:bg-blue-100">+</button>
                    </div>
                    <datalist id="blog-tag-suggestions">
                        <template x-for="t in existingTags" :key="t"><option :value="t"></option></template>
                    </datalist>
                </div>

                <!-- Temps de lecture -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <h3 class="text-base font-semibold text-gray-900 mb-3">Temps de lecture</h3>
                    <div class="flex items-center gap-2">
                        <input type="number" x-model.number="form.reading_time" min="1" max="120" class="w-20 rounded-lg border border-gray-300 px-3 py-2 text-sm text-center focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                        <span class="text-sm text-gray-500">min</span>
                        <button @click="calcReadingTime()" type="button" class="ml-auto text-xs text-blue-600 hover:text-blue-700 font-medium">Auto-calculer</button>
                    </div>
                </div>

                <!-- Danger zone -->
                <div x-show="editing" class="bg-white rounded-2xl shadow-sm ring-1 ring-red-200 p-6">
                    <button @click="remove(editingId)" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-red-600 bg-red-50 hover:bg-red-100 transition-colors">Supprimer cet article</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================ -->
    <!-- PREVIEW Modal                                                -->
    <!-- ============================================================ -->
    <div x-show="previewOpen" x-cloak class="fixed inset-0 z-[80] flex items-start justify-center overflow-y-auto p-4 pt-8 pb-10">
        <div class="absolute inset-0 bg-gray-900/60" @click="previewOpen = false" x-transition.opacity></div>
        <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-2xl z-10" x-transition @click.outside="previewOpen = false">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900">Apercu de l'article</h2>
                <button @click="previewOpen = false" class="p-1 rounded-lg text-gray-400 hover:text-gray-600 hover:bg-gray-100"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg></button>
            </div>
            <div class="px-6 py-6 max-h-[80vh] overflow-y-auto">
                <template x-if="form.cover_image || coverPreview">
                    <div class="aspect-video rounded-xl overflow-hidden mb-6">
                        <img :src="coverPreview || ('/uploads/' + form.cover_image)" class="w-full h-full object-cover">
                    </div>
                </template>
                <div class="flex flex-wrap items-center gap-2 mb-3 text-xs text-gray-500">
                    <span x-show="form.category" class="px-2 py-0.5 rounded-full bg-blue-100 text-blue-700 font-medium" x-text="form.category"></span>
                    <span x-text="(form.reading_time || '?') + ' min de lecture'"></span>
                    <span x-show="form.published_at" x-text="(form.published_at || '').substring(0, 10)"></span>
                </div>
                <h1 class="text-2xl font-bold text-gray-900 mb-3 font-heading" x-text="form.title || 'Titre de l\'article'"></h1>
                <p x-show="form.summary" class="text-gray-500 mb-6 italic" x-text="form.summary"></p>
                <div class="prose prose-sm max-w-none" x-html="getPreviewContent()"></div>
                <div x-show="form.tags && form.tags.length" class="flex flex-wrap gap-2 mt-6 pt-6 border-t border-gray-200">
                    <template x-for="tag in form.tags" :key="tag">
                        <span class="px-2.5 py-1 rounded-full bg-gray-100 text-gray-600 text-xs font-medium" x-text="'#' + tag"></span>
                    </template>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<script>
function blogPage() {
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
        showImport: false,
        importHtmlText: '',
        htmlMode: false,      // edition du HTML brut (seul moyen de garder les <table>)
        quillDirty: false,    // true seulement si l'editeur visuel a reellement servi
        htmlSource: '',
        previewOpen: false,
        coverPreview: null,
        galleryImages: [],
        galleryUploading: false,
        existingTags: [],
        existingCategories: [],

        statusFilters: [
            { v: 'all', l: 'Tous' },
            { v: 'published', l: 'Publies' },
            { v: 'draft', l: 'Brouillons' },
        ],

        form: {
            title: '', slug: '', summary: '', meta: '', content: '', cover_image: '',
            category: '', tags: [], reading_time: null, external_url: '',
            status: 'draft', published_at: '',
        },

        emptyForm() {
            return {
                title: '', slug: '', summary: '', meta: '', content: '', cover_image: '',
                category: '', tags: [], reading_time: null, external_url: '',
                status: 'draft', published_at: '',
            };
        },

        get filteredItems() {
            if (this.filterStatus === 'all') return this.items;
            return this.items.filter(i => i.status === this.filterStatus);
        },

        get readingTimeText() {
            if (!this.quill) return '';
            const words = this.quill.getText().trim().split(/\s+/).filter(w => w).length;
            const mins = Math.max(1, Math.ceil(words / 250));
            return words + ' mots — ~' + mins + ' min';
        },

        async init() {
            await this.load();
        },

        async load() {
            this.loading = true;
            try {
                const res = await apiCall('blog');
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
            this.coverPreview = null;
            this.galleryImages = [];
            this.htmlMode = false;
            this.htmlSource = '';
            this.view = 'form';
            this.$nextTick(() => this.initQuill());
        },

        openEdit(item) {
            this.editing = true;
            this.editingId = item.id;
            this.form = {
                ...item,
                tags: [...(item.tags || [])],
                published_at: item.published_at ? item.published_at.replace(' ', 'T').substring(0, 16) : '',
            };
            this.coverPreview = null;
            this.galleryImages = [];
            this.htmlMode = false;
            this.htmlSource = '';
            this.view = 'form';
            this.$nextTick(() => {
                this.initQuill();
                this.loadGallery();
            });
        },

        backToList() {
            this.view = 'list';
            this.quill = null;
            this.galleryImages = [];
            this.htmlMode = false;
            this.htmlSource = '';
        },

        initQuill() {
            const el = document.getElementById('blog-quill');
            if (!el) return;
            el.innerHTML = '';

            const self = this;

            this.quill = new Quill(el, {
                theme: 'snow',
                placeholder: 'Écrivez votre article ici...',
                modules: {
                    toolbar: {
                        container: [
                            [{ header: [1, 2, 3, 4, false] }],
                            [{ font: [] }],
                            [{ size: ['small', false, 'large', 'huge'] }],
                            ['bold', 'italic', 'underline', 'strike'],
                            [{ color: [] }, { background: [] }],
                            [{ script: 'sub' }, { script: 'super' }],
                            [{ align: [] }],
                            [{ indent: '-1' }, { indent: '+1' }],
                            [{ list: 'ordered' }, { list: 'bullet' }],
                            ['blockquote', 'code-block'],
                            ['link', 'image', 'video'],
                            ['clean'],
                        ],
                        handlers: {
                            image: function() {
                                // Upload image dans l'éditeur via l'API blog
                                const input = document.createElement('input');
                                input.setAttribute('type', 'file');
                                input.setAttribute('accept', 'image/*');
                                input.click();
                                input.onchange = async () => {
                                    const file = input.files[0];
                                    if (!file || !self.editingId) {
                                        showToast('Sauvegardez l\'article avant d\'insérer une image', 'info');
                                        return;
                                    }
                                    const fd = new FormData();
                                    fd.append('file', file);
                                    fd.append('action', 'upload_cover');
                                    fd.append('post_id', self.editingId);
                                    try {
                                        const res = await fetch('/api/blog.php', {
                                            method: 'POST',
                                            headers: { 'X-CSRF-Token': CSRF_TOKEN },
                                            body: fd,
                                        });
                                        const json = await res.json();
                                        if (!json.success) throw new Error(json.message);
                                        const range = self.quill.getSelection(true);
                                        self.quill.insertEmbed(range.index, 'image', json.data.url);
                                        self.quill.setSelection(range.index + 1);
                                    } catch(e) { showToast(e.message, 'error'); }
                                };
                            }
                        }
                    }
                }
            });

            if (this.form.content) {
                this.quill.root.innerHTML = this.form.content;
            }

            // Quill normalise le HTML des qu'il le charge : il aplatit les lignes
            // de tableau et jette <thead>/<th>. Son DOM n'est donc PAS une source
            // fiable tant que l'utilisateur n'a rien modifie visuellement.
            // quillDirty distingue "contenu charge depuis la base" (intact, a
            // preserver) de "contenu reellement edite ici" (a reprendre du DOM).
            this.quillDirty = false;
            this.quill.on('text-change', (delta, oldDelta, source) => {
                if (source === 'user') this.quillDirty = true;
            });
        },

        doImport() {
            if (!this.quill) { showToast('Éditeur non prêt', 'error'); return; }
            const html = (this.importHtmlText || '').trim();
            if (!html) { showToast('Colle d\'abord du HTML', 'info'); return; }
            // Convertit le HTML en contenu mis en forme dans Quill
            this.quill.clipboard.dangerouslyPasteHTML(html);
            this.quillDirty = true;
            this.form.content = this.quill.root.innerHTML;
            this.calcReadingTime();
            this.importHtmlText = '';
            this.showImport = false;
            showToast('Contenu importé et mis en forme ✓', 'success');
        },

        autoSlug() {
            if (this.editing) return;
            // Corrige le 20/08/2026 : toLowerCase() ne decompose pas les accents et
            // [^a-z0-9\s-] les SUPPRIMAIT au lieu de les transliterer -> "coute"
            // devenait "cote", "etape" devenait "tape", "definition" -> "dfinition".
            // normalize('NFD') separe la lettre de son accent, qu'on retire ensuite.
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
            if (tag && !this.form.tags.includes(tag)) this.form.tags.push(tag);
            this.newTag = '';
        },

        // Bascule editeur visuel <-> code HTML brut.
        toggleHtmlMode() {
            if (!this.htmlMode) {
                // On repart de form.content (valeur exacte de la base) sauf si
                // l'utilisateur a reellement edite dans l'editeur visuel.
                // Lire quill.root.innerHTML sans cette garde renvoyait la version
                // deja aplatie par Quill — et detruisait les tableaux.
                this.htmlSource = (this.quillDirty && this.quill)
                    ? this.quill.root.innerHTML
                    : (this.form.content || '');
                if (this.htmlSource === '<p><br></p>') this.htmlSource = '';
                this.showImport = false;
                this.htmlMode = true;
                return;
            }
            // Retour au visuel : Quill re-analyse le HTML et jette ce qu'il ne connait pas.
            if (!confirm("Revenir a l'editeur visuel ?\n\nL'editeur ne gere pas les tableaux : tout <table> present sera supprime.\n\nPour conserver votre HTML, annulez et enregistrez depuis le mode code.")) return;
            this.form.content = this.htmlSource;
            if (this.quill) this.quill.root.innerHTML = this.htmlSource;
            this.htmlMode = false;
        },

        calcReadingTime() {
            let words;
            if (this.htmlMode) {
                const tmp = document.createElement('div');
                tmp.innerHTML = this.htmlSource || '';
                words = (tmp.textContent || '').trim().split(/\s+/).filter(w => w).length;
            } else {
                if (!this.quill) return;
                words = this.quill.getText().trim().split(/\s+/).filter(w => w).length;
            }
            this.form.reading_time = Math.max(1, Math.ceil(words / 250));
        },

        getPreviewContent() {
            if (this.htmlMode) return this.htmlSource || '<p class="text-gray-400">Aucun contenu...</p>';
            if (this.quill) return this.quill.root.innerHTML;
            return this.form.content || '<p class="text-gray-400">Aucun contenu...</p>';
        },

        async save() {
            if (this.htmlMode) {
                this.form.content = (this.htmlSource || '').trim();
            } else if (this.quill && this.quillDirty) {
                // Uniquement si l'editeur visuel a servi. Sinon on conserve
                // form.content tel qu'il vient de la base : ouvrir un article
                // contenant un tableau puis cliquer Enregistrer detruisait le
                // tableau, sans que rien n'ait ete modifie.
                this.form.content = this.quill.root.innerHTML;
                if (this.form.content === '<p><br></p>') this.form.content = '';
            }
            this.calcReadingTime();

            // Convertir datetime-local en SQL format
            if (this.form.published_at) {
                this.form.published_at = this.form.published_at.replace('T', ' ') + ':00';
            }

            this.saving = true;
            try {
                if (this.editing) {
                    const res = await apiCall('blog?id=' + this.editingId, 'PUT', this.form);
                    const idx = this.items.findIndex(i => i.id === this.editingId);
                    if (idx >= 0) this.items[idx] = res.data;
                    showToast('Article mis a jour', 'success');
                } else {
                    const res = await apiCall('blog', 'POST', this.form);
                    this.items.push(res.data);
                    this.editing = true;
                    this.editingId = res.data.id;
                    showToast('Article cree', 'success');
                }
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async remove(id) {
            const app = document.querySelector('[x-data]').__x.$data;
            app.confirmModal = {
                show: true, title: 'Supprimer cet article ?', message: 'Cette action est irreversible.',
                onConfirm: async () => {
                    try {
                        await apiCall('blog?id=' + id, 'DELETE', { id });
                        this.items = this.items.filter(i => i.id !== id);
                        if (this.view === 'form') this.view = 'list';
                        showToast('Article supprime', 'success');
                    } catch (e) { showToast(e.message, 'error'); }
                }
            };
        },

        async loadGallery() {
            if (!this.editingId) return;
            try {
                const res = await fetch('/api/blog-images.php?post_id=' + this.editingId, {
                    headers: { 'X-CSRF-Token': CSRF_TOKEN }
                });
                const json = await res.json();
                if (json.success) this.galleryImages = json.data.images;
            } catch (e) { /* silencieux */ }
        },

        async uploadGalleryImage(event) {
            const files = [...event.target.files];
            event.target.value = '';
            if (!files.length || !this.editingId) return;
            this.galleryUploading = true;
            for (const file of files) {
                const fd = new FormData();
                fd.append('file', file);
                fd.append('post_id', this.editingId);
                try {
                    const res = await fetch('/api/blog-images.php', {
                        method: 'POST',
                        headers: { 'X-CSRF-Token': CSRF_TOKEN },
                        body: fd,
                    });
                    const json = await res.json();
                    if (!json.success) throw new Error(json.message);
                    this.galleryImages.push(json.data);
                    showToast('Image ajoutee', 'success');
                } catch (e) { showToast(e.message, 'error'); }
            }
            this.galleryUploading = false;
        },

        async removeGalleryImage(id) {
            try {
                const res = await fetch('/api/blog-images.php?id=' + id, {
                    method: 'DELETE',
                    headers: { 'X-CSRF-Token': CSRF_TOKEN, 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id }),
                });
                const json = await res.json();
                if (!json.success) throw new Error(json.message);
                this.galleryImages = this.galleryImages.filter(img => img.id !== id);
                showToast('Image supprimee', 'success');
            } catch (e) { showToast(e.message, 'error'); }
        },

        async uploadCover(event) {
            const file = event.target.files[0];
            if (!file) return;
            // Preview instantane
            const reader = new FileReader();
            reader.onload = (e) => { this.coverPreview = e.target.result; };
            reader.readAsDataURL(file);

            if (!this.editingId) {
                showToast('Enregistrez d\'abord l\'article, puis ajoutez l\'image', 'info');
                event.target.value = '';
                return;
            }

            const fd = new FormData();
            fd.append('file', file);
            fd.append('action', 'upload_cover');
            fd.append('post_id', this.editingId);
            try {
                const res = await fetch('/api/blog.php', {
                    method: 'POST',
                    headers: { 'X-CSRF-Token': CSRF_TOKEN },
                    body: fd,
                });
                const json = await res.json();
                if (!json.success) throw new Error(json.message);
                this.form.cover_image = json.data.path;
                this.coverPreview = null;
                const idx = this.items.findIndex(i => i.id === this.editingId);
                if (idx >= 0) this.items[idx].cover_image = json.data.path;
                showToast('Image de couverture uploadee', 'success');
            } catch (e) { showToast(e.message, 'error'); }
            event.target.value = '';
        },
    };
}
</script>

<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>
