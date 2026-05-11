<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>من نحن — هلا كارير — HalaCareer</title>
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
html.light{--bg:#ffffff;--bg2:#ffffff;--bg3:#ffffff;--t:#009e85;--tl:#00b89e;--td:#007a68;
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


/* ══ Card system (companies page pattern) ══ */
.feat-card{border-radius:1rem;border:1px solid var(--ta12);background:rgba(5,14,26,.75);
  padding:1.5rem;transition:border-color .2s}
.feat-card:hover{border-color:var(--ta25,rgba(0,212,184,.22))}
html.light .feat-card{background:#fff !important;border-color:rgba(0,212,184,.2) !important}
.feat-icon{width:44px;height:44px;border-radius:.85rem;flex-shrink:0;
  display:flex;align-items:center;justify-content:center;
  background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)}
.feat-icon svg{width:20px;height:20px}

.stat-big{font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:2.8rem;
  line-height:1;background:linear-gradient(135deg,#2de0ca,#009e85);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}

/* ══ Light mode: override CSS vars so all var(--bg) → white ══ */
html.light{--bg:#ffffff;--bg2:#ffffff;--bg3:#ffffff;--panel-bg:#ffffff}
html.light body{background:#ffffff !important;color:#111827 !important}
html.light body::after{display:none !important}
html.light canvas{display:none !important}

/* All dark rgba → white */
html.light [style*="background:rgba(5,14,26"]{background:#ffffff !important}
html.light [style*="background:rgba(4,11,22"]{background:#ffffff !important}
html.light [style*="background:rgba(5,16,30"]{background:#ffffff !important}
html.light [style*="background:rgba(3,13,23"]{background:#ffffff !important}
html.light [style*="background:rgba(2,8,18"]{background:#ffffff !important}
html.light [style*="background:rgba(0,5,14"]{background:#ffffff !important}
html.light [style*="background:rgba(5,20,36"]{background:#ffffff !important}

/* Dark gradients → white */
html.light [style*="background:linear-gradient(135deg,#031"]{background:#ffffff !important}
html.light [style*="background:linear-gradient(135deg,#100"]{background:#ffffff !important}
html.light [style*="background:linear-gradient(135deg,#1a1"]{background:#ffffff !important}
html.light [style*="background:linear-gradient(150deg,#020"]{background:#ffffff !important}

/* Teal tint sections → white */
html.light [style*="background:rgba(0,212,184,.05)"]{background:#ffffff !important}
html.light [style*="background:rgba(0,212,184,.06)"]{background:#ffffff !important}
html.light [style*="background:rgba(0,212,184,.07)"]{background:#ffffff !important}
html.light [style*="background:rgba(0,212,184,.08)"]{background:#ffffff !important}

/* No shadows */
html.light *{box-shadow:none !important}

/* Text */
html.light [style*="color:var(--w)"]  {color:#111827 !important}
html.light [style*="color:var(--w80)"]{color:#1f2937 !important}
html.light [style*="color:var(--w60)"]{color:#4b5563 !important}
html.light [style*="color:var(--w40)"]{color:#9ca3af !important}
html.light .grad{-webkit-text-fill-color:transparent !important}

/* Section borders */
html.light [style*="border-top:1px solid var(--ta"]{border-color:rgba(0,212,184,.15) !important}
html.light [style*="border-bottom:1px solid var(--ta"]{border-color:rgba(0,212,184,.15) !important}

/* Nav */
html.light #hc-nav{background:#ffffff !important;border-color:#e5e7eb !important}
html.light #hc-mob{background:#ffffff !important;border-color:#e5e7eb !important}

/* Dots/grids */
html.light .dotgrid,html.light .linegrid,html.light .hero-grid{opacity:.12 !important}
html.light .about-hero{background:#f8fffe !important}

/* Timeline */
html.light .tl-item{border-color:rgba(0,212,184,.12) !important}
html.light .tl-item .flex-1 [style*="color:var(--w)"]{color:#111827 !important}

/* Team carousel cards */
html.light .tcard{background:#fff !important;border-color:rgba(0,212,184,.18) !important}
html.light .tcard-visual{background:rgba(0,212,184,.08) !important}
html.light .tcard-geo{opacity:.05 !important}

/* CTA */
html.light .cta-section{background:#ffffff !important}
html.light .cta-glow{display:none}

/* Carousel outer */
html.light .carousel-outer [style*="background:linear-gradient(to right,var(--bg2)"]{
  background:linear-gradient(to right,#fff,transparent) !important}
html.light .carousel-outer [style*="background:linear-gradient(to left,var(--bg2)"]{
  background:linear-gradient(to left,#fff,transparent) !important}

/* Hero */
html.light .hero-mesh{background:radial-gradient(ellipse 80% 60% at 50% -10%,rgba(0,212,184,.1),transparent 65%) !important}

/* ══ HERO ══ */
.about-hero{position:relative;overflow:hidden;padding:8rem 0 5rem;background:var(--bg)}
.hero-mesh{position:absolute;inset:0;pointer-events:none;
  background:radial-gradient(ellipse 80% 60% at 50% -10%,rgba(0,212,184,.12),transparent 65%),
  radial-gradient(ellipse 40% 40% at 90% 60%,rgba(0,158,133,.08),transparent 55%)}
.hero-grid{position:absolute;inset:0;
  background-image:linear-gradient(rgba(0,212,184,.04) 1px,transparent 1px),
  linear-gradient(90deg,rgba(0,212,184,.04) 1px,transparent 1px);
  background-size:60px 60px;
  mask-image:radial-gradient(ellipse 100% 100% at 50% 0%,black 40%,transparent 80%)}
.hero-line{position:absolute;bottom:0;left:50%;transform:translateX(-50%);
  width:1px;height:80px;background:linear-gradient(to bottom,rgba(0,212,184,.4),transparent)}

/* ══ SECTION LABEL ══ */
.sec-label{font-size:.65rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;
  color:var(--tl);display:flex;align-items:center;gap:.6rem;margin-bottom:.75rem}
.sec-label::before{content:'';width:20px;height:1.5px;
  background:linear-gradient(to right,var(--t),transparent);flex-shrink:0}

/* ══ STAT BLOCK ══ */
.stat-block{text-align:center;padding:2rem 1rem;position:relative}
.stat-block::after{content:'';position:absolute;right:0;top:20%;bottom:20%;
  width:1px;background:var(--ta15)}
.stat-block:last-child::after{display:none}
@media(max-width:640px){.stat-block::after{display:none}.stat-block{
  border-bottom:1px solid var(--ta12)}.stat-block:last-child{border-bottom:none}}
html.light .stat-block::after{background:rgba(0,212,184,.15)}

/* ══ TIMELINE ══ */
.timeline-wrap{position:relative}
.tl-line{position:absolute;left:16px;top:0;bottom:0;width:2px;
  background:linear-gradient(to bottom,#2de0ca,transparent);opacity:.25}
html[dir=rtl] .tl-line{left:auto;right:16px}
.tl-dot{width:8px;height:8px;border-radius:50%;background:var(--tl);flex-shrink:0;
  box-shadow:0 0 0 3px rgba(0,212,184,.15);margin-top:5px;position:relative;z-index:1}
.tl-item{display:flex;gap:1.25rem;padding:1.1rem 0;border-bottom:1px solid var(--ta08)}
.tl-item:last-child{border-bottom:none}

/* ══ VALUES ══ */
.val-card{display:flex;gap:1rem;align-items:flex-start;padding:1.25rem;
  border-radius:1rem;border:1px solid var(--ta12);background:rgba(5,14,26,.6);
  transition:border-color .2s}
.val-card:hover{border-color:rgba(0,212,184,.22)}
html.light .val-card{background:#fff !important;border-color:rgba(0,212,184,.15) !important}
.val-num{font-family:'Bricolage Grotesque',sans-serif;font-size:2.2rem;font-weight:800;
  line-height:1;background:linear-gradient(135deg,rgba(0,212,184,.3),rgba(0,212,184,.08));
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;
  background-clip:text;flex-shrink:0;width:2.5rem}

/* ══ TEAM CAROUSEL ══ */
.carousel-outer{position:relative;overflow:hidden;padding:1rem 0 2rem}
.carousel-track{display:flex;gap:1.5rem;width:max-content;will-change:transform}
.tcard{width:300px;flex-shrink:0;border-radius:1rem;border:1px solid var(--ta12);
  background:rgba(5,14,26,.85);overflow:hidden;transition:border-color .25s,transform .25s}
.tcard:hover{border-color:rgba(0,212,184,.38);transform:translateY(-4px)}
.tcard-visual{height:130px;position:relative;overflow:hidden;
  display:flex;align-items:center;justify-content:center}
.tcard-geo{position:absolute;inset:0;opacity:.08;
  background-image:radial-gradient(rgba(0,212,184,1) 1px,transparent 1px);
  background-size:20px 20px}
.tcard-av{width:76px;height:76px;border-radius:50%;
  font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:1.7rem;
  display:flex;align-items:center;justify-content:center;position:relative;z-index:1;
  border:2.5px solid rgba(0,212,184,.25);
  box-shadow:0 0 0 5px rgba(0,212,184,.07)}
.tcard-body{padding:1.1rem 1.25rem 1.4rem}
.tcard-sv{font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:1rem;
  line-height:1;background:linear-gradient(135deg,#2de0ca,#009e85);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.tcard-sl{font-size:.55rem;font-weight:600;color:var(--w40);margin-top:.15rem}
.tcard-tag{font-size:.58rem;font-weight:700;padding:.2rem .6rem;border-radius:999px;
  background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)}

/* ══ CTA ══ */
.cta-section{position:relative;overflow:hidden;border-radius:1.5rem;
  border:1px solid var(--ta20);
  background:rgba(5,14,26,.85);padding:4rem 3rem;text-align:center}
.cta-section::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;
  background:linear-gradient(90deg,transparent,#2de0ca,transparent)}

/* ══ REVEAL ══ */
.reveal{opacity:0;transform:translateY(24px);
  transition:opacity .65s cubic-bezier(.22,1,.36,1),transform .65s cubic-bezier(.22,1,.36,1)}
.reveal.visible{opacity:1;transform:translateY(0)}

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

<!-- ══ HERO ══ -->
<section class="about-hero">
  <div class="hero-mesh"></div>
  <div class="hero-grid"></div>
  <div class="hero-line"></div>
  <div class="max-w-[1100px] mx-auto px-6 text-center relative z-10">
    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-bold mb-6 reveal" style="background:rgba(0,212,184,.1);border:1px solid rgba(0,212,184,.25);color:var(--tl)">
      <span class="w-1.5 h-1.5 rounded-full animate-pulse" style="background:var(--tl)"></span>
      <span data-en="Egypt's #1 Talent Development Ecosystem" data-ar="منظومة تطوير المواهب الأولى في مصر والمنطقة">منظومة تطوير المواهب الأولى في مصر والمنطقة</span>
    </div>
    <h1 class="font-display font-extrabold leading-tight mb-6 reveal" style="font-size:clamp(2rem,4.5vw,3.5rem);color:var(--w);transition-delay:.08s">
      <span data-en="We don't sell courses." data-ar="نحن لا نبيع كورسات.">نحن لا نبيع كورسات.</span><br>
      <span class="grad" data-en="We build careers." data-ar="نحن نبني مسارات مهنية.">نحن نبني مسارات مهنية.</span>
    </h1>
    <p class="text-lg leading-relaxed max-w-2xl mx-auto mb-8 reveal" style="color:var(--w60);transition-delay:.14s"
       data-en="HalaCareer is a three-sided talent development ecosystem connecting learners, experts, and companies — turning learning into verified employment."
       data-ar="هلا كارير منظومة ثلاثية الأطراف تربط المتعلمين والخبراء والشركات — وتُحوّل التعلم لتوظيف موثق.">هلا كارير منظومة ثلاثية الأطراف تربط المتعلمين والخبراء والشركات — وتُحوّل التعلم لتوظيف موثق.</p>
    <div class="flex flex-wrap items-center justify-center gap-3 reveal" style="transition-delay:.2s">
      <a href="halacareer-v7.html" class="btn-p px-7 py-2.5 text-sm font-bold inline-flex items-center gap-2">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
        <span data-en="Explore Platform" data-ar="استكشف المنصة">استكشف المنصة</span>
      </a>
      <a href="hc-mentor-join.html" class="btn-g px-7 py-2.5 text-sm font-semibold inline-flex items-center gap-2">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>
        <span data-en="Join as Mentor" data-ar="انضم كمنتور">انضم كمنتور</span>
      </a>
    </div>
  </div>
</section>

<!-- ══ STATS ══ -->
<div style="background:var(--bg2);border-top:1px solid var(--ta12);border-bottom:1px solid var(--ta12)">
  <div class="max-w-[1100px] mx-auto px-6">
    <div class="grid grid-cols-2 sm:grid-cols-4 reveal">
      <div class="stat-block">
        <div class="stat-big">$875M</div>
        <div class="text-xs mt-2 font-semibold" style="color:var(--w60)" data-en="Egypt EdTech market 2024" data-ar="سوق EdTech في مصر 2024">سوق EdTech في مصر 2024</div>
        <div class="text-[.58rem] mt-1" style="color:var(--w40)">IMARC Group، 2024</div>
      </div>
      <div class="stat-block">
        <div class="stat-big">21M</div>
        <div class="text-xs mt-2 font-semibold" style="color:var(--w60)" data-en="Egyptians aged 18–29" data-ar="مصري في سن 18–29">مصري في سن 18–29</div>
        <div class="text-[.58rem] mt-1" style="color:var(--w40)">CAPMAS، 2025</div>
      </div>
      <div class="stat-block">
        <div class="stat-big">+75%</div>
        <div class="text-xs mt-2 font-semibold" style="color:var(--w60)" data-en="Graduates lack job-ready skills" data-ar="من الخريجين بلا مهارات عملية">من الخريجين بلا مهارات عملية</div>
        <div class="text-[.58rem] mt-1" style="color:var(--w40)">World Bank</div>
      </div>
      <div class="stat-block">
        <div class="stat-big">24.46%</div>
        <div class="text-xs mt-2 font-semibold" style="color:var(--w60)" data-en="EdTech market CAGR 2025–2033" data-ar="نمو سنوي مركب للسوق">نمو سنوي مركب للسوق</div>
        <div class="text-[.58rem] mt-1" style="color:var(--w40)">IMARC Group</div>
      </div>
    </div>
  </div>
</div>

<!-- ══ MISSION ══ -->
<section class="py-20">
  <div class="max-w-[1100px] mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center reveal">
      <div>
        <div class="sec-label" data-en="Our Mission" data-ar="مهمتنا">مهمتنا</div>
        <h2 class="font-display font-extrabold text-3xl mb-5" style="color:var(--w)"
            data-en="Turning learning into real, verified employment"
            data-ar="تحويل التعلم إلى توظيف حقيقي وموثق">تحويل التعلم إلى توظيف حقيقي وموثق</h2>
        <p class="text-base leading-relaxed mb-4" style="color:var(--w60)"
           data-en="The Arab world has dozens of e-learning platforms. What it lacks is a platform where learning directly leads to employment — with verified data proving it."
           data-ar="العالم العربي لديه عشرات منصات التعلم الإلكتروني. ما ينقصه منصة يقود فيها التعلم مباشرة للتوظيف — مع بيانات موثقة تُثبت ذلك.">العالم العربي لديه عشرات منصات التعلم الإلكتروني. ما ينقصه منصة يقود فيها التعلم مباشرة للتوظيف — مع بيانات موثقة تُثبت ذلك.</p>
        <p class="text-base leading-relaxed" style="color:var(--w60)"
           data-en="HalaCareer is not competing with other EdTech platforms. We're building something they haven't: a full ecosystem that connects education, mentorship, and hiring in one integrated platform."
           data-ar="هلا كارير لا تنافس منصات EdTech الأخرى. نحن نبني شيئاً لم يبنوه: منظومة كاملة تربط التعليم والإرشاد والتوظيف في منصة واحدة.">هلا كارير لا تنافس منصات EdTech الأخرى. نحن نبني شيئاً لم يبنوه: منظومة كاملة تربط التعليم والإرشاد والتوظيف في منصة واحدة.</p>
      </div>
      <div class="grid grid-cols-1 gap-3">
        <div class="flex items-start gap-3 p-4 rounded-xl feat-card">
          <div class="feat-icon shrink-0"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="font-bold text-sm mb-0.5" style="color:var(--w)" data-en="3-Sided Marketplace" data-ar="مارکت بليس ثلاثي الأطراف">مارکت بليس ثلاثي الأطراف</div>
            <div class="text-xs" style="color:var(--w60)" data-en="Learners · Mentors · Companies — aligned incentives in one system." data-ar="متعلمون · منتورز · شركات — بحوافز متوافقة في منظومة واحدة.">متعلمون · منتورز · شركات — بحوافز متوافقة في منظومة واحدة.</div>
          </div>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl feat-card">
          <div class="feat-icon shrink-0"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="font-bold text-sm mb-0.5" style="color:var(--w)" data-en="Verified Placement Rates" data-ar="معدلات توظيف موثقة">معدلات توظيف موثقة</div>
            <div class="text-xs" style="color:var(--w60)" data-en="Real employment outcome data per track and mentor — a moat no competitor has built." data-ar="بيانات نتائج توظيف حقيقية لكل مسار ومنتور — الميزة التنافسية التي لم يبنها أحد.">بيانات نتائج توظيف حقيقية لكل مسار ومنتور — الميزة التنافسية التي لم يبنها أحد.</div>
          </div>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl feat-card">
          <div class="feat-icon shrink-0"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <div>
            <div class="font-bold text-sm mb-0.5" style="color:var(--w)" data-en="Gamification at the Core" data-ar="تلعيب في صميم المنتج">تلعيب في صميم المنتج</div>
            <div class="text-xs" style="color:var(--w60)" data-en="Completion rates jump from 5–10% to 40–70% with thoughtful gamification. No competitor has done this yet." data-ar="معدلات إتمام من 5–10% إلى 40–70% مع تلعيب مدروس. لا منافس فعله بعد.">معدلات إتمام من 5–10% إلى 40–70% مع تلعيب مدروس. لا منافس فعله بعد.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ WHAT MAKES US DIFFERENT ══ -->
<section class="py-16" style="background:var(--bg2);border-top:1px solid var(--ta12);border-bottom:1px solid var(--ta12)">
  <div class="max-w-[1100px] mx-auto px-6">
    <div class="text-center mb-10 reveal">
      <div class="sec-label justify-center" data-en="Why We're Different" data-ar="ما يجعلنا مختلفين">ما يجعلنا مختلفين</div>
      <h2 class="font-display font-extrabold text-3xl" style="color:var(--w)"
          data-en="Other platforms teach. HalaCareer places."
          data-ar="المنصات الأخرى تُعلّم. هلا كارير تُوظّف.">المنصات الأخرى تُعلّم. هلا كارير تُوظّف.</h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 reveal">
      <div class="feat-card">
        <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
        <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Real 1:1 Mentorship" data-ar="إرشاد حقيقي 1:1">إرشاد حقيقي 1:1</h3>
        <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Not just videos. Every mentor sets their own services, pricing, and community — you book directly." data-ar="ليس مجرد فيديوهات. كل منتور يحدد خدماته وأسعاره ومجتمعه — وأنت تحجز مباشرة.">ليس مجرد فيديوهات. كل منتور يحدد خدماته وأسعاره ومجتمعه — وأنت تحجز مباشرة.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2zM16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div>
        <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Direct Talent Marketplace" data-ar="سوق مواهب مباشر">سوق مواهب مباشر</h3>
        <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Companies search for ready talent inside the platform — not on LinkedIn or external job boards." data-ar="الشركات تبحث عن مواهب جاهزة داخل المنصة — لا على LinkedIn أو بوابات خارجية.">الشركات تبحث عن مواهب جاهزة داخل المنصة — لا على LinkedIn أو بوابات خارجية.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Gamification That Keeps You Learning" data-ar="تلعيب يُبقيك تتعلم">تلعيب يُبقيك تتعلم</h3>
        <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Traditional platforms have 5–10% completion. Here we reach 70% with XP, levels, and challenges." data-ar="معدلات إتمام المنصات التقليدية 5–10%. هنا نصل لـ 70% مع XP ومستويات وتحديات.">معدلات إتمام المنصات التقليدية 5–10%. هنا نصل لـ 70% مع XP ومستويات وتحديات.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/></svg></div>
        <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Verified Placement Data" data-ar="بيانات التوظيف الموثقة">بيانات التوظيف الموثقة</h3>
        <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Per track and mentor: real placement rates. A moat that compounds over time and cannot be replicated." data-ar="لكل مسار ومنتور: نسبة التوظيف الحقيقية. ميزة تتراكم مع الوقت ولا يمكن تقليدها.">لكل مسار ومنتور: نسبة التوظيف الحقيقية. ميزة تتراكم مع الوقت ولا يمكن تقليدها.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 100 20A10 10 0 0012 2zM2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
        <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Regional Pricing" data-ar="تسعير حسب منطقتك">تسعير حسب منطقتك</h3>
        <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Egypt, Gulf, Europe, America — each region has its own pricing tier. No one-size-fits-all subscription." data-ar="مصر، الخليج، أوروبا، أمريكا — لكل منطقة نظام نقاط مناسب. لا اشتراك موحد.">مصر، الخليج، أوروبا، أمريكا — لكل منطقة نظام نقاط مناسب. لا اشتراك موحد.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM22 21v-2a4 4 0 00-4-4h-1"/></svg></div>
        <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Mentor Communities" data-ar="مجتمعات المنتورز">مجتمعات المنتورز</h3>
        <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Every mentor builds their own community. Social learning is 10x more powerful than solo learning." data-ar="كل منتور يبني مجتمعه الخاص. التعلم الاجتماعي أقوى 10 مرات من التعلم الفردي.">كل منتور يبني مجتمعه الخاص. التعلم الاجتماعي أقوى 10 مرات من التعلم الفردي.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ MODULES ══ -->
<section class="py-20">
  <div class="max-w-[1100px] mx-auto px-6">
    <div class="text-center mb-12 reveal">
      <div class="sec-label justify-center" data-en="How It Works" data-ar="كيف تعمل المنصة">كيف تعمل المنصة</div>
      <h2 class="font-display font-extrabold text-3xl mb-3" style="color:var(--w)"
          data-en="One journey. Four systems. One result."
          data-ar="رحلة واحدة. أربعة أنظمة. نتيجة واحدة.">رحلة واحدة. أربعة أنظمة. نتيجة واحدة.</h2>
      <p class="text-sm max-w-xl mx-auto" style="color:var(--w60)"
         data-en="HalaCareer is not one platform — it's 4 integrated systems with one goal: verified employment."
         data-ar="هلا كارير ليست منصة واحدة — هي 4 أنظمة متكاملة بهدف واحد: توظيف موثق.">هلا كارير ليست منصة واحدة — هي 4 أنظمة متكاملة بهدف واحد: توظيف موثق.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 relative reveal">
      <div class="hidden lg:block absolute top-14 left-[10%] right-[10%] h-px" style="background:linear-gradient(90deg,transparent,rgba(0,212,184,.25) 20%,rgba(0,212,184,.25) 80%,transparent)"></div>
      <div class="feat-card text-center relative">
        <div class="absolute -top-3 end-4 w-6 h-6 rounded-full flex items-center justify-center text-[.62rem] font-bold" style="background:var(--tl);color:#020e18">1</div>
        <div class="feat-icon mx-auto mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5zM6 12v5c3 3 9 3 12 0v-5"/></svg></div>
        <div class="font-display font-bold text-base mb-1 grad" data-en="HalaCareer — Learn" data-ar="هلا كارير — التعلم">هلا كارير — التعلم</div>
        <p class="text-xs leading-relaxed mb-3" style="color:var(--w60)" data-en="Recorded diplomas, live sessions, and e-books. Content built on real market requirements." data-ar="دبلومات مسجلة وجلسات مباشرة وكتب إلكترونية. محتوى مبني على متطلبات سوق العمل الفعلية.">دبلومات مسجلة وجلسات مباشرة وكتب إلكترونية. محتوى مبني على متطلبات سوق العمل الفعلية.</p>
        <div class="flex flex-wrap gap-1.5 justify-center"><span class="text-[.58rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Diplomas" data-ar="دبلومات">دبلومات</span><span class="text-[.58rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Live" data-ar="مباشر">مباشر</span><span class="text-[.58rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Books" data-ar="كتب">كتب</span><span class="text-[.58rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Tracks" data-ar="مسارات">مسارات</span></div>
      </div>
      <div class="feat-card text-center relative">
        <div class="absolute -top-3 end-4 w-6 h-6 rounded-full flex items-center justify-center text-[.62rem] font-bold" style="background:var(--tl);color:#020e18">2</div>
        <div class="feat-icon mx-auto mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
        <div class="font-display font-bold text-base mb-1 grad" data-en="HalaCareer — Mentor" data-ar="هلا كارير — الإرشاد">هلا كارير — الإرشاد</div>
        <p class="text-xs leading-relaxed mb-3" style="color:var(--w60)" data-en="The mentor sets their services, pricing, and schedule. Students book directly. Private communities per mentor." data-ar="المنتور يحدد خدماته وأسعاره وجدوله. الطالب يحجز مباشرة. مجتمعات خاصة لكل منتور.">المنتور يحدد خدماته وأسعاره وجدوله. الطالب يحجز مباشرة. مجتمعات خاصة لكل منتور.</p>
        <div class="flex flex-wrap gap-1.5 justify-center"><span class="text-[.58rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="1:1 Sessions" data-ar="جلسات 1:1">جلسات 1:1</span><span class="text-[.58rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Communities" data-ar="مجتمعات">مجتمعات</span><span class="text-[.58rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Paid Content" data-ar="محتوى مدفوع">محتوى مدفوع</span></div>
      </div>
      <div class="feat-card text-center relative">
        <div class="absolute -top-3 end-4 w-6 h-6 rounded-full flex items-center justify-center text-[.62rem] font-bold" style="background:var(--tl);color:#020e18">3</div>
        <div class="feat-icon mx-auto mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2zM16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div>
        <div class="font-display font-bold text-base mb-1 grad" data-en="HalaCareer — Work" data-ar="هلا كارير — التوظيف">هلا كارير — التوظيف</div>
        <p class="text-xs leading-relaxed mb-3" style="color:var(--w60)" data-en="The learner builds a verified profile. Companies search and contact directly. No external middleman." data-ar="الطالب ينشئ ملفاً موثقاً. الشركات تبحث وتتواصل مباشرة. لا وسيط خارجي.">الطالب ينشئ ملفاً موثقاً. الشركات تبحث وتتواصل مباشرة. لا وسيط خارجي.</p>
        <div class="flex flex-wrap gap-1.5 justify-center"><span class="text-[.58rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Jobs" data-ar="وظائف">وظائف</span><span class="text-[.58rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Talent DB" data-ar="قاعدة مواهب">قاعدة مواهب</span><span class="text-[.58rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Verified Profile" data-ar="ملف موثق">ملف موثق</span></div>
      </div>
      <div class="feat-card text-center relative">
        <div class="absolute -top-3 end-4 w-6 h-6 rounded-full flex items-center justify-center text-[.62rem] font-bold" style="background:var(--tl);color:#020e18">4</div>
        <div class="feat-icon mx-auto mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20V10M18 20V4M6 20v-4"/></svg></div>
        <div class="font-display font-bold text-base mb-1 grad" data-en="HalaCareer — Pro" data-ar="هلا كارير — المؤسسي">هلا كارير — المؤسسي</div>
        <p class="text-xs leading-relaxed mb-3" style="color:var(--w60)" data-en="Companies train their teams inside the platform. Real-time performance reports. Annual contracts." data-ar="الشركات تُدرّب فرقها داخل المنصة. تقارير أداء لحظية. عقود سنوية.">الشركات تُدرّب فرقها داخل المنصة. تقارير أداء لحظية. عقود سنوية.</p>
        <div class="flex flex-wrap gap-1.5 justify-center"><span class="text-[.58rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Corporate Training" data-ar="تدريب مؤسسي">تدريب مؤسسي</span><span class="text-[.58rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Analytics" data-ar="تحليلات">تحليلات</span><span class="text-[.58rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="B2B" data-ar="B2B">B2B</span></div>
      </div>
    </div>
    <div class="mt-6 rounded-xl p-4 flex flex-wrap items-center justify-center gap-2 text-sm reveal" style="border:1px solid var(--ta12);background:rgba(0,212,184,.04)">
      <span style="color:var(--w)" data-en="Learner enters" data-ar="المتعلم يدخل">المتعلم يدخل</span>
      <svg class="w-4 h-4 opacity-35" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      <span style="color:var(--tl)" data-en="Learns" data-ar="يتعلم">يتعلم</span>
      <svg class="w-4 h-4 opacity-35" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      <span style="color:var(--tl)" data-en="Gets mentored" data-ar="يُرشَد">يُرشَد</span>
      <svg class="w-4 h-4 opacity-35" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      <span style="color:var(--tl)" data-en="Profile built" data-ar="يُبنى ملفه">يُبنى ملفه</span>
      <svg class="w-4 h-4 opacity-35" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      <span class="font-bold px-3 py-0.5 rounded-full" style="background:var(--tl);color:#020e18" data-en="Gets hired ✓" data-ar="يُوظَّف ✓">يُوظَّف ✓</span>
    </div>
  </div>
</section>

<!-- ══ VALUES ══ -->
<section class="py-16" style="background:var(--bg2);border-top:1px solid var(--ta12)">
  <div class="max-w-[1100px] mx-auto px-6">
    <div class="text-center mb-12 reveal">
      <div class="sec-label justify-center" data-en="Our Principles" data-ar="مبادئنا">مبادئنا</div>
      <h2 class="font-display font-extrabold text-3xl" style="color:var(--w)"
          data-en="What we believe — and how we differ"
          data-ar="ما نؤمن به — وكيف نختلف">ما نؤمن به — وكيف نختلف</h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 reveal">
      <div class="val-card">
        <div class="val-num">01</div>
        <div>
          <div class="font-bold text-base mb-1" style="color:var(--w)" data-en="Employment Is The Only Metric" data-ar="التوظيف هو المعيار الوحيد">التوظيف هو المعيار الوحيد</div>
          <div class="text-sm leading-relaxed" style="color:var(--w60)" data-en="We don't measure success by student or course count. We measure it by real jobs obtained." data-ar="لا نقيس النجاح بعدد الطلاب أو الكورسات. نقيسه بعدد من حصلوا على وظيفة حقيقية.">لا نقيس النجاح بعدد الطلاب أو الكورسات. نقيسه بعدد من حصلوا على وظيفة حقيقية.</div>
        </div>
      </div>
      <div class="val-card">
        <div class="val-num">02</div>
        <div>
          <div class="font-bold text-base mb-1" style="color:var(--w)" data-en="Verified Placement Data Is Our Moat" data-ar="بيانات التوظيف الموثقة هي ميزتنا">بيانات التوظيف الموثقة هي ميزتنا</div>
          <div class="text-sm leading-relaxed" style="color:var(--w60)" data-en="Real placement rate data per track and mentor. A moat that compounds over time." data-ar="أرقام حقيقية لمعدلات توظيف كل مسار وكل منتور. ميزة تتراكم مع الوقت.">أرقام حقيقية لمعدلات توظيف كل مسار وكل منتور. ميزة تتراكم مع الوقت.</div>
        </div>
      </div>
      <div class="val-card">
        <div class="val-num">03</div>
        <div>
          <div class="font-bold text-base mb-1" style="color:var(--w)" data-en="Full Mentor Autonomy" data-ar="المنتور يستحق الاستقلالية الكاملة">المنتور يستحق الاستقلالية الكاملة</div>
          <div class="text-sm leading-relaxed" style="color:var(--w60)" data-en="Every mentor sets their services, pricing, and community. We are the container — they are the content." data-ar="كل منتور يحدد خدماته وأسعاره ومجتمعه. نحن الوعاء — هم المحتوى والعلاقة.">كل منتور يحدد خدماته وأسعاره ومجتمعه. نحن الوعاء — هم المحتوى والعلاقة.</div>
        </div>
      </div>
      <div class="val-card">
        <div class="val-num">04</div>
        <div>
          <div class="font-bold text-base mb-1" style="color:var(--w)" data-en="Gamification Is the Core" data-ar="التلعيب هو القلب، لا مجرد إضافة">التلعيب هو القلب، لا مجرد إضافة</div>
          <div class="text-sm leading-relaxed" style="color:var(--w60)" data-en="Completion rate without gamification: 5–10%. With thoughtful gamification: 40–70%. That gap IS growth." data-ar="Completion rate بدون تلعيب: 5–10%. مع تلعيب مدروس: 40–70%. هذا الفرق هو النمو.">Completion rate بدون تلعيب: 5–10%. مع تلعيب مدروس: 40–70%. هذا الفرق هو النمو.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ TIMELINE ══ -->
<section class="py-20">
  <div class="max-w-[800px] mx-auto px-6">
    <div class="text-center mb-12 reveal">
      <div class="sec-label justify-center" data-en="Our Journey" data-ar="رحلتنا">رحلتنا</div>
      <h2 class="font-display font-extrabold text-3xl" style="color:var(--w)"
          data-en="From idea to ecosystem"
          data-ar="من فكرة إلى منظومة">من فكرة إلى منظومة</h2>
    </div>
    <div class="timeline-wrap ps-8 reveal" style="padding-inline-start:2.25rem">
      <div class="tl-line"></div>
      <div class="tl-item">
        <div class="tl-dot"></div>
        <div class="flex-1">
          <div class="text-[.65rem] font-bold mb-0.5" style="color:var(--tl)">Q1 2024</div>
          <div class="font-bold text-base mb-1" style="color:var(--w)" data-en="Foundation & Vision" data-ar="التأسيس والرؤية">التأسيس والرؤية</div>
          <div class="text-sm leading-relaxed" style="color:var(--w60)" data-en="HalaCareer founded with a clear mission: bridge the gap between education and employment in MENA." data-ar="تأسيس هلا كارير بمهمة واضحة: سد الفجوة بين التعليم وسوق العمل في MENA.">تأسيس هلا كارير بمهمة واضحة: سد الفجوة بين التعليم وسوق العمل في MENA.</div>
        </div>
      </div>
      <div class="tl-item">
        <div class="tl-dot"></div>
        <div class="flex-1">
          <div class="text-[.65rem] font-bold mb-0.5" style="color:var(--tl)">Q3 2024</div>
          <div class="font-bold text-base mb-1" style="color:var(--w)" data-en="Product Build" data-ar="بناء المنتج">بناء المنتج</div>
          <div class="text-sm leading-relaxed" style="color:var(--w60)" data-en="Built learning & mentorship MVP. First 500 users across target sectors." data-ar="بناء MVP منصة التعلم والإرشاد. أول 500 مستخدم في القطاعات المستهدفة.">بناء MVP منصة التعلم والإرشاد. أول 500 مستخدم في القطاعات المستهدفة.</div>
        </div>
      </div>
      <div class="tl-item">
        <div class="tl-dot"></div>
        <div class="flex-1">
          <div class="text-[.65rem] font-bold mb-0.5" style="color:var(--tl)">Q1 2025</div>
          <div class="font-bold text-base mb-1" style="color:var(--w)" data-en="Commercial Launch" data-ar="الإطلاق التجاري">الإطلاق التجاري</div>
          <div class="text-sm leading-relaxed" style="color:var(--w60)" data-en="Official launch with 4 sectors: Business, Languages, Real Estate, Teacher Prep." data-ar="إطلاق رسمي مع 4 قطاعات: بيزنس، لغات، عقارات، إعداد معلمين.">إطلاق رسمي مع 4 قطاعات: بيزنس، لغات، عقارات، إعداد معلمين.</div>
        </div>
      </div>
      <div class="tl-item">
        <div class="tl-dot"></div>
        <div class="flex-1">
          <div class="text-[.65rem] font-bold mb-0.5" style="color:var(--tl)">Q3 2025</div>
          <div class="font-bold text-base mb-1" style="color:var(--w)" data-en="Corporate Partnerships" data-ar="شراكات الشركات">شراكات الشركات</div>
          <div class="text-sm leading-relaxed" style="color:var(--w60)" data-en="First 20 corporate partners. Launch of enterprise training and direct talent marketplace." data-ar="أول 20 شركة شريكة. بدء برامج التدريب المؤسسي وسوق التوظيف المباشر.">أول 20 شركة شريكة. بدء برامج التدريب المؤسسي وسوق التوظيف المباشر.</div>
        </div>
      </div>
      <div class="tl-item">
        <div class="tl-dot"></div>
        <div class="flex-1">
          <div class="text-[.65rem] font-bold mb-0.5" style="color:var(--tl)">2026+</div>
          <div class="font-bold text-base mb-1" style="color:var(--w)" data-en="Gulf Expansion" data-ar="التوسع الخليجي">التوسع الخليجي</div>
          <div class="text-sm leading-relaxed" style="color:var(--w60)" data-en="Expansion into Gulf markets with adapted pricing model and local partnerships." data-ar="توسع إلى السوق الخليجي مع نموذج أسعار مخصص وشراكات محلية.">توسع إلى السوق الخليجي مع نموذج أسعار مخصص وشراكات محلية.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ TEAM CAROUSEL ══ -->
<section class="py-16" style="background:var(--bg2);border-top:1px solid var(--ta12)">
  <div class="max-w-[1100px] mx-auto px-6 mb-12">
    <div class="text-center reveal">
      <div class="sec-label justify-center" data-en="The Founders" data-ar="المؤسسون">المؤسسون</div>
      <h2 class="font-display font-extrabold text-3xl mb-4" style="color:var(--w)"
          data-en="Built by people who lived the problem"
          data-ar="بُني بأشخاص عاشوا المشكلة">بُني بأشخاص عاشوا المشكلة</h2>
      <p class="text-base max-w-xl mx-auto" style="color:var(--w60)"
         data-en="Every founder personally experienced the gap between education and employment in Egypt and the Arab world."
         data-ar="كل مؤسس عاش شخصياً الفجوة بين التعليم والتوظيف في مصر والعالم العربي.">كل مؤسس عاش شخصياً الفجوة بين التعليم والتوظيف في مصر والعالم العربي.</p>
    </div>
  </div>
  <div class="carousel-outer">
    <div style="position:absolute;top:0;left:0;bottom:0;width:100px;z-index:10;background:linear-gradient(to right,var(--bg2),transparent);pointer-events:none"></div>
    <div style="position:absolute;top:0;right:0;bottom:0;width:100px;z-index:10;background:linear-gradient(to left,var(--bg2),transparent);pointer-events:none"></div>
    <div class="carousel-track" id="ctrack"></div>
  </div>
</section>

<!-- ══ CTA ══ -->
<section class="py-20">
  <div class="max-w-[900px] mx-auto px-6">
    <div class="cta-section reveal">
      <div class="relative z-10">
        <div class="sec-label justify-center mb-5" data-en="Join The Mission" data-ar="انضم للمهمة">انضم للمهمة</div>
        <h2 class="font-display font-extrabold mb-4" style="font-size:clamp(1.8rem,4vw,3rem);color:var(--w)"
            data-en="Be part of the change"
            data-ar="كن جزءاً من التغيير">كن جزءاً من التغيير</h2>
        <p class="text-base mb-2 max-w-xl mx-auto" style="color:var(--w60)"
           data-en="Egypt's EdTech market is $875M and heading to $2.38B by 2033."
           data-ar="سوق EdTech في مصر يبلغ $875M ويتجه لـ $2.38B بحلول 2033.">سوق EdTech في مصر يبلغ $875M ويتجه لـ $2.38B بحلول 2033.</p>
        <p class="text-base mb-8 max-w-xl mx-auto" style="color:var(--w60)"
           data-en="Whether you're a learner, an expert, or a company — HalaCareer is built for you."
           data-ar="سواء كنت متعلماً أو خبيراً أو شركة — هلا كارير مبنية لك.">سواء كنت متعلماً أو خبيراً أو شركة — هلا كارير مبنية لك.</p>
        <div class="flex flex-wrap items-center justify-center gap-3">
          <a href="halacareer-v7.html" class="btn-p px-8 py-3 text-base font-bold inline-flex items-center gap-2">
            <span data-en="Start Learning" data-ar="ابدأ التعلم">ابدأ التعلم</span>
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="hc-companies.html" class="btn-g px-8 py-3 text-base font-semibold" data-en="For Companies →" data-ar="للشركات →">للشركات →</a>
          <a href="hc-mentor-join.html" class="btn-g px-8 py-3 text-base font-semibold" data-en="Join as Mentor →" data-ar="انضم كمنتور →">انضم كمنتور →</a>
        </div>
      </div>
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
</footer>

<script>
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
// ─── Scroll reveal ────────────────────────────────
var _rObs = new IntersectionObserver(function(entries) {
  entries.forEach(function(e) {
    if (e.isIntersecting) { e.target.classList.add('visible'); _rObs.unobserve(e.target); }
  });
}, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
document.querySelectorAll('.reveal').forEach(function(el, i) {
  el.style.transitionDelay = (i % 5 * 0.06) + 's';
  _rObs.observe(el);
});

// ─── Team carousel (RAF) ─────────────────────────
var TEAM = [{na:"عمار إلمنياوي",ne:"Ammar Elminyawi",ra:"المؤسس والرئيس التنفيذي",re:"Founder & CEO",i:"AE",g:"linear-gradient(135deg,#031c18,#052e28)",av:"linear-gradient(135deg,#2de0ca,#009e85)",avc:"rgba(0,0,0,.65)",stats:[["8+","سنوات","years in EdTech"],["200K+","مستخدم","users reached"],["3","منتجات","products launched"]],tags:["EdTech Strategy","Talent Platforms","B2B"],qa:"رأيت ملايين الخريجين يتعثرون لأن التعليم لا يُترجَم لفرص. هلا كارير هي الجسر.",qe:"I saw millions of graduates struggle because education doesn`t translate to opportunity. HalaCareer is the bridge.",ba:"مؤسس هلا كارير ومهندس رؤيتها. خبرة عميقة في بناء منصات التعلم الرقمي وأنظمة تطوير المواهب في السوق المصري والعربي.",be:"HalaCareer founder and vision architect. Deep expertise in building digital learning platforms and talent development systems in the Egyptian and Arab market."},{na:"سارة حسن",ne:"Sara Hassan",ra:"المؤسسة المشاركة — رئيسة المنتج",re:"Co-Founder & CPO",i:"SH",g:"linear-gradient(135deg,#100c30,#1e1550)",av:"linear-gradient(135deg,#a78bfa,#7c3aed)",avc:"rgba(0,0,0,.55)",stats:[["5+","سنوات","years in Product"],["0→50K","مستخدم","users in 12 months"],["94%","رضا","user satisfaction"]],tags:["Product Management","UX Research","Growth"],qa:"المنتج الجيد يشعرك بالإنجاز كل يوم. هذا ما نبنيه.",qe:"A good product makes you feel accomplished every day. That`s what we`re building.",ba:"مديرة منتج سابقة في شركات تقنية رائدة. خبرة في تحويل البيانات لقرارات منتج ناجحة في بيئات EdTech.",be:"Former product manager at leading tech companies. Expertise in turning data into winning product decisions in EdTech environments."},{na:"كريم سامح",ne:"Karim Sameh",ra:"الرئيس التقني — CTO",re:"Co-Founder & CTO",i:"KS",g:"linear-gradient(135deg,#031818,#062a22)",av:"linear-gradient(135deg,#34d399,#0d9488)",avc:"rgba(0,0,0,.65)",stats:[["10+","سنوات","years in engineering"],["3","منصات","SaaS platforms built"],["1M+","معاملة","transactions/day capacity"]],tags:["System Architecture","SaaS","API Design"],qa:"التقنية خادمة للمنتج. أبني أنظمة تصمد أمام النمو دون أن يشعر المستخدم بشيء.",qe:"Technology serves the product. I build systems that handle scale without the user noticing.",ba:"مهندس برمجيات بخبرة 10+ سنوات في بناء منصات SaaS قابلة للتوسع في منطقة MENA.",be:"Software engineer with 10+ years building scalable SaaS platforms across the MENA region."},{na:"نور الدين",ne:"Nour El-Din",ra:"رئيس النمو والإيرادات",re:"Head of Growth & Revenue",i:"ND",g:"linear-gradient(135deg,#1a1000,#2a1a00)",av:"linear-gradient(135deg,#fbbf24,#d97706)",avc:"rgba(0,0,0,.65)",stats:[["+300%","نمو","revenue growth"],["18","شهراً","months to hit target"],["20+","شركة","corporate partners closed"]],tags:["Revenue Growth","B2B Sales","Partnerships"],qa:"النمو ليس إعلانات. هو منتج يحكي قصته بنفسه.",qe:"Growth isn`t ads. It`s a product that tells its own story.",ba:"قاد نمو الإيرادات في منصات تعليمية مصرية رائدة. خبرة في B2B وشراكات الشركات والجامعات.",be:"Led revenue growth at leading Egyptian EdTech platforms. Expertise in B2B sales, corporate, and university partnerships."}];

function buildCard(m) {
  var statsHtml = m.stats.map(function(s) {
    return '<div class="flex flex-col me-3">'
      + '<span class="tcard-sv">' + s[0] + '</span>'
      + '<span class="tcard-sl" data-en="' + s[2] + '" data-ar="' + s[1] + '">' + s[1] + '</span>'
      + '</div>';
  }).join('');
  var tagsHtml = m.tags.map(function(t) { return '<span class="tcard-tag">' + t + '</span>'; }).join('');
  return '<div class="tcard">'
    + '<div class="tcard-visual" style="background:' + m.g + '">'
    + '<div class="tcard-geo"></div>'
    + '<div class="tcard-av" style="background:' + m.av + ';color:' + m.avc + '">' + m.i + '</div>'
    + '</div>'
    + '<div class="tcard-body">'
    + '<div class="font-display font-extrabold text-base leading-tight mb-0.5" style="color:var(--w)" data-en="' + m.ne + '" data-ar="' + m.na + '">' + m.na + '</div>'
    + '<div class="text-xs mb-2" style="color:var(--tl)" data-en="' + m.re + '" data-ar="' + m.ra + '">' + m.ra + '</div>'
    + '<div class="flex flex-wrap gap-0 mb-2">' + statsHtml + '</div>'
    + '<div class="text-[.7rem] italic leading-relaxed mb-2" style="color:var(--w60);border-inline-start:2px solid var(--ta20);padding-inline-start:.6rem" data-en="' + m.qe + '" data-ar="' + m.qa + '">' + m.qa + '</div>'
    + '<p class="text-[.7rem] leading-relaxed mb-2" style="color:var(--w40)" data-en="' + m.be + '" data-ar="' + m.ba + '">' + m.ba + '</p>'
    + '<div class="flex flex-wrap gap-1">' + tagsHtml + '</div>'
    + '</div></div>';
}

(function initCarousel() {
  var track = document.getElementById('ctrack');
  if (!track) return;
  var html = '';
  for (var i = 0; i < 3; i++) { TEAM.forEach(function(m) { html += buildCard(m); }); }
  track.innerHTML = html;
  requestAnimationFrame(function waitForLayout() {
    var total = track.scrollWidth;
    var single = total / 3;
    if (single < 10) { requestAnimationFrame(waitForLayout); return; }
    var pos = 0, paused = false, speed = 0.45;
    track.parentElement.addEventListener('mouseenter', function() { paused = true; });
    track.parentElement.addEventListener('mouseleave', function() { paused = false; });
    function raf() {
      if (!paused) { pos += speed; if (pos >= single) pos -= single; track.style.transform = 'translateX(-' + pos.toFixed(2) + 'px)'; }
      requestAnimationFrame(raf);
    }
    raf();
    applyLang();
  });
})();
</script>
</body>
</html>