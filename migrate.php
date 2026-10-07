<?php
// ============================================================
// migrate.php · Applique les migrations SQL en attente.
//
// Cree le 20/08/2026. Les migrations devaient jusqu'ici etre collees a la
// main dans phpMyAdmin : une etape oubliee et le code deploye reference des
// colonnes qui n'existent pas.
//
// LANCEMENT — en SSH sur le serveur uniquement :
//   php migrate.php            applique les migrations en attente
//   php migrate.php --dry-run  liste ce qui serait applique, sans rien ecrire
//   php migrate.php --status   affiche l'etat de chaque migration
//
// L'execution par le web est refusee : ce script modifie le schema, il n'a
// rien a faire derriere une URL, meme protegee par une cle.
//
// IDEMPOTENT : chaque fichier applique est enregistre dans schema_migrations
// et n'est jamais rejoue. Un deploiement qui repasse ne touche a rien.
// ============================================================

declare(strict_types=1);

if (PHP_SAPI !== 'cli') {
    http_response_code(403);
    header('Content-Type: text/plain; charset=UTF-8');
    exit("Ce script s'execute uniquement en ligne de commande.\n");
}

require_once __DIR__ . '/config/db.php';

$dossier = __DIR__ . '/migrations';
$dryRun  = in_array('--dry-run', $argv, true);
$status  = in_array('--status', $argv, true);

function sortie(string $msg): void { fwrite(STDOUT, $msg . "\n"); }
function erreur(string $msg): never { fwrite(STDERR, "ERREUR : " . $msg . "\n"); exit(1); }

if (!is_dir($dossier)) {
    sortie("Aucun dossier migrations/ — rien a faire.");
    exit(0);
}

try {
    $pdo = getPDO();
} catch (\Throwable $e) {
    erreur("connexion a la base impossible : " . $e->getMessage());
}

// Journal des migrations. Cree au premier passage.
$pdo->exec("
    CREATE TABLE IF NOT EXISTS schema_migrations (
        fichier    VARCHAR(255) NOT NULL PRIMARY KEY,
        applique_le DATETIME     NOT NULL,
        duree_ms   INT UNSIGNED NOT NULL DEFAULT 0
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
");

$appliquees = $pdo->query("SELECT fichier, applique_le FROM schema_migrations")->fetchAll(PDO::FETCH_KEY_PAIR);

$fichiers = glob($dossier . '/*.sql') ?: [];
sort($fichiers, SORT_STRING); // l'ordre vient du nom : AAAA-MM-JJ-....sql

if ($status) {
    sortie("Etat des migrations :");
    foreach ($fichiers as $f) {
        $nom = basename($f);
        sortie(sprintf('  %-44s %s', $nom, isset($appliquees[$nom]) ? 'appliquee le ' . $appliquees[$nom] : 'EN ATTENTE'));
    }
    exit(0);
}

$enAttente = array_values(array_filter($fichiers, static fn(string $f): bool => !isset($appliquees[basename($f)])));

if (!$enAttente) {
    sortie("Base a jour — " . count($appliquees) . " migration(s) deja appliquee(s).");
    exit(0);
}

sortie(count($enAttente) . " migration(s) en attente :");
foreach ($enAttente as $f) { sortie('  - ' . basename($f)); }

if ($dryRun) {
    sortie("\n--dry-run : rien n'a ete modifie.");
    exit(0);
}

require_once __DIR__ . '/helpers/migrations.php';

$total = 0;
foreach ($enAttente as $chemin) {
    $nom = basename($chemin);
    $sql = file_get_contents($chemin);
    if ($sql === false) { erreur("lecture impossible : {$nom}"); }

    $instructions = migration_decouper_sql($sql);
    sortie("\n> {$nom} (" . count($instructions) . " instruction(s))");

    $debut = microtime(true);
    try {
        foreach ($instructions as $n => $instruction) {
            $pdo->exec($instruction);
            sortie(sprintf('    [%d/%d] %s', $n + 1, count($instructions), substr(preg_replace('/\s+/', ' ', $instruction) ?? '', 0, 90)));
        }
    } catch (\Throwable $e) {
        // Pas de rollback possible : MySQL valide implicitement chaque DDL.
        // On s'arrete net pour ne pas empiler une migration sur un etat partiel.
        erreur("{$nom} a echoue et n'est PAS enregistree : " . $e->getMessage()
             . "\n  Corrigez le fichier, puis relancez. Les migrations precedentes restent appliquees.");
    }
    $duree = (int) round((microtime(true) - $debut) * 1000);

    $stmt = $pdo->prepare("INSERT INTO schema_migrations (fichier, applique_le, duree_ms) VALUES (?, NOW(), ?)");
    $stmt->execute([$nom, $duree]);

    sortie("  OK ({$duree} ms)");
    $total++;
}

sortie("\n{$total} migration(s) appliquee(s).");
