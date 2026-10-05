# Vague 1B : catalogue de 60 formations, 8 domaines et hub /formations/ — Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Publier les 60 fiches formations de la spec 6.3 (3 200 mots ou plus chacune), les 8 pages domaine et un hub `/formations/` rédigé, dans les registres de la vague 0C, avec les 301 des 9 anciennes pages formation et une navigation qui pointe vers le nouveau catalogue.

**Architecture:** Les fiches vivent dans `portfolio/data/formations/{slug}.php`, les domaines dans `portfolio/data/domaines/{slug}.php`, le hub dans `portfolio/data/hubs/formations.php`. Le routeur (`route.php`), le schéma `Course`, le fil d'Ariane (domaine parent) et la liste par domaine (`registre-hub.php`) existent depuis la vague 0C ; cette vague ajoute le placement du programme dans la page, le hub groupé par domaine, la priorité du registre sur l'ancien hub codé en dur et une tâche quotidienne qui régénère le sitemap pour la publication étalée. La rédaction est confiée à des sous-agents (un fichier chacun), contrôlée par `php tools/qa/registres.php` avant chaque commit.

**Tech Stack:** PHP 8, registres de la vague 0C, harnais `php tools/tests/run.php`, contrôles `tools/qa/registres.php` et `tools/qa/crawl.php`, GitHub Actions, sous-agents de rédaction avec recherche web.

**Spec:** `docs/superpowers/specs/2026-10-03-refonte-globale-design.md` (6.1, 6.3, 6.8, 7, 8, 9, 11.3). Faits : `portfolio/data/faits.php`. Formations validées par Richard : `docs/questionnaire-refonte.md` section 2 (les 60 cochées « Oui »).

## Global Constraints

- Mêmes règles que les vagues 0C et 1A (plans `2026-10-03-vague0c-registres-routeur-gabarits.md` et `2026-10-03-vague1a-auteur-piliers-services.md`, Global Constraints), qui restent vraies.
- Prix : aucune somme pour une formation (le questionnaire, section 4, laisse les tarifs de formation vides ; la grille des anciennes pages IA n'est pas dans `faits.php`). Partout « sur devis », avec ce qui fait varier le prix (durée, nombre de participants, format, lieu, adaptation aux outils du client). Prix d'éditeurs tiers (licences Odoo, n8n Cloud, Make, ChatGPT, Power BI...) : sourcés et datés.
- Formats : `intra`, `inter`, `distance`, `hybride` (spec 6.3). Durées : de la demi-journée à 3 jours.
- Phrase d'entité (`fait('phrase_entite')`) reprise à l'identique sur chaque fiche, chaque domaine et le hub.
- Aucune référence de client formé, aucun nom de structure, aucun nombre de participants hors `fait('personnes_formees')` : le questionnaire (section 3) ne donne aucune référence citable.
- Domaines (`REGISTRES_DOMAINES`) : `intelligence-artificielle`, `automatisation`, `developpement`, `erp-gestion`, `marketing-visibilite`, `cybersecurite-it`, `transformation-digitale`, `ia-systemes-existants`.
- Publication étalée (spec 11.3) : lot A (hub, 8 domaines, 25 fortes) publié le jour du déploiement `2026-10-05` ; lot B (35 autres) le `2026-10-12`. Un lien rédigé dans le texte d'une page ne vise qu'une page du lot A (les listes automatiques et `liens` filtrent déjà les pages non publiées).

## Review Focus

1. Une ancienne URL de formation (`/formation-odoo`...) : une seule 301 vers sa fiche dès la publication, liens du site (menu, pied, blocs) déjà à l'URL finale, ancienne page absente du sitemap et de `llms.txt`.
2. Les 19 pages `/formation-ia-entreprise-{ville}` restent servies en 200 (leur cible formation × pays n'existe qu'en vague 2) et ne redirigent pas vers la fiche.
3. Une fiche du lot B avant le 12/10 : 404 franc, absente du hub, du domaine, du sitemap et du maillage, et aucun lien du lot A ne la vise.
4. Fiches proches (n8n / n8n avancé / Make ; Odoo utilisateurs / dirigeants / comptabilité / IA ; WhatsApp Business / chatbot WhatsApp / WhatsApp relié aux ERP ; IA en entreprise / IA générative dirigeants / prompt engineering) : sous les seuils d'unicité de la section 8.
5. Le programme d'une fiche s'affiche une seule fois, à l'endroit choisi par le rédacteur, et le schéma `Course` reste valide.

---

### Task 1: Programme placé dans la page, hub des formations par domaine, ancien hub remplacé

**Files:**
- Modify: `portfolio/registre.php`, `portfolio/registre-hub.php`, `portfolio/formations.php`, `helpers/registres.php`
- Test: `tools/tests/GabaritTest.php`, `tools/tests/RouteTest.php`, fixture `tools/tests/fixtures/registres/formations/ia-test.php`

**Interfaces:**
- Produces: `REGISTRES_DOMAINES_NOMS` (slug de domaine => libellé) ; une section `['type' => 'programme', 'titre' => '...']` sans `jours` reçoit `$page['programme']`.

- [ ] **Step 1 : tests**

Dans la fixture `ia-test.php`, ajouter en deuxième section `['type' => 'programme', 'titre' => 'Quel est le programme ?']`.

`GabaritTest.php` :

```php
function test_gabarit_programme_place_par_le_redacteur_une_seule_fois(): void
{
    $p = registre_lire('formation', 'ia-test', fixtures());
    $html = qa_rendre_registre($p, fixtures());
    assert_same(1, substr_count($html, 'bloc--programme'), 'programme rendu une fois');
    assert_true(strpos($html, 'bloc--programme') < strpos($html, 'Questions fréquentes'), 'avant la FAQ');
    assert_contains('Point.', $html);
}

function test_gabarit_hub_formations_groupe_par_domaine(): void
{
    $html = http_local('/formations/')['corps'];
    $pos = [];
    foreach (REGISTRES_DOMAINES_NOMS as $slug => $nom) {
        $pos[$slug] = strpos($html, '<h2 class="liste-hub__famille">' . sanitize($nom) . '</h2>');
        assert_true($pos[$slug] !== false, "domaine {$nom}");
    }
    $tri = $pos;
    sort($tri);
    assert_same($tri, array_values($pos), 'domaines dans l\'ordre du registre');
}
```

`RouteTest.php` :

```php
function test_route_hub_formations_prefere_le_registre(): void
{
    $src = (string) file_get_contents(racine('portfolio/formations.php'));
    assert_true(strpos($src, "route_resoudre('formations/')") < strpos($src, '$familles'), 'registre avant le catalogue codé en dur');
}
```

`require` de `tools/qa/lib.php` dans `GabaritTest.php` si `qa_rendre_registre` n'y est pas encore chargé.

- [ ] **Step 2 : lancer, constater l'échec** — Run: `php tools/tests/run.php Gabarit` puis `Route`. Expected: FAIL (programme rendu deux fois ou absent, constante inconnue, hub codé en dur).

- [ ] **Step 3 : implémentation**

`helpers/registres.php`, sous `REGISTRES_DOMAINES` :

```php
/** Libellés des domaines, dans l'ordre d'affichage (spec 6.3). */
const REGISTRES_DOMAINES_NOMS = [
    'intelligence-artificielle' => 'Intelligence artificielle',
    'automatisation'            => 'Automatisation',
    'developpement'             => 'Développement',
    'erp-gestion'               => 'ERP et outils de gestion',
    'marketing-visibilite'      => 'Marketing et visibilité',
    'cybersecurite-it'          => 'Cybersécurité et IT',
    'transformation-digitale'   => 'Transformation digitale',
    'ia-systemes-existants'     => 'IA dans vos systèmes existants',
];
```

`portfolio/registre.php`, avant `ob_start()` :

```php
// Vague 1B : une section « programme » sans jours reçoit le programme de la fiche, à sa place.
$sectionsRendues = array_map(static fn(array $b): array => ($b['type'] ?? '') === 'programme' && !isset($b['jours'])
    ? $b + ['jours' => (array) ($rp['programme'] ?? [])] : $b, (array) $rp['sections']);
$programmePlace = in_array('programme', array_column($sectionsRendues, 'type'), true);
```

puis `blocs_rendre($sectionsRendues)` au lieu de `blocs_rendre($rp['sections'])`, et la ligne du programme automatique devient `<?php if (!$programmePlace && !empty($rp['programme'])): ?>`.

`portfolio/registre-hub.php`, après le bloc des familles de services :

```php
// Vague 1B : hub des formations rangé par domaine, comme les services par famille.
if ($listeType === 'formation' && $rp['type'] === 'hub') {
    foreach (REGISTRES_DOMAINES_NOMS as $hubSlug => $hubNom) {
        $hubFamilles[$hubNom] = array_filter($elements, static fn(array $q): bool => ($q['domaine'] ?? '') === $hubSlug);
    }
    $hubFamilles = array_filter($hubFamilles);
    $elements = array_merge(...array_values($hubFamilles));
}
```

(la condition des services devient `if ($listeType === 'service')` inchangée ; le rendu par famille existant sert aux deux ; si `$hubFamilles` est vide, `array_merge(...[])` renvoie `[]` : garder `$elements` intact dans ce cas avec `if ($hubFamilles) { ... }`.)

`portfolio/formations.php`, juste après le `require` de l'amorçage :

```php
// Vague 1B : le hub rédigé dans data/hubs/formations.php remplace le catalogue codé en dur.
if (($page = route_resoudre('formations/')) !== null) {
    require __DIR__ . '/registre-hub.php';
    exit;
}
```

- [ ] **Step 4 : lancer, constater le succès** — Run: `php tools/tests/run.php`. Expected: PASS, sauf `test_gabarit_hub_formations_groupe_par_domaine` qui reste rouge tant que le hub et les fiches ne sont pas écrits (le marquer attendu dans le registre de suivi ; il passe en Task 4).
- [ ] **Step 5 : commit** — `git commit -m "Programme place par le redacteur ; hub des formations par domaine ; ancien hub remplace par le registre"`

---

### Task 2: Publication étalée : sitemap et IndexNow chaque jour

**Files:**
- Create: `.github/workflows/quotidien.yml`
- Test: `tools/tests/HtaccessTest.php` (fichiers de déploiement)

- [ ] **Step 1 : test**

```php
function test_workflow_quotidien_regenere_le_sitemap(): void
{
    $y = (string) file_get_contents(racine('.github/workflows/quotidien.yml'));
    assert_contains('schedule:', $y);
    assert_contains("cron: '15 6 * * *'", $y);
    assert_contains('generate-sitemap.php?key=${{ secrets.SITEMAP_KEY }}', $y);
    assert_contains('https://api.indexnow.org/IndexNow', $y);
}
```

- [ ] **Step 2 : RED** — Run: `php tools/tests/run.php Htaccess`. Expected: FAIL (fichier absent).
- [ ] **Step 3 : implémentation** : `quotidien.yml` = `on: schedule: - cron: '15 6 * * *'` et `workflow_dispatch`, un job `ubuntu-latest` qui reprend mot pour mot les étapes « Regenerer le sitemap » et « Signaler les URL a IndexNow » de `deploy.yml` (sans checkout ni SSH). Commentaire d'en-tête : une page dont la date `publie` arrive entre deux déploiements entre ainsi dans le sitemap le matin même (spec 11.3).
- [ ] **Step 4 : GREEN** — Run: `php tools/tests/run.php Htaccess`. Expected: PASS.
- [ ] **Step 5 : commit** — `git commit -m "Workflow quotidien : sitemap et IndexNow pour les pages a publication datee"`

---

### Task 3: Consigne de rédaction des fiches formations, des domaines et du hub

**Files:**
- Create: `docs/superpowers/consignes/fiche-formation.md`

Contenu exact :

```text
CONSIGNE : FICHE FORMATION, PAGE DOMAINE, HUB DES FORMATIONS (richardsalanon.com)

Tu rédiges UNE page du site de Richard SALANON. Dépôt : C:\xampp\htdocs\Richard_portfolio. Lis d'abord : portfolio/data/faits.php (faits d'identité, seuls chiffres autorisés sur Richard), un pilier publié comme modèle de format (portfolio/data/services/formation-en-entreprise.php) et la fixture tools/tests/fixtures/registres/formations/ia-test.php (champs propres aux formations). Tu écris UNIQUEMENT le fichier indiqué. Aucun commit, aucune commande git qui modifie le dépôt.

FORMAT D'UNE FICHE (portfolio/data/formations/SLUG.php) : fichier PHP qui retourne un tableau avec : 'titre' (H1 : la formation et ce que les participants sauront faire), 'title' (50 à 60 caractères, finit par « | Richard SALANON » si la place le permet), 'meta' (140 à 155 caractères, phrase complète), 'en_bref' (2 à 4 phrases : quoi, pour qui, durée, format, « sur devis »), 'publie' => '2026-10-05', 'maj' => '2026-10-05', 'domaine' => DOMAINE, 'forte' => FORTE (true ou false), 'duree' => 'texte court', 'formats' => [parmi 'intra', 'inter', 'distance', 'hybride'], 'prix' => null, 'programme' => [['titre' => 'Jour 1, matin : ...', 'duree' => '3 h 30', 'points' => ['...', ...]], ...] (une entrée par demi-journée), 'faits_hero' => [['l' => 'Durée', 'v' => '...'], ['l' => 'Public', 'v' => '...'], ['l' => 'Formats', 'v' => '...'], ['l' => 'Prix', 'v' => 'Sur devis']], 'sections' => [...], 'faq' => [8 questions au moins], 'sources' => [6 au moins, https, datées '2026-10-05'], 'liens' => ['formations' => [3 à 6 slugs du catalogue], 'services' => [1 à 3 slugs de piliers], 'comparatifs' => [0 à 2 slugs]].
Dans 'sections', place le programme où il doit apparaître avec la section ['type' => 'programme', 'titre' => 'Quel est le programme, demi-journée par demi-journée ?'] SANS clé 'jours' (le gabarit y met le champ 'programme'). Pas de bloc 'faq' ni 'sources' dans 'sections'.

FORMAT D'UNE PAGE DOMAINE (portfolio/data/domaines/SLUG.php) : mêmes champs communs, sans les champs propres aux fiches ; le gabarit affiche en tête une carte par formation publiée du domaine. Contenu : ce que le domaine change pour une entreprise, comment choisir entre ses formations (tableau formation, public, durée, prérequis), parcours conseillés par profil, prérequis et matériel, formats, financement et prix (« sur devis », ce qui fait varier), erreurs fréquentes, contexte local sourcé, pourquoi Richard, cta.

FORMAT DU HUB (portfolio/data/hubs/formations.php) : champs communs + 'liste' => 'formation' ; le gabarit affiche les fiches publiées par domaine en tête de page. Contenu : comment Richard forme (méthode, sur les outils du client, petits groupes, supports remis, suivi), choisir sa formation (tableau des 8 domaines avec lien /formations/domaine/SLUG), formats et organisation (intra, inter, distance, hybride), demande et devis, financement (dispositifs publics sourcés : FDFP en Côte d'Ivoire, 3FPT au Sénégal, FODEFCA au Bénin, OPCO en France, à vérifier source par source), contexte de l'Afrique francophone et de l'Europe, FAQ.

BLOCS (clés exactes, gabarits dans portfolio/partials/blocs/) : prose (titre, paragraphes[]) ; points (titre, intro, items[{titre,texte}]) ; etapes (titre, items[{titre,texte,duree}]) ; tableau (titre, legende, entetes[], lignes[[...]]) ; comparaison (titre, options[], criteres[{critere, valeurs[]}], verdict) ; chiffres (titre, items[{valeur,libelle,source,url}]) ; cas (titre, items[{secteur,probleme,solution}]) ; prix (titre, items[{offre,prix,inclus[]}]) ; vigilance (titre, texte) ; lecon (titre, texte) ; checklist (titre, items[]) ; programme (titre, sans jours) ; cta (titre, texte, bouton{url,texte}). Chaque 'titre' de bloc est un H2 formulé en vraie question.

PLAN TYPE D'UNE FICHE (adapter, jamais copier d'une fiche à l'autre) :
1. Ce que la formation apprend à faire, et ce qu'elle ne couvre pas (prose) : objectifs mesurables en fin de session.
2. Pour qui, prérequis, niveau, matériel (points).
3. Le programme (section programme), puis les exercices sur les cas et les outils du client (etapes ou tableau).
4. Méthode pédagogique : petits groupes, pratique sur les données ou les comptes du client, supports remis, suivi après la session (points).
5. Outils et versions utilisés, avec leurs coûts d'éditeur sourcés et datés quand ils existent (tableau).
6. Cas d'usage par métier ou secteur en Afrique francophone et en Europe (cas : au moins 4).
7. Formats, durée, organisation et prix : intra, inter, distance, hybride ; « sur devis » et ce qui fait varier le prix ; modes de paiement de la fiche de faits (tableau ou prix sans montant).
8. Financement : dispositifs publics de formation continue du pays quand ils s'appliquent, sourcés ; jamais de promesse de prise en charge.
9. Erreurs fréquentes après une formation et comment les éviter (vigilance, points).
10. Contexte local : connectivité, langue, données personnelles (loi n° 2017-20 au Bénin, RGPD en Europe), outils disponibles localement ; sourcé.
11. Pourquoi se former avec Richard : la phrase d'entité reprise MOT POUR MOT (fait('phrase_entite')), ses faits (années d'expérience, personnes formées, pays, EPITECH, Wapy, Audyxa), sa façon de former ; aucune promesse, aucune référence de client formé, aucun chiffre inventé.
12. Bloc cta final vers /contact.

EXIGENCES (contrôlées par : php tools/qa/registres.php --type=TYPE, où TYPE vaut formation, domaine ou hub ; ta page doit être « ok ») :
- 3 200 mots au moins de texte visible ; la matière vient de la formation (questions réelles des participants et des dirigeants, exercices, erreurs, outils, organisation), jamais du remplissage.
- Paragraphes de 120 mots au plus ; tableaux ou listes dès qu'il y a comparaison ou étapes.
- Chaque chiffre externe : valeur + date + source nommée dans la phrase, lien https dans 'sources' (pages officielles consultées le 2026-10-05 avec WebFetch ou WebSearch).
- Prix : aucune somme pour une formation de Richard ; « sur devis ».
- Français accentué ; aucun tiret cadratin (U+2014), aucune flèche (U+2192), aucun emoji ; aucun client, avis, témoignage, pourcentage de résultat ou certification inventé ; Richard n'est certifié par aucun éditeur (ne jamais écrire « certifié Odoo », « partenaire officiel »...) ; texte jamais copié (ni Audyxa, ni paulmaximedossou.com, ni l'ancienne page mot pour mot).
- Liens internes autorisés dans le texte : /contact, /richard-salanon, /formations/, /formations/domaine/{les 8 domaines}, /formations/{slug} des 25 fiches fortes (liste fournie), /services/{slug} des 27 piliers (liste fournie), /comparatifs/ et ses 4 pages, /histoires/ et ses 7 histoires, /zones/. Aucun autre (les 35 autres fiches se relient par le champ 'liens', jamais dans le texte).
- Pages sœurs (liste fournie avec leur angle) : ne traite pas leur sujet, renvoie vers elles par 'liens' ; aucun paragraphe commun.
- Si une ANCIENNE PAGE est indiquée, lis-la en production (https://richardsalanon.com/ANCIENNE-URL) : reprends ses informations exactes (durées, publics, programme) quand elles concordent avec la fiche de faits, ignore ses prix, réécris et enrichis tout, ne perds aucune information utile.

VÉRIFICATIONS : php -l FICHIER ; php tools/qa/registres.php --type=TYPE ; http://localhost:8081/URL répond 200. Compte rendu en 8 lignes : mots, title, meta, sources consultées, points à vérifier.
```

- [ ] **Step 1 : écrire le fichier ; commit** — `git commit -m "Consigne de redaction des fiches formations, des domaines et du hub"`

---

### Task 4: Rédaction du lot A : 25 fiches fortes, 8 domaines, hub

Un sous-agent par page (modèle le plus capable), six en parallèle en flux continu, consigne de la Task 3 avec : FICHIER, SLUG, TYPE, DOMAINE, FORTE, ANCIENNE PAGE (s'il y en a une), PAGES SŒURS et leur angle, liste des 25 slugs forts, liste des 27 piliers. Après chaque groupe de 5 pages reçues : `php tools/qa/registres.php --type=formation` (ou `domaine`, `hub`) à 0 échec, lecture d'un échantillon de 3 sections par page (faits, prix, ton, liens), corrections, commit `Formations, lot A-N : ...`.

| Domaine | Fiches fortes (slug ; ancienne page) |
|---|---|
| intelligence-artificielle | ia-en-entreprise (/formation-ia-entreprise) ; ia-generative-dirigeants ; ia-ethique-conformite ; ia-comptables-syscohada |
| automatisation | n8n (/formation-automatisation) ; whatsapp-business (/formation-whatsapp-business) |
| developpement | vibecoding (/formation-vibecoding) ; developpement-web (/formation-developpement-web) |
| erp-gestion | odoo-utilisateurs (/formation-odoo) ; odoo-comptabilite-syscohada ; dolibarr-utilisateurs (/formation-dolibarr) ; excel-google-sheets (/formation-outils-numeriques) |
| marketing-visibilite | visibilite-google (/formation-seo-visibilite-google) ; referencement-ia-geo ; marketing-digital-b2b ; e-commerce |
| cybersecurite-it | cybersecurite-employes |
| transformation-digitale | strategie-transformation-digitale ; digitaliser-son-entreprise |
| ia-systemes-existants | integrer-ia-logiciels-existants ; ia-processus-metier ; odoo-ia ; whatsapp-odoo-dolibarr-crm ; ia-droit-ohada ; gouvernance-ia |

Pages sœurs à signaler (angle de chacune) : ia-en-entreprise (usage quotidien des assistants par les équipes) / ia-generative-dirigeants (décider, budgéter, piloter) / prompt-engineering (écrire des consignes fiables) / contenu-avec-ia (production de contenus) ; n8n (débutant à autonome) / n8n-avance (sous-flux, erreurs, auto-hébergement, IA) / make (outil Make) / integrations-api-no-code (API sans code, tous outils) ; whatsapp-business (vendre avec l'application) / chatbot-whatsapp (API et robot) / whatsapp-odoo-dolibarr-crm (relier aux logiciels de gestion) ; odoo-utilisateurs (postes de travail) / odoo-dirigeants (pilotage) / odoo-comptabilite-syscohada (comptables) / odoo-ia (IA dans Odoo) / adoption-erp (projet et conduite du changement) ; visibilite-google (fiche, avis, SEO local) / seo-contenu (contenu et référencement naturel) / referencement-ia-geo (être cité par les IA) ; strategie-transformation-digitale (feuille de route de direction) / digitaliser-son-entreprise (pas à pas pour une petite structure) / digitalisation-processus (cartographier et outiller un processus) / conduite-du-changement (faire adopter) ; integrer-ia-logiciels-existants (technique : API, connecteurs) / ia-processus-metier (cartographier, automatiser, contrôler) / gouvernance-ia (charte, responsabilités) / ia-ethique-conformite (droit et éthique pour les équipes).

Domaines (`portfolio/data/domaines/{slug}.php`, TYPE `domaine`) : les 8 slugs de `REGISTRES_DOMAINES`, rédigés quand les fiches fortes de leur domaine sont écrites (le rédacteur lit leurs champs titre, en_bref, faits_hero). Hub (`portfolio/data/hubs/formations.php`, TYPE `hub`) : rédigé en dernier.

- [ ] **Step 1 : lancer les rédacteurs, relire, commiter par groupes de 5.**
- [ ] **Step 2 : `php tools/tests/run.php`** : `test_gabarit_hub_formations_groupe_par_domaine` passe ; suite entière verte.

---

### Task 5: Rédaction du lot B : 35 fiches

Même procédé que la Task 4, avec `'publie' => '2026-10-05'` pendant la rédaction (date reportée en Task 6) ; ANCIENNE PAGE : aucune.

| Domaine | Fiches (slug) |
|---|---|
| intelligence-artificielle | prompt-engineering ; agents-ia-assistants ; rag-chatbot-documents ; contenu-avec-ia |
| automatisation | n8n-avance ; make ; chatbot-whatsapp ; integrations-api-no-code |
| developpement | laravel-php ; nextjs-react ; wordpress-woocommerce ; flutter ; api-rest ; sql-analystes ; creer-son-saas |
| erp-gestion | odoo-dirigeants ; adoption-erp ; crm-pipeline ; microsoft-365-google-workspace ; power-bi-looker-studio ; outils-collaboratifs |
| marketing-visibilite | seo-contenu ; linkedin-reseaux-sociaux ; publicite-meta-google-ads ; emailing-automation ; analytics-ga4 |
| cybersecurite-it | securite-donnees-dirigeants ; cloud-hebergement ; gestion-projet-agile |
| transformation-digitale | digitalisation-processus ; conduite-du-changement ; chef-de-projet-digital ; data-literacy |
| ia-systemes-existants | dolibarr-ia ; ia-audit-controle |

- [ ] **Step 1 : lancer les rédacteurs, relire, commiter par groupes de 5** (`Formations, lot B-N : ...`).
- [ ] **Step 2 : contrôle d'unicité de tout le type** : `php tools/qa/registres.php --type=formation` à 0 échec.

---

### Task 6: Navigation, publication, recette et mise en ligne

**Files:**
- Modify: `portfolio/data/navigation.php`, `portfolio/partials/pv2-footer.php`, les 35 fiches du lot B (`publie`)
- Test: `tools/tests/EnteteTest.php`, `tools/tests/PiedTest.php`, `tools/tests/RedirectionsTest.php`

- [ ] **Step 1 : tests**

`EnteteTest.php` :

```php
function test_entete_formations_vers_les_fiches_publiees(): void
{
    // Vague 1B : quatre cartes de six liens au plus, chaque lien vise une fiche publiée servie en 200.
    $nav = navigation_chargee();
    assert_same(4, count($nav['formations']));
    foreach ($nav['formations'] as $groupe => $g) {
        assert_true(count($g['liens']) <= 6, "{$groupe} : plus de six liens");
        foreach ($g['liens'] as [$libelle, $url]) {
            assert_true((bool) preg_match('#^/formations/([a-z0-9-]+)$#', $url, $m), "{$libelle} : {$url}");
            $p = registre_lire('formation', $m[1]);
            assert_true($p !== null && registre_publiee($p), "{$url} : fiche absente ou non publiée");
            assert_same(200, http_local($url)['code'], $url);
        }
    }
}
```

`RedirectionsTest.php` :

```php
function test_redirections_anciennes_formations_vers_leur_fiche_en_un_saut(): void
{
    foreach (['/formation-ia-entreprise' => '/formations/ia-en-entreprise', '/formation-odoo' => '/formations/odoo-utilisateurs',
              '/formation-outils-numeriques' => '/formations/excel-google-sheets', '/services/formation-en-programmation' => '/formations/developpement-web'] as $ancienne => $cible) {
        $r = http_local($ancienne);
        assert_same(301, $r['code'], $ancienne);
        assert_same($cible, parse_url((string) $r['location'], PHP_URL_PATH), $ancienne);
    }
    assert_same(200, http_local('/formation-ia-entreprise-cotonou')['code'], 'page de ville conservée');
}
```

`PiedTest.php` :

```php
function test_pied_formations_vers_les_fiches(): void
{
    $html = pied_rendre();
    foreach (['/formations/ia-en-entreprise', '/formations/n8n', '/formations/vibecoding', '/formations/odoo-utilisateurs', '/formations/visibilite-google', '/formations/'] as $url) {
        assert_contains('href="' . $url . '"', $html, $url);
    }
}
```

(`pied_rendre()` : reprendre l'aide existante de `PiedTest.php` ; si elle n'existe pas, rendre `pv2-footer.php` par `ob_start()` comme le fait `EnteteTest.php` pour l'en-tête.)

- [ ] **Step 2 : RED** — Run: `php tools/tests/run.php Entete`, `Pied`, `Redirections`.
- [ ] **Step 3 : implémentation**

`navigation.php`, clé `formations` :

```php
    'formations' => [
        'Intelligence artificielle' => ['icone' => 'brain', 'liens' => [
            ['IA en entreprise', '/formations/ia-en-entreprise'],
            ['IA générative pour dirigeants', '/formations/ia-generative-dirigeants'],
            ['IA pour comptables (SYSCOHADA)', '/formations/ia-comptables-syscohada'],
            ['IA et droit OHADA', '/formations/ia-droit-ohada'],
            ['Intégrer l\'IA dans ses logiciels', '/formations/integrer-ia-logiciels-existants'],
            ['Gouverner l\'IA', '/formations/gouvernance-ia'],
        ]],
        'Automatisation et développement' => ['icone' => 'robot', 'liens' => [
            ['n8n de zéro à l\'autonomie', '/formations/n8n'],
            ['WhatsApp Business pour vendre', '/formations/whatsapp-business'],
            ['WhatsApp relié aux ERP et au CRM', '/formations/whatsapp-odoo-dolibarr-crm'],
            ['Vibecoding', '/formations/vibecoding'],
            ['Développement web', '/formations/developpement-web'],
        ]],
        'ERP et gestion' => ['icone' => 'stack', 'liens' => [
            ['Odoo pour vos équipes', '/formations/odoo-utilisateurs'],
            ['Odoo comptabilité SYSCOHADA', '/formations/odoo-comptabilite-syscohada'],
            ['Odoo et IA', '/formations/odoo-ia'],
            ['Dolibarr pour vos équipes', '/formations/dolibarr-utilisateurs'],
            ['Excel et Google Sheets', '/formations/excel-google-sheets'],
        ]],
        'Visibilité et transformation' => ['icone' => 'megaphone', 'liens' => [
            ['Visibilité Google', '/formations/visibilite-google'],
            ['Référencement IA (GEO)', '/formations/referencement-ia-geo'],
            ['Marketing digital B2B', '/formations/marketing-digital-b2b'],
            ['Vendre en ligne', '/formations/e-commerce'],
            ['Stratégie de transformation digitale', '/formations/strategie-transformation-digitale'],
            ['Cybersécurité pour les employés', '/formations/cybersecurite-employes'],
        ]],
    ],
```

`pv2-footer.php`, colonne Formations : remplacer la boucle sur les groupes et les deux liens en dur par une liste fixe passée par `url_finale()` : IA en entreprise, n8n, Vibecoding, Odoo pour vos équipes, Visibilité Google, WhatsApp Business, puis « Toutes les formations » vers `/formations/`.

- [ ] **Step 4 : publication** : `'publie' => '2026-10-12'` (et `'maj'` inchangé) dans les 35 fiches du lot B ; vérifier en local que `/formations/make` répond 404 et que `/formations/` ne la liste pas.
- [ ] **Step 5 : recette** : `php tools/tests/run.php` vert ; `php tools/qa/registres.php` à 0 échec ; `php tools/qa/registres.php --type=formation --liens` ; captures 390 et 1280 d'une fiche, d'un domaine et du hub (Edge headless, méthode de la mémoire du projet).
- [ ] **Step 6 : revue indépendante** (Review Focus ci-dessus, sous-agent en lecture seule), corrections par TDD.
- [ ] **Step 7 : fusion, push, workflow, contrôles en production** : smoke, crawl en arrière-plan (0 échec), Lighthouse d'une fiche, 301 des 9 anciennes URL en un saut, pages de ville IA en 200, sitemap et `llms.txt` sans ancienne URL ni fiche du lot B, mémoire du projet.
