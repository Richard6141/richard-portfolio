# Consigne du rédacteur : comparatif (registre `/comparatifs/{slug}`)

Un comparatif aide un dirigeant à choisir entre plusieurs options, avec des critères publiés et pondérés. Il ne désigne jamais de gagnant universel et ne classe jamais Richard SALANON premier. Modèle de forme : `portfolio/data/comparatifs/odoo-vs-dolibarr.php` (champs, blocs, ton) ; ne recopie aucun passage d'un comparatif existant.

## Fichier

`portfolio/data/comparatifs/{slug}.php`, mêmes champs que le modèle : `titre`, `title` (50 à 60 caractères, finit par « | Richard SALANON » si la place le permet), `meta` (140 à 155 caractères, phrase complète, unique), `en_bref` (2 à 4 phrases), `publie` et `maj` (date fournie par le contrôleur), `faits_hero` (4 entrées : pour qui, options comparées, critères, sources consultées), `sections` (blocs typés de la bibliothèque : `prose`, `comparaison`, `tableau`, `points`, `etapes`, `cas`, `prix`, `checklist`, `vigilance`, `cta`), `faq` (8 questions ou plus), `sources` (titre, url, date), `liens` (`comparatifs`, et `services`/`formations` si le modèle les utilise).

## Contenu attendu

- **Grille de critères pondérés** publiée, avec deux profils d'entreprise au moins dont les poids mènent à des choix différents.
- **Coût total** sur une durée explicite (par exemple trois ans), avec prix du marché sourcés et datés ; les prix de Richard se limitent à `fait('tarifs_depart')` (Landing page 150 000 FCFA, Site vitrine 300 000 FCFA, Référencement naturel 75 000 FCFA, équivalent en euros à 655,957 FCFA pour 1 €), le reste « sur devis ».
- **Contexte Afrique francophone et Europe** : connexion, mobile money, hébergement, compétences disponibles, maintenance.
- **Cas d'usage** par type d'entreprise, **erreurs fréquentes**, **encadré de vigilance** sur ce qui change vite (prix, versions).
- **Matière de l'article de blog d'origine** (`docs/blog/origine/{slug-article}.html`) reprise et vérifiée : le comparatif remplace cet article (redirection 301 le jour de sa publication), il doit couvrir tout ce que l'article disait d'utile.
- 3 200 mots ou plus de matière réelle, sans remplissage.

## Règles communes

Celles de `article-blog.md` (faits sourcés et datés, vérité sur Richard, projets clients, marque, typographie, liens vers des pages publiées seulement, faits déjà vérifiés), à ceci près que le comparatif est une page de registre : il utilise les blocs de la bibliothèque (tableaux autorisés) et non le HTML limité du blog. Liens dans le texte au format `<a href="/chemin">texte</a>` entre guillemets doubles.

## Vérifier avant de rendre

```bash
php -l portfolio/data/comparatifs/{slug}.php
php tools/qa/registres.php --type=comparatif
php tools/qa/doublons.php comparatif {slug} 15
```

0 échec, aucun passage de 15 mots repris d'un autre comparatif.

## Interdits et rendu

Ne modifie que ton fichier ; pas de `git` ; ne lance ni n'arrête de processus d'autres agents. Réponds en moins de 10 lignes : chemin, mots et résultat du contrôle, nombre de sources, points incertains.
