<?php
// ============================================================
// data/redirections.php · Table unique des redirections 301 (spec 6.8), vague 0C.
// Une entrée ne s'active que le jour où sa cible est publiée (redirection_cible()) :
// d'ici là, l'ancienne page reste en ligne. Jamais de chaîne.
// ============================================================
declare(strict_types=1);

$paysDesVilles = [
    'cotonou' => 'benin', 'abomey-calavi' => 'benin', 'porto-novo' => 'benin', 'parakou' => 'benin', 'bohicon' => 'benin',
    'abomey' => 'benin', 'ouidah' => 'benin', 'lokossa' => 'benin', 'natitingou' => 'benin', 'djougou' => 'benin',
    'abidjan' => 'cote-d-ivoire', 'dakar' => 'senegal', 'lome' => 'togo',
    'paris' => 'france', 'lyon' => 'france', 'marseille' => 'france', 'bruxelles' => 'belgique',
    'geneve' => 'suisse', 'lausanne' => 'suisse', 'montreal' => 'canada', 'quebec' => 'canada',
];

$r = [];
foreach ($paysDesVilles as $ville => $pays) {
    $r['/formation-ia-entreprise-' . $ville] = '/formations/ia-en-entreprise/' . $pays;
}
foreach (['abidjan', 'abomey-calavi', 'bohicon', 'cotonou', 'dakar', 'lome', 'ouidah', 'parakou', 'porto-novo'] as $ville) {
    $r['/integration-odoo-' . $ville]     = '/services/integration-odoo/' . $paysDesVilles[$ville];
    $r['/integration-dolibarr-' . $ville] = '/services/integration-dolibarr/' . $paysDesVilles[$ville];
}
foreach (['paris', 'lyon', 'marseille', 'bruxelles', 'geneve', 'lausanne', 'montreal', 'quebec'] as $ville) {
    $r['/externaliser-developpement-web-' . $ville] = '/services/externalisation-developpement/' . $paysDesVilles[$ville];
}

return $r + [
    '/formation-ia-entreprise'              => '/formations/ia-en-entreprise',
    '/formation-automatisation'             => '/formations/n8n',
    '/formation-outils-numeriques'          => '/formations/excel-google-sheets',
    '/formation-developpement-web'          => '/formations/developpement-web',
    '/services/formation-en-programmation'  => '/formations/developpement-web',
    '/formation-odoo'                       => '/formations/odoo-utilisateurs',
    '/formation-dolibarr'                   => '/formations/dolibarr-utilisateurs',
    '/formation-seo-visibilite-google'      => '/formations/visibilite-google',
    '/formation-vibecoding'                 => '/formations/vibecoding',
    '/formation-whatsapp-business'          => '/formations/whatsapp-business',
    '/consultant-digitalisation'            => '/services/consultant-digitalisation',
    '/expert-digitalisation-entreprise'     => '/services/digitalisation-d-entreprise',
    '/blog/n8n-vs-zapier-vs-make-2026'       => '/comparatifs/n8n-vs-make-vs-zapier',
    '/blog/wordpress-ou-sur-mesure-comment-choisir'                 => '/comparatifs/wordpress-vs-sur-mesure',
    '/blog/application-mobile-ou-site-web-que-developper-en-premier' => '/comparatifs/application-mobile-vs-site-web',
    '/blog/combien-coute-un-site-web-professionnel-en-2026-guide-complet' => '/blog/combien-coute-un-site-web-au-benin',
    '/blog/etre-visible-chatgpt-gemini-2026'                         => '/blog/seo-2026-apparaitre-dans-les-reponses-ia',
];
