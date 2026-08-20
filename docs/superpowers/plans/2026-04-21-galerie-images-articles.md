# Galerie d'images pour articles de blog — Plan d'implémentation

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Permettre l'ajout de plusieurs images de galerie par article de blog, gérées depuis le dashboard et affichées avec un lightbox sur la page publique.

**Architecture:** Nouvelle table `blog_post_images` (id, post_id, user_id, image_path, alt_text, sort_order). Nouvel endpoint `api/blog-images.php` calqué sur `api/blog.php`. La page article charge les images de galerie et les affiche dans une grille cliquable avec un lightbox 100% natif (zéro dépendance JS externe). Le dashboard utilise Alpine.js existant avec 3 nouvelles méthodes.

**Tech Stack:** PHP 8+ PDO, Alpine.js (déjà chargé), CSS Grid, JS natif pour le lightbox, `api/thumb.php` existant pour les thumbnails.

---

## Structure des fichiers

| Fichier | Action | Responsabilité |
|---------|--------|----------------|
| `api/blog-images.php` | **Créer** | CRUD images de galerie (upload, list, delete, reorder) |
| `dashboard/blog.php` | **Modifier** | Panneau galerie dans la sidebar du formulaire |
| `portfolio/article.php` | **Modifier** | Chargement BD + rendu galerie + lightbox |
| `assets/css/style.css` | **Modifier** | Styles `.ap-gallery-*` et `.ap-lightbox-*` |

---

## Task 1 : SQL — Créer la table `blog_post_images`

**Files:**
- Requête SQL à exécuter dans phpMyAdmin ou via la console MySQL

- [ ] **Step 1 : Exécuter le SQL dans phpMyAdmin**

Ouvrir phpMyAdmin → sélectionner la base → onglet SQL → coller et exécuter :

```sql
CREATE TABLE IF NOT EXISTS blog_post_images (
    id         INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    post_id    INT UNSIGNED NOT NULL,
    user_id    INT UNSIGNED NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    alt_text   VARCHAR(255) NOT NULL DEFAULT '',
    sort_order SMALLINT UNSIGNED NOT NULL DEFAULT 0,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_post_id (post_id),
    INDEX idx_user_id (user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

- [ ] **Step 2 : Vérifier que la table existe**

Dans phpMyAdmin, cliquer sur la table `blog_post_images`. Elle doit apparaître avec les colonnes :
`id`, `post_id`, `user_id`, `image_path`, `alt_text`, `sort_order`, `created_at`.

---

## Task 2 : Créer `api/blog-images.php`

**Files:**
- Create: `api/blog-images.php`

- [ ] **Step 1 : Créer le fichier**

Créer `api/blog-images.php` avec ce contenu complet :

```php
<?php
// ============================================================
// api/blog-images.php — CRUD galerie d'images pour articles
// Méthodes : GET (list), POST (upload), PUT (reorder), DELETE
// Auth requise : Oui
// ============================================================

declare(strict_types=1);

header('Content-Type: application/json');

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/session.php';
require_once __DIR__ . '/../helpers/functions.php';
require_once __DIR__ . '/../helpers/upload.php';

requireAuth();

$pdo    = getPDO();
$userId = getCurrentUserId();
$method = getHttpMethod();

$stmt = $pdo->prepare("SELECT slug FROM users WHERE id = ?");
$stmt->execute([$userId]);
$userSlug = $stmt->fetchColumn();

try {
    match ($method) {
        'GET'    => handleGet($pdo, $userId),
        'POST'   => handlePost($pdo, $userId, $userSlug),
        'PUT'    => handlePut($pdo, $userId),
        'DELETE' => handleDelete($pdo, $userId),
        default  => jsonError('Methode non autorisee', 405),
    };
} catch (\Exception $e) {
    jsonError($e->getMessage(), (int) ($e->getCode() ?: 500));
}

function handleGet(PDO $pdo, int $userId): void
{
    $postId = (int) ($_GET['post_id'] ?? 0);
    if ($postId <= 0) jsonError('post_id requis');

    $stmt = $pdo->prepare("SELECT id FROM blog_posts WHERE id = ? AND user_id = ?");
    $stmt->execute([$postId, $userId]);
    if (!$stmt->fetch()) jsonError('Article introuvable', 404);

    $stmt = $pdo->prepare(
        "SELECT id, image_path, alt_text, sort_order
         FROM blog_post_images
         WHERE post_id = ? AND user_id = ?
         ORDER BY sort_order ASC, id ASC"
    );
    $stmt->execute([$postId, $userId]);

    jsonSuccess(['images' => $stmt->fetchAll()]);
}

function handlePost(PDO $pdo, int $userId, string $userSlug): void
{
    $csrfToken = $_SERVER['HTTP_X_CSRF_TOKEN'] ?? $_POST['csrf_token'] ?? null;
    if (!validateCsrfToken($csrfToken)) jsonError('Token CSRF invalide', 403);

    $postId = (int) ($_POST['post_id'] ?? 0);
    if ($postId <= 0) jsonError('post_id requis');

    $stmt = $pdo->prepare("SELECT id FROM blog_posts WHERE id = ? AND user_id = ?");
    $stmt->execute([$postId, $userId]);
    if (!$stmt->fetch()) jsonError('Article introuvable', 404);

    if (!isset($_FILES['file'])) jsonError('Aucun fichier recu');

    $path    = uploadFile($_FILES['file'], 'blog_image', $userSlug);
    $altText = trim($_POST['alt_text'] ?? '');

    $stmt = $pdo->prepare("SELECT COALESCE(MAX(sort_order), -1) + 1 FROM blog_post_images WHERE post_id = ?");
    $stmt->execute([$postId]);
    $sortOrder = (int) $stmt->fetchColumn();

    $stmt = $pdo->prepare(
        "INSERT INTO blog_post_images (post_id, user_id, image_path, alt_text, sort_order)
         VALUES (?, ?, ?, ?, ?)"
    );
    $stmt->execute([$postId, $userId, $path, $altText, $sortOrder]);

    jsonSuccess([
        'id'         => (int) $pdo->lastInsertId(),
        'image_path' => $path,
        'alt_text'   => $altText,
        'sort_order' => $sortOrder,
    ], 'Image ajoutee');
}

function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    if (!isset($data['reorder']) || !is_array($data['reorder'])) {
        jsonError('Action non reconnue');
    }

    $stmt = $pdo->prepare("UPDATE blog_post_images SET sort_order = ? WHERE id = ? AND user_id = ?");
    foreach ($data['reorder'] as $order => $id) {
        $stmt->execute([(int) $order, (int) $id, $userId]);
    }

    jsonSuccess(null, 'Ordre mis a jour');
}

function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $id   = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    $stmt = $pdo->prepare("SELECT image_path FROM blog_post_images WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    $row = $stmt->fetch();
    if (!$row) jsonError('Image introuvable', 404);

    deleteUploadedFile($row['image_path']);

    $stmt = $pdo->prepare("DELETE FROM blog_post_images WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);

    jsonSuccess(null, 'Image supprimee');
}
```

- [ ] **Step 2 : Tester l'endpoint manuellement**

Dans le navigateur (connecté au dashboard), ouvrir :
`http://localhost/Richard_portfolio/api/blog-images.php?post_id=1`

Résultat attendu (si l'article 1 existe) :
```json
{"success":true,"data":{"images":[]}}
```

Si l'article n'existe pas :
```json
{"success":false,"message":"Article introuvable"}
```

---

## Task 3 : Modifier `dashboard/blog.php` — panneau galerie

**Files:**
- Modify: `dashboard/blog.php`

### 3a — Ajouter le panneau HTML dans la sidebar

- [ ] **Step 1 : Ajouter le bloc HTML galerie après la section "Image de couverture"**

Trouver ce bloc (lignes ~178-191) :
```html
                <!-- Image de couverture -->
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-6">
                    <h3 class="text-base font-semibold text-gray-900 mb-3">Image de couverture</h3>
```

Juste après la fermeture de ce `</div>` (après la balise `</label>` et `</div>`), insérer :

```html
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
```

### 3b — Modifier l'objet Alpine.js

- [ ] **Step 2 : Ajouter `galleryImages` et `galleryUploading` dans la déclaration `form:`**

Trouver (ligne ~291) :
```javascript
        form: {
            title: '', slug: '', summary: '', content: '', cover_image: '',
            category: '', tags: [], reading_time: null, external_url: '',
            status: 'draft', published_at: '',
        },
```

Juste avant `form:`, ajouter sur la ligne au-dessus des propriétés de data existantes (après `coverPreview: null,`) :
```javascript
        galleryImages: [],
        galleryUploading: false,
```

- [ ] **Step 3 : Réinitialiser la galerie dans `openNew()` et `backToList()`**

Trouver `openNew()` (ligne ~341) :
```javascript
        openNew() {
            this.editing = false;
            this.editingId = null;
            this.form = this.emptyForm();
            this.coverPreview = null;
            this.view = 'form';
            this.$nextTick(() => this.initQuill());
        },
```

Remplacer par :
```javascript
        openNew() {
            this.editing = false;
            this.editingId = null;
            this.form = this.emptyForm();
            this.coverPreview = null;
            this.galleryImages = [];
            this.view = 'form';
            this.$nextTick(() => this.initQuill());
        },
```

Trouver `backToList()` (ligne ~363) :
```javascript
        backToList() {
            this.view = 'list';
            this.quill = null;
        },
```

Remplacer par :
```javascript
        backToList() {
            this.view = 'list';
            this.quill = null;
            this.galleryImages = [];
        },
```

- [ ] **Step 4 : Charger la galerie dans `openEdit()`**

Trouver `openEdit(item)` (ligne ~350) :
```javascript
        openEdit(item) {
            this.editing = true;
            this.editingId = item.id;
            this.form = {
                ...item,
                tags: [...(item.tags || [])],
                published_at: item.published_at ? item.published_at.replace(' ', 'T').substring(0, 16) : '',
            };
            this.coverPreview = null;
            this.view = 'form';
            this.$nextTick(() => this.initQuill());
        },
```

Remplacer par :
```javascript
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
            this.view = 'form';
            this.$nextTick(() => {
                this.initQuill();
                this.loadGallery();
            });
        },
```

- [ ] **Step 5 : Ajouter les 3 méthodes de galerie avant la méthode `uploadCover`**

Trouver `async uploadCover(event) {` (ligne ~502) et insérer juste avant :

```javascript
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

```

- [ ] **Step 6 : Tester dans le dashboard**

1. Ouvrir `http://localhost/Richard_portfolio/dashboard/blog.php`
2. Cliquer sur un article existant → "Modifier"
3. Le panneau "Galerie" doit apparaître dans la sidebar (sous "Image de couverture")
4. Cliquer "Ajouter des images" → sélectionner 2 images JPG/WebP
5. Les thumbnails doivent apparaître dans la grille 3 colonnes
6. Survoler une image → icône poubelle visible → cliquer → image disparaît

---

## Task 4 : Modifier `portfolio/article.php` — galerie + lightbox

**Files:**
- Modify: `portfolio/article.php`

### 4a — Charger les images depuis la DB

- [ ] **Step 1 : Ajouter la requête DB après le chargement des articles liés**

Trouver ce bloc (ligne ~56-65) :
```php
// Articles liés : même catégorie en priorité, sinon les plus récents (max 3)
$stmt = $pdo->prepare("
    SELECT id, title, slug, summary, cover_image, category, published_at, reading_time
    FROM blog_posts
    WHERE user_id = ? AND status = 'published' AND id != ?
    ORDER BY (category IS NOT NULL AND category = ?) DESC, published_at DESC
    LIMIT 3
");
$stmt->execute([$userId, $post['id'], $post['category'] ?? '']);
$related = $stmt->fetchAll();
```

Juste après (après `$related = $stmt->fetchAll();`), ajouter :

```php
// Images de galerie de l'article
$galleryImages = [];
try {
    $stmt = $pdo->prepare(
        "SELECT image_path, alt_text
         FROM blog_post_images
         WHERE post_id = ? AND user_id = ?
         ORDER BY sort_order ASC, id ASC"
    );
    $stmt->execute([$post['id'], $userId]);
    $galleryImages = $stmt->fetchAll();
} catch (\Exception $e) {
    $galleryImages = [];
}
```

### 4b — Afficher la galerie dans l'article

- [ ] **Step 2 : Insérer le HTML galerie entre le contenu prose et les tags**

Trouver (ligne ~310-316) :
```php
                <!-- Contenu prose -->
                <div class="article-prose ap-prose-content" itemprop="articleBody">
                    <?= $post['content'] ?: '<p style="opacity:.5">Contenu non disponible.</p>' ?>
                </div>

                <!-- Tags -->
                <?php if (!empty($post['tags'])): ?>
```

Remplacer par :
```php
                <!-- Contenu prose -->
                <div class="article-prose ap-prose-content" itemprop="articleBody">
                    <?= $post['content'] ?: '<p style="opacity:.5">Contenu non disponible.</p>' ?>
                </div>

                <!-- Galerie d'images -->
                <?php if (!empty($galleryImages)): ?>
                <div class="ap-gallery" role="region" aria-label="Galerie d'images de l'article">
                    <?php foreach ($galleryImages as $i => $img): ?>
                    <?php $gSrc = sanitize(preg_replace('/\.\.[\\/]/', '', $img['image_path'])); ?>
                    <button class="ap-gallery-item"
                            onclick="apOpenLightbox(<?= $i ?>)"
                            aria-label="<?= sanitize($img['alt_text'] ?: 'Image ' . ($i + 1)) ?>">
                        <img src="/api/thumb.php?src=<?= urlencode($gSrc) ?>&s=400"
                             alt="<?= sanitize($img['alt_text']) ?>"
                             loading="lazy">
                    </button>
                    <?php endforeach; ?>
                </div>

                <!-- Lightbox -->
                <div class="ap-lightbox" id="ap-lightbox" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Visionneuse d'images">
                    <div class="ap-lightbox-backdrop" onclick="apCloseLightbox()"></div>
                    <button class="ap-lightbox-close" onclick="apCloseLightbox()" aria-label="Fermer">
                        <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" d="M6 18 18 6M6 6l12 12"/></svg>
                    </button>
                    <button class="ap-lightbox-prev" onclick="apLightboxNav(-1)" aria-label="Image précédente">&#8249;</button>
                    <button class="ap-lightbox-next" onclick="apLightboxNav(1)" aria-label="Image suivante">&#8250;</button>
                    <div class="ap-lightbox-inner">
                        <img class="ap-lightbox-img" id="ap-lightbox-img" src="" alt="">
                        <p class="ap-lightbox-caption" id="ap-lightbox-caption"></p>
                    </div>
                </div>
                <script>
                (function() {
                    var images = <?= json_encode(array_map(function($img) {
                        return [
                            'src' => '/uploads/' . preg_replace('/\.\.[\\/]/', '', $img['image_path']),
                            'alt' => $img['alt_text'] ?? '',
                        ];
                    }, $galleryImages), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>;
                    var current = 0;

                    window.apOpenLightbox = function(index) {
                        current = index;
                        var lb = document.getElementById('ap-lightbox');
                        lb.setAttribute('aria-hidden', 'false');
                        lb.classList.add('open');
                        document.body.style.overflow = 'hidden';
                        apUpdateLightbox();
                    };

                    window.apCloseLightbox = function() {
                        var lb = document.getElementById('ap-lightbox');
                        lb.setAttribute('aria-hidden', 'true');
                        lb.classList.remove('open');
                        document.body.style.overflow = '';
                    };

                    window.apLightboxNav = function(dir) {
                        current = (current + dir + images.length) % images.length;
                        apUpdateLightbox();
                    };

                    function apUpdateLightbox() {
                        var img = document.getElementById('ap-lightbox-img');
                        var cap = document.getElementById('ap-lightbox-caption');
                        img.src = images[current].src;
                        img.alt = images[current].alt;
                        if (cap) cap.textContent = images[current].alt;
                        var showNav = images.length > 1;
                        document.querySelector('.ap-lightbox-prev').style.display = showNav ? '' : 'none';
                        document.querySelector('.ap-lightbox-next').style.display = showNav ? '' : 'none';
                    }

                    document.addEventListener('keydown', function(e) {
                        var lb = document.getElementById('ap-lightbox');
                        if (!lb || !lb.classList.contains('open')) return;
                        if (e.key === 'Escape') apCloseLightbox();
                        if (e.key === 'ArrowLeft')  apLightboxNav(-1);
                        if (e.key === 'ArrowRight') apLightboxNav(1);
                    });
                })();
                </script>
                <?php endif; ?>

                <!-- Tags -->
                <?php if (!empty($post['tags'])): ?>
```

- [ ] **Step 3 : Tester sur la page article publique**

1. Uploader au moins 2 images dans la galerie d'un article (Task 3)
2. Ouvrir `http://localhost/Richard_portfolio/blog/{slug-article}`
3. La grille galerie doit apparaître entre le contenu et les tags
4. Cliquer sur une image → le lightbox s'ouvre avec l'image en grand
5. Cliquer les flèches ← → pour naviguer entre les images
6. Appuyer sur `Echap` → le lightbox se ferme
7. Cliquer sur le fond noir → le lightbox se ferme

---

## Task 5 : Modifier `assets/css/style.css` — galerie et lightbox

**Files:**
- Modify: `assets/css/style.css`

- [ ] **Step 1 : Ajouter les styles dans la section ap-* (après `.ap-prose-content`)**

Trouver le commentaire `/* Tags */` dans la section ap-* (après le bloc `.ap-prose-content`).
Insérer juste avant ce commentaire :

```css
/* ===== Galerie d'images ===== */
.ap-gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 0.75rem;
    padding: 1.75rem 0;
    border-bottom: 1px solid var(--color-border);
}
.ap-gallery-item {
    aspect-ratio: 4 / 3;
    border-radius: var(--border-radius);
    overflow: hidden;
    cursor: pointer;
    border: none;
    padding: 0;
    background: var(--color-border);
    transition: transform 0.18s, box-shadow 0.18s;
    display: block;
}
.ap-gallery-item:hover {
    transform: scale(1.03);
    box-shadow: 0 8px 24px rgba(0,0,0,0.14);
}
.ap-gallery-item img { width: 100%; height: 100%; object-fit: cover; display: block; }
@media (max-width: 640px) {
    .ap-gallery { grid-template-columns: repeat(2, 1fr); gap: 0.5rem; }
}
@media (max-width: 380px) {
    .ap-gallery { grid-template-columns: 1fr; }
}

/* ===== Lightbox ===== */
.ap-lightbox {
    display: none;
    position: fixed; inset: 0; z-index: 9000;
    align-items: center; justify-content: center;
}
.ap-lightbox.open { display: flex; }
.ap-lightbox-backdrop {
    position: absolute; inset: 0;
    background: rgba(0,0,0,0.92);
    cursor: zoom-out;
}
.ap-lightbox-inner {
    position: relative; z-index: 1;
    max-width: min(90vw, 1000px);
    max-height: 90vh;
    display: flex; flex-direction: column; align-items: center; gap: 0.625rem;
}
.ap-lightbox-img {
    max-width: 100%; max-height: 82vh;
    object-fit: contain; border-radius: 4px; display: block;
}
.ap-lightbox-caption {
    color: rgba(255,255,255,0.65);
    font-size: 0.875rem; text-align: center; margin: 0;
    max-width: 600px;
}
.ap-lightbox-close {
    position: fixed; top: 1rem; right: 1rem; z-index: 2;
    width: 44px; height: 44px; border-radius: 50%;
    background: rgba(255,255,255,0.15); border: none;
    color: #fff; cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    transition: background 0.18s;
}
.ap-lightbox-close:hover { background: rgba(255,255,255,0.28); }
.ap-lightbox-prev,
.ap-lightbox-next {
    position: fixed; top: 50%; transform: translateY(-50%); z-index: 2;
    width: 48px; height: 48px; border-radius: 50%;
    background: rgba(255,255,255,0.15); border: none;
    color: #fff; cursor: pointer; font-size: 1.875rem; line-height: 1;
    display: flex; align-items: center; justify-content: center;
    transition: background 0.18s;
}
.ap-lightbox-prev:hover,
.ap-lightbox-next:hover { background: rgba(255,255,255,0.28); }
.ap-lightbox-prev { left: 1rem; }
.ap-lightbox-next { right: 1rem; }
@media (max-width: 640px) {
    .ap-lightbox-prev { left: 0.25rem; }
    .ap-lightbox-next { right: 0.25rem; }
    .ap-lightbox-close { top: 0.5rem; right: 0.5rem; }
    .ap-lightbox-inner { max-width: 95vw; }
}

```

- [ ] **Step 2 : Vérifier visuellement**

Recharger `http://localhost/Richard_portfolio/blog/{slug-article}`.
- La grille galerie doit s'afficher correctement
- Sur mobile (DevTools, 375px) : 2 colonnes
- Le lightbox doit avoir un fond noir opaque avec les boutons de navigation visibles

---

## Self-Review

**Spec coverage :**
- ✅ Plusieurs images par article → `blog_post_images` table + API
- ✅ Upload depuis le dashboard → galerie dans la sidebar
- ✅ Suppression depuis le dashboard → `removeGalleryImage`
- ✅ Affichage sur la page publique → `ap-gallery` grid
- ✅ Lightbox pour agrandir → `ap-lightbox` natif
- ✅ Navigation clavier (Echap, ←, →) → event listener dans le `<script>`
- ✅ Mobile responsive → media queries
- ✅ Sécurité → `user_id` vérifié sur toutes les opérations DB, path traversal bloqué
- ✅ Thumbnails optimisés → `api/thumb.php?s=400` existant

**Placeholder scan :** Aucun placeholder détecté. Tout le code est complet.

**Type consistency :** `galleryImages` est initialisé comme `[]`, peuplé avec `{id, image_path, alt_text, sort_order}` depuis l'API — exactement ce que le HTML `x-for="img in galleryImages"` attend.

---

## Fichiers à uploader sur Hostinger

Après avoir tout testé en local :

1. `api/blog-images.php` ← nouveau
2. `dashboard/blog.php` ← modifié
3. `portfolio/article.php` ← modifié
4. `assets/css/style.css` ← modifié
5. Exécuter le SQL sur la base de données Hostinger (via phpMyAdmin Hostinger)
