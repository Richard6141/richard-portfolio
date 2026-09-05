<?php
// ============================================================
// 404.php : vraie page d'erreur du site.
// Reecrite le 05/09/2026 : l'ancienne version etait le gabarit du logiciel
// SaaS d'origine ("Ce portfolio n'existe pas ou a ete supprime", bouton
// "Creer mon portfolio" vers /auth/register.php) et chargeait Tailwind
// depuis un CDN. Un visiteur egare se voyait proposer de creer son propre
// portfolio sur le site de Richard.
// La page reste autonome (aucune dependance a la base) : elle doit
// s'afficher meme quand le reste du site est en panne.
// ============================================================
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page introuvable | Richard SALANON</title>
    <meta name="robots" content="noindex">
    <style>
        :root{--ink:#1c1c1e;--muted:#6b6560;--acc:#c8924a;--soft:#f6f2ec;--line:#e7e0d6}
        *{margin:0;padding:0;box-sizing:border-box}
        body{font-family:Roboto,system-ui,-apple-system,sans-serif;background:#fdfbf8;color:var(--ink);
             min-height:100vh;display:flex;align-items:center;justify-content:center;padding:1.5rem}
        .box{max-width:520px;text-align:center}
        .code{font-size:5.5rem;font-weight:900;line-height:1;letter-spacing:-.03em}
        .code span{color:var(--acc)}
        h1{font-size:1.3rem;margin:.9rem 0 .5rem}
        p{color:var(--muted);line-height:1.7;font-size:.97rem}
        .btns{display:flex;gap:.7rem;justify-content:center;flex-wrap:wrap;margin-top:1.6rem}
        a.btn{display:inline-block;padding:.75rem 1.4rem;border-radius:10px;text-decoration:none;
              font-weight:700;font-size:.92rem;transition:opacity .2s}
        a.btn:hover{opacity:.85}
        .btn-dark{background:var(--ink);color:#fff}
        .btn-ghost{background:var(--soft);color:var(--ink);border:1px solid var(--line)}
        .links{margin-top:1.8rem;padding-top:1.3rem;border-top:1px solid var(--line);
               font-size:.88rem;color:var(--muted)}
        .links a{color:var(--acc);text-decoration:none;font-weight:600}
        .links a:hover{text-decoration:underline}
    </style>
</head>
<body>
    <main class="box">
        <div class="code">4<span>0</span>4</div>
        <h1>Cette page n'existe pas.</h1>
        <p>L'adresse a peut-&ecirc;tre chang&eacute; lors de la refonte du site, ou le lien
           que vous avez suivi est erron&eacute;. Rien de grave : tout le contenu est
           accessible depuis les pages ci-dessous.</p>
        <div class="btns">
            <a class="btn btn-dark" href="/">Retour &agrave; l'accueil</a>
            <a class="btn btn-ghost" href="/services/">Voir les services</a>
        </div>
        <p class="links">Vous cherchiez peut-&ecirc;tre les
           <a href="/realisations/">r&eacute;alisations</a>, le
           <a href="/blog/">blog</a>, les
           <a href="/formations/">formations</a> ou la page
           <a href="/contact">contact</a>.</p>
    </main>
</body>
</html>
