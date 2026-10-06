'use strict';
// ============================================================
// tools/tests/js/consentement.js · Harnais Node du bandeau de consentement (06/10/2026).
// Exécute les <script> de portfolio/partials/tracking.php dans un faux navigateur
// minimal (cookies, écouteurs, minuteurs, <head> et <body>), joue un scénario,
// puis écrit sur la sortie standard ce que le script a fait, en JSON.
// Usage : node consentement.js SCENARIO.json
// SCENARIO.json : {"code": "...", "cookies": ["nom=valeur"], "actions": ["DOMContentLoaded", "gestes", "load",
//                  "minuteurs", "clic:oui", "clic:non", "clic:cookies"]}
// ============================================================
const vm = require('vm');
const fs = require('fs');

const scenario = JSON.parse(fs.readFileSync(process.argv[2], 'utf8'));
const journal = { scripts: [], cookiesEcrits: [], recharge: false };
const pot = new Map();
for (const c of scenario.cookies || []) {
    const i = c.indexOf('=');
    pot.set(c.slice(0, i), c.slice(i + 1));
}

function element(balise) {
    return {
        tagName: balise.toUpperCase(), attributs: {}, enfants: [], hidden: false, className: '', innerHTML: '', src: '', async: false,
        setAttribute(n, v) { this.attributs[n] = String(v); },
        getAttribute(n) { return n in this.attributs ? this.attributs[n] : null; },
        appendChild(c) { this.enfants.push(c); return c; },
    };
}

const ecouteursFenetre = {};
const ecouteursDocument = {};
const minuteurs = [];
const head = element('head');
head.appendChild = function (c) {
    this.enfants.push(c);
    if (c.src) { journal.scripts.push(c.src); }
    return c;
};
const body = element('body');

const document = {
    head, body, readyState: 'loading',
    createElement: element,
    addEventListener(t, f) { (ecouteursDocument[t] = ecouteursDocument[t] || []).push(f); },
    get cookie() { return [...pot].map(([n, v]) => n + '=' + v).join('; '); },
    set cookie(s) {
        journal.cookiesEcrits.push(s);
        const [paire, ...attributs] = s.split(';').map((x) => x.trim());
        const i = paire.indexOf('=');
        const age = attributs.find((a) => /^max-age=/i.test(a));
        if (age && Number(age.split('=')[1]) <= 0) {
            pot.delete(paire.slice(0, i));
        } else {
            pot.set(paire.slice(0, i), paire.slice(i + 1));
        }
    },
};

// Le contexte global du script est la fenêtre elle-même, comme dans un navigateur :
// dataLayer, clarity et analytiqueChargeurs y sont lisibles sans préfixe.
const fenetre = vm.createContext({
    document,
    location: { protocol: 'https:', hostname: 'richardsalanon.com', reload() { journal.recharge = true; } },
    addEventListener(t, f) { (ecouteursFenetre[t] = ecouteursFenetre[t] || []).push(f); },
    removeEventListener(t, f) { ecouteursFenetre[t] = (ecouteursFenetre[t] || []).filter((g) => g !== f); },
    requestIdleCallback(f) { minuteurs.push(f); },
    setTimeout(f) { minuteurs.push(f); },
    Date,
});
fenetre.window = fenetre;

vm.runInContext(scenario.code, fenetre);

function cible(attributs) {
    return {
        attributs,
        getAttribute(n) { return n in attributs ? attributs[n] : null; },
        closest(selecteur) {
            const nom = selecteur.replace(/^\[|\]$/g, '');
            return nom in attributs ? this : null;
        },
    };
}

for (const action of scenario.actions || []) {
    if (action === 'DOMContentLoaded') {
        document.readyState = 'interactive';
        (ecouteursDocument.DOMContentLoaded || []).forEach((f) => f({}));
    } else if (action === 'gestes') {
        (ecouteursFenetre.scroll || []).slice().forEach((f) => f({}));
    } else if (action === 'load') {
        document.readyState = 'complete';
        (ecouteursFenetre.load || []).slice().forEach((f) => f({}));
    } else if (action === 'minuteurs') {
        for (let tours = 0; minuteurs.length && tours < 50; tours++) {
            minuteurs.shift()();
        }
    } else if (action.startsWith('clic:')) {
        const quoi = action.slice(5);
        const t = quoi === 'cookies' ? cible({ 'data-cookies': '' }) : cible({ 'data-choix': quoi });
        (ecouteursDocument.click || []).forEach((f) => f({ target: t, preventDefault() {} }));
    }
}

const enTableau = (x) => (x && typeof x === 'object' && typeof x.length === 'number' ? Array.from(x) : x);
process.stdout.write(JSON.stringify({
    scripts: journal.scripts,
    choix: pot.has('consentement_mesure') ? pot.get('consentement_mesure') : null,
    cookiesEcrits: journal.cookiesEcrits,
    cookiesRestants: [...pot.keys()],
    recharge: journal.recharge,
    bandeaux: body.enfants.filter((e) => /\bcookies\b/.test(e.className))
        .map((e) => ({ hidden: e.hidden, role: e.getAttribute('role'), html: e.innerHTML })),
    dataLayer: (fenetre.dataLayer || []).map(enTableau),
    clarity: ((fenetre.clarity && fenetre.clarity.q) || []).map(enTableau),
}));
