<?php /* Bloc « citation » : parole réelle et attribuée, jamais inventée. */ ?>
<figure class="bloc bloc--citation" data-reveal>
  <blockquote><p><?= bloc_texte((string) ($b['texte'] ?? '')) ?></p></blockquote>
  <figcaption><?= bloc_texte((string) ($b['auteur'] ?? '')) ?><?php if (!empty($b['role'])): ?>, <span><?= bloc_texte((string) $b['role']) ?></span><?php endif; ?></figcaption>
</figure>
