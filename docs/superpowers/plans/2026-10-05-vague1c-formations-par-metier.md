# Vague 1C : 34 pages « formations par métier » — Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Publier les 34 pages `/formations/metier/{metier}` de la spec 6.3 bis (3 200 mots ou plus chacune), reliées au catalogue des 60 formations, listées sur le hub `/formations/` et proposées sur chaque fiche formation concernée.

**Architecture:** Les pages vivent dans `portfolio/data/metiers/{slug}.php` (type `metier`, champs propres `univers` et `prioritaire`, déjà prévus par la vague 0C : route, schéma `Course`, fil d'Ariane). Cette vague ajoute la validation des univers, le maillage inverse fiche formation vers métiers, et la liste des métiers par univers sur le hub `/formations/`. Rédaction par sous-agents, un fichier chacun, contrôlée par `php tools/qa/registres.php --type=metier`.

**Tech Stack:** PHP 8, registres 0C, `php tools/tests/run.php`, `tools/qa/registres.php`, sous-agents de rédaction.

**Spec:** `docs/superpowers/specs/2026-10-03-refonte-globale-design.md` (6.1, 6.3 bis, 8, 9, 11.3). Publics validés par Richard : `docs/questionnaire-refonte.md`, section 3 (F = déjà formé, P = peut former).

## Global Constraints

- Mêmes règles que les vagues 1A et 1B (plans `2026-10-03-vague1a-...` et `2026-10-05-vague1b-...`, Global Constraints), qui restent vraies, dont : aucun prix de formation, « sur devis » ; aucune certification de Richard ; phrase d'entité reprise via `fait('phrase_entite')`.
- Statut F ou P du questionnaire : un public F s'écrit « Richard a déjà formé des {public} » sans nombre ni nom de structure ; un public P s'écrit « Richard peut former des {public} », jamais « a formé ». Aucune référence citée : le questionnaire n'en autorise aucune.
- Richard n'exerce aucun de ces métiers : il forme à l'usage des outils ; le contenu métier (droit, comptabilité, médecine...) reste celui des professionnels, sourcé.
- Univers (`REGISTRES_UNIVERS`) : `Droit et justice`, `Chiffre et finance`, `Direction et gestion`, `Commerce et communication`, `Santé et social`, `Secteur public et éducation`, `Technique et terrain`.
- Publication (spec 11.3) : les 12 métiers prioritaires le `2026-10-15`, les 22 autres le `2026-10-22` (après le lot B des formations du 2026-10-12, donc toutes les fiches formation sont publiées et peuvent être liées dans le texte).
- La spec annonce 37 métiers mais n'en liste que 34 (6.3 bis, et 34 lignes au questionnaire) : on publie les 34 listés.

## Review Focus

1. Un public P présenté comme déjà formé (« a formé des pharmaciens ») : ne doit apparaître sur aucune page P.
2. Une fiche formation avant le 15/10 : aucun lien vers une page métier non publiée (le groupe « Formations par métier » est vide et absent).
3. Le hub `/formations/` avant le 15/10 : pas de titre « Formations par métier » vide.
4. Deux métiers proches (avocats / juristes d'entreprise / notaires ; experts-comptables / auditeurs / directeurs financiers) sous les seuils d'unicité de la section 8.
5. Une page métier qui renvoie vers une formation qui n'existe pas (slug mal écrit dans `liens`).

---

### Task 1: Univers validés, maillage formation vers métiers, liste des métiers sur le hub

**Files:**
- Modify: `helpers/registres.php`, `helpers/maillage.php`, `portfolio/registre-hub.php`
- Create: `tools/tests/fixtures/registres/metiers/test-metier.php`
- Test: `tools/tests/RegistresTest.php`, `tools/tests/MaillageTest.php`, `tools/tests/GabaritTest.php`

**Interfaces:**
- Produces: `REGISTRES_UNIVERS` (liste ordonnée des 7 univers) ; groupe de maillage « Formations par métier » sur une page `formation` ; sur le hub des formations, un bloc `<section id="metiers">` avec un `<h2>` « Formations par métier » et un `<h3>` par univers.

- [ ] **Step 1 : fixture et tests**

Fixture `tools/tests/fixtures/registres/metiers/test-metier.php` : copie de la fixture formation `ia-test.php` sans les champs de formation, avec `'univers' => 'Droit et justice'`, `'prioritaire' => true`, `'publie' => '2026-01-01'`, `'liens' => ['formations' => ['ia-test']]`.

`RegistresTest.php` :

```php
function test_registres_univers_de_metier_connu(): void
{
    $base = require fixtures() . '/metiers/test-metier.php';
    assert_same([], registre_valider('metier', 'test-metier', $base));
    assert_contains('univers inconnu', implode(' ', registre_valider('metier', 'x', ['univers' => 'Divers'] + $base)));
}
```

`MaillageTest.php` :

```php
function test_maillage_fiche_formation_propose_ses_metiers(): void
{
    $p = registre_lire('formation', 'ia-test', fixtures());
    $titres = array_column(maillage_liens($p, fixtures(), '2026-06-01'), 'titre');
    assert_contains('Formations par métier', implode('|', $titres));
    $avant = array_column(maillage_liens($p, fixtures(), '2025-12-31'), 'titre');
    assert_not_contains('Formations par métier', implode('|', $avant), 'métier non publié : aucun lien');
}
```

`GabaritTest.php` :

```php
function test_gabarit_hub_formations_liste_les_metiers_par_univers(): void
{
    $html = gabarit_rendre('hub', 'formations-test');
    assert_contains('id="metiers"', $html);
    assert_contains('<h3>Droit et justice</h3>', $html);
    assert_contains('href="/formations/metier/test-metier"', $html);
}
```

(fixture hub `tools/tests/fixtures/registres/hubs/formations-test.php` : copie de la fixture hub existante avec `'liste' => 'formation'`.)

- [ ] **Step 2 : RED** — Run: `php tools/tests/run.php Registres`, `Maillage`, `Gabarit`.
- [ ] **Step 3 : implémentation**

`helpers/registres.php` :

```php
/** Univers des pages métier, dans l'ordre d'affichage (spec 6.3 bis, vague 1C). */
const REGISTRES_UNIVERS = ['Droit et justice', 'Chiffre et finance', 'Direction et gestion', 'Commerce et communication', 'Santé et social', 'Secteur public et éducation', 'Technique et terrain'];
```

et dans `registre_valider` :

```php
    if ($type === 'metier' && isset($p['univers']) && !in_array($p['univers'], REGISTRES_UNIVERS, true)) {
        $e[] = 'univers inconnu : ' . $p['univers'];
    }
```

`helpers/maillage.php`, dans `maillage_liens`, cas `formation` (après « Cette formation par pays ») :

```php
            if ($p['type'] === 'formation') {
                $ajouter('Formations par métier', array_filter(registre_publiees('metier', $racine, $aujourdhui),
                    static fn(array $q): bool => in_array($p['slug'], (array) ($q['liens']['formations'] ?? []), true)));
            }
```

et le libellé du cas `metier` devient « Ce métier par pays ».

`portfolio/registre-hub.php` : après le calcul de `$hubFamilles`, si `$listeType === 'formation' && $rp['type'] === 'hub'`, regrouper `registre_publiees('metier', $racineReg)` par `REGISTRES_UNIVERS` dans `$hubMetiers` (univers vides retirés) ; dans le gabarit, après la liste des fiches et avant l'article :

```php
    <?php if (!empty($hubMetiers)): ?>
    <section id="metiers" class="liste-hub__metiers">
      <h2 class="liste-hub__famille">Formations par métier</h2>
      <?php foreach ($hubMetiers as $univers => $metiers): ?>
      <h3><?= sanitize($univers) ?></h3>
      <ul class="liste-liens">
        <?php foreach ($metiers as $q): ?><li><a href="<?= sanitize($q['url']) ?>"><?= sanitize($q['titre']) ?></a></li><?php endforeach; ?>
      </ul>
      <?php endforeach; ?>
    </section>
    <?php endif; ?>
```

- [ ] **Step 4 : GREEN** — Run: `php tools/tests/run.php`. Expected: PASS.
- [ ] **Step 5 : commit** — `git commit -m "Univers des metiers valides ; fiches formation reliees a leurs metiers ; metiers par univers sur le hub des formations"`

---

### Task 2: Consigne et table des métiers

**Files:**
- Create: `docs/superpowers/consignes/page-metier.md`, `docs/superpowers/consignes/catalogue-metiers.md`

`page-metier.md` (lu par chaque rédacteur) :

```text
CONSIGNE : PAGE « FORMATIONS PAR MÉTIER » (richardsalanon.com)

Tu rédiges UNE page /formations/metier/SLUG du site de Richard SALANON. Dépôt : C:\xampp\htdocs\Richard_portfolio. Lis d'abord : portfolio/data/faits.php ; la consigne des formations docs/superpowers/consignes/fiche-formation.md (FORMAT, BLOCS, EXIGENCES : elles s'appliquent ici, sauf ce qui suit) ; sa table docs/superpowers/consignes/catalogue-formations.md (les 60 formations et la section « Faits déjà vérifiés ») ; la table des métiers docs/superpowers/consignes/catalogue-metiers.md (ta ligne). Tu écris UNIQUEMENT le fichier indiqué. Aucun commit, aucune commande git qui modifie le dépôt.

FORMAT : fichier PHP qui retourne un tableau avec 'titre' (H1 : la formation numérique et IA pour ce métier, et son bénéfice), 'title' (50 à 60 caractères, finit par « | Richard SALANON » si la place le permet), 'meta' (140 à 155 caractères), 'en_bref' (2 à 4 phrases), 'publie' => '2026-10-05' (la date réelle est posée au commit), 'maj' => '2026-10-05', 'univers' => UNIVERS, 'prioritaire' => true ou false, 'programme' => [demi-journées comme les fiches formation], 'faits_hero' => [Public, Durée, Formats, Prix « Sur devis »], 'sections', 'faq' (8 questions ou plus), 'sources' (6 ou plus, https, datées '2026-10-05'), 'liens' => ['formations' => [3 à 6 slugs du catalogue], 'services' => [1 à 3 piliers], 'comparatifs' => [0 à 2]]. Place le programme avec une section ['type' => 'programme', 'titre' => '...'] sans 'jours'.

PLAN TYPE (spec 6.3 bis) : ce que l'IA, la digitalisation et l'automatisation changent pour ce métier ; ce qu'elles ne doivent jamais faire (secret professionnel, déontologie, données personnelles, responsabilité) avec les textes qui le disent ; cas d'usage concrets du métier en Afrique francophone et en Europe ; outils et systèmes du métier (OHADA, SYSCOHADA, Odoo, Dolibarr, WhatsApp, logiciels métier) ; programme type ; formats et organisation ; prix « sur devis » ; financement ; erreurs fréquentes ; les formations du catalogue qui s'y rattachent (tableau avec lien /formations/SLUG) ; pourquoi Richard (phrase d'entité via fait('phrase_entite'), STATUT F ou P de ta ligne) ; cta vers /contact.

STATUT : F = « Richard a déjà formé des {public} » (sans nombre ni nom d'organisation) ; P = « Richard peut former des {public} » (jamais « a formé »). Richard n'exerce pas ce métier : il forme à l'usage des outils.

LIENS AUTORISÉS dans le texte : /contact, /richard-salanon, /formations/, /formations/domaine/{8 domaines}, /formations/{les 60 fiches}, /services/{27 piliers}, /comparatifs/ et ses 4 pages, /histoires/ et ses 7 histoires, /zones/. Aucun lien vers une autre page métier.

VÉRIFICATIONS : php -l FICHIER ; php tools/qa/registres.php --type=metier (ta ligne « ok ») ; http://localhost:8081/formations/metier/SLUG répond 200. Compte rendu en 8 lignes. Écris le fichier en plusieurs opérations de 5 000 mots au plus (Write puis Edit), jamais d'un seul bloc. Si tu utilises le scratchpad, travaille dans un sous-dossier à ton nom. WebSearch peut être épuisé : WebFetch, curl, ou le navigateur wmux ("C:\Users\FRATERNEL PLOMBERIE\AppData\Local\Programs\wmux\resources\cli-bin\wmux" browser open URL puis browser eval avec document.body.textContent).
```

`catalogue-metiers.md` : une ligne par métier (slug, titre, univers, prioritaire, statut F/P, angle propre, formations du catalogue à privilégier), table complète dans le fichier.

- [ ] **Step 1 : écrire les deux fichiers ; commit** — `git commit -m "Consigne et table des pages formations par metier"`

---

### Task 3: Rédaction des 34 pages

Un sous-agent par page, six en parallèle en flux continu, consigne de la Task 2 avec FICHIER et SLUG. Après chaque page reçue : `php -l`, `php tools/qa/registres.php --type=metier` (ligne « ok »), contrôle du statut F ou P (`grep` de « a déjà formé » sur les pages P), date posée (`2026-10-15` si prioritaire, sinon `2026-10-22`), commit `Page metier : ...`.

- [ ] **Step 1 : rédiger, contrôler, dater, commiter les 34 pages.**
- [ ] **Step 2 : unicité de tout le type** : `php tools/qa/registres.php --type=metier` à 0 échec ; liens de `liens.formations` existants (script de la vague 1B).

---

### Task 4: Recette, revue, mise en ligne

- [ ] **Step 1 : recette** : `php tools/tests/run.php` ; `php tools/qa/registres.php --type=metier` et `--type=formation` ; simulation au 2026-10-15 et au 2026-10-22 (nombre de métiers publiés par univers) ; capture 390 et 1280 d'une page métier (rendue avec une date de publication temporaire en local, sans commit).
- [ ] **Step 2 : revue indépendante** (Review Focus), corrections par TDD.
- [ ] **Step 3 : fusion sans checkout, push, workflow, contrôles en production** (smoke, pages métier en 404 avant leur date, sitemap inchangé), mémoire du projet.
