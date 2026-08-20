# Phase 0 — Indexation d'urgence : Plan d'implémentation

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Faire indexer `richard.salanon.info` par Google et Bing sous 7-14 jours en levant tous les blocages, en déclenchant le crawl et en accélérant via IndexNow.

**Architecture:** Phase à 80 % opérationnelle (Search Console, Bing, backlinks) + 3 correctifs techniques légers (cohérence du host, passthrough des fichiers statiques, clé IndexNow). Aucune migration SQL, aucun risque sur le contenu existant. Le projet n'a pas de framework de test et est déployé manuellement sur Hostinger → la vérification se fait par `curl` et validateurs en ligne ; les étapes « déployer » remplacent les commits git.

**Tech Stack:** PHP 8+, Apache `.htaccess`, Google Search Console, Bing Webmaster Tools, IndexNow, Schema.org.

**Référence spec :** `docs/superpowers/specs/2026-06-05-refonte-seo-portfolio-design.md` (§4.1).

---

## Pré-requis (à confirmer avant de démarrer)

- [ ] Accès au **hPanel Hostinger** (Gestionnaire de fichiers ou FTP) pour déployer.
- [ ] Propriété **Google Search Console** déjà validée pour `richard.salanon.info` ✅ (fait par Richard).
- [ ] Fiche **Google Business Profile** créée ✅ (fait par Richard).
- [ ] Le profil est **publié** (`is_published = 1`) — confirmé : le site répond en `index, follow`.

---

## Fichiers impliqués

| Fichier | Action | Tâche |
|---------|--------|-------|
| `robots.php` | Modifier — host par défaut cohérent + référence `sitemap.xml` | 1 |
| `.htaccess` | Modifier — laisser servir les fichiers statiques existants (clé IndexNow, txt, images) | 2 |
| `{cle}.txt` (nouveau) | Créer — fichier de vérification IndexNow à la racine | 4 |

---

## Task 1 : Corriger la cohérence du host dans robots.php

**Files:**
- Modify: `robots.php`

**Pourquoi :** Le fallback host est `salanon.info` (apex) alors que le site vit sur `richard.salanon.info`. Si `HTTP_HOST` venait à manquer (crawl, CLI, monitoring), le `Sitemap:` annoncé pointerait sur le mauvais domaine. On aligne aussi la référence sitemap sur l'URL propre `/sitemap.xml`.

- [ ] **Step 1 : Corriger le host par défaut**

Dans `robots.php`, remplacer :
```php
$host     = $_SERVER['HTTP_HOST'] ?? 'salanon.info';
```
par :
```php
$host     = $_SERVER['HTTP_HOST'] ?? 'richard.salanon.info';
```

- [ ] **Step 2 : Référencer l'URL propre du sitemap**

Dans `robots.php`, remplacer :
```php
    echo "Sitemap: {$baseUrl}/sitemap.php\n";
```
par :
```php
    echo "Sitemap: {$baseUrl}/sitemap.xml\n";
```

- [ ] **Step 3 : Déployer sur Hostinger**

Uploader `robots.php` à la racine du site via hPanel → Gestionnaire de fichiers (ou FTP).

- [ ] **Step 4 : Vérifier**

```bash
curl -s https://richard.salanon.info/robots.txt
```
Attendu : la dernière ligne affiche `Sitemap: https://richard.salanon.info/sitemap.xml` et le bloc contient `Allow: /`.

---

## Task 2 : Laisser Apache servir les fichiers statiques existants

**Files:**
- Modify: `.htaccess`

**Pourquoi :** Le catch-all `RewriteRule ^(.*)$ /portfolio/index.php` réécrit TOUT sauf les motifs listés. Un fichier `.txt` à la racine (clé IndexNow de la Task 4) serait donc avalé par le portfolio au lieu d'être servi tel quel. On ajoute une règle générique « si le fichier existe physiquement, sers-le directement ». Cela bénéficie aussi aux images/PDF.

- [ ] **Step 1 : Ajouter le passthrough des fichiers existants**

Dans `.htaccess`, juste **avant** la règle catch-all :
```apache
# ----------------------------------------------------------
# Tout le reste → portfolio public (mono-utilisateur)
# ----------------------------------------------------------
RewriteRule ^(.*)$ /portfolio/index.php [QSA,L]
```
insérer ce bloc :
```apache
# ----------------------------------------------------------
# Servir directement les fichiers statiques qui existent
# (cle IndexNow, txt, images, pdf...) sans passer par le portfolio
# ----------------------------------------------------------
RewriteCond %{REQUEST_FILENAME} -f
RewriteRule \.(txt|xml|ico|png|jpe?g|gif|svg|webp|avif|pdf|woff2?|css|js)$ - [L]
```

- [ ] **Step 2 : Déployer sur Hostinger**

Uploader `.htaccess` à la racine.

- [ ] **Step 3 : Vérifier que le site fonctionne toujours**

```bash
curl -s -o /dev/null -w "%{http_code}" https://richard.salanon.info/
```
Attendu : `200`. (La home doit toujours s'afficher — le passthrough ne s'applique qu'aux fichiers physiquement présents.)

```bash
curl -s -o /dev/null -w "%{http_code}" https://richard.salanon.info/assets/css/style.css
```
Attendu : `200`.

---

## Task 3 : Forcer l'indexation Google (le levier le plus rapide)

**Files:** aucun (action opérationnelle dans Google Search Console).

**Pourquoi :** Demander explicitement l'indexation est le moyen le plus rapide de faire crawler un site neuf, bien plus que d'attendre la découverte passive.

- [ ] **Step 1 : Soumettre le sitemap**

GSC → propriété `richard.salanon.info` → menu **Sitemaps** → saisir `sitemap.xml` → **Envoyer**.
Attendu : statut « Réussite » sous quelques minutes/heures, 2 URL découvertes.

- [ ] **Step 2 : Inspecter et indexer la page d'accueil**

GSC → barre **Inspection de l'URL** en haut → coller `https://richard.salanon.info/` → Entrée → bouton **Demander une indexation**.
Attendu : message « Indexation demandée » (mise en file d'attente).

- [ ] **Step 3 : Indexer l'article de blog existant**

Répéter l'inspection d'URL pour :
`https://richard.salanon.info/blog/jai-construit-un-robot-qui-prospecte-500-artisans-par-mois-voici-ce-que-jai-appris`
→ **Demander une indexation**.

- [ ] **Step 4 : Vérifier l'état de couverture**

GSC → **Pages** (Indexation). Noter combien de pages sont « Indexées » vs « Non indexées ». (Au départ probablement 0 indexée, en cours de traitement — c'est normal, le traitement prend de quelques jours à 2 semaines.)

---

## Task 4 : Configurer Bing Webmaster Tools + IndexNow

**Files:**
- Create: `{cle}.txt` à la racine (fichier de clé IndexNow)

**Pourquoi :** Bing indexe souvent plus vite que Google et alimente d'autres moteurs. IndexNow notifie instantanément Bing/Yandex à chaque nouvelle URL — accélérateur gratuit.

- [ ] **Step 1 : Créer le compte Bing Webmaster Tools**

Aller sur https://www.bing.com/webmasters → se connecter → **Importer depuis Google Search Console** (le plus simple, reprend la propriété déjà validée). Sinon, ajouter manuellement `https://richard.salanon.info` et valider.

- [ ] **Step 2 : Soumettre le sitemap à Bing**

Bing Webmaster → **Sitemaps** → ajouter `https://richard.salanon.info/sitemap.xml`.

- [ ] **Step 3 : Créer le fichier de clé IndexNow**

Créer un fichier nommé **`a7f3c9e21b6d4f08a5c2e9d7b4f16a83.txt`** à la racine du site, dont le **contenu** est exactement :
```
a7f3c9e21b6d4f08a5c2e9d7b4f16a83
```
(Le nom du fichier = la clé = son contenu. C'est la convention IndexNow.)

- [ ] **Step 4 : Déployer le fichier de clé**

Uploader `a7f3c9e21b6d4f08a5c2e9d7b4f16a83.txt` à la racine via hPanel.

- [ ] **Step 5 : Vérifier que la clé est servie**

```bash
curl -s https://richard.salanon.info/a7f3c9e21b6d4f08a5c2e9d7b4f16a83.txt
```
Attendu : la sortie affiche `a7f3c9e21b6d4f08a5c2e9d7b4f16a83` (et rien d'autre). Si la home s'affiche à la place, la Task 2 n'est pas correctement déployée.

- [ ] **Step 6 : Soumettre les URL via IndexNow**

```bash
curl -s "https://api.indexnow.org/indexnow?url=https://richard.salanon.info/&key=a7f3c9e21b6d4f08a5c2e9d7b4f16a83"
curl -s -o /dev/null -w "%{http_code}" "https://api.indexnow.org/indexnow?url=https://richard.salanon.info/&key=a7f3c9e21b6d4f08a5c2e9d7b4f16a83"
```
Attendu : code HTTP `200` ou `202` (URL acceptée).

---

## Task 5 : Créer les premiers signaux de crawl (backlinks rapides)

**Files:** aucun (actions opérationnelles externes).

**Pourquoi :** Google découvre et fait confiance plus vite à un site vers lequel pointent d'autres sites déjà crawlés. 5-10 liens réels suffisent à amorcer.

- [ ] **Step 1 : Mettre le lien sur les profils sociaux (liens « dofollow » ou non, tous utiles pour la découverte)**

Ajouter `https://richard.salanon.info` dans :
- [ ] LinkedIn (champ « Site web » du profil + un post d'annonce)
- [ ] GitHub (champ « Website » du profil + README du profil)
- [ ] X/Twitter, Facebook pro si présents

- [ ] **Step 2 : S'inscrire sur les plateformes freelances locales (avec lien vers le site)**

- [ ] codeur.com — profil + lien portfolio
- [ ] AfricaShore — profil développeur Bénin
- [ ] Malt / autres annuaires freelance francophones

- [ ] **Step 3 : Annuaires & citations locales Bénin (cohérence NAP)**

Inscrire avec **exactement le même** Nom / Adresse / Téléphone que sur Google Business Profile :
- [ ] Annuaires d'entreprises béninois (ex. GoAfrica, BeninWeb, pages jaunes locales)
- [ ] La fiche Google Business Profile doit elle-même contenir le lien `https://richard.salanon.info`

- [ ] **Step 4 : Vérifier que GBP pointe vers le site**

Ouvrir la fiche Google Business Profile → champ « Site Web » → confirmer `https://richard.salanon.info`.

---

## Task 6 : Vérifier la progression de l'indexation

**Files:** aucun (vérification).

**Pourquoi :** Mesurer objectivement que la Phase 0 produit son effet avant de passer à la Phase 1.

- [ ] **Step 1 : Vérification immédiate (J+0) — aucun blocage technique**

```bash
curl -sI https://richard.salanon.info/ | grep -i "x-robots-tag"
```
Attendu : **aucune** ligne `X-Robots-Tag: noindex` (sortie vide = bon).

```bash
curl -s https://richard.salanon.info/ | grep -i "robots"
```
Attendu : `<meta name="robots" content="index, follow">`.

- [ ] **Step 2 : Suivi GSC (J+3 à J+14)**

Dans GSC → **Inspection de l'URL** sur `https://richard.salanon.info/`.
Attendu progressif : passage de « URL inconnue de Google » → « URL indexée ».

- [ ] **Step 3 : Vérification moteur (J+7 à J+14)**

Rechercher sur Google : `site:richard.salanon.info`
Attendu : au moins 1 résultat (la home). Puis rechercher `Richard Salanon développeur` → le site doit apparaître.

- [ ] **Step 4 : Critère de sortie de Phase 0**

Phase 0 considérée réussie quand `site:richard.salanon.info` renvoie ≥ 1 résultat ET que GSC indique « URL indexée » pour la home. → Passer à la Phase 1.

---

## Notes
- Si après 14 jours la home n'est toujours pas indexée malgré la demande d'indexation : vérifier dans GSC le rapport « Pages » pour le **motif exact** de non-indexation (ex. « Détectée, actuellement non indexée » = manque d'autorité → renforcer Task 5 ; « Explorée, non indexée » = qualité/contenu → accélérer Phase 1/3).
- La clé IndexNow `a7f3c9e21b6d4f08a5c2e9d7b4f16a83` sera réutilisée en Phase 2 pour notifier automatiquement chaque nouvelle page/article à la publication (intégration dans les APIs `blog`/`services`/`projects`).
