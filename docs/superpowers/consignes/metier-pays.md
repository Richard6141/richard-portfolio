CONSIGNE : PAGE « FORMATION IA PAR MÉTIER ET PAR PAYS » /formations/metier/SLUGMETIER/SLUGPAYS (richardsalanon.com)

Objectif métier : première réponse à « formation IA {métier} {pays} », « formateur IA {métier} {pays} » et « IA pour {public} {pays} ». UNE page par couple métier + pays. Elle s'adresse à une personne de ce métier dans ce pays. Elle ne répète ni la page métier (cadre général du métier, programme, textes européens) ni la page pays (cadre national : protection des données, financement, chiffres d'ensemble) : elle porte ce qui est propre à CE métier dans CE pays.

Tu rédiges UNE page du site de Richard SALANON. Dépôt : C:\xampp\htdocs\Richard_portfolio. Lis d'abord, dans cet ordre :
1. portfolio/data/faits.php (seuls faits autorisés sur Richard) ;
2. docs/superpowers/consignes/fiche-formation.md (BLOCS, EXIGENCES, voix, interdits : tout s'applique, sauf ce qui suit) ;
3. docs/superpowers/consignes/page-metier.md (statut F ou P, neutralité, liens autorisés) et la ligne du métier dans docs/superpowers/consignes/catalogue-metiers.md ;
4. docs/superpowers/consignes/page-pays.md (règle « Déjà travaillé », voix) et la ligne du pays dans docs/superpowers/consignes/catalogue-pays.md ;
5. la page métier portfolio/data/metiers/SLUGMETIER.php (le parent : repère ses sections pour NE PAS les recopier) ;
6. la page pays portfolio/data/formations/ia-en-entreprise/SLUGPAYS.php et la fiche portfolio/data/pays/SLUGPAYS.php (faits sourcés réutilisables : ne les recopie pas en bloc) ;
7. la fiche parente portfolio/data/formations/ia-en-entreprise.php (formats, effectifs, supports : seuls autorisés pour décrire la pratique de Richard).
Tu écris UNIQUEMENT portfolio/data/metiers/SLUGMETIER/SLUGPAYS.php (crée le dossier si besoin). Aucun commit, aucune commande git qui modifie le dépôt.

FORMAT : fichier PHP qui retourne un tableau avec :
- 'titre' (H1) : « formation IA » ou « formateur IA », le public du métier et le pays, et ce que la personne obtiendra ;
- 'title' : 50 à 60 caractères, commence par « Formation IA » ou « Formateur IA », contient le métier et le pays, finit par « | Richard SALANON » si la place le permet ;
- 'meta' : 140 à 155 caractères, phrase complète, contient « formation IA », le métier et le pays ;
- 'en_bref' : 3 à 4 phrases ; la première répond seule à « qui peut former {le public} à l'IA {dans le pays} ? » (40 à 60 mots) ;
- 'publie' et 'maj' : la date indiquée par la tâche ; 'sections' ; 'faq' : 8 questions au moins, 6 propres au couple métier + pays ; 'sources' : 8 au moins, https, datées du jour de consultation ; 'liens' : ['formations' => 3 à 6 slugs du catalogue (privilégier ceux de la ligne du métier), 'services' => 1 à 3 piliers].
Pas de champs 'univers', 'prioritaire', 'programme' ni 'faits_hero' (propres aux pages métier). Pas de bloc 'faq' ni 'sources' dans 'sections'.

PLAN TYPE (chaque H2 est une vraie question, écrite pour ce métier dans ce pays ; 3 200 mots au moins de texte visible, seuil du contrôle ; la matière vient du métier et du pays, jamais du remplissage) :
1. Qui forme les {public} à l'IA {dans le pays}, et comment choisir (ce qui distingue une démonstration d'outil d'une formation sur les tâches du métier).
2. Où en est l'IA et le numérique dans ce métier {dans le pays} (état des lieux sourcé et daté : institutions, ordres ou fédérations, outils réglementaires du métier, chiffres du métier ou du secteur dans le pays).
3. Quelles règles propres à ce métier {dans le pays} (texte national ou régional qui encadre le métier : secret, déontologie, régulateur, données ; titre, article et date lus à la source ; jamais d'interprétation juridique, renvoi au juriste).
4. Quelles tâches du métier confier à l'IA, avec quels outils (tableau : tâche, outil, résultat attendu, point de contrôle humain ; au moins 6 lignes ancrées sur les pratiques et les documents du métier dans ce pays).
5. Quelles contraintes de terrain (connexion, électricité, équipement, langues, mobile money, logiciels réellement utilisés) et comment la formation s'y adapte ; solution de repli en cas de coupure (formule de la fiche parente).
6. Quels formats pour ce public : atelier d'une demi-journée, formation de deux jours, séances à distance depuis Cotonou (fuseau et décalage exacts), accompagnement ; effectifs et durées de la fiche parente uniquement (tableau).
7. Au moins 3 scénarios de séance propres au métier et au pays (situation, consigne donnée, ce que le participant contrôle avant d'utiliser le résultat ; dossiers fictifs).
8. Comment financer ou budgéter cette formation pour ce public {dans le pays} (dispositifs sourcés, jamais de promesse de prise en charge ; ou comment budgéter).
9. Combien coûte la formation : aucune somme (« sur devis, en DEVISE DES DEVIS ») ; ce qui fait varier le prix.
10. Erreurs fréquentes de ce métier qui démarre l'IA {dans le pays}.
11. Pourquoi Richard : phrase d'entité MOT POUR MOT (fait('phrase_entite')), ses faits, statut F ou P de la ligne du métier, règle « Déjà travaillé » de page-pays.md, projets de portfolio/data/projets-clients.php du pays avec leur mention de relation, lien /realisations/.
12. Bloc cta final vers /contact.

Réponse courte de 40 à 60 mots en tête de chaque H2 qui se comprend seule ; chiffres datés ; jamais « leader », « n°1 », « meilleur », « formation certifiante » : Richard n'est certifié par aucun éditeur. Richard n'exerce pas le métier : il forme à l'usage des outils. Neutralité de page-metier.md : aucune critique des États ni des lois.

RÈGLES D'INTÉGRITÉ (apprises des lots précédents) :
- Date du jour : 26/10/2026. Toute 'date' de source est le jour réel de consultation (2026-10-26), jamais une date future.
- Aucune pratique ni expérience de Richard absente de portfolio/data/faits.php et de la fiche parente. Pas de délai de mission, de gratuité ou de durée du cadrage, de commission, de revente de licences, de « il utilise lui-même », d'offre inventée.
- Aucune somme pour une formation de Richard. Aucun prix, quota ou promotion d'éditeur (les pages lues par WebFetch sont périmées) : écris que les formules et limites évoluent et que la page officielle fait foi. Aucun client, avis, résultat chiffré ni certification inventé.
- Texte de loi : titre et date seulement, sauf article lu à la source. Décret FODEFCA 2022-286 et loi béninoise 2017-20 : titre et date seulement. Pas de nationalité ni siège d'éditeur sans source lue.
- Aucun fait que tu ne peux pas confirmer par une source lue : il se retire. Une donnée de région n'est pas une donnée de pays.
- PRATIQUES INTERDITES (absentes de la fiche parente) : enregistrement des séances, blocs d'« une heure trente », rotations de groupes, rappel de la veille, bibliothèque de prompts, glossaire, modèle de rapport, évaluation écrite à trois mois, présence sur place hors fiche parente. Autorisés : questionnaire avant la session, documents téléchargés à l'avance, supports, un ou deux entretiens de cadrage, canal direct, accompagnement mensuel, attestation, épreuve finale chronomètre en main, solution de repli en cas de coupure.
- Français accentué ; aucun tiret cadratin (U+2014), aucune flèche (U+2192), aucun emoji ; troisième personne ; aucune trace de ta recherche dans le texte.
- Unicité : 25 % au plus avec la page métier parente, 40 % au plus avec les autres pages du même pays ou du même métier, 60 % de texte propre. Aucun passage de 15 mots ou plus repris de la page métier, de la page pays ou d'une autre page métier-pays.
- PART PROPRE : au moins la moitié de la page repose sur des faits du couple métier + pays. Si tu n'y arrives pas avec des sources lues, ARRÊTE-TOI et dis-le : une page plus courte vaut mieux qu'une page complétée par du générique.

VÉRIFICATIONS : php -l FICHIER ; php -d memory_limit=2G tools/qa/registres.php --type=metier-pays (ta ligne « ok », les autres ne te concernent pas). Compte rendu de 10 lignes : mots, title, meta, résultat du contrôle, sources, points à faire vérifier par Richard.

Règles de travail : écris le fichier en plusieurs opérations de 5 000 mots au plus (Write puis Edit PHP par str_replace pour éviter les fins de ligne CRLF) ; n'arrête aucun processus par son nom ; hors outils du dépôt nommés ici, n'exécute aucun script que tu n'as pas écrit ; n'ouvre pas les autres pages portfolio/data/metiers/*/*.php. Sources lues par WebFetch ou par le navigateur wmux ("C:\Users\FRATERNEL PLOMBERIE\AppData\Local\Programs\wmux\resources\cli-bin\wmux" browser open URL puis browser eval avec document.body.textContent).
