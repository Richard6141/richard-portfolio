<?php
// ============================================================
// helpers/blocs.php · Bibliothèque de blocs de contenu (vague 0B, spec 7.3).
// Les pages longues (piliers, pays, formations, histoires, guides) sont des
// listes de blocs typés ; chaque type a son gabarit dans
// portfolio/partials/blocs/{type}.php. Le texte est échappé, seules les
// balises strong, em, abbr, br et les liens internes ou https passent.
// ============================================================
declare(strict_types=1);

const BLOCS_TYPES = [
    'prose', 'points', 'etapes', 'tableau', 'comparaison', 'chiffres', 'cas', 'prix',
    'frise', 'vigilance', 'lecon', 'citation', 'checklist', 'faq', 'sources', 'cta', 'programme', 'galerie',
];

/**
 * Typographie française d'une page rendue : espace insécable avant « : ; ? ! »
 * et dans les guillemets, pour qu'aucun signe ne tombe seul en début de ligne.
 * Seul le texte entre les balises change ; balises, attributs, scripts et
 * styles restent intacts.
 */
function typo_fr_html(string $html): string
{
    $parts = preg_split('#(<script\b.*?</script>|<style\b.*?</style>|<[^>]*>)#is', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
    if ($parts === false) {
        return $html;
    }
    foreach ($parts as $i => $part) {
        if ($part === '' || $part[0] === '<') {
            continue;
        }
        $parts[$i] = (string) preg_replace(['/ (?=[:;?!»])/u', '/« /u'], ["\u{00A0}", "«\u{00A0}"], $part);
    }
    return implode('', $parts);
}

/** Texte échappé, avec les seules balises autorisées restaurées. */
function bloc_texte(string $texte): string
{
    $s = htmlspecialchars($texte, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $s = preg_replace('#&lt;(/?)(strong|em|abbr)&gt;#i', '<$1$2>', $s) ?? $s;
    $s = preg_replace('#&lt;br\s*/?&gt;#i', '<br>', $s) ?? $s;
    $s = preg_replace('#&lt;abbr title=&quot;([^&<>]*)&quot;&gt;#i', '<abbr title="$1">', $s) ?? $s;
    $s = preg_replace_callback(
        '#&lt;a href=&quot;((?:https?://|/(?![/\\\\])|\#)(?:[^"<>\s&]|&amp;)*|mailto:[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,})&quot;&gt;(.*?)&lt;/a&gt;#i',
        static function (array $m): string {
            $href = $m[1];
            // Lien interne vers son URL finale : aucune 301 interne (spec 8). Le href arrive échappé.
            if (str_starts_with($href, '/') && function_exists('url_finale')) {
                $href = htmlspecialchars(url_finale(html_entity_decode($href, ENT_QUOTES | ENT_HTML5, 'UTF-8')), ENT_QUOTES | ENT_HTML5, 'UTF-8');
            }
            return '<a href="' . $href . '">' . $m[2] . '</a>';
        },
        $s
    ) ?? $s;
    return $s;
}

/** Href sûr (https, chemin interne, ancre, adresse électronique) ou null. */
function bloc_href(string $url): ?string
{
    return preg_match('#^(?:https?://[^\s"<>]+|/(?![/\\\\])[^\s"<>]*|\#[A-Za-z0-9_-]*|mailto:[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,})$#', $url) ? $url : null;
}

/** Ancre stable d'un titre, pour le sommaire. */
function bloc_ancre(string $titre): string
{
    return generateSlug($titre);
}

/** Étiquette facultative et titre H2 d'un bloc. */
function bloc_titre(array $b): string
{
    $html = '';
    if (!empty($b['etiquette'])) {
        $html .= '<p class="bloc__etiquette">' . bloc_texte((string) $b['etiquette']) . '</p>';
    }
    if (!empty($b['titre'])) {
        $html .= '<h2 class="bloc__titre" id="' . bloc_ancre((string) $b['titre']) . '">' . bloc_texte((string) $b['titre']) . '</h2>';
    }
    return $html;
}

/** Rendu d'un bloc ; un type inconnu est une erreur de données. */
function bloc_rendre(array $b): string
{
    $type = (string) ($b['type'] ?? '');
    if (!in_array($type, BLOCS_TYPES, true)) {
        throw new \InvalidArgumentException("Type de bloc inconnu : « {$type} »");
    }
    $fichier = __DIR__ . '/../portfolio/partials/blocs/' . $type . '.php';
    ob_start();
    (static function (array $b) use ($fichier): void {
        include $fichier;
    })($b);
    return (string) ob_get_clean();
}

/** Rendu d'une liste de blocs, dans l'ordre. */
function blocs_rendre(array $blocs): string
{
    return implode("\n", array_map('bloc_rendre', $blocs));
}
