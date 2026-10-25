CONSIGNE : PAGE FORMATION IA PAR PAYS /formations/ia-en-entreprise/SLUGPAYS (richardsalanon.com)

Objectif métier : cette page doit devenir la première réponse à « formateur IA {pays} », « formation IA entreprise {pays} », « formation IA pour les équipes {pays} », « consultant IA {pays} » et « expert IA {pays} ». C'est UNE page par pays : les variantes de mots-clés se traitent dans le même texte, jamais dans des pages séparées. Le texte s'adresse à un dirigeant ou à un responsable d'équipe du pays, pas à un moteur de recherche.

Tu rédiges UNE page du site de Richard SALANON. Dépôt : C:\xampp\htdocs\Richard_portfolio. Lis d'abord, dans cet ordre :
1. portfolio/data/faits.php (seuls faits autorisés sur Richard) ;
2. docs/superpowers/consignes/fiche-formation.md (BLOCS, EXIGENCES, voix, interdits : tout s'applique, sauf ce qui suit) ;
3. docs/superpowers/consignes/page-pays.md (FICHE, VOIX, règle « Déjà travaillé ») ;
4. la fiche parente portfolio/data/formations/ia-en-entreprise.php (elle est le parent : ne reprends ni son plan ni ses phrases) ;
5. la page pays portfolio/data/pays/SLUGPAYS.php (la fiche sourcée du pays : réutilise ses faits et ses sources déjà datées, vérifie-les au besoin, ne les recopie pas en bloc) ;
6. la ligne de ton pays dans docs/superpowers/consignes/catalogue-pays.md (pays voisins, villes, déjà travaillé) ;
7. docs/seo-concurrents-formateur-ia.md et la ligne de ton pays dans docs/seo-mots-cles-formateur-ia.csv (qui occupe les résultats et ce que leurs pages ne disent pas).
Tu écris UNIQUEMENT le fichier portfolio/data/formations/ia-en-entreprise/SLUGPAYS.php. Aucun commit, aucune commande git qui modifie le dépôt.

FORMAT : fichier PHP qui retourne un tableau avec :
- 'titre' (H1) : contient « formateur IA » ou « formation IA » et le pays, et dit ce que la personne obtiendra (par exemple « Formateur IA en entreprise au Niger : vos équipes utilisent ChatGPT, Claude et Gemini sur leurs documents, avec une règle claire sur les données ») ;
- 'title' : 50 à 60 caractères, commence par « Formateur IA en entreprise » ou « Formation IA en entreprise », contient le pays, finit par « | Richard SALANON » si la place le permet ;
- 'meta' : 140 à 155 caractères, phrase complète, contient « formation IA » et le pays ;
- 'en_bref' : 3 à 4 phrases ; la première répond seule à la question « qui peut former mes équipes à l'IA {dans le pays} ? » (40 à 60 mots) ;
- 'publie' et 'maj' : la date indiquée par la tâche ;
- 'sections' : voir PLAN ; 'faq' : 8 questions au moins dont 6 propres au pays ; 'sources' : 8 au moins, https, datées du jour de consultation ; 'liens' : comme dans page-pays.md (formations : au moins ia-generative-dirigeants, prompt-engineering, agents-ia-assistants, n8n ; pas /zones/ : le maillage s'en charge).
Pas de bloc 'faq' ni 'sources' dans 'sections'.

PLAN TYPE (chaque H2 est une vraie question, écrite pour ce pays ; 3 200 mots au moins de texte visible, c'est le seuil du contrôle) :
1. Qui forme les équipes à l'IA {dans le pays}, et comment choisir (prose : ce qu'est un formateur IA d'entreprise, ce qui distingue une démonstration d'outil d'une formation qui change le travail ; sans dénigrer personne).
2. Où en est l'IA {dans le pays} (chiffres de la fiche pays : internet, mobile, adoption ; politiques publiques ou stratégies nationales sur l'IA quand elles existent, sourcées et datées).
3. Quels outils d'IA utiliser et à quel coût (tableau : ChatGPT, Claude, Gemini, Copilot, DeepSeek, NotebookLM ; ce que chaque outil fait bien pour une équipe ; coûts d'éditeur sourcés et datés ; ce qui marche avec une connexion limitée).
4. Quelles règles de données et de conformité {dans le pays} (loi de protection des données, autorité, formalités avant d'envoyer des documents à un outil d'IA ; règles du pays sur l'IA si elles existent).
5. Quels formats pour quelles équipes : atelier d'une demi-journée, formation de deux jours, accompagnement mensuel ; à distance depuis Cotonou, ou sur place quand la fiche du pays le permet ; fuseau, langue, matériel, connexion (tableau).
6. Le programme type, par métier du pays (au moins 4 cas : secteurs porteurs de la fiche, avec la tâche, l'outil et le résultat attendu, sans pourcentage inventé).
7. Comment se financer ou se faire financer {dans le pays} (organismes, dispositifs de formation continue du pays, conditions, sourcés ; jamais de promesse de prise en charge ; sinon, dire comment budgétiser).
8. Combien coûte une formation IA : aucune somme (« sur devis, en DEVISE DES DEVIS ») ; ce qui fait varier le prix {dans le pays} : nombre de participants, durée, présentiel ou distance, préparation sur les documents du client.
9. Erreurs fréquentes des équipes qui démarrent l'IA {dans le pays} (vigilance, points).
10. Pourquoi Richard : la phrase d'entité MOT POUR MOT, ses faits (années d'expérience, personnes formées, pays, EPITECH, Wapy, Audyxa), sa façon de former ; règle « Déjà travaillé » de page-pays.md ; projets de portfolio/data/projets-clients.php du pays ou de la région avec leur mention de relation ; lien /realisations/.
11. Bloc cta final vers /contact.

DIFFÉRENCIATION (ce qui doit faire gagner la page, sans copier personne) :
- Les concurrents locaux ont des pages courtes ou des fiches d'école : donne ce qu'ils ne donnent pas (règles de données du pays, exemples de tâches par secteur, coûts d'éditeur datés, formats et organisation à distance).
- Ne copie aucune phrase d'un concurrent. Tu peux lire leurs pages pour repérer leurs trous, pas pour les reformuler.
- Chaque paragraphe s'appuie sur un fait, une loi, un opérateur, un secteur ou un usage de CE pays.
- Réponse courte de 40 à 60 mots en tête de chaque H2 qui se comprend seule ; chiffres datés ; aucune phrase d'optimisation (jamais « leader », « n°1 », « meilleur formateur », « formation certifiante » : Richard n'est certifié par aucun éditeur).

EXIGENCES (en plus de fiche-formation.md) :
- Unicité : 25 % au plus avec la fiche parente, 40 % au plus avec les autres pages du même parent, 60 % de texte propre (contrôlé par tools/qa/registres.php). Avant de rendre, relis ta page : aucun passage de 15 mots ou plus ne doit pouvoir être posé dans un autre pays.
- Aucun prix chiffré ; aucun client, avis, témoignage, pourcentage de résultat ou certification inventé.
- Français accentué ; aucun tiret cadratin (U+2014), aucune flèche (U+2192), aucun emoji.
- N'ouvre aucune autre page de portfolio/data/formations/ia-en-entreprise/ : ni leur plan, ni leurs titres, ni leurs phrases.

VÉRIFICATIONS : php -l FICHIER ; php tools/qa/registres.php --type=formation-pays (ta ligne « ok », les autres lignes ne te concernent pas) ; http://localhost:8081/formations/ia-en-entreprise/SLUGPAYS répond 200 si la date de publication est atteinte (sinon, le contrôle en mémoire de registres.php suffit). Compte rendu en 10 lignes : mots, title, meta, sources consultées, points à vérifier par Richard.

Même règles de travail que les autres consignes : écris le fichier en plusieurs opérations de 5 000 mots au plus ; n'arrête aucun processus par leur nom ; hors outils du dépôt nommés ici, n'exécute aucun script que tu n'as pas écrit ; WebSearch peut être épuisé : WebFetch, curl, ou le navigateur wmux ("C:\Users\FRATERNEL PLOMBERIE\AppData\Local\Programs\wmux\resources\cli-bin\wmux" browser open URL puis browser eval avec document.body.textContent) ; les pages d'éditeurs lues par WebFetch peuvent être périmées : vérifie les tarifs au navigateur.
