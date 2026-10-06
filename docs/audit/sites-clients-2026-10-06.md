# Sites clients : défauts à corriger avant les histoires (audit du 6 octobre 2026)

Audit en lecture seule des 11 sites (au plus 12 pages par site, curl et Edge sans interface).
Règle de la spec : une histoire client n'est publiée qu'une fois les défauts publics de son site corrigés.

**Résultat : aucune histoire n'est publiable aujourd'hui.** Les plus proches : Wapy, Impulse Finance et OBA TV.

## Corrections à transmettre

| Site | Ce qu'il faut demander |
|---|---|
| Wapy (ton produit) | Retirer de /tarifs la phrase « La colonne Tarif reste vide de montant tant que la grille n'est pas arrêtée. » et la note interne « Les montants affichés ici… viennent d'un seul fichier de données… ». |
| Impulse Finance | Remplir les mentions légales : forme juridique, capital, SIREN/SIRET, TVA intracommunautaire, directeur de publication, n° d'inscription à l'Ordre. Secondaire : l'accueil annonce des simulateurs LMNP et « rémunération dirigeant » absents de /simulateurs. |
| OBA TV | Remplacer « +229 01 00 00 00 00 » par le vrai numéro Mobile Money sur /annonces et /abonnement ; supprimer la vidéo « FLASH INFO (copie) ». Facultatif : e-mail du schéma sur @obatv.bj (aujourd'hui contact@obaotv.com) et crédit vers richardsalanon.com (aujourd'hui richard.salanon.info, qui redirige). |
| GC Pro Consulting | Retirer la session des 19 et 20 août 2026 du bloc « Prochaines formations » de l'accueil ; renseigner RCCM et IFU ; traduire ou retirer les actualités anglaises en 404 ; demander à Hostinger de désactiver le défi navigateur ou de laisser passer les robots (un user-agent Googlebot reçoit un 403 « Checking your browser… », robots.txt aussi : à contrôler dans Search Console). |
| Afro Joy'ce | Corriger le prix de l'Attiéké poisson carpe (affiché 300 F, les packs qui le contiennent sont calculés avec ce prix) ; compléter forme juridique, RCCM, compte contribuable et responsable de publication ; brancher un nom de domaine. |
| INOVIS Côte d'Ivoire | Faire pointer inovis-ci.com (encore l'ancien WordPress de 2021) vers le nouveau site, avec canonique, sitemap et JSON-LD sur ce domaine ; ajouter mentions légales et confidentialité (le formulaire collecte nom, e-mail et téléphone). |
| IK Fashion House | Compresser les photos (l'accueil pèse 4,7 Mo, dont une photo de 2,6 Mo) ; ajouter forme juridique, RCCM, IFU et hébergeur complet ; corriger « L&#039;indigo » dans le titre d'onglet et « sur-mesure&nbsp;? » sur /contact ; masquer le Journal vide ; renommer les produits provisoires (« Bleu azur 2 », « Tenue 2 ») ; faire confirmer le numéro (+229) 01 60 00 00 45. |
| QueenK Beauty | Rédiger de vraies mentions légales, CGV, livraison et confidentialité (aucune page de confidentialité alors qu'il y a des comptes clients et une newsletter) ; remettre les 6 images de catégories sur www.queenkbeauty.com (elles sont sur queenkbeauty.e-bd.de, dont le HTTPS est cassé : images absentes) ; rendu côté serveur conseillé. Rappel : histoire seulement avec l'accord de la cliente. |
| AT Consulting International | Créer mentions légales et confidentialité (liens en « # », /mentions-legales en 404) ; écrire les vrais chiffres dans le HTML (compteurs à 0) ; title avec « Cabinet conseil QHSE et formation à Abidjan » ; corriger « Côte d&amp;#039;Ivoire » dans la meta description ; publier 2 articles ou masquer le blog. |
| KossKoss Select (urgent) | Remplacer les « DONNÉES DE DÉMONSTRATION » (5 pages, RCCM RC/DLA/2026/B/00000) ; retirer contact@mlc-bois.fr (12 occurrences dans le HTML) et kosskoss.vercel.app des CGV ; créer une adresse e-mail qui fonctionne : contact@kosskoss.cm est sur un domaine inexistant, aucun message n'arrive. |
| Laura Cosmetics | Retirer « Made in France », « maison parisienne » et « Fondée à Paris » (les mentions disent « auto-entrepreneur ivoirien ») ou les justifier ; compléter adresse, IFU, nom et directeur de publication (« [ADRESSE À COMPLÉTER PAR LAURA] »…) dans les mentions et l'article 2 des CGV. |

## Déjà corrigé

- Impulse Finance : les 3 simulateurs (TVA, impôt sur les sociétés, coût d'un salarié) existent sur /simulateurs.
- Afro Joy'ce : livraison à Cocody à 2 000 F.
- IK Fashion House : plus de notes de développeur visibles ni de « à compléter » (mais toujours ni RCCM ni IFU).

## Crédits

- OBA TV : seul crédit à ton nom (« Conçu et développé par Richard Salanon »), vers richard.salanon.info.
- Afro Joy'ce et IK Fashion House : « Designed with love by Digital Développement ».
- Les 8 autres : aucun crédit. Demander « Réalisé par Richard SALANON » vers https://richardsalanon.com sur les sites de tes clients directs (GC Pro, KossKoss, OBA TV).

## Faits vérifiables pour les histoires

- INOVIS : Next.js sur Vercel, back-office ; 22 URL (5 expertises, 8 réalisations, 3 notes « Perspectives ») ; cabinet fondé en 2014 à Abidjan.
- Impulse Finance : Grav, LWS ; 36 URL (8 services, 12 articles, 4 pages locales) ; 3 simulateurs ; rendez-vous en ligne ; accès Pennylane et Debio.
- Afro Joy'ce : Next.js ; 25 produits ; formules avec remise automatique ; Wave via GeniusPay ; livraison Yango dans 6 communes ; suivi WhatsApp.
- OBA TV : PHP 8.3, Hostinger, Cloudflare ; 51 vidéos, 12 émissions, 12 articles ; direct, RSS, recherche ; abonnement 1 500 FCFA par mois ou 15 000 FCFA par an (MTN MoMo, Moov) ; annonces à 10 000 et 5 000 FCFA.
- GC Pro : Laravel, PHP 8.3 ; bilingue avec hreflang ; 9 domaines ; calendrier et inscription en ligne ; devis en ligne ; témoignage du CHU-MEL.
- IK Fashion House : Laravel, Livewire, Alpine.js ; 23 produits, 5 catégories, 3 collections ; FedaPay et GeniusPay ; prise de mesures à distance.
- QueenK Beauty : Laravel, Inertia ; 3 langues, 4 devises ; Stripe, Apple Pay, Mobile Money ; 23 produits.
- AT Consulting : Laravel ; 4 expertises QHSE ; 12 fiches formation ; fondé en 2011.
- KossKoss : Next.js ; 204 URL en français et en anglais, environ 71 produits, 12 marques ; Orange Money, MTN, cartes, paiement à la livraison ; diagnostic de peau.
- Laura Cosmetics : Laravel, PHP 8.4 ; 89 produits, 16 articles ; EUR (Stripe, PayPal) et FCFA (FedaPay, Kkiapay, CinetPay).
- Wapy : Next.js auto-hébergé ; 3 offres (500, 2 000 et 6 000 conversations), essai de 7 jours ; WhatsApp relié par QR code ; passage à un humain.

Le détail site par site (preuves et codes HTTP) a servi à écrire ce document ; il n'est pas versionné.
