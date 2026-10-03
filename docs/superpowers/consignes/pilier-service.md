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
