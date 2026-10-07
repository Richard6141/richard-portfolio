<?php
// ============================================================
// helpers/migrations.php · Découpage d'un fichier de migration SQL en instructions (migrate.php, vague 1F).
// ============================================================
declare(strict_types=1);

/**
 * Decoupe un fichier SQL en instructions, en ignorant les commentaires "--"
 * et les chaines. Suffisant pour nos migrations : pas de procedure stockee,
 * donc pas de DELIMITER a gerer.
 *
 * @return list<string>
 */
function migration_decouper_sql(string $sql): array
{
    $sql = preg_replace('/^\s*--.*$/m', '', $sql) ?? $sql;
    $instructions = [];
    $courante = '';
    $quote = null;
    $len = strlen($sql);

    for ($i = 0; $i < $len; $i++) {
        $c = $sql[$i];
        if ($quote !== null) {
            $courante .= $c;
            if ($c === '\\') { if ($i + 1 < $len) { $courante .= $sql[++$i]; } continue; }
            if ($c === $quote) { $quote = null; }
            continue;
        }
        if ($c === "'" || $c === '"' || $c === '`') { $quote = $c; $courante .= $c; continue; }
        if ($c === ';') { $instructions[] = $courante; $courante = ''; continue; }
        $courante .= $c;
    }
    $instructions[] = $courante;

    return array_values(array_filter(array_map('trim', $instructions), static fn(string $s): bool => $s !== ''));
}
