<?php
// ============================================================
// accueil.php · Page d'accueil (URL /), vague 0B, 03/10/2026.
// Remplace portfolio/index.php (moteur multi-gabarits lié à la base,
// conservé pour un retour arrière). Construit sur l'amorçage commun,
// donc servi même base arrêtée : les sections issues de la base
// (réalisations, avis, articles) disparaissent simplement.
// Dispositions : relevés d'Audyxa Formation (references.md, A.3).
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';
require_once __DIR__ . '/../helpers/blocs.php';

/** Lignes d'une requête, ou [] sans base ou en cas d'erreur. */
$lire = static function (?PDO $pdo, string $sql, array $params = []): array {
    if ($pdo === null) {
        return [];
    }
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    } catch (\Throwable $e) {
        error_log('accueil : ' . $e->getMessage());
        return [];
    }
};

$h_projects     = $lire($pdo, "SELECT * FROM projects WHERE user_id = ? AND status = 'published' ORDER BY is_featured DESC, sort_order ASC LIMIT 6", [$userId]);
$h_testimonials = $lire($pdo, 'SELECT * FROM testimonials WHERE user_id = ? ORDER BY is_featured DESC, sort_order ASC LIMIT 3', [$userId]);
$h_recent       = blog_sans_rediriges($lire($pdo, "SELECT title, slug, cover_image, category, published_at FROM blog_posts WHERE user_id = ? AND status = 'published' AND (published_at IS NULL OR published_at <= NOW()) ORDER BY published_at DESC LIMIT 3", [$userId]));

$nav     = navigation_chargee();
// Le bandeau ne montre que des projets clients : Wapy, produit de Richard, en sort.
$clients = json_decode((string) @file_get_contents(__DIR__ . '/../assets/img/clients/clients.json'), true) ?: [];
$clients = array_values(array_filter($clients, static fn (array $c): bool => empty($c['produit_propre'])));
$faq     = require __DIR__ . '/templates/horizon-faq.php';

$homeUrl       = SITE_URL . '/';
$pageTitle     = 'Expert en digitalisation à Cotonou, Bénin | Richard SALANON';
$pageDesc      = fait('description_courte');
$pageCanonical = $homeUrl;
$ogImage       = SITE_URL . fait('photo_og');
$pageSchemas   = [
    schema_personne(faits(), SITE_URL, true),
    [
        '@type'       => 'WebPage',
        '@id'         => $homeUrl . '#webpage',
        'url'         => $homeUrl,
        'name'        => $pageTitle,
        'description' => $pageDesc,
        'isPartOf'    => ['@id' => SITE_URL . '/#website'],
        'about'       => ['@id' => SITE_URL . '/#person'],
    ],
    schema_faq($faq),
];
$portraitSrcset = imgV('/assets/img/richard-salanon-400.webp') . ' 400w, ' . imgV(fait('photo')) . ' 800w';
$portraitSizes  = '(min-width: 1024px) 34vw, 90vw';
$pagePrecharge  = [[imgV(fait('photo')), $portraitSrcset, $portraitSizes, '(min-width: 1024px)']];

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
include __DIR__ . '/templates/accueil.php';
include __DIR__ . '/partials/pv2-footer.php';
?>
</body>
</html>
