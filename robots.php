<?php
// ============================================================
// Nom du fichier : robots.php
// Description    : Génère robots.txt dynamiquement selon le host
//                  Servi via .htaccess : robots.txt → robots.php
// Auth requise   : Non
// ============================================================

declare(strict_types=1);

require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/helpers/functions.php';

$host     = $_SERVER['HTTP_HOST'] ?? 'richard.salanon.info';
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$baseUrl  = $protocol . '://' . $host;

// Vérifier si le portfolio de ce slug est publié
$pdo  = getPDO();
$stmt = $pdo->query("SELECT is_published FROM profiles WHERE user_id = (SELECT id FROM users WHERE is_active = 1 ORDER BY id ASC LIMIT 1)");
$isPublished = (bool) ($stmt->fetchColumn() ?? false);

header('Content-Type: text/plain; charset=UTF-8');
header('Cache-Control: public, max-age=86400'); // Cache 24h

if ($isPublished) {
    // Robots IA nommes explicitement (20/08/2026).
    // A SAVOIR : "User-agent: *" les autorisait DEJA — ces blocs ne debloquent
    // rien de nouveau. Ils servent a lever toute ambiguite pour les crawlers qui
    // cherchent d'abord une regle a leur nom, et a rendre l'intention lisible :
    // ce site VEUT etre lu et cite par les moteurs generatifs.
    // Retirer un agent de cette liste ne le bloque pas : il faut un "Disallow".
    $aiBots = [
        'GPTBot',            // OpenAI — entrainement
        'OAI-SearchBot',     // OpenAI — index de ChatGPT Search
        'ChatGPT-User',      // OpenAI — navigation a la demande
        'ClaudeBot',         // Anthropic
        'Claude-User',       // Anthropic — navigation a la demande
        'PerplexityBot',     // Perplexity
        'Google-Extended',   // Google — Gemini et AI Overviews
        'Applebot-Extended', // Apple Intelligence
        'CCBot',             // Common Crawl (source de nombreux modeles)
        'cohere-ai',         // Cohere
        'Bingbot',           // Bing + Copilot
    ];
    foreach ($aiBots as $bot) {
        echo "User-agent: {$bot}\n";
        echo "Allow: /\n";
        echo "Disallow: /dashboard/\n";
        echo "Disallow: /auth/\n";
        echo "Disallow: /api/\n";
        echo "Disallow: /config/\n\n";
    }

    echo "User-agent: *\n";
    echo "Allow: /\n";
    echo "Disallow: /dashboard/\n";
    echo "Disallow: /auth/\n";
    echo "Disallow: /api/\n";
    echo "Disallow: /config/\n";
    echo "Disallow: /uploads/\n";
    // Autoriser l'indexation des images publiques (avatar, visuels d'articles/services)
    echo "Allow: /uploads/*.jpg$\n";
    echo "Allow: /uploads/*.jpeg$\n";
    echo "Allow: /uploads/*.png$\n";
    echo "Allow: /uploads/*.webp$\n";
    echo "Allow: /uploads/*.gif$\n";
    echo "Allow: /uploads/*.svg$\n";
    echo "Allow: /uploads/*.avif$\n";
    echo "\n";
    // Le 01/09/2026, robots.txt ne declarait que sitemap.php alors que la
    // forme canonique servie est le fichier statique sitemap.xml, plus rapide
    // et mieux traite par les robots. Les deux sont declares : ils renvoient
    // le meme contenu, et le .htaccess bascule sur le PHP si le fichier
    // statique venait a manquer.
    echo "Sitemap: {$baseUrl}/sitemap.xml\n";
    echo "Sitemap: {$baseUrl}/sitemap.php\n";
} else {
    // Portfolio non publié : bloquer tous les bots
    echo "User-agent: *\n";
    echo "Disallow: /\n";
}
