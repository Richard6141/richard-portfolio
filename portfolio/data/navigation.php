<?php
// ============================================================
// data/navigation.php · Registre de navigation (vague 0B, 03/10/2026).
// Alimente les méga-menus de l'en-tête, le tiroir mobile et le pied de page.
// Les liens visent des pages qui existent aujourd'hui ; la vague 0C les
// réoriente vers les nouvelles pages (piliers, fiches formation, pays).
// Les slugs de services sont ceux de la base (generateSlug du titre).
// ============================================================
declare(strict_types=1);

return [
    'services' => [
        'Sites et boutiques' => ['icone' => 'browser', 'liens' => [
            ['Site vitrine professionnel', '/services/site-vitrine-professionnel'],
            ['Site e-commerce', '/services/site-e-commerce'],
            ['Landing page', '/services/landing-page-haute-conversion'],
            ['Refonte et migration', '/services/refonte-migration-de-site'],
            ['Maintenance et support', '/services/maintenance-support'],
        ]],
        'Applications et IA' => ['icone' => 'robot', 'liens' => [
            ['Automatisation et IA', '/services/automatisation-ia'],
            ['Application web sur mesure', '/services/application-web-sur-mesure'],
            ['Application mobile', '/services/application-mobile-android-ios'],
            ['SaaS et espace client', '/services/saas-espace-client'],
            ['API et intégrations', '/services/api-rest-integrations'],
        ]],
        'Visibilité et conseil' => ['icone' => 'trend-up', 'liens' => [
            ['Référencement naturel SEO', '/services/referencement-naturel-seo'],
            ['SEO local et Google Business', '/services/seo-local-google-business'],
            ['Audit SEO complet', '/services/audit-seo-complet'],
            ['Digitalisation d\'entreprise', '/services/digitalisation-d-entreprise'],
            ['Consultant en digitalisation', '/consultant-digitalisation'],
        ]],
        'ERP et gestion' => ['icone' => 'stack', 'liens' => [
            ['Intégration Odoo', '/integration-odoo-cotonou'],
            ['Intégration Dolibarr', '/integration-dolibarr-cotonou'],
            ['Audit et étude de projet', '/services/audit-etude-de-projet'],
            ['Réservation en ligne', '/services/systeme-de-reservation-en-ligne'],
        ]],
    ],

    'formations' => [
        'Intelligence artificielle' => ['icone' => 'brain', 'liens' => [
            ['IA en entreprise', '/formation-ia-entreprise'],
            ['Vibecoding', '/formation-vibecoding'],
            ['Automatisation n8n et Make', '/formation-automatisation'],
        ]],
        'Outils de gestion' => ['icone' => 'stack', 'liens' => [
            ['Odoo pour vos équipes', '/formation-odoo'],
            ['Dolibarr pour vos équipes', '/formation-dolibarr'],
            ['Outils numériques et bureautique', '/formation-outils-numeriques'],
        ]],
        'Web et visibilité' => ['icone' => 'megaphone', 'liens' => [
            ['Développement web', '/formation-developpement-web'],
            ['WhatsApp Business', '/formation-whatsapp-business'],
            ['Visibilité Google', '/formation-seo-visibilite-google'],
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
