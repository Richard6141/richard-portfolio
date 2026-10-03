<?php /* Bloc « faq » : questions en <details> natifs, accessibles sans JavaScript. */ ?>
<section class="bloc bloc--faq" data-reveal>
  <?= bloc_titre($b) ?>
  <div class="faq">
    <?php foreach ($b['items'] ?? [] as $it): ?>
    <details>
      <summary><?= bloc_texte((string) ($it['q'] ?? '')) ?></summary>
      <div class="faq__reponse"><p><?= bloc_texte((string) ($it['r'] ?? '')) ?></p></div>
    </details>
    <?php endforeach; ?>
  </div>
</section>
