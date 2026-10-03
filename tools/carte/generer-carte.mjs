// ============================================================
// tools/carte/generer-carte.mjs · Génère assets/img/carte-pays.svg, la carte
// statique des 34 pays servis (Afrique, Europe, Atlantique), avec des arcs
// pointillés animés depuis Cotonou.
// Usage : cd tools/carte && npm install && node generer-carte.mjs
// Sortie : un SVG autonome (aucune référence externe, aucun script), à
// inclure tel quel dans une page ou à servir comme image.
// Projection Mercator recadrée ; géométrie world-atlas 50m simplifiée
// (Douglas-Peucker en espace projeté) puis arrondie au dixième.
// ============================================================
import { readFileSync, writeFileSync } from "node:fs";
import path from "node:path";
import { fileURLToPath } from "node:url";
import { geoMercator, geoPath, geoCentroid } from "d3-geo";
import { feature } from "topojson-client";

const ICI = path.dirname(fileURLToPath(import.meta.url));
const SORTIE = path.resolve(ICI, "../../assets/img/carte-pays.svg");
const SOURCE = path.join(ICI, "node_modules/world-atlas/countries-50m.json");

// --- Cadre (degrés) et dimensions du viewBox -------------------------------
// Cap-Vert à l'ouest, Maurice et Seychelles à l'est, toute l'Afrique au sud,
// le sud de la Scandinavie au nord. Le Canada reste hors cadre.
const CADRE = { lonMin: -30, lonMax: 62, latMin: -35.5, latMax: 60.5 };
const LARGEUR = 720;
const TOLERANCE = 0.45; // simplification, en unités du viewBox
const AIRE_MIN = 2; // anneaux non servis plus petits ignorés (unités²)

// --- Pays servis : [slug, nom, code ISO 3166-1 numérique] -------------------
const PAYS = [
  ["benin", "Bénin", "204"],
  ["cote-d-ivoire", "Côte d'Ivoire", "384"],
  ["senegal", "Sénégal", "686"],
  ["togo", "Togo", "768"],
  ["cameroun", "Cameroun", "120"],
  ["burkina-faso", "Burkina Faso", "854"],
  ["mali", "Mali", "466"],
  ["niger", "Niger", "562"],
  ["guinee", "Guinée", "324"],
  ["gabon", "Gabon", "266"],
  ["congo-brazzaville", "Congo-Brazzaville", "178"],
  ["rd-congo", "RD Congo", "180"],
  ["france", "France", "250"],
  ["belgique", "Belgique", "056"],
  ["suisse", "Suisse", "756"],
  ["canada", "Canada", "124"],
  ["luxembourg", "Luxembourg", "442"],
  ["monaco", "Monaco", "492"],
  ["maroc", "Maroc", "504"],
  ["tunisie", "Tunisie", "788"],
  ["algerie", "Algérie", "012"],
  ["madagascar", "Madagascar", "450"],
  ["mauritanie", "Mauritanie", "478"],
  ["tchad", "Tchad", "148"],
  ["centrafrique", "Centrafrique", "140"],
  ["rwanda", "Rwanda", "646"],
  ["burundi", "Burundi", "108"],
  ["djibouti", "Djibouti", "262"],
  ["comores", "Comores", "174"],
  ["maurice", "Maurice", "480"],
  ["seychelles", "Seychelles", "690"],
  ["guinee-equatoriale", "Guinée équatoriale", "226"],
  ["cap-vert", "Cap-Vert", "132"],
  ["sao-tome-et-principe", "São Tomé-et-Príncipe", "678"],
];

// Petits États : un point en plus du tracé, sinon invisibles.
const POINTS = new Set([
  "maurice", "seychelles", "comores", "cap-vert",
  "sao-tome-et-principe", "monaco", "luxembourg",
]);

// Cibles des arcs quand le centroïde ne convient pas [lon, lat].
// France : le centroïde inclut l'outre-mer, on vise Paris.
const CIBLES = { france: [2.35, 48.86] };

const COTONOU = [2.43, 6.37];
const MONTREAL_LAT = 45.5;

// --- Projection --------------------------------------------------------------
const projection = geoMercator().scale(1).translate([0, 0]);
const [ox, oy] = projection([CADRE.lonMin, CADRE.latMax]);
const [fx, fy] = projection([CADRE.lonMax, CADRE.latMin]);
const k = LARGEUR / (fx - ox);
const HAUTEUR = Math.round((fy - oy) * k);
projection
  .scale(k)
  .translate([-ox * k, -oy * k])
  .clipExtent([[0, 0], [LARGEUR, HAUTEUR]])
  .precision(0);

// --- Géométrie : capture des anneaux projetés et découpés --------------------
function anneaux(geo) {
  const liste = [];
  let courant = null;
  const contexte = {
    moveTo(x, y) { courant = [[x, y]]; liste.push(courant); },
    lineTo(x, y) { courant.push([x, y]); },
    closePath() {},
    arc() {},
  };
  geoPath(projection, contexte)(geo);
  return liste;
}

function distanceSegment([px, py], [ax, ay], [bx, by]) {
  const dx = bx - ax, dy = by - ay;
  const l2 = dx * dx + dy * dy;
  let t = l2 ? ((px - ax) * dx + (py - ay) * dy) / l2 : 0;
  t = Math.max(0, Math.min(1, t));
  return Math.hypot(px - (ax + t * dx), py - (ay + t * dy));
}

function douglasPeucker(pts, tol) {
  const n = pts.length;
  if (n < 3) return pts.slice();
  const garder = new Uint8Array(n);
  garder[0] = garder[n - 1] = 1;
  const pile = [[0, n - 1]];
  while (pile.length) {
    const [a, b] = pile.pop();
    let dmax = 0, idx = -1;
    for (let i = a + 1; i < b; i++) {
      const d = distanceSegment(pts[i], pts[a], pts[b]);
      if (d > dmax) { dmax = d; idx = i; }
    }
    if (dmax > tol) { garder[idx] = 1; pile.push([a, idx], [idx, b]); }
  }
  return pts.filter((_, i) => garder[i]);
}

// Anneau fermé : on coupe au point le plus éloigné du premier.
function simplifierAnneau(pts, tol) {
  if (pts.length < 4) return pts;
  let loin = 0, dmax = -1;
  for (let i = 1; i < pts.length; i++) {
    const d = Math.hypot(pts[i][0] - pts[0][0], pts[i][1] - pts[0][1]);
    if (d > dmax) { dmax = d; loin = i; }
  }
  const a = douglasPeucker(pts.slice(0, loin + 1), tol);
  const b = douglasPeucker(pts.slice(loin).concat([pts[0]]), tol);
  return a.concat(b.slice(1, -1));
}

function aire(pts) {
  let s = 0;
  for (let i = 0, j = pts.length - 1; i < pts.length; j = i++) {
    s += (pts[j][0] + pts[i][0]) * (pts[j][1] - pts[i][1]);
  }
  return Math.abs(s / 2);
}

// --- Écriture compacte des chemins (dixièmes, coordonnées relatives) --------
function nombre(dixiemes) {
  let s = (Math.abs(dixiemes) / 10).toString();
  if (s.startsWith("0.")) s = s.slice(1);
  return (dixiemes < 0 ? "-" : "") + s;
}

function ajouter(sortie, valeurs) {
  for (const v of valeurs) {
    const t = nombre(v);
    const fin = sortie[sortie.length - 1];
    if (!(t.startsWith("-") || /[a-zA-Z]/.test(fin))) sortie += " ";
    sortie += t;
  }
  return sortie;
}

function ecrireAnneau(pts) {
  const entiers = [];
  for (const [x, y] of pts) {
    const p = [Math.round(x * 10), Math.round(y * 10)];
    const prec = entiers[entiers.length - 1];
    if (!prec || prec[0] !== p[0] || prec[1] !== p[1]) entiers.push(p);
  }
  while (entiers.length > 1 && entiers[0][0] === entiers.at(-1)[0] && entiers[0][1] === entiers.at(-1)[1]) entiers.pop();
  if (entiers.length < 3) return "";
  let s = ajouter("M", entiers[0]);
  let commande = "M";
  for (let i = 1; i < entiers.length; i++) {
    const dx = entiers[i][0] - entiers[i - 1][0];
    const dy = entiers[i][1] - entiers[i - 1][1];
    const [c, v] = dx === 0 ? ["v", [dy]] : dy === 0 ? ["h", [dx]] : ["l", [dx, dy]];
    if (c !== commande) { s += c; commande = c; }
    s = ajouter(s, v);
  }
  return s + "z";
}

function chemin(geo, servi) {
  const brut = anneaux(geo);
  const morceaux = [];
  for (const anneau of brut) {
    const simple = simplifierAnneau(anneau, TOLERANCE);
    if (!servi && aire(simple) < AIRE_MIN) continue;
    const d = ecrireAnneau(simple);
    if (d) morceaux.push(d);
  }
  return morceaux.join("");
}

const r1 = (v) => Math.round(v * 10) / 10;
const pt = ([x, y]) => `${r1(x)} ${r1(y)}`;

// --- Données -----------------------------------------------------------------
const topo = JSON.parse(readFileSync(SOURCE, "utf8"));
const monde = feature(topo, topo.objects.countries).features;
const parId = new Map(monde.map((f) => [f.id, f]));
const idsServis = new Set(PAYS.map(([, , id]) => id));

// Pays non servis : un seul chemin (frontières conservées).
const neutre = monde
  .filter((f) => !idsServis.has(f.id))
  .map((f) => chemin(f, false))
  .join("");

// Point « Canada » au bord gauche, à la latitude de Montréal.
const CANADA = [9, projection([CADRE.lonMin, MONTREAL_LAT])[1]];

const servis = [];
const points = [];
const cibles = new Map();
for (const [slug, , id] of PAYS) {
  const f = parId.get(id);
  if (!f) throw new Error(`Pays absent de world-atlas : ${slug} (${id})`);
  const d = slug === "canada" ? "" : chemin(f, true);
  if (d) servis.push(`<path class="pays pays--servi" data-slug="${slug}" d="${d}"/>`);
  const centre = slug === "canada" ? null : projection(CIBLES[slug] ?? geoCentroid(f));
  cibles.set(slug, slug === "canada" ? CANADA : centre);
  if (POINTS.has(slug)) {
    const c = projection(geoCentroid(f));
    points.push(`<circle class="point" data-slug="${slug}" cx="${r1(c[0])}" cy="${r1(c[1])}" r="3"/>`);
  }
}
points.push(`<circle class="point" data-slug="canada" cx="${r1(CANADA[0])}" cy="${r1(CANADA[1])}" r="3"/>`);

// --- Arcs : courbe quadratique, renflement perpendiculaire vers le haut ------
const origine = projection(COTONOU);
const arcs = [];
let i = 0;
for (const [slug] of PAYS) {
  if (slug === "benin") continue;
  const [tx, ty] = cibles.get(slug);
  const dx = tx - origine[0], dy = ty - origine[1];
  const longueur = Math.hypot(dx, dy);
  let nx = -dy / longueur, ny = dx / longueur;
  if (ny > 1e-9 || (Math.abs(ny) <= 1e-9 && nx > 0)) { nx = -nx; ny = -ny; }
  const bombe = Math.min(longueur * 0.22, 130);
  const c = [(origine[0] + tx) / 2 + nx * bombe, (origine[1] + ty) / 2 + ny * bombe];
  const delai = ((i * 9) % 36) / 10; // -(i*0.9)s modulo 3.6, en entiers
  const style = delai > 1e-9 ? ` style="animation-delay:-${r1(delai)}s"` : "";
  arcs.push(`<path class="arc" data-slug="${slug}"${style} d="M${pt(origine)}Q${pt(c)} ${pt([tx, ty])}"/>`);
  i++;
}

// --- Assemblage -----------------------------------------------------------------
const noms = PAYS.map(([, nom]) => nom);
const listeNoms = `${noms.slice(0, -1).join(", ")} et ${noms.at(-1)}`;
const description =
  "Carte de l'Afrique, de l'Europe et de l'Atlantique où sont mis en évidence " +
  `les ${PAYS.length} pays servis : ${listeNoms}. ` +
  "Des arcs pointillés partent de Cotonou, au Bénin, vers chacun des autres pays. " +
  "Le Canada, situé hors du cadre, est signalé au bord gauche de la carte.";

const style = [
  ".carte-pays .pays{fill:var(--carte-terre,#E8E1D8);stroke:var(--carte-trait,#FBF8F4);stroke-width:.5;stroke-linejoin:round;vector-effect:non-scaling-stroke}",
  ".carte-pays .pays--servi{fill:var(--carte-servi,#0F6B6B)}",
  ".carte-pays .arc{fill:none;stroke:var(--carte-arc,#C2502F);stroke-width:1.4;stroke-dasharray:1 22;stroke-linecap:round;opacity:.9;animation:carte-flux 3.6s linear infinite}",
  "@keyframes carte-flux{to{stroke-dashoffset:-23}}",
  "@media (prefers-reduced-motion:reduce){.carte-pays .arc{animation:none}}",
  ".carte-pays .point{fill:var(--carte-servi,#0F6B6B);stroke:var(--carte-trait,#FBF8F4);stroke-width:1}",
  ".carte-pays .origine{fill:var(--carte-arc,#C2502F);stroke:#FFF;stroke-width:1.5}",
  ".carte-pays .etiquette{font:600 15px \"Plus Jakarta Sans\",system-ui,-apple-system,\"Segoe UI\",Roboto,sans-serif;fill:var(--carte-texte,#2A2522);paint-order:stroke;stroke:var(--carte-trait,#FBF8F4);stroke-width:3px;stroke-linejoin:round}",
].join("");

const svg = [
  `<svg xmlns="http://www.w3.org/2000/svg" class="carte-pays" viewBox="0 0 ${LARGEUR} ${HAUTEUR}" role="img" aria-labelledby="carte-titre carte-desc">`,
  `<title id="carte-titre">Pays servis par Richard SALANON</title>`,
  `<desc id="carte-desc">${description}</desc>`,
  `<style>${style}</style>`,
  `<path class="pays" d="${neutre}"/>`,
  ...servis,
  ...arcs,
  ...points,
  `<circle class="origine" cx="${r1(origine[0])}" cy="${r1(origine[1])}" r="5"/>`,
  `<text class="etiquette" x="${r1(origine[0] - 9)}" y="${r1(origine[1] + 17)}" text-anchor="end">Cotonou</text>`,
  `<text class="etiquette" x="${r1(CANADA[0] + 7)}" y="${r1(CANADA[1] + 4.5)}">Canada</text>`,
  `</svg>`,
].join("\n");

writeFileSync(SORTIE, svg + "\n", "utf8");

console.log(`Écrit : ${SORTIE}`);
console.log(`viewBox : 0 0 ${LARGEUR} ${HAUTEUR}`);
console.log(`Taille : ${(Buffer.byteLength(svg) / 1024).toFixed(1)} Ko`);
console.log(`Tracés servis : ${servis.length} · points : ${points.length} · arcs : ${arcs.length}`);
