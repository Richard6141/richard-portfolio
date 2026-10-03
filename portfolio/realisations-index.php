<?php
// ============================================================
// realisations-index.php · Index des réalisations (URL /realisations/)
//
// Créé le 20/08/2026 (les projets n'avaient aucune page indexable). Refait le
// 03/10/2026 à la demande de Richard : une grille unique filtrable, des visuels
// de remplacement pour les projets sans capture et ses projets clients
// (data/projets-clients.php). La base devient facultative : sans elle, la page
// montre encore les projets clients au lieu d'une erreur 503.
// Vue : templates/realisations.php.
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';
require_once __DIR__ . '/../helpers/blocs.php';

$reaUrl = SITE_URL . '/realisations/';

$projets = [];
if ($pdo !== null) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM projects WHERE user_id = ? AND status IN ('published', 'archived') ORDER BY is_featured DESC, sort_order ASC");
        $stmt->execute([$userId]);
        $projets = $stmt->fetchAll();
    } catch (\Throwable $e) {
        error_log('realisations : ' . $e->getMessage());
    }
}
$clientsProjets = require __DIR__ . '/data/projets-clients.php';
$logos = [];
foreach ((array) json_decode((string) @file_get_contents(__DIR__ . '/../assets/img/clients/clients.json'), true) as $l) {
    $logos[$l['slug']] = $l;
}

$pageTitle     = 'Réalisations web, mobile et logiciels | ' . fait('nom');
$pageDesc      = 'Web TV, boutiques avec paiement mobile money, logiciels de gestion, API et refontes : des projets réels livrés au Bénin, en Côte d\'Ivoire et en Europe.';
$pageCanonical = $reaUrl;

$pos = 0;
$pageSchemas = [
    [
        '@type'       => 'CollectionPage',
        '@id'         => $reaUrl . '#collection',
        'url'         => $reaUrl,
        'name'        => $pageTitle,
        'description' => $pageDesc,
        'inLanguage'  => 'fr',
        'isPartOf'    => ['@id' => SITE_URL . '/#website'],
        'about'       => ['@id' => SITE_URL . '/#person'],
        'mainEntity'  => [
            '@type'           => 'ItemList',
            'numberOfItems'   => count($projets),
            'itemListElement' => array_values(array_map(
                static function (array $pr) use (&$pos): array {
                    return ['@type' => 'ListItem', 'position' => ++$pos, 'name' => $pr['title'], 'url' => SITE_URL . '/realisations/' . $pr['slug']];
                },
                $projets
            )),
        ],
    ],
    schema_fil_ariane([['Accueil', '/'], ['Réalisations', '/realisations/']], SITE_URL),
];

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
include __DIR__ . '/templates/realisations.php';
include __DIR__ . '/partials/pv2-footer.php';
?>
</body>
</html>
