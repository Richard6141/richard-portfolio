<?php
// ============================================================
// data/navigation.php · Registre de navigation (vague 0B, 03/10/2026).
// Alimente les méga-menus de l'en-tête, le tiroir mobile et le pied de page.
// Les liens visent des pages qui existent aujourd'hui ; navigation_chargee()
// les réécrit vers l'URL finale quand une redirection est active.
// Services : piliers de portfolio/data/services/ (vague 1A).
// ============================================================
declare(strict_types=1);

return [
    // Vague 1A : une carte par famille de piliers (REGISTRES_FAMILLES), six
    // liens au plus ; les autres piliers sont listés par le hub /services/.
    'services' => [
        'Sites et boutiques' => ['icone' => 'browser', 'liens' => [
            ['Site vitrine professionnel', '/services/site-vitrine-professionnel'],
            ['Création de site WordPress', '/services/creation-site-wordpress'],
            ['Site e-commerce', '/services/site-e-commerce'],
            ['Landing page', '/services/landing-page-haute-conversion'],
            ['Tunnel de vente', '/services/tunnel-de-vente'],
            ['Marketplace et e-learning', '/services/marketplace-et-plateforme-e-learning'],
        ]],
        'Applications et IA' => ['icone' => 'robot', 'liens' => [
            ['Application web sur mesure', '/services/application-web-sur-mesure'],
            ['Application mobile', '/services/application-mobile-android-ios'],
            ['Automatisation n8n et Make', '/services/automatisation-ia'],
            ['Agents IA et chatbot WhatsApp', '/services/agents-ia-chatbot-whatsapp'],
            ['Intégration de l\'IA', '/services/integration-ia-entreprise'],
            ['SaaS et espace client', '/services/saas-espace-client'],
        ]],
        'Visibilité et conseil' => ['icone' => 'trend-up', 'liens' => [
            ['Référencement naturel SEO', '/services/referencement-naturel-seo'],
            ['Référencement IA (GEO)', '/services/referencement-ia-geo'],
            ['Publicité Google et Facebook Ads', '/services/publicite-en-ligne-google-facebook-ads'],
            ['Audit SEO complet', '/services/audit-seo-complet'],
            ['Digitalisation d\'entreprise', '/services/digitalisation-d-entreprise'],
            ['Consultant en digitalisation', '/services/consultant-digitalisation'],
        ]],
        'ERP et gestion' => ['icone' => 'stack', 'liens' => [
            ['Intégration Odoo', '/services/integration-odoo'],
            ['Intégration Dolibarr', '/services/integration-dolibarr'],
            ['Réservation en ligne', '/services/systeme-de-reservation-en-ligne'],
            ['Audit et étude de projet', '/services/audit-etude-de-projet'],
        ]],
    ],

    'formations' => [
        // Vague 1B : quatre cartes vers les fiches fortes du catalogue (spec 6.3), les autres via « Toutes les formations ».
        'Intelligence artificielle' => ['icone' => 'brain', 'liens' => [
            ['IA en entreprise', '/formations/ia-en-entreprise'],
            ['IA générative pour dirigeants', '/formations/ia-generative-dirigeants'],
            ['IA pour comptables (SYSCOHADA)', '/formations/ia-comptables-syscohada'],
            ['IA et droit OHADA', '/formations/ia-droit-ohada'],
            ['Intégrer l\'IA dans ses logiciels', '/formations/integrer-ia-logiciels-existants'],
            ['Gouverner l\'IA', '/formations/gouvernance-ia'],
        ]],
        'Automatisation et développement' => ['icone' => 'robot', 'liens' => [
            ['n8n de zéro à l\'autonomie', '/formations/n8n'],
            ['WhatsApp Business pour vendre', '/formations/whatsapp-business'],
            ['WhatsApp relié aux ERP et au CRM', '/formations/whatsapp-odoo-dolibarr-crm'],
            ['Vibecoding', '/formations/vibecoding'],
            ['Développement web', '/formations/developpement-web'],
        ]],
        'ERP et gestion' => ['icone' => 'stack', 'liens' => [
            ['Odoo pour vos équipes', '/formations/odoo-utilisateurs'],
            ['Odoo comptabilité SYSCOHADA', '/formations/odoo-comptabilite-syscohada'],
            ['Odoo et IA', '/formations/odoo-ia'],
            ['Dolibarr pour vos équipes', '/formations/dolibarr-utilisateurs'],
            ['Excel et Google Sheets', '/formations/excel-google-sheets'],
        ]],
        'Visibilité et transformation' => ['icone' => 'megaphone', 'liens' => [
            ['Visibilité Google', '/formations/visibilite-google'],
            ['Référencement IA (GEO)', '/formations/referencement-ia-geo'],
            ['Marketing digital B2B', '/formations/marketing-digital-b2b'],
            ['Vendre en ligne', '/formations/e-commerce'],
            ['Stratégie de transformation digitale', '/formations/strategie-transformation-digitale'],
            ['Cybersécurité pour les employés', '/formations/cybersecurite-employes'],
        ]],
    ],

    'pays' => [
        'Afrique francophone' => [
            ['nom' => 'Bénin', 'iso' => 'BJ', 'villes' => 'Cotonou, Parakou', 'url' => '/developpeur-web-cotonou'],
            ['nom' => 'Côte d\'Ivoire', 'iso' => 'CI', 'villes' => 'Abidjan', 'url' => '/developpeur-web-abidjan'],
            ['nom' => 'Sénégal', 'iso' => 'SN', 'villes' => 'Dakar', 'url' => '/developpeur-web-dakar'],
            ['nom' => 'Togo', 'iso' => 'TG', 'villes' => 'Lomé', 'url' => '/developpeur-web-lome'],
        ],
        'Europe et Canada' => [
            ['nom' => 'France', 'iso' => 'FR', 'villes' => 'Paris, Lyon', 'url' => '/externaliser-developpement-web-paris'],
            ['nom' => 'Belgique', 'iso' => 'BE', 'villes' => 'Bruxelles', 'url' => '/externaliser-developpement-web-bruxelles'],
            ['nom' => 'Suisse', 'iso' => 'CH', 'villes' => 'Genève, Lausanne', 'url' => '/externaliser-developpement-web-geneve'],
            ['nom' => 'Canada', 'iso' => 'CA', 'villes' => 'Montréal, Québec', 'url' => '/externaliser-developpement-web-montreal'],
        ],
    ],

    'carte_cta' => [
        'eyebrow' => 'Premier échange gratuit',
        'titre'   => 'Un projet, une formation, une question ?',
        'texte'   => 'Décrivez votre besoin : réponse sous ' . fait('delai_reponse') . ' et devis détaillé après un cadrage gratuit.',
        'bouton'  => 'Demander un devis',
        'url'     => '/contact',
    ],
];
