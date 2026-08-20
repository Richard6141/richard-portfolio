<?php
// ============================================================
// Nom du fichier : dashboard/profile.php
// Description    : Gestion du profil personnel (identite, bio, stats, medias)
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

$dashboardTitle = 'Mon profil';
require_once __DIR__ . '/../includes/dashboard-layout.php';

$userId = getCurrentUserId();

// Charger les donnees du profil
$stmt = $pdo->prepare("SELECT * FROM profiles WHERE user_id = ?");
$stmt->execute([$userId]);
$profile = $stmt->fetch();

$stmt = $pdo->prepare("SELECT * FROM about_sections WHERE user_id = ?");
$stmt->execute([$userId]);
$about = $stmt->fetch();

// Construire les URLs d'upload pour les previews
$uploadsBase = '/uploads/' . sanitize($userSlug) . '/';
?>

<!-- Quill.js CSS -->
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">

<div x-data="profilePage()" x-init="init()">

    <!-- Tabs navigation -->
    <div class="border-b border-gray-200 mb-6">
        <nav class="-mb-px flex gap-6 overflow-x-auto" aria-label="Tabs">
            <template x-for="tab in tabs" :key="tab.id">
                <button @click="activeTab = tab.id"
                        :class="activeTab === tab.id
                            ? 'border-blue-600 text-blue-600'
                            : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                        class="whitespace-nowrap border-b-2 py-3 px-1 text-sm font-medium transition-colors">
                    <span x-text="tab.label"></span>
                </button>
            </template>
        </nav>
    </div>

    <!-- ============================================================ -->
    <!-- ONGLET : Identite                                            -->
    <!-- ============================================================ -->
    <div x-show="activeTab === 'identity'" x-cloak>
        <form @submit.prevent="saveIdentity()" class="space-y-6">
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-5">Informations personnelles</h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <!-- Prenom -->
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">Prenom <span class="text-red-500">*</span></label>
                        <input type="text" id="first_name" x-model="identity.first_name" required maxlength="100"
                               class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none"
                               placeholder="Jean">
                    </div>

                    <!-- Nom -->
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                        <input type="text" id="last_name" x-model="identity.last_name" maxlength="100"
                               class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none"
                               placeholder="Dupont">
                    </div>

                    <!-- Profession -->
                    <div class="sm:col-span-2">
                        <label for="profession" class="block text-sm font-medium text-gray-700 mb-1">Profession / Titre</label>
                        <input type="text" id="profession" x-model="identity.profession" maxlength="255"
                               class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none"
                               placeholder="Developpeur Web Full Stack">
                    </div>

                    <!-- Tagline -->
                    <div class="sm:col-span-2">
                        <label for="tagline" class="flex items-center justify-between text-sm font-medium text-gray-700 mb-1">
                            <span>Accroche courte</span>
                            <span class="text-xs font-normal" :class="identity.tagline.length > 240 ? 'text-amber-600' : 'text-gray-400'"
                                  x-text="identity.tagline.length + ' / 255'"></span>
                        </label>
                        <input type="text" id="tagline" x-model="identity.tagline" maxlength="255"
                               class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none"
                               placeholder="Je cree des experiences web modernes et performantes">
                    </div>

                    <!-- Ville -->
                    <div>
                        <label for="location_city" class="block text-sm font-medium text-gray-700 mb-1">Ville</label>
                        <input type="text" id="location_city" x-model="identity.location_city" maxlength="100"
                               class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none"
                               placeholder="Lyon">
                    </div>

                    <!-- Pays -->
                    <div>
                        <label for="location_country" class="block text-sm font-medium text-gray-700 mb-1">Pays</label>
                        <input type="text" id="location_country" x-model="identity.location_country" maxlength="100"
                               class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none"
                               placeholder="France">
                    </div>
                </div>
            </div>

            <!-- Disponibilite -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-base font-semibold text-gray-900 font-heading">Disponibilite</h3>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" x-model="identity.is_available" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:bg-blue-600 peer-focus:ring-4 peer-focus:ring-blue-500/20 after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:after:translate-x-full"></div>
                    </label>
                </div>
                <div x-show="identity.is_available" x-collapse>
                    <label for="availability_text" class="block text-sm font-medium text-gray-700 mb-1">Message de disponibilite</label>
                    <input type="text" id="availability_text" x-model="identity.availability_text" maxlength="255"
                           class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none"
                           placeholder="Disponible pour des missions freelance">
                </div>
            </div>

            <!-- Save button -->
            <div class="flex justify-end">
                <button type="submit" :disabled="saving"
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed transition-colors">
                    <svg x-show="saving" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
                    <span x-text="saving ? 'Enregistrement...' : 'Enregistrer'"></span>
                </button>
            </div>
        </form>
    </div>

    <!-- ============================================================ -->
    <!-- ONGLET : Bio                                                 -->
    <!-- ============================================================ -->
    <div x-show="activeTab === 'bio'" x-cloak>
        <form @submit.prevent="saveBio()" class="space-y-6">
            <!-- Bio courte -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <label class="flex items-center justify-between text-sm font-medium text-gray-700 mb-2">
                    <span>Bio courte <span class="font-normal text-gray-400">(affichee dans le hero)</span></span>
                    <span class="text-xs font-normal" :class="bio.bio_short.length > 270 ? 'text-amber-600' : 'text-gray-400'"
                          x-text="bio.bio_short.length + ' / 300'"></span>
                </label>
                <textarea x-model="bio.bio_short" maxlength="500" rows="3"
                          class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none resize-none"
                          placeholder="Presentez-vous en quelques phrases..."></textarea>
            </div>

            <!-- Bio longue (Quill WYSIWYG) -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Bio longue <span class="font-normal text-gray-400">(section A propos du portfolio)</span>
                </label>
                <div id="quill-editor" class="rounded-lg border border-gray-300 overflow-hidden" style="min-height: 200px;"></div>
            </div>

            <!-- Save button -->
            <div class="flex justify-end">
                <button type="submit" :disabled="saving"
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed transition-colors">
                    <svg x-show="saving" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
                    <span x-text="saving ? 'Enregistrement...' : 'Enregistrer'"></span>
                </button>
            </div>
        </form>
    </div>

    <!-- ============================================================ -->
    <!-- ONGLET : Stats                                               -->
    <!-- ============================================================ -->
    <div x-show="activeTab === 'stats'" x-cloak>
        <form @submit.prevent="saveStats()" class="space-y-6">
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-1">Statistiques personnelles</h3>
                <p class="text-sm text-gray-500 mb-5">4 chiffres cles affiches sur votre portfolio. Laissez vide pour masquer.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <template x-for="(stat, i) in stats" :key="i">
                        <div class="flex gap-3 items-start p-4 rounded-xl bg-gray-50 border border-gray-100">
                            <div class="w-16 shrink-0">
                                <label :for="'stat_val_' + i" class="block text-xs font-medium text-gray-500 mb-1">Valeur</label>
                                <input :id="'stat_val_' + i" type="text" x-model="stat.value" maxlength="50"
                                       class="w-full rounded-lg border border-gray-300 px-2 py-1.5 text-center text-lg font-bold text-gray-900 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none"
                                       placeholder="5">
                            </div>
                            <div class="flex-1">
                                <label :for="'stat_label_' + i" class="block text-xs font-medium text-gray-500 mb-1">Label</label>
                                <input :id="'stat_label_' + i" type="text" x-model="stat.label" maxlength="100"
                                       class="w-full rounded-lg border border-gray-300 px-3 py-1.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none"
                                       placeholder="Ans d'experience">
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Preview -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h4 class="text-sm font-medium text-gray-500 mb-4">Apercu sur le portfolio</h4>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                    <template x-for="(stat, i) in stats" :key="'preview_' + i">
                        <div x-show="stat.value || stat.label" class="text-center p-4 rounded-xl bg-gray-50">
                            <p class="text-2xl font-bold text-blue-600" x-text="stat.value || '—'"></p>
                            <p class="text-sm text-gray-600 mt-1" x-text="stat.label || '—'"></p>
                        </div>
                    </template>
                </div>
                <p x-show="!stats.some(s => s.value || s.label)" class="text-sm text-gray-400 text-center py-6">
                    Remplissez les champs ci-dessus pour voir l'apercu.
                </p>
            </div>

            <!-- Save button -->
            <div class="flex justify-end">
                <button type="submit" :disabled="saving"
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed transition-colors">
                    <svg x-show="saving" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
                    <span x-text="saving ? 'Enregistrement...' : 'Enregistrer'"></span>
                </button>
            </div>
        </form>
    </div>

    <!-- ============================================================ -->
    <!-- ONGLET : Medias                                              -->
    <!-- ============================================================ -->
    <div x-show="activeTab === 'media'" x-cloak>
        <div class="space-y-6">

            <!-- Avatar -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-1">Photo de profil</h3>
                <p class="text-sm text-gray-500 mb-4">Format carre recommande. Max 2 MB. JPG, PNG ou WebP.</p>
                <div class="flex items-center gap-6">
                    <!-- Preview -->
                    <div class="shrink-0">
                        <template x-if="media.avatar_url">
                            <img :src="media.avatar_preview || ('/uploads/' + media.avatar_url)" alt="Avatar"
                                 class="w-24 h-24 rounded-full object-cover ring-4 ring-gray-100">
                        </template>
                        <template x-if="!media.avatar_url">
                            <div class="w-24 h-24 rounded-full bg-blue-100 flex items-center justify-center ring-4 ring-gray-100">
                                <svg class="w-10 h-10 text-blue-300" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
                                </svg>
                            </div>
                        </template>
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center gap-3">
                            <label class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 cursor-pointer transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5"/></svg>
                                Choisir une photo
                                <input type="file" class="hidden" accept="image/jpeg,image/png,image/webp"
                                       @change="uploadMedia($event, 'avatar')">
                            </label>
                            <button x-show="media.avatar_url" @click="deleteMedia('avatar')" type="button"
                                    class="inline-flex items-center gap-1 px-3 py-2 rounded-lg text-sm font-medium text-red-600 hover:bg-red-50 transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/></svg>
                                Supprimer
                            </button>
                        </div>
                        <!-- Progress bar -->
                        <div x-show="uploading.avatar" class="mt-3">
                            <div class="w-full h-1.5 bg-gray-100 rounded-full overflow-hidden">
                                <div class="h-full bg-blue-600 rounded-full transition-all duration-300" :style="'width:' + uploadProgress.avatar + '%'"></div>
                            </div>
                            <p class="text-xs text-gray-500 mt-1" x-text="uploadProgress.avatar + '%'"></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cover -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-1">Image de couverture</h3>
                <p class="text-sm text-gray-500 mb-4">Format 16:9 recommande (1920x600). Max 10 MB.</p>
                <!-- Preview -->
                <div class="mb-4 rounded-xl overflow-hidden bg-gray-100 aspect-[16/5] flex items-center justify-center">
                    <template x-if="media.cover_url">
                        <img :src="media.cover_preview || ('/uploads/' + media.cover_url)" alt="Cover"
                             class="w-full h-full object-cover">
                    </template>
                    <template x-if="!media.cover_url">
                        <div class="text-center text-gray-400">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909M3.75 21h16.5A2.25 2.25 0 0 0 22.5 18.75V5.25A2.25 2.25 0 0 0 20.25 3H3.75A2.25 2.25 0 0 0 1.5 5.25v13.5A2.25 2.25 0 0 0 3.75 21Z"/></svg>
                            <p class="text-sm">Aucune image de couverture</p>
                        </div>
                    </template>
                </div>
                <div class="flex flex-wrap items-center gap-3">
                    <label class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 cursor-pointer transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5"/></svg>
                        Choisir une image
                        <input type="file" class="hidden" accept="image/jpeg,image/png,image/webp"
                               @change="uploadMedia($event, 'cover')">
                    </label>
                    <button x-show="media.cover_url" @click="deleteMedia('cover')" type="button"
                            class="inline-flex items-center gap-1 px-3 py-2 rounded-lg text-sm font-medium text-red-600 hover:bg-red-50 transition-colors">
                        Supprimer
                    </button>
                </div>
                <div x-show="uploading.cover" class="mt-3">
                    <div class="w-full h-1.5 bg-gray-100 rounded-full overflow-hidden">
                        <div class="h-full bg-blue-600 rounded-full transition-all duration-300" :style="'width:' + uploadProgress.cover + '%'"></div>
                    </div>
                </div>
            </div>

            <!-- CV PDF -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-1">CV (PDF)</h3>
                <p class="text-sm text-gray-500 mb-4">Max 5 MB. Un lien de telechargement sera visible sur votre portfolio.</p>
                <div class="flex flex-wrap items-center gap-3">
                    <template x-if="media.cv_url">
                        <a :href="'/uploads/' + media.cv_url" target="_blank" rel="noopener"
                           class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 transition-colors">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/></svg>
                            Voir le CV
                        </a>
                    </template>
                    <label class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 cursor-pointer transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5"/></svg>
                        <span x-text="media.cv_url ? 'Remplacer le CV' : 'Telecharger un CV'"></span>
                        <input type="file" class="hidden" accept="application/pdf"
                               @change="uploadMedia($event, 'cv')">
                    </label>
                    <button x-show="media.cv_url" @click="deleteMedia('cv')" type="button"
                            class="inline-flex items-center gap-1 px-3 py-2 rounded-lg text-sm font-medium text-red-600 hover:bg-red-50 transition-colors">
                        Supprimer
                    </button>
                </div>
                <div x-show="uploading.cv" class="mt-3">
                    <div class="w-full h-1.5 bg-gray-100 rounded-full overflow-hidden">
                        <div class="h-full bg-blue-600 rounded-full transition-all duration-300" :style="'width:' + uploadProgress.cv + '%'"></div>
                    </div>
                </div>
            </div>

            <!-- OG Image -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                <h3 class="text-base font-semibold text-gray-900 font-heading mb-1">Image Open Graph</h3>
                <p class="text-sm text-gray-500 mb-4">Image affichee lors du partage sur les reseaux sociaux. 1200x630 recommande. Max 2 MB.</p>
                <div class="mb-4 rounded-xl overflow-hidden bg-gray-100 max-w-md aspect-[1200/630] flex items-center justify-center">
                    <template x-if="media.og_image_url">
                        <img :src="media.og_preview || ('/uploads/' + media.og_image_url)" alt="OG Image"
                             class="w-full h-full object-cover">
                    </template>
                    <template x-if="!media.og_image_url">
                        <p class="text-sm text-gray-400">Aucune image OG</p>
                    </template>
                </div>
                <div class="flex flex-wrap items-center gap-3">
                    <label class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 cursor-pointer transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5"/></svg>
                        Choisir une image
                        <input type="file" class="hidden" accept="image/jpeg,image/png,image/webp"
                               @change="uploadMedia($event, 'og_image')">
                    </label>
                    <button x-show="media.og_image_url" @click="deleteMedia('og_image')" type="button"
                            class="inline-flex items-center gap-1 px-3 py-2 rounded-lg text-sm font-medium text-red-600 hover:bg-red-50 transition-colors">
                        Supprimer
                    </button>
                </div>
                <div x-show="uploading.og_image" class="mt-3">
                    <div class="w-full h-1.5 bg-gray-100 rounded-full overflow-hidden">
                        <div class="h-full bg-blue-600 rounded-full transition-all duration-300" :style="'width:' + uploadProgress.og_image + '%'"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div><!-- /x-data -->

<!-- Quill.js -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<script>
function profilePage() {
    return {
        activeTab: 'identity',
        tabs: [
            { id: 'identity', label: 'Identite' },
            { id: 'bio',      label: 'Bio' },
            { id: 'stats',    label: 'Statistiques' },
            { id: 'media',    label: 'Medias' },
        ],
        saving: false,
        quill: null,

        // Donnees depuis PHP
        identity: {
            first_name: <?= json_encode($profile['first_name'] ?? '') ?>,
            last_name: <?= json_encode($profile['last_name'] ?? '') ?>,
            profession: <?= json_encode($profile['profession'] ?? '') ?>,
            tagline: <?= json_encode($profile['tagline'] ?? '') ?>,
            location_city: <?= json_encode($profile['location_city'] ?? '') ?>,
            location_country: <?= json_encode($profile['location_country'] ?? '') ?>,
            is_available: <?= ($profile['is_available'] ?? 0) ? 'true' : 'false' ?>,
            availability_text: <?= json_encode($profile['availability_text'] ?? '') ?>,
        },

        bio: {
            bio_short: <?= json_encode($profile['bio_short'] ?? '') ?>,
            bio_long: <?= json_encode($profile['bio_long'] ?? '') ?>,
        },

        stats: [
            { value: <?= json_encode($profile['stat_1_value'] ?? '') ?>, label: <?= json_encode($profile['stat_1_label'] ?? '') ?> },
            { value: <?= json_encode($profile['stat_2_value'] ?? '') ?>, label: <?= json_encode($profile['stat_2_label'] ?? '') ?> },
            { value: <?= json_encode($profile['stat_3_value'] ?? '') ?>, label: <?= json_encode($profile['stat_3_label'] ?? '') ?> },
            { value: <?= json_encode($profile['stat_4_value'] ?? '') ?>, label: <?= json_encode($profile['stat_4_label'] ?? '') ?> },
        ],

        media: {
            avatar_url: <?= json_encode($profile['avatar_url'] ?? '') ?>,
            cover_url: <?= json_encode($profile['cover_url'] ?? '') ?>,
            cv_url: <?= json_encode($profile['cv_url'] ?? '') ?>,
            og_image_url: <?= json_encode($profile['og_image_url'] ?? '') ?>,
            avatar_preview: null,
            cover_preview: null,
            og_preview: null,
        },

        uploading: { avatar: false, cover: false, cv: false, og_image: false },
        uploadProgress: { avatar: 0, cover: 0, cv: 0, og_image: 0 },

        init() {
            // Initialiser Quill quand l'onglet bio est affiche
            this.$watch('activeTab', (val) => {
                if (val === 'bio' && !this.quill) {
                    this.$nextTick(() => this.initQuill());
                }
            });
        },

        initQuill() {
            this.quill = new Quill('#quill-editor', {
                theme: 'snow',
                placeholder: 'Racontez votre parcours en detail...',
                modules: {
                    toolbar: [
                        [{ header: [2, 3, false] }],
                        ['bold', 'italic', 'underline'],
                        [{ list: 'ordered' }, { list: 'bullet' }],
                        ['link'],
                        ['clean']
                    ]
                }
            });

            // Charger le contenu existant
            if (this.bio.bio_long) {
                this.quill.root.innerHTML = this.bio.bio_long;
            }
        },

        // ------- Sauvegarde Identite -------
        async saveIdentity() {
            this.saving = true;
            try {
                await apiCall('profile', 'PUT', {
                    section: 'identity',
                    ...this.identity,
                });
                showToast('Identite mise a jour', 'success');
            } catch (e) {
                showToast(e.message, 'error');
            } finally {
                this.saving = false;
            }
        },

        // ------- Sauvegarde Bio -------
        async saveBio() {
            this.saving = true;
            if (this.quill) {
                this.bio.bio_long = this.quill.root.innerHTML;
            }
            try {
                await apiCall('profile', 'PUT', {
                    section: 'bio',
                    ...this.bio,
                });
                showToast('Bio mise a jour', 'success');
            } catch (e) {
                showToast(e.message, 'error');
            } finally {
                this.saving = false;
            }
        },

        // ------- Sauvegarde Stats -------
        async saveStats() {
            this.saving = true;
            try {
                const payload = { section: 'stats' };
                this.stats.forEach((s, i) => {
                    payload[`stat_${i + 1}_value`] = s.value;
                    payload[`stat_${i + 1}_label`] = s.label;
                });
                await apiCall('profile', 'PUT', payload);
                showToast('Statistiques mises a jour', 'success');
            } catch (e) {
                showToast(e.message, 'error');
            } finally {
                this.saving = false;
            }
        },

        // ------- Upload Media -------
        async uploadMedia(event, type) {
            const file = event.target.files[0];
            if (!file) return;

            // Preview instantane pour les images
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    if (type === 'avatar') this.media.avatar_preview = e.target.result;
                    if (type === 'cover') this.media.cover_preview = e.target.result;
                    if (type === 'og_image') this.media.og_preview = e.target.result;
                };
                reader.readAsDataURL(file);
            }

            this.uploading[type] = true;
            this.uploadProgress[type] = 0;

            const formData = new FormData();
            formData.append('file', file);
            formData.append('type', type);

            try {
                const xhr = new XMLHttpRequest();

                const result = await new Promise((resolve, reject) => {
                    xhr.upload.addEventListener('progress', (e) => {
                        if (e.lengthComputable) {
                            this.uploadProgress[type] = Math.round((e.loaded / e.total) * 100);
                        }
                    });

                    xhr.addEventListener('load', () => {
                        try {
                            const json = JSON.parse(xhr.responseText);
                            if (json.success) resolve(json);
                            else reject(new Error(json.message));
                        } catch {
                            reject(new Error('Erreur serveur'));
                        }
                    });

                    xhr.addEventListener('error', () => reject(new Error('Erreur reseau')));

                    xhr.open('POST', '/api/upload.php');
                    xhr.setRequestHeader('X-CSRF-Token', CSRF_TOKEN);
                    xhr.send(formData);
                });

                // Mettre a jour le chemin
                const urlKey = type === 'og_image' ? 'og_image_url' : type + '_url';
                this.media[urlKey] = result.data.path;

                // Reset preview
                if (type === 'avatar') this.media.avatar_preview = null;
                if (type === 'cover') this.media.cover_preview = null;
                if (type === 'og_image') this.media.og_preview = null;

                showToast('Fichier uploade avec succes', 'success');
            } catch (e) {
                showToast(e.message, 'error');
                // Reset preview on error
                if (type === 'avatar') this.media.avatar_preview = null;
                if (type === 'cover') this.media.cover_preview = null;
                if (type === 'og_image') this.media.og_preview = null;
            } finally {
                this.uploading[type] = false;
                event.target.value = '';
            }
        },

        // ------- Delete Media -------
        async deleteMedia(type) {
            try {
                const res = await fetch('/api/upload.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-Token': CSRF_TOKEN,
                        'X-HTTP-Method-Override': 'DELETE',
                    },
                    body: JSON.stringify({ type }),
                });
                const json = await res.json();

                if (!json.success) throw new Error(json.message);

                const urlKey = type === 'og_image' ? 'og_image_url' : type + '_url';
                this.media[urlKey] = '';
                showToast('Fichier supprime', 'success');
            } catch (e) {
                showToast(e.message, 'error');
            }
        },
    };
}
</script>

<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>
