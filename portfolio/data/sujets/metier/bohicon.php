<?php
// Migre le 21/08/2026 depuis data/digitalisation/ vers le registre generique.
// URL inchangee.
declare(strict_types=1);

return array (
  'slug' => 'digitaliser-commerce-gros-bohicon',
  'ville' => 'Bohicon',
  'ville_slug' => 'bohicon',
  'pays' => 'Bénin',
  'titre' => 'Digitaliser un commerce de gros à Bohicon',
  'accroche' => 'Crédit client, rotation des stocks et marge réelle : les trois chiffres qui manquent.',
  'intro' => 'Un grossiste de Bohicon sert des dizaines de revendeurs venus de tout le centre du Bénin, souvent à crédit, souvent sur des quantités variables. Le chiffre d\'affaires n\'est pas le problème : il est visible. Ce qui manque, ce sont les trois chiffres qui décident de la santé réelle de l\'affaire, combien on me doit, quel stock tourne, et sur quoi je gagne vraiment.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Le terrain',
      'titre' => 'Le flux, étape par étape.',
      'items' => 
      array (
        0 => 'Achat fournisseur et réception',
        1 => 'Stockage par référence et par lot',
        2 => 'Vente au comptant ou à crédit',
        3 => 'Suivi des encours revendeurs',
        4 => 'Réapprovisionnement',
      ),
    ),
    1 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Ce qui bloque',
      'titre' => 'Les points qui coûtent le plus cher.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'L\'encours client n\'est connu de personne',
          'texte' => 'Le crédit se donne sur la confiance et se note sur un cahier. Le total réellement dû, à un instant donné, demande de tout additionner à la main, donc il n\'est jamais calculé.',
        ),
        1 => 
        array (
          'titre' => 'Le réapprovisionnement se fait au jugé',
          'texte' => 'Sans historique de rotation, on recommande ce dont on se souvient d\'avoir manqué. Résultat : du capital immobilisé sur certaines références et des ruptures récurrentes sur d\'autres.',
        ),
        2 => 
        array (
          'titre' => 'La marge par produit reste une intuition',
          'texte' => 'Quand les prix d\'achat varient d\'un arrivage à l\'autre et que les remises se négocient au cas par cas, la rentabilité réelle par référence se perd.',
        ),
      ),
    ),
    2 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'La réponse',
      'titre' => 'Ce que je mets en place.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Un compte par revendeur',
          'texte' => 'Achats, règlements, solde, ancienneté de la dette. L\'encours total se lit immédiatement, et les relances se déclenchent sur des critères, pas sur la mémoire.',
        ),
        1 => 
        array (
          'titre' => 'Une rotation par référence',
          'texte' => 'Ce qui part vite, ce qui dort. Le réapprovisionnement s\'appuie sur des chiffres, et le capital cesse d\'être immobilisé sur des invendus.',
        ),
        2 => 
        array (
          'titre' => 'Une marge calculée sur le prix d\'achat réel',
          'texte' => 'Chaque arrivage porte son coût. La marge se calcule sur ce qui a été payé, pas sur un prix moyen théorique.',
        ),
        3 => 
        array (
          'titre' => 'Des relances automatiques',
          'texte' => 'Un message WhatsApp au revendeur dont la dette dépasse un seuil ou une ancienneté. Impersonnel, régulier, et bien plus efficace qu\'une relance gênée en face à face.',
        ),
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Nos clients n\'accepteront pas un suivi formalisé.',
      'r' => 'L\'expérience montre l\'inverse : un relevé clair est en général mieux reçu qu\'une réclamation de mémoire. Le revendeur voit lui aussi ce qu\'il doit, et les contestations diminuent.',
    ),
    1 => 
    array (
      'q' => 'Les prix changent souvent, est-ce gérable ?',
      'r' => 'Oui, c\'est prévu dès la conception : chaque arrivage porte son prix d\'achat, et la vente peut se faire à un prix négocié tout en gardant la marge réelle visible.',
    ),
    2 => 
    array (
      'q' => 'Combien de temps pour voir un effet ?',
      'r' => 'Sur l\'encours client, l\'effet est immédiat dès que le carnet est repris. Sur la rotation des stocks, comptez deux à trois mois d\'historique pour que les chiffres deviennent exploitables.',
    ),
  ),
);
