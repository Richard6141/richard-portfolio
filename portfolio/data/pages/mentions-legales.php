<?php
// Mentions légales (vague 0C). Exception à la règle des 3 200 mots : noindex, follow (spec 7.2).
declare(strict_types=1);

return [
    'titre'   => 'Mentions légales',
    'title'   => 'Mentions légales de richardsalanon.com | Richard SALANON',
    'meta'    => 'Éditeur, hébergeur, propriété des contenus et droit applicable du site richardsalanon.com, édité par Richard SALANON, entrepreneur à Cotonou.',
    'en_bref' => 'Le site richardsalanon.com est édité par ' . fait('nom') . ', entrepreneur individuel établi à ' . fait('ville') . ' (' . fait('pays') . '), et hébergé par Hostinger International Limited.',
    'publie'  => '2026-10-03',
    'maj'     => '2026-10-03',
    'robots'  => 'noindex',
    'schema'  => 'WebPage',
    'sections' => [
        ['type' => 'prose', 'titre' => 'Qui édite ce site ?', 'paragraphes' => [
            'Le site richardsalanon.com est édité par <strong>' . fait('nom') . '</strong>, ' . mb_strtolower(fait('intitule')) . ', exerçant sous le statut d\'' . mb_strtolower(fait('statut')) . ' à ' . fait('ville') . ', ' . fait('pays') . '.',
            'Identifiant fiscal unique (IFU) : ' . fait('ifu') . '. Adresse électronique : <a href="mailto:' . fait('email') . '">' . fait('email') . '</a>. Téléphone et WhatsApp : ' . fait('telephone') . '.',
            'Directeur de la publication : ' . fait('nom') . '.',
        ]],
        ['type' => 'prose', 'titre' => 'Qui héberge ce site ?', 'paragraphes' => [
            'Le site est hébergé par <strong>Hostinger International Limited</strong>, société de droit chypriote, 61 Lordou Vironos str., 6023 Larnaca, Chypre (<a href="https://www.hostinger.com">www.hostinger.com</a>).',
        ]],
        ['type' => 'prose', 'titre' => 'À qui appartiennent les contenus ?', 'paragraphes' => [
            'Les textes, illustrations, photographies et le logo du site sont la propriété de ' . fait('nom') . ', sauf mention contraire. Toute reproduction ou réutilisation, totale ou partielle, demande une autorisation écrite préalable.',
            'Les noms et logos des clients présentés appartiennent à leurs titulaires ; ils figurent ici pour illustrer des projets réellement réalisés. Une citation courte d\'un contenu du site est permise si elle mentionne sa source avec un lien vers la page citée.',
        ]],
        ['type' => 'prose', 'titre' => 'Comment sont traitées vos données ?', 'paragraphes' => [
            'Le traitement des données personnelles et la mesure d\'audience sont décrits dans la <a href="/confidentialite">politique de confidentialité</a>.',
        ]],
        ['type' => 'prose', 'titre' => 'Quel droit s\'applique ?', 'paragraphes' => [
            'Le site et ses mentions relèvent du droit béninois, notamment de la loi n° 2017-20 du 20 avril 2018 portant code du numérique en République du Bénin. Tout litige relève des juridictions compétentes de Cotonou, sauf disposition impérative contraire.',
        ]],
        ['type' => 'prose', 'titre' => 'Comment signaler un contenu ?', 'paragraphes' => [
            'Pour signaler une erreur, un contenu illicite ou demander un retrait, écrivez à <a href="mailto:' . fait('email') . '">' . fait('email') . '</a> en précisant l\'adresse de la page concernée.',
        ]],
    ],
    'faq'     => [],
    'sources' => [
        ['titre' => 'Hostinger, conditions générales (entité contractante)', 'url' => 'https://www.hostinger.com/legal/universal-terms-of-service-agreement', 'date' => '2026-10-03'],
        ['titre' => 'Loi n° 2017-20 du 20 avril 2018 portant code du numérique en République du Bénin', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-03'],
    ],
    'liens'   => [],
];
