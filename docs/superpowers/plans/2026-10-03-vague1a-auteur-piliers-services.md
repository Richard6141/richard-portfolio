# Vague 1A : page auteur et 27 piliers services — Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Publier la page auteur `/richard-salanon` et les 27 piliers services de la spec 6.2 (3 200 mots ou plus chacun) dans les registres de la vague 0C, avec un hub `/services/` rédigé, sans perdre le contenu actuel des fiches en base.

**Architecture:** Les piliers vivent dans `portfolio/data/services/{slug}.php` ; `service.php` les sert déjà en priorité sur la base (vague 0C). `services-index.php` reçoit la même priorité pour le hub `portfolio/data/hubs/services.php`. La rédaction est confiée à des sous-agents (un fichier chacun, spec 11.2), contrôlée par `php tools/qa/registres.php` avant chaque commit ; la navigation pointe vers les piliers au moment de leur publication.

**Tech Stack:** PHP 8, registres de la vague 0C, harnais `php tools/tests/run.php`, contrôles `tools/qa/registres.php`, sous-agents de rédaction avec recherche web.

**Spec:** `docs/superpowers/specs/2026-10-03-refonte-globale-design.md` (5.1, 5.2, 5.5, 6.2, 7, 8, 9). Sources de faits : `portfolio/data/faits.php`, CV de Richard du 23/09/2026 (`C:\Users\FRATERNEL PLOMBERIE\Downloads\CV_2026-09-23_Somassè Richard_SALANON.pdf`), questionnaire `docs/questionnaire-refonte.md`.

## Global Constraints

- Mêmes règles que la vague 0C (plan `2026-10-03-vague0c-registres-routeur-gabarits.md`, Global Constraints), qui restent vraies.
- Page auteur : faits professionnels seulement (parcours, formations, missions, projets, compétences) ; jamais les personnes de référence, leurs coordonnées, l'âge, l'adresse personnelle ni l'e-mail Epitech du CV. Années d'expérience : `fait('experience_ans')`.
- Prix : seuls les tarifs de `fait('tarifs_depart')` peuvent être cités comme prix de Richard ; partout ailleurs « sur devis », avec ce qui fait varier le prix. Prix d'éditeurs tiers : sourcés et datés.
- Phrase d'entité (`fait('phrase_entite')`) reprise à l'identique dans chaque pilier (spec 5.5, règle 5).
- Familles de services : `Sites et boutiques`, `Applications et IA`, `Visibilité et conseil`, `ERP et gestion` (registre de navigation).
- Délai de réponse confirmé par Richard : `fait('delai_reponse')` (24 heures).

## Review Focus

1. Un pilier dont le slug existe en base : la page servie est celle du registre, la fiche en base n'est plus visible nulle part (sitemap sans doublon, llms.txt sans doublon).
2. `/consultant-digitalisation` et `/expert-digitalisation-entreprise` : une seule 301 vers leur pilier dès sa publication, liens du site déjà à l'URL finale.
3. Hub `/services/` servi sans base (registre) alors que l'ancien hub exigeait la base.
4. Page auteur : aucune donnée personnelle hors des faits publiés (références, âge, adresse).
5. Unicité entre piliers proches (SEO, SEO local, audit SEO, GEO ; automatisation, agents IA, intégration IA) sous les seuils de la section 8.

---

### Task 1: Hub des services servi par le registre, familles validées

**Files:**
- Modify: `helpers/registres.php` (constante `REGISTRES_FAMILLES`, contrôle dans `registre_valider`), `portfolio/services-index.php`
- Test: `tools/tests/RegistresTest.php`, `tools/tests/RouteTest.php`

- [ ] **Step 1 : tests**

```php
function test_registres_famille_de_service_connue(): void
{
    $base = require fixtures() . '/services/site-test.php';
    assert_same([], registre_valider('service', 'site-test', $base));
    assert_contains('famille inconnue', implode(' ', registre_valider('service', 'x', ['famille' => 'Divers'] + $base)));
}
```

Dans `RouteTest.php` :

```php
function test_route_hub_services_prefere_le_registre(): void
{
    $src = (string) file_get_contents(racine('portfolio/services-index.php'));
    assert_true(strpos($src, "route_resoudre('services/')") < strpos($src, 'exiger_base($pdo)'), 'registre avant la base');
}
```

- [ ] **Step 2 : lancer, constater l'échec** — Run: `php tools/tests/run.php Registres` puis `Route`. Expected: FAIL.

- [ ] **Step 3 : implémentation**

`helpers/registres.php` :

```php
/** Familles de services (registre de navigation). */
const REGISTRES_FAMILLES = ['Sites et boutiques', 'Applications et IA', 'Visibilité et conseil', 'ERP et gestion'];
```

et dans `registre_valider` :

```php
    if ($type === 'service' && isset($p['famille']) && !in_array($p['famille'], REGISTRES_FAMILLES, true)) {
        $e[] = 'famille inconnue : ' . $p['famille'];
    }
```

`portfolio/services-index.php`, entre l'amorçage et `exiger_base($pdo)` :

```php
// Vague 1A : le hub rédigé dans data/hubs/services.php remplace la liste en base.
if (($page = route_resoudre('services/')) !== null) {
    require __DIR__ . '/registre-hub.php';
    exit;
}
```

`route_resoudre('services/')` correspond au motif `hub` (slug `services`) : aucune modification du routeur.

- [ ] **Step 4 : lancer, constater le succès** — Run: `php tools/tests/run.php`. Expected: PASS.
- [ ] **Step 5 : commit** — `git commit -m "Hub des services servi par le registre ; familles de services validees"`

---

### Task 2: Consigne de rédaction des piliers

**Files:**
- Create: `docs/superpowers/consignes/pilier-service.md`

Consigne réutilisable (vagues suivantes), lue par chaque sous-agent. Contenu exact :

```text
CONSIGNE : PILIER SERVICE (richardsalanon.com)

Tu rédiges UNE page pilier du site de Richard SALANON. Dépôt : C:\xampp\htdocs\Richard_portfolio. Lis d'abord : portfolio/data/faits.php (faits d'identité, seuls chiffres autorisés sur Richard) et un comparatif publié comme modèle de format (portfolio/data/comparatifs/odoo-vs-dolibarr.php). Tu écris UNIQUEMENT le fichier indiqué. Aucun commit, aucune commande git qui modifie le dépôt.

FORMAT : fichier PHP qui retourne un tableau avec : 'titre' (H1 : le service et son bénéfice), 'title' (50 à 60 caractères, finit par « | Richard SALANON » si la place le permet), 'meta' (140 à 155 caractères, phrase complète), 'en_bref' (2 à 4 phrases qui répondent : quoi, pour qui, combien de temps, à quel prix ou « sur devis »), 'publie' => DATE, 'maj' => DATE, 'famille' => FAMILLE, 'matrice' => MATRICE, 'faits_hero' => [['l' => 'Délai', 'v' => '...'], ['l' => 'Pour qui', 'v' => '...'], ['l' => 'Livrables', 'v' => '...'], ['l' => 'Réponse', 'v' => 'sous 24 heures']], 'sections' => [...], 'faq' => [8 questions au moins], 'sources' => [6 au moins, https, datées DATE], 'liens' => ['services' => [3 à 6 slugs de piliers voisins parmi la liste fournie], 'comparatifs' => [slugs pertinents parmi odoo-vs-dolibarr, n8n-vs-make-vs-zapier, fedapay-vs-kkiapay-vs-cinetpay, chatgpt-vs-claude-vs-gemini]].
Pas de bloc 'faq' ni 'sources' dans 'sections' (le gabarit les rend).

BLOCS (clés exactes, gabarits dans portfolio/partials/blocs/) : prose (titre, paragraphes[]) ; points (titre, intro, items[{titre,texte}]) ; etapes (titre, items[{titre,texte,duree}]) ; tableau (titre, legende, entetes[], lignes[[...]]) ; comparaison (titre, options[], criteres[{critere, valeurs[]}], verdict) ; chiffres (titre, items[{valeur,libelle,source,url}]) ; cas (titre, items[{secteur,probleme,solution}]) ; prix (titre, items[{offre,prix,inclus[]}]) ; vigilance (titre, texte) ; lecon (titre, texte) ; checklist (titre, items[]) ; cta (titre, texte, bouton{url,texte}). Chaque 'titre' de bloc est un H2 formulé en vraie question.

PLAN TYPE (adapter au service, jamais copier d'un pilier à l'autre) :
1. Ce que recouvre le service et ce qu'il ne recouvre pas (prose).
2. Pour qui, avec quels signes que le besoin est mûr (points).
3. Le déroulé, du cadrage à l'après-livraison (etapes, avec durées réalistes).
4. Ce qui est livré concrètement (checklist ou tableau).
5. Technologies et choix techniques, avec leurs raisons (tableau ou comparaison) : celles de la fiche de faits et du parcours de Richard (Laravel, PHP, Node.js, Vue, React, Flask, n8n, Make, Odoo, Dolibarr, WordPress, Flutter selon le service).
6. Cas d'usage par secteur en Afrique francophone et en Europe (cas : au moins 4 secteurs).
7. Prix : ce qui fait varier le prix, ordres de grandeur seulement s'ils viennent de fait('tarifs_depart') (sinon « sur devis »), modes de paiement de la fiche (prix ou tableau).
8. Erreurs fréquentes et points de vigilance (vigilance, points).
9. Contexte local : mobile money, connectivité, données personnelles (loi n° 2017-20 au Bénin, RGPD en Europe), facturation, langue ; sourcé.
10. Pourquoi travailler avec Richard : la phrase d'entité reprise MOT POUR MOT (fait('phrase_entite')), ses faits (années d'expérience, pays, EPITECH, Wapy, Audyxa), sa façon de travailler ; aucune promesse ni chiffre inventé.
11. Bloc cta final vers /contact.

EXIGENCES (contrôlées par : php tools/qa/registres.php --type=service ; ta page doit être « ok ») :
- 3 200 mots au moins de texte visible ; la matière vient du service (questions réelles des clients, décisions, étapes, erreurs, coûts), jamais du remplissage.
- Paragraphes de 120 mots au plus ; tableaux ou listes dès qu'il y a comparaison ou étapes.
- Chaque chiffre externe : valeur + date + source nommée dans la phrase, lien https dans 'sources' (pages officielles consultées à DATE avec WebFetch ou WebSearch).
- Français accentué ; aucun tiret cadratin (U+2014), aucune flèche (U+2192), aucun emoji ; aucun client, avis, témoignage, pourcentage de résultat ou certification inventé ; texte jamais copié (ni Audyxa, ni paulmaximedossou.com, ni la fiche actuelle mot pour mot).
- Liens internes autorisés : /contact, /a-propos/, /richard-salanon, /comparatifs/ et ses 4 pages, /services/{slug} des piliers de la liste fournie, /formation-ia-entreprise, /formation-automatisation, /formation-odoo, /formation-dolibarr, /formation-developpement-web, /formation-vibecoding, /formation-whatsapp-business, /formation-seo-visibilite-google, /zones/. Aucun autre.
- Si le slug existe déjà en base, lis la fiche actuelle en production (https://richardsalanon.com/services/SLUG) : reprends ses informations exactes (prix, délais, livrables) quand elles concordent avec la fiche de faits, réécris et enrichis tout, ne perds aucune information utile.

VÉRIFICATIONS : php -l FICHIER ; php tools/qa/registres.php --type=service ; http://localhost:8081/services/SLUG répond 200. Compte rendu en 8 lignes : mots, title, meta, sources consultées.
```

- [ ] **Step 1 : écrire le fichier ; commit** — `git commit -m "Consigne de redaction des piliers services"`

---

### Task 3: Page auteur /richard-salanon

**Files:**
- Create: `portfolio/data/pages/richard-salanon.php` (`'schema' => 'ProfilePage'`)
- Test: `tools/tests/LegalesTest.php` (renommé en sens large : pages du type `page`)

- [ ] **Step 1 : test**

```php
function test_pages_auteur_publiee_profil_et_sans_donnees_privees(): void
{
    $r = http_local('/richard-salanon');
    assert_same(200, $r['code']);
    assert_contains('"ProfilePage"', $r['corps']);
    assert_contains('EPITECH', $r['corps']);
    foreach (['BENDJELOUNE', 'SETTOSSI', '53 04 76 07', '91 61 77 04', 'Tankpè', '31 ans', 'epitech.eu'] as $prive) {
        assert_not_contains($prive, $r['corps'], $prive);
    }
    assert_contains('href="/richard-salanon"', http_local('/comparatifs/odoo-vs-dolibarr')['corps'], 'boîte auteur vers la page auteur');
}
```

- [ ] **Step 2 : RED** — Expected: 404.
- [ ] **Step 3 : rédaction par un sous-agent** : consigne de la Task 2 adaptée (type `page`, `'schema' => 'ProfilePage'`, contrôle `--type=page`), matière : fiche de faits + CV (parcours : Vulcain-Tech 2019 à 2021 développeur et formateur ; TOP CHRONO 2022 ; Le KARAKATA 2022 à 2023 ; Touré Distribution 2025 en Côte d'Ivoire ; SPPS IMPACT+ depuis 2025 ; Infirmerie du ministère du Développement et de la Coordination de l'Action gouvernementale, fin 2025 ; Digital Développement depuis 2026 ; Callconnect Bénin depuis 2026 ; volontaire au développement auprès du PNUD en RD Congo, programme FIKIRI, depuis mars 2026 ; formations : EPITECH Bénin 2021-2022, ALX-T Udacity 2022, Licence Système informatique et logiciel HECM 2023-2025, initiation à l'IA Bénin Excellence 2021) ; projets publics (Wapy, alloartisan.app, Laura Cosmetics en sous-traitance, OBA Production, Touré Distribution, API du découpage administratif du Bénin) ; compétences du CV. FAQ sur la personne (« Qui est Richard SALANON ? », « Où travaille-t-il ? », « Quels services propose-t-il ? »...). Aucune donnée privée (Global Constraints).
- [ ] **Step 4 : GREEN, commit** — `git commit -m "Page auteur /richard-salanon (ProfilePage)"`

---

### Tasks 4 à 9: Rédaction des 27 piliers par lots de 5

Un sous-agent par pilier (modèle le plus capable), cinq en parallèle, consigne de la Task 2 avec : FICHIER, SLUG, FAMILLE, MATRICE (spec 6.2), DATE (jour de publication commun), liste des 27 slugs pour `liens`. Après chaque lot : `php tools/qa/registres.php --type=service` à 0 échec, lecture d'un échantillon de 3 sections par page (faits, ton, prix), corrections, commit `Piliers services, lot N : ...`.

| Lot | Piliers (slug, famille, matrice) |
|---|---|
| 4 | site-vitrine-professionnel (Sites et boutiques, oui) ; site-e-commerce (Sites et boutiques, oui) ; application-web-sur-mesure (Applications et IA, oui) ; application-mobile-android-ios (Applications et IA, oui) ; referencement-naturel-seo (Visibilité et conseil, oui) |
| 5 | automatisation-ia (Applications et IA, oui) ; agents-ia-chatbot-whatsapp (Applications et IA, oui) ; integration-ia-entreprise (Applications et IA, oui) ; referencement-ia-geo (Visibilité et conseil, oui) ; integration-whatsapp (Applications et IA, non) |
| 6 | integration-odoo (ERP et gestion, oui) ; integration-dolibarr (ERP et gestion, oui) ; digitalisation-d-entreprise (Visibilité et conseil, oui) ; consultant-digitalisation (Visibilité et conseil, non) ; formation-en-entreprise (Visibilité et conseil, oui) |
| 7 | maintenance-support (Sites et boutiques, oui) ; developpeur-web-freelance (Sites et boutiques, oui) ; externalisation-developpement (Applications et IA, oui : 6 pays) ; vibe-coding (Applications et IA, non) ; landing-page-haute-conversion (Sites et boutiques, non) |
| 8 | refonte-migration-de-site (Sites et boutiques, non) ; saas-espace-client (Applications et IA, non) ; api-rest-integrations (Applications et IA, non) ; systeme-de-reservation-en-ligne (ERP et gestion, non) ; audit-seo-complet (Visibilité et conseil, non) |
| 9 | seo-local-google-business (Visibilité et conseil, non) ; audit-etude-de-projet (ERP et gestion, non) ; hub `portfolio/data/hubs/services.php` (`'liste' => 'service'`, méthode de travail, familles, comment choisir, 3 200 mots) |

Tant qu'un pilier n'est pas publié, sa fiche en base reste servie ; la date `publie` commune est posée à la publication (Task 10) pour que tout parte ensemble.

---

### Task 10: Navigation, publication, recette et mise en ligne

- [ ] **Step 1 : navigation** : `data/navigation.php`, groupes Services réordonnés selon les familles, liens vers les 27 piliers (dont `/services/integration-odoo`, `/services/integration-dolibarr`, `/services/consultant-digitalisation`), méga-menu à 4 cartes de 6 liens au plus (les autres via « Tous les services ») ; pied : liens services vers les piliers ; test : chaque URL de service du registre de navigation répond 200 en local.
- [ ] **Step 2 : publication** : `publie` et `maj` des 28 pages à la date du jour.
- [ ] **Step 3 : recette** : `php tools/tests/run.php`, `php tools/qa/registres.php --liens` (seuls les liens vers des pages en base répondent 503 en local), captures 390 et 1280 de 3 piliers et du hub.
- [ ] **Step 4 : revue indépendante** (Review Focus ci-dessus), corrections par TDD.
- [ ] **Step 5 : fusion, push, workflow, contrôles en production** (smoke, crawl `--liens` en arrière-plan, Lighthouse d'un pilier, sitemap sans doublon de `/services/`, `llms.txt`), mémoire du projet.
