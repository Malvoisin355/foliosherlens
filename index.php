<?php
require_once 'functions.php';

// Vérifier si le mode maintenance est activé
if (isMaintenanceMode()) {
    include 'maintenance.php';
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<title>Malvoisin Sherlens Ranel — Développeur Web</title>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,400&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="styles.css"/>

</style>
</head>
<body>

<!-- Cursor -->
<div id="cur"></div>
<div id="curR"></div>
<button id="btt" aria-label="Retour en haut">↑</button>

<!-- ░░ NAV ░░ -->
<nav class="nav" id="nav">
  <div class="nav-logo">MSR<span>.</span></div>
  <ul class="nav-links">
    <li><a href="#projects">Projets</a></li>
    <li><a href="#skills">Compétences</a></li>
    <li><a href="#experience">Expérience</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
  <a href="#contact" class="nav-cta">Me contacter</a>
  <button class="nav-burger" id="burger" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
</nav>
<div class="nav-mob" id="navMob">
  <span class="nav-mob-x" id="navX">✕</span>
  <a href="#projects" onclick="closeMob()">Projets</a>
  <a href="#skills"   onclick="closeMob()">Compétences</a>
  <a href="#experience" onclick="closeMob()">Expérience</a>
  <a href="#contact"  onclick="closeMob()">Contact</a>
</div>

<!-- ░░ HERO ░░ -->
<section class="hero" id="home">
  <div class="geo geo-r1"></div>
  <div class="geo geo-r2"></div>
  <div class="geo geo-r3"></div>
  <div class="geo geo-dots"></div>
  <div class="geo geo-tri"></div>

  <div class="hero-wrap">
    <div>
      <div class="h-eye">
        <div class="h-eye-bar"></div>
        <span class="h-eye-txt">Développeur Web · Haïti</span>
      </div>
      <h1 class="h-name">
        Malvoisin<br>Sherlens
        <em>Ranel.</em>
      </h1>
      <p class="h-role"><span class="h-dot"></span>Développeur PHP &amp; MySQL</p>
      <p class="h-bio">
        Passionné par la création de solutions web robustes et performantes.
        Je conçois des applications back-end solides, des bases de données optimisées
        et des interfaces claires. Basé en Haïti, disponible pour projets locaux et internationaux.
      </p>
      <div class="h-btns">
        <a href="#projects" class="btn-n"><span>Voir mes projets</span><span>→</span></a>
        <a href="#contact"  class="btn-o">Me contacter</a>
      </div>
    </div>

    <div class="h-card">
      <div class="h-card-box">
        <div class="h-card-hatch"></div>
        <div class="h-card-mono">MSR</div>
        <span class="h-card-flag">🇭🇹</span>
        <div class="h-card-badge">
          <span class="h-card-badge-n">3+</span>
          <span class="h-card-badge-l">ans exp.</span>
        </div>
        <div class="h-card-bottom">
          <p class="h-card-name">Malvoisin S. Ranel</p>
          <span class="h-card-title">Dev PHP · MySQL</span>
        </div>
      </div>
    </div>
  </div>

  <div class="h-scroll">
    <div class="h-scroll-bar"></div>
    Défiler
  </div>
</section>

<!-- ░░ STATS ░░ -->
<div class="stats-strip">
  <div class="stats-row">
    <div class="stat reveal"><div class="stat-n">3<em>+</em></div><div class="stat-l">Années d'expérience</div></div>
    <div class="stat reveal d1"><div class="stat-n">15<em>+</em></div><div class="stat-l">Projets livrés</div></div>
    <div class="stat reveal d2"><div class="stat-n">10<em>+</em></div><div class="stat-l">Clients satisfaits</div></div>
    <div class="stat reveal d3"><div class="stat-n">100<em>%</em></div><div class="stat-l">Remote disponible</div></div>
  </div>
</div>

<!-- ░░ PROJECTS ░░ -->
<section class="projects" id="projects">
  <div class="s-wrap">
    <div class="s-lbl reveal"><div class="s-lbl-bar"></div><span class="s-lbl-txt">Projets sélectionnés</span></div>
    <h2 class="s-title reveal d1">Ce que j'ai construit</h2>
    <p class="s-sub reveal d2">Des applications réelles, livrées avec soin. Sélection de mes réalisations les plus représentatives.</p>

    <div class="proj-grid">

      <!-- Featured -->
      <div class="pc wide reveal">
        <div>
          <span class="pn">01 — PROJET PRINCIPAL</span>
          <div class="pic-icon">🆘</div>
          <h3 class="ptitle">SendHelp+ — Système d'Alerte</h3>
          <p class="pdesc">Plateforme d'alertes d'urgence pour Haïti. Diffusion multi-canal SMS (Twilio), Push (Firebase) et Web avec carte Leaflet interactive, signalement communautaire vérifié et tableau de bord admin. Interface trilingue (Kreyòl / FR / EN) optimisée basse connexion.</p>
          <div class="ptags">
            <span class="ptag">PHP</span><span class="ptag">MySQL</span><span class="ptag">JavaScript</span>
            <span class="ptag">Leaflet.js</span><span class="ptag">Twilio</span><span class="ptag">Firebase</span>
          </div>
          <a href="#" class="plink">Voir le projet <span class="parr">→</span></a>
        </div>
        <div class="code-blk">
          <div class="cl"><span class="cln">1</span><span class="ccmt">// SendHelp+ — send_alert.php</span></div>
          <div class="cl"><span class="cln">2</span></div>
          <div class="cl"><span class="cln">3</span><span class="ckw">function </span><span class="cfn">broadcastAlert</span>(<span class="cvar">$data</span>): <span class="ckw">array</span> {</div>
          <div class="cl"><span class="cln">4</span>&nbsp;&nbsp;<span class="cvar">$sms</span>  = <span class="cfn">sendSMS</span>(<span class="cvar">$data</span>[<span class="cstr">'zone'</span>], <span class="cvar">$data</span>[<span class="cstr">'msg'</span>]);</div>
          <div class="cl"><span class="cln">5</span>&nbsp;&nbsp;<span class="cvar">$push</span> = <span class="cfn">sendPush</span>(<span class="cvar">$data</span>[<span class="cstr">'zone'</span>], <span class="cvar">$data</span>[<span class="cstr">'title'</span>]);</div>
          <div class="cl"><span class="cln">6</span>&nbsp;&nbsp;<span class="ckw">return</span> [<span class="cstr">'sms'</span>=><span class="cvar">$sms</span>, <span class="cstr">'push'</span>=><span class="cvar">$push</span>];</div>
          <div class="cl"><span class="cln">7</span>}</div>
          <div class="cl"><span class="cln">8</span></div>
          <div class="cl"><span class="cln">9</span><span class="ccmt">// 71 040 SMS · 4 alertes actives 🇭🇹</span></div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="pc reveal">
        <span class="pn">02 — WEB APP</span>
        <div class="pic-icon">🏪</div>
        <h3 class="ptitle">Gestion de Ventes & Inventaire</h3>
        <p class="pdesc">Application CRUD complète pour la gestion d'inventaire, ventes et clients. Dashboard avec statistiques temps réel, suivi des stocks et génération de rapports PDF.</p>
        <div class="ptags"><span class="ptag">PHP</span><span class="ptag">MySQL</span><span class="ptag">Bootstrap</span><span class="ptag">Chart.js</span></div>
        <a href="#" class="plink">Voir le projet <span class="parr">→</span></a>
      </div>

      <!-- Card 3 -->
      <div class="pc reveal d1">
        <span class="pn">03 — PLATEFORME</span>
        <div class="pic-icon">🎓</div>
        <h3 class="ptitle">Portail Scolaire en Ligne</h3>
        <p class="pdesc">Plateforme de gestion scolaire : inscription des étudiants, consultation des notes, messagerie entre enseignants et parents, gestion des classes.</p>
        <div class="ptags"><span class="ptag">PHP</span><span class="ptag">MySQL</span><span class="ptag">JavaScript</span><span class="ptag">CSS3</span></div>
        <a href="#" class="plink">Voir le projet <span class="parr">→</span></a>
      </div>

    </div>
  </div>
</section>

<!-- ░░ SKILLS ░░ -->
<section class="skills-sec" id="skills">
  <div class="s-wrap">
    <div class="s-lbl reveal"><div class="s-lbl-bar"></div><span class="s-lbl-txt">Compétences</span></div>
    <h2 class="s-title reveal d1">Mon arsenal technique</h2>
    <p class="s-sub reveal d2">Des outils maîtrisés au service de solutions concrètes et durables.</p>

    <div class="skills-layout">
      <!-- Bars -->
      <div class="skill-bars">
        <div class="sk reveal" style="--w:90%"><div class="sk-head"><span class="sk-name">PHP</span><span class="sk-pct">90%</span></div><div class="sk-track"><div class="sk-fill"></div></div></div>
        <div class="sk reveal d1" style="--w:88%"><div class="sk-head"><span class="sk-name">MySQL / Base de données</span><span class="sk-pct">88%</span></div><div class="sk-track"><div class="sk-fill"></div></div></div>
        <div class="sk reveal d2" style="--w:82%"><div class="sk-head"><span class="sk-name">HTML / CSS</span><span class="sk-pct">82%</span></div><div class="sk-track"><div class="sk-fill"></div></div></div>
        <div class="sk reveal d3" style="--w:76%"><div class="sk-head"><span class="sk-name">JavaScript</span><span class="sk-pct">76%</span></div><div class="sk-track"><div class="sk-fill"></div></div></div>
        <div class="sk reveal d1" style="--w:72%"><div class="sk-head"><span class="sk-name">Conception BDD</span><span class="sk-pct">72%</span></div><div class="sk-track"><div class="sk-fill"></div></div></div>
        <div class="sk reveal d2" style="--w:65%"><div class="sk-head"><span class="sk-name">API REST</span><span class="sk-pct">65%</span></div><div class="sk-track"><div class="sk-fill"></div></div></div>
      </div>

      <!-- Right -->
      <div>
        <div class="s-lbl reveal"><div class="s-lbl-bar"></div><span class="s-lbl-txt">Outils &amp; Technologies</span></div>
        <div class="chips reveal d1">
          <div class="chip"><span class="chip-ic">🐘</span>PHP 8+</div>
          <div class="chip"><span class="chip-ic">🗄️</span>MySQL</div>
          <div class="chip"><span class="chip-ic">🔧</span>PHPMyAdmin</div>
          <div class="chip"><span class="chip-ic">🌐</span>HTML5 / CSS3</div>
          <div class="chip"><span class="chip-ic">⚡</span>JavaScript</div>
          <div class="chip"><span class="chip-ic">🗺️</span>Leaflet.js</div>
          <div class="chip"><span class="chip-ic">📱</span>Twilio API</div>
          <div class="chip"><span class="chip-ic">🔥</span>Firebase</div>
          <div class="chip"><span class="chip-ic">🐙</span>Git / GitHub</div>
          <div class="chip"><span class="chip-ic">🖥️</span>Apache</div>
        </div>

        <div class="s-lbl reveal d2" style="margin-top:32px"><div class="s-lbl-bar"></div><span class="s-lbl-txt">Compétences transversales</span></div>
        <div class="soft-list reveal d3">
          <div class="soft-item"><span class="soft-ic">🧩</span><span class="soft-tx">Résolution de problèmes complexes</span></div>
          <div class="soft-item"><span class="soft-ic">🔒</span><span class="soft-tx">Sécurité web &amp; validation des données</span></div>
          <div class="soft-item"><span class="soft-ic">📐</span><span class="soft-tx">Architecture MVC &amp; bonnes pratiques</span></div>
          <div class="soft-item"><span class="soft-ic">🤝</span><span class="soft-tx">Travail en équipe &amp; communication</span></div>
          <div class="soft-item"><span class="soft-ic">📚</span><span class="soft-tx">Apprentissage continu &amp; veille tech</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ░░ EXPERIENCE ░░ -->
<section class="exp-sec" id="experience">
  <div class="s-wrap">
    <div class="s-lbl reveal"><div class="s-lbl-bar"></div><span class="s-lbl-txt">Expérience &amp; Formation</span></div>
    <h2 class="s-title reveal d1">Mon parcours</h2>
    <p class="s-sub reveal d2">Un chemin construit autour de la passion pour le code et la résolution de problèmes réels.</p>

    <div class="tl">
      <div class="tl-item reveal">
        <div class="tl-dot"></div>
        <span class="tl-yr">2023 — Présent</span>
        <h3 class="tl-role">Développeur Web Freelance</h3>
        <p class="tl-co">Indépendant · Haïti (Remote disponible)</p>
        <p class="tl-desc">Conception et développement d'applications web sur mesure pour des clients haïtiens et internationaux. Systèmes de gestion, plateformes d'information et outils métier avec PHP et MySQL. Livraison complète : base de données, back-end, interface.</p>
        <div class="tl-tags"><span class="tl-tag">PHP</span><span class="tl-tag">MySQL</span><span class="tl-tag">JavaScript</span><span class="tl-tag">HTML/CSS</span></div>
      </div>
      <div class="tl-item reveal d1">
        <div class="tl-dot"></div>
        <span class="tl-yr">2022 — 2023</span>
        <h3 class="tl-role">Développeur Back-End Junior</h3>
        <p class="tl-co">Projet associatif · Port-au-Prince, Haïti</p>
        <p class="tl-desc">Développement de fonctionnalités back-end pour des plateformes associatives locales. Mise en place de systèmes d'authentification, gestion MySQL, intégration d'API tierces et optimisation des requêtes SQL.</p>
        <div class="tl-tags"><span class="tl-tag">PHP</span><span class="tl-tag">MySQL</span><span class="tl-tag">API REST</span></div>
      </div>
      <div class="tl-item reveal d2">
        <div class="tl-dot"></div>
        <span class="tl-yr">2020 — 2022</span>
        <h3 class="tl-role">Formation — Développement Web</h3>
        <p class="tl-co">Auto-formation intensive · PHP, MySQL, Web</p>
        <p class="tl-desc">Apprentissage autodidacte approfondi du développement web. Maîtrise progressive de PHP, MySQL, HTML/CSS et JavaScript à travers des projets personnels et la documentation officielle.</p>
        <div class="tl-tags"><span class="tl-tag">PHP</span><span class="tl-tag">MySQL</span><span class="tl-tag">Autodidacte</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ░░ CONTACT ░░ -->
<section class="contact-sec" id="contact">
  <div class="s-wrap">
    <div class="contact-grid">
      <div>
        <div class="s-lbl reveal"><div class="s-lbl-bar"></div><span class="s-lbl-txt">Contact</span></div>
        <h2 class="s-title reveal d1">Travaillons ensemble</h2>
        <p class="s-sub reveal d2">Un projet web à développer ? Une idée à concrétiser ? Disponible pour missions freelance, collaborations et opportunités à plein temps.</p>
        <div class="c-links reveal d3">
          <a href="mailto:malvoisin.ranel@email.com" class="c-link">
            <div class="c-link-ic">📧</div>
            <div><div class="c-link-lbl">Email</div><div class="c-link-val">malvoisinranelfils@email.com</div></div>
          </a>
          <a href="#" class="c-link">
            <div class="c-link-ic">📱</div>
            <div><div class="c-link-lbl">WhatsApp / Téléphone</div><div class="c-link-val">+509 35573723</div></div>
          </a>
          <a href="#" class="c-link">
            <div class="c-link-ic">🐙</div>
            <div><div class="c-link-lbl">GitHub</div><div class="c-link-val">github.com/malvoisin-ranel</div></div>
          </a>
          <div class="c-link" style="cursor:default">
            <div class="c-link-ic">📍</div>
            <div><div class="c-link-lbl">Localisation</div><div class="c-link-val">Haïti — Remote disponible</div></div>
          </div>
        </div>
      </div>

      <div class="reveal d2">
        <form class="cf" id="cf" onsubmit="sendMsg(event)">
          <div class="cf-row">
            <div class="cf-f"><label class="cf-lbl">Votre nom</label><input class="cf-inp" type="text" placeholder="Nom complet" required/></div>
            <div class="cf-f"><label class="cf-lbl">Email</label><input class="cf-inp" type="email" placeholder="votre@email.com" required/></div>
          </div>
          <div class="cf-f"><label class="cf-lbl">Sujet</label><input class="cf-inp" type="text" placeholder="Projet web, collaboration..."/></div>
          <div class="cf-f"><label class="cf-lbl">Message</label><textarea class="cf-inp cf-ta" placeholder="Décrivez votre projet..." required></textarea></div>
          <button type="submit" class="cf-btn" id="cfBtn"><span id="cfTxt">Envoyer le message →</span></button>
          <div class="cf-ok" id="cfOk">✅ Message envoyé ! Je vous réponds dans les 24h.</div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ░░ FOOTER ░░ -->
<footer>
  <div class="f-name">Malvoisin S. <span>Ranel</span></div>
  <div class="f-copy">© 2024 — Tous droits réservés</div>
  <div class="f-soc">
    <a href="#" class="f-s" title="GitHub">🐙</a>
    <a href="#" class="f-s" title="LinkedIn">💼</a>
    <a href="#" class="f-s" title="WhatsApp">📱</a>
    <a href="mailto:malvoisin.ranel@email.com" class="f-s" title="Email">📧</a>
  </div>
</footer>

<script>
/* CURSOR */
const cur=document.getElementById('cur'),curR=document.getElementById('curR');
let mx=0,my=0,rx=0,ry=0;
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY});
(function tick(){
  rx+=(mx-rx)*.18; ry+=(my-ry)*.18;
  cur.style.cssText=`left:${mx}px;top:${my}px`;
  curR.style.cssText=`left:${rx}px;top:${ry}px`;
  requestAnimationFrame(tick);
})();
document.querySelectorAll('a,button,.pc,.chip,.soft-item,.c-link,.tl-item').forEach(el=>{
  el.addEventListener('mouseenter',()=>{cur.classList.add('h');curR.classList.add('h')});
  el.addEventListener('mouseleave',()=>{cur.classList.remove('h');curR.classList.remove('h')});
});

/* NAV SCROLL */
const nav=document.getElementById('nav'),btt=document.getElementById('btt');
window.addEventListener('scroll',()=>{
  nav.classList.toggle('stuck',scrollY>60);
  btt.classList.toggle('show',scrollY>400);
},{passive:true});
btt.onclick=()=>window.scrollTo({top:0,behavior:'smooth'});

/* MOBILE NAV */
document.getElementById('burger').onclick=()=>document.getElementById('navMob').classList.add('open');
document.getElementById('navX').onclick=closeMob;
function closeMob(){document.getElementById('navMob').classList.remove('open')}

/* INTERSECTION OBSERVER — reveal + skill bars */
const obs=new IntersectionObserver(entries=>{
  entries.forEach(e=>{
    if(!e.isIntersecting)return;
    e.target.classList.add('in');
    if(e.target.classList.contains('sk'))e.target.classList.add('in');
    obs.unobserve(e.target);
  });
},{threshold:.15,rootMargin:'0px 0px -40px 0px'});
document.querySelectorAll('.reveal,.sk').forEach(el=>obs.observe(el));

/* CONTACT FORM */
function sendMsg(e){
  e.preventDefault();
  const btn=document.getElementById('cfBtn'),txt=document.getElementById('cfTxt'),ok=document.getElementById('cfOk');
  btn.disabled=true; txt.textContent='Envoi…';
  setTimeout(()=>{
    txt.textContent='✓ Envoyé';
    ok.style.display='block';
    e.target.reset();
    setTimeout(()=>{btn.disabled=false;txt.textContent='Envoyer le message →';},5000);
  },1200);
}
</script>
</body>
</html>