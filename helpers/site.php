<?php
// ============================================================
// helpers/site.php · Construction des URL absolues du site.
// Créé le 03/10/2026 (vague 0A). Avant, chaque script lisait
// $_SERVER['HTTP_HOST'] : www.richardsalanon.com servait alors une copie
// complète du site avec des canoniques en www (audit du 03/10/2026).
// ============================================================
declare(strict_types=1);

const SITE_URL_DEFAUT = 'https://richardsalanon.com';

/** Base canonique : la variable d'environnement si elle est fournie, sinon la production. */
function site_base(string|false|null $env): string
{
    $base = is_string($env) ? trim($env) : '';
    return rtrim($base !== '' ? $base : SITE_URL_DEFAUT, '/');
}

/** URL absolue depuis une base et un chemin, sans double barre. */
function site_url_from(string $base, string $chemin = '/'): string
{
    return rtrim($base, '/') . '/' . ltrim($chemin, '/');
}

/** URL absolue canonique d'un chemin du site. */
function site_url(string $chemin = '/'): string
{
    return site_url_from(SITE_URL, $chemin);
}
