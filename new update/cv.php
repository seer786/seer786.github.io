<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>سيرتي الذاتية — هلا كارير</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,600;12..96,700;12..96,800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Cairo:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<script>tailwind.config={theme:{extend:{fontFamily:{display:["Bricolage Grotesque","sans-serif"],body:["Plus Jakarta Sans","sans-serif"],cairo:["Cairo","sans-serif"]}}}}</script>
<style>
:root{--bg:#030d17;--bg2:#04111e;--t:#00d4b8;--tl:#2de0ca;--td:#009e85;
  --ta20:rgba(0,212,184,.20);--ta15:rgba(0,212,184,.15);--ta12:rgba(0,212,184,.12);--ta08:rgba(0,212,184,.08);
  --w:#fff;--w80:rgba(255,255,255,.80);--w60:rgba(255,255,255,.60);--w40:rgba(255,255,255,.40);
  --w10:rgba(255,255,255,.10);--w06:rgba(255,255,255,.06)}
html.light{--bg:#fff;--bg2:#fff;--t:#009e85;--tl:#00c4a8;--td:#007a68;
  --ta20:rgba(0,212,184,.18);--ta12:rgba(0,212,184,.12);--ta08:rgba(0,212,184,.07);
  --w:#0a2220;--w80:rgba(10,34,32,.80);--w60:rgba(10,34,32,.58);--w40:rgba(10,34,32,.38);
  --w10:rgba(10,34,32,.09);--w06:rgba(10,34,32,.06)}
html.light body{background:#fff!important;color:#111827!important}
html.light body::after{display:none!important}
html.light *{box-shadow:none!important}
html.light [style*="background:rgba(5,14,26"]{background:#fff!important}
html.light [style*="background:rgba(4,11,22"]{background:#fff!important}
html.light [style*="background:rgba(3,13,23"]{background:#fff!important}
html.light [style*="color:var(--w)"]  {color:#111827!important}
html.light [style*="color:var(--w80)"]{color:#1f2937!important}
html.light [style*="color:var(--w60)"]{color:#4b5563!important}
html.light [style*="color:var(--w40)"]{color:#9ca3af!important}
html.light .grad{-webkit-text-fill-color:transparent!important}
html.light #hc-nav{background:#fff!important;border-color:#e5e7eb!important}
html.light #hc-mob{background:#fff!important;border-color:#e5e7eb!important}
html.light .cv-section{background:#fff!important;border-color:rgba(0,212,184,.2)!important}
html.light .cv-entry{background:#fff!important;border-color:rgba(0,212,184,.15)!important}
html.light .hc-field{background:#fff;border-color:rgba(0,212,184,.25);color:#111827}
html.light .hc-field::placeholder{color:#9ca3af}
html.light .add-btn{border-color:rgba(0,212,184,.25)!important;color:var(--td)!important}
html.light .add-btn:hover{background:rgba(0,212,184,.06)!important}
html.light .save-bar{background:#fff!important;border-color:rgba(0,212,184,.15)!important}

*,*::before,*::after{box-sizing:border-box}
body{font-family:"Cairo",sans-serif;background:var(--bg);color:var(--w);overflow-x:hidden;-webkit-font-smoothing:antialiased}
h1,h2,h3{font-family:"Bricolage Grotesque",sans-serif;line-height:1.1}
a{text-decoration:none;color:inherit}
body::after{content:"";position:fixed;inset:0;pointer-events:none;z-index:0;opacity:.04;
  background:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.75' numOctaves='4'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E")}
::-webkit-scrollbar{width:5px}::-webkit-scrollbar-track{background:var(--bg)}
::-webkit-scrollbar-thumb{background:var(--ta20);border-radius:3px}
.grad{background:linear-gradient(135deg,#2de0ca,#009e85);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}

/* Fields */
.hc-field{background:rgba(5,14,26,.65);border:1.5px solid var(--ta15);border-radius:.65rem;
  padding:.65rem .9rem;font-family:"Cairo",sans-serif;font-size:.9rem;color:var(--w);
  outline:none;width:100%;transition:border-color .18s,background .18s;display:block}
.hc-field:focus{border-color:var(--t);background:rgba(5,14,26,.85)}
.hc-field::placeholder{color:var(--w40)}
.hc-field:hover:not(:focus){border-color:rgba(0,212,184,.22)}
textarea.hc-field{resize:vertical;min-height:80px;line-height:1.6}

/* CV Section card */
.cv-section{border-radius:1.25rem;border:1px solid var(--ta12);background:rgba(5,14,26,.75);
  overflow:hidden;transition:border-color .25s}
.cv-section:hover{border-color:rgba(0,212,184,.22)}
.cv-section-head{padding:1.25rem 1.5rem;display:flex;align-items:center;gap:.85rem;
  border-bottom:1px solid var(--ta08)}
html.light .cv-section-head{border-color:rgba(0,212,184,.1)}
.cv-section-icon{width:40px;height:40px;border-radius:.75rem;flex-shrink:0;display:flex;
  align-items:center;justify-content:center;font-size:1.15rem;
  background:var(--ta08);border:1px solid var(--ta12)}
.cv-section-body{padding:1.25rem 1.5rem;display:flex;flex-direction:column;gap:1rem}

/* Entry */
.cv-entry{border-radius:.9rem;border:1px solid var(--ta12);background:rgba(5,14,26,.5);
  padding:1.25rem;position:relative;transition:border-color .2s}
.cv-entry:hover{border-color:rgba(0,212,184,.2)}
.remove-btn{position:absolute;top:.75rem;left:.75rem;width:26px;height:26px;
  border-radius:50%;display:flex;align-items:center;justify-content:center;
  background:rgba(239,68,68,.08);border:1px solid rgba(239,68,68,.15);
  color:rgba(239,68,68,.7);cursor:pointer;transition:all .18s;flex-shrink:0}
.remove-btn:hover{background:rgba(239,68,68,.15);border-color:rgba(239,68,68,.35);color:rgba(239,68,68,1)}
html[dir=ltr] .remove-btn{right:.75rem;left:auto}

/* Add button */
.add-btn{display:flex;align-items:center;justify-content:center;gap:.6rem;
  padding:.75rem 1.25rem;border-radius:.75rem;border:1.5px dashed rgba(0,212,184,.2);
  background:transparent;color:var(--w60);font-family:"Cairo",sans-serif;font-size:.85rem;
  font-weight:600;cursor:pointer;transition:all .2s;width:100%}
.add-btn:hover{border-color:rgba(0,212,184,.45);background:rgba(0,212,184,.05);color:var(--tl)}
.add-btn svg{width:16px;height:16px;flex-shrink:0}

/* Grid inside entry */
.entry-grid{display:grid;gap:.75rem}
.g2{grid-template-columns:1fr 1fr}
.g3{grid-template-columns:1fr 1fr 1fr}
@media(max-width:640px){.g2,.g3{grid-template-columns:1fr}}

/* Label */
.cv-label{font-size:.72rem;font-weight:700;color:var(--w40);margin-bottom:.35rem;display:block;letter-spacing:.04em}
html.light .cv-label{color:#9ca3af}

/* Save bar */
.save-bar{position:sticky;bottom:0;z-index:40;padding:1rem 0;
  background:rgba(3,13,23,.95);border-top:1px solid var(--ta12);
  backdrop-filter:blur(12px)}

/* Toast */
#toast{position:fixed;bottom:5rem;left:50%;transform:translateX(-50%) translateY(20px);
  background:rgba(0,212,184,.15);border:1px solid rgba(0,212,184,.3);
  color:var(--tl);padding:.65rem 1.5rem;border-radius:999px;font-size:.85rem;font-weight:600;
  z-index:9999;opacity:0;transition:opacity .3s,transform .3s;white-space:nowrap}
#toast.show{opacity:1;transform:translateX(-50%) translateY(0)}

/* Header */
.page-header{padding:5.5rem 0 2.5rem;text-align:center;position:relative}
.page-header::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 70% 55% at 50% -5%,rgba(0,212,184,.1),transparent 60%);pointer-events:none}


/* nav */
.nav-drop-wrap{position:relative}
.nav-drop{
  position:absolute;top:calc(100% + 6px);inset-inline-start:0;
  min-width:220px;border-radius:1rem;
  border:1px solid var(--ta15);
  background:rgba(2,8,18,.97);
  backdrop-filter:blur(20px);
  padding:.5rem;
  opacity:0;visibility:hidden;
  transform:translateY(-6px);
  transition:opacity .18s,transform .18s,visibility .18s;
  z-index:100;
}
.nav-drop-wrap:hover .nav-drop,
.nav-drop:hover{opacity:1;visibility:visible;transform:translateY(0)}
html.light .nav-drop{background:#ffffff;border-color:rgba(0,212,184,.18)}

.nav-drop-item{
  display:flex;align-items:center;gap:.75rem;
  padding:.6rem .75rem;border-radius:.65rem;
  font-size:.82rem;color:var(--w60);
  transition:background .15s,color .15s;cursor:pointer;
}
.nav-drop-item:hover{background:var(--ta08);color:var(--w)}
.nav-drop-item.active{color:var(--tl);background:var(--ta08)}
html.light .nav-drop-item{color:#4b5563}
html.light .nav-drop-item:hover{background:rgba(0,212,184,.06);color:#111827}
html.light .nav-drop-item.active{color:var(--td)}
.nav-drop-icon{width:28px;height:28px;border-radius:.5rem;flex-shrink:0;
  display:flex;align-items:center;justify-content:center;
  background:var(--ta08);border:1px solid var(--ta12)}
.nav-drop-icon svg{width:14px;height:14px;color:var(--tl)}
html.light .nav-drop-icon{background:rgba(0,212,184,.06);border-color:rgba(0,212,184,.15)}
.nav-drop-sep{height:1px;background:var(--ta12);margin:.35rem .5rem}
html.light .nav-drop-sep{background:rgba(0,212,184,.12)}

/* ── Cursor ── */
#hc-cursor{
  width:8px; height:8px; border-radius:50%;
  border:1.5px solid rgba(0,212,184,.6);
  background:rgba(0,212,184,.2);
  position:fixed; pointer-events:none; z-index:9999;
  transform:translate(-50%,-50%);
  transition:
    width .28s cubic-bezier(.22,1,.36,1),
    height .28s cubic-bezier(.22,1,.36,1),
    background .28s,
    border-color .28s;
  display:none;
  will-change:left,top;
}
#hc-cursor.big{
  width:42px; height:42px;
  background:transparent;
  border-color:rgba(0,212,184,.4);
}
html.light #hc-cursor{
  border-color:rgba(0,158,133,.5);
  background:rgba(0,158,133,.15);
}
html.light #hc-cursor.big{
  background:transparent;
  border-color:rgba(0,158,133,.3);
}
@media(pointer:fine){#hc-cursor{display:block;}}
@media(pointer:coarse){#hc-cursor{display:none !important;}}

/* ── Teal-only: kill non-teal accent colors ── */
[style*="color:#fbbf24"],[style*="color:#f59e0b"],[style*="color:#fde68a"]{color:var(--tl) !important}
[style*="color:#f87171"],[style*="color:#ef4444"]{color:var(--tl) !important}
[style*="color:#c4b5fd"],[style*="color:#a78bfa"],[style*="color:#7c3aed"]{color:var(--t) !important}
[style*="color:#93c5fd"],[style*="color:#3b82f6"]{color:var(--t) !important}
[style*="color:#4ade80"],[style*="color:#22c55e"]{color:var(--tl) !important}
[style*="background:rgba(239,68,68"]{background:var(--ta08) !important}
[style*="background:rgba(251,191,36"]{background:var(--ta08) !important}
[style*="background:rgba(167,139,250"]{background:var(--ta08) !important}
[style*="background:rgba(34,197,94"]{background:var(--ta08) !important}
[style*="border:1px solid rgba(239,68"]{border-color:var(--ta20) !important}
[style*="border:1px solid rgba(251,191"]{border-color:var(--ta20) !important}
[style*="border:1px solid rgba(167,139"]{border-color:var(--ta20) !important}
[style*="border:1px solid rgba(34,197"]{border-color:var(--ta20) !important}

/* ── Light accent fix ── */
html.light .accent-card.accent-red,
html.light .accent-card.accent-yellow,
html.light .accent-card.accent-teal,
html.light .accent-card.accent-green,
html.light .accent-card.accent-purple{
  background:#ffffff !important;border-color:rgba(0,188,164,.28) !important}


/* ── Search popup ── */
#search-overlay{position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.82);z-index:9998;display:none;align-items:flex-start;justify-content:center;padding-top:100px;backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px)}
#search-overlay.open{display:flex}
#search-box{width:100%;max-width:560px;margin:0 1rem;background:rgba(5,14,26,.95);border:1.5px solid var(--ta20);border-radius:1rem;overflow:hidden;position:relative;z-index:9999}
html.light #search-box{background:#ffffff;border-color:rgba(0,212,184,.3)}
#search-input{width:100%;background:transparent;border:none;outline:none;padding:1rem 1.25rem;font-size:1rem;color:var(--w);font-family:inherit}
html.light #search-input{color:#111827}
#search-input::placeholder{color:var(--w40)}

/* ── Journey section ── */
.journey-card{display:flex;align-items:flex-start;gap:.85rem;padding:1rem 1.25rem;border-radius:1rem;border:1px solid var(--ta15);transition:border-color .2s;background:rgba(5,14,26,.5);}
.journey-card:hover{border-color:var(--ta25,rgba(0,212,184,.22))}
html.light .journey-card{background:#ffffff;border-color:rgba(0,212,184,.18)}

/* ── Nav button ── */
.nav-btn{
  display:inline-flex;align-items:center;gap:.3rem;
  padding:.4rem .7rem;border-radius:.6rem;
  font-size:.82rem;font-weight:500;
  background:transparent;border:none;cursor:pointer;
  font-family:inherit;transition:color .15s;
  white-space:nowrap;
}
html[dir=rtl] .nav-btn{font-family:'Cairo',sans-serif}
.nav-btn:hover{color:var(--tl) !important}
.nav-chevron{width:11px;height:11px;opacity:.5;flex-shrink:0;transition:transform .18s}
.nav-drop-wrap:hover .nav-chevron{transform:rotate(180deg)}

/* ── Dropdown header label ── */
.nav-drop-label{
  font-size:.6rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;
  color:var(--w40);padding:.4rem .75rem .2rem;
}
html.light .nav-drop-label{color:#9ca3af}

/* ── Join as mentor button in nav ── */
a[href="hc-mentor-join.html"].nav-mentor {
  transition:background .18s,border-color .18s;
}
a[href="hc-mentor-join.html"].nav-mentor:hover{
  background:var(--ta12) !important;border-color:var(--ta25,rgba(0,212,184,.22)) !important;
}


/* ── Mobile menu links ── */
.mob-link{display:block;transition:background .15s,color .15s}
.mob-link:hover{background:var(--ta08);color:var(--w) !important}
html.light .mob-link{color:#4b5563 !important}
html.light .mob-link:hover{background:rgba(0,212,184,.06);color:#111827 !important}

</style>
</head>
<body>
<div id="hc-cursor"></div>
<!-- Search overlay -->
<div id="search-overlay" onclick="if(event.target===this)closeSearch()">
  <div id="search-box">
    <div class="flex items-center gap-3 px-1">
      <svg class="w-4 h-4 ms-4 shrink-0" style="color:var(--w40)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
      <input id="search-input" type="text" placeholder="ابحث عن دبلومة، منتور، وظيفة..." data-en="Search diplomas, mentors, jobs..." data-ar="ابحث عن دبلومة، منتور، وظيفة...">
      <button onclick="closeSearch()" class="p-3 shrink-0" style="color:var(--w40)">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M18 6L6 18M6 6l12 12"/></svg>
      </button>
    </div>
  </div>
</div>

<nav id="hc-nav" class="fixed inset-x-0 top-0 z-50 h-16 flex items-center border-b"
     style="background:rgba(3,13,23,.96);border-color:rgba(255,255,255,.08)">
  <div class="w-full max-w-[1280px] mx-auto px-5 flex items-center gap-0.5">

    <!-- Logo -->
    <a href="halacareer-v7.html" class="flex items-center gap-2.5 shrink-0 me-3">
      <div class="w-8 h-8 shrink-0"><svg viewBox="0 0 56 56" fill="none" class="w-full h-full">
  <path d="M8 28A20 20 0 1 1 28 48" stroke="url(#pn1)" stroke-width="2.5" stroke-linecap="round"/>
  <path d="M14 28A14 14 0 1 1 28 42" stroke="url(#pn2)" stroke-width="2.5" stroke-linecap="round"/>
  <path d="M20 28A8 8 0 1 1 28 36" stroke="#0CCFB8" stroke-width="2.5" stroke-linecap="round" opacity=".85"/>
  <circle cx="28" cy="28" r="5" fill="url(#pn3)"/>
  <circle cx="28" cy="8" r="3" fill="#0CCFB8"/>
  <circle cx="48" cy="28" r="2.2" fill="#079080"/>
  <defs>
    <linearGradient id="pn1" x1="8" y1="8" x2="48" y2="48" gradientUnits="userSpaceOnUse"><stop offset="0%" stop-color="#0CCFB8"/><stop offset="100%" stop-color="#0CCFB8" stop-opacity=".3"/></linearGradient>
    <linearGradient id="pn2" x1="14" y1="14" x2="42" y2="42" gradientUnits="userSpaceOnUse"><stop offset="0%" stop-color="#0CCFB8"/><stop offset="100%" stop-color="#2DDEC8"/></linearGradient>
    <radialGradient id="pn3"><stop offset="0%" stop-color="#fff"/><stop offset="100%" stop-color="#0CCFB8"/></radialGradient>
  </defs>
</svg></div>
      <div>
        <div class="font-display font-bold text-[.95rem] leading-none" style="color:var(--w)">HalaCareer</div>
        <div class="text-[.48rem] tracking-[.2em] uppercase" style="color:var(--td)">Talent Ecosystem</div>
      </div>
    </a>

    <!-- Desktop nav -->
    <nav class="hidden lg:flex items-center gap-0.5">

      <!-- عن المعهد -->
      <div class="nav-drop-wrap">
        <button class="nav-btn " style="color:var(--w60)" data-en="About" data-ar="عن المعهد">
          عن المعهد
          <svg class="nav-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="nav-drop"><a href="#" class="nav-drop-item" data-en="Who We Are" data-ar="من نحن"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></div><span>من نحن</span></a><a href="#" class="nav-drop-item" data-en="Accreditations" data-ar="اعتماداتنا"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><span>اعتماداتنا</span></a><a href="hc-pricing.html" class="nav-drop-item" data-en="Our Pricing" data-ar="أسعارنا"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><span>أسعارنا</span></a><div class="nav-drop-sep"></div><a href="#" class="nav-drop-item" data-en="News" data-ar="أخبارنا"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><path d="M4 22h16a2 2 0 002-2V4a2 2 0 00-2-2H8a2 2 0 00-2 2v16a2 2 0 01-2 2zm0 0a2 2 0 01-2-2v-9c0-1.1.9-2 2-2h2"/></svg></div><span>أخبارنا</span></a><a href="#" class="nav-drop-item" data-en="Contact Us" data-ar="اتصل بنا"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><span>اتصل بنا</span></a></div>
      </div>

      <!-- تعلّم -->
      <div class="nav-drop-wrap">
        <button class="nav-btn " style="color:var(--w60)" data-en="Learn" data-ar="تعلّم">
          تعلّم
          <svg class="nav-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="nav-drop"><a href="hc-diplomas.html" class="nav-drop-item" data-en="Accredited Diplomas" data-ar="الدبلومات المعتمدة"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></div><span>الدبلومات المعتمدة</span></a><a href="hc-mentorship.html" class="nav-drop-item" data-en="Mentorship" data-ar="الإرشاد"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><span>الإرشاد</span></a></div>
      </div>

      <!-- الوظائف -->
      <a href="hc-jobs.html" class="nav-btn " style="color:var(--w60)" data-en="Jobs" data-ar="الوظائف">الوظائف</a>

      <!-- divider -->
      <div class="w-px h-4 mx-1" style="background:var(--ta15)"></div>

      <!-- تحقق -->
      <a href="#" class="nav-btn " style="color:var(--w60)" data-en="Verify" data-ar="تحقق">تحقق</a>

      <!-- الشركات -->
      <div class="nav-drop-wrap">
        <button class="nav-btn font-semibold" style="color:var(--tl)" data-en="Companies" data-ar="الشركات">
          الشركات
          <svg class="nav-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="nav-drop"><a href="hc-companies.html" class="nav-drop-item active" data-en="Hiring" data-ar="التوظيف"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div><span>التوظيف</span></a><a href="hc-live.html" class="nav-drop-item" data-en="Live Training" data-ar="التدريبات المباشرة"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg></div><span>التدريبات المباشرة</span></a></div>
      </div>

    </nav>

    <div class="flex-1"></div>

    <!-- Right actions -->
    <div class="flex items-center gap-2">
      <button onclick="openSearch()" class="hidden sm:inline-flex items-center justify-center w-8 h-8 rounded-full" style="background:var(--w06);border:1px solid var(--w10);color:var(--w60)">
        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
      </button>
      <button onclick="toggleLang()" class="hidden sm:inline-flex items-center justify-center w-8 h-8 rounded-full" style="background:var(--w06);border:1px solid var(--w10);color:var(--w60)">
        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10"/></svg>
      </button>
      <button onclick="toggleTheme()" class="hidden sm:inline-flex items-center justify-center w-8 h-8 rounded-full" style="background:var(--w06);border:1px solid var(--w10);color:var(--w60)">
        <span id="ico-moon">🌙</span><span id="ico-sun" class="hidden">☀️</span>
      </button>
      <a href="#" class="hidden md:inline-flex px-3.5 py-1.5 rounded-lg text-sm font-semibold btn-g" data-en="Log In" data-ar="دخول">دخول</a>
      <a href="hc-mentor-join.html" class="hidden lg:inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta15);color:var(--tl)">
        <svg class="w-3 h-3 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>
        <span data-en="Join as Mentor" data-ar="انضم كمنتور">انضم كمنتور</span>
      </a>
      <a href="#" class="btn-p inline-flex items-center px-4 py-1.5 rounded-lg text-sm">
        <span data-en="Get Started" data-ar="ابدأ الآن">ابدأ الآن</span>
      </a>
      <button onclick="document.getElementById('hc-mob').classList.toggle('hidden')" class="lg:hidden p-2 rounded-lg" style="color:var(--w60)">
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12h18M3 6h18M3 18h18"/></svg>
      </button>
    </div>
  </div>

  <!-- Mobile menu -->
  <div id="hc-mob" class="hidden absolute top-16 inset-x-0 border-b p-5 overflow-y-auto" style="background:rgba(3,13,23,.99);border-color:var(--ta12);max-height:80vh">
    <div class="mb-1.5 text-[.58rem] font-bold uppercase tracking-wider" style="color:var(--w40)">عن المعهد</div><div class="flex flex-col mb-3"><a href="#" class="mob-link py-2.5 px-3 rounded-lg text-sm" style="color:var(--w60)">من نحن</a><a href="#" class="mob-link py-2.5 px-3 rounded-lg text-sm" style="color:var(--w60)">اعتماداتنا</a><a href="hc-pricing.html" class="mob-link py-2.5 px-3 rounded-lg text-sm" style="color:var(--w60)">أسعارنا</a><a href="#" class="mob-link py-2.5 px-3 rounded-lg text-sm" style="color:var(--w60)">اتصل بنا</a></div><div class="mb-1.5 text-[.58rem] font-bold uppercase tracking-wider" style="color:var(--w40)">تعلّم</div><div class="flex flex-col mb-3"><a href="hc-diplomas.html" class="mob-link py-2.5 px-3 rounded-lg text-sm" style="color:var(--w60)">الدبلومات</a><a href="hc-mentorship.html" class="mob-link py-2.5 px-3 rounded-lg text-sm" style="color:var(--w60)">الإرشاد</a></div><div class="mb-1.5 text-[.58rem] font-bold uppercase tracking-wider" style="color:var(--w40)">الشركات</div><div class="flex flex-col mb-3"><a href="hc-companies.html" class="mob-link py-2.5 px-3 rounded-lg text-sm" style="color:var(--w60)">التوظيف</a><a href="hc-live.html" class="mob-link py-2.5 px-3 rounded-lg text-sm" style="color:var(--w60)">التدريبات المباشرة</a></div>
    <div style="border-top:1px solid var(--ta12);margin-top:.5rem;padding-top:1rem">
      <a href="#" class="block py-2 px-3 rounded-lg text-sm" style="color:var(--w60)" data-en="Verify Certificate" data-ar="تحقق من الشهادة">تحقق من الشهادة</a>
      <a href="hc-mentor-join.html" class="flex items-center gap-2 py-2 px-3 rounded-lg text-sm" style="color:var(--tl)" data-en="Join as Mentor" data-ar="انضم كمنتور">
        <svg class="w-3.5 h-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>
        انضم كمنتور
      </a>
    </div>
    <!-- Theme + Language in mobile -->
    <div class="flex items-center gap-3 pt-3 mt-1" style="border-top:1px solid var(--ta12)">
      <button onclick="toggleLang();document.getElementById('hc-mob').classList.add('hidden')" class="flex items-center gap-2 py-2 px-3 rounded-lg text-sm flex-1" style="color:var(--w60);background:var(--w06);border:1px solid var(--w10)">
        <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10"/></svg>
        <span data-en="English / العربية" data-ar="عربي / English">عربي / English</span>
      </button>
      <button onclick="toggleTheme();document.getElementById('hc-mob').classList.add('hidden')" class="flex items-center gap-2 py-2 px-3 rounded-lg text-sm flex-1" style="color:var(--w60);background:var(--w06);border:1px solid var(--w10)">
        <span id="mob-ico-moon">🌙</span><span id="mob-ico-sun" class="hidden">☀️</span>
        <span data-en="Dark / Light" data-ar="داكن / فاتح">داكن / فاتح</span>
      </button>
    </div>
  </div>
</nav>



<div id="toast" data-en="CV saved!" data-ar="تم حفظ السيرة الذاتية!">تم حفظ السيرة الذاتية! ✓</div>

<div class="page-header">
  <div class="relative z-10 max-w-[760px] mx-auto px-6">
    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold mb-4" style="background:rgba(0,212,184,.1);border:1px solid rgba(0,212,184,.25);color:var(--tl)">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/></svg>
      <span data-en="My Resume" data-ar="سيرتي الذاتية">سيرتي الذاتية</span>
    </div>
    <h1 class="font-display font-extrabold mb-2" style="font-size:clamp(2rem,4.5vw,3rem);color:var(--w)">
      <span data-en="Build Your CV" data-ar="سيرتي الذاتية">سيرتي الذاتية</span>
    </h1>
    <p class="text-sm" style="color:var(--w60)" data-en="Fill in your information — your profile is visible to partner companies." data-ar="أدخل بياناتك — ملفك مرئي للشركات الشريكة.">أدخل بياناتك — ملفك مرئي للشركات الشريكة.</p>
  </div>
</div>

<main class="max-w-[760px] mx-auto px-6 pb-32">
  <div class="flex flex-col gap-5">

    <!-- EDUCATION -->
    <div class="cv-section">
      <div class="cv-section-head">
        <div class="cv-section-icon">📚</div>
        <div>
          <div class="font-display font-bold text-base" style="color:var(--w)" data-en="Education" data-ar="رحلة التعلم">رحلة التعلم</div>
          <div class="text-xs" style="color:var(--w40)" data-en="University, institute, schools" data-ar="جامعة، معهد، مدارس">جامعة، معهد، مدارس</div>
        </div>
      </div>
      <div class="cv-section-body" id="edu-list"></div>
      <div class="px-5 pb-5">
        <button class="add-btn" onclick="addEntry('edu')">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg>
          <span data-en="Add Education" data-ar="+ إضافة تعليم جديد">+ إضافة تعليم جديد</span>
        </button>
      </div>
    </div>

    <!-- WORK -->
    <div class="cv-section">
      <div class="cv-section-head">
        <div class="cv-section-icon">💼</div>
        <div>
          <div class="font-display font-bold text-base" style="color:var(--w)" data-en="Work Experience" data-ar="الخبرة العملية">الخبرة العملية</div>
          <div class="text-xs" style="color:var(--w40)" data-en="Jobs and professional roles" data-ar="وظائف والأدوار المهنية">وظائف والأدوار المهنية</div>
        </div>
      </div>
      <div class="cv-section-body" id="work-list"></div>
      <div class="px-5 pb-5">
        <button class="add-btn" onclick="addEntry('work')">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg>
          <span data-en="Add Work Experience" data-ar="+ إضافة خبرة عمل">+ إضافة خبرة عمل</span>
        </button>
      </div>
    </div>

    <!-- VOLUNTEER -->
    <div class="cv-section">
      <div class="cv-section-head">
        <div class="cv-section-icon">💖</div>
        <div>
          <div class="font-display font-bold text-base" style="color:var(--w)" data-en="Volunteer Experience" data-ar="الخبرة التطوعية">الخبرة التطوعية</div>
          <div class="text-xs" style="color:var(--w40)" data-en="NGOs, community work, initiatives" data-ar="منظمات، عمل مجتمعي، مبادرات">منظمات، عمل مجتمعي، مبادرات</div>
        </div>
      </div>
      <div class="cv-section-body" id="vol-list"></div>
      <div class="px-5 pb-5">
        <button class="add-btn" onclick="addEntry('vol')">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg>
          <span data-en="Add Volunteer Experience" data-ar="+ إضافة تجربة تطوعية">+ إضافة تجربة تطوعية</span>
        </button>
      </div>
    </div>

    <!-- COURSES -->
    <div class="cv-section">
      <div class="cv-section-head">
        <div class="cv-section-icon">🎓</div>
        <div>
          <div class="font-display font-bold text-base" style="color:var(--w)" data-en="Training Courses" data-ar="الدورات التدريبية">الدورات التدريبية</div>
          <div class="text-xs" style="color:var(--w40)" data-en="Diplomas, certificates, online courses" data-ar="دبلومات، شهادات، كورسات أونلاين">دبلومات، شهادات، كورسات أونلاين</div>
        </div>
      </div>
      <div class="cv-section-body" id="course-list"></div>
      <div class="px-5 pb-5">
        <button class="add-btn" onclick="addEntry('course')">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg>
          <span data-en="Add Course" data-ar="+ إضافة دورة جديدة">+ إضافة دورة جديدة</span>
        </button>
      </div>
    </div>

  </div>
</main>

<!-- SAVE BAR -->
<div class="save-bar">
  <div class="max-w-[760px] mx-auto px-6 flex items-center justify-between gap-4">
    <div class="text-sm" style="color:var(--w60)" id="save-status" data-en="Your CV will be visible to partner companies." data-ar="سيرتك ستكون مرئية للشركات الشريكة.">سيرتك ستكون مرئية للشركات الشريكة.</div>
    <button class="btn-p px-8 py-2.5 text-sm font-bold rounded-xl shrink-0 flex items-center gap-2" onclick="saveCV()">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><path d="M17 21v-8H7v8M7 3v5h8"/></svg>
      <span data-en="Save CV" data-ar="حفظ السيرة الذاتية">حفظ السيرة الذاتية</span>
    </button>
  </div>
</div>

<footer class="border-t" style="background:var(--bg2);border-color:var(--ta12)">
  <div class="max-w-[1280px] mx-auto px-5 py-12">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-10">
      <div>
        <div class="flex items-center gap-2 mb-4">
          <div class="w-7 h-7"><svg viewBox="0 0 56 56" fill="none"><path d="M8 28A20 20 0 1 1 28 48" stroke="url(#f1)" stroke-width="2.5" stroke-linecap="round"/><path d="M14 28A14 14 0 1 1 28 42" stroke="url(#f2)" stroke-width="2.5" stroke-linecap="round"/><circle cx="28" cy="28" r="5" fill="url(#f3)"/><circle cx="28" cy="8" r="3" fill="#0CCFB8"/><defs><linearGradient id="f1" x1="8" y1="8" x2="48" y2="48" gradientUnits="userSpaceOnUse"><stop stop-color="#0CCFB8"/><stop offset="1" stop-color="#0CCFB8" stop-opacity=".3"/></linearGradient><linearGradient id="f2" x1="14" y1="14" x2="42" y2="42" gradientUnits="userSpaceOnUse"><stop stop-color="#0CCFB8"/><stop offset="1" stop-color="#2DDEC8"/></linearGradient><radialGradient id="f3"><stop stop-color="#fff"/><stop offset="1" stop-color="#0CCFB8"/></radialGradient></defs></svg></div>
          <div class="font-display font-bold text-sm" style="color:var(--w)">HalaCareer</div>
        </div>
        <p class="text-xs leading-relaxed" style="color:var(--w40)" data-en="From learning to opportunity — one connected system." data-ar="من التعلّم إلى الفرصة — نظام واحد متكامل.">من التعلّم إلى الفرصة — نظام واحد متكامل.</p>
        <div class="flex items-center gap-1.5 mt-4"><span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span><span class="text-[.62rem]" style="color:var(--w40)" data-en="All systems operational" data-ar="جميع الأنظمة تعمل">جميع الأنظمة تعمل</span></div>
      </div>
      <div>
        <div class="font-bold text-xs uppercase tracking-wider mb-3" style="color:var(--w40)" data-en="Learn" data-ar="تعلّم">تعلّم</div>
        <div class="flex flex-col gap-2">
          <a href="hc-diplomas.html" class="text-sm" style="color:var(--w60)" data-en="Diplomas" data-ar="الدبلومات">الدبلومات</a>
          <a href="hc-live.html" class="text-sm" style="color:var(--w60)" data-en="Live Sessions" data-ar="جلسات مباشرة">جلسات مباشرة</a>
          <a href="hc-mentorship.html" class="text-sm" style="color:var(--w60)" data-en="Mentorship" data-ar="الإرشاد">الإرشاد</a>
        </div>
      </div>
      <div>
        <div class="font-bold text-xs uppercase tracking-wider mb-3" style="color:var(--w40)" data-en="Work" data-ar="وظّف">وظّف</div>
        <div class="flex flex-col gap-2">
          <a href="hc-jobs.html" class="text-sm" style="color:var(--w60)" data-en="Jobs" data-ar="الوظائف">الوظائف</a>
          <a href="hc-companies.html" class="text-sm" style="color:var(--w60)" data-en="For Companies" data-ar="للشركات">للشركات</a>
          <a href="hc-mentor-join.html" class="text-sm" style="color:var(--w60)" data-en="Join as Mentor" data-ar="انضم كمنتور">انضم كمنتور</a>
        </div>
      </div>
      <div>
        <div class="font-bold text-xs uppercase tracking-wider mb-3" style="color:var(--w40)" data-en="About" data-ar="عن المعهد">عن المعهد</div>
        <div class="flex flex-col gap-2">
          <a href="#" class="text-sm" style="color:var(--w60)" data-en="Who We Are" data-ar="من نحن">من نحن</a>
          <a href="hc-pricing.html" class="text-sm" style="color:var(--w60)" data-en="Pricing" data-ar="الأسعار">الأسعار</a>
          <a href="#" class="text-sm" style="color:var(--w60)" data-en="Contact Us" data-ar="اتصل بنا">اتصل بنا</a>
        </div>
      </div>
    </div>
    <div class="flex flex-col sm:flex-row items-center justify-between gap-3 pt-6" style="border-top:1px solid var(--ta12)">
      <p class="text-xs" style="color:var(--w40)">© 2025 HalaCareer · Talent Development Ecosystem · Egypt · UAE · Saudi Arabia</p>
      <div class="flex gap-4">
        <a href="#" class="text-xs" style="color:var(--w40)" data-en="Privacy" data-ar="الخصوصية">الخصوصية</a>
        <a href="#" class="text-xs" style="color:var(--w40)" data-en="Terms" data-ar="الشروط">الشروط</a>
        <a href="#" class="text-xs" style="color:var(--w40)" data-en="Verify Certificate" data-ar="تحقق من الشهادة">تحقق من الشهادة</a>
      </div>
    </div>
  </div>
</footer>

<script>
// Base
let isDark=true;
function toggleTheme(){isDark=!isDark;document.documentElement.classList.toggle('light',!isDark);['ico-moon','mob-ico-moon'].forEach(id=>{var el=document.getElementById(id);if(el)el.classList.toggle('hidden',!isDark)});['ico-sun','mob-ico-sun'].forEach(id=>{var el=document.getElementById(id);if(el)el.classList.toggle('hidden',isDark)});localStorage.setItem('hc-theme',isDark?'dark':'light');}
(()=>{if(localStorage.getItem('hc-theme')==='light'){isDark=false;document.documentElement.classList.add('light');var m=document.getElementById('ico-moon');if(m)m.classList.add('hidden');var s=document.getElementById('ico-sun');if(s)s.classList.remove('hidden');}})();
let isEn=true;
function toggleLang(){isEn=!isEn;applyLang();localStorage.setItem('hc-lang',isEn?'en':'ar');}
function applyLang(){var h=document.documentElement;h.lang=isEn?'en':'ar';h.dir=isEn?'ltr':'rtl';document.querySelectorAll('[data-en]').forEach(el=>{var v=isEn?el.dataset.en:el.dataset.ar;if(!v)return;if(el.tagName==='INPUT'||el.tagName==='TEXTAREA'){el.placeholder=v;return;}if(el.children.length===0||[...el.children].every(c=>c.tagName==='SVG'))el.textContent=v;});}
(()=>{if(localStorage.getItem('hc-lang')==='ar'){isEn=false;applyLang();}})();
window.addEventListener('scroll',()=>{var n=document.getElementById('hc-nav');if(!n)return;var l=document.documentElement.classList.contains('light');n.style.background=window.scrollY>40?(l?'#fff':'rgba(3,13,23,.98)'):(l?'#fff':'rgba(3,13,23,.96)');n.style.borderColor=window.scrollY>40?(l?'#e5e7eb':'rgba(255,255,255,.12)'):(l?'#e5e7eb':'rgba(255,255,255,.08)');},{passive:true});
function openSearch(){var ov=document.getElementById('search-overlay');if(ov){ov.classList.add('open');setTimeout(()=>document.getElementById('search-input')?.focus(),50);}}
function closeSearch(){document.getElementById('search-overlay')?.classList.remove('open');}
document.addEventListener('keydown',e=>{if(e.key==='Escape')closeSearch();});

// ── Entry Templates ────────────────────────────────────────────────────────
var TEMPLATES = {
  edu: {
    ar: [
      ['الدرجة العلمية','مثال: بكالوريوس تجارة','text'],
      ['المؤسسة التعليمية','مثال: جامعة القاهرة','text'],
      ['التخصص','مثال: إدارة الأعمال','text'],
      ['سنة البداية','مثال: 2019','number','w-half'],
      ['سنة الانتهاء','مثال: 2023 أو حتى الآن','text','w-half'],
      ['المعدل (اختياري)','مثال: جيد جداً','text'],
    ],
    en: [
      ['Degree','e.g. Bachelor of Commerce','text'],
      ['Institution','e.g. Cairo University','text'],
      ['Major','e.g. Business Administration','text'],
      ['Start Year','e.g. 2019','number','w-half'],
      ['End Year','e.g. 2023 or Present','text','w-half'],
      ['Grade (optional)','e.g. Very Good','text'],
    ]
  },
  work: {
    ar: [
      ['المسمى الوظيفي','مثال: مدير مبيعات','text'],
      ['الشركة','مثال: Vodafone Egypt','text'],
      ['مكان العمل','مثال: القاهرة، مصر','text'],
      ['تاريخ البداية','مثال: يناير 2022','text','w-half'],
      ['تاريخ الانتهاء','مثال: حتى الآن','text','w-half'],
      ['وصف المهام','اشرح مسؤولياتك وإنجازاتك الرئيسية...','textarea'],
    ],
    en: [
      ['Job Title','e.g. Sales Manager','text'],
      ['Company','e.g. Vodafone Egypt','text'],
      ['Location','e.g. Cairo, Egypt','text'],
      ['Start Date','e.g. January 2022','text','w-half'],
      ['End Date','e.g. Present','text','w-half'],
      ['Description','Describe your responsibilities and key achievements...','textarea'],
    ]
  },
  vol: {
    ar: [
      ['الدور','مثال: منسق مشاريع','text'],
      ['المنظمة','مثال: منظمة أطفاء بلا مأوى','text'],
      ['مكان التطوع','مثال: القاهرة','text'],
      ['تاريخ البداية','مثال: مارس 2021','text','w-half'],
      ['تاريخ الانتهاء','مثال: ديسمبر 2021','text','w-half'],
      ['وصف التطوع','ماذا قدمت وماذا تعلمت...','textarea'],
    ],
    en: [
      ['Role','e.g. Project Coordinator','text'],
      ['Organization','e.g. Save the Children','text'],
      ['Location','e.g. Cairo','text'],
      ['Start Date','e.g. March 2021','text','w-half'],
      ['End Date','e.g. December 2021','text','w-half'],
      ['Description','What you contributed and learned...','textarea'],
    ]
  },
  course: {
    ar: [
      ['اسم الدورة','مثال: دبلومة مبيعات B2B المحترفة','text'],
      ['جهة الإصدار','مثال: هلا كارير','text'],
      ['تاريخ الحصول عليها','مثال: أبريل 2025','text','w-half'],
      ['رقم الشهادة (اختياري)','مثال: HC-2025-XXXX','text','w-half'],
      ['رابط الشهادة (اختياري)','https://...','url'],
    ],
    en: [
      ['Course Name','e.g. Professional B2B Sales Diploma','text'],
      ['Issuer','e.g. HalaCareer','text'],
      ['Date Obtained','e.g. April 2025','text','w-half'],
      ['Certificate ID (optional)','e.g. HC-2025-XXXX','text','w-half'],
      ['Certificate Link (optional)','https://...','url'],
    ]
  }
};

var COUNTS = {edu:0, work:0, vol:0, course:0};

function makeField(label, placeholder, type, id, half) {
  var tag = type === 'textarea' ? 'textarea' : 'input';
  var input = type === 'textarea'
    ? `<textarea class="hc-field" id="${id}" placeholder="${placeholder}" rows="3"></textarea>`
    : `<input class="hc-field" id="${id}" type="${type==='url'?'url':'text'}" placeholder="${placeholder}">`;
  var wClass = half ? 'col-span-1' : '';
  return `<div class="${wClass}">
    <label class="cv-label" for="${id}">${label}</label>
    ${input}
  </div>`;
}

function addEntry(type, data) {
  COUNTS[type]++;
  var id = type + '_' + COUNTS[type];
  var lang = isEn ? 'en' : 'ar';
  var fields = TEMPLATES[type][lang];
  
  // Check how many half-width fields exist (for grid)
  var halves = fields.filter(f => f[3] === 'w-half').length;
  
  var fieldsHtml = '';
  var inHalfGroup = false;
  var halfGroupHtml = '';
  
  fields.forEach(function(f, i) {
    var label = f[0], ph = f[1], ftype = f[2], isHalf = f[3] === 'w-half';
    var fid = id + '_f' + i;
    if (isHalf) {
      halfGroupHtml += makeField(label, ph, ftype, fid, true);
      if (!inHalfGroup) inHalfGroup = true;
      // Check if next is also half
      var nextIsHalf = fields[i+1] && fields[i+1][3] === 'w-half';
      if (!nextIsHalf || i === fields.length - 1) {
        fieldsHtml += `<div class="grid grid-cols-2 gap-3 sm:gap-4">${halfGroupHtml}</div>`;
        halfGroupHtml = '';
        inHalfGroup = false;
      }
    } else {
      fieldsHtml += makeField(label, ph, ftype, fid, false);
    }
  });

  var entry = document.createElement('div');
  entry.className = 'cv-entry';
  entry.id = id;
  entry.innerHTML = `
    <button class="remove-btn" onclick="removeEntry('${id}')" title="حذف">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"/></svg>
    </button>
    <div class="flex flex-col gap-3 pe-8">
      ${fieldsHtml}
    </div>`;

  var list = document.getElementById(type + '-list');
  list.appendChild(entry);

  // Animate in
  entry.style.opacity = '0';
  entry.style.transform = 'translateY(10px)';
  requestAnimationFrame(function() {
    entry.style.transition = 'opacity .3s ease, transform .3s ease';
    entry.style.opacity = '1';
    entry.style.transform = 'translateY(0)';
  });

  // Scroll into view
  setTimeout(function() {
    entry.scrollIntoView({behavior: 'smooth', block: 'nearest'});
  }, 100);
}

function removeEntry(id) {
  var el = document.getElementById(id);
  if (!el) return;
  el.style.transition = 'opacity .25s ease, transform .25s ease';
  el.style.opacity = '0';
  el.style.transform = 'translateY(-8px) scale(.98)';
  setTimeout(function() { el.remove(); }, 260);
}

// ── Save ──────────────────────────────────────────────────────────────────
function saveCV() {
  // Collect all data
  var data = {};
  ['edu', 'work', 'vol', 'course'].forEach(function(type) {
    data[type] = [];
    var list = document.getElementById(type + '-list');
    if (!list) return;
    list.querySelectorAll('.cv-entry').forEach(function(entry) {
      var fields = {};
      entry.querySelectorAll('.hc-field').forEach(function(f) {
        fields[f.id] = f.value;
      });
      data[type].push(fields);
    });
  });
  // Save to localStorage
  localStorage.setItem('hc_cv_data', JSON.stringify(data));
  // Show toast
  var t = document.getElementById('toast');
  if (t) {
    t.classList.add('show');
    setTimeout(function() { t.classList.remove('show'); }, 2500);
  }
  // Update status
  var s = document.getElementById('save-status');
  if (s) {
    s.textContent = isEn ? 'Saved!' : 'تم الحفظ!';
    s.style.color = 'var(--tl)';
    setTimeout(function() {
      s.textContent = isEn ? 'Your CV will be visible to partner companies.' : 'سيرتك ستكون مرئية للشركات الشريكة.';
      s.style.color = '';
    }, 3000);
  }
}

// ── Restore saved data ────────────────────────────────────────────────────
(function restoreCV() {
  var raw = localStorage.getItem('hc_cv_data');
  if (!raw) { addEntry('edu'); addEntry('work'); return; }
  try {
    var data = JSON.parse(raw);
    ['edu', 'work', 'vol', 'course'].forEach(function(type) {
      if (data[type] && data[type].length > 0) {
        data[type].forEach(function(fields, idx) {
          addEntry(type);
          // Restore values after DOM is ready
          setTimeout(function() {
            Object.keys(fields).forEach(function(fid) {
              var el = document.getElementById(fid);
              if (el) el.value = fields[fid];
            });
          }, 50);
        });
      }
    });
  } catch(e) { addEntry('edu'); addEntry('work'); }
})();
</script>
</body>
</html>