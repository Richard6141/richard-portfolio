<?php
declare(strict_types=1);

/** Contenu concaténé de tous les fichiers PHP d'un dossier. */
function liens_contenu(string $dossier): string
{
    $tout = '';
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dossier, FilesystemIterator::SKIP_DOTS));
    foreach ($it as $f) {
        if ($f->getExtension() === 'php') {
            $tout .= file_get_contents($f->getPathname());
        }
    }
    return $tout;
}

function test_liens_aucun_lien_mort_ou_obsolete_dans_les_pages(): void
{
    $tout = liens_contenu(racine('portfolio'));
    assert_not_contains("'/dolibarr-cotonou'", $tout);
    assert_not_contains('richard.salanon.info', $tout);
    assert_not_contains('/services/creation-de-site-web', $tout);
}

function test_liens_pied_de_page_vers_les_vraies_pages_d_expertise(): void
{
    // Depuis la vague 0B, le pied est généré depuis le registre de navigation :
    // on vérifie le rendu (pied_rendre, défini dans PiedTest.php).
    $pied = pied_rendre();
    assert_not_contains('/a-propos/#expertise', $pied);
    // Vague 1A : le pilier publié remplace /consultant-digitalisation (301), le pied pointe sur l'URL finale.
    foreach (['/services/application-web-sur-mesure', '/services/automatisation-ia', '/services/referencement-naturel-seo', '/services/consultant-digitalisation', '/formations/'] as $url) {
        assert_contains('href="' . $url . '"', $pied);
    }
}

function test_liens_aucun_des_sans_accent_devant_le_lendemain(): void
{
    assert_not_contains('des le lendemain', liens_contenu(racine('portfolio/data')));
}

function test_liens_migration_des_articles_couvre_les_trois_remplacements(): void
{
    $sql = (string) file_get_contents(racine('migrations/2026-10-03-liens-obsoletes-blog.sql'));
    assert_same(3, substr_count($sql, 'UPDATE blog_posts'));
    assert_contains("'//richard.salanon.info'", $sql);
    assert_contains("'http://richardsalanon.com'", $sql);
    assert_contains("'/services/creation-de-site-web'", $sql);
}
