# Fiche Wikidata de Richard SALANON : éléments prêts à coller

Préparé le 6 octobre 2026. Identifiants vérifiés le même jour sur l'API de Wikidata.

## Pourquoi cette fiche

Google et les assistants d'IA s'appuient sur Wikidata pour savoir qu'une personne existe et
pour relier ses profils entre eux. Une fois la fiche créée, son adresse rejoint les profils
officiels du site (balise `sameAs` du graphe de données), ce qui consolide l'entité
« Richard SALANON » dans les résultats de recherche.

## Avant de commencer : la règle de notoriété

Wikidata accepte une personne décrite par des sources sérieuses et publiques. Un site
personnel et des réseaux sociaux seuls sont des sources fragiles : un contributeur peut
proposer la suppression de la fiche. Pour la rendre solide :

- rester strictement factuel, sans aucune formule promotionnelle ;
- ne déclarer que ce que tes pages publiques montrent déjà ;
- ajouter plus tard des sources indépendantes (article de presse, page d'un partenaire, page
  d'Audyxa qui te nomme co-fondateur) dès qu'elles existent.

Ne crée pas de fiche pour Audyxa ni pour Wapy à ce stade : sans sources indépendantes, elles
seraient les premières supprimées.

## Étapes

1. Crée un compte sur https://www.wikidata.org avec ton vrai nom.
2. Ouvre https://quickstatements.toolforge.org, connecte-toi avec ce compte, puis
   « New batch ».
3. Colle le bloc ci-dessous, clique sur « Import V1 commands », vérifie l'aperçu, puis
   « Run ».
4. Envoie-moi le numéro de la fiche créée (il commence par Q). Je l'ajoute aux profils
   officiels du site et à `llms.txt`.

## Bloc QuickStatements (format V1)

```
CREATE
LAST|Lfr|"Richard Salanon"
LAST|Len|"Richard Salanon"
LAST|Dfr|"consultant en digitalisation et développeur logiciel basé à Cotonou"
LAST|Den|"digital transformation consultant and software developer based in Cotonou, Benin"
LAST|Afr|"Somassè Richard Salanon"
LAST|Afr|"Richard SALANON"
LAST|P31|Q5
LAST|P735|Q1249148
LAST|P106|Q183888|S854|"https://richardsalanon.com/richard-salanon"
LAST|P106|Q15978655|S854|"https://richardsalanon.com/richard-salanon"
LAST|P551|Q43595|S854|"https://richardsalanon.com/richard-salanon"
LAST|P69|Q1756635|P582|+2022-00-00T00:00:00Z/9|S854|"https://richardsalanon.com/richard-salanon"
LAST|P1412|Q150
LAST|P1412|Q1860
LAST|P856|"https://richardsalanon.com/"
LAST|P6634|"richard-salanon"
LAST|P2037|"Richard6141"
LAST|P2003|"richard.salanon"
```

## Ce que dit chaque ligne

| Ligne | Sens |
|---|---|
| `Lfr`, `Len` | Nom affiché en français et en anglais |
| `Dfr`, `Den` | Description courte, neutre, sans superlatif |
| `Afr` | Autres noms sous lesquels on peut te chercher |
| `P31 Q5` | Nature : être humain |
| `P735 Q1249148` | Prénom : Richard |
| `P106 Q183888`, `P106 Q15978655` | Occupations : développeur informatique, consultant |
| `P551 Q43595` | Résidence : Cotonou |
| `P69 Q1756635`, `P582 2022` | Scolarité : EPITECH, terminée en 2022 |
| `P1412 Q150`, `P1412 Q1860` | Langues parlées : français, anglais |
| `P856` | Site officiel |
| `P6634`, `P2037`, `P2003` | Identifiants LinkedIn, GitHub et Instagram |
| `S854` | Source de la déclaration : ta page auteur |

## Ce que je n'ai pas mis, volontairement

- **Nationalité (P27)** et **genre (P21)** : tu ne me les as pas indiqués. Ajoute-les toi-même
  sur la fiche si tu le souhaites.
- **Date et lieu de naissance** : facultatifs, et publics pour toujours une fois saisis.
- **Facebook** : ton questionnaire ne dit pas encore si ce profil reste officiel.
