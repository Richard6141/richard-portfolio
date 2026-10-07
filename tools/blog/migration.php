<?php
// tools/blog/migration.php · Migration SQL d'un article repris (vague 1F).
// Usage : php tools/blog/migration.php SLUG [--date=AAAA-MM-JJ]
// Lit docs/blog/articles/SLUG.php, refuse une source invalide, écrit migrations/{date}-blog-SLUG.sql.
declare(strict_types=1);
$racine = dirname(__DIR__, 2);
require $racine . '/helpers/functions.php';
require_once $racine . '/helpers/migrations.php';

$slug = $argv[1] ?? '';
$date = date('Y-m-d');
foreach (array_slice($argv, 2) as $arg) {
    if (preg_match('/^--date=(\d{4}-\d{2}-\d{2})$/', $arg, $m)) { $date = $m[1]; }
}
$source = "{$racine}/docs/blog/articles/{$slug}.php";
if (!preg_match('/^[a-z0-9-]+$/', $slug) || !is_file($source)) { fwrite(STDERR, "source introuvable : docs/blog/articles/{$slug}.php\n"); exit(1); }
$a = require $source;
if ($problemes = blog_article_problemes($a, $slug)) { fwrite(STDERR, "refusé :\n - " . implode("\n - ", $problemes) . "\n"); exit(1); }
$sql = blog_sql_mise_a_jour($a);
if (count(migration_decouper_sql($sql)) !== 1) { fwrite(STDERR, "la migration ne forme pas une seule instruction\n"); exit(1); }
$nom = "{$date}-blog-{$slug}.sql";
foreach (glob("{$racine}/migrations/*-blog-{$slug}.sql") ?: [] as $autre) {
    if (basename($autre) !== $nom) { fwrite(STDERR, 'migration déjà générée : ' . basename($autre) . " (la supprimer d'abord si elle n'est pas déployée)\n"); exit(1); }
}
file_put_contents("{$racine}/migrations/{$nom}", $sql);
echo "migrations/{$nom} (" . blog_mots($a['contenu']) . " mots)\n";
