<?php
// ============================================================
// helpers/maillage.php · Maillage interne généré depuis les registres (spec 9), vague 0C.
// Seules les pages publiées sont proposées : un lien ne mène jamais à une 404.
// ============================================================
declare(strict_types=1);

/** Clé de « liens » => [type, titre du groupe]. */
const MAILLAGE_EDITORIAL = [
    'services'    => ['service', 'Services liés'],
    'formations'  => ['formation', 'Formations liées'],
    'metiers'     => ['metier', 'Formations par métier'],
    'secteurs'    => ['secteur', 'Secteurs'],
    'histoires'   => ['histoire', 'Histoires clients'],
    'comparatifs' => ['comparatif', 'Comparatifs'],
    'guides'      => ['guide', 'Guides'],
    'pays'        => ['pays', 'Pays'],
    'termes'      => ['terme', 'Glossaire'],
];

/** Hub de rattachement par type : [nom, chemin, hub du registre ou null si hub historique toujours servi]. */
const MAILLAGE_HUBS = [
    'service' => ['Services', '/services/', null], 'service-pays' => ['Services', '/services/', null],
    'pays' => ['Zones', '/zones/', null],
    'formation' => ['Formations', '/formations/', null], 'formation-pays' => ['Formations', '/formations/', null],
    'domaine' => ['Formations', '/formations/', null], 'metier' => ['Formations', '/formations/', null],
    'metier-pays' => ['Formations', '/formations/', null],
    'secteur' => ['Secteurs', '/secteurs/', 'secteurs'], 'histoire' => ['Histoires', '/histoires/', 'histoires'],
    'comparatif' => ['Comparatifs', '/comparatifs/', 'comparatifs'], 'guide' => ['Guides', '/guides/', 'guides'],
    'terme' => ['Glossaire', '/glossaire/', 'glossaire'],
];

/** Page publiée d'un type, ou null. */
function maillage_page(string $type, string $slug, string $racine, ?string $aujourdhui): ?array
{
    $p = registre_lire($type, $slug, $racine);
    return ($p !== null && registre_publiee($p, $aujourdhui)) ? $p : null;
}

function maillage_ariane(array $p, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): array
{
    $miettes = [['Accueil', '/']];
    if (isset(MAILLAGE_HUBS[$p['type']])) {
        [$nom, $chemin, $hub] = MAILLAGE_HUBS[$p['type']];
        if ($hub === null || maillage_page('hub', $hub, $racine, $aujourdhui) !== null) {
            $miettes[] = [$nom, $chemin];
        }
    }
    $parent = match ($p['type']) {
        'service-pays' => ['service', dirname($p['slug'])],
        'formation-pays' => ['formation', dirname($p['slug'])],
        'metier-pays' => ['metier', dirname($p['slug'])],
        'formation' => ['domaine', (string) ($p['domaine'] ?? '')],
        default => null,
    };
    if ($parent !== null && $parent[1] !== '' && ($pp = maillage_page($parent[0], $parent[1], $racine, $aujourdhui)) !== null) {
        $miettes[] = [$pp['titre'], $pp['url']];
    }
    $miettes[] = [$p['titre'], $p['url']];
    return $miettes;
}

/** Villes historiques (data/villes.php), chargées dans leur propre portée : le fichier définit ses variables. */
function maillage_villes(): array
{
    static $villes = null;
    return $villes ??= (array) require __DIR__ . '/../portfolio/data/villes.php';
}

/** Pages historiques « sujet × ville » (data/sujets.php), à plat : slug => [titre, url]. Vague 1E. */
function maillage_sujets(): array
{
    static $pages = null;
    if ($pages === null) {
        $pages = [];
        foreach ((array) require __DIR__ . '/../portfolio/data/sujets.php' as $sujet) {
            foreach ((array) ($sujet['pages'] ?? []) as $pg) {
                if (!empty($pg['slug'])) {
                    $pages[(string) $pg['slug']] = ['titre' => (string) $pg['titre'], 'url' => '/' . $pg['slug']];
                }
            }
        }
    }
    return $pages;
}

function maillage_liens(array $p, string $racine = REGISTRES_RACINE, ?string $aujourdhui = null): array
{
    $groupes = [];
    $ajouter = static function (string $titre, array $pages) use (&$groupes, $p): void {
        $liens = [];
        foreach ($pages as $q) {
            if ($q !== null && $q['url'] !== $p['url']) {
                $liens[$q['url']] = [$q['titre'], $q['url']];
            }
        }
        if ($liens) {
            $groupes[] = ['titre' => $titre, 'liens' => array_values($liens)];
        }
    };
    $pays  = pays_liste();
    $slugP = str_ends_with($p['type'], '-pays') ? basename($p['slug']) : null;

    switch ($p['type']) {
        case 'service':
            $ajouter('Ce service par pays', array_filter(registre_publiees('service-pays', $racine, $aujourdhui),
                static fn(array $q): bool => dirname($q['slug']) === $p['slug']));
            break;
        case 'service-pays':
            $pilier = dirname($p['slug']);
            $ajouter('Le service en détail', [maillage_page('service', $pilier, $racine, $aujourdhui), maillage_page('pays', $slugP, $racine, $aujourdhui)]);
            $ajouter('Le même service dans les pays voisins', array_map(
                static fn(string $v): ?array => maillage_page('service-pays', $pilier . '/' . $v, $racine, $aujourdhui), $pays[$slugP]['voisins']));
            $ajouter('Autres services ' . $pays[$slugP]['dans'], array_slice(array_filter(registre_publiees('service-pays', $racine, $aujourdhui),
                static fn(array $q): bool => basename($q['slug']) === $slugP && dirname($q['slug']) !== $pilier), 0, 3));
            break;
        case 'pays':
            $ajouter('Services ' . $pays[$p['slug']]['dans'], array_filter(registre_publiees('service-pays', $racine, $aujourdhui),
                static fn(array $q): bool => basename($q['slug']) === $p['slug']));
            $ajouter('Formations ' . $pays[$p['slug']]['dans'], array_filter(array_merge(registre_publiees('formation-pays', $racine, $aujourdhui), registre_publiees('metier-pays', $racine, $aujourdhui)),
                static fn(array $q): bool => basename($q['slug']) === $p['slug']));
            $ajouter('Pays voisins', array_map(static fn(string $v): ?array => maillage_page('pays', $v, $racine, $aujourdhui), $pays[$p['slug']]['voisins']));
            $villes = [];
            foreach (maillage_villes() as $v) {
                if (($v['pays_slug'] ?? '') === $p['slug']) {
                    $villes[] = ['titre' => 'Développeur web à ' . $v['nom'], 'url' => '/developpeur-web-' . $v['slug']];
                }
            }
            $ajouter('Villes', $villes);
            break;
        case 'formation':
        case 'metier':
            $enfant = $p['type'] . '-pays';
            $ajouter($p['type'] === 'metier' ? 'Ce métier par pays' : 'Cette formation par pays', array_filter(registre_publiees($enfant, $racine, $aujourdhui),
                static fn(array $q): bool => dirname($q['slug']) === $p['slug']));
            // Vague 1C : une fiche formation renvoie vers les pages métier publiées qui la citent.
            if ($p['type'] === 'formation') {
                // Libellé court : les H1 des pages métier font deux lignes et se répètent dans la liste.
                $ajouter('Formations par métier', array_map(static fn(array $q): array => ['titre' => registre_libelle($q)] + $q,
                    array_filter(registre_publiees('metier', $racine, $aujourdhui),
                        static fn(array $q): bool => in_array($p['slug'], (array) ($q['liens']['formations'] ?? []), true))));
            }
            break;
        case 'histoire':
        case 'comparatif':
        case 'guide':
            $titres = ['histoire' => 'Autres histoires', 'comparatif' => 'Autres comparatifs', 'guide' => 'Guides voisins'];
            $ajouter($titres[$p['type']], array_slice(array_values(array_filter(registre_publiees($p['type'], $racine, $aujourdhui),
                static fn(array $q): bool => $q['slug'] !== $p['slug'])), 0, 3));
            break;
    }
    foreach ((array) ($p['liens'] ?? []) as $cle => $slugs) {
        if (isset(MAILLAGE_EDITORIAL[$cle])) {
            [$type, $titre] = MAILLAGE_EDITORIAL[$cle];
            $ajouter($titre, array_map(static fn(string $s): ?array => maillage_page($type, $s, $racine, $aujourdhui), (array) $slugs));
        }
    }
    return $groupes;
}

/** Lien de la boîte auteur : la page auteur dès sa publication, l'à-propos avant. */
function boite_auteur_lien(): string
{
    $p = registre_lire('page', 'richard-salanon');
    return ($p !== null && registre_publiee($p)) ? '/richard-salanon' : '/a-propos/';
}
