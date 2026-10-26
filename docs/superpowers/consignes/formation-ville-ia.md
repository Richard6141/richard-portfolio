CONSIGNE : PAGE VILLE « FORMATION IA EN ENTREPRISE À {VILLE} » /formation-ia-entreprise-SLUGVILLE (richardsalanon.com)

Objectif métier : cette page doit devenir la première réponse à « formation IA {ville} », « formateur IA {ville} », « formation IA entreprise {ville} », « formation ChatGPT {ville} » et « consultant IA {ville} ». C'est UNE page par ville, écrite pour une dirigeante ou un responsable d'équipe de CETTE ville. Elle complète la page du pays (/formations/ia-en-entreprise/SLUGPAYS), sans la répéter : la page pays porte le cadre national (lois, autorité de protection, financement, chiffres du pays) ; la page ville porte ce qui est propre à la ville.

Tu rédiges UNE page du site de Richard SALANON. Dépôt : C:\xampp\htdocs\Richard_portfolio. Lis d'abord, dans cet ordre :
1. portfolio/data/faits.php (seuls faits autorisés sur Richard) ;
2. docs/superpowers/consignes/fiche-formation.md (BLOCS, EXIGENCES, voix, interdits : tout s'applique, sauf ce qui suit) ;
3. docs/superpowers/consignes/page-pays.md (règle « Déjà travaillé », voix) ;
4. la page du pays portfolio/data/formations/ia-en-entreprise/SLUGPAYS.php si elle existe (pour NE PAS la recopier : repère ses sections et ses faits, puis traite autre chose) et la fiche pays portfolio/data/pays/SLUGPAYS.php (faits sourcés réutilisables) ;
5. la fiche parente portfolio/data/formations/ia-en-entreprise.php (formats, effectifs, supports : seuls autorisés pour décrire la pratique de Richard) ;
6. la ligne de ton pays dans docs/superpowers/consignes/catalogue-pays.md ;
7. docs/seo-concurrents-formateur-ia.md (ce que montrent aujourd'hui les résultats de Google pour la ville).
Tu écris UNIQUEMENT le fichier portfolio/data/pages/formation-ia-entreprise-SLUGVILLE.php (type « page » du registre, URL /formation-ia-entreprise-SLUGVILLE). Aucun commit, aucune commande git qui modifie le dépôt.

FORMAT : fichier PHP qui retourne un tableau, comme portfolio/data/pages/richard-salanon.php, avec :
- 'titre' (H1) : contient « formation IA » ou « formateur IA » et la ville, et dit ce que la personne obtiendra ;
- 'title' : 50 à 60 caractères, commence par « Formation IA en entreprise à » ou « Formateur IA à », contient la ville, finit par « | Richard SALANON » si la place le permet ;
- 'meta' : 140 à 155 caractères, phrase complète, contient « formation IA » et la ville ;
- 'en_bref' : 3 à 4 phrases ; la première répond seule à « qui peut former mes équipes à l'IA à {ville} ? » (40 à 60 mots) ;
- 'publie' et 'maj' : la date indiquée par la tâche ; 'schema' => 'WebPage' ;
- 'sections' : voir PLAN ; 'faq' : 8 questions au moins, toutes propres à la ville ; 'sources' : 8 au moins, https, datées du jour de consultation ; 'liens' : comme dans page-pays.md (formations : ia-generative-dirigeants, prompt-engineering, agents-ia-assistants, n8n, ia-en-entreprise ; services utiles).
Pas de bloc 'faq' ni 'sources' dans 'sections'.

PLAN TYPE (chaque H2 est une vraie question, écrite pour cette ville ; 3 200 mots au moins de texte visible : c'est le seuil du contrôle ; la matière vient de la ville, jamais du remplissage) :
1. Qui forme les équipes à l'IA à {ville}, et comment choisir (prose : ce qui distingue une démonstration d'outil d'une formation qui change le travail ; sans dénigrer personne).
2. Que fait vivre l'économie de {ville} (secteurs dominants, zones d'activité, quartiers d'affaires, marchés, ports ou axes, employeurs types ; sourcé et daté) et ce que cela change pour une équipe qui veut utiliser l'IA.
3. Connexion, électricité, équipement à {ville} : ce que les équipes ont réellement, et comment la formation s'y adapte (sourcé : opérateurs, couverture, coupures, ou limite dite franchement).
4. Quelles ressources locales existent (universités, écoles, chambres de commerce, incubateurs, programmes publics d'IA, événements) : repères factuels et sourcés, jamais de recommandation commerciale, jamais de concurrent critiqué.
5. Quels formats à {ville} (tableau : atelier d'une demi-journée, formation de deux jours, séances à distance, accompagnement ; effectifs et durées de la fiche parente) ; à distance depuis Cotonou, fuseau et décalage horaire exacts, plages utiles ; déplacement : seulement ce que la fiche parente permet (facteur de prix au devis).
6. Le programme type par métier de {ville} (au moins 4 cas, avec la tâche, l'outil et le résultat attendu, sans pourcentage inventé ; secteurs propres à la ville).
7. Données et règles : au plus 2 paragraphes, centrés sur ce que la ville change (administrations locales, secteurs sensibles) ; le cadre légal national est renvoyé à la page du pays par un lien /formations/ia-en-entreprise/SLUGPAYS UNIQUEMENT si cette page est publiée à la date de ta page (sinon pas de lien).
8. Combien coûte une formation à {ville} : aucune somme (« sur devis, en DEVISE DES DEVIS ») ; ce qui fait varier le prix.
9. Erreurs fréquentes des équipes qui démarrent l'IA à {ville} (vigilance, points).
10. Pourquoi Richard : la phrase d'entité MOT POUR MOT (fait('phrase_entite')), ses faits, règle « Déjà travaillé » de page-pays.md, projets de portfolio/data/projets-clients.php de la ville ou du pays avec leur mention de relation, lien /realisations/.
11. Bloc cta final vers /contact.

DIFFÉRENCIATION : les concurrents locaux ont des pages courtes ou des fiches d'école ; donne ce qu'ils ne donnent pas (faits de la ville, tâches par secteur, coûts d'éditeur datés, organisation à distance). Réponse courte de 40 à 60 mots en tête de chaque H2 qui se comprend seule ; chiffres datés ; jamais « leader », « n°1 », « meilleur », « formation certifiante » : Richard n'est certifié par aucun éditeur. Chaque paragraphe s'appuie sur un fait, un lieu, un secteur ou un usage de CETTE ville : aucune phrase qu'on pourrait poser dans une autre ville.

RÈGLES D'INTÉGRITÉ (apprises des lots précédents) :
- La date du jour est le 26/10/2026. Toute 'date' de source est le jour réel de consultation (2026-10-26), jamais la date de publication de la page ni une date future.
- N'affirme AUCUNE pratique commerciale ou expérience de Richard absente de portfolio/data/faits.php et de la fiche parente ia-en-entreprise.php : pas de délai de mission, pas de gratuité du cadrage, pas de commission ou de revente de licences, pas de « il utilise chaque jour », pas d'offre inventée, pas de « réponse sous 24 h » hors contact.
- Aucune somme pour une formation de Richard. Aucun client, avis, résultat chiffré ni certification inventé. Aucun fait de ville que tu ne peux pas confirmer par une source lue : il se retire.
- Prix d'éditeurs : relevés AU NAVIGATEUR (wmux "C:\Users\FRATERNEL PLOMBERIE\AppData\Local\Programs\wmux\resources\cli-bin\wmux" browser open URL puis browser eval avec document.body.textContent), jamais par un outil de lecture seul. Si tu cites un prix, cite la page et le jour.
- Français accentué ; aucun tiret cadratin (U+2014), aucune flèche (U+2192), aucun emoji ; voix à la troisième personne ; aucune trace de ta recherche dans le texte.
- Unicité : 40 % au plus avec les autres pages « page », et aucun passage de 15 mots ou plus repris de la page pays ou d'une autre ville.

PRATIQUES DE SÉANCE INTERDITES (les rédacteurs précédents les ont inventées ; aucune n'est dans portfolio/data/faits.php ni dans la fiche parente ia-en-entreprise.php ; leur présence fait échouer la vérification) :
- enregistrement des séances, des démonstrations ou des échanges (« l'enregistrement permet de rattraper le passage manqué ») ; seul le support écrit remis à la session est dans la fiche ;
- durée ou gratuité de l'échange de cadrage (« trente minutes », « une heure », « gratuit ») ; la fiche dit seulement « un ou deux entretiens » et une réponse sous 24 heures au contact ;
- blocs d'« une heure trente », « avec une pause », demi-journées « cassées en deux », séances « reprises sur le créneau suivant », rappel de la consigne de la veille, envoi « par messagerie », test de visioconférence avec un référent ;
- répartition des équipes en groupes selon des rotations, planning « déplaçable de quelques jours », aide du formateur « par message », « modèle maison » ; effectifs autres que ceux de la fiche (atelier 12, formation complète 10, séances à distance 8, hybride 10 ; session de direction : voir la fiche ia-generative-dirigeants) ;
- « il utilise lui-même » tel outil, « il a travaillé sur » tel outil, délais de mission, commissions, revente de licences.
Pour la reprise après une coupure, écris seulement : « une solution de repli est prévue en cas de coupure » (formule de la fiche parente).

ENTREPRISES ET FAITS LOCAUX : ne cite une entreprise comme « installée » ou « active » que si une source datée de 2025 ou 2026 le confirme ; sinon, ne la cite pas. Une donnée de région n'est pas une donnée de ville ; un chiffre de projet annoncé (investissement, centrale, fibre) se dit au conditionnel ou avec « annoncé en ».

PART DE TEXTE PROPRE À LA VILLE : au moins la moitié de la page doit reposer sur des faits de la ville (économie, quartiers, connexion et électricité, ressources locales, cas par métier ancrés sur les employeurs et secteurs de la ville). Si tu n'y arrives pas avec des sources lues, ARRÊTE-TOI et dis-le dans ton compte rendu : une page plus courte vaut mieux qu'une page complétée par de la méthode générique.

VÉRIFICATIONS : php -l FICHIER ; php tools/qa/registres.php --type=page (ta ligne « ok » ; les autres lignes ne te concernent pas). Compte rendu de 10 lignes : mots, title, meta, résultat du contrôle, sources, points à faire vérifier par Richard.

Règles de travail : écris le fichier en plusieurs opérations de 5 000 mots au plus ; n'arrête aucun processus par son nom ; hors outils du dépôt nommés ici, n'exécute aucun script que tu n'as pas écrit ; n'ouvre pas les pages ville écrites en parallèle (portfolio/data/pages/formation-ia-entreprise-*.php autres que la tienne).
