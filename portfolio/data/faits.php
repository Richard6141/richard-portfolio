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
    'description_courte' => 'Consultant en digitalisation au Bénin : création de site, applications, automatisation, IA, Odoo, Dolibarr et formations pour l’Afrique et l’Europe.',

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
    // Chiffres donnés par Richard dans le questionnaire du 03/10/2026.
    'projets_livres'    => '50+',
    'clients'           => '100+',
    'personnes_formees' => '200+',

    // Pays où Richard a réellement travaillé, sur place ou à distance
    // (questionnaire du 03/10/2026). Distinct de « zones », la zone servie.
    'pays_travailles' => [
        'Bénin', 'Côte d\'Ivoire', 'Togo', 'Sénégal', 'Burkina Faso', 'Mali', 'Niger', 'Cameroun', 'Tchad',
        'Gabon', 'RD Congo', 'France', 'Belgique', 'Suisse', 'Canada',
    ],

    'formation' => ['nom' => 'EPITECH', 'url' => 'https://epitech.africa/ecole-informatique-cotonou/', 'annee' => 2022],
    'langues'   => ['fr' => 'Français', 'en' => 'Anglais'],

    'competences' => [
        'Création de sites web',
        'Création de sites WordPress et de boutiques en ligne',
        'Publicité en ligne : Google Ads et Facebook Ads',
        'Tunnels de vente en ligne',
        'Marketplaces et plateformes e-learning',
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
        'https://www.instagram.com/richard.salanon',
        // Fiche Google Business Profile (identifiant du Knowledge Graph).
        'https://www.google.com/search?kgmid=/g/11njzjmv6s',
        // Élément Wikidata créé le 24/10/2026.
        'https://www.wikidata.org/wiki/Q141830104',
    ],

    'produits' => [
        ['nom' => 'Wapy', 'url' => 'https://wapy.pro', 'description' => 'Assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone.'],
    ],
    // Co-fondation déclarée par Richard le 03/10/2026.
    'affiliations' => [
        ['nom' => 'Audyxa', 'url' => 'https://audyxa.com', 'role' => 'Co-fondateur', 'description' => 'cabinet de formation et de transformation digitale'],
        // Plateforme de formation d'Audyxa, ajoutée à la demande de Richard le 30/10/2026.
        ['nom' => 'Audyxa Formation', 'url' => 'https://formation.audyxa.com', 'role' => 'Co-fondateur', 'description' => 'plateforme de formation d\'Audyxa'],
    ],

    'paiements'     => ['Mobile Money (MTN, Moov)', 'carte bancaire', 'PayPal', 'virement', 'espèces'],
    'delais'        => ['Site vitrine' => '1 à 3 semaines', 'Application sur mesure' => '1 à 3 mois'],
    // Confirmé par Richard le 03/10/2026 (« Réponse sous 24h, oui »).
    'delai_reponse' => '24 heures',
    // Confirmé par Richard le 28/10/2026 : le devis est gratuit. Seul le devis l'est :
    // ne pas en déduire la gratuité du cadrage, d'une séance d'essai ni d'une visite.
    'devis_gratuit' => true,
    'tarifs_depart' => ['Landing page' => '150 000 FCFA', 'Site vitrine' => '300 000 FCFA', 'Référencement naturel' => '75 000 FCFA'],

    // Horaires publiés depuis le 20/08/2026 (à aligner sur la fiche Google Business).
    'horaires' => ['jours' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'], 'ouverture' => '07:00', 'fermeture' => '20:00'],

    // Portrait fourni par Richard le 03/10/2026 (vague 0B).
    'photo'    => '/assets/img/richard-salanon-800.webp',
    'photo_og' => '/assets/img/richard-salanon-og.jpg',

    // Mentions légales (questionnaire du 03/10/2026). RCCM : non communiqué.
    'statut' => 'Auto-entrepreneur',
    'ifu'    => '0202348994221',

    // Zones servies : les 34 pays de la spec (6.4), dans l'ordre des tranches.
    'zones' => [
        'Bénin', 'Côte d\'Ivoire', 'Sénégal', 'Togo', 'Cameroun',
        'Burkina Faso', 'Mali', 'Niger', 'Guinée', 'Gabon', 'Congo-Brazzaville', 'RD Congo',
        'France', 'Belgique', 'Suisse', 'Canada', 'Luxembourg', 'Monaco',
        'Maroc', 'Tunisie', 'Algérie', 'Madagascar', 'Mauritanie', 'Tchad', 'Centrafrique',
        'Rwanda', 'Burundi', 'Djibouti', 'Comores', 'Maurice', 'Seychelles', 'Guinée équatoriale', 'Cap-Vert', 'São Tomé-et-Príncipe',
    ],
];