<?php /* Bloc « cta » : bande d'appel à l'action. */ ?>
<section class="bloc bloc--cta" data-reveal>
  <?= bloc_titre($b) ?>
  <?php if (!empty($b['texte'])): ?><p><?= bloc_texte((string) $b['texte']) ?></p><?php endif; ?>
  <?php if (!empty($b['bouton']['url'])): ?><a class="btn btn--action" href="<?= htmlspecialchars((string) $b['bouton']['url'], ENT_QUOTES) ?>"><?= bloc_texte((string) ($b['bouton']['texte'] ?? 'Demander un devis')) ?></a><?php endif; ?>
</section>
