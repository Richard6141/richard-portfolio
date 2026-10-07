# Vague 1E : 20 pages secteurs et hub /secteurs/ — Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Publier les 20 pages `/secteurs/{secteur}` de la spec 6.3 ter (digitaliser et équiper en IA un secteur : services, logiciels, intégrations, cas d'usage, prix ; 3 200 mots ou plus chacune) et le hub `/secteurs/`, reliés aux pages métier, aux piliers services et aux 9 pages historiques `/digitaliser-{secteur}-{ville}`, qui deviennent leurs déclinaisons locales.

**Architecture:** Le type de registre `secteur` existe déjà (vague 0C : route `/secteurs/{slug}`, hub routé, schéma `Service`, sitemap, llms). Cette vague lui donne deux champs propres validés (`univers`, `locales`), range le hub par univers, ajoute le maillage secteur vers pages locales, métier vers secteurs (inverse) et page locale vers secteur, et le lien « Secteurs » du pied une fois le hub publié. La rédaction suit la méthode de la vague 1D : un rédacteur puis un vérificateur par page, contrôlés et commités un par un par le contrôleur.

**Tech Stack:** PHP 8, registres 0C (`helpers/registres.php`, `helpers/maillage.php`, `portfolio/registre-hub.php`), `php tools/tests/run.php`, `php tools/qa/registres.php`, sous-agents de rédaction et de vérification.

**Spec:** `docs/superpowers/specs/2026-10-03-refonte-globale-design.md` (6.1, 6.3 bis, 6.3 ter, 7.2, 7.3, 8, 9, 11.3). Publics F/P validés par Richard : `docs/questionnaire-refonte.md`, section 3. Branche : `vague-1e`, créée depuis `main` (7bec964).

## Global Constraints

- Mêmes règles que les vagues 1A à 1D (plans `2026-10-03-vague1a-...`, `2026-10-05-vague1b-...`, `2026-10-05-vague1c-...`, `2026-10-06-vague1d-...`, Global Constraints) : phrase d'entité via `fait('phrase_entite')` mot pour mot ; aucun client, chiffre de résultat, avis, témoignage ou certification inventé ; français accentué ; aucun tiret cadratin (U+2014), aucune flèche (U+2192), aucun emoji ; voix à la troisième personne (« Richard », « il »), aucune trace de recherche du rédacteur.
- Une page secteur parle de services (digitaliser, équiper en IA) ; la formation n'y est qu'une section qui renvoie aux pages `/formations/metier/{metier}` (spec 6.3 ter : « à distinguer des pages métier qui parlent de formation »).
- Statut F ou P du questionnaire (section 3) pour les publics du secteur : F s'écrit « Richard a déjà formé des {public} », sans nombre ni nom de structure ; P s'écrit « Richard peut former des {public} », jamais « a formé ».
- Projets cités : seulement ceux de `portfolio/data/projets-clients.php` rattachés au secteur dans le catalogue, avec « réalisé en sous-traitance pour Digital Développement » quand `relation` vaut `sous-traitance`, lien `/realisations/`, jamais le site du client, jamais QueenK Beauty. Sans projet rattaché : aucune phrase qui souligne une absence.
- Prix : ordres de grandeur seulement depuis `fait('tarifs_depart')` (Landing page 150 000 FCFA, Site vitrine 300 000 FCFA, Référencement naturel 75 000 FCFA, avec l'équivalent en euros à 655,957 FCFA pour 1 €) ; tout le reste « sur devis ».
- Pratiques de travail de Richard absentes de `faits.php` (point hebdomadaire, jalons, données fictives, durées d'étapes) : formulées comme une méthode proposée (« le projet peut prévoir… »), jamais comme une habitude attestée.
- Univers (`REGISTRES_UNIVERS`, vague 1C) : `Droit et justice`, `Chiffre et finance`, `Direction et gestion`, `Commerce et communication`, `Santé et social`, `Secteur public et éducation`, `Technique et terrain`.
- Publication (spec 11.3) : lot 1 (10 secteurs) et le hub `/secteurs/` le `2026-11-05` ; lot 2 (10 secteurs) le `2026-11-19`. Ces dates suivent les pages métier (15 et 22/10) et les pages pays (29/10 et 12/11).
- Liens autorisés dans le texte d'une page secteur : `/contact`, `/richard-salanon`, `/a-propos/`, `/realisations/`, `/zones/`, `/services/{27 piliers}`, `/formations/`, `/formations/{fiches du catalogue}`, `/formations/domaine/{8 domaines}`, `/formations/metier/{34 métiers}`, `/comparatifs/` et ses 4 pages, `/histoires/` et ses 7 histoires, les pages locales de sa ligne du catalogue. JAMAIS `/secteurs/{autre secteur}` ni `/zones/{pays}` : le maillage s'en charge, seulement vers des pages publiées.

## Review Focus

1. Une page secteur du lot 1 (servie le 05/11) qui renverrait vers un secteur du lot 2 (404 jusqu'au 19/11) : aucun lien `/secteurs/{x}` dans le texte (contrôle `grep` de la Task 4) ; le maillage ne propose que des pages publiées (tests de la Task 2).
2. Une page historique `/digitaliser-{secteur}-{ville}`, servie tous les jours, qui lierait son secteur avant sa date : `sujet_secteur()` renvoie null avant `publie` (test de la Task 2).
3. Le pied de page avant le 05/11 : pas de lien `/secteurs/` tant que le hub n'est pas publié (test de la Task 2).
4. Deux secteurs proches au-dessus de 40 % de ressemblance (cabinets d'avocats et études notariales ; cliniques et pharmacies ; commerce et distribution et e-commerce ; écoles et universités) : `php tools/qa/registres.php --type=secteur` sur les 20 pages ensemble (Task 4, Step 3).
5. Une page `locales` ou `liens.metiers` mal écrite (slug inconnu) : `registre_valider` refuse la page, qui disparaît en silence ; le test des données réelles de la Task 4 compte 10 puis 20 pages publiées et le signale.

---

### Task 1: Registre secteur validé, hub rangé par univers

**Files:**
- Modify: `helpers/registres.php` (constante `REGISTRES_CHAMPS_TYPE` vers la ligne 35, validation vers la ligne 240), `helpers/maillage.php` (nouvelle fonction `maillage_sujets()` après `maillage_villes()`), `portfolio/registre-hub.php` (après le bloc « Vague 1B », vers la ligne 34)
- Create: `tools/tests/fixtures/registres/secteurs/test-secteur.php`, `tools/tests/fixtures/registres/hubs/secteurs.php`
- Test: `tools/tests/RegistresTest.php`, `tools/tests/GabaritTest.php`

**Interfaces:**
- Produces: `REGISTRES_CHAMPS_TYPE['secteur'] = ['univers', 'locales']` ; `maillage_sujets(): array` (slug de page historique => `['titre' => string, 'url' => '/' . slug]`, toutes les pages de `portfolio/data/sujets.php`) ; messages d'erreur `univers inconnu : X` et `page locale inconnue : X` ; sur le hub dont `liste` vaut `secteur`, un `<h2 class="liste-hub__famille">` par univers non vide, dans l'ordre de `REGISTRES_UNIVERS`.

- [ ] **Step 1 : fixtures**

`tools/tests/fixtures/registres/secteurs/test-secteur.php` :

```php
<?php
// Fixture de test des registres (vague 1E) : jamais servie sur le site.
return [
    'titre'    => 'Secteur de test pour les tests automatiques',
    'title'    => 'Secteur de test pour les tests du registre | Richard SALANON',
    'meta'     => 'Page de test du registre des secteurs : elle sert uniquement aux tests automatiques et n\'est jamais servie sur le site public de Richard SALANON.',
    'en_bref'  => 'Page de test.',
    'publie'   => '2026-01-01',
    'maj'      => '2026-01-02',
    'univers'  => 'Droit et justice',
    'locales'  => ['digitaliser-import-export-cotonou'],
    'sections' => [['type' => 'prose', 'titre' => 'Que contient cette page de test ?', 'paragraphes' => ['Texte de test.']]],
    'faq'      => [['q' => 'Question de test ?', 'r' => 'Réponse de test.']],
    'sources'  => [['titre' => 'Source de test', 'url' => 'https://example.org/', 'date' => '2026-01-01']],
    'liens'    => ['metiers' => ['test-metier']],
];
```

`tools/tests/fixtures/registres/hubs/secteurs.php` : copie de `tools/tests/fixtures/registres/hubs/histoires.php` avec `'liste' => 'secteur'`, `'titre' => 'Secteurs de test'`, `'title' => 'Hub des secteurs de test, jamais servi | Richard SALANON'`, `'meta' => 'Hub de test du registre des secteurs : il sert uniquement aux tests automatiques et n\'est jamais servi sur le site public de Richard SALANON.'`, `'publie' => '2026-01-01'`.

Vérifier d'abord la forme exacte attendue pour 'faq' et 'sources' dans `tools/tests/fixtures/registres/metiers/test-metier.php` et l'aligner (clés identiques).

- [ ] **Step 2 : tests**

`tools/tests/RegistresTest.php` :

```php
function test_registres_secteur_univers_et_pages_locales(): void
{
    // Vague 1E : un secteur porte un univers connu et des pages locales qui existent (data/sujets).
    $base = require fixtures() . '/secteurs/test-secteur.php';
    assert_same([], registre_valider('secteur', 'test-secteur', $base));
    $erreurs = static fn(array $modif): string => implode(' ', registre_valider('secteur', 'test-secteur', $modif + $base));
    assert_contains('univers inconnu : Divers', $erreurs(['univers' => 'Divers']));
    assert_contains('page locale inconnue : digitaliser-atlantide', $erreurs(['locales' => ['digitaliser-atlantide']]));
    assert_same([], registre_valider('secteur', 'test-secteur', ['locales' => []] + $base), 'un secteur sans page locale reste valide');
}
```

`tools/tests/GabaritTest.php` :

```php
function test_gabarit_hub_secteurs_groupe_par_univers(): void
{
    // Vague 1E : le hub des secteurs range les pages par univers, comme les services par famille.
    $html = gabarit_rendre('hub', 'secteurs');
    assert_contains('<h2 class="liste-hub__famille">Droit et justice</h2>', $html);
    assert_contains('href="/secteurs/test-secteur"', $html);
}
```

- [ ] **Step 3 : RED** — Run: `php tools/tests/run.php Registres` puis `php tools/tests/run.php Gabarit`. Expected: FAIL (`page locale inconnue` absent ; pas de titre d'univers sur le hub).

- [ ] **Step 4 : implémentation**

`helpers/registres.php`, dans `REGISTRES_CHAMPS_TYPE` :

```php
    'secteur'   => ['univers', 'locales'],
```

Remplacer le contrôle d'univers des métiers (vers la ligne 240) :

```php
    if (in_array($type, ['metier', 'secteur'], true) && isset($p['univers']) && !in_array($p['univers'], REGISTRES_UNIVERS, true)) {
        $e[] = 'univers inconnu : ' . $p['univers'];
    }
    // Vague 1E : les pages locales d'un secteur sont des pages historiques existantes (data/sujets.php).
    if ($type === 'secteur' && isset($p['locales'])) {
        foreach ((array) $p['locales'] as $l) {
            if (!isset(maillage_sujets()[(string) $l])) {
                $e[] = 'page locale inconnue : ' . $l;
            }
        }
    }
```

`helpers/maillage.php`, après `maillage_villes()` :

```php
/** Pages historiques « sujet × ville » (data/sujets.php), à plat : slug => [titre, url]. Vague 1E. */
function maillage_sujets(): array
{
    static $pages = null;
    if ($pages === null) {
        $pages = [];
        foreach ((array) require __DIR__ . '/../portfolio/data/sujets.php' as $sujet) {
            foreach ((array) ($sujet['pages'] ?? []) as $pg) {
                if (!empty($pg['slug'])) {
                    $pages[(string) $pg['slug']] = ['titre' => (string) $pg['titre'], 'url' => '/' . $pg['slug']];
                }
            }
        }
    }
    return $pages;
}
```

`portfolio/registre-hub.php`, après le bloc « Vague 1B » (hub des formations rangé par domaine) :

```php
// Vague 1E : hub des secteurs rangé par univers, comme les services par famille.
if ($listeType === 'secteur') {
    foreach (REGISTRES_UNIVERS as $hubUnivers) {
        $hubFamilles[$hubUnivers] = array_filter($elements, static fn(array $q): bool => ($q['univers'] ?? '') === $hubUnivers);
    }
    $hubFamilles = array_filter($hubFamilles);
    if ($hubFamilles) {
        $elements = array_merge(...array_values($hubFamilles));
    }
}
```

- [ ] **Step 5 : GREEN** — Run: `php tools/tests/run.php` (Apache local sur 127.0.0.1:8081 et MySQL lancés). Expected: PASS. Si un test compte les fixtures d'un dossier ou les hubs (par exemple un compte de pages du sitemap des fixtures), ajuster ce compte d'une unité dans le même commit et le dire dans le rapport.

- [ ] **Step 6 : commit** — `git commit -m "Secteurs : univers et pages locales valides, hub range par univers"`

---

### Task 2: Maillage des secteurs (pages locales, métiers, pages historiques, pied)

**Files:**
- Modify: `helpers/maillage.php` (switch de `maillage_liens()` ; nouvelles fonctions `sujet_secteur()` et `pied_ressources()`), `portfolio/sujet.php` (calcul vers la ligne 99, rendu avant la section « Autres sujets » vers la ligne 241), `portfolio/partials/pv2-footer.php` (liste « Ressources », lignes 91-100)
- Test: `tools/tests/MaillageTest.php`, `tools/tests/PiedTest.php`

**Interfaces:**
- Consumes: `maillage_sujets()`, fixtures `secteurs/test-secteur` et `hubs/secteurs` (Task 1) ; `registre_libelle(array $p): string` (existant) ; `url_finale(string): string` (existant, `helpers/redirections.php`).
- Produces: groupe de maillage « Près de chez vous » sur une page secteur ; groupe « Secteurs » sur une page métier ; `sujet_secteur(string $slugSujet, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): ?array` ; `pied_ressources(string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): array` (liste de `[libellé, url]`).

- [ ] **Step 1 : tests**

`tools/tests/MaillageTest.php` :

```php
function test_maillage_secteur_vers_ses_pages_locales(): void
{
    // Vague 1E : les pages historiques « digitaliser-{secteur}-{ville} » sont les déclinaisons locales du secteur.
    $racine = racine('tools/tests/fixtures/registres');
    $p = registre_lire('secteur', 'test-secteur', $racine);
    $g = array_values(array_filter(maillage_liens($p, $racine, '2026-06-01'), static fn(array $g): bool => $g['titre'] === 'Près de chez vous'));
    assert_same([["Digitaliser une activité d'import-export à Cotonou", '/digitaliser-import-export-cotonou']], $g[0]['liens'] ?? null);
}

function test_maillage_metier_propose_ses_secteurs(): void
{
    // Vague 1E : une page métier renvoie vers les secteurs publiés qui la citent (spec 9 : « secteur correspondant »).
    $racine = racine('tools/tests/fixtures/registres');
    $p = registre_lire('metier', 'test-metier', $racine);
    $groupe = static fn(string $jour): ?array => array_values(array_filter(maillage_liens($p, $racine, $jour),
        static fn(array $g): bool => $g['titre'] === 'Secteurs'))[0] ?? null;
    assert_same([['Secteur de test pour les tests du registre', '/secteurs/test-secteur']], $groupe('2026-06-01')['liens'] ?? null);
    assert_same(null, $groupe('2025-12-31'), 'secteur non publié : aucun lien');
}

function test_maillage_page_locale_vers_son_secteur_publie(): void
{
    // Vague 1E : une page historique, servie tous les jours, ne lie son secteur qu'une fois celui-ci publié.
    $racine = racine('tools/tests/fixtures/registres');
    assert_same('/secteurs/test-secteur', sujet_secteur('digitaliser-import-export-cotonou', $racine, '2026-06-01')['url'] ?? null);
    assert_same(null, sujet_secteur('digitaliser-import-export-cotonou', $racine, '2025-12-31'), 'avant sa date');
    assert_same(null, sujet_secteur('digitaliser-transit-lome', $racine, '2026-06-01'), 'page non revendiquée');
}
```

`tools/tests/PiedTest.php` :

```php
function test_pied_secteurs_seulement_hub_publie(): void
{
    // Vague 1E : le pied ne lie /secteurs/ qu'une fois le hub publié (jamais de 404).
    $fx = racine('tools/tests/fixtures/registres');
    assert_true(in_array(['Secteurs', '/secteurs/'], pied_ressources($fx, '2026-06-01'), true), 'hub publié : lien présent');
    assert_true(!in_array(['Secteurs', '/secteurs/'], pied_ressources($fx, '2025-12-31'), true), 'hub futur : pas de lien');
    assert_true(in_array(['Histoires de transformation', '/histoires/'], pied_ressources($fx, '2025-12-31'), true), 'liens existants gardés');
}
```

- [ ] **Step 2 : RED** — Run: `php tools/tests/run.php Maillage` puis `php tools/tests/run.php Pied`. Expected: FAIL (`sujet_secteur` et `pied_ressources` absentes ; groupes absents).

- [ ] **Step 3 : implémentation**

`helpers/maillage.php`, dans le `switch` de `maillage_liens()`, nouveau cas avant `case 'histoire':` :

```php
        case 'secteur':
            // Vague 1E : les pages historiques « digitaliser-{secteur}-{ville} » deviennent ses déclinaisons locales.
            $ajouter('Près de chez vous', array_values(array_intersect_key(maillage_sujets(), array_flip(array_map('strval', (array) ($p['locales'] ?? []))))));
            break;
```

Dans le cas `formation` / `metier`, après le bloc « Vague 1C » :

```php
            // Vague 1E : une page métier renvoie vers les secteurs publiés qui la citent (spec 9).
            if ($p['type'] === 'metier') {
                $ajouter('Secteurs', array_map(static fn(array $q): array => ['titre' => registre_libelle($q)] + $q,
                    array_filter(registre_publiees('secteur', $racine, $aujourdhui),
                        static fn(array $q): bool => in_array($p['slug'], (array) ($q['liens']['metiers'] ?? []), true))));
            }
```

Après `maillage_liens()` :

```php
/** Secteur publié dont une page historique « digitaliser-… » est la déclinaison locale, ou null (vague 1E). */
function sujet_secteur(string $slugSujet, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): ?array
{
    foreach (registre_publiees('secteur', $racine, $aujourdhui) as $q) {
        if (in_array($slugSujet, array_map('strval', (array) ($q['locales'] ?? [])), true)) {
            return $q;
        }
    }
    return null;
}

/** Liens « Ressources » du pied : un hub du registre n'y figure qu'une fois publié (vague 1E). */
function pied_ressources(string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): array
{
    $liens = [['Réalisations', url_finale('/realisations/')], ['Comparatifs', '/comparatifs/'], ['Histoires de transformation', '/histoires/']];
    if (maillage_page('hub', 'secteurs', $racine, $aujourdhui) !== null) {
        $liens[] = ['Secteurs', '/secteurs/'];
    }
    return array_merge($liens, [['Blog', '/blog/'], ['Qui est Richard SALANON ?', '/richard-salanon'], ['À propos', '/a-propos/'], ['Contact et devis', '/contact']]);
}
```

`portfolio/partials/pv2-footer.php`, remplacer les 7 `<li>` de la liste « Ressources » par :

```php
        <?php foreach (pied_ressources() as [$piedLibelle, $piedUrl]): ?><li><a href="<?= sanitize($piedUrl) ?>"><?= sanitize($piedLibelle) ?></a></li><?php endforeach; ?>
```

`portfolio/sujet.php`, après le calcul de `$memeSujetAilleurs` :

```php
// Vague 1E : le secteur publié dont cette page est la déclinaison locale (jamais de lien avant sa date).
$secteurParent = sujet_secteur((string) $page['slug']);
```

et juste avant `<?php if ($autresSujets): ?>` :

```php
  <?php if ($secteurParent): ?>
  <section class="sect"><div class="wrap" style="max-width:1000px">
    <div class="sect-head rv"><h2>Le secteur en détail.</h2></div>
    <p class="rv"><a href="<?= sanitize($secteurParent['url']) ?>"><?= sanitize(registre_libelle($secteurParent)) ?></a> : <?= sanitize($secteurParent['meta']) ?></p>
  </div></section>
  <?php endif; ?>
```

- [ ] **Step 4 : GREEN** — Run: `php tools/tests/run.php`. Expected: PASS, dont `test_pied_relie_la_page_auteur_et_les_histoires` inchangé.
- [ ] **Step 5 : contrôle visuel** — `curl -s http://127.0.0.1:8081/digitaliser-import-export-cotonou | grep -c "/secteurs/"` affiche 0 (aucun secteur réel publié) ; le pied de `/` ne contient pas `/secteurs/`.
- [ ] **Step 6 : commit** — `git commit -m "Secteurs : maillage vers les pages locales et depuis les metiers, pages historiques et pied relies une fois publies"`

---
### Task 3: Catalogue, consignes et outil de passages repris

**Files:**
- Create: `docs/superpowers/consignes/catalogue-secteurs.md`, `docs/superpowers/consignes/page-secteur.md`, `docs/superpowers/consignes/verification-secteur.md`, `tools/qa/doublons.php`

**Interfaces:**
- Consumes: slugs des 34 métiers (`portfolio/data/metiers/`), des 27 piliers (`portfolio/data/services/`), des 9 pages historiques (`maillage_sujets()`), des projets (`portfolio/data/projets-clients.php`, clé `logo`).
- Produces: la table que lisent rédacteurs et vérificateurs (une ligne par secteur) ; `php tools/qa/doublons.php TYPE SLUG [min_mots=15]`.

- [ ] **Step 1 : catalogue** — `docs/superpowers/consignes/catalogue-secteurs.md`, une phrase d'en-tête (« Table des 20 secteurs (vague 1E). Colonnes : slug, nom, univers, date de publication, métiers (= liens.metiers, exactement), pages locales (= locales, exactement), projets du portfolio rattachés (clé logo), piliers conseillés (liens.services : ceux-ci d'abord, 5 à 9 au total). ») puis cette table :

| slug | nom | univers | publie | métiers | pages locales | projets | piliers conseillés |
|---|---|---|---|---|---|---|---|
| import-export-transit | Import-export et transit | Direction et gestion | 2026-11-05 | logisticiens-transitaires, acheteurs | digitaliser-import-export-cotonou, digitaliser-transit-lome | aucun | integration-odoo, application-web-sur-mesure, api-rest-integrations, automatisation-ia, integration-whatsapp, saas-espace-client |
| commerce-distribution | Commerce et distribution | Commerce et communication | 2026-11-05 | commerciaux, commercants-e-commercants | digitaliser-commerce-gros-bohicon, digitaliser-commerce-abidjan | kosskoss | integration-odoo, integration-dolibarr, site-e-commerce, integration-whatsapp, automatisation-ia, seo-local-google-business |
| e-commerce | E-commerce | Commerce et communication | 2026-11-05 | commercants-e-commercants, marketing-communication | digitaliser-ecommerce-dakar | kosskoss, laura-cosmetics, ik-fashion-house | site-e-commerce, landing-page-haute-conversion, referencement-naturel-seo, agents-ia-chatbot-whatsapp, integration-whatsapp, maintenance-support |
| hotellerie-restauration | Hôtellerie et restauration | Commerce et communication | 2026-11-05 | hotellerie-restauration | digitaliser-hotellerie-ouidah | afro-joyce | systeme-de-reservation-en-ligne, site-vitrine-professionnel, seo-local-google-business, agents-ia-chatbot-whatsapp, integration-odoo |
| medias | Médias et communication | Commerce et communication | 2026-11-05 | journalistes-medias, marketing-communication | aucune | oba-tv | application-web-sur-mesure, application-mobile-android-ios, saas-espace-client, referencement-naturel-seo, integration-ia-entreprise, maintenance-support |
| cliniques | Cliniques et cabinets médicaux | Santé et social | 2026-11-05 | medecins-cliniques | digitaliser-clinique-abomey-calavi | aucun | systeme-de-reservation-en-ligne, application-web-sur-mesure, integration-odoo, agents-ia-chatbot-whatsapp, integration-ia-entreprise, maintenance-support |
| ecoles | Écoles et établissements scolaires | Secteur public et éducation | 2026-11-05 | enseignants-etablissements | digitaliser-ecole-porto-novo | aucun | saas-espace-client, application-web-sur-mesure, site-vitrine-professionnel, integration-whatsapp, automatisation-ia, formation-en-entreprise |
| agro-industrie | Agro-industrie et négoce agricole | Technique et terrain | 2026-11-05 | agro-industrie | digitaliser-negoce-agricole-parakou | aucun | integration-odoo, application-mobile-android-ios, application-web-sur-mesure, api-rest-integrations, automatisation-ia |
| cabinets-comptables | Cabinets comptables et d'audit | Chiffre et finance | 2026-11-05 | experts-comptables, auditeurs-controleurs-gestion, fiscalistes | aucune | impulse-finance | integration-odoo, integration-dolibarr, automatisation-ia, integration-ia-entreprise, site-vitrine-professionnel, saas-espace-client |
| banques-microfinance | Banques, microfinance et assurances | Chiffre et finance | 2026-11-05 | banques-microfinance, assurances, directeurs-financiers | aucune | aucun | application-web-sur-mesure, application-mobile-android-ios, api-rest-integrations, agents-ia-chatbot-whatsapp, integration-ia-entreprise, audit-etude-de-projet |
| cabinets-avocats | Cabinets d'avocats et services juridiques | Droit et justice | 2026-11-19 | avocats, juristes-entreprise | aucune | aucun | saas-espace-client, integration-ia-entreprise, automatisation-ia, site-vitrine-professionnel, application-web-sur-mesure |
| etudes-notariales | Études de notaires et de commissaires de justice | Droit et justice | 2026-11-19 | notaires, commissaires-justice-huissiers, greffiers | aucune | aucun | application-web-sur-mesure, saas-espace-client, automatisation-ia, integration-ia-entreprise, site-vitrine-professionnel |
| cabinets-conseil | Cabinets de conseil et de formation | Direction et gestion | 2026-11-19 | chefs-entreprise-dirigeants, managers, ressources-humaines, assistants-direction | aucune | gc-pro, inovis, at-consulting | site-vitrine-professionnel, saas-espace-client, automatisation-ia, integration-ia-entreprise, referencement-naturel-seo, landing-page-haute-conversion |
| pharmacies | Pharmacies et grossistes | Santé et social | 2026-11-19 | pharmaciens | digitaliser-clinique-abomey-calavi | aucun | integration-odoo, integration-dolibarr, site-e-commerce, integration-whatsapp, application-web-sur-mesure |
| ong | ONG et projets de développement | Santé et social | 2026-11-19 | ong-projets-developpement | aucune | aucun | application-web-sur-mesure, application-mobile-android-ios, automatisation-ia, integration-ia-entreprise, site-vitrine-professionnel, formation-en-entreprise |
| universites-grandes-ecoles | Universités et grandes écoles | Secteur public et éducation | 2026-11-19 | universites-chercheurs | aucune | aucun | saas-espace-client, application-web-sur-mesure, integration-ia-entreprise, site-vitrine-professionnel, referencement-naturel-seo |
| administrations | Administrations et collectivités | Secteur public et éducation | 2026-11-19 | administrations-collectivites, magistrats-juges | aucune | aucun | application-web-sur-mesure, automatisation-ia, integration-ia-entreprise, api-rest-integrations, audit-etude-de-projet, consultant-digitalisation |
| btp | BTP et bureaux d'études | Technique et terrain | 2026-11-19 | btp, architectes-ingenieurs | aucune | aucun | integration-odoo, application-mobile-android-ios, application-web-sur-mesure, site-vitrine-professionnel, automatisation-ia |
| immobilier | Immobilier et gestion locative | Technique et terrain | 2026-11-19 | immobilier | aucune | aucun | site-vitrine-professionnel, saas-espace-client, integration-whatsapp, agents-ia-chatbot-whatsapp, seo-local-google-business, application-web-sur-mesure |
| industrie | Industrie et PME manufacturières | Technique et terrain | 2026-11-19 | industrie | aucune | aucun | integration-odoo, integration-dolibarr, application-web-sur-mesure, api-rest-integrations, automatisation-ia, integration-ia-entreprise |

Vérifier avant commit, par un script écrit dans le scratchpad (non commité) : chaque métier existe dans `portfolio/data/metiers/`, chaque pilier dans `portfolio/data/services/`, chaque page locale dans `maillage_sujets()`, chaque projet dans `projets-clients.php` ; chacune des 9 pages locales apparaît au moins une fois ; chaque métier apparaît au plus une fois, sauf `commercants-e-commercants` et `marketing-communication` (deux secteurs chacun). Résultat attendu : 0 erreur, et chacun des 34 métiers apparaît au moins une fois.

- [ ] **Step 2 : outil de passages repris** — `tools/qa/doublons.php`, généralisation de `.superpowers/sdd/2026-10-06-vague1d-fiches-pays/doublons.php` au type passé en premier argument :

```php
<?php
// tools/qa/doublons.php · Passages d'une page de registre repris de ses pages sœurs du même type
// (suites de bardeaux de 5 mots, lieux neutralisés). Vagues 1D et 1E.
// Usage (depuis la racine du dépôt) : php tools/qa/doublons.php TYPE SLUG [min_mots=15]
// Communs par construction, à ignorer : phrase d'entité, blocs « Services liés », « Pour aller plus loin »,
// bande d'appel finale, tableau des prix de départ (faits.php), cartes des pages voisines.
ini_set('error_log', sys_get_temp_dir() . '/doublons-registres.log');
require 'helpers/functions.php'; require 'tools/qa/lib.php';
$type = $argv[1] ?? ''; $slug = $argv[2] ?? ''; $min = (int) ($argv[3] ?? 15);
$n = qa_noms_de_lieux(); $pages = registre_tous($type);
if (!isset($pages[$slug])) { fwrite(STDERR, "page inconnue ou invalide : {$type}/{$slug}\n"); exit(1); }
$autres = [];
foreach ($pages as $s => $p) { if ($s !== $slug) { $autres[$s] = qa_bardeaux(qa_texte_principal(qa_rendre_registre($p)), 5, $n); } }
$mots = preg_split('/\s+/', qa_normaliser(qa_texte_principal(qa_rendre_registre($pages[$slug])), $n), -1, PREG_SPLIT_NO_EMPTY);
$ou = static function (string $b) use ($autres): array { $r = []; foreach ($autres as $s => $x) { if (isset($x[$b])) { $r[] = $s; } } return $r; };
$runs = []; $deb = null; $pg = [];
for ($i = 0; $i <= count($mots) - 5; $i++) {
    $w = $ou(implode(' ', array_slice($mots, $i, 5)));
    if ($w && $deb === null) { $deb = $i; $pg = []; }
    if ($w) { $pg += array_flip($w); }
    if (!$w && $deb !== null) { $runs[] = [$deb, $i + 3, array_keys($pg)]; $deb = null; }
}
if ($deb !== null) { $runs[] = [$deb, count($mots) - 1, array_keys($pg)]; }
$total = 0;
foreach ($runs as [$d, $f, $w]) {
    $l = $f - $d + 1;
    if ($l < $min) { continue; }
    $total += $l;
    printf("[%d mots, aussi dans : %s]\n  %s\n", $l, implode(', ', array_slice($w, 0, 4)), implode(' ', array_slice($mots, $d, $l)));
}
printf("\n%d mots en passages de %d mots ou plus, sur %d\n", $total, $min, count($mots));
```

Run: `php tools/qa/doublons.php pays benin 15` : même dernière ligne que `php .superpowers/sdd/2026-10-06-vague1d-fiches-pays/doublons.php benin 15` ; `php tools/qa/doublons.php secteur x` : « page inconnue ou invalide » et code de sortie 1.

- [ ] **Step 3 : consigne de rédaction** — `docs/superpowers/consignes/page-secteur.md`, texte exact :

````text
CONSIGNE : PAGE SECTEUR /secteurs/SLUG (richardsalanon.com)

Tu recherches puis rédiges UNE page secteur du site de Richard SALANON. Dépôt : C:\xampp\htdocs\Richard_portfolio. Lis d'abord : portfolio/data/faits.php (seuls faits autorisés sur Richard) ; la consigne des piliers docs/superpowers/consignes/pilier-service.md (BLOCS et EXIGENCES s'appliquent ici, sauf ce qui suit) ; ta ligne de docs/superpowers/consignes/catalogue-secteurs.md ; portfolio/data/projets-clients.php ; la section 3 de docs/questionnaire-refonte.md (publics F = déjà formé, P = peut former) ; une page publiée comme modèle de format (portfolio/data/services/integration-odoo.php). Tu écris UNIQUEMENT le fichier indiqué. Aucun commit, aucune commande git qui modifie le dépôt.

SUJET : une page secteur dit comment digitaliser et équiper en IA les entreprises et organisations de ce secteur (services, logiciels, intégrations, cas d'usage, prix). Ce n'est pas une page de formation : la formation y tient une section, qui renvoie aux pages /formations/metier/ de ta ligne. N'ouvre ces pages métier que pour leur titre et leur meta ; n'en reprends aucune phrase.

FORMAT : fichier PHP qui retourne un tableau avec 'titre' (H1 propre au secteur : ce que Richard apporte à ce secteur, pas un gabarit « Digitaliser les… »), 'title' (50 à 60 caractères, finit par « | Richard SALANON » si la place le permet), 'meta' (140 à 155 caractères, phrase complète), 'en_bref' (2 à 4 phrases : pour qui, quels services, comment, à quel prix ou « sur devis »), 'publie' => '2026-10-07', 'maj' => '2026-10-07' (la date réelle est posée au commit), 'univers' => colonne univers, 'locales' => colonne pages locales (liste vide si « aucune »), 'faits_hero' => [['l' => 'Pour qui', 'v' => '...'], ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'], ['l' => 'Devis', 'v' => 'Sur devis'], ['l' => 'Réponse', 'v' => 'sous 24 heures']], 'sections' => [...], 'faq' => [8 questions au moins, dont 6 propres au secteur], 'sources' => [8 au moins, https, datées du jour de consultation], 'liens' => ['services' => [les piliers conseillés de ta ligne d'abord, 5 à 9 au total], 'metiers' => [exactement la colonne métiers], 'formations' => [3 à 6 slugs de fiches de docs/superpowers/consignes/catalogue-formations.md], 'comparatifs' => [0 à 2], 'histoires' => [0 à 2 slugs de portfolio/data/histoires/]].
Pas de bloc 'faq' ni 'sources' dans 'sections' (le gabarit les rend).

PLAN TYPE (chaque H2 est une vraie question, écrite pour ce secteur) :
1. Où en est la digitalisation de ce secteur en Afrique francophone et en Europe (prose ; chiffres sourcés et datés dans la phrase).
2. Quels processus du secteur gagnent à être digitalisés, et à quels signes voit-on que le moment est venu (points).
3. Quels services pour ce secteur : tableau de 8 à 12 lignes (besoin typique du secteur ; service ; lien en <a href="/services/SLUG">Nom du service</a>).
4. Logiciels métier, ERP et intégrations : ce qui existe pour ce secteur (modules Odoo ou Dolibarr, logiciels spécialisés), quand garder l'existant et le relier, quand le remplacer (tableau ou comparaison).
5. Ce que l'IA peut faire dans ce secteur et ce qu'elle ne doit jamais faire (secret professionnel, données sensibles, décision humaine) (points, vigilance).
6. Paiements, facturation et obligations légales propres au secteur : mobile money et cartes, facture normalisée ou électronique, données personnelles (loi n° 2017-20 au Bénin, RGPD en Europe, au moins un autre pays d'Afrique), réglementation du secteur (ordre professionnel, autorité de santé, banque centrale, ministère de tutelle...) ; chaque règle sourcée.
7. Cas d'usage (bloc cas, 4 au moins, dans des pays différents d'Afrique francophone et d'Europe).
8. Déroulé d'un projet, du diagnostic au suivi (etapes) ; durées « selon le projet » sauf délais de faits.php ; pratiques présentées comme une méthode proposée.
9. Combien coûte un projet : ce qui fait varier le prix dans ce secteur ; ordres de grandeur seulement depuis fait('tarifs_depart'), en FCFA avec l'équivalent en euros à 655,957 FCFA pour 1 € ; tout le reste « sur devis ».
10. Erreurs fréquentes propres au secteur (vigilance, points).
11. Former les équipes : publics de ta ligne d'après le questionnaire (F : « Richard a déjà formé des {public} » ; P : « Richard peut former des {public} », jamais « a formé ») ; liens /formations/metier/{métiers de ta ligne} et fiches formation.
12. Pourquoi Richard : la phrase d'entité MOT POUR MOT (fait('phrase_entite')) ; les projets de ta ligne avec leur description de projets-clients.php et « réalisé en sous-traitance pour Digital Développement » quand relation vaut sous-traitance, lien /realisations/ (jamais le site du client, jamais QueenK Beauty) ; les pages locales de ta ligne présentées comme des déclinaisons locales (liens /digitaliser-...). Sans projet ni page locale : formulation positive, renvoi neutre vers /realisations/.
13. Bloc cta final vers /contact.

VOIX : la page parle de Richard à la troisième personne (« Richard », « il »), jamais « je » hors citation. Aucune trace de ta recherche dans le texte (« je n'ai pas trouvé », « les sources consultées ») : un fait non établi se retire, ou se dit comme une limite utile au lecteur (« à confirmer auprès de l'ordre avant de lancer le projet »). Aucune phrase qui souligne une absence (« aucun projet du portfolio dans ce secteur »). Les mots « a travaillé avec » ne s'emploient que pour un projet de ta ligne.

N'OUVRE AUCUNE AUTRE PAGE de portfolio/data/secteurs/. Avant de rendre, lance `php tools/qa/doublons.php secteur SLUG 15` et réécris avec des faits de ton secteur tout passage de 15 mots ou plus repris d'une autre page, sauf ceux que l'outil dit communs par construction.

UNICITÉ : les 19 autres pages secteurs sont écrites en parallèle et comparées à la tienne (40 % de ressemblance au plus). N'écris aucune phrase passe-partout qu'on pourrait poser dans un autre secteur : chaque paragraphe s'appuie sur un processus, un logiciel, une règle, un acteur ou un usage de CE secteur.

LIENS AUTORISÉS dans le texte : /contact, /richard-salanon, /a-propos/, /realisations/, /zones/, /services/{27 piliers}, /formations/, /formations/{fiches du catalogue}, /formations/domaine/{8 domaines}, /formations/metier/{34 métiers}, /comparatifs/ et ses 4 pages, /histoires/ et ses 7 histoires, les pages locales de ta ligne. JAMAIS /secteurs/{un secteur} ni /zones/{un pays} : le maillage s'en charge.

VÉRIFICATIONS : php -l FICHIER ; php tools/qa/registres.php --type=secteur (ta ligne « ok ») ; http://localhost:8081/secteurs/SLUG répond 200 après avoir mis temporairement 'publie' à la date du jour (remets '2026-10-07' avant de rendre). Compte rendu en 10 lignes : mots, title, meta, sources consultées, points fragiles. Écris le fichier en plusieurs opérations de 5 000 mots au plus (Write puis Edit), jamais d'un seul bloc. Si tu utilises le scratchpad, travaille dans un sous-dossier à ton nom. Hors des outils du dépôt nommés ici (php -l, tools/qa/registres.php, tools/qa/doublons.php), n'exécute aucun script que tu n'as pas écrit ; n'arrête jamais de processus par leur nom (taskkill /IM, killall, pkill) ; un serveur de test que tu lances s'arrête par son seul PID. WebSearch est limité (environ 20 recherches) : WebFetch, curl, ou le navigateur wmux ("C:\Users\FRATERNEL PLOMBERIE\AppData\Local\Programs\wmux\resources\cli-bin\wmux" browser open URL puis browser eval "document.body.innerText.slice(0,20000)").
````

- [ ] **Step 4 : consigne de vérification** — `docs/superpowers/consignes/verification-secteur.md`, texte exact :

````text
CONSIGNE : VÉRIFICATION D'UNE PAGE SECTEUR (richardsalanon.com, vague 1E)

Tu vérifies et corriges UNE page secteur déjà rédigée : portfolio/data/secteurs/SLUG.php, dans le dépôt C:\xampp\htdocs\Richard_portfolio. Tu n'as pas écrit cette page : traite chaque fait comme une affirmation à prouver. Lis d'abord : docs/superpowers/consignes/page-secteur.md (les règles que la page devait suivre), portfolio/data/faits.php, portfolio/data/projets-clients.php, la section 3 de docs/questionnaire-refonte.md, ta ligne de docs/superpowers/consignes/catalogue-secteurs.md.

1. TEXTE : relève au moins 15 affirmations chiffrées, juridiques ou réglementaires (sections, FAQ, cas) et ouvre leur source (WebFetch, curl, ou le navigateur wmux décrit dans page-secteur.md). Source qui ne dit pas le fait : trouve une page qui le dit (officielle de préférence) ou retire le fait. Loi remplacée, autorité renommée, chiffre d'une autre année : corrige. Garde 'sources' cohérente et datée du jour.
2. RICHARD : aucune affirmation hors de faits.php ; projets cités = ceux de ta ligne, conformes à projets-clients.php (mention de sous-traitance, lien /realisations/, jamais QueenK Beauty) ; publics F/P conformes au questionnaire ; phrase d'entité présente mot pour mot ; prix seulement depuis tarifs_depart ; pratiques de travail formulées en méthode proposée ; aucun déplacement promis hors du Bénin.
3. VOIX : troisième personne ; aucune trace de recherche ; aucune phrase qui souligne une absence.
4. CATALOGUE : 'univers', 'locales' et liens.metiers identiques à ta ligne ; liens.services commence par les piliers conseillés ; aucun lien /secteurs/{x} ni /zones/{pays} dans le texte.
5. UNICITÉ : lance `php tools/qa/doublons.php secteur SLUG 15` ; réécris avec des faits du secteur tout passage de 15 mots ou plus repris d'une autre page secteur, sauf ceux que l'outil dit communs par construction. Ne modifie pas les autres pages.
6. STYLE : français accentué, aucun tiret cadratin, aucune flèche ; la page reste au-dessus de 3 200 mots ; ne touche ni 'publie' ni 'maj'.

Tu modifies UNIQUEMENT ce fichier. Aucune commande git qui modifie le dépôt ; aucun sous-agent. Hors des outils du dépôt nommés ici (php -l, tools/qa/registres.php, tools/qa/doublons.php), n'exécute aucun script que tu n'as pas écrit ; n'arrête jamais de processus par leur nom. WebSearch est limité (environ 20 recherches).

VÉRIFICATIONS FINALES : php -l FICHIER ; php tools/qa/registres.php --type=secteur (ligne secteur/SLUG « ok »).

RÉPONSE FINALE (12 lignes au plus) : affirmations vérifiées, confirmées, corrigées (lesquelles, pourquoi), retirées ; points restés fragiles ; résultat du QA.
````

- [ ] **Step 5 : commit** — `git add docs/superpowers/consignes/catalogue-secteurs.md docs/superpowers/consignes/page-secteur.md docs/superpowers/consignes/verification-secteur.md tools/qa/doublons.php` puis `git commit -m "Consignes et table des pages secteurs ; outil des passages repris pour tout type de registre"`

---

### Task 4: Recherche, rédaction et vérification des 20 pages et du hub

Un rédacteur par page (consigne `page-secteur.md`, FICHIER `portfolio/data/secteurs/{slug}.php`, SLUG), six agents à la fois en flux continu, lot 1 d'abord ; dès qu'une page est rendue, un vérificateur (consigne `verification-secteur.md`). Avant chaque lancement, le contrôleur relit la ligne du catalogue (métiers, pages locales, projets) et la recopie dans le message. Après chaque page vérifiée :

1. `php -l` ; `php tools/qa/registres.php --type=secteur` : ligne « ok » pour la page.
2. Liens : `grep -oE 'href=\\?"/(secteurs|zones)/[a-z-]+' FICHIER` ne renvoie rien.
3. Catalogue : `php -r 'require "helpers/functions.php"; $p = registre_lire("secteur", $argv[1]); echo $p["univers"], " | ", implode(",", $p["locales"]), " | ", implode(",", $p["liens"]["metiers"]), "\n";' SLUG` égale la ligne du catalogue.
4. Richard : `grep -c "a travaillé\|a déjà travaillé" FICHIER` vaut 0 si la ligne n'a aucun projet ; `grep -o "a déjà formé des [^.,;]*" FICHIER` ne cite que des publics F du questionnaire ; aucun nom de projet hors de la ligne.
5. Prix : aucun montant hors de `tarifs_depart` et de son équivalent en euros.
6. Texte : 3 affirmations tirées au hasard, ouvertes à leur source par le contrôleur.
7. Date posée : `publie` et `maj` à la date de la ligne du catalogue (`2026-11-05` ou `2026-11-19`).
8. Commit : `git commit -m "Page secteur : {Nom} (publiee le JJ/MM)"`.

Hub `portfolio/data/hubs/secteurs.php`, rédigé par un agent après les 10 pages du lot 1, avec la consigne `page-secteur.md` et ces écarts écrits dans son message : `'liste' => 'secteur'` à la place de 'univers', 'locales' et 'faits_hero' ; H1 sur la digitalisation par secteur ; sections : comment choisir par où commencer selon son secteur, ce qui change d'un univers à l'autre (les 7 univers), ce que les secteurs ont en commun (paiement, données, facturation), comment se passe un projet ; FAQ de 8 questions ; 8 sources ; 3 200 mots au moins ; aucun lien vers une page secteur dans le texte (le gabarit liste les pages publiées) ; `publie` et `maj` à `2026-11-05`. Vérifié comme une page secteur ; QA `php tools/qa/registres.php --type=hub` (ligne hub/secteurs « ok »).

- [ ] **Step 1 : lot 1 (10 pages) et hub** rédigés, vérifiés, contrôlés, datés, commités.
- [ ] **Step 2 : lot 2 (10 pages)** rédigées, vérifiées, contrôlées, datées, commitées.
- [ ] **Step 3 : contrôle d'ensemble et test des données réelles**

`tools/tests/RegistresTest.php` :

```php
function test_registres_secteurs_reels_publies_par_lots(): void
{
    // Vague 1E, sur les vraies pages : 10 secteurs et le hub le 05/11, les 20 le 19/11 (une page invalide ferait baisser le compte).
    $n = static fn(string $jour): int => count(registre_publiees('secteur', REGISTRES_RACINE, $jour));
    assert_same(0, $n('2026-11-04'));
    assert_same(10, $n('2026-11-05'));
    assert_same(10, $n('2026-11-18'));
    assert_same(20, $n('2026-11-19'));
    assert_same(null, maillage_page('hub', 'secteurs', REGISTRES_RACINE, '2026-11-04'));
    assert_true(maillage_page('hub', 'secteurs', REGISTRES_RACINE, '2026-11-05') !== null, 'hub publié avec le lot 1');
}
```

Run: `php tools/tests/run.php` : PASS ; `php tools/qa/registres.php --type=secteur` : 20 pages, 0 échec (unicité entre toutes) ; `php tools/qa/registres.php --type=hub` : 0 échec. Commit : `git commit -m "Secteurs : test des vraies pages publiees par lots"`.

---

### Task 5: Recette, revue, mise en ligne

- [ ] **Step 1 : recette** : `php tools/tests/run.php` ; `php tools/qa/registres.php --type=secteur --liens` et `--type=hub --liens` (Apache local lancé ; les faux 404 vers des pages datées plus tard sont relus un par un) ; avec une date de publication temporaire non commitée sur `cliniques` et le hub : `/formations/metier/medecins-cliniques` affiche le groupe « Secteurs », `/digitaliser-clinique-abomey-calavi` la section « Le secteur en détail », le pied le lien « Secteurs » ; captures 390 et 1280 px de `/secteurs/cliniques` et de `/secteurs/` ; dates temporaires remises (`git checkout --` des deux fichiers).
- [ ] **Step 2 : revue indépendante** : un relecteur du code des Tasks 1 et 2 ; des relecteurs des faits par lots de 5 pages, 3 affirmations tirées au hasard par page ouvertes à leur source et points fragiles relevés en Task 4 ; corrections par TDD pour le code.
- [ ] **Step 3 : mise en ligne** : proposer à Richard `git checkout main`, `git merge --no-ff vague-1e`, `git push origin main` ; suivre le workflow (`GH_TOKEN=$(gh auth token --user Richard6141) gh run watch`) ; en production : smoke 9/9, `/secteurs/` et `/secteurs/cliniques` en 404 avant le 05/11, sitemap et llms.txt sans page secteur avant leur date, pied sans lien `/secteurs/` ; mémoire du projet mise à jour.
