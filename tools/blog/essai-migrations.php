<?php
// tools/blog/essai-migrations.php · Applique les migrations du blog sur une base jetable (vague 1F).
// Usage : php tools/blog/essai-migrations.php
// Copie la structure de portfolio_saas.blog_posts, y crée un article par source à la date de son instantané,
// applique la migration de schéma puis chaque migration d'article, vérifie le texte écrit et la garde.
declare(strict_types=1);
$racine = dirname(__DIR__, 2);
require $racine . '/helpers/functions.php';
require_once $racine . '/helpers/migrations.php';

$pdo = new PDO('mysql:host=127.0.0.1;charset=utf8mb4', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$pdo->exec('DROP DATABASE IF EXISTS blog_essai_1f');
$pdo->exec('CREATE DATABASE blog_essai_1f CHARACTER SET utf8mb4');
$pdo->exec('CREATE TABLE blog_essai_1f.blog_posts LIKE portfolio_saas.blog_posts');
$pdo->exec('USE blog_essai_1f');
$sources = [];
foreach (glob($racine . '/docs/blog/articles/*.php') ?: [] as $f) {
    $a = require $f;
    $sources[$a['slug']] = $a;
    $pdo->prepare("INSERT INTO blog_posts (user_id, title, slug, summary, content, status, published_at, updated_at, created_at) VALUES (1, 'avant', ?, 'avant', '<p>avant</p>', 'published', '2026-06-01 08:00:00', ?, '2026-06-01 08:00:00')")
        ->execute([$a['slug'], $a['instantane']]);
}
$premier = array_key_first($sources);
$echecs = 0;
try {
    $migrations = glob($racine . '/migrations/*-blog-*.sql') ?: [];
    sort($migrations, SORT_STRING);
    foreach ($migrations as $m) {
        if ($premier !== null && str_ends_with($m, "-blog-{$premier}.sql")) {
            // Garde : l'article modifié au tableau de bord après l'instantané ne doit pas être écrasé.
            $pdo->prepare("UPDATE blog_posts SET title = 'modifié au tableau de bord', updated_at = DATE_ADD(?, INTERVAL 1 HOUR) WHERE slug = ?")
                ->execute([$sources[$premier]['instantane'], $premier]);
        }
        foreach (migration_decouper_sql((string) file_get_contents($m)) as $instruction) {
            $pdo->exec($instruction);
        }
    }
    foreach ($sources as $slug => $a) {
        $l = $pdo->query('SELECT title, summary, meta, content FROM blog_posts WHERE slug = ' . $pdo->quote($slug))->fetch(PDO::FETCH_ASSOC);
        $attendu = $slug === $premier ? ['title' => 'modifié au tableau de bord'] : ['title' => $a['titre'], 'summary' => $a['resume'], 'meta' => $a['meta'], 'content' => $a['contenu']];
        foreach ($attendu as $col => $valeur) {
            if ($l[$col] !== $valeur) { $echecs++; echo "ECHEC {$slug} : {$col} différent\n"; }
        }
    }
} finally {
    $pdo->exec('DROP DATABASE IF EXISTS blog_essai_1f');
}
echo count($sources), " article(s), {$echecs} écart(s)\n";
exit($echecs > 0 ? 1 : 0);
