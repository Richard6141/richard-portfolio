-- ============================================================
-- Migration : retrait des inferences non fondees sur la fiche Prudence SALANON
-- Date       : 2026-08-21
--
-- POURQUOI
-- Les brouillons d'etudes de cas devaient se limiter a ce que la base
-- contenait deja. Pour /realisations/portfolio-prudence, la base disait
-- exactement ceci et rien de plus :
--
--     titre  : Portfolio Prudence SALANON
--     desc   : Portfolio personnel pour Prudence SALANON.
--     faits  : Client=Prudence SALANON | Web | 2025 | HTML/CSS, JS, PHP
--
-- Or deux champs publies affirmaient davantage :
--
--   case_contexte : "Prudence SALANON exerce dans la communication (...)"
--     Le metier ne figurait nulle part dans les donnees du projet. Cette
--     information provenait d'une note de contexte d'une session de travail
--     anterieure, transportee par erreur dans du contenu publie.
--
--   case_probleme : "Les travaux et le parcours etaient disperses entre
--     documents, messageries et reseaux sociaux (...)"
--     Entierement invente : une situation professionnelle attribuee a une
--     personne reelle et nommee, sans aucune source.
--
-- Publier une affirmation sur une personne identifiable sans element qui
-- l'etaye est une fausse declaration, et le fait qu'elle soit plausible ou
-- bienveillante n'y change rien. Le risque est plus eleve encore ici que
-- pour une entreprise : il s'agit d'un particulier.
--
-- CE QUI EST CONSERVE
-- case_solution et case_resultat decrivent la piece livree — pile
-- technique, type de projet, parti pris de conception. Ce sont mes propres
-- choix de realisation, verifiables sur le site lui-meme, et ils
-- s'appuient sur les technologies reellement enregistrees en base.
--
-- case_resultat est neanmoins raccourci : sa seconde phrase evoquait "la
-- divergence entre plusieurs versions d'un meme dossier", ce qui renvoyait
-- a la situation inventee dans case_probleme.
--
-- Le template n'affiche que les sections non vides : la fiche presentera
-- donc "Ce qui a ete mis en place" et "Le resultat", sans rubrique orpheline.
--
-- REJOUABLE : chaque WHERE cible le texte errone precis. Une reecriture
-- ulterieure depuis le dashboard ne sera pas ecrasee.
-- ============================================================

UPDATE projects
   SET case_contexte = NULL
 WHERE slug = 'portfolio-prudence'
   AND case_contexte LIKE 'Prudence SALANON exerce dans la communication%';

UPDATE projects
   SET case_probleme = NULL
 WHERE slug = 'portfolio-prudence'
   AND case_probleme LIKE 'Les travaux et le parcours étaient dispersés%';

UPDATE projects
   SET case_resultat = 'Le parcours et les réalisations sont réunis à une adresse unique, transmissible en un lien.'
 WHERE slug = 'portfolio-prudence'
   AND case_resultat LIKE 'Le parcours et les réalisations sont réunis à une adresse unique, transmissible en un lien. La mise à jour%';
