<?php
// ============================================================
// tools/qa/crawl.php · Contrôle des pages listées par le sitemap (spec 8).
// Usage : php tools/qa/crawl.php <base> [--seuil=3200] [--max=N]
//         [--filtre=REGEX] [--pause=MS] [--liens] [--strict]
// Bloquant : statut ≠ 200, JSON-LD ≠ 1 balise, type interdit, canonique
// ≠ URL, H1 ≠ 1, texte interdit, lien vers l'ancien domaine, lien WhatsApp
// invalide, fait d'identité contraire à la fiche. Avec --liens : tout lien
// interne qui ne répond pas 200. Avec --strict : aussi mots < seuil et
// longueurs de title (50-60) ou meta (140-155) hors bornes.
// ============================================================
declare(strict_types=1);

require __DIR__ . '/lib.php';

$base = 'https://richardsalanon.com';
$seuil = 3200;
$max = 0;
$filtre = '';
$pause = 500;
$strict = false;
$verifierLiens = false;
foreach (array_slice($argv, 1) as $arg) {
    if (str_starts_with($arg, '--seuil=')) { $seuil = (int) substr($arg, 8); }
    elseif (str_starts_with($arg, '--max=')) { $max = (int) substr($arg, 6); }
    elseif (str_starts_with($arg, '--filtre=')) { $filtre = substr($arg, 9); }
    elseif (str_starts_with($arg, '--pause=')) { $pause = (int) substr($arg, 8); }
    elseif ($arg === '--strict') { $strict = true; }
    elseif ($arg === '--liens') { $verifierLiens = true; }
    else { $base = rtrim($arg, '/'); }
}
$faits     = require dirname(__DIR__, 2) . '/portfolio/data/faits.php';
$tousLiens = [];
$statuts   = [];

$urls = qa_urls_sitemap($base, $pause);
if ($filtre !== '') {
    $urls = array_values(array_filter($urls, static fn(string $u): bool => preg_match('#' . $filtre . '#', $u) === 1));
}
if ($max > 0) {
    $urls = array_slice($urls, 0, $max);
}

$lignes = [];
$bloquantes = 0;
foreach ($urls as $url) {
    $r     = qa_get($url, $pause);
    $meta  = qa_meta($r['corps']);
    $json  = qa_jsonld($r['corps']);
    $texte = qa_texte_principal($r['corps']);
    $mots  = qa_compter_mots($texte);

    $bloquant = [];
    $avis     = [];
    if ($r['code'] !== 200) { $bloquant[] = 'statut ' . $r['code']; }
    if ($json['balises'] !== 1) { $bloquant[] = $json['balises'] . ' balises JSON-LD'; }
    foreach (array_intersect($json['types'], QA_TYPES_INTERDITS) as $type) { $bloquant[] = 'type interdit ' . $type; }
    foreach ($json['erreurs'] as $erreur) { $bloquant[] = $erreur; }
    if ($meta['canonical'] !== $url) { $bloquant[] = 'canonique ' . ($meta['canonical'] ?: 'absente'); }
    if ($meta['h1'] !== 1) { $bloquant[] = $meta['h1'] . ' H1'; }
    foreach (qa_texte_interdit($texte) as $p) { $bloquant[] = $p; }
    foreach (qa_faits_incoherents($texte, $faits) as $p) { $bloquant[] = $p; }
    $liens = qa_liens($r['corps'], $base);
    foreach ($liens['ancien_domaine'] as $l) { $bloquant[] = 'lien vers l\'ancien domaine ' . $l; }
    foreach ($liens['whatsapp_invalides'] as $l) { $bloquant[] = 'lien WhatsApp invalide ' . $l; }
    $tousLiens += array_fill_keys($liens['internes'], $url);
    $statuts[$url] = $r['code'];

    $lt = mb_strlen($meta['title']);
    $ld = mb_strlen($meta['description']);
    if ($mots < $seuil) { $avis[] = 'mots < ' . $seuil; }
    if ($lt < 50 || $lt > 60) { $avis[] = "title {$lt} car."; }
    if ($ld < 140 || $ld > 155) { $avis[] = "meta {$ld} car."; }
    if ($strict) { $bloquant = array_merge($bloquant, $avis); $avis = []; }

    $bloquantes += $bloquant ? 1 : 0;
    $lignes[] = ['url' => $url, 'mots' => $mots, 'bloquant' => $bloquant, 'avis' => $avis];
}

usort($lignes, static fn(array $a, array $b): int => $a['mots'] <=> $b['mots']);
foreach ($lignes as $l) {
    fwrite(STDOUT, sprintf("%-6s %6d  %s%s%s\n",
        $l['bloquant'] ? 'ECHEC' : 'ok', $l['mots'], $l['url'],
        $l['bloquant'] ? '  [' . implode(' ; ', $l['bloquant']) . ']' : '',
        $l['avis'] ? '  (' . implode(' ; ', $l['avis']) . ')' : ''));
}
$sousSeuil = count(array_filter($lignes, static fn(array $l): bool => $l['mots'] < $seuil));
fwrite(STDOUT, sprintf("\n%d page(s), %d en échec, %d sous %d mots\n", count($lignes), $bloquantes, $sousSeuil, $seuil));

$liensCasses = 0;
if ($verifierLiens) {
    foreach ($tousLiens as $lien => $source) {
        $code = $statuts[$lien] ?? qa_get($lien, $pause)['code'];
        if ($code !== 200) {
            $liensCasses++;
            fwrite(STDOUT, sprintf("LIEN   %d  %s  (depuis %s)\n", $code, $lien, $source));
        }
    }
    fwrite(STDOUT, sprintf("%d lien(s) interne(s) vérifié(s), %d ne répondent pas 200\n", count($tousLiens), $liensCasses));
}
exit($bloquantes + $liensCasses > 0 ? 1 : 0);
