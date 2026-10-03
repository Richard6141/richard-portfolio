<?php
// ============================================================
// indexnow.php — Soumission groupée des URLs à IndexNow (Bing, Yandex...)
// Usage : https://richardsalanon.com/indexnow.php?key=VOTRE_CLE_INDEXNOW
// Notifie instantanément les moteurs compatibles IndexNow des pages publiées.
// (Google n'utilise pas IndexNow : pour Google, voir la procédure GSC.)
// À visiter après avoir publié / mis à jour des articles.
// ============================================================
declare(strict_types=1);

require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/helpers/functions.php';

header('Content-Type: text/plain; charset=UTF-8');

const INDEXNOW_KEY = 'a7f3c9e21b6d4f08a5c2e9d7b4f16a83';

// Protection : on n'exécute que si la bonne clé est fournie (évite tout abus).
if (($_GET['key'] ?? '') !== INDEXNOW_KEY) {
    http_response_code(403);
    echo "Acces refuse. Ajoutez ?key=VOTRE_CLE a l'URL.\n";
    exit;
}

$baseUrl = SITE_URL;
$host    = (string) parse_url(SITE_URL, PHP_URL_HOST);

try {
    $pdo = getPDO();

    $stmt   = $pdo->query("SELECT id FROM users WHERE is_active = 1 ORDER BY id ASC LIMIT 1");
    $userId = (int) ($stmt->fetchColumn() ?: 0);
    if (!$userId) {
        echo "Aucun utilisateur actif.\n";
        exit;
    }

    // Regenere aussi le sitemap statique (le cron quotidien garde tout a jour).
    $sitemapBytes = @file_put_contents(__DIR__ . '/sitemap.xml', buildSitemapXml($pdo, $baseUrl));
    echo "Sitemap statique : " . ($sitemapBytes !== false ? "regenere ({$sitemapBytes} octets)" : "ECHEC d'ecriture") . "\n\n";

    // 1) Pages fixes
    $urls = [
        $baseUrl . '/',
        $baseUrl . '/a-propos/',
        $baseUrl . '/blog/',
        $baseUrl . '/services/',
    ];

    // 2) Pages services (slug = generateSlug(title))
    try {
        $stmtSvc = $pdo->prepare("SELECT title FROM services WHERE user_id = ? ORDER BY sort_order ASC");
        $stmtSvc->execute([$userId]);
        foreach ($stmtSvc->fetchAll(PDO::FETCH_ASSOC) as $sv) {
            $urls[] = $baseUrl . '/services/' . generateSlug($sv['title']);
        }
    } catch (\Exception $e) { /* table absente : on continue */ }

    // 3) Articles publiés (et dont la date de publication est passee)
    try {
        $stmtBlog = $pdo->prepare(
            "SELECT slug FROM blog_posts
             WHERE user_id = ? AND status = 'published' AND (published_at IS NULL OR published_at <= NOW())
             ORDER BY published_at DESC"
        );
        $stmtBlog->execute([$userId]);
        foreach (blog_sans_rediriges($stmtBlog->fetchAll(PDO::FETCH_ASSOC)) as $bp) {
            $urls[] = $baseUrl . '/blog/' . $bp['slug'];
        }
    } catch (\Exception $e) { /* table absente : on continue */ }

    $urls = array_values(array_unique($urls));

    // Payload IndexNow (jusqu'a 10 000 URLs par requete)
    $payload = json_encode([
        'host'        => $host,
        'key'         => INDEXNOW_KEY,
        'keyLocation' => $baseUrl . '/' . INDEXNOW_KEY . '.txt',
        'urlList'     => $urls,
    ], JSON_UNESCAPED_SLASHES);

    $ch = curl_init('https://api.indexnow.org/indexnow');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $payload,
        CURLOPT_HTTPHEADER     => ['Content-Type: application/json; charset=utf-8'],
        CURLOPT_TIMEOUT        => 20,
    ]);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlErr  = curl_error($ch);
    curl_close($ch);

    echo "Soumission IndexNow\n";
    echo "===================\n";
    echo "Host        : {$host}\n";
    echo "URLs envoyees : " . count($urls) . "\n";
    echo "Code HTTP   : {$httpCode} " . indexnow_status_label((int) $httpCode) . "\n";
    if ($curlErr !== '') {
        echo "Erreur cURL : {$curlErr}\n";
    }
    echo "\nDetail des URLs :\n";
    foreach ($urls as $u) {
        echo "  - {$u}\n";
    }

} catch (\Throwable $e) {
    http_response_code(500);
    echo "Erreur : " . $e->getMessage() . "\n";
}

/**
 * Libelle lisible pour les codes de reponse IndexNow.
 */
function indexnow_status_label(int $code): string
{
    return match ($code) {
        200     => '(OK - URLs recues)',
        202     => '(Accepte - cle en cours de validation)',
        400     => '(Requete invalide)',
        403     => '(Cle non valide ou introuvable)',
        422     => '(URLs ne correspondent pas au host / cle)',
        429     => '(Trop de requetes)',
        default => '',
    };
}
