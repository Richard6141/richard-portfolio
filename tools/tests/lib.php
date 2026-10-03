<?php
// ============================================================
// tools/tests/lib.php · Assertions du harnais de tests (vague 0A).
// Sans dépendance : le site n'utilise pas Composer pour ses outils.
// ============================================================
declare(strict_types=1);

final class EchecTest extends \RuntimeException {}

function assert_same(mixed $attendu, mixed $obtenu, string $message = ''): void
{
    if ($attendu !== $obtenu) {
        throw new EchecTest(trim($message . "\nattendu : " . var_export($attendu, true) . "\nobtenu  : " . var_export($obtenu, true)));
    }
}

function assert_true(bool $condition, string $message = 'condition fausse'): void
{
    if (!$condition) {
        throw new EchecTest($message);
    }
}

function assert_contains(string $aiguille, string $texte, string $message = ''): void
{
    if (!str_contains($texte, $aiguille)) {
        throw new EchecTest(trim($message . "\nabsent : " . $aiguille));
    }
}

function assert_not_contains(string $aiguille, string $texte, string $message = ''): void
{
    if (str_contains($texte, $aiguille)) {
        throw new EchecTest(trim($message . "\nprésent à tort : " . $aiguille));
    }
}

/** Chemin absolu dans le dépôt, pour les require des tests. */
function racine(string $chemin = ''): string
{
    return dirname(__DIR__, 2) . ($chemin !== '' ? '/' . ltrim($chemin, '/') : '');
}
