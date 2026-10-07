<?php
// tools/qa/doublons.php · Passages d'une page de registre repris de ses pages sœurs du même type
// (suites de bardeaux de 5 mots, lieux neutralisés). Vagues 1D et 1E.
// Usage (depuis la racine du dépôt) : php tools/qa/doublons.php TYPE SLUG [min_mots=15]
// Communs par construction, à ignorer : phrase d'entité, blocs « Services liés », « Pour aller plus loin »,
// bande d'appel finale, tableau des prix de départ (faits.php), cartes des pages voisines.
ini_set('error_log', sys_get_temp_dir() . '/doublons-registres.log');
require 'helpers/functions.php'; require 'tools/qa/lib.php';
$type = $argv[1] ?? ''; $slug = $argv[2] ?? ''; $min = (int) ($argv[3] ?? 15);
$n = qa_noms_de_lieux(); $pages = registre_tous($type);
if (!isset($pages[$slug])) { fwrite(STDERR, "page inconnue ou invalide : {$type}/{$slug}\n"); exit(1); }
$autres = [];
foreach ($pages as $s => $p) { if ($s !== $slug) { $autres[$s] = qa_bardeaux(qa_texte_principal(qa_rendre_registre($p)), 5, $n); } }
$mots = preg_split('/\s+/', qa_normaliser(qa_texte_principal(qa_rendre_registre($pages[$slug])), $n), -1, PREG_SPLIT_NO_EMPTY);
$ou = static function (string $b) use ($autres): array { $r = []; foreach ($autres as $s => $x) { if (isset($x[$b])) { $r[] = $s; } } return $r; };
$runs = []; $deb = null; $pg = [];
for ($i = 0; $i <= count($mots) - 5; $i++) {
    $w = $ou(implode(' ', array_slice($mots, $i, 5)));
    if ($w && $deb === null) { $deb = $i; $pg = []; }
    if ($w) { $pg += array_flip($w); }
    if (!$w && $deb !== null) { $runs[] = [$deb, $i + 3, array_keys($pg)]; $deb = null; }
}
if ($deb !== null) { $runs[] = [$deb, count($mots) - 1, array_keys($pg)]; }
$total = 0;
foreach ($runs as [$d, $f, $w]) {
    $l = $f - $d + 1;
    if ($l < $min) { continue; }
    $total += $l;
    printf("[%d mots, aussi dans : %s]\n  %s\n", $l, implode(', ', array_slice($w, 0, 4)), implode(' ', array_slice($mots, $d, $l)));
}
printf("\n%d mots en passages de %d mots ou plus, sur %d\n", $total, $min, count($mots));
