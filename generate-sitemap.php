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
    $xml  = buildSitemapXml(getPDO(), $baseUrl);
    $path = __DIR__ . '/sitemap.xml';

    // Ecriture atomique (01/09/2026). file_put_contents ecrivait directement
    // dans sitemap.xml : pendant la fraction de seconde de la reecriture, une
    // requete concurrente lisait un fichier tronque, donc un XML mal forme.
    // Le sitemap etant regenere a CHAQUE deploiement, un robot qui tombait
    // dans cette fenetre voyait « impossible de recuperer le sitemap ».
    // On ecrit d'abord a cote, puis rename() remplace le fichier d'un bloc :
    // un lecteur voit soit l'ancienne version complete, soit la nouvelle.
    $tmp   = $path . '.' . getmypid() . '.tmp';
    $bytes = @file_put_contents($tmp, $xml, LOCK_EX);

    if ($bytes === false || !@rename($tmp, $path)) {
        @unlink($tmp);
        http_response_code(500);
        echo "ECHEC : impossible d'ecrire {$path}. Verifiez les permissions du dossier.\n";
        exit;
    }
    @chmod($path, 0644);

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
