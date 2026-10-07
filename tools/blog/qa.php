<?php
// tools/blog/qa.php · Contrôle hors ligne des articles repris (vague 1F), sans base de données.
// Usage : php tools/blog/qa.php [--dossier=DIR] [SLUG ...]  (défaut : docs/blog/articles, tous les fichiers)
// Rend chaque source avec les partiels du gabarit, puis : validation de la source, texte interdit et
// accents, faits d'identité, ressemblance de 40 % au plus entre articles. Le nombre de mots est affiché
// pour information : aucun minimum pour le blog (décision 8 du plan, consigne de Richard du 07/10/2026).
declare(strict_types=1);
$racine = dirname(__DIR__, 2);
require $racine . '/helpers/functions.php';
require_once $racine . '/helpers/icons.php';
require $racine . '/tools/qa/lib.php';

$dossier = $racine . '/docs/blog/articles';
$demandes = [];
foreach (array_slice($argv, 1) as $arg) {
    if (str_starts_with($arg, '--dossier=')) { $dossier = substr($arg, 10); } else { $demandes[] = $arg; }
}
$faits = require $racine . '/portfolio/data/faits.php';
$neutres = qa_noms_de_lieux();
$rendus = [];
foreach (glob($dossier . '/*.php') ?: [] as $f) {
    $a = require $f;
    $post = ['title' => $a['titre'] ?? '', 'category' => $a['categorie'] ?? '', 'summary' => $a['resume'] ?? '',
             'published_at' => '2026-01-01 00:00:00', 'updated_at' => date('Y-m-d H:i:s')];
    $fullName = fait('nom');
    $readingTime = 1;
    $articleHtml = (string) ($a['contenu'] ?? '');
    ob_start();
    include $racine . '/portfolio/partials/article-tete.php';
    include $racine . '/portfolio/partials/article-corps.php';
    $texte = qa_texte_principal('<main>' . ob_get_clean() . '</main>');
    $rendus[basename($f, '.php')] = ['a' => $a, 'texte' => $texte, 'bardeaux' => qa_bardeaux($texte, 5, $neutres)];
}
$echecs = 0;
foreach ($rendus as $slug => $r) {
    if ($demandes && !in_array($slug, $demandes, true)) { continue; }
    $p = array_merge(blog_article_problemes($r['a'], $slug), qa_texte_interdit($r['texte']), qa_faits_incoherents($r['texte'], $faits));
    foreach ($rendus as $autre => $o) {
        if ($autre !== $slug && ($s = qa_ressemblance($r['bardeaux'], $o['bardeaux'])) > 0.40) { $p[] = sprintf('ressemblance %d %% avec %s', (int) round($s * 100), $autre); }
    }
    $mots = qa_compter_mots($r['texte']);
    echo ($p ? 'ECHEC ' : 'OK    ') . str_pad((string) $mots, 5, ' ', STR_PAD_LEFT) . " mots  {$slug}" . ($p ? '  [' . implode(' ; ', $p) . ']' : '') . "\n";
    $echecs += $p ? 1 : 0;
}
echo count($rendus), " source(s), {$echecs} en échec\n";
exit($echecs > 0 ? 1 : 0);
