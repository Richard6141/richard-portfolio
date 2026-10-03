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
    ];
    if (!$complet) {
        return $noeud;
    }
    $noeud['givenName']     = $f['prenom'] ?? null;
    $noeud['familyName']    = $f['nom_famille'] ?? null;
    $noeud['description']   = $f['phrase_entite'];
    $noeud['email']         = $f['email'];
    $noeud['telephone']     = $f['telephone'];
    $noeud['knowsAbout']    = array_values($f['competences']);
    $noeud['knowsLanguage'] = array_keys($f['langues'] ?? []);
    $noeud['image']         = !empty($f['photo']) ? $base . $f['photo'] : null;
    if (!empty($f['formation']['nom'])) {
        $noeud['alumniOf'] = ['@type' => 'CollegeOrUniversity', 'name' => $f['formation']['nom'], 'url' => $f['formation']['url'] ?? null];
    }
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
