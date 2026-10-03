<?php
// ============================================================
// tools/tests/run.php · Lance les tests unitaires.
// Usage : php tools/tests/run.php [filtre sur le nom de fichier]
// Charge tools/tests/*Test.php et exécute chaque fonction test_*.
// ============================================================
declare(strict_types=1);

require __DIR__ . '/lib.php';

$filtre   = $argv[1] ?? '';
$fichiers = glob(__DIR__ . '/*Test.php') ?: [];
sort($fichiers, SORT_STRING);
foreach ($fichiers as $fichier) {
    if ($filtre === '' || stripos(basename($fichier), $filtre) !== false) {
        require_once $fichier;
    }
}

$tests = array_values(array_filter(
    get_defined_functions()['user'],
    static fn(string $f): bool => str_starts_with($f, 'test_')
));
sort($tests, SORT_STRING);

$echecs = 0;
foreach ($tests as $test) {
    try {
        $test();
        fwrite(STDOUT, "  ok    {$test}\n");
    } catch (\Throwable $e) {
        $echecs++;
        fwrite(STDOUT, "  ECHEC {$test}\n        " . str_replace("\n", "\n        ", $e->getMessage()) . "\n");
    }
}

fwrite(STDOUT, sprintf("\n%d test(s), %d échec(s)\n", count($tests), $echecs));
exit($echecs > 0 ? 1 : 0);
