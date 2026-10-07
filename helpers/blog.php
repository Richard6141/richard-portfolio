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
