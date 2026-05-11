<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>محفظتي — هلا كارير</title>
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
*, *::before, *::after { box-sizing: border-box; }
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
html.light .grad { -webkit-text-fill-color:transparent !important; }

/* ── Light mode overrides ── */
html.light * { box-shadow:none !important; }
html.light body { background:#fff !important; color:#111827 !important; }
html.light section, html.light main { background:#fff !important; }
html.light #hc-nav { background:#fff !important; border-color:#e5e7eb !important; }
html.light #hc-mob { background:#fff !important; border-color:#e5e7eb !important; }
html.light .card { background:#fff !important; border-color:rgba(0,212,184,.15) !important; }
html.light .card-inner { background:rgba(0,212,184,.03) !important; }
html.light .icon-box { background:rgba(0,212,184,.06) !important; border-color:rgba(0,212,184,.12) !important; }
html.light .bal-num { color:var(--w) !important; }
html.light .muted { color:var(--w40) !important; }
html.light .semi { color:var(--w60) !important; }
html.light .strong { color:var(--w) !important; }
html.light .comm-box { background:rgba(0,212,184,.04) !important; border-color:rgba(0,212,184,.1) !important; }
html.light .comm-zero { color:var(--w40) !important; }
html.light .quick-btn { background:#fff !important; border-color:rgba(0,212,184,.15) !important; }
html.light .quick-btn:hover { border-color:rgba(0,212,184,.3) !important; }
html.light .rate-pill { background:rgba(0,212,184,.06) !important; border-color:rgba(0,212,184,.18) !important; color:var(--w) !important; }
html.light .rate-label { color:var(--td) !important; }
html.light .w-tabs { background:rgba(0,212,184,.05) !important; border-color:rgba(0,212,184,.15) !important; }
html.light .w-tab { color:var(--w60) !important; }
html.light .w-tab.on { background:#fff !important; color:var(--w) !important; }
html.light .hc-input { background:#fff !important; border-color:rgba(0,212,184,.25) !important; color:var(--w) !important; }
html.light .hc-input::placeholder { color:var(--w40) !important; }
html.light .hc-select { background:#fff !important; border-color:rgba(0,212,184,.25) !important; color:var(--w) !important; }
html.light .btn-g { color:var(--w) !important; border-color:rgba(0,212,184,.25) !important; background:rgba(0,212,184,.06) !important; }
html.light .pop-box { background:#fff !important; border-color:rgba(0,212,184,.22) !important; }
html.light .pop-close { background:#f3f4f6 !important; border-color:#e5e7eb !important; color:#6b7280 !important; }
html.light .preview-box { background:rgba(0,212,184,.04) !important; border-color:rgba(0,212,184,.15) !important; }
html.light .divider { border-color:rgba(0,212,184,.1) !important; }
html.light .tx-head { background:rgba(0,212,184,.04) !important; }
html.light .tx-head th { color:var(--w60) !important; border-color:rgba(0,212,184,.12) !important; }
html.light .tx-tr:hover { background:rgba(0,212,184,.03) !important; }
html.light .tx-tr { border-color:rgba(0,212,184,.08) !important; }
html.light .w-method { background:#fff !important; border-color:rgba(0,212,184,.15) !important; color:var(--w60) !important; }
html.light .w-method.on { border-color:var(--tl) !important; background:rgba(0,212,184,.08) !important; color:var(--td) !important; }
html.light [style*="color:#ef4444"] { color:#dc2626 !important; }
html.light [style*="color:#22c55e"] { color:#16a34a !important; }
html.light [style*="background:rgba(239,68,68"] { background:rgba(220,38,38,.08) !important; }
html.light [style*="background:rgba(34,197,94"] { background:rgba(22,163,74,.08) !important; }
html.light [style*="color:rgba(251,191,36"] { color:#d97706 !important; }
html.light [style*="background:rgba(251,191,36"] { background:rgba(251,191,36,.08) !important; }
html.light [style*="color:rgba(74,222,128"] { color:#16a34a !important; }

/* ── Cards ── */
.card { border-radius:1.1rem; border:1px solid var(--ta12);
  background:rgba(5,14,26,.8); overflow:hidden;
  transition:border-color .2s, transform .2s; }
.card-hover:hover { border-color:var(--ta20); transform:translateY(-2px); }
.icon-box { width:38px; height:38px; border-radius:.7rem; flex-shrink:0;
  background:var(--ta08); border:1px solid var(--ta12);
  display:flex; align-items:center; justify-content:center; }
.divider { border:none; border-top:1px solid var(--ta08); margin:0; }
.muted { color:var(--w40); }
.semi { color:var(--w60); }
.strong { color:var(--w); }
.bal-num { font-family:'Bricolage Grotesque',sans-serif; font-weight:800;
  font-size:2rem; line-height:1; color:var(--w); }
.bal-unit { font-size:.68rem; color:var(--w40); margin-top:.3rem; }
.accent-bar { height:2px; border-radius:999px;
  background:linear-gradient(90deg,var(--tl),var(--td),transparent); }
.comm-box { border-radius:.8rem; padding:.9rem 1rem; text-align:center;
  border:1px solid var(--ta08); background:rgba(5,14,26,.5); }
.comm-zero { font-family:'Bricolage Grotesque',sans-serif; font-weight:700;
  font-size:1.1rem; color:var(--w40); }
.quick-btn { display:flex; align-items:center; gap:.85rem; padding:1.1rem 1.25rem;
  cursor:pointer; text-align:start; width:100%;
  background:rgba(5,14,26,.7); border:1px solid var(--ta12); border-radius:1.1rem;
  font-family:'Cairo',sans-serif; transition:border-color .2s, transform .2s; }
.quick-btn:hover { border-color:var(--ta20); transform:translateY(-2px); }

/* ── Rate bar ── */
.rate-bar { background:rgba(0,212,184,.05); border-bottom:1px solid var(--ta12); }
.rate-pill { display:inline-flex; align-items:center; gap:.4rem;
  padding:.28rem .75rem; border-radius:999px;
  background:var(--ta08); border:1px solid var(--ta12);
  font-size:.72rem; font-weight:700; color:var(--w80); }
.rate-label { font-size:.7rem; font-weight:700; color:var(--td); }

/* ── Tabs ── */
.w-tabs { display:flex; gap:.35rem; padding:.35rem;
  border-radius:.9rem; background:rgba(5,14,26,.7);
  border:1px solid var(--ta12); width:fit-content; }
.w-tab { padding:.5rem 1rem; border-radius:.6rem;
  font-size:.82rem; font-weight:700; cursor:pointer;
  background:transparent; border:none; color:var(--w40);
  font-family:'Cairo',sans-serif; transition:all .18s;
  white-space:nowrap; display:flex; align-items:center; gap:.45rem; }
.w-tab.on { background:rgba(5,14,26,.95); color:var(--w); }
.w-panel { display:none; }
.w-panel.show { display:block; }

/* ── Inputs ── */
.hc-input { background:rgba(5,14,26,.6); border:1.5px solid var(--ta15);
  border-radius:.75rem; color:var(--w); padding:.75rem 1rem;
  font-family:'Cairo',sans-serif; font-size:.9rem;
  outline:none; width:100%; transition:border-color .18s; -webkit-appearance:none; }
.hc-input:focus { border-color:var(--t); }
.hc-input::placeholder { color:var(--w40); }
.hc-num { font-family:'Bricolage Grotesque',sans-serif; font-size:1.2rem; font-weight:700; }
.hc-select { background:rgba(5,14,26,.6); border:1.5px solid var(--ta15);
  border-radius:.75rem; color:var(--w); padding:.75rem 1rem;
  font-family:'Cairo',sans-serif; font-size:.88rem;
  outline:none; cursor:pointer; width:100%; -webkit-appearance:none; appearance:none;
  background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' fill='none' stroke='rgba(0,212,184,.5)' stroke-width='2' stroke-linecap='round' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
  background-repeat:no-repeat; background-position:left 12px center; background-size:14px; padding-left:2.2rem; }
html[dir=rtl] .hc-select { background-position:right 12px center; padding-left:.9rem; padding-right:2.2rem; }
.hc-select:focus { border-color:var(--t); }

/* ── Buttons ── */
.btn-p { background:linear-gradient(135deg,#2de0ca,#009e85); color:#020e18;
  font-weight:700; border-radius:.8rem; cursor:pointer; border:none;
  display:inline-flex; align-items:center; justify-content:center; gap:.5rem;
  font-family:'Cairo',sans-serif; transition:opacity .18s, transform .18s; }
.btn-p:hover { opacity:.9; transform:scale(1.01); }
.btn-g { border:1px solid var(--ta20); color:var(--w80); background:var(--ta08);
  border-radius:.8rem; font-weight:600; cursor:pointer;
  display:inline-flex; align-items:center; justify-content:center; gap:.5rem;
  font-family:'Cairo',sans-serif; transition:all .18s; }
.btn-g:hover { border-color:var(--ta30,rgba(0,212,184,.28)); background:var(--ta12); }

/* ── Popups ── */
.pop-ov { position:fixed; inset:0; background:rgba(0,0,0,.72); z-index:900;
  opacity:0; visibility:hidden; transition:opacity .22s, visibility .22s;
  backdrop-filter:blur(8px); -webkit-backdrop-filter:blur(8px);
  display:flex; align-items:center; justify-content:center; padding:1rem; }
.pop-ov.open { opacity:1; visibility:visible; }
.pop-box { background:var(--bg2); border:1px solid var(--ta20); border-radius:1.4rem;
  width:100%; max-width:460px; position:relative; overflow:hidden;
  transform:translateY(16px) scale(.97);
  transition:transform .28s cubic-bezier(.22,1,.36,1); }
.pop-ov.open .pop-box { transform:translateY(0) scale(1); }
.pop-top-line { position:absolute; top:0; left:0; right:0; height:2.5px;
  background:linear-gradient(90deg,transparent,#2de0ca,#009e85,transparent); }
.pop-head { display:flex; align-items:center; justify-content:space-between;
  padding:1.35rem 1.5rem; border-bottom:1px solid var(--ta08); }
.pop-body { padding:1.5rem; display:flex; flex-direction:column; gap:1rem; }
.pop-close { width:30px; height:30px; border-radius:50%; flex-shrink:0;
  border:1px solid var(--ta12); background:var(--ta08); cursor:pointer;
  display:flex; align-items:center; justify-content:center;
  color:var(--w60); transition:background .15s; }
.pop-close:hover { background:var(--ta15); }
html.light .pop-close { background:#f3f4f6 !important; border-color:#e5e7eb !important; color:#6b7280 !important; }

/* ── Preview box ── */
.preview-box { border-radius:.85rem; padding:1rem 1.1rem;
  background:rgba(0,212,184,.05); border:1px solid var(--ta12); display:none; }
.prev-row { display:flex; justify-content:space-between; align-items:center; padding:.3rem 0; }
.prev-row + .prev-row { border-top:1px solid var(--ta08); }

/* ── Withdraw methods ── */
.w-method { display:flex; align-items:center; gap:.55rem; padding:.65rem .85rem;
  border-radius:.7rem; border:1px solid var(--ta12); background:rgba(5,14,26,.5);
  color:var(--w60); font-size:.8rem; font-weight:600; cursor:pointer;
  font-family:'Cairo',sans-serif; transition:all .18s; width:100%; text-align:start; }
.w-method:hover { border-color:var(--ta20); color:var(--w80); }
.w-method.on { border-color:var(--tl); background:rgba(0,212,184,.1); color:var(--tl); }

/* ── TX table ── */
.tx-tbl { width:100%; border-collapse:collapse; }
.tx-head { background:rgba(0,212,184,.04); }
.tx-head th { padding:.75rem 1rem; font-size:.62rem; font-weight:700;
  letter-spacing:.12em; text-transform:uppercase;
  text-align:start; color:var(--w40);
  border-bottom:1px solid var(--ta12); }
.tx-head th:last-child { text-align:end; }
.tx-tr { border-bottom:1px solid rgba(0,212,184,.07); transition:background .15s; }
.tx-tr:last-child { border-bottom:none; }
.tx-tr:hover { background:rgba(0,212,184,.03); }
.tx-td { padding:.85rem 1rem; vertical-align:middle; }

/* ── Animations ── */
@keyframes fadeup { from { opacity:0; transform:translateY(14px); } to { opacity:1; transform:translateY(0); } }
.fi  { animation:fadeup .45s ease both; }
.fi2 { animation:fadeup .45s .08s ease both; }
.fi3 { animation:fadeup .45s .15s ease both; }

/* ── Scroll bar ── */
#spbar { position:fixed; top:0; left:0; height:2px; width:0; z-index:9999;
  background:linear-gradient(90deg,#2de0ca,#009e85); transition:width .1s; }

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
<section style="padding:6.5rem 0 1.5rem;position:relative;overflow:hidden">
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse 55% 50% at 50% -10%,rgba(0,212,184,.09),transparent 60%);pointer-events:none"></div>
  <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(0,212,184,.055) 1px,transparent 1px);background-size:28px 28px;opacity:.55;pointer-events:none"></div>
  <div style="position:absolute;top:0;left:0;right:0;height:1px;background:linear-gradient(90deg,transparent,rgba(0,212,184,.4) 35%,rgba(0,212,184,.4) 65%,transparent)"></div>
  <div style="max-width:980px;margin:0 auto;padding:0 1.5rem;position:relative;z-index:2">
    <div style="display:flex;flex-wrap:wrap;align-items:flex-end;justify-content:space-between;gap:1.25rem">
      <div class="fi">
        <div style="font-size:.65rem;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:var(--td);margin-bottom:.6rem">هلا كارير · محفظتي</div>
        <h1 style="font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:clamp(2rem,3.5vw,2.8rem);color:var(--w);line-height:1.06;margin:0 0 .5rem">محفظتي</h1>
        <p class="semi" style="font-size:.9rem;max-width:380px;line-height:1.75;margin:0">استخدم عملتك، طوّر مستواك، وشارك في التحديات الأقوى</p>
      </div>
      <button class="btn-p fi2" style="padding:.75rem 1.5rem;font-size:.88rem" onclick="openPop('withdraw')">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M12 12v4M10 14h4"/></svg> اشحن الآن
      </button>
    </div>
  </div>
</section>

<!-- ═══ RATE BAR ═══ -->
<div class="rate-bar">
  <div style="max-width:980px;margin:0 auto;padding:.65rem 1.5rem;display:flex;flex-wrap:wrap;align-items:center;gap:.5rem .65rem">
    <span class="rate-label">$1 = </span>
    <div class="rate-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fbbf24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg> 400 نجمة</div>
    <div class="rate-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#c084fc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 5H9a4 4 0 0 0-4 4v2a2 2 0 0 1 0 4v2a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4v-2a2 2 0 0 1 0-4V9a4 4 0 0 0-4-4z"/></svg> 5 تذاكر</div>
    <div class="rate-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2de0ca" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3" fill="#2de0ca" stroke="none"/></svg> 100 نقطة</div>
  </div>
</div>

<!-- ═══ MAIN ═══ -->
<main style="max-width:980px;margin:0 auto;padding:2rem 1.5rem 5rem;position:relative;z-index:2">

  <!-- TABS -->
  <div style="overflow-x:auto;margin-bottom:2rem" class="fi2">
    <div class="w-tabs">
      <button class="w-tab on" id="t-overview" onclick="showTab('overview')"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="15" rx="2"/><path d="M2 10h20"/><circle cx="17" cy="15" r="1.5" fill="var(--tl)" stroke="none"/></svg> رصيدي</button>
      <button class="w-tab" id="t-withdrawals" onclick="showTab('withdrawals')"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v13M5 12l7 7 7-7"/><path d="M3 21h18"/></svg> المسحوبات</button>
      <button class="w-tab" id="t-txns" onclick="showTab('txns')"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 12h6M9 16h4"/></svg> المعاملات</button>
    </div>
  </div>

  <!-- ══ PANEL: رصيدي ══ -->
  <div id="p-overview" class="w-panel show">

    <!-- Balance cards 3-col + points full -->
    <div id="bal-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;margin-bottom:1.1rem">

      <!-- Dollar -->
      <div class="card card-hover" style="padding:1.35rem">
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:1rem">
          <div class="icon-box"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
          <span style="font-size:.6rem;font-weight:700;padding:.2rem .6rem;border-radius:999px;background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)">USD</span>
        </div>
        <div class="bal-num">3,481.10</div>
        <div class="bal-unit">دولار أمريكي</div>
        <div class="accent-bar" style="margin-top:1rem"></div>
      </div>

      <!-- Stars -->
      <div class="card card-hover" style="padding:1.35rem">
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:1rem">
          <div class="icon-box"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
          <span style="font-size:.6rem;font-weight:700;padding:.2rem .6rem;border-radius:999px;background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)">Stars</span>
        </div>
        <div class="bal-num">2,000</div>
        <div class="bal-unit">نجوم</div>
        <div class="accent-bar" style="margin-top:1rem"></div>
      </div>

      <!-- Tickets -->
      <div class="card card-hover" style="padding:1.35rem">
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:1rem">
          <div class="icon-box"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 5H9a4 4 0 0 0-4 4v2a2 2 0 0 1 0 4v2a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4v-2a2 2 0 0 1 0-4V9a4 4 0 0 0-4-4z"/></svg></div>
          <span style="font-size:.6rem;font-weight:700;padding:.2rem .6rem;border-radius:999px;background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)">Tickets</span>
        </div>
        <div class="bal-num">4,932</div>
        <div class="bal-unit">تذاكر</div>
        <div class="accent-bar" style="margin-top:1rem"></div>
      </div>
    </div>

    <!-- Points full width -->
    <div class="card" style="padding:1.35rem 1.5rem;margin-bottom:1.1rem;display:flex;align-items:center;flex-wrap:wrap;gap:1rem 2rem">
      <div style="display:flex;align-items:center;gap:.9rem">
        <div class="icon-box" style="width:42px;height:42px;border-radius:.8rem"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3" fill="var(--tl)" stroke="none"/></svg></div>
        <div>
          <div class="bal-num">408</div>
          <div class="bal-unit">نقاط</div>
        </div>
      </div>
      <div style="margin-inline-start:auto;display:flex;gap:.65rem">
        <button class="btn-p" style="padding:.6rem 1.25rem;font-size:.82rem" onclick="openPop('withdraw')">اشحن</button>
        <button class="btn-g" style="padding:.6rem 1.25rem;font-size:.82rem" onclick="openPop('convert')">تحويل</button>
      </div>
    </div>

    <!-- Commissions + Quick actions -->
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem" id="bottom-grid">

      <!-- Commissions -->
      <div class="card">
        <div style="display:flex;align-items:center;gap:.6rem;padding:1rem 1.25rem">
          <div class="icon-box"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 0 0 4H8M12 6v2M12 16v2"/></svg></div>
          <span class="strong" style="font-size:.82rem;font-weight:700">العمولات</span>
        </div>
        <hr class="divider">
        <div style="padding:1rem 1.25rem;display:grid;grid-template-columns:1fr 1fr;gap:.65rem">
          <div class="comm-box"><div class="muted" style="font-size:.6rem;margin-bottom:.4rem">جاهزة للسحب</div><div class="comm-zero">0 <span style="font-size:.62rem">$</span></div></div>
          <div class="comm-box"><div class="muted" style="font-size:.6rem;margin-bottom:.4rem">قيد التحويل</div><div class="comm-zero">0 <span style="font-size:.62rem">$</span></div></div>
          <div class="comm-box"><div class="muted" style="font-size:.6rem;margin-bottom:.4rem">مستلمة</div><div class="comm-zero">0 <span style="font-size:.62rem">$</span></div></div>
          <div class="comm-box"><div class="muted" style="font-size:.6rem;margin-bottom:.4rem">إجمالية</div><div class="comm-zero">0 <span style="font-size:.62rem">$</span></div></div>
        </div>
        <div style="padding:0 1.25rem 1.1rem">
          <button class="btn-g" style="width:100%;padding:.65rem;font-size:.82rem" onclick="openPop('withdraw')"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v13M5 12l7 7 7-7"/><path d="M3 21h18"/></svg> سحب الأرباح</button>
        </div>
      </div>

      <!-- Quick actions -->
      <div style="display:flex;flex-direction:column;gap:.75rem">
        <button class="quick-btn" onclick="openPop('send')">
          <div class="icon-box"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg></div>
          <div style="flex:1;text-align:start">
            <div class="strong" style="font-weight:700;font-size:.9rem">إرسال حوالة</div>
            <div class="muted" style="font-size:.7rem;margin-top:.15rem">أرسل للمستخدمين بالكود</div>
          </div>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--w40)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
        </button>
        <button class="quick-btn" onclick="openPop('convert')">
          <div class="icon-box"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4v6h6M20 20v-6h-6"/><path d="M20 10a8 8 0 0 0-14.93-2.36M4 14a8 8 0 0 0 14.93 2.36"/></svg></div>
          <div style="flex:1;text-align:start">
            <div class="strong" style="font-weight:700;font-size:.9rem">تحويل العملة</div>
            <div class="muted" style="font-size:.7rem;margin-top:.15rem">بين العملات برسوم 5%</div>
          </div>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--w40)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
        </button>
      </div>

    </div>
  </div>

  <!-- ══ PANEL: المسحوبات ══ -->
  <div id="p-withdrawals" class="w-panel">
    <div class="card">
      <div style="display:flex;align-items:center;justify-content:space-between;padding:1.25rem 1.5rem">
        <div>
          <div class="strong" style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700">المسحوبات</div>
          <div class="muted" style="font-size:.72rem;margin-top:.2rem">متاح للسحب: <span style="color:#22c55e;font-weight:700">$0.00</span></div>
        </div>
        <button class="btn-p" style="padding:.6rem 1.25rem;font-size:.82rem" onclick="openPop('withdraw')"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v13M5 12l7 7 7-7"/><path d="M3 21h18"/></svg> سحب الأرباح</button>
      </div>
      <hr class="divider">
      <div style="text-align:center;padding:4rem 1.5rem">
        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.15)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
        <div class="semi" style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:1rem;margin-top:.75rem;margin-bottom:.35rem">لا توجد مسحوبات</div>
        <div class="muted" style="font-size:.82rem">ابدأ في كسب العمولات أولاً</div>
      </div>
    </div>
  </div>

  <!-- ══ PANEL: المعاملات ══ -->
  <div id="p-txns" class="w-panel">
    <div class="card">
      <div style="display:flex;align-items:center;justify-content:space-between;padding:1.25rem 1.5rem">
        <div class="strong" style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700">آخر المعاملات</div>
        <a href="#" style="font-size:.78rem;font-weight:700;color:var(--tl)">عرض الكل ←</a>
      </div>
      <hr class="divider">
      <div style="overflow-x:auto">
        <table class="tx-tbl">
          <thead class="tx-head"><tr>
            <th>#</th><th>العملة</th>
            <th style="text-align:center">الكمية</th>
            <th>من / إلى</th><th>السبب</th>
            <th>ملاحظات</th>
            <th style="text-align:end">التاريخ</th>
          </tr></thead>
          <tbody><tr class="tx-tr">
      <td class="tx-td" style="color:var(--w40);font-family:'Bricolage Grotesque',sans-serif;font-size:.68rem">#1160029</td>
      <td class="tx-td"><span style="font-size:.75rem;font-weight:600;color:var(--w)">تذاكر</span></td>
      <td class="tx-td" style="text-align:center"><span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:.95rem;color:#ef4444">-3</span></td>
      <td class="tx-td"><div style="font-size:.72rem;font-weight:600;color:var(--w)">Vital System</div><div style="font-size:.6rem;color:var(--w40)">← عمار نبيل</div></td>
      <td class="tx-td"><span style="font-size:.65rem;font-weight:700;padding:.18rem .6rem;border-radius:999px;background:rgba(239,68,68,.1);color:#ef4444">رسوم</span></td>
      <td class="tx-td" style="max-width:140px"><span style="font-size:.7rem;color:var(--w60);white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:block;max-width:140px">Generating CV prompt</span></td>
      <td class="tx-td" style="text-align:end;white-space:nowrap"><span style="font-size:.65rem;color:var(--w40)">٦ أبريل — ٧:٤٠م</span></td>
    </tr><tr class="tx-tr">
      <td class="tx-td" style="color:var(--w40);font-family:'Bricolage Grotesque',sans-serif;font-size:.68rem">#1160028</td>
      <td class="tx-td"><span style="font-size:.75rem;font-weight:600;color:var(--w)">تذاكر</span></td>
      <td class="tx-td" style="text-align:center"><span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:.95rem;color:#ef4444">-10</span></td>
      <td class="tx-td"><div style="font-size:.72rem;font-weight:600;color:var(--w)">Vital System</div><div style="font-size:.6rem;color:var(--w40)">← عمار نبيل</div></td>
      <td class="tx-td"><span style="font-size:.65rem;font-weight:700;padding:.18rem .6rem;border-radius:999px;background:rgba(239,68,68,.1);color:#ef4444">رسوم</span></td>
      <td class="tx-td" style="max-width:140px"><span style="font-size:.7rem;color:var(--w60);white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:block;max-width:140px">إلغاء الاستعداد في ساحة الحرب</span></td>
      <td class="tx-td" style="text-align:end;white-space:nowrap"><span style="font-size:.65rem;color:var(--w40)">٦ أبريل — ٧:١٤م</span></td>
    </tr><tr class="tx-tr">
      <td class="tx-td" style="color:var(--w40);font-family:'Bricolage Grotesque',sans-serif;font-size:.68rem">#1160027</td>
      <td class="tx-td"><span style="font-size:.75rem;font-weight:600;color:var(--w)">تذاكر</span></td>
      <td class="tx-td" style="text-align:center"><span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:.95rem;color:#22c55e">+2</span></td>
      <td class="tx-td"><div style="font-size:.72rem;font-weight:600;color:var(--w)">Vital System</div><div style="font-size:.6rem;color:var(--w40)">← عمار نبيل</div></td>
      <td class="tx-td"><span style="font-size:.65rem;font-weight:700;padding:.18rem .6rem;border-radius:999px;background:rgba(34,197,94,.1);color:#22c55e">معاملة</span></td>
      <td class="tx-td" style="max-width:140px"><span style="font-size:.7rem;color:var(--w60);white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:block;max-width:140px">ربحت المعركة #26761</span></td>
      <td class="tx-td" style="text-align:end;white-space:nowrap"><span style="font-size:.65rem;color:var(--w40)">٦ أبريل — ٧:١٤م</span></td>
    </tr><tr class="tx-tr">
      <td class="tx-td" style="color:var(--w40);font-family:'Bricolage Grotesque',sans-serif;font-size:.68rem">#1149590</td>
      <td class="tx-td"><span style="font-size:.75rem;font-weight:600;color:var(--w)">نجوم</span></td>
      <td class="tx-td" style="text-align:center"><span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:.95rem;color:#22c55e">+1000</span></td>
      <td class="tx-td"><div style="font-size:.72rem;font-weight:600;color:var(--w)">Vital System</div><div style="font-size:.6rem;color:var(--w40)">← عمار نبيل</div></td>
      <td class="tx-td"><span style="font-size:.65rem;font-weight:700;padding:.18rem .6rem;border-radius:999px;background:rgba(34,197,94,.1);color:#22c55e">مكافأة</span></td>
      <td class="tx-td" style="max-width:140px"><span style="font-size:.7rem;color:var(--w60);white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:block;max-width:140px">eid bonus5</span></td>
      <td class="tx-td" style="text-align:end;white-space:nowrap"><span style="font-size:.65rem;color:var(--w40)">١٩ مارس — ١٠:٢٨م</span></td>
    </tr><tr class="tx-tr">
      <td class="tx-td" style="color:var(--w40);font-family:'Bricolage Grotesque',sans-serif;font-size:.68rem">#1149589</td>
      <td class="tx-td"><span style="font-size:.75rem;font-weight:600;color:var(--w)">نجوم</span></td>
      <td class="tx-td" style="text-align:center"><span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:.95rem;color:#22c55e">+1000</span></td>
      <td class="tx-td"><div style="font-size:.72rem;font-weight:600;color:var(--w)">Vital System</div><div style="font-size:.6rem;color:var(--w40)">← عمار نبيل</div></td>
      <td class="tx-td"><span style="font-size:.65rem;font-weight:700;padding:.18rem .6rem;border-radius:999px;background:rgba(34,197,94,.1);color:#22c55e">مكافأة</span></td>
      <td class="tx-td" style="max-width:140px"><span style="font-size:.7rem;color:var(--w60);white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:block;max-width:140px">eid bonus4</span></td>
      <td class="tx-td" style="text-align:end;white-space:nowrap"><span style="font-size:.65rem;color:var(--w40)">١٩ مارس — ١٠:٠٨م</span></td>
    </tr></tbody>
        </table>
      </div>
      <hr class="divider">
      <div style="display:flex;justify-content:center;padding:1rem 1.5rem">
        <button class="btn-g" style="padding:.6rem 1.75rem;font-size:.82rem">إظهار الكل</button>
      </div>
    </div>
  </div>

</main>

<!-- ════════ POPUPS ════════ -->

<!-- SEND -->
<div class="pop-ov" id="pop-send" onclick="if(event.target===this)closePop('send')">
  <div class="pop-box">
    <div class="pop-top-line"></div>
    <div class="pop-head">
      <div style="display:flex;align-items:center;gap:.75rem">
        <div class="icon-box"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg></div>
        <div>
          <div class="strong" style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:.98rem">إرسال حوالة</div>
          <div class="muted" style="font-size:.68rem;margin-top:.1rem">أدخل المبلغ والعملة وكود المستلم</div>
        </div>
      </div>
      <button class="pop-close" onclick="closePop('send')"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18M6 6l12 12"/></svg></button>
    </div>
    <div class="pop-body">
      <div>
        <label style="font-size:.7rem;font-weight:700;display:flex;align-items:center;gap:.4rem;margin-bottom:.45rem" class="semi"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--w60)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"/></svg> كود المستلم</label>
        <input class="hc-input" type="text" placeholder="HC-XXXXXX" id="s-code">
      </div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:.75rem">
        <div>
          <label class="semi" style="font-size:.7rem;font-weight:700;display:block;margin-bottom:.45rem">الكمية</label>
          <input class="hc-input hc-num" type="number" placeholder="0" id="s-amt" oninput="calcSend()">
        </div>
        <div>
          <label class="semi" style="font-size:.7rem;font-weight:700;display:block;margin-bottom:.45rem">العملة</label>
          <select class="hc-select" id="s-cur" onchange="calcSend()">
            <option value="15">دولار — 15%</option>
            <option value="85">نجوم — 85%</option>
            <option value="0">تذاكر — 0%</option>
            <option value="15">نقاط — 15%</option>
          </select>
        </div>
      </div>
      <div class="preview-box" id="s-prev">
        <div class="prev-row"><span class="semi" style="font-size:.78rem">المُرسَل</span><span class="strong" style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700" id="sp-amt">—</span></div>
        <div class="prev-row"><span class="semi" style="font-size:.78rem">الضريبة</span><span style="font-weight:700;color:#ef4444;font-size:.85rem" id="sp-tax">—</span></div>
        <div class="prev-row"><span class="strong" style="font-size:.82rem;font-weight:700">يستلم</span><span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:1.1rem;color:var(--tl)" id="sp-net">—</span></div>
      </div>
      <div style="font-size:.7rem;padding:.75rem;border-radius:.65rem;background:rgba(251,191,36,.08);border:1px solid rgba(251,191,36,.2);color:rgba(251,191,36,.9)">رسوم التحويل 0–85% حسب نوع العملة</div>
      <button class="btn-p" style="width:100%;padding:.85rem;font-size:.9rem" onclick="doSend()"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg> إرسال الحوالة</button>
    </div>
  </div>
</div>

<!-- CONVERT -->
<div class="pop-ov" id="pop-convert" onclick="if(event.target===this)closePop('convert')">
  <div class="pop-box">
    <div class="pop-top-line"></div>
    <div class="pop-head">
      <div style="display:flex;align-items:center;gap:.75rem">
        <div class="icon-box"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4v6h6M20 20v-6h-6"/><path d="M20 10a8 8 0 0 0-14.93-2.36M4 14a8 8 0 0 0 14.93 2.36"/></svg></div>
        <div>
          <div class="strong" style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:.98rem">تحويل العملة</div>
          <div class="muted" style="font-size:.68rem;margin-top:.1rem">حوّل بين العملات برسوم 5%</div>
        </div>
      </div>
      <button class="pop-close" onclick="closePop('convert')"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18M6 6l12 12"/></svg></button>
    </div>
    <div class="pop-body">
      <div>
        <label class="semi" style="font-size:.7rem;font-weight:700;display:block;margin-bottom:.45rem">الكمية</label>
        <input class="hc-input hc-num" type="number" placeholder="0" id="c-amt" oninput="calcConv()">
      </div>
      <div style="display:grid;grid-template-columns:1fr 38px 1fr;gap:.65rem;align-items:end">
        <div>
          <label class="semi" style="font-size:.7rem;font-weight:700;display:block;margin-bottom:.45rem">من</label>
          <select class="hc-select" id="c-from" onchange="calcConv()">
            <option value="usd">دولار</option>
            <option value="stars">نجوم</option>
            <option value="tickets">تذاكر</option>
            <option value="points">نقاط</option>
          </select>
        </div>
        <div style="padding-bottom:.15rem;display:flex;justify-content:center">
          <button onclick="swapCur()" style="width:34px;height:34px;border-radius:50%;background:var(--ta08);border:1px solid var(--ta15);cursor:pointer;display:flex;align-items:center;justify-content:center;transition:background .18s" onmouseover="this.style.background='var(--ta15)'" onmouseout="this.style.background='var(--ta08)'"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3 5 6l3 3M5 6h14M16 21l3-3-3-3M19 18H5"/></svg></button>
        </div>
        <div>
          <label class="semi" style="font-size:.7rem;font-weight:700;display:block;margin-bottom:.45rem">إلى</label>
          <select class="hc-select" id="c-to" onchange="calcConv()">
            <option value="stars">نجوم</option>
            <option value="usd">دولار</option>
            <option value="tickets">تذاكر</option>
            <option value="points">نقاط</option>
          </select>
        </div>
      </div>
      <div class="preview-box" id="c-prev">
        <div class="prev-row"><span class="semi" style="font-size:.78rem">المبلغ</span><span class="strong" style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700" id="cp-from">—</span></div>
        <div class="prev-row"><span class="semi" style="font-size:.78rem">رسوم 5%</span><span style="font-weight:700;color:#ef4444;font-size:.85rem" id="cp-fee">—</span></div>
        <div class="prev-row"><span class="strong" style="font-size:.82rem;font-weight:700">تحصل على</span><span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:1.1rem;color:var(--tl)" id="cp-to">—</span></div>
      </div>
      <button class="btn-p" style="width:100%;padding:.85rem;font-size:.9rem" onclick="doConvert()"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4v6h6M20 20v-6h-6"/><path d="M20 10a8 8 0 0 0-14.93-2.36M4 14a8 8 0 0 0 14.93 2.36"/></svg> تأكيد التحويل</button>
    </div>
  </div>
</div>

<!-- WITHDRAW -->
<div class="pop-ov" id="pop-withdraw" onclick="if(event.target===this)closePop('withdraw')">
  <div class="pop-box">
    <div class="pop-top-line"></div>
    <div class="pop-head">
      <div style="display:flex;align-items:center;gap:.75rem">
        <div class="icon-box"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg></div>
        <div>
          <div class="strong" style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:.98rem">سحب الأرباح</div>
          <div class="muted" style="font-size:.68rem;margin-top:.1rem">رصيدك المتاح: <span style="color:#22c55e;font-weight:700">$0.00</span></div>
        </div>
      </div>
      <button class="pop-close" onclick="closePop('withdraw')"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18M6 6l12 12"/></svg></button>
    </div>
    <div class="pop-body">
      <div>
        <label style="font-size:.7rem;font-weight:700;display:flex;align-items:center;gap:.4rem;margin-bottom:.45rem" class="semi"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--w60)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v15M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg> قيمة السحب ($)</label>
        <input class="hc-input hc-num" type="number" placeholder="0.00" id="w-amt" oninput="calcWithdraw()">
      </div>
      <div>
        <label style="font-size:.7rem;font-weight:700;display:flex;align-items:center;gap:.4rem;margin-bottom:.45rem" class="semi"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--w60)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/><path d="M6 15h4M14 15h4"/></svg> رقم الحساب</label>
        <input class="hc-input" type="text" placeholder="01X-XXXXXXXXX" id="w-acct">
      </div>
      <div>
        <label class="semi" style="font-size:.7rem;font-weight:700;display:block;margin-bottom:.65rem">طريقة التحويل</label>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:.5rem">
          <button class="w-method on" onclick="pickMethod(this)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg> محفظة موبايل</button>
          <button class="w-method" onclick="pickMethod(this)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 22h18M3 10h18M5 10V6l7-4 7 4v4M5 10v12M19 10v12M9 22v-6h6v6"/></svg> حساب بنكي</button>
          <button class="w-method" onclick="pickMethod(this)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg> انستا باي</button>
          <button class="w-method" onclick="pickMethod(this)"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg> أخرى</button>
        </div>
      </div>
      <div class="preview-box" id="w-prev">
        <div class="prev-row"><span class="semi" style="font-size:.78rem">المبلغ المطلوب</span><span class="strong" style="font-family:'Bricolage Grotesque',sans-serif;font-weight:700" id="wp-amt">—</span></div>
        <div class="prev-row"><span class="semi" style="font-size:.78rem">رسوم 1%</span><span style="font-weight:700;color:#ef4444;font-size:.85rem" id="wp-fee">—</span></div>
        <div class="prev-row"><span class="strong" style="font-size:.82rem;font-weight:700">تحصل على</span><span style="font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:1.1rem;color:var(--tl)" id="wp-net">—</span></div>
      </div>
      <div style="font-size:.7rem;padding:.75rem;border-radius:.65rem;background:rgba(34,197,94,.07);border:1px solid rgba(34,197,94,.2);color:rgba(34,197,94,.9)">رسوم العملية: 1% من المبلغ (حد أدنى $0.50)</div>
      <button class="btn-p" style="width:100%;padding:.85rem;font-size:.9rem" onclick="doWithdraw()"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg> إرسال الطلب</button>
    </div>
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
/* ── Base ── */
let isDark = true;
function toggleTheme() {
  isDark = !isDark;
  document.documentElement.classList.toggle('light', !isDark);
  ['ico-moon','mob-ico-moon'].forEach(id => { const el = document.getElementById(id); if (el) el.classList.toggle('hidden', !isDark); });
  ['ico-sun','mob-ico-sun'].forEach(id => { const el = document.getElementById(id); if (el) el.classList.toggle('hidden', isDark); });
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
  n.style.background = window.scrollY > 40 ? (l ? '#fff' : 'rgba(3,13,23,.98)') : (l ? '#fff' : 'rgba(3,13,23,.96)');
  n.style.borderColor = window.scrollY > 40 ? (l ? '#e5e7eb' : 'rgba(255,255,255,.12)') : (l ? '#e5e7eb' : 'rgba(255,255,255,.08)');
}, { passive: true });

function openSearch() { const ov = document.getElementById('search-overlay'); if (ov) { ov.style.display = 'flex'; setTimeout(() => document.getElementById('search-input')?.focus(), 50); } }
function closeSearch() { const ov = document.getElementById('search-overlay'); if (ov) ov.style.display = 'none'; }
document.addEventListener('keydown', e => { if (e.key === 'Escape') { closeSearch(); ['send','convert','withdraw'].forEach(closePop); } });

/* ── Tabs ── */
function showTab(id) {
  document.querySelectorAll('.w-panel').forEach(p => p.classList.remove('show'));
  document.querySelectorAll('.w-tab').forEach(t => t.classList.remove('on'));
  const p = document.getElementById('p-' + id); if (p) p.classList.add('show');
  const t = document.getElementById('t-' + id); if (t) t.classList.add('on');
}

/* ── Popups ── */
function openPop(id) {
  document.getElementById('pop-' + id).classList.add('open');
  document.body.style.overflow = 'hidden';
  if (id === 'send')    { ['s-code','s-amt'].forEach(f => { const el = document.getElementById(f); if (el) el.value = ''; }); const p = document.getElementById('s-prev'); if (p) p.style.display = 'none'; }
  if (id === 'convert') { const el = document.getElementById('c-amt'); if (el) el.value = ''; const p = document.getElementById('c-prev'); if (p) p.style.display = 'none'; }
  if (id === 'withdraw') { const el = document.getElementById('w-amt'); if (el) el.value = ''; const p = document.getElementById('w-prev'); if (p) p.style.display = 'none'; }
}
function closePop(id) {
  const el = document.getElementById('pop-' + id); if (el) el.classList.remove('open');
  document.body.style.overflow = '';
}

/* ── Send ── */
function calcSend() {
  const amt = parseFloat(document.getElementById('s-amt').value) || 0;
  const tax = parseInt(document.getElementById('s-cur').value) || 0;
  const prev = document.getElementById('s-prev');
  if (!amt) { if (prev) prev.style.display = 'none'; return; }
  if (prev) prev.style.display = 'block';
  const taxAmt = Math.round(amt * tax / 100 * 100) / 100;
  const net = Math.round((amt - taxAmt) * 100) / 100;
  document.getElementById('sp-amt').textContent = amt;
  document.getElementById('sp-tax').textContent = taxAmt + ' (' + tax + '%)';
  document.getElementById('sp-net').textContent = net;
}
function doSend() {
  if (!document.getElementById('s-code').value.trim() || !document.getElementById('s-amt').value) { toast('يرجى إدخال الكود والمبلغ'); return; }
  closePop('send'); toast('تم إرسال الحوالة بنجاح');
}

/* ── Convert ── */
const RATES = { usd:1, stars:400, tickets:5, points:100 };
const LBLS  = { usd:'$', stars:'نجمة', tickets:'تذكرة', points:'نقطة' };
function calcConv() {
  const amt = parseFloat(document.getElementById('c-amt').value) || 0;
  const f = document.getElementById('c-from').value;
  const t = document.getElementById('c-to').value;
  const prev = document.getElementById('c-prev');
  if (!amt || f === t) { if (prev) prev.style.display = 'none'; return; }
  if (prev) prev.style.display = 'block';
  const usd = amt / RATES[f];
  const raw  = usd * RATES[t];
  const fee  = Math.max(1, Math.round(raw * .05 * 100) / 100);
  const net  = Math.round((raw - fee) * 100) / 100;
  document.getElementById('cp-from').textContent = amt + ' ' + LBLS[f];
  document.getElementById('cp-fee').textContent  = fee + ' ' + LBLS[t];
  document.getElementById('cp-to').textContent   = net + ' ' + LBLS[t];
}
function swapCur() {
  const f = document.getElementById('c-from'), t = document.getElementById('c-to');
  const fOpts = [...f.options].map(o => o.value), tOpts = [...t.options].map(o => o.value);
  if (fOpts.includes(t.value) && tOpts.includes(f.value)) { const tmp = f.value; f.value = t.value; t.value = tmp; calcConv(); }
}
function doConvert() {
  if (!document.getElementById('c-amt').value) { toast('يرجى إدخال الكمية'); return; }
  closePop('convert'); toast('تم التحويل بنجاح');
}

/* ── Withdraw ── */
function pickMethod(btn) {
  document.querySelectorAll('.w-method').forEach(b => b.classList.remove('on'));
  btn.classList.add('on');
}
function calcWithdraw() {
  const amt = parseFloat(document.getElementById('w-amt').value) || 0;
  const prev = document.getElementById('w-prev');
  if (!amt) { if (prev) prev.style.display = 'none'; return; }
  if (prev) prev.style.display = 'block';
  const fee = Math.max(0.5, Math.round(amt * .01 * 100) / 100);
  const net = Math.round((amt - fee) * 100) / 100;
  document.getElementById('wp-amt').textContent = '$' + amt;
  document.getElementById('wp-fee').textContent = '$' + fee;
  document.getElementById('wp-net').textContent = '$' + net;
}
function doWithdraw() {
  if (!document.getElementById('w-amt').value || !document.getElementById('w-acct').value.trim()) { toast('يرجى إدخال المبلغ ورقم الحساب'); return; }
  closePop('withdraw'); toast('تم إرسال طلب السحب بنجاح');
}

/* ── Toast ── */
function toast(msg) {
  const el = document.createElement('div');
  el.textContent = msg;
  el.style.cssText = 'position:fixed;bottom:2rem;left:50%;transform:translateX(-50%) translateY(10px);background:rgba(5,14,26,.95);border:1px solid var(--ta20);color:var(--tl);padding:.6rem 1.4rem;border-radius:999px;font-size:.84rem;font-weight:700;z-index:9999;opacity:0;transition:opacity .25s,transform .25s;white-space:nowrap;font-family:Cairo,sans-serif';
  document.body.appendChild(el);
  setTimeout(() => { el.style.opacity = '1'; el.style.transform = 'translateX(-50%) translateY(0)'; }, 10);
  setTimeout(() => { el.style.opacity = '0'; setTimeout(() => el.remove(), 280); }, 2500);
}

/* ── Responsive balance grid ── */
(() => {
  function resize() {
    const g = document.getElementById('bal-grid'); if (!g) return;
    const bg = document.getElementById('bottom-grid'); if (!bg) return;
    const w = window.innerWidth;
    g.style.gridTemplateColumns  = w < 560 ? '1fr' : w < 860 ? '1fr 1fr' : 'repeat(3,1fr)';
    bg.style.gridTemplateColumns = w < 640 ? '1fr' : '1fr 1fr';
  }
  resize();
  window.addEventListener('resize', resize, { passive: true });
})();
</script>
</body>
</html>