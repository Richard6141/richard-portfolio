<?php
// ============================================================
// helpers/schema.php · Graphe JSON-LD de l'entité « Richard SALANON ».
// Créé le 03/10/2026 (vague 0A, spec 5.3). Une seule balise par page,
// un @graph, des nœuds construits depuis la fiche de faits. Avant : quatre
// balises séparées sur l'accueil, une Person complète seulement là, et une
// Organization « Richard Technologies » concurrente de la personne.
// ============================================================
declare(strict_types=1);

const SCHEMA_TYPES_INTERDITS      = ['AggregateRating', 'Review', 'Rating', 'LocalBusiness'];
const SCHEMA_PROPRIETES_INTERDITES = ['aggregateRating', 'review', 'reviews'];

/** Nœud Person : compact sur toutes les pages, complet sur l'accueil et l'à-propos. */
function schema_personne(array $f, string $base, bool $complet = false): array
{
    $base  = rtrim($base, '/');
    $noeud = [
        '@type'    => 'Person',
        '@id'      => $base . '/#person',
        'name'     => $f['nom'],
        'jobTitle' => $f['intitule'],
        'url'      => $base . '/',
        'address'  => ['@type' => 'PostalAddress', 'addressLocality' => $f['ville'], 'addressCountry' => $f['pays_code']],
        'sameAs'   => array_values($f['profils']),
        // Compétences et formation sur chaque page (spec 5.3, revue du 03/10/2026).
        'knowsAbout' => array_values($f['competences']),
        'alumniOf'   => !empty($f['formation']['nom'])
            ? ['@type' => 'CollegeOrUniversity', 'name' => $f['formation']['nom'], 'url' => $f['formation']['url'] ?? null]
            : null,
        'image'      => !empty($f['photo']) ? $base . $f['photo'] : null,
    ];
    if (!$complet) {
        return $noeud;
    }
    $noeud['givenName']     = $f['prenom'] ?? null;
    $noeud['familyName']    = $f['nom_famille'] ?? null;
    $noeud['description']   = $f['phrase_entite'];
    $noeud['email']         = $f['email'];
    $noeud['telephone']     = $f['telephone'];
    $noeud['knowsLanguage'] = array_keys($f['langues'] ?? []);
    $noeud['affiliation'] = array_map(
        static fn(array $a): array => ['@type' => 'Organization', 'name' => $a['nom'], 'url' => $a['url'] ?? null],
        $f['affiliations'] ?? []
    );
    return $noeud;
}

/** Nœud ProfessionalService : l'offre de Richard, rattachée à la personne. */
function schema_service_pro(array $f, string $base): array
{
    $base  = rtrim($base, '/');
    $noeud = [
        '@type'           => 'ProfessionalService',
        '@id'             => $base . '/#service',
        'name'            => $f['nom'],
        'url'             => $base . '/',
        'description'     => $f['description_courte'],
        'founder'         => ['@id' => $base . '/#person'],
        'address'         => ['@type' => 'PostalAddress', 'addressLocality' => $f['ville'], 'addressCountry' => $f['pays_code']],
        'telephone'       => $f['telephone'],
        'email'           => $f['email'],
        'knowsLanguage'   => array_keys($f['langues'] ?? []),
        'paymentAccepted' => implode(', ', $f['paiements'] ?? []),
        'areaServed'      => array_map(static fn(string $pays): array => ['@type' => 'Country', 'name' => $pays], $f['zones']),
    ];
    if (!empty($f['horaires'])) {
        $noeud['openingHoursSpecification'] = [[
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => $f['horaires']['jours'],
            'opens'     => $f['horaires']['ouverture'],
            'closes'    => $f['horaires']['fermeture'],
        ]];
    }
    return $noeud;
}

/** Nœud WebSite. */
function schema_site_web(array $f, string $base): array
{
    $base = rtrim($base, '/');
    return [
        '@type'      => 'WebSite',
        '@id'        => $base . '/#website',
        'url'        => $base . '/',
        'name'       => $f['nom'],
        'inLanguage' => 'fr',
        'publisher'  => ['@id' => $base . '/#person'],
        'about'      => ['@id' => $base . '/#person'],
    ];
}

/** Les trois nœuds présents sur chaque page. */
function schema_noeuds_base(array $f, string $base, bool $personneComplete = false): array
{
    return [schema_personne($f, $base, $personneComplete), schema_site_web($f, $base), schema_service_pro($f, $base)];
}

/** Nœud FAQPage depuis les questions VISIBLES de la page. */
function schema_faq(array $questions): array
{
    return [
        '@type'      => 'FAQPage',
        'mainEntity' => array_map(static fn(array $qr): array => [
            '@type'          => 'Question',
            'name'           => $qr['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $qr['r']],
        ], array_values($questions)),
    ];
}

/** Retire @context et les valeurs vides, récursivement. */
function schema_nettoyer(array $noeud): array
{
    $propre = [];
    foreach ($noeud as $cle => $valeur) {
        if ($cle === '@context') {
            continue;
        }
        if (is_array($valeur)) {
            $valeur = schema_nettoyer($valeur);
            if ($valeur === []) {
                continue;
            }
        }
        if ($valeur === null || $valeur === '') {
            continue;
        }
        $propre[$cle] = $valeur;
    }
    return array_is_list($noeud) ? array_values($propre) : $propre;
}

/** Lève DomainException si un type ou une propriété interdits apparaissent. */
function schema_verifier(array $noeud): void
{
    foreach ($noeud as $cle => $valeur) {
        if (in_array($cle, SCHEMA_PROPRIETES_INTERDITES, true)) {
            throw new \DomainException("Propriété de schéma interdite : {$cle}");
        }
        if ($cle === '@type') {
            foreach ((array) $valeur as $type) {
                if (in_array($type, SCHEMA_TYPES_INTERDITS, true)) {
                    throw new \DomainException("Type de schéma interdit : {$type}");
                }
            }
        }
        if (is_array($valeur)) {
            schema_verifier($valeur);
        }
    }
}

/** Une balise JSON-LD contenant tous les nœuds de la page. */
function schema_graphe(array $noeuds): string
{
    $parId  = [];
    $sansId = [];
    foreach ($noeuds as $noeud) {
        $noeud = schema_nettoyer($noeud);
        schema_verifier($noeud);
        if (isset($noeud['@id'])) {
            $parId[$noeud['@id']] = isset($parId[$noeud['@id']]) ? array_replace($parId[$noeud['@id']], $noeud) : $noeud;
        } else {
            $sansId[] = $noeud;
        }
    }
    $document = ['@context' => 'https://schema.org', '@graph' => array_merge(array_values($parId), $sansId)];
    $json = json_encode($document, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_THROW_ON_ERROR);
    return '<script type="application/ld+json">' . $json . '</script>';
}

/**
 * Version des gabarits (revue du 03/10/2026) : une donnée fautive (type
 * interdit, UTF-8 invalide) retire le schéma de la page et laisse une trace
 * dans le journal d'erreurs, au lieu de faire tomber toute la page en 500.
 * Les tests et les contrôles qualité utilisent schema_graphe(), stricte.
 */
function schema_graphe_sur(array $noeuds): string
{
    try {
        return schema_graphe($noeuds);
    } catch (\Throwable $e) {
        error_log('schema_graphe : ' . $e->getMessage());
        return '';
    }
}

/** BreadcrumbList depuis [[nom, chemin], ...] ; chemins relatifs à la racine du site. */
function schema_fil_ariane(array $miettes, string $base): array
{
    $items = [];
    foreach (array_values($miettes) as $i => [$nom, $chemin]) {
        $items[] = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $nom, 'item' => $base . $chemin];
    }
    $dernier = end($miettes);
    return ['@type' => 'BreadcrumbList', '@id' => $base . $dernier[1] . '#ariane', 'itemListElement' => $items];
}

/** CollectionPage d'un hub, avec la liste réelle des pages publiées. */
function schema_collection(string $nom, string $chemin, array $elements, string $base): array
{
    $items = [];
    foreach (array_values($elements) as $i => [$titre, $url]) {
        $items[] = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $titre, 'url' => $base . $url];
    }
    return ['@type' => 'CollectionPage', '@id' => $base . $chemin . '#page', 'name' => $nom, 'url' => $base . $chemin,
            'inLanguage' => 'fr', 'isPartOf' => ['@id' => $base . '/#website'],
            'mainEntity' => ['@type' => 'ItemList', 'numberOfItems' => count($items), 'itemListElement' => $items]];
}

/** Nœuds d'une page de registre : principal selon le type (spec 5.3), fil d'Ariane, FAQ visible. */
function schema_page_registre(array $p, array $miettes, string $base): array
{
    $url  = $base . $p['url'];
    $moi  = ['@id' => $base . '/#person'];
    $pays = pays_liste();
    $cle  = str_ends_with($p['type'], '-pays') ? basename($p['slug']) : ($p['type'] === 'pays' ? $p['slug'] : null);
    $zone = ($cle !== null && isset($pays[$cle]))
        ? ['@type' => 'Country', 'name' => $pays[$cle]['nom']]
        : array_map(static fn(array $x): array => ['@type' => 'Country', 'name' => $x['nom']], array_values($pays));

    $noeuds = [];
    switch ($p['type']) {
        case 'service': case 'service-pays': case 'pays': case 'secteur':
            $noeuds[] = ['@type' => 'Service', '@id' => $url . '#service', 'name' => $p['titre'], 'serviceType' => $p['titre'],
                         'description' => $p['meta'], 'url' => $url, 'provider' => $moi, 'areaServed' => $zone];
            break;
        case 'formation': case 'formation-pays': case 'metier': case 'metier-pays':
            $modes = [];
            foreach ((array) ($p['formats'] ?? ['intra', 'distance']) as $f) {
                $modes[] = match ($f) { 'distance' => 'online', 'hybride' => 'blended', default => 'onsite' };
            }
            $noeuds[] = ['@type' => 'Course', '@id' => $url . '#course', 'name' => $p['titre'], 'description' => $p['meta'],
                         'url' => $url, 'inLanguage' => 'fr', 'provider' => $moi,
                         'hasCourseInstance' => array_map(static fn(string $m): array => ['@type' => 'CourseInstance', 'courseMode' => $m], array_values(array_unique($modes)))];
            break;
        case 'histoire': case 'comparatif': case 'guide':
            $noeuds[] = ['@type' => 'Article', '@id' => $url . '#article', 'headline' => $p['titre'], 'description' => $p['meta'],
                         'url' => $url, 'mainEntityOfPage' => $url, 'inLanguage' => 'fr', 'author' => $moi, 'publisher' => $moi,
                         'datePublished' => $p['publie'], 'dateModified' => $p['maj'], 'image' => $base . fait('photo_og')];
            break;
        case 'terme':
            $noeuds[] = ['@type' => 'DefinedTerm', '@id' => $url . '#terme', 'name' => $p['terme'], 'description' => $p['definition'],
                         'url' => $url, 'inDefinedTermSet' => ['@id' => $base . '/glossaire/#termes']];
            break;
        case 'outil':
            $noeuds[] = ['@type' => 'WebApplication', '@id' => $url . '#outil', 'name' => $p['titre'], 'description' => $p['meta'],
                         'url' => $url, 'applicationCategory' => 'BusinessApplication', 'operatingSystem' => 'Web',
                         'isAccessibleForFree' => true, 'author' => $moi];
            break;
        case 'page':
            $n = ['@type' => $p['schema'], '@id' => $url . '#page', 'name' => $p['titre'], 'description' => $p['meta'],
                  'url' => $url, 'inLanguage' => 'fr', 'isPartOf' => ['@id' => $base . '/#website']];
            if ($p['schema'] === 'ProfilePage') {
                $n['mainEntity'] = $moi;
                $n['dateModified'] = $p['maj'];
            }
            $noeuds[] = $n;
            break;
    }
    $noeuds[] = schema_fil_ariane($miettes, $base);
    if (!empty($p['faq'])) {
        $noeuds[] = schema_faq($p['faq']);
    }
    return $noeuds;
}
