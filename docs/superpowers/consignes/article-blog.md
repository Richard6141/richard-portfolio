# Consigne du rédacteur : article de blog repris (vague 1F)

Tu réécris un article du blog de Richard SALANON (richardsalanon.com), consultant en digitalisation et développeur basé à Cotonou. L'article existe déjà en ligne ; tu le reprends pour qu'il réponde complètement à son intention, mieux que toute autre page sur le sujet.

## À lire d'abord

1. La ligne de ton article dans `docs/superpowers/consignes/catalogue-blog.md` : intention, plan de questions, liens sortants obligatoires, liens entrants à poser.
2. L'article d'origine : `docs/blog/origine/{slug}.html`, et celui de l'article absorbé pour un article qui en absorbe un autre. Les métadonnées (titre, catégorie, tags, instantané) sont dans `docs/blog/origine/index.json`.
3. Les faits de Richard : `portfolio/data/faits.php` (identité, tarifs de départ, zones, phrase d'entité) et `portfolio/data/projets-clients.php` (projets citables et mention de sous-traitance).

## Ce que tu produis

Un seul fichier : `docs/blog/articles/{slug}.php`, au format suivant (rien d'autre dans le fichier) :

```php
<?php
// Source de la reprise de /blog/{slug} (vague 1F). Après la migration, la base fait foi :
// ce fichier ne sert qu'à générer migrations/AAAA-MM-JJ-blog-{slug}.sql.
return [
    'slug'       => '{slug}',
    'instantane' => '2026-10-07 15:00:51',   // valeur « instantane » de index.json, recopiée telle quelle
    'titre'      => '…',                     // H1 et balise title, 50 à 60 caractères
    'meta'       => '…',                     // 140 à 155 caractères, phrase complète, unique
    'resume'     => '…',                     // « En bref » : 2 à 4 phrases, 500 caractères au plus, réponse directe
    'categorie'  => '…',                     // celle de index.json
    'tags'       => ['…', '…'],              // 3 à 6 mots-clés
    'contenu'    => <<<'HTML'
<h2>… ?</h2>
<p>…</p>
HTML,
];
```

## Longueur

Aucun minimum de mots (consigne de Richard du 07/10/2026). L'article répond complètement à chaque question de son plan, avec la matière utile : étapes, cas concrets, erreurs fréquentes, prix expliqués, tableau de décision sous forme de liste. Jamais de remplissage, de répétition, de paraphrase d'une autre page ni de phrase creuse. Un article court et complet vaut mieux qu'un article long et délayé.

## Règles d'écriture

- **En bref** (`resume`) : la réponse directe à l'intention, 2 à 4 phrases.
- **H2** : chaque H2 est une vraie question qui finit par « ? », sauf les deux dernières sections, `<h2>Questions fréquentes</h2>` et `<h2>Sources</h2>`. Les H3 servent aux sous-parties.
- **Paragraphes** : 120 mots au plus. Dès qu'il y a comparaison ou étapes, une liste `<ul>` ou `<ol>`.
- **Chiffres** : chaque chiffre porte sa valeur, sa date et sa source nommée dans la phrase (« selon la page tarifs de Meta consultée le 7 octobre 2026, … »), et la source figure dans la section Sources avec son lien.
- **FAQ** : `<h2>Questions fréquentes</h2>` suivi d'au moins 6 questions au format exact `<p><strong>Question ?</strong></p><p>Réponse.</p>` ; les questions complètent le corps, elles ne le répètent pas.
- **Sources** : `<h2>Sources</h2>` puis `<ul>` d'éléments `<li><a href="https://…">Nom de la source</a>, consultée le 7 octobre 2026</li>`.
- **Balises autorisées** (l'éditeur du tableau de bord détruit le reste) : `h2`, `h3`, `p`, `strong`, `em`, `a` (seulement `href`), `ul`, `ol`, `li`, `blockquote`, `br`, `img` (seulement `src` sous `/uploads/` et `alt`), `code`. Ni tableau, ni `div`, ni `span`, ni classe, ni style, ni attribut `data-…`. Les articles d'origine contiennent des restes de l'éditeur (`<span class="ql-ui" contenteditable="false">`, `<li data-list="bullet">` dans un `<ol>`) : ne les recopie pas, écris des listes `<ul><li>` propres. Une image d'origine sous `/uploads/` peut être gardée avec un `alt` descriptif.
- **Voix** : celle de l'article d'origine (souvent « je » pour Richard, « vous » pour le lecteur). Tout « je » est vrai : il ne s'appuie que sur `faits.php`, `projets-clients.php` ou l'article d'origine. Jamais d'anecdote, de client, de résultat chiffré, d'avis ou de témoignage inventé.
- **Projets clients** : seulement ceux de `projets-clients.php`, avec « réalisé en sous-traitance pour Digital Développement » quand `relation` vaut `sous-traitance`, lien `/realisations/`, jamais le site du client, jamais QueenK Beauty.
- **Prix de Richard** : seulement `fait('tarifs_depart')` (Landing page 150 000 FCFA, Site vitrine 300 000 FCFA, Référencement naturel 75 000 FCFA ; en euros à 655,957 FCFA pour 1 €, arrondi à l'euro) ; tout autre prix de Richard est « sur devis ». Prix du marché : sourcés et datés.
- **Marque** : « Richard SALANON », jamais « Richard Technologies ».
- **Typographie** : français accentué, aucun tiret cadratin (—), aucune flèche (→), aucun emoji, apostrophe droite ou typographique au choix mais la même dans tout l'article.
- **Aucune trace de recherche** dans le texte (« d'après mes recherches », « au moment où j'écris ces lignes, j'ai vérifié… ») : le texte parle au lecteur.

## Liens

- Les liens sortants obligatoires du catalogue, plus ceux qui servent le lecteur, vers la liste des pages autorisées du catalogue seulement.
- Les liens entrants à poser : ils sont posés dans les autres articles par leurs rédacteurs ; dans ton article, pose les liens vers les articles qui te citent comme « Entrant » (voir la colonne « Sortants » des autres articles qui te concernent).
- Avant de rendre, vérifie chaque lien interne et externe : `curl -s -o /dev/null -w "%{http_code}" https://richardsalanon.com/CHEMIN` doit répondre 200 (suivre une redirection n'est pas accepté pour un lien interne).
- Ancres descriptives (« comparer FedaPay, KkiaPay et CinetPay »), jamais « cliquez ici ».

## Faits déjà vérifiés (à reprendre tels quels)

- Loi béninoise n° 2017-20 portant code du numérique, article 391 : un transfert de données vers un État tiers exige que l'Autorité de protection des données constate un niveau de protection équivalent ET qu'elle l'autorise au préalable.
- France : seuil de dématérialisation des marchés publics à 60 000 € HT depuis le 1er avril 2026 (décret n° 2025-1386).
- Tarifs WhatsApp de Meta : à vérifier au navigateur sur la page officielle de Meta le jour de la rédaction, jamais par une lecture automatique de page (elle renvoie une version périmée).

## Vérifier avant de rendre

```bash
php -l docs/blog/articles/{slug}.php
php tools/blog/qa.php {slug}
```

`qa.php` doit afficher `OK` sur ta ligne (il signale aussi une ressemblance de plus de 40 % avec un autre article déjà rédigé : réécris alors les passages communs).

## Interdits

Ne modifie aucun autre fichier que ta source. Pas de `git`. Ne lance ni n'arrête de processus d'autres agents, n'exécute pas les scripts d'autres agents (les outils du dépôt `tools/…` sont permis).

## Rendu

Réponds en moins de 10 lignes : chemin du fichier, nombre de mots affiché par `qa.php`, liste des sources consultées (nombre), points incertains à faire vérifier.
