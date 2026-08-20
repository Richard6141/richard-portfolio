<?php
// ============================================================
// Nom du fichier : helpers/functions.php
// Description    : Fonctions utilitaires globales
// Auth requise   : Non
// ============================================================

declare(strict_types=1);

/**
 * Envoie une reponse JSON de succes et arrete le script.
 *
 * @param mixed       $data    Donnees a retourner.
 * @param string      $message Message lisible.
 * @param int         $code    Code HTTP (defaut 200).
 */
function jsonSuccess(mixed $data = null, string $message = 'OK', int $code = 200): never
{
    http_response_code($code);
    header('Content-Type: application/json');
    echo json_encode([
        'success' => true,
        'message' => $message,
        'data'    => $data,
    ]);
    exit;
}

/**
 * Envoie une reponse JSON d'erreur et arrete le script.
 *
 * @param string $message Message d'erreur lisible.
 * @param int    $code    Code HTTP (defaut 400).
 */
function jsonError(string $message, int $code = 400): never
{
    http_response_code($code);
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'message' => $message,
        'data'    => null,
    ]);
    exit;
}

/**
 * Echappe une chaine pour un affichage HTML securise.
 */
function sanitize(?string $str): string
{
    if ($str === null) {
        return '';
    }

    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/**
 * Genere un slug URL-safe a partir d'une chaine.
 * Exemples : "Mon Super Titre" → "mon-super-titre"
 */
function generateSlug(string $str): string
{
    // Ligatures : non decomposees par Unicode NFD ni par Latin-ASCII.
    $str = str_replace(['œ', 'Œ', 'æ', 'Æ'], ['oe', 'OE', 'ae', 'AE'], $str);

    // Transliterer les accents : "coute" et non "cote", "etape" et non "tape".
    // Corrige le 20/08/2026 : l'ancien code ecrasait $str avec false avant
    // d'appeler le repli, qui recevait donc false et renvoyait une chaine vide.
    if (function_exists('transliterator_transliterate')) {
        $out = transliterator_transliterate('Any-Latin; Latin-ASCII; Lower()', $str);
        if (is_string($out)) {
            $str = $out;
        }
    } else {
        // Repli si l'extension intl est absente.
        $out = @iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $str);
        if (is_string($out)) {
            $str = $out;
        }
    }

    $str = mb_strtolower($str, 'UTF-8');

    // Remplacer tout ce qui n'est pas alphanum par des tirets
    $str = preg_replace('/[^a-z0-9]+/', '-', $str);

    // Supprimer les tirets en debut/fin
    return trim($str, '-');
}

/**
 * Construit une balise <title> en gardant le suffixe de marque UNIQUEMENT
 * s'il tient dans la limite d'affichage de Google (~60 caracteres).
 *
 * Ajoute le 20/08/2026 : 40 des 43 pages depassaient 60 caracteres et 28
 * depassaient 70, en grande partie a cause du suffixe " | Richard SALANON"
 * (18 caracteres) ajoute systematiquement. Au-dela, Google tronque ou
 * reecrit le titre. On ne tronque JAMAIS le titre lui-meme : cela couperait
 * des mots-cles. Les titres encore trop longs relevent de la redaction.
 */
function seoTitle(string $core, string $suffix = '', int $max = 60): string
{
    $core = trim((string) preg_replace('/\s+/', ' ', $core));
    if ($suffix === '') {
        return $core;
    }
    $full = $core . ' | ' . $suffix;
    return mb_strlen($full) <= $max ? $full : $core;
}

/**
 * Normalise une meta description : balises retirees, espaces compactes,
 * troncature propre sur un mot a 160 caracteres.
 *
 * Ajoute le 20/08/2026 : 23 pages depassaient 160 caracteres (jusqu'a 207),
 * ce que Google coupe en plein milieu d'une phrase.
 */
function seoDescription(string $text, int $max = 160): string
{
    $text = trim((string) preg_replace('/\s+/', ' ', strip_tags($text)));
    if (mb_strlen($text) <= $max) {
        return $text;
    }
    $cut = mb_substr($text, 0, $max - 1);

    // Coupe d'abord sur une fin de PHRASE (20/08/2026). La version precedente
    // coupait toujours sur un mot, ce qui produisait des descriptions
    // suspendues du type "...pour developper votre…" ou "...vos volumes et vos…".
    // Une description qui se termine sur un point se lit comme une promesse
    // complete dans la SERP ; l'ellipse ne sert plus que de dernier recours.
    if (preg_match('/^(.*[.!?])(?=\s|$)/us', $cut, $m)) {
        $phrase = rtrim($m[1]);
        if (mb_strlen($phrase) >= ($max * 0.6)) {
            return $phrase;
        }
    }

    $sp = mb_strrpos($cut, ' ');
    if ($sp !== false && $sp > ($max * 0.5)) {
        $cut = mb_substr($cut, 0, $sp);
    }
    $cut = rtrim($cut, " ,;:.\u{2013}-");

    // Quand l'ellipse est inevitable (phrase unique trop longue), au moins ne
    // pas la faire tomber sur un mot-outil : "...pour developper votre…" laisse
    // le lecteur en suspens, "...pour developper…" se lit comme une coupe nette.
    $motsOutils = 'le|la|les|l\'|un|une|des|du|de|d\'|au|aux|à|et|ou|en|par|pour|sur|dans|avec|sans|chez|vers'
                . '|votre|vos|notre|nos|son|sa|ses|leur|leurs|mon|ma|mes|ton|ta|tes|ce|cet|cette|ces'
                . '|qui|que|dont|plus|très|aussi|selon|entre|depuis';
    // Boucle : "vos volumes et vos" doit perdre "vos" PUIS "et", pas seulement
    // le dernier mot. Bornee a 4 tours, une coupe nette n'en demandant jamais plus.
    for ($i = 0; $i < 4; $i++) {
        $reduit = (string) preg_replace('/[\s]+(?:' . $motsOutils . ')$/iu', '', $cut);
        if ($reduit === $cut) break;
        $cut = $reduit;
    }

    return rtrim($cut, " ,;:.\u{2013}-") . "\u{2026}";
}

/**
 * URL publique du logo du site.
 *
 * Prefere le WebP (5,4 Ko, sans perte) au PNG d'origine (48,3 Ko, 689x362
 * alors qu'il s'affiche en 113x60). Le repli automatique sur le PNG rend le
 * deploiement du WebP independant de tout ordre : tant qu'il n'est pas
 * televerse, le PNG continue d'etre servi.
 *
 * Centralise ici le 20/08/2026 : la meme detection etait dupliquee dans
 * horizon.php, article.php et pv2-bootstrap.php.
 */
function siteLogoUrl(): string
{
    $dir = dirname(__DIR__) . '/assets/img/';
    foreach (['logo-rt.webp', 'logo-rt.png'] as $file) {
        if (file_exists($dir . $file)) {
            return '/assets/img/' . $file;
        }
    }
    return '';
}

/**
 * Genere un token hexadecimal aleatoire cryptographiquement sur.
 */
function generateToken(int $length = 64): string
{
    return bin2hex(random_bytes((int) ceil($length / 2)));
}

/**
 * Verifie si un slug est dans la liste des slugs reserves.
 */
function isReservedSlug(string $slug): bool
{
    return in_array(strtolower($slug), RESERVED_SLUGS, true);
}

/**
 * Verifie le format d'un slug (3-30 chars, lowercase alphanum + tirets).
 * Doit commencer par une lettre ou un chiffre.
 */
function validateSlugFormat(string $slug): bool
{
    return (bool) preg_match('/^[a-z0-9][a-z0-9-]{2,29}$/', $slug);
}

/**
 * Calcule l'offset pour la pagination.
 *
 * @param int $page    Numero de page (1-indexed).
 * @param int $perPage Nombre d'elements par page.
 * @return int Offset pour la requete SQL LIMIT.
 */
function getPaginationOffset(int $page, int $perPage): int
{
    $page = max(1, $page);
    $perPage = max(1, $perPage);

    return ($page - 1) * $perPage;
}

/**
 * Lit et decode le body JSON d'une requete.
 *
 * @return array<string, mixed>
 */
function getJsonBody(): array
{
    $body = file_get_contents('php://input');

    if (empty($body)) {
        return [];
    }

    $data = json_decode($body, true);

    return is_array($data) ? $data : [];
}

/**
 * Valide qu'un email est au bon format.
 */
function isValidEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Retourne la methode HTTP reelle en tenant compte du header X-HTTP-Method-Override.
 * Necessaire car les hebergements mutualises bloquent souvent PUT/DELETE.
 */
function getHttpMethod(): string
{
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method === 'POST') {
        $override = $_SERVER['HTTP_X_HTTP_METHOD_OVERRIDE'] ?? '';
        if (in_array($override, ['PUT', 'DELETE', 'PATCH'], true)) {
            return $override;
        }
    }
    return $method;
}

/**
 * Valide qu'une valeur est une couleur CSS sûre avant injection dans le DOM.
 * Accepte : #rgb, #rrggbb, #rrggbbaa, var(--xxx), rgb(), rgba()
 */
function validateColor(?string $value, string $default): string
{
    if ($value === null || $value === '') return $default;
    $v = trim($value);
    if (preg_match('/^#[0-9a-fA-F]{3,8}$/', $v)) return $v;
    if (preg_match('/^var\(--[a-zA-Z0-9_-]+\)$/', $v)) return $v;
    if (preg_match('/^rgba?\(\s*\d{1,3}\s*,\s*\d{1,3}\s*,\s*\d{1,3}(\s*,\s*[\d.]+)?\s*\)$/', $v)) return $v;
    return $default;
}

/**
 * Accorde un titre de service après la préposition "de" : gère l'élision et
 * la casse. Ajouté le 20/08/2026 — les pages services affichaient sept H2
 * fautifs du type "Un projet de audit seo complet ?" : la préposition n'était
 * pas élidée et mb_strtolower() écrasait les sigles (SEO -> seo, IA -> ia).
 *
 * Deux règles :
 *  - la minuscule initiale n'est appliquée que si le premier mot n'a pas
 *    d'autre majuscule ("Site" -> "site", mais "SEO", "SaaS" et "API" intacts) ;
 *  - l'élision suit la voyelle initiale, accentuée ou non ("Audit" -> "d'audit",
 *    "API" -> "d'API", "Référencement" -> "de référencement").
 *
 * @return string Le groupe complet, préposition incluse : "d'audit SEO complet".
 */
function frenchDePhrase(string $title): string
{
    $title = trim($title);
    if ($title === '') return 'de projet';

    $space     = mb_strpos($title, ' ');
    $firstWord = $space === false ? $title : mb_substr($title, 0, $space);

    // Un sigle ou un mot à casse interne (SEO, API, SaaS, iOS) garde sa casse.
    $rest = mb_substr($firstWord, 1);
    if ($rest === mb_strtolower($rest)) {
        $title = mb_strtolower(mb_substr($title, 0, 1)) . mb_substr($title, 1);
    }

    $initial = mb_strtolower(mb_substr($title, 0, 1));

    return in_array($initial, ['a', 'e', 'i', 'o', 'u', 'y', 'à', 'â', 'ä', 'é', 'è', 'ê', 'ë', 'î', 'ï', 'ô', 'ö', 'û', 'ù', 'ü'], true)
        ? "d'" . $title
        : 'de ' . $title;
}

/**
 * Icône SVG (trait fin) choisie selon le titre d'un service. Pas d'emoji.
 * Utilisée par le template "horizon" et les pages services.
 */
function pv2_icon(string $title): string
{
    $t = mb_strtolower($title);
    $svg = fn(string $p): string => '<svg class="ic" viewBox="0 0 24 24">' . $p . '</svg>';
    if (str_contains($t, 'mobile')) return $svg('<rect x="7" y="3" width="10" height="18" rx="2"/><path d="M11 18h2"/>');
    if (str_contains($t, 'commerce') || str_contains($t, 'boutique') || str_contains($t, 'e-comm')) return $svg('<circle cx="9" cy="20" r="1.4"/><circle cx="18" cy="20" r="1.4"/><path d="M2 3h3l2.5 12h11l2-8H6.5"/>');
    if (str_contains($t, 'web') && (str_contains($t, 'app') || str_contains($t, 'application'))) return $svg('<rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M7 6.5h.01M10 6.5h.01"/>');
    if (str_contains($t, 'site') || str_contains($t, 'web')) return $svg('<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.7 2.5 15.3 0 18M12 3c-2.5 2.7-2.5 15.3 0 18"/>');
    if (str_contains($t, 'autom') || str_contains($t, 'bot') || str_contains($t, ' ia') || str_contains($t, 'intellig')) return $svg('<rect x="5" y="7" width="14" height="11" rx="2"/><path d="M12 7V4M9 12h.01M15 12h.01M9 15.5h6M2 12h2M20 12h2"/>');
    if (str_contains($t, 'form')) return $svg('<path d="M22 9 12 5 2 9l10 4 10-4Z"/><path d="M6 11v5c0 1 2.7 2.5 6 2.5s6-1.5 6-2.5v-5"/>');
    if (str_contains($t, 'audit') || str_contains($t, 'sécur') || str_contains($t, 'secur')) return $svg('<path d="M12 3l7 3v5c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6l7-3Z"/><path d="m9.5 11.5 1.7 1.7 3.3-3.4"/>');
    if (str_contains($t, 'digital') || str_contains($t, 'transform')) return $svg('<path d="M5 15c-1 2-1 4-1 4s2 0 4-1m-3-3c1-6 5-10 12-11 0 7-4 11-11 12l-1-1Z"/>');
    if (str_contains($t, 'mainten') || str_contains($t, 'support') || str_contains($t, 'dépann') || str_contains($t, 'depann')) return $svg('<path d="M14 7a4 4 0 0 0-5.5 4.5l-5 5 2.5 2.5 5-5A4 4 0 0 0 20 9l-3 3-2-2 3-3a4 4 0 0 0-4 0Z"/>');
    if (str_contains($t, 'étude') || str_contains($t, 'etude') || str_contains($t, 'projet') || str_contains($t, 'conseil') || str_contains($t, 'accompagn')) return $svg('<circle cx="12" cy="12" r="9"/><path d="m15.5 8.5-2 5-5 2 2-5 5-2Z"/>');
    return $svg('<circle cx="12" cy="12" r="9"/><path d="m9 12 2 2 4-4"/>');
}

/**
 * Extrait un schéma JSON-LD FAQPage depuis le contenu HTML d'un article.
 * Reconnait le motif de nos articles : un titre "FAQ" (h2/h3) suivi de
 * paragraphes <p><strong>Question ?</strong><br>Réponse.</p>.
 * Retourne null si moins de 2 questions sont trouvées (Google exige une vraie FAQ).
 *
 * @return array<string,mixed>|null
 */
function buildFaqSchema(string $html): ?array
{
    // 1) Localiser le titre de la section FAQ (tolère un suffixe : "FAQ - Prix...",
    //    "F.A.Q", "Questions fréquentes", "Foire aux questions").
    if (!preg_match(
        '/<h[1-6][^>]*>\s*(?:F\.?A\.?Q\.?|questions?\s+fr[ée]quentes?|foire\s+aux\s+questions)\b.*?<\/h[1-6]>(.*)$/isu',
        $html,
        $m
    )) {
        return null;
    }
    // S'arrêter avant un éventuel titre de section suivant (h1-h3).
    $faqHtml = preg_split('/<h[1-3][^>]*>/i', $m[1])[0] ?? $m[1];

    // 2) Récupérer les blocs <p>...</p> dans l'ordre d'apparition.
    if (!preg_match_all('/<p\b[^>]*>(.*?)<\/p>/isu', $faqHtml, $blocks)) {
        return null;
    }

    // 3) Reconstituer les paires question/réponse. Deux formats gérés :
    //    a) <p><strong>Q ?</strong><br>Réponse</p>
    //    b) <p><strong>Q ?</strong></p><p>Réponse</p>
    $items   = [];
    $current = null;
    $flush   = static function (?array $c) use (&$items): void {
        if ($c && $c['q'] !== '' && $c['a'] !== '') {
            $items[] = $c;
        }
    };

    foreach ($blocks[1] as $inner) {
        $inner = trim($inner);
        if (preg_match('/^<(?:strong|b)>(.*?)<\/(?:strong|b)>(.*)$/isu', $inner, $qm)) {
            // Nouvelle question : on clôt la précédente.
            $flush($current);
            $q     = trim(html_entity_decode(strip_tags($qm[1]), ENT_QUOTES, 'UTF-8'));
            $aSame = trim(html_entity_decode(strip_tags($qm[2]), ENT_QUOTES, 'UTF-8'));
            $aSame = ltrim($aSame, " \t:-");
            $current = ['q' => $q, 'a' => $aSame];
        } elseif ($current !== null) {
            // Bloc de réponse (format b) : on l'ajoute à la question courante.
            $a = trim(html_entity_decode(strip_tags($inner), ENT_QUOTES, 'UTF-8'));
            if ($a !== '') {
                $current['a'] = trim($current['a'] . ' ' . $a);
            }
        }
    }
    $flush($current);

    if (count($items) < 2) {
        return null;
    }

    $entities = [];
    foreach ($items as $it) {
        $entities[] = [
            '@type'          => 'Question',
            'name'           => $it['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $it['a']],
        ];
    }

    return [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $entities,
    ];
}

/**
 * Génère un schema HowTo (JSON-LD) à partir d'un contenu HTML décrivant une
 * séquence d'étapes. Ne renvoie un schema QUE si au moins 3 étapes sont détectées,
 * sinon null : on ne produit jamais de balisage HowTo invalide.
 *
 * Deux formats de titres d'étape gérés :
 *   a) <h2>Étape 1 : ...</h2>
 *   b) <h3>1. ...</h3> ou <h3>2) ...</h3>
 */
function buildHowToSchema(string $html, string $name): ?array
{
    if (!preg_match_all(
        '/<(h[23])[^>]*>\s*((?:étape\s*\d+|\d+\s*[\.\)]).*?)<\/\1>(.*?)(?=<h[1-3][^>]*>|$)/isu',
        $html,
        $matches,
        PREG_SET_ORDER
    )) {
        return null;
    }

    $steps = [];
    foreach ($matches as $block) {
        $rawTitle = trim(html_entity_decode(strip_tags($block[2]), ENT_QUOTES, 'UTF-8'));
        // Retirer le préfixe "Étape N :" ou "N." pour un libellé propre.
        $stepName = trim(preg_replace('/^\s*(?:étape\s*\d+\s*[:\.\)\-]?\s*|\d+\s*[\.\)]\s*)/iu', '', $rawTitle));
        if ($stepName === '') {
            $stepName = $rawTitle;
        }
        $stepName = mb_strtoupper(mb_substr($stepName, 0, 1)) . mb_substr($stepName, 1);

        $text = trim(preg_replace('/\s+/u', ' ', html_entity_decode(strip_tags($block[3]), ENT_QUOTES, 'UTF-8')));
        if ($text === '') {
            continue;
        }

        $steps[] = [
            '@type'    => 'HowToStep',
            'position' => count($steps) + 1,
            'name'     => mb_substr($stepName, 0, 110),
            'text'     => mb_substr($text, 0, 500),
        ];
    }

    if (count($steps) < 3) {
        return null;
    }

    return [
        '@context' => 'https://schema.org',
        '@type'    => 'HowTo',
        'name'     => $name,
        'step'     => $steps,
    ];
}

/**
 * Construit le XML complet du sitemap (pages fixes + services + articles publiés).
 * Utilisé à la fois par sitemap.php (génération à la volée, secours) et par
 * generate-sitemap.php / indexnow.php (écriture d'un fichier statique).
 * Retourne un urlset vide si aucun portfolio publié.
 */
function buildSitemapXml(PDO $pdo, string $baseUrl): string
{
    $baseUrl   = rtrim($baseUrl, '/');
    $emptyset  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n"
               . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>';

    $stmt   = $pdo->query("SELECT id FROM users WHERE is_active = 1 ORDER BY id ASC LIMIT 1");
    $userId = (int) ($stmt->fetchColumn() ?: 0);
    if (!$userId) {
        return $emptyset;
    }

    $stmt = $pdo->prepare("SELECT is_published FROM profiles WHERE user_id = ?");
    $stmt->execute([$userId]);
    if (!(bool) $stmt->fetchColumn()) {
        return $emptyset;
    }

    // Date de dernière modif globale du portfolio
    $stmt = $pdo->prepare("
        SELECT MAX(updated) FROM (
            SELECT MAX(updated_at) AS updated FROM profiles      WHERE user_id = ?
            UNION ALL SELECT MAX(updated_at) FROM hero_sections  WHERE user_id = ?
            UNION ALL SELECT MAX(updated_at) FROM about_sections WHERE user_id = ?
            UNION ALL SELECT MAX(updated_at) FROM experiences    WHERE user_id = ?
            UNION ALL SELECT MAX(updated_at) FROM projects       WHERE user_id = ?
            UNION ALL SELECT MAX(updated_at) FROM skills         WHERE user_id = ?
        ) AS t
    ");
    $stmt->execute([$userId, $userId, $userId, $userId, $userId, $userId]);
    $raw     = $stmt->fetchColumn();
    $lastmod = $raw ? date('Y-m-d', strtotime($raw)) : date('Y-m-d');

    // Articles publiés (date de publication passée)
    $blogPosts = [];
    try {
        $stmtBlog = $pdo->prepare(
            "SELECT slug, published_at FROM blog_posts
             WHERE user_id = ? AND status = 'published' AND (published_at IS NULL OR published_at <= NOW())
             ORDER BY published_at DESC"
        );
        $stmtBlog->execute([$userId]);
        $blogPosts = $stmtBlog->fetchAll(PDO::FETCH_ASSOC);
    } catch (\Exception $e) {
        $blogPosts = [];
    }

    $xml  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

    $xml .= "  <url>\n";
    $xml .= "    <loc>" . htmlspecialchars($baseUrl . '/', ENT_XML1) . "</loc>\n";
    $xml .= "    <lastmod>{$lastmod}</lastmod>\n";
    $xml .= "    <changefreq>weekly</changefreq>\n";
    $xml .= "    <priority>1.0</priority>\n";
    $xml .= "  </url>\n";

    $xml .= "  <url>\n    <loc>" . htmlspecialchars($baseUrl . '/a-propos/', ENT_XML1) . "</loc>\n    <changefreq>monthly</changefreq>\n    <priority>0.7</priority>\n  </url>\n";
    // /contact — ajoutee au sitemap le 20/08/2026, en meme temps que la page.
    $xml .= "  <url>\n    <loc>" . htmlspecialchars($baseUrl . '/contact', ENT_XML1) . "</loc>\n    <changefreq>yearly</changefreq>\n    <priority>0.8</priority>\n  </url>\n";
    $xml .= "  <url>\n    <loc>" . htmlspecialchars($baseUrl . '/blog/', ENT_XML1) . "</loc>\n    <changefreq>weekly</changefreq>\n    <priority>0.7</priority>\n  </url>\n";

    // Pages services
    try {
        $stmtSvc = $pdo->prepare("SELECT title FROM services WHERE user_id = ? ORDER BY sort_order ASC");
        $stmtSvc->execute([$userId]);
        $svcRows = $stmtSvc->fetchAll(PDO::FETCH_ASSOC);
    } catch (\Exception $e) {
        $svcRows = [];
    }
    if ($svcRows) {
        $xml .= "  <url>\n    <loc>" . htmlspecialchars($baseUrl . '/services/', ENT_XML1) . "</loc>\n    <changefreq>monthly</changefreq>\n    <priority>0.9</priority>\n  </url>\n";
        foreach ($svcRows as $sv) {
            $sLoc = htmlspecialchars($baseUrl . '/services/' . generateSlug($sv['title']), ENT_XML1);
            $xml .= "  <url>\n    <loc>{$sLoc}</loc>\n    <changefreq>monthly</changefreq>\n    <priority>0.8</priority>\n  </url>\n";
        }
    }

    foreach ($blogPosts as $bp) {
        $bLastmod = $bp['published_at'] ? date('Y-m-d', strtotime($bp['published_at'])) : date('Y-m-d');
        $bLoc     = htmlspecialchars($baseUrl . '/blog/' . $bp['slug'], ENT_XML1);
        $xml .= "  <url>\n    <loc>{$bLoc}</loc>\n    <lastmod>{$bLastmod}</lastmod>\n    <changefreq>monthly</changefreq>\n    <priority>0.7</priority>\n  </url>\n";
    }

    $xml .= '</urlset>';

    return $xml;
}

/**
 * Optimise les <img> d'un contenu d'article pour les Core Web Vitals :
 * ajoute loading="lazy" et decoding="async" aux images qui n'en ont pas.
 * Ne touche pas aux images déjà annotées (idempotent).
 */
function enhanceContentImages(string $html): string
{
    return preg_replace_callback('/<img\b([^>]*)>/i', static function (array $m): string {
        $attrs = $m[1];
        if (!preg_match('/\bloading\s*=/i', $attrs)) {
            $attrs .= ' loading="lazy"';
        }
        if (!preg_match('/\bdecoding\s*=/i', $attrs)) {
            $attrs .= ' decoding="async"';
        }
        return '<img' . $attrs . '>';
    }, $html) ?? $html;
}
