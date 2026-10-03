<?php
declare(strict_types=1);

function test_service_titre_et_zone_ne_sont_plus_cales_sur_une_ville(): void
{
    $src = (string) file_get_contents(racine('portfolio/service.php'));
    assert_not_contains("' à ' . \$h_city . ', Bénin'", $src, 'title encore calé sur la ville');
    assert_not_contains("['@type' => 'City', 'name' => \$h_city]", $src, 'areaServed encore réduit à la ville');
    assert_contains("fait('zones')", $src);
    assert_contains("'provider'    => ['@id' => SITE_URL . '/#person']", $src);
}
