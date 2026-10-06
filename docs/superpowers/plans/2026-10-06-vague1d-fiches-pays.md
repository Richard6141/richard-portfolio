# Vague 1D : 34 fiches pays `/zones/{pays}` — Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Publier les 34 pages pays `/zones/{pays}` de la spec (6.4, 6.5) : une fiche de faits sourcés et datés par pays, plus un texte de 3 200 mots ou plus qui présente, pour ce pays, le contexte numérique, le paiement, le cadre légal, les services, la formation et la façon de travailler avec Richard.

**Architecture:** Les pages vivent dans `portfolio/data/pays/{slug}.php` (type `pays`, champ propre `fiche`, déjà routé, schématisé et maillé par la vague 0C). Cette vague valide la structure de la fiche, la rend dans un bloc `fiche` (tableaux par groupe, source et date sur chaque ligne, groupe vide masqué), fait pointer le méga-menu, le fil d'Ariane des pages ville et la page `/zones/` vers les pages pays publiées (`pays_url()`), puis fait rédiger les 34 pages par sous-agents, une par agent, contrôlées par `php tools/qa/registres.php --type=pays`.

**Tech Stack:** PHP 8, registres 0C, `php tools/tests/run.php`, `tools/qa/registres.php`, sous-agents de recherche et de rédaction (WebSearch, WebFetch, navigateur wmux).

**Spec:** `docs/superpowers/specs/2026-10-03-refonte-globale-design.md` (5.5, 6.4, 6.5, 6.6, 7.1 à 7.3, 8, 9, 11.3) et `docs/superpowers/specs/2026-10-03-refonte-references.md`.

## Global Constraints

- Mêmes règles que les vagues 1A à 1C (plans `2026-10-03-vague1a-...`, `2026-10-05-vague1b-...`, `2026-10-05-vague1c-...`, Global Constraints), qui restent vraies.
- Fiche (spec 6.5) : chaque valeur porte sa source (URL https de la page qui énonce le fait) et sa date de consultation ; une valeur introuvable reste absente et son groupe disparaît s'il est vide. Aucune valeur inventée ou déduite.
- Prix (spec 6.4) : en Afrique, devise locale doublée de l'euro ; jamais de FCFA sur une page France, Belgique, Suisse, Canada, Luxembourg ou Monaco. Seuls ordres de grandeur autorisés : `fait('tarifs_depart')` (FCFA), et seulement sur les pages XOF et XAF, avec l'équivalent en euros à la parité fixe de 655,957 FCFA pour 1 € (150 000 FCFA, soit environ 229 € ; 300 000 FCFA, soit environ 457 € ; 75 000 FCFA, soit environ 114 €). Partout ailleurs : « sur devis ».
- Devise des devis : FCFA dans les pays XOF et XAF, franc suisse en Suisse, dollar canadien au Canada, euro partout ailleurs (phrase de `/zones/`).
- Présence : Richard intervient sur place au Bénin, à distance partout ailleurs (texte de `/zones/`). Aucune promesse de déplacement hors du Bénin.
- « Richard a déjà travaillé avec des entreprises {dans} » seulement pour les 14 pays de `fait('pays_travailles')` ; ailleurs : « Richard peut accompagner à distance ».
- Projets clients cités seulement s'ils figurent dans `portfolio/data/projets-clients.php`, avec la même description et la mention « réalisé en sous-traitance pour Digital Développement » quand `relation` vaut `sous-traitance` ; lien vers `/realisations/`, jamais vers le site du client. QueenK Beauty n'est jamais cité.
- Phrase d'entité reprise mot pour mot (`fait('phrase_entite')`, spec 5.5 règle 5).
- Publication (spec 11.3) : tranches 1 et 2 (12 pays) le `2026-10-29`, tranches 3 à 5 (22 pays) le `2026-11-12`. La date est posée au commit ; les brouillons portent `2026-10-06` pour être servis en local.
- Aucun lien dans le texte vers une autre page `/zones/{pays}` : le maillage « Pays voisins » le fait, et seulement vers les pages publiées.

## Review Focus

1. Un fait de la fiche faux, périmé ou sourcé par une page qui ne le dit pas (loi abrogée, autorité renommée, opérateur disparu, chiffre d'une autre année) : la relecture contrôle au hasard 3 lignes par page contre leur source.
2. Une page T1 ou T2 servie le 29/10 qui renverrait vers une page pays de T3 à T5 encore en 404 : aucun lien `/zones/{pays}` dans le texte (contrôle `grep` de la Task 4), et le maillage ne propose que des pages publiées (test de la Task 2).
3. Deux pays voisins de même devise (Bénin et Togo ; Burkina Faso, Mali et Niger ; Gabon et Congo-Brazzaville) au-dessus de 40 % de ressemblance : `php tools/qa/registres.php --type=pays` sur les 34 pages ensemble.
4. Le méga-menu et les pages ville avant le 29/10 : ils gardent leurs liens actuels vers les pages ville, jamais vers une page pays en 404 (test de la Task 2 : le lien suit `pays_url()`).
5. Une fiche avec une clé mal écrite (`operateur` au lieu de `operateurs`) ou une valeur vide : la page est refusée par `registre_valider` et disparaît en silence ; le contrôle QA de la Task 4 la signale parce qu'elle manque au décompte des 34 pages.

---

### Task 1: Fiche pays validée et rendue

**Files:**
- Modify: `helpers/registres.php`, `helpers/blocs.php`, `portfolio/registre.php`, `assets/css/portfolio-v2.css`, `tools/tests/fixtures/registres/pays/benin.php`
- Create: `portfolio/partials/blocs/fiche.php`, `tools/tests/fixtures/registres/pays/togo.php`
- Test: `tools/tests/RegistresTest.php`, `tools/tests/BlocsTest.php`, `tools/tests/GabaritTest.php`, `tools/tests/RouteTest.php`

**Interfaces:**
- Produces: `REGISTRES_FICHE_PAYS` (groupe => [clé => libellé], ordre d'affichage) ; `registre_fiche_groupes(array $fiche): array` (groupe => liste de `['libelle' => string, 'valeur' => string, 'source' => string, 'date' => string]`, groupes vides retirés) ; bloc `fiche` (`['type' => 'fiche', 'titre' => string, 'faits' => array]`) ; dans `registre.php`, une section `fiche` sans `faits` reçoit la fiche de la page, et une page pays sans section `fiche` la reçoit avant la FAQ.

- [ ] **Step 1 : fixtures et tests**

`tools/tests/fixtures/registres/pays/benin.php` : ajouter à `'fiche'` la clé `'operateurs' => ['v' => ['MTN MoMo', 'Moov Money'], 'source' => 'https://example.org/paiement', 'date' => '2026-01-01']`, et ajouter à `'sections'`, après le bloc prose, `['type' => 'fiche', 'titre' => 'Quels repères retenir sur le pays ?']`.

`tools/tests/fixtures/registres/pays/togo.php` : copie de `benin.php` avec `'titre' => 'Pays de test : Togo'`, `'title' => 'Page pays de test pour le Togo, jamais servie | Richard SALANON'`, une fiche réduite à `'capitale' => ['v' => 'Lomé', 'source' => 'https://example.org/', 'date' => '2026-01-01']` et sans section `fiche`.

`RegistresTest.php` :

```php
function test_registres_fiche_pays_valide(): void
{
    // Vague 1D : chaque valeur de fiche porte sa source https et sa date (spec 6.5).
    $base = require fixtures() . '/pays/benin.php';
    assert_same([], registre_valider('pays', 'benin', $base));
    $erreurs = static fn($fiche): string => implode(' ', registre_valider('pays', 'benin', ['fiche' => $fiche] + $base));
    assert_contains('clé inconnue « operateur »', $erreurs(['operateur' => ['v' => 'MTN', 'source' => 'https://x.org/', 'date' => '2026-01-01']]));
    assert_contains('fiche[capitale]', $erreurs(['capitale' => ['v' => '', 'source' => 'https://x.org/', 'date' => '2026-01-01']]));
    assert_contains('fiche[capitale]', $erreurs(['capitale' => ['v' => 'Porto-Novo', 'source' => 'http://x.org/', 'date' => '2026-01-01']]));
    assert_contains('fiche[capitale]', $erreurs(['capitale' => ['v' => 'Porto-Novo', 'source' => 'https://x.org/']]));
    assert_contains('fiche[operateurs]', $erreurs(['operateurs' => ['v' => ['', ' '], 'source' => 'https://x.org/', 'date' => '2026-01-01']]));
    assert_contains('fiche : tableau attendu', $erreurs('Porto-Novo'));
}

function test_registres_fiche_pays_groupee_dans_l_ordre(): void
{
    $groupes = registre_fiche_groupes([
        'operateurs' => ['v' => ['MTN MoMo', 'Moov Money'], 'source' => 'https://example.org/p', 'date' => '2026-01-01'],
        'capitale'   => ['v' => 'Porto-Novo', 'source' => 'https://example.org/', 'date' => '2026-01-02'],
    ]);
    assert_same(['Identité', 'Paiement'], array_keys($groupes), 'ordre de REGISTRES_FICHE_PAYS, groupes vides retirés');
    assert_same(['libelle' => 'Opérateurs de mobile money', 'valeur' => 'MTN MoMo, Moov Money', 'source' => 'https://example.org/p', 'date' => '2026-01-01'], $groupes['Paiement'][0]);
    assert_same([], registre_fiche_groupes([]));
}
```

`BlocsTest.php` :

```php
function test_bloc_fiche_tableaux_par_groupe_avec_sources(): void
{
    $html = bloc_rendre(['type' => 'fiche', 'titre' => 'Quels repères retenir ?', 'faits' => [
        'capitale' => ['v' => 'Porto-Novo', 'source' => 'https://www.example.org/page', 'date' => '2026-01-02'],
    ]]);
    assert_contains('<h2 class="bloc__titre"', $html);
    assert_contains('<caption>Identité</caption>', $html);
    assert_contains('<th scope="row">Capitale</th><td>Porto-Novo</td>', $html);
    assert_contains('<a href="https://www.example.org/page" rel="noopener" target="_blank">example.org</a>, consulté le <time datetime="2026-01-02">02/01/2026</time>', $html);
    assert_not_contains('Économie numérique', $html, 'groupe vide masqué');
    assert_same('', trim(bloc_rendre(['type' => 'fiche', 'titre' => 'Rien ?', 'faits' => []])), 'fiche vide : aucun bloc');
}
```

`GabaritTest.php` :

```php
function test_gabarit_pays_fiche_a_sa_place_ou_avant_la_faq(): void
{
    // Vague 1D : la section « fiche » placée par le rédacteur reçoit la fiche ; sinon elle s'ajoute avant la FAQ.
    $html = gabarit_rendre('pays', 'benin');
    assert_same(1, substr_count($html, 'bloc--fiche'));
    assert_contains('Quels repères retenir sur le pays', $html, 'titre du rédacteur (espace insécable avant « ? »)');
    assert_contains('MTN MoMo, Moov Money', $html);
    assert_true(strpos($html, 'bloc--fiche') < strpos($html, 'bloc--faq'));
    assert_contains('"Service"', $html);
    $togo = gabarit_rendre('pays', 'togo');
    assert_same(1, substr_count($togo, 'bloc--fiche'));
    assert_contains('<th scope="row">Capitale</th><td>Lomé</td>', $togo);
    assert_true(strpos($togo, 'bloc--fiche') < strpos($togo, 'bloc--faq'));
}
```

`RouteTest.php`, dans `test_route_http_404_franc_et_historique_intact` : remplacer `assert_same(404, http_local('/zones/benin')['code']);` par `assert_same(404, http_local('/zones/atlantide')['code'], 'pays hors liste');` (la page du Bénin sera servie le 29/10).

- [ ] **Step 2 : RED** — Run: `php tools/tests/run.php Registres`, `php tools/tests/run.php Blocs`, `php tools/tests/run.php Gabarit`. Expected: FAIL (`registre_fiche_groupes` absente, bloc `fiche` inconnu).

- [ ] **Step 3 : implémentation**

`helpers/registres.php`, après `REGISTRES_FAMILLES` :

```php
/** Fiche pays (spec 6.5, vague 1D) : groupe => [clé => libellé], dans l'ordre d'affichage. */
const REGISTRES_FICHE_PAYS = [
    'Identité' => ['capitale' => 'Capitale', 'villes' => 'Villes principales', 'fuseau' => 'Fuseau horaire',
                   'indicatif' => 'Indicatif téléphonique', 'langues' => 'Langues'],
    'Économie numérique' => ['population' => 'Population', 'internet' => 'Accès à internet', 'mobile' => 'Téléphonie mobile',
                             'mobile_money' => 'Mobile money', 'secteurs' => 'Secteurs porteurs'],
    'Paiement' => ['devise' => 'Devise', 'operateurs' => 'Opérateurs de mobile money', 'agregateurs' => 'Agrégateurs de paiement'],
    'Cadre légal' => ['donnees' => 'Loi sur les données personnelles', 'autorite' => 'Autorité de protection des données',
                      'facturation' => 'Facturation électronique ou normalisée', 'tva' => 'TVA', 'ohada' => 'OHADA',
                      'ecommerce' => 'Commerce électronique'],
    'Formation' => ['financement' => 'Financement de la formation'],
];

/** Groupes non vides d'une fiche pays, lignes prêtes à afficher (valeur en liste jointe par des virgules). */
function registre_fiche_groupes(array $fiche): array
{
    $groupes = [];
    foreach (REGISTRES_FICHE_PAYS as $groupe => $cles) {
        foreach ($cles as $cle => $libelle) {
            if (!isset($fiche[$cle])) {
                continue;
            }
            $f = $fiche[$cle];
            $groupes[$groupe][] = ['libelle' => $libelle, 'valeur' => is_array($f['v']) ? implode(', ', $f['v']) : (string) $f['v'],
                                   'source' => (string) $f['source'], 'date' => (string) $f['date']];
        }
    }
    return $groupes;
}
```

Dans `registre_valider`, après le contrôle « pays inconnu » :

```php
    if ($type === 'pays' && array_key_exists('fiche', $p)) {
        if (!is_array($p['fiche'])) {
            $e[] = 'fiche : tableau attendu';
        } else {
            $cles = array_merge(...array_values(array_map('array_keys', REGISTRES_FICHE_PAYS)));
            foreach ($p['fiche'] as $cle => $f) {
                if (!in_array($cle, $cles, true)) {
                    $e[] = "fiche : clé inconnue « {$cle} »";
                    continue;
                }
                $v = $f['v'] ?? '';
                $plein = is_array($v) ? array_filter($v, static fn($x): bool => trim((string) $x) !== '') !== [] : trim((string) $v) !== '';
                if (!$plein || !preg_match('#^https://#', (string) ($f['source'] ?? '')) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', (string) ($f['date'] ?? ''))) {
                    $e[] = "fiche[{$cle}] : v, source https et date attendus";
                }
            }
        }
    }
```

`helpers/blocs.php` : ajouter `'fiche'` à la fin de `BLOCS_TYPES`.

`portfolio/partials/blocs/fiche.php` :

```php
<?php /* Bloc « fiche » (vague 1D) : faits sourcés d'un pays, un tableau par groupe ; groupe vide masqué. */
$groupes = registre_fiche_groupes((array) ($b['faits'] ?? []));
if (!$groupes) { return; } ?>
<section class="bloc bloc--fiche" data-reveal>
  <?= bloc_titre($b) ?>
  <?php foreach ($groupes as $groupe => $lignes): ?>
  <div class="tableau-defilant" tabindex="0" role="region" aria-label="<?= htmlspecialchars($groupe, ENT_QUOTES) ?>">
    <table>
      <caption><?= htmlspecialchars($groupe, ENT_QUOTES) ?></caption>
      <tbody>
        <?php foreach ($lignes as $l): $h = bloc_href($l['source']); ?>
        <tr><th scope="row"><?= htmlspecialchars($l['libelle'], ENT_QUOTES) ?></th><td><?= bloc_texte($l['valeur']) ?></td><td class="fiche__source"><?php if ($h !== null): ?><a href="<?= htmlspecialchars($h, ENT_QUOTES) ?>" rel="noopener" target="_blank"><?= htmlspecialchars((string) preg_replace('/^www\./', '', (string) parse_url($h, PHP_URL_HOST)), ENT_QUOTES) ?></a>, <?php endif; ?>consulté le <time datetime="<?= htmlspecialchars($l['date'], ENT_QUOTES) ?>"><?= htmlspecialchars(date('d/m/Y', (int) strtotime($l['date'])), ENT_QUOTES) ?></time></td></tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <?php endforeach; ?>
</section>
```

`portfolio/registre.php` : remplacer le calcul de `$sectionsRendues` et `$programmePlace` par :

```php
// Vague 1B : une section « programme » sans jours reçoit le programme de la fiche, à sa place.
// Vague 1D : une section « fiche » sans faits reçoit la fiche du pays, à sa place.
$sectionsRendues = array_map(static fn(array $b): array => match (true) {
    ($b['type'] ?? '') === 'programme' && !isset($b['jours']) => $b + ['jours' => (array) ($rp['programme'] ?? [])],
    ($b['type'] ?? '') === 'fiche' && !isset($b['faits'])     => $b + ['faits' => (array) ($rp['fiche'] ?? [])],
    default => $b,
}, (array) $rp['sections']);
$programmePlace = in_array('programme', array_column($sectionsRendues, 'type'), true);
$fichePlacee    = in_array('fiche', array_column($sectionsRendues, 'type'), true);
```

et, juste après la ligne du programme non placé :

```php
      <?php if (!$fichePlacee && !empty($rp['fiche'])): ?><?= bloc_rendre(['type' => 'fiche', 'titre' => 'Quels repères retenir ' . pays_liste()[$rp['slug']]['dans'] . ' ?', 'faits' => $rp['fiche']]) ?><?php endif; ?>
```

`assets/css/portfolio-v2.css`, après la règle `.pv2 .bloc--tableau .tableau-defilant,...` :

```css
.pv2 .bloc--fiche .tableau-defilant{margin-top:.5rem;box-shadow:var(--shadow-card)}
.pv2 .bloc--fiche .tableau-defilant+.tableau-defilant{margin-top:1.25rem}
.pv2 .bloc--fiche caption{text-align:left;font-weight:700;padding:.75rem 1rem}
.pv2 .bloc--fiche th[scope="row"]{width:30%}
.pv2 .fiche__source{font-size:.85rem;color:var(--muted);white-space:nowrap}
```

- [ ] **Step 4 : GREEN** — Run: `php tools/tests/run.php`. Expected: PASS (tous les tests).
- [ ] **Step 5 : commit** — `git commit -m "Fiche pays : structure validee, bloc fiche sourcee rendu a sa place ou avant la FAQ"`

---

### Task 2: Liens vers les pages pays publiées

**Files:**
- Modify: `helpers/registres.php`, `portfolio/zones-index.php`, `portfolio/partials/pv2-header.php`, `portfolio/ville.php`, `portfolio/partials/registre/hero.php`
- Test: `tools/tests/ZonesTest.php`, `tools/tests/EnteteTest.php`

**Interfaces:**
- Consumes: `registre_lire`, `registre_publiee`, `pays_liste` (0C).
- Produces: `pays_slug(string $pays): ?string` (slug depuis un slug ou un nom affiché, null si inconnu) ; `pays_url(string $pays, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): ?string` (URL de la page pays publiée, sinon null).

- [ ] **Step 1 : tests**

`ZonesTest.php` :

```php
function test_zones_url_de_la_page_pays_seulement_publiee(): void
{
    // Vague 1D : un lien vers une page pays n'existe que si la page est publiée (jamais de 404).
    $fx = racine('tools/tests/fixtures/registres');
    assert_same('benin', pays_slug('Bénin'));
    assert_same('benin', pays_slug('benin'));
    assert_same(null, pays_slug('Atlantide'));
    assert_same('/zones/benin', pays_url('Bénin', $fx, '2026-06-01'));
    assert_same(null, pays_url('benin', $fx, '2025-12-31'), 'avant sa date');
    assert_same(null, pays_url('senegal', $fx), 'sans page');
    assert_same(null, pays_url('Atlantide', $fx));
}

function test_zones_fil_des_pages_ville_vers_le_pays_publie(): void
{
    $h = http_local('/developpeur-web-cotonou')['corps'];
    $url = pays_url('benin');
    $attendu = $url === null
        ? '<a href="/zones/">Zones desservies</a><span class="sep">/</span>Cotonou'
        : '<a href="' . $url . '">Bénin</a><span class="sep">/</span>Cotonou';
    assert_contains($attendu, $h, 'pays dans le fil seulement une fois sa page publiée');
}
```

`GabaritTest.php` (la fixture `benin` est publiée le 2026-01-01) :

```php
function test_gabarit_pays_drapeau_dans_le_hero(): void
{
    assert_contains('<span class="eyebrow"><img class="drapeau" src="/assets/drapeaux/bj.svg"', gabarit_rendre('pays', 'benin'));
}
```

`EnteteTest.php` :

```php
function test_entete_pays_vers_la_page_pays_une_fois_publiee(): void
{
    // Vague 1D : le méga-menu vise la page pays publiée, sinon la page ville historique.
    $html = entete_rendre();
    $nav = require racine('portfolio/data/navigation.php');
    foreach ($nav['pays'] as $liste) {
        foreach ($liste as $eP) {
            assert_contains('href="' . (pays_url($eP['nom']) ?? $eP['url']) . '"', $html, $eP['nom']);
        }
    }
}
```

- [ ] **Step 2 : RED** — Run: `php tools/tests/run.php Zones`, `Entete`, `Gabarit`. Expected: FAIL (`pays_slug` absente, pas de drapeau dans le hero).

- [ ] **Step 3 : implémentation**

`helpers/registres.php` : extraire la résolution du nom de `drapeau()` dans `pays_slug()`, et ajouter `pays_url()` :

```php
/** Slug d'un pays depuis son slug ou son nom affiché, ou null. */
function pays_slug(string $pays): ?string
{
    static $parNom = null;
    $liste = pays_liste();
    $parNom ??= array_column(array_map(static fn(string $s, array $p): array => [$p['nom'], $s], array_keys($liste), $liste), 1, 0);
    return isset($liste[$pays]) ? $pays : ($parNom[$pays] ?? null);
}

/** URL de la page pays publiée (vague 1D), ou null : aucun lien vers une page en 404. */
function pays_url(string $pays, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): ?string
{
    $slug = pays_slug($pays);
    $p = $slug !== null ? registre_lire('pays', $slug, $racine) : null;
    return ($p !== null && registre_publiee($p, $aujourdhui)) ? $p['url'] : null;
}
```

et dans `drapeau()` : `$slug = pays_slug($pays);` (le cache `$parNom` quitte `drapeau()`).

`portfolio/zones-index.php`, dans la liste des pays : remplacer les deux lignes `$fiche = ...; $lien = ...;` par `$lien = pays_url($slug);`.

`portfolio/partials/pv2-header.php`, lignes du méga-menu et du tiroir : `href="<?= sanitize(pays_url($eP['nom']) ?? $eP['url']) ?>"`.

`portfolio/ville.php` : avant le tableau des schémas,

```php
$paysUrl  = pays_url((string) $v['pays']);
$filVille = array_values(array_filter([
    ['Accueil', $portfolioUrl . '/'],
    ['Zones desservies', $portfolioUrl . '/zones/'],
    $paysUrl !== null ? [$v['pays'], $portfolioUrl . $paysUrl] : null,
    [$v['nom'], $villeUrl],
]));
```

et, dans le `BreadcrumbList` :

```php
        'itemListElement' => array_map(static fn(int $i, array $m): array => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $m[0], 'item' => $m[1]],
            array_keys($filVille), $filVille),
```

et le fil visible :

```php
  <div class="wrap crumb"><a href="/">Accueil</a><span class="sep">/</span><a href="/zones/">Zones desservies</a><span class="sep">/</span><?php if ($paysUrl !== null): ?><a href="<?= sanitize($paysUrl) ?>"><?= sanitize($v['pays']) ?></a><span class="sep">/</span><?php endif; ?><?= sanitize($v['nom']) ?></div>
```

`portfolio/partials/registre/hero.php` : `<span class="eyebrow"><?= $rp['type'] === 'pays' ? drapeau($rp['slug']) : '' ?><?= sanitize($etiquette) ?></span>`.

- [ ] **Step 4 : GREEN** — Run: `php tools/tests/run.php`. Expected: PASS.
- [ ] **Step 5 : commit** — `git commit -m "Pages pays : liens du menu, du fil des villes et de /zones/ seulement une fois publiees ; drapeau dans le hero"`

---

### Task 3: Consigne et table des pays

**Files:**
- Create: `docs/superpowers/consignes/page-pays.md`, `docs/superpowers/consignes/catalogue-pays.md`

- [ ] **Step 1 : table générée**

`catalogue-pays.md` : en-tête de trois lignes (source : `data/pays-liste.php`, `faits.php`, `villes.php`, `sujets.php` ; date 2026-10-06), puis la table produite par :

```bash
php -r '
require "helpers/functions.php";
$trav = fait("pays_travailles");
$locales = [];
foreach (maillage_villes() as $v) { $locales[$v["pays"]][] = "/developpeur-web-" . $v["slug"]; }
foreach ((array) require "portfolio/data/sujets.php" as $sj) { foreach ($sj["pages"] as $pg) { $locales[$pg["pays"]][] = "/" . $pg["slug"]; } }
echo "| Slug | Pays | Locution | Tranche | Devise | Devise des devis | Déjà travaillé | Voisins | Pages locales | Publication |\n|---|---|---|---|---|---|---|---|---|---|\n";
foreach (pays_liste() as $s => $p) {
  $devis = in_array($p["devise"], ["XOF", "XAF"], true) ? "FCFA" : ($p["devise"] === "CHF" ? "CHF" : ($p["devise"] === "CAD" ? "CAD" : "EUR"));
  printf("| %s | %s | %s | T%d | %s | %s | %s | %s | %s | %s |\n", $s, $p["nom"], $p["dans"], $p["tranche"], $p["devise"], $devis,
    in_array($p["nom"], $trav, true) ? "oui" : "non", implode(", ", $p["voisins"]), implode(" ", $locales[$p["nom"]] ?? []) ?: "aucune",
    $p["tranche"] <= 2 ? "2026-10-29" : "2026-11-12");
}' > "$TMP/table-pays.md"
```

(`$TMP` : le scratchpad de la session ; coller le fichier sous l'en-tête). Ajouter sous la table la liste des 27 piliers (`ls portfolio/data/services/`) et renvoyer à `catalogue-formations.md` et `catalogue-metiers.md` pour les slugs de formations et de métiers.

- [ ] **Step 2 : consigne**

`page-pays.md` (lu par chaque rédacteur) :

```text
CONSIGNE : PAGE PAYS /zones/SLUG (richardsalanon.com)

Tu recherches puis rédiges UNE page pays du site de Richard SALANON. Dépôt : C:\xampp\htdocs\Richard_portfolio. Lis d'abord : portfolio/data/faits.php (seuls faits autorisés sur Richard) ; la consigne des piliers docs/superpowers/consignes/pilier-service.md (BLOCS et EXIGENCES s'appliquent ici, sauf ce qui suit) ; la table docs/superpowers/consignes/catalogue-pays.md (ta ligne, la liste des piliers) ; portfolio/data/projets-clients.php ; une page publiée comme modèle de format (portfolio/data/services/integration-odoo.php). Tu écris UNIQUEMENT le fichier indiqué. Aucun commit, aucune commande git qui modifie le dépôt.

FORMAT : fichier PHP qui retourne un tableau avec 'titre' (H1 propre à ce pays : ce que Richard apporte aux entreprises de ce pays, pas un gabarit « Services {dans} »), 'title' (50 à 60 caractères, finit par « | Richard SALANON » si la place le permet), 'meta' (140 à 155 caractères, phrase complète), 'en_bref' (2 à 4 phrases : ce que Richard fait pour les entreprises de ce pays, comment, en quelle devise), 'publie' => '2026-10-06', 'maj' => '2026-10-06' (la date réelle est posée au commit), 'fiche' => [...], 'faits_hero' => [['l' => 'Intervention', 'v' => 'À distance' ou, au Bénin seulement, 'Sur place et à distance'], ['l' => 'Décalage avec Cotonou', 'v' => '...'], ['l' => 'Devis', 'v' => 'En DEVISE DES DEVIS'], ['l' => 'Réponse', 'v' => 'sous 24 heures']], 'sections' => [...], 'faq' => [8 questions au moins, dont 6 propres au pays], 'sources' => [8 au moins, https, datées du jour de consultation], 'liens' => ['services' => [6 à 10 slugs de piliers], 'formations' => [3 à 6 slugs de fiches], 'comparatifs' => [0 à 2 slugs], 'metiers' => [0 à 3 slugs]].
Pas de bloc 'faq' ni 'sources' dans 'sections' (le gabarit les rend).

FICHE (spec 6.5) : clés autorisées, aucune autre : capitale, villes, fuseau, indicatif, langues ; population, internet, mobile, mobile_money, secteurs ; devise, operateurs, agregateurs ; donnees, autorite, facturation, tva, ohada, ecommerce ; financement. Chaque entrée : ['v' => 'valeur courte (25 mots au plus)' ou ['élément', 'élément'], 'source' => 'https://... (la page qui énonce le fait)', 'date' => 'AAAA-MM-JJ' (jour de consultation)]. Sources par ordre de préférence : journal officiel, texte de loi, autorité (protection des données, régulateur des télécoms, administration fiscale), banque centrale (BCEAO, BEAC, Bank Al-Maghrib...), institut national de la statistique, UIT, Banque mondiale, GSMA, site de l'opérateur ou de l'agrégateur. Un chiffre porte son année dans 'v' (« 32,4 % des habitants en 2024 »). Une valeur introuvable ou non confirmée : clé absente. Vérifie qu'une loi n'a pas été remplacée et qu'une autorité n'a pas changé de nom (cherche l'actualité de 2025 et 2026). Pays hors OHADA : clé 'ohada' absente. Pages d'éditeurs : WebFetch peut lire une version périmée ; en cas de doute, ouvre la page au navigateur wmux.
Place la fiche avec une section ['type' => 'fiche', 'titre' => 'H2 en question'] en deuxième ou troisième position.

PLAN TYPE (chaque H2 est une vraie question, écrite pour ce pays) :
1. Où en est le numérique dans ce pays (chiffres de la fiche, datés et sourcés dans la phrase) et ce que cela change pour un projet (prose, chiffres).
2. La fiche (section 'fiche').
3. Quels moyens de paiement intégrer : opérateurs, agrégateurs, cartes, virement ; comment l'intégration se passe ; frais et délais seulement s'ils sont sourcés.
4. Quelles obligations légales changent un projet : données personnelles (loi, autorité, formalités avant traitement), facturation (normalisée ou électronique), TVA sur les services numériques, OHADA et SYSCOHADA si le pays en est membre, commerce électronique, hébergement des données.
5. Quels services pour les entreprises du pays : tableau de 8 à 12 lignes (besoin typique dans ce pays, service, lien /services/SLUG).
6. Cas d'usage dans les secteurs porteurs du pays (bloc cas, 4 au moins, secteurs de la fiche).
7. Former les équipes : formats (à distance ; sur place au Bénin), financement de la formation (organismes, conditions, sourcés), liens /formations/SLUG.
8. Comment se passe une collaboration avec Richard depuis Cotonou : fuseau et décalage, langue, devise des devis, outils de suivi, déplacement (Bénin seulement).
9. Combien coûte un projet : ce qui fait varier le prix dans ce pays ; ordres de grandeur seulement sur les pages XOF et XAF (fait('tarifs_depart') en FCFA, avec l'équivalent en euros à 655,957 FCFA pour 1 €) ; ailleurs « sur devis, en DEVISE DES DEVIS ».
10. Erreurs fréquentes propres au pays (vigilance, points).
11. Pourquoi Richard : la phrase d'entité MOT POUR MOT (fait('phrase_entite')) ; colonne « Déjà travaillé » = oui : « Richard a déjà travaillé avec des entreprises LOCUTION » ; non : « Richard peut accompagner à distance les entreprises LOCUTION », jamais « a travaillé » ; projets de portfolio/data/projets-clients.php situés dans ce pays, avec leur description et la mention « réalisé en sous-traitance pour Digital Développement » quand relation vaut sous-traitance, lien /realisations/ (jamais le site du client ; jamais QueenK Beauty).
12. Bloc cta final vers /contact.

UNICITÉ : les 33 autres pages pays sont écrites en parallèle et comparées à la tienne (40 % de ressemblance au plus, noms de lieux neutralisés). N'écris aucune phrase passe-partout qu'on pourrait poser dans un autre pays : chaque paragraphe s'appuie sur un fait, une loi, un opérateur, un secteur ou un usage de CE pays.

LIENS AUTORISÉS dans le texte : /contact, /richard-salanon, /a-propos/, /realisations/, /zones/, /services/{27 piliers}, /formations/, /formations/{fiches du catalogue}, /formations/domaine/{8 domaines}, /formations/metier/{34 métiers}, /comparatifs/ et ses 4 pages, /histoires/ et ses 7 histoires, les pages locales de ta ligne. JAMAIS /zones/{un pays} : le maillage s'en charge.

VÉRIFICATIONS : php -l FICHIER ; php tools/qa/registres.php --type=pays (ta ligne « ok ») ; http://localhost:8081/zones/SLUG répond 200. Compte rendu en 10 lignes : mots, title, meta, clés de fiche remplies et absentes (avec la raison), sources consultées. Écris le fichier en plusieurs opérations de 5 000 mots au plus (Write puis Edit), jamais d'un seul bloc. Si tu utilises le scratchpad, travaille dans un sous-dossier à ton nom. WebSearch peut être épuisé : WebFetch, curl, ou le navigateur wmux ("C:\Users\FRATERNEL PLOMBERIE\AppData\Local\Programs\wmux\resources\cli-bin\wmux" browser open URL puis browser eval avec document.body.textContent).
```

- [ ] **Step 3 : commit** — `git commit -m "Consigne et table des pages pays"`

---

### Task 4: Recherche et rédaction des 34 pages

Un sous-agent par page, six en parallèle en flux continu, dans l'ordre des tranches (T1 d'abord), consigne de la Task 3 avec FICHIER (`portfolio/data/pays/{slug}.php`) et SLUG. Après chaque page reçue :

1. `php -l` ; `php tools/qa/registres.php --type=pays` : ligne « ok » pour la page.
2. Liens : `grep -o 'href="/zones/[a-z-]\+"' FICHIER` ne renvoie rien.
3. Présence : si la colonne « Déjà travaillé » vaut non, `grep -c "a déjà travaillé\|a travaillé" FICHIER` vaut 0.
4. Prix : sur une page EUR, CHF ou CAD, aucun montant en FCFA (le contrôle `prix` du QA le vérifie) ; sur toute page hors XOF et XAF, aucun montant chiffré en devise.
5. Fiche : 3 lignes tirées au hasard, ouvertes à leur source (WebFetch ou wmux) ; une ligne fausse ou non énoncée par la source est retirée ou corrigée.
6. Date posée : `publie` et `maj` à `2026-10-29` (T1, T2) ou `2026-11-12` (T3 à T5).
7. Commit : `git commit -m "Page pays : {Nom} (publiee le JJ/MM)"`.

- [ ] **Step 1 : tranches 1 et 2 (12 pages)** rédigées, contrôlées, datées, commitées.
- [ ] **Step 2 : tranches 3 à 5 (22 pages)** rédigées, contrôlées, datées, commitées.
- [ ] **Step 3 : contrôle d'ensemble** : `php tools/qa/registres.php --type=pays` à 34 pages et 0 échec (unicité entre toutes les pages) ; `php -r 'require "helpers/functions.php"; echo count(registre_tous("pays")), "\n";'` affiche 34 (une fiche invalide disparaîtrait en silence) ; slugs de `liens` tous existants (piliers, fiches formation, métiers, comparatifs).

---

### Task 5: Recette, revue, mise en ligne

- [ ] **Step 1 : recette** : `php tools/tests/run.php` ; `php tools/qa/registres.php --type=pays --liens` (Apache local lancé ; les faux 404 vers des pages datées plus tard sont relus un par un) ; simulation des dates : `php -r 'require "helpers/functions.php"; foreach (["2026-10-28", "2026-10-29", "2026-11-12"] as $d) echo $d, " ", count(registre_publiees("pays", REGISTRES_RACINE, $d)), "\n";'` affiche 0, 12, 34 ; captures 390 et 1280 px d'une page pays (Bénin) et de `/zones/`, rendues en local avec une date de publication temporaire non commitée.
- [ ] **Step 2 : revue indépendante** (Review Focus), corrections par TDD.
- [ ] **Step 3 : mise en ligne** : proposer à Richard `git checkout main`, `git merge --no-ff vague-1d`, `git push origin main` ; suivre le workflow (`GH_TOKEN=$(gh auth token --user Richard6141) gh run watch`) ; en production : smoke 9/9, `/zones/benin` en 404 avant le 29/10, sitemap et llms.txt sans page pays avant leur date, `/zones/` inchangée ; mémoire du projet mise à jour.
