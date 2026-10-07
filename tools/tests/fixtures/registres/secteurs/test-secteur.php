<?php
// Fixture de test des registres (vague 1E) : jamais servie sur le site.
return [
    'titre'    => 'Secteur de test pour les tests automatiques',
    'title'    => 'Secteur de test pour les tests du registre | Richard SALANON',
    'meta'     => 'Page de test du registre des secteurs : elle sert uniquement aux tests automatiques et n\'est jamais servie sur le site public de Richard SALANON.',
    'en_bref'  => 'Page de test.',
    'publie'   => '2026-01-01',
    'maj'      => '2026-01-02',
    'univers'  => 'Droit et justice',
    'locales'  => ['digitaliser-import-export-cotonou'],
    'sections' => [['type' => 'prose', 'titre' => 'Que contient cette page de test ?', 'paragraphes' => ['Texte de test.']]],
    'faq'      => [['q' => 'Question de test ?', 'r' => 'Réponse de test.']],
    'sources'  => [['titre' => 'Source de test', 'url' => 'https://example.org/', 'date' => '2026-01-01']],
    'liens'    => ['metiers' => ['test-metier']],
];
