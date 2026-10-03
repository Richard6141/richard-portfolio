# Vague 0A : fondations techniques, entité et contrôles qualité

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Corriger tous les points P0/P1/P2 techniques de l'audit du 03/10/2026, poser l'entité unique « Richard SALANON » (fiche de faits, schéma `@graph`, robots.txt, llms.txt) et livrer les outils de contrôle qualité dont toutes les vagues suivantes dépendent, sans toucher au design actuel.

**Architecture:** Le site reste en PHP 8 natif. Une constante `SITE_URL` remplace toute lecture de `HTTP_HOST`. Une fiche de faits PHP (`portfolio/data/faits.php`) devient la source unique de l'identité, lue par un constructeur de schéma (`helpers/schema.php`) et un générateur llms (`helpers/llms.php`). Les contrôles qualité sont des scripts PHP en ligne de commande dans `tools/`, exclus du déploiement, avec un petit harnais de tests sans dépendance.

**Tech Stack:** PHP 8.4 (CLI local) / PHP 8.x (Hostinger), Apache + mod_rewrite (XAMPP en local, LiteSpeed en production), GitHub Actions (ubuntu-latest), aucun Composer ajouté.

**Spec:** `docs/superpowers/specs/2026-10-03-refonte-globale-design.md` (sections 4, 5, 8) et `docs/superpowers/specs/2026-10-03-refonte-references.md` (section E).

**Découpage de la vague 0 :** ce plan est le premier des trois.
- 0A (ce plan) : fondations techniques, entité, contrôles. Déployable seul, sur le design actuel.
- 0B : système de design et gabarits (palette, polices, coque, composants, refonte visuelle des pages existantes).
- 0C : registres de données et nouveaux types de pages (pays, formations, métiers, secteurs, histoires, comparatifs, guides, glossaire, outils, redirections, dates de publication).

## Global Constraints

- PHP : `declare(strict_types=1);` en tête de tout nouveau fichier PHP ; aucune dépendance Composer ajoutée ; JavaScript et CSS natifs.
- URL canonique : `https://richardsalanon.com`, sans www, sans barre finale sur les pages feuilles. Aucune URL absolue construite depuis `$_SERVER['HTTP_HOST']` dans le site public.
- Marque : une seule, « Richard SALANON ». « Richard Technologies » ne doit plus apparaître dans le HTML public, le schéma ni les fichiers IA.
- Textes visibles en français accentué (UTF-8). Jamais de tiret cadratin (U+2014) ni de flèche (U+2192) dans un texte visible.
- Schéma : un seul `<script type="application/ld+json">` par page contenant `@graph` ; `Person` `@id` `https://richardsalanon.com/#person` présent sur chaque page ; types interdits : `AggregateRating`, `Review`, `Rating`, `LocalBusiness`.
- Fait inconnu = `null` dans `faits.php`, jamais affiché ni sérialisé.
- `tools/` n'est jamais déployé (ajout à `.deployignore`).
- Déploiement = `git push` sur `main` (GitHub Actions). Ne pas pousser pendant qu'une lecture de sitemap est attendue dans Search Console.
- Messages de commit : phrase française simple (style du dépôt), suivie de `Co-Authored-By: Claude Opus 5.5 <noreply@anthropic.com>`.
- Ne jamais modifier `prudence/`, `dashboard/`, `auth/`, `api/`, `vendor/`, `config/constants.php`.

## Review Focus

1. Requête sur `www.richardsalanon.com` ou en `http://` : un seul saut 301 vers `https://richardsalanon.com` + même chemin + même chaîne de requête (testé en Task 3 et dans le contrôle de fumée de Task 10).
2. Base de données indisponible : `robots.txt` et `llms.txt` restent servis (aucune requête SQL), le sitemap liste encore les pages des registres de fichiers au lieu d'un `urlset` vide (testé en Task 7, 8, 9).
3. Hôte local (`localhost`, `127.0.0.1`, avec ou sans port) : aucune redirection d'hôte ni de protocole, pour que les contrôles locaux fonctionnent (testé en Task 3).
4. Texte français avec apostrophes, guillemets et `<` dans le schéma ou llms : JSON valide, `<` échappé en `<`, accents conservés (testé en Task 5 et 8).
5. Fait `null` dans la fiche : aucune clé vide ni chaîne « null » dans le schéma ou llms.txt (testé en Task 4, 5, 8).

## Carte des fichiers

| Fichier | Rôle | Tâche |
|---|---|---|
| `tools/tests/lib.php`, `tools/tests/run.php` | Harnais de tests sans dépendance | 1 |
| `tools/tests/*Test.php` | Tests unitaires | 1 à 14 |
| `config/site.php` | Constantes publiques versionnées (`SITE_URL`, `GA4_ID`, `CLARITY_ID`) | 2 |
| `helpers/site.php` | `site_base()`, `site_url_from()`, `site_url()` | 2 |
| `.htaccess` | www, garde locale, charset, favicon, scripts internes, routes llms | 3, 8 |
| `portfolio/data/faits.php` | Fiche de faits | 4 |
| `helpers/faits.php` | `faits()`, `faits_depuis()`, `fait()` | 4 |
| `helpers/schema.php` | Nœuds et graphe JSON-LD | 5 |
| `robots.php` | robots.txt statique | 7 |
| `helpers/llms.php`, `llms.php` | llms.txt et llms-full.txt | 8 |
| `helpers/functions.php` | `sitemap_lastmod()`, `buildSitemapXml()` résilient | 2, 9 |
| `.github/workflows/deploy.yml` | dates git, rsync `-t`, contrôle de fumée | 10 |
| `tools/qa/lib.php`, `tools/qa/crawl.php`, `tools/qa/unicite.php`, `tools/qa/smoke.php` | Contrôles qualité | 10, 14 |
| `migrations/2026-10-03-liens-obsoletes-blog.sql` | Liens d'articles vers l'ancien domaine et l'ancien slug | 12 |

---

### Task 1: Harnais de tests et serveur Apache local

**Files:**
- Create: `tools/tests/lib.php`
- Create: `tools/tests/run.php`
- Create: `tools/tests/HarnaisTest.php`
- Modify: `.deployignore` (ajout de `tools/`)
- Modify (hors dépôt) : `C:/xampp/apache/conf/extra/httpd-vhosts.conf`

**Interfaces:**
- Produces: commande `php tools/tests/run.php [filtre]` (code de sortie 0 si tout passe, 1 sinon) ; fonctions `assert_same(mixed $attendu, mixed $obtenu, string $message = ''): void`, `assert_true(bool $condition, string $message = ''): void`, `assert_contains(string $aiguille, string $texte, string $message = ''): void`, `assert_not_contains(string $aiguille, string $texte, string $message = ''): void`, `racine(string $chemin = ''): string`, classe `EchecTest`. Tout fichier `tools/tests/*Test.php` est chargé ; toute fonction `test_*` est exécutée.
- Produces: site local servi par Apache sur `http://localhost:8081/`, avec `SITE_URL=http://localhost:8081`.

- [ ] **Step 1: Écrire le test du harnais**

`tools/tests/HarnaisTest.php` :

```php
<?php
declare(strict_types=1);

function test_harnais_assert_same_accepte_des_valeurs_identiques(): void
{
    assert_same(3, 1 + 2);
}

function test_harnais_assert_same_rejette_des_types_differents(): void
{
    try {
        assert_same(3, '3');
    } catch (EchecTest $e) {
        return;
    }
    throw new EchecTest('assert_same aurait dû échouer entre un entier et une chaîne');
}

function test_harnais_racine_pointe_sur_le_depot(): void
{
    assert_true(is_file(racine('.htaccess')), 'racine() ne pointe pas sur la racine du dépôt');
}
```

- [ ] **Step 2: Lancer et constater l'échec**

Run: `php tools/tests/run.php`
Expected: erreur « Could not open input file: tools/tests/run.php ».

- [ ] **Step 3: Écrire le harnais**

`tools/tests/lib.php` :

```php
<?php
// ============================================================
// tools/tests/lib.php · Assertions du harnais de tests (vague 0A).
// Sans dépendance : le site n'utilise pas Composer pour ses outils.
// ============================================================
declare(strict_types=1);

final class EchecTest extends \RuntimeException {}

function assert_same(mixed $attendu, mixed $obtenu, string $message = ''): void
{
    if ($attendu !== $obtenu) {
        throw new EchecTest(trim($message . "\nattendu : " . var_export($attendu, true) . "\nobtenu  : " . var_export($obtenu, true)));
    }
}

function assert_true(bool $condition, string $message = 'condition fausse'): void
{
    if (!$condition) {
        throw new EchecTest($message);
    }
}

function assert_contains(string $aiguille, string $texte, string $message = ''): void
{
    if (!str_contains($texte, $aiguille)) {
        throw new EchecTest(trim($message . "\nabsent : " . $aiguille));
    }
}

function assert_not_contains(string $aiguille, string $texte, string $message = ''): void
{
    if (str_contains($texte, $aiguille)) {
        throw new EchecTest(trim($message . "\nprésent à tort : " . $aiguille));
    }
}

/** Chemin absolu dans le dépôt, pour les require des tests. */
function racine(string $chemin = ''): string
{
    return dirname(__DIR__, 2) . ($chemin !== '' ? '/' . ltrim($chemin, '/') : '');
}
```

`tools/tests/run.php` :

```php
<?php
// ============================================================
// tools/tests/run.php · Lance les tests unitaires.
// Usage : php tools/tests/run.php [filtre sur le nom de fichier]
// Charge tools/tests/*Test.php et exécute chaque fonction test_*.
// ============================================================
declare(strict_types=1);

require __DIR__ . '/lib.php';

$filtre   = $argv[1] ?? '';
$fichiers = glob(__DIR__ . '/*Test.php') ?: [];
sort($fichiers, SORT_STRING);
foreach ($fichiers as $fichier) {
    if ($filtre === '' || stripos(basename($fichier), $filtre) !== false) {
        require_once $fichier;
    }
}

$tests = array_values(array_filter(
    get_defined_functions()['user'],
    static fn(string $f): bool => str_starts_with($f, 'test_')
));
sort($tests, SORT_STRING);

$echecs = 0;
foreach ($tests as $test) {
    try {
        $test();
        fwrite(STDOUT, "  ok    {$test}\n");
    } catch (\Throwable $e) {
        $echecs++;
        fwrite(STDOUT, "  ECHEC {$test}\n        " . str_replace("\n", "\n        ", $e->getMessage()) . "\n");
    }
}

fwrite(STDOUT, sprintf("\n%d test(s), %d échec(s)\n", count($tests), $echecs));
exit($echecs > 0 ? 1 : 0);
```

- [ ] **Step 4: Lancer et constater le succès**

Run: `php tools/tests/run.php`
Expected: `3 test(s), 0 échec(s)`, code de sortie 0.

- [ ] **Step 5: Exclure `tools/` du déploiement**

Dans `.deployignore`, sous le bloc « Outils locaux et sauvegardes », ajouter la ligne `tools/`.

Run: `grep -n "^tools/$" .deployignore`
Expected: une ligne trouvée.

- [ ] **Step 6: Servir le dépôt avec Apache sur le port 8081**

Ajouter à la fin de `C:/xampp/apache/conf/extra/httpd-vhosts.conf` (fichier de la machine, hors dépôt) :

```apache
# Richard_portfolio : tests locaux de la refonte (vague 0A, 03/10/2026)
Listen 8081
<VirtualHost *:8081>
    ServerName localhost
    DocumentRoot "C:/xampp/htdocs/Richard_portfolio"
    SetEnv SITE_URL http://localhost:8081
    <Directory "C:/xampp/htdocs/Richard_portfolio">
        Options -Indexes +FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

Démarrer Apache en arrière-plan : `(/c/xampp/apache/bin/httpd.exe > /dev/null 2>&1 &)`

Run: `curl -s -o /dev/null -w "%{http_code}\n" http://localhost:8081/assets/img/logo-rt.webp`
Expected: `200`. Les pages qui lisent la base répondent 500 en local tant que la base n'est pas importée : c'est attendu (Task 15).

- [ ] **Step 7: Commit**

```bash
git add tools/tests/lib.php tools/tests/run.php tools/tests/HarnaisTest.php .deployignore
git commit -m "Harnais de tests sans dependance, outils exclus du deploiement" -m "Co-Authored-By: Claude Opus 5.5 <noreply@anthropic.com>"
```

### Task 2: URL canonique fixe

**Files:**
- Create: `config/site.php`
- Create: `helpers/site.php`
- Create: `tools/tests/SiteUrlTest.php`
- Modify: `helpers/functions.php:8` (chargement de `config/site.php`)
- Modify: `portfolio/partials/pv2-bootstrap.php:39-40`
- Modify: `portfolio/index.php:88-90`
- Modify: `portfolio/article.php:81-82`
- Modify: `sitemap.php:15-17`
- Modify: `generate-sitemap.php:29-30`
- Modify: `indexnow.php:25-26`

**Interfaces:**
- Consumes: harnais de Task 1.
- Produces: constantes `SITE_URL` (sans barre finale, défaut `https://richardsalanon.com`), `GA4_ID` (`G-61RJ9EFRR9`), `CLARITY_ID` (`xty0gc725v`) ; fonctions `site_base(string|false|null $env): string`, `site_url_from(string $base, string $chemin = '/'): string`, `site_url(string $chemin = '/'): string`. Toute page qui charge `helpers/functions.php` dispose de ces constantes. `$portfolioUrl` vaut désormais toujours `SITE_URL`.

- [ ] **Step 1: Écrire les tests**

`tools/tests/SiteUrlTest.php` :

```php
<?php
declare(strict_types=1);

require_once racine('helpers/site.php');

function test_site_base_sans_environnement_donne_la_production(): void
{
    assert_same('https://richardsalanon.com', site_base(false));
    assert_same('https://richardsalanon.com', site_base(null));
    assert_same('https://richardsalanon.com', site_base('  '));
}

function test_site_base_prend_l_environnement_et_retire_la_barre_finale(): void
{
    assert_same('http://localhost:8081', site_base('http://localhost:8081/'));
}

function test_site_url_from_donne_la_racine_avec_barre(): void
{
    assert_same('https://richardsalanon.com/', site_url_from('https://richardsalanon.com', '/'));
    assert_same('https://richardsalanon.com/', site_url_from('https://richardsalanon.com/', ''));
}

function test_site_url_from_ne_double_jamais_la_barre(): void
{
    assert_same('https://richardsalanon.com/services/site-e-commerce', site_url_from('https://richardsalanon.com/', '/services/site-e-commerce'));
    assert_same('https://richardsalanon.com/services/site-e-commerce', site_url_from('https://richardsalanon.com', 'services/site-e-commerce'));
}

function test_site_url_from_conserve_la_barre_finale_des_hubs(): void
{
    assert_same('https://richardsalanon.com/a-propos/', site_url_from('https://richardsalanon.com', '/a-propos/'));
}
```

- [ ] **Step 2: Lancer et constater l'échec**

Run: `php tools/tests/run.php SiteUrl`
Expected: erreur fatale « Failed opening required '.../helpers/site.php' ».

- [ ] **Step 3: Écrire `helpers/site.php` et `config/site.php`**

`helpers/site.php` :

```php
<?php
// ============================================================
// helpers/site.php · Construction des URL absolues du site.
// Créé le 03/10/2026 (vague 0A). Avant, chaque script lisait
// $_SERVER['HTTP_HOST'] : www.richardsalanon.com servait alors une copie
// complète du site avec des canoniques en www (audit du 03/10/2026).
// ============================================================
declare(strict_types=1);

const SITE_URL_DEFAUT = 'https://richardsalanon.com';

/** Base canonique : la variable d'environnement si elle est fournie, sinon la production. */
function site_base(string|false|null $env): string
{
    $base = is_string($env) ? trim($env) : '';
    return rtrim($base !== '' ? $base : SITE_URL_DEFAUT, '/');
}

/** URL absolue depuis une base et un chemin, sans double barre. */
function site_url_from(string $base, string $chemin = '/'): string
{
    return rtrim($base, '/') . '/' . ltrim($chemin, '/');
}

/** URL absolue canonique d'un chemin du site. */
function site_url(string $chemin = '/'): string
{
    return site_url_from(SITE_URL, $chemin);
}
```

`config/site.php` :

```php
<?php
// ============================================================
// config/site.php · Constantes publiques du site, versionnées.
// Créé le 03/10/2026 (vague 0A). config/constants.php reste propre au
// serveur et hors dépôt ; ce fichier porte ce qui doit être identique
// partout. SITE_URL se surcharge par la variable d'environnement SITE_URL
// (vhost local : SetEnv SITE_URL http://localhost:8081).
// ============================================================
declare(strict_types=1);

require_once __DIR__ . '/../helpers/site.php';

if (!defined('SITE_URL')) {
    define('SITE_URL', site_base(getenv('SITE_URL') ?: ($_SERVER['SITE_URL'] ?? null)));
}
if (!defined('GA4_ID')) {
    define('GA4_ID', 'G-61RJ9EFRR9');
}
if (!defined('CLARITY_ID')) {
    define('CLARITY_ID', 'xty0gc725v');
}
```

- [ ] **Step 4: Lancer et constater le succès**

Run: `php tools/tests/run.php SiteUrl`
Expected: `5 test(s), 0 échec(s)`.

- [ ] **Step 5: Charger la configuration partout**

Dans `helpers/functions.php`, juste après `declare(strict_types=1);` (ligne 8), insérer une ligne vide puis :

```php
require_once __DIR__ . '/../config/site.php';
```

- [ ] **Step 6: Remplacer chaque lecture de `HTTP_HOST`**

`portfolio/partials/pv2-bootstrap.php`, lignes 39-40. Remplacer :

```php
$currentHost  = $_SERVER['HTTP_HOST'] ?? parse_url(BASE_URL, PHP_URL_HOST);
$portfolioUrl = 'https://' . $currentHost;
```

par :

```php
// URL canonique fixe (03/10/2026) : HTTP_HOST faisait de www un doublon complet.
$portfolioUrl = SITE_URL;
```

`portfolio/index.php`, lignes 88-90. Remplacer :

```php
// URL dynamique selon le sous-domaine actif (richardsalanon.com, etc.)
$currentHost  = $_SERVER['HTTP_HOST'] ?? parse_url(BASE_URL, PHP_URL_HOST);
$portfolioUrl = 'https://' . $currentHost;
```

par :

```php
// URL canonique fixe (03/10/2026) : HTTP_HOST faisait de www un doublon complet.
$portfolioUrl = SITE_URL;
```

`portfolio/article.php`, lignes 81-82. Remplacer :

```php
$host         = $_SERVER['HTTP_HOST'] ?? parse_url(BASE_URL, PHP_URL_HOST);
$portfolioUrl = 'https://' . $host;
```

par :

```php
$portfolioUrl = SITE_URL;
```

`sitemap.php`, lignes 15-17 : remplacer les trois lignes `$host`, `$protocol`, `$baseUrl` par :

```php
$baseUrl = SITE_URL;
```

`generate-sitemap.php`, lignes 29-30. Remplacer :

```php
$host    = $_SERVER['HTTP_HOST'] ?? parse_url(BASE_URL, PHP_URL_HOST);
$baseUrl = 'https://' . rtrim($host, '/');
```

par :

```php
$baseUrl = SITE_URL;
```

`indexnow.php`, lignes 25-26. Remplacer :

```php
$host    = $_SERVER['HTTP_HOST'] ?? parse_url(BASE_URL, PHP_URL_HOST);
$baseUrl = 'https://' . $host;
```

par :

```php
$baseUrl = SITE_URL;
$host    = (string) parse_url(SITE_URL, PHP_URL_HOST);
```

`robots.php` est réécrit entièrement en Task 7.

- [ ] **Step 7: Vérifier**

Run:
```bash
grep -rn "HTTP_HOST" --include=*.php portfolio sitemap.php generate-sitemap.php indexnow.php helpers config/site.php
for f in helpers/functions.php helpers/site.php config/site.php portfolio/partials/pv2-bootstrap.php portfolio/index.php portfolio/article.php sitemap.php generate-sitemap.php indexnow.php; do php -l "$f"; done
php tools/tests/run.php
```
Expected: aucune ligne pour `HTTP_HOST` ; `No syntax errors detected` pour chaque fichier ; tous les tests passent.

- [ ] **Step 8: Commit**

```bash
git add config/site.php helpers/site.php tools/tests/SiteUrlTest.php helpers/functions.php portfolio/partials/pv2-bootstrap.php portfolio/index.php portfolio/article.php sitemap.php generate-sitemap.php indexnow.php
git commit -m "URL canonique fixe : SITE_URL remplace HTTP_HOST" -m "www.richardsalanon.com servait une copie complete du site avec des canoniques en www (audit du 03/10/2026)." -m "Co-Authored-By: Claude Opus 5.5 <noreply@anthropic.com>"
```

### Task 3: `.htaccess` : domaine unique, garde locale, encodage, favicon, scripts internes

**Files:**
- Modify: `.htaccess:5-11` (bloc HTTPS), avant la ligne 21 (nouveau bloc scripts internes), ligne 53 (favicon)
- Modify: `tools/tests/lib.php` (ajout de `http_local()`)
- Create: `tools/tests/HtaccessTest.php`

**Interfaces:**
- Consumes: Apache local de Task 1 (port 8081).
- Produces: `http_local(string $chemin, string $hote = 'localhost:8081'): array` renvoyant `['code' => int, 'location' => string, 'type' => string, 'corps' => string]` ; comportement HTTP : tout hôte autre que `localhost`/`127.0.0.1` en `http` ou en `www.` reçoit un 301 unique vers `https://richardsalanon.com` + chemin + requête.

- [ ] **Step 1: Ajouter l'aide HTTP au harnais**

À la fin de `tools/tests/lib.php` :

```php
/**
 * Requête vers l'Apache local (Task 1), sans suivre les redirections.
 * @return array{code:int, location:string, type:string, corps:string}
 */
function http_local(string $chemin, string $hote = 'localhost:8081'): array
{
    $ch = curl_init('http://127.0.0.1:8081' . $chemin);
    curl_setopt_array($ch, [
        CURLOPT_HTTPHEADER     => ['Host: ' . $hote],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => true,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_TIMEOUT        => 15,
    ]);
    $brut = curl_exec($ch);
    if ($brut === false) {
        throw new EchecTest('Apache local injoignable sur 127.0.0.1:8081 (Task 1, step 6) : ' . curl_error($ch));
    }
    $code   = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    $taille = (int) curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    curl_close($ch);
    $entetes = substr((string) $brut, 0, $taille);
    preg_match('/^Location:\s*(\S+)/mi', $entetes, $loc);
    preg_match('/^Content-Type:\s*([^\r\n]+)/mi', $entetes, $type);
    return [
        'code'     => $code,
        'location' => $loc[1] ?? '',
        'type'     => strtolower(trim($type[1] ?? '')),
        'corps'    => substr((string) $brut, $taille),
    ];
}
```

- [ ] **Step 2: Écrire les tests**

`tools/tests/HtaccessTest.php` :

```php
<?php
declare(strict_types=1);

function test_htaccess_www_redirige_en_un_saut_vers_le_domaine_nu(): void
{
    $r = http_local('/a-propos/?source=test', 'www.richardsalanon.com');
    assert_same(301, $r['code']);
    assert_same('https://richardsalanon.com/a-propos/?source=test', $r['location']);
}

function test_htaccess_http_redirige_vers_https(): void
{
    $r = http_local('/contact', 'richardsalanon.com');
    assert_same(301, $r['code']);
    assert_same('https://richardsalanon.com/contact', $r['location']);
}

function test_htaccess_hote_local_jamais_redirige(): void
{
    $r = http_local('/assets/img/logo-rt.webp');
    assert_same(200, $r['code']);
    $r = http_local('/assets/img/logo-rt.webp', '127.0.0.1:8081');
    assert_same(200, $r['code']);
}

function test_htaccess_script_interne_appele_directement_renvoie_a_l_accueil(): void
{
    $r = http_local('/portfolio/a-propos.php?x=1');
    assert_same(301, $r['code']);
    assert_true(str_ends_with($r['location'], ':8081/') || $r['location'] === '/', 'Location inattendue : ' . $r['location']);
    $r = http_local('/index.php');
    assert_same(301, $r['code']);
}

function test_htaccess_favicon_ico_est_servi(): void
{
    $r = http_local('/favicon.ico');
    assert_same(200, $r['code']);
    assert_contains('svg', $r['type']);
}

function test_htaccess_texte_brut_annonce_utf8(): void
{
    $r = http_local('/a7f3c9e21b6d4f08a5c2e9d7b4f16a83.txt');
    assert_same(200, $r['code']);
    assert_contains('charset=utf-8', $r['type']);
}
```

- [ ] **Step 3: Lancer et constater les échecs**

Run: `php tools/tests/run.php Htaccess`
Expected: échecs sur `www` (code 200 au lieu de 301), sur le script interne (200), sur `favicon.ico` (404) et sur le charset ; `test_htaccess_http_redirige_vers_https` peut déjà passer (redirection existante, mais vers l'hôte demandé).

- [ ] **Step 4: Réécrire le bloc HTTPS**

Dans `.htaccess`, remplacer les lignes 5 à 11 :

```apache
RewriteEngine On

# ----------------------------------------------------------
# Forcer HTTPS
# ----------------------------------------------------------
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

par :

```apache
RewriteEngine On

# Encodage des réponses texte (03/10/2026) : llms.txt partait sans charset.
AddDefaultCharset UTF-8

# ----------------------------------------------------------
# Domaine canonique et HTTPS, en un seul saut (03/10/2026).
# Avant : seul HTTPS était forcé, et www.richardsalanon.com servait une
# copie complète du site avec des canoniques en www (audit du 03/10/2026).
# Les hôtes locaux sont exclus : les tests tournent sur localhost:8081.
# Lecture des conditions : (hôte non local) ET (http OU www).
# ----------------------------------------------------------
RewriteCond %{HTTP_HOST} !^(localhost|127\.0\.0\.1)(:[0-9]+)?$ [NC]
RewriteCond %{HTTPS} off [OR]
RewriteCond %{HTTP_HOST} ^www\. [NC]
RewriteRule ^ https://richardsalanon.com%{REQUEST_URI} [L,R=301,NE]
```

- [ ] **Step 5: Rediriger les appels directs aux scripts internes**

Dans `.htaccess`, juste avant le commentaire `# NE PAS rediriger ces dossiers (laisser Apache les servir)` et son cadre, insérer :

```apache
# ----------------------------------------------------------
# Scripts internes appelés directement (03/10/2026) : /index.php et
# /portfolio/*.php répondaient 200, en doublon des URL propres.
# THE_REQUEST ne contient que la requête du visiteur, jamais les
# réécritures internes : les routes plus bas visent toujours ces scripts.
# Le « ? » final de la cible supprime la chaîne de requête.
# ----------------------------------------------------------
RewriteCond %{THE_REQUEST} \s/+(index\.php|portfolio/[^\s?]*\.php)[\s?] [NC]
RewriteRule ^ /? [R=301,L]

```

- [ ] **Step 6: Servir `/favicon.ico`**

Dans `.htaccess`, remplacer la ligne :

```apache
RewriteRule ^favicon\.ico$ - [L]
```

par :

```apache
# favicon.ico n'existait pas (404 relevé par l'audit du 03/10/2026) : on sert
# le favicon SVG existant. Remplacé par le logo définitif en vague 0B.
RewriteRule ^favicon\.ico$ /favicon.php [L]
```

- [ ] **Step 7: Lancer et constater le succès**

Run: `php tools/tests/run.php Htaccess`
Expected: `6 test(s), 0 échec(s)`. Si `favicon.ico` répond 500 en local, vérifier que `favicon.php` tombe bien dans son repli sans base (bloc `try`) ; ne pas modifier la règle.

- [ ] **Step 8: Commit**

```bash
git add .htaccess tools/tests/lib.php tools/tests/HtaccessTest.php
git commit -m "htaccess : www vers le domaine nu, charset, favicon.ico, scripts internes" -m "Un seul saut 301 vers https://richardsalanon.com pour http et www ; hotes locaux exclus pour les tests." -m "Co-Authored-By: Claude Opus 5.5 <noreply@anthropic.com>"
```

### Task 4: Fiche de faits unique

**Files:**
- Create: `portfolio/data/faits.php`
- Create: `helpers/faits.php`
- Create: `tools/tests/FaitsTest.php`
- Modify: `helpers/functions.php` (chargement de `helpers/faits.php`, juste après la ligne ajoutée en Task 2)

**Interfaces:**
- Consumes: harnais (Task 1).
- Produces: `faits_depuis(string $fichier): array` (lève `RuntimeException` si une clé obligatoire manque ou est vide), `faits(): array` (fiche du site, mise en cache), `fait(string $cle): mixed` (valeur ou `null`). Clés garanties non vides : `nom`, `intitule`, `phrase_entite`, `description_courte`, `ville`, `agglomeration`, `pays`, `pays_code`, `email`, `telephone`, `whatsapp`, `competences`, `profils`, `zones`. Clés pouvant valoir `null` : `experience_ans`, `projets_livres`, `clients`, `personnes_formees`, `photo`, `horaires`.

- [ ] **Step 1: Écrire les tests**

`tools/tests/FaitsTest.php` :

```php
<?php
declare(strict_types=1);

require_once racine('helpers/faits.php');

function test_faits_la_fiche_du_site_se_charge(): void
{
    $f = faits_depuis(racine('portfolio/data/faits.php'));
    assert_same('Richard SALANON', $f['nom']);
    assert_same('BJ', $f['pays_code']);
}

function test_faits_aucun_tiret_cadratin_ni_fleche_dans_les_textes(): void
{
    $f = faits_depuis(racine('portfolio/data/faits.php'));
    foreach (['intitule', 'phrase_entite', 'description_courte'] as $cle) {
        assert_not_contains("\u{2014}", $f[$cle], $cle);
        assert_not_contains("\u{2192}", $f[$cle], $cle);
    }
}

function test_faits_description_courte_tient_dans_une_meta(): void
{
    $f = faits_depuis(racine('portfolio/data/faits.php'));
    $n = mb_strlen($f['description_courte']);
    assert_true($n >= 120 && $n <= 155, "description_courte fait {$n} caractères");
}

function test_faits_couvre_les_34_pays_de_la_spec(): void
{
    $f = faits_depuis(racine('portfolio/data/faits.php'));
    assert_same(34, count($f['zones']));
    foreach (['Bénin', 'Sénégal', 'Maroc', 'Canada', 'São Tomé-et-Príncipe'] as $pays) {
        assert_true(in_array($pays, $f['zones'], true), "pays absent : {$pays}");
    }
}

function test_faits_profils_en_https(): void
{
    foreach (faits_depuis(racine('portfolio/data/faits.php'))['profils'] as $url) {
        assert_true(str_starts_with($url, 'https://'), "profil non https : {$url}");
    }
}

function test_faits_cle_obligatoire_manquante_leve_une_exception(): void
{
    $tmp = tempnam(sys_get_temp_dir(), 'faits') . '.php';
    file_put_contents($tmp, "<?php return ['nom' => 'X'];");
    try {
        faits_depuis($tmp);
    } catch (\RuntimeException $e) {
        assert_contains('intitule', $e->getMessage());
        return;
    } finally {
        @unlink($tmp);
    }
    throw new EchecTest('faits_depuis aurait dû refuser une fiche incomplète');
}
```

- [ ] **Step 2: Lancer et constater l'échec**

Run: `php tools/tests/run.php Faits`
Expected: erreur fatale « Failed opening required '.../helpers/faits.php' ».

- [ ] **Step 3: Écrire l'accesseur**

`helpers/faits.php` :

```php
<?php
// ============================================================
// helpers/faits.php · Accès à la fiche de faits (portfolio/data/faits.php).
// Créé le 03/10/2026 (vague 0A). Source unique des chiffres et formulations
// d'identité : le schéma, llms.txt, l'accueil, l'à-propos et le pied de page
// la lisent. Aucun chiffre d'identité n'est tapé ailleurs (spec 5.1).
// ============================================================
declare(strict_types=1);

const FAITS_OBLIGATOIRES = [
    'nom', 'intitule', 'phrase_entite', 'description_courte', 'ville', 'agglomeration',
    'pays', 'pays_code', 'email', 'telephone', 'whatsapp', 'competences', 'profils', 'zones',
];

/** Charge et valide une fiche de faits. */
function faits_depuis(string $fichier): array
{
    $f = require $fichier;
    if (!is_array($f)) {
        throw new \RuntimeException("Fiche de faits illisible : {$fichier}");
    }
    $manquantes = array_values(array_filter(
        FAITS_OBLIGATOIRES,
        static fn(string $cle): bool => !isset($f[$cle]) || $f[$cle] === '' || $f[$cle] === []
    ));
    if ($manquantes) {
        throw new \RuntimeException('Fiche de faits incomplète, clés manquantes : ' . implode(', ', $manquantes));
    }
    return $f;
}

/** Fiche de faits du site, chargée une fois par requête. */
function faits(): array
{
    static $f = null;
    return $f ??= faits_depuis(__DIR__ . '/../portfolio/data/faits.php');
}

/** Une valeur de la fiche, ou null. */
function fait(string $cle): mixed
{
    return faits()[$cle] ?? null;
}
```

- [ ] **Step 4: Écrire la fiche**

`portfolio/data/faits.php` :

```php
<?php
// ============================================================
// data/faits.php · Fiche de faits de l'entité « Richard SALANON ».
// Créée le 03/10/2026 (vague 0A, spec 5.1). Source unique : ne jamais
// recopier ces valeurs ailleurs, les lire avec faits() ou fait().
// Valeur inconnue = null : elle n'est ni affichée ni mise dans le schéma.
// Les valeurs marquées « à valider » attendent le questionnaire de Richard
// (docs/questionnaire-refonte.md) ; elles reprennent ce que le site
// publiait déjà au 03/10/2026.
// ============================================================
declare(strict_types=1);

return [
    'nom'         => 'Richard SALANON',
    'prenom'      => 'Richard',
    'nom_famille' => 'SALANON',
    'intitule'    => 'Consultant en digitalisation et développement logiciel',

    // Phrase d'entité : reprise à l'identique sur l'accueil, l'à-propos,
    // les pages pays et dans llms.txt (spec 5.5, règle 5).
    'phrase_entite' => 'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Abomey-Calavi, dans l\'agglomération de Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
    'description_courte' => 'Consultant en digitalisation et développeur logiciel au Bénin : sites, applications, automatisation, IA, Odoo, Dolibarr et formations, Afrique et Europe.',

    // Ville publiée par Richard dans son tableau de bord (contact_info.city).
    'ville'         => 'Abomey-Calavi',
    'agglomeration' => 'Cotonou',
    'pays'          => 'Bénin',
    'pays_code'     => 'BJ',

    'email'     => 'richardsomasse@gmail.com',
    'telephone' => '+2290161413177',
    'whatsapp'  => '2290161413177',

    // « Plus de six ans », confirmé par Richard le 20/08/2026.
    'experience_ans'    => 6,
    'projets_livres'    => null, // à valider
    'clients'           => null, // à valider
    'personnes_formees' => null, // à valider

    'formation' => ['nom' => 'EPITECH', 'url' => 'https://www.epitech.eu'],
    'langues'   => ['fr' => 'Français', 'en' => 'Anglais'],

    'competences' => [
        'Création de sites web',
        'Développement d\'applications web sur mesure',
        'Développement d\'applications mobiles Android et iOS',
        'Référencement naturel (SEO)',
        'Référencement IA (GEO)',
        'Automatisation avec n8n et Make',
        'Intelligence artificielle en entreprise',
        'Agents IA et chatbots WhatsApp',
        'Intégration de l\'IA dans les logiciels existants',
        'Odoo',
        'Dolibarr',
        'OHADA et SYSCOHADA dans les ERP',
        'Digitalisation d\'entreprise',
        'Vibe coding',
        'Formation professionnelle au numérique et à l\'IA',
    ],

    // Profils vérifiables uniquement (spec 5.3). Liste reprise du site au 03/10/2026.
    'profils' => [
        'https://www.linkedin.com/in/richard-salanon/',
        'https://github.com/Richard6141',
        'https://facebook.com/somasse.richard.salanon',
    ],

    'produits' => [
        ['nom' => 'Wapy', 'url' => 'https://wapy.pro', 'description' => 'Assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone.'],
    ],
    // Co-fondation déclarée par Richard le 03/10/2026.
    'affiliations' => [
        ['nom' => 'Audyxa', 'url' => 'https://audyxa.com', 'role' => 'Co-fondateur'],
    ],

    'paiements'     => ['Mobile Money (MTN, Moov)', 'carte bancaire', 'PayPal', 'virement', 'espèces'],
    'delais'        => ['Site vitrine' => '1 à 3 semaines', 'Application sur mesure' => '1 à 3 mois'],
    'tarifs_depart' => ['Landing page' => '150 000 FCFA', 'Site vitrine' => '300 000 FCFA', 'Référencement naturel' => '75 000 FCFA'],

    // Horaires publiés depuis le 20/08/2026 (à aligner sur la fiche Google Business).
    'horaires' => ['jours' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'], 'ouverture' => '07:00', 'fermeture' => '20:00'],

    'photo' => null, // portrait définitif posé en vague 0B

    // Zones servies : les 34 pays de la spec (6.4), dans l'ordre des tranches.
    'zones' => [
        'Bénin', 'Côte d\'Ivoire', 'Sénégal', 'Togo', 'Cameroun',
        'Burkina Faso', 'Mali', 'Niger', 'Guinée', 'Gabon', 'Congo-Brazzaville', 'RD Congo',
        'France', 'Belgique', 'Suisse', 'Canada', 'Luxembourg', 'Monaco',
        'Maroc', 'Tunisie', 'Algérie', 'Madagascar', 'Mauritanie', 'Tchad', 'Centrafrique',
        'Rwanda', 'Burundi', 'Djibouti', 'Comores', 'Maurice', 'Seychelles', 'Guinée équatoriale', 'Cap-Vert', 'São Tomé-et-Príncipe',
    ],
];
```

- [ ] **Step 5: Charger l'accesseur partout**

Dans `helpers/functions.php`, sous la ligne `require_once __DIR__ . '/../config/site.php';` ajoutée en Task 2, ajouter :

```php
require_once __DIR__ . '/faits.php';
```

- [ ] **Step 6: Lancer et constater le succès**

Run: `php tools/tests/run.php Faits && php -l portfolio/data/faits.php && php -l helpers/faits.php`
Expected: `6 test(s), 0 échec(s)` puis `No syntax errors detected` deux fois.

- [ ] **Step 7: Commit**

```bash
git add portfolio/data/faits.php helpers/faits.php tools/tests/FaitsTest.php helpers/functions.php
git commit -m "Fiche de faits unique de l'entite Richard SALANON" -m "Source unique des formulations d'identite (spec 5.1), lue par le schema et llms.txt." -m "Co-Authored-By: Claude Opus 5.5 <noreply@anthropic.com>"
```

### Task 5: Graphe JSON-LD unique sur chaque page

**Files:**
- Create: `helpers/schema.php`
- Create: `portfolio/templates/horizon-faq.php`
- Create: `tools/tests/SchemaTest.php`
- Modify: `helpers/functions.php` (chargement de `helpers/schema.php`)
- Modify: `portfolio/partials/pv2-head.php` (boucle `foreach ($pageSchemas ...)`)
- Modify: `portfolio/index.php` (bloc « Identifiants stables du graphe d'entites » jusqu'à la fin de `$websiteSchema`, et les 4 balises `<script type="application/ld+json">` du `<head>`)
- Modify: `portfolio/templates/horizon.php` (section FAQ et bloc `$pv2FaqSchema` en fin de fichier)
- Modify: `portfolio/a-propos.php:16-28`
- Modify: `portfolio/article.php` (`author` et `publisher` de `$blogPosting`)

**Interfaces:**
- Consumes: `faits()` (Task 4), `SITE_URL` (Task 2).
- Produces:
  - `schema_personne(array $f, string $base, bool $complet = false): array` : nœud `Person` `@id` `{base}/#person`.
  - `schema_service_pro(array $f, string $base): array` : nœud `ProfessionalService` `@id` `{base}/#service`.
  - `schema_site_web(array $f, string $base): array` : nœud `WebSite` `@id` `{base}/#website`.
  - `schema_noeuds_base(array $f, string $base, bool $personneComplete = false): array` : les trois nœuds ci-dessus.
  - `schema_faq(array $questions): array` : nœud `FAQPage` depuis `[['q' => string, 'r' => string], ...]`.
  - `schema_nettoyer(array $noeud): array` : retire `@context`, `null`, `''` et `[]`, récursivement.
  - `schema_graphe(array $noeuds): string` : une balise `<script type="application/ld+json">` contenant `@graph`, nœuds fusionnés par `@id` (le dernier complète le premier), `<`, `>` et `&` échappés ; lève `DomainException` sur un type ou une propriété interdits.
  - Toute page qui passe par `pv2-head.php` reçoit `Person` + `WebSite` + `ProfessionalService` + ses propres nœuds (`$pageSchemas`, dont le `@context` est retiré).

- [ ] **Step 1: Écrire les tests**

`tools/tests/SchemaTest.php` :

```php
<?php
declare(strict_types=1);

require_once racine('helpers/faits.php');
require_once racine('helpers/schema.php');

function schema_test_decoder(string $balise): array
{
    assert_true(str_starts_with($balise, '<script type="application/ld+json">'), 'balise ouvrante absente');
    assert_true(str_ends_with($balise, '</script>'), 'balise fermante absente');
    $json = substr($balise, strlen('<script type="application/ld+json">'), -strlen('</script>'));
    return json_decode($json, true, 512, JSON_THROW_ON_ERROR);
}

function test_schema_graphe_une_seule_balise_avec_graph(): void
{
    $html = schema_graphe(schema_noeuds_base(faits_depuis(racine('portfolio/data/faits.php')), 'https://richardsalanon.com'));
    assert_same(1, substr_count($html, '<script'));
    $doc = schema_test_decoder($html);
    assert_same('https://schema.org', $doc['@context']);
    assert_same(3, count($doc['@graph']));
}

function test_schema_noeuds_de_base_conformes_a_la_spec(): void
{
    $html = schema_graphe(schema_noeuds_base(faits_depuis(racine('portfolio/data/faits.php')), 'https://richardsalanon.com'));
    $doc  = schema_test_decoder($html);
    $parType = [];
    foreach ($doc['@graph'] as $n) { $parType[$n['@type']] = $n; }
    assert_same('https://richardsalanon.com/#person', $parType['Person']['@id']);
    assert_same('BJ', $parType['Person']['address']['addressCountry']);
    assert_same('fr', $parType['WebSite']['inLanguage']);
    assert_same('Richard SALANON', $parType['WebSite']['name']);
    assert_same(34, count($parType['ProfessionalService']['areaServed']));
    assert_not_contains('Richard Technologies', $html);
    assert_contains('Bénin', $html, 'les accents doivent rester lisibles');
}

function test_schema_un_seul_context_meme_si_les_noeuds_de_page_en_portent(): void
{
    $html = schema_graphe([['@context' => 'https://schema.org', '@type' => 'Thing', 'name' => 'x']]);
    assert_same(1, substr_count($html, '@context'));
}

function test_schema_echappe_les_chevrons_et_esperluettes(): void
{
    $html = schema_graphe([['@type' => 'Thing', 'name' => 'A <b>gras</b> & co']]);
    assert_not_contains('<b>', $html);
    assert_contains('\\u003C', $html);
    assert_contains('\\u0026', $html);
    assert_not_contains(' & ', $html);
}

function test_schema_retire_les_valeurs_vides(): void
{
    $html = schema_graphe([['@type' => 'Thing', 'name' => null, 'url' => '', 'sameAs' => [], 'description' => 'ok']]);
    assert_not_contains('"name"', $html);
    assert_not_contains('"url"', $html);
    assert_not_contains('"sameAs"', $html);
    assert_contains('"description":"ok"', $html);
}

function test_schema_fusionne_les_noeuds_de_meme_id(): void
{
    $f    = faits_depuis(racine('portfolio/data/faits.php'));
    $html = schema_graphe([schema_personne($f, 'https://richardsalanon.com'), schema_personne($f, 'https://richardsalanon.com', true)]);
    $doc  = schema_test_decoder($html);
    assert_same(1, count($doc['@graph']));
    assert_true(isset($doc['@graph'][0]['knowsAbout']), 'la version complète doit compléter la compacte');
}

function test_schema_refuse_les_types_et_proprietes_interdits(): void
{
    foreach ([
        ['@type' => 'AggregateRating', 'ratingValue' => '5'],
        ['@type' => 'Thing', 'aggregateRating' => ['@type' => 'Thing']],
        ['@type' => 'LocalBusiness', 'name' => 'x'],
        ['@type' => 'Thing', 'review' => ['@type' => 'Thing']],
    ] as $noeud) {
        try {
            schema_graphe([$noeud]);
        } catch (\DomainException $e) {
            continue;
        }
        throw new EchecTest('nœud interdit accepté : ' . json_encode($noeud));
    }
}

function test_schema_faq_reprend_les_questions_visibles(): void
{
    $faq = schema_faq([['q' => 'Combien ?', 'r' => 'Sur devis.']]);
    assert_same('FAQPage', $faq['@type']);
    assert_same('Combien ?', $faq['mainEntity'][0]['name']);
    assert_same('Sur devis.', $faq['mainEntity'][0]['acceptedAnswer']['text']);
}

function test_schema_faq_du_template_horizon_est_lisible(): void
{
    $questions = require racine('portfolio/templates/horizon-faq.php');
    assert_same(4, count($questions));
    foreach ($questions as $qr) {
        assert_true($qr['q'] !== '' && $qr['r'] !== '', 'question ou réponse vide');
    }
}
```

- [ ] **Step 2: Lancer et constater l'échec**

Run: `php tools/tests/run.php Schema`
Expected: erreur fatale « Failed opening required '.../helpers/schema.php' ».

- [ ] **Step 3: Écrire `helpers/schema.php`**

```php
<?php
// ============================================================
// helpers/schema.php · Graphe JSON-LD de l'entité « Richard SALANON ».
// Créé le 03/10/2026 (vague 0A, spec 5.3). Une seule balise par page,
// un @graph, des nœuds construits depuis la fiche de faits. Avant : quatre
// balises séparées sur l'accueil, une Person complète seulement là, et une
// Organization « Richard Technologies » concurrente de la personne.
// ============================================================
declare(strict_types=1);

const SCHEMA_TYPES_INTERDITS      = ['AggregateRating', 'Review', 'Rating', 'LocalBusiness'];
const SCHEMA_PROPRIETES_INTERDITES = ['aggregateRating', 'review', 'reviews'];

/** Nœud Person : compact sur toutes les pages, complet sur l'accueil et l'à-propos. */
function schema_personne(array $f, string $base, bool $complet = false): array
{
    $base  = rtrim($base, '/');
    $noeud = [
        '@type'    => 'Person',
        '@id'      => $base . '/#person',
        'name'     => $f['nom'],
        'jobTitle' => $f['intitule'],
        'url'      => $base . '/',
        'address'  => ['@type' => 'PostalAddress', 'addressLocality' => $f['ville'], 'addressCountry' => $f['pays_code']],
        'sameAs'   => array_values($f['profils']),
    ];
    if (!$complet) {
        return $noeud;
    }
    $noeud['givenName']     = $f['prenom'] ?? null;
    $noeud['familyName']    = $f['nom_famille'] ?? null;
    $noeud['description']   = $f['phrase_entite'];
    $noeud['email']         = $f['email'];
    $noeud['telephone']     = $f['telephone'];
    $noeud['knowsAbout']    = array_values($f['competences']);
    $noeud['knowsLanguage'] = array_keys($f['langues'] ?? []);
    $noeud['image']         = !empty($f['photo']) ? $base . $f['photo'] : null;
    if (!empty($f['formation']['nom'])) {
        $noeud['alumniOf'] = ['@type' => 'CollegeOrUniversity', 'name' => $f['formation']['nom'], 'url' => $f['formation']['url'] ?? null];
    }
    $noeud['affiliation'] = array_map(
        static fn(array $a): array => ['@type' => 'Organization', 'name' => $a['nom'], 'url' => $a['url'] ?? null],
        $f['affiliations'] ?? []
    );
    return $noeud;
}

/** Nœud ProfessionalService : l'offre de Richard, rattachée à la personne. */
function schema_service_pro(array $f, string $base): array
{
    $base  = rtrim($base, '/');
    $noeud = [
        '@type'           => 'ProfessionalService',
        '@id'             => $base . '/#service',
        'name'            => $f['nom'],
        'url'             => $base . '/',
        'description'     => $f['description_courte'],
        'founder'         => ['@id' => $base . '/#person'],
        'address'         => ['@type' => 'PostalAddress', 'addressLocality' => $f['ville'], 'addressCountry' => $f['pays_code']],
        'telephone'       => $f['telephone'],
        'email'           => $f['email'],
        'knowsLanguage'   => array_keys($f['langues'] ?? []),
        'paymentAccepted' => implode(', ', $f['paiements'] ?? []),
        'areaServed'      => array_map(static fn(string $pays): array => ['@type' => 'Country', 'name' => $pays], $f['zones']),
    ];
    if (!empty($f['horaires'])) {
        $noeud['openingHoursSpecification'] = [[
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => $f['horaires']['jours'],
            'opens'     => $f['horaires']['ouverture'],
            'closes'    => $f['horaires']['fermeture'],
        ]];
    }
    return $noeud;
}

/** Nœud WebSite. */
function schema_site_web(array $f, string $base): array
{
    $base = rtrim($base, '/');
    return [
        '@type'      => 'WebSite',
        '@id'        => $base . '/#website',
        'url'        => $base . '/',
        'name'       => $f['nom'],
        'inLanguage' => 'fr',
        'publisher'  => ['@id' => $base . '/#person'],
        'about'      => ['@id' => $base . '/#person'],
    ];
}

/** Les trois nœuds présents sur chaque page. */
function schema_noeuds_base(array $f, string $base, bool $personneComplete = false): array
{
    return [schema_personne($f, $base, $personneComplete), schema_site_web($f, $base), schema_service_pro($f, $base)];
}

/** Nœud FAQPage depuis les questions VISIBLES de la page. */
function schema_faq(array $questions): array
{
    return [
        '@type'      => 'FAQPage',
        'mainEntity' => array_map(static fn(array $qr): array => [
            '@type'          => 'Question',
            'name'           => $qr['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $qr['r']],
        ], array_values($questions)),
    ];
}

/** Retire @context et les valeurs vides, récursivement. */
function schema_nettoyer(array $noeud): array
{
    $propre = [];
    foreach ($noeud as $cle => $valeur) {
        if ($cle === '@context') {
            continue;
        }
        if (is_array($valeur)) {
            $valeur = schema_nettoyer($valeur);
            if ($valeur === []) {
                continue;
            }
        }
        if ($valeur === null || $valeur === '') {
            continue;
        }
        $propre[$cle] = $valeur;
    }
    return array_is_list($noeud) ? array_values($propre) : $propre;
}

/** Lève DomainException si un type ou une propriété interdits apparaissent. */
function schema_verifier(array $noeud): void
{
    foreach ($noeud as $cle => $valeur) {
        if (in_array($cle, SCHEMA_PROPRIETES_INTERDITES, true)) {
            throw new \DomainException("Propriété de schéma interdite : {$cle}");
        }
        if ($cle === '@type') {
            foreach ((array) $valeur as $type) {
                if (in_array($type, SCHEMA_TYPES_INTERDITS, true)) {
                    throw new \DomainException("Type de schéma interdit : {$type}");
                }
            }
        }
        if (is_array($valeur)) {
            schema_verifier($valeur);
        }
    }
}

/** Une balise JSON-LD contenant tous les nœuds de la page. */
function schema_graphe(array $noeuds): string
{
    $parId  = [];
    $sansId = [];
    foreach ($noeuds as $noeud) {
        $noeud = schema_nettoyer($noeud);
        schema_verifier($noeud);
        if (isset($noeud['@id'])) {
            $parId[$noeud['@id']] = isset($parId[$noeud['@id']]) ? array_replace($parId[$noeud['@id']], $noeud) : $noeud;
        } else {
            $sansId[] = $noeud;
        }
    }
    $document = ['@context' => 'https://schema.org', '@graph' => array_merge(array_values($parId), $sansId)];
    $json = json_encode($document, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_THROW_ON_ERROR);
    return '<script type="application/ld+json">' . $json . '</script>';
}
```

- [ ] **Step 4: Extraire la FAQ visible de l'accueil**

`portfolio/templates/horizon-faq.php` (textes repris à l'identique de la section FAQ visible de `horizon.php`) :

```php
<?php
// FAQ de l'accueil (template horizon). Extraite le 03/10/2026 : la même liste
// sert l'affichage ET le nœud FAQPage, qui doit reprendre le texte visible.
declare(strict_types=1);

return [
    ['q' => 'Combien coûte un site web au Bénin ?', 'r' => 'Une vitrine démarre autour de 300 000 FCFA ; un e-commerce ou une application sur-mesure davantage. Je vous remets un devis clair après le cadrage, gratuit et sans engagement.'],
    ['q' => 'Quels sont les délais de réalisation ?', 'r' => 'Un site vitrine : 1 à 3 semaines. Une application sur-mesure : 1 à 3 mois selon la complexité. Le planning précis est fixé ensemble dès le cadrage.'],
    ['q' => 'Comment se passe le paiement ?', 'r' => 'Par Mobile Money (MTN / Moov), carte bancaire, PayPal, virement ou espèces, en plusieurs tranches liées aux étapes du projet.'],
    ['q' => 'Assurez-vous la maintenance après livraison ?', 'r' => 'Oui : mises à jour, corrections, sauvegardes et améliorations sont disponibles en forfait de maintenance, ou à la demande.'],
];
```

Dans `portfolio/templates/horizon.php`, remplacer les quatre lignes `<details>...</details>` de la section `#faq` par :

```php
    <?php foreach ((require __DIR__ . '/horizon-faq.php') as $qr): ?>
    <details><summary><?= sanitize($qr['q']) ?></summary><p><?= sanitize($qr['r']) ?></p></details>
    <?php endforeach; ?>
```

puis supprimer en fin de fichier le bloc `<?php $pv2FaqSchema = [ ... ]; ?>` et la ligne `<script type="application/ld+json"><?= json_encode($pv2FaqSchema, ...) ?></script>` qui le suit.

- [ ] **Step 5: Lancer les tests**

Run: `php tools/tests/run.php Schema`
Expected: `9 test(s), 0 échec(s)`.

- [ ] **Step 6: Brancher le graphe dans les gabarits**

Dans `helpers/functions.php`, sous `require_once __DIR__ . '/faits.php';`, ajouter :

```php
require_once __DIR__ . '/schema.php';
```

Dans `portfolio/partials/pv2-head.php`, remplacer :

```php
<?php foreach ($pageSchemas as $schema): ?>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
<?php endforeach; ?>
```

par :

```php
<?php /* Graphe JSON-LD unique (03/10/2026, spec 5.3) : Person, WebSite et
         ProfessionalService sur chaque page, plus les nœuds propres à la page. */ ?>
<?= schema_graphe(array_merge(schema_noeuds_base(faits(), SITE_URL), $pageSchemas)) ?>
```

Dans `portfolio/index.php`, supprimer tout le bloc qui commence à la ligne de commentaire `// Identifiants stables du graphe d'entites (20/08/2026).` et se termine par le `];` qui ferme `$websiteSchema` (requête des avis `testimonials` comprise). Le remplacer par :

```php
// Graphe d'entités (03/10/2026, spec 5.3) : construit depuis la fiche de faits,
// une seule balise JSON-LD. « Richard Technologies » disparaît (marque unique).
// La note agrégée calculée sur la table testimonials est retirée : types
// Review et AggregateRating interdits tant qu'aucune source vérifiable n'existe.
$schemasAccueil = array_merge(schema_noeuds_base(faits(), SITE_URL, true), [[
    '@type'       => 'WebPage',
    '@id'         => $homeUrl . '#webpage',
    'url'         => $homeUrl,
    'name'        => $metaTitle,
    'description' => $metaDesc,
    'isPartOf'    => ['@id' => SITE_URL . '/#website'],
    'about'       => ['@id' => SITE_URL . '/#person'],
]]);
if (($profile['template'] ?? 'starter') === 'horizon') {
    $schemasAccueil[] = schema_faq(require __DIR__ . '/templates/horizon-faq.php');
}
```

Toujours dans `portfolio/index.php`, remplacer les quatre lignes :

```php
    <script type="application/ld+json"><?= json_encode($jsonLd, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
    <script type="application/ld+json"><?= json_encode($orgSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
    <script type="application/ld+json"><?= json_encode($websiteSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
    <script type="application/ld+json"><?= json_encode($serviceSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
```

par :

```php
    <?= schema_graphe($schemasAccueil) ?>
```

Dans `portfolio/a-propos.php`, remplacer le premier élément de `$pageSchemas` (le nœud `AboutPage` avec sa `mainEntity` Person écrite sans accents) par ces deux éléments :

```php
    [
        '@type' => 'AboutPage', '@id' => $aboutUrl . '#webpage',
        'url' => $aboutUrl, 'name' => $pageTitle,
        'mainEntity' => ['@id' => SITE_URL . '/#person'],
    ],
    schema_personne(faits(), SITE_URL, true),
```

Dans `portfolio/article.php`, dans `$blogPosting`, remplacer les lignes `'author' => ...` et `'publisher' => ...` par :

```php
    'author'    => ['@id' => $portfolioUrl . '/#person'],
    'publisher' => ['@id' => $portfolioUrl . '/#person'],
```

- [ ] **Step 7: Vérifier qu'aucune variable supprimée n'est encore utilisée**

Run:
```bash
grep -rn "jsonLd\|serviceSchema\|orgSchema\|websiteSchema\|idPerson\|idOrg\|orgName\|ratingRow\|pv2FaqSchema" portfolio --include=*.php
for f in helpers/schema.php helpers/functions.php portfolio/partials/pv2-head.php portfolio/index.php portfolio/templates/horizon.php portfolio/templates/horizon-faq.php portfolio/a-propos.php portfolio/article.php; do php -l "$f"; done
grep -rn "Richard Technologies" portfolio/index.php portfolio/a-propos.php portfolio/article.php
php tools/tests/run.php
```
Expected: aucune occurrence pour les deux `grep` ; aucune erreur de syntaxe ; tous les tests passent.

- [ ] **Step 8: Commit**

```bash
git add helpers/schema.php portfolio/templates/horizon-faq.php tools/tests/SchemaTest.php helpers/functions.php portfolio/partials/pv2-head.php portfolio/index.php portfolio/templates/horizon.php portfolio/a-propos.php portfolio/article.php
git commit -m "Schema : un seul graphe JSON-LD par page, construit depuis la fiche de faits" -m "Person sur chaque page, plus d'Organization Richard Technologies, plus de note agregee auto-declaree, FAQ de l'accueil identique au texte visible." -m "Co-Authored-By: Claude Opus 5.5 <noreply@anthropic.com>"
```

### Task 6: Marque unique dans le HTML public

**Files:**
- Modify: `portfolio/partials/pv2-header.php:28`
- Modify: `portfolio/partials/pv2-footer.php:67` et `:131`
- Create: `tools/tests/MarqueTest.php`

**Interfaces:**
- Produces: aucun texte « Richard Technologies » visible ou en attribut dans `portfolio/` (les commentaires de code ne comptent pas). Le logo actuel reste affiché jusqu'à la vague 0B, avec `alt="Richard SALANON"`.

- [ ] **Step 1: Écrire le test**

`tools/tests/MarqueTest.php` :

```php
<?php
declare(strict_types=1);

/** Lignes de code (hors commentaires) contenant l'ancienne marque, sous un dossier. */
function marque_occurrences(string $dossier): array
{
    $trouvees = [];
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dossier, FilesystemIterator::SKIP_DOTS));
    foreach ($it as $fichier) {
        if ($fichier->getExtension() !== 'php') {
            continue;
        }
        foreach (file($fichier->getPathname()) as $num => $ligne) {
            $code = ltrim($ligne);
            if (str_starts_with($code, '//') || str_starts_with($code, '*') || str_starts_with($code, '/*') || str_starts_with($code, '#')) {
                continue;
            }
            if (str_contains($ligne, 'Richard Technologies')) {
                $trouvees[] = $fichier->getPathname() . ':' . ($num + 1);
            }
        }
    }
    return $trouvees;
}

function test_marque_aucune_mention_de_richard_technologies_dans_le_site_public(): void
{
    $occurrences = marque_occurrences(racine('portfolio'));
    assert_same([], $occurrences, 'ancienne marque encore présente');
}
```

- [ ] **Step 2: Lancer et constater l'échec**

Run: `php tools/tests/run.php Marque`
Expected: ECHEC listant `pv2-header.php:28`, `pv2-footer.php:67` et `pv2-footer.php:131` (les occurrences d'`index.php`, `a-propos.php` et `article.php` ont disparu en Task 5).

- [ ] **Step 3: Corriger les trois lignes**

`portfolio/partials/pv2-header.php`, ligne 28 : remplacer `aria-label="Richard Technologies"` par `aria-label="Richard SALANON, accueil"` et `alt="Richard Technologies"` par `alt="Richard SALANON"`.

`portfolio/partials/pv2-footer.php`, ligne 67 : remplacer `alt="Richard Technologies"` par `alt="Richard SALANON"`.

`portfolio/partials/pv2-footer.php`, ligne 131 : remplacer

```php
    <span>© 2026 <?= sanitize($fullName) ?> · Richard Technologies. Tous droits réservés.</span>
```

par

```php
    <span>© <?= date('Y') ?> <?= sanitize(fait('nom')) ?>. Tous droits réservés.</span>
```

- [ ] **Step 4: Lancer et constater le succès**

Run: `php tools/tests/run.php Marque && php -l portfolio/partials/pv2-header.php && php -l portfolio/partials/pv2-footer.php`
Expected: `1 test(s), 0 échec(s)` et aucune erreur de syntaxe.

- [ ] **Step 5: Commit**

```bash
git add portfolio/partials/pv2-header.php portfolio/partials/pv2-footer.php tools/tests/MarqueTest.php
git commit -m "Marque unique Richard SALANON dans l'en-tete et le pied de page" -m "Co-Authored-By: Claude Opus 5.5 <noreply@anthropic.com>"
```

### Task 7: robots.txt statique et robots IA

**Files:**
- Create: `helpers/robots.php`
- Modify: `robots.php` (réécriture complète)
- Create: `tools/tests/RobotsTest.php`

**Interfaces:**
- Consumes: `SITE_URL` (Task 2), `http_local()` (Task 3).
- Produces: `robots_txt(string $base): string` ; constantes `ROBOTS_IA` (20 agents) et `ROBOTS_INTERDITS`. `/robots.txt` ne lit plus la base : servi même base arrêtée, une seule ligne `Sitemap:`.

- [ ] **Step 1: Écrire les tests**

`tools/tests/RobotsTest.php` :

```php
<?php
declare(strict_types=1);

require_once racine('helpers/robots.php');

function test_robots_autorise_explicitement_chaque_robot_ia(): void
{
    $txt = robots_txt('https://richardsalanon.com');
    foreach (['GPTBot', 'OAI-SearchBot', 'ClaudeBot', 'Claude-SearchBot', 'PerplexityBot', 'Google-Extended', 'Applebot-Extended', 'Bingbot', 'meta-externalagent', 'MistralAI-User', 'DuckAssistBot'] as $bot) {
        assert_contains("User-agent: {$bot}\nAllow: /\n", $txt, "robot absent : {$bot}");
    }
    assert_same(20, count(ROBOTS_IA));
}

function test_robots_une_seule_ligne_sitemap_absolue(): void
{
    $txt = robots_txt('https://richardsalanon.com/');
    assert_same(1, substr_count($txt, 'Sitemap:'));
    assert_contains("Sitemap: https://richardsalanon.com/sitemap.xml\n", $txt);
}

function test_robots_n_interdit_jamais_tout_le_site(): void
{
    assert_not_contains("Disallow: /\n", robots_txt('https://richardsalanon.com'));
}

function test_robots_autorise_les_vignettes_du_portrait(): void
{
    assert_contains("Allow: /api/thumb.php\n", robots_txt('https://richardsalanon.com'));
}

function test_robots_servi_en_local_sans_base(): void
{
    $r = http_local('/robots.txt');
    assert_same(200, $r['code']);
    assert_contains('text/plain', $r['type']);
    assert_contains('charset=utf-8', $r['type']);
    assert_contains('Sitemap: http://localhost:8081/sitemap.xml', $r['corps']);
}
```

- [ ] **Step 2: Lancer et constater l'échec**

Run: `php tools/tests/run.php Robots`
Expected: erreur fatale « Failed opening required '.../helpers/robots.php' ».

- [ ] **Step 3: Écrire `helpers/robots.php`**

```php
<?php
// ============================================================
// helpers/robots.php · Contenu de robots.txt (03/10/2026, spec 5.4).
// Statique : plus aucune requête en base (3,5 s à froid relevées par
// l'audit) et plus de bascule « Disallow: / » pilotée par un drapeau.
// Les robots IA sont nommés pour lever toute ambiguïté : ce site veut
// être lu et cité par les assistants.
// ============================================================
declare(strict_types=1);

const ROBOTS_IA = [
    'GPTBot', 'OAI-SearchBot', 'ChatGPT-User',
    'ClaudeBot', 'Claude-User', 'Claude-SearchBot', 'anthropic-ai',
    'PerplexityBot', 'Perplexity-User',
    'Google-Extended', 'GoogleOther',
    'Applebot', 'Applebot-Extended',
    'Bingbot', 'Amazonbot', 'CCBot', 'meta-externalagent', 'cohere-ai', 'MistralAI-User', 'DuckAssistBot',
];

const ROBOTS_INTERDITS = ['/dashboard/', '/auth/', '/api/', '/config/'];

function robots_txt(string $base): string
{
    $base   = rtrim($base, '/');
    $regles = '';
    foreach (ROBOTS_INTERDITS as $chemin) {
        $regles .= "Disallow: {$chemin}\n";
    }
    // Plus précis que « Disallow: /api/ » : la règle la plus longue l'emporte.
    $regles .= "Allow: /api/thumb.php\n";

    $sortie = "# robots.txt de richardsalanon.com\n\n";
    foreach (ROBOTS_IA as $robot) {
        $sortie .= "User-agent: {$robot}\nAllow: /\n{$regles}\n";
    }
    $sortie .= "User-agent: *\nAllow: /\n{$regles}Disallow: /uploads/\n";
    foreach (['jpg', 'jpeg', 'png', 'webp', 'gif', 'svg', 'avif'] as $ext) {
        $sortie .= "Allow: /uploads/*.{$ext}\$\n";
    }
    return $sortie . "\nSitemap: {$base}/sitemap.xml\n";
}
```

- [ ] **Step 4: Réécrire `robots.php`**

Remplacer tout le contenu de `robots.php` par :

```php
<?php
// ============================================================
// robots.php · Sert robots.txt (réécriture .htaccess robots.txt -> robots.php).
// Réécrit le 03/10/2026 : statique, sans base de données (spec 5.4).
// ============================================================
declare(strict_types=1);

require_once __DIR__ . '/config/site.php';
require_once __DIR__ . '/helpers/robots.php';

header('Content-Type: text/plain; charset=UTF-8');
header('Cache-Control: public, max-age=86400');
echo robots_txt(SITE_URL);
```

- [ ] **Step 5: Lancer et constater le succès**

Run: `php tools/tests/run.php Robots && php -l robots.php && php -l helpers/robots.php`
Expected: `5 test(s), 0 échec(s)`, aucune erreur de syntaxe.

- [ ] **Step 6: Commit**

```bash
git add helpers/robots.php robots.php tools/tests/RobotsTest.php
git commit -m "robots.txt statique, vingt robots IA autorises nommement" -m "Plus de requete en base ni de bascule Disallow globale ; une seule ligne Sitemap ; vignettes du portrait autorisees." -m "Co-Authored-By: Claude Opus 5.5 <noreply@anthropic.com>"
```

### Task 8: llms.txt et llms-full.txt générés

**Files:**
- Create: `helpers/llms.php`
- Create: `llms.php`
- Delete: `llms.txt`
- Modify: `.htaccess` (deux règles dans le bloc « Fichiers SEO », sous la règle `robots.txt`)
- Create: `tools/tests/LlmsTest.php`

**Interfaces:**
- Consumes: `faits()`, `fait()` (Task 4), `SITE_URL` (Task 2), `generateSlug()` (`helpers/functions.php`), registres `portfolio/data/sujets.php` et `portfolio/data/villes.php`, FAQ `portfolio/templates/horizon-faq.php` (Task 5).
- Produces:
  - `llms_contenu(array $f, string $base, array $sections, bool $complet): string` (pure, testée).
  - `llms_collecter(?PDO $pdo, string $base, bool $complet): array` : `['Services' => [['titre','url','resume'], ...], 'Formations' => [...], 'Expertise' => [...], 'Réalisations' => [...], 'Articles' => [...], 'Pages locales' => [...] (complet seulement)]`. Sans base, les sections issues de la base sont simplement vides.
  - `/llms.txt` et `/llms-full.txt` servis par `llms.php` en `text/plain; charset=UTF-8`.

- [ ] **Step 1: Écrire les tests**

`tools/tests/LlmsTest.php` :

```php
<?php
declare(strict_types=1);

require_once racine('helpers/faits.php');
require_once racine('helpers/llms.php');

function llms_test_sections(): array
{
    return [
        'Services'   => [['titre' => 'Site e-commerce', 'url' => 'https://richardsalanon.com/services/site-e-commerce', 'resume' => 'Boutiques avec paiement Mobile Money.']],
        'Formations' => [['titre' => 'Formation vibecoding', 'url' => 'https://richardsalanon.com/formation-vibecoding', 'resume' => '']],
        'Articles'   => [],
    ];
}

function test_llms_suit_le_format_llmstxt(): void
{
    $txt = llms_contenu(faits_depuis(racine('portfolio/data/faits.php')), 'https://richardsalanon.com', llms_test_sections(), false);
    assert_true(str_starts_with($txt, "# Richard SALANON\n\n> "), 'en-tête llms.txt attendu');
    assert_contains("## Services\n\n- [Site e-commerce](https://richardsalanon.com/services/site-e-commerce) : Boutiques avec paiement Mobile Money.\n", $txt);
    assert_contains("- [Formation vibecoding](https://richardsalanon.com/formation-vibecoding)\n", $txt);
}

function test_llms_omet_les_sections_vides_et_les_faits_inconnus(): void
{
    $f = faits_depuis(racine('portfolio/data/faits.php'));
    $f['projets_livres'] = null;
    $txt = llms_contenu($f, 'https://richardsalanon.com', llms_test_sections(), false);
    assert_not_contains('## Articles', $txt);
    assert_not_contains('null', $txt);
    assert_not_contains('projets livrés', $txt);
}

function test_llms_est_accentue_et_sans_ancienne_marque(): void
{
    $txt = llms_contenu(faits_depuis(racine('portfolio/data/faits.php')), 'https://richardsalanon.com', llms_test_sections(), true);
    assert_contains('Bénin', $txt);
    assert_contains('Côte d\'Ivoire', $txt);
    assert_not_contains('Richard Technologies', $txt);
    assert_not_contains("\u{2014}", $txt);
}

function test_llms_complet_ajoute_la_faq_et_les_competences(): void
{
    $f   = faits_depuis(racine('portfolio/data/faits.php'));
    $txt = llms_contenu($f, 'https://richardsalanon.com', llms_test_sections(), true);
    assert_contains('## Compétences', $txt);
    assert_contains('## Questions fréquentes', $txt);
    assert_not_contains('## Compétences', llms_contenu($f, 'https://richardsalanon.com', llms_test_sections(), false));
}

function test_llms_servi_en_local_meme_sans_base(): void
{
    $r = http_local('/llms.txt');
    assert_same(200, $r['code']);
    assert_contains('charset=utf-8', $r['type']);
    assert_contains('# Richard SALANON', $r['corps']);
    assert_contains('## Formations', $r['corps']);
    $r = http_local('/llms-full.txt');
    assert_same(200, $r['code']);
    assert_contains('## Pages locales', $r['corps']);
}
```

- [ ] **Step 2: Lancer et constater l'échec**

Run: `php tools/tests/run.php Llms`
Expected: erreur fatale « Failed opening required '.../helpers/llms.php' ».

- [ ] **Step 3: Écrire `helpers/llms.php`**

```php
<?php
// ============================================================
// helpers/llms.php · llms.txt et llms-full.txt (03/10/2026, spec 5.4).
// Avant : fichier statique écrit sans accents, qui listait 1 article sur 24,
// aucune formation, aucune réalisation, et une autre formulation du métier.
// Désormais généré depuis la fiche de faits et les registres : il ne peut
// plus diverger du site.
// ============================================================
declare(strict_types=1);

/** Une ligne de lien au format llms.txt. */
function llms_ligne(array $item): string
{
    $resume = trim((string) ($item['resume'] ?? ''));
    return '- [' . $item['titre'] . '](' . $item['url'] . ')' . ($resume !== '' ? ' : ' . $resume : '') . "\n";
}

/** Contenu de llms.txt (ou llms-full.txt si $complet). Pure : testable sans serveur. */
function llms_contenu(array $f, string $base, array $sections, bool $complet): string
{
    $base = rtrim($base, '/');
    $txt  = '# ' . $f['nom'] . "\n\n> " . $f['phrase_entite'] . "\n\n";
    $txt .= $f['intitule'] . '. Contact : ' . $f['email'] . ', téléphone et WhatsApp ' . $f['telephone'] . ".\n";
    $txt .= 'Zones servies : ' . implode(', ', $f['zones']) . ".\n\n";

    $reperes = [];
    if (!empty($f['experience_ans'])) {
        $reperes[] = 'Expérience : plus de ' . $f['experience_ans'] . ' ans de développement logiciel.';
    }
    if (!empty($f['projets_livres'])) {
        $reperes[] = 'Projets livrés : ' . $f['projets_livres'] . '.';
    }
    if (!empty($f['tarifs_depart'])) {
        $tarifs = [];
        foreach ($f['tarifs_depart'] as $offre => $prix) {
            $tarifs[] = $offre . ' à partir de ' . $prix;
        }
        $reperes[] = 'Tarifs de départ : ' . implode(' ; ', $tarifs) . '. Devis gratuit après cadrage.';
    }
    if (!empty($f['delais'])) {
        $delais = [];
        foreach ($f['delais'] as $projet => $duree) {
            $delais[] = $projet . ' : ' . $duree;
        }
        $reperes[] = 'Délais : ' . implode(' ; ', $delais) . '.';
    }
    if (!empty($f['paiements'])) {
        $reperes[] = 'Paiement : ' . implode(', ', $f['paiements']) . '.';
    }
    if (!empty($f['langues'])) {
        $reperes[] = 'Langues de travail : ' . mb_strtolower(implode(', ', $f['langues'])) . '.';
    }
    foreach ($f['produits'] ?? [] as $p) {
        $reperes[] = 'Produit : [' . $p['nom'] . '](' . $p['url'] . '), ' . $p['description'];
    }
    foreach ($f['affiliations'] ?? [] as $a) {
        $reperes[] = $a['role'] . ' d\'[' . $a['nom'] . '](' . $a['url'] . ').';
    }
    if ($reperes) {
        $txt .= "## Repères\n\n- " . implode("\n- ", $reperes) . "\n\n";
    }

    foreach ($sections as $titre => $items) {
        if (!$items) {
            continue;
        }
        $txt .= '## ' . $titre . "\n\n";
        foreach ($items as $item) {
            $txt .= llms_ligne($item);
        }
        $txt .= "\n";
    }

    if ($complet) {
        $txt .= "## Compétences\n\n- " . implode("\n- ", $f['competences']) . "\n\n";
        $faq = require __DIR__ . '/../portfolio/templates/horizon-faq.php';
        $txt .= "## Questions fréquentes\n\n";
        foreach ($faq as $qr) {
            $txt .= '### ' . $qr['q'] . "\n\n" . $qr['r'] . "\n\n";
        }
    }

    $txt .= "## Pages principales\n\n";
    foreach ([
        ['titre' => 'À propos de ' . $f['nom'], 'url' => $base . '/a-propos/'],
        ['titre' => 'Contact et devis gratuit', 'url' => $base . '/contact'],
        ['titre' => 'Tous les services', 'url' => $base . '/services/'],
        ['titre' => 'Toutes les formations', 'url' => $base . '/formations/'],
        ['titre' => 'Zones desservies', 'url' => $base . '/zones/'],
        ['titre' => 'Blog', 'url' => $base . '/blog/'],
    ] as $item) {
        $txt .= llms_ligne($item);
    }
    return $txt;
}

/** Lignes issues d'une requête SQL, ou [] si la base est absente ou la requête échoue. */
function llms_requete(?PDO $pdo, string $sql, callable $ligne): array
{
    if ($pdo === null) {
        return [];
    }
    try {
        return array_map($ligne, $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC));
    } catch (\Throwable $e) {
        return [];
    }
}

/** Sections de llms.txt depuis la base (si disponible) et les registres de fichiers. */
function llms_collecter(?PDO $pdo, string $base, bool $complet): array
{
    $base     = rtrim($base, '/');
    $sections = [
        'Services' => llms_requete($pdo, 'SELECT title, description FROM services ORDER BY sort_order ASC', static fn(array $r): array => [
            'titre' => $r['title'], 'url' => $base . '/services/' . generateSlug($r['title']), 'resume' => (string) $r['description'],
        ]),
        'Formations'    => [],
        'Expertise'     => [],
        'Réalisations'  => llms_requete($pdo, "SELECT slug, title, description_short FROM projects WHERE slug IS NOT NULL AND slug <> '' ORDER BY is_featured DESC, sort_order ASC", static fn(array $r): array => [
            'titre' => $r['title'], 'url' => $base . '/realisations/' . $r['slug'], 'resume' => (string) ($r['description_short'] ?? ''),
        ]),
        'Articles' => llms_requete($pdo, "SELECT slug, title, summary FROM blog_posts WHERE status = 'published' AND (published_at IS NULL OR published_at <= NOW()) ORDER BY published_at DESC", static fn(array $r): array => [
            'titre' => $r['title'], 'url' => $base . '/blog/' . $r['slug'], 'resume' => (string) ($r['summary'] ?? ''),
        ]),
    ];
    $locales = [];

    $sujets = require __DIR__ . '/../portfolio/data/sujets.php';
    foreach ($sujets as $slugSujet => $sujet) {
        foreach ($sujet['pages'] as $page) {
            $item = ['titre' => $page['titre'], 'url' => $base . '/' . $page['slug'], 'resume' => (string) ($page['accroche'] ?? '')];
            if ($slugSujet === 'expertise') {
                $sections['Expertise'][] = $item;
            } elseif (str_starts_with($slugSujet, 'formation-') && ($page['ville_slug'] ?? '') === '') {
                $sections['Formations'][] = $item;
            } else {
                $locales[] = $item;
            }
        }
    }
    foreach ((array) (require __DIR__ . '/../portfolio/data/villes.php') as $ville) {
        if (!empty($ville['slug'])) {
            $locales[] = ['titre' => 'Développeur web à ' . $ville['nom'], 'url' => $base . '/developpeur-web-' . $ville['slug'], 'resume' => (string) ($ville['accroche'] ?? '')];
        }
    }
    if ($complet) {
        $sections['Pages locales'] = $locales;
    }
    return $sections;
}
```

- [ ] **Step 4: Écrire `llms.php` et ses routes**

`llms.php` :

```php
<?php
// ============================================================
// llms.php · Sert /llms.txt et /llms-full.txt (réécriture .htaccess).
// Créé le 03/10/2026 (spec 5.4). Fonctionne base arrêtée : seules les
// sections issues de la base (services, réalisations, articles) manquent.
// ============================================================
declare(strict_types=1);

require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/helpers/functions.php';
require_once __DIR__ . '/helpers/llms.php';

try {
    $pdo = getPDO();
} catch (\Throwable $e) {
    $pdo = null;
}
$complet = isset($_GET['complet']);

header('Content-Type: text/plain; charset=UTF-8');
header('Cache-Control: public, max-age=3600');
echo llms_contenu(faits(), SITE_URL, llms_collecter($pdo, SITE_URL, $complet), $complet);
```

Dans `.htaccess`, juste sous `RewriteRule ^robots\.txt$  /robots.php  [L]`, ajouter :

```apache
# llms.txt et llms-full.txt générés (03/10/2026, spec 5.4).
RewriteRule ^llms\.txt$ /llms.php [L]
RewriteRule ^llms-full\.txt$ /llms.php?complet=1 [L]
```

Supprimer le fichier statique : `git rm llms.txt`

- [ ] **Step 5: Lancer et constater le succès**

Run: `php tools/tests/run.php Llms && php -l llms.php && php -l helpers/llms.php`
Expected: `5 test(s), 0 échec(s)`. (Colonne `description_short` : celle que lit `portfolio/realisation.php`.)

- [ ] **Step 6: Commit**

```bash
git add helpers/llms.php llms.php .htaccess tools/tests/LlmsTest.php
git commit -m "llms.txt et llms-full.txt generes depuis la fiche de faits et les registres" -m "Accentues, complets (formations, expertise, realisations, articles), servis en UTF-8, disponibles meme base arretee." -m "Co-Authored-By: Claude Opus 5.5 <noreply@anthropic.com>"
```

### Task 9: Sitemap aux dates honnêtes, résilient sans base

**Files:**
- Modify: `helpers/functions.php` (remplacer toute la fonction `buildSitemapXml()`, du docblock qui la précède jusqu'à son `}` final)
- Modify: `sitemap.php` (bloc `try` / `catch`)
- Create: `tools/tests/SitemapTest.php`

**Interfaces:**
- Consumes: registres `portfolio/data/villes.php` (`slug`, `_maj`, `maj` facultatif) et `portfolio/data/sujets.php` (`pages[*].slug`, `_maj`, `maj` facultatif).
- Produces:
  - `sitemap_lastmod(?string $maj, int|false|null $mtime): ?string` : `maj` saisi (format `AAAA-MM-JJ`) prioritaire, sinon date du fichier, sinon `null`.
  - `sitemap_xml(array $entrees): string` : entrées `['loc' => string, 'lastmod' => ?string, 'changefreq' => string, 'priority' => string]`, doublons de `loc` ignorés.
  - `sitemap_entrees_fichiers(string $baseUrl): array` et `sitemap_entrees_base(?PDO $pdo, string $baseUrl): array`.
  - `buildSitemapXml(?PDO $pdo, string $baseUrl): string` : même signature d'appel qu'avant pour `generate-sitemap.php` et `indexnow.php`, accepte désormais `null`. Plus de `urlset` vide : sans base, les pages de fichiers restent listées. Plus de bascule sur `profiles.is_published`.

- [ ] **Step 1: Écrire les tests**

`tools/tests/SitemapTest.php` :

```php
<?php
declare(strict_types=1);

require_once racine('config/site.php');
require_once racine('helpers/functions.php');

function test_sitemap_lastmod_prefere_la_date_saisie(): void
{
    assert_same('2026-10-01', sitemap_lastmod('2026-10-01', 1_700_000_000));
    assert_same(date('Y-m-d', 1_700_000_000), sitemap_lastmod(null, 1_700_000_000));
    assert_same(null, sitemap_lastmod('pas une date', null));
    assert_same(null, sitemap_lastmod(null, false));
}

function test_sitemap_xml_ignore_les_doublons_et_echappe(): void
{
    $xml = sitemap_xml([
        ['loc' => 'https://richardsalanon.com/a?b=1&c=2', 'lastmod' => null, 'changefreq' => 'monthly', 'priority' => '0.5'],
        ['loc' => 'https://richardsalanon.com/a?b=1&c=2', 'lastmod' => '2026-10-01', 'changefreq' => 'monthly', 'priority' => '0.5'],
    ]);
    assert_same(1, substr_count($xml, '<loc>'));
    assert_contains('&amp;c=2', $xml);
    assert_not_contains('<lastmod>', $xml, 'la première entrée, sans date, doit être gardée telle quelle');
}

function test_sitemap_sans_base_liste_encore_les_pages_de_fichiers(): void
{
    $xml = buildSitemapXml(null, 'https://richardsalanon.com');
    assert_true(simplexml_load_string($xml) !== false, 'XML invalide');
    assert_contains('<loc>https://richardsalanon.com/developpeur-web-cotonou</loc>', $xml);
    assert_contains('<loc>https://richardsalanon.com/formation-vibecoding</loc>', $xml);
    assert_contains('<loc>https://richardsalanon.com/formations/</loc>', $xml);
    assert_not_contains('://www.richardsalanon', $xml);
    assert_true(substr_count($xml, '<loc>') >= 90, 'moins de 90 URL de fichiers (97 au 03/10/2026)');
}

function test_sitemap_servi_en_local_sans_base(): void
{
    $r = http_local('/sitemap.xml');
    assert_same(200, $r['code']);
    assert_contains('<loc>http://localhost:8081/developpeur-web-cotonou</loc>', $r['corps']);
}
```

- [ ] **Step 2: Lancer et constater l'échec**

Run: `php tools/tests/run.php Sitemap`
Expected: erreur fatale « Call to undefined function sitemap_lastmod() ».

- [ ] **Step 3: Remplacer `buildSitemapXml()`**

Dans `helpers/functions.php`, remplacer la fonction `buildSitemapXml(PDO $pdo, string $baseUrl): string` entière (avec son docblock) par :

```php
/**
 * Date AAAA-MM-JJ d'une page pour <lastmod> (03/10/2026).
 * Le champ « maj » saisi à la main l'emporte ; sinon la date du fichier,
 * rendue fiable par le déploiement (dates git restaurées, rsync -t).
 */
function sitemap_lastmod(?string $maj, int|false|null $mtime): ?string
{
    if (is_string($maj) && preg_match('/^\d{4}-\d{2}-\d{2}$/', $maj) === 1) {
        return $maj;
    }
    return is_int($mtime) && $mtime > 0 ? date('Y-m-d', $mtime) : null;
}

/** XML d'un sitemap ; une URL déjà vue est ignorée. */
function sitemap_xml(array $entrees): string
{
    $xml  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    $vues = [];
    foreach ($entrees as $e) {
        if (isset($vues[$e['loc']])) {
            continue;
        }
        $vues[$e['loc']] = true;
        $xml .= "  <url>\n    <loc>" . htmlspecialchars($e['loc'], ENT_XML1) . "</loc>\n";
        if (!empty($e['lastmod'])) {
            $xml .= "    <lastmod>{$e['lastmod']}</lastmod>\n";
        }
        $xml .= "    <changefreq>{$e['changefreq']}</changefreq>\n    <priority>{$e['priority']}</priority>\n  </url>\n";
    }
    return $xml . '</urlset>';
}

/** Pages servies depuis des fichiers : listées même si la base est indisponible. */
function sitemap_entrees_fichiers(string $baseUrl): array
{
    $baseUrl  = rtrim($baseUrl, '/');
    $entrees  = [];
    $fixes    = [
        ['/', 'weekly', '1.0'], ['/a-propos/', 'monthly', '0.7'], ['/contact', 'yearly', '0.8'],
        ['/services/', 'monthly', '0.9'], ['/formations/', 'monthly', '0.9'], ['/zones/', 'monthly', '0.8'],
        ['/realisations/', 'monthly', '0.8'], ['/blog/', 'weekly', '0.7'],
    ];
    foreach ($fixes as [$chemin, $frequence, $priorite]) {
        $entrees[] = ['loc' => $baseUrl . $chemin, 'lastmod' => null, 'changefreq' => $frequence, 'priority' => $priorite];
    }

    $villes = is_file(__DIR__ . '/../portfolio/data/villes.php') ? (require __DIR__ . '/../portfolio/data/villes.php') : [];
    foreach ((array) $villes as $ville) {
        if (!empty($ville['slug'])) {
            $entrees[] = ['loc' => $baseUrl . '/developpeur-web-' . $ville['slug'], 'lastmod' => sitemap_lastmod($ville['maj'] ?? null, $ville['_maj'] ?? null), 'changefreq' => 'monthly', 'priority' => '0.8'];
        }
    }

    $sujets = is_file(__DIR__ . '/../portfolio/data/sujets.php') ? (require __DIR__ . '/../portfolio/data/sujets.php') : [];
    foreach ((array) $sujets as $sujet) {
        foreach (($sujet['pages'] ?? []) as $page) {
            if (!empty($page['slug'])) {
                $entrees[] = ['loc' => $baseUrl . '/' . $page['slug'], 'lastmod' => sitemap_lastmod($page['maj'] ?? null, $page['_maj'] ?? null), 'changefreq' => 'monthly', 'priority' => '0.8'];
            }
        }
    }
    return $entrees;
}

/** Pages issues de la base (services, réalisations, articles) ; [] si la base manque. */
function sitemap_entrees_base(?PDO $pdo, string $baseUrl): array
{
    if ($pdo === null) {
        return [];
    }
    $baseUrl = rtrim($baseUrl, '/');
    $entrees = [];
    try {
        foreach ($pdo->query('SELECT title FROM services ORDER BY sort_order ASC')->fetchAll(PDO::FETCH_ASSOC) as $s) {
            $entrees[] = ['loc' => $baseUrl . '/services/' . generateSlug($s['title']), 'lastmod' => null, 'changefreq' => 'monthly', 'priority' => '0.8'];
        }
    } catch (\Throwable $e) {
        // table absente : on continue
    }
    try {
        foreach ($pdo->query("SELECT slug, updated_at FROM projects WHERE slug IS NOT NULL AND slug <> '' ORDER BY is_featured DESC, sort_order ASC")->fetchAll(PDO::FETCH_ASSOC) as $p) {
            $entrees[] = ['loc' => $baseUrl . '/realisations/' . $p['slug'], 'lastmod' => !empty($p['updated_at']) ? date('Y-m-d', (int) strtotime((string) $p['updated_at'])) : null, 'changefreq' => 'yearly', 'priority' => '0.7'];
        }
    } catch (\Throwable $e) {
        // table absente : on continue
    }
    try {
        $sql = "SELECT slug, published_at, updated_at FROM blog_posts
                 WHERE status = 'published' AND (published_at IS NULL OR published_at <= NOW())
                 ORDER BY published_at DESC";
        foreach ($pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC) as $b) {
            // Date de modification jamais antérieure à la publication (articles antidatés).
            $ts = max((int) strtotime((string) ($b['published_at'] ?? '')), (int) strtotime((string) ($b['updated_at'] ?? '')));
            $entrees[] = ['loc' => $baseUrl . '/blog/' . $b['slug'], 'lastmod' => $ts > 0 ? date('Y-m-d', $ts) : null, 'changefreq' => 'monthly', 'priority' => '0.7'];
        }
    } catch (\Throwable $e) {
        // table absente : on continue
    }
    return $entrees;
}

/**
 * Sitemap complet (03/10/2026). Avant : urlset vide dès que la base tombait
 * ou que profiles.is_published valait 0, et 89 dates égales au jour du
 * déploiement. Les pages de fichiers sont désormais toujours listées.
 */
function buildSitemapXml(?PDO $pdo, string $baseUrl): string
{
    return sitemap_xml(array_merge(sitemap_entrees_fichiers($baseUrl), sitemap_entrees_base($pdo, $baseUrl)));
}
```

- [ ] **Step 4: Rendre `sitemap.php` tolérant à la base**

Dans `sitemap.php`, remplacer le bloc `try { ... } catch (\Throwable $e) { ... }` par :

```php
try {
    $pdo = getPDO();
} catch (\Throwable $e) {
    $pdo = null; // les pages de fichiers restent listées
}
$xml = buildSitemapXml($pdo, $baseUrl);
ob_clean();
header('Content-Type: application/xml; charset=UTF-8');
header('Cache-Control: public, max-age=3600');
echo $xml;
```

- [ ] **Step 5: Lancer et constater le succès**

Run: `php tools/tests/run.php Sitemap && php -l helpers/functions.php && php -l sitemap.php`
Expected: `4 test(s), 0 échec(s)`, aucune erreur de syntaxe.

- [ ] **Step 6: Commit**

```bash
git add helpers/functions.php sitemap.php tools/tests/SitemapTest.php
git commit -m "Sitemap : dates saisies ou reelles, pages de fichiers listees meme base arretee" -m "Plus de urlset vide sur panne de base ni de bascule is_published ; lastmod des articles jamais anterieur a la publication." -m "Co-Authored-By: Claude Opus 5.5 <noreply@anthropic.com>"
```

### Task 10: Déploiement : dates git, rsync `-t`, contrôle de fumée

**Files:**
- Modify: `.github/workflows/deploy.yml` (étape « Recuperer le depot », étapes rsync, nouvelle étape finale)
- Create: `tools/qa/smoke.php`

**Interfaces:**
- Consumes: comportement HTTP des Tasks 3, 7, 8, 9 et le graphe de Task 5.
- Produces: commande `php tools/qa/smoke.php <base>` (code 0 si tout passe, 1 sinon, une ligne `ok` ou `ECHEC` par contrôle) ; fichiers déployés avec leur date de dernier commit, donc `lastmod` réels.

- [ ] **Step 1: Écrire le contrôle de fumée**

`tools/qa/smoke.php` :

```php
<?php
// ============================================================
// tools/qa/smoke.php · Contrôle de fumée après déploiement (03/10/2026).
// Usage : php tools/qa/smoke.php https://richardsalanon.com
// Lancé par GitHub Actions après chaque déploiement : signale sans bloquer.
// ============================================================
declare(strict_types=1);

$base = rtrim($argv[1] ?? 'https://richardsalanon.com', '/');
$hote = (string) parse_url($base, PHP_URL_HOST);

/** @return array{code:int, location:string, type:string, corps:string} */
function smoke_get(string $url): array
{
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => true,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_USERAGENT      => 'Mozilla/5.0 (compatible; controle-de-fumee)',
    ]);
    $brut   = (string) curl_exec($ch);
    $code   = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    $taille = (int) curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    curl_close($ch);
    $entetes = substr($brut, 0, $taille);
    preg_match('/^Location:\s*(\S+)/mi', $entetes, $loc);
    preg_match('/^Content-Type:\s*([^\r\n]+)/mi', $entetes, $type);
    return ['code' => $code, 'location' => $loc[1] ?? '', 'type' => strtolower(trim($type[1] ?? '')), 'corps' => substr($brut, $taille)];
}

$controles = [
    'www redirige en un saut vers le domaine nu' => static function () use ($base, $hote): bool {
        $r = smoke_get('https://www.' . $hote . '/a-propos/');
        return $r['code'] === 301 && $r['location'] === $base . '/a-propos/';
    },
    'http redirige vers https' => static function () use ($base, $hote): bool {
        $r = smoke_get('http://' . $hote . '/contact');
        return $r['code'] === 301 && $r['location'] === $base . '/contact';
    },
    'robots.txt statique avec une seule ligne Sitemap' => static function () use ($base): bool {
        $r = smoke_get($base . '/robots.txt');
        return $r['code'] === 200 && substr_count($r['corps'], 'Sitemap:') === 1 && str_contains($r['corps'], 'User-agent: ClaudeBot');
    },
    'llms.txt en UTF-8 et accentué' => static function () use ($base): bool {
        $r = smoke_get($base . '/llms.txt');
        return $r['code'] === 200 && str_contains($r['type'], 'charset=utf-8') && str_contains($r['corps'], '# Richard SALANON') && str_contains($r['corps'], 'Bénin');
    },
    'llms-full.txt servi' => static function () use ($base): bool {
        return smoke_get($base . '/llms-full.txt')['code'] === 200;
    },
    'sitemap.xml valide, au moins 100 URL, aucune en www' => static function () use ($base): bool {
        $r = smoke_get($base . '/sitemap.xml');
        return $r['code'] === 200 && @simplexml_load_string($r['corps']) !== false
            && substr_count($r['corps'], '<loc>') >= 100 && !str_contains($r['corps'], '://www.richardsalanon');
    },
    "accueil : un seul JSON-LD, Person présente, pas d'ancienne marque" => static function () use ($base): bool {
        $r = smoke_get($base . '/');
        return $r['code'] === 200 && substr_count($r['corps'], 'application/ld+json') === 1
            && str_contains($r['corps'], '/#person') && !str_contains($r['corps'], 'Richard Technologies');
    },
    'à-propos : un seul JSON-LD' => static function () use ($base): bool {
        $r = smoke_get($base . '/a-propos/');
        return $r['code'] === 200 && substr_count($r['corps'], 'application/ld+json') === 1;
    },
    'favicon.ico servi' => static function () use ($base): bool {
        return smoke_get($base . '/favicon.ico')['code'] === 200;
    },
];

$echecs = 0;
foreach ($controles as $nom => $controle) {
    $ok = false;
    try {
        $ok = $controle();
    } catch (\Throwable $e) {
        $ok = false;
    }
    $echecs += $ok ? 0 : 1;
    fwrite(STDOUT, ($ok ? '  ok    ' : '  ECHEC ') . $nom . "\n");
}
fwrite(STDOUT, sprintf("\n%d contrôle(s), %d échec(s)\n", count($controles), $echecs));
exit($echecs > 0 ? 1 : 0);
```

- [ ] **Step 2: Vérifier que le contrôle échoue sur la production actuelle**

Run: `php tools/qa/smoke.php https://richardsalanon.com`
Expected: ECHEC au moins sur « www redirige », « robots.txt », « llms.txt », « un seul JSON-LD » et « favicon.ico » (code de sortie 1). C'est l'état d'avant la vague 0A.

- [ ] **Step 3: Restaurer les dates git avant l'envoi**

Dans `.github/workflows/deploy.yml`, remplacer l'étape :

```yaml
      - name: Recuperer le depot
        uses: actions/checkout@v4
```

par :

```yaml
      - name: Recuperer le depot
        uses: actions/checkout@v4
        with:
          # Historique complet : necessaire pour dater chaque fichier.
          fetch-depth: 0

      # Dates reelles des fichiers (03/10/2026). Le checkout date tous les
      # fichiers du jour du deploiement ; le sitemap lisait ces dates et 89
      # URL sur 120 annoncaient un faux lastmod. git restore-mtime remet
      # sur chaque fichier la date de son dernier commit ; rsync -t la conserve.
      - name: Restaurer les dates des fichiers depuis git
        run: |
          sudo apt-get update -qq
          sudo apt-get install -y -qq git-restore-mtime
          git restore-mtime
```

Dans les deux commandes `rsync` (« Simulation » et « Deploiement »), remplacer `rsync -rlz` par `rsync -rlzt`.

- [ ] **Step 4: Ajouter le contrôle de fumée en fin de workflow**

À la fin de `.github/workflows/deploy.yml`, après l'étape « Verifier que le site repond », ajouter :

```yaml
      # Controle de fumee (03/10/2026) : redirections, robots, llms, sitemap,
      # graphe JSON-LD. Signale sans bloquer : le site est deja en ligne.
      - name: Controle de fumee
        continue-on-error: true
        run: php tools/qa/smoke.php https://richardsalanon.com
```

- [ ] **Step 5: Vérifier la syntaxe**

Run:
```bash
php -l tools/qa/smoke.php
python -c "import yaml,sys; yaml.safe_load(open('.github/workflows/deploy.yml', encoding='utf-8')); print('yaml ok')"
grep -c "rsync -rlzt" .github/workflows/deploy.yml
```
Expected: `No syntax errors detected`, `yaml ok`, `2`.

- [ ] **Step 6: Commit**

```bash
git add tools/qa/smoke.php .github/workflows/deploy.yml
git commit -m "Deploiement : dates git restaurees, rsync -t, controle de fumee" -m "Co-Authored-By: Claude Opus 5.5 <noreply@anthropic.com>"
```

### Task 11: Accueil lisible par les robots, mesure d'audience partout

**Files:**
- Modify: `portfolio/templates/horizon.php` (compteurs `.ct` des lignes 76, 78 et 231-233)
- Modify: `portfolio/partials/tracking.php` (ajout du bloc GA4)
- Modify: `portfolio/index.php` (suppression du bloc GA4 de fin de page et des balises `og:image:width/height`)
- Modify: `portfolio/partials/pv2-head.php` (suppression de `og:image:width/height`)
- Create: `tools/tests/AccueilTest.php`

**Interfaces:**
- Consumes: `GA4_ID` (Task 2).
- Produces: compteurs dont le HTML porte la valeur finale (le JavaScript existant de `assets/js/portfolio-v2.js` repart de 0 et anime jusqu'à `data-to` : comportement visuel inchangé) ; GA4 chargé sur toutes les pages publiques via `tracking.php`.

- [ ] **Step 1: Écrire les tests**

`tools/tests/AccueilTest.php` :

```php
<?php
declare(strict_types=1);

function test_accueil_compteurs_portent_leur_valeur_finale_dans_le_html(): void
{
    $src = (string) file_get_contents(racine('portfolio/templates/horizon.php'));
    preg_match_all('/class="ct" data-to="([^"]+)">([^<]*)</', $src, $m, PREG_SET_ORDER);
    assert_true(count($m) >= 5, 'compteurs introuvables');
    foreach ($m as [, $cible, $affiche]) {
        assert_same($cible, $affiche, 'le HTML doit afficher la valeur finale du compteur');
    }
}

function test_accueil_ga4_charge_par_le_partiel_commun(): void
{
    require_once racine('config/site.php');
    ob_start();
    include racine('portfolio/partials/tracking.php');
    $html = (string) ob_get_clean();
    assert_same(2, substr_count($html, GA4_ID), 'GA4 attendu dans tracking.php (chargeur + config)');
    $accueil = (string) file_get_contents(racine('portfolio/index.php'));
    assert_not_contains('googletagmanager', $accueil, 'le bloc GA4 de l\'accueil doit disparaître');
}

function test_accueil_aucune_dimension_og_image_inventee(): void
{
    foreach (['portfolio/index.php', 'portfolio/partials/pv2-head.php'] as $fichier) {
        assert_not_contains('og:image:width', (string) file_get_contents(racine($fichier)), $fichier);
    }
}
```

- [ ] **Step 2: Lancer et constater les échecs**

Run: `php tools/tests/run.php Accueil`
Expected: 3 échecs (compteurs à « 0 », GA4 absent de `tracking.php`, `og:image:width` présent).

- [ ] **Step 3: Corriger les compteurs**

Dans `portfolio/templates/horizon.php`, remplacer :
- `<span class="ct" data-to="<?= (int)$h_svcCount ?>">0</span>` par `<span class="ct" data-to="<?= (int)$h_svcCount ?>"><?= (int)$h_svcCount ?></span>`
- `<span class="ct" data-to="100">0</span>` par `<span class="ct" data-to="100">100</span>`
- `<span class="ct" data-to="3">0</span>` par `<span class="ct" data-to="3">3</span>`
- `<span class="ct" data-to="24">0</span>` par `<span class="ct" data-to="24">24</span>`
- `<span class="ct" data-to="2">0</span>` par `<span class="ct" data-to="2">2</span>`

Juste au-dessus de la première ligne modifiée (bloc `.stats`), ajouter :

```php
    <?php /* Compteurs (03/10/2026) : le HTML porte la valeur finale. Avant, il
             affichait « 0 » : c'est ce que lisent Google et les robots IA, qui
             n'exécutent pas le JavaScript d'animation. */ ?>
```

- [ ] **Step 4: Déplacer GA4 dans le partiel commun**

À la fin de `portfolio/partials/tracking.php`, ajouter :

```php
<?php if (defined('GA4_ID') && GA4_ID !== ''): ?>
<!-- Google Analytics 4 : sur toutes les pages publiques depuis le 03/10/2026
     (avant : accueil seulement). Chargement repoussé en période d'inactivité. -->
<script>
window.addEventListener('load', function () {
    var start = function () {
        var s = document.createElement('script');
        s.async = true;
        s.src = 'https://www.googletagmanager.com/gtag/js?id=<?= GA4_ID ?>';
        document.head.appendChild(s);
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?= GA4_ID ?>');
    };
    if ('requestIdleCallback' in window) { requestIdleCallback(start, { timeout: 4000 }); }
    else { setTimeout(start, 2500); }
});
</script>
<?php endif; ?>
```

Dans `portfolio/index.php`, supprimer tout le bloc qui commence par `<?php if ($seo['google_analytics_id'] ?? ''): ?>` (en fin de fichier) et se termine par le `<?php endif; ?>` correspondant, juste avant `</body>`.

- [ ] **Step 5: Retirer les dimensions d'image inventées**

Dans `portfolio/partials/pv2-head.php` et dans `portfolio/index.php`, supprimer les deux lignes :

```php
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
```

(dans `index.php` elles sont indentées de quatre espaces). L'image partagée est l'avatar, pas un visuel 1200×630 : les réseaux mesurent l'image eux-mêmes.

- [ ] **Step 6: Lancer et constater le succès**

Run: `php tools/tests/run.php Accueil && for f in portfolio/templates/horizon.php portfolio/partials/tracking.php portfolio/index.php portfolio/partials/pv2-head.php; do php -l "$f"; done`
Expected: `3 test(s), 0 échec(s)`, aucune erreur de syntaxe.

- [ ] **Step 7: Commit**

```bash
git add portfolio/templates/horizon.php portfolio/partials/tracking.php portfolio/index.php portfolio/partials/pv2-head.php tools/tests/AccueilTest.php
git commit -m "Accueil : compteurs lisibles sans JavaScript, GA4 sur toutes les pages" -m "Le HTML affichait 0 pour chaque compteur ; GA4 ne mesurait que l'accueil ; og:image declarait 1200x630 pour un petit avatar." -m "Co-Authored-By: Claude Opus 5.5 <noreply@anthropic.com>"
```

### Task 12: Liens cassés, liens obsolètes et accents

**Files:**
- Modify: `portfolio/data/sujets/formation-dolibarr/utilisateurs.php:132`
- Modify: `portfolio/partials/pv2-footer.php:86-90`
- Modify: les 21 fichiers `portfolio/data/sujets/formation-ia/*.php` (« des le lendemain »)
- Create: `migrations/2026-10-03-liens-obsoletes-blog.sql`
- Create: `tools/tests/LiensTest.php`

**Interfaces:**
- Produces: aucun lien interne vers `/dolibarr-cotonou`, vers `richard.salanon.info` ou vers `/services/creation-de-site-web` dans les fichiers ni, après migration, dans les articles en base ; liens « Expertise » du pied de page vers les vraies pages.

- [ ] **Step 1: Écrire les tests**

`tools/tests/LiensTest.php` :

```php
<?php
declare(strict_types=1);

/** Contenu concaténé de tous les fichiers PHP d'un dossier. */
function liens_contenu(string $dossier): string
{
    $tout = '';
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dossier, FilesystemIterator::SKIP_DOTS));
    foreach ($it as $f) {
        if ($f->getExtension() === 'php') {
            $tout .= file_get_contents($f->getPathname());
        }
    }
    return $tout;
}

function test_liens_aucun_lien_mort_ou_obsolete_dans_les_pages(): void
{
    $tout = liens_contenu(racine('portfolio'));
    assert_not_contains("'/dolibarr-cotonou'", $tout);
    assert_not_contains('richard.salanon.info', $tout);
    assert_not_contains('/services/creation-de-site-web', $tout);
}

function test_liens_pied_de_page_vers_les_vraies_pages_d_expertise(): void
{
    $pied = (string) file_get_contents(racine('portfolio/partials/pv2-footer.php'));
    assert_not_contains('/a-propos/#expertise', $pied);
    foreach (['/services/application-web-sur-mesure', '/services/automatisation-ia', '/services/referencement-naturel-seo', '/consultant-digitalisation', '/formations/'] as $url) {
        assert_contains('href="' . $url . '"', $pied);
    }
}

function test_liens_aucun_des_sans_accent_devant_le_lendemain(): void
{
    assert_not_contains('des le lendemain', liens_contenu(racine('portfolio/data')));
}

function test_liens_migration_des_articles_couvre_les_trois_remplacements(): void
{
    $sql = (string) file_get_contents(racine('migrations/2026-10-03-liens-obsoletes-blog.sql'));
    assert_same(3, substr_count($sql, 'UPDATE blog_posts'));
    assert_contains("'//richard.salanon.info'", $sql);
    assert_contains("'http://richardsalanon.com'", $sql);
    assert_contains("'/services/creation-de-site-web'", $sql);
}
```

- [ ] **Step 2: Lancer et constater les échecs**

Run: `php tools/tests/run.php Liens`
Expected: 4 échecs.

- [ ] **Step 3: Corriger les fichiers**

`portfolio/data/sujets/formation-dolibarr/utilisateurs.php`, ligne 132 : remplacer `'url' => '/dolibarr-cotonou'` par `'url' => '/integration-dolibarr-cotonou'`.

`portfolio/partials/pv2-footer.php`, lignes 86-90 : remplacer les cinq liens `href="/a-propos/#expertise"` par :

```php
      <a href="/services/application-web-sur-mesure">Développement full-stack</a>
      <a href="/services/application-mobile-android-ios">Applications & mobile</a>
      <a href="/services/automatisation-ia">Automatisation n8n / Make</a>
      <a href="/services/referencement-naturel-seo">Référencement (SEO)</a>
      <a href="/consultant-digitalisation">Conseil & digitalisation</a>
      <a href="/formations/">Formations IA et numérique</a>
```

Accents dans les 21 fichiers de formation IA :

```bash
grep -rl "des le lendemain" portfolio/data/sujets/formation-ia | xargs sed -i 's/des le lendemain/dès le lendemain/g'
```

- [ ] **Step 4: Écrire la migration des articles**

`migrations/2026-10-03-liens-obsoletes-blog.sql` :

```sql
-- ============================================================
-- Migration : liens obsolètes dans le contenu des articles
-- Date       : 2026-10-03
--
-- CONTEXTE
-- L'audit du 03/10/2026 a relevé 14 liens vers richard.salanon.info
-- (ancien domaine, redirigé en 301) dans 5 articles, et 5 liens vers
-- /services/creation-de-site-web, ancien slug lui aussi redirigé.
-- Chaque lien interne doit viser directement sa page finale.
-- Ordre : domaine d'abord (http et https), puis passage en https,
-- puis ancien slug.
-- ============================================================
UPDATE blog_posts
   SET content = REPLACE(content, '//richard.salanon.info', '//richardsalanon.com')
 WHERE content LIKE '%//richard.salanon.info%';

UPDATE blog_posts
   SET content = REPLACE(content, 'http://richardsalanon.com', 'https://richardsalanon.com')
 WHERE content LIKE '%http://richardsalanon.com%';

UPDATE blog_posts
   SET content = REPLACE(content, '/services/creation-de-site-web', '/services/site-vitrine-professionnel')
 WHERE content LIKE '%/services/creation-de-site-web%';
```

(La migration s'applique toute seule au déploiement : étape « Appliquer les migrations de base » du workflow.)

- [ ] **Step 5: Lancer et constater le succès**

Run: `php tools/tests/run.php Liens && php -l portfolio/data/sujets/formation-dolibarr/utilisateurs.php && php -l portfolio/partials/pv2-footer.php`
Expected: `4 test(s), 0 échec(s)`, aucune erreur de syntaxe.

- [ ] **Step 6: Commit**

```bash
git add portfolio/data/sujets/formation-dolibarr/utilisateurs.php portfolio/partials/pv2-footer.php portfolio/data/sujets/formation-ia migrations/2026-10-03-liens-obsoletes-blog.sql tools/tests/LiensTest.php
git commit -m "Liens morts et obsoletes corriges, pied de page vers les vraies pages d'expertise" -m "Co-Authored-By: Claude Opus 5.5 <noreply@anthropic.com>"
```

### Task 13: Pages services ouvertes à l'international

**Files:**
- Modify: `portfolio/service.php:27-29` (title et description) et `:33-44` (nœud `Service`)
- Create: `tools/tests/ServiceTest.php`

**Interfaces:**
- Consumes: `fait('zones')` (Task 4), graphe (Task 5).
- Produces: pages `/services/{slug}` sans « à Abomey-Calavi, Bénin » dans le title ; nœud `Service` avec `areaServed` = les 34 pays et `provider` = `{SITE_URL}/#person`.

- [ ] **Step 1: Écrire le test**

`tools/tests/ServiceTest.php` :

```php
<?php
declare(strict_types=1);

function test_service_titre_et_zone_ne_sont_plus_cales_sur_une_ville(): void
{
    $src = (string) file_get_contents(racine('portfolio/service.php'));
    assert_not_contains("' à ' . \$h_city . ', Bénin'", $src, 'title encore calé sur la ville');
    assert_not_contains("['@type' => 'City', 'name' => \$h_city]", $src, 'areaServed encore réduit à la ville');
    assert_contains("fait('zones')", $src);
    assert_contains("'provider'    => ['@id' => SITE_URL . '/#person']", $src);
}
```

- [ ] **Step 2: Lancer et constater l'échec**

Run: `php tools/tests/run.php Service`
Expected: ECHEC « title encore calé sur la ville ».

- [ ] **Step 3: Corriger `service.php`**

Remplacer :

```php
$pageTitle    = seoTitle($svc['title'] . ' à ' . $h_city . ', Bénin', $fullName);
$descBase     = trim(($svc['description'] ?? '') . ($feats ? ' ' . implode(', ', array_slice($feats, 0, 3)) . '.' : ''));
$pageDesc     = seoDescription($descBase ?: ($svc['title'] . ' au Bénin par ' . $fullName));
```

par :

```php
// Title sans ville (03/10/2026) : les 17 pages services étaient toutes
// calées sur « à Abomey-Calavi, Bénin », à rebours de la cible internationale.
$pageTitle    = seoTitle($svc['title'], $fullName);
$descBase     = trim(($svc['description'] ?? '') . ($feats ? ' ' . implode(', ', array_slice($feats, 0, 3)) . '.' : ''));
$pageDesc     = seoDescription($descBase ?: ($svc['title'] . ' par ' . $fullName . ', en Afrique francophone, en Europe et au Canada.'));
```

Dans le premier élément de `$pageSchemas` (le nœud `Service`), remplacer les clés `areaServed` et `provider` :

```php
        'areaServed' => [
            ['@type' => 'City', 'name' => $h_city],
            ['@type' => 'Country', 'name' => 'Bénin', 'sameAs' => 'https://www.wikidata.org/wiki/Q962'],
        ],
        'provider' => ['@type' => 'Person', 'name' => $fullName, 'url' => $portfolioUrl],
```

par :

```php
        'areaServed'  => array_map(static fn(string $pays): array => ['@type' => 'Country', 'name' => $pays], fait('zones')),
        'provider'    => ['@id' => SITE_URL . '/#person'],
```

- [ ] **Step 4: Lancer et constater le succès**

Run: `php tools/tests/run.php Service && php -l portfolio/service.php`
Expected: `1 test(s), 0 échec(s)`, aucune erreur de syntaxe.

- [ ] **Step 5: Commit**

```bash
git add portfolio/service.php tools/tests/ServiceTest.php
git commit -m "Pages services : title sans ville, zone servie = les 34 pays" -m "Co-Authored-By: Claude Opus 5.5 <noreply@anthropic.com>"
```

### Task 14: Outils de contrôle qualité des pages

**Files:**
- Create: `tools/qa/lib.php`
- Create: `tools/qa/crawl.php`
- Create: `tools/qa/unicite.php`
- Create: `tools/tests/QaTest.php`

**Interfaces:**
- Consumes: registres `portfolio/data/villes.php`, `portfolio/data/sujets.php`, fiche `portfolio/data/faits.php` (noms de lieux à neutraliser).
- Produces (utilisés par toutes les vagues suivantes) :
  - `qa_get(string $url, int $pauseMs = 0): array{code:int, corps:string}`
  - `qa_urls_sitemap(string $base, int $pauseMs = 0): list<string>`
  - `qa_texte_principal(string $html): string` : texte visible de `<main>` sans script, style, svg, nav, header, footer, aside.
  - `qa_compter_mots(string $texte): int`
  - `qa_meta(string $html): array{title:string, description:string, canonical:string, robots:string, h1:int}`
  - `qa_jsonld(string $html): array{balises:int, types:list<string>, erreurs:list<string>}`
  - `qa_texte_interdit(string $texte): list<string>`
  - `qa_liens(string $html, string $base): array{internes:list<string>, ancien_domaine:list<string>, whatsapp_invalides:list<string>}`
  - `qa_faits_incoherents(string $texte, array $faits): list<string>`
  - `qa_noms_de_lieux(): list<string>`
  - `qa_bardeaux(string $texte, int $n = 5, array $neutres = []): array<string,true>`
  - `qa_ressemblance(array $a, array $b): float` (Jaccard, 0 à 1)
  - `qa_part_propre(array $a, array $autres): float` (0 à 1)
  - `php tools/qa/crawl.php <base> [--seuil=3200] [--max=N] [--filtre=REGEX] [--pause=MS] [--liens] [--strict]` : code 1 si une page a un défaut bloquant (statut ≠ 200, nombre de JSON-LD ≠ 1, type interdit, canonique ≠ URL, H1 ≠ 1, texte interdit, lien vers l'ancien domaine, lien WhatsApp invalide, fait d'identité contraire à la fiche) ; avec `--liens`, aussi si un lien interne ne répond pas 200 ; avec `--strict`, aussi pour les mots sous le seuil et les longueurs de title/meta hors bornes.
  - `php tools/qa/unicite.php <base> --groupe=REGEX [--pause=MS]` : code 1 si une page du groupe dépasse 40 % de ressemblance avec une autre ou a moins de 60 % de texte propre.

- [ ] **Step 1: Écrire les tests**

`tools/tests/QaTest.php` :

```php
<?php
declare(strict_types=1);

require_once racine('tools/qa/lib.php');

function test_qa_texte_principal_ignore_la_navigation_et_les_scripts(): void
{
    $html = '<html><body><header>Menu</header><nav>Liens</nav><main><h1>Titre</h1><script>var x=1;</script>'
          . '<p>Texte utile.</p><aside>Pub</aside><footer>Pied</footer></main><footer>Pied global</footer></body></html>';
    $texte = qa_texte_principal($html);
    assert_contains('Titre', $texte);
    assert_contains('Texte utile.', $texte);
    foreach (['Menu', 'Liens', 'var x', 'Pub', 'Pied'] as $absent) {
        assert_not_contains($absent, $texte);
    }
}

function test_qa_compter_mots_gere_apostrophes_et_accents(): void
{
    assert_same(8, qa_compter_mots("L'entreprise de Côte d'Ivoire paie 300 000 FCFA."));
}

function test_qa_meta_extrait_les_balises(): void
{
    $html = '<title>Site e-commerce | Richard SALANON</title><meta name="description" content="Boutiques &amp; paiement">'
          . '<link rel="canonical" href="https://richardsalanon.com/services/site-e-commerce"><meta name="robots" content="index, follow"><h1>Un</h1>';
    $m = qa_meta($html);
    assert_same('Site e-commerce | Richard SALANON', $m['title']);
    assert_same('Boutiques & paiement', $m['description']);
    assert_same('https://richardsalanon.com/services/site-e-commerce', $m['canonical']);
    assert_same(1, $m['h1']);
}

function test_qa_jsonld_compte_les_balises_et_les_types(): void
{
    $html = '<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Person"},{"@type":"WebSite"}]}</script>'
          . '<script type="application/ld+json">{"@type":"FAQPage"}</script><script type="application/ld+json">{oops</script>';
    $j = qa_jsonld($html);
    assert_same(3, $j['balises']);
    assert_same(['Person', 'WebSite', 'FAQPage'], $j['types']);
    assert_same(1, count($j['erreurs']));
}

function test_qa_texte_interdit_detecte_tirets_gabarits_et_mots_sans_accent(): void
{
    $p = qa_texte_interdit("Le developpement {{ville}} \u{2014} rapide");
    assert_true(in_array('tiret cadratin', $p, true), 'tiret non détecté');
    assert_true(in_array('gabarit non remplacé', $p, true), 'gabarit non détecté');
    assert_true(in_array('sans accent : developpement', $p, true), 'mot sans accent non détecté');
    assert_same([], qa_texte_interdit('Le développement à Cotonou, dès le lendemain.'));
}

function test_qa_liens_classe_internes_interdits_et_whatsapp(): void
{
    $html = '<a href="/services/site-e-commerce">a</a><a href="https://richardsalanon.com/contact">b</a>'
          . '<a href="https://richard.salanon.info/blog/x">c</a><a href="https://wa.me/22901666598360">d</a>'
          . '<a href="https://wa.me/2290161413177?text=Bonjour">e</a><a href="#faq">f</a><a href="mailto:x@y.z">g</a>';
    $l = qa_liens($html, 'https://richardsalanon.com');
    assert_same(['https://richardsalanon.com/services/site-e-commerce', 'https://richardsalanon.com/contact'], $l['internes']);
    assert_same(['https://richard.salanon.info/blog/x'], $l['ancien_domaine']);
    assert_same(['https://wa.me/22901666598360'], $l['whatsapp_invalides']);
}

function test_qa_faits_incoherents_detecte_marque_et_anciennete(): void
{
    $f = ['experience_ans' => 6];
    assert_same([], qa_faits_incoherents('Plus de 6 ans d\'expérience au service des PME.', $f));
    $p = qa_faits_incoherents('Richard Technologies, +8 ans d\'expérience.', $f);
    assert_true(in_array('ancienne marque', $p, true), 'marque non détectée');
    assert_true(in_array('ancienneté 8 ans au lieu de 6', $p, true), 'ancienneté non détectée');
}

function test_qa_noms_de_lieux_viennent_des_registres(): void
{
    $noms = qa_noms_de_lieux();
    foreach (['Cotonou', 'Paris', 'Sénégal', 'Bénin'] as $nom) {
        assert_true(in_array($nom, $noms, true), "lieu absent : {$nom}");
    }
}

function test_qa_ressemblance_neutralise_les_lieux(): void
{
    $a = qa_bardeaux('Formation IA pour vos équipes à Paris, sur vos vrais documents et vos outils.', 5, ['Paris', 'Lyon']);
    $b = qa_bardeaux('Formation IA pour vos équipes à Lyon, sur vos vrais documents et vos outils.', 5, ['Paris', 'Lyon']);
    $c = qa_bardeaux('Une boutique en ligne avec paiement mobile et livraison suivie chaque jour.', 5);
    assert_same(1.0, qa_ressemblance($a, $b));
    assert_same(0.0, qa_ressemblance($a, $c));
    assert_same(0.0, qa_part_propre($a, [$b]));
    assert_same(1.0, qa_part_propre($a, [$c]));
}
```

- [ ] **Step 2: Lancer et constater l'échec**

Run: `php tools/tests/run.php Qa`
Expected: erreur fatale « Failed opening required '.../tools/qa/lib.php' ».

- [ ] **Step 3: Écrire `tools/qa/lib.php`**

```php
<?php
// ============================================================
// tools/qa/lib.php · Analyse des pages pour les contrôles qualité
// (03/10/2026, spec 8). Partagé par crawl.php et unicite.php.
// ============================================================
declare(strict_types=1);

const QA_TYPES_INTERDITS = ['AggregateRating', 'Review', 'Rating', 'LocalBusiness'];

/** Mots français qui n'existent jamais sans accent : leur présence trahit une saisie en ASCII. */
const QA_MOTS_SANS_ACCENT = [
    'deja', 'tres', 'meme', 'apres', 'etre', 'equipe', 'equipes', 'developpement', 'developpeur',
    'referencement', 'donnees', 'systeme', 'systemes', 'numerique', 'creation', 'strategie',
    'methode', 'etape', 'etapes', 'qualite', 'securite', 'benin', 'senegal', 'reseau', 'reseaux',
    'societe', 'activite', 'derniere', 'premiere', 'interet',
];

/** @return array{code:int, corps:string} */
function qa_get(string $url, int $pauseMs = 0): array
{
    if ($pauseMs > 0) {
        usleep($pauseMs * 1000); // l'audit a déclenché le défi du CDN au-delà de ~350 requêtes rapides
    }
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_TIMEOUT        => 40,
        CURLOPT_ENCODING       => '',
        CURLOPT_USERAGENT      => 'Mozilla/5.0 (compatible; controle-qualite-richardsalanon)',
    ]);
    $corps = (string) curl_exec($ch);
    $code  = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    curl_close($ch);
    return ['code' => $code, 'corps' => $corps];
}

/** URL listées par le sitemap du site. */
function qa_urls_sitemap(string $base, int $pauseMs = 0): array
{
    $r = qa_get(rtrim($base, '/') . '/sitemap.xml', $pauseMs);
    preg_match_all('#<loc>([^<]+)</loc>#', $r['corps'], $m);
    return array_values(array_unique(array_map(static fn(string $u): string => html_entity_decode($u, ENT_XML1), $m[1])));
}

function qa_texte_principal(string $html): string
{
    if (preg_match('#<main\b[^>]*>(.*)</main>#si', $html, $m) === 1) {
        $html = $m[1];
    }
    $html  = preg_replace('#<(script|style|noscript|svg|nav|header|footer|aside|template)\b[^>]*>.*?</\1>#si', ' ', $html) ?? $html;
    $html  = preg_replace('#<(br|/p|/li|/h[1-6]|/div|/td|/th|/dt|/dd|/summary)\b[^>]*>#i', "\n", $html) ?? $html;
    $texte = html_entity_decode(strip_tags($html), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    return trim(preg_replace('/[ \t\x{00A0}]+/u', ' ', $texte) ?? $texte);
}

function qa_compter_mots(string $texte): int
{
    return (int) preg_match_all('/[\p{L}\p{N}]+(?:[\'\x{2019}-][\p{L}\p{N}]+)*/u', $texte);
}

/** @return array{title:string, description:string, canonical:string, robots:string, h1:int} */
function qa_meta(string $html): array
{
    $decoder = static fn(string $s): string => html_entity_decode(trim($s), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    return [
        'title'       => preg_match('#<title>(.*?)</title>#si', $html, $m) === 1 ? $decoder($m[1]) : '',
        'description' => preg_match('#<meta\s+name="description"\s+content="([^"]*)"#i', $html, $m) === 1 ? $decoder($m[1]) : '',
        'canonical'   => preg_match('#<link\s+rel="canonical"\s+href="([^"]+)"#i', $html, $m) === 1 ? $m[1] : '',
        'robots'      => preg_match('#<meta\s+name="robots"\s+content="([^"]*)"#i', $html, $m) === 1 ? $m[1] : '',
        'h1'          => (int) preg_match_all('#<h1\b#i', $html),
    ];
}

/** Collecte récursive des @type. */
function qa_types(array $noeud, array &$types): void
{
    foreach ($noeud as $cle => $valeur) {
        if ($cle === '@type') {
            foreach ((array) $valeur as $type) {
                $types[] = (string) $type;
            }
        } elseif (is_array($valeur)) {
            qa_types($valeur, $types);
        }
    }
}

/** @return array{balises:int, types:list<string>, erreurs:list<string>} */
function qa_jsonld(string $html): array
{
    preg_match_all('#<script type="application/ld\+json">(.*?)</script>#si', $html, $m);
    $types   = [];
    $erreurs = [];
    foreach ($m[1] as $json) {
        $doc = json_decode($json, true);
        if (!is_array($doc)) {
            $erreurs[] = 'JSON-LD illisible';
            continue;
        }
        qa_types($doc, $types);
    }
    return ['balises' => count($m[1]), 'types' => array_values(array_unique($types)), 'erreurs' => $erreurs];
}

/** Problèmes de texte visible : tirets, flèches, gabarits, mots sans accent. */
function qa_texte_interdit(string $texte): array
{
    $problemes = [];
    foreach (["\u{2014}" => 'tiret cadratin', "\u{2192}" => 'flèche', '{{' => 'gabarit non remplacé', 'TODO' => 'TODO', '[À COMPLÉTER]' => 'à compléter'] as $motif => $nom) {
        if (str_contains($texte, $motif)) {
            $problemes[] = $nom;
        }
    }
    if (preg_match_all('/\b(' . implode('|', QA_MOTS_SANS_ACCENT) . ')\b/i', $texte, $m) > 0) {
        foreach (array_unique(array_map('strtolower', $m[1])) as $mot) {
            $problemes[] = 'sans accent : ' . $mot;
        }
    }
    return $problemes;
}

/**
 * Liens d'une page : internes (absolus, sans ancre), vers l'ancien domaine,
 * et WhatsApp invalides (numéro béninois à 10 chiffres après 229 attendu :
 * paulmaximedossou.com en avait un faux sur 1 521 pages).
 * @return array{internes:list<string>, ancien_domaine:list<string>, whatsapp_invalides:list<string>}
 */
function qa_liens(string $html, string $base): array
{
    $base = rtrim($base, '/');
    $hote = (string) parse_url($base, PHP_URL_HOST);
    preg_match_all('#<a\s[^>]*href="([^"]+)"#i', $html, $m);
    $sortie = ['internes' => [], 'ancien_domaine' => [], 'whatsapp_invalides' => []];
    foreach ($m[1] as $href) {
        $href = html_entity_decode($href, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        if (str_contains($href, 'richard.salanon.info')) {
            $sortie['ancien_domaine'][] = $href;
            continue;
        }
        if (preg_match('#^https?://(api\.)?wa\.me/(\d+)#', $href, $wa) === 1) {
            if (str_starts_with($wa[2], '229') && strlen($wa[2]) !== 13) {
                $sortie['whatsapp_invalides'][] = strtok($href, '?');
            }
            continue;
        }
        if (str_starts_with($href, '/') && !str_starts_with($href, '//')) {
            $href = $base . $href;
        }
        if (parse_url($href, PHP_URL_HOST) === $hote) {
            $sortie['internes'][] = strtok($href, '#');
        }
    }
    $sortie['internes'] = array_values(array_unique(array_filter($sortie['internes'])));
    return $sortie;
}

/** Formulations d'identité contraires à la fiche de faits. */
function qa_faits_incoherents(string $texte, array $faits): array
{
    $problemes = [];
    if (str_contains($texte, 'Richard Technologies')) {
        $problemes[] = 'ancienne marque';
    }
    if (!empty($faits['experience_ans']) && preg_match_all('/(\d+)\s*ans d[\'\x{2019}]exp/u', $texte, $m) > 0) {
        foreach (array_unique($m[1]) as $ans) {
            if ((int) $ans !== (int) $faits['experience_ans']) {
                $problemes[] = "ancienneté {$ans} ans au lieu de {$faits['experience_ans']}";
            }
        }
    }
    return $problemes;
}

/** Noms de villes et de pays des registres, à neutraliser avant comparaison. */
function qa_noms_de_lieux(): array
{
    $racine = dirname(__DIR__, 2) . '/portfolio/data';
    $noms   = (require $racine . '/faits.php')['zones'];
    foreach ((array) (require $racine . '/villes.php') as $ville) {
        $noms[] = (string) ($ville['nom'] ?? '');
        $noms[] = (string) ($ville['pays'] ?? '');
    }
    foreach ((array) (require $racine . '/sujets.php') as $sujet) {
        foreach ($sujet['pages'] as $page) {
            $noms[] = (string) ($page['ville'] ?? '');
            $noms[] = (string) ($page['pays'] ?? '');
        }
    }
    $noms = array_values(array_unique(array_filter($noms, static fn(string $n): bool => mb_strlen($n) >= 3)));
    usort($noms, static fn(string $a, string $b): int => mb_strlen($b) <=> mb_strlen($a)); // les plus longs d'abord
    return $noms;
}

/** Minuscules, lieux remplacés par un jeton, accents retirés, ponctuation supprimée. */
function qa_normaliser(string $texte, array $neutres = []): string
{
    $t = mb_strtolower($texte);
    foreach ($neutres as $nom) {
        $t = str_replace(mb_strtolower($nom), ' zzlieuzz ', $t);
    }
    $ascii = transliterator_transliterate('Any-Latin; Latin-ASCII', $t);
    $t     = is_string($ascii) ? $ascii : $t;
    return trim(preg_replace('/[^a-z0-9]+/', ' ', $t) ?? $t);
}

/** @return array<string,true> bardeaux de $n mots */
function qa_bardeaux(string $texte, int $n = 5, array $neutres = []): array
{
    $mots      = preg_split('/\s+/', qa_normaliser($texte, $neutres), -1, PREG_SPLIT_NO_EMPTY) ?: [];
    $bardeaux  = [];
    for ($i = 0, $fin = count($mots) - $n; $i <= $fin; $i++) {
        $bardeaux[implode(' ', array_slice($mots, $i, $n))] = true;
    }
    return $bardeaux;
}

/** Indice de Jaccard entre deux ensembles de bardeaux. */
function qa_ressemblance(array $a, array $b): float
{
    $inter = count(array_intersect_key($a, $b));
    $union = count($a) + count($b) - $inter;
    // (float) : une division exacte entre entiers renverrait un int en PHP.
    return $union === 0 ? 0.0 : (float) ($inter / $union);
}

/** Part des bardeaux de $a absents de toutes les autres pages. */
function qa_part_propre(array $a, array $autres): float
{
    if ($a === []) {
        return 0.0;
    }
    $propres = $a;
    foreach ($autres as $autre) {
        $propres = array_diff_key($propres, $autre);
    }
    return (float) (count($propres) / count($a));
}
```

- [ ] **Step 4: Lancer les tests**

Run: `php tools/tests/run.php Qa`
Expected: `9 test(s), 0 échec(s)`.

- [ ] **Step 5: Écrire `tools/qa/crawl.php`**

```php
<?php
// ============================================================
// tools/qa/crawl.php · Contrôle des pages listées par le sitemap (spec 8).
// Usage : php tools/qa/crawl.php <base> [--seuil=3200] [--max=N]
//         [--filtre=REGEX] [--pause=MS] [--strict]
// Bloquant : statut ≠ 200, JSON-LD ≠ 1 balise, type interdit, canonique
// ≠ URL, H1 ≠ 1, texte interdit, lien vers l'ancien domaine, lien WhatsApp
// invalide, fait d'identité contraire à la fiche. Avec --liens : tout lien
// interne qui ne répond pas 200. Avec --strict : aussi mots < seuil et
// longueurs de title (50-60) ou meta (140-155) hors bornes.
// ============================================================
declare(strict_types=1);

require __DIR__ . '/lib.php';

$base = 'https://richardsalanon.com';
$seuil = 3200;
$max = 0;
$filtre = '';
$pause = 500;
$strict = false;
$verifierLiens = false;
foreach (array_slice($argv, 1) as $arg) {
    if (str_starts_with($arg, '--seuil=')) { $seuil = (int) substr($arg, 8); }
    elseif (str_starts_with($arg, '--max=')) { $max = (int) substr($arg, 6); }
    elseif (str_starts_with($arg, '--filtre=')) { $filtre = substr($arg, 9); }
    elseif (str_starts_with($arg, '--pause=')) { $pause = (int) substr($arg, 8); }
    elseif ($arg === '--strict') { $strict = true; }
    elseif ($arg === '--liens') { $verifierLiens = true; }
    else { $base = rtrim($arg, '/'); }
}
$faits     = require dirname(__DIR__, 2) . '/portfolio/data/faits.php';
$tousLiens = [];
$statuts   = [];

$urls = qa_urls_sitemap($base, $pause);
if ($filtre !== '') {
    $urls = array_values(array_filter($urls, static fn(string $u): bool => preg_match('#' . $filtre . '#', $u) === 1));
}
if ($max > 0) {
    $urls = array_slice($urls, 0, $max);
}

$lignes = [];
$bloquantes = 0;
foreach ($urls as $url) {
    $r     = qa_get($url, $pause);
    $meta  = qa_meta($r['corps']);
    $json  = qa_jsonld($r['corps']);
    $texte = qa_texte_principal($r['corps']);
    $mots  = qa_compter_mots($texte);

    $bloquant = [];
    $avis     = [];
    if ($r['code'] !== 200) { $bloquant[] = 'statut ' . $r['code']; }
    if ($json['balises'] !== 1) { $bloquant[] = $json['balises'] . ' balises JSON-LD'; }
    foreach (array_intersect($json['types'], QA_TYPES_INTERDITS) as $type) { $bloquant[] = 'type interdit ' . $type; }
    foreach ($json['erreurs'] as $erreur) { $bloquant[] = $erreur; }
    if ($meta['canonical'] !== $url) { $bloquant[] = 'canonique ' . ($meta['canonical'] ?: 'absente'); }
    if ($meta['h1'] !== 1) { $bloquant[] = $meta['h1'] . ' H1'; }
    foreach (qa_texte_interdit($texte) as $p) { $bloquant[] = $p; }
    foreach (qa_faits_incoherents($texte, $faits) as $p) { $bloquant[] = $p; }
    $liens = qa_liens($r['corps'], $base);
    foreach ($liens['ancien_domaine'] as $l) { $bloquant[] = 'lien vers l\'ancien domaine ' . $l; }
    foreach ($liens['whatsapp_invalides'] as $l) { $bloquant[] = 'lien WhatsApp invalide ' . $l; }
    $tousLiens += array_fill_keys($liens['internes'], $url);
    $statuts[$url] = $r['code'];

    $lt = mb_strlen($meta['title']);
    $ld = mb_strlen($meta['description']);
    if ($mots < $seuil) { $avis[] = 'mots < ' . $seuil; }
    if ($lt < 50 || $lt > 60) { $avis[] = "title {$lt} car."; }
    if ($ld < 140 || $ld > 155) { $avis[] = "meta {$ld} car."; }
    if ($strict) { $bloquant = array_merge($bloquant, $avis); $avis = []; }

    $bloquantes += $bloquant ? 1 : 0;
    $lignes[] = ['url' => $url, 'mots' => $mots, 'bloquant' => $bloquant, 'avis' => $avis];
}

usort($lignes, static fn(array $a, array $b): int => $a['mots'] <=> $b['mots']);
foreach ($lignes as $l) {
    fwrite(STDOUT, sprintf("%-6s %6d  %s%s%s\n",
        $l['bloquant'] ? 'ECHEC' : 'ok', $l['mots'], $l['url'],
        $l['bloquant'] ? '  [' . implode(' ; ', $l['bloquant']) . ']' : '',
        $l['avis'] ? '  (' . implode(' ; ', $l['avis']) . ')' : ''));
}
$sousSeuil = count(array_filter($lignes, static fn(array $l): bool => $l['mots'] < $seuil));
fwrite(STDOUT, sprintf("\n%d page(s), %d en échec, %d sous %d mots\n", count($lignes), $bloquantes, $sousSeuil, $seuil));

$liensCasses = 0;
if ($verifierLiens) {
    foreach ($tousLiens as $lien => $source) {
        $code = $statuts[$lien] ?? qa_get($lien, $pause)['code'];
        if ($code !== 200) {
            $liensCasses++;
            fwrite(STDOUT, sprintf("LIEN   %d  %s  (depuis %s)\n", $code, $lien, $source));
        }
    }
    fwrite(STDOUT, sprintf("%d lien(s) interne(s) vérifié(s), %d ne répondent pas 200\n", count($tousLiens), $liensCasses));
}
exit($bloquantes + $liensCasses > 0 ? 1 : 0);
```

- [ ] **Step 6: Écrire `tools/qa/unicite.php`**

```php
<?php
// ============================================================
// tools/qa/unicite.php · Contrôle d'unicité d'un groupe de pages (spec 8).
// Usage : php tools/qa/unicite.php <base> --groupe=REGEX [--pause=MS]
// Échec si une page dépasse 40 % de ressemblance (Jaccard, bardeaux de
// 5 mots, lieux neutralisés) avec une autre page du groupe, ou si moins
// de 60 % de son texte lui est propre.
// ============================================================
declare(strict_types=1);

require __DIR__ . '/lib.php';

$base = 'https://richardsalanon.com';
$groupe = '';
$pause = 500;
foreach (array_slice($argv, 1) as $arg) {
    if (str_starts_with($arg, '--groupe=')) { $groupe = substr($arg, 9); }
    elseif (str_starts_with($arg, '--pause=')) { $pause = (int) substr($arg, 8); }
    else { $base = rtrim($arg, '/'); }
}
if ($groupe === '') {
    fwrite(STDERR, "Préciser --groupe=REGEX\n");
    exit(2);
}

$neutres = qa_noms_de_lieux();
$urls    = array_values(array_filter(qa_urls_sitemap($base, $pause), static fn(string $u): bool => preg_match('#' . $groupe . '#', $u) === 1));
$pages   = [];
foreach ($urls as $url) {
    $pages[$url] = qa_bardeaux(qa_texte_principal(qa_get($url, $pause)['corps']), 5, $neutres);
}

$echecs = 0;
foreach ($pages as $url => $bardeaux) {
    $autres = array_diff_key($pages, [$url => true]);
    $pire = 0.0;
    $voisine = '';
    foreach ($autres as $autreUrl => $autre) {
        $r = qa_ressemblance($bardeaux, $autre);
        if ($r > $pire) { $pire = $r; $voisine = $autreUrl; }
    }
    $propre = qa_part_propre($bardeaux, $autres);
    $ok = $pire <= 0.40 && $propre >= 0.60;
    $echecs += $ok ? 0 : 1;
    fwrite(STDOUT, sprintf("%-6s ressemblance max %4.0f %%  texte propre %4.0f %%  %s%s\n",
        $ok ? 'ok' : 'ECHEC', $pire * 100, $propre * 100, $url, $voisine !== '' ? '  (voisine : ' . $voisine . ')' : ''));
}
fwrite(STDOUT, sprintf("\n%d page(s), %d en échec\n", count($pages), $echecs));
exit($echecs > 0 ? 1 : 0);
```

- [ ] **Step 7: Vérifier les outils sur la production**

Run:
```bash
php -l tools/qa/crawl.php && php -l tools/qa/unicite.php
php tools/qa/crawl.php https://richardsalanon.com --max=5
php tools/qa/unicite.php https://richardsalanon.com --groupe=/externaliser-developpement-web-
```
Expected: le crawl liste 5 pages avec leur nombre de mots ; avant déploiement de la vague 0A, elles sont en ECHEC sur « 4 balises JSON-LD » ou similaire (accueil) : l'outil fonctionne. L'unicité des 8 pages `externaliser-*` sort en ECHEC (ressemblance ≈ 59 % relevée par l'audit) : c'est attendu, ces pages sont fusionnées en vague 0C.

- [ ] **Step 8: Commit**

```bash
git add tools/qa/lib.php tools/qa/crawl.php tools/qa/unicite.php tools/tests/QaTest.php
git commit -m "Outils de controle qualite : analyse des pages, crawl du sitemap, unicite" -m "Mots dans main, meta, JSON-LD, textes interdits, ressemblance par bardeaux avec lieux neutralises (spec 8)." -m "Co-Authored-By: Claude Opus 5.5 <noreply@anthropic.com>"
```

### Task 15: Base locale complète (facultative, dès que Richard fournit l'export)

Aucune tâche de ce plan n'en dépend : les tests tournent sans base. Elle devient nécessaire
en vague 0B pour voir chaque page refaite en local avant déploiement.

**Files:**
- Modify (hors dépôt, par Richard) : `.env` local

- [ ] **Step 1: Export par Richard**

Richard ouvre hPanel, Bases de données, phpMyAdmin sur la base de `richardsalanon.com`,
onglet « Exporter », méthode rapide, format SQL, et enregistre le fichier dans
`C:\Users\FRATERNEL PLOMBERIE\Downloads\richard-prod.sql`. Le fichier ne doit jamais
entrer dans le dépôt.

- [ ] **Step 2: Import dans MySQL local**

```bash
/c/xampp/mysql/bin/mysql -u root -e "CREATE DATABASE IF NOT EXISTS richard_local CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"
/c/xampp/mysql/bin/mysql -u root richard_local < "/c/Users/FRATERNEL PLOMBERIE/Downloads/richard-prod.sql"
/c/xampp/mysql/bin/mysql -u root richard_local -e "SELECT COUNT(*) AS articles FROM blog_posts; SELECT COUNT(*) AS services FROM services;"
```
Expected: deux comptes non nuls (environ 24 articles, 17 services).

- [ ] **Step 3: Pointer le `.env` local sur cette base (par Richard)**

Richard copie d'abord son fichier : `cp .env .env.sauvegarde-2026-10-03`, puis met dans `.env`
local : `DB_HOST=localhost`, `DB_NAME=richard_local`, `DB_USER=root`, `DB_PASS=` (vide).
Les autres lignes ne changent pas. Le `.env` de production n'est jamais touché.

- [ ] **Step 4: Vérifier le rendu local**

Run:
```bash
curl -s -o /dev/null -w "%{http_code}\n" http://localhost:8081/
php tools/qa/crawl.php http://localhost:8081 --max=20 --pause=0
```
Expected: `200`, puis 20 pages analysées sans « statut 500 ».

### Task 16: Déploiement et vérification en production

**Files:** aucun nouveau fichier ; mise à jour de la mémoire du projet.

- [ ] **Step 1: Suite complète en local**

Run: `php tools/tests/run.php`
Expected: tous les tests passent (environ 60), `0 échec(s)`.

- [ ] **Step 2: Vérifier qu'aucune lecture de sitemap n'est attendue**

Demander à Richard si une lecture de sitemap est en attente dans Search Console. Si oui, attendre qu'elle soit faite avant de pousser (chaque déploiement réécrit `.htaccess` et régénère le sitemap).

- [ ] **Step 3: Pousser et suivre le déploiement**

```bash
git push origin main
GH_TOKEN=$(gh auth token --user Richard6141) gh run watch --repo Richard6141/richard-portfolio --exit-status
```
Expected: workflow « Deploiement production » vert ; l'étape « Controle de fumee » affiche `0 échec(s)`.

- [ ] **Step 4: Contrôles en production**

Run:
```bash
php tools/qa/smoke.php https://richardsalanon.com
php tools/qa/crawl.php https://richardsalanon.com --pause=800 --liens > "/c/Users/FRATER~1/AppData/Local/Temp/crawl-vague0a.txt"; tail -5 "/c/Users/FRATER~1/AppData/Local/Temp/crawl-vague0a.txt"
curl -s https://richardsalanon.com/llms.txt | head -20
```
Expected : contrôle de fumée `0 échec(s)` ; crawl sans aucune ligne en échec pour « statut », « balises JSON-LD », « type interdit », « canonique », « H1 », « ancien domaine », « WhatsApp » ou « ancienne marque », et aucun lien interne en 404. Les échecs « sans accent : … » éventuels sont relevés dans le rapport de fin de tâche pour la vague 1 (le contenu est réécrit) ; s'ils touchent un gabarit partagé, les corriger ici, relancer le crawl, puis commit.

- [ ] **Step 5: Validation externe du schéma**

Ouvrir dans le panneau navigateur `https://validator.schema.org/#url=https%3A%2F%2Frichardsalanon.com%2F` puis la même chose pour `/a-propos/` et une page service.
Expected: aucune erreur ; Person, WebSite, ProfessionalService présents ; FAQPage sur l'accueil.

- [ ] **Step 6: Actions Search Console pour Richard**

Transmettre à Richard :
1. Inspecter `https://www.richardsalanon.com/` : l'outil doit indiquer une redirection vers `https://richardsalanon.com/`.
2. Sitemaps : renvoyer `https://richardsalanon.com/sitemap.xml`.
3. Demander l'indexation de l'accueil et de `/a-propos/`.
4. Paramètres, Statistiques d'exploration : relever la part de réponses 403 et 429 sur les 7 derniers jours (défi du CDN Hostinger vu pendant l'audit).

- [ ] **Step 7: Mettre à jour la mémoire du projet**

Dans `C:\Users\FRATERNEL PLOMBERIE\.claude\projects\C--xampp-htdocs-Richard-portfolio\memory\project_richard_portfolio.md`, ajouter en tête une section datée du jour du déploiement, titrée « vague 0A déployée », qui résume : `SITE_URL` remplace `HTTP_HOST`, fiche de faits `portfolio/data/faits.php`, graphe `helpers/schema.php`, robots statique, llms généré, sitemap résilient, outils `tools/tests` et `tools/qa`, Apache local sur le port 8081.

---

## Hors périmètre de 0A (traité ensuite)

| Point de la spec | Où |
|---|---|
| Fusion des 47 pages clones en 301 (6.8) | 0C : les pages cibles (matrice, formations) doivent exister avant la redirection. |
| Title, meta et H1 de l'accueil alignés sur la fiche de faits ; H1 qui déborde sur mobile ; `width`/`height` des 252 images | 0B : l'accueil est reconstruit. |
| Maillage généré depuis les registres, pied de page sans les 143 liens de villes (spec 9) | 0B (coque) et 0C (registres). |
| Page auteur `/richard-salanon` (5.2) | 0C pour le gabarit, vague 1 pour le texte. |
| Fil d'Ariane des formations sous « Zones desservies » | 0C : nouvelles fiches `/formations/{slug}`. |
| Contrôle `prix` (devise selon le pays) | 0C, avec les fiches pays. |
| Blog mince, dates `dateModified` | Vague 1 (réécriture à 3 200 mots). |
