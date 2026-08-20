# Netlinking & suivi Search Console — plan d'action

> Objectif : gagner en autorité (backlinks) et piloter l'indexation/positions.
> Règle d'or : on ne paie jamais un lien. On gagne des liens en étant présent, utile et cité.
> Profil : Richard Technologies, développement web/mobile + automatisation & IA, Cotonou + clients francophones partout.

---

## Partie 1 — Netlinking (gagner des backlinks)

### Niveau 0 — Fondations (à faire en premier, semaine 1)

Ces liens sont faciles, durables et renforcent aussi le SEO local (cohérence NAP : Nom, Adresse, Téléphone identiques partout).

| Plateforme | Action | Priorité |
|---|---|---|
| **Google Business Profile** | Créer/compléter la fiche, catégorie « Développeur de sites web », photos, lien vers le site | 🔴 Critique |
| **Bing Places** | Équivalent Bing de la fiche Google | 🟠 Haute |
| **LinkedIn** | Profil pro complet + lien site en « Site web » + entreprise « Richard Technologies » | 🔴 Critique |
| **GitHub** | Profil + README avec lien site + épingler 3-4 repos propres | 🟠 Haute |
| **Facebook (page pro)** | Page entreprise + bouton/lien site | 🟠 Haute |

> Tous ces profils doivent figurer dans Dashboard → Réseaux sociaux (ils alimentent le `sameAs` du schema = signal d'entité fort).

### Niveau 1 — Annuaires & plateformes freelance (semaines 2-3)

Profils avec lien dofollow + visibilité commerciale (donc backlink ET prospects).

- **Malt** (malt.fr) — référence freelance francophone
- **Codeur.com** — projets + profil avec lien
- **ComeUp** (ex 5euros.com) — micro-services
- **Fiverr / Upwork** — international (profil avec portfolio)
- **404works**, **Crème de la crème**
- Annuaires Afrique/Bénin : **GoAfricaOnline**, **AfricaShore**, **Jumeo / annuaires locaux Bénin**

### Niveau 2 — Contenu & autorité (en continu)

Le plus puissant sur le long terme. Tu as déjà 30 articles : exploite-les.

- **Republication canonique** : republie tes meilleurs articles sur **Medium**, **dev.to**, **Hashnode** en mettant un `rel="canonical"` vers l'original sur ton site (tu gardes le crédit SEO + tu touches une nouvelle audience qui te lie).
- **LinkedIn (posts + articles natifs)** : 2-3 fois/semaine, partage un extrait + lien vers l'article complet. C'est ta meilleure source de trafic au départ.
- **Forums & Q&A** : profil **Stack Overflow** (lien dans la bio), réponses sur **Reddit** (r/webdev, r/automation, r/n8n), **Quora** francophone. Réponds vraiment, lien seulement si pertinent.
- **Communautés outils** : profil sur le **forum n8n**, la **communauté Make**, **Indie Hackers**. Tu y es légitime (automatisation = ton différenciateur).

### Niveau 3 — Liens « signature » (compounding, spécial dev) ⭐

Le levier le plus rentable pour un développeur, souvent oublié :

- Sur **chaque site que tu livres à un client**, ajoute en pied de page :
  `Site réalisé par <a href="https://richard.salanon.info">Richard Technologies</a>`
  (avec accord du client). Chaque projet = 1 backlink thématique, durable et de qualité.
- Demande aux clients satisfaits une **mention sur leurs réseaux** avec lien.

### Niveau 4 — Local & communautés tech Bénin (opportuniste)

- **GDG Cotonou**, **Sèmè City**, **Etrilabs**, **BlocLab**, hackathons : participer = être cité sur leurs sites/réseaux.
- Presse/blogs tech francophones africains : proposer un **article invité** (guest post).

### À éviter absolument
- Acheter des packs de backlinks, fermes de liens, PBN → pénalité Google.
- Liens en masse depuis des annuaires sans rapport → ignorés ou nuisibles.
- Échange de liens artificiel à grande échelle.

---

## Partie 2 — Suivi Google Search Console (routine)

### Mise en place (une fois)
- ✅ Sitemap soumis (`/sitemap.xml`) — déjà fait.
- ✅ IndexNow déployé (clé `a7f3c9e21b6d4f08a5c2e9d7b4f16a83`) — soumission instantanée à Bing/Yandex.
- ✅ Outil de soumission groupée IndexNow : visiter
  `https://richard.salanon.info/indexnow.php?key=a7f3c9e21b6d4f08a5c2e9d7b4f16a83`
  après chaque publication. Envoie d'un coup accueil + à-propos + blog + services + tous les articles publiés. (Bing/Yandex uniquement ; Google ignore IndexNow.)
- Pour Google : chaque **nouvelle page importante** (article, service) → GSC **Inspection de l'URL → Demander une indexation** (limite ~10-12/jour, étaler sur plusieurs jours par priorité).

### Routine hebdomadaire (15 min)
1. **Performances** : regarde Impressions, Clics, CTR, Position moyenne. Repère les requêtes où tu apparais (impressions) mais cliques peu (CTR faible) → réécris le `title`/`meta description` de ces pages.
2. **Indexation des pages** : vérifie que les nouveaux articles passent en « Indexée ». Corrige les « Découverte, actuellement non indexée » en demandant l'indexation.
3. **Expérience / Signaux web essentiels** : surveille le vert sur mobile (Core Web Vitals).

### Routine mensuelle (30 min)
1. **Améliorations** : vérifie les rapports **Articles**, **Fils d'Ariane**, et bientôt **FAQ** (une fois le code FAQPage déployé et les articles à FAQ réindexés). Corrige toute erreur.
2. **Liens** : rapport « Liens » → vois quels domaines te pointent. Identifie ce qui marche pour en refaire.
3. **Requêtes montantes** : repère les sujets qui décollent → écris un nouvel article dessus (ou enrichis l'existant).

### Indicateurs de succès (3-6 mois)
- Passage de 0 à un flux régulier d'impressions.
- Premières positions en page 1-2 sur des requêtes longue traîne (ex. « créer un chatbot whatsapp entreprise »).
- Croissance du nombre de domaines référents (rapport Liens).
- Apparition de résultats enrichis (Article, FAQ, Fil d'Ariane) dans les performances.

---

## Ordre recommandé (résumé)

1. **Semaine 1** : Niveau 0 (Google Business, LinkedIn, GitHub, Facebook) + remplir Dashboard → Réseaux sociaux.
2. **Semaine 2-3** : Niveau 1 (Malt, Codeur, annuaires) + demander indexation des pages clés en GSC.
3. **En continu** : Niveau 2 (republication articles + LinkedIn 2-3x/semaine) + Niveau 3 (lien signature sur les sites clients).
4. **Mensuel** : routine GSC + guest posts/communautés (Niveau 4).
