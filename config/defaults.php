<?php
// ============================================================
// Nom du fichier : config/defaults.php
// Description    : Donnees par defaut a l'inscription d'un utilisateur
// Auth requise   : Non (utilitaire interne)
// ============================================================

declare(strict_types=1);

/**
 * Insere les donnees par defaut pour un nouvel utilisateur.
 * Appele apres l'insertion dans la table users.
 *
 * @param PDO $pdo     Instance PDO active.
 * @param int $userId  ID de l'utilisateur fraichement cree.
 */
function insertDefaultData(PDO $pdo, int $userId): void
{
    // --- Profil vide ---
    $stmt = $pdo->prepare("
        INSERT INTO profiles (user_id)
        VALUES (?)
    ");
    $stmt->execute([$userId]);

    // --- Hero section vide ---
    $stmt = $pdo->prepare("
        INSERT INTO hero_sections (user_id)
        VALUES (?)
    ");
    $stmt->execute([$userId]);

    // --- About section vide ---
    $stmt = $pdo->prepare("
        INSERT INTO about_sections (user_id)
        VALUES (?)
    ");
    $stmt->execute([$userId]);

    // --- Contact info vide ---
    $stmt = $pdo->prepare("
        INSERT INTO contact_info (user_id)
        VALUES (?)
    ");
    $stmt->execute([$userId]);

    // --- SEO config vide ---
    $stmt = $pdo->prepare("
        INSERT INTO seo_config (user_id)
        VALUES (?)
    ");
    $stmt->execute([$userId]);

    // --- Appearance config vide ---
    $stmt = $pdo->prepare("
        INSERT INTO appearance_config (user_id)
        VALUES (?)
    ");
    $stmt->execute([$userId]);

    // --- Sections config (13 sections avec titres par defaut) ---
    $sections = [
        ['hero',           0,  'Accueil',          null],
        ['about',          1,  'A propos',         'Decouvrez mon parcours et ma personnalite'],
        ['experiences',    2,  'Experiences',      'Mon parcours professionnel'],
        ['education',      3,  'Formation',        'Mon parcours academique'],
        ['skills',         4,  'Competences',      'Mes domaines d\'expertise'],
        ['services',       5,  'Services',         'Ce que je propose'],
        ['projects',       6,  'Realisations',     'Mes projets et travaux'],
        ['testimonials',   7,  'Temoignages',      'Ce que disent mes clients'],
        ['certifications', 8,  'Certifications',   'Mes certifications et badges'],
        ['languages',      9,  'Langues',          'Mes competences linguistiques'],
        ['awards',         10, 'Distinctions',     'Prix et recompenses'],
        ['blog',           11, 'Blog',             'Mes articles et publications'],
        ['contact',        12, 'Contact',          'Prenons contact'],
    ];

    $stmt = $pdo->prepare("
        INSERT INTO sections_config (user_id, section, sort_order, title, subtitle, is_visible)
        VALUES (?, ?, ?, ?, ?, 1)
    ");

    foreach ($sections as $section) {
        $stmt->execute([
            $userId,
            $section[0],
            $section[1],
            $section[2],
            $section[3],
        ]);
    }
}
