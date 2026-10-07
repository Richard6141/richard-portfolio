# Vague 1F : reprise des articles du blog — Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Clore la vague 1 (spec 11.1) en reprenant les articles du blog : chaque article gardé est réécrit et enrichi jusqu'à répondre complètement à son intention, selon les règles GEO, les articles devenus comparatifs ou en doublon passent en 301, et le gabarit d'article affiche « En bref », « Mis à jour le » et la boîte auteur.

**Architecture:** Le blog reste en base (spec 7.1, « Seul le blog reste en base ») et éditable au tableau de bord. Chaque article repris est rédigé dans un fichier source versionné `docs/blog/articles/{slug}.php`, contrôlé hors ligne par `tools/blog/qa.php`, puis transformé par `tools/blog/migration.php` en une migration SQL `migrations/AAAA-MM-JJ-blog-{slug}.sql`, appliquée en production par `migrate.php` au déploiement (étape existante du workflow). La migration ne remplace l'article que si la base n'a pas bougé depuis l'instantané (garde sur `updated_at`). Le HTML des articles se limite aux balises que l'éditeur Quill du tableau de bord conserve, pour qu'une réouverture au tableau de bord ne détruise rien.

**Tech Stack:** PHP 8, MySQL (production seulement : la base locale reste absente, les tests en dépendent), `migrate.php`, `php tools/tests/run.php`, `tools/qa/lib.php`, `tools/qa/crawl.php` (contrôle en ligne après déploiement), sous-agents de rédaction et de vérification.

**Spec:** `docs/superpowers/specs/2026-10-03-refonte-globale-design.md` (5.5, 6.1 ligne Blog, 6.7 « Blog », 6.8 dernière ligne, 7.1, 7.2, 8, 9, 11.1). Branche : `vague-1f`, créée depuis `main` (d839df0).

## Décisions de ce plan (à valider par Richard avec le plan)

1. **24 articles en base, 23 en ligne.** `/blog/n8n-vs-zapier-vs-make-2026` redirige déjà vers `/comparatifs/n8n-vs-make-vs-zapier` (vague 0C) : le premier des trois comparatifs de la spec est fait.
2. **Deux articles deviennent des comparatifs** (spec 6.7) : `wordpress-ou-sur-mesure-comment-choisir` vers `/comparatifs/wordpress-vs-sur-mesure` et `application-mobile-ou-site-web-que-developper-en-premier` vers `/comparatifs/application-mobile-vs-site-web`. Les deux comparatifs sont rédigés dans le registre ; la 301 s'active seule le jour de leur date `publie`.
3. **Deux fusions.** Les doublons de la spec (`combien-coute-un-site-web-professionnel-en-2026-guide-complet` et `combien-coute-un-site-web-au-benin`), plus une fusion proposée : `etre-visible-chatgpt-gemini-2026` et `seo-2026-apparaitre-dans-les-reponses-ia` visent la même intention (être cité par les moteurs d'IA). Dans chaque paire, l'URL gardée est celle qui a le plus d'impressions dans Search Console sur 3 mois (relevé de la Task 5) ; l'autre passe en 301 vers elle.
4. **19 articles réécrits** (23 moins 2 comparatifs, moins 2 absorbés par une fusion), plus les 2 comparatifs : 21 textes.
8. **Longueur des articles : ce qu'il faut, pas 3 200 mots** (consigne de Richard du 07/10/2026, qui remplace pour le blog la règle 7.2 de la spec). Chaque article répond complètement à son intention, avec les questions de son plan dans le catalogue ; sa longueur en découle. Aucun seuil bloquant : `tools/blog/qa.php` affiche le nombre de mots pour information, et le vérificateur juge la complétude et l'absence de remplissage. Les deux comparatifs sont des pages de registre : ils gardent la règle des 3 200 mots, comme les 4 comparatifs déjà en ligne.
5. **`automatiser-sa-prospection-n8n-make` reste un article** : son intention est la prospection, pas le choix d'un outil ; il renvoie au comparatif n8n. L'article orphelin « robot qui prospecte 500 artisans » reçoit au moins 3 liens entrants depuis des articles du blog (spec 6.7), sans devenir un projet phare.
6. **Pas de base locale.** Les tests `AmorcageTest` et `SitemapTest` supposent le site local sans base (503 sur `/blog/`). Les contrôles se font sur les fichiers sources (rendus par les mêmes partiels que la page), puis en ligne après déploiement.
7. **Pendant la vague, Richard ne modifie pas au tableau de bord les articles listés au catalogue.** S'il le fait, la garde de la migration laisse son texte en place et le contrôle d'après déploiement le signale.

## Global Constraints

- Règles des vagues 1A à 1E reprises : aucun client, chiffre de résultat, avis, témoignage ou certification inventé ; français accentué ; aucun tiret cadratin (U+2014), aucune flèche (U+2192), aucun emoji ; marque unique « Richard SALANON », jamais « Richard Technologies » ; contenu d'Audyxa et de paulmaximedossou.com jamais copié.
- Voix : celle de l'article d'origine (« je » de Richard ou « vous » au lecteur). Tout « je » est vrai : expérience tirée de `portfolio/data/faits.php`, de `portfolio/data/projets-clients.php` ou de l'article d'origine ; jamais d'anecdote ni de client inventés.
- Projets clients cités : seulement ceux de `portfolio/data/projets-clients.php`, avec « réalisé en sous-traitance pour Digital Développement » quand `relation` vaut `sous-traitance`, lien `/realisations/`, jamais le site du client, jamais QueenK Beauty.
- Prix de Richard : seulement `fait('tarifs_depart')` (Landing page 150 000 FCFA, Site vitrine 300 000 FCFA, Référencement naturel 75 000 FCFA ; en euros à 655,957 FCFA pour 1 €) ; tout autre prix de Richard est « sur devis ». Prix du marché : valeur, date et source nommée dans la phrase.
- Règles GEO (spec 5.5) : « En bref » de 2 à 4 phrases (colonne `summary`, 500 caractères au plus) ; H2 formulés comme de vraies questions (sauf « Questions fréquentes » et « Sources ») ; paragraphes de 120 mots au plus ; liste dès qu'il y a comparaison ou étapes ; chaque chiffre avec valeur, date et source nommée ; section « Sources » en fin d'article ; titre (H1 et balise title) de 50 à 60 caractères ; meta de 140 à 155 caractères, phrase complète, unique.
- Longueur des articles : aucun minimum (décision 8). L'article couvre toutes les questions de son plan au catalogue, avec la matière utile (étapes, erreurs fréquentes, prix expliqués, cas, FAQ) ; jamais de remplissage, de répétition ni de paraphrase d'une autre page. Ressemblance de 40 % au plus entre deux articles (bardeaux de 5 mots). Les deux comparatifs suivent les règles du registre (3 200 mots, `php tools/qa/registres.php --type=comparatif`).
- HTML du contenu limité aux balises que Quill conserve : `h2`, `h3`, `p`, `strong`, `em`, `a` (attribut `href` seul), `ul`, `ol`, `li`, `blockquote`, `br`, `img` (`src` sous `/uploads/` et `alt`), `code`. Ni tableau, ni `div`, ni classe, ni style, ni `h1`/`h4`.
- FAQ : `<h2>Questions fréquentes</h2>` suivi de 6 questions ou plus au format `<p><strong>Question ?</strong></p><p>Réponse.</p>` (format lu par `buildFaqSchema()`).
- Liens internes : seulement vers des pages qui répondent 200 en production le jour de la rédaction (aucun lien vers `/secteurs/…` avant le 05/11, ni vers une page métier avant sa date), jamais vers richard.salanon.info, jamais vers une URL redirigée ; au moins 3 liens sortants contextuels par article (services, formations, comparatifs, histoires, autres articles).
- Faits vérifiés à reprendre tels quels : article 391 de la loi béninoise 2017-20 avec ses deux conditions (protection équivalente constatée par l'Autorité ET son autorisation préalable) ; seuil français de dématérialisation des marchés publics à 60 000 € HT depuis le 1er avril 2026 ; tarifs WhatsApp de Meta à vérifier au navigateur (`reference_meta_whatsapp_tarifs`), jamais par WebFetch.
- Fusion et push : Richard lance lui-même `git checkout main`, `git merge --no-ff vague-1f`, `git push origin main`. Aucun changement de branche dans le dossier de travail pendant que des agents écrivent.

## Review Focus

1. Richard modifie un article au tableau de bord entre l'instantané et le déploiement : la migration ne doit rien écraser (garde `updated_at`, test de la Task 4) et le contrôle d'après déploiement doit signaler l'article resté dans son ancienne version (titre en ligne différent du titre de la source, Task 8, Step 4).
2. Un article repris rouvert et enregistré dans Quill : le texte doit survivre (liste blanche de balises, test de la Task 4 ; aller-retour Quill réel en recette, Task 8, Step 2).
3. Un contenu avec apostrophes, antislashs, points-virgules, guillemets, une ligne qui commence par `--`, des accents ou un emoji dans une source : la migration doit former une seule instruction pour `migrate.php` et restituer le texte à l'identique (test d'aller-retour de la Task 4).
4. Un article redirigé (fusion ou comparatif) : il disparaît du sitemap, de llms.txt, de la liste du blog, des articles liés et d'IndexNow, et sa 301 ne part que si la cible répond (comparatif avant sa date : l'article reste en 200). Tests de la Task 3.
5. Fenêtre du déploiement où le code est en ligne avant la migration de schéma (colonne `meta` absente) ou base injoignable : la page d'article s'affiche avec le résumé comme meta, sans avertissement PHP (test de la Task 2) ; `/blog/` garde son 503 propre sans base (test existant).

---
### Task 1: Instantané des articles en ligne

**Files:**
- Create: `helpers/blog.php` (chargé par `helpers/functions.php`, à côté de `require_once __DIR__ . '/redirections.php';`), `tools/blog/instantane.php`, `tools/tests/BlogTest.php`, `tools/tests/fixtures/blog/article.html`
- Create (sortie de l'outil, commitée) : `docs/blog/origine/{slug}.html` (23 fichiers), `docs/blog/origine/index.json`

**Interfaces:**
- Produces: `blog_extraire(string $html): array` (clés `titre`, `meta`, `categorie`, `tags` (list<string>), `publie` et `maj` (AAAA-MM-JJ ou ''), `contenu` (HTML intérieur de `.art-prose`)) ; `blog_mots(string $html): int` ; `docs/blog/origine/index.json` = objet `{slug: {titre, meta, categorie, tags, publie, maj, mots, instantane}}` où `instantane` vaut la date et l'heure de la lecture (`AAAA-MM-JJ HH:MM:SS`), reprise telle quelle comme garde des migrations (Task 4).

- [ ] **Step 1 : fixture**

`tools/tests/fixtures/blog/article.html` : page réduite au balisage que produit `portfolio/article.php` (lignes 170 à 236) :

```html
<!doctype html><html lang="fr"><head><title>Pourquoi votre site est lent (et comment le rendre rapide)</title>
<meta name="description" content="Un site lent fait fuir vos visiteurs. Voici les causes les plus fréquentes et les corrections à faire en priorité.">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BlogPosting","datePublished":"2026-07-09T08:00:00+00:00","dateModified":"2026-10-03T10:12:00+00:00"}</script></head>
<body><main id="main-content"><article><div class="wrap art-head"><span class="art-cat">Développement web</span>
<h1>Pourquoi votre site est lent (et comment le rendre rapide)</h1></div>
<div class="art-layout"><div class="blog-main"><div class="art-prose"><h2>Qu'est-ce qui ralentit un site ?</h2><p>Des images trop lourdes ; un hébergement saturé.</p></div>
<div class="art-tags"><span>#performance</span><span>#Core Web Vitals</span></div></div></div></article></main></body></html>
```

- [ ] **Step 2 : tests qui échouent**

`tools/tests/BlogTest.php` :

```php
<?php
declare(strict_types=1);

// Vague 1F : reprise du blog (instantané, gabarit, migrations, contrôle hors ligne).

require_once racine('helpers/functions.php');

function test_blog_extraire_lit_un_article_en_ligne(): void
{
    $a = blog_extraire((string) file_get_contents(racine('tools/tests/fixtures/blog/article.html')));
    assert_same('Pourquoi votre site est lent (et comment le rendre rapide)', $a['titre']);
    assert_same('Développement web', $a['categorie']);
    assert_same(['performance', 'Core Web Vitals'], $a['tags']);
    assert_same('2026-07-09', $a['publie']);
    assert_same('2026-10-03', $a['maj']);
    assert_contains('Un site lent fait fuir', $a['meta']);
    assert_same('<h2>Qu\'est-ce qui ralentit un site ?</h2><p>Des images trop lourdes ; un hébergement saturé.</p>', $a['contenu']);
}

function test_blog_mots_compte_le_texte_sans_coller_les_blocs(): void
{
    assert_same(6, blog_mots('<h2>Deux mots</h2><p>et quatre&nbsp;autres ici</p>'));
    assert_same(0, blog_mots(''));
}
```

Run: `php tools/tests/run.php Blog`
Expected: FAIL (`Call to undefined function blog_extraire()`).

- [ ] **Step 3 : helpers/blog.php**

```php
<?php
// ============================================================
// helpers/blog.php · Reprise du blog (vague 1F) : lecture des articles en ligne,
// gabarit, sources de réécriture et migrations. Le blog reste en base (spec 7.1).
// ============================================================
declare(strict_types=1);

/** Champs utiles à la reprise, lus dans la page publique d'un article (balisage de portfolio/article.php). */
function blog_extraire(string $html): array
{
    $dom = new DOMDocument();
    $ancien = libxml_use_internal_errors(true);
    $dom->loadHTML('<?xml encoding="utf-8"?>' . $html);
    libxml_clear_errors();
    libxml_use_internal_errors($ancien);
    $xp = new DOMXPath($dom);
    $un = static fn(string $q): ?DOMNode => $xp->query($q)->item(0);
    $contenu = '';
    if ($prose = $un('//div[contains(concat(" ", normalize-space(@class), " "), " art-prose ")]')) {
        foreach ($prose->childNodes as $n) {
            $contenu .= $dom->saveHTML($n);
        }
    }
    $tags = [];
    foreach ($xp->query('//div[contains(@class, "art-tags")]/span') as $s) {
        $tags[] = ltrim(trim($s->textContent), '#');
    }
    preg_match('/"datePublished":"(\d{4}-\d{2}-\d{2})/', $html, $p);
    preg_match('/"dateModified":"(\d{4}-\d{2}-\d{2})/', $html, $m);
    return [
        'titre'     => trim((string) ($un('//h1')?->textContent ?? '')),
        'meta'      => (string) ($un('//meta[@name="description"]/@content')?->nodeValue ?? ''),
        'categorie' => trim((string) ($un('//span[contains(@class, "art-cat")]')?->textContent ?? '')),
        'tags'      => $tags,
        'publie'    => $p[1] ?? '',
        'maj'       => $m[1] ?? '',
        'contenu'   => trim($contenu),
    ];
}

/** Mots du texte visible d'un fragment HTML (balises remplacées par une espace, entités décodées). */
function blog_mots(string $html): int
{
    $texte = html_entity_decode((string) preg_replace('/<[^>]+>/', ' ', $html), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    return count(preg_split('/[\s\x{00A0}]+/u', trim($texte), -1, PREG_SPLIT_NO_EMPTY) ?: []);
}
```

Dans `helpers/functions.php`, ajouter `require_once __DIR__ . '/blog.php';` juste après `require_once __DIR__ . '/redirections.php';`.

Run: `php tools/tests/run.php Blog`
Expected: PASS (2 tests).

- [ ] **Step 4 : outil d'instantané**

`tools/blog/instantane.php` :

```php
<?php
// tools/blog/instantane.php · Copie des articles en ligne, source de la reprise (vague 1F).
// Usage (depuis la racine du dépôt) : php tools/blog/instantane.php [base=https://richardsalanon.com]
// Écrit docs/blog/origine/{slug}.html (contenu de l'article) et docs/blog/origine/index.json.
declare(strict_types=1);
require 'helpers/functions.php';
require 'tools/qa/lib.php';

$base = rtrim($argv[1] ?? 'https://richardsalanon.com', '/');
$dossier = 'docs/blog/origine';
if (!is_dir($dossier) && !mkdir($dossier, 0777, true)) { fwrite(STDERR, "dossier impossible : {$dossier}\n"); exit(1); }
$instantane = date('Y-m-d H:i:s');
$index = [];
foreach (qa_urls_sitemap($base, 300) as $url) {
    if (!preg_match('#/blog/([a-z0-9_-]+)$#', $url, $m)) { continue; }
    $r = qa_get($url . '?instantane=' . time(), 300);
    if ($r['code'] !== 200) { fwrite(STDERR, "{$r['code']} {$url}\n"); continue; }
    $a = blog_extraire($r['corps']);
    if ($a['contenu'] === '') { fwrite(STDERR, "contenu introuvable : {$url}\n"); continue; }
    file_put_contents("{$dossier}/{$m[1]}.html", $a['contenu'] . "\n");
    $index[$m[1]] = ['titre' => $a['titre'], 'meta' => $a['meta'], 'categorie' => $a['categorie'], 'tags' => $a['tags'],
        'publie' => $a['publie'], 'maj' => $a['maj'], 'mots' => blog_mots($a['contenu']), 'instantane' => $instantane];
    echo str_pad((string) $index[$m[1]]['mots'], 5, ' ', STR_PAD_LEFT), " mots  {$m[1]}\n";
}
ksort($index);
file_put_contents("{$dossier}/index.json", json_encode($index, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "\n");
echo count($index), " article(s), instantané du {$instantane}\n";
```

Vérifier d'abord les clés renvoyées par `qa_get()` et `qa_urls_sitemap()` dans `tools/qa/lib.php` (lignes 19 et 41) et adapter `code` et `corps` si elles diffèrent.

Run: `php tools/blog/instantane.php`
Expected: 23 lignes « N mots slug » (de 342 à 1 548 mots au 07/10/2026), puis `23 article(s), instantané du …`. `/blog/n8n-vs-zapier-vs-make-2026` n'y figure pas (déjà redirigé).

- [ ] **Step 5 : suite complète et commit**

Run: `php tools/tests/run.php`
Expected: 0 échec (Apache local démarré : lancer `C:\xampp\apache\bin\httpd.exe` s'il ne répond pas sur 127.0.0.1:8081).

```bash
git add helpers/blog.php helpers/functions.php tools/blog/instantane.php tools/tests/BlogTest.php tools/tests/fixtures/blog/article.html docs/blog/origine
git commit -m "Blog : instantane des articles en ligne, source de la reprise"
```

### Task 2: Schéma, gabarit d'article et tableau de bord

**Files:**
- Create: `migrations/2026-10-07-blog-00-schema.sql`, `portfolio/partials/article-tete.php`, `portfolio/partials/article-corps.php`
- Modify: `helpers/blog.php`, `portfolio/article.php` (lignes 113 et 165 à 192), `assets/css/portfolio-v2.css` (règles `.art-head`, `.art-prose`), `api/blog.php` (lignes 112 à 160 et 205 à 245), `dashboard/blog.php` (champ sous le résumé, ligne 136, et objets `form` lignes 371 et 378)
- Test: `tools/tests/BlogTest.php`

**Interfaces:**
- Consumes: `registre_date_fr(string $iso): string` (helpers/registres.php:335), `sanitize()`, `seoDescription()`, partiel `portfolio/partials/boite-auteur.php`.
- Produces: colonne `blog_posts.meta VARCHAR(160) NULL` et `blog_posts.content MEDIUMTEXT` ; `blog_meta(array $post): string` ; `blog_date_maj(array $post): string` (AAAA-MM-JJ ou '') ; partiels `article-tete.php` (variables `$post`, `$fullName`, `$readingTime`) et `article-corps.php` (variable `$articleHtml`), réutilisés par `tools/blog/qa.php` (Task 4).

- [ ] **Step 1 : migration de schéma**

`migrations/2026-10-07-blog-00-schema.sql` (le « 00 » la classe avant toute migration d'article du même jour, `migrate.php` triant par nom) :

```sql
-- ============================================================
-- Migration : reprise du blog (vague 1F), schéma
-- Date       : 2026-10-07
-- content passe en MEDIUMTEXT (un article repris peut dépasser les 64 Ko de TEXT) ;
-- meta porte la meta description (140 à 155 caractères), distincte du résumé,
-- qui devient le « En bref » affiché sous le titre.
-- ============================================================
ALTER TABLE blog_posts MODIFY content MEDIUMTEXT NULL;
ALTER TABLE blog_posts ADD COLUMN meta VARCHAR(160) NULL AFTER summary;
```

Vérifier d'abord la nullabilité actuelle de `content` dans `migration-service-content.sql` ou le schéma d'origine (`SHOW CREATE TABLE` sur la base locale `portfolio_saas` : `C:/xampp/mysql/bin/mysql.exe -u root portfolio_saas -e "SHOW CREATE TABLE blog_posts\G"`) et garder la même (`NOT NULL` si elle l'est).

- [ ] **Step 2 : tests qui échouent**

Ajouter à `tools/tests/BlogTest.php`, en tête, `require_once racine('helpers/icons.php');` (la boîte auteur appelle `icone()`, que `portfolio/article.php` charge à part), puis :

```php
function blog_rendre_partiel(string $fichier, array $vars): string
{
    extract($vars);
    ob_start();
    include racine('portfolio/partials/' . $fichier);
    return (string) ob_get_clean();
}

function test_blog_date_maj_jamais_avant_la_publication(): void
{
    assert_same('2026-08-25', blog_date_maj(['published_at' => '2026-08-25 08:00:00', 'updated_at' => '2026-08-20 10:00:00']));
    assert_same('2026-10-20', blog_date_maj(['published_at' => '2026-06-08 08:00:00', 'updated_at' => '2026-10-20 10:00:00']));
    assert_same('', blog_date_maj(['published_at' => null, 'updated_at' => null]));
}

function test_blog_meta_colonne_puis_resume(): void
{
    $meta = str_repeat('a', 145);
    assert_same($meta, blog_meta(['meta' => $meta, 'summary' => 'Autre chose.']));
    assert_same('Résumé court.', blog_meta(['summary' => 'Résumé court.']), 'colonne absente pendant le déploiement');
    assert_same('Résumé court.', blog_meta(['meta' => '  ', 'summary' => 'Résumé court.']));
    assert_same('Texte du contenu.', blog_meta(['summary' => '', 'content' => '<p>Texte du contenu.</p>']));
}

function test_blog_tete_affiche_en_bref_et_les_deux_dates(): void
{
    $html = blog_rendre_partiel('article-tete.php', [
        'post' => ['title' => 'Titre de test', 'category' => 'SEO', 'summary' => 'Réponse directe en deux phrases. Puis la suite.',
                   'published_at' => '2026-06-08 09:00:00', 'updated_at' => '2026-10-20 10:00:00'],
        'fullName' => 'Richard SALANON', 'readingTime' => 13,
    ]);
    assert_contains('<h1>Titre de test</h1>', $html);
    assert_contains('<strong>En bref.</strong> Réponse directe en deux phrases. Puis la suite.', $html);
    assert_contains('Publié le <time datetime="2026-06-08">' . registre_date_fr('2026-06-08') . '</time>', $html);
    assert_contains('Mis à jour le <time datetime="2026-10-20">' . registre_date_fr('2026-10-20') . '</time>', $html);
    $sansResume = blog_rendre_partiel('article-tete.php', ['post' => ['title' => 'T', 'summary' => '', 'published_at' => null, 'updated_at' => null], 'fullName' => 'R', 'readingTime' => 0]);
    assert_not_contains('En bref', $sansResume);
    assert_not_contains('Mis à jour', $sansResume);
}

function test_blog_corps_avec_boite_auteur_et_gabarit_branche(): void
{
    $corps = blog_rendre_partiel('article-corps.php', ['articleHtml' => '<h2>Question ?</h2><p>Texte.</p>']);
    assert_contains('<div class="art-prose"><h2>Question ?</h2><p>Texte.</p></div>', $corps);
    assert_contains('class="boite-auteur"', $corps);
    $src = (string) file_get_contents(racine('portfolio/article.php'));
    foreach (['article-tete.php', 'article-corps.php', 'blog_meta($post)'] as $attendu) {
        assert_contains($attendu, $src);
    }
    assert_not_contains('pv2EditorialFonts', $src, 'Fraunces et Lora sont retirées (spec 2, polices)');
}

function test_blog_tableau_de_bord_edite_la_meta(): void
{
    $api = (string) preg_replace('/\s+/', '', (string) file_get_contents(racine('api/blog.php')));
    assert_contains('meta=?', $api);
    assert_contains("'meta'=>", $api);
    assert_contains('form.meta', (string) file_get_contents(racine('dashboard/blog.php')));
}
```

Run: `php tools/tests/run.php Blog`
Expected: FAIL (`blog_date_maj()` indéfinie, partiels absents).

- [ ] **Step 3 : fonctions**

Ajouter à `helpers/blog.php` :

```php
/** Meta description : la colonne `meta` quand elle est saisie, sinon le résumé (ou le début du texte) tronqué. */
function blog_meta(array $post): string
{
    $meta = trim((string) ($post['meta'] ?? ''));
    return $meta !== '' ? $meta : seoDescription((string) (($post['summary'] ?? '') ?: ($post['content'] ?? '')));
}

/** Date de mise à jour affichée et déclarée, jamais antérieure à la publication (articles antidatés). */
function blog_date_maj(array $post): string
{
    $ts = max((int) strtotime((string) ($post['updated_at'] ?? '')), (int) strtotime((string) ($post['published_at'] ?? '')));
    return $ts > 0 ? date('Y-m-d', $ts) : '';
}
```

- [ ] **Step 4 : partiels**

`portfolio/partials/article-tete.php` :

```php
<?php // En-tête d'article (vague 1F, spec 5.5) : rubrique, H1, auteur, dates visibles alignées sur dateModified, « En bref ».
$publieIso = !empty($post['published_at']) ? date('Y-m-d', (int) strtotime((string) $post['published_at'])) : '';
$majIso    = blog_date_maj($post);
$bref      = trim((string) ($post['summary'] ?? ''));
?>
<div class="wrap art-head">
  <?php if (!empty($post['category'])): ?><span class="art-cat"><?= sanitize((string) $post['category']) ?></span><?php endif; ?>
  <h1><?= sanitize((string) $post['title']) ?></h1>
  <div class="art-meta">
    <span>Par <?= sanitize((string) $fullName) ?></span>
    <?php if ($publieIso !== ''): ?><span class="d"></span><span>Publié le <time datetime="<?= $publieIso ?>"><?= sanitize(registre_date_fr($publieIso)) ?></time></span><?php endif; ?>
    <?php if ($majIso !== ''): ?><span class="d"></span><span class="art-maj">Mis à jour le <time datetime="<?= $majIso ?>"><?= sanitize(registre_date_fr($majIso)) ?></time></span><?php endif; ?>
    <?php if (!empty($readingTime)): ?><span class="d"></span><span><?= (int) $readingTime ?> min de lecture</span><?php endif; ?>
  </div>
  <?php if ($bref !== ''): ?><p class="art-bref"><strong>En bref.</strong> <?= sanitize($bref) ?></p><?php endif; ?>
</div>
```

`portfolio/partials/article-corps.php` :

```php
<?php // Corps d'article (vague 1F) : texte de la base, puis boîte auteur (spec 5.5, règle 7).
?>
<div class="art-prose"><?= $articleHtml ?></div>
<?php include __DIR__ . '/boite-auteur.php';
```

- [ ] **Step 5 : gabarit, styles**

Dans `portfolio/article.php` :
- ligne 113 : `$pageDesc = blog_meta($post);` ;
- remplacer le bloc `<div class="wrap art-head">…</div>` (lignes 174 à 181) par `<?php include __DIR__ . '/partials/article-tete.php'; ?>` ;
- remplacer `<div class="art-prose"><?= $articleHtml ?></div>` par `<?php include __DIR__ . '/partials/article-corps.php'; ?>` ;
- supprimer le commentaire de la ligne 165 et `$pv2EditorialFonts = true;` ; les variables `$publishedFr` devenues inutiles sont retirées si plus rien ne les lit (`grep -n publishedFr portfolio/article.php`).

Dans `assets/css/portfolio-v2.css` : toute règle `.art-head` ou `.art-prose` qui nomme `Fraunces` ou `Lora` prend la police de titres ou de texte du site (mêmes variables que `.registre-hero`, chercher `Sora` et `Plus Jakarta Sans` dans le fichier) ; ajouter :

```css
.art-bref{max-width:46rem;margin:1.25rem 0 0;font-size:1.0625rem;line-height:1.65}
.art-bref strong{color:var(--acc)}
.art-head .boite-auteur,.blog-main .boite-auteur{margin-top:2.5rem}
```

Run: `php tools/tests/run.php Blog`
Expected: PASS sauf `test_blog_tableau_de_bord_edite_la_meta`.

- [ ] **Step 6 : tableau de bord et API**

`api/blog.php` : dans la validation (vers la ligne 211), après le résumé :

```php
    $meta = trim($d['meta'] ?? '');
    if (mb_strlen($meta) > 160) jsonError('Meta description trop longue (max 160)');
```

ajouter `'meta' => $meta !== '' ? $meta : null,` au tableau renvoyé, puis la colonne `meta` dans l'INSERT (liste des colonnes, `?` et valeur `$v['meta']` à la suite de `summary`) et `meta=?,` dans l'UPDATE, au même rang que la valeur.

`dashboard/blog.php` : ajouter `meta: ''` aux deux objets `form` (lignes 371 et 378) et, sous le champ résumé, un champ sur le modèle de celui du résumé :

```html
<label class="block text-sm font-semibold text-gray-700 mb-1">Meta description
  <span class="text-xs font-normal" :class="(form.meta||'').length < 140 || (form.meta||'').length > 155 ? 'text-amber-600' : 'text-gray-400'" x-text="(form.meta||'').length + ' / 140 à 155'"></span>
</label>
<textarea x-model="form.meta" maxlength="160" rows="2" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none resize-none" placeholder="Phrase complète affichée par Google sous le titre..."></textarea>
```

Renommer le libellé du résumé en « En bref (2 à 4 phrases, affiché sous le titre) ». Vérifier que le chargement d'un article à l'édition remplit `form.meta` (le GET renvoie `SELECT *`, la colonne suit d'elle-même).

Run: `php tools/tests/run.php`
Expected: 0 échec.

- [ ] **Step 7 : commit**

```bash
git add migrations/2026-10-07-blog-00-schema.sql helpers/blog.php portfolio/article.php portfolio/partials/article-tete.php portfolio/partials/article-corps.php assets/css/portfolio-v2.css api/blog.php dashboard/blog.php tools/tests/BlogTest.php
git commit -m "Blog : en bref, dates visibles et boite auteur dans le gabarit d'article, meta description distincte du resume"
```

### Task 3: Redirections d'articles et listes sans article redirigé

**Files:**
- Modify: `helpers/redirections.php` (`redirection_cible`, ligne 14), `helpers/blog.php`, `helpers/functions.php` (`sitemap_entrees_base`, vers la ligne 683), `helpers/llms.php` (entrée `'Articles'`, ligne 160)
- Test: `tools/tests/RedirectionsTest.php` (`test_redirections_table_conforme_a_la_spec`), `tools/tests/BlogTest.php`

**Interfaces:**
- Consumes: `redirections_table()`, `route_resoudre()`, `blog_sans_rediriges()`, `getPDO()` (config/db.php).
- Produces: `blog_article_en_ligne(string $slug): bool` (article publié en base ; false sans base) ; `redirection_cible(string $chemin, ?array $table = null, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null, ?callable $articleEnLigne = null): ?string`, qui accepte une cible `/blog/{slug}` active seulement si l'article cible est en ligne. Les Tasks 6 et 7 ajoutent les entrées `/blog/{absorbé}` vers `/blog/{gardé}` et `/blog/{article}` vers `/comparatifs/{slug}` dans `portfolio/data/redirections.php`.

- [ ] **Step 1 : tests qui échouent**

Ajouter à `tools/tests/BlogTest.php` :

```php
function test_blog_redirection_vers_un_article_seulement_s_il_est_en_ligne(): void
{
    $table = ['/blog/doublon' => '/blog/garde'];
    $garde = static fn(string $slug): bool => $slug === 'garde';
    $aucun = static fn(string $slug): bool => false;
    assert_same('/blog/garde', redirection_cible('/blog/doublon', $table, REGISTRES_RACINE, null, $garde));
    assert_same(null, redirection_cible('/blog/doublon', $table, REGISTRES_RACINE, null, $aucun), 'cible absente : l\'ancien article reste servi');
    assert_same(null, redirection_cible('/blog/inconnu', $table, REGISTRES_RACINE, null, $garde));
}

function test_blog_article_en_ligne_faux_sans_base(): void
{
    // Le site local tourne sans base (AmorcageTest) : aucune redirection d'article ne s'active, aucune exception.
    assert_same(false, blog_article_en_ligne('un-article-quelconque'));
}

function test_blog_sitemap_et_llms_sans_articles_rediriges(): void
{
    $fonctions = (string) file_get_contents(racine('helpers/functions.php'));
    $debut = (int) strpos($fonctions, 'function sitemap_entrees_base');
    assert_contains('blog_sans_rediriges(', substr($fonctions, $debut, 3000), 'sitemap : article redirigé retiré');
    assert_contains('blog_sans_rediriges(', (string) file_get_contents(racine('helpers/llms.php')), 'llms.txt : article redirigé retiré');
}
```

Dans `tools/tests/RedirectionsTest.php`, `test_redirections_table_conforme_a_la_spec` : une cible `/blog/{slug}` compte comme résolue (avant la boucle sur `ROUTES_REGISTRES`, `$resolue = (bool) preg_match('#^/blog/[a-z0-9-]+$#', $vers);`).

Run: `php tools/tests/run.php Blog`
Expected: FAIL (`blog_article_en_ligne()` indéfinie, `redirection_cible()` refuse 5 arguments).

- [ ] **Step 2 : implémentation**

`helpers/blog.php` :

```php
/** Article publié et daté du passé dans la base ; false si la base est injoignable (site local, panne). */
function blog_article_en_ligne(string $slug): bool
{
    static $memo = [];
    if (array_key_exists($slug, $memo)) {
        return $memo[$slug];
    }
    try {
        if (!function_exists('getPDO')) {
            require_once __DIR__ . '/../config/db.php';
        }
        $st = getPDO()->prepare("SELECT 1 FROM blog_posts WHERE slug = ? AND status = 'published' AND (published_at IS NULL OR published_at <= NOW())");
        $st->execute([$slug]);
        return $memo[$slug] = (bool) $st->fetchColumn();
    } catch (\Throwable $e) {
        return $memo[$slug] = false;
    }
}
```

`helpers/redirections.php`, `redirection_cible` :

```php
/** Cible d'une ancienne URL si elle est publiée (page de registre ou article en base), sinon null. */
function redirection_cible(string $chemin, ?array $table = null, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null, ?callable $articleEnLigne = null): ?string
{
    $cible = ($table ?? redirections_table())[$chemin] ?? null;
    if ($cible === null) {
        return null;
    }
    if (preg_match('#^/blog/([a-z0-9-]+)$#', $cible, $m)) {
        return ($articleEnLigne ?? 'blog_article_en_ligne')($m[1]) ? $cible : null;
    }
    return route_resoudre(ltrim($cible, '/'), $racine, $aujourdhui) !== null ? $cible : null;
}
```

`helpers/functions.php`, dans `sitemap_entrees_base` : `foreach (blog_sans_rediriges($pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC)) as $b)`.

`helpers/llms.php`, entrée `'Articles'` : lire la signature de `llms_requete()` puis retirer les lignes redirigées avant la mise en forme, au plus simple en remplaçant la requête par un appel qui filtre `blog_sans_rediriges()` sur les lignes (même ordre, mêmes champs).

Run: `php tools/tests/run.php`
Expected: 0 échec.

- [ ] **Step 3 : commit**

```bash
git add helpers/redirections.php helpers/blog.php helpers/functions.php helpers/llms.php tools/tests/RedirectionsTest.php tools/tests/BlogTest.php
git commit -m "Blog : redirection d'un article vers un autre article en ligne, sitemap et llms sans article redirige"
```

### Task 4: Source d'article, migration générée et contrôle hors ligne

**Files:**
- Create: `helpers/migrations.php`, `tools/blog/migration.php`, `tools/blog/qa.php`, `docs/blog/articles/.gitkeep`
- Modify: `migrate.php` (fonction `decouperSql`, vers la ligne 85), `helpers/blog.php`
- Test: `tools/tests/BlogTest.php`

**Interfaces:**
- Consumes: `blog_mots()`, partiels `article-tete.php` et `article-corps.php` (Task 2), `buildFaqSchema()` (helpers/functions.php:450), `qa_texte_principal()`, `qa_texte_interdit()`, `qa_faits_incoherents()`, `qa_noms_de_lieux()`, `qa_bardeaux()`, `qa_ressemblance()`, `qa_compter_mots()` (tools/qa/lib.php).
- Produces: format de source `docs/blog/articles/{slug}.php` (ci-dessous) ; `migration_decouper_sql(string $sql): array` ; `BLOG_BALISES` ; `blog_hors_quill(string $html): array` ; `blog_article_problemes(array $a, string $slugFichier): array` ; `blog_sql_chaine(string $s): string` ; `blog_sql_mise_a_jour(array $a): string` ; commandes `php tools/blog/migration.php SLUG [--date=AAAA-MM-JJ]` et `php tools/blog/qa.php [--dossier=DIR] [SLUG ...]`.

Format d'une source (les rédacteurs des Tasks 6 et 7 l'écrivent) :

```php
<?php
// Source de la reprise de /blog/{slug} (vague 1F). Après la migration, la base fait foi :
// ce fichier ne sert qu'à générer migrations/AAAA-MM-JJ-blog-{slug}.sql.
return [
    'slug'       => 'pourquoi-votre-site-est-lent',
    'instantane' => '2026-10-07 18:42:10',   // valeur de docs/blog/origine/index.json, recopiée telle quelle
    'titre'      => '…',                     // H1 et balise title, 50 à 60 caractères
    'meta'       => '…',                     // 140 à 155 caractères, phrase complète
    'resume'     => '…',                     // « En bref », 2 à 4 phrases, 500 caractères au plus
    'categorie'  => 'Développement web',     // celle de l'instantané
    'tags'       => ['performance', 'Core Web Vitals'],
    'contenu'    => <<<'HTML'
<h2>…?</h2>
<p>…</p>
HTML,
];
```

- [ ] **Step 1 : extraire le découpage SQL de migrate.php**

Déplacer le corps de `decouperSql()` de `migrate.php` dans `helpers/migrations.php` sous le nom `migration_decouper_sql(string $sql): array` (code identique, commentaire d'origine conservé, en-tête de fichier sur le modèle de `helpers/redirections.php`) ; dans `migrate.php`, remplacer la définition par `require_once __DIR__ . '/helpers/migrations.php';` et l'appel par `migration_decouper_sql($sql)`.

Run: `php -l migrate.php && php -l helpers/migrations.php`
Expected: `No syntax errors detected` deux fois.

- [ ] **Step 2 : tests qui échouent**

Ajouter à `tools/tests/BlogTest.php` (en tête : `require_once racine('helpers/migrations.php');`) :

```php
function blog_source_de_test(array $modif = []): array
{
    $faq = '';
    for ($i = 1; $i <= 6; $i++) {
        $faq .= "<p><strong>Question numéro {$i} ?</strong></p><p>Réponse numéro {$i}.</p>";
    }
    return $modif + [
        'slug'       => 'test-article',
        'instantane' => '2026-10-07 12:00:00',
        'titre'      => 'Titre ' . str_repeat('x', 49),
        'meta'       => str_repeat('m', 149) . '.',
        'resume'     => 'Première phrase du résumé. Deuxième phrase du résumé.',
        'categorie'  => 'SEO',
        'tags'       => ['a/b', 'référencement'],
        'contenu'    => '<h2>Pourquoi tester ?</h2><p>Texte avec <a href="/contact">un lien</a>.</p><h2>Questions fréquentes</h2>' . $faq
                      . '<h2>Sources</h2><ul><li><a href="https://example.org/">Source</a>, consultée le 7 octobre 2026</li></ul>',
    ];
}

function test_blog_source_valide_et_refus(): void
{
    assert_same([], blog_article_problemes(blog_source_de_test(), 'test-article'));
    $base = blog_source_de_test()['contenu'];
    $p = static fn(array $m): string => implode(' | ', blog_article_problemes(blog_source_de_test($m), 'test-article'));
    assert_contains('titre', $p(['titre' => 'Trop court']));
    assert_contains('meta', $p(['meta' => 'Courte.']));
    assert_contains('résumé', $p(['resume' => 'Une seule phrase.']));
    assert_contains('balise <table>', $p(['contenu' => $base . '<table><tr><td>x</td></tr></table>']));
    assert_contains('attribut class', $p(['contenu' => $base . '<p class="x">y</p>']));
    assert_contains('H2 sans question', $p(['contenu' => '<h2>Un titre plat</h2>' . $base]));
    assert_contains('FAQ', $p(['contenu' => '<h2>Pourquoi ?</h2><p>x</p><h2>Sources</h2><ul><li><a href="https://example.org/">S</a></li></ul>']));
    assert_contains('Sources', $p(['contenu' => '<h2>Pourquoi ?</h2><p>x</p>']));
    assert_contains('emoji', $p(['contenu' => $base . '<p>Bravo 🙂</p>']));
    assert_contains('paragraphe de 121 mots', $p(['contenu' => $base . '<p>' . trim(str_repeat('mot ', 121)) . '</p>']));
    assert_contains('instantane', $p(['instantane' => '07/10/2026']));
    assert_contains('slug', implode(' ', blog_article_problemes(blog_source_de_test(), 'autre-nom')));
    assert_same([], blog_hors_quill('<p><a href="https://x.org/?a=b&amp;c=d">lien</a> <img src="/uploads/blog/x.webp" alt="x"></p>'), 'un = dans une URL n\'est pas un attribut');
    assert_contains('image hors /uploads/', implode(' ', blog_hors_quill('<p><img src="https://x.org/i.png" alt="x"></p>')));
}

function test_blog_migration_une_instruction_et_texte_intact(): void
{
    $piege = "<p>L'apostrophe, un \\ antislash ; un point-virgule, des \"guillemets\".</p>\n-- <p>ligne qui commence par deux tirets</p>\r\n<p>Fin : é à ç œ.</p>";
    $sql = blog_sql_mise_a_jour(blog_source_de_test(['contenu' => $piege, 'titre' => "Titre d'essai"]));
    $instructions = migration_decouper_sql($sql);
    assert_same(1, count($instructions), $sql);
    $i = $instructions[0];
    assert_contains("WHERE slug = 'test-article' AND (updated_at IS NULL OR updated_at <= '2026-10-07 12:00:00')", $i);
    assert_contains("title = 'Titre d\\'essai'", $i);
    assert_contains('updated_at = NOW()', $i);
    $debut = strpos($i, "content = '") + strlen("content = '");
    $fin = strpos($i, "', category = ");
    assert_same($piege, stripcslashes(substr($i, $debut, $fin - $debut)), 'le littéral décodé comme par MySQL redonne le texte');
}

function test_blog_qa_hors_ligne_sur_une_source_valide(): void
{
    $dossier = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'blog-qa-' . getmypid();
    if (!is_dir($dossier)) { mkdir($dossier); }
    file_put_contents($dossier . DIRECTORY_SEPARATOR . 'test-article.php', '<?php return ' . var_export(blog_source_de_test(), true) . ';');
    exec(escapeshellarg(PHP_BINARY) . ' ' . escapeshellarg(racine('tools/blog/qa.php')) . ' --dossier=' . escapeshellarg($dossier) . ' 2>&1', $sortie, $code);
    array_map('unlink', glob($dossier . DIRECTORY_SEPARATOR . '*.php') ?: []);
    rmdir($dossier);
    assert_same(0, $code, implode("\n", $sortie));
    assert_contains('test-article', implode("\n", $sortie));
}
```

Run: `php tools/tests/run.php Blog`
Expected: FAIL (`blog_article_problemes()` indéfinie).

- [ ] **Step 3 : validation et génération (helpers/blog.php)**

```php
/** Balises et attributs que l'éditeur Quill du tableau de bord conserve (formats par défaut de Quill 2). */
const BLOG_BALISES = ['h2' => [], 'h3' => [], 'p' => [], 'strong' => [], 'em' => [], 'a' => ['href'], 'ul' => [], 'ol' => [],
    'li' => [], 'blockquote' => [], 'br' => [], 'img' => ['src', 'alt'], 'code' => []];

/** Ce que Quill détruirait si Richard rouvrait l'article au tableau de bord : balises et attributs hors liste. */
function blog_hors_quill(string $html): array
{
    $problemes = [];
    preg_match_all('#<([a-zA-Z][a-zA-Z0-9]*)\b([^>]*)>#', $html, $balises, PREG_SET_ORDER);
    foreach ($balises as [, $nom, $attributs]) {
        $nom = strtolower($nom);
        if (!array_key_exists($nom, BLOG_BALISES)) {
            $problemes[] = "balise <{$nom}>";
            continue;
        }
        preg_match_all('#([a-zA-Z-]+)\s*=\s*("[^"]*"|\'[^\']*\'|[^\s>]+)#', $attributs, $a);
        foreach ($a[1] as $attribut) {
            if (!in_array(strtolower($attribut), BLOG_BALISES[$nom], true)) {
                $problemes[] = "attribut {$attribut} sur <{$nom}>";
            }
        }
        if ($nom === 'img' && !preg_match('#src="/uploads/#', $attributs)) {
            $problemes[] = 'image hors /uploads/';
        }
    }
    return array_values(array_unique($problemes));
}

/** Ce qui empêche de générer la migration d'une source (liste vide : source valide). */
function blog_article_problemes(array $a, string $slugFichier): array
{
    $p = [];
    $slug = (string) ($a['slug'] ?? '');
    if ($slug !== $slugFichier || !preg_match('/^[a-z0-9-]+$/', $slug)) { $p[] = "slug « {$slug} » différent du nom de fichier « {$slugFichier} »"; }
    if (!preg_match('/^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/', (string) ($a['instantane'] ?? ''))) { $p[] = 'instantane : AAAA-MM-JJ HH:MM:SS attendu (docs/blog/origine/index.json)'; }
    $l = mb_strlen((string) ($a['titre'] ?? ''));
    if ($l < 50 || $l > 60) { $p[] = "titre : {$l} caractères (50 à 60)"; }
    $meta = (string) ($a['meta'] ?? '');
    $l = mb_strlen($meta);
    if ($l < 140 || $l > 155 || !preg_match('/[.!?]$/u', $meta)) { $p[] = "meta : {$l} caractères (140 à 155, phrase complète)"; }
    $resume = trim((string) ($a['resume'] ?? ''));
    $phrases = preg_match_all('/[.!?](?=\s|$)/u', $resume);
    if (mb_strlen($resume) > 500 || $phrases < 2 || $phrases > 4) { $p[] = "résumé : {$phrases} phrase(s), " . mb_strlen($resume) . ' caractères (2 à 4 phrases, 500 au plus)'; }
    if (trim((string) ($a['categorie'] ?? '')) === '') { $p[] = 'categorie vide'; }
    if (!is_array($a['tags'] ?? null) || array_filter($a['tags'], static fn($t): bool => !is_string($t) || trim($t) === '')) { $p[] = 'tags : liste de chaînes non vides'; }
    $contenu = (string) ($a['contenu'] ?? '');
    foreach (blog_hors_quill($contenu) as $x) { $p[] = $x; }
    preg_match_all('#<h2>(.*?)</h2>#su', $contenu, $h2);
    foreach ($h2[1] as $titre) {
        $titre = trim(html_entity_decode(strip_tags($titre), ENT_QUOTES | ENT_HTML5, 'UTF-8'));
        if (!in_array($titre, ['Questions fréquentes', 'Sources'], true) && !str_ends_with($titre, '?')) { $p[] = "H2 sans question : {$titre}"; }
    }
    preg_match_all('#<p>(.*?)</p>#su', $contenu, $paragraphes);
    foreach ($paragraphes[1] as $paragraphe) {
        if (($n = blog_mots($paragraphe)) > 120) { $p[] = "paragraphe de {$n} mots (120 au plus)"; }
    }
    $faq = buildFaqSchema($contenu);
    if (count($faq['mainEntity'] ?? []) < 6) { $p[] = 'FAQ : « <h2>Questions fréquentes</h2> » suivi de 6 questions au moins'; }
    if (!preg_match('#<h2>Sources</h2>.*?<a href="https://#su', $contenu)) { $p[] = 'Sources : « <h2>Sources</h2> » suivi d\'au moins un lien https'; }
    foreach (['titre', 'meta', 'resume', 'contenu'] as $champ) {
        if (preg_match('/[\x{10000}-\x{10FFFF}]/u', (string) ($a[$champ] ?? ''))) { $p[] = "emoji ou caractère sur 4 octets dans {$champ} (refusé par une colonne utf8mb3)"; }
    }
    if (str_contains($contenu . ($a['titre'] ?? ''), 'Richard Technologies')) { $p[] = 'marque retirée : Richard Technologies'; }
    return $p;
}

/** Littéral de chaîne MySQL (mode par défaut, antislash actif), sur une seule ligne. */
function blog_sql_chaine(string $s): string
{
    return "'" . strtr($s, ['\\' => '\\\\', "'" => "\\'", "\n" => '\\n', "\r" => '\\r', "\0" => '\\0', "\x1a" => '\\Z']) . "'";
}

/** Migration d'un article repris : une seule instruction, qui n'écrase pas un article modifié depuis l'instantané. */
function blog_sql_mise_a_jour(array $a): string
{
    $tags = (string) json_encode(array_values($a['tags']), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    return "-- Vague 1F : reprise de /blog/{$a['slug']} (source docs/blog/articles/{$a['slug']}.php).\n"
        . "-- Sans effet si l'article a été modifié au tableau de bord après l'instantané du {$a['instantane']}.\n"
        . 'UPDATE blog_posts SET title = ' . blog_sql_chaine($a['titre'])
        . ', summary = ' . blog_sql_chaine($a['resume'])
        . ', meta = ' . blog_sql_chaine($a['meta'])
        . ', content = ' . blog_sql_chaine($a['contenu'])
        . ', category = ' . blog_sql_chaine($a['categorie'])
        . ', tags = ' . blog_sql_chaine($tags)
        . ', reading_time = ' . max(1, (int) ceil(blog_mots($a['contenu']) / 250))
        . ', updated_at = NOW() WHERE slug = ' . blog_sql_chaine($a['slug'])
        . ' AND (updated_at IS NULL OR updated_at <= ' . blog_sql_chaine($a['instantane']) . ");\n";
}
```

Vérifier la forme renvoyée par `buildFaqSchema()` (helpers/functions.php, vers la ligne 450 : tableau avec `mainEntity`, ou `null`) et adapter le comptage si la clé diffère.

- [ ] **Step 4 : outils**

`tools/blog/migration.php` :

```php
<?php
// tools/blog/migration.php · Migration SQL d'un article repris (vague 1F).
// Usage : php tools/blog/migration.php SLUG [--date=AAAA-MM-JJ]
// Lit docs/blog/articles/SLUG.php, refuse une source invalide, écrit migrations/{date}-blog-SLUG.sql.
declare(strict_types=1);
$racine = dirname(__DIR__, 2);
require $racine . '/helpers/functions.php';
require_once $racine . '/helpers/migrations.php';

$slug = $argv[1] ?? '';
$date = date('Y-m-d');
foreach (array_slice($argv, 2) as $arg) {
    if (preg_match('/^--date=(\d{4}-\d{2}-\d{2})$/', $arg, $m)) { $date = $m[1]; }
}
$source = "{$racine}/docs/blog/articles/{$slug}.php";
if (!preg_match('/^[a-z0-9-]+$/', $slug) || !is_file($source)) { fwrite(STDERR, "source introuvable : docs/blog/articles/{$slug}.php\n"); exit(1); }
$a = require $source;
if ($problemes = blog_article_problemes($a, $slug)) { fwrite(STDERR, "refusé :\n - " . implode("\n - ", $problemes) . "\n"); exit(1); }
$sql = blog_sql_mise_a_jour($a);
if (count(migration_decouper_sql($sql)) !== 1) { fwrite(STDERR, "la migration ne forme pas une seule instruction\n"); exit(1); }
$nom = "{$date}-blog-{$slug}.sql";
foreach (glob("{$racine}/migrations/*-blog-{$slug}.sql") ?: [] as $autre) {
    if (basename($autre) !== $nom) { fwrite(STDERR, 'migration déjà générée : ' . basename($autre) . " (la supprimer d'abord si elle n'est pas déployée)\n"); exit(1); }
}
file_put_contents("{$racine}/migrations/{$nom}", $sql);
echo "migrations/{$nom} (" . blog_mots($a['contenu']) . " mots)\n";
```

`tools/blog/qa.php` :

```php
<?php
// tools/blog/qa.php · Contrôle hors ligne des articles repris (vague 1F), sans base de données.
// Usage : php tools/blog/qa.php [--dossier=DIR] [SLUG ...]  (défaut : docs/blog/articles, tous les fichiers)
// Rend chaque source avec les partiels du gabarit, puis : validation de la source, texte interdit et
// accents, faits d'identité, ressemblance de 40 % au plus entre articles. Le nombre de mots est affiché
// pour information : aucun minimum pour le blog (décision 8 du plan, consigne de Richard du 07/10/2026).
declare(strict_types=1);
$racine = dirname(__DIR__, 2);
require $racine . '/helpers/functions.php';
require_once $racine . '/helpers/icons.php';
require $racine . '/tools/qa/lib.php';

$dossier = $racine . '/docs/blog/articles';
$demandes = [];
foreach (array_slice($argv, 1) as $arg) {
    if (str_starts_with($arg, '--dossier=')) { $dossier = substr($arg, 10); } else { $demandes[] = $arg; }
}
$faits = require $racine . '/portfolio/data/faits.php';
$neutres = qa_noms_de_lieux();
$rendus = [];
foreach (glob($dossier . '/*.php') ?: [] as $f) {
    $a = require $f;
    $post = ['title' => $a['titre'] ?? '', 'category' => $a['categorie'] ?? '', 'summary' => $a['resume'] ?? '',
             'published_at' => '2026-01-01 00:00:00', 'updated_at' => date('Y-m-d H:i:s')];
    $fullName = fait('nom');
    $readingTime = 1;
    $articleHtml = (string) ($a['contenu'] ?? '');
    ob_start();
    include $racine . '/portfolio/partials/article-tete.php';
    include $racine . '/portfolio/partials/article-corps.php';
    $texte = qa_texte_principal('<main>' . ob_get_clean() . '</main>');
    $rendus[basename($f, '.php')] = ['a' => $a, 'texte' => $texte, 'bardeaux' => qa_bardeaux($texte, 5, $neutres)];
}
$echecs = 0;
foreach ($rendus as $slug => $r) {
    if ($demandes && !in_array($slug, $demandes, true)) { continue; }
    $p = array_merge(blog_article_problemes($r['a'], $slug), qa_texte_interdit($r['texte']), qa_faits_incoherents($r['texte'], $faits));
    foreach ($rendus as $autre => $o) {
        if ($autre !== $slug && ($s = qa_ressemblance($r['bardeaux'], $o['bardeaux'])) > 0.40) { $p[] = sprintf('ressemblance %d %% avec %s', (int) round($s * 100), $autre); }
    }
    $mots = qa_compter_mots($r['texte']);
    echo ($p ? 'ECHEC ' : 'OK    ') . str_pad((string) $mots, 5, ' ', STR_PAD_LEFT) . " mots  {$slug}" . ($p ? '  [' . implode(' ; ', $p) . ']' : '') . "\n";
    $echecs += $p ? 1 : 0;
}
echo count($rendus), " source(s), {$echecs} en échec\n";
exit($echecs > 0 ? 1 : 0);
```

Vérifier les signatures de `qa_texte_principal`, `qa_texte_interdit`, `qa_faits_incoherents`, `qa_bardeaux`, `qa_ressemblance` et `qa_compter_mots` (tools/qa/lib.php, lignes 48 à 235) et adapter les appels si elles diffèrent. `docs/blog/articles/.gitkeep` : fichier vide.

Run: `php tools/tests/run.php Blog`
Expected: PASS (tous les tests du fichier).

- [ ] **Step 5 : suite complète et commit**

Run: `php tools/tests/run.php` puis `php tools/blog/qa.php`
Expected: 0 échec ; `0 source(s), 0 en échec`.

```bash
git add helpers/migrations.php migrate.php helpers/blog.php tools/blog/migration.php tools/blog/qa.php docs/blog/articles/.gitkeep tools/tests/BlogTest.php
git commit -m "Blog : source d'article, migration generee et controle hors ligne"
```

### Task 5: Fusions tranchées, catalogue et consignes (contrôleur)

**Files:**
- Create: `docs/superpowers/consignes/catalogue-blog.md`, `docs/superpowers/consignes/article-blog.md`, `docs/superpowers/consignes/verification-article-blog.md`, `docs/superpowers/consignes/comparatif.md`

- [ ] **Step 1 : trancher les deux fusions dans Search Console**

Search Console, propriété `richardsalanon.com`, Performances, 3 derniers mois, onglet Pages : relever impressions et clics de `/blog/combien-coute-un-site-web-professionnel-en-2026-guide-complet`, `/blog/combien-coute-un-site-web-au-benin`, `/blog/etre-visible-chatgpt-gemini-2026` et `/blog/seo-2026-apparaitre-dans-les-reponses-ia` (navigateur wmux, la session Google de Richard y est ouverte). Dans chaque paire, l'URL gardée est celle qui a le plus d'impressions ; à égalité, la plus ancienne. Noter les chiffres et le choix dans le registre de suivi.

- [ ] **Step 2 : catalogue**

`docs/superpowers/consignes/catalogue-blog.md` : une ligne par texte, colonnes `slug`, `sort` (garder, fusion vers…, absorbe…, comparatif), `catégorie` (celle de l'instantané), `intention principale` (unique sur le blog : deux lignes ne visent jamais la même question), `questions du plan` (5 à 9 H2 formulés en questions), `liens sortants obligatoires` (3 au moins, pages publiées aujourd'hui), `liens entrants à poser` (articles qui doivent renvoyer vers celui-ci, 3 au moins au total sur le blog). Point de départ, à affiner par le contrôleur :

| slug | sort | intention principale |
|---|---|---|
| `qu-est-ce-que-la-digitalisation-d-entreprise-definition-et-guide-pour-bien-demarrer` | garder | Définir la digitalisation (digitalisation, numérisation, transformation numérique) et ce qu'elle change, fonction par fonction |
| `comment-digitaliser-son-entreprise-le-guide-etape-par-etape` | garder | La méthode pas à pas : diagnostic, priorités, choix des outils, déploiement, formation, mesure |
| `digitalisation-des-pme-par-o-commencer-et-quel-cot` | garder | Budget et premiers chantiers d'une PME selon sa taille, coûts par poste, financement |
| `digitalisation-dentreprise-en-afrique-francophone-enjeux-et-bonnes-pratiques` | garder | Ce qui change en Afrique francophone : mobile money, connectivité, SYSCOHADA, lois sur les données, facture normalisée |
| `ia-pour-les-pme-par-ou-commencer` | garder | Premiers usages de l'IA dans une PME, coûts, données, risques |
| `chatbot-whatsapp-entreprise-support-client` | garder | Un assistant WhatsApp pour le service client : API WhatsApp Business, tarifs Meta, relais humain, conformité |
| survivant de la paire GEO (Step 1) | garder, absorbe l'autre | Être cité par ChatGPT, Gemini, Perplexity et les AI Overviews |
| `google-ai-overviews-impact-trafic` | garder | Mesurer et limiter l'effet des AI Overviews sur son trafic |
| `7-erreurs-qui-tuent-votre-referencement` | garder | Diagnostiquer et corriger les erreurs de référencement les plus fréquentes |
| `referencement-local-dominer-pack-local-google` | garder | La stratégie du pack local : les facteurs de classement et leur ordre |
| `google-business-profile-guide-complet` | garder | Créer, valider et tenir sa fiche Google Business Profile pas à pas |
| `obtenir-des-avis-google-clients` | garder | Obtenir des avis Google dans les règles et y répondre |
| `creer-site-e-commerce-vendre-en-ligne-2026` | garder | Lancer une boutique en ligne : catalogue, paiement (mobile money compris), livraison, obligations |
| `landing-page-haute-conversion-7-elements` | garder | Construire une landing page qui convertit, élément par élément |
| `pourquoi-votre-site-est-lent` | garder | Diagnostiquer la lenteur d'un site (Core Web Vitals) et la corriger |
| survivant de la paire « combien coûte » (Step 1) | garder, absorbe l'autre | Le prix d'un site web professionnel, au Bénin et ailleurs, et ce qui le fait varier |
| `crm-gratuit-whatsapp-business-google-sheets` | garder | Monter un suivi client gratuit avec WhatsApp Business et Google Sheets |
| `automatiser-sa-prospection-n8n-make` | garder | Automatiser sa prospection : étapes, outils, consentement, limites ; renvoie au comparatif n8n |
| `jai-construit-un-robot-qui-prospecte-500-artisans-par-mois-voici-ce-que-jai-appris` | garder | Le retour d'expérience de Richard sur son robot, sans en faire un projet phare ; reçoit 3 liens entrants |
| `wordpress-ou-sur-mesure-comment-choisir` | comparatif | Remplacé par `/comparatifs/wordpress-vs-sur-mesure` |
| `application-mobile-ou-site-web-que-developper-en-premier` | comparatif | Remplacé par `/comparatifs/application-mobile-vs-site-web` |

Paires à surveiller pour la ressemblance : les quatre articles de digitalisation ; les trois articles de référencement local ; les trois articles d'automatisation ; la paire GEO et `google-ai-overviews-impact-trafic`.

- [ ] **Step 3 : consignes**

`article-blog.md` (rédacteur) : lire d'abord la ligne du catalogue, `docs/blog/origine/{slug}.html` (et celle de l'article absorbé pour un survivant), les Global Constraints de ce plan ; garder la voix de l'article d'origine et tout fait vrai qu'il contient ; vérifier au navigateur ou à la source officielle chaque chiffre repris ou ajouté, avec date et source nommée dans la phrase ; répondre complètement à chaque question du plan, sans longueur imposée et sans remplissage ; format de source et balises de la Task 4 ; `instantane` recopié de `docs/blog/origine/index.json` ; FAQ de 6 questions ou plus qui ne répètent pas le corps ; section Sources ; liens vérifiés en 200 en production le jour même (`curl -s -o /dev/null -w "%{http_code}"`) ; « Faits déjà vérifiés » : article 391 avec ses deux conditions, seuil de 60 000 € HT, tarifs Meta au navigateur ; aucune trace de recherche du rédacteur dans le texte ; terminer par `php tools/blog/qa.php {slug}` à 0 échec. Interdits : lancer ou arrêter des processus d'autres, `git`, éditer un autre fichier que sa source.

`verification-article-blog.md` (vérificateur) : relire contre l'origine et le catalogue ; ouvrir à sa source chaque chiffre et chaque fait daté (tous si l'article en compte moins de 15, sinon 15 tirés au sort plus tous les prix) ; vérifier que chaque question du plan reçoit une réponse complète, qu'aucun passage ne répète un autre article (`php tools/blog/qa.php` sur tous), que les « je » sont vrais ; corriger directement dans la source et rendre la liste des corrections.

`comparatif.md` : structure des 4 comparatifs en ligne (`portfolio/data/comparatifs/odoo-vs-dolibarr.php` sert de modèle) : critères publiés et pondérés, aucun gagnant désigné, aucun classement où Richard se met premier, aucun lien d'affiliation, données datées et sourcées, 3 200 mots ou plus, `php tools/qa/registres.php --type=comparatif` à 0 échec.

- [ ] **Step 4 : commit**

```bash
git add docs/superpowers/consignes/catalogue-blog.md docs/superpowers/consignes/article-blog.md docs/superpowers/consignes/verification-article-blog.md docs/superpowers/consignes/comparatif.md
git commit -m "Blog : catalogue de la reprise et consignes des redacteurs"
```

### Task 6: Comparatifs et redirections

**Files:**
- Create: `portfolio/data/comparatifs/wordpress-vs-sur-mesure.php`, `portfolio/data/comparatifs/application-mobile-vs-site-web.php`
- Modify: `portfolio/data/redirections.php` (fin du tableau), `portfolio/data/hubs/comparatifs.php` si le hub liste ses pages à la main (sinon rien)

- [ ] **Step 1 : rédaction et vérification**

Un rédacteur puis un vérificateur par comparatif (sonnet), avec `docs/superpowers/consignes/comparatif.md`, l'article d'origine (`docs/blog/origine/{slug}.html`) comme matière et le format d'un fichier de comparatif existant. `publie` et `maj` : la date du commit.

- [ ] **Step 2 : contrôles**

Run: `php tools/qa/registres.php --type=comparatif` et `php tools/qa/doublons.php comparatif wordpress-vs-sur-mesure 15` (même chose pour l'autre)
Expected: `6 page(s), 0 en échec` ; aucun passage de 15 mots repris d'un autre comparatif.

- [ ] **Step 3 : redirections**

Ajouter à la fin du tableau de `portfolio/data/redirections.php` :

```php
    '/blog/wordpress-ou-sur-mesure-comment-choisir'                 => '/comparatifs/wordpress-vs-sur-mesure',
    '/blog/application-mobile-ou-site-web-que-developper-en-premier' => '/comparatifs/application-mobile-vs-site-web',
```

ainsi que les deux fusions tranchées à la Task 5 (`'/blog/{absorbé}' => '/blog/{gardé}'`). Chaque 301 ne part que lorsque sa cible répond : le comparatif à sa date, l'article gardé tant qu'il est publié en base.

Run: `php tools/tests/run.php`
Expected: 0 échec.

- [ ] **Step 4 : commits**

Un commit par comparatif (`git add` du seul fichier, message `Comparatif : WordPress ou sur mesure (remplace l'article du blog)`), puis :

```bash
git add portfolio/data/redirections.php
git commit -m "Blog : deux articles vers leur comparatif, deux doublons fusionnes"
```

### Task 7: Réécriture des 19 articles

**Files:**
- Create: `docs/blog/articles/{slug}.php` et `migrations/AAAA-MM-JJ-blog-{slug}.sql` pour chacun des 19 articles gardés du catalogue

- [ ] **Step 1 : lots**

Trois lots de 6 à 7 articles, rédigés en parallèle (un rédacteur par article, sonnet, consigne `article-blog.md`), puis un vérificateur par article (sonnet, consigne `verification-article-blog.md`). Les deux survivants de fusion passent dans le premier lot. Les articles d'une même famille (digitalisation, référencement local, automatisation) vont dans le même lot, pour que le contrôle de ressemblance les compare dès leur rédaction.

- [ ] **Step 2 : contrôle et commit, article par article (contrôleur)**

```bash
git branch --show-current                      # vague-1f, sinon arrêt
php tools/blog/qa.php                          # tous les articles rédigés : 0 en échec
php tools/blog/migration.php SLUG              # écrit migrations/AAAA-MM-JJ-blog-SLUG.sql
git add docs/blog/articles/SLUG.php migrations/*-blog-SLUG.sql
git commit -m "Article de blog repris : TITRE COURT"
```

Expected: `OK` sur la ligne de l'article ; `migrations/… (N mots)`. Une source corrigée après génération : relancer `php tools/blog/migration.php SLUG` le même jour (le fichier est réécrit) ou supprimer l'ancienne migration non déployée avant de régénérer.

- [ ] **Step 3 : liens entrants**

Après le dernier lot : chaque article reçoit au moins 3 liens entrants depuis d'autres articles (catalogue, colonne « liens entrants à poser »), le robot des 500 artisans compris. Run: `grep -l "/blog/SLUG" docs/blog/articles/*.php | wc -l` pour chaque slug ; Expected: 3 ou plus. Compléter les sources trop peu liées, relancer `php tools/blog/qa.php`, régénérer leurs migrations, committer.

### Task 8: Recette, revue et mise en ligne

**Files:**
- Create: `tools/blog/essai-migrations.php`

- [ ] **Step 1 : essai des migrations sur une base jetable**

`tools/blog/essai-migrations.php` (base MySQL locale de XAMPP, compte `root` sans mot de passe ; la base d'essai est supprimée à la fin, la base de travail `portfolio_saas` n'est que lue) :

```php
<?php
// tools/blog/essai-migrations.php · Applique les migrations du blog sur une base jetable (vague 1F).
// Usage : php tools/blog/essai-migrations.php
// Copie la structure de portfolio_saas.blog_posts, y crée un article par source à la date de son instantané,
// applique la migration de schéma puis chaque migration d'article, vérifie le texte écrit et la garde.
declare(strict_types=1);
$racine = dirname(__DIR__, 2);
require $racine . '/helpers/functions.php';
require_once $racine . '/helpers/migrations.php';

$pdo = new PDO('mysql:host=127.0.0.1;charset=utf8mb4', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$pdo->exec('DROP DATABASE IF EXISTS blog_essai_1f');
$pdo->exec('CREATE DATABASE blog_essai_1f CHARACTER SET utf8mb4');
$pdo->exec('CREATE TABLE blog_essai_1f.blog_posts LIKE portfolio_saas.blog_posts');
$pdo->exec('USE blog_essai_1f');
$sources = [];
foreach (glob($racine . '/docs/blog/articles/*.php') ?: [] as $f) {
    $a = require $f;
    $sources[$a['slug']] = $a;
    $pdo->prepare("INSERT INTO blog_posts (user_id, title, slug, summary, content, status, published_at, updated_at, created_at) VALUES (1, 'avant', ?, 'avant', '<p>avant</p>', 'published', '2026-06-01 08:00:00', ?, '2026-06-01 08:00:00')")
        ->execute([$a['slug'], $a['instantane']]);
}
$premier = array_key_first($sources);
$echecs = 0;
try {
    $migrations = glob($racine . '/migrations/*-blog-*.sql') ?: [];
    sort($migrations, SORT_STRING);
    foreach ($migrations as $m) {
        if ($premier !== null && str_ends_with($m, "-blog-{$premier}.sql")) {
            // Garde : l'article modifié au tableau de bord après l'instantané ne doit pas être écrasé.
            $pdo->prepare("UPDATE blog_posts SET title = 'modifié au tableau de bord', updated_at = DATE_ADD(?, INTERVAL 1 HOUR) WHERE slug = ?")
                ->execute([$sources[$premier]['instantane'], $premier]);
        }
        foreach (migration_decouper_sql((string) file_get_contents($m)) as $instruction) {
            $pdo->exec($instruction);
        }
    }
    foreach ($sources as $slug => $a) {
        $l = $pdo->query('SELECT title, summary, meta, content FROM blog_posts WHERE slug = ' . $pdo->quote($slug))->fetch(PDO::FETCH_ASSOC);
        $attendu = $slug === $premier ? ['title' => 'modifié au tableau de bord'] : ['title' => $a['titre'], 'summary' => $a['resume'], 'meta' => $a['meta'], 'content' => $a['contenu']];
        foreach ($attendu as $col => $valeur) {
            if ($l[$col] !== $valeur) { $echecs++; echo "ECHEC {$slug} : {$col} différent\n"; }
        }
    }
} finally {
    $pdo->exec('DROP DATABASE IF EXISTS blog_essai_1f');
}
echo count($sources), " article(s), {$echecs} écart(s)\n";
exit($echecs > 0 ? 1 : 0);
```

Si la table d'origine refuse l'insertion (colonne obligatoire absente de la liste), lire `SHOW CREATE TABLE portfolio_saas.blog_posts` et compléter l'INSERT.

Run: `php tools/blog/essai-migrations.php`
Expected: `19 article(s), 0 écart(s)` ; `SHOW DATABASES` ne liste plus `blog_essai_1f`.

```bash
git add tools/blog/essai-migrations.php
git commit -m "Blog : essai des migrations sur une base jetable"
```

- [ ] **Step 2 : aller-retour dans Quill**

Page de recette dans le dossier scratchpad (jamais commitée) qui charge Quill 2.0.3 depuis `cdn.jsdelivr.net`, comme `dashboard/blog.php`, colle le contenu de 3 sources (la plus longue, une avec images, une avec citations) par `quill.clipboard.dangerouslyPasteHTML()` puis compare `quill.getSemanticHTML()` au contenu d'origine : mêmes titres, listes, liens, gras et italique, même texte. L'ouvrir dans le navigateur wmux. Noter tout écart dans le registre ; un écart qui perd du texte ou un lien bloque la mise en ligne (règle à ajouter à `BLOG_BALISES`).

- [ ] **Step 3 : revue finale et contrôles**

Run: `php tools/tests/run.php`, `php tools/blog/qa.php`, `php tools/qa/registres.php --type=comparatif`
Expected: 0 échec partout. Puis revue finale de la branche (modèle le plus capable), une vague de corrections au plus, revue ciblée.

- [ ] **Step 4 : mise en ligne**

Proposer à Richard : `git checkout main`, `git merge --no-ff vague-1f`, `git push origin main`. Suivre le workflow (`GH_TOKEN=$(gh auth token --user Richard6141) gh run watch`) : l'étape « Appliquer les migrations de base » liste 20 fichiers (le schéma et 19 articles), le contrôle de fumée passe. En production :
- chaque article repris affiche le titre de sa source (`curl -s https://richardsalanon.com/blog/SLUG | grep -o "<h1>[^<]*"`), « En bref », « Mis à jour le » et la boîte auteur ; un titre resté ancien signale un article modifié au tableau de bord après l'instantané : le signaler à Richard, régénérer sa source sur sa version en ligne ;
- `php tools/qa/crawl.php https://richardsalanon.com --filtre=/blog/ --liens` : 0 échec bloquant (les longueurs de title et de meta passent aussi avec `--strict`, le seuil de mots ne s'applique pas au blog) ;
- les deux fusions répondent 301 vers l'article gardé ; les deux anciens articles des comparatifs répondent 301 dès la date `publie` des comparatifs ;
- `sitemap.xml` et `llms.txt` ne listent plus aucun article redirigé.

Demander l'indexation dans Search Console des articles repris les plus visités, mettre à jour la mémoire du projet, supprimer l'espace de travail SDD de ce plan.
