<!-- FLUX: de la saisie manuelle au flux automatise -->
<section class="sect flux" id="flux"><div class="wrap">
  <div class="sect-head rv">
    <span class="mono">Le principe</span>
    <h2>De la saisie manuelle au flux automatisé.</h2>
    <p>Vos outils existent déjà : un cahier, WhatsApp, un tableur. Le problème n'est pas leur absence, c'est qu'ils ne se parlent pas. Mon travail consiste à les relier, pas à tout remplacer.</p>
  </div>

  <div class="fx-scene rv">

    <article class="fx-step avant">
      <span class="fx-tag">Aujourd'hui</span>
      <div class="fx-media">
        <svg viewBox="0 0 260 190" role="img" aria-label="Un cahier, un téléphone WhatsApp et un tableur, sans lien entre eux">
          <g transform="translate(8 22) rotate(-7 48 59)">
            <rect x="0" y="0" width="96" height="118" rx="5" fill="#2f2f34" stroke="#4a4a51"/>
            <rect x="0" y="0" width="13" height="118" rx="5" fill="#26262b"/>
            <g stroke="#6b6b72" stroke-width="2" stroke-linecap="round"><path d="M4 16h10M4 34h10M4 52h10M4 70h10M4 88h10M4 106h10"/></g>
            <g stroke="#5c5c63" stroke-width="2" stroke-linecap="round"><path d="M24 24h58M24 40h64M24 56h44M24 72h62M24 88h38M24 104h54"/></g>
            <path d="M26 62c8-5 14 4 22-1s12 3 20-2" stroke="#8d867c" stroke-width="2.4" fill="none" stroke-linecap="round"/>
          </g>
          <text x="52" y="160" text-anchor="middle" class="fx-obj-l">CAHIER</text>
          <g transform="translate(112 6) rotate(5 32 66)">
            <rect x="0" y="0" width="64" height="132" rx="10" fill="#2f2f34" stroke="#4a4a51"/>
            <rect x="6" y="12" width="52" height="108" rx="4" fill="#26262b"/>
            <rect x="24" y="4" width="16" height="3" rx="1.5" fill="#4a4a51"/>
            <rect x="11" y="22" width="32" height="13" rx="6" fill="#3d5c47"/>
            <rect x="21" y="41" width="32" height="13" rx="6" fill="#4a4a51"/>
            <rect x="11" y="60" width="38" height="13" rx="6" fill="#3d5c47"/>
            <rect x="27" y="79" width="26" height="13" rx="6" fill="#4a4a51"/>
            <rect x="11" y="98" width="30" height="13" rx="6" fill="#3d5c47"/>
          </g>
          <text x="145" y="160" text-anchor="middle" class="fx-obj-l">WHATSAPP</text>
          <g transform="translate(186 30) rotate(9 34 51)">
            <rect x="0" y="0" width="68" height="102" rx="5" fill="#2f2f34" stroke="#4a4a51"/>
            <rect x="0" y="0" width="68" height="15" rx="5" fill="#3a3a40"/>
            <g stroke="#4a4a51" stroke-width="1"><path d="M0 15h68M0 32h68M0 49h68M0 66h68M0 83h68"/><path d="M23 15v87M46 15v87"/></g>
            <rect x="3" y="19" width="16" height="8" rx="2" fill="#5c5c63"/>
            <rect x="26" y="36" width="16" height="8" rx="2" fill="#5c5c63"/>
            <rect x="49" y="53" width="15" height="8" rx="2" fill="#5c5c63"/>
            <rect x="3" y="70" width="16" height="8" rx="2" fill="#5c5c63"/>
          </g>
          <text x="220" y="160" text-anchor="middle" class="fx-obj-l">TABLEUR</text>
          <g class="fx-broken" stroke="#5c5c63" stroke-width="2" stroke-linecap="round" fill="none">
            <path d="M104 78h6" stroke-dasharray="3 5"/><path d="M186 78h-6" stroke-dasharray="3 5"/>
            <path d="M112 73l7 6M119 73l-7 6"/><path d="M170 73l7 6M177 73l-7 6"/>
          </g>
        </svg>
      </div>
      <h3>Trois fois la même saisie</h3>
      <p>La commande arrive sur WhatsApp, le stock vit dans un cahier, la facture se fait ailleurs. Personne ne connaît le chiffre du jour.</p>
    </article>

    <svg class="fx-bridge" viewBox="0 0 80 24" aria-hidden="true">
      <path class="rail" d="M4 12h60"/><path class="head" d="M62 7l7 5-7 5"/>
      <circle class="pulse" cx="4" cy="12" r="3.4">
        <animate attributeName="cx" values="4;62" dur="2.4s" repeatCount="indefinite"/>
        <animate attributeName="opacity" values="0;1;1;0" dur="2.4s" repeatCount="indefinite"/>
      </circle>
    </svg>

    <article class="fx-step pont">
      <span class="fx-tag">Ce que je fais</span>
      <div class="fx-media">
        <svg viewBox="0 0 260 190" role="img" aria-label="Un workflow d'automatisation relie les trois sources à un traitement central">
          <g fill="none" stroke="rgba(200,146,74,.45)" stroke-width="2">
            <path id="fxp1" d="M56 44C100 44 100 95 124 95"/>
            <path id="fxp2" d="M56 95h68"/>
            <path id="fxp3" d="M56 146C100 146 100 95 124 95"/>
            <path id="fxp4" d="M172 95h34"/>
          </g>
          <g class="fx-node">
            <rect x="10" y="30" width="46" height="28" rx="6"/><text x="33" y="48" text-anchor="middle" class="fx-nl">MSG</text>
            <rect x="10" y="81" width="46" height="28" rx="6"/><text x="33" y="99" text-anchor="middle" class="fx-nl">DOC</text>
            <rect x="10" y="132" width="46" height="28" rx="6"/><text x="33" y="150" text-anchor="middle" class="fx-nl">SAISIE</text>
          </g>
          <rect x="124" y="72" width="48" height="46" rx="9" fill="var(--acc)"/>
          <g stroke="#1c1c1e" stroke-width="2.2" fill="none" stroke-linecap="round"><path d="M136 88h8M136 95h14M136 102h10"/></g>
          <circle cx="166" cy="79" r="4" fill="#1c1c1e"/>
          <rect x="206" y="79" width="46" height="32" rx="6" fill="none" stroke="var(--acc)" stroke-width="2"/>
          <text x="229" y="99" text-anchor="middle" class="fx-nl fx-nl-on">BASE</text>
          <circle class="pkt" r="3.6"><animateMotion dur="2.6s" repeatCount="indefinite"><mpath href="#fxp1"/></animateMotion></circle>
          <circle class="pkt" r="3.6"><animateMotion dur="2.6s" begin="0.6s" repeatCount="indefinite"><mpath href="#fxp2"/></animateMotion></circle>
          <circle class="pkt" r="3.6"><animateMotion dur="2.6s" begin="1.2s" repeatCount="indefinite"><mpath href="#fxp3"/></animateMotion></circle>
          <circle class="pkt" r="3.6"><animateMotion dur="1.6s" begin="1.8s" repeatCount="indefinite"><mpath href="#fxp4"/></animateMotion></circle>
          <text x="130" y="180" text-anchor="middle" class="fx-obj-l fx-obj-on">n8n / API</text>
        </svg>
      </div>
      <h3>On relie, on ne remplace pas</h3>
      <p>WhatsApp reste votre canal client. Ce qui y transite alimente désormais le stock et la facturation, sans ressaisie.</p>
    </article>

    <svg class="fx-bridge" viewBox="0 0 80 24" aria-hidden="true">
      <path class="rail" d="M4 12h60"/><path class="head" d="M62 7l7 5-7 5"/>
      <circle class="pulse" cx="4" cy="12" r="3.4">
        <animate attributeName="cx" values="4;62" dur="2.4s" begin="1.2s" repeatCount="indefinite"/>
        <animate attributeName="opacity" values="0;1;1;0" dur="2.4s" begin="1.2s" repeatCount="indefinite"/>
      </circle>
    </svg>

    <article class="fx-step apres">
      <span class="fx-tag">Après</span>
      <div class="fx-media">
        <svg viewBox="0 0 260 190" role="img" aria-label="Un tableau de bord unique affiche le stock, les encours et le chiffre du jour">
          <rect x="20" y="14" width="220" height="150" rx="10" fill="#2f2f34" stroke="var(--acc)" stroke-width="1.6"/>
          <path d="M20 24a10 10 0 0 1 10-10h200a10 10 0 0 1 10 10v14H20z" fill="#3a3a40"/>
          <circle cx="34" cy="26" r="3" fill="#5c5c63"/><circle cx="45" cy="26" r="3" fill="#5c5c63"/><circle cx="56" cy="26" r="3" fill="#5c5c63"/>
          <rect x="32" y="48" width="62" height="36" rx="6" fill="#26262b"/>
          <text x="63" y="65" text-anchor="middle" class="fx-kpi">1 240</text><text x="63" y="77" text-anchor="middle" class="fx-nl">STOCK</text>
          <rect x="99" y="48" width="62" height="36" rx="6" fill="#26262b"/>
          <text x="130" y="65" text-anchor="middle" class="fx-kpi">4</text><text x="130" y="77" text-anchor="middle" class="fx-nl">ENCOURS</text>
          <rect x="166" y="48" width="62" height="36" rx="6" fill="#26262b"/>
          <text x="197" y="65" text-anchor="middle" class="fx-kpi">CA</text><text x="197" y="77" text-anchor="middle" class="fx-nl">DU JOUR</text>
          <g class="fx-bars">
            <rect x="34" y="128" width="18" height="22" rx="3"/><rect x="58" y="118" width="18" height="32" rx="3"/>
            <rect x="82" y="108" width="18" height="42" rx="3"/><rect x="106" y="114" width="18" height="36" rx="3"/>
            <rect x="130" y="98" width="18" height="52" rx="3"/><rect x="154" y="90" width="18" height="60" rx="3"/>
            <rect x="178" y="80" width="18" height="70" rx="3"/><rect x="202" y="72" width="18" height="78" rx="3"/>
          </g>
          <path d="M32 150h196" stroke="#4a4a51" stroke-width="1.4"/>
          <text x="130" y="180" text-anchor="middle" class="fx-obj-l fx-obj-on">UNE SEULE SOURCE</text>
        </svg>
      </div>
      <h3>Une seule source de vérité</h3>
      <p>Le stock, les encours et le chiffre du jour se lisent à tout moment, par vous comme par votre équipe.</p>
    </article>

  </div>

  <div class="fx-gain rv">
    <div><div class="g-n"><span class="ct" data-to="3">3</span>&nbsp;saisies</div><div class="g-l">remplacées par une seule</div></div>
    <div><div class="g-n"><span class="ct" data-to="24">24</span>h</div><div class="g-l">pour obtenir un devis clair</div></div>
    <div><div class="g-n"><span class="ct" data-to="2">2</span>&nbsp;à 5 sem.</div><div class="g-l">avant le premier gain mesurable</div></div>
  </div>
</div></section>

