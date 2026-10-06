<?php
// Politique de confidentialité (vague 0C). Exception à la règle des 3 200 mots : noindex, follow (spec 7.2).
declare(strict_types=1);

return [
    'titre'   => 'Confidentialité et données personnelles',
    'title'   => 'Confidentialité et données personnelles | Richard SALANON',
    'meta'    => 'Données collectées, mesure d\'audience, durées de conservation et droits des visiteurs du site richardsalanon.com, édité par Richard SALANON.',
    'en_bref' => 'Le site ne crée aucun compte et ne vend aucune donnée. Il reçoit les messages que vous envoyez et ne mesure son audience avec Google Analytics et Microsoft Clarity que si vous l\'acceptez ; vous pouvez exercer vos droits à tout moment en écrivant à ' . fait('email') . '.',
    'publie'  => '2026-10-03',
    'maj'     => '2026-10-06',
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
            'Le site mesure son audience avec <strong>Google Analytics 4</strong> (Google) et <strong>Microsoft Clarity</strong> (Microsoft), seulement si vous l\'acceptez dans le bandeau affiché lors de votre première visite. Ces outils déposent alors des cookies de mesure pour compter les visites, connaître les pages consultées et comprendre comment le site est utilisé, afin de l\'améliorer ; Clarity en tire aussi des cartes de chaleur et des enregistrements de navigation (défilement, clics). Le site leur indique que vos données ne doivent servir à aucune publicité.',
            'Tant que vous n\'avez pas choisi, ou si vous refusez, aucun de ces outils n\'est chargé et aucun cookie de mesure n\'est déposé. Votre choix est gardé 6 mois dans un cookie nommé <code>consentement_mesure</code>, puis le bandeau vous est proposé de nouveau. Vous pouvez changer d\'avis à tout moment avec le bouton « Cookies » en bas de chaque page : un refus efface les cookies de Google Analytics et de Clarity déjà déposés.',
            'Les cookies de Google Analytics sont réglés pour durer 13 mois au plus. Google conserve les données détaillées de mesure 2 ou 14 mois selon le réglage de la propriété, et Microsoft conserve les enregistrements de Clarity 30 jours. Ces services peuvent traiter des données en dehors du Bénin, notamment aux États-Unis.',
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
        ['titre' => 'CNIL, cookies et autres traceurs : que dit la loi ?', 'url' => 'https://www.cnil.fr/fr/cookies-et-autres-traceurs/regles/cookies/que-dit-la-loi', 'date' => '2026-10-06'],
        ['titre' => 'Aide Google Analytics, conservation des données', 'url' => 'https://support.google.com/analytics/answer/7667196?hl=fr', 'date' => '2026-10-06'],
        ['titre' => 'Microsoft Learn, mode Consentement de Clarity', 'url' => 'https://learn.microsoft.com/fr-fr/clarity/setup-and-installation/consent-mode', 'date' => '2026-10-06'],
        ['titre' => 'Microsoft Learn, questions fréquentes sur Clarity', 'url' => 'https://learn.microsoft.com/fr-fr/clarity/faq', 'date' => '2026-10-06'],
    ],
    'liens'   => [],
];
