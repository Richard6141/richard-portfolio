<?php
// ============================================================
// tools/qa/smoke.php · Contrôle de fumée après déploiement (03/10/2026).
// Usage : php tools/qa/smoke.php https://richardsalanon.com
// Lancé par GitHub Actions après chaque déploiement : signale sans bloquer.
// ============================================================
declare(strict_types=1);

$base = rtrim($argv[1] ?? 'https://richardsalanon.com', '/');
$hote = (string) parse_url($base, PHP_URL_HOST);

/** @return array{code:int, location:string, type:string, corps:string} */
function smoke_get(string $url): array
{
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => true,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_USERAGENT      => 'Mozilla/5.0 (compatible; controle-de-fumee)',
    ]);
    $brut   = (string) curl_exec($ch);
    $code   = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    $taille = (int) curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    curl_close($ch);
    $entetes = substr($brut, 0, $taille);
    preg_match('/^Location:\s*(\S+)/mi', $entetes, $loc);
    preg_match('/^Content-Type:\s*([^\r\n]+)/mi', $entetes, $type);
    return ['code' => $code, 'location' => $loc[1] ?? '', 'type' => strtolower(trim($type[1] ?? '')), 'corps' => substr($brut, $taille)];
}

$controles = [
    'www redirige en un saut vers le domaine nu' => static function () use ($base, $hote): bool {
        $r = smoke_get('https://www.' . $hote . '/a-propos/');
        return $r['code'] === 301 && $r['location'] === $base . '/a-propos/';
    },
    'http redirige vers https' => static function () use ($base, $hote): bool {
        $r = smoke_get('http://' . $hote . '/contact');
        return $r['code'] === 301 && $r['location'] === $base . '/contact';
    },
    'robots.txt statique avec une seule ligne Sitemap' => static function () use ($base): bool {
        $r = smoke_get($base . '/robots.txt');
        return $r['code'] === 200 && substr_count($r['corps'], 'Sitemap:') === 1 && str_contains($r['corps'], 'User-agent: ClaudeBot');
    },
    'llms.txt en UTF-8 et accentué' => static function () use ($base): bool {
        $r = smoke_get($base . '/llms.txt');
        return $r['code'] === 200 && str_contains($r['type'], 'charset=utf-8') && str_contains($r['corps'], '# Richard SALANON') && str_contains($r['corps'], 'Bénin');
    },
    'llms-full.txt servi' => static function () use ($base): bool {
        return smoke_get($base . '/llms-full.txt')['code'] === 200;
    },
    'sitemap.xml valide, au moins 100 URL, aucune en www' => static function () use ($base): bool {
        $r = smoke_get($base . '/sitemap.xml');
        return $r['code'] === 200 && @simplexml_load_string($r['corps']) !== false
            && substr_count($r['corps'], '<loc>') >= 100 && !str_contains($r['corps'], '://www.richardsalanon');
    },
    "accueil : un seul JSON-LD, Person présente, pas d'ancienne marque" => static function () use ($base): bool {
        $r = smoke_get($base . '/');
        return $r['code'] === 200 && substr_count($r['corps'], 'application/ld+json') === 1
            && str_contains($r['corps'], '/#person') && !str_contains($r['corps'], 'Richard Technologies');
    },
    'à-propos : un seul JSON-LD' => static function () use ($base): bool {
        $r = smoke_get($base . '/a-propos/');
        return $r['code'] === 200 && substr_count($r['corps'], 'application/ld+json') === 1;
    },
    'favicon.ico servi' => static function () use ($base): bool {
        return smoke_get($base . '/favicon.ico')['code'] === 200;
    },
];

$echecs = 0;
foreach ($controles as $nom => $controle) {
    $ok = false;
    try {
        $ok = $controle();
    } catch (\Throwable $e) {
        $ok = false;
    }
    $echecs += $ok ? 0 : 1;
    fwrite(STDOUT, ($ok ? '  ok    ' : '  ECHEC ') . $nom . "\n");
}
fwrite(STDOUT, sprintf("\n%d contrôle(s), %d échec(s)\n", count($controles), $echecs));
exit($echecs > 0 ? 1 : 0);
