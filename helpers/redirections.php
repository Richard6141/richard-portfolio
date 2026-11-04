<?php
// ============================================================
// helpers/redirections.php · Redirections actives et URL finales (spec 6.8), vague 0C.
// ============================================================
declare(strict_types=1);

function redirections_table(): array
{
    static $t = null;
    return $t ??= require __DIR__ . '/../portfolio/data/redirections.php';
}

/** Cible d'une ancienne URL si elle est publiée (page de registre ou article en base), sinon null. */
function redirection_cible(string $chemin, ?array $table = null, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null, ?callable $articleEnLigne = null): ?string
{
    $cible = ($table ?? redirections_table())[$chemin] ?? null;
    if ($cible === null) {
        return null;
    }
    if (preg_match('#^/blog/([a-z0-9-]+)$#', $cible, $m)) {
        return ($articleEnLigne ?? 'blog_article_en_ligne')($m[1]) ? $cible : null;
    }
    return route_resoudre(ltrim($cible, '/'), $racine, $aujourdhui) !== null ? $cible : null;
}

/** Lien interne vers son URL finale (ancre conservée) : aucun lien du site ne passe par une 301. */
function url_finale(string $url, ?array $table = null, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): string
{
    $chemin = (string) (parse_url($url, PHP_URL_PATH) ?? '');
    $ancre  = (string) (parse_url($url, PHP_URL_FRAGMENT) ?? '');
    $cible  = $chemin !== '' ? redirection_cible($chemin, $table, $racine, $aujourdhui) : null;
    return $cible === null ? $url : $cible . ($ancre !== '' ? '#' . $ancre : '');
}

/** 301 immédiat si le chemin demandé a une redirection active. */
function redirection_appliquer(string $chemin): void
{
    if (($cible = redirection_cible($chemin)) !== null) {
        header('Location: ' . SITE_URL . $cible, true, 301);
        exit;
    }
}

/** Articles de blog sans ceux dont l'URL redirige (devenus comparatifs ou fusionnés) : aucune carte vers une 301. */
function blog_sans_rediriges(array $lignes): array
{
    return array_values(array_filter($lignes, static fn(array $l): bool => redirection_cible('/blog/' . ($l['slug'] ?? '')) === null));
}

/**
 * Slugs des articles dont l'URL /blog/... redirige aujourd'hui (cible publiée), pour les exclure dès la requête SQL.
 * Même règle que blog_sans_rediriges() ; sans base, redirection_cible() ne voit aucun article en ligne : liste vide.
 */
function blog_slugs_rediriges(?array $table = null, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null, ?callable $articleEnLigne = null): array
{
    $slugs = [];
    foreach (array_keys($table ?? redirections_table()) as $chemin) {
        if (preg_match('#^/blog/([a-z0-9-]+)$#', (string) $chemin, $m)
            && redirection_cible((string) $chemin, $table, $racine, $aujourdhui, $articleEnLigne) !== null) {
            $slugs[] = $m[1];
        }
    }
    return $slugs;
}

/** Fragment SQL « AND slug NOT IN (?, …) » et ses paramètres liés ; liste vide : pas de fragment. */
function blog_exclusion_sql(array $slugs, string $colonne = 'slug'): array
{
    $slugs = array_values($slugs);
    if ($slugs === []) {
        return ['', []];
    }
    return [' AND ' . $colonne . ' NOT IN (' . implode(', ', array_fill(0, count($slugs), '?')) . ')', $slugs];
}

/** Registre de navigation avec chaque URL ramenée à son URL finale. */
function navigation_chargee(): array
{
    $nav = require __DIR__ . '/../portfolio/data/navigation.php';
    // Un service à publication datée n'apparaît dans le menu qu'à sa date de mise en ligne.
    require_once __DIR__ . '/registres.php';
    foreach ($nav['services'] ?? [] as $famille => $g) {
        $nav['services'][$famille]['liens'] = array_values(array_filter(
            $g['liens'],
            static function (array $l): bool {
                if (!preg_match('#^/services/([a-z0-9-]+)$#', $l[1], $m)) {
                    return true;
                }
                $page = registre_lire('service', $m[1]);
                return $page === null || registre_publiee($page);
            }
        ));
    }
    array_walk_recursive($nav, static function (&$v, $k): void {
        if (is_string($v) && str_starts_with($v, '/')) {
            $v = url_finale($v);
        }
    });
    return $nav;
}
