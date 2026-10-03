<?php
// ============================================================
// tools/qa/unicite.php · Contrôle d'unicité d'un groupe de pages (spec 8).
// Usage : php tools/qa/unicite.php <base> --groupe=REGEX [--pause=MS]
// Échec si une page dépasse 40 % de ressemblance (Jaccard, bardeaux de
// 5 mots, lieux neutralisés) avec une autre page du groupe, ou si moins
// de 60 % de son texte lui est propre.
// ============================================================
declare(strict_types=1);

require __DIR__ . '/lib.php';

$base = 'https://richardsalanon.com';
$groupe = '';
$pause = 500;
foreach (array_slice($argv, 1) as $arg) {
    if (str_starts_with($arg, '--groupe=')) { $groupe = substr($arg, 9); }
    elseif (str_starts_with($arg, '--pause=')) { $pause = (int) substr($arg, 8); }
    else { $base = rtrim($arg, '/'); }
}
if ($groupe === '') {
    fwrite(STDERR, "Préciser --groupe=REGEX\n");
    exit(2);
}

$neutres = qa_noms_de_lieux();
$urls    = array_values(array_filter(qa_urls_sitemap($base, $pause), static fn(string $u): bool => preg_match('#' . $groupe . '#', $u) === 1));
$pages   = [];
foreach ($urls as $url) {
    $pages[$url] = qa_bardeaux(qa_texte_principal(qa_get($url, $pause)['corps']), 5, $neutres);
}

$echecs = 0;
foreach ($pages as $url => $bardeaux) {
    $autres = array_diff_key($pages, [$url => true]);
    $pire = 0.0;
    $voisine = '';
    foreach ($autres as $autreUrl => $autre) {
        $r = qa_ressemblance($bardeaux, $autre);
        if ($r > $pire) { $pire = $r; $voisine = $autreUrl; }
    }
    $propre = qa_part_propre($bardeaux, $autres);
    $ok = $pire <= 0.40 && $propre >= 0.60;
    $echecs += $ok ? 0 : 1;
    fwrite(STDOUT, sprintf("%-6s ressemblance max %4.0f %%  texte propre %4.0f %%  %s%s\n",
        $ok ? 'ok' : 'ECHEC', $pire * 100, $propre * 100, $url, $voisine !== '' ? '  (voisine : ' . $voisine . ')' : ''));
}
fwrite(STDOUT, sprintf("\n%d page(s), %d en échec\n", count($pages), $echecs));
exit($echecs > 0 ? 1 : 0);
