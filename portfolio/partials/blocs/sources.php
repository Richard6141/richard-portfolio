<?php /* Bloc « sources » : d'où viennent les faits cités, avec la date de consultation. */ ?>
<section class="bloc bloc--sources" data-reveal>
  <?= bloc_titre($b) ?>
  <ol class="sources">
    <?php foreach ($b['items'] ?? [] as $it): ?>
    <li><?php if (($h = bloc_href((string) ($it['url'] ?? ''))) !== null): ?><a href="<?= htmlspecialchars($h, ENT_QUOTES) ?>" rel="noopener" target="_blank"><?= bloc_texte((string) ($it['titre'] ?? '')) ?></a><?php else: ?><?= bloc_texte((string) ($it['titre'] ?? '')) ?><?php endif; ?><?php if (!empty($it['date'])): ?>, consulté le <time datetime="<?= htmlspecialchars((string) $it['date'], ENT_QUOTES) ?>"><?= htmlspecialchars(date('d/m/Y', (int) strtotime((string) $it['date'])), ENT_QUOTES) ?></time><?php endif; ?></li>
    <?php endforeach; ?>
  </ol>
</section>
