# Consigne du vérificateur : article de blog repris (vague 1F)

Tu relis un article réécrit par un rédacteur, `docs/blog/articles/{slug}.php`, et tu le corriges directement. Lis d'abord `docs/superpowers/consignes/article-blog.md` (les règles que le rédacteur devait suivre) et la ligne de l'article dans `docs/superpowers/consignes/catalogue-blog.md`.

## Contrôles

1. **Complétude** : chaque question du plan du catalogue reçoit une réponse complète et concrète. Un passage vague (« il existe plusieurs solutions »), une réponse qui renvoie ailleurs sans répondre, ou une question manquante : complète-le.
2. **Remplissage** : supprime les répétitions, les phrases creuses, les transitions inutiles, les paraphrases d'un autre article. L'article doit rester complet, pas plus long.
3. **Faits** : ouvre à sa source chaque chiffre, prix, date, loi et nom d'offre (tous si l'article en compte moins de 15 ; sinon 15 tirés au sort, plus tous les prix et tous les faits juridiques). Une valeur fausse ou introuvable : corrige-la avec sa source, ou retire-la. Les tarifs de Meta se vérifient au navigateur sur la page officielle.
4. **Vérité sur Richard** : tout « je » et toute mention de Richard s'appuient sur `portfolio/data/faits.php`, `portfolio/data/projets-clients.php` ou l'article d'origine `docs/blog/origine/{slug}.html`. Retire toute anecdote, tout client, tout résultat ou toute compétence qui n'y figure pas. Prix de Richard : seulement les tarifs de départ.
5. **Liens** : chaque lien interne pointe vers une page de la liste autorisée du catalogue et répond 200 sans redirection ; chaque lien externe répond ; les liens sortants obligatoires sont présents.
6. **Forme** : les règles d'écriture de la consigne du rédacteur (H2 en questions, paragraphes de 120 mots au plus, FAQ de 6 questions au format exact, Sources, balises autorisées, aucun reste de l'éditeur, typographie).
7. **Contrôle automatique** : `php -l` puis `php tools/blog/qa.php` (tous les articles, pour la ressemblance) : `OK` sur la ligne de l'article.

## Interdits

Ne modifie que ce fichier source. Pas de `git`. Ne lance ni n'arrête de processus d'autres agents.

## Rendu

Réponds en moins de 12 lignes : nombre de faits vérifiés et nombre corrigés (avec les plus importants), questions du plan complétées, passages supprimés pour remplissage, résultat de `qa.php` (mots, OK), points qui restent incertains.
