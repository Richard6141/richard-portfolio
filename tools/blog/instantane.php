<?php
// tools/blog/instantane.php · Copie des articles en ligne, source de la reprise (vague 1F).
// Usage (depuis la racine du dépôt) : php tools/blog/instantane.php [base=https://richardsalanon.com]
// Écrit docs/blog/origine/{slug}.html (contenu de l'article) et docs/blog/origine/index.json.
declare(strict_types=1);
require 'helpers/functions.php';
require 'tools/qa/lib.php';

$base = rtrim($argv[1] ?? 'https://richardsalanon.com', '/');
$dossier = 'docs/blog/origine';
if (!is_dir($dossier) && !mkdir($dossier, 0777, true)) { fwrite(STDERR, "dossier impossible : {$dossier}\n"); exit(1); }
$instantane = date('Y-m-d H:i:s');
$index = [];
foreach (qa_urls_sitemap($base, 300) as $url) {
    if (!preg_match('#/blog/([a-z0-9_-]+)$#', $url, $m)) { continue; }
    $r = qa_get($url . '?instantane=' . time(), 300);
    if ($r['code'] !== 200) { fwrite(STDERR, "{$r['code']} {$url}\n"); continue; }
    $a = blog_extraire($r['corps']);
    if ($a['contenu'] === '') { fwrite(STDERR, "contenu introuvable : {$url}\n"); continue; }
    file_put_contents("{$dossier}/{$m[1]}.html", $a['contenu'] . "\n");
    $index[$m[1]] = ['titre' => $a['titre'], 'meta' => $a['meta'], 'categorie' => $a['categorie'], 'tags' => $a['tags'],
        'publie' => $a['publie'], 'maj' => $a['maj'], 'mots' => blog_mots($a['contenu']), 'instantane' => $instantane];
    echo str_pad((string) $index[$m[1]]['mots'], 5, ' ', STR_PAD_LEFT), " mots  {$m[1]}\n";
}
ksort($index);
file_put_contents("{$dossier}/index.json", json_encode($index, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "\n");
echo count($index), " article(s), instantané du {$instantane}\n";
