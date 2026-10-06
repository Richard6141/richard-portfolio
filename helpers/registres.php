<?php
// ============================================================
// helpers/registres.php · Registres de contenu (spec 7.1), vague 0C.
// Un fichier = une page. Le chemin donne le type et le slug, le type donne l'URL.
// Une page n'est servie que si sa date « publie » est atteinte (spec 11.3).
// ============================================================
declare(strict_types=1);

require_once __DIR__ . '/blocs.php';

const REGISTRES_RACINE = __DIR__ . '/../portfolio/data';

/** type => [dossier, profondeur (1 = slug, 2 = parent/pays), motif d'URL]. */
const REGISTRES_TYPES = [
    'page'           => ['pages', 1, '/%s'],
    'service'        => ['services', 1, '/services/%s'],
    'service-pays'   => ['services', 2, '/services/%s'],
    'pays'           => ['pays', 1, '/zones/%s'],
    'formation'      => ['formations', 1, '/formations/%s'],
    'formation-pays' => ['formations', 2, '/formations/%s'],
    'domaine'        => ['domaines', 1, '/formations/domaine/%s'],
    'metier'         => ['metiers', 1, '/formations/metier/%s'],
    'metier-pays'    => ['metiers', 2, '/formations/metier/%s'],
    'secteur'        => ['secteurs', 1, '/secteurs/%s'],
    'histoire'       => ['histoires', 1, '/histoires/%s'],
    'comparatif'     => ['comparatifs', 1, '/comparatifs/%s'],
    'guide'          => ['guides', 1, '/guides/%s'],
    'terme'          => ['glossaire', 1, '/glossaire/%s'],
    'outil'          => ['outils', 1, '/outils/%s'],
    'hub'            => ['hubs', 1, '/%s/'],
];

const REGISTRES_CHAMPS = ['titre', 'title', 'meta', 'en_bref', 'publie', 'maj', 'sections', 'faq', 'sources', 'liens'];

const REGISTRES_CHAMPS_TYPE = [
    'page'      => ['schema'],
    'service'   => ['famille', 'matrice'],
    'pays'      => ['fiche'],
    'formation' => ['domaine', 'forte', 'duree', 'formats', 'programme', 'prix'],
    'metier'    => ['univers', 'prioritaire'],
    'histoire'  => ['relation', 'client'],
    'terme'     => ['terme', 'definition'],
    'hub'       => ['liste'],
];

/** Domaines de formation (spec 6.3). */
const REGISTRES_DOMAINES = ['intelligence-artificielle', 'automatisation', 'developpement', 'erp-gestion', 'marketing-visibilite', 'cybersecurite-it', 'transformation-digitale', 'ia-systemes-existants'];

/** Libellés des domaines, dans l'ordre d'affichage (spec 6.3, vague 1B). */
const REGISTRES_DOMAINES_NOMS = [
    'intelligence-artificielle' => 'Intelligence artificielle',
    'automatisation'            => 'Automatisation',
    'developpement'             => 'Développement',
    'erp-gestion'               => 'ERP et outils de gestion',
    'marketing-visibilite'      => 'Marketing et visibilité',
    'cybersecurite-it'          => 'Cybersécurité et IT',
    'transformation-digitale'   => 'Transformation digitale',
    'ia-systemes-existants'     => 'IA dans vos systèmes existants',
];

/** Univers des pages métier, dans l'ordre d'affichage (spec 6.3 bis, vague 1C). */
const REGISTRES_UNIVERS = ['Droit et justice', 'Chiffre et finance', 'Direction et gestion', 'Commerce et communication', 'Santé et social', 'Secteur public et éducation', 'Technique et terrain'];

/** Familles de services (registre de navigation). */
const REGISTRES_FAMILLES = ['Sites et boutiques', 'Applications et IA', 'Visibilité et conseil', 'ERP et gestion'];

/** Les 34 pays, chargés une fois. */
function pays_liste(): array
{
    static $liste = null;
    return $liste ??= require __DIR__ . '/../portfolio/data/pays-liste.php';
}

/**
 * Drapeau d'un pays (slug ou nom affiché), décoratif : le nom l'accompagne toujours, d'où alt="".
 * SVG de flag-icons (MIT) dans assets/drapeaux ; chaîne vide pour un pays inconnu (06/10/2026).
 */
function drapeau(string $pays, int $largeur = 20): string
{
    static $parNom = null;
    $liste = pays_liste();
    $parNom ??= array_column(array_map(static fn(string $s, array $p): array => [$p['nom'], $s], array_keys($liste), $liste), 1, 0);
    $slug = isset($liste[$pays]) ? $pays : ($parNom[$pays] ?? null);
    if ($slug === null || empty($liste[$slug]['iso'])) {
        return '';
    }
    return '<img class="drapeau" src="/assets/drapeaux/' . $liste[$slug]['iso'] . '.svg" alt="" width="' . $largeur
        . '" height="' . (int) round($largeur * 3 / 4) . '" loading="lazy" decoding="async">';
}

function registre_url(string $type, string $slug): string
{
    return sprintf(REGISTRES_TYPES[$type][2], $slug);
}

/** Chemin du fichier d'une page, ou null si le slug n'a pas la forme attendue (aucune traversée possible). */
function registre_chemin(string $type, string $slug, string $racine = REGISTRES_RACINE): ?string
{
    if (!isset(REGISTRES_TYPES[$type])) {
        return null;
    }
    [$dossier, $profondeur] = REGISTRES_TYPES[$type];
    $motif = $profondeur === 2 ? '#^[a-z0-9-]+/[a-z0-9-]+$#' : '#^[a-z0-9-]+$#';
    if (!preg_match($motif, $slug) || str_starts_with(basename($slug), '_')) {
        return null;
    }
    return $racine . '/' . $dossier . '/' . $slug . '.php';
}

/** slug => chemin de toutes les pages d'un type (fichiers commençant par « _ » exclus). */
function registre_fichiers(string $type, string $racine = REGISTRES_RACINE): array
{
    [$dossier, $profondeur] = REGISTRES_TYPES[$type];
    $motif = $racine . '/' . $dossier . ($profondeur === 2 ? '/*/*.php' : '/*.php');
    $fichiers = [];
    foreach (glob($motif) ?: [] as $chemin) {
        $slug = $profondeur === 2 ? basename(dirname($chemin)) . '/' . basename($chemin, '.php') : basename($chemin, '.php');
        if (registre_chemin($type, $slug, $racine) !== null) {
            $fichiers[$slug] = $chemin;
        }
    }
    ksort($fichiers);
    return $fichiers;
}

/** Erreurs de structure d'une page (liste vide si valide). */
function registre_valider(string $type, string $slug, array $p): array
{
    $e = [];
    foreach (array_merge(REGISTRES_CHAMPS, REGISTRES_CHAMPS_TYPE[$type] ?? []) as $champ) {
        if (!array_key_exists($champ, $p)) {
            $e[] = "champ manquant : {$champ}";
        }
    }
    if (array_key_exists('publie', $p) && $p['publie'] !== null && !preg_match('/^\d{4}-\d{2}-\d{2}$/', (string) $p['publie'])) {
        $e[] = 'publie : date AAAA-MM-JJ ou null attendue';
    }
    if (isset($p['maj']) && !preg_match('/^\d{4}-\d{2}-\d{2}$/', (string) $p['maj'])) {
        $e[] = 'maj : date AAAA-MM-JJ attendue';
    }
    foreach ((array) ($p['sections'] ?? []) as $i => $b) {
        if (!in_array($b['type'] ?? '', BLOCS_TYPES, true)) {
            $e[] = "sections[{$i}] : bloc inconnu « " . ($b['type'] ?? '') . ' »';
        }
    }
    foreach ((array) ($p['faq'] ?? []) as $i => $q) {
        if (empty($q['q']) || empty($q['r'])) {
            $e[] = "faq[{$i}] : q et r attendus";
        }
    }
    foreach ((array) ($p['sources'] ?? []) as $i => $s) {
        if (empty($s['titre']) || !preg_match('#^https://#', (string) ($s['url'] ?? '')) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', (string) ($s['date'] ?? ''))) {
            $e[] = "sources[{$i}] : titre, url https et date attendus";
        }
    }
    if ($type === 'pays' && !isset(pays_liste()[$slug])) {
        $e[] = 'pays inconnu : ' . $slug;
    }
    if (str_ends_with($type, '-pays') && !isset(pays_liste()[basename($slug)])) {
        $e[] = 'pays inconnu : ' . basename($slug);
    }
    if ($type === 'service' && isset($p['famille']) && !in_array($p['famille'], REGISTRES_FAMILLES, true)) {
        $e[] = 'famille inconnue : ' . $p['famille'];
    }
    if ($type === 'formation' && in_array($slug, ['domaine', 'metier'], true)) {
        $e[] = "slug réservé : {$slug}";
    }
    if ($type === 'formation' && isset($p['domaine']) && !in_array($p['domaine'], REGISTRES_DOMAINES, true)) {
        $e[] = 'domaine inconnu : ' . $p['domaine'];
    }
    if ($type === 'metier' && isset($p['univers']) && !in_array($p['univers'], REGISTRES_UNIVERS, true)) {
        $e[] = 'univers inconnu : ' . $p['univers'];
    }
    if ($type === 'histoire' && isset($p['relation']) && !in_array($p['relation'], ['direct', 'sous-traitance', 'produit', 'externe'], true)) {
        $e[] = 'relation : direct, sous-traitance, produit ou externe';
    }
    if ($type === 'page' && isset($p['schema']) && !in_array($p['schema'], ['WebPage', 'AboutPage', 'ProfilePage', 'ContactPage'], true)) {
        $e[] = 'schema : WebPage, AboutPage, ProfilePage ou ContactPage';
    }
    if (isset($p['robots']) && !in_array($p['robots'], ['index', 'noindex'], true)) {
        $e[] = 'robots : index ou noindex';
    }
    return $e;
}

/** Une page valide avec type, slug et url, ou null (absente, slug invalide, données invalides). */
function registre_lire(string $type, string $slug, string $racine = REGISTRES_RACINE): ?array
{
    $chemin = registre_chemin($type, $slug, $racine);
    if ($chemin === null || !is_file($chemin)) {
        return null;
    }
    try {
        $p = require $chemin;
    } catch (\Throwable $e) {
        // Un fichier au PHP invalide ne doit pas faire tomber sitemap, llms.txt ni les hubs.
        error_log("registre {$type}/{$slug} illisible : " . $e->getMessage());
        return null;
    }
    if (!is_array($p)) {
        return null;
    }
    $erreurs = registre_valider($type, $slug, $p);
    if ($erreurs) {
        error_log("registre {$type}/{$slug} invalide : " . implode(' ; ', $erreurs));
        return null;
    }
    // Page rédigée avant sa date de publication : « mis à jour » et dateModified jamais antérieurs à la sortie.
    if (isset($p['maj'], $p['publie']) && is_string($p['publie']) && $p['maj'] < $p['publie']) {
        $p['maj'] = $p['publie'];
    }
    return ['type' => $type, 'slug' => $slug, 'url' => registre_url($type, $slug)] + $p + ['robots' => 'index'];
}

/** slug => page de toutes les pages valides d'un type (cache par requête). */
function registre_tous(string $type, string $racine = REGISTRES_RACINE): array
{
    static $cache = [];
    $cle = $racine . '|' . $type;
    if (!isset($cache[$cle])) {
        $cache[$cle] = [];
        foreach (array_keys(registre_fichiers($type, $racine)) as $slug) {
            if (($p = registre_lire($type, $slug, $racine)) !== null) {
                $cache[$cle][$slug] = $p;
            }
        }
    }
    return $cache[$cle];
}

/** Libellé court d'une page dans une liste de liens : son title sans la marque, à défaut son H1. */
function registre_libelle(array $p): string
{
    return trim((string) preg_replace('/\s*\|\s*Richard SALANON$/u', '', (string) ($p['title'] ?? $p['titre'])));
}

function registre_publiee(array $p, ?string $aujourdhui = null): bool
{
    $publie = $p['publie'] ?? null;
    return is_string($publie) && $publie <= ($aujourdhui ?? date('Y-m-d'));
}

function registre_publiees(string $type, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): array
{
    return array_filter(registre_tous($type, $racine), static fn(array $p): bool => registre_publiee($p, $aujourdhui));
}

/** Pastille du hero par type. */
const REGISTRE_ETIQUETTES = [
    'service' => 'Service', 'service-pays' => 'Service', 'pays' => 'Pays', 'formation' => 'Formation',
    'formation-pays' => 'Formation', 'domaine' => 'Domaine de formation', 'metier' => 'Formation par métier',
    'metier-pays' => 'Formation par métier', 'secteur' => 'Secteur', 'histoire' => 'Histoire client',
    'comparatif' => 'Comparatif', 'guide' => 'Guide', 'terme' => 'Glossaire', 'outil' => 'Outil', 'page' => '', 'hub' => '',
];

/** « 2026-01-02 » vers « 2 janvier 2026 ». */
function registre_date_fr(string $iso): string
{
    $mois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
    [$a, $m, $j] = array_map('intval', explode('-', $iso));
    return $j . ($j === 1 ? 'er' : '') . ' ' . $mois[$m - 1] . ' ' . $a;
}

/**
 * H1 d'une page de registre, échappé. Coupé au premier « : » : la tête reste en grand, la suite
 * s'affiche en sous-titre dans le même H1 ; le « : » reste lu par les lecteurs d'écran et le
 * texte du H1 ne change pas (06/10/2026).
 */
function registre_titre_html(string $titre): string
{
    $parties = preg_split('/\s:\s/u', $titre, 2);
    if (count($parties) < 2) {
        return sanitize($titre);
    }
    return '<span class="titre-tete">' . sanitize($parties[0]) . '<span class="visuellement-cache"> :</span></span> '
        . '<span class="titre-suite">' . sanitize($parties[1]) . '</span>';
}
