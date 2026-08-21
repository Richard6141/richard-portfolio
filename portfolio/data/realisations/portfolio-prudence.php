<?php
// Portfolio Prudence SALANON — site personnel (HTML/CSS, JavaScript, PHP).
// Complements editoriaux : portfolio professionnel, architecture, enseignements.
declare(strict_types=1);

return [
    'secteur' => [
        'titre' => "Le portfolio professionnel : un outil de candidature, pas une vitrine",
        'paragraphes' => [
            "Un portfolio en ligne ne sert pas à impressionner : il sert à répondre, avant qu'elles ne soient posées, aux questions d'un recruteur ou d'un client qui hésite. Qui est cette personne, qu'a-t-elle réellement fait, et comment la contacter. Tout ce qui ne concourt pas à ces trois réponses encombre. C'est ce qui distingue un portfolio efficace d'une démonstration technique : le second flatte son auteur, le premier obtient un rendez-vous.",
            "Le contexte de lecture est particulier et souvent mal anticipé. Un recruteur consulte un portfolio entre deux tâches, fréquemment depuis un téléphone, avec quelques dizaines de secondes d'attention. Il ne lira pas une biographie chronologique complète. Il cherche à situer rapidement un profil, à vérifier une compétence annoncée, et à trouver un moyen de contact. Un portfolio qui exige de faire défiler trois écrans avant d'afficher le métier de la personne a déjà échoué.",
            "Dans les métiers de la communication en particulier, le portfolio est aussi un échantillon du travail. La façon dont l'information est organisée, la clarté des textes et la cohérence visuelle en disent autant que les réalisations présentées. Un portfolio confus dans un métier dont l'objet est de rendre les choses claires envoie un signal contradictoire, quelles que soient les références affichées.",
            "Il y a enfin un enjeu de durée de vie. Un portfolio se construit une fois et doit rester pertinent plusieurs années, en s'enrichissant progressivement. Cela oriente vers des choix sobres, qui ne se démoderont pas, et vers une architecture où l'ajout d'une réalisation ne demande aucune intervention technique. Un portfolio qu'on ne peut pas mettre à jour soi-même cesse d'être à jour au bout de six mois, et devient alors contre-productif.",
            "Dernier point, souvent négligé : un portfolio est de plus en plus lu par des machines avant de l'être par des humains. Outils de présélection, moteurs de recherche, assistants conversationnels. Un contenu rendu par le serveur, structuré et explicite se laisse lire et citer correctement ; un contenu construit par le navigateur reste souvent invisible pour eux.",
            "Il reste une dimension que beaucoup négligent, et qui se joue en dehors du site lui-même : la cohérence entre le portfolio et les autres traces professionnelles en ligne. Un recruteur ou un client vérifie fréquemment le profil LinkedIn après avoir consulté le site, et l'inverse est tout aussi courant. Des intitulés de poste divergents, des dates qui ne concordent pas ou une présentation contradictoire sèment un doute difficile à dissiper ensuite. Aligner ces supports demande une heure de travail et évite une question embarrassante au moment le plus décisif de la discussion.",
        ],
    ],

    'technique' => [
        'titre' => "Les choix techniques et leur justification",
        'choix' => [
            ['titre' => "Contenu rendu par le serveur", 'texte' => "Le texte est présent dans le HTML servi, pas assemblé par le navigateur. Cela garantit trois choses : la page s'affiche même sur une connexion lente, les moteurs de recherche lisent l'intégralité du contenu sans exécuter de script, et un outil de présélection automatique voit le même texte qu'un visiteur humain."],
            ['titre' => "Une structure de titres qui reflète le contenu", 'texte' => "Un seul titre principal, des sections hiérarchisées logiquement. Ce n'est pas une question de style mais de lisibilité machine et d'accessibilité : c'est ce qui permet à un lecteur d'écran comme à un moteur de comprendre l'organisation de la page sans interprétation."],
            ['titre' => "PHP léger plutôt qu'un générateur de site", 'texte' => "Un portfolio évolue par ajouts successifs de réalisations. Du PHP simple permet de gérer ces contenus sans imposer une chaîne de compilation ni une republication complète à chaque modification. C'est aussi ce qui garantit qu'il reste hébergeable partout, sans dépendance particulière."],
            ['titre' => "Des images dimensionnées pour l'affichage réel", 'texte' => "Sur un portfolio, les visuels représentent l'essentiel du poids. Formats modernes, dimensions ajustées, chargement différé sous la ligne de flottaison. L'objectif est qu'un recruteur sur connexion mobile voie la page complète avant de perdre patience."],
            ['titre' => "Contact accessible depuis n'importe quel écran", 'texte' => "Adresse e-mail et téléphone cliquables, présents en permanence et non relégués à une page dédiée. Un visiteur convaincu à mi-parcours doit pouvoir agir immédiatement, sans avoir à chercher comment vous joindre."],
        ],
    ],

    'transferable' => [
        'titre' => "Ce qu'on peut en retirer pour son propre portfolio",
        'paragraphes' => [
            "Le premier enseignement est de dire son métier dans les cinq premiers mots visibles. Beaucoup de portfolios commencent par une formule d'accroche générale ou une citation, obligeant le lecteur à deviner. Or c'est la première information cherchée. L'annoncer immédiatement, en clair, coûte une ligne et retient un visiteur qui serait parti.",
            "Le deuxième porte sur la sélection. Un portfolio qui présente six réalisations bien décrites convainc davantage que vingt vignettes sans contexte. Pour chacune : ce qui était demandé, ce qui a été fait, et le résultat. La quantité impressionne rarement ; la capacité à expliquer une démarche, toujours.",
            "Le troisième concerne le contact. Il doit être atteignable depuis n'importe quel endroit du site, en un geste. Un formulaire seul, sans adresse ni numéro visible, fait perdre des opportunités : beaucoup de gens préfèrent écrire depuis leur propre messagerie ou appeler directement.",
            "Le quatrième est une question de maintenance. Choisissez une solution que vous pouvez mettre à jour vous-même. Un portfolio dont chaque modification exige un développeur ne sera pas mis à jour, et un portfolio obsolète nuit davantage qu'il ne sert — il donne à voir une activité arrêtée.",
            "Le dernier point est la vitesse. On l'associe rarement à un portfolio, à tort. Un recruteur ou un client qui attend trois secondes sur mobile referme souvent avant d'avoir vu quoi que ce soit. La performance n'est pas un détail technique ici : c'est ce qui détermine si votre travail sera vu.",
            "Une remarque s'impose sur le choix du nom de domaine. Beaucoup d'indépendants hébergent leur portfolio sur un sous-domaine gratuit ou une plateforme tierce, par économie. C'est une fausse économie à double titre : le référencement accumulé bénéficie à la plateforme et non à vous, et l'adresse elle-même envoie un signal d'amateurisme à un client qui hésite entre deux prestataires. Un nom de domaine coûte quelques milliers de francs par an, soit un montant négligeable au regard d'une seule mission obtenue.",
            "Il faut aussi penser au cas où le visiteur arrive sans contexte. Un portfolio est fréquemment découvert par un lien partagé, sans page d'accueil ni présentation préalable : quelqu'un envoie directement l'adresse d'une réalisation à un collègue. Chaque page doit donc être autonome — rappeler qui vous êtes, ce que vous faites et comment vous joindre, sans supposer que le visiteur a vu le reste du site.",
            "Enfin, un portfolio gagne à raconter une progression plutôt qu'à empiler des travaux. Présenter ses réalisations de la plus récente à la plus ancienne, en montrant l'évolution des responsabilités et de la complexité, donne au lecteur une trajectoire à laquelle se raccrocher. Une liste sans ordre apparent laisse chacun se faire sa propre idée — et elle est rarement à votre avantage.",
            "Un point de vigilance pour terminer : sauvegardez votre portfolio ailleurs que sur l'hébergement qui le sert. Une erreur de manipulation, un impayé d'hébergement ou une migration ratée peuvent effacer des années de travail. Une copie du contenu et des visuels, conservée séparément et mise à jour à chaque ajout, coûte quelques minutes et évite une perte irréversible.",
            "Une question revient souvent : faut-il publier son curriculum vitae en téléchargement ? L'usage montre que oui, à condition qu'il soit à jour et cohérent avec le contenu du site. Beaucoup de recruteurs conservent un document pour le transmettre en interne, et l'absence de fichier téléchargeable les oblige à recopier l'information — ce que peu prennent la peine de faire.",
            "Il faut enfin réfléchir à ce que le portfolio doit provoquer. Un site qui informe sans jamais proposer d'action laisse le visiteur convaincu repartir sans rien faire. Une invitation claire et unique, répétée à quelques endroits — écrire, appeler, prendre rendez-vous — transforme une consultation en conversation. C'est la différence entre un portfolio qu'on trouve bien fait et un portfolio qui rapporte des missions.",
        ],
    ],

    'checklist' => [
        'titre' => "À vérifier avant de publier un portfolio",
        'intro' => "Ces points font la différence entre un portfolio qui génère des contacts et un portfolio qu'on montre sans jamais en tirer d'opportunité.",
        'points' => [
            "Votre métier est-il lisible dans les cinq premiers mots visibles, sans avoir à faire défiler ?",
            "Combien de réalisations présentez-vous, et chacune est-elle expliquée ? Six commentées valent mieux que vingt muettes.",
            "Peut-on vous contacter depuis n'importe quelle page, en un geste, avec un numéro et un e-mail visibles ?",
            "La page se charge-t-elle en moins de trois secondes sur une connexion mobile ordinaire ?",
            "Pouvez-vous ajouter une réalisation vous-même, sans intervention extérieure ?",
            "Le contenu est-il lisible sans JavaScript ? C'est ce que voient les outils de présélection et les moteurs.",
            "Vos textes sont-ils relus ? Dans les métiers de la communication, une faute coûte plus cher qu'ailleurs.",
            "Le nom de domaine est-il à votre nom, et renouvelé automatiquement ? Un portfolio expiré efface des années de référencement.",
        ],
    ],

    'faq' => [
        ['q' => "Combien coûte un portfolio professionnel ?", 'r' => "Un portfolio soigné démarre autour de 150 000 à 300 000 FCFA selon le nombre de réalisations à présenter et le travail sur les visuels. C'est l'un des projets les plus accessibles, et souvent le plus rentable pour un indépendant."],
        ['q' => "Un profil LinkedIn ne suffit-il pas ?", 'r' => "LinkedIn vous impose son format, sa mise en page et ses limites, et ne vous appartient pas. Un portfolio sur votre propre domaine vous permet de présenter votre travail comme vous l'entendez, et reste accessible même si la plateforme change ses règles."],
        ['q' => "Combien de temps pour la mise en ligne ?", 'r' => "1 à 2 semaines en général. Le développement est court ; la sélection des réalisations et la rédaction des textes prennent l'essentiel du temps, et c'est là que se joue la qualité du résultat."],
        ['q' => "Puis-je ajouter des réalisations moi-même ?", 'r' => "Oui, via un espace d'administration simple. C'est indispensable : un portfolio qu'on ne peut pas mettre à jour soi-même cesse d'être à jour en quelques mois."],
        ['q' => "Faut-il un blog sur un portfolio ?", 'r' => "Seulement si vous comptez y écrire régulièrement. Un blog abandonné depuis deux ans nuit davantage qu'il ne sert : il donne l'image d'une activité arrêtée. Mieux vaut un portfolio sans blog qu'un blog dont le dernier article date. Si vous écrivez, même une fois par trimestre, alors oui : c'est ce qui vous rendra trouvable sur des sujets de métier et non seulement sur votre nom."],
        ['q' => "Combien de réalisations faut-il présenter ?", 'r' => "Entre six et dix pour la plupart des profils. En dessous, le visiteur manque d'éléments pour se décider ; au-delà, il ne les regarde pas toutes et l'ensemble se dilue. Le critère n'est pas la quantité mais la diversité : chaque réalisation retenue doit montrer quelque chose que les autres ne montrent pas."],
        ['q' => "Que faire si je débute et que j'ai peu de réalisations ?", 'r' => "Présentez des projets personnels, des travaux d'études ou des exercices menés à terme, en expliquant la démarche plutôt que le résultat. Un projet fictif bien documenté — le problème posé, les choix effectués, ce que vous en avez appris — démontre davantage qu'une liste de compétences déclarées sans preuve."],
        ['q' => "Mon portfolio sera-t-il trouvable sur Google ?", 'r' => "Sur votre nom, oui, assez rapidement. Sur des requêtes de métier, cela demande du contenu régulier et du temps. Pour un indépendant, être trouvable sur son nom est déjà l'essentiel : c'est ce que tape un prospect à qui l'on vous a recommandé."],
    ],
];
