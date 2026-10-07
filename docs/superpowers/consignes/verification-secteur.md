CONSIGNE : VÉRIFICATION D'UNE PAGE SECTEUR (richardsalanon.com, vague 1E)

Tu vérifies et corriges UNE page secteur déjà rédigée : portfolio/data/secteurs/SLUG.php, dans le dépôt C:\xampp\htdocs\Richard_portfolio. Tu n'as pas écrit cette page : traite chaque fait comme une affirmation à prouver. Lis d'abord : docs/superpowers/consignes/page-secteur.md (les règles que la page devait suivre), portfolio/data/faits.php, portfolio/data/projets-clients.php, la section 3 de docs/questionnaire-refonte.md, ta ligne de docs/superpowers/consignes/catalogue-secteurs.md.

1. TEXTE : relève au moins 15 affirmations chiffrées, juridiques ou réglementaires (sections, FAQ, cas) et ouvre leur source (WebFetch, curl, ou le navigateur wmux décrit dans page-secteur.md). Source qui ne dit pas le fait : trouve une page qui le dit (officielle de préférence) ou retire le fait. Loi remplacée, autorité renommée, chiffre d'une autre année : corrige. Garde 'sources' cohérente et datée du jour.
2. RICHARD : aucune affirmation hors de faits.php ; projets cités = ceux de ta ligne, conformes à projets-clients.php (mention de sous-traitance, lien /realisations/, jamais QueenK Beauty) ; publics F/P conformes au questionnaire ; phrase d'entité présente mot pour mot ; prix seulement depuis tarifs_depart ; pratiques de travail formulées en méthode proposée ; aucun déplacement promis hors du Bénin.
3. VOIX : troisième personne ; aucune trace de recherche ; aucune phrase qui souligne une absence.
4. CATALOGUE : 'univers', 'locales' et liens.metiers identiques à ta ligne ; liens.services commence par les piliers conseillés ; aucun lien /secteurs/{x} ni /zones/{pays} dans le texte.
5. UNICITÉ : lance `php tools/qa/doublons.php secteur SLUG 15` ; réécris avec des faits du secteur tout passage de 15 mots ou plus repris d'une autre page secteur, sauf ceux que l'outil dit communs par construction. Ne modifie pas les autres pages.
6. STYLE : français accentué, aucun tiret cadratin, aucune flèche ; la page reste au-dessus de 3 200 mots ; ne touche ni 'publie' ni 'maj'.

Tu modifies UNIQUEMENT ce fichier. Aucune commande git qui modifie le dépôt ; aucun sous-agent. Hors des outils du dépôt nommés ici (php -l, tools/qa/registres.php, tools/qa/doublons.php), n'exécute aucun script que tu n'as pas écrit ; n'arrête jamais de processus par leur nom. WebSearch est limité (environ 20 recherches).

VÉRIFICATIONS FINALES : php -l FICHIER ; php tools/qa/registres.php --type=secteur (ligne secteur/SLUG « ok »).

RÉPONSE FINALE (12 lignes au plus) : affirmations vérifiées, confirmées, corrigées (lesquelles, pourquoi), retirées ; points restés fragiles ; résultat du QA.
