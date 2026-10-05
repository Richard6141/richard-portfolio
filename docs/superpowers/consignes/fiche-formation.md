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
