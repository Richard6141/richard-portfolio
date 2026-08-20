# Prompt Google Stitch — AMÉLIORATION (compléter + animer)

> À renvoyer dans la MÊME session Stitch, par-dessus le design déjà généré. On lui demande de garder son style mais de compléter la page, combler les vides et ajouter des animations au scroll façon Apple.

---

## ✅ PROMPT (EN — recommandé)

```
Improve and COMPLETE the landing page you just designed. Keep your current visual style, color palette and typography — do not restart from scratch. The current version is incomplete and has empty spaces and no motion. Fix everything below and turn it into a polished, complete, animated experience. All interface text must stay in FRENCH.

1) COMPLETE ALL THE MISSING SECTIONS. Right now the page jumps straight from "Services" to the footer. The full page must contain, in this order:
   - Header (sticky)
   - Hero
   - Tech strip (PHP, Laravel, Node, React, Flutter, n8n, Make, WordPress, MySQL, API REST, IA/Chatbots)
   - Services
   - Méthode (4 steps: Cadrage, Design, Développement, Lancement & suivi)
   - Réalisation phare (case study)
   - Pourquoi moi (reasons to choose him)
   - Témoignages (3 client testimonials, 5 stars)
   - FAQ (accordion)
   - Final CTA band ("Parlons de votre projet" + button "Demander un devis gratuit")
   - Footer (richer: brand + short text, Services column, Liens column, contact, © 2026)

2) FIX LAYOUT & REMOVE EMPTY SPACE:
   - The hero's RIGHT side is sparse and unbalanced (orphan icon + floating labels). Replace it with ONE cohesive visual block that fills the column and balances the large headline — for example a clean card/bento or a stylized code/dashboard illustration. No floating orphan elements.
   - The Services grid has gaps and misaligned cards. Rebuild it as a clean, evenly aligned grid where EACH of the 8 services is a complete card (icon + title + one short line). A featured card may be larger but must NOT leave big empty holes. Remove stray labels like "Nouveau" unless intentionally and cleanly placed.
   - Ensure consistent spacing and alignment; no empty zones anywhere on the page.

3) ADD RICHER CONTENT: a short benefit-driven sentence under each service, real-sounding French testimonials with names and roles, an FAQ with 4 questions (prix d'un site web au Bénin, délais, paiement Mobile Money MTN/Moov, maintenance), and a clear value proposition + CTA. Trust signals: devis gratuit, réponse sous 24h.

4) ADD MOTION — Apple-style scroll experience:
   - Smooth scroll-triggered reveals: elements fade in and slide up gently as they enter the viewport, with staggered timing inside each section.
   - Hero entrance animation on page load (staggered: badge → title → text → buttons → stats).
   - Animated count-up for the key numbers (8+, 500/mois, 100%).
   - Subtle parallax on hero and section visuals.
   - At least one pinned/sticky scroll moment (like Apple product pages): e.g. the featured case study or the services section stays in view while its content transitions.
   - Refined easing (ease-out cubic), tasteful hover micro-interactions on cards and buttons, smooth anchor scrolling.
   - Keep it elegant and performant — subtle, not flashy.

Deliver the COMPLETE page with all sections filled and the animations described.
```

---

## 🇫🇷 PROMPT (FR)

```
Améliore et COMPLÈTE la landing page que tu viens de concevoir. Garde ton style, ta palette et ta typo actuels — ne repars pas de zéro. La version actuelle est incomplète, a des espaces vides et aucune animation. Corrige tout ce qui suit pour en faire une page soignée, complète et animée. Tout le texte d'interface reste en FRANÇAIS.

1) COMPLÈTE TOUTES LES SECTIONS MANQUANTES. Actuellement la page passe directement des « Services » au footer. La page complète doit contenir, dans cet ordre : header collant ; hero ; bandeau techno ; Services ; Méthode (4 étapes : Cadrage, Design, Développement, Lancement & suivi) ; Réalisation phare (étude de cas) ; Pourquoi moi ; Témoignages (3 avis 5★) ; FAQ (accordéon) ; bande CTA finale (« Parlons de votre projet » + bouton « Demander un devis gratuit ») ; footer plus riche (marque + texte, colonne Services, colonne Liens, contact, © 2026).

2) CORRIGE LA MISE EN PAGE & SUPPRIME LES VIDES :
   - Le côté DROIT du hero est vide et déséquilibré (icône orpheline + labels flottants). Remplace-le par UN bloc visuel cohérent qui remplit la colonne et équilibre le grand titre (ex. une carte/bento propre ou une illustration stylisée de code/dashboard). Aucun élément flottant orphelin.
   - La grille des Services a des trous et des cartes mal alignées. Refais-la propre et alignée : CHACUN des 8 services est une carte complète (icône + titre + une ligne). Une carte mise en avant peut être plus grande mais NE doit PAS laisser de gros vides. Retire les labels parasites comme « Nouveau » s'ils ne sont pas placés proprement.
   - Espacements et alignements cohérents ; aucune zone vide sur la page.

3) AJOUTE DU CONTENU : une phrase bénéfice sous chaque service, des témoignages français crédibles (nom + rôle), une FAQ de 4 questions (prix d'un site web au Bénin, délais, paiement Mobile Money MTN/Moov, maintenance), une proposition de valeur claire + CTA. Signaux de confiance : devis gratuit, réponse sous 24h.

4) AJOUTE DES ANIMATIONS — expérience au scroll façon Apple :
   - Révélations douces au scroll : les éléments apparaissent en fondu + léger glissement vers le haut à l'entrée dans l'écran, en cascade dans chaque section.
   - Animation d'entrée du hero au chargement (cascade : badge → titre → texte → boutons → stats).
   - Compteurs animés pour les chiffres clés (8+, 500/mois, 100%).
   - Parallaxe subtile sur les visuels.
   - Au moins un moment « sticky/épinglé » au scroll (comme les pages produit Apple) : ex. l'étude de cas ou les services restent à l'écran pendant que le contenu défile/transitionne.
   - Easing soigné (ease-out cubic), micro-interactions au survol sur cartes et boutons, défilement fluide.
   - Reste élégant et performant — subtil, pas tape-à-l'œil.

Livre la page COMPLÈTE, toutes sections remplies, avec les animations décrites.
```

---

## ⚠️ À savoir (honnête)
- Stitch est surtout fort pour le **design statique** ; les **animations au scroll façon Apple** (sticky/pin, parallaxe) sont souvent **limitées ou simulées** dans son aperçu. Demande-les quand même — au pire le rendu visuel sera complet, et on **codera les vraies animations** proprement à l'intégration (Phase 2), où on maîtrise tout.
- Procède **section par section** si Stitch peine : « complète d'abord la section Méthode + Réalisation », puis « ajoute Témoignages + FAQ + CTA », puis « ajoute les animations au scroll ».
```
