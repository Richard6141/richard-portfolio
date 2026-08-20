<?php
// Cotonou — digitalisation. Secteur dominant retenu : import-export et
// logistique portuaire, tel que declare dans data/villes/cotonou.php.
declare(strict_types=1);

return [
    'ville'      => 'Cotonou',
    'ville_slug' => 'cotonou',
    'pays'       => 'Bénin',

    'pilier' => [
        'slug'     => 'digitalisation-entreprise-cotonou',
        'titre'    => "Digitalisation d'entreprise à Cotonou",
        'accroche' => "Passer du cahier et de WhatsApp à des outils qui tiennent quand l'activité monte.",
        'intro'    => "À Cotonou, la plupart des entreprises que je rencontre ne partent pas de zéro : elles ont déjà un téléphone qui sonne, des commandes qui rentrent et un carnet qui déborde. Le problème n'est pas l'absence d'outils, c'est qu'ils ne se parlent pas. Les commandes arrivent sur WhatsApp, le stock vit dans un cahier, les factures se font sur Word et la comptabilité se reconstitue en fin de mois. Digitaliser, ici, ce n'est pas tout remplacer : c'est relier ce qui existe déjà et supprimer les doubles saisies.",
        'signaux'  => [
            "La même information est saisie deux ou trois fois : sur WhatsApp, dans le cahier, puis dans le tableur.",
            "Personne ne sait dire le stock exact sans aller compter physiquement.",
            "Quand un employé est absent, une partie de l'activité s'arrête parce que l'information est dans sa tête ou dans son téléphone.",
            "Les relances clients se font de mémoire, donc certaines n'ont jamais lieu.",
            "Le chiffre d'affaires réel du mois n'est connu qu'après plusieurs jours de reconstitution.",
        ],
        'etapes' => [
            ['titre' => "Cadrer sur le terrain, pas sur le papier", 'texte' => "On suit une commande de bout en bout, telle qu'elle se passe vraiment aujourd'hui : qui la reçoit, où elle est notée, qui prépare, qui facture, qui encaisse. C'est presque toujours à ce moment qu'on découvre les deux ou trois points qui coûtent le plus de temps — et ce ne sont jamais ceux qu'on imaginait."],
            ['titre' => "Traiter d'abord le point le plus douloureux", 'texte' => "Un seul chantier à la fois, choisi parce qu'il fait gagner du temps dès la première semaine. Le plus souvent à Cotonou : le suivi de stock ou la facturation. On mesure le gain avant de passer à la suite."],
            ['titre' => "Relier au lieu de remplacer", 'texte' => "WhatsApp reste le canal client, parce que c'est là que sont vos clients. Mais ce qui y transite alimente automatiquement le stock et les factures. On garde les habitudes, on supprime la ressaisie."],
            ['titre' => "Former l'équipe pendant, pas après", 'texte' => "Un outil que l'équipe n'utilise pas est un outil perdu. La prise en main se fait sur les vraies commandes, pendant le développement, pas dans une session de formation en fin de projet."],
        ],
        'budget'  => "À Cotonou, une première étape utile — facturation ou suivi de stock, formation comprise — se situe généralement entre 300 000 et 900 000 FCFA selon la complexité. Une plateforme métier complète dépasse ce cadre. Je découpe volontairement en chantiers successifs : vous mesurez le retour avant d'engager la suite.",
        'delais'  => "Un premier chantier utile est livré en 2 à 5 semaines. Une digitalisation complète s'étale sur plusieurs mois, par paliers, sans jamais arrêter l'activité.",
        'faq' => [
            ['q' => "Faut-il abandonner WhatsApp ?", 'r' => "Non, et ce serait une erreur. Vos clients y sont, ils y resteront. L'objectif est que ce qui arrive sur WhatsApp alimente automatiquement vos outils, au lieu d'être recopié à la main."],
            ['q' => "Mon équipe n'est pas à l'aise avec l'informatique.", 'r' => "C'est la situation la plus fréquente, et c'est un critère de conception, pas un obstacle. Un outil pensé pour une équipe peu à l'aise est plus simple pour tout le monde : moins de champs, moins d'écrans, des libellés en français courant."],
            ['q' => "Par où commencer avec un petit budget ?", 'r' => "Par le point qui vous fait perdre le plus de temps chaque semaine. Souvent la facturation ou le suivi de stock. Un chantier ciblé coûte moins cher qu'une refonte et se rentabilise plus vite."],
            ['q' => "Et si l'activité change dans un an ?", 'r' => "C'est prévu dès le cadrage : on choisit des outils qu'on peut faire évoluer, et vous restez propriétaire des données. Une digitalisation qui vous enferme est une digitalisation ratée."],
        ],
    ],

    'secteur' => [
        'slug'     => 'digitaliser-import-export-cotonou',
        'nom'      => "import-export et logistique",
        'titre'    => "Digitaliser une activité d'import-export à Cotonou",
        'accroche' => "Suivre les conteneurs, les frais et les échéances sans reconstituer le dossier à chaque appel.",
        'intro'    => "Le port de Cotonou concentre l'essentiel des flux de marchandises du pays et dessert aussi le Niger et le Burkina Faso. Les entreprises d'import-export qui y travaillent gèrent des dossiers longs : commande fournisseur, transit maritime, dédouanement, magasinage, livraison. Chaque étape produit des documents et des frais. Quand tout cela vit dans des e-mails, des classeurs et la mémoire du responsable transit, un simple appel client oblige à reconstituer le dossier.",
        'flux' => [
            "Commande fournisseur et proforma",
            "Suivi du transit et date d'arrivée estimée",
            "Documents douaniers et connaissement",
            "Frais réels par dossier : fret, douane, magasinage, transport",
            "Livraison, facturation et encaissement",
        ],
        'douleurs' => [
            ['titre' => "Le coût de revient réel se calcule trop tard", 'texte' => "Les frais arrivent en ordre dispersé sur plusieurs semaines. Beaucoup d'entreprises ne connaissent la marge réelle d'un conteneur qu'une fois tout payé — parfois après avoir déjà revendu à un prix fixé au jugé."],
            ['titre' => "L'état d'un dossier n'est pas partageable", 'texte' => "Quand le client appelle pour savoir où en est sa marchandise, il faut chercher dans les e-mails et rappeler le transitaire. L'information existe, elle n'est simplement rassemblée nulle part."],
            ['titre' => "Les échéances se rappellent de mémoire", 'texte' => "Fin de franchise de magasinage, validité d'un document, délai de paiement fournisseur : les oublis coûtent cher et se répètent."],
        ],
        'solution' => [
            ['titre' => "Un dossier par conteneur, accessible à toute l'équipe", 'texte' => "Un écran unique qui rassemble le statut, les documents, les frais engagés et les dates clés. Répondre à un client redevient immédiat, y compris pour quelqu'un qui n'a pas suivi le dossier."],
            ['titre' => "Le coût de revient qui se met à jour tout seul", 'texte' => "Chaque frais saisi alimente le calcul. La marge se lit en continu, pas trois semaines après la vente."],
            ['titre' => "Des alertes sur les échéances", 'texte' => "Fin de franchise, documents à renouveler, paiements à venir : une alerte automatique par WhatsApp ou e-mail, plutôt qu'un pense-bête."],
            ['titre' => "Un suivi client sans appel", 'texte' => "Un lien de suivi que le client consulte lui-même. Moins d'appels entrants pour votre équipe, et une image plus professionnelle face aux confrères."],
        ],
        'faq' => [
            ['q' => "Faut-il remplacer le logiciel du transitaire ?", 'r' => "Non. Votre outil sert votre propre suivi commercial et financier, que le transitaire ne couvre pas. Quand une passerelle est possible, on l'ajoute ; sinon la saisie reste minime."],
            ['q' => "Combien de temps pour un premier outil utile ?", 'r' => "Le suivi de dossiers avec calcul du coût de revient se livre généralement en 4 à 8 semaines, selon le nombre d'intervenants et de types de frais."],
            ['q' => "Et si nous travaillons aussi vers le Niger et le Burkina ?", 'r' => "C'est prévu : les dossiers portent leur destination, et les frais de transport terrestre entrent dans le coût de revient au même titre que le fret maritime."],
        ],
    ],
];
