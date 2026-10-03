<?php
declare(strict_types=1);

/** Lignes de code (hors commentaires) contenant l'ancienne marque, sous un dossier. */
function marque_occurrences(string $dossier): array
{
    $trouvees = [];
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dossier, FilesystemIterator::SKIP_DOTS));
    foreach ($it as $fichier) {
        if ($fichier->getExtension() !== 'php') {
            continue;
        }
        foreach (file($fichier->getPathname()) as $num => $ligne) {
            $code = ltrim($ligne);
            if (str_starts_with($code, '//') || str_starts_with($code, '*') || str_starts_with($code, '/*') || str_starts_with($code, '#')) {
                continue;
            }
            if (str_contains($ligne, 'Richard Technologies')) {
                $trouvees[] = $fichier->getPathname() . ':' . ($num + 1);
            }
        }
    }
    return $trouvees;
}

function test_marque_aucune_mention_de_richard_technologies_dans_le_site_public(): void
{
    $occurrences = marque_occurrences(racine('portfolio'));
    assert_same([], $occurrences, 'ancienne marque encore présente');
}
