CONSIGNE : HISTOIRE EXTERNE (richardsalanon.com)

Tu rédiges UNE histoire de transformation numérique d'une entreprise ou d'un État qui n'est PAS un client de Richard SALANON : un échec (occasion manquée, projet raté, incident) ou un virage réussi, racontés avec des faits sourcés, puis traduits en leçons concrètes pour une PME d'Afrique francophone ou d'Europe, reliées aux services de Richard. Dépôt : C:\xampp\htdocs\Richard_portfolio. Lis d'abord portfolio/data/faits.php et le modèle de format portfolio/data/comparatifs/odoo-vs-dolibarr.php. Tu écris UNIQUEMENT le fichier indiqué. Aucun commit, aucune commande git qui modifie le dépôt.

INTERDIT : reprendre les entreprises ou le texte des histoires d'audyxa.com (Blockbuster, Kodak, Nokia, Toys R Us, Netflix, Domino's, Adobe, LEGO, Wave, Jumia, M-Pesa, ANIP Bénin) ; copier une source ; inventer un chiffre, une date, une citation, une décision ou une intention. Une citation n'est reproduite que si elle figure dans une source citée, et reste courte.

FORMAT : fichier PHP qui retourne un tableau avec 'titre' (H1 : l'entreprise et la leçon, par exemple « Thomas Cook : le voyagiste qui a vendu en agence trop longtemps »), 'title' (50 à 60 caractères), 'meta' (140 à 155 caractères, phrase complète), 'en_bref' (2 à 4 phrases : ce qui s'est passé, la conséquence chiffrée, la leçon), 'publie' => DATE, 'maj' => DATE, 'relation' => 'externe', 'client' => NOM DE L'ENTREPRISE, 'faits_hero' => [['l' => 'Secteur', 'v' => '...'], ['l' => 'Période', 'v' => '...'], ['l' => 'Issue', 'v' => 'Échec' ou 'Virage réussi' ou 'Bilan contrasté'], ['l' => 'Leçon', 'v' => 'en 6 mots au plus']], 'sections', 'faq' (8 au moins), 'sources' (8 au moins : presse de référence, rapports officiels, décisions de justice, autorités de régulation, communiqués de l'entreprise ; https ; datées DATE), 'liens' => ['services' => [2 à 4 slugs de piliers parmi la liste fournie], 'comparatifs' => [0 à 2 slugs pertinents parmi odoo-vs-dolibarr, n8n-vs-make-vs-zapier, fedapay-vs-kkiapay-vs-cinetpay, chatgpt-vs-claude-vs-gemini]].
Pas de bloc 'faq' ni 'sources' dans 'sections' (le gabarit les rend).

BLOCS (clés exactes ; gabarits dans portfolio/partials/blocs/) : prose (titre, paragraphes[]) ; points (titre, intro, items[{titre,texte}]) ; frise (titre, items[{date,titre,texte}]) ; tableau (titre, legende, entetes[], lignes[[...]]) ; chiffres (titre, items[{valeur,libelle,source,url}]) ; comparaison (titre, options[], criteres[{critere,valeurs[]}], verdict) ; vigilance (titre, texte) ; lecon (titre, texte) ; checklist (titre, items[]) ; cas (titre, items[{secteur,probleme,solution}]) ; cta (titre, texte, bouton{url,texte}). Chaque 'titre' de bloc est un H2 formulé en vraie question.

PLAN (dans cet ordre, adapté au cas) :
1. Qui était l'entreprise et quelle était sa position au départ (prose, chiffres sourcés).
2. La frise datée des décisions et des événements (frise : 6 dates au moins).
3. Ce qui s'est réellement passé, et pourquoi (prose, points) ; ce qui est établi et ce qui reste débattu (vigilance).
4. Les conséquences mesurables (chiffres : valeur + date + source).
5. Ce qu'il aurait fallu faire, ou ce qui a fonctionné (points ou comparaison « ce qui a été fait » contre « ce qui aurait évité le problème »).
6. La leçon en une idée forte (lecon).
7. Ce que cela change pour une PME de Cotonou, d'Abidjan, de Dakar, de Lomé, de Douala ou de Lyon aujourd'hui : signaux d'alerte, décisions à prendre, coûts d'une action à temps comparés à ceux d'une action tardive, sans chiffres inventés (points, tableau, cas).
8. Liste de contrôle « éviter la même erreur » (checklist).
9. Comment Richard aide sur ce point précis : les services concernés, avec liens vers leurs pages, sa façon de travailler, sans promesse ni chiffre inventé ; la phrase d'entité fait('phrase_entite') reprise mot pour mot.
10. Bloc cta final vers /contact (diagnostic ou devis).

EXIGENCES (contrôle : php tools/qa/registres.php --type=histoire ; ta page doit être « ok ») :
- 3 200 mots au moins de texte visible, nourris de faits et d'analyse, jamais de remplissage ni de répétition.
- Paragraphes de 120 mots au plus ; ton factuel, ni moqueur ni sensationnaliste ; chaque chiffre avec sa date et sa source nommée dans la phrase.
- Le gabarit affiche déjà « Cette entreprise n'est pas un client : histoire publique, faits sourcés » ; ne prétends jamais que Richard a travaillé pour elle.
- Français accentué ; aucun tiret cadratin (U+2014), aucune flèche (U+2192), aucun emoji.
- Liens internes autorisés : /contact, /richard-salanon, /comparatifs/ et ses 4 pages, /services/{slug} des piliers de la liste fournie, /histoires/. Aucun autre.
- Les sources doivent être réellement consultées (WebFetch ou WebSearch) ; si une page est bloquée, cite une autre source fiable qui rapporte le même fait.

VÉRIFICATIONS : php -l FICHIER ; php tools/qa/registres.php --type=histoire ; http://localhost:8081/histoires/SLUG répond 200. Compte rendu en 8 lignes : mots, title, meta, sources principales, points contestés.
