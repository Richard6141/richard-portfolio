<?php
// ============================================================
// tools/qa/lib.php · Analyse des pages pour les contrôles qualité
// (03/10/2026, spec 8). Partagé par crawl.php et unicite.php.
// ============================================================
declare(strict_types=1);

const QA_TYPES_INTERDITS = ['AggregateRating', 'Review', 'Rating', 'LocalBusiness'];

/** Mots français qui n'existent jamais sans accent : leur présence trahit une saisie en ASCII. */
const QA_MOTS_SANS_ACCENT = [
    'deja', 'tres', 'meme', 'apres', 'etre', 'equipe', 'equipes', 'developpement', 'developpeur',
    'referencement', 'donnees', 'systeme', 'systemes', 'numerique', 'creation', 'strategie',
    'methode', 'etape', 'etapes', 'qualite', 'securite', 'benin', 'senegal', 'reseau', 'reseaux',
    'societe', 'activite', 'derniere', 'premiere', 'interet',
];

/** @return array{code:int, corps:string} */
function qa_get(string $url, int $pauseMs = 0): array
{
    if ($pauseMs > 0) {
        usleep($pauseMs * 1000); // l'audit a déclenché le défi du CDN au-delà de ~350 requêtes rapides
    }
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_TIMEOUT        => 40,
        // Pas d'Accept-Encoding (03/10/2026) : le CDN Hostinger sert un défi
        // JavaScript (403) aux clients qui annoncent la compression depuis une
        // IP déjà très sollicitée ; sans cet en-tête, la page est servie.
        CURLOPT_USERAGENT      => 'Mozilla/5.0 (compatible; controle-qualite-richardsalanon)',
    ]);
    $corps = (string) curl_exec($ch);
    $code  = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    curl_close($ch);
    return ['code' => $code, 'corps' => $corps];
}

/** URL listées par le sitemap du site. */
function qa_urls_sitemap(string $base, int $pauseMs = 0): array
{
    $r = qa_get(rtrim($base, '/') . '/sitemap.xml', $pauseMs);
    preg_match_all('#<loc>([^<]+)</loc>#', $r['corps'], $m);
    return array_values(array_unique(array_map(static fn(string $u): string => html_entity_decode($u, ENT_XML1), $m[1])));
}

function qa_texte_principal(string $html): string
{
    if (preg_match('#<main\b[^>]*>(.*)</main>#si', $html, $m) === 1) {
        $html = $m[1];
    }
    $html  = preg_replace('#<(script|style|noscript|svg|nav|header|footer|aside|template)\b[^>]*>.*?</\1>#si', ' ', $html) ?? $html;
    $html  = preg_replace('#<(br|/p|/li|/h[1-6]|/div|/td|/th|/dt|/dd|/summary)\b[^>]*>#i', "\n", $html) ?? $html;
    $texte = html_entity_decode(strip_tags($html), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    return trim(preg_replace('/[ \t\x{00A0}]+/u', ' ', $texte) ?? $texte);
}

function qa_compter_mots(string $texte): int
{
    return (int) preg_match_all('/[\p{L}\p{N}]+(?:[\'\x{2019}-][\p{L}\p{N}]+)*/u', $texte);
}

/** @return array{title:string, description:string, canonical:string, robots:string, h1:int} */
function qa_meta(string $html): array
{
    $decoder = static fn(string $s): string => html_entity_decode(trim($s), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    return [
        'title'       => preg_match('#<title>(.*?)</title>#si', $html, $m) === 1 ? $decoder($m[1]) : '',
        'description' => preg_match('#<meta\s+name="description"\s+content="([^"]*)"#i', $html, $m) === 1 ? $decoder($m[1]) : '',
        'canonical'   => preg_match('#<link\s+rel="canonical"\s+href="([^"]+)"#i', $html, $m) === 1 ? $m[1] : '',
        'robots'      => preg_match('#<meta\s+name="robots"\s+content="([^"]*)"#i', $html, $m) === 1 ? $m[1] : '',
        'h1'          => (int) preg_match_all('#<h1\b#i', $html),
    ];
}

/** Collecte récursive des @type. */
function qa_types(array $noeud, array &$types): void
{
    foreach ($noeud as $cle => $valeur) {
        if ($cle === '@type') {
            foreach ((array) $valeur as $type) {
                $types[] = (string) $type;
            }
        } elseif (is_array($valeur)) {
            qa_types($valeur, $types);
        }
    }
}

/** @return array{balises:int, types:list<string>, erreurs:list<string>} */
function qa_jsonld(string $html): array
{
    preg_match_all('#<script type="application/ld\+json">(.*?)</script>#si', $html, $m);
    $types   = [];
    $erreurs = [];
    foreach ($m[1] as $json) {
        $doc = json_decode($json, true);
        if (!is_array($doc)) {
            $erreurs[] = 'JSON-LD illisible';
            continue;
        }
        qa_types($doc, $types);
    }
    return ['balises' => count($m[1]), 'types' => array_values(array_unique($types)), 'erreurs' => $erreurs];
}

/** Problèmes de texte visible : tirets, flèches, gabarits, mots sans accent. */
function qa_texte_interdit(string $texte): array
{
    $problemes = [];
    foreach (["\u{2014}" => 'tiret cadratin', "\u{2192}" => 'flèche', '{{' => 'gabarit non remplacé', 'TODO' => 'TODO', '[À COMPLÉTER]' => 'à compléter'] as $motif => $nom) {
        if (str_contains($texte, $motif)) {
            $problemes[] = $nom;
        }
    }
    // Frontières en lettres Unicode : avec \b, « kilomètres » donnait « tres ».
    if (preg_match_all('/(?<!\p{L})(' . implode('|', QA_MOTS_SANS_ACCENT) . ')(?!\p{L})/iu', $texte, $m) > 0) {
        foreach (array_unique(array_map('strtolower', $m[1])) as $mot) {
            $problemes[] = 'sans accent : ' . $mot;
        }
    }
    return $problemes;
}

/**
 * Liens d'une page : internes (absolus, sans ancre), vers l'ancien domaine,
 * et WhatsApp invalides (numéro béninois à 10 chiffres après 229 attendu :
 * paulmaximedossou.com en avait un faux sur 1 521 pages).
 * @return array{internes:list<string>, ancien_domaine:list<string>, whatsapp_invalides:list<string>}
 */
function qa_liens(string $html, string $base): array
{
    $base = rtrim($base, '/');
    $hote = (string) parse_url($base, PHP_URL_HOST);
    preg_match_all('#<a\s[^>]*href="([^"]+)"#i', $html, $m);
    $sortie = ['internes' => [], 'ancien_domaine' => [], 'whatsapp_invalides' => []];
    foreach ($m[1] as $href) {
        $href = html_entity_decode($href, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        if (str_contains($href, 'richard.salanon.info')) {
            $sortie['ancien_domaine'][] = $href;
            continue;
        }
        if (preg_match('#^https?://(api\.)?wa\.me/(\d+)#', $href, $wa) === 1) {
            if (str_starts_with($wa[2], '229') && strlen($wa[2]) !== 13) {
                $sortie['whatsapp_invalides'][] = strtok($href, '?');
            }
            continue;
        }
        if (str_starts_with($href, '/') && !str_starts_with($href, '//')) {
            $href = $base . $href;
        }
        if (parse_url($href, PHP_URL_HOST) === $hote) {
            $sortie['internes'][] = strtok($href, '#');
        }
    }
    $sortie['internes'] = array_values(array_unique(array_filter($sortie['internes'])));
    return $sortie;
}

/** Formulations d'identité contraires à la fiche de faits. */
function qa_faits_incoherents(string $texte, array $faits): array
{
    $problemes = [];
    if (str_contains($texte, 'Richard Technologies')) {
        $problemes[] = 'ancienne marque';
    }
    if (!empty($faits['experience_ans']) && preg_match_all('/(\d+)\s*ans d[\'\x{2019}]exp/u', $texte, $m) > 0) {
        foreach (array_unique($m[1]) as $ans) {
            if ((int) $ans !== (int) $faits['experience_ans']) {
                $problemes[] = "ancienneté {$ans} ans au lieu de {$faits['experience_ans']}";
            }
        }
    }
    return $problemes;
}

/** Noms de villes et de pays des registres, à neutraliser avant comparaison. */
function qa_noms_de_lieux(): array
{
    $racine = dirname(__DIR__, 2) . '/portfolio/data';
    $noms   = (require $racine . '/faits.php')['zones'];
    foreach ((array) (require $racine . '/villes.php') as $ville) {
        $noms[] = (string) ($ville['nom'] ?? '');
        $noms[] = (string) ($ville['pays'] ?? '');
    }
    foreach ((array) (require $racine . '/sujets.php') as $sujet) {
        foreach ($sujet['pages'] as $page) {
            $noms[] = (string) ($page['ville'] ?? '');
            $noms[] = (string) ($page['pays'] ?? '');
        }
    }
    $noms = array_values(array_unique(array_filter($noms, static fn(string $n): bool => mb_strlen($n) >= 3)));
    usort($noms, static fn(string $a, string $b): int => mb_strlen($b) <=> mb_strlen($a)); // les plus longs d'abord
    return $noms;
}

/** Minuscules, lieux remplacés par un jeton, accents retirés, ponctuation supprimée. */
function qa_normaliser(string $texte, array $neutres = []): string
{
    $t = mb_strtolower($texte);
    foreach ($neutres as $nom) {
        $t = str_replace(mb_strtolower($nom), ' zzlieuzz ', $t);
    }
    $ascii = transliterator_transliterate('Any-Latin; Latin-ASCII', $t);
    $t     = is_string($ascii) ? $ascii : $t;
    return trim(preg_replace('/[^a-z0-9]+/', ' ', $t) ?? $t);
}

/** @return array<string,true> bardeaux de $n mots */
function qa_bardeaux(string $texte, int $n = 5, array $neutres = []): array
{
    $mots      = preg_split('/\s+/', qa_normaliser($texte, $neutres), -1, PREG_SPLIT_NO_EMPTY) ?: [];
    $bardeaux  = [];
    for ($i = 0, $fin = count($mots) - $n; $i <= $fin; $i++) {
        $bardeaux[implode(' ', array_slice($mots, $i, $n))] = true;
    }
    return $bardeaux;
}

/** Indice de Jaccard entre deux ensembles de bardeaux. */
function qa_ressemblance(array $a, array $b): float
{
    $inter = count(array_intersect_key($a, $b));
    $union = count($a) + count($b) - $inter;
    // (float) : une division exacte entre entiers renverrait un int en PHP.
    return $union === 0 ? 0.0 : (float) ($inter / $union);
}

/** Part des bardeaux de $a absents de toutes les autres pages. */
function qa_part_propre(array $a, array $autres): float
{
    if ($a === []) {
        return 0.0;
    }
    $propres = $a;
    foreach ($autres as $autre) {
        $propres = array_diff_key($propres, $autre);
    }
    return (float) (count($propres) / count($a));
}

/** Rendu en mémoire d'une page de registre (même gabarit que le site, date ignorée). */
function qa_rendre_registre(array $page, string $racine = REGISTRES_RACINE): string
{
    $registreRacine = $racine;
    $pdo = null; $userId = 0; $profile = []; $contactInfo = []; $socialLinks = [];
    $fullName = fait('nom'); $h_city = fait('ville'); $h_phone = fait('telephone'); $h_email = fait('email');
    $h_mailto = '/contact'; $h_logo = siteLogoUrl(); $portfolioUrl = SITE_URL;
    ob_start();
    include __DIR__ . '/../../portfolio/' . (in_array($page['type'], ['hub', 'domaine'], true) ? 'registre-hub.php' : 'registre.php');
    return (string) ob_get_clean();
}

/** Devise conforme (spec 6.4) : jamais de franc CFA hors d'Afrique, prix africain en devise locale. */
function qa_devise_conforme(string $texte, string $devise): bool
{
    $cfa  = (bool) preg_match('/\b(?:F\s?CFA|FCFA|XOF|XAF)\b/u', $texte);
    $euro = (bool) preg_match('/€|\bEUR\b|\beuros?\b/u', $texte);
    if (in_array($devise, ['EUR', 'CHF', 'CAD'], true)) {
        return !$cfa;
    }
    if (in_array($devise, ['XOF', 'XAF'], true) && $euro) {
        return $cfa;
    }
    return true;
}

/** Le FAQPage reprend exactement les questions visibles du bloc FAQ. */
function qa_faq_conforme(string $html): bool
{
    $visibles = 0;
    if (preg_match('#<section class="bloc bloc--faq"[^>]*>(.*?)</section>#s', $html, $m)) {
        $visibles = substr_count($m[1], '<details');
    }
    $declarees = 0;
    if (preg_match('#<script type="application/ld\+json">(.*?)</script>#s', $html, $j)) {
        foreach ((json_decode($j[1], true)['@graph'] ?? []) as $n) {
            if (($n['@type'] ?? '') === 'FAQPage') {
                $declarees = count($n['mainEntity'] ?? []);
            }
        }
    }
    return $visibles === $declarees;
}

/** Échecs de la section 8 pour une page rendue. */
function qa_controle_page(array $page, string $html): array
{
    $echecs = [];
    $texte  = qa_texte_principal($html);
    $meta   = qa_meta($html);
    $index  = ($page['robots'] ?? 'index') === 'index';
    if ($index && qa_compter_mots($texte) < 3200) {
        $echecs[] = 'mots (' . qa_compter_mots($texte) . ')';
    }
    $lt = mb_strlen(html_entity_decode($meta['title'], ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    $ld = mb_strlen(html_entity_decode($meta['description'], ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    if ($lt < 50 || $lt > 60) { $echecs[] = "title ({$lt})"; }
    if ($ld < 140 || $ld > 155) { $echecs[] = "meta ({$ld})"; }
    if ($meta['h1'] !== 1) { $echecs[] = 'h1'; }
    $ld_json = qa_jsonld($html);
    if ($ld_json['balises'] !== 1 || $ld_json['erreurs'] || array_intersect($ld_json['types'], QA_TYPES_INTERDITS)) { $echecs[] = 'schema'; }
    if (!qa_faq_conforme($html)) { $echecs[] = 'faq'; }
    if ($t = qa_texte_interdit($texte)) { $echecs[] = 'texte (' . implode(', ', $t) . ')'; }
    if ($f = qa_faits_incoherents($texte, faits())) { $echecs[] = 'faits (' . implode(', ', $f) . ')'; }
    $cle = str_ends_with($page['type'], '-pays') ? basename($page['slug']) : ($page['type'] === 'pays' ? $page['slug'] : null);
    if ($cle !== null && !qa_devise_conforme($texte, pays_liste()[$cle]['devise'])) { $echecs[] = 'prix'; }
    return $echecs;
}
