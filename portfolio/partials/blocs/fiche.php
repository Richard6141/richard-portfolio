<?php /* Bloc « fiche » (vague 1D) : faits sourcés d'un pays, un tableau par groupe ; groupe vide masqué. */
$groupes = registre_fiche_groupes((array) ($b['faits'] ?? []));
if (!$groupes) { return; } ?>
<section class="bloc bloc--fiche" data-reveal>
  <?= bloc_titre($b) ?>
  <?php foreach ($groupes as $groupe => $lignes): ?>
  <div class="tableau-defilant" tabindex="0" role="region" aria-label="<?= htmlspecialchars($groupe, ENT_QUOTES) ?>">
    <table>
      <caption><?= htmlspecialchars($groupe, ENT_QUOTES) ?></caption>
      <tbody>
        <?php foreach ($lignes as $l): $h = bloc_href($l['source']); ?>
        <tr><th scope="row"><?= htmlspecialchars($l['libelle'], ENT_QUOTES) ?></th><td><?= bloc_texte($l['valeur']) ?></td><td class="fiche__source"><?php if ($h !== null): ?><a href="<?= htmlspecialchars($h, ENT_QUOTES) ?>" rel="noopener" target="_blank"><?= htmlspecialchars((string) preg_replace('/^www\./', '', (string) parse_url($h, PHP_URL_HOST)), ENT_QUOTES) ?></a>, <?php endif; ?>consulté le <time datetime="<?= htmlspecialchars($l['date'], ENT_QUOTES) ?>"><?= htmlspecialchars(date('d/m/Y', (int) strtotime($l['date'])), ENT_QUOTES) ?></time></td></tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <?php endforeach; ?>
</section>
