<?php
// ============================================================
// helpers/blog.php · Reprise du blog (vague 1F) : lecture des articles en ligne,
// gabarit, sources de réécriture et migrations. Le blog reste en base (spec 7.1).
// ============================================================
declare(strict_types=1);

/** Champs utiles à la reprise, lus dans la page publique d'un article (balisage de portfolio/article.php). */
function blog_extraire(string $html): array
{
    $dom = new DOMDocument();
    $ancien = libxml_use_internal_errors(true);
    $dom->loadHTML('<?xml encoding="utf-8"?>' . $html);
    libxml_clear_errors();
    libxml_use_internal_errors($ancien);
    $xp = new DOMXPath($dom);
    $un = static fn(string $q): ?DOMNode => $xp->query($q)->item(0);
    $contenu = '';
    if ($prose = $un('//div[contains(concat(" ", normalize-space(@class), " "), " art-prose ")]')) {
        foreach ($prose->childNodes as $n) {
            $contenu .= $dom->saveHTML($n);
        }
    }
    $tags = [];
    foreach ($xp->query('//div[contains(@class, "art-tags")]/span') as $s) {
        $tags[] = ltrim(trim($s->textContent), '#');
    }
    preg_match('/"datePublished":"(\d{4}-\d{2}-\d{2})/', $html, $p);
    preg_match('/"dateModified":"(\d{4}-\d{2}-\d{2})/', $html, $m);
    return [
        'titre'     => trim((string) ($un('//h1')?->textContent ?? '')),
        'meta'      => (string) ($un('//meta[@name="description"]/@content')?->nodeValue ?? ''),
        'categorie' => trim((string) ($un('//span[contains(@class, "art-cat")]')?->textContent ?? '')),
        'tags'      => $tags,
        'publie'    => $p[1] ?? '',
        'maj'       => $m[1] ?? '',
        'contenu'   => trim($contenu),
    ];
}

/** Mots du texte visible d'un fragment HTML (balises remplacées par une espace, entités décodées). */
function blog_mots(string $html): int
{
    $texte = html_entity_decode((string) preg_replace('/<[^>]+>/', ' ', $html), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    return count(preg_split('/[\s\x{00A0}]+/u', trim($texte), -1, PREG_SPLIT_NO_EMPTY) ?: []);
}

/** Meta description : la colonne `meta` quand elle est saisie, sinon le résumé (ou le début du texte) tronqué. */
function blog_meta(array $post): string
{
    $meta = trim((string) ($post['meta'] ?? ''));
    return $meta !== '' ? $meta : seoDescription((string) (($post['summary'] ?? '') ?: ($post['content'] ?? '')));
}

/** Date de mise à jour affichée et déclarée, jamais antérieure à la publication (articles antidatés). */
function blog_date_maj(array $post): string
{
    $ts = max((int) strtotime((string) ($post['updated_at'] ?? '')), (int) strtotime((string) ($post['published_at'] ?? '')));
    return $ts > 0 ? date('Y-m-d', $ts) : '';
}

/** Article publié et daté du passé dans la base ; false si la base est injoignable (site local, panne). */
function blog_article_en_ligne(string $slug): bool
{
    static $memo = [];
    if (array_key_exists($slug, $memo)) {
        return $memo[$slug];
    }
    try {
        if (!function_exists('getPDO')) {
            require_once __DIR__ . '/../config/db.php';
        }
        $st = getPDO()->prepare("SELECT 1 FROM blog_posts WHERE slug = ? AND status = 'published' AND (published_at IS NULL OR published_at <= NOW())");
        $st->execute([$slug]);
        return $memo[$slug] = (bool) $st->fetchColumn();
    } catch (\Throwable $e) {
        return $memo[$slug] = false;
    }
}

/** Balises et attributs que l'éditeur Quill du tableau de bord conserve (formats par défaut de Quill 2). */
const BLOG_BALISES = ['h2' => [], 'h3' => [], 'p' => [], 'strong' => [], 'em' => [], 'a' => ['href'], 'ul' => [], 'ol' => [],
    'li' => [], 'blockquote' => [], 'br' => [], 'img' => ['src', 'alt'], 'code' => []];

/** Ce que Quill détruirait si Richard rouvrait l'article au tableau de bord : balises et attributs hors liste. */
function blog_hors_quill(string $html): array
{
    $problemes = [];
    preg_match_all('#<([a-zA-Z][a-zA-Z0-9]*)\b([^>]*)>#', $html, $balises, PREG_SET_ORDER);
    foreach ($balises as [, $nom, $attributs]) {
        $nom = strtolower($nom);
        if (!array_key_exists($nom, BLOG_BALISES)) {
            $problemes[] = "balise <{$nom}>";
            continue;
        }
        preg_match_all('#([a-zA-Z-]+)\s*=\s*("[^"]*"|\'[^\']*\'|[^\s>]+)#', $attributs, $a);
        foreach ($a[1] as $attribut) {
            if (!in_array(strtolower($attribut), BLOG_BALISES[$nom], true)) {
                $problemes[] = "attribut {$attribut} sur <{$nom}>";
            }
        }
        if ($nom === 'img' && !preg_match('#src="/uploads/#', $attributs)) {
            $problemes[] = 'image hors /uploads/';
        }
    }
    return array_values(array_unique($problemes));
}

/** Ce qui empêche de générer la migration d'une source (liste vide : source valide). */
function blog_article_problemes(array $a, string $slugFichier): array
{
    $p = [];
    $slug = (string) ($a['slug'] ?? '');
    if ($slug !== $slugFichier || !preg_match('/^[a-z0-9-]+$/', $slug)) { $p[] = "slug « {$slug} » différent du nom de fichier « {$slugFichier} »"; }
    if (!preg_match('/^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/', (string) ($a['instantane'] ?? ''))) { $p[] = 'instantane : AAAA-MM-JJ HH:MM:SS attendu (docs/blog/origine/index.json)'; }
    $l = mb_strlen((string) ($a['titre'] ?? ''));
    if ($l < 50 || $l > 60) { $p[] = "titre : {$l} caractères (50 à 60)"; }
    $meta = (string) ($a['meta'] ?? '');
    $l = mb_strlen($meta);
    if ($l < 140 || $l > 155 || !preg_match('/[.!?]$/u', $meta)) { $p[] = "meta : {$l} caractères (140 à 155, phrase complète)"; }
    $resume = trim((string) ($a['resume'] ?? ''));
    $phrases = preg_match_all('/[.!?](?=\s|$)/u', $resume);
    if (mb_strlen($resume) > 500 || $phrases < 2 || $phrases > 4) { $p[] = "résumé : {$phrases} phrase(s), " . mb_strlen($resume) . ' caractères (2 à 4 phrases, 500 au plus)'; }
    if (trim((string) ($a['categorie'] ?? '')) === '') { $p[] = 'categorie vide'; }
    if (!is_array($a['tags'] ?? null) || array_filter($a['tags'], static fn($t): bool => !is_string($t) || trim($t) === '')) { $p[] = 'tags : liste de chaînes non vides'; }
    $contenu = (string) ($a['contenu'] ?? '');
    foreach (blog_hors_quill($contenu) as $x) { $p[] = $x; }
    preg_match_all('#<h2>(.*?)</h2>#su', $contenu, $h2);
    foreach ($h2[1] as $titre) {
        $titre = trim(html_entity_decode(strip_tags($titre), ENT_QUOTES | ENT_HTML5, 'UTF-8'));
        if (!in_array($titre, ['Questions fréquentes', 'Sources'], true) && !str_ends_with($titre, '?')) { $p[] = "H2 sans question : {$titre}"; }
    }
    preg_match_all('#<p>(.*?)</p>#su', $contenu, $paragraphes);
    foreach ($paragraphes[1] as $paragraphe) {
        if (($n = blog_mots($paragraphe)) > 120) { $p[] = "paragraphe de {$n} mots (120 au plus)"; }
    }
    $faq = buildFaqSchema($contenu);
    if (count($faq['mainEntity'] ?? []) < 6) { $p[] = 'FAQ : « <h2>Questions fréquentes</h2> » suivi de 6 questions au moins'; }
    if (!preg_match('#<h2>Sources</h2>.*?<a href="https://#su', $contenu)) { $p[] = 'Sources : « <h2>Sources</h2> » suivi d\'au moins un lien https'; }
    foreach (['titre', 'meta', 'resume', 'contenu'] as $champ) {
        if (preg_match('/[\x{10000}-\x{10FFFF}]/u', (string) ($a[$champ] ?? ''))) { $p[] = "emoji ou caractère sur 4 octets dans {$champ} (refusé par une colonne utf8mb3)"; }
    }
    if (str_contains($contenu . ($a['titre'] ?? ''), 'Richard Technologies')) { $p[] = 'marque retirée : Richard Technologies'; }
    return $p;
}

/** Littéral de chaîne MySQL (mode par défaut, antislash actif), sur une seule ligne. */
function blog_sql_chaine(string $s): string
{
    return "'" . strtr($s, ['\\' => '\\\\', "'" => "\\'", "\n" => '\\n', "\r" => '\\r', "\0" => '\\0', "\x1a" => '\\Z']) . "'";
}

/** Migration d'un article repris : une seule instruction, qui n'écrase pas un article modifié depuis l'instantané. */
function blog_sql_mise_a_jour(array $a): string
{
    $tags = (string) json_encode(array_values($a['tags']), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    return "-- Vague 1F : reprise de /blog/{$a['slug']} (source docs/blog/articles/{$a['slug']}.php).\n"
        . "-- Sans effet si l'article a été modifié au tableau de bord après l'instantané du {$a['instantane']}.\n"
        . 'UPDATE blog_posts SET title = ' . blog_sql_chaine($a['titre'])
        . ', summary = ' . blog_sql_chaine($a['resume'])
        . ', meta = ' . blog_sql_chaine($a['meta'])
        . ', content = ' . blog_sql_chaine($a['contenu'])
        . ', category = ' . blog_sql_chaine($a['categorie'])
        . ', tags = ' . blog_sql_chaine($tags)
        . ', reading_time = ' . max(1, (int) ceil(blog_mots($a['contenu']) / 250))
        . ', updated_at = NOW() WHERE slug = ' . blog_sql_chaine($a['slug'])
        . ' AND (updated_at IS NULL OR updated_at <= ' . blog_sql_chaine($a['instantane']) . ");\n";
}
