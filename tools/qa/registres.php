<?php
// ============================================================
// tools/qa/registres.php · Contrôles de la section 8 sur les pages de registre.
// Rendu en mémoire (aucun serveur requis), donc pages futures comprises.
// Usage : php tools/qa/registres.php [--racine=DOSSIER] [--publiees] [--type=TYPE] [--liens]
// Unicité : 40 % au plus avec une page sœur, 25 % au plus avec le parent, 60 % de texte propre.
// ============================================================
declare(strict_types=1);

require __DIR__ . '/../../helpers/functions.php';
require __DIR__ . '/lib.php';

$opts      = getopt('', ['racine:', 'publiees', 'type:', 'liens']);
$racine    = isset($opts['racine']) ? realpath((string) $opts['racine']) : REGISTRES_RACINE;
$types     = isset($opts['type']) ? [(string) $opts['type']] : array_keys(REGISTRES_TYPES);
$neutres   = qa_noms_de_lieux();
$pages = $rendus = $bardeaux = [];
foreach ($types as $type) {
    foreach ((isset($opts['publiees']) ? registre_publiees($type, $racine) : registre_tous($type, $racine)) as $p) {
        $cle = $type . '/' . $p['slug'];
        $pages[$cle]    = $p;
        $rendus[$cle]   = qa_rendre_registre($p, $racine);
        $bardeaux[$cle] = qa_bardeaux(qa_texte_principal($rendus[$cle]), 5, $neutres);
    }
}

$titres = $metas = [];
$echecTotal = 0;
foreach ($pages as $cle => $p) {
    $echecs = qa_controle_page($p, $rendus[$cle]);
    $meta = qa_meta($rendus[$cle]);
    if (isset($titres[$meta['title']])) { $echecs[] = 'title en double avec ' . $titres[$meta['title']]; }
    if (isset($metas[$meta['description']])) { $echecs[] = 'meta en double avec ' . $metas[$meta['description']]; }
    $titres[$meta['title']] = $cle;
    $metas[$meta['description']] = $cle;

    // Unicité : sœurs (même parent ou même pays) et parent (pilier, fiche formation).
    $parent = str_ends_with($p['type'], '-pays') ? str_replace('-pays', '', $p['type']) . '/' . dirname($p['slug']) : null;
    $autres = [];
    foreach ($pages as $c2 => $q) {
        if ($c2 === $cle || $c2 === $parent) { continue; }
        $soeur = $q['type'] === $p['type'] && (!str_ends_with($p['type'], '-pays')
            || dirname($q['slug']) === dirname($p['slug']) || basename($q['slug']) === basename($p['slug']));
        if ($soeur) {
            $autres[] = $bardeaux[$c2];
            if (($s = qa_ressemblance($bardeaux[$cle], $bardeaux[$c2])) > 0.40) { $echecs[] = sprintf('unicité %d %% avec %s', $s * 100, $c2); }
        }
    }
    if ($parent !== null && isset($bardeaux[$parent]) && ($s = qa_ressemblance($bardeaux[$cle], $bardeaux[$parent])) > 0.25) {
        $echecs[] = sprintf('unicité %d %% avec le parent', $s * 100);
    }
    if ($autres && ($propre = qa_part_propre($bardeaux[$cle], $autres)) < 0.60) {
        $echecs[] = sprintf('texte propre %d %%', $propre * 100);
    }
    if (isset($opts['liens'])) {
        preg_match_all('#href="(/[^"\#]*)#', (string) preg_replace('#^.*?<main[^>]*>|</main>.*$#s', '', $rendus[$cle]), $m);
        foreach (array_unique($m[1]) as $url) {
            if (($code = qa_get('http://localhost:8081' . $url)['code']) !== 200) { $echecs[] = "lien {$url} ({$code})"; }
        }
    }
    printf("%-7s %s%s\n", $echecs ? 'ECHEC' : 'ok', $cle, $echecs ? '  [' . implode(' ; ', $echecs) . ']' : '');
    $echecTotal += $echecs ? 1 : 0;
}
printf("\n%d page(s), %d en échec\n", count($pages), $echecTotal);
exit($echecTotal ? 1 : 0);
