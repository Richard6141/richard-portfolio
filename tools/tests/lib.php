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

/**
 * Requête vers l'Apache local (Task 1), sans suivre les redirections.
 * @return array{code:int, location:string, type:string, corps:string}
 */
function http_local(string $chemin, string $hote = 'localhost:8081'): array
{
    $ch = curl_init('http://127.0.0.1:8081' . $chemin);
    curl_setopt_array($ch, [
        CURLOPT_HTTPHEADER     => ['Host: ' . $hote],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => true,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_TIMEOUT        => 15,
    ]);
    $brut = curl_exec($ch);
    if ($brut === false) {
        throw new EchecTest('Apache local injoignable sur 127.0.0.1:8081 (Task 1, step 6) : ' . curl_error($ch));
    }
    $code   = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    $taille = (int) curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    curl_close($ch);
    $entetes = substr((string) $brut, 0, $taille);
    preg_match('/^Location:\s*(\S+)/mi', $entetes, $loc);
    preg_match('/^Content-Type:\s*([^\r\n]+)/mi', $entetes, $type);
    return [
        'code'     => $code,
        'location' => $loc[1] ?? '',
        'type'     => strtolower(trim($type[1] ?? '')),
        'corps'    => substr((string) $brut, $taille),
    ];
}
