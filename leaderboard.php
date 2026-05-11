<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>قائمة المتصدرين — هلا كارير</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,700;12..96,800&family=Cairo:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<script>tailwind.config={theme:{extend:{fontFamily:{display:["Bricolage Grotesque"],cairo:["Cairo"]}}}}</script>
<style>

/* ── Variables ── */
:root {
  --bg:#030d17; --bg2:#04111e;
  --t:#00d4b8; --tl:#2de0ca; --td:#009e85;
  --ta20:rgba(0,212,184,.20); --ta15:rgba(0,212,184,.15);
  --ta12:rgba(0,212,184,.12); --ta08:rgba(0,212,184,.08);
  --w:#fff; --w80:rgba(255,255,255,.80);
  --w60:rgba(255,255,255,.60); --w40:rgba(255,255,255,.40);
  --w10:rgba(255,255,255,.10); --w06:rgba(255,255,255,.06);
}
html.light {
  --bg:#fff; --bg2:#fff;
  --t:#009e85; --tl:#00b89e; --td:#007a68;
  --ta20:rgba(0,212,184,.2); --ta15:rgba(0,212,184,.16);
  --ta12:rgba(0,212,184,.12); --ta08:rgba(0,212,184,.06);
  --w:#111827; --w80:#1f2937;
  --w60:#4b5563; --w40:#9ca3af;
  --w10:rgba(0,0,0,.06); --w06:rgba(0,0,0,.04);
}

/* ── Reset & Base ── */
*, *::before, *::after { box-sizing:border-box; }
body { font-family:'Cairo',sans-serif; background:var(--bg); color:var(--w);
  overflow-x:hidden; -webkit-font-smoothing:antialiased; }
h1,h2,h3 { font-family:'Bricolage Grotesque',sans-serif; }
a { text-decoration:none; color:inherit; }
body::after { content:''; position:fixed; inset:0; pointer-events:none; z-index:0;
  opacity:.035; background:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.75' numOctaves='4'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.04'/%3E%3C/svg%3E"); }
html.light body::after { display:none; }
::-webkit-scrollbar { width:4px; }
::-webkit-scrollbar-track { background:var(--bg); }
::-webkit-scrollbar-thumb { background:var(--ta20); border-radius:4px; }

/* ── Utilities ── */
.grad { background:linear-gradient(135deg,#2de0ca,#009e85);
  -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
.muted  { color:var(--w40); }
.semi   { color:var(--w60); }
.strong { color:var(--w); }
html.light .grad { -webkit-text-fill-color:transparent !important; }

/* ── Light mode ── */
html.light * { box-shadow:none !important; }
html.light body { background:#fff !important; color:#111827 !important; }
html.light section, html.light main { background:#fff !important; }
html.light #hc-nav { background:#fff !important; border-color:#e5e7eb !important; }
html.light #hc-mob { background:#fff !important; border-color:#e5e7eb !important; }
html.light .card   { background:#fff !important; border-color:rgba(0,212,184,.15) !important; }
html.light .my-card { background:rgba(0,212,184,.04) !important; border-color:rgba(0,212,184,.18) !important; }
html.light .rank-row > div { background:#fff !important; border-color:rgba(0,212,184,.12) !important; }
html.light .rank-row > div:hover { border-color:rgba(0,212,184,.28) !important; }
html.light .pod-card [style*="background:rgba(5,14,26"] { background:#fff !important; }
html.light .pod-card [style*="color:var(--w)"] { color:#111827 !important; }
html.light .muted  { color:var(--w40) !important; }
html.light .semi   { color:var(--w60) !important; }
html.light .strong { color:var(--w)   !important; }
html.light .ptab   { color:var(--w60) !important; border-color:rgba(0,212,184,.18) !important; }
html.light .ptab.on { background:rgba(0,212,184,.1) !important; border-color:rgba(0,212,184,.35) !important; color:var(--td) !important; }
html.light [style*="background:rgba(5,14,26"] { background:#fff !important; border-color:rgba(0,212,184,.12) !important; }
html.light [style*="background:rgba(4,11,22"] { background:#fff !important; }
html.light [style*="background:rgba(0,212,184,.05)"] { background:rgba(0,212,184,.04) !important; }
html.light [style*="background:rgba(0,212,184,.08)"] { background:rgba(0,212,184,.06) !important; }
html.light [style*="color:var(--w)"]   { color:#111827 !important; }
html.light [style*="color:var(--w80)"] { color:#1f2937 !important; }
html.light [style*="color:var(--w60)"] { color:#4b5563 !important; }
html.light [style*="color:var(--w40)"] { color:#9ca3af !important; }
html.light [style*="color:rgba(255,255,255,.8"] { color:#1f2937 !important; }
html.light [style*="color:rgba(255,255,255,.6"] { color:#4b5563 !important; }
html.light [style*="color:rgba(255,255,255,.4"] { color:#9ca3af !important; }
html.light [style*="color:rgba(255,255,255,.3"] { color:#d1d5db !important; }
/* Keep medal/podium colors */
html.light [style*="color:#fbbf24"] { color:#d97706 !important; }
html.light [style*="color:#d1d5db"] { color:#6b7280 !important; }
html.light [style*="color:#fb923c"] { color:#ea580c !important; }

/* ── Card ── */
.card { border-radius:1.1rem; border:1px solid var(--ta12);
  background:rgba(5,14,26,.8); overflow:hidden; transition:border-color .2s; }

/* ── Period tabs ── */
.ptab { padding:.42rem 1rem; border-radius:.6rem; font-size:.78rem; font-weight:700;
  cursor:pointer; border:1px solid var(--ta15); background:transparent;
  color:var(--w60); font-family:'Cairo',sans-serif; transition:all .18s; white-space:nowrap; }
.ptab.on { background:rgba(0,212,184,.12); border-color:rgba(0,212,184,.38); color:var(--tl); }
.ptab:hover:not(.on) { border-color:var(--ta20); color:var(--w80); }

/* ── My card ── */
.my-card { display:flex; align-items:center; gap:.9rem; padding:1rem 1.25rem;
  border-radius:1rem; border:1px solid var(--ta20);
  background:linear-gradient(135deg,rgba(0,212,184,.08),rgba(5,14,26,.8));
  transition:border-color .2s; }

/* ── Podium ── */
.pod-card { transition:transform .25s; }
.pod-card:hover { transform:translateY(-4px) !important; }
.pod-ground { height:2px; border-radius:999px; margin-bottom:2.5rem;
  background:linear-gradient(90deg,transparent,rgba(251,191,36,.4) 25%,rgba(0,212,184,.35) 50%,rgba(251,146,60,.3) 75%,transparent); }

/* ── Divider ── */
.lb-div { display:flex; align-items:center; gap:.75rem; margin-bottom:1rem; }
.lb-div::before, .lb-div::after { content:''; flex:1; height:1px;
  background:linear-gradient(to var(--side),var(--ta12),transparent); }
.lb-div::before { --side:left; }
.lb-div::after  { --side:right; }
.lb-div-lbl { font-size:.63rem; font-weight:700; letter-spacing:.18em;
  text-transform:uppercase; color:var(--td); white-space:nowrap; }

/* ── Animations ── */
@keyframes fadeup { from { opacity:0; transform:translateY(14px); } to { opacity:1; transform:translateY(0); } }
@keyframes float  { 0%,100% { transform:translateY(0);  } 50% { transform:translateY(-7px); } }
@keyframes pulse  { 0%,100% { opacity:.7; transform:scale(1);   } 50% { opacity:1; transform:scale(1.3); } }
@keyframes shimmerTitle { to { background-position:200% center; } }

.fi  { animation:fadeup .45s ease both; }
.fi2 { animation:fadeup .45s .08s ease both; }
.fi3 { animation:fadeup .45s .15s ease both; }

/* ── Scroll bar ── */
#spbar { position:fixed; top:0; left:0; height:2px; width:0; z-index:9999;
  background:linear-gradient(90deg,#2de0ca,#fbbf24); transition:width .1s; }

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

<div id="spbar"></div>

<!-- Search overlay -->
<div id="search-overlay" onclick="if(event.target===this)closeSearch()" style="position:fixed;inset:0;background:rgba(0,0,0,.82);z-index:9998;display:none;align-items:flex-start;justify-content:center;padding-top:100px;backdrop-filter:blur(10px)">
  <div style="width:100%;max-width:520px;margin:0 1rem;background:rgba(5,14,26,.95);border:1.5px solid var(--ta20);border-radius:1rem">
    <div style="display:flex;align-items:center;gap:.75rem;padding:1rem 1.25rem">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--w40)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
      <input id="search-input" type="text" placeholder="ابحث..." style="flex:1;background:transparent;border:none;outline:none;font-size:1rem;color:var(--w);font-family:Cairo,sans-serif">
    </div>
  </div>
</div>

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

<!-- ═══ HERO ═══ -->
<section style="padding:6.5rem 0 2.5rem;position:relative;overflow:hidden">
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse 65% 55% at 50% -10%,rgba(0,212,184,.1),transparent 55%),radial-gradient(ellipse 35% 35% at 15% 75%,rgba(251,191,36,.06),transparent 50%),radial-gradient(ellipse 35% 35% at 85% 75%,rgba(251,146,60,.05),transparent 50%);pointer-events:none"></div>
  <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(0,212,184,.06) 1px,transparent 1px);background-size:30px 30px;opacity:.55;pointer-events:none"></div>
  <div style="position:absolute;top:0;left:0;right:0;height:1px;background:linear-gradient(90deg,transparent,rgba(0,212,184,.45) 35%,rgba(0,212,184,.45) 65%,transparent)"></div>

  <div style="max-width:680px;margin:0 auto;padding:0 1.5rem;text-align:center;position:relative;z-index:2">

    <!-- Live badge -->
    <div style="display:inline-flex;align-items:center;gap:.5rem;padding:.3rem .9rem;border-radius:999px;margin-bottom:1rem;font-size:.68rem;font-weight:700;letter-spacing:.06em;background:rgba(34,197,94,.1);border:1px solid rgba(34,197,94,.28);color:#4ade80" class="fi">
      <span style="width:7px;height:7px;border-radius:50%;background:#22c55e;box-shadow:0 0 7px #22c55e;animation:pulse 1.8s ease infinite;flex-shrink:0"></span>
      مباشر · يتحدث لحظيا
    </div>

    <!-- Title -->
    <h1 style="font-family:'Cairo',sans-serif;font-weight:800;
      font-size:clamp(2.2rem,5vw,3.5rem);line-height:1.06;margin:0 0 .6rem;color:var(--w)" class="fi2">
      <span>قائمة </span><span class="grad">المتصدرين</span>
    </h1>

    <p class="semi" style="font-size:.9rem;margin:0 0 1.75rem;line-height:1.7" class="fi3">
      أكثر المتعلمين نشاطاً مرتبون بالنجوم المكتسبة
    </p>

    <!-- Period tabs -->
    <div style="display:flex;justify-content:center;gap:.45rem;flex-wrap:wrap" class="fi3">
      <button class="ptab on" id="pt-10"  onclick="setPeriod(this,'10')">آخر 10 أيام</button>
      <button class="ptab"    id="pt-30"  onclick="setPeriod(this,'30')">آخر 30 يوم</button>
    </div>
  </div>
</section>

<!-- ═══ MAIN ═══ -->
<main style="max-width:680px;margin:0 auto;padding:1.5rem 1.25rem 6rem;position:relative;z-index:2">

  <!-- My change card -->
  <div class="my-card fi2" style="margin-bottom:2rem">
    <div style="width:40px;height:40px;border-radius:50%;flex-shrink:0;display:flex;align-items:center;justify-content:center;font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.82rem;background:var(--ta12);border:1.5px solid var(--ta20);color:var(--tl)">أنا</div>
    <div style="flex:1">
      <div class="strong" style="font-size:.82rem;font-weight:700">تغيرك خلال هذه الفترة</div>
      <div class="muted" style="font-size:.65rem;margin-top:.15rem" id="my-period">آخر 10 أيام</div>
    </div>
    <div style="display:flex;align-items:center;gap:.4rem;padding:.3rem .85rem;border-radius:999px;background:var(--ta08);border:1px solid var(--ta20)">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--tl)" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      <span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:1.15rem;color:var(--tl)">0</span>
    </div>
  </div>



  <!-- Podium -->
  <div style="display:flex;align-items:flex-end;gap:.75rem;position:relative;padding-top:.5rem" class="fi3">
    <div style="position:absolute;bottom:0;left:5%;right:5%;height:24px;background:radial-gradient(ellipse at 50% 100%,rgba(0,212,184,.12),rgba(251,191,36,.08),transparent);filter:blur(8px);pointer-events:none"></div>
    <div class="pod-card" style="flex:1;min-width:0;margin-top:1.5rem;transform:none;display:flex;flex-direction:column">
  <div style="height:1.8rem"></div>
  <!-- Avatar -->
  <div style="display:flex;justify-content:center;margin-bottom:.85rem">
    <div style="position:relative">
      <div style="width:48px;height:48px;border-radius:50%;
        background:linear-gradient(135deg,#f3f4f6,#9ca3af);color:#374151;
        font-family:'Bricolage Grotesque',sans-serif;font-weight:800;
        font-size:.95rem;
        display:flex;align-items:center;justify-content:center;
        border:2.5px solid rgba(209,213,219,.4);
        box-shadow:0 0 14px rgba(209,213,219,.18),0 0 0 4px rgba(5,14,26,1)">
        رم
      </div>
      <!-- Rank badge -->
      <div style="position:absolute;bottom:-5px;right:-5px;
        width:22px;height:22px;border-radius:50%;
        background:linear-gradient(135deg,#f3f4f6,#9ca3af);color:#374151;
        font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.65rem;
        display:flex;align-items:center;justify-content:center;
        border:2px solid rgba(5,14,26,1)">
        2
      </div>
    </div>
  </div>
  <!-- Name -->
  <div style="text-align:center;margin-bottom:.6rem">
    <div style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700;
      font-size:.88rem;color:var(--w);line-height:1.25">رحمه محمد علي</div>
    <div class="muted" style="font-size:.62rem;margin-top:.2rem">Beheira · #113355</div>
  </div>
  <!-- Rank label -->
  <div style="text-align:center;margin-bottom:.75rem">
    <span style="font-size:.68rem;font-weight:700;padding:.22rem .75rem;border-radius:999px;
      background:rgba(209,213,219,.07);border:1px solid rgba(209,213,219,.4);color:#d1d5db">المركز الثاني</span>
  </div>
  <!-- Stars -->
  <div style="display:flex;align-items:center;justify-content:center;gap:.4rem;
    background:rgba(5,14,26,.5);border:1px solid rgba(209,213,219,.4);border-radius:.65rem;padding:.5rem .75rem">
    <svg width="14" height="14" viewBox="0 0 24 24" fill="#d1d5db" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
    <span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:1rem;color:#d1d5db">+52,230</span>
  </div>
  <!-- Platform bar -->
  <div style="height:170px;border-radius:1rem 1rem 0 0;margin-top:.85rem;
    background:rgba(209,213,219,.07);border:1px solid rgba(209,213,219,.4);border-bottom:none;
    position:relative;overflow:hidden">
    <div style="position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent,#d1d5db,transparent)"></div>
    <div style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:4rem;
      color:rgba(209,213,219,.1);user-select:none">#2</div>
  </div>
</div><div class="pod-card" style="flex:1;min-width:0;margin-top:0;transform:scale(1.03);display:flex;flex-direction:column">
  <div style="text-align:center;margin-bottom:.4rem;animation:float 2.8s ease-in-out infinite">
      <svg width="26" height="22" viewBox="0 0 24 20" fill="none" stroke="#fbbf24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M2 18h20M2 18L4 6l5 5 3-9 3 9 5-5 2 12"/>
      </svg></div>
  <!-- Avatar -->
  <div style="display:flex;justify-content:center;margin-bottom:.85rem">
    <div style="position:relative">
      <div style="width:58px;height:58px;border-radius:50%;
        background:linear-gradient(135deg,#fef3c7,#d97706);color:#78350f;
        font-family:'Bricolage Grotesque',sans-serif;font-weight:800;
        font-size:1.1rem;
        display:flex;align-items:center;justify-content:center;
        border:2.5px solid rgba(251,191,36,.5);
        box-shadow:0 0 22px rgba(251,191,36,.25),0 0 0 4px rgba(5,14,26,1)">
        YG
      </div>
      <!-- Rank badge -->
      <div style="position:absolute;bottom:-5px;right:-5px;
        width:22px;height:22px;border-radius:50%;
        background:linear-gradient(135deg,#fef3c7,#d97706);color:#78350f;
        font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.65rem;
        display:flex;align-items:center;justify-content:center;
        border:2px solid rgba(5,14,26,1)">
        1
      </div>
    </div>
  </div>
  <!-- Name -->
  <div style="text-align:center;margin-bottom:.6rem">
    <div style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700;
      font-size:1rem;color:var(--w);line-height:1.25">🤍 Youssef Ghonim</div>
    <div class="muted" style="font-size:.62rem;margin-top:.2rem">Gharbia · #109215</div>
  </div>
  <!-- Rank label -->
  <div style="text-align:center;margin-bottom:.75rem">
    <span style="font-size:.68rem;font-weight:700;padding:.22rem .75rem;border-radius:999px;
      background:rgba(251,191,36,.08);border:1px solid rgba(251,191,36,.5);color:#fbbf24">المركز الأول</span>
  </div>
  <!-- Stars -->
  <div style="display:flex;align-items:center;justify-content:center;gap:.4rem;
    background:rgba(5,14,26,.5);border:1px solid rgba(251,191,36,.5);border-radius:.65rem;padding:.5rem .75rem">
    <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
    <span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:1.1rem;color:#fbbf24">+81,320</span>
  </div>
  <!-- Platform bar -->
  <div style="height:220px;border-radius:1rem 1rem 0 0;margin-top:.85rem;
    background:rgba(251,191,36,.08);border:1px solid rgba(251,191,36,.5);border-bottom:none;
    position:relative;overflow:hidden">
    <div style="position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent,#fbbf24,transparent)"></div>
    <div style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:4rem;
      color:rgba(251,191,36,.12);user-select:none">#1</div>
  </div>
</div><div class="pod-card" style="flex:1;min-width:0;margin-top:1.5rem;transform:none;display:flex;flex-direction:column">
  <div style="height:1.8rem"></div>
  <!-- Avatar -->
  <div style="display:flex;justify-content:center;margin-bottom:.85rem">
    <div style="position:relative">
      <div style="width:48px;height:48px;border-radius:50%;
        background:linear-gradient(135deg,#fed7aa,#c2410c);color:#fff;
        font-family:'Bricolage Grotesque',sans-serif;font-weight:800;
        font-size:.95rem;
        display:flex;align-items:center;justify-content:center;
        border:2.5px solid rgba(251,146,60,.4);
        box-shadow:0 0 14px rgba(251,146,60,.22),0 0 0 4px rgba(5,14,26,1)">
        اا
      </div>
      <!-- Rank badge -->
      <div style="position:absolute;bottom:-5px;right:-5px;
        width:22px;height:22px;border-radius:50%;
        background:linear-gradient(135deg,#fed7aa,#c2410c);color:#fff;
        font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.65rem;
        display:flex;align-items:center;justify-content:center;
        border:2px solid rgba(5,14,26,1)">
        3
      </div>
    </div>
  </div>
  <!-- Name -->
  <div style="text-align:center;margin-bottom:.6rem">
    <div style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700;
      font-size:.88rem;color:var(--w);line-height:1.25">اروى احمد عبدالحى</div>
    <div class="muted" style="font-size:.62rem;margin-top:.2rem">Aswan · #113012</div>
  </div>
  <!-- Rank label -->
  <div style="text-align:center;margin-bottom:.75rem">
    <span style="font-size:.68rem;font-weight:700;padding:.22rem .75rem;border-radius:999px;
      background:rgba(251,146,60,.07);border:1px solid rgba(251,146,60,.4);color:#fb923c">المركز الثالث</span>
  </div>
  <!-- Stars -->
  <div style="display:flex;align-items:center;justify-content:center;gap:.4rem;
    background:rgba(5,14,26,.5);border:1px solid rgba(251,146,60,.4);border-radius:.65rem;padding:.5rem .75rem">
    <svg width="14" height="14" viewBox="0 0 24 24" fill="#fb923c" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
    <span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:1rem;color:#fb923c">+51,310</span>
  </div>
  <!-- Platform bar -->
  <div style="height:150px;border-radius:1rem 1rem 0 0;margin-top:.85rem;
    background:rgba(251,146,60,.07);border:1px solid rgba(251,146,60,.4);border-bottom:none;
    position:relative;overflow:hidden">
    <div style="position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent,#fb923c,transparent)"></div>
    <div style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:4rem;
      color:rgba(251,146,60,.1);user-select:none">#3</div>
  </div>
</div>
  </div>

  <!-- Ground floor -->
  <div class="pod-ground"></div>

  <!-- Rank rows 4–10 -->
  <div style="display:flex;flex-direction:column;gap:.5rem" id="rank-rows">
    <div class="rank-row" style="opacity:0;transform:translateY(12px);transition:opacity .4s 0ms,transform .4s 0ms">
  <div style="display:flex;align-items:center;gap:.85rem;padding:.9rem 1.1rem;
    border-radius:.9rem;border:1px solid var(--ta12);background:rgba(5,14,26,.6);
    position:relative;overflow:hidden;transition:border-color .2s,transform .18s"
    onmouseover="this.style.borderColor='var(--ta20)';this.style.transform='translateX(-3px)'"
    onmouseout="this.style.borderColor='var(--ta12)';this.style.transform=''">
    <div style="position:absolute;inset:0;background:linear-gradient(to left,rgba(0,212,184,.05),transparent 52%);pointer-events:none"></div>
    <!-- Rank -->
    <div style="width:30px;height:30px;border-radius:.5rem;flex-shrink:0;
      display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.72rem;
      background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)">#4</div>
    <!-- Avatar -->
    <div style="width:36px;height:36px;border-radius:50%;flex-shrink:0;
      display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:.72rem;
      background:linear-gradient(135deg,rgba(0,212,184,.25),rgba(0,212,184,.08));
      color:var(--tl);border:1.5px solid var(--ta20)">نا</div>
    <!-- Info -->
    <div style="flex:1;min-width:0">
      <div class="strong" style="font-weight:700;font-size:.88rem;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">نورهان السعيد شوقى</div>
      <div class="muted" style="font-size:.62rem;margin-top:.1rem">#113317 · Gharbia</div>
    </div>
    <!-- Stars -->
    <div style="display:flex;align-items:center;gap:.35rem;flex-shrink:0;
      padding:.28rem .75rem;border-radius:999px;background:var(--ta08);border:1px solid var(--ta12)">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="var(--tl)" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      <span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.9rem;color:var(--tl)">+39,230</span>
    </div>
  </div>
</div><div class="rank-row" style="opacity:0;transform:translateY(12px);transition:opacity .4s 55ms,transform .4s 55ms">
  <div style="display:flex;align-items:center;gap:.85rem;padding:.9rem 1.1rem;
    border-radius:.9rem;border:1px solid var(--ta12);background:rgba(5,14,26,.6);
    position:relative;overflow:hidden;transition:border-color .2s,transform .18s"
    onmouseover="this.style.borderColor='var(--ta20)';this.style.transform='translateX(-3px)'"
    onmouseout="this.style.borderColor='var(--ta12)';this.style.transform=''">
    <div style="position:absolute;inset:0;background:linear-gradient(to left,rgba(0,212,184,.05),transparent 66%);pointer-events:none"></div>
    <!-- Rank -->
    <div style="width:30px;height:30px;border-radius:.5rem;flex-shrink:0;
      display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.72rem;
      background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)">#5</div>
    <!-- Avatar -->
    <div style="width:36px;height:36px;border-radius:50%;flex-shrink:0;
      display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:.72rem;
      background:linear-gradient(135deg,rgba(0,212,184,.25),rgba(0,212,184,.08));
      color:var(--tl);border:1.5px solid var(--ta20)">عي</div>
    <!-- Info -->
    <div style="flex:1;min-width:0">
      <div class="strong" style="font-weight:700;font-size:.88rem;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">عائشه ياسر الاشول</div>
      <div class="muted" style="font-size:.62rem;margin-top:.1rem">#108484 · Gharbia</div>
    </div>
    <!-- Stars -->
    <div style="display:flex;align-items:center;gap:.35rem;flex-shrink:0;
      padding:.28rem .75rem;border-radius:999px;background:var(--ta08);border:1px solid var(--ta12)">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="var(--tl)" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      <span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.9rem;color:var(--tl)">+27,630</span>
    </div>
  </div>
</div><div class="rank-row" style="opacity:0;transform:translateY(12px);transition:opacity .4s 110ms,transform .4s 110ms">
  <div style="display:flex;align-items:center;gap:.85rem;padding:.9rem 1.1rem;
    border-radius:.9rem;border:1px solid var(--ta12);background:rgba(5,14,26,.6);
    position:relative;overflow:hidden;transition:border-color .2s,transform .18s"
    onmouseover="this.style.borderColor='var(--ta20)';this.style.transform='translateX(-3px)'"
    onmouseout="this.style.borderColor='var(--ta12)';this.style.transform=''">
    <div style="position:absolute;inset:0;background:linear-gradient(to left,rgba(0,212,184,.05),transparent 66%);pointer-events:none"></div>
    <!-- Rank -->
    <div style="width:30px;height:30px;border-radius:.5rem;flex-shrink:0;
      display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.72rem;
      background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)">#6</div>
    <!-- Avatar -->
    <div style="width:36px;height:36px;border-radius:50%;flex-shrink:0;
      display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:.72rem;
      background:linear-gradient(135deg,rgba(0,212,184,.25),rgba(0,212,184,.08));
      color:var(--tl);border:1.5px solid var(--ta20)">زأ</div>
    <!-- Info -->
    <div style="flex:1;min-width:0">
      <div class="strong" style="font-weight:700;font-size:.88rem;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">زينب أحمد محمد</div>
      <div class="muted" style="font-size:.62rem;margin-top:.1rem">#113293 · Faiyum</div>
    </div>
    <!-- Stars -->
    <div style="display:flex;align-items:center;gap:.35rem;flex-shrink:0;
      padding:.28rem .75rem;border-radius:999px;background:var(--ta08);border:1px solid var(--ta12)">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="var(--tl)" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      <span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.9rem;color:var(--tl)">+27,590</span>
    </div>
  </div>
</div><div class="rank-row" style="opacity:0;transform:translateY(12px);transition:opacity .4s 165ms,transform .4s 165ms">
  <div style="display:flex;align-items:center;gap:.85rem;padding:.9rem 1.1rem;
    border-radius:.9rem;border:1px solid var(--ta12);background:rgba(5,14,26,.6);
    position:relative;overflow:hidden;transition:border-color .2s,transform .18s"
    onmouseover="this.style.borderColor='var(--ta20)';this.style.transform='translateX(-3px)'"
    onmouseout="this.style.borderColor='var(--ta12)';this.style.transform=''">
    <div style="position:absolute;inset:0;background:linear-gradient(to left,rgba(0,212,184,.05),transparent 75%);pointer-events:none"></div>
    <!-- Rank -->
    <div style="width:30px;height:30px;border-radius:.5rem;flex-shrink:0;
      display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.72rem;
      background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)">#7</div>
    <!-- Avatar -->
    <div style="width:36px;height:36px;border-radius:50%;flex-shrink:0;
      display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:.72rem;
      background:linear-gradient(135deg,rgba(0,212,184,.25),rgba(0,212,184,.08));
      color:var(--tl);border:1.5px solid var(--ta20)">ا</div>
    <!-- Info -->
    <div style="flex:1;min-width:0">
      <div class="strong" style="font-weight:700;font-size:.88rem;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">التوينز</div>
      <div class="muted" style="font-size:.62rem;margin-top:.1rem">#114346 · Giza</div>
    </div>
    <!-- Stars -->
    <div style="display:flex;align-items:center;gap:.35rem;flex-shrink:0;
      padding:.28rem .75rem;border-radius:999px;background:var(--ta08);border:1px solid var(--ta12)">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="var(--tl)" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      <span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.9rem;color:var(--tl)">+20,375</span>
    </div>
  </div>
</div><div class="rank-row" style="opacity:0;transform:translateY(12px);transition:opacity .4s 220ms,transform .4s 220ms">
  <div style="display:flex;align-items:center;gap:.85rem;padding:.9rem 1.1rem;
    border-radius:.9rem;border:1px solid var(--ta12);background:rgba(5,14,26,.6);
    position:relative;overflow:hidden;transition:border-color .2s,transform .18s"
    onmouseover="this.style.borderColor='var(--ta20)';this.style.transform='translateX(-3px)'"
    onmouseout="this.style.borderColor='var(--ta12)';this.style.transform=''">
    <div style="position:absolute;inset:0;background:linear-gradient(to left,rgba(0,212,184,.05),transparent 81%);pointer-events:none"></div>
    <!-- Rank -->
    <div style="width:30px;height:30px;border-radius:.5rem;flex-shrink:0;
      display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.72rem;
      background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)">#8</div>
    <!-- Avatar -->
    <div style="width:36px;height:36px;border-radius:50%;flex-shrink:0;
      display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:.72rem;
      background:linear-gradient(135deg,rgba(0,212,184,.25),rgba(0,212,184,.08));
      color:var(--tl);border:1.5px solid var(--ta20)">أج</div>
    <!-- Info -->
    <div style="flex:1;min-width:0">
      <div class="strong" style="font-weight:700;font-size:.88rem;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">أيه جمال متولي</div>
      <div class="muted" style="font-size:.62rem;margin-top:.1rem">#112834 · Gharbia</div>
    </div>
    <!-- Stars -->
    <div style="display:flex;align-items:center;gap:.35rem;flex-shrink:0;
      padding:.28rem .75rem;border-radius:999px;background:var(--ta08);border:1px solid var(--ta12)">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="var(--tl)" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      <span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.9rem;color:var(--tl)">+15,260</span>
    </div>
  </div>
</div><div class="rank-row" style="opacity:0;transform:translateY(12px);transition:opacity .4s 275ms,transform .4s 275ms">
  <div style="display:flex;align-items:center;gap:.85rem;padding:.9rem 1.1rem;
    border-radius:.9rem;border:1px solid var(--ta12);background:rgba(5,14,26,.6);
    position:relative;overflow:hidden;transition:border-color .2s,transform .18s"
    onmouseover="this.style.borderColor='var(--ta20)';this.style.transform='translateX(-3px)'"
    onmouseout="this.style.borderColor='var(--ta12)';this.style.transform=''">
    <div style="position:absolute;inset:0;background:linear-gradient(to left,rgba(0,212,184,.05),transparent 94%);pointer-events:none"></div>
    <!-- Rank -->
    <div style="width:30px;height:30px;border-radius:.5rem;flex-shrink:0;
      display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.72rem;
      background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)">#9</div>
    <!-- Avatar -->
    <div style="width:36px;height:36px;border-radius:50%;flex-shrink:0;
      display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:.72rem;
      background:linear-gradient(135deg,rgba(0,212,184,.25),rgba(0,212,184,.08));
      color:var(--tl);border:1.5px solid var(--ta20)">?</div>
    <!-- Info -->
    <div style="flex:1;min-width:0">
      <div class="strong" style="font-weight:700;font-size:.88rem;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">#114551</div>
      <div class="muted" style="font-size:.62rem;margin-top:.1rem">#114551 · Monufia</div>
    </div>
    <!-- Stars -->
    <div style="display:flex;align-items:center;gap:.35rem;flex-shrink:0;
      padding:.28rem .75rem;border-radius:999px;background:var(--ta08);border:1px solid var(--ta12)">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="var(--tl)" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      <span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.9rem;color:var(--tl)">+5,020</span>
    </div>
  </div>
</div><div class="rank-row" style="opacity:0;transform:translateY(12px);transition:opacity .4s 330ms,transform .4s 330ms">
  <div style="display:flex;align-items:center;gap:.85rem;padding:.9rem 1.1rem;
    border-radius:.9rem;border:1px solid var(--ta12);background:rgba(5,14,26,.6);
    position:relative;overflow:hidden;transition:border-color .2s,transform .18s"
    onmouseover="this.style.borderColor='var(--ta20)';this.style.transform='translateX(-3px)'"
    onmouseout="this.style.borderColor='var(--ta12)';this.style.transform=''">
    <div style="position:absolute;inset:0;background:linear-gradient(to left,rgba(0,212,184,.05),transparent 95%);pointer-events:none"></div>
    <!-- Rank -->
    <div style="width:30px;height:30px;border-radius:.5rem;flex-shrink:0;
      display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.72rem;
      background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)">#10</div>
    <!-- Avatar -->
    <div style="width:36px;height:36px;border-radius:50%;flex-shrink:0;
      display:flex;align-items:center;justify-content:center;
      font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:.72rem;
      background:linear-gradient(135deg,rgba(0,212,184,.25),rgba(0,212,184,.08));
      color:var(--tl);border:1.5px solid var(--ta20)">نم</div>
    <!-- Info -->
    <div style="flex:1;min-width:0">
      <div class="strong" style="font-weight:700;font-size:.88rem;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">نور محمد انور</div>
      <div class="muted" style="font-size:.62rem;margin-top:.1rem">#107837 · Beheira</div>
    </div>
    <!-- Stars -->
    <div style="display:flex;align-items:center;gap:.35rem;flex-shrink:0;
      padding:.28rem .75rem;border-radius:999px;background:var(--ta08);border:1px solid var(--ta12)">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="var(--tl)" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      <span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.9rem;color:var(--tl)">+3,815</span>
    </div>
  </div>
</div>
  </div>

  <!-- CTA -->
  <div style="margin-top:2.5rem;padding:1.5rem;border-radius:1.1rem;text-align:center;background:linear-gradient(135deg,rgba(0,212,184,.07),rgba(5,14,26,.5));border:1px solid var(--ta12);position:relative;overflow:hidden">
    <div style="position:absolute;top:0;left:0;right:0;height:1.5px;background:linear-gradient(90deg,transparent,#2de0ca 40%,#fbbf24 60%,transparent)"></div>
    <div class="strong" style="font-family:'Bricolage Grotesque',sans-serif;font-size:.98rem;font-weight:700;margin-bottom:.35rem">جاهز تتصدر القائمة؟</div>
    <div class="semi" style="font-size:.78rem;margin-bottom:1rem">أكمل الكورسات واكسب النجوم للصعود في الترتيب</div>
    <a href="hc-diplomas.html" style="display:inline-flex;align-items:center;gap:.5rem;padding:.65rem 1.75rem;border-radius:.75rem;font-size:.85rem;font-weight:700;background:linear-gradient(135deg,#2de0ca,#009e85);color:#03120e;transition:opacity .18s" onmouseover="this.style.opacity='.88'" onmouseout="this.style.opacity='1'">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#03120e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 3l14 9-14 9V3z"/></svg> ابدأ كسب النجوم
    </a>
  </div>

</main>

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
/* ── Base ── */
let isDark = true;
function toggleTheme() {
  isDark = !isDark;
  document.documentElement.classList.toggle('light', !isDark);
  ['ico-moon','mob-ico-moon'].forEach(id => { const el = document.getElementById(id); if (el) el.classList.toggle('hidden', !isDark); });
  ['ico-sun','mob-ico-sun'].forEach(id  => { const el = document.getElementById(id); if (el) el.classList.toggle('hidden', isDark); });
  localStorage.setItem('hc-theme', isDark ? 'dark' : 'light');
}
(() => {
  if (localStorage.getItem('hc-theme') === 'light') {
    isDark = false;
    document.documentElement.classList.add('light');
    const m = document.getElementById('ico-moon'); if (m) m.classList.add('hidden');
    const s = document.getElementById('ico-sun');  if (s) s.classList.remove('hidden');
  }
})();

let isEn = true;
function toggleLang() { isEn = !isEn; localStorage.setItem('hc-lang', isEn ? 'en' : 'ar'); }
(() => { if (localStorage.getItem('hc-lang') === 'ar') isEn = false; })();

window.addEventListener('scroll', () => {
  const sp = document.getElementById('spbar');
  if (sp) { const t = document.documentElement.scrollHeight - window.innerHeight; sp.style.width = (t > 0 ? window.scrollY / t * 100 : 0) + '%'; }
  const n = document.getElementById('hc-nav'); if (!n) return;
  const l = document.documentElement.classList.contains('light');
  n.style.background  = window.scrollY > 40 ? (l ? '#fff' : 'rgba(3,13,23,.98)') : (l ? '#fff' : 'rgba(3,13,23,.0)');
  n.style.borderColor = window.scrollY > 40 ? (l ? '#e5e7eb' : 'rgba(255,255,255,.1)') : (l ? '#e5e7eb' : 'transparent');
}, { passive: true });

function openSearch()  { const ov = document.getElementById('search-overlay'); if (ov) { ov.style.display = 'flex'; setTimeout(() => document.getElementById('search-input')?.focus(), 50); } }
function closeSearch() { const ov = document.getElementById('search-overlay'); if (ov) ov.style.display = 'none'; }
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeSearch(); });

/* ── Period tabs ── */
const PERIODS = {
  '10':  { ar:'آخر 10 أيام', pod:'المتصدرون الثلاثة · آخر 10 أيام' },
  '30':  { ar:'آخر 30 يوم',  pod:'المتصدرون الثلاثة · آخر 30 يوم' },
  'all': { ar:'كل الوقت',    pod:'المتصدرون الثلاثة · كل الوقت' },
};
function setPeriod(btn, key) {
  document.querySelectorAll('.ptab').forEach(b => b.classList.remove('on'));
  btn.classList.add('on');
  const p = PERIODS[key];
  const ml = document.getElementById('my-period');   if (ml) ml.textContent = p.ar;
  const pl = document.getElementById('pod-lbl');     if (pl) pl.textContent = p.pod;
}

/* ── Animate rank rows on scroll ── */
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.style.opacity = '1';
      e.target.style.transform = 'translateY(0)';
      obs.unobserve(e.target);
    }
  });
}, { threshold: 0.08 });
document.querySelectorAll('.rank-row').forEach(r => obs.observe(r));
</script>
</body>
</html>