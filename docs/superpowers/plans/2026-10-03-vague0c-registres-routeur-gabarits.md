# Vague 0C : registres, routeur, gabarits, contrôles — Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Figer les formats de données de toutes les pages de la refonte et livrer le routeur, les gabarits, le sitemap, le llms.txt, les pages légales et les contrôles qualité qui les servent, plus un premier lot de comparatifs sourcés publiés.

**Architecture:** Un fichier de données = une page (`portfolio/data/{dossier}/{slug}.php`), chargé par `helpers/registres.php` qui déduit type, slug et URL du chemin. Un routeur pur (`route_resoudre()`) résout l'URL vers une page publiée (date `publie` atteinte) ; une table de redirections unique (`data/redirections.php`) n'est active que lorsque sa cible est publiée. Un gabarit unique (`portfolio/registre.php`) rend toute page de registre sur le squelette pv2 existant, avec schéma, fil d'Ariane et maillage calculés par type.

**Tech Stack:** PHP 8 (XAMPP 8.4 en local, Hostinger en production), CSS et JS natifs, harnais de tests maison `php tools/tests/run.php`, Apache local `http://localhost:8081` sans base.

**Spec:** `docs/superpowers/specs/2026-10-03-refonte-globale-design.md` (sections 5.3, 5.5, 6.1 à 6.8, 7, 8, 9). Références : `2026-10-03-refonte-references.md`. Réponses de Richard : `docs/questionnaire-refonte.md` (les 60 formations cochées, les 37 publics formés ou formables, aucun tarif fixé, donc « sur devis »).

## Global Constraints

- Texte du site en français accentué ; jamais de tiret cadratin (U+2014) ni de flèche (U+2192) ; aucun chiffre, avis, client ou certification inventé.
- Un seul `<script type="application/ld+json">` par page, un `@graph` ; types interdits : `AggregateRating`, `Review`, `Rating`, `LocalBusiness` (spec 5.3).
- Toute URL absolue depuis `SITE_URL`, jamais `HTTP_HOST`. Marque unique « Richard SALANON », faits lus par `fait()` / `faits()`.
- Une page de registre est servie seulement si `publie` (AAAA-MM-JJ) est atteinte ; sinon 404 franc, absente du sitemap, de llms.txt et du maillage (spec 11.3).
- Règle des 3 200 mots pour toute page servie en `index` (spec 7.2) ; exceptions servies en `noindex, follow` : mentions légales, confidentialité.
- Title 50 à 60 caractères, meta 140 à 155, uniques ; un seul H1 (spec 5.5 et 8).
- Une redirection n'est active que le jour où sa cible est publiée ; jamais de chaîne ; table unique lue par le routeur, pas `.htaccess` (spec 6.8).
- Pages sans base : servies sans erreur fatale (règle des vagues 0A et 0B). Ne jamais modifier `prudence/`, `config/constants.php`, `dashboard/`, `auth/`, `api/`, `vendor/`.
- Les règles des vagues 0A et 0B restent vraies (tests verts, `SITE_URL`, un seul JSON-LD, rien de caché sans JavaScript).
- Comparatifs : critères publiés, jamais de classement où Richard se met premier ; chaque fait externe sourcé (URL + date de consultation) ; textes jamais copiés (spec 6.7).

## Review Focus

1. Fichier de données mal formé (clé manquante, bloc inconnu, date invalide) : la page répond 404 et l'erreur est journalisée, le site ne tombe pas ; le test des données réelles échoue avant le commit (Task 1).
2. URL fabriquée par un visiteur (`/services/../config`, majuscules, barre finale, segment de trop) : 404 franc, jamais d'inclusion de fichier hors des dossiers de registres (Task 6).
3. Page à date de publication future : 404, absente du sitemap, de llms.txt, des menus et des liens de maillage, et une redirection qui la vise reste inactive (Tasks 4, 6, 7, 8).
4. Ancienne URL redirigée vers une cible publiée : un seul saut 301 vers l'URL finale, et les liens internes du site pointent déjà vers l'URL finale (Task 7).
5. Page de registre affichée sans base de données et sans JavaScript : contenu complet, FAQ en `<details>`, sommaire en liens d'ancre (Task 5).

## Structure des fichiers

| Fichier | Rôle |
|---|---|
| `portfolio/data/pays-liste.php` | Les 34 pays (slug, nom, locution « au Bénin », tranche, devise, région, 3 voisins). |
| `helpers/registres.php` | Types de pages, lecture, validation, publication, listes. |
| `helpers/routes.php` | `route_resoudre()` : URL vers page de registre. |
| `helpers/redirections.php` + `portfolio/data/redirections.php` | Table 6.8, cible active, URL finale, application. |
| `helpers/maillage.php` | Fil d'Ariane et liens obligatoires (spec 9). |
| `helpers/schema.php` (modifié) | `schema_fil_ariane()`, `schema_page_registre()`. |
| `portfolio/registre.php` | Gabarit unique des pages de registre. |
| `portfolio/registre-hub.php` | Gabarit des hubs (`/histoires/`, `/comparatifs/`...). |
| `portfolio/partials/registre/*.php`, `portfolio/partials/boite-auteur.php` | Hero, sommaire, liens liés, boîte auteur. |
| `portfolio/partials/blocs/programme.php`, `galerie.php` | Deux blocs manquants de la spec 7.3. |
| `portfolio/data/pages/mentions-legales.php`, `confidentialite.php` | Pages légales. |
| `portfolio/data/comparatifs/*.php`, `portfolio/data/hubs/comparatifs.php` | Premier lot de comparatifs. |
| `tools/qa/registres.php` | Contrôles de la section 8 sur les pages de registre. |
| `tools/tests/fixtures/registres/` | Données de test (jamais servies). |

Ordre d'exécution : 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13.

---

### Task 1: Liste des pays et noyau des registres

**Files:**
- Create: `portfolio/data/pays-liste.php`, `helpers/registres.php`
- Create: `tools/tests/fixtures/registres/` (voir étape 1)
- Test: `tools/tests/RegistresTest.php`

**Interfaces:**
- Produces: `pays_liste(): array` (slug => ['nom','dans','tranche','devise','region','voisins']) ; `REGISTRES_RACINE` ; `REGISTRES_TYPES` ; `registre_lire(string $type, string $slug, string $racine = REGISTRES_RACINE): ?array` ; `registre_tous(string $type, string $racine = REGISTRES_RACINE): array` (slug => page valide) ; `registre_valider(string $type, string $slug, array $p): array` (liste d'erreurs) ; `registre_publiee(array $p, ?string $aujourdhui = null): bool` ; `registre_publiees(string $type, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): array` ; `registre_url(string $type, string $slug): string`. Chaque page lue reçoit `type`, `slug`, `url`.

- [ ] **Step 1 : fixtures et tests**

Une fixture par cas, sous `tools/tests/fixtures/registres/`, toutes construites sur le même modèle minimal valide :

```php
<?php // tools/tests/fixtures/registres/services/site-test.php
return [
    'titre'    => 'Création de site test',
    'title'    => 'Création de site test à Cotonou | Richard SALANON',
    'meta'     => 'Page de test du registre des services : elle sert uniquement aux tests automatiques et n\'est jamais servie sur le site public de Richard.',
    'en_bref'  => 'Page de test.',
    'publie'   => '2026-01-01',
    'maj'      => '2026-01-02',
    'famille'  => 'Sites et boutiques',
    'matrice'  => true,
    'sections' => [['type' => 'prose', 'titre' => 'Pourquoi ce test ?', 'paragraphes' => ['Texte de test.']]],
    'faq'      => [['q' => 'Question de test ?', 'r' => 'Réponse de test.']],
    'sources'  => [['titre' => 'Source de test', 'url' => 'https://example.org/', 'date' => '2026-01-01']],
    'liens'    => ['formations' => ['ia-test'], 'histoires' => ['histoire-test']],
];
```

Fichiers à créer sur ce modèle (champs propres au type ajoutés) :
`services/site-test.php` ; `services/site-test/benin.php` et `services/site-test/togo.php` (sans `famille` ni `matrice`) ; `services/site-futur.php` (`publie` `2099-01-01`) ; `services/site-casse.php` (sans `meta`) ; `formations/ia-test.php` (+ `'domaine' => 'intelligence-artificielle', 'forte' => true, 'duree' => '1 jour', 'formats' => ['intra', 'distance'], 'programme' => [['titre' => 'Jour 1', 'points' => ['Point.']]], 'prix' => null`) ; `histoires/histoire-test.php` (+ `'relation' => 'sous-traitance', 'client' => 'Client test'`) ; `histoires/histoire-autre.php` (idem) ; `comparatifs/a-vs-b.php` ; `pays/benin.php` (+ `'fiche' => ['capitale' => ['v' => 'Porto-Novo', 'source' => 'https://example.org/', 'date' => '2026-01-01']]`) ; `pages/page-test.php` (+ `'schema' => 'WebPage'`) ; `hubs/histoires.php` (+ `'liste' => 'histoire'`) ; `glossaire/terme-test.php` (+ `'terme' => 'Terme', 'definition' => 'Définition courte.'`).

```php
<?php // tools/tests/RegistresTest.php
declare(strict_types=1);

require_once racine('helpers/functions.php');
require_once racine('helpers/registres.php');

function fixtures(): string { return racine('tools/tests/fixtures/registres'); }

function test_registres_pays_liste_egale_la_fiche_de_faits(): void
{
    $liste = pays_liste();
    assert_same(34, count($liste));
    assert_same(fait('zones'), array_column(array_values($liste), 'nom'));
    foreach ($liste as $slug => $p) {
        assert_true((bool) preg_match('/^[a-z0-9-]+$/', $slug), $slug);
        assert_true(in_array($p['tranche'], [1, 2, 3, 4, 5], true), $slug);
        assert_same(3, count($p['voisins']), $slug);
        foreach ($p['voisins'] as $v) { assert_true(isset($liste[$v]), "{$slug} : voisin inconnu {$v}"); }
        assert_true((bool) preg_match('/^(au|aux|en|à) /u', $p['dans']), $slug);
    }
    assert_same('au Bénin', $liste['benin']['dans']);
}

function test_registres_lecture_injecte_type_slug_url(): void
{
    $p = registre_lire('service-pays', 'site-test/benin', fixtures());
    assert_same('service-pays', $p['type']);
    assert_same('site-test/benin', $p['slug']);
    assert_same('/services/site-test/benin', $p['url']);
}

function test_registres_fichier_casse_ignore_et_journalise(): void
{
    assert_same(null, registre_lire('service', 'site-casse', fixtures()));
    assert_true(!isset(registre_tous('service', fixtures())['site-casse']));
    assert_contains('meta', implode(' ', registre_valider('service', 'site-casse', require fixtures() . '/services/site-casse.php')));
}

function test_registres_slug_hostile_refuse(): void
{
    foreach (['../faits', 'site-test/../../x', 'Site-Test', 'site test', '', 'a/b/c'] as $slug) {
        assert_same(null, registre_lire('service-pays', $slug, fixtures()), $slug);
    }
}

function test_registres_publication_selon_la_date(): void
{
    $futur = registre_lire('service', 'site-futur', fixtures());
    assert_true(!registre_publiee($futur, '2026-10-03'));
    assert_true(registre_publiee($futur, '2099-01-01'));
    assert_true(!registre_publiee(['publie' => null], '2026-10-03'));
    assert_same(['site-test'], array_keys(registre_publiees('service', fixtures(), '2026-10-03')));
}

function test_registres_validation_des_champs_de_type(): void
{
    $base = require fixtures() . '/services/site-test.php';
    assert_same([], registre_valider('service', 'site-test', $base));
    assert_contains('famille', implode(' ', registre_valider('service', 'x', array_diff_key($base, ['famille' => 1]))));
    assert_contains('bloc', implode(' ', registre_valider('service', 'x', ['sections' => [['type' => 'inconnu']]] + $base)));
    assert_contains('publie', implode(' ', registre_valider('service', 'x', ['publie' => '03/10/2026'] + $base)));
    assert_contains('pays', implode(' ', registre_valider('service-pays', 'site-test/atlantide', $base)));
    assert_contains('slug réservé', implode(' ', registre_valider('formation', 'domaine', $base)));
}

function test_registres_donnees_reelles_toutes_valides(): void
{
    // Garde-fou de publication : un fichier mal formé fait échouer la suite avant le commit.
    $erreurs = [];
    foreach (array_keys(REGISTRES_TYPES) as $type) {
        foreach (registre_fichiers($type) as $slug => $chemin) {
            foreach (registre_valider($type, $slug, require $chemin) as $e) { $erreurs[] = "{$type}/{$slug} : {$e}"; }
        }
    }
    assert_same([], $erreurs);
}
```

- [ ] **Step 2 : lancer, constater l'échec**

Run: `php tools/tests/run.php Registres`
Expected: FAIL, « Call to undefined function pays_liste() ».

- [ ] **Step 3 : `portfolio/data/pays-liste.php`**

Ordre et noms identiques à `fait('zones')` (même ordre que la spec 6.4).

```php
<?php
// ============================================================
// data/pays-liste.php · Les 34 pays servis (spec 6.4), vague 0C.
// « dans » : locution prête à l'emploi (« au Bénin »). « voisins » : trois pays
// proches, pour le maillage « même service dans 3 pays voisins » (spec 9).
// Les fiches sourcées (spec 6.5) vivent dans data/pays/{slug}.php.
// ============================================================
declare(strict_types=1);

$ao = 'Afrique de l\'Ouest'; $ac = 'Afrique centrale'; $an = 'Afrique du Nord';
$ae = 'Afrique de l\'Est'; $oi = 'Océan Indien'; $eu = 'Europe'; $am = 'Amérique du Nord';

return [
    'benin'                => ['nom' => 'Bénin', 'dans' => 'au Bénin', 'tranche' => 1, 'devise' => 'XOF', 'region' => $ao, 'voisins' => ['togo', 'niger', 'burkina-faso']],
    'cote-d-ivoire'        => ['nom' => 'Côte d\'Ivoire', 'dans' => 'en Côte d\'Ivoire', 'tranche' => 1, 'devise' => 'XOF', 'region' => $ao, 'voisins' => ['burkina-faso', 'mali', 'guinee']],
    'senegal'              => ['nom' => 'Sénégal', 'dans' => 'au Sénégal', 'tranche' => 1, 'devise' => 'XOF', 'region' => $ao, 'voisins' => ['mauritanie', 'mali', 'guinee']],
    'togo'                 => ['nom' => 'Togo', 'dans' => 'au Togo', 'tranche' => 1, 'devise' => 'XOF', 'region' => $ao, 'voisins' => ['benin', 'burkina-faso', 'cote-d-ivoire']],
    'cameroun'             => ['nom' => 'Cameroun', 'dans' => 'au Cameroun', 'tranche' => 1, 'devise' => 'XAF', 'region' => $ac, 'voisins' => ['gabon', 'tchad', 'centrafrique']],
    'burkina-faso'         => ['nom' => 'Burkina Faso', 'dans' => 'au Burkina Faso', 'tranche' => 2, 'devise' => 'XOF', 'region' => $ao, 'voisins' => ['mali', 'niger', 'cote-d-ivoire']],
    'mali'                 => ['nom' => 'Mali', 'dans' => 'au Mali', 'tranche' => 2, 'devise' => 'XOF', 'region' => $ao, 'voisins' => ['senegal', 'burkina-faso', 'niger']],
    'niger'                => ['nom' => 'Niger', 'dans' => 'au Niger', 'tranche' => 2, 'devise' => 'XOF', 'region' => $ao, 'voisins' => ['benin', 'burkina-faso', 'tchad']],
    'guinee'               => ['nom' => 'Guinée', 'dans' => 'en Guinée', 'tranche' => 2, 'devise' => 'GNF', 'region' => $ao, 'voisins' => ['senegal', 'mali', 'cote-d-ivoire']],
    'gabon'                => ['nom' => 'Gabon', 'dans' => 'au Gabon', 'tranche' => 2, 'devise' => 'XAF', 'region' => $ac, 'voisins' => ['cameroun', 'congo-brazzaville', 'guinee-equatoriale']],
    'congo-brazzaville'    => ['nom' => 'Congo-Brazzaville', 'dans' => 'au Congo-Brazzaville', 'tranche' => 2, 'devise' => 'XAF', 'region' => $ac, 'voisins' => ['gabon', 'rd-congo', 'cameroun']],
    'rd-congo'             => ['nom' => 'RD Congo', 'dans' => 'en RD Congo', 'tranche' => 2, 'devise' => 'CDF', 'region' => $ac, 'voisins' => ['congo-brazzaville', 'rwanda', 'burundi']],
    'france'               => ['nom' => 'France', 'dans' => 'en France', 'tranche' => 3, 'devise' => 'EUR', 'region' => $eu, 'voisins' => ['belgique', 'suisse', 'luxembourg']],
    'belgique'             => ['nom' => 'Belgique', 'dans' => 'en Belgique', 'tranche' => 3, 'devise' => 'EUR', 'region' => $eu, 'voisins' => ['france', 'luxembourg', 'suisse']],
    'suisse'               => ['nom' => 'Suisse', 'dans' => 'en Suisse', 'tranche' => 3, 'devise' => 'CHF', 'region' => $eu, 'voisins' => ['france', 'belgique', 'luxembourg']],
    'canada'               => ['nom' => 'Canada', 'dans' => 'au Canada', 'tranche' => 3, 'devise' => 'CAD', 'region' => $am, 'voisins' => ['france', 'belgique', 'suisse']],
    'luxembourg'           => ['nom' => 'Luxembourg', 'dans' => 'au Luxembourg', 'tranche' => 3, 'devise' => 'EUR', 'region' => $eu, 'voisins' => ['belgique', 'france', 'suisse']],
    'monaco'               => ['nom' => 'Monaco', 'dans' => 'à Monaco', 'tranche' => 3, 'devise' => 'EUR', 'region' => $eu, 'voisins' => ['france', 'suisse', 'belgique']],
    'maroc'                => ['nom' => 'Maroc', 'dans' => 'au Maroc', 'tranche' => 4, 'devise' => 'MAD', 'region' => $an, 'voisins' => ['algerie', 'tunisie', 'mauritanie']],
    'tunisie'              => ['nom' => 'Tunisie', 'dans' => 'en Tunisie', 'tranche' => 4, 'devise' => 'TND', 'region' => $an, 'voisins' => ['algerie', 'maroc', 'france']],
    'algerie'              => ['nom' => 'Algérie', 'dans' => 'en Algérie', 'tranche' => 4, 'devise' => 'DZD', 'region' => $an, 'voisins' => ['maroc', 'tunisie', 'mauritanie']],
    'madagascar'           => ['nom' => 'Madagascar', 'dans' => 'à Madagascar', 'tranche' => 4, 'devise' => 'MGA', 'region' => $oi, 'voisins' => ['maurice', 'comores', 'seychelles']],
    'mauritanie'           => ['nom' => 'Mauritanie', 'dans' => 'en Mauritanie', 'tranche' => 4, 'devise' => 'MRU', 'region' => $ao, 'voisins' => ['senegal', 'mali', 'maroc']],
    'tchad'                => ['nom' => 'Tchad', 'dans' => 'au Tchad', 'tranche' => 4, 'devise' => 'XAF', 'region' => $ac, 'voisins' => ['cameroun', 'niger', 'centrafrique']],
    'centrafrique'         => ['nom' => 'Centrafrique', 'dans' => 'en Centrafrique', 'tranche' => 4, 'devise' => 'XAF', 'region' => $ac, 'voisins' => ['cameroun', 'tchad', 'rd-congo']],
    'rwanda'               => ['nom' => 'Rwanda', 'dans' => 'au Rwanda', 'tranche' => 5, 'devise' => 'RWF', 'region' => $ae, 'voisins' => ['burundi', 'rd-congo', 'congo-brazzaville']],
    'burundi'              => ['nom' => 'Burundi', 'dans' => 'au Burundi', 'tranche' => 5, 'devise' => 'BIF', 'region' => $ae, 'voisins' => ['rwanda', 'rd-congo', 'centrafrique']],
    'djibouti'             => ['nom' => 'Djibouti', 'dans' => 'à Djibouti', 'tranche' => 5, 'devise' => 'DJF', 'region' => $ae, 'voisins' => ['rwanda', 'burundi', 'comores']],
    'comores'              => ['nom' => 'Comores', 'dans' => 'aux Comores', 'tranche' => 5, 'devise' => 'KMF', 'region' => $oi, 'voisins' => ['madagascar', 'maurice', 'seychelles']],
    'maurice'              => ['nom' => 'Maurice', 'dans' => 'à Maurice', 'tranche' => 5, 'devise' => 'MUR', 'region' => $oi, 'voisins' => ['madagascar', 'seychelles', 'comores']],
    'seychelles'           => ['nom' => 'Seychelles', 'dans' => 'aux Seychelles', 'tranche' => 5, 'devise' => 'SCR', 'region' => $oi, 'voisins' => ['maurice', 'madagascar', 'comores']],
    'guinee-equatoriale'   => ['nom' => 'Guinée équatoriale', 'dans' => 'en Guinée équatoriale', 'tranche' => 5, 'devise' => 'XAF', 'region' => $ac, 'voisins' => ['gabon', 'cameroun', 'sao-tome-et-principe']],
    'cap-vert'             => ['nom' => 'Cap-Vert', 'dans' => 'au Cap-Vert', 'tranche' => 5, 'devise' => 'CVE', 'region' => $ao, 'voisins' => ['senegal', 'mauritanie', 'guinee']],
    'sao-tome-et-principe' => ['nom' => 'São Tomé-et-Príncipe', 'dans' => 'à São Tomé-et-Príncipe', 'tranche' => 5, 'devise' => 'STN', 'region' => $ac, 'voisins' => ['gabon', 'guinee-equatoriale', 'cameroun']],
];
```

- [ ] **Step 4 : `helpers/registres.php`**

```php
<?php
// ============================================================
// helpers/registres.php · Registres de contenu (spec 7.1), vague 0C.
// Un fichier = une page. Le chemin donne le type et le slug, le type donne l'URL.
// Une page n'est servie que si sa date « publie » est atteinte (spec 11.3).
// ============================================================
declare(strict_types=1);

require_once __DIR__ . '/blocs.php';

const REGISTRES_RACINE = __DIR__ . '/../portfolio/data';

/** type => [dossier, profondeur (1 = slug, 2 = parent/pays), motif d'URL]. */
const REGISTRES_TYPES = [
    'page'           => ['pages', 1, '/%s'],
    'service'        => ['services', 1, '/services/%s'],
    'service-pays'   => ['services', 2, '/services/%s'],
    'pays'           => ['pays', 1, '/zones/%s'],
    'formation'      => ['formations', 1, '/formations/%s'],
    'formation-pays' => ['formations', 2, '/formations/%s'],
    'domaine'        => ['domaines', 1, '/formations/domaine/%s'],
    'metier'         => ['metiers', 1, '/formations/metier/%s'],
    'metier-pays'    => ['metiers', 2, '/formations/metier/%s'],
    'secteur'        => ['secteurs', 1, '/secteurs/%s'],
    'histoire'       => ['histoires', 1, '/histoires/%s'],
    'comparatif'     => ['comparatifs', 1, '/comparatifs/%s'],
    'guide'          => ['guides', 1, '/guides/%s'],
    'terme'          => ['glossaire', 1, '/glossaire/%s'],
    'outil'          => ['outils', 1, '/outils/%s'],
    'hub'            => ['hubs', 1, '/%s/'],
];

const REGISTRES_CHAMPS = ['titre', 'title', 'meta', 'en_bref', 'publie', 'maj', 'sections', 'faq', 'sources', 'liens'];

const REGISTRES_CHAMPS_TYPE = [
    'page'      => ['schema'],
    'service'   => ['famille', 'matrice'],
    'pays'      => ['fiche'],
    'formation' => ['domaine', 'forte', 'duree', 'formats', 'programme', 'prix'],
    'metier'    => ['univers', 'prioritaire'],
    'histoire'  => ['relation', 'client'],
    'terme'     => ['terme', 'definition'],
    'hub'       => ['liste'],
];

/** Domaines de formation (spec 6.3). */
const REGISTRES_DOMAINES = ['intelligence-artificielle', 'automatisation', 'developpement', 'erp-gestion', 'marketing-visibilite', 'cybersecurite-it', 'transformation-digitale', 'ia-systemes-existants'];

/** Les 34 pays, chargés une fois. */
function pays_liste(): array
{
    static $liste = null;
    return $liste ??= require __DIR__ . '/../portfolio/data/pays-liste.php';
}

function registre_url(string $type, string $slug): string
{
    return sprintf(REGISTRES_TYPES[$type][2], $slug);
}

/** Chemin du fichier d'une page, ou null si le slug n'a pas la forme attendue (aucune traversée possible). */
function registre_chemin(string $type, string $slug, string $racine = REGISTRES_RACINE): ?string
{
    if (!isset(REGISTRES_TYPES[$type])) {
        return null;
    }
    [$dossier, $profondeur] = REGISTRES_TYPES[$type];
    $motif = $profondeur === 2 ? '#^[a-z0-9-]+/[a-z0-9-]+$#' : '#^[a-z0-9-]+$#';
    if (!preg_match($motif, $slug) || str_starts_with(basename($slug), '_')) {
        return null;
    }
    return $racine . '/' . $dossier . '/' . $slug . '.php';
}

/** slug => chemin de toutes les pages d'un type (fichiers commençant par « _ » exclus). */
function registre_fichiers(string $type, string $racine = REGISTRES_RACINE): array
{
    [$dossier, $profondeur] = REGISTRES_TYPES[$type];
    $motif = $racine . '/' . $dossier . ($profondeur === 2 ? '/*/*.php' : '/*.php');
    $fichiers = [];
    foreach (glob($motif) ?: [] as $chemin) {
        $slug = $profondeur === 2 ? basename(dirname($chemin)) . '/' . basename($chemin, '.php') : basename($chemin, '.php');
        if (registre_chemin($type, $slug, $racine) !== null) {
            $fichiers[$slug] = $chemin;
        }
    }
    ksort($fichiers);
    return $fichiers;
}

/** Erreurs de structure d'une page (liste vide si valide). */
function registre_valider(string $type, string $slug, array $p): array
{
    $e = [];
    foreach (array_merge(REGISTRES_CHAMPS, REGISTRES_CHAMPS_TYPE[$type] ?? []) as $champ) {
        if (!array_key_exists($champ, $p)) {
            $e[] = "champ manquant : {$champ}";
        }
    }
    if (array_key_exists('publie', $p) && $p['publie'] !== null && !preg_match('/^\d{4}-\d{2}-\d{2}$/', (string) $p['publie'])) {
        $e[] = 'publie : date AAAA-MM-JJ ou null attendue';
    }
    if (isset($p['maj']) && !preg_match('/^\d{4}-\d{2}-\d{2}$/', (string) $p['maj'])) {
        $e[] = 'maj : date AAAA-MM-JJ attendue';
    }
    foreach ((array) ($p['sections'] ?? []) as $i => $b) {
        if (!in_array($b['type'] ?? '', BLOCS_TYPES, true)) {
            $e[] = "sections[{$i}] : bloc inconnu « " . ($b['type'] ?? '') . ' »';
        }
    }
    foreach ((array) ($p['faq'] ?? []) as $i => $q) {
        if (empty($q['q']) || empty($q['r'])) {
            $e[] = "faq[{$i}] : q et r attendus";
        }
    }
    foreach ((array) ($p['sources'] ?? []) as $i => $s) {
        if (empty($s['titre']) || !preg_match('#^https://#', (string) ($s['url'] ?? '')) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', (string) ($s['date'] ?? ''))) {
            $e[] = "sources[{$i}] : titre, url https et date attendus";
        }
    }
    if (str_ends_with($type, '-pays') && !isset(pays_liste()[basename($slug)])) {
        $e[] = 'pays inconnu : ' . basename($slug);
    }
    if ($type === 'formation' && in_array($slug, ['domaine', 'metier'], true)) {
        $e[] = "slug réservé : {$slug}";
    }
    if ($type === 'formation' && isset($p['domaine']) && !in_array($p['domaine'], REGISTRES_DOMAINES, true)) {
        $e[] = 'domaine inconnu : ' . $p['domaine'];
    }
    if ($type === 'histoire' && isset($p['relation']) && !in_array($p['relation'], ['direct', 'sous-traitance', 'produit', 'externe'], true)) {
        $e[] = 'relation : direct, sous-traitance, produit ou externe';
    }
    if ($type === 'page' && isset($p['schema']) && !in_array($p['schema'], ['WebPage', 'AboutPage', 'ProfilePage', 'ContactPage'], true)) {
        $e[] = 'schema : WebPage, AboutPage, ProfilePage ou ContactPage';
    }
    if (isset($p['robots']) && !in_array($p['robots'], ['index', 'noindex'], true)) {
        $e[] = 'robots : index ou noindex';
    }
    return $e;
}

/** Une page valide avec type, slug et url, ou null (absente, slug invalide, données invalides). */
function registre_lire(string $type, string $slug, string $racine = REGISTRES_RACINE): ?array
{
    $chemin = registre_chemin($type, $slug, $racine);
    if ($chemin === null || !is_file($chemin)) {
        return null;
    }
    $p = require $chemin;
    if (!is_array($p)) {
        return null;
    }
    $erreurs = registre_valider($type, $slug, $p);
    if ($erreurs) {
        error_log("registre {$type}/{$slug} invalide : " . implode(' ; ', $erreurs));
        return null;
    }
    return ['type' => $type, 'slug' => $slug, 'url' => registre_url($type, $slug)] + $p + ['robots' => 'index'];
}

/** slug => page de toutes les pages valides d'un type (cache par requête). */
function registre_tous(string $type, string $racine = REGISTRES_RACINE): array
{
    static $cache = [];
    $cle = $racine . '|' . $type;
    if (!isset($cache[$cle])) {
        $cache[$cle] = [];
        foreach (array_keys(registre_fichiers($type, $racine)) as $slug) {
            if (($p = registre_lire($type, $slug, $racine)) !== null) {
                $cache[$cle][$slug] = $p;
            }
        }
    }
    return $cache[$cle];
}

function registre_publiee(array $p, ?string $aujourdhui = null): bool
{
    $publie = $p['publie'] ?? null;
    return is_string($publie) && $publie <= ($aujourdhui ?? date('Y-m-d'));
}

function registre_publiees(string $type, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): array
{
    return array_filter(registre_tous($type, $racine), static fn(array $p): bool => registre_publiee($p, $aujourdhui));
}
```

Puis `require_once __DIR__ . '/registres.php';` en tête de `helpers/functions.php`, après `phosphor.php`. Le dossier `portfolio/data/pages/` et les autres dossiers de `REGISTRES_TYPES` naissent vides avec un fichier `.gitkeep`.

- [ ] **Step 5 : lancer, constater le succès**

Run: `php tools/tests/run.php Registres` puis `php tools/tests/run.php`
Expected: PASS, suite complète verte.

- [ ] **Step 6 : commit**

```bash
git add portfolio/data/pays-liste.php helpers/registres.php helpers/functions.php portfolio/data/*/.gitkeep tools/tests/RegistresTest.php tools/tests/fixtures
git commit -m "Registres de contenu : 34 pays, lecture, validation et publication datee"
```

---

### Task 2: Blocs « programme » et « galerie », liens des blocs filtrés

**Files:**
- Modify: `helpers/blocs.php` (constante, `bloc_texte`, nouvelle `bloc_href`)
- Create: `portfolio/partials/blocs/programme.php`, `portfolio/partials/blocs/galerie.php`
- Modify: `portfolio/partials/blocs/cta.php`, `cas.php`, `sources.php` (href via `bloc_href`)
- Modify: `assets/css/portfolio-v2.css` (fin de fichier)
- Test: `tools/tests/BlocsTest.php`

**Interfaces:**
- Produces: `BLOCS_TYPES` (18 types, + `programme`, `galerie`) ; `bloc_href(string $url): ?string` ; bloc `programme` : `['type' => 'programme', 'titre' => string, 'jours' => [['titre' => string, 'duree' => ?string, 'points' => string[]]]]` ; bloc `galerie` : `['type' => 'galerie', 'titre' => string, 'images' => [['src' => '/assets/...|/uploads/...', 'alt' => string, 'largeur' => int, 'hauteur' => int, 'legende' => ?string]]]`.
- Consumes (Task 1) : `registre_valider()` lit `BLOCS_TYPES`, les deux nouveaux types deviennent valides d'office.

- [ ] **Step 1 : tests**

```php
function test_blocs_liens_hors_site_deguises_refuses(): void
{
    // Revue 0B : « //hote » et « /\hote » passaient pour des liens internes.
    foreach (['//evil.example/x', '/\\evil.example', 'javascript:alert(1)', 'data:text/html,x'] as $url) {
        assert_same(null, bloc_href($url), $url);
        assert_not_contains('<a href=', bloc_texte('<a href="' . $url . '">x</a>'), $url);
    }
    foreach (['https://www.odoo.com/fr_FR', '/services/integration-odoo', '#faq'] as $url) {
        assert_same($url, bloc_href($url));
    }
    $cta = bloc_rendre(['type' => 'cta', 'titre' => 'Go', 'bouton' => ['url' => '//evil.example', 'texte' => 'x']]);
    assert_not_contains('evil.example', $cta);
}

function test_blocs_programme_en_details_le_premier_ouvert(): void
{
    $html = bloc_rendre(['type' => 'programme', 'titre' => 'Programme', 'jours' => [
        ['titre' => 'Jour 1 <script>', 'duree' => '7 h', 'points' => ['Prompts', 'Cas réels']],
        ['titre' => 'Jour 2', 'points' => ['Automatiser']],
    ]]);
    assert_same(2, substr_count($html, '<details'));
    assert_same(1, substr_count($html, '<details class="programme__jour" open>'));
    assert_contains('Jour 1 &lt;script&gt;', $html);
    assert_contains('7 h', $html);
}

function test_blocs_galerie_dimensions_et_sources_locales_seulement(): void
{
    $html = bloc_rendre(['type' => 'galerie', 'titre' => 'Captures', 'images' => [
        ['src' => '/assets/img/histoires/oba-tv-accueil.webp', 'alt' => 'Accueil OBA TV', 'largeur' => 1280, 'hauteur' => 800, 'legende' => 'Page d\'accueil'],
        ['src' => 'https://evil.example/x.webp', 'alt' => 'x', 'largeur' => 10, 'hauteur' => 10],
    ]]);
    assert_same(1, substr_count($html, '<img '));
    assert_contains('width="1280" height="800"', $html);
    assert_contains('loading="lazy"', $html);
    assert_not_contains('evil.example', $html);
}
```

- [ ] **Step 2 : lancer, constater l'échec**

Run: `php tools/tests/run.php Blocs`
Expected: FAIL (`bloc_href` absente, type « programme » inconnu).

- [ ] **Step 3 : implémentation**

Dans `helpers/blocs.php` : ajouter `'programme', 'galerie'` à `BLOCS_TYPES`, remplacer le motif d'URL de `bloc_texte` par `'#&lt;a href=&quot;((?:https?://|/(?![/\\\\])|\#)(?:[^"<>\s&]|&amp;)*)&quot;&gt;(.*?)&lt;/a&gt;#i'`, puis :

```php
/** Href sûr (https, chemin interne, ancre) ou null. */
function bloc_href(string $url): ?string
{
    return preg_match('#^(?:https?://[^\s"<>]+|/(?![/\\\\])[^\s"<>]*|\#[A-Za-z0-9_-]*)$#', $url) ? $url : null;
}
```

Dans `cta.php`, `cas.php`, `sources.php` : `<?php if (($h = bloc_href((string) ($b['bouton']['url'] ?? ''))) !== null): ?>` (resp. `$it['lien']['url']`, `$it['url']`) puis `href="<?= htmlspecialchars($h, ENT_QUOTES) ?>"`. Une source sans URL valide s'affiche sans lien.

`portfolio/partials/blocs/programme.php` :

```php
<?php /* Bloc « programme » : programme d'une formation, un <details> par jour (spec 10.2). */ ?>
<section class="bloc bloc--programme" data-reveal>
  <?= bloc_titre($b) ?>
  <?php foreach ($b['jours'] ?? [] as $i => $j): ?>
  <details class="programme__jour"<?= $i === 0 ? ' open' : '' ?>>
    <summary><span><?= bloc_texte((string) ($j['titre'] ?? '')) ?></span><?php if (!empty($j['duree'])): ?><small><?= bloc_texte((string) $j['duree']) ?></small><?php endif; ?></summary>
    <ul class="liste-coches">
      <?php foreach ($j['points'] ?? [] as $pt): ?><li><?= bloc_texte((string) $pt) ?></li><?php endforeach; ?>
    </ul>
  </details>
  <?php endforeach; ?>
</section>
```

`portfolio/partials/blocs/galerie.php` :

```php
<?php /* Bloc « galerie » : captures d'un projet, images locales seulement, dimensions obligatoires. */ ?>
<section class="bloc bloc--galerie" data-reveal>
  <?= bloc_titre($b) ?>
  <div class="galerie">
    <?php foreach ($b['images'] ?? [] as $im):
      $src = (string) ($im['src'] ?? '');
      if (!preg_match('#^/(?:assets|uploads)/[A-Za-z0-9/_.-]+\.(?:webp|avif|jpe?g|png)$#', $src) || empty($im['largeur']) || empty($im['hauteur'])) { continue; } ?>
    <figure class="galerie__image">
      <img src="<?= htmlspecialchars($src, ENT_QUOTES) ?>" alt="<?= htmlspecialchars((string) ($im['alt'] ?? ''), ENT_QUOTES) ?>" width="<?= (int) $im['largeur'] ?>" height="<?= (int) $im['hauteur'] ?>" loading="lazy" decoding="async">
      <?php if (!empty($im['legende'])): ?><figcaption><?= bloc_texte((string) $im['legende']) ?></figcaption><?php endif; ?>
    </figure>
    <?php endforeach; ?>
  </div>
</section>
```

CSS (fin de `portfolio-v2.css`) :

```css
/* ---------- Blocs programme et galerie (vague 0C) ---------- */
.pv2 .programme__jour{border:1px solid var(--line);border-radius:var(--radius-lg);background:#fff;margin:0 0 .75rem}
.pv2 .programme__jour summary{display:flex;justify-content:space-between;align-items:center;gap:1rem;min-height:56px;padding:.9rem 1.2rem;cursor:pointer;list-style:none;font-weight:600;color:var(--ink)}
.pv2 .programme__jour summary::-webkit-details-marker{display:none}
.pv2 .programme__jour summary small{flex-shrink:0;padding:2px 10px;border-radius:var(--pill);background:var(--surface-2);color:var(--link);font-size:.8rem}
.pv2 .programme__jour .liste-coches{padding:0 1.2rem 1.2rem}
.pv2 .galerie{display:grid;gap:1rem;grid-template-columns:repeat(auto-fit,minmax(min(100%,18rem),1fr))}
.pv2 .galerie__image{margin:0}
.pv2 .galerie__image img{display:block;width:100%;height:auto;border-radius:var(--radius-lg);border:1px solid var(--line)}
.pv2 .galerie__image figcaption{margin-top:.5rem;font-size:.88rem;color:var(--muted)}
```

- [ ] **Step 4 : lancer, constater le succès**

Run: `php tools/tests/run.php Blocs` puis `php tools/tests/run.php`
Expected: PASS.

- [ ] **Step 5 : commit**

```bash
git add helpers/blocs.php portfolio/partials/blocs assets/css/portfolio-v2.css tools/tests/BlocsTest.php
git commit -m "Blocs programme et galerie ; liens des blocs limites a https, chemins internes et ancres"
```

---

### Task 3: Schémas par type de page

**Files:**
- Modify: `helpers/schema.php` (trois fonctions ajoutées en fin de fichier)
- Test: `tools/tests/SchemaTest.php`

**Interfaces:**
- Consumes (Task 1) : `pays_liste()`, page lue (`type`, `slug`, `url`, champs communs).
- Produces: `schema_fil_ariane(array $miettes, string $base): array` (miettes `[[nom, chemin], ...]`, chemins relatifs) ; `schema_page_registre(array $p, array $miettes, string $base): array` (liste de nœuds : principal selon le type, `BreadcrumbList`, `FAQPage` si FAQ) ; `schema_collection(string $nom, string $chemin, array $elements, string $base): array` (`CollectionPage` + `ItemList`, éléments `[[nom, chemin], ...]`).

- [ ] **Step 1 : tests**

```php
function schema_fixture(string $type, string $slug): array
{
    require_once racine('helpers/registres.php');
    return registre_lire($type, $slug, racine('tools/tests/fixtures/registres'));
}

function test_schema_registre_type_principal_par_type(): void
{
    $base = 'https://richardsalanon.com';
    $attendus = [['service', 'site-test', 'Service'], ['service-pays', 'site-test/benin', 'Service'], ['formation', 'ia-test', 'Course'],
                 ['histoire', 'histoire-test', 'Article'], ['comparatif', 'a-vs-b', 'Article'], ['page', 'page-test', 'WebPage'], ['terme', 'terme-test', 'DefinedTerm']];
    foreach ($attendus as [$type, $slug, $schema]) {
        $p = schema_fixture($type, $slug);
        $noeuds = schema_page_registre($p, [['Accueil', '/'], [$p['titre'], $p['url']]], $base);
        assert_same($schema, $noeuds[0]['@type'], $type);
        assert_same('BreadcrumbList', $noeuds[1]['@type'], $type);
        foreach ($noeuds as $n) { schema_verifier($n); }
        assert_same(1, substr_count(schema_graphe($noeuds), 'application/ld+json'), $type);
    }
}

function test_schema_registre_pays_de_la_page_et_dates_reelles(): void
{
    $base = 'https://richardsalanon.com';
    $p = schema_fixture('service-pays', 'site-test/benin');
    $n = schema_page_registre($p, [['Accueil', '/']], $base)[0];
    assert_same(['@type' => 'Country', 'name' => 'Bénin'], $n['areaServed']);
    assert_same(['@id' => $base . '/#person'], $n['provider']);
    $a = schema_page_registre(schema_fixture('histoire', 'histoire-test'), [['Accueil', '/']], $base)[0];
    assert_same('2026-01-01', $a['datePublished']);
    assert_same('2026-01-02', $a['dateModified']);
}

function test_schema_fil_ariane_urls_absolues_positions(): void
{
    $f = schema_fil_ariane([['Accueil', '/'], ['Comparatifs', '/comparatifs/'], ['Odoo ou Dolibarr', '/comparatifs/odoo-vs-dolibarr']], 'https://richardsalanon.com');
    assert_same(3, count($f['itemListElement']));
    assert_same(3, $f['itemListElement'][2]['position']);
    assert_same('https://richardsalanon.com/comparatifs/', $f['itemListElement'][1]['item']);
}

function test_schema_collection_liste_les_elements(): void
{
    $c = schema_collection('Comparatifs', '/comparatifs/', [['Odoo ou Dolibarr', '/comparatifs/odoo-vs-dolibarr']], 'https://richardsalanon.com');
    assert_same('CollectionPage', $c['@type']);
    assert_same('ItemList', $c['mainEntity']['@type']);
    assert_same('https://richardsalanon.com/comparatifs/odoo-vs-dolibarr', $c['mainEntity']['itemListElement'][0]['url']);
}
```

- [ ] **Step 2 : lancer, constater l'échec**

Run: `php tools/tests/run.php Schema`
Expected: FAIL, « Call to undefined function schema_page_registre() ».

- [ ] **Step 3 : implémentation (fin de `helpers/schema.php`)**

```php
/** BreadcrumbList depuis [[nom, chemin], ...] ; chemins relatifs à la racine du site. */
function schema_fil_ariane(array $miettes, string $base): array
{
    $items = [];
    foreach (array_values($miettes) as $i => [$nom, $chemin]) {
        $items[] = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $nom, 'item' => $base . $chemin];
    }
    $dernier = end($miettes);
    return ['@type' => 'BreadcrumbList', '@id' => $base . $dernier[1] . '#ariane', 'itemListElement' => $items];
}

/** CollectionPage d'un hub, avec la liste réelle des pages publiées. */
function schema_collection(string $nom, string $chemin, array $elements, string $base): array
{
    $items = [];
    foreach (array_values($elements) as $i => [$titre, $url]) {
        $items[] = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $titre, 'url' => $base . $url];
    }
    return ['@type' => 'CollectionPage', '@id' => $base . $chemin . '#page', 'name' => $nom, 'url' => $base . $chemin,
            'inLanguage' => 'fr', 'isPartOf' => ['@id' => $base . '/#website'],
            'mainEntity' => ['@type' => 'ItemList', 'numberOfItems' => count($items), 'itemListElement' => $items]];
}

/** Nœuds d'une page de registre : principal selon le type (spec 5.3), fil d'Ariane, FAQ visible. */
function schema_page_registre(array $p, array $miettes, string $base): array
{
    $url  = $base . $p['url'];
    $moi  = ['@id' => $base . '/#person'];
    $pays = pays_liste();
    $cle  = str_ends_with($p['type'], '-pays') ? basename($p['slug']) : ($p['type'] === 'pays' ? $p['slug'] : null);
    $zone = ($cle !== null && isset($pays[$cle]))
        ? ['@type' => 'Country', 'name' => $pays[$cle]['nom']]
        : array_map(static fn(array $x): array => ['@type' => 'Country', 'name' => $x['nom']], array_values($pays));

    $noeuds = [];
    switch ($p['type']) {
        case 'service': case 'service-pays': case 'pays': case 'secteur':
            $noeuds[] = ['@type' => 'Service', '@id' => $url . '#service', 'name' => $p['titre'], 'serviceType' => $p['titre'],
                         'description' => $p['meta'], 'url' => $url, 'provider' => $moi, 'areaServed' => $zone];
            break;
        case 'formation': case 'formation-pays': case 'metier': case 'metier-pays':
            $modes = [];
            foreach ((array) ($p['formats'] ?? ['intra', 'distance']) as $f) {
                $modes[] = match ($f) { 'distance' => 'online', 'hybride' => 'blended', default => 'onsite' };
            }
            $noeuds[] = ['@type' => 'Course', '@id' => $url . '#course', 'name' => $p['titre'], 'description' => $p['meta'],
                         'url' => $url, 'inLanguage' => 'fr', 'provider' => $moi,
                         'hasCourseInstance' => array_map(static fn(string $m): array => ['@type' => 'CourseInstance', 'courseMode' => $m], array_values(array_unique($modes)))];
            break;
        case 'histoire': case 'comparatif': case 'guide':
            $noeuds[] = ['@type' => 'Article', '@id' => $url . '#article', 'headline' => $p['titre'], 'description' => $p['meta'],
                         'url' => $url, 'mainEntityOfPage' => $url, 'inLanguage' => 'fr', 'author' => $moi, 'publisher' => $moi,
                         'datePublished' => $p['publie'], 'dateModified' => $p['maj'], 'image' => $base . fait('photo_og')];
            break;
        case 'terme':
            $noeuds[] = ['@type' => 'DefinedTerm', '@id' => $url . '#terme', 'name' => $p['terme'], 'description' => $p['definition'],
                         'url' => $url, 'inDefinedTermSet' => ['@id' => $base . '/glossaire/#termes']];
            break;
        case 'outil':
            $noeuds[] = ['@type' => 'WebApplication', '@id' => $url . '#outil', 'name' => $p['titre'], 'description' => $p['meta'],
                         'url' => $url, 'applicationCategory' => 'BusinessApplication', 'operatingSystem' => 'Web',
                         'isAccessibleForFree' => true, 'author' => $moi];
            break;
        case 'page':
            $n = ['@type' => $p['schema'], '@id' => $url . '#page', 'name' => $p['titre'], 'description' => $p['meta'],
                  'url' => $url, 'inLanguage' => 'fr', 'isPartOf' => ['@id' => $base . '/#website']];
            if ($p['schema'] === 'ProfilePage') {
                $n['mainEntity'] = $moi;
                $n['dateModified'] = $p['maj'];
            }
            $noeuds[] = $n;
            break;
    }
    $noeuds[] = schema_fil_ariane($miettes, $base);
    if (!empty($p['faq'])) {
        $noeuds[] = schema_faq($p['faq']);
    }
    return $noeuds;
}
```

Les types `domaine` et `hub` n'ont pas de nœud principal ici : le gabarit de hub (Task 5) ajoute `schema_collection()` avec la liste réelle.

- [ ] **Step 4 : lancer, constater le succès**

Run: `php tools/tests/run.php Schema` puis `php tools/tests/run.php`
Expected: PASS.

- [ ] **Step 5 : commit**

```bash
git add helpers/schema.php tools/tests/SchemaTest.php
git commit -m "Schemas des pages de registre : Service, Course, Article, DefinedTerm, WebApplication, pages, fil d'Ariane"
```

---

### Task 4: Maillage : fil d'Ariane et liens obligatoires

**Files:**
- Create: `helpers/maillage.php` (chargé par `helpers/functions.php` après `registres.php`)
- Test: `tools/tests/MaillageTest.php`

**Interfaces:**
- Consumes (Task 1) : `registre_lire()`, `registre_publiees()`, `registre_publiee()`, `pays_liste()`.
- Produces: `maillage_ariane(array $p, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): array` (`[[nom, chemin], ...]`, Accueil en tête, page en dernier) ; `maillage_liens(array $p, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): array` (`[['titre' => string, 'liens' => [[titre, chemin], ...]], ...]`, groupes non vides, sans doublon ni la page elle-même, cibles publiées seulement).

- [ ] **Step 1 : tests**

```php
<?php // tools/tests/MaillageTest.php
declare(strict_types=1);

require_once racine('helpers/functions.php');

function maillage_fixture(string $type, string $slug): array
{
    return registre_lire($type, $slug, racine('tools/tests/fixtures/registres'));
}

function maillage_urls(array $groupes): array
{
    $u = [];
    foreach ($groupes as $g) { foreach ($g['liens'] as [, $url]) { $u[] = $url; } }
    return $u;
}

function test_maillage_pilier_vers_ses_pages_pays_et_liens_editoriaux(): void
{
    $u = maillage_urls(maillage_liens(maillage_fixture('service', 'site-test'), racine('tools/tests/fixtures/registres'), '2026-10-03'));
    assert_true(in_array('/services/site-test/benin', $u, true));
    assert_true(in_array('/services/site-test/togo', $u, true));
    assert_true(in_array('/formations/ia-test', $u, true));
    assert_true(in_array('/histoires/histoire-test', $u, true));
    assert_true(!in_array('/services/site-test', $u, true), 'jamais la page elle-même');
}

function test_maillage_page_pays_vers_pilier_et_voisins_publies(): void
{
    $u = maillage_urls(maillage_liens(maillage_fixture('service-pays', 'site-test/benin'), racine('tools/tests/fixtures/registres'), '2026-10-03'));
    assert_true(in_array('/services/site-test', $u, true), 'pilier');
    assert_true(in_array('/services/site-test/togo', $u, true), 'voisin publié');
    assert_true(!in_array('/services/site-test/niger', $u, true), 'voisin sans page');
}

function test_maillage_aucune_cible_future(): void
{
    $p = ['liens' => ['services' => ['site-futur', 'site-test']]] + maillage_fixture('histoire', 'histoire-test');
    $u = maillage_urls(maillage_liens($p, racine('tools/tests/fixtures/registres'), '2026-10-03'));
    assert_true(!in_array('/services/site-futur', $u, true));
    assert_true(in_array('/services/site-test', $u, true));
}

function test_maillage_ariane_hub_seulement_s_il_est_publie(): void
{
    $racine = racine('tools/tests/fixtures/registres');
    assert_same([['Accueil', '/'], ['Histoires', '/histoires/'], ['Histoire de test', '/histoires/histoire-test']],
        maillage_ariane(maillage_fixture('histoire', 'histoire-test'), $racine, '2026-10-03'));
    $c = maillage_ariane(maillage_fixture('comparatif', 'a-vs-b'), $racine, '2026-10-03');
    assert_same(2, count($c), 'pas de hub comparatifs dans les fixtures');
    $sp = maillage_ariane(maillage_fixture('service-pays', 'site-test/benin'), $racine, '2026-10-03');
    assert_same(['Services', '/services/'], $sp[1]);
    assert_same('/services/site-test', $sp[2][1]);
}
```

La fixture `histoires/histoire-test.php` a pour `titre` « Histoire de test » ; `hubs/histoires.php` a pour `titre` « Histoires ».

- [ ] **Step 2 : lancer, constater l'échec**

Run: `php tools/tests/run.php Maillage`
Expected: FAIL, « Call to undefined function maillage_liens() ».

- [ ] **Step 3 : `helpers/maillage.php`**

```php
<?php
// ============================================================
// helpers/maillage.php · Maillage interne généré depuis les registres (spec 9), vague 0C.
// Seules les pages publiées sont proposées : un lien ne mène jamais à une 404.
// ============================================================
declare(strict_types=1);

/** Clé de « liens » => [type, titre du groupe]. */
const MAILLAGE_EDITORIAL = [
    'services'    => ['service', 'Services liés'],
    'formations'  => ['formation', 'Formations liées'],
    'metiers'     => ['metier', 'Formations par métier'],
    'secteurs'    => ['secteur', 'Secteurs'],
    'histoires'   => ['histoire', 'Histoires clients'],
    'comparatifs' => ['comparatif', 'Comparatifs'],
    'guides'      => ['guide', 'Guides'],
    'pays'        => ['pays', 'Pays'],
    'termes'      => ['terme', 'Glossaire'],
];

/** Hub de rattachement par type : [nom, chemin, hub du registre ou null si hub historique toujours servi]. */
const MAILLAGE_HUBS = [
    'service' => ['Services', '/services/', null], 'service-pays' => ['Services', '/services/', null],
    'pays' => ['Zones', '/zones/', null],
    'formation' => ['Formations', '/formations/', null], 'formation-pays' => ['Formations', '/formations/', null],
    'domaine' => ['Formations', '/formations/', null], 'metier' => ['Formations', '/formations/', null],
    'metier-pays' => ['Formations', '/formations/', null],
    'secteur' => ['Secteurs', '/secteurs/', 'secteurs'], 'histoire' => ['Histoires', '/histoires/', 'histoires'],
    'comparatif' => ['Comparatifs', '/comparatifs/', 'comparatifs'], 'guide' => ['Guides', '/guides/', 'guides'],
    'terme' => ['Glossaire', '/glossaire/', 'glossaire'],
];

/** Page publiée d'un type, ou null. */
function maillage_page(string $type, string $slug, string $racine, ?string $aujourdhui): ?array
{
    $p = registre_lire($type, $slug, $racine);
    return ($p !== null && registre_publiee($p, $aujourdhui)) ? $p : null;
}

function maillage_ariane(array $p, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): array
{
    $miettes = [['Accueil', '/']];
    if (isset(MAILLAGE_HUBS[$p['type']])) {
        [$nom, $chemin, $hub] = MAILLAGE_HUBS[$p['type']];
        if ($hub === null || maillage_page('hub', $hub, $racine, $aujourdhui) !== null) {
            $miettes[] = [$nom, $chemin];
        }
    }
    $parent = match ($p['type']) {
        'service-pays' => ['service', dirname($p['slug'])],
        'formation-pays' => ['formation', dirname($p['slug'])],
        'metier-pays' => ['metier', dirname($p['slug'])],
        'formation' => ['domaine', (string) ($p['domaine'] ?? '')],
        default => null,
    };
    if ($parent !== null && $parent[1] !== '' && ($pp = maillage_page($parent[0], $parent[1], $racine, $aujourdhui)) !== null) {
        $miettes[] = [$pp['titre'], $pp['url']];
    }
    $miettes[] = [$p['titre'], $p['url']];
    return $miettes;
}

function maillage_liens(array $p, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): array
{
    $groupes = [];
    $ajouter = static function (string $titre, array $pages) use (&$groupes, $p): void {
        $liens = [];
        foreach ($pages as $q) {
            if ($q !== null && $q['url'] !== $p['url']) {
                $liens[$q['url']] = [$q['titre'], $q['url']];
            }
        }
        if ($liens) {
            $groupes[] = ['titre' => $titre, 'liens' => array_values($liens)];
        }
    };
    $pays  = pays_liste();
    $slugP = str_ends_with($p['type'], '-pays') ? basename($p['slug']) : null;

    switch ($p['type']) {
        case 'service':
            $ajouter('Ce service par pays', array_filter(registre_publiees('service-pays', $racine, $aujourdhui),
                static fn(array $q): bool => dirname($q['slug']) === $p['slug']));
            break;
        case 'service-pays':
            $pilier = dirname($p['slug']);
            $ajouter('Le service en détail', [maillage_page('service', $pilier, $racine, $aujourdhui), maillage_page('pays', $slugP, $racine, $aujourdhui)]);
            $ajouter('Le même service dans les pays voisins', array_map(
                static fn(string $v): ?array => maillage_page('service-pays', $pilier . '/' . $v, $racine, $aujourdhui), $pays[$slugP]['voisins']));
            $ajouter('Autres services ' . $pays[$slugP]['dans'], array_slice(array_filter(registre_publiees('service-pays', $racine, $aujourdhui),
                static fn(array $q): bool => basename($q['slug']) === $slugP && dirname($q['slug']) !== $pilier), 0, 3));
            break;
        case 'pays':
            $ajouter('Services ' . $pays[$p['slug']]['dans'], array_filter(registre_publiees('service-pays', $racine, $aujourdhui),
                static fn(array $q): bool => basename($q['slug']) === $p['slug']));
            $ajouter('Formations ' . $pays[$p['slug']]['dans'], array_filter(array_merge(registre_publiees('formation-pays', $racine, $aujourdhui), registre_publiees('metier-pays', $racine, $aujourdhui)),
                static fn(array $q): bool => basename($q['slug']) === $p['slug']));
            $ajouter('Pays voisins', array_map(static fn(string $v): ?array => maillage_page('pays', $v, $racine, $aujourdhui), $pays[$p['slug']]['voisins']));
            $villes = [];
            foreach ((array) (require __DIR__ . '/../portfolio/data/villes.php') as $v) {
                if (($v['pays_slug'] ?? '') === $p['slug']) {
                    $villes[] = ['titre' => 'Développeur web à ' . $v['nom'], 'url' => '/developpeur-web-' . $v['slug']];
                }
            }
            $ajouter('Villes', $villes);
            break;
        case 'formation':
        case 'metier':
            $enfant = $p['type'] . '-pays';
            $ajouter('Cette formation par pays', array_filter(registre_publiees($enfant, $racine, $aujourdhui),
                static fn(array $q): bool => dirname($q['slug']) === $p['slug']));
            break;
        case 'histoire':
        case 'comparatif':
        case 'guide':
            $titres = ['histoire' => 'Autres histoires', 'comparatif' => 'Autres comparatifs', 'guide' => 'Guides voisins'];
            $ajouter($titres[$p['type']], array_slice(array_values(array_filter(registre_publiees($p['type'], $racine, $aujourdhui),
                static fn(array $q): bool => $q['slug'] !== $p['slug'])), 0, 3));
            break;
    }
    foreach ((array) ($p['liens'] ?? []) as $cle => $slugs) {
        if (isset(MAILLAGE_EDITORIAL[$cle])) {
            [$type, $titre] = MAILLAGE_EDITORIAL[$cle];
            $ajouter($titre, array_map(static fn(string $s): ?array => maillage_page($type, $s, $racine, $aujourdhui), (array) $slugs));
        }
    }
    return $groupes;
}
```

- [ ] **Step 4 : lancer, constater le succès**

Run: `php tools/tests/run.php Maillage` puis `php tools/tests/run.php`
Expected: PASS.

- [ ] **Step 5 : commit**

```bash
git add helpers/maillage.php helpers/functions.php tools/tests/MaillageTest.php tools/tests/fixtures
git commit -m "Maillage depuis les registres : fil d'Ariane et liens obligatoires vers des pages publiees"
```

---

### Task 5: Gabarits des pages de registre et des hubs

**Files:**
- Create: `portfolio/registre.php`, `portfolio/registre-hub.php`
- Create: `portfolio/partials/registre/hero.php`, `sommaire.php`, `liens.php`, `portfolio/partials/boite-auteur.php`
- Modify: `helpers/registres.php` (ajout de `REGISTRE_ETIQUETTES`, `registre_date_fr()`), `assets/css/portfolio-v2.css`
- Test: `tools/tests/GabaritTest.php`

**Interfaces:**
- Consumes: Tasks 1 à 4 (`registre_*`, `blocs_rendre`, `bloc_rendre`, `schema_page_registre`, `schema_collection`, `maillage_ariane`, `maillage_liens`).
- Produces: `registre.php` et `registre-hub.php` attendent dans leur portée `$page` (page publiée) et les variables de `pv2-bootstrap.php` ; ils n'incluent **pas** l'amorçage (l'appelant le fait). Variable optionnelle `$registreRacine` (racine des données, tests). `registre_date_fr(string $iso): string` (« 2 janvier 2026 »). `boite_auteur_lien(): string` (`/richard-salanon` si publiée, sinon `/a-propos/`).

- [ ] **Step 1 : tests**

```php
<?php // tools/tests/GabaritTest.php
declare(strict_types=1);

require_once racine('helpers/functions.php');

/** Rend un gabarit de registre en mémoire, avec les variables de l'amorçage et les fixtures. */
function gabarit_rendre(string $type, string $slug): string
{
    $registreRacine = racine('tools/tests/fixtures/registres');
    $page = registre_lire($type, $slug, $registreRacine);
    $pdo = null; $userId = 0; $profile = []; $contactInfo = []; $socialLinks = [];
    $fullName = fait('nom'); $h_city = fait('ville'); $h_phone = fait('telephone'); $h_email = fait('email');
    $h_mailto = '/contact'; $h_logo = siteLogoUrl(); $portfolioUrl = SITE_URL;
    ob_start();
    include racine($type === 'hub' || $type === 'domaine' ? 'portfolio/registre-hub.php' : 'portfolio/registre.php');
    return (string) ob_get_clean();
}

function test_gabarit_formation_complete_et_valide(): void
{
    $html = gabarit_rendre('formation', 'ia-test');
    assert_same(1, substr_count($html, '<h1'));
    assert_same(1, substr_count($html, 'application/ld+json'));
    assert_contains('"Course"', $html);
    assert_contains('"BreadcrumbList"', $html);
    assert_contains('En bref', $html);
    assert_contains('Mis à jour le <time datetime="2026-01-02">2 janvier 2026</time>', $html);
    assert_contains('<details class="programme__jour" open>', $html);
    assert_contains('class="sommaire"', $html);
    assert_contains('href="/a-propos/"', $html, 'boîte auteur vers l\'à-propos tant que la page auteur n\'est pas publiée');
    assert_contains('<link rel="canonical" href="' . SITE_URL . '/formations/ia-test">', $html);
    assert_not_contains("\u{2014}", $html);
}

function test_gabarit_histoire_sous_traitance_mentionnee(): void
{
    assert_contains('Réalisé en sous-traitance pour Digital Développement', gabarit_rendre('histoire', 'histoire-test'));
}

function test_gabarit_hub_liste_les_pages_publiees(): void
{
    $html = gabarit_rendre('hub', 'histoires');
    assert_contains('href="/histoires/histoire-test"', $html);
    assert_contains('href="/histoires/histoire-autre"', $html);
    assert_contains('"CollectionPage"', $html);
    assert_same(1, substr_count($html, '<h1'));
}

function test_gabarit_page_noindex_respectee(): void
{
    assert_contains('content="noindex, nofollow"', gabarit_rendre('page', 'page-legale-test'));
}
```

Fixture ajoutée : `pages/page-legale-test.php` (`'schema' => 'WebPage'`, `'robots' => 'noindex'`). Note : `pv2-head.php` écrit `noindex, nofollow` pour `noindex` ; la Task 9 le corrige en `noindex, follow` pour les pages légales, ce test sera alors mis à jour dans la même tâche.

- [ ] **Step 2 : lancer, constater l'échec**

Run: `php tools/tests/run.php Gabarit`
Expected: FAIL (fichier `portfolio/registre.php` absent).

- [ ] **Step 3 : ajouts à `helpers/registres.php`**

```php
/** Pastille du hero par type. */
const REGISTRE_ETIQUETTES = [
    'service' => 'Service', 'service-pays' => 'Service', 'pays' => 'Pays', 'formation' => 'Formation',
    'formation-pays' => 'Formation', 'domaine' => 'Domaine de formation', 'metier' => 'Formation par métier',
    'metier-pays' => 'Formation par métier', 'secteur' => 'Secteur', 'histoire' => 'Histoire client',
    'comparatif' => 'Comparatif', 'guide' => 'Guide', 'terme' => 'Glossaire', 'outil' => 'Outil', 'page' => '', 'hub' => '',
];

/** « 2026-01-02 » vers « 2 janvier 2026 ». */
function registre_date_fr(string $iso): string
{
    $mois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
    [$a, $m, $j] = array_map('intval', explode('-', $iso));
    return $j . ($j === 1 ? 'er' : '') . ' ' . $mois[$m - 1] . ' ' . $a;
}
```

Le test attend « 2 janvier 2026 » ; « 1er » s'écrit pour le premier du mois.

- [ ] **Step 4 : `portfolio/registre.php`**

```php
<?php
// ============================================================
// registre.php · Gabarit unique des pages de registre (spec 7.4), vague 0C.
// Portée attendue : $page (publiée) + variables de pv2-bootstrap.php (inclus par l'appelant).
// Squelette : fil d'Ariane, hero de sous-page, sommaire collant, blocs, programme,
// FAQ, sources, boîte auteur, liens liés, bande d'appel.
// ============================================================
require_once __DIR__ . '/../helpers/functions.php';

$racineReg = $registreRacine ?? REGISTRES_RACINE;
$p         = $page;
$miettes   = maillage_ariane($p, $racineReg);
$groupes   = maillage_liens($p, $racineReg);
$editorial = !in_array($p['type'], ['page', 'hub'], true);

$pageTitle     = $p['title'];
$pageDesc      = $p['meta'];
$pageCanonical = SITE_URL . $p['url'];
$pageRobots    = $p['robots'];
$pageSchemas   = schema_page_registre($p, $miettes, SITE_URL);
if (in_array($p['type'], ['histoire', 'comparatif', 'guide'], true)) {
    $ogType = 'article';
    $ogPublishedTime = $p['publie'];
    $ogModifiedTime  = $p['maj'];
}

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content" class="registre registre--<?= sanitize($p['type']) ?>">
  <?php include __DIR__ . '/partials/registre/hero.php'; ?>
  <div class="registre__corps conteneur">
    <?php include __DIR__ . '/partials/registre/sommaire.php'; ?>
    <article class="registre__article">
      <?= blocs_rendre($p['sections']) ?>
      <?php if (!empty($p['programme'])): ?><?= bloc_rendre(['type' => 'programme', 'titre' => 'Programme détaillé', 'jours' => $p['programme']]) ?><?php endif; ?>
      <?php if (!empty($p['faq'])): ?><?= bloc_rendre(['type' => 'faq', 'titre' => 'Questions fréquentes', 'items' => $p['faq']]) ?><?php endif; ?>
      <?php if (!empty($p['sources'])): ?><?= bloc_rendre(['type' => 'sources', 'titre' => 'Sources', 'items' => $p['sources']]) ?><?php endif; ?>
      <?php if ($editorial) { include __DIR__ . '/partials/boite-auteur.php'; } ?>
    </article>
  </div>
  <?php include __DIR__ . '/partials/registre/liens.php'; ?>
  <div class="conteneur"><?= bloc_rendre(['type' => 'cta', 'titre' => 'Parlons de votre projet', 'texte' => 'Décrivez votre besoin : je reviens vers vous avec une première recommandation, sans engagement.', 'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis']]) ?></div>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
```

- [ ] **Step 5 : partiels**

`portfolio/partials/registre/hero.php` :

```php
<?php // Fil d'Ariane et hero de sous-page d'une page de registre ($p, $miettes).
$etiquette = REGISTRE_ETIQUETTES[$p['type']] ?? '';
if ($p['type'] === 'histoire' && ($p['relation'] ?? '') === 'externe') { $etiquette = 'Histoire'; }
?>
<nav class="crumb wrap" aria-label="Fil d'Ariane">
  <?php foreach ($miettes as $i => [$nom, $chemin]): ?>
    <?php if ($i > 0): ?><span class="sep" aria-hidden="true">/</span><?php endif; ?>
    <?php if ($i === count($miettes) - 1): ?><span aria-current="page"><?= sanitize($nom) ?></span>
    <?php else: ?><a href="<?= sanitize($chemin) ?>"><?= sanitize($nom) ?></a><?php endif; ?>
  <?php endforeach; ?>
</nav>
<header class="registre-hero">
  <div class="registre-hero__grille conteneur">
    <div>
      <?php if ($etiquette !== ''): ?><span class="eyebrow"><?= sanitize($etiquette) ?></span><?php endif; ?>
      <h1><?= sanitize($p['titre']) ?></h1>
      <p class="registre-hero__bref"><strong>En bref.</strong> <?= bloc_texte((string) $p['en_bref']) ?></p>
      <?php if ($p['type'] === 'histoire' && ($p['relation'] ?? '') === 'sous-traitance'): ?><p class="registre-hero__mention">Réalisé en sous-traitance pour Digital Développement.</p><?php endif; ?>
      <?php if ($p['type'] === 'histoire' && ($p['relation'] ?? '') === 'externe'): ?><p class="registre-hero__mention">Cette entreprise n'est pas un client : histoire publique, faits sourcés.</p><?php endif; ?>
      <p class="registre-hero__maj">Mis à jour le <time datetime="<?= sanitize($p['maj']) ?>"><?= sanitize(registre_date_fr($p['maj'])) ?></time></p>
    </div>
    <?php if (!empty($p['faits_hero'])): ?>
    <aside class="panneau-faits" aria-label="L'essentiel">
      <dl><?php foreach ($p['faits_hero'] as $f): ?><div><dt><?= sanitize((string) $f['l']) ?></dt><dd><?= sanitize((string) $f['v']) ?></dd></div><?php endforeach; ?></dl>
    </aside>
    <?php endif; ?>
  </div>
</header>
```

`portfolio/partials/registre/sommaire.php` :

```php
<?php // Sommaire collant : titres des blocs, FAQ, sources (liens d'ancre, utiles sans JavaScript).
$entrees = [];
foreach ($p['sections'] as $b) { if (!empty($b['titre'])) { $entrees[] = [bloc_ancre((string) $b['titre']), (string) $b['titre']]; } }
if (!empty($p['programme'])) { $entrees[] = [bloc_ancre('Programme détaillé'), 'Programme détaillé']; }
if (!empty($p['faq'])) { $entrees[] = [bloc_ancre('Questions fréquentes'), 'Questions fréquentes']; }
if (!empty($p['sources'])) { $entrees[] = [bloc_ancre('Sources'), 'Sources']; }
if (count($entrees) >= 3): ?>
<nav class="sommaire" aria-label="Sommaire">
  <p class="sommaire__titre">Sommaire</p>
  <ol><?php foreach ($entrees as [$id, $titre]): ?><li><a href="#<?= sanitize($id) ?>"><?= bloc_texte($titre) ?></a></li><?php endforeach; ?></ol>
</nav>
<?php endif; ?>
```

Le titre d'un bloc peut contenir les balises autorisées par `bloc_texte` ; l'ancre vient de `bloc_ancre`, comme dans `bloc_titre`.

`portfolio/partials/registre/liens.php` :

```php
<?php // Liens liés calculés par maillage_liens() ($groupes).
if ($groupes): ?>
<section class="liens-lies conteneur" aria-labelledby="liens-lies-titre">
  <h2 id="liens-lies-titre">Pour aller plus loin</h2>
  <div class="liens-lies__grille">
    <?php foreach ($groupes as $g): ?>
    <div class="liens-lies__groupe">
      <h3><?= sanitize($g['titre']) ?></h3>
      <ul><?php foreach ($g['liens'] as [$titre, $url]): ?><li><a href="<?= sanitize($url) ?>"><?= sanitize($titre) ?></a></li><?php endforeach; ?></ul>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>
```

`portfolio/partials/boite-auteur.php` :

```php
<?php // Boîte auteur (spec 5.5, 10.2) : qui écrit, avec la phrase d'entité de la fiche de faits.
$lienAuteur = boite_auteur_lien();
$linkedin = '';
foreach ((array) fait('profils') as $u) { if (str_contains($u, 'linkedin.com')) { $linkedin = $u; } }
?>
<aside class="boite-auteur" aria-label="L'auteur">
  <img src="/assets/img/richard-salanon-400.webp" alt="<?= sanitize(fait('nom')) ?>" width="96" height="128" loading="lazy" decoding="async">
  <div>
    <p class="boite-auteur__nom"><a href="<?= sanitize($lienAuteur) ?>"><?= sanitize(fait('nom')) ?></a></p>
    <p class="boite-auteur__titre"><?= sanitize(fait('intitule')) ?></p>
    <p><?= sanitize(fait('phrase_entite')) ?></p>
    <?php if ($linkedin): ?><a class="lien-fleche" href="<?= sanitize($linkedin) ?>" rel="noopener" target="_blank">Profil LinkedIn<?= icone('arrow-up-right', 16) ?></a><?php endif; ?>
  </div>
</aside>
```

Et dans `helpers/maillage.php` :

```php
/** Lien de la boîte auteur : la page auteur dès sa publication, l'à-propos avant. */
function boite_auteur_lien(): string
{
    $p = registre_lire('page', 'richard-salanon');
    return ($p !== null && registre_publiee($p)) ? '/richard-salanon' : '/a-propos/';
}
```

- [ ] **Step 6 : `portfolio/registre-hub.php`**

```php
<?php
// ============================================================
// registre-hub.php · Hubs (/histoires/, /comparatifs/...) et domaines de formation.
// Portée attendue : $page de type « hub » (champ « liste » = type listé) ou « domaine ».
// ============================================================
require_once __DIR__ . '/../helpers/functions.php';

$racineReg = $registreRacine ?? REGISTRES_RACINE;
$p         = $page;
$listeType = $p['type'] === 'domaine' ? 'formation' : (string) $p['liste'];
$elements  = registre_publiees($listeType, $racineReg);
if ($p['type'] === 'domaine') {
    $elements = array_filter($elements, static fn(array $q): bool => ($q['domaine'] ?? '') === $p['slug']);
}
uasort($elements, static fn(array $a, array $b): int => strcmp((string) $b['publie'], (string) $a['publie']));
$miettes = maillage_ariane($p, $racineReg);
$groupes = maillage_liens($p, $racineReg);

$pageTitle     = $p['title'];
$pageDesc      = $p['meta'];
$pageCanonical = SITE_URL . $p['url'];
$pageRobots    = $p['robots'];
$pageSchemas   = array_merge(
    [schema_collection($p['titre'], $p['url'], array_map(static fn(array $q): array => [$q['titre'], $q['url']], array_values($elements)), SITE_URL)],
    schema_page_registre($p, $miettes, SITE_URL)
);

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content" class="registre registre--hub">
  <?php include __DIR__ . '/partials/registre/hero.php'; ?>
  <div class="conteneur">
    <?php if ($elements): ?>
    <ul class="grille-cartes liste-hub">
      <?php foreach ($elements as $q): ?>
      <li><a class="carte-hub carte-halo" href="<?= sanitize($q['url']) ?>">
        <?php if (($e = REGISTRE_ETIQUETTES[$q['type']] ?? '') !== ''): ?><span class="pastille-domaine"><?= sanitize($e) ?></span><?php endif; ?>
        <h2><?= sanitize($q['titre']) ?></h2>
        <p><?= sanitize($q['meta']) ?></p>
      </a></li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    <div class="registre__article registre__article--hub">
      <?= blocs_rendre($p['sections']) ?>
      <?php if (!empty($p['faq'])): ?><?= bloc_rendre(['type' => 'faq', 'titre' => 'Questions fréquentes', 'items' => $p['faq']]) ?><?php endif; ?>
      <?php if (!empty($p['sources'])): ?><?= bloc_rendre(['type' => 'sources', 'titre' => 'Sources', 'items' => $p['sources']]) ?><?php endif; ?>
    </div>
  </div>
  <?php include __DIR__ . '/partials/registre/liens.php'; ?>
</main>
<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
```

Les cartes portent un `<h2>` : un seul `<h1>` par page reste vrai.

- [ ] **Step 7 : CSS (fin de `portfolio-v2.css`)**

```css
/* ---------- Pages de registre (vague 0C) ---------- */
.pv2 .registre-hero{padding:1.5rem 0 2.5rem}
.pv2 .registre-hero__grille{display:grid;gap:2rem;align-items:start}
.pv2 .registre-hero h1{font-family:var(--titres);font-weight:700;font-size:clamp(2rem,1.2rem + 3vw,3.25rem);line-height:1.12;letter-spacing:-.015em;margin:1rem 0 0;max-width:24ch;color:var(--ink)}
.pv2 .registre-hero__bref{margin:1.25rem 0 0;max-width:62ch;padding:1rem 1.2rem;border-left:4px solid var(--link);background:#fff;border-radius:0 var(--radius) var(--radius) 0;font-size:1.08rem;color:var(--ink-soft)}
.pv2 .registre-hero__mention{margin:.9rem 0 0;font-size:.92rem;font-weight:600;color:var(--brand)}
.pv2 .registre-hero__maj{margin:.9rem 0 0;font-size:.88rem;color:var(--muted)}
.pv2 .panneau-faits{padding:1.25rem 1.4rem;background:#fff;border:1px solid var(--line);border-radius:var(--radius-lg);box-shadow:var(--shadow-card)}
.pv2 .panneau-faits dl{margin:0;display:grid;gap:.9rem}
.pv2 .panneau-faits dt{font-size:.78rem;font-weight:600;letter-spacing:.05em;text-transform:uppercase;color:var(--muted)}
.pv2 .panneau-faits dd{margin:.15rem 0 0;font-weight:600;color:var(--ink)}
.pv2 .registre__corps{display:grid;gap:2rem;padding-bottom:2rem}
.pv2 .registre__article{min-width:0}
.pv2 .sommaire{padding:1rem 1.2rem;border:1px solid var(--line);border-radius:var(--radius-lg);background:#fff;font-size:.92rem}
.pv2 .sommaire__titre{margin:0 0 .5rem;font-weight:700;color:var(--ink)}
.pv2 .sommaire ol{margin:0;padding-left:1.1rem;display:grid;gap:.35rem}
.pv2 .sommaire a{color:var(--ink-soft);text-decoration:underline;text-underline-offset:3px;text-decoration-color:var(--line-strong)}
.pv2 .sommaire a[aria-current]{color:var(--link);font-weight:600;text-decoration-color:var(--link)}
.pv2 .boite-auteur{display:grid;grid-template-columns:96px 1fr;gap:1.25rem;align-items:start;margin:3rem 0 0;padding:1.5rem;border:1px solid var(--line);border-radius:var(--radius-lg);background:#FBF8F4}
.pv2 .boite-auteur img{border-radius:var(--radius);object-fit:cover;width:96px;height:128px}
.pv2 .boite-auteur p{margin:0 0 .5rem;color:var(--ink-soft)}
.pv2 .boite-auteur__nom{font-family:var(--titres);font-weight:700;font-size:1.1rem}
.pv2 .boite-auteur__nom a{color:var(--ink);text-decoration:underline;text-underline-offset:3px}
.pv2 .boite-auteur__titre{font-size:.9rem;color:var(--muted)!important}
.pv2 .liens-lies{padding-top:2rem;padding-bottom:3rem}
.pv2 .liens-lies h2{font-family:var(--titres);font-size:1.5rem;margin:0 0 1.25rem}
.pv2 .liens-lies__grille{display:grid;gap:1.5rem;grid-template-columns:repeat(auto-fit,minmax(min(100%,15rem),1fr))}
.pv2 .liens-lies h3{font-size:.85rem;font-weight:700;letter-spacing:.05em;text-transform:uppercase;color:var(--muted);margin:0 0 .6rem}
.pv2 .liens-lies ul{list-style:none;margin:0;padding:0;display:grid;gap:.45rem}
.pv2 .liens-lies a{color:var(--link);text-decoration:underline;text-underline-offset:3px}
.pv2 .liste-hub{list-style:none;margin:0 0 3rem;padding:0}
.pv2 .carte-hub{display:flex;flex-direction:column;gap:.6rem;height:100%;padding:1.4rem;color:var(--ink)}
.pv2 .carte-hub h2{font-family:var(--titres);font-size:1.15rem;margin:0;color:var(--ink)}
.pv2 .carte-hub p{margin:0;font-size:.93rem;color:var(--ink-soft)}
@media (min-width:1024px){
  .pv2 .registre-hero__grille{grid-template-columns:minmax(0,1fr) 20rem;gap:3rem}
  .pv2 .registre__corps{grid-template-columns:16rem minmax(0,1fr);gap:3.5rem;align-items:start}
  .pv2 .sommaire{position:sticky;top:calc(var(--header-h) + 1.5rem)}
}
```

- [ ] **Step 8 : lancer, constater le succès**

Run: `php tools/tests/run.php Gabarit` puis `php tools/tests/run.php`
Expected: PASS.

- [ ] **Step 9 : commit**

```bash
git add portfolio/registre.php portfolio/registre-hub.php portfolio/partials/registre portfolio/partials/boite-auteur.php helpers/registres.php helpers/maillage.php assets/css/portfolio-v2.css tools/tests/GabaritTest.php tools/tests/fixtures
git commit -m "Gabarits des pages de registre et des hubs : hero, sommaire, blocs, FAQ, sources, auteur, liens lies"
```

---

### Task 6: Routeur

**Files:**
- Create: `helpers/routes.php` (chargé par `helpers/functions.php` après `maillage.php`)
- Modify: `portfolio/route.php` (réécrit), `portfolio/service.php` (priorité au registre), `.htaccess` (règles avant le fourre-tout)
- Test: `tools/tests/RouteTest.php`

**Interfaces:**
- Consumes: `registre_lire()`, `registre_publiee()` (Task 1) ; `registre.php`, `registre-hub.php` (Task 5).
- Produces: `ROUTES_REGISTRES` (motif => type, ordre significatif) ; `route_resoudre(string $chemin, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): ?array` (chemin sans barre initiale ; page publiée ou null) ; `route_404(): never`.

- [ ] **Step 1 : tests**

```php
<?php // tools/tests/RouteTest.php
declare(strict_types=1);

require_once racine('helpers/functions.php');

function test_route_resout_chaque_forme_d_url(): void
{
    $r = racine('tools/tests/fixtures/registres');
    $j = '2026-10-03';
    assert_same('service', route_resoudre('services/site-test', $r, $j)['type']);
    assert_same('service-pays', route_resoudre('services/site-test/benin', $r, $j)['type']);
    assert_same('hub', route_resoudre('histoires/', $r, $j)['type']);
    assert_same('formation', route_resoudre('formations/ia-test', $r, $j)['type']);
    assert_same('page', route_resoudre('page-test', $r, $j)['type']);
    assert_same('terme', route_resoudre('glossaire/terme-test', $r, $j)['type']);
}

function test_route_refuse_futur_inconnu_et_hostile(): void
{
    $r = racine('tools/tests/fixtures/registres');
    foreach (['services/site-futur', 'services/inconnu', 'services/../config/site', 'Services/site-test', 'services/site-test/', 'services/site-test/benin/x', 'formations/domaine/ia-test', '', 'zones/atlantide'] as $chemin) {
        assert_same(null, route_resoudre($chemin, $r, '2026-10-03'), $chemin === '' ? '(vide)' : $chemin);
    }
}

function test_route_htaccess_envoie_les_registres_au_routeur(): void
{
    $h = (string) file_get_contents(racine('.htaccess'));
    assert_contains('RewriteRule ^(secteurs|histoires|comparatifs|guides|glossaire)$ /$1/ [R=301,L]', $h);
    assert_contains('RewriteRule ^((?:services|formations|zones|secteurs|histoires|comparatifs|guides|glossaire|outils)/[a-z0-9-]+(?:/[a-z0-9-]+){0,2})$ /portfolio/route.php?p=$1 [QSA,L]', $h);
    assert_true(strpos($h, 'portfolio/route.php?p=$1 [QSA,L]') < strpos($h, 'RewriteRule ^(.*)$ /404.php [L]'), 'avant le fourre-tout');
}

function test_route_http_404_franc_et_historique_intact(): void
{
    assert_same(404, http_local('/histoires/')['code'], 'hub non publié');
    assert_same(404, http_local('/zones/benin')['code']);
    assert_same(404, http_local('/formations/ia-en-entreprise/benin/x')['code']);
    assert_same(301, http_local('/guides')['code']);
    assert_same('/guides/', parse_url((string) http_local('/guides')['location'], PHP_URL_PATH));
    assert_same(301, http_local('/formations/ia-en-entreprise/')['code']);
    assert_same(200, http_local('/formation-vibecoding')['code'], 'page historique');
    assert_same(200, http_local('/developpeur-web-cotonou')['code']);
    assert_same(404, http_local('/n-existe-pas')['code']);
}
```

- [ ] **Step 2 : lancer, constater l'échec**

Run: `php tools/tests/run.php Route`
Expected: FAIL (`route_resoudre` absente ; règles `.htaccess` absentes).

- [ ] **Step 3 : `helpers/routes.php`**

```php
<?php
// ============================================================
// helpers/routes.php · URL vers page de registre (spec 7.4), vague 0C.
// Pure : aucune sortie, testable sans serveur. L'ordre des motifs compte
// (domaine et metier avant formation × pays).
// ============================================================
declare(strict_types=1);

const ROUTES_REGISTRES = [
    '#^([a-z0-9-]+)/$#'                             => 'hub',
    '#^services/([a-z0-9-]+/[a-z0-9-]+)$#'          => 'service-pays',
    '#^services/([a-z0-9-]+)$#'                     => 'service',
    '#^zones/([a-z0-9-]+)$#'                        => 'pays',
    '#^formations/domaine/([a-z0-9-]+)$#'           => 'domaine',
    '#^formations/metier/([a-z0-9-]+/[a-z0-9-]+)$#' => 'metier-pays',
    '#^formations/metier/([a-z0-9-]+)$#'            => 'metier',
    '#^formations/([a-z0-9-]+/[a-z0-9-]+)$#'        => 'formation-pays',
    '#^formations/([a-z0-9-]+)$#'                   => 'formation',
    '#^secteurs/([a-z0-9-]+)$#'                     => 'secteur',
    '#^histoires/([a-z0-9-]+)$#'                    => 'histoire',
    '#^comparatifs/([a-z0-9-]+)$#'                  => 'comparatif',
    '#^guides/([a-z0-9-]+)$#'                       => 'guide',
    '#^glossaire/([a-z0-9-]+)$#'                    => 'terme',
    '#^outils/([a-z0-9-]+)$#'                       => 'outil',
    '#^([a-z0-9-]+)$#'                              => 'page',
];

/** Page publiée servie à ce chemin (sans barre initiale), ou null. */
function route_resoudre(string $chemin, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): ?array
{
    foreach (ROUTES_REGISTRES as $motif => $type) {
        if (preg_match($motif, $chemin, $m)) {
            $p = registre_lire($type, $m[1], $racine);
            return ($p !== null && registre_publiee($p, $aujourdhui)) ? $p : null;
        }
    }
    return null;
}

/** 404 franc, page d'erreur du site. */
function route_404(): never
{
    http_response_code(404);
    include __DIR__ . '/../404.php';
    exit;
}
```

- [ ] **Step 4 : `portfolio/route.php` réécrit**

```php
<?php
// ============================================================
// route.php · Routeur des URL sans règle dédiée dans .htaccess (vague 0C).
// Ordre : pages de registre publiées, pages historiques du registre « sujets »
// (un seul segment), 404 franc. La Task 7 insère les redirections en tête.
// ============================================================
require_once __DIR__ . '/../helpers/functions.php';

$chemin = (string) ($_GET['p'] ?? '');
if (!preg_match('#^[a-z0-9-]+(?:/[a-z0-9-]+){0,3}/?$#', $chemin)) {
    route_404();
}

if (($page = route_resoudre($chemin)) !== null) {
    require __DIR__ . '/partials/pv2-bootstrap.php';
    require __DIR__ . '/' . (in_array($page['type'], ['hub', 'domaine'], true) ? 'registre-hub.php' : 'registre.php');
    exit;
}

// Pages historiques (data/sujets/) : un seul segment.
if (!preg_match('#^[a-z0-9-]+$#', $chemin)) {
    route_404();
}
$slugDemande    = $chemin;
$sujetsRegistre = require __DIR__ . '/data/sujets.php';
$trouve = null;
foreach ($sujetsRegistre as $s) {
    foreach ($s['pages'] as $pg) {
        if (($pg['slug'] ?? '') === $slugDemande) {
            $trouve = [$s, $pg];
            break 2;
        }
    }
}
if ($trouve === null) {
    route_404();
}
[$sujet, $page] = $trouve;
require __DIR__ . '/sujet.php';
```

Avant d'écrire, relire l'ancien `route.php` (48 lignes) : conserver toute variable que `sujet.php` lit encore (relevé : `$sujetsRegistre`, `$sujet`, `$page`).

- [ ] **Step 5 : `.htaccess`**

Juste avant la ligne `RewriteRule ^([a-z0-9-]+)/$ /$1 [R=301,L]` du fourre-tout (après les règles `zones/` et `developpeur-web-`) :

```apache
# ----------------------------------------------------------
# Registres (vague 0C) : hubs et pages à plusieurs segments servis par route.php.
# /services/{slug} reste sur service.php, qui consulte d'abord le registre.
# ----------------------------------------------------------
RewriteRule ^(secteurs|histoires|comparatifs|guides|glossaire)$ /$1/ [R=301,L]
RewriteRule ^((?:services|formations|zones|secteurs|histoires|comparatifs|guides|glossaire|outils)/[a-z0-9-]+(?:/[a-z0-9-]+){0,2})/$ /$1 [R=301,L]
RewriteRule ^((?:secteurs|histoires|comparatifs|guides|glossaire)/)$ /portfolio/route.php?p=$1 [QSA,L]
RewriteRule ^((?:services|formations|zones|secteurs|histoires|comparatifs|guides|glossaire|outils)/[a-z0-9-]+(?:/[a-z0-9-]+){0,2})$ /portfolio/route.php?p=$1 [QSA,L]
```

- [ ] **Step 6 : `portfolio/service.php`, priorité au registre**

Juste après l'inclusion de `pv2-bootstrap.php` et avant `exiger_base($pdo)` :

```php
// Vague 0C : un pilier publié dans data/services/ remplace la fiche en base.
$slugRegistre = (string) ($_GET['slug'] ?? '');
if (preg_match('#^[a-z0-9-]+$#', $slugRegistre) && ($page = route_resoudre('services/' . $slugRegistre)) !== null) {
    require __DIR__ . '/registre.php';
    exit;
}
```

- [ ] **Step 7 : lancer, constater le succès**

Run: `php tools/tests/run.php Route` puis `php tools/tests/run.php`
Expected: PASS ; `HtaccessTest`, `AmorcageTest` et `SitemapTest` restent verts.

- [ ] **Step 8 : commit**

```bash
git add helpers/routes.php helpers/functions.php portfolio/route.php portfolio/service.php .htaccess tools/tests/RouteTest.php
git commit -m "Routeur : pages de registre publiees, hubs, pages historiques, 404 franc"
```

---

### Task 7: Table des redirections et URL finales

**Files:**
- Create: `portfolio/data/redirections.php`, `helpers/redirections.php` (chargé par `helpers/functions.php` après `routes.php`)
- Modify: `portfolio/partials/pv2-bootstrap.php`, `portfolio/article.php`, `portfolio/route.php` (application) ; `portfolio/partials/pv2-header.php`, `portfolio/partials/pv2-footer.php`, `portfolio/accueil.php` (liens via l'URL finale)
- Test: `tools/tests/RedirectionsTest.php`

**Interfaces:**
- Consumes: `route_resoudre()` (Task 6), `ROUTES_REGISTRES`, `pays_liste()`.
- Produces: `redirections_table(): array` (ancien chemin => cible) ; `redirection_cible(string $chemin, ?array $table = null, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): ?string` ; `url_finale(string $url, ?array $table = null, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): string` (garde l'ancre) ; `redirection_appliquer(string $chemin): void` (301 vers `SITE_URL . cible` puis exit) ; `navigation_chargee(): array` (`data/navigation.php` avec chaque URL passée par `url_finale`).

- [ ] **Step 1 : tests**

```php
<?php // tools/tests/RedirectionsTest.php
declare(strict_types=1);

require_once racine('helpers/functions.php');

function test_redirections_table_conforme_a_la_spec(): void
{
    $t = redirections_table();
    assert_true(count($t) >= 66, count($t) . ' entrées');
    foreach ($t as $de => $vers) {
        assert_true(str_starts_with($de, '/') && str_starts_with($vers, '/'), $de);
        assert_true(!isset($t[$vers]), "chaîne : {$de} vers {$vers}");
        $resolue = false;
        foreach (array_keys(ROUTES_REGISTRES) as $motif) { if (preg_match($motif, ltrim($vers, '/'), $m)) { $resolue = true; break; } }
        assert_true($resolue, "cible hors registres : {$vers}");
    }
    assert_same('/formations/ia-en-entreprise/benin', $t['/formation-ia-entreprise-natitingou']);
    assert_same('/services/externalisation-developpement/canada', $t['/externaliser-developpement-web-quebec']);
    assert_same('/services/integration-odoo/cote-d-ivoire', $t['/integration-odoo-abidjan']);
    assert_same('/histoires/', $t['/realisations/']);
}

function test_redirections_actives_seulement_vers_une_cible_publiee(): void
{
    $r = racine('tools/tests/fixtures/registres');
    $table = ['/ancienne' => '/services/site-test', '/vers-futur' => '/services/site-futur'];
    assert_same('/services/site-test', redirection_cible('/ancienne', $table, $r, '2026-10-03'));
    assert_same(null, redirection_cible('/vers-futur', $table, $r, '2026-10-03'));
    assert_same(null, redirection_cible('/inconnue', $table, $r, '2026-10-03'));
    assert_same('/services/site-test#faq', url_finale('/ancienne#faq', $table, $r, '2026-10-03'));
    assert_same('/contact', url_finale('/contact', $table, $r, '2026-10-03'));
}

function test_redirections_inactives_aujourd_hui_les_anciennes_pages_repondent(): void
{
    assert_same(200, http_local('/formation-ia-entreprise-cotonou')['code']);
    assert_same(200, http_local('/integration-odoo-cotonou')['code']);
}

function test_redirections_appliquees_partout_et_liens_finaux(): void
{
    foreach (['portfolio/partials/pv2-bootstrap.php', 'portfolio/article.php', 'portfolio/route.php'] as $f) {
        assert_contains('redirection_appliquer(', (string) file_get_contents(racine($f)), $f);
    }
    foreach (['portfolio/partials/pv2-header.php', 'portfolio/accueil.php'] as $f) {
        assert_contains('navigation_chargee()', (string) file_get_contents(racine($f)), $f);
    }
    assert_contains('url_finale(', (string) file_get_contents(racine('portfolio/partials/pv2-footer.php')));
}
```

- [ ] **Step 2 : lancer, constater l'échec**

Run: `php tools/tests/run.php Redirections`
Expected: FAIL, « Call to undefined function redirections_table() ».

- [ ] **Step 3 : `portfolio/data/redirections.php`**

```php
<?php
// ============================================================
// data/redirections.php · Table unique des redirections 301 (spec 6.8), vague 0C.
// Une entrée ne s'active que le jour où sa cible est publiée (redirection_cible()) :
// d'ici là, l'ancienne page reste en ligne. Jamais de chaîne.
// ============================================================
declare(strict_types=1);

$paysDesVilles = [
    'cotonou' => 'benin', 'abomey-calavi' => 'benin', 'porto-novo' => 'benin', 'parakou' => 'benin', 'bohicon' => 'benin',
    'abomey' => 'benin', 'ouidah' => 'benin', 'lokossa' => 'benin', 'natitingou' => 'benin', 'djougou' => 'benin',
    'abidjan' => 'cote-d-ivoire', 'dakar' => 'senegal', 'lome' => 'togo',
    'paris' => 'france', 'lyon' => 'france', 'marseille' => 'france', 'bruxelles' => 'belgique',
    'geneve' => 'suisse', 'lausanne' => 'suisse', 'montreal' => 'canada', 'quebec' => 'canada',
];

$r = [];
foreach ($paysDesVilles as $ville => $pays) {
    $r['/formation-ia-entreprise-' . $ville] = '/formations/ia-en-entreprise/' . $pays;
}
foreach (['abidjan', 'abomey-calavi', 'bohicon', 'cotonou', 'dakar', 'lome', 'ouidah', 'parakou', 'porto-novo'] as $ville) {
    $r['/integration-odoo-' . $ville]     = '/services/integration-odoo/' . $paysDesVilles[$ville];
    $r['/integration-dolibarr-' . $ville] = '/services/integration-dolibarr/' . $paysDesVilles[$ville];
}
foreach (['paris', 'lyon', 'marseille', 'bruxelles', 'geneve', 'lausanne', 'montreal', 'quebec'] as $ville) {
    $r['/externaliser-developpement-web-' . $ville] = '/services/externalisation-developpement/' . $paysDesVilles[$ville];
}
foreach (['obaprodc', 'toure-distribution', 'api-decoupage-benin', 'maho-multiservices', 'myrmasbio', 'portfolio-prudence'] as $slug) {
    $r['/realisations/' . $slug] = '/histoires/' . $slug;
}

return $r + [
    '/formation-ia-entreprise'              => '/formations/ia-en-entreprise',
    '/formation-automatisation'             => '/formations/n8n',
    '/formation-outils-numeriques'          => '/formations/excel-google-sheets',
    '/formation-developpement-web'          => '/formations/developpement-web',
    '/services/formation-en-programmation'  => '/formations/developpement-web',
    '/formation-odoo'                       => '/formations/odoo-utilisateurs',
    '/formation-dolibarr'                   => '/formations/dolibarr-utilisateurs',
    '/formation-seo-visibilite-google'      => '/formations/visibilite-google',
    '/formation-vibecoding'                 => '/formations/vibecoding',
    '/formation-whatsapp-business'          => '/formations/whatsapp-business',
    '/consultant-digitalisation'            => '/services/consultant-digitalisation',
    '/expert-digitalisation-entreprise'     => '/services/digitalisation-d-entreprise',
    '/realisations/'                        => '/histoires/',
];
```

Total : 21 + 18 + 8 + 6 + 13 = 66 entrées ; la Task 12 ajoute les articles de blog devenus comparatifs.

- [ ] **Step 4 : `helpers/redirections.php`**

```php
<?php
// ============================================================
// helpers/redirections.php · Redirections actives et URL finales (spec 6.8), vague 0C.
// ============================================================
declare(strict_types=1);

function redirections_table(): array
{
    static $t = null;
    return $t ??= require __DIR__ . '/../portfolio/data/redirections.php';
}

/** Cible d'une ancienne URL si elle est publiée, sinon null. */
function redirection_cible(string $chemin, ?array $table = null, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): ?string
{
    $cible = ($table ?? redirections_table())[$chemin] ?? null;
    if ($cible === null) {
        return null;
    }
    return route_resoudre(ltrim($cible, '/'), $racine, $aujourdhui) !== null ? $cible : null;
}

/** Lien interne vers son URL finale (ancre conservée) : aucun lien du site ne passe par une 301. */
function url_finale(string $url, ?array $table = null, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): string
{
    $chemin = (string) (parse_url($url, PHP_URL_PATH) ?? '');
    $ancre  = (string) (parse_url($url, PHP_URL_FRAGMENT) ?? '');
    $cible  = $chemin !== '' ? redirection_cible($chemin, $table, $racine, $aujourdhui) : null;
    return $cible === null ? $url : $cible . ($ancre !== '' ? '#' . $ancre : '');
}

/** 301 immédiat si le chemin demandé a une redirection active. */
function redirection_appliquer(string $chemin): void
{
    if (($cible = redirection_cible($chemin)) !== null) {
        header('Location: ' . SITE_URL . $cible, true, 301);
        exit;
    }
}

/** Registre de navigation avec chaque URL ramenée à son URL finale. */
function navigation_chargee(): array
{
    $nav = require __DIR__ . '/../portfolio/data/navigation.php';
    array_walk_recursive($nav, static function (&$v, $k): void {
        if (is_string($v) && str_starts_with($v, '/')) {
            $v = url_finale($v);
        }
    });
    return $nav;
}
```

- [ ] **Step 5 : application**

- `pv2-bootstrap.php`, juste après le chargement de `helpers/functions.php` et avant toute connexion à la base : `redirection_appliquer((string) (parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/'));`
- `article.php`, même ligne juste après ses `require` de helpers.
- `route.php`, juste après la validation du chemin : `redirection_appliquer('/' . $chemin);`
- `pv2-header.php` et `accueil.php` : remplacer `require __DIR__ . '/../data/navigation.php'` (resp. `require __DIR__ . '/data/navigation.php'`) par `navigation_chargee()`.
- `pv2-footer.php` : chaque `href="/..."` écrit en dur passe par `<?= sanitize(url_finale('/...')) ?>`.

- [ ] **Step 6 : lancer, constater le succès**

Run: `php tools/tests/run.php Redirections` puis `php tools/tests/run.php`
Expected: PASS (l'en-tête, le pied et l'accueil rendent les mêmes URL qu'avant, aucune cible n'étant publiée).

- [ ] **Step 7 : commit**

```bash
git add portfolio/data/redirections.php helpers/redirections.php helpers/functions.php portfolio/partials portfolio/article.php portfolio/route.php portfolio/accueil.php tools/tests/RedirectionsTest.php
git commit -m "Table des redirections 6.8, actives a la publication de leur cible ; liens internes vers l'URL finale"
```

---

### Task 8: Sitemap et llms.txt depuis les registres

**Files:**
- Modify: `helpers/functions.php` (sitemap), `helpers/llms.php`
- Test: `tools/tests/SitemapTest.php`, `tools/tests/LlmsTest.php`

**Interfaces:**
- Consumes: `registre_publiees()`, `REGISTRES_TYPES` (Task 1), `redirection_cible()` (Task 7).
- Produces: `sitemap_entrees_registres(string $baseUrl, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): array` (entrées `loc`, `lastmod` = `maj`, `changefreq`, `priority`) ; `llms_registres(string $base, bool $complet, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): array` (titre de section => items `titre`, `url`, `resume`).

- [ ] **Step 1 : tests**

Dans `SitemapTest.php` :

```php
function test_sitemap_registres_publies_indexables_date_maj(): void
{
    require_once racine('helpers/functions.php');
    $e = sitemap_entrees_registres('https://richardsalanon.com', racine('tools/tests/fixtures/registres'), '2026-10-03');
    $par = array_column($e, 'lastmod', 'loc');
    assert_same('2026-01-02', $par['https://richardsalanon.com/services/site-test'] ?? null);
    assert_true(isset($par['https://richardsalanon.com/histoires/']), 'hub publié');
    assert_true(!isset($par['https://richardsalanon.com/services/site-futur']), 'date future');
    assert_true(!isset($par['https://richardsalanon.com/page-legale-test']), 'noindex');
}

function test_sitemap_exclut_les_anciennes_url_redirigees(): void
{
    $xml = buildSitemapXml(null, 'https://richardsalanon.com');
    foreach (redirections_table() as $de => $vers) {
        if (redirection_cible($de) !== null) {
            assert_not_contains('<loc>https://richardsalanon.com' . $de . '</loc>', $xml, $de);
        }
    }
}
```

Dans `LlmsTest.php` :

```php
function test_llms_registres_par_type_matrice_en_version_complete(): void
{
    require_once racine('helpers/functions.php');
    $r = racine('tools/tests/fixtures/registres');
    $court = llms_registres('https://richardsalanon.com', false, $r, '2026-10-03');
    assert_same('https://richardsalanon.com/comparatifs/a-vs-b', $court['Comparatifs'][0]['url']);
    assert_true(!isset($court['Pages par pays']));
    $long = llms_registres('https://richardsalanon.com', true, $r, '2026-10-03');
    assert_contains('/services/site-test/benin', implode(' ', array_column($long['Pages par pays'], 'url')));
    assert_not_contains('site-futur', json_encode($long));
}
```

- [ ] **Step 2 : lancer, constater l'échec**

Run: `php tools/tests/run.php Sitemap` puis `php tools/tests/run.php Llms`
Expected: FAIL, fonctions absentes.

- [ ] **Step 3 : sitemap (`helpers/functions.php`)**

```php
/** Pages de registre publiées et indexables ; lastmod = champ « maj » tenu à la main (spec 4.2). */
function sitemap_entrees_registres(string $baseUrl, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): array
{
    $base = rtrim($baseUrl, '/');
    $entrees = [];
    foreach (array_keys(REGISTRES_TYPES) as $type) {
        foreach (registre_publiees($type, $racine, $aujourdhui) as $p) {
            if (($p['robots'] ?? 'index') !== 'index') {
                continue;
            }
            $entrees[] = ['loc' => $base . $p['url'], 'lastmod' => $p['maj'], 'changefreq' => 'monthly',
                          'priority' => in_array($type, ['service', 'formation', 'pays', 'hub'], true) ? '0.9' : '0.8'];
        }
    }
    return $entrees;
}
```

Dans `sitemap_entrees_fichiers()`, placer `sitemap_entrees_registres($baseUrl)` **en tête** du tableau retourné (un pilier publié l'emporte sur la fiche en base de même URL, `sitemap_xml()` gardant la première occurrence). Dans `buildSitemapXml()`, filtrer avant `sitemap_xml()` :

```php
$entrees = array_filter($entrees, static fn(array $e): bool =>
    redirection_cible((string) (parse_url($e['loc'], PHP_URL_PATH) ?? '')) === null);
```

- [ ] **Step 4 : llms (`helpers/llms.php`)**

```php
/** Sections de llms.txt issues des registres (pages publiées et indexables). */
function llms_registres(string $base, bool $complet, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): array
{
    $titres = ['service' => 'Services', 'formation' => 'Formations', 'domaine' => 'Formations', 'metier' => 'Formations par métier',
               'pays' => 'Pays', 'secteur' => 'Secteurs', 'histoire' => 'Histoires', 'comparatif' => 'Comparatifs',
               'guide' => 'Guides', 'terme' => 'Glossaire', 'outil' => 'Outils', 'page' => 'Pages',
               'service-pays' => 'Pages par pays', 'formation-pays' => 'Pages par pays', 'metier-pays' => 'Pages par pays'];
    $base = rtrim($base, '/');
    $sections = [];
    foreach ($titres as $type => $titre) {
        if (!$complet && $titre === 'Pages par pays') {
            continue;
        }
        foreach (registre_publiees($type, $racine, $aujourdhui) as $p) {
            if (($p['robots'] ?? 'index') === 'index') {
                $sections[$titre][] = ['titre' => $p['titre'], 'url' => $base . $p['url'], 'resume' => $p['meta']];
            }
        }
    }
    return $sections;
}
```

Dans `llms_collecter()`, après le calcul des sections existantes : fusionner `llms_registres($base, $complet)` (les items du registre en premier dans chaque section, doublons d'URL retirés), puis retirer tout item dont le chemin a une redirection active (`redirection_cible()` non nul).

- [ ] **Step 5 : lancer, constater le succès**

Run: `php tools/tests/run.php`
Expected: PASS ; `SitemapTest` garde au moins 90 URL de fichiers.

- [ ] **Step 6 : commit**

```bash
git add helpers/functions.php helpers/llms.php tools/tests/SitemapTest.php tools/tests/LlmsTest.php
git commit -m "Sitemap et llms.txt nourris par les registres ; anciennes URL redirigees retirees"
```

---

### Task 9: Mentions légales et confidentialité

**Files:**
- Create: `portfolio/data/pages/mentions-legales.php`, `portfolio/data/pages/confidentialite.php`
- Modify: `portfolio/partials/pv2-head.php` (`noindex` devient `noindex, follow`), `portfolio/partials/pv2-footer.php` (liens dans `.pied__bas`), `tools/tests/GabaritTest.php` (attente `noindex, follow`)
- Test: `tools/tests/LegalesTest.php`

**Interfaces:**
- Consumes: type `page` (Tasks 1, 5, 6). Les fichiers de données appellent `fait()` : aucune coordonnée tapée en double.
- Faits vérifiés le 03/10/2026 : hébergeur « HOSTINGER INTERNATIONAL LIMITED, 61 Lordou Vironos str., 6023 Larnaca, Chypre » (https://www.hostinger.com/legal/universal-terms-of-service-agreement) ; « Loi n° 2017-20 du 20 avril 2018 portant code du numérique en République du Bénin » (https://sgg.gouv.bj/doc/loi-2017-20/) ; autorité : APDP (https://apdp.bj). IFU et statut : `fait('ifu')`, `fait('statut')`.

- [ ] **Step 1 : tests**

```php
<?php // tools/tests/LegalesTest.php
declare(strict_types=1);

function test_legales_servies_noindex_follow_avec_les_faits(): void
{
    $m = http_local('/mentions-legales');
    assert_same(200, $m['code']);
    assert_contains('<meta name="robots" content="noindex, follow">', $m['corps']);
    foreach (['0202348994221', 'Hostinger International Limited', 'Larnaca', 'Loi n° 2017-20', 'Cotonou'] as $fait) {
        assert_contains($fait, $m['corps'], $fait);
    }
    $c = http_local('/confidentialite');
    assert_same(200, $c['code']);
    foreach (['Google Analytics', 'Clarity', 'APDP', 'richardsomasse@gmail.com'] as $fait) {
        assert_contains($fait, $c['corps'], $fait);
    }
}

function test_legales_liees_depuis_le_pied_et_hors_sitemap(): void
{
    $accueil = http_local('/')['corps'];
    assert_contains('href="/mentions-legales"', $accueil);
    assert_contains('href="/confidentialite"', $accueil);
    $xml = http_local('/sitemap.xml')['corps'];
    assert_not_contains('/mentions-legales<', $xml);
}
```

- [ ] **Step 2 : lancer, constater l'échec**

Run: `php tools/tests/run.php Legales`
Expected: FAIL (404).

- [ ] **Step 3 : `portfolio/data/pages/mentions-legales.php`**

```php
<?php
// Mentions légales (vague 0C). Exception à la règle des 3 200 mots : noindex, follow (spec 7.2).
declare(strict_types=1);

return [
    'titre'   => 'Mentions légales',
    'title'   => 'Mentions légales de richardsalanon.com | Richard SALANON',
    'meta'    => 'Éditeur, hébergeur, propriété des contenus et droit applicable du site richardsalanon.com, édité par Richard SALANON, entrepreneur à Cotonou.',
    'en_bref' => 'Le site richardsalanon.com est édité par ' . fait('nom') . ', entrepreneur individuel établi à ' . fait('ville') . ' (' . fait('pays') . '), et hébergé par Hostinger International Limited.',
    'publie'  => '2026-10-03',
    'maj'     => '2026-10-03',
    'robots'  => 'noindex',
    'schema'  => 'WebPage',
    'sections' => [
        ['type' => 'prose', 'titre' => 'Qui édite ce site ?', 'paragraphes' => [
            'Le site richardsalanon.com est édité par <strong>' . fait('nom') . '</strong>, ' . mb_strtolower(fait('intitule')) . ', exerçant sous le statut d\'' . mb_strtolower(fait('statut')) . ' à ' . fait('ville') . ', ' . fait('pays') . '.',
            'Identifiant fiscal unique (IFU) : ' . fait('ifu') . '. Adresse électronique : <a href="mailto:' . fait('email') . '">' . fait('email') . '</a>. Téléphone et WhatsApp : ' . fait('telephone') . '.',
            'Directeur de la publication : ' . fait('nom') . '.',
        ]],
        ['type' => 'prose', 'titre' => 'Qui héberge ce site ?', 'paragraphes' => [
            'Le site est hébergé par <strong>Hostinger International Limited</strong>, société de droit chypriote, 61 Lordou Vironos str., 6023 Larnaca, Chypre (<a href="https://www.hostinger.com">www.hostinger.com</a>).',
        ]],
        ['type' => 'prose', 'titre' => 'À qui appartiennent les contenus ?', 'paragraphes' => [
            'Les textes, illustrations, photographies et le logo du site sont la propriété de ' . fait('nom') . ', sauf mention contraire. Toute reproduction ou réutilisation, totale ou partielle, demande une autorisation écrite préalable.',
            'Les noms et logos des clients présentés appartiennent à leurs titulaires ; ils figurent ici pour illustrer des projets réellement réalisés. Une citation courte d\'un contenu du site est permise si elle mentionne sa source avec un lien vers la page citée.',
        ]],
        ['type' => 'prose', 'titre' => 'Comment sont traitées vos données ?', 'paragraphes' => [
            'Le traitement des données personnelles et la mesure d\'audience sont décrits dans la <a href="/confidentialite">politique de confidentialité</a>.',
        ]],
        ['type' => 'prose', 'titre' => 'Quel droit s\'applique ?', 'paragraphes' => [
            'Le site et ses mentions relèvent du droit béninois, notamment de la loi n° 2017-20 du 20 avril 2018 portant code du numérique en République du Bénin. Tout litige relève des juridictions compétentes de Cotonou, sauf disposition impérative contraire.',
        ]],
        ['type' => 'prose', 'titre' => 'Comment signaler un contenu ?', 'paragraphes' => [
            'Pour signaler une erreur, un contenu illicite ou demander un retrait, écrivez à <a href="mailto:' . fait('email') . '">' . fait('email') . '</a> en précisant l\'adresse de la page concernée.',
        ]],
    ],
    'faq'     => [],
    'sources' => [
        ['titre' => 'Hostinger, conditions générales (entité contractante)', 'url' => 'https://www.hostinger.com/legal/universal-terms-of-service-agreement', 'date' => '2026-10-03'],
        ['titre' => 'Loi n° 2017-20 du 20 avril 2018 portant code du numérique en République du Bénin', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-03'],
    ],
    'liens'   => [],
];
```

`bloc_texte` ne restaure pas `mailto:` : remplacer les liens `mailto:` par le texte de l'adresse seul, ou ajouter `mailto:` aux schémas acceptés de `bloc_texte` et `bloc_href` (choix retenu : l'ajouter, avec un test dans `BlocsTest` : `<a href="mailto:x@y.z">` restauré, `mailto:` sans `@` refusé). Compter la meta à l'exécution (140 à 155) et ajuster.

- [ ] **Step 4 : `portfolio/data/pages/confidentialite.php`**

Même gabarit de fichier (`'robots' => 'noindex'`, `'schema' => 'WebPage'`, title « Confidentialité et données personnelles | Richard SALANON », meta de 140 à 155 caractères). Sections `prose`, chacune titrée par une question :

1. « Quelles données sont collectées ? » : les messages que vous envoyez par e-mail, WhatsApp ou téléphone (nom, coordonnées, contenu du message) ; les journaux techniques de l'hébergeur ; les statistiques de visite décrites plus bas. Aucun compte utilisateur, aucune vente de données.
2. « Pourquoi ces données ? » : répondre à votre demande, préparer un devis, assurer le suivi d'un projet ; mesurer l'audience pour améliorer le site.
3. « Quels outils de mesure d'audience ? » : Google Analytics 4 (Google) et Microsoft Clarity (Microsoft) déposent des cookies de mesure ; ces services peuvent traiter des données hors du Bénin, notamment aux États-Unis ; leurs durées de conservation suivent leurs propres réglages ; refus possible en bloquant les cookies du navigateur ou avec le module officiel de désactivation de Google Analytics (https://tools.google.com/dlpage/gaoptout).
4. « Combien de temps sont-elles gardées ? » : les échanges commerciaux sont conservés tant que la relation est active, puis au plus trois ans après le dernier contact, sauf obligation légale de conservation plus longue (factures).
5. « Quels sont vos droits ? » : accès, rectification, effacement, opposition et limitation, au titre du code du numérique béninois et, pour les résidents de l'Union européenne, du RGPD ; demande à `fait('email')` ; réponse sous un mois ; réclamation possible auprès de l'APDP (https://apdp.bj) ou de l'autorité de votre pays (CNIL en France).
6. « Qui est responsable du traitement ? » : `fait('nom')`, `fait('ville')`, `fait('pays')`, `fait('email')`.

Sources : Loi n° 2017-20 (sgg.gouv.bj, 03/10/2026) ; APDP (https://apdp.bj, 03/10/2026) ; Google Analytics, module de désactivation (https://tools.google.com/dlpage/gaoptout, 03/10/2026).

Point à signaler à Richard dans le compte rendu (pas de code ici) : aucun bandeau de consentement n'existe ; pour les visiteurs européens, GA4 et Clarity demandent un consentement préalable.

- [ ] **Step 5 : `pv2-head.php` et pied**

`pv2-head.php` : `content="<?= $pageRobots === 'noindex' ? 'noindex, follow' : 'index, follow' ?>"`. Mettre à jour l'attente de `test_gabarit_page_noindex_respectee` en `noindex, follow`.

`pv2-footer.php`, dans `.pied__bas` après le copyright : `<p><a href="/mentions-legales">Mentions légales</a> · <a href="/confidentialite">Confidentialité</a></p>`.

- [ ] **Step 6 : lancer, constater le succès**

Run: `php tools/tests/run.php`
Expected: PASS.

- [ ] **Step 7 : commit**

```bash
git add portfolio/data/pages portfolio/partials/pv2-head.php portfolio/partials/pv2-footer.php helpers/blocs.php tools/tests/LegalesTest.php tools/tests/GabaritTest.php tools/tests/BlocsTest.php
git commit -m "Mentions legales et confidentialite (noindex, follow) depuis la fiche de faits ; liens au pied"
```

---

### Task 10: Contrôles qualité des pages de registre (spec 8)

**Files:**
- Modify: `tools/qa/lib.php` (fonctions pures ajoutées)
- Create: `tools/qa/registres.php` (ligne de commande)
- Test: `tools/tests/QaTest.php`

**Interfaces:**
- Consumes: `qa_texte_principal`, `qa_compter_mots`, `qa_meta`, `qa_jsonld`, `qa_texte_interdit`, `qa_faits_incoherents`, `qa_bardeaux`, `qa_ressemblance`, `qa_part_propre`, `qa_noms_de_lieux` (existants) ; registres (Task 1) ; gabarits (Task 5).
- Produces: `qa_rendre_registre(array $page, string $racine = REGISTRES_RACINE): string` (rendu en mémoire, sans serveur, quelle que soit la date) ; `qa_devise_conforme(string $texte, string $devise): bool` ; `qa_faq_conforme(string $html): bool` (questions du FAQPage = `<details>` du bloc FAQ) ; `qa_controle_page(array $page, string $html): array` (échecs : `mots`, `title`, `meta`, `h1`, `schema`, `faq`, `texte`, `faits`, `prix`). CLI : `php tools/qa/registres.php [--racine=DOSSIER] [--publiees] [--type=TYPE] [--liens]`, sortie 1 en cas d'échec.

- [ ] **Step 1 : tests**

```php
function test_qa_devise_conforme_au_pays(): void
{
    require_once racine('tools/qa/lib.php');
    assert_true(qa_devise_conforme('Un site vitrine coûte 1 500 € en France.', 'EUR'));
    assert_true(!qa_devise_conforme('Comptez 450 000 FCFA à Paris.', 'EUR'));
    assert_true(!qa_devise_conforme('Prix : 300 000 XOF.', 'CAD'));
    assert_true(qa_devise_conforme('300 000 FCFA, soit environ 457 €.', 'XOF'));
    assert_true(!qa_devise_conforme('Environ 457 € seulement.', 'XOF'), 'prix africain toujours en devise locale');
}

function test_qa_faq_visible_egale_faqpage(): void
{
    require_once racine('tools/qa/lib.php');
    $ok = '<section class="bloc bloc--faq"><details><summary>A ?</summary></details><details><summary>B ?</summary></details></section>'
        . '<script type="application/ld+json">{"@graph":[{"@type":"FAQPage","mainEntity":[{"@type":"Question"},{"@type":"Question"}]}]}</script>';
    assert_true(qa_faq_conforme($ok));
    assert_true(!qa_faq_conforme(str_replace('<details><summary>B ?</summary></details>', '', $ok)));
}

function test_qa_controle_page_signale_une_page_trop_courte(): void
{
    require_once racine('tools/qa/lib.php');
    $r = racine('tools/tests/fixtures/registres');
    $p = registre_lire('formation', 'ia-test', $r);
    $echecs = qa_controle_page($p, qa_rendre_registre($p, $r));
    assert_contains('mots', implode(' ', $echecs));
    assert_true(!in_array('h1', $echecs, true));
    assert_true(!in_array('schema', $echecs, true));
}

function test_qa_cli_registres_echoue_sur_les_fixtures(): void
{
    exec(PHP_BINARY . ' ' . escapeshellarg(racine('tools/qa/registres.php')) . ' --racine=' . escapeshellarg(racine('tools/tests/fixtures/registres')) . ' 2>&1', $sortie, $code);
    assert_same(1, $code);
    assert_contains('formation/ia-test', implode("\n", $sortie));
}
```

- [ ] **Step 2 : lancer, constater l'échec**

Run: `php tools/tests/run.php Qa`
Expected: FAIL, fonctions absentes.

- [ ] **Step 3 : fonctions pures (`tools/qa/lib.php`)**

```php
/** Rendu en mémoire d'une page de registre (même gabarit que le site, date ignorée). */
function qa_rendre_registre(array $page, string $racine = REGISTRES_RACINE): string
{
    $registreRacine = $racine;
    $pdo = null; $userId = 0; $profile = []; $contactInfo = []; $socialLinks = [];
    $fullName = fait('nom'); $h_city = fait('ville'); $h_phone = fait('telephone'); $h_email = fait('email');
    $h_mailto = '/contact'; $h_logo = siteLogoUrl(); $portfolioUrl = SITE_URL;
    ob_start();
    include __DIR__ . '/../../portfolio/' . (in_array($page['type'], ['hub', 'domaine'], true) ? 'registre-hub.php' : 'registre.php');
    return (string) ob_get_clean();
}

/** Devise conforme (spec 6.4) : jamais de franc CFA hors d'Afrique, prix africain en devise locale. */
function qa_devise_conforme(string $texte, string $devise): bool
{
    $cfa  = (bool) preg_match('/\b(?:F\s?CFA|FCFA|XOF|XAF)\b/u', $texte);
    $euro = (bool) preg_match('/€|\bEUR\b|\beuros?\b/u', $texte);
    if (in_array($devise, ['EUR', 'CHF', 'CAD'], true)) {
        return !$cfa;
    }
    if (in_array($devise, ['XOF', 'XAF'], true) && $euro) {
        return $cfa;
    }
    return true;
}

/** Le FAQPage reprend exactement les questions visibles du bloc FAQ. */
function qa_faq_conforme(string $html): bool
{
    $visibles = 0;
    if (preg_match('#<section class="bloc bloc--faq"[^>]*>(.*?)</section>#s', $html, $m)) {
        $visibles = substr_count($m[1], '<details');
    }
    $declarees = 0;
    if (preg_match('#<script type="application/ld\+json">(.*?)</script>#s', $html, $j)) {
        foreach ((json_decode($j[1], true)['@graph'] ?? []) as $n) {
            if (($n['@type'] ?? '') === 'FAQPage') {
                $declarees = count($n['mainEntity'] ?? []);
            }
        }
    }
    return $visibles === $declarees;
}

/** Échecs de la section 8 pour une page rendue. */
function qa_controle_page(array $page, string $html): array
{
    $echecs = [];
    $texte  = qa_texte_principal($html);
    $meta   = qa_meta($html);
    $index  = ($page['robots'] ?? 'index') === 'index';
    if ($index && qa_compter_mots($texte) < 3200) {
        $echecs[] = 'mots (' . qa_compter_mots($texte) . ')';
    }
    $lt = mb_strlen(html_entity_decode($meta['title'], ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    $ld = mb_strlen(html_entity_decode($meta['description'], ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    if ($lt < 50 || $lt > 60) { $echecs[] = "title ({$lt})"; }
    if ($ld < 140 || $ld > 155) { $echecs[] = "meta ({$ld})"; }
    if ($meta['h1'] !== 1) { $echecs[] = 'h1'; }
    $ld_json = qa_jsonld($html);
    if ($ld_json['balises'] !== 1 || $ld_json['erreurs'] || array_intersect($ld_json['types'], QA_TYPES_INTERDITS)) { $echecs[] = 'schema'; }
    if (!qa_faq_conforme($html)) { $echecs[] = 'faq'; }
    if ($t = qa_texte_interdit($texte)) { $echecs[] = 'texte (' . implode(', ', $t) . ')'; }
    if ($f = qa_faits_incoherents($texte, faits())) { $echecs[] = 'faits (' . implode(', ', $f) . ')'; }
    $cle = str_ends_with($page['type'], '-pays') ? basename($page['slug']) : ($page['type'] === 'pays' ? $page['slug'] : null);
    if ($cle !== null && !qa_devise_conforme($texte, pays_liste()[$cle]['devise'])) { $echecs[] = 'prix'; }
    return $echecs;
}
```

Vérifier à l'exécution les clés réelles renvoyées par `qa_meta()` (`title`, `description`, `h1` : nombre de H1) et `qa_jsonld()` (`balises`, `types`, `erreurs`) et adapter ces lignes sans changer les règles.

- [ ] **Step 4 : `tools/qa/registres.php`**

```php
<?php
// ============================================================
// tools/qa/registres.php · Contrôles de la section 8 sur les pages de registre.
// Rendu en mémoire (aucun serveur requis), donc pages futures comprises.
// Usage : php tools/qa/registres.php [--racine=DOSSIER] [--publiees] [--type=TYPE] [--liens]
// Unicité : 40 % au plus avec une page sœur, 25 % au plus avec le parent, 60 % de texte propre.
// ============================================================
declare(strict_types=1);

require __DIR__ . '/../../helpers/functions.php';
require __DIR__ . '/lib.php';

$opts      = getopt('', ['racine:', 'publiees', 'type:', 'liens']);
$racine    = isset($opts['racine']) ? realpath((string) $opts['racine']) : REGISTRES_RACINE;
$types     = isset($opts['type']) ? [(string) $opts['type']] : array_keys(REGISTRES_TYPES);
$neutres   = qa_noms_de_lieux();
$pages = $rendus = $bardeaux = [];
foreach ($types as $type) {
    foreach ((isset($opts['publiees']) ? registre_publiees($type, $racine) : registre_tous($type, $racine)) as $p) {
        $cle = $type . '/' . $p['slug'];
        $pages[$cle]    = $p;
        $rendus[$cle]   = qa_rendre_registre($p, $racine);
        $bardeaux[$cle] = qa_bardeaux(qa_texte_principal($rendus[$cle]), 5, $neutres);
    }
}

$titres = $metas = [];
$echecTotal = 0;
foreach ($pages as $cle => $p) {
    $echecs = qa_controle_page($p, $rendus[$cle]);
    $meta = qa_meta($rendus[$cle]);
    if (isset($titres[$meta['title']])) { $echecs[] = 'title en double avec ' . $titres[$meta['title']]; }
    if (isset($metas[$meta['description']])) { $echecs[] = 'meta en double avec ' . $metas[$meta['description']]; }
    $titres[$meta['title']] = $cle;
    $metas[$meta['description']] = $cle;

    // Unicité : sœurs (même parent ou même pays) et parent (pilier, fiche formation).
    $parent = str_ends_with($p['type'], '-pays') ? str_replace('-pays', '', $p['type']) . '/' . dirname($p['slug']) : null;
    $autres = [];
    foreach ($pages as $c2 => $q) {
        if ($c2 === $cle || $c2 === $parent) { continue; }
        $soeur = $q['type'] === $p['type'] && (!str_ends_with($p['type'], '-pays')
            || dirname($q['slug']) === dirname($p['slug']) || basename($q['slug']) === basename($p['slug']));
        if ($soeur) {
            $autres[] = $bardeaux[$c2];
            if (($s = qa_ressemblance($bardeaux[$cle], $bardeaux[$c2])) > 0.40) { $echecs[] = sprintf('unicité %d %% avec %s', $s * 100, $c2); }
        }
    }
    if ($parent !== null && isset($bardeaux[$parent]) && ($s = qa_ressemblance($bardeaux[$cle], $bardeaux[$parent])) > 0.25) {
        $echecs[] = sprintf('unicité %d %% avec le parent', $s * 100);
    }
    if ($autres && ($propre = qa_part_propre($bardeaux[$cle], $autres)) < 0.60) {
        $echecs[] = sprintf('texte propre %d %%', $propre * 100);
    }
    if (isset($opts['liens'])) {
        preg_match_all('#href="(/[^"\#]*)#', (string) preg_replace('#^.*?<main[^>]*>|</main>.*$#s', '', $rendus[$cle]), $m);
        foreach (array_unique($m[1]) as $url) {
            if (($code = qa_get('http://localhost:8081' . $url)['code']) !== 200) { $echecs[] = "lien {$url} ({$code})"; }
        }
    }
    printf("%-7s %s%s\n", $echecs ? 'ECHEC' : 'ok', $cle, $echecs ? '  [' . implode(' ; ', $echecs) . ']' : '');
    $echecTotal += $echecs ? 1 : 0;
}
printf("\n%d page(s), %d en échec\n", count($pages), $echecTotal);
exit($echecTotal ? 1 : 0);
```

`qa_get()` envoie l'en-tête `Host` de production ? Vérifier sa signature : s'il ne permet pas l'hôte local, utiliser la même requête que `http_local()` du harnais (curl vers `127.0.0.1:8081` avec `Host: localhost:8081`).

- [ ] **Step 5 : lancer, constater le succès**

Run: `php tools/tests/run.php Qa` puis `php tools/tests/run.php`, puis `php tools/qa/registres.php` (registres réels : seules les pages légales existent, en noindex, donc aucun échec « mots »).
Expected: tests PASS ; le script réel termine sur « 2 page(s), 0 en échec ».

- [ ] **Step 6 : commit**

```bash
git add tools/qa/lib.php tools/qa/registres.php tools/tests/QaTest.php
git commit -m "Controles de la section 8 sur les registres : mots, meta, schema, FAQ, texte, faits, devise, unicite, liens"
```

---

### Task 11: Dettes de la vague 0B

**Files:**
- Modify: `portfolio/partials/pv2-header.php`, `pv2-footer.php` (« 34 pays »), `portfolio/templates/accueil.php` + `assets/js/portfolio-v2.js` + CSS (pause du bandeau), `portfolio/partials/pv2-head.php` + `portfolio/accueil.php` (préchargement), CSS (fil d'Ariane)
- Test: `tools/tests/ComposantsTest.php`

Origine : mineurs reportés de la revue finale 0B (registre du 03/10/2026) et constat Lighthouse « link-in-text-block » sur `/services/referencement-naturel-seo`.

- [ ] **Step 1 : tests**

```php
function test_composants_dettes_0b_soldees(): void
{
    foreach (['portfolio/partials/pv2-header.php', 'portfolio/partials/pv2-footer.php'] as $f) {
        assert_true(!preg_match('/\b34 pays\b/u', (string) file_get_contents(racine($f))), "{$f} : nombre de pays écrit en dur");
    }
    $head = (string) file_get_contents(racine('portfolio/partials/pv2-head.php'));
    assert_not_contains('rel="preload" as="style"', $head);
    assert_contains('media=', $head);
    $accueil = http_local('/')['corps'];
    assert_contains('media="(min-width: 1024px)"', $accueil, 'portrait préchargé sur ordinateur seulement');
    assert_contains('class="defilant__pause"', $accueil);
    $js = (string) file_get_contents(racine('assets/js/portfolio-v2.js'));
    assert_contains('defilant__pause', $js);
    $css = (string) file_get_contents(racine('assets/css/portfolio-v2.css'));
    assert_contains('.pv2 .crumb a{color:var(--link);text-decoration:underline;text-underline-offset:3px}', $css);
    assert_contains('.pv2 .defilant.est-en-pause .defilant__piste,.pv2 .defilant:focus-within .defilant__piste{animation-play-state:paused}', $css);
}
```

- [ ] **Step 2 : lancer, constater l'échec**

Run: `php tools/tests/run.php Composants`
Expected: FAIL (« 34 pays » écrit en dur).

- [ ] **Step 3 : implémentation**

1. En-tête et pied : remplacer chaque « 34 pays » par `<?= count(fait('zones')) ?> pays`.
2. Pause du bandeau (WCAG 2.2.2), dans `templates/accueil.php`, juste après `<div class="defilant">` ouvert, le bouton est placé avant la div :

```php
<button class="defilant__pause" type="button" aria-pressed="false" hidden>Mettre en pause le défilement</button>
```

JS (bloc ajouté à `portfolio-v2.js`) :

```js
  /* ---------- Bandeau de logos : pause (WCAG 2.2.2) ---------- */
  var pause = doc.querySelector('.defilant__pause');
  var defilant = doc.querySelector('.defilant');
  if (pause && defilant && !reduit) {
    pause.hidden = false;
    pause.addEventListener('click', function () {
      var actif = defilant.classList.toggle('est-en-pause');
      pause.setAttribute('aria-pressed', actif ? 'true' : 'false');
      pause.textContent = actif ? 'Reprendre le défilement' : 'Mettre en pause le défilement';
    });
  }
```

CSS :

```css
.pv2 .defilant__pause{display:block;margin:0 auto 1rem;padding:.35rem .9rem;border:1px solid var(--line-strong);border-radius:var(--pill);background:#fff;color:var(--ink-soft);font:600 .8rem var(--body);cursor:pointer}
.pv2 .defilant__pause[hidden]{display:none}
.pv2 .defilant.est-en-pause .defilant__piste,.pv2 .defilant:focus-within .defilant__piste{animation-play-state:paused}
.pv2 .crumb a{color:var(--link);text-decoration:underline;text-underline-offset:3px}
```

3. Préchargement : dans `pv2-head.php`, un élément de `$pagePrecharge` accepte un 4e champ `media` (`media="<?= sanitize($img[3]) ?>"` si présent) ; supprimer la ligne `<link rel="preload" as="style" ...portfolio-v2.css...>`. Dans `accueil.php` : `$pagePrecharge = [[fait('photo'), $portraitSrcset, $portraitSizes, '(min-width: 1024px)']];`.

- [ ] **Step 4 : lancer, constater le succès**

Run: `php tools/tests/run.php`
Expected: PASS.

- [ ] **Step 5 : commit**

```bash
git add portfolio/partials portfolio/templates/accueil.php portfolio/accueil.php assets/js/portfolio-v2.js assets/css/portfolio-v2.css tools/tests/ComposantsTest.php
git commit -m "Dettes 0B : nombre de pays depuis la fiche, pause du bandeau, prechargement sur ordinateur, fil d'Ariane souligne"
```

---

### Task 12: Premier lot de comparatifs sourcés et hub /comparatifs/

Demande de Richard du 03/10/2026 : « n'oublie pas d'ajouter des comparaisons, même si tu dois intégrer des liens de sites externes ». Spec 6.7 : critères publiés, jamais de classement où Richard se met premier, faits sourcés et datés.

**Files:**
- Create: `portfolio/data/comparatifs/odoo-vs-dolibarr.php`, `n8n-vs-make-vs-zapier.php`, `fedapay-vs-kkiapay-vs-cinetpay.php`, `chatgpt-vs-claude-vs-gemini.php`, `portfolio/data/hubs/comparatifs.php`
- Modify: `portfolio/data/redirections.php` (article de blog vers comparatif), `helpers/blocs.php` (liens internes du texte via `url_finale`), `portfolio/partials/pv2-footer.php` (lien « Comparatifs » dans Ressources)
- Test: `tools/tests/ComparatifsTest.php`, `tools/tests/BlocsTest.php`

**Interfaces:**
- Consumes: tout le reste du plan (format, gabarits, QA, redirections).

- [ ] **Step 1 : tests**

```php
<?php // tools/tests/ComparatifsTest.php
declare(strict_types=1);

require_once racine('helpers/functions.php');

const COMPARATIFS_LOT1 = ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier', 'fedapay-vs-kkiapay-vs-cinetpay', 'chatgpt-vs-claude-vs-gemini'];

function test_comparatifs_lot1_publies_complets_et_sources(): void
{
    foreach (COMPARATIFS_LOT1 as $slug) {
        $p = registre_lire('comparatif', $slug);
        assert_true($p !== null, $slug);
        assert_true(registre_publiee($p), "{$slug} publié");
        assert_true(count($p['faq']) >= 8, "{$slug} : 8 questions au moins");
        assert_true(count($p['sources']) >= 6, "{$slug} : 6 sources au moins");
        $externes = array_filter($p['sources'], static fn(array $s): bool => !str_contains($s['url'], 'richardsalanon.com'));
        assert_true(count($externes) >= 6, "{$slug} : sources externes");
        assert_true(in_array('comparaison', array_column($p['sections'], 'type'), true), "{$slug} : tableau comparatif");
        assert_same(200, http_local('/comparatifs/' . $slug)['code'], $slug);
    }
    assert_same(200, http_local('/comparatifs/')['code']);
}

function test_comparatifs_lot1_passent_les_controles_de_la_section_8(): void
{
    exec(PHP_BINARY . ' ' . escapeshellarg(racine('tools/qa/registres.php')) . ' --type=comparatif 2>&1', $sortie, $code);
    assert_same(0, $code, implode("\n", $sortie));
    exec(PHP_BINARY . ' ' . escapeshellarg(racine('tools/qa/registres.php')) . ' --type=hub 2>&1', $sortie2, $code2);
    assert_same(0, $code2, implode("\n", $sortie2));
}

function test_comparatifs_article_de_blog_redirige_et_lie_au_pied(): void
{
    assert_same('/comparatifs/n8n-vs-make-vs-zapier', redirections_table()['/blog/n8n-vs-zapier-vs-make-2026']);
    assert_contains('href="/comparatifs/"', http_local('/contact')['corps']);
}
```

Dans `BlocsTest.php` :

```php
function test_blocs_liens_internes_vers_l_url_finale(): void
{
    // Un lien du texte vers une ancienne URL suit la redirection active : aucune 301 interne.
    $html = bloc_texte('<a href="/contact">Contact</a>');
    assert_contains('href="/contact"', $html);
    assert_contains('url_finale(', (string) file_get_contents(racine('helpers/blocs.php')));
}
```

- [ ] **Step 2 : lancer, constater l'échec**

Run: `php tools/tests/run.php Comparatifs`
Expected: FAIL (pages absentes).

- [ ] **Step 3 : liens internes du texte et redirection**

Dans `bloc_texte`, remplacer la restauration des liens par un `preg_replace_callback` qui, pour un href commençant par `/`, écrit `url_finale($href)` quand la fonction existe (`function_exists('url_finale')`), sinon le href tel quel. Ajouter à `data/redirections.php` : `'/blog/n8n-vs-zapier-vs-make-2026' => '/comparatifs/n8n-vs-make-vs-zapier'` (lu dans la liste en tête du `return`). Pied : dans la colonne Ressources, `<li><a href="/comparatifs/">Comparatifs</a></li>`.

- [ ] **Step 4 : rédaction en parallèle (cinq sous-agents, un fichier chacun)**

Lancer cinq agents `general-purpose` sur le modèle le plus capable, en un seul message (règle d'isolement, spec 11.2 : chacun écrit uniquement son fichier). Consigne commune, à copier telle quelle en remplaçant SUJET et FICHIER :

```text
Tu rédiges une page du site de Richard SALANON (consultant en digitalisation et développeur logiciel basé à Cotonou, Bénin ; fiche de faits : portfolio/data/faits.php, à lire en premier ; dépôt C:\xampp\htdocs\Richard_portfolio). Tu écris UNIQUEMENT le fichier FICHIER. Aucun autre fichier, aucun commit.

Sujet : SUJET.
Lecteurs : dirigeants et responsables de PME d'Afrique francophone (Bénin, Côte d'Ivoire, Sénégal, Togo, Cameroun) et d'Europe francophone qui doivent choisir.

Format : un fichier PHP qui retourne le tableau du modèle tools/tests/fixtures/registres/comparatifs/a-vs-b.php (champs titre, title, meta, en_bref, publie, maj, faits_hero, sections, faq, sources, liens), sections construites UNIQUEMENT avec les blocs de helpers/blocs.php (BLOCS_TYPES ; lire les gabarits portfolio/partials/blocs/*.php pour leurs clés exactes), dont au moins un bloc « comparaison » (critères × options) et un bloc « tableau ». publie et maj : la date du jour (AAAA-MM-JJ). Texte en chaînes PHP entre apostrophes avec \' échappée, ou nowdoc pour les longs passages. HTML permis dans le texte : strong, em, abbr, br, a (https ou chemin interne).

Exigences (contrôlées par php tools/qa/registres.php --type=comparatif, à lancer jusqu'à « 0 en échec » pour ta page) :
- 3 200 mots au moins de texte visible ; la matière vient du sujet (critères de choix, coûts réels, limites, cas d'usage par secteur, erreurs fréquentes, migration, questions de clients), jamais du remplissage ni de la répétition.
- title de 50 à 60 caractères, meta de 140 à 155, H2 formulés en vraies questions, paragraphes de 120 mots au plus, « en_bref » de 2 à 4 phrases qui répondent directement.
- 8 questions de FAQ au moins, réponses complètes.
- Chaque prix, chiffre, fonction ou condition d'un éditeur : vérifié aujourd'hui sur sa page officielle (site de l'éditeur, documentation, page tarifs) et cité avec son URL et la date de consultation dans « sources » (6 sources externes au moins) ; dans le texte, nommer la source et la date (« selon la page tarifs de Make consultée le 03/10/2026 »). Une valeur introuvable : ne pas l'écrire.
- Critères de comparaison publiés et pondérés de façon transparente ; aucun classement où Richard se place premier ; Richard intervient comme praticien qui intègre ces outils (faits de la fiche seulement : années d'expérience, pays, Wapy, Audyxa) ; aucun client, avis, témoignage ou chiffre inventé.
- Français accentué, aucun tiret cadratin, aucune flèche, aucun emoji. Jamais de texte copié d'un autre site (ni Audyxa, ni paulmaximedossou.com, ni les éditeurs) : reformuler, citer, lier.
- Liens internes possibles : /contact, /a-propos/, /services/automatisation-ia, /services/digitalisation-d-entreprise, /formation-automatisation, /formation-odoo, /formation-dolibarr, /integration-odoo-cotonou, /integration-dolibarr-cotonou, /comparatifs/ et les trois autres comparatifs du lot (/comparatifs/odoo-vs-dolibarr, /comparatifs/n8n-vs-make-vs-zapier, /comparatifs/fedapay-vs-kkiapay-vs-cinetpay, /comparatifs/chatgpt-vs-claude-vs-gemini).
- « liens » : ['comparatifs' => [slugs des autres comparatifs du lot]].
Vérifie : php -l FICHIER ; php tools/qa/registres.php --type=comparatif. Rends compte en 10 lignes : nombre de mots, title, meta, sources consultées.
```

Sujets :
1. `odoo-vs-dolibarr` : Odoo ou Dolibarr pour une PME d'Afrique francophone (éditions Community et Enterprise, modules, SYSCOHADA, coût total sur trois ans, hébergement, compétences locales, WhatsApp).
2. `n8n-vs-make-vs-zapier` : n8n, Make ou Zapier pour automatiser une entreprise (modèle de prix, auto-hébergement, données, IA, connecteurs africains, mobile money). Reprendre et enrichir sans copier l'article `/blog/n8n-vs-zapier-vs-make-2026` (lu en production), qui sera redirigé.
3. `fedapay-vs-kkiapay-vs-cinetpay` : encaisser par mobile money et carte en Afrique de l'Ouest (pays et opérateurs couverts, frais publiés, intégration, versements, documentation) ; ajouter PayDunya si sa documentation publique est exploitable.
4. `chatgpt-vs-claude-vs-gemini` : ChatGPT, Claude ou Gemini en entreprise (offres équipes, confidentialité des données, langues, intégrations, usages par métier, coût par poste).
5. Hub `portfolio/data/hubs/comparatifs.php` (`'liste' => 'comparatif'`) : « Comparatifs d'outils numériques pour les entreprises » ; 3 200 mots sur la méthode (critères, pondération, sources, mises à jour, ce qu'un comparatif ne remplace pas), FAQ de 8 questions, sources sur la méthode (par exemple guides officiels de choix d'ERP ou d'outils).

- [ ] **Step 5 : relecture par l'agent principal**

Pour chaque page : `php tools/qa/registres.php --type=comparatif --liens` puis lecture d'un échantillon de 3 sections : faits sourcés, ton, aucun classement auto-promotionnel, accents. Corriger dans le fichier, relancer les contrôles.

- [ ] **Step 6 : lancer, constater le succès**

Run: `php tools/tests/run.php`
Expected: PASS.

- [ ] **Step 7 : commit**

```bash
git add portfolio/data/comparatifs portfolio/data/hubs/comparatifs.php portfolio/data/redirections.php helpers/blocs.php portfolio/partials/pv2-footer.php tools/tests/ComparatifsTest.php tools/tests/BlocsTest.php
git commit -m "Premier lot de comparatifs sources : Odoo et Dolibarr, n8n Make Zapier, FedaPay KkiaPay CinetPay, ChatGPT Claude Gemini"
```

---

### Task 13: Recette, revue, fusion et mise en ligne

- [ ] **Step 1 : recette locale**
  - `php tools/tests/run.php` vert.
  - `php tools/qa/registres.php --liens` : 0 échec.
  - `php tools/qa/crawl.php http://localhost:8081 --liens` : aucun échec nouveau par rapport à la production du 03/10/2026.
  - Captures Edge headless à 390 et 1280 px de `/comparatifs/`, `/comparatifs/odoo-vs-dolibarr` et `/mentions-legales`, avec la page d'aperçu de `uploads/`.
  - Clavier : le sommaire et la FAQ se parcourent au clavier.
  - Mouvement réduit : rien ne bouge.
- [ ] **Step 2 : revue indépendante de la branche** (sous-agent sur le modèle le plus capable, consignes de `requesting-code-review`, avec la Review Focus ci-dessus) ; corrections Critical et Important par TDD.
- [ ] **Step 3 : fusion dans `main`, push** (jeton `gh auth token --user Richard6141` en en-tête), suivi du workflow.
- [ ] **Step 4 : contrôles en production**
  - `php tools/qa/smoke.php https://richardsalanon.com`.
  - `php tools/qa/crawl.php https://richardsalanon.com --pause=700 --liens`.
  - Lighthouse mobile sur `/comparatifs/odoo-vs-dolibarr` (relancer une fois si le premier passage suit le crawl).
  - Le sitemap contient les 5 URL de comparatifs avec leur `lastmod`.
  - `llms.txt` contient la section « Comparatifs ».
- [ ] **Step 5 : mémoire du projet** mise à jour : formats figés, routeur, contrôles, comparatifs publiés, points à faire valider par Richard (consentement aux cookies, réponses en attente).

