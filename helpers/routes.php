<?php
// ============================================================
// helpers/routes.php · URL vers page de registre (spec 7.4), vague 0C.
// Pure : aucune sortie, testable sans serveur. L'ordre des motifs compte
// (domaine et metier avant formation × pays).
// ============================================================
declare(strict_types=1);

const ROUTES_REGISTRES = [
    '#^([a-z0-9-]+)/$#'                             => 'hub',
    '#^services/([a-z0-9-]+/[a-z0-9-]+)$#'          => 'service-pays',
    '#^services/([a-z0-9-]+)$#'                     => 'service',
    '#^zones/([a-z0-9-]+)$#'                        => 'pays',
    '#^formations/domaine/([a-z0-9-]+)$#'           => 'domaine',
    '#^formations/metier/([a-z0-9-]+/[a-z0-9-]+)$#' => 'metier-pays',
    '#^formations/metier/([a-z0-9-]+)$#'            => 'metier',
    '#^formations/([a-z0-9-]+/[a-z0-9-]+)$#'        => 'formation-pays',
    '#^formations/([a-z0-9-]+)$#'                   => 'formation',
    '#^secteurs/([a-z0-9-]+)$#'                     => 'secteur',
    '#^histoires/([a-z0-9-]+)$#'                    => 'histoire',
    '#^comparatifs/([a-z0-9-]+)$#'                  => 'comparatif',
    '#^guides/([a-z0-9-]+)$#'                       => 'guide',
    '#^glossaire/([a-z0-9-]+)$#'                    => 'terme',
    '#^outils/([a-z0-9-]+)$#'                       => 'outil',
    '#^([a-z0-9-]+)$#'                              => 'page',
];

/** Page publiée servie à ce chemin (sans barre initiale), ou null. */
function route_resoudre(string $chemin, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): ?array
{
    foreach (ROUTES_REGISTRES as $motif => $type) {
        if (preg_match($motif, $chemin, $m)) {
            $p = registre_lire($type, $m[1], $racine);
            return ($p !== null && registre_publiee($p, $aujourdhui)) ? $p : null;
        }
    }
    return null;
}

/** 404 franc, page d'erreur du site. */
function route_404(): never
{
    http_response_code(404);
    include __DIR__ . '/../404.php';
    exit;
}
