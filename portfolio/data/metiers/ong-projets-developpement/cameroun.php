<?php
// ============================================================
// data/metiers/ong-projets-developpement/cameroun.php · Page métier + pays :
// ONG et projets de développement au Cameroun. Statut de la ligne du métier : F ;
// la tâche impose la formule « Richard peut former ».
// Faits externes lus le 27/10/2026 : loi n° 99/014 du 22 décembre 1999 régissant les
// ONG (texte intégral, articles 1 à 3, 4, 10, 14 et 15 lus), OCHA (plan de réponse
// humanitaire 2026, publié le 26 février 2026), délégation de l'Union européenne
// (21 avril 2022), Droit, médias et finance (loi 2024/017), Constitute Project
// (article 1 alinéa 3), Ecomatin (10 décembre 2024), DataReportal, KoboToolbox, IANA.
// Non établi et donc retiré : articles de la loi 2024/017 (titre et date seulement),
// décret d'application de la loi de 1999, conditions d'accès des ONG à un fonds de
// formation, feuille de route de l'UE (PDF illisible).
// Le projet KossKoss Select (boutique cosmétique) n'apporte rien à ce métier : non cité.
// Aucune pratique de Richard hors faits.php et fiche ia-en-entreprise ; il ne forme
// pas à un outil de collecte. Aucune somme pour une formation. Aucune certification.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour les ONG et les projets de développement au Cameroun : vos équipes de programme, de suivi-évaluation et de coordination préparent leurs rapports en français et en anglais avec ChatGPT, Claude, Gemini ou Copilot, tout en contrôlant les nombres et en gardant les personnes assistées hors de l'outil",
    'title'   => "Formation IA des ONG au Cameroun | Richard SALANON",
    'meta'    => "Formation IA pour ONG et projets de développement au Cameroun : rapports aux bailleurs en français et en anglais, données des bénéficiaires. Devis en FCFA.",
    'en_bref' => "Richard SALANON, consultant en digitalisation basé à Cotonou, peut former à distance les équipes d'ONG et de projets de développement du Cameroun à utiliser ChatGPT, Claude, Gemini ou Copilot sur leurs propres documents, en français comme en anglais. Les séances suivent les horaires de Yaoundé et de Douala, sans aucun décalage avec Cotonou. Les exercices partent de vos rapports, de vos tableaux d'indicateurs et de vos courriers, anonymisés. Le devis est établi en FCFA après un échange de cadrage.",
    'publie'  => '2026-12-21',
    'maj'     => '2026-12-21',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut apprendre l'IA aux équipes d'ONG camerounaises, et sur quels critères le choisir ?",
            'paragraphes' => [
                "Richard SALANON, consultant en digitalisation basé à Cotonou, peut former à distance les organisations camerounaises, de la petite association de Garoua au consortium de projet installé à Yaoundé, à travailler avec ChatGPT, Claude, Gemini ou Copilot. Les séances se tiennent sans décalage horaire, en français ou en anglais, avec un devis en FCFA.",
                "Au Cameroun, une ONG écrit presque toujours pour plusieurs lecteurs à la fois : un bailleur qui exige l'anglais, un ministère qui attend le français, un partenaire de terrain qui parle une autre langue encore. Le critère décisif d'un formateur est donc sa capacité à travailler sur ce va-et-vient. Un exemple de bonne pratique serait de partir d'un rapport de projet déjà rédigé dans une langue, de le faire adapter dans l'autre par l'assistant, puis de relire ligne à ligne ce qui a changé.",
                "Quelques questions permettent de trier les offres. Le formateur accepte-t-il de travailler sur vos documents anonymisés plutôt que sur des modèles génériques ? Dit-il nettement quelles informations sur les personnes assistées restent hors d'un outil hébergé à l'étranger ? Limite-t-il le groupe pour lire le travail de chacun ? Remet-il des supports que l'équipe peut modifier ? Un fournisseur qui ne répond pas à ces points propose une démonstration d'outil, pas une formation sur vos tâches.",
                "Le champ de la formation est limité : Richard enseigne l'usage des assistants et ne remplace ni un évaluateur, ni un responsable de programme, ni un spécialiste de l'action humanitaire. Le cadre de résultats, les méthodes d'enquête et la politique de protection de votre organisation relèvent de votre équipe et de vos financeurs.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quels financements et quelles échéances rythment le travail des ONG au Cameroun ?",
            'paragraphes' => [
                "Le rythme d'une ONG camerounaise dépend largement de ses financeurs, et deux faits datés en donnent la mesure : le plan humanitaire des Nations unies pour 2026 et les subventions européennes à la société civile lancées en 2022. Ni l'un ni l'autre ne décrit l'ensemble du secteur.",
                "Le 26 février 2026, le Bureau de la coordination des affaires humanitaires des Nations unies (OCHA) a mis en ligne le plan de besoins et de réponse humanitaires du Cameroun pour 2026. Il estime à 2,9 millions le nombre de personnes ayant besoin d'une assistance humanitaire et de services de protection en 2026. Les partenaires comptent cibler 1,9 million de personnes, dont 1,1 million parmi celles dont les besoins sont les plus graves, et demandent 319 millions de dollars américains. La réponse est centrée sur six régions : l'Extrême-Nord, le Nord-Ouest, le Sud-Ouest, le Nord, l'Adamaoua et l'Est. Le document précise aussi que les communautés orientent les priorités par leurs retours et que des mécanismes de plainte et de suggestion accessibles renforcent la redevabilité.",
                "Pour une équipe qui rédige, ces lignes ont une conséquence pratique : les nombres de personnes touchées, les régions et les montants reviennent dans chaque note, chaque rapport et chaque demande de financement, et ils doivent être identiques d'un document à l'autre. C'est là qu'un assistant aide à reformuler, et c'est là aussi qu'il peut glisser une valeur voisine mais fausse.",
                "Côté européen, la délégation de l'Union européenne au Cameroun a rendu compte le 21 avril 2022 du lancement, la veille à Yaoundé, de quatre contrats de subvention conclus avec quatre organisations camerounaises de la société civile. Les projets visent à associer des jeunes à la construction de la paix et à la gouvernance locale, à prévenir les conflits et à lutter contre les violences faites aux femmes et aux filles. La page rattache cette action aux priorités de la feuille de route européenne 2021-2025 : cohésion sociale, approche de genre et protection des droits humains. Elle ne donne aucun montant. Cet exemple ancien montre seulement le type de projet que la société civile porte, et les appels actuels se lisent toujours à leur source officielle.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que disent la loi de 1999 sur les ONG et la loi de 2024 sur les données personnelles ?",
            'paragraphes' => [
                "Deux textes se lisent ensemble : la loi n° 99/014 du 22 décembre 1999 régissant les organisations non gouvernementales, et la loi n° 2024/017 du 23 décembre 2024 portant protection des données à caractère personnel. Aucun des deux ne parle d'IA. Ils sont présentés tels quels, sans lecture juridique : la conclusion sur votre organisation revient à un juriste ou à l'autorité chargée des données.",
                "Le texte de 1999 a été lu en entier. Son article 2 définit l'ONG comme une association déclarée ou une association étrangère autorisée, agréée par l'administration pour participer à l'exécution de missions d'intérêt général. L'article 3 énumère des domaines, parmi lesquels le social, le sanitaire, l'éducatif, l'humanitaire, la protection de l'environnement et la promotion des droits de l'Homme. L'article 10 fixe l'agrément à cinq ans renouvelables. L'article 14 demande de faire connaître au ministre chargé de l'administration territoriale, dans les deux mois, les changements d'administration ou de direction et les modifications des statuts.",
                "Un point touche directement la rédaction. L'article 15 demande de tenir un état des recettes et des dépenses et de dresser chaque année le compte financier ainsi que l'état d'inventaire des biens. Il ajoute que ces états, les rapports et les programmes annuels d'activités sont transmis au ministre chargé de l'administration territoriale dans un délai maximal de soixante jours suivant l'arrêt des comptes. Le rapport annuel est donc un document attendu par l'administration autant que par les financeurs, et il mérite la même relecture.",
                "Pour les données personnelles, la loi n° 2024/017 est datée du 23 décembre 2024. Droit, médias et finance indique qu'à compter du 23 juin 2026, une période de dix-huit mois s'achève pour les entreprises et les administrations, et que le texte confie des pouvoirs d'enquête, d'audit et de coercition à une autorité de régulation. Les articles de la loi n'ont pas été lus pour cette page : on s'en tient à son titre, à sa date et à ce compte rendu de presse.",
                "La formation en tire une méthode qui ne dépend pas du détail des textes : chaque équipe classe ses informations en trois catégories écrites, celles qu'on peut saisir telles quelles, celles qu'on saisit seulement une fois les identités retirées, et celles qu'on ne saisit jamais. La portée exacte de la loi sur votre organisation se demande à un juriste.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels travaux d'une ONG camerounaise confier à un assistant, avec quel outil, et que contrôle-t-on ?",
            'legende' => "Exercices préparés avec des pièces anonymisées que l'équipe remet avant la session. L'outil est celui que l'organisation possède déjà : ChatGPT, Claude, Gemini ou Copilot. La dernière colonne décrit ce que chaque participant vérifie lui-même avant d'employer le résultat.",
            'entetes' => ["Travail à confier", "Outil", "Résultat attendu", "Point de contrôle humain"],
            'lignes'  => [
                ["Adaptation en anglais d'un rapport trimestriel rédigé en français pour un bailleur anglophone", "ChatGPT ou Claude", "Version anglaise qui garde la structure et le ton du rapport", "Une personne bilingue relit : sigles, noms de régions et de localités, dates et nombres sont restés identiques à l'original"],
                ["Adaptation en français d'une note de cadrage reçue en anglais d'un partenaire international", "Claude ou Gemini", "Texte français fidèle, dans la terminologie du projet", "Les termes techniques du secteur sont comparés à ceux du cadre de résultats ; aucune obligation n'a été ajoutée ou retirée"],
                ["Résumé de la réponse humanitaire d'une région pour une réunion de coordination", "Claude ou Copilot", "Une page : besoins, activités menées, personnes atteintes, écarts", "Chaque nombre est repris dans la base du projet ou dans le document officiel cité, avec sa date"],
                ["Rapport annuel d'activités et de finances, à rendre aussi à l'administration", "ChatGPT ou Claude", "Plan conforme et premier jet des chapitres narratifs", "Les montants viennent des états financiers de l'organisation ; la personne qui signe relit l'ensemble"],
                ["Compte rendu d'une réunion de coordination tenue moitié en français, moitié en anglais", "Copilot ou Gemini", "Décisions, responsables et échéances dans un tableau unique", "Chaque décision se retrouve dans les notes ; aucune échéance n'est devinée"],
                ["Questionnaire de ménages à clarifier avant la collecte", "ChatGPT", "Questions plus courtes, une idée chacune, dans les deux langues officielles", "Essai à voix haute avec les enquêteurs ; chaque question garde son indicateur"],
                ["Tri thématique de réponses ouvertes déjà anonymisées", "ChatGPT ou Claude", "Thèmes proposés, avec quelques extraits", "L'équipe relit un échantillon, nomme elle-même les thèmes et refuse tout extrait qu'elle ne retrouve pas dans les données"],
                ["Message d'information aux partenaires communautaires sur un changement de calendrier", "ChatGPT ou Gemini", "Message court, clair, sans jargon de projet", "Lieux, dates et contacts sont ceux validés par la coordination ; on teste la lisibilité auprès d'un relais local"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles contraintes de terrain au Cameroun, et comment la formation les prend-elle en compte ?",
            'paragraphes' => [
                "Selon DataReportal (Digital 2026, données d'octobre 2025), le Cameroun comptait 12,6 millions d'internautes fin 2025, soit 41,9 % de la population de 30,1 millions d'habitants, et 29,0 millions de connexions mobiles, soit 96,4 % de la population. Le rapport précise que certaines connexions mobiles n'incluent pas d'accès à Internet.",
                "Ces mesures décrivent le pays, non un bureau de projet : une équipe ne peut pas présumer d'un réseau identique à Douala et dans l'Extrême-Nord. Les assistants fonctionnent en ligne, donc chaque participant dispose d'un ordinateur relié à une connexion fiable pendant la séance. Les documents sont téléchargés à l'avance, et une solution de repli est prévue en cas de coupure.",
                "La collecte suit une autre logique. La documentation de KoboToolbox indique que, formulaires téléchargés dans KoboCollect, on peut enquêter sans Internet ; les formulaires sont fréquemment finalisés hors ligne puis téléversés ensemble dès qu'un réseau est disponible, sur des téléphones ou tablettes Android. L'assistant d'IA n'intervient pas à ce moment : il aide avant, pour clarifier le questionnaire, et après, pour résumer des données consolidées et anonymisées. Richard ne forme pas à KoboToolbox lui-même.",
                "La seconde contrainte est linguistique. L'article 1, alinéa 3, de la constitution, tel que publié par Constitute Project, dispose que l'anglais et le français sont les langues officielles de la République, avec le même statut, que l'État garantit la promotion du bilinguisme et qu'il s'efforce de protéger et de promouvoir les langues nationales. Pour une ONG, cela se traduit par des documents à produire dans les deux langues. KoboToolbox permet d'ajouter des traductions à un formulaire, mais un texte omis dans une traduction apparaît comme un champ vide : la documentation recommande de mettre à jour les traductions à chaque nouvelle question ou option de réponse.",
                "Les assistants écrivent bien en français et en anglais. Pour une langue locale utilisée avec les communautés, un locuteur relit toujours la production avant usage. La formation s'organise donc par paires : une personne rédige avec l'assistant, une autre, qui lit la langue cible, contrôle.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelle formule retenir pour une équipe camerounaise, et que change l'absence de décalage horaire ?",
            'legende' => "Ici, chaque formule se déroule en visioconférence. Le Cameroun et le Bénin sont tous deux à UTC+1 toute l'année : la base de l'IANA relie Africa/Douala et Africa/Porto-Novo à la même zone Africa/Lagos. Une séance à 9 h à Yaoundé ou à Douala a lieu à 9 h à Cotonou, sans conversion.",
            'entetes' => ["Format", "Durée", "Groupe", "Quand le choisir"],
            'lignes'  => [
                ["Atelier découverte", "Une demi-journée", "12 personnes au plus", "Une direction qui souhaite juger sur pièces, ou des équipes encore étrangères aux assistants"],
                ["Formation complète", "2 jours, en 4 demi-journées de 3 h 30", "10 personnes au plus, par métier", "Une cellule de suivi-évaluation ou de rédaction qui utilise déjà l'IA en ordre dispersé, ou un rapport bilingue volumineux à traiter pas à pas"],
                ["Séances à distance", "5 à 6 séances de 2 h 30", "8 personnes au plus", "Des agents dispersés entre Yaoundé, Douala, Bertoua ou Maroua, ou dépendant d'un siège situé à l'étranger"],
                ["Session mutualisée", "1 à 2 jours", "Plusieurs structures d'un même réseau", "Un ou deux représentants de chaque membre d'une plateforme d'ONG ; cas publics ou fictifs uniquement, sans dossier interne"],
                ["Accompagnement mensuel", "Une demi-journée par mois pendant 3 mois", "Le groupe déjà formé", "Étendre l'usage à d'autres tâches et reprendre ce qui s'est perdu avec le temps"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À quoi ressemblent quatre séances de travail avec une équipe d'ONG du Cameroun ?",
            'intro' => "Quatre situations imaginées pour une organisation camerounaise : un rapport à rendre en deux langues, un questionnaire à alléger, une liste de personnes assistées à ne pas exposer, une note de coordination issue d'une réunion mixte. Aucune donnée réelle n'est utilisée, et le participant contrôle chaque résultat avant tout emploi.",
            'items' => [
                ['titre' => "Un rapport trimestriel à rendre en français puis en anglais", 'texte' => "Situation : une chargée de suivi-évaluation d'un projet d'appui aux écoles, fictif, doit remettre à un bailleur anglophone la version anglaise d'un rapport de trente pages écrit en français. Consigne donnée : fournir à l'assistant le rapport, la liste des sigles et le nom officiel de chaque région, demander la traduction section par section, en interdisant tout ajout de chiffre ou de commentaire. Vérifications de la participante : une collègue bilingue compare les tableaux des deux versions ligne à ligne, chaque nombre doit être identique et les toponymes inchangés avant l'envoi."],
                ['titre' => "Un questionnaire de ménages trop long pour une journée d'enquête", 'texte' => "Situation : un projet d'accès à l'eau veut interroger des ménages dans plusieurs régions ; son questionnaire de soixante questions, écrit par quatre personnes, mélange des formulations en français et en anglais. Consigne donnée : repérer les doublons, le jargon et les questions qui suggèrent la réponse, puis proposer des versions plus courtes dans les deux langues. Vérifications du participant : toute question gardée sert toujours un indicateur du cadre de résultats, la version raccourcie est lue à voix haute devant les enquêteurs, et un locuteur relit la traduction en langue locale avant l'essai."],
                ['titre' => "Une liste de personnes assistées qu'un collègue veut coller dans un assistant", 'texte' => "Situation : à la veille d'une réunion de coordination, un collègue propose de verser dans un assistant en ligne un tableau de ménages déplacés (noms, villages, téléphones, situation familiale) pour obtenir un récapitulatif par région. Consigne donnée : appliquer la grille de la formation, avec trois couleurs, vert pour l'information publique, orange pour celle qui s'anonymise d'abord, rouge pour celle qui ne quitte pas le projet. Vérifications du participant : il retire noms et téléphones, remplace les villages par des codes, vérifie qu'aucune combinaison de détails ne permet de reconnaître un foyer, constate que le récapitulatif se calcule aussi bien sur la version anonymisée, et se demande si le fichier doit sortir du pays, question qu'il soumet à son juriste."],
                ['titre' => "Le compte rendu d'une réunion de coordination mêlant les deux langues", 'texte' => "Situation : une réunion entre une ONG nationale, une agence et un partenaire technique s'est tenue moitié en français, moitié en anglais, avec des notes prises en vrac par trois personnes. Consigne donnée : produire un tableau des décisions, des responsables et des échéances dans une seule langue, en signalant chaque point douteux plutôt qu'en le résolvant. Vérifications du participant : chaque décision figure dans les notes, aucune date n'est inventée, et les points signalés sont tranchés avec leurs auteurs avant la diffusion."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment inscrire la formation d'une équipe d'ONG camerounaise dans un budget ?",
            'paragraphes' => [
                "La première démarche est interne : rouvrir la convention de financement. Certains bailleurs prévoient une ligne de renforcement des capacités, d'autres exigent une demande de modification budgétaire avant toute dépense nouvelle. La décision revient au bailleur, et rien dans cette page ne vaut promesse de prise en charge. Joignez le devis en FCFA et le programme à votre demande.",
                "Du côté public, une piste est évoquée sans être ouverte aux ONG à ce jour. Le 10 décembre 2024, EcoMatin a rapporté que le ministre de l'Emploi et de la Formation professionnelle, devant la commission des finances et du budget de l'Assemblée nationale, avait appelé à la création d'un fonds national pour le financement de la formation professionnelle, alimenté par l'État, le secteur public et le secteur privé. L'objectif cité est de réunir les ressources nécessaires, notamment pour transformer environ 300 sections artisanales rurales et ménagères en centres de formation modernes. L'article rapporte une proposition, pas un dispositif en vigueur, et il ne dit rien des ONG ni de la formation à l'IA. Une organisation intéressée interroge par écrit le ministère sur l'existence d'un tel fonds et sur ses conditions.",
                "Richard ne se prévaut d'aucun agrément de fonds ni d'aucune certification d'éditeur. À l'issue de la formation, il remet le programme détaillé, le devis, les feuilles de présence et une attestation au nom de chaque participant, des pièces que tout dossier de demande réclame. À défaut de financeur, la dépense s'inscrit comme une formation interne, étalée au besoin entre un format court et un accompagnement mensuel.",
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => "Combien coûte une formation IA pour une équipe d'ONG au Cameroun ?",
            'intro' => "Aucun tarif n'est affiché : le montant se fixe sur devis en FCFA, après l'échange de cadrage, chaque poste étant détaillé. Les abonnements aux assistants restent souscrits par l'organisation. Les modes de règlement sont ceux de la fiche de l'entreprise : Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, à convenir à la signature du devis.",
            'items' => [
                ['offre' => "Atelier découverte", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Une demi-journée sur des pièces de votre organisation rendues anonymes", "Deux tâches prises en main", "Premières règles sur les données des personnes assistées", "Conseil sur la suite à donner"]],
                ['offre' => "Formation complète", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Quatre demi-journées en visioconférence, groupes par métier", "Cas bâtis sur vos rapports, en français et en anglais", "Épreuve finale sur une tâche réelle, puis attestation", "Canal direct pendant le mois qui suit"]],
                ['offre' => "Accompagnement mensuel", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Trois rendez-vous d'une demi-journée, un par mois", "Bilan de ce qui est réellement utilisé", "Reprises et tâches supplémentaires"]],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, séparés par métier (programme, suivi-évaluation, finances).",
                "Le nombre de séances en visioconférence et leur durée.",
                "Le temps nécessaire pour rassembler vos pièces et en retirer les noms avant la session.",
                "Le choix des langues de travail : français, anglais, ou les deux dans les mêmes séances.",
                "L'accompagnement mensuel qui prolonge la session.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commettent les ONG camerounaises qui se lancent dans l'IA ?",
            'intro' => "Les équipes qui découvrent les assistants butent sur les mêmes points : traductions partielles, chiffres changés d'une langue à l'autre, listes de personnes assistées exposées, citations arrangées, comptes personnels, règles reportées. Des règles écrites, posées avant l'usage, évitent l'essentiel.",
            'items' => [
                ['titre' => "Publier deux versions d'un rapport qui ne disent pas la même chose", 'texte' => "L'assistant reformule, et une reformulation peut déplacer un chiffre ou durcir un verbe. Le rapport bilingue se contrôle en parallèle, tableau contre tableau, par une personne qui lit les deux langues."],
                ['titre' => "Confier à l'assistant les nombres du plan de réponse", 'texte' => "Les nombres de personnes ciblées, les régions et les montants viennent du document officiel daté, jamais de la mémoire de l'outil. On les colle dans la consigne et on les pointe dans le résultat."],
                ['titre' => "Coller un fichier de personnes assistées dans un compte gratuit", 'texte' => "L'échéance pousse au raccourci. La grille verte, orange, rouge tranche en quelques secondes, et la question d'un transfert hors du pays se pose avant l'envoi, pas après."],
                ['titre' => "Embellir la parole d'un bénéficiaire", 'texte' => "Une phrase plausible produite par l'outil n'est pas une parole recueillie. Une citation a été prononcée, notée avec l'accord de la personne et reprise telle quelle."],
                ['titre' => "Laisser une traduction vers une langue locale partir sans relecture", 'texte' => "Un mot mal choisi dans une question de ménage peut fausser les réponses d'un village. Un locuteur lit toujours le texte avant l'essai de terrain."],
                ['titre' => "Un abonnement par salarié", 'texte' => "Chacun paie avec sa carte, sans règle commune. Un compte au nom de l'organisation, confié à un responsable, clarifie le coût, les accès et le sort des conversations au départ d'un collègue."],
                ['titre' => "Remettre à plus tard les règles de données", 'texte' => "Les trois listes (ce qui entre, ce qui entre anonymisé, ce qui reste dehors) s'écrivent avant la première utilisation sur des données réelles, et se corrigent ensuite si les textes évoluent."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former une équipe d'ONG camerounaise avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà travaillé au Cameroun, comme dans " . (count((array) fait('pays_travailles')) - 1) . " autres pays dont le Bénin, le Togo, la Côte d'Ivoire et le Tchad. Pour les équipes d'ONG et de projets, il peut former à distance à l'usage des assistants d'IA, en partant de vos rapports et de vos tableaux, en français ou en anglais. La page des <a href='/realisations/'>réalisations</a> présente ses projets.",
                "Il n'est pas évaluateur et ne se présente pas comme spécialiste de l'action humanitaire. Il compte " . $ans . " ans d'expérience dans le numérique, s'est formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . ") et déclare plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées au numérique, à l'IA, à l'automatisation et aux ERP. Il a créé <a href='https://wapy.pro'>Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href='https://audyxa.com'>Audyxa</a>.",
                "Ses engagements se vérifient un à un : réponse sous 24 heures, un ou deux entretiens de cadrage (qui peuvent conclure qu'un atelier court suffit), questionnaire envoyé avant la session, cas bâtis sur vos pièces, épreuve finale chronomètre en main, supports modifiables et attestation nominative. Aucun éditeur d'IA ne l'a certifié et il ne se dit partenaire d'aucun. Pour le socle de la méthode, voir la formation <a href='/formations/ia-en-entreprise'>IA en entreprise</a> ; pour les règles de données, <a href='/formations/ia-ethique-conformite'>IA, éthique et conformité des données</a> ; pour lire un indicateur avant de le rapporter, <a href='/formations/data-literacy'>décider avec les données</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Votre prochain rapport bilingue ou votre prochaine demande de financement approche-t-il ?",
            'texte'  => "Décrivez votre équipe (effectif, métiers, ville), le bailleur concerné, les langues de travail, le prochain document à rendre et les outils déjà utilisés. Une réponse arrive sous 24 heures, suivie d'une proposition et d'un devis détaillé en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => "Demander une formation IA pour mon équipe"],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former mon ONG à l'IA à Yaoundé, à Douala ou dans les régions du Cameroun ?", 'r' => "Richard SALANON peut former à distance, depuis Cotonou, les équipes d'ONG et de projets du Cameroun à ChatGPT, Claude, Gemini et Copilot sur leurs propres documents, en français ou en anglais. Il n'est certifié par aucun éditeur d'IA, et le devis est établi en FCFA."],
        ['q' => "Peut-on rédiger un rapport pour un bailleur anglophone avec un assistant d'IA ?", 'r' => "Oui, pour ébaucher, reformuler ou traduire, à partir de pièces anonymisées et de chiffres déjà calculés. Une personne qui lit les deux langues compare ensuite les tableaux et les nombres de l'original et de la version produite, puis la personne qui signe approuve le texte."],
        ['q' => "Quelles langues les séances peuvent-elles utiliser ?", 'r' => "Le français et l'anglais, qui sont les langues officielles du pays selon l'article 1, alinéa 3, de la constitution publié par Constitute Project. Pour une langue locale, un locuteur relit toujours le résultat de l'assistant avant tout emploi."],
        ['q' => "Que dit la loi de 1999 sur les rapports annuels d'une ONG ?", 'r' => "D'après son article 15, les états financiers, les rapports et les programmes annuels d'activités sont transmis au ministre chargé de l'administration territoriale dans un délai maximal de soixante jours suivant l'arrêt des comptes. Pour votre cas, consultez un juriste ou l'administration."],
        ['q' => "Peut-on mettre une liste de personnes assistées dans ChatGPT ou Claude ?", 'r' => "Non. On travaille sur des extraits anonymisés, après avoir classé l'information en trois listes : ce qui entre, ce qui entre anonymisé, ce qui reste dehors. Le texte applicable est la loi n° 2024/017 du 23 décembre 2024 sur la protection des données ; son application à votre projet se confirme auprès d'un juriste."],
        ['q' => "Quand la loi camerounaise sur les données personnelles est-elle entrée en application ?", 'r' => "La loi n° 2024/017 date du 23 décembre 2024. Droit, médias et finance indique qu'à compter du 23 juin 2026 s'achève la période de dix-huit mois accordée aux entreprises et aux administrations. Les articles du texte n'engagent pas cette page : un juriste confirme ce qui vous concerne."],
        ['q' => "Quels chiffres du plan humanitaire 2026 faut-il citer, et comment ?", 'r' => "Le plan publié par OCHA le 26 février 2026 estime à 2,9 millions les personnes ayant besoin d'assistance, vise 1,9 million de personnes dont 1,1 million prioritaires, et demande 319 millions de dollars américains. Citez le document officiel et sa date, et pointez chaque chiffre dans votre texte."],
        ['q' => "Un fonds public peut-il financer une formation IA pour une ONG au Cameroun ?", 'r' => "EcoMatin a rapporté le 10 décembre 2024 l'appel du ministre de l'Emploi et de la Formation professionnelle à créer un fonds national de financement de la formation professionnelle. C'est une proposition, sans condition publiée pour les ONG. Aucune prise en charge n'est garantie : interrogez le ministère par écrit."],
        ['q' => "Que dit-on de la connexion pour une formation à distance au Cameroun ?", 'r' => "Selon DataReportal (octobre 2025), 41,9 % des Camerounais étaient internautes fin 2025, et 29,0 millions de connexions mobiles étaient comptées. La formation demande un ordinateur et une connexion stable, des documents téléchargés à l'avance, et une solution de repli est prévue en cas de coupure."],
        ['q' => "Y a-t-il un décalage horaire entre le Cameroun et Cotonou ?", 'r' => "Non. Le Cameroun et le Bénin sont tous deux à UTC+1 toute l'année : la base de l'IANA rattache Africa/Douala et Africa/Porto-Novo à Africa/Lagos. Une séance à 9 h à Yaoundé a lieu à 9 h à Cotonou."],
        ['q' => "Combien coûte la formation, et en quelle monnaie ?", 'r' => "Aucune somme n'est affichée : un devis en FCFA est établi après l'échange de cadrage. Il dépend de l'effectif, du nombre de séances, du temps de préparation de vos pièces, des langues et du suivi choisi. Les abonnements aux assistants ne sont pas inclus."],
        ['q' => "Reçoit-on une attestation en fin de formation ?", 'r' => "Oui : chaque participant reçoit une attestation à son nom, avec le programme, les supports et les feuilles de présence. Elle ne vaut ni diplôme ni certification délivrée par un éditeur."],
    ],

    'sources' => [
        ['titre' => "Loi n° 99/014 du 22 décembre 1999 régissant les organisations non gouvernementales (texte intégral)", 'url' => 'https://africanactiononaids.org/wp-content/uploads/2016/10/LOI-N%C2%B099-014-DU-22-DECEMBRE-1999-REGISSANT-LES.pdf', 'date' => '2026-10-27'],
        ['titre' => "OCHA, Cameroun : plan de besoins et de réponse humanitaires 2026 (26 février 2026)", 'url' => 'https://reliefweb.int/report/cameroon/cameroon-humanitarian-needs-and-response-plan-2026', 'date' => '2026-10-27'],
        ['titre' => "Délégation de l'Union européenne au Cameroun, l'UE appuie la participation citoyenne (21 avril 2022)", 'url' => 'https://www.eeas.europa.eu/delegations/cameroun/cameroun-l%E2%80%99ue-appuie-la-participation-citoyenne-pour-la-promotion-de-la-paix-l%E2%80%99inclusion-la-coh%C3%A9sion_fr?s=88', 'date' => '2026-10-27'],
        ['titre' => "Droit, médias et finance, la loi n° 2024/017 sur la protection des données entre en vigueur le 23 juin 2026", 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1297-cameroun-la-loi-sur-la-protection-des-donnees-a-caractere-personnel-entre-en-vigueur-ce-23-juin-2026', 'date' => '2026-10-27'],
        ['titre' => "Constitute Project, constitution du Cameroun (article 1, alinéa 3)", 'url' => 'https://www.constituteproject.org/constitution/Cameroon_2008', 'date' => '2026-10-27'],
        ['titre' => "EcoMatin, vers la création d'un fonds national pour financer la formation professionnelle (10 décembre 2024)", 'url' => 'https://ecomatin.net/cameroun-vers-la-creation-dun-fonds-national-pour-financer-la-formation-professionnelle', 'date' => '2026-10-27'],
        ['titre' => "DataReportal, Digital 2026 : Cameroun", 'url' => 'https://datareportal.com/reports/digital-2026-cameroon', 'date' => '2026-10-27'],
        ['titre' => "KoboToolbox, documentation : collecter des données avec KoboCollect", 'url' => 'https://support.kobotoolbox.org/data_collection_kobocollect.html', 'date' => '2026-10-27'],
        ['titre' => "KoboToolbox, documentation : traductions et langues d'un formulaire", 'url' => 'https://support.kobotoolbox.org/language_dashboard.html', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : liens de zones (Africa/Douala, Africa/Porto-Novo vers Africa/Lagos)", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['data-literacy', 'power-bi-looker-studio', 'ia-en-entreprise', 'outils-collaboratifs', 'ia-ethique-conformite'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
