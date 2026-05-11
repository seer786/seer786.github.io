<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Join as a Mentor — HalaCareer — HalaCareer</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,600;12..96,700;12..96,800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Cairo:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<script>
tailwind.config={
  theme:{extend:{
    fontFamily:{display:['Bricolage Grotesque','sans-serif'],body:['Plus Jakarta Sans','sans-serif'],cairo:['Cairo','sans-serif']},
    animation:{'spin-slow':'spin 11s linear infinite','float':'float 5s ease-in-out infinite','fadeup':'fadeup .55s ease both','shimmer':'shimmer 3s linear infinite','ticker':'ticker 22s linear infinite','pulse-dot':'pulse-dot 2s ease-in-out infinite','blink':'blink 2s ease-in-out infinite'},
    keyframes:{'float':{'0%,100%':{transform:'translateY(0)'},'50%':{transform:'translateY(-4px)'}},'fadeup':{from:{opacity:'0',transform:'translateY(16px)'},to:{opacity:'1',transform:'translateY(0)'}},'shimmer':{'0%':{'background-position':'-200% 0'},'100%':{'background-position':'200% 0'}},'ticker':{'0%':{transform:'translateX(0)'},'100%':{transform:'translateX(-50%)'}},'pulse-dot':{'0%,100%':{transform:'scale(1)',opacity:'.7'},'50%':{transform:'scale(1.3)',opacity:'1'}},'blink':{'0%,100%':{opacity:'1'},'50%':{opacity:'.25'}}}
  }}
}
</script>
<style>
/* ── CSS Vars ── */
:root{--bg:#030d17;--bg2:#04111e;--bg3:#071825;--t:#00d4b8;--tl:#2de0ca;--td:#009e85;
  --ta30:rgba(0,212,184,.30);--ta20:rgba(0,212,184,.20);--ta15:rgba(0,212,184,.15);
  --ta12:rgba(0,212,184,.12);--ta08:rgba(0,212,184,.08);
  --w:#fff;--w80:rgba(255,255,255,.80);--w60:rgba(255,255,255,.60);
  --w40:rgba(255,255,255,.40);--w20:rgba(255,255,255,.20);
  --w10:rgba(255,255,255,.10);--w06:rgba(255,255,255,.06);}
html.light{--bg:#ffffff;--bg2:#ffffff;--bg3:#f8fffe;--t:#009e85;--tl:#00b89e;--td:#007a68;
  --ta30:rgba(0,212,184,.32);--ta20:rgba(0,212,184,.22);--ta15:rgba(0,212,184,.18);
  --ta12:rgba(0,212,184,.14);--ta08:rgba(0,212,184,.06);
  --w:#0a2220;--w80:rgba(10,34,32,.80);--w60:rgba(10,34,32,.58);
  --w40:rgba(10,34,32,.38);--w20:rgba(10,34,32,.16);
  --w10:rgba(10,34,32,.09);--w06:rgba(10,34,32,.05);}

/* ── Base ── */
*,*::before,*::after{box-sizing:border-box}
body{font-family:'Plus Jakarta Sans',sans-serif;background:var(--bg);color:var(--w);
  overflow-x:hidden;-webkit-font-smoothing:antialiased;line-height:1.65}
h1,h2,h3,h4{font-family:'Bricolage Grotesque',sans-serif;line-height:1.1}
a{text-decoration:none;color:inherit}
html[dir=rtl] body,html[dir=rtl] button,html[dir=rtl] input,html[dir=rtl] select,html[dir=rtl] textarea{font-family:'Cairo',sans-serif}
html[dir=rtl] h1,html[dir=rtl] h2,html[dir=rtl] h3,html[dir=rtl] h4{font-family:'Cairo',sans-serif;letter-spacing:0}

/* ── Noise texture ── */
body::after{content:'';position:fixed;inset:0;pointer-events:none;z-index:0;
  background:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.04'/%3E%3C/svg%3E")}

/* ── Gradients ── */
.grad{background:linear-gradient(135deg,#2de0ca 0%,#00d4b8 55%,#009e85 100%);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.grad2{background:linear-gradient(135deg,#00d4b8,#006b60);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.shimmer-text{
  background:linear-gradient(90deg,#2de0ca 0%,#009e85 30%,#2de0ca 60%,#009e85 100%);
  background-size:200% auto;
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
  animation:text-shimmer 5s linear infinite;}
@keyframes text-shimmer{to{background-position:200% center}}
h1 .grad, h2 .grad{animation:text-shimmer 5s linear infinite;background-size:200% auto;}

/* ── Glass ── */
.glass{background:rgba(5,17,30,.8);border:1px solid var(--ta20);backdrop-filter:blur(20px)}
html.light .glass{background:rgba(255,255,255,.95);border-color:var(--ta20)}

/* ── Grids ── */
.dotgrid{background-image:radial-gradient(rgba(0,212,184,.07) 1px,transparent 1px);background-size:32px 32px}
.linegrid{background-image:linear-gradient(rgba(0,212,184,.05) 1px,transparent 1px),linear-gradient(90deg,rgba(0,212,184,.05) 1px,transparent 1px);background-size:64px 64px}
html.light .dotgrid,html.light .linegrid,html.light body::after{opacity:0 !important}

/* ── Cards ── */
.ds-card{border-radius:1rem;border:1px solid var(--ta15);background:rgba(5,14,26,.85);
  transition:border-color .2s;position:relative;overflow:hidden;}
.ds-card:hover{border-color:var(--ta25,rgba(0,212,184,.25))}
html.light .ds-card{background:#ffffff !important;border-color:rgba(0,212,184,.2) !important}
html.light .ds-card:hover{border-color:rgba(0,188,164,.4) !important}

.hc-card{background:rgba(5,16,30,.9);border:1px solid var(--ta15);border-radius:1rem;transition:border-color .2s}
.hc-card:hover{border-color:var(--ta25,rgba(0,212,184,.25))}
html.light .hc-card{background:#ffffff !important;border-color:rgba(0,212,184,.2) !important}

/* ── Buttons ── */
.btn-p{background:linear-gradient(135deg,#2de0ca,#009e85);color:#020e18;font-weight:700;
  border-radius:.75rem;transition:opacity .2s,transform .2s;cursor:pointer;border:none;
  display:inline-flex;align-items:center;justify-content:center;}
.btn-p:hover{opacity:.9;transform:scale(1.015)}
.btn-p::after{display:none !important}
.btn-g{border:1px solid var(--ta20);color:var(--w80);background:var(--ta08);border-radius:.75rem;
  font-weight:600;transition:all .2s;cursor:pointer;
  display:inline-flex;align-items:center;justify-content:center;}
.btn-g:hover{border-color:var(--ta30);background:var(--ta12)}
html.light .btn-g{color:var(--w);border-color:rgba(0,212,184,.25);background:rgba(0,212,184,.05)}

/* ── Inputs & Selects ── */
.hc-input,
input[type="text"].hc-input,input[type="email"].hc-input,
input[type="tel"].hc-input,textarea.hc-input{
  background:rgba(5,14,26,.75);
  border:1.5px solid var(--ta15);
  border-radius:.75rem;
  color:var(--w);
  padding:.7rem 1rem;
  font-family:inherit;font-size:.88rem;
  transition:border-color .18s,background .18s;
  outline:none;width:100%;
  -webkit-appearance:none;appearance:none;
}
.hc-input:focus{border-color:var(--t);background:rgba(5,14,26,.9)}
.hc-input::placeholder{color:var(--w40)}
html.light .hc-input{background:#ffffff;border-color:rgba(0,212,184,.25);color:#111827}
html.light .hc-input:focus{border-color:var(--t);background:#ffffff}
html.light .hc-input::placeholder{color:#9ca3af}

.hc-select{
  background:rgba(5,14,26,.75);
  border:1.5px solid var(--ta15);
  border-radius:.75rem;
  color:var(--w);
  padding:.65rem .9rem;
  font-family:inherit;font-size:.85rem;
  transition:border-color .18s;
  outline:none;cursor:pointer;
  -webkit-appearance:none;appearance:none;
  background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' fill='none' stroke='rgba(0,212,184,.5)' stroke-width='2' stroke-linecap='round' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
  background-repeat:no-repeat;
  background-position:right 10px center;
  background-size:14px;
  padding-right:2rem;
}
html[dir=rtl] .hc-select{
  background-position:left 10px center;
  padding-right:.9rem;padding-left:2rem;
}
.hc-select:focus{border-color:var(--t)}
html.light .hc-select{background:#ffffff;border-color:rgba(0,212,184,.25);color:#111827}
html.light .hc-select option{background:#fff;color:#111827}

/* ── Chips ── */
.chip{padding:.3rem .85rem;border-radius:999px;font-size:.75rem;font-weight:600;
  cursor:pointer;border:1px solid var(--ta15);color:var(--w60);background:transparent;transition:all .18s}
.chip.on,.chip:hover{background:var(--ta12);border-color:var(--ta30);color:var(--tl)}
html.light .chip{color:#6b7280;border-color:rgba(0,212,184,.2)}
html.light .chip.on,html.light .chip:hover{background:rgba(0,212,184,.08);color:var(--td);border-color:rgba(0,188,164,.4)}

/* ── Misc ── */
.sec-eyebrow{font-size:.65rem;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:var(--td)}
.pbar{height:4px;border-radius:999px;background:var(--ta12);overflow:hidden}
.pbar-fill{height:100%;border-radius:999px;background:linear-gradient(90deg,#009e85,#2de0ca)}
::-webkit-scrollbar{width:5px}
::-webkit-scrollbar-track{background:var(--bg)}
::-webkit-scrollbar-thumb{background:var(--ta20);border-radius:3px}

/* ── Light mode: all dark cards → white ── */
html.light *{box-shadow:none !important}
html.light body{background:#ffffff !important;color:#111827 !important}
html.light [style*="background:rgba(5,14,26"]{background:#ffffff !important}
html.light [style*="background:rgba(4,11,22"]{background:#ffffff !important}
html.light [style*="background:rgba(5,16,30"]{background:#ffffff !important}
html.light [style*="background:rgba(3,13,23"]{background:#ffffff !important}
html.light [style*="color:var(--w)"]{color:#111827 !important}
html.light [style*="color:var(--w80)"]{color:#1f2937 !important}
html.light [style*="color:var(--w60)"]{color:#4b5563 !important}
html.light [style*="color:var(--w40)"]{color:#9ca3af !important}
html.light .grad{-webkit-text-fill-color:transparent !important}
html.light .shimmer-text{-webkit-text-fill-color:transparent !important}
html.light .feat-card,html.light .plan-card,html.light .testi-card,
html.light .cfg-card,html.light .stat-box,html.light .glass{
  background:#ffffff !important;border-color:rgba(0,212,184,.2) !important}

/* ── Nav ── */
html.light #hc-nav{background:#ffffff !important;border-color:#e5e7eb !important}
html.light #hc-mob{background:#ffffff !important;border-color:#e5e7eb !important}

/* ── Nav Dropdown ── */
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
  background:#f0fdfb !important;border-color:rgba(0,188,164,.35) !important}


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


/* ── Split badge ── */
.split-badge{display:inline-flex;align-items:center;gap:.3rem;font-size:.65rem;font-weight:800;padding:.25rem .7rem;border-radius:999px;background:var(--ta10,rgba(0,212,184,.1));border:1px solid var(--ta20);color:var(--tl)}
/* ── Income card ── */
.inc-card{transition:border-color .2s}
.inc-card:hover{border-color:rgba(0,212,184,.32) !important}
/* ── Testi card ── */
.testi-card{position:relative;overflow:hidden}
/* ── Light mode ── */
html.light .inc-card{background:#fff !important}
html.light .testi-card{background:#fff !important}
html.light [style*="rgba(5,14,26"]{background:#fff !important}
html.light [style*="rgba(4,11,22"]{background:#fff !important}


.hiw-track{display:grid;grid-template-columns:1fr auto 1fr auto 1fr auto 1fr;align-items:start;gap:0}
@media(max-width:768px){.hiw-track{grid-template-columns:1fr}.hiw-connector{display:none}}
.hiw-step{display:flex;flex-direction:column;align-items:center;text-align:center;padding:0 .5rem}
.hiw-icon-wrap{position:relative;margin-bottom:1rem}
.hiw-num{position:absolute;top:-6px;inset-inline-end:-6px;width:18px;height:18px;border-radius:50%;background:var(--t);color:#020e18;font-size:.6rem;font-weight:800;display:flex;align-items:center;justify-content:center;z-index:2;font-family:'Bricolage Grotesque',sans-serif}
.hiw-icon{width:56px;height:56px;border-radius:1rem;border:1px solid var(--ta20);background:rgba(5,14,26,.5);display:flex;align-items:center;justify-content:center;color:var(--tl);transition:border-color .2s}
.hiw-icon svg{width:22px;height:22px}
html.light .hiw-icon{background:#fff;border-color:rgba(0,212,184,.2)}
.hiw-content{max-width:140px}
.hiw-title{font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:.85rem;color:var(--w);margin-bottom:.35rem;line-height:1.25}
html[dir=rtl] .hiw-title{font-family:'Cairo',sans-serif}
.hiw-badge{display:inline-block;font-size:.58rem;font-weight:700;padding:.2rem .6rem;border-radius:999px;background:var(--ta08);border:1px solid var(--ta15);color:var(--tl);margin-bottom:.5rem}
.hiw-desc{font-size:.72rem;line-height:1.55;color:var(--w40)}
.hiw-connector{display:flex;align-items:center;justify-content:center;padding-top:28px;color:rgba(0,212,184,.2);width:40px}
.hiw-connector svg{width:40px}
html.light .hiw-connector{color:rgba(0,188,164,.2)}
.faq-item{border-bottom:1px solid var(--ta12)}
.faq-q{width:100%;text-align:start;display:flex;align-items:center;justify-content:space-between;gap:1rem;padding:1rem 0;cursor:pointer;font-size:.88rem;font-weight:600;color:var(--w);background:transparent;border:none;font-family:inherit;transition:color .18s}
.faq-q:hover,.faq-q.open{color:var(--tl)}
html.light .faq-q{color:#111827}
.faq-chevron{width:22px;height:22px;border-radius:50%;background:var(--ta08);border:1px solid var(--ta12);display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:transform .2s}
.faq-q.open .faq-chevron{transform:rotate(180deg);background:var(--ta12)}
.faq-a{max-height:0;overflow:hidden;transition:max-height .3s ease}
.faq-a.open{max-height:200px}
html.light *,html.light *::before,html.light *::after{box-shadow:none !important}
html.light body{background:#ffffff !important;color:#111827 !important}
html.light *{border-color:rgba(0,212,184,.2) !important}
html.light body,html.light #hc-nav,html.light footer,html.light #hc-mob{border-color:#e5e7eb !important}
html.light .dotgrid,html.light .linegrid,html.light body::after{display:none !important}
html.light .ds-card,html.light .hc-card{background:#fff !important;border-color:rgba(0,212,184,.2) !important}
html.light [style*="rgba(5,14,26"]{background:#fff !important}
html.light [style*="rgba(4,11,22"]{background:#fff !important}
html.light [style*="color:var(--w)"] {color:#111827 !important}
html.light [style*="color:var(--w60)"]{color:#4b5563 !important}
html.light [style*="color:var(--w40)"]{color:#9ca3af !important}

/* ════ LIGHT MODE — CARD & ELEMENT FIXES ════ */

/* Dark stats/info boxes */
html.light [style*="rgba(5,16,30,.8)"]  { background:#f8fffe !important; }
html.light [style*="rgba(5,14,26,.5)"]  { background:#f8fffe !important; }
html.light [style*="rgba(5,14,26,.6)"]  { background:#f8fffe !important; }
html.light [style*="rgba(5,14,26,.7)"]  { background:#f8fffe !important; }
html.light [style*="rgba(5,14,26,.8)"]  { background:#ffffff !important; }
html.light [style*="rgba(5,14,26,.9)"]  { background:#ffffff !important; }
html.light [style*="rgba(4,11,22,.9)"]  { background:#ffffff !important; }
html.light [style*="rgba(3,13,23,.9"]   { background:#ffffff !important; }
html.light [style*="rgba(3,13,23,.98)"] { background:#ffffff !important; }

/* Badge overlays on card thumbnails (black semi-transparent) */
html.light [style*="background:rgba(0,0,0,.5)"] { 
  background:rgba(0,0,0,.08) !important; 
  color:#111827 !important;
}
html.light [style*="background:rgba(0,0,0,.45)"] { 
  background:rgba(0,0,0,.06) !important; 
}
html.light [style*="background:rgba(0,0,0,.55)"] { 
  background:rgba(0,0,0,.08) !important; 
}
html.light [style*="background:rgba(0,0,0,.6)"] { 
  background:rgba(0,0,0,.07) !important; 
}
html.light [style*="background:rgba(0,0,0,.7"],
html.light [style*="background:rgba(0,0,0,.72"] { 
  background:rgba(0,0,0,.65) !important; /* overlays/modals keep dark */
}

/* Linear gradient card thumbnails — keep as-is (colorful) */

/* Featured badge on job cards */
html.light [style*="background:rgba(251,191,36,.15)"] {
  background:rgba(0,188,164,.1) !important;
  border-color:rgba(0,188,164,.3) !important;
  color:var(--td) !important;
}

/* Breakdown rows in summary card */
html.light .breakdown-row { border-color:rgba(0,212,184,.12) !important; }

/* Job card avatar border */
html.light [style*="border-color:var(--bg2)"] { border-color:#ffffff !important; }

/* Instructor/meta text in cards */
html.light .m-av ~ div [style*="color:var(--w40)"] { color:#9ca3af !important; }

/* hc-label */
html.light .hc-label { color:#4b5563 !important; }

/* Border-top separator in cards */
html.light [style*="border-top:1px solid var(--ta12)"] {
  border-color:rgba(0,212,184,.15) !important;
}
</style>
</head><body>
<!-- Cursor -->
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
        <button class="nav-btn " style="color:var(--w60)" data-en="Companies" data-ar="الشركات">
          الشركات
          <svg class="nav-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="nav-drop"><a href="hc-companies.html" class="nav-drop-item" data-en="Hiring" data-ar="التوظيف"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div><span>التوظيف</span></a><a href="hc-live.html" class="nav-drop-item" data-en="Live Training" data-ar="التدريبات المباشرة"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg></div><span>التدريبات المباشرة</span></a></div>
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

<!-- HERO -->
<section class="relative pt-28 pb-16 overflow-hidden" style="background:var(--bg2)">
  <div class="linegrid absolute inset-0 opacity-25 pointer-events-none"></div>
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse 50% 65% at 80% 50%,rgba(0,212,184,.08),transparent 65%);pointer-events:none"></div>
  <div class="relative z-10 max-w-[1280px] mx-auto px-5">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

      <!-- Left -->
      <div>
        <div class="inline-flex items-center gap-2 mb-5 px-3 py-1.5 rounded-full text-xs font-bold" style="background:var(--ta08);border:1px solid var(--ta15);color:var(--tl)">
          <span class="w-1.5 h-1.5 rounded-full bg-green-400" style="animation:pulse-dot 2s infinite"></span>
          <span data-en="500+ mentors · Open applications" data-ar="+500 منتور · التقديم مفتوح">+500 منتور · التقديم مفتوح</span>
        </div>
        <h1 class="font-display font-extrabold tracking-tight mb-4" style="font-size:clamp(2.2rem,4.2vw,3.4rem);color:var(--w)">
          <span data-en="Your expertise" data-ar="خبرتك">خبرتك</span><br>
          <span class="grad shimmer-text" data-en="pays here." data-ar="بتكسب هنا.">بتكسب هنا.</span>
        </h1>
        <p class="text-base leading-relaxed mb-7 max-w-lg" style="color:var(--w60)"
           data-en="Your knowledge has value. On HalaCareer you build courses, host live sessions, offer 1-on-1 coaching, and create your own community — all in one platform." 
           data-ar="خبرتك لها قيمة حقيقية. في هلا كارير تبني كورسات، تقيم جلسات مباشرة، تقدم إرشاداً فردياً، وتبني مجتمعك الخاص — كل ذلك في منصة واحدة.">
          خبرتك لها قيمة حقيقية. في هلا كارير تبني كورسات، تقيم جلسات مباشرة، تقدم إرشاداً فردياً، وتبني مجتمعك الخاص — كل ذلك في منصة واحدة.
        </p>
        <!-- 3 stats -->
        <div class="grid grid-cols-3 gap-4 mb-8">
          <div>
            <div class="font-display font-extrabold grad" style="font-size:clamp(2rem,4vw,3rem);line-height:1">500+</div>
            <div class="text-xs mt-1" style="color:var(--w40)" data-en="active mentors" data-ar="منتور نشط">منتور نشط</div>
          </div>
          <div>
            <div class="font-display font-extrabold grad" style="font-size:clamp(2rem,4vw,3rem);line-height:1">4.2K</div>
            <div class="text-xs mt-1" style="color:var(--w40)" data-en="avg EGP/month" data-ar="متوسط EGP/شهر">متوسط EGP/شهر</div>
          </div>
          <div>
            <div class="font-display font-extrabold grad" style="font-size:clamp(2rem,4vw,3rem);line-height:1">24h</div>
            <div class="text-xs mt-1" style="color:var(--w40)" data-en="review & approval" data-ar="مراجعة وقبول">مراجعة وقبول</div>
          </div>
        </div>
        <div class="flex flex-wrap gap-3">
          <a href="#register" class="btn-p px-8 py-3.5 text-sm font-bold" data-en="Apply Now — Free →" data-ar="قدّم الآن — مجاناً ←">قدّم الآن — مجاناً ←</a>
          <a href="#how" class="btn-g px-7 py-3.5 text-sm" data-en="How it works" data-ar="كيف يعمل">كيف يعمل</a>
        </div>
      </div>

      <!-- Right: dashboard mockup -->
      <div class="hidden lg:block">
        <div class="rounded-2xl p-6" style="background:rgba(4,11,22,.9);border:1px solid var(--ta18,rgba(0,212,184,.18))">
          <div class="flex items-center justify-between mb-5">
            <div>
              <div class="text-xs font-bold" style="color:var(--w40)" data-en="Mentor Dashboard" data-ar="لوحة المنتور">لوحة المنتور</div>
              <div class="font-display font-bold text-sm mt-0.5" style="color:var(--w)" data-en="Ahmed Hassan · Sales Expert" data-ar="أحمد حسن · خبير مبيعات">أحمد حسن · خبير مبيعات</div>
            </div>
            <div class="flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold" style="background:var(--ta08);border:1px solid var(--ta15);color:var(--tl)">
              <span class="w-1.5 h-1.5 rounded-full" style="background:var(--tl);animation:pulse-dot 2s infinite"></span>
              <span data-en="Online" data-ar="متصل">متصل</span>
            </div>
          </div>
          <!-- Balance -->
          <div class="rounded-xl p-4 mb-3" style="background:var(--ta08);border:1px solid var(--ta15)">
            <div class="text-xs mb-1" style="color:var(--w40)" data-en="This month's earnings" data-ar="أرباح هذا الشهر">أرباح هذا الشهر</div>
            <div class="font-display font-extrabold text-3xl grad">8,450 <span class="text-base font-normal" style="color:var(--w40)">EGP</span></div>
            <div class="flex items-center gap-1.5 mt-1.5 text-xs" style="color:var(--tl)">
              <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="18 15 12 9 6 15"/></svg>
              <span data-en="+34% vs last month" data-ar="+34% مقارنة بالشهر الماضي">+34% مقارنة بالشهر الماضي</span>
            </div>
          </div>
          <!-- Rows -->
          <div class="flex flex-col gap-2 mb-3">
            <div class="flex items-center gap-3 p-3 rounded-xl" style="border:1px solid var(--ta12);background:rgba(5,14,26,.4)">
              <div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0" style="background:var(--ta08);border:1px solid var(--ta12)">
                <svg class="w-4 h-4" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              </div>
              <div class="flex-1">
                <div class="text-xs font-semibold" style="color:var(--w)" data-en="12 mentorship sessions" data-ar="12 جلسة إرشاد">12 جلسة إرشاد</div>
                <div class="text-[.6rem]" style="color:var(--w40)" data-en="avg 350 EGP" data-ar="متوسط 350 EGP">متوسط 350 EGP</div>
              </div>
              <div class="font-display font-bold text-sm grad">2,940</div>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-xl" style="border:1px solid var(--ta12);background:rgba(5,14,26,.4)">
              <div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0" style="background:var(--ta08);border:1px solid var(--ta12)">
                <svg class="w-4 h-4" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg>
              </div>
              <div class="flex-1">
                <div class="text-xs font-semibold" style="color:var(--w)" data-en="Course views (passive)" data-ar="مشاهدات الكورس (سلبي)">مشاهدات الكورس (سلبي)</div>
                <div class="text-[.6rem]" style="color:var(--w40)">894 <span data-en="views" data-ar="مشاهدة">مشاهدة</span></div>
              </div>
              <div class="font-display font-bold text-sm grad">4,124</div>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-xl" style="border:1px solid var(--ta12);background:rgba(5,14,26,.4)">
              <div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0" style="background:var(--ta08);border:1px solid var(--ta12)">
                <svg class="w-4 h-4" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
              </div>
              <div class="flex-1">
                <div class="text-xs font-semibold" style="color:var(--w)" data-en="Community (18 members)" data-ar="مجتمع (18 عضو)">مجتمع (18 عضو)</div>
                <div class="text-[.6rem]" style="color:var(--w40)">@ 79 EGP / <span data-en="member" data-ar="عضو">عضو</span></div>
              </div>
              <div class="font-display font-bold text-sm grad">1,386</div>
            </div>
          </div>
          <div class="flex items-center justify-between px-3 py-2.5 rounded-xl" style="background:rgba(5,14,26,.6);border:1px solid var(--ta12)">
            <div class="text-xs" style="color:var(--w40)" data-en="Next payout" data-ar="الدفع القادم">الدفع القادم</div>
            <div class="font-display font-bold text-sm grad" data-en="Friday · 5,915 EGP" data-ar="الجمعة · 5,915 EGP">الجمعة · 5,915 EGP</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- INCOME STREAMS -->
<section class="py-16" style="background:var(--bg)">
  <div class="max-w-[1280px] mx-auto px-5">
    <div class="text-center mb-12">
      <div class="sec-eyebrow mb-3" data-en="Income Streams" data-ar="مصادر الدخل">مصادر الدخل</div>
      <h2 class="font-display font-extrabold" style="font-size:clamp(1.6rem,3vw,2.4rem);color:var(--w)"
          data-en="Four ways to earn. Pick one. Pick all." data-ar="أربع طرق للكسب. اختر واحدة. اختر الكل.">أربع طرق للكسب. اختر واحدة. اختر الكل.</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

      <div class="inc-card ds-card p-6">
        <div class="flex items-start justify-between mb-4">
          <div class="flex items-start gap-3">
            <div class="w-11 h-11 rounded-xl flex items-center justify-center shrink-0" style="background:var(--ta08);border:1px solid var(--ta15)">
              <svg class="w-5 h-5" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </div>
            <div>
              <div class="font-display font-bold text-sm mb-0.5" style="color:var(--w)" data-en="1-on-1 Mentorship" data-ar="إرشاد فردي">إرشاد فردي</div>
              <p class="text-xs" style="color:var(--w60)" data-en="Set your services, price, and availability." data-ar="حدد خدماتك وسعرك ومتاحيتك.">حدد خدماتك وسعرك ومتاحيتك.</p>
            </div>
          </div>
          <span class="split-badge shrink-0 ms-2" data-en="You set the price" data-ar="أنت تحدد السعر">أنت تحدد السعر</span>
        </div>
        <div class="flex flex-wrap gap-1.5">
          <span class="px-2.5 py-1 rounded-lg text-xs font-medium" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="CV Review" data-ar="مراجعة CV">مراجعة CV</span>
          <span class="px-2.5 py-1 rounded-lg text-xs font-medium" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Mock Interview" data-ar="مقابلة وهمية">مقابلة وهمية</span>
          <span class="px-2.5 py-1 rounded-lg text-xs font-medium" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Career Strategy" data-ar="استراتيجية مسار">استراتيجية مسار</span>
          <span class="px-2.5 py-1 rounded-lg text-xs font-medium" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="+ your own services" data-ar="+ خدماتك الخاصة">+ خدماتك الخاصة</span>
        </div>
      </div>

      <div class="inc-card ds-card p-6">
        <div class="flex items-start justify-between mb-4">
          <div class="flex items-start gap-3">
            <div class="w-11 h-11 rounded-xl flex items-center justify-center shrink-0" style="background:var(--ta08);border:1px solid var(--ta15)">
              <svg class="w-5 h-5" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg>
            </div>
            <div>
              <div class="font-display font-bold text-sm mb-0.5" style="color:var(--w)" data-en="Recorded Courses" data-ar="كورسات مسجّلة">كورسات مسجّلة</div>
              <p class="text-xs" style="color:var(--w60)" data-en="Upload once. Earn every view. Passive income." data-ar="ارفع مرة. اكسب كل مشاهدة. دخل سلبي.">ارفع مرة. اكسب كل مشاهدة. دخل سلبي.</p>
            </div>
          </div>
          <span class="split-badge shrink-0 ms-2" data-en="Earn while you sleep" data-ar="اكسب وأنت نائم">اكسب وأنت نائم</span>
        </div>
        <div class="rounded-xl p-3 text-xs" style="background:var(--ta08);border:1px solid var(--ta12)">
          <div class="flex justify-between mb-1.5"><span style="color:var(--w60)">🇪🇬 <span data-en="Egypt" data-ar="مصر">مصر</span></span><span class="font-bold" style="color:var(--w)">4 <span data-en="pts / video" data-ar="نقطة / فيديو">نقطة / فيديو</span></span></div>
          <div class="flex justify-between mb-1.5"><span style="color:var(--w60)">🇸🇦 <span data-en="Gulf" data-ar="الخليج">الخليج</span></span><span class="font-bold" style="color:var(--w)">20 <span data-en="pts / video" data-ar="نقطة / فيديو">نقطة / فيديو</span></span></div>
          <div class="flex justify-between mb-1.5"><span style="color:var(--w60)">🇪🇺 <span data-en="Europe" data-ar="أوروبا">أوروبا</span></span><span class="font-bold" style="color:var(--w)">60 <span data-en="pts / video" data-ar="نقطة / فيديو">نقطة / فيديو</span></span></div>
          <div class="flex justify-between mb-2"><span style="color:var(--w60)">🇺🇸 <span data-en="US / Canada" data-ar="أمريكا / كندا">أمريكا / كندا</span></span><span class="font-bold" style="color:var(--w)">100 <span data-en="pts / video" data-ar="نقطة / فيديو">نقطة / فيديو</span></span></div>
          <div style="border-top:1px solid var(--ta12);padding-top:.5rem;margin-top:.25rem">
            <div class="flex justify-between mb-1"><span style="color:var(--w40)">🌙 <span data-en="5–7 AM (off-peak)" data-ar="5–7 صباحاً (ساعات هادئة)">5–7 صباحاً (ساعات هادئة)</span></span><span style="color:var(--w40)">× 0.5</span></div>
            <div class="flex justify-between"><span style="color:var(--tl)">⭐ <span data-en="Gold membership" data-ar="عضوية Gold">عضوية Gold</span></span><span class="font-bold" style="color:var(--tl)">+49% <span data-en="bonus" data-ar="مكافأة">مكافأة</span></span></div>
          </div>
        </div>
      </div>

      <div class="inc-card ds-card p-6">
        <div class="flex items-start justify-between">
          <div class="flex items-start gap-3">
            <div class="w-11 h-11 rounded-xl flex items-center justify-center shrink-0" style="background:var(--ta08);border:1px solid var(--ta15)">
              <svg class="w-5 h-5" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 12.5a7 7 0 0014 0"/><path d="M9 12.5a3 3 0 006 0"/><path d="M12 12.5V3.5"/><circle cx="12" cy="3.5" r="1.5" fill="currentColor" stroke="none"/></svg>
            </div>
            <div>
              <div class="font-display font-bold text-sm mb-0.5" style="color:var(--w)" data-en="Live Sessions" data-ar="جلسات مباشرة">جلسات مباشرة</div>
              <p class="text-xs" style="color:var(--w60)" data-en="Host a live session directly linked to your recorded course. Deep dives, Q&A, and practice — your students attend, you earn per seat." data-ar="استضف جلسة مباشرة مرتبطة بكورسك المسجّل. شرح معمّق وأسئلة وتدريب — طلابك يحضرون وأنت تكسب لكل مقعد.">استضف جلسة مباشرة مرتبطة بكورسك المسجّل. شرح معمّق وأسئلة وتدريب — طلابك يحضرون وأنت تكسب لكل مقعد.</p>
            </div>
          </div>
          <span class="split-badge shrink-0 ms-2" data-en="Per seat sold" data-ar="لكل مقعد يُباع">لكل مقعد يُباع</span>
        </div>
      </div>

      <div class="inc-card ds-card p-6">
        <div class="flex items-start justify-between">
          <div class="flex items-start gap-3">
            <div class="w-11 h-11 rounded-xl flex items-center justify-center shrink-0" style="background:var(--ta08);border:1px solid var(--ta15)">
              <svg class="w-5 h-5" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
            </div>
            <div>
              <div class="font-display font-bold text-sm mb-0.5" style="color:var(--w)" data-en="Paid Community" data-ar="مجتمع مدفوع">مجتمع مدفوع</div>
              <p class="text-xs" style="color:var(--w60)" data-en="Build a paid community around your expertise. Set your own subscription price. 70% of every payment goes directly to you." data-ar="ابنِ مجتمعاً مدفوعاً حول خبرتك. حدد سعر الاشتراك بنفسك. 70% من كل دفعة يذهب مباشرةً إليك.">ابنِ مجتمعاً مدفوعاً حول خبرتك. حدد سعر الاشتراك بنفسك. 70% من كل دفعة يذهب مباشرةً إليك.</p>
            </div>
          </div>
          <span class="split-badge shrink-0 ms-2" data-en="Your community, your rules" data-ar="مجتمعك، شروطك">مجتمعك، شروطك</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- HOW TO JOIN -->
<section class="py-16" style="background:var(--bg2)" id="how">
  <div class="max-w-[900px] mx-auto px-5">
    <div class="text-center mb-12">
      <div class="sec-eyebrow mb-3" data-en="How to Join" data-ar="كيف تنضم">كيف تنضم</div>
      <h2 class="font-display font-extrabold" style="font-size:clamp(1.6rem,3vw,2.4rem);color:var(--w)">
        <span data-en="4 steps." data-ar="4 خطوات.">4 خطوات.</span>
        <span class="grad shimmer-text" data-en=" First payout in a week." data-ar=" أول دفعة خلال أسبوع."> أول دفعة خلال أسبوع.</span>
      </h2>
    </div>
    <div class="hiw-track">
      <div class="hiw-step">
        <div class="hiw-icon-wrap"><div class="hiw-num">1</div>
          <div class="hiw-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></div>
        </div>
        <div class="hiw-content">
          <div class="hiw-title" data-en="Apply" data-ar="قدّم">قدّم</div>
          <div class="hiw-badge" data-en="5 minutes" data-ar="5 دقائق">5 دقائق</div>
          <div class="hiw-desc" data-en="Tell us your expertise. No formal CV needed." data-ar="أخبرنا بتخصصك. لا CV رسمي مطلوب.">أخبرنا بتخصصك. لا CV رسمي مطلوب.</div>
        </div>
      </div>
      <div class="hiw-connector"><svg viewBox="0 0 40 12" fill="none"><path d="M0 6h36M30 1l6 5-6 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      <div class="hiw-step">
        <div class="hiw-icon-wrap"><div class="hiw-num">2</div>
          <div class="hiw-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg></div>
        </div>
        <div class="hiw-content">
          <div class="hiw-title" data-en="We review" data-ar="نراجع">نراجع</div>
          <div class="hiw-badge" data-en="24 hours" data-ar="24 ساعة">24 ساعة</div>
          <div class="hiw-desc" data-en="We verify your background. Usually same day." data-ar="نتحقق من خلفيتك. عادةً في نفس اليوم.">نتحقق من خلفيتك. عادةً في نفس اليوم.</div>
        </div>
      </div>
      <div class="hiw-connector"><svg viewBox="0 0 40 12" fill="none"><path d="M0 6h36M30 1l6 5-6 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      <div class="hiw-step">
        <div class="hiw-icon-wrap"><div class="hiw-num">3</div>
          <div class="hiw-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg></div>
        </div>
        <div class="hiw-content">
          <div class="hiw-title" data-en="Build profile" data-ar="ابنِ ملفك">ابنِ ملفك</div>
          <div class="hiw-badge" data-en="Instant live" data-ar="حي فوراً">حي فوراً</div>
          <div class="hiw-desc" data-en="Add services, prices, and bio. Go live instantly." data-ar="أضف خدماتك وأسعارك ونبذتك. ملفك حي فوراً.">أضف خدماتك وأسعارك ونبذتك. ملفك حي فوراً.</div>
        </div>
      </div>
      <div class="hiw-connector"><svg viewBox="0 0 40 12" fill="none"><path d="M0 6h36M30 1l6 5-6 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      <div class="hiw-step">
        <div class="hiw-icon-wrap"><div class="hiw-num">4</div>
          <div class="hiw-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
        </div>
        <div class="hiw-content">
          <div class="hiw-title" data-en="Start earning" data-ar="ابدأ الكسب">ابدأ الكسب</div>
          <div class="hiw-badge" data-en="Weekly payout" data-ar="دفع أسبوعي">دفع أسبوعي</div>
          <div class="hiw-desc" data-en="Learners find you, book, and pay. Payouts every Friday." data-ar="المتعلمون يجدونك ويحجزون ويدفعون. دفع كل جمعة.">المتعلمون يجدونك ويحجزون. دفع كل جمعة.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="py-16" style="background:var(--bg)">
  <div class="max-w-[1280px] mx-auto px-5">
    <div class="text-center mb-10">
      <div class="sec-eyebrow mb-3" data-en="Real Mentors. Real Numbers." data-ar="منتورز حقيقيون. أرقام حقيقية.">منتورز حقيقيون. أرقام حقيقية.</div>
      <h2 class="font-display font-extrabold" style="font-size:clamp(1.6rem,3vw,2.4rem);color:var(--w)"
          data-en="Their expertise became their income." data-ar="خبرتهم أصبحت مصدر دخلهم.">خبرتهم أصبحت مصدر دخلهم.</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
      <div class="testi-card ds-card p-6">
        <div class="flex items-center gap-2 mb-4">
          <div class="flex gap-0.5">⭐⭐⭐⭐⭐</div>
          <span class="text-[.6rem] font-bold ms-auto px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta15);color:var(--tl)" data-en="Verified Mentor" data-ar="منتور موثّق">منتور موثّق</span>
        </div>
        <p class="text-sm leading-relaxed mb-5" style="color:var(--w60)" data-en="I spent years sharing free advice on LinkedIn. The moment I structured it as paid sessions on HalaCareer, my first week I closed 4 bookings. The platform handles everything — scheduling, payments, reminders." data-ar="أمضيت سنوات أشارك نصائح مجانية على LinkedIn. لحظة هيكلتها كجلسات مدفوعة على هلا كارير، أغلقت 4 حجوزات في أسبوعي الأول. المنصة تدير كل شيء — الجدول والمدفوعات والتذكيرات.">أمضيت سنوات أشارك نصائح مجانية على LinkedIn. لحظة هيكلتها كجلسات مدفوعة على هلا كارير، أغلقت 4 حجوزات في أسبوعي الأول. المنصة تدير كل شيء.</p>
        <div class="flex items-center gap-3 pt-4" style="border-top:1px solid var(--ta12)">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center font-display font-extrabold text-xs" style="background:linear-gradient(135deg,#2de0ca,#009e85);color:rgba(0,0,0,.65)">AH</div>
          <div>
            <div class="font-bold text-sm" style="color:var(--w)">أحمد حسن</div>
            <div class="text-xs" style="color:var(--w40)">مدير مبيعات سابق · 14 سنة خبرة · القاهرة</div>
          </div>
        </div>
      </div>
      <div class="testi-card ds-card p-6" style="border-color:var(--ta20)">
        <div class="flex items-center gap-2 mb-4">
          <div class="flex gap-0.5">⭐⭐⭐⭐⭐</div>
          <span class="text-[.6rem] font-bold ms-auto px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta15);color:var(--tl)" data-en="Verified Mentor" data-ar="منتور موثّق">منتور موثّق</span>
        </div>
        <p class="text-sm leading-relaxed mb-5" style="color:var(--w60)" data-en="I'm a language trainer and I was worried no one would pay for IELTS coaching online. Within two months I had a full schedule and a waiting list. What surprised me most is that students come in already serious — they paid, so they show up." data-ar="أنا مدربة لغة وكنت قلقة أن لا أحد سيدفع لتدريب IELTS أونلاين. في شهرين كان جدولي ممتلئاً وعندي قائمة انتظار. الأمر الذي فاجأني أن الطلاب يأتون جادين — لأنهم دفعوا.">أنا مدربة لغة وكنت قلقة أن لا أحد سيدفع لتدريب IELTS أونلاين. في شهرين كان جدولي ممتلئاً وعندي قائمة انتظار.</p>
        <div class="flex items-center gap-3 pt-4" style="border-top:1px solid var(--ta12)">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center font-display font-extrabold text-xs" style="background:linear-gradient(135deg,#2de0ca,#007a68);color:rgba(0,0,0,.65)">SM</div>
          <div>
            <div class="font-bold text-sm" style="color:var(--w)">سارة محمود</div>
            <div class="text-xs" style="color:var(--w40)">مدربة لغة إنجليزية وIELTS · الإسكندرية</div>
          </div>
        </div>
      </div>
      <div class="testi-card ds-card p-6">
        <div class="flex items-center gap-2 mb-4">
          <div class="flex gap-0.5">⭐⭐⭐⭐⭐</div>
          <span class="text-[.6rem] font-bold ms-auto px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta15);color:var(--tl)" data-en="Verified Mentor" data-ar="منتور موثّق">منتور موثّق</span>
        </div>
        <p class="text-sm leading-relaxed mb-5" style="color:var(--w60)" data-en="I recorded a real estate fundamentals course and honestly forgot about it. Three months later it was still bringing in income from views I didn't even know happened. The passive income aspect is real — you record once and it keeps working." data-ar="سجّلت كورس أساسيات عقارات وبصراحة نسيته. بعد ثلاثة أشهر كان لا يزال يدرّ دخلاً من مشاهدات لم أعرف أنها حدثت. الدخل السلبي حقيقي — تسجّل مرة ويكمل يشتغل.">سجّلت كورس أساسيات عقارات وبصراحة نسيته. بعد ثلاثة أشهر كان لا يزال يدرّ دخلاً من مشاهدات لم أعرف أنها حدثت.</p>
        <div class="flex items-center gap-3 pt-4" style="border-top:1px solid var(--ta12)">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center font-display font-extrabold text-xs" style="background:linear-gradient(135deg,#2de0ca,#009e85);color:rgba(0,0,0,.65)">MK</div>
          <div>
            <div class="font-bold text-sm" style="color:var(--w)">محمد كمال</div>
            <div class="text-xs" style="color:var(--w40)">وكيل عقارات مرخّص · 11 سنة خبرة · القاهرة</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="py-14" style="background:var(--bg2)">
  <div class="max-w-[720px] mx-auto px-5">
    <h2 class="font-display font-extrabold text-2xl mb-8 text-center" style="color:var(--w)" data-en="Quick answers." data-ar="إجابات سريعة.">إجابات سريعة.</h2>
    <div class="rounded-2xl overflow-hidden" style="border:1px solid var(--ta15)">
      <div class="px-6" style="background:var(--bg)">
        <div class="faq-item"><button class="faq-q" onclick="toggleFaq(0)"><span data-en="Do I need a teaching degree?" data-ar="هل أحتاج شهادة تدريس؟">هل أحتاج شهادة تدريس؟</span><div class="faq-chevron"><svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></div></button>
        <div class="faq-a" id="faq-0"><p class="text-sm pb-4" style="color:var(--w60)" data-en="No. Real-world experience beats credentials here. A sales manager with 10 years beats a certified trainer any day." data-ar="لا. الخبرة العملية تتفوق هنا. مدير مبيعات بـ 10 سنوات أهم من شهادة تدريس.">لا. الخبرة العملية تتفوق هنا. مدير مبيعات بـ 10 سنوات أهم من شهادة تدريس.</p></div></div>
        <div class="faq-item"><button class="faq-q" onclick="toggleFaq(1)"><span data-en="When and how do I get paid?" data-ar="متى وكيف أتقبّض؟">متى وكيف أتقبّض؟</span><div class="faq-chevron"><svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></div></button>
        <div class="faq-a" id="faq-1"><p class="text-sm pb-4" style="color:var(--w60)" data-en="Every Friday via bank transfer or Vodafone Cash. Minimum payout 200 EGP." data-ar="كل جمعة عبر تحويل بنكي أو فودافون كاش. حد أدنى 200 EGP.">كل جمعة عبر تحويل بنكي أو فودافون كاش. حد أدنى 200 EGP.</p></div></div>
        <div class="faq-item"><button class="faq-q" onclick="toggleFaq(2)"><span data-en="Can I set my own prices?" data-ar="أستطيع أحدد أسعاري؟">أستطيع أحدد أسعاري؟</span><div class="faq-chevron"><svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></div></button>
        <div class="faq-a" id="faq-2"><p class="text-sm pb-4" style="color:var(--w60)" data-en="Completely. Your services, your prices, your availability. HalaCareer never dictates pricing." data-ar="بالكامل. خدماتك وأسعارك ومتاحيتك. هلا كارير لا تملي التسعير أبداً.">بالكامل. خدماتك وأسعارك ومتاحيتك — هلا كارير لا تملي التسعير.</p></div></div>
        <div class="faq-item"><button class="faq-q" onclick="toggleFaq(3)"><span data-en="Do I have to upload a course?" data-ar="لازم أرفع كورس؟">لازم أرفع كورس؟</span><div class="faq-chevron"><svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></div></button>
        <div class="faq-a" id="faq-3"><p class="text-sm pb-4" style="color:var(--w60)" data-en="No. You can start with mentorship sessions only. Courses are optional." data-ar="لا. يمكنك البدء بالجلسات الفردية فقط. الكورسات اختيارية.">لا. يمكنك البدء بالجلسات الفردية فقط. الكورسات اختيارية.</p></div></div>
      </div>
    </div>
  </div>
</section>

<!-- REGISTER FORM -->
<section class="py-16" style="background:var(--bg)" id="register">
  <div class="max-w-[580px] mx-auto px-5">
    <div class="text-center mb-8">
      <div class="sec-eyebrow mb-3" data-en="Apply Now" data-ar="قدّم الآن">قدّم الآن</div>
      <h2 class="font-display font-extrabold text-2xl mb-2" style="color:var(--w)" data-en="Become a HalaCareer mentor." data-ar="كن منتوراً في هلا كارير.">كن منتوراً في هلا كارير.</h2>
      <p class="text-sm" style="color:var(--w60)" data-en="Free to join. We review in 24 hours." data-ar="الانضمام مجاني. نراجع خلال 24 ساعة.">الانضمام مجاني. نراجع خلال 24 ساعة.</p>
    </div>
    <div class="ds-card p-7">
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
        <div>
          <label class="hc-label text-xs font-bold mb-1.5 block" style="color:var(--w60)" data-en="Full Name *" data-ar="الاسم الكامل *">الاسم الكامل *</label>
          <input class="hc-input" data-en="Your name..." data-ar="اسمك..." placeholder="اسمك...">
        </div>
        <div>
          <label class="hc-label text-xs font-bold mb-1.5 block" style="color:var(--w60)" data-en="Phone *" data-ar="رقم الهاتف *">رقم الهاتف *</label>
          <input type="tel" class="hc-input" placeholder="+20 1XX XXX XXXX">
        </div>
        <div>
          <label class="hc-label text-xs font-bold mb-1.5 block" style="color:var(--w60)" data-en="Email *" data-ar="البريد الإلكتروني *">البريد الإلكتروني *</label>
          <input type="email" class="hc-input" placeholder="you@email.com">
        </div>
        <div>
          <label class="hc-label text-xs font-bold mb-1.5 block" style="color:var(--w60)" data-en="Main Field *" data-ar="مجالك الأساسي *">مجالك الأساسي *</label>
          <select class="hc-select w-full" style="width:100%">
            <option data-en="Select..." data-ar="اختر...">اختر...</option>
            <option data-en="Business & Sales" data-ar="أعمال ومبيعات">أعمال ومبيعات</option>
            <option data-en="Languages" data-ar="اللغات">اللغات</option>
            <option data-en="Real Estate" data-ar="عقارات">عقارات</option>
            <option data-en="Technology" data-ar="تكنولوجيا">تكنولوجيا</option>
            <option data-en="HR & Coaching" data-ar="HR وتطوير">HR وتطوير</option>
            <option data-en="Other" data-ar="أخرى">أخرى</option>
          </select>
        </div>
        <div class="sm:col-span-2">
          <label class="hc-label text-xs font-bold mb-1.5 block" style="color:var(--w60)" data-en="What do you want to offer?" data-ar="ماذا تريد أن تقدم؟">ماذا تريد أن تقدم؟</label>
          <div class="flex flex-wrap gap-2">
            <button type="button" class="chip" onclick="this.classList.toggle('on')" data-en="1-on-1 Mentorship" data-ar="إرشاد فردي">إرشاد فردي</button>
            <button type="button" class="chip" onclick="this.classList.toggle('on')" data-en="Recorded Courses" data-ar="كورسات مسجّلة">كورسات مسجّلة</button>
            <button type="button" class="chip" onclick="this.classList.toggle('on')" data-en="Live Sessions" data-ar="جلسات مباشرة">جلسات مباشرة</button>
            <button type="button" class="chip" onclick="this.classList.toggle('on')" data-en="Community" data-ar="مجتمع">مجتمع</button>
          </div>
        </div>
      </div>
      <button class="btn-p w-full py-3.5 text-sm font-bold" data-en="Submit Application →" data-ar="أرسل الطلب ←">أرسل الطلب ←</button>
      <p class="text-center text-xs mt-3" style="color:var(--w40)" data-en="Free · Reviewed in 24h · Weekly payouts" data-ar="مجاني · مراجعة خلال 24 ساعة · دفع أسبوعي">مجاني · مراجعة خلال 24 ساعة · دفع أسبوعي</p>
    </div>
  </div>
</section>

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
</footer><script>
// ── Theme ──
let isDark=true;
function toggleTheme(){
  isDark=!isDark;
  document.documentElement.classList.toggle('light',!isDark);
  ['ico-moon','mob-ico-moon'].forEach(id=>{var el=document.getElementById(id);if(el)el.classList.toggle('hidden',!isDark);});
  ['ico-sun','mob-ico-sun'].forEach(id=>{var el=document.getElementById(id);if(el)el.classList.toggle('hidden',isDark);});
  localStorage.setItem('hc-theme',isDark?'dark':'light');
}
(()=>{ if(localStorage.getItem('hc-theme')==='light'){ isDark=false; document.documentElement.classList.add('light'); document.getElementById('ico-moon').classList.add('hidden'); document.getElementById('ico-sun').classList.remove('hidden'); }})();

// ── Language ──
let isEn=true;
function toggleLang(){
  isEn=!isEn;
  applyLang();
  localStorage.setItem('hc-lang',isEn?'en':'ar');
}
function applyLang(){
  const h=document.documentElement;
  h.lang=isEn?'en':'ar'; h.dir=isEn?'ltr':'rtl';
  document.querySelectorAll('[data-en]').forEach(el=>{
    const v=isEn?el.dataset.en:el.dataset.ar;
    if(!v) return;
    if(el.tagName==='INPUT'&&el.type!=='radio'&&el.type!=='checkbox'){el.placeholder=v;return;}
    if(el.tagName==='SELECT'){return;}
    if(el.children.length===0||[...el.children].every(c=>c.tagName==='SVG'))el.textContent=v;
  });
}
(()=>{ if(localStorage.getItem('hc-lang')==='ar'){ isEn=false; applyLang(); }})();

// ── Nav scroll ──
window.addEventListener('scroll',()=>{
  const n=document.getElementById('hc-nav');
  if(!n) return;
  const light=document.documentElement.classList.contains('light');
  if(window.scrollY>40){
    n.style.background=light?'#ffffff':'rgba(3,13,23,.98)';
    n.style.borderColor=light?'#e5e7eb':'rgba(255,255,255,.12)';
  } else {
    n.style.background=light?'#ffffff':'rgba(3,13,23,.95)';
    n.style.borderColor=light?'#e5e7eb':'rgba(255,255,255,.08)';
  }
},{passive:true});

// ── Custom cursor ──
(function(){
  const cur=document.getElementById('hc-cursor');
  if(!cur) return;
  let mx=0,my=0,cx=0,cy=0;
  document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY;});
  function anim(){
    cx+=(mx-cx)*.16; cy+=(my-cy)*.16;
    cur.style.left=cx+'px'; cur.style.top=cy+'px';
    requestAnimationFrame(anim);
  }
  anim();
  // Grow on interactive elements
  const sel='a,button,.btn-p,.btn-g,.ds-card,.hc-card,.chip,.fp,.m-card,.job-card,.mentor-card,input,select,textarea';
  document.addEventListener('mouseover',e=>{
    if(e.target.closest(sel)) cur.classList.add('big');
  });
  document.addEventListener('mouseout',e=>{
    if(e.target.closest(sel)) cur.classList.remove('big');
  });
})();

// ── Chips ──
document.querySelectorAll('.chip-group').forEach(g=>{
  g.querySelectorAll('.chip').forEach(ch=>{
    ch.addEventListener('click',()=>{
      g.querySelectorAll('.chip').forEach(c=>c.classList.remove('on'));
      ch.classList.add('on');
    });
  });
});
document.querySelectorAll('.chip-multi .chip').forEach(ch=>{
  ch.addEventListener('click',()=>ch.classList.toggle('on'));
});

// ── Search popup ──
function openSearch(){
  const ov=document.getElementById('search-overlay');
  if(!ov) return;
  ov.classList.add('open');
  setTimeout(()=>document.getElementById('search-input')?.focus(),50);
}
function closeSearch(){
  document.getElementById('search-overlay')?.classList.remove('open');
}
document.addEventListener('keydown',e=>{if(e.key==='Escape')closeSearch();});
</script>
<script>
function toggleFaq(i){
  var q=document.querySelectorAll('.faq-q')[i], a=document.getElementById('faq-'+i);
  if(!q||!a) return;
  var open=q.classList.contains('open');
  document.querySelectorAll('.faq-q').forEach(function(x){x.classList.remove('open')});
  document.querySelectorAll('.faq-a').forEach(function(x){x.classList.remove('open')});
  if(!open){q.classList.add('open');a.classList.add('open')}
}
window.addEventListener('scroll',function(){
  var n=document.getElementById('hc-nav');if(!n)return;
  var light=document.documentElement.classList.contains('light');
  n.style.background=window.scrollY>40?(light?'#ffffff':'rgba(3,13,23,.97)'):(light?'#ffffff':'rgba(3,13,23,.95)');
  n.style.borderColor=light?'#e5e7eb':(window.scrollY>40?'rgba(255,255,255,.1)':'rgba(255,255,255,.08)');
},{passive:true});
document.addEventListener('DOMContentLoaded',function(){applyLang()});
</script>
</body></html>