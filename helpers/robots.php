<?php
// ============================================================
// helpers/robots.php · Contenu de robots.txt (03/10/2026, spec 5.4).
// Statique : plus aucune requête en base (3,5 s à froid relevées par
// l'audit) et plus de bascule « Disallow: / » pilotée par un drapeau.
// Les robots IA sont nommés pour lever toute ambiguïté : ce site veut
// être lu et cité par les assistants.
// ============================================================
declare(strict_types=1);

const ROBOTS_IA = [
    'GPTBot', 'OAI-SearchBot', 'ChatGPT-User',
    'ClaudeBot', 'Claude-User', 'Claude-SearchBot', 'anthropic-ai',
    'PerplexityBot', 'Perplexity-User',
    'Google-Extended', 'GoogleOther',
    'Applebot', 'Applebot-Extended',
    'Bingbot', 'Amazonbot', 'CCBot', 'meta-externalagent', 'cohere-ai', 'MistralAI-User', 'DuckAssistBot',
];

const ROBOTS_INTERDITS = ['/dashboard/', '/auth/', '/api/', '/config/'];

function robots_txt(string $base): string
{
    $base   = rtrim($base, '/');
    $regles = '';
    foreach (ROBOTS_INTERDITS as $chemin) {
        $regles .= "Disallow: {$chemin}\n";
    }
    // Plus précis que « Disallow: /api/ » : la règle la plus longue l'emporte.
    $regles .= "Allow: /api/thumb.php\n";

    $sortie = "# robots.txt de richardsalanon.com\n\n";
    foreach (ROBOTS_IA as $robot) {
        $sortie .= "User-agent: {$robot}\nAllow: /\n{$regles}\n";
    }
    $sortie .= "User-agent: *\nAllow: /\n{$regles}Disallow: /uploads/\n";
    foreach (['jpg', 'jpeg', 'png', 'webp', 'gif', 'svg', 'avif'] as $ext) {
        $sortie .= "Allow: /uploads/*.{$ext}\$\n";
    }
    return $sortie . "\nSitemap: {$base}/sitemap.xml\n";
}
