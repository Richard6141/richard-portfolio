<?php
// Politique de confidentialité (vague 0C). Exception à la règle des 3 200 mots : noindex, follow (spec 7.2).
declare(strict_types=1);

return [
    'titre'   => 'Confidentialité et données personnelles',
    'title'   => 'Confidentialité et données personnelles | Richard SALANON',
    'meta'    => 'Données collectées, mesure d\'audience, durées de conservation et droits des visiteurs du site richardsalanon.com, édité par Richard SALANON.',
    'en_bref' => 'Le site ne crée aucun compte et ne vend aucune donnée. Il reçoit les messages que vous envoyez et mesure son audience avec Google Analytics et Microsoft Clarity ; vous pouvez exercer vos droits à tout moment en écrivant à ' . fait('email') . '.',
    'publie'  => '2026-10-03',
    'maj'     => '2026-10-03',
    'robots'  => 'noindex',
    'schema'  => 'WebPage',
    'sections' => [
        ['type' => 'prose', 'titre' => 'Qui est responsable de vos données ?', 'paragraphes' => [
            'Le responsable du traitement est <strong>' . fait('nom') . '</strong>, entrepreneur individuel établi à ' . fait('ville') . ', ' . fait('pays') . '. Pour toute question sur vos données : <a href="mailto:' . fait('email') . '">' . fait('email') . '</a>.',
        ]],
        ['type' => 'prose', 'titre' => 'Quelles données sont collectées ?', 'paragraphes' => [
            'Les messages que vous envoyez par e-mail, par WhatsApp ou par téléphone : votre nom, vos coordonnées et le contenu de votre demande. Ces informations ne servent qu\'à vous répondre et à suivre votre projet.',
            'Si vous utilisez le formulaire de contact du site, votre nom, votre adresse électronique, votre téléphone, l\'objet et le texte de votre message, ainsi que l\'adresse IP depuis laquelle il est envoyé, sont enregistrés dans la base de données du site pour traiter votre demande et prévenir les envois abusifs ; ils suivent la durée de conservation des échanges commerciaux indiquée plus bas.',
            'Les journaux techniques de l\'hébergeur (adresse IP, date, page demandée), conservés par Hostinger pour la sécurité et le bon fonctionnement du site.',
            'Des statistiques de visite, décrites dans la section suivante. Le site ne propose aucun compte utilisateur et aucune donnée n\'est vendue ni louée.',
        ]],
        ['type' => 'prose', 'titre' => 'Quels outils mesurent l\'audience ?', 'paragraphes' => [
            'Le site utilise <strong>Google Analytics 4</strong> (Google) et <strong>Microsoft Clarity</strong> (Microsoft). Ces outils déposent des cookies de mesure pour compter les visites, connaître les pages consultées et comprendre comment le site est utilisé, afin de l\'améliorer.',
            'Ces services peuvent traiter des données en dehors du Bénin, notamment aux États-Unis ; leurs durées de conservation suivent leurs propres réglages. Vous pouvez refuser ces cookies en les bloquant dans votre navigateur ou en installant le <a href="https://tools.google.com/dlpage/gaoptout">module officiel de désactivation de Google Analytics</a>.',
        ]],
        ['type' => 'prose', 'titre' => 'Combien de temps sont-elles gardées ?', 'paragraphes' => [
            'Les échanges commerciaux sont conservés tant que la relation est active, puis trois ans au plus après le dernier contact, sauf obligation légale de conservation plus longue, par exemple pour les factures.',
        ]],
        ['type' => 'prose', 'titre' => 'Quels sont vos droits ?', 'paragraphes' => [
            'Vous pouvez demander l\'accès à vos données, leur rectification, leur effacement, la limitation de leur traitement ou vous y opposer, au titre de la loi n° 2017-20 du 20 avril 2018 portant code du numérique en République du Bénin et, si vous résidez dans l\'Union européenne, du règlement général sur la protection des données (RGPD).',
            'Écrivez à <a href="mailto:' . fait('email') . '">' . fait('email') . '</a> : une réponse vous est apportée dans un délai d\'un mois. Vous pouvez aussi adresser une réclamation à l\'Autorité de protection des données personnelles du Bénin (<a href="https://apdp.bj">APDP</a>) ou à l\'autorité de votre pays, la CNIL en France.',
        ]],
    ],
    'faq'     => [],
    'sources' => [
        ['titre' => 'Loi n° 2017-20 du 20 avril 2018 portant code du numérique en République du Bénin', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-03'],
        ['titre' => 'Autorité de protection des données personnelles du Bénin (APDP)', 'url' => 'https://apdp.bj', 'date' => '2026-10-03'],
        ['titre' => 'Google Analytics, module de désactivation', 'url' => 'https://tools.google.com/dlpage/gaoptout', 'date' => '2026-10-03'],
    ],
    'liens'   => [],
];
