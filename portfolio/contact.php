<?php
// ============================================================
// contact.php · Page Contact (URL /contact)
//
// Creee le 20/08/2026. /contact repondait 404 alors que llms.txt la
// referencait explicitement : le premier lien qu'un agent IA suivait pour
// joindre l'entreprise etait mort. Aucune URL ne portait non plus les
// coordonnees completes (NAP), ce qui privait le referencement local d'une
// cible pour les requetes "contacter un developpeur web a ...".
// ============================================================
require __DIR__ . '/partials/pv2-bootstrap.php';

$contactUrl = $portfolioUrl . '/contact';

$h_whatsapp = trim((string)($contactInfo['whatsapp'] ?? ''));
$h_address  = trim((string)($contactInfo['address'] ?? ''));
$h_country  = trim((string)($contactInfo['country'] ?? '')) ?: 'Bénin';
if ($h_country === 'BJ') { $h_country = 'Bénin'; }
$h_maps     = trim((string)($contactInfo['google_maps_url'] ?? ''));
$h_hours    = trim((string)($contactInfo['availability_hours'] ?? ''));
$h_response = trim((string)($contactInfo['response_time'] ?? ''));
$formOn     = !empty($contactInfo['form_enabled']);

// Numero au format E.164 pour les liens tel: et WhatsApp (wa.me refuse les espaces).
$phoneDigits = preg_replace('/[^0-9]/', '', (string) $h_phone);
$waDigits    = preg_replace('/[^0-9]/', '', $h_whatsapp ?: (string) $h_phone);

$pageTitle     = seoTitle('Contact — devis gratuit sous 24 h', $fullName);
$pageDesc      = seoDescription('Contactez ' . $fullName . ', développeur web et automatisation à ' . $h_city . ' (' . $h_country . ') : téléphone, WhatsApp, e-mail et formulaire. Devis gratuit sous 24 h.');
$pageCanonical = $contactUrl;
$ogImage = ($profile['avatar_url'] ?? '') ? $portfolioUrl . '/uploads/' . preg_replace('/\.\.[\\/]/', '', $profile['avatar_url']) : '';

// --- Questions frequentes propres a la prise de contact -------------------
// Reponses calibrees entre 40 et 60 mots : c'est le format que Google
// privilegie pour l'extrait optimise et que les assistants vocaux restituent.
$contactFaq = [
    [
        'Comment demander un devis ?',
        'Décrivez votre projet en quelques lignes par e-mail, WhatsApp ou via le formulaire ci-dessous. Précisez votre activité, ce que vous attendez du site ou de l\'outil, et votre échéance si vous en avez une. Vous recevez en retour un devis chiffré, détaillé poste par poste, gratuit et sans engagement.',
    ],
    [
        'Sous quel délai recevrez-vous une réponse ?',
        ($h_response !== '' ? $h_response . ' ' : 'Vous recevez une réponse sous 24 heures ouvrées. ') . 'Pour une demande urgente, WhatsApp reste le canal le plus rapide : les messages y sont lus dans la journée, y compris le samedi. Un premier échange téléphonique de cadrage peut être fixé dès la réponse.',
    ],
    [
        'Le devis est-il payant ?',
        'Non. Le devis est entièrement gratuit et sans engagement, y compris quand il demande une phase de cadrage pour estimer un projet complexe. Vous restez libre de ne pas donner suite. Seules les prestations d\'audit approfondi commandées séparément font l\'objet d\'une facturation.',
    ],
    [
        'Travaillez-vous avec des clients hors du Bénin ?',
        'Oui. Une grande partie des projets se mène entièrement à distance, pour des clients en Afrique francophone, en Europe et au Canada. Les échanges se font par visioconférence et messagerie, avec des points d\'avancement réguliers. Le paiement s\'adapte au pays : virement, carte bancaire, PayPal ou Mobile Money.',
    ],
    [
        'Quels moyens de paiement acceptez-vous ?',
        'Mobile Money (MTN et Moov), carte bancaire, PayPal, virement bancaire et espèces au Bénin. Le règlement se fait en plusieurs tranches liées à l\'avancement du projet : une avance au démarrage, puis des versements à la validation de chaque étape, le solde à la mise en ligne.',
    ],
];

$pageSchemas = [
    [
        '@context'    => 'https://schema.org',
        '@type'       => 'ContactPage',
        '@id'         => $contactUrl . '#contactpage',
        'url'         => $contactUrl,
        'name'        => $pageTitle,
        'description' => $pageDesc,
        'inLanguage'  => 'fr-BJ',
        'isPartOf'    => ['@id' => $portfolioUrl . '/#website'],
        // Rattache la page a l'entite deja declaree sur l'accueil plutot que de
        // redeclarer une organisation concurrente : un seul @id, un seul noeud.
        'mainEntity'  => ['@id' => $portfolioUrl . '/#organization'],
        'about'       => ['@id' => $portfolioUrl . '/#service'],
    ],
    [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil', 'item' => $portfolioUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contact', 'item' => $contactUrl],
        ],
    ],
    [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => array_map(
            static fn(array $qa): array => [
                '@type'          => 'Question',
                'name'           => $qa[0],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $qa[1]],
            ],
            $contactFaq
        ),
    ],
];

include __DIR__ . '/partials/pv2-head.php';
include __DIR__ . '/partials/pv2-header.php';
?>
<main id="main-content">
  <div class="wrap crumb"><a href="/">Accueil</a><span class="sep">/</span>Contact</div>

  <section class="svc-hero"><div class="wrap">
    <h1>Parlons de votre projet</h1>
    <p>Décrivez votre besoin en quelques lignes. Vous recevez un devis clair, chiffré et sans engagement<?= $h_response !== '' ? '' : ' sous 24 heures ouvrées' ?>.</p>
    <div class="hero-cta">
      <?php if ($h_email): ?><a href="<?= sanitize($h_mailto) ?>" class="btn">Écrire un e-mail</a><?php endif; ?>
      <?php if ($waDigits): ?><a href="https://wa.me/<?= sanitize($waDigits) ?>" class="btn btn-ghost" target="_blank" rel="noopener">Discuter sur WhatsApp</a><?php endif; ?>
    </div>
  </div></section>

  <!-- COORDONNÉES (NAP) — bloc lisible par Google, les IA et les assistants vocaux -->
  <section class="sect"><div class="wrap">
    <div class="sect-head rv">
      <span class="mono"><span class="tag-num">01</span> / Coordonnées</span>
      <h2>Comment me joindre</h2>
    </div>
    <div class="ct-grid stg">
      <?php if ($h_phone): ?>
      <div class="ct-card">
        <h3>Téléphone</h3>
        <p><a href="tel:+<?= sanitize($phoneDigits) ?>"><?= sanitize($h_phone) ?></a></p>
        <small>Du lundi au dimanche<?= $h_hours !== '' ? ', ' . sanitize($h_hours) : ', de 8 h à 19 h' ?></small>
      </div>
      <?php endif; ?>

      <?php if ($waDigits): ?>
      <div class="ct-card">
        <h3>WhatsApp</h3>
        <p><a href="https://wa.me/<?= sanitize($waDigits) ?>" target="_blank" rel="noopener">Envoyer un message</a></p>
        <small>Le canal le plus rapide pour une demande urgente.</small>
      </div>
      <?php endif; ?>

      <?php if ($h_email): ?>
      <div class="ct-card">
        <h3>E-mail</h3>
        <p><a href="<?= sanitize($h_mailto) ?>"><?= sanitize($h_email) ?></a></p>
        <small>Idéal pour transmettre un cahier des charges.</small>
      </div>
      <?php endif; ?>

      <div class="ct-card">
        <h3>Adresse</h3>
        <p>
          <?= $h_address !== '' ? sanitize($h_address) . '<br>' : '' ?>
          <?= sanitize($h_city) ?>, <?= sanitize($h_country) ?>
        </p>
        <?php if ($h_maps): ?><small><a href="<?= sanitize($h_maps) ?>" target="_blank" rel="noopener">Voir sur Google Maps</a></small><?php endif; ?>
      </div>
    </div>
  </div></section>

  <?php if ($formOn): ?>
  <!-- FORMULAIRE — poste en JSON vers /api/contact-form.php (honeypot + anti-flood) -->
  <section class="sect soft"><div class="wrap" style="max-width:720px">
    <div class="sect-head rv">
      <span class="mono"><span class="tag-num">02</span> / Formulaire</span>
      <h2>Décrivez votre projet</h2>
    </div>
    <form id="ct-form" class="ct-form rv" novalidate>
      <input type="hidden" name="user_id" value="<?= (int) $userId ?>">
      <div class="ct-row">
        <label for="ct-name">Votre nom <span aria-hidden="true">*</span></label>
        <input type="text" id="ct-name" name="name" required maxlength="255" autocomplete="name">
      </div>
      <div class="ct-row">
        <label for="ct-email">Votre e-mail <span aria-hidden="true">*</span></label>
        <input type="email" id="ct-email" name="email" required autocomplete="email">
      </div>
      <div class="ct-row">
        <label for="ct-subject">Sujet</label>
        <input type="text" id="ct-subject" name="subject" maxlength="255" placeholder="Site vitrine, application, automatisation…">
      </div>
      <div class="ct-row">
        <label for="ct-message">Votre projet <span aria-hidden="true">*</span></label>
        <textarea id="ct-message" name="message" required rows="6" maxlength="5000" placeholder="Votre activité, ce que vous attendez, votre échéance et votre budget si vous en avez un."></textarea>
      </div>
      <!-- Piege a robots : un humain ne remplit jamais ce champ (masque en CSS). -->
      <div class="ct-hp" aria-hidden="true">
        <label for="ct-website">Ne pas remplir</label>
        <input type="text" id="ct-website" name="website" tabindex="-1" autocomplete="off">
      </div>
      <button type="submit" class="btn">Envoyer ma demande</button>
      <p id="ct-msg" class="ct-msg" role="status" aria-live="polite"></p>
    </form>
  </div></section>
  <?php endif; ?>

  <!-- FAQ — les questions visibles sont exactement celles du schéma FAQPage -->
  <section class="sect"><div class="wrap" style="max-width:820px">
    <div class="sect-head rv">
      <span class="mono"><span class="tag-num">03</span> / Questions fréquentes</span>
      <h2>Ce qu'on me demande avant de démarrer</h2>
    </div>
    <div class="faq rv">
      <?php foreach ($contactFaq as $qa): ?>
        <div class="qa">
          <button type="button"><?= sanitize($qa[0]) ?><span class="plus">+</span></button>
          <div class="a"><?= sanitize($qa[1]) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div></section>

  <div class="cta-band"><div class="wrap"><div class="cta-inner rv">
    <h2>Un projet en tête ?</h2>
    <p>Un premier échange suffit souvent à y voir clair. Il est gratuit et sans engagement.</p>
    <a href="<?= sanitize($h_mailto) ?>" class="btn">Demander mon devis gratuit</a>
  </div></div></div>
</main>

<?php if ($formOn): ?>
<script>
(function () {
  var f = document.getElementById('ct-form');
  if (!f) return;
  var out = document.getElementById('ct-msg');
  var btn = f.querySelector('button[type="submit"]');

  f.addEventListener('submit', function (e) {
    e.preventDefault();
    if (!f.checkValidity()) { f.reportValidity(); return; }

    var data = {};
    new FormData(f).forEach(function (v, k) { data[k] = v; });
    data.user_id = parseInt(data.user_id, 10) || 0;

    btn.disabled = true;
    out.className = 'ct-msg';
    out.textContent = 'Envoi en cours…';

    fetch('/api/contact-form.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(data)
    })
      .then(function (r) { return r.json().then(function (j) { return { ok: r.ok, body: j }; }); })
      .then(function (res) {
        if (res.ok && res.body && res.body.success !== false) {
          out.className = 'ct-msg is-ok';
          out.textContent = 'Message envoyé. Vous recevrez une réponse rapidement.';
          f.reset();
        } else {
          out.className = 'ct-msg is-err';
          out.textContent = (res.body && res.body.message) ? res.body.message : "L'envoi a échoué. Réessayez ou écrivez-moi directement par e-mail.";
        }
      })
      .catch(function () {
        out.className = 'ct-msg is-err';
        out.textContent = "L'envoi a échoué. Réessayez ou écrivez-moi directement par e-mail.";
      })
      .finally(function () { btn.disabled = false; });
  });
})();
</script>
<?php endif; ?>

<?php include __DIR__ . '/partials/pv2-footer.php'; ?>
</body>
</html>
