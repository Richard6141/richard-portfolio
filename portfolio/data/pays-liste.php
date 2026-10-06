<?php
// ============================================================
// data/pays-liste.php · Les 34 pays servis (spec 6.4), vague 0C.
// « iso » : code ISO 3166-1 en minuscules, nom du drapeau dans assets/drapeaux (06/10/2026).
// « dans » : locution prête à l'emploi (« au Bénin »). « voisins » : trois pays
// proches, pour le maillage « même service dans 3 pays voisins » (spec 9).
// Les fiches sourcées (spec 6.5) vivent dans data/pays/{slug}.php.
// ============================================================
declare(strict_types=1);

$ao = 'Afrique de l\'Ouest'; $ac = 'Afrique centrale'; $an = 'Afrique du Nord';
$ae = 'Afrique de l\'Est'; $oi = 'Océan Indien'; $eu = 'Europe'; $am = 'Amérique du Nord';

return [
    'benin'                => ['iso' => 'bj', 'nom' => 'Bénin', 'dans' => 'au Bénin', 'tranche' => 1, 'devise' => 'XOF', 'region' => $ao, 'voisins' => ['togo', 'niger', 'burkina-faso']],
    'cote-d-ivoire'        => ['iso' => 'ci', 'nom' => 'Côte d\'Ivoire', 'dans' => 'en Côte d\'Ivoire', 'tranche' => 1, 'devise' => 'XOF', 'region' => $ao, 'voisins' => ['burkina-faso', 'mali', 'guinee']],
    'senegal'              => ['iso' => 'sn', 'nom' => 'Sénégal', 'dans' => 'au Sénégal', 'tranche' => 1, 'devise' => 'XOF', 'region' => $ao, 'voisins' => ['mauritanie', 'mali', 'guinee']],
    'togo'                 => ['iso' => 'tg', 'nom' => 'Togo', 'dans' => 'au Togo', 'tranche' => 1, 'devise' => 'XOF', 'region' => $ao, 'voisins' => ['benin', 'burkina-faso', 'cote-d-ivoire']],
    'cameroun'             => ['iso' => 'cm', 'nom' => 'Cameroun', 'dans' => 'au Cameroun', 'tranche' => 1, 'devise' => 'XAF', 'region' => $ac, 'voisins' => ['gabon', 'tchad', 'centrafrique']],
    'burkina-faso'         => ['iso' => 'bf', 'nom' => 'Burkina Faso', 'dans' => 'au Burkina Faso', 'tranche' => 2, 'devise' => 'XOF', 'region' => $ao, 'voisins' => ['mali', 'niger', 'cote-d-ivoire']],
    'mali'                 => ['iso' => 'ml', 'nom' => 'Mali', 'dans' => 'au Mali', 'tranche' => 2, 'devise' => 'XOF', 'region' => $ao, 'voisins' => ['senegal', 'burkina-faso', 'niger']],
    'niger'                => ['iso' => 'ne', 'nom' => 'Niger', 'dans' => 'au Niger', 'tranche' => 2, 'devise' => 'XOF', 'region' => $ao, 'voisins' => ['benin', 'burkina-faso', 'tchad']],
    'guinee'               => ['iso' => 'gn', 'nom' => 'Guinée', 'dans' => 'en Guinée', 'tranche' => 2, 'devise' => 'GNF', 'region' => $ao, 'voisins' => ['senegal', 'mali', 'cote-d-ivoire']],
    'gabon'                => ['iso' => 'ga', 'nom' => 'Gabon', 'dans' => 'au Gabon', 'tranche' => 2, 'devise' => 'XAF', 'region' => $ac, 'voisins' => ['cameroun', 'congo-brazzaville', 'guinee-equatoriale']],
    'congo-brazzaville'    => ['iso' => 'cg', 'nom' => 'Congo-Brazzaville', 'dans' => 'au Congo-Brazzaville', 'tranche' => 2, 'devise' => 'XAF', 'region' => $ac, 'voisins' => ['gabon', 'rd-congo', 'cameroun']],
    'rd-congo'             => ['iso' => 'cd', 'nom' => 'RD Congo', 'dans' => 'en RD Congo', 'tranche' => 2, 'devise' => 'CDF', 'region' => $ac, 'voisins' => ['congo-brazzaville', 'rwanda', 'burundi']],
    'france'               => ['iso' => 'fr', 'nom' => 'France', 'dans' => 'en France', 'tranche' => 3, 'devise' => 'EUR', 'region' => $eu, 'voisins' => ['belgique', 'suisse', 'luxembourg']],
    'belgique'             => ['iso' => 'be', 'nom' => 'Belgique', 'dans' => 'en Belgique', 'tranche' => 3, 'devise' => 'EUR', 'region' => $eu, 'voisins' => ['france', 'luxembourg', 'suisse']],
    'suisse'               => ['iso' => 'ch', 'nom' => 'Suisse', 'dans' => 'en Suisse', 'tranche' => 3, 'devise' => 'CHF', 'region' => $eu, 'voisins' => ['france', 'belgique', 'luxembourg']],
    'canada'               => ['iso' => 'ca', 'nom' => 'Canada', 'dans' => 'au Canada', 'tranche' => 3, 'devise' => 'CAD', 'region' => $am, 'voisins' => ['france', 'belgique', 'suisse']],
    'luxembourg'           => ['iso' => 'lu', 'nom' => 'Luxembourg', 'dans' => 'au Luxembourg', 'tranche' => 3, 'devise' => 'EUR', 'region' => $eu, 'voisins' => ['belgique', 'france', 'suisse']],
    'monaco'               => ['iso' => 'mc', 'nom' => 'Monaco', 'dans' => 'à Monaco', 'tranche' => 3, 'devise' => 'EUR', 'region' => $eu, 'voisins' => ['france', 'suisse', 'belgique']],
    'maroc'                => ['iso' => 'ma', 'nom' => 'Maroc', 'dans' => 'au Maroc', 'tranche' => 4, 'devise' => 'MAD', 'region' => $an, 'voisins' => ['algerie', 'tunisie', 'mauritanie']],
    'tunisie'              => ['iso' => 'tn', 'nom' => 'Tunisie', 'dans' => 'en Tunisie', 'tranche' => 4, 'devise' => 'TND', 'region' => $an, 'voisins' => ['algerie', 'maroc', 'france']],
    'algerie'              => ['iso' => 'dz', 'nom' => 'Algérie', 'dans' => 'en Algérie', 'tranche' => 4, 'devise' => 'DZD', 'region' => $an, 'voisins' => ['maroc', 'tunisie', 'mauritanie']],
    'madagascar'           => ['iso' => 'mg', 'nom' => 'Madagascar', 'dans' => 'à Madagascar', 'tranche' => 4, 'devise' => 'MGA', 'region' => $oi, 'voisins' => ['maurice', 'comores', 'seychelles']],
    'mauritanie'           => ['iso' => 'mr', 'nom' => 'Mauritanie', 'dans' => 'en Mauritanie', 'tranche' => 4, 'devise' => 'MRU', 'region' => $ao, 'voisins' => ['senegal', 'mali', 'maroc']],
    'tchad'                => ['iso' => 'td', 'nom' => 'Tchad', 'dans' => 'au Tchad', 'tranche' => 4, 'devise' => 'XAF', 'region' => $ac, 'voisins' => ['cameroun', 'niger', 'centrafrique']],
    'centrafrique'         => ['iso' => 'cf', 'nom' => 'Centrafrique', 'dans' => 'en Centrafrique', 'tranche' => 4, 'devise' => 'XAF', 'region' => $ac, 'voisins' => ['cameroun', 'tchad', 'rd-congo']],
    'rwanda'               => ['iso' => 'rw', 'nom' => 'Rwanda', 'dans' => 'au Rwanda', 'tranche' => 5, 'devise' => 'RWF', 'region' => $ae, 'voisins' => ['burundi', 'rd-congo', 'congo-brazzaville']],
    'burundi'              => ['iso' => 'bi', 'nom' => 'Burundi', 'dans' => 'au Burundi', 'tranche' => 5, 'devise' => 'BIF', 'region' => $ae, 'voisins' => ['rwanda', 'rd-congo', 'centrafrique']],
    'djibouti'             => ['iso' => 'dj', 'nom' => 'Djibouti', 'dans' => 'à Djibouti', 'tranche' => 5, 'devise' => 'DJF', 'region' => $ae, 'voisins' => ['rwanda', 'burundi', 'comores']],
    'comores'              => ['iso' => 'km', 'nom' => 'Comores', 'dans' => 'aux Comores', 'tranche' => 5, 'devise' => 'KMF', 'region' => $oi, 'voisins' => ['madagascar', 'maurice', 'seychelles']],
    'maurice'              => ['iso' => 'mu', 'nom' => 'Maurice', 'dans' => 'à Maurice', 'tranche' => 5, 'devise' => 'MUR', 'region' => $oi, 'voisins' => ['madagascar', 'seychelles', 'comores']],
    'seychelles'           => ['iso' => 'sc', 'nom' => 'Seychelles', 'dans' => 'aux Seychelles', 'tranche' => 5, 'devise' => 'SCR', 'region' => $oi, 'voisins' => ['maurice', 'madagascar', 'comores']],
    'guinee-equatoriale'   => ['iso' => 'gq', 'nom' => 'Guinée équatoriale', 'dans' => 'en Guinée équatoriale', 'tranche' => 5, 'devise' => 'XAF', 'region' => $ac, 'voisins' => ['gabon', 'cameroun', 'sao-tome-et-principe']],
    'cap-vert'             => ['iso' => 'cv', 'nom' => 'Cap-Vert', 'dans' => 'au Cap-Vert', 'tranche' => 5, 'devise' => 'CVE', 'region' => $ao, 'voisins' => ['senegal', 'mauritanie', 'guinee']],
    'sao-tome-et-principe' => ['iso' => 'st', 'nom' => 'São Tomé-et-Príncipe', 'dans' => 'à São Tomé-et-Príncipe', 'tranche' => 5, 'devise' => 'STN', 'region' => $ac, 'voisins' => ['gabon', 'guinee-equatoriale', 'cameroun']],
];
