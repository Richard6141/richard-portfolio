<?php
// ============================================================
// data/faits.php · Fiche de faits de l'entité « Richard SALANON ».
// Créée le 03/10/2026 (vague 0A, spec 5.1). Source unique : ne jamais
// recopier ces valeurs ailleurs, les lire avec faits() ou fait().
// Valeur inconnue = null : elle n'est ni affichée ni mise dans le schéma.
// Les valeurs marquées « à valider » attendent le questionnaire de Richard
// (docs/questionnaire-refonte.md) ; elles reprennent ce que le site
// publiait déjà au 03/10/2026.
// ============================================================
declare(strict_types=1);

return [
    'nom'         => 'Richard SALANON',
    'prenom'      => 'Richard',
    'nom_famille' => 'SALANON',
    'intitule'    => 'Consultant en digitalisation et développement logiciel',

    // Phrase d'entité : reprise à l'identique sur l'accueil, l'à-propos,
    // les pages pays et dans llms.txt (spec 5.5, règle 5).
    'phrase_entite' => 'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
    'description_courte' => 'Consultant en digitalisation et développeur logiciel au Bénin : sites, applications, automatisation, IA, Odoo, Dolibarr et formations, Afrique et Europe.',

    // Richard vit à Cotonou depuis son déménagement (signalé le 03/10/2026) ;
    // le tableau de bord indiquait encore Abomey-Calavi. Les gabarits lisent
    // cette valeur, plus contact_info.city.
    'ville'         => 'Cotonou',
    'agglomeration' => 'Cotonou',
    'pays'          => 'Bénin',
    'pays_code'     => 'BJ',

    'email'     => 'richardsomasse@gmail.com',
    'telephone' => '+2290161413177',
    'whatsapp'  => '2290161413177',

    // « Plus de six ans », confirmé par Richard le 20/08/2026.
    'experience_ans'    => 6,
    'projets_livres'    => null, // à valider
    'clients'           => null, // à valider
    'personnes_formees' => null, // à valider

    'formation' => ['nom' => 'EPITECH', 'url' => 'https://www.epitech.eu'],
    'langues'   => ['fr' => 'Français', 'en' => 'Anglais'],

    'competences' => [
        'Création de sites web',
        'Développement d\'applications web sur mesure',
        'Développement d\'applications mobiles Android et iOS',
        'Référencement naturel (SEO)',
        'Référencement IA (GEO)',
        'Automatisation avec n8n et Make',
        'Intelligence artificielle en entreprise',
        'Agents IA et chatbots WhatsApp',
        'Intégration de l\'IA dans les logiciels existants',
        'Odoo',
        'Dolibarr',
        'OHADA et SYSCOHADA dans les ERP',
        'Digitalisation d\'entreprise',
        'Vibe coding',
        'Formation professionnelle au numérique et à l\'IA',
    ],

    // Profils vérifiables uniquement (spec 5.3). Liste reprise du site au 03/10/2026.
    'profils' => [
        'https://www.linkedin.com/in/richard-salanon/',
        'https://github.com/Richard6141',
        'https://facebook.com/somasse.richard.salanon',
    ],

    'produits' => [
        ['nom' => 'Wapy', 'url' => 'https://wapy.pro', 'description' => 'Assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone.'],
    ],
    // Co-fondation déclarée par Richard le 03/10/2026.
    'affiliations' => [
        ['nom' => 'Audyxa', 'url' => 'https://audyxa.com', 'role' => 'Co-fondateur'],
    ],

    'paiements'     => ['Mobile Money (MTN, Moov)', 'carte bancaire', 'PayPal', 'virement', 'espèces'],
    'delais'        => ['Site vitrine' => '1 à 3 semaines', 'Application sur mesure' => '1 à 3 mois'],
    'tarifs_depart' => ['Landing page' => '150 000 FCFA', 'Site vitrine' => '300 000 FCFA', 'Référencement naturel' => '75 000 FCFA'],

    // Horaires publiés depuis le 20/08/2026 (à aligner sur la fiche Google Business).
    'horaires' => ['jours' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'], 'ouverture' => '07:00', 'fermeture' => '20:00'],

    'photo' => null, // portrait définitif posé en vague 0B

    // Zones servies : les 34 pays de la spec (6.4), dans l'ordre des tranches.
    'zones' => [
        'Bénin', 'Côte d\'Ivoire', 'Sénégal', 'Togo', 'Cameroun',
        'Burkina Faso', 'Mali', 'Niger', 'Guinée', 'Gabon', 'Congo-Brazzaville', 'RD Congo',
        'France', 'Belgique', 'Suisse', 'Canada', 'Luxembourg', 'Monaco',
        'Maroc', 'Tunisie', 'Algérie', 'Madagascar', 'Mauritanie', 'Tchad', 'Centrafrique',
        'Rwanda', 'Burundi', 'Djibouti', 'Comores', 'Maurice', 'Seychelles', 'Guinée équatoriale', 'Cap-Vert', 'São Tomé-et-Príncipe',
    ],
];
