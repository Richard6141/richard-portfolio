<?php
// ============================================================
// generate-sitemap.php — Ecrit un fichier STATIQUE /sitemap.xml sur le disque.
// A lancer via cron (quotidien) ou manuellement :
//   https://richard.salanon.info/generate-sitemap.php?key=VOTRE_CLE
// Le fichier statique est ensuite servi directement par Apache (rapide, fiable,
// jamais de timeout). Voir la regle .htaccess qui privilegie le fichier statique.
// ============================================================
declare(strict_types=1);

require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/helpers/functions.php';

header('Content-Type: text/plain; charset=UTF-8');

// Cle changee le 20/08/2026.
// L'ancienne valeur etait celle du fichier IndexNow servi a la racine
// (a7f3...a83.txt, HTTP 200 : le protocole IndexNow impose sa publication).
// La cle qui protegeait cet endpoint etait donc publique. Elle est desormais
// distincte de la cle IndexNow et stockee dans le secret GitHub SITEMAP_KEY.
const SITEMAP_GEN_KEY = '9b12e3a657931a05882c471db22aa601';

if (($_GET['key'] ?? '') !== SITEMAP_GEN_KEY) {
    http_response_code(403);
    echo "Acces refuse. Ajoutez ?key=VOTRE_CLE a l'URL.\n";
    exit;
}

$host    = $_SERVER['HTTP_HOST'] ?? parse_url(BASE_URL, PHP_URL_HOST);
$baseUrl = 'https://' . rtrim($host, '/');

try {
    $xml   = buildSitemapXml(getPDO(), $baseUrl);
    $path  = __DIR__ . '/sitemap.xml';
    $bytes = @file_put_contents($path, $xml);

    if ($bytes === false) {
        http_response_code(500);
        echo "ECHEC : impossible d'ecrire {$path}. Verifiez les permissions du dossier.\n";
        exit;
    }

    $count = substr_count($xml, '<loc>');
    echo "Sitemap statique genere avec succes.\n";
    echo "Fichier  : {$path}\n";
    echo "Taille   : {$bytes} octets\n";
    echo "URLs     : {$count}\n";
    echo "URL      : {$baseUrl}/sitemap.xml\n";
} catch (\Throwable $e) {
    http_response_code(500);
    echo "Erreur : " . $e->getMessage() . "\n";
}
