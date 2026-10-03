<?php
// ============================================================
// helpers/llms.php · llms.txt et llms-full.txt (03/10/2026, spec 5.4).
// Avant : fichier statique écrit sans accents, qui listait 1 article sur 24,
// aucune formation, aucune réalisation, et une autre formulation du métier.
// Désormais généré depuis la fiche de faits et les registres : il ne peut
// plus diverger du site.
// ============================================================
declare(strict_types=1);

/** Une ligne de lien au format llms.txt. */
function llms_ligne(array $item): string
{
    $resume = trim((string) ($item['resume'] ?? ''));
    return '- [' . $item['titre'] . '](' . $item['url'] . ')' . ($resume !== '' ? ' : ' . $resume : '') . "\n";
}

/** Contenu de llms.txt (ou llms-full.txt si $complet). Pure : testable sans serveur. */
function llms_contenu(array $f, string $base, array $sections, bool $complet): string
{
    $base = rtrim($base, '/');
    $txt  = '# ' . $f['nom'] . "\n\n> " . $f['phrase_entite'] . "\n\n";
    $txt .= $f['intitule'] . '. Contact : ' . $f['email'] . ', téléphone et WhatsApp ' . $f['telephone'] . ".\n";
    $txt .= 'Zones servies : ' . implode(', ', $f['zones']) . ".\n\n";

    $reperes = [];
    if (!empty($f['experience_ans'])) {
        $reperes[] = 'Expérience : plus de ' . $f['experience_ans'] . ' ans de développement logiciel.';
    }
    if (!empty($f['projets_livres'])) {
        $reperes[] = 'Projets livrés : ' . $f['projets_livres'] . '.';
    }
    if (!empty($f['tarifs_depart'])) {
        $tarifs = [];
        foreach ($f['tarifs_depart'] as $offre => $prix) {
            $tarifs[] = $offre . ' à partir de ' . $prix;
        }
        $reperes[] = 'Tarifs de départ : ' . implode(' ; ', $tarifs) . '. Devis gratuit après cadrage.';
    }
    if (!empty($f['delais'])) {
        $delais = [];
        foreach ($f['delais'] as $projet => $duree) {
            $delais[] = $projet . ' : ' . $duree;
        }
        $reperes[] = 'Délais : ' . implode(' ; ', $delais) . '.';
    }
    if (!empty($f['paiements'])) {
        $reperes[] = 'Paiement : ' . implode(', ', $f['paiements']) . '.';
    }
    if (!empty($f['langues'])) {
        $reperes[] = 'Langues de travail : ' . mb_strtolower(implode(', ', $f['langues'])) . '.';
    }
    foreach ($f['produits'] ?? [] as $p) {
        $reperes[] = 'Produit : [' . $p['nom'] . '](' . $p['url'] . '), ' . $p['description'];
    }
    foreach ($f['affiliations'] ?? [] as $a) {
        $reperes[] = $a['role'] . ' d\'[' . $a['nom'] . '](' . $a['url'] . ').';
    }
    if ($reperes) {
        $txt .= "## Repères\n\n- " . implode("\n- ", $reperes) . "\n\n";
    }

    foreach ($sections as $titre => $items) {
        if (!$items) {
            continue;
        }
        $txt .= '## ' . $titre . "\n\n";
        foreach ($items as $item) {
            $txt .= llms_ligne($item);
        }
        $txt .= "\n";
    }

    if ($complet) {
        $txt .= "## Compétences\n\n- " . implode("\n- ", $f['competences']) . "\n\n";
        $faq = require __DIR__ . '/../portfolio/templates/horizon-faq.php';
        $txt .= "## Questions fréquentes\n\n";
        foreach ($faq as $qr) {
            $txt .= '### ' . $qr['q'] . "\n\n" . $qr['r'] . "\n\n";
        }
    }

    $txt .= "## Pages principales\n\n";
    foreach ([
        ['titre' => 'À propos de ' . $f['nom'], 'url' => $base . '/a-propos/'],
        ['titre' => 'Contact et devis gratuit', 'url' => $base . '/contact'],
        ['titre' => 'Tous les services', 'url' => $base . '/services/'],
        ['titre' => 'Toutes les formations', 'url' => $base . '/formations/'],
        ['titre' => 'Zones desservies', 'url' => $base . '/zones/'],
        ['titre' => 'Blog', 'url' => $base . '/blog/'],
    ] as $item) {
        $txt .= llms_ligne($item);
    }
    return $txt;
}

/** Lignes issues d'une requête SQL, ou [] si la base est absente ou la requête échoue. */
function llms_requete(?PDO $pdo, string $sql, callable $ligne): array
{
    if ($pdo === null) {
        return [];
    }
    try {
        return array_map($ligne, $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC));
    } catch (\Throwable $e) {
        return [];
    }
}

/** Sections de llms.txt depuis la base (si disponible) et les registres de fichiers. */
function llms_collecter(?PDO $pdo, string $base, bool $complet): array
{
    $base     = rtrim($base, '/');
    $sections = [
        'Services' => llms_requete($pdo, 'SELECT title, description FROM services ORDER BY sort_order ASC', static fn(array $r): array => [
            'titre' => $r['title'], 'url' => $base . '/services/' . generateSlug($r['title']), 'resume' => (string) $r['description'],
        ]),
        'Formations'    => [],
        'Expertise'     => [],
        'Réalisations'  => llms_requete($pdo, "SELECT slug, title, description_short FROM projects WHERE slug IS NOT NULL AND slug <> '' ORDER BY is_featured DESC, sort_order ASC", static fn(array $r): array => [
            'titre' => $r['title'], 'url' => $base . '/realisations/' . $r['slug'], 'resume' => (string) ($r['description_short'] ?? ''),
        ]),
        'Articles' => llms_requete($pdo, "SELECT slug, title, summary FROM blog_posts WHERE status = 'published' AND (published_at IS NULL OR published_at <= NOW()) ORDER BY published_at DESC", static fn(array $r): array => [
            'titre' => $r['title'], 'url' => $base . '/blog/' . $r['slug'], 'resume' => (string) ($r['summary'] ?? ''),
        ]),
    ];
    $locales = [];

    $sujets = require __DIR__ . '/../portfolio/data/sujets.php';
    foreach ($sujets as $slugSujet => $sujet) {
        foreach ($sujet['pages'] as $page) {
            $item = ['titre' => $page['titre'], 'url' => $base . '/' . $page['slug'], 'resume' => (string) ($page['accroche'] ?? '')];
            if ($slugSujet === 'expertise') {
                $sections['Expertise'][] = $item;
            } elseif (str_starts_with($slugSujet, 'formation-') && ($page['ville_slug'] ?? '') === '') {
                $sections['Formations'][] = $item;
            } else {
                $locales[] = $item;
            }
        }
    }
    foreach ((array) (require __DIR__ . '/../portfolio/data/villes.php') as $ville) {
        if (!empty($ville['slug'])) {
            $locales[] = ['titre' => 'Développeur web à ' . $ville['nom'], 'url' => $base . '/developpeur-web-' . $ville['slug'], 'resume' => (string) ($ville['accroche'] ?? '')];
        }
    }
    if ($complet) {
        $sections['Pages locales'] = $locales;
    }
    return $sections;
}
