// ============================================================
// tools/icones/generer.mjs · Reconstruit helpers/phosphor.php.
// Créé le 03/10/2026 (vague 0B).
//
// Lit la liste des icônes retenues dans liste.json, va chercher le SVG
// de chacune dans le paquet @phosphor-icons/core (assets/<poids>/<nom>.svg),
// n'en garde que le contenu intérieur (la balise <svg> est reconstruite
// par icone() côté PHP) et écrit le tableau PHOSPHOR_ICONES.
// Copie aussi la licence MIT du paquet dans LICENCE-phosphor.txt.
//
// Usage : npm install && npm run generer   (depuis tools/icones/)
// Pour étendre le jeu : ajouter le nom Phosphor dans liste.json, relancer.
// Un nom inexistant arrête la génération sans rien écrire.
// ============================================================
import { readFileSync, writeFileSync, existsSync } from 'node:fs';
import { dirname, join, relative } from 'node:path';
import { fileURLToPath } from 'node:url';

const ICI = dirname(fileURLToPath(import.meta.url));
const RACINE = join(ICI, '..', '..');
const PAQUET = join(ICI, 'node_modules', '@phosphor-icons', 'core');
const SORTIE = join(RACINE, 'helpers', 'phosphor.php');
const LICENCE = join(ICI, 'LICENCE-phosphor.txt');
const VIEWBOX = '0 0 256 256';

if (!existsSync(PAQUET)) {
    console.error('Paquet @phosphor-icons/core absent : lancer « npm install » dans tools/icones/.');
    process.exit(1);
}

const liste = JSON.parse(readFileSync(join(ICI, 'liste.json'), 'utf8'));
const poids = liste.poids ?? 'regular';
const version = JSON.parse(readFileSync(join(PAQUET, 'package.json'), 'utf8')).version;
const texteLicence = readFileSync(join(PAQUET, 'LICENSE'), 'utf8').replace(/\r\n/g, '\n').trimEnd() + '\n';
const copyright = texteLicence.split('\n').find((ligne) => ligne.startsWith('Copyright'));
if (!copyright) {
    console.error('Ligne de copyright introuvable dans la licence du paquet.');
    process.exit(1);
}

// Contenu intérieur d'un SVG Phosphor, sans la balise <svg> englobante.
function interieur(nom) {
    const fichier = join(PAQUET, 'assets', poids, `${nom}.svg`);
    if (!existsSync(fichier)) {
        return null;
    }
    const source = readFileSync(fichier, 'utf8');
    const m = source.match(/^\s*<svg\b([^>]*)>([\s\S]*)<\/svg>\s*$/);
    if (!m) {
        throw new Error(`${nom} : balise <svg> racine introuvable.`);
    }
    const [, attributs, contenu] = m;
    if (!attributs.includes(`viewBox="${VIEWBOX}"`) || !attributs.includes('fill="currentColor"')) {
        throw new Error(`${nom} : viewBox ou fill inattendu (${attributs.trim()}).`);
    }
    // Seule retouche : les blancs entre balises.
    return contenu.trim().replace(/>\s+</g, '><');
}

// Chaîne PHP entre apostrophes.
const php = (texte) => `'${texte.replace(/\\/g, '\\\\').replace(/'/g, "\\'")}'`;

const vus = new Set();
const manquants = [];
const doublons = [];
const lignes = [];

for (const [groupe, noms] of Object.entries(liste.groupes)) {
    lignes.push(`    // --- ${groupe} ---`);
    for (const nom of noms) {
        if (vus.has(nom)) {
            doublons.push(`${nom} (${groupe})`);
            continue;
        }
        const svg = interieur(nom);
        if (svg === null) {
            manquants.push(nom);
            continue;
        }
        vus.add(nom);
        lignes.push(`    ${php(nom)} => ${php(svg)},`);
    }
}

if (manquants.length > 0) {
    console.error(`Icônes absentes de @phosphor-icons/core ${version} (${poids}) : ${manquants.join(', ')}`);
    console.error('Rien n\'a été écrit. Corriger liste.json (voir https://phosphoricons.com).');
    process.exit(1);
}

const licenceEnCommentaire = texteLicence.trimEnd().split('\n').map((l) => (l === '' ? '//' : `//   ${l}`)).join('\n');

const contenu = `<?php
// ============================================================
// helpers/phosphor.php · Jeu d'icônes Phosphor retenu pour le site.
// Créé le 03/10/2026 (vague 0B).
//
// FICHIER GÉNÉRÉ : ne pas modifier à la main. Pour ajouter une icône,
// compléter tools/icones/liste.json puis lancer « npm run generer »
// dans tools/icones/ (script generer.mjs).
//
// Origine : Phosphor Icons (https://phosphoricons.com), paquet npm
// @phosphor-icons/core ${version}, graisse « ${poids} », viewBox ${VIEWBOX}.
// Chaque entrée de PHOSPHOR_ICONES est le contenu intérieur du SVG
// d'origine, tel quel ; la balise <svg> est reconstruite par icone()
// avec fill="currentColor", l'icône prend donc la couleur du texte.
//
// Licence MIT, ${copyright}
// Texte de la licence (aussi dans tools/icones/LICENCE-phosphor.txt) :
//
${licenceEnCommentaire}
// ============================================================
declare(strict_types=1);

const PHOSPHOR_ICONES = [
${lignes.join('\n')}
];

/**
 * Rend une icône Phosphor en SVG en ligne.
 *
 * Sans libellé, l'icône est décorative (aria-hidden) : le texte voisin
 * porte le sens. Avec un libellé, elle est annoncée (role="img" +
 * aria-label) ; à réserver aux icônes seules, sans texte à côté.
 * Un libellé vide est traité comme une absence de libellé.
 *
 * @throws InvalidArgumentException si le nom n'est pas dans le jeu.
 */
function icone(string $nom, int $taille = 24, string $classe = 'ic', ?string $libelle = null): string
{
    if (!isset(PHOSPHOR_ICONES[$nom])) {
        throw new InvalidArgumentException(
            sprintf('Icône inconnue : « %s ». Ajouter son nom Phosphor à tools/icones/liste.json et régénérer.', $nom)
        );
    }

    $accessibilite = ($libelle ?? '') === ''
        ? 'aria-hidden="true"'
        : 'role="img" aria-label="' . htmlspecialchars($libelle, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '"';

    return '<svg class="' . htmlspecialchars($classe, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '"'
        . ' width="' . $taille . '" height="' . $taille . '"'
        . ' viewBox="${VIEWBOX}" fill="currentColor" ' . $accessibilite . ' focusable="false">'
        . PHOSPHOR_ICONES[$nom]
        . '</svg>';
}
`;

writeFileSync(SORTIE, contenu, 'utf8');
writeFileSync(LICENCE, texteLicence, 'utf8');

console.log(`${vus.size} icônes écrites dans ${relative(RACINE, SORTIE)} (${(Buffer.byteLength(contenu) / 1024).toFixed(1)} Ko).`);
if (doublons.length > 0) {
    console.log(`Doublons ignorés (déjà présents dans un groupe précédent) : ${doublons.join(', ')}`);
}
console.log(`Licence copiée dans ${relative(RACINE, LICENCE)}.`);
