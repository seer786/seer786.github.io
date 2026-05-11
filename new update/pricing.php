<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>أسعارنا — هلا كارير — HalaCareer</title>
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


:root{--bg:#030d17;--bg2:#04111e;--t:#00d4b8;--tl:#2de0ca;--td:#009e85;
  --ta30:rgba(0,212,184,.30);--ta20:rgba(0,212,184,.20);--ta15:rgba(0,212,184,.15);
  --ta12:rgba(0,212,184,.12);--ta08:rgba(0,212,184,.08);
  --w:#fff;--w80:rgba(255,255,255,.80);--w60:rgba(255,255,255,.60);
  --w40:rgba(255,255,255,.40);--w10:rgba(255,255,255,.10);--w06:rgba(255,255,255,.06)}
html.light{--bg:#fff;--bg2:#fff;--t:#009e85;--tl:#00c4a8;--td:#007a68;
  --ta20:rgba(0,212,184,.18);--ta12:rgba(0,212,184,.12);--ta08:rgba(0,212,184,.07);
  --w:#0a2220;--w80:rgba(10,34,32,.80);--w60:rgba(10,34,32,.58);--w40:rgba(10,34,32,.38);
  --w10:rgba(10,34,32,.09);--w06:rgba(10,34,32,.06)}
html.light body{background:#fff !important;color:#111827 !important}
html.light body::after{display:none !important}
html.light *{box-shadow:none !important}
html.light [style*="background:rgba(5,14,26"]{background:#fff !important}
html.light [style*="background:rgba(4,11,22"]{background:#fff !important}
html.light [style*="background:rgba(3,13,23"]{background:#fff !important}
html.light [style*="color:var(--w)"]  {color:#111827 !important}
html.light [style*="color:var(--w80)"]{color:#1f2937 !important}
html.light [style*="color:var(--w60)"]{color:#4b5563 !important}
html.light [style*="color:var(--w40)"]{color:#9ca3af !important}
html.light .grad{-webkit-text-fill-color:transparent !important}
html.light #hc-nav{background:#fff !important;border-color:#e5e7eb !important}
html.light #hc-mob{background:#fff !important;border-color:#e5e7eb !important}
html.light .feat-card{background:#fff !important;border-color:rgba(0,212,184,.2) !important}
html.light .plan-card{background:#fff !important;border-color:rgba(0,212,184,.2) !important}
html.light .plan-card.featured{background:rgba(0,212,184,.05) !important;border-color:rgba(0,212,184,.38) !important}
html.light .pts-card{background:#fff !important;border-color:rgba(0,212,184,.18) !important}
html.light .faq-item{background:#fff !important;border-color:rgba(0,212,184,.18) !important}
html.light .pricing-row{background:#fff !important;border-color:rgba(0,212,184,.2) !important}
html.light .summary-card{background:#fff !important;border-color:rgba(0,212,184,.25) !important}
html.light .train-card{background:#fff !important;border-color:rgba(0,212,184,.2) !important}
html.light .tab-btn.on{background:#fff !important;color:#111827 !important}
html.light .tabs-bar{background:rgba(0,212,184,.07) !important;border-color:rgba(0,212,184,.2) !important}
html.light .curr-pill{color:#6b7280;border-color:rgba(0,212,184,.2)}
html.light .curr-pill.on{background:rgba(0,212,184,.08) !important;color:var(--td) !important;border-color:rgba(0,188,164,.4) !important}

*,*::before,*::after{box-sizing:border-box}
body{font-family:'Plus Jakarta Sans',sans-serif;background:var(--bg);color:var(--w);
  overflow-x:hidden;-webkit-font-smoothing:antialiased}
html[dir=rtl] body,html[dir=rtl] button,html[dir=rtl] a{font-family:'Cairo',sans-serif}
html[dir=rtl] h1,html[dir=rtl] h2,html[dir=rtl] h3{font-family:'Cairo',sans-serif;letter-spacing:0}
h1,h2,h3{font-family:'Bricolage Grotesque',sans-serif;line-height:1.1}
a{text-decoration:none;color:inherit}
body::after{content:'';position:fixed;inset:0;pointer-events:none;z-index:0;opacity:.04;
  background:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.75' numOctaves='4'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E")}
::-webkit-scrollbar{width:5px}::-webkit-scrollbar-track{background:var(--bg)}
::-webkit-scrollbar-thumb{background:var(--ta20);border-radius:3px}
#spbar{position:fixed;top:0;left:0;height:2px;width:0%;z-index:9999;
  background:linear-gradient(90deg,#2de0ca,#009e85);transition:width .1s linear}
.grad{background:linear-gradient(135deg,#2de0ca,#009e85);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.sec-label{font-size:.65rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;
  color:var(--tl);display:flex;align-items:center;gap:.6rem;margin-bottom:.75rem}
.sec-label::before{content:'';width:20px;height:1.5px;
  background:linear-gradient(to right,var(--t),transparent);flex-shrink:0}

/* ── Tabs ── */
.tabs-bar{display:inline-flex;background:rgba(5,14,26,.8);border:1px solid var(--ta20);
  border-radius:1rem;padding:.35rem;gap:.35rem}
.tab-btn{padding:.65rem 2.2rem;border-radius:.7rem;font-size:.9rem;font-weight:600;
  cursor:pointer;border:none;background:transparent;color:var(--w60);
  font-family:inherit;transition:all .2s;white-space:nowrap}
html[dir=rtl] .tab-btn{font-family:'Cairo',sans-serif}
.tab-btn.on{background:var(--bg);color:var(--w)}

/* ── Plan Card ── */
.plan-card{border-radius:1.25rem;border:1px solid var(--ta12);background:rgba(5,14,26,.78);
  padding:1.85rem;display:flex;flex-direction:column;gap:1.1rem;
  transition:border-color .25s,transform .25s;position:relative;overflow:hidden}
.plan-card:hover{border-color:rgba(0,212,184,.28);transform:translateY(-3px)}
.plan-card.featured{border-color:rgba(0,212,184,.45);
  background:linear-gradient(145deg,rgba(0,212,184,.09),rgba(5,14,26,.92))}
.plan-card.featured::before{content:'';position:absolute;top:0;left:0;right:0;height:2.5px;
  background:linear-gradient(90deg,transparent,#2de0ca,#009e85,transparent)}
.plan-price{font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:2.6rem;line-height:1;
  background:linear-gradient(135deg,#2de0ca,#009e85);-webkit-background-clip:text;
  -webkit-text-fill-color:transparent;background-clip:text}
.chk-ok{width:18px;height:18px;border-radius:.4rem;flex-shrink:0;display:flex;align-items:center;
  justify-content:center;background:var(--ta12);border:1px solid var(--ta20);margin-top:.1rem}
.chk-no{width:18px;height:18px;border-radius:.4rem;flex-shrink:0;display:flex;align-items:center;
  justify-content:center;background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.08);margin-top:.1rem}
html.light .chk-no{background:rgba(0,0,0,.03);border-color:rgba(0,0,0,.08)}

/* ── Points ── */
.pts-card{border-radius:1rem;border:1px solid var(--ta12);background:rgba(5,14,26,.75);
  padding:1.4rem;transition:border-color .22s,transform .22s;position:relative;overflow:hidden;cursor:pointer}
.pts-card:hover{border-color:rgba(0,212,184,.3);transform:translateY(-3px)}
.pts-card.best{border-color:rgba(0,212,184,.4);background:linear-gradient(135deg,rgba(0,212,184,.09),rgba(5,14,26,.9))}
.pts-card.best::before,.pts-card.sel::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent,#2de0ca,transparent)}
.pts-card.sel{border-color:rgba(0,212,184,.5)!important}
.pts-big{font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:2rem;line-height:1;
  background:linear-gradient(135deg,#2de0ca,#009e85);-webkit-background-clip:text;
  -webkit-text-fill-color:transparent;background-clip:text}

/* ── Regions ── */
.reg-row{display:flex;align-items:center;gap:1rem;padding:.9rem 1.1rem;
  border-radius:.85rem;border:1px solid var(--ta12);background:rgba(5,14,26,.7);
  transition:border-color .2s}
.reg-row:hover{border-color:rgba(0,212,184,.25)}
html.light .reg-row{background:#fff !important;border-color:rgba(0,212,184,.15) !important}
.reg-flag{width:32px;height:32px;border-radius:.6rem;display:flex;align-items:center;
  justify-content:center;font-size:1.1rem;background:var(--ta08);border:1px solid var(--ta12);flex-shrink:0}

/* ── Pricing rows (companies) ── */
.pricing-row{display:grid;grid-template-columns:200px 1fr 90px;align-items:center;
  gap:1.25rem;padding:1rem 1.25rem;border-radius:1rem;border:1px solid var(--ta15);
  background:rgba(5,14,26,.5);transition:border-color .18s}
.pricing-row:hover{border-color:rgba(0,212,184,.22)}
@media(max-width:768px){.pricing-row{grid-template-columns:1fr}}
.pricing-row-icon{width:36px;height:36px;border-radius:.65rem;flex-shrink:0;
  display:flex;align-items:center;justify-content:center;
  background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)}
.pricing-row-icon svg{width:16px;height:16px}
.sl-track{position:absolute;left:11px;right:11px;top:11px;height:4px;
  border-radius:999px;background:var(--ta15);overflow:hidden;pointer-events:none}
html.light .sl-track{background:rgba(0,212,184,.18)}
.sl-fill{height:100%;border-radius:999px;width:0%;
  background:linear-gradient(to right,#2de0ca,#009e85);transition:width .12s}
.hc-slider{-webkit-appearance:none;appearance:none;width:100%;height:4px;
  background:transparent;outline:none;cursor:pointer;position:relative;z-index:2}
.hc-slider::-webkit-slider-thumb{-webkit-appearance:none;appearance:none;
  width:20px;height:20px;border-radius:50%;
  background:linear-gradient(135deg,#2de0ca,#009e85);
  cursor:pointer;border:2.5px solid var(--bg)}
html.light .hc-slider::-webkit-slider-thumb{border-color:#fff}
.sl-ticks{display:flex;justify-content:space-between;padding:0 11px;margin-top:.3rem}
.sl-ticks span{font-size:.55rem;font-weight:600;color:var(--w40);text-align:center;line-height:1.3}
.sl-ticks small{font-size:.52rem;color:var(--w40);opacity:.7;display:block}
.pricing-val{font-family:'Bricolage Grotesque',sans-serif;font-weight:800;
  font-size:1.4rem;line-height:1;color:var(--tl)}
html[dir=rtl] .pricing-val{font-family:'Cairo',sans-serif}
.pricing-price{font-size:.68rem;margin-top:.2rem}

/* ── Summary card ── */
.summary-card{border-radius:1.1rem;padding:1.25rem;border:1px solid var(--ta15);background:rgba(5,14,26,.75)}
.breakdown-row{display:flex;justify-content:space-between;align-items:center;
  font-size:.75rem;padding:.4rem 0;border-bottom:1px solid var(--ta08)}
.breakdown-row:last-child{border-bottom:none}
.curr-pill{padding:.3rem .85rem;border-radius:999px;font-size:.75rem;font-weight:600;
  border:1px solid var(--ta15);background:transparent;color:var(--w60);cursor:pointer;transition:all .18s}
.curr-pill.on,.curr-pill:hover{background:var(--ta12);border-color:var(--ta30);color:var(--tl)}

/* ── Training cards ── */
.train-card{border-radius:1rem;border:1px solid var(--ta12);background:rgba(5,14,26,.75);
  padding:1.5rem;transition:border-color .2s,transform .2s}
.train-card:hover{border-color:rgba(0,212,184,.28);transform:translateY(-2px)}
.feat-icon{width:44px;height:44px;border-radius:.85rem;flex-shrink:0;display:flex;
  align-items:center;justify-content:center;background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)}
.feat-icon svg{width:20px;height:20px}
.feat-card{border-radius:1rem;border:1px solid var(--ta12);background:rgba(5,14,26,.75);
  padding:1.5rem;transition:border-color .2s,transform .2s}
.feat-card:hover{border-color:rgba(0,212,184,.22);transform:translateY(-2px)}

/* ── FAQ ── */
.faq-item{border-radius:.85rem;border:1px solid var(--ta12);background:rgba(5,14,26,.7);
  overflow:hidden;transition:border-color .2s}
.faq-item.open{border-color:rgba(0,212,184,.28)}
.faq-q{display:flex;align-items:center;justify-content:space-between;gap:1rem;
  padding:1rem 1.25rem;cursor:pointer;font-weight:600;font-size:.88rem;color:var(--w)}
html.light .faq-q{color:#111827}
.faq-a{max-height:0;overflow:hidden;transition:max-height .3s ease}
.faq-item.open .faq-a{max-height:200px}
.faq-body{padding:.2rem 1.25rem 1.1rem;font-size:.84rem;line-height:1.65;color:var(--w60)}
.faq-ico{width:20px;height:20px;border-radius:.4rem;flex-shrink:0;display:flex;
  align-items:center;justify-content:center;background:var(--ta08);color:var(--tl);transition:transform .25s}
.faq-item.open .faq-ico{transform:rotate(45deg)}

/* ── Bonus ── */
.bonus-card{border-radius:1.1rem;border:1px solid var(--ta20);background:rgba(5,14,26,.75);
  padding:1.4rem;position:relative;overflow:hidden}
.bonus-card::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;
  background:linear-gradient(90deg,transparent,var(--t),transparent)}
.bonus-card.gold::before{background:linear-gradient(90deg,transparent,#fbbf24,transparent)}
html.light .bonus-card{background:#fff !important;border-color:rgba(0,212,184,.22) !important}
html.light .bonus-card.gold{border-color:rgba(251,191,36,.25) !important}
.plan-summary-bar{border-radius:.85rem;padding:.85rem 1rem;background:var(--ta08);
  border:1.5px solid var(--ta15);display:flex;align-items:center;justify-content:space-between;min-height:48px}
html.light .plan-summary-bar{background:#f0fdfb;border-color:rgba(0,188,164,.3)}
.hc-label{font-size:.72rem;font-weight:700;color:var(--w60);display:block;margin-bottom:.4rem}
html.light .hc-label{color:#4b5563}

.reveal{opacity:0;transform:translateY(20px);transition:opacity .65s cubic-bezier(.22,1,.36,1),transform .65s cubic-bezier(.22,1,.36,1)}
.reveal.visible{opacity:1;transform:translateY(0)}
@keyframes pulse{0%,100%{opacity:.8;transform:scale(1)}50%{opacity:1;transform:scale(1.3)}}

</style>
</head>
<body>
<div id="spbar"></div>
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
<section class="relative pt-28 pb-14 overflow-hidden" style="background:var(--bg2)">
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse 70% 55% at 50% -5%,rgba(0,212,184,.11),transparent 60%);pointer-events:none"></div>
  <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(0,212,184,.06) 1px,transparent 1px);background-size:32px 32px;opacity:.5"></div>
  <div class="relative z-10 max-w-[900px] mx-auto px-6 text-center">
    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-bold mb-6" style="background:rgba(0,212,184,.1);border:1px solid rgba(0,212,184,.25);color:var(--tl)">
      <span style="width:6px;height:6px;border-radius:50%;background:var(--tl);animation:pulse 2s ease infinite;flex-shrink:0"></span>
      <span data-en="Transparent pricing · No hidden fees" data-ar="أسعار شفافة · لا رسوم مخفية">أسعار شفافة · لا رسوم مخفية</span>
    </div>
    <h1 class="font-display font-extrabold leading-tight mb-5" style="font-size:clamp(2.2rem,5vw,3.6rem);color:var(--w)">
      <span data-en="Pay for what you use." data-ar="ادفع لما تستخدمه.">ادفع لما تستخدمه.</span><br>
      <span class="grad" data-en="Nothing more." data-ar="لا أكثر.">لا أكثر.</span>
    </h1>
    <p class="text-base sm:text-lg leading-relaxed max-w-xl mx-auto mb-8" style="color:var(--w60)"
       data-en="Individual pricing is service-based. Company pricing is a live configurator — build exactly what you need."
       data-ar="تسعير الأفراد مبني على الخدمة. تسعير الشركات منزلق حي — ابنِ ما تحتاجه بالضبط.">تسعير الأفراد مبني على الخدمة. تسعير الشركات منزلق حي — ابنِ ما تحتاجه بالضبط.</p>
    <div class="flex justify-center">
      <div class="tabs-bar">
        <button class="tab-btn on" id="ti" onclick="switchTab('i')" data-en="For Individuals" data-ar="للأفراد">للأفراد</button>
        <button class="tab-btn" id="tc" onclick="switchTab('c')" data-en="For Companies" data-ar="للشركات">للشركات</button>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════
     INDIVIDUALS PANEL
══════════════════════════════════ -->
<div id="pi">

<!-- 1. FREE vs PREMIUM ──────────────────────────── -->
<section class="py-20" style="background:var(--bg)">
  <div class="max-w-[900px] mx-auto px-6">
    <div class="text-center mb-12 reveal">
      <div class="sec-label justify-center" data-en="Account Plans" data-ar="خطط الحساب">خطط الحساب</div>
      <h2 class="font-display font-extrabold text-3xl mb-3" style="color:var(--w)"
          data-en="Free or Premium — your choice"
          data-ar="مجاني أو بريميم — قرارك">مجاني أو بريميم — قرارك</h2>
      <p class="text-sm max-w-lg mx-auto mb-6" style="color:var(--w60)"
         data-en="The Premium plan gives you a real employment advantage — not just features."
         data-ar="البريميم يمنحك ميزة توظيف حقيقية — مش مجرد مميزات.">البريميم يمنحك ميزة توظيف حقيقية — مش مجرد مميزات.</p>
      <!-- Billing toggle -->
      <div class="flex items-center justify-center gap-3">
        <span class="text-sm" style="color:var(--w60)" data-en="Monthly" data-ar="شهري">شهري</span>
        <div style="display:inline-flex;align-items:center;gap:.55rem;padding:.4rem .75rem;border-radius:999px;background:rgba(5,14,26,.7);border:1px solid var(--ta15);cursor:pointer" onclick="toggleBill()">
          <div style="width:36px;height:20px;border-radius:999px;background:var(--ta20);position:relative;transition:background .2s" id="btog">
            <div style="width:14px;height:14px;border-radius:50%;background:#fff;position:absolute;top:3px;left:3px;transition:transform .2s" id="bknob"></div>
          </div>
        </div>
        <span class="text-sm" style="color:var(--w60)" data-en="Annual" data-ar="سنوي">سنوي</span>
        <span style="font-size:.6rem;font-weight:700;padding:.2rem .6rem;border-radius:999px;background:rgba(0,212,184,.15);border:1px solid rgba(0,212,184,.3);color:var(--tl)" data-en="Save 33%" data-ar="وفّر 33%">وفّر 33%</span>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 reveal" style="max-width:760px;margin:0 auto">

      <!-- FREE -->
      <div class="plan-card">
        <div>
          <div class="font-display font-extrabold text-xl mb-0.5" style="color:var(--w)" data-en="Free" data-ar="مجاني">مجاني</div>
          <div class="text-xs" style="color:var(--w40)" data-en="To start and explore" data-ar="للبدء والاستكشاف">للبدء والاستكشاف</div>
        </div>
        <div>
          <span class="plan-price">0</span>
          <span class="text-sm ms-1" style="color:var(--w40)" data-en="forever" data-ar="للأبد">للأبد</span>
        </div>
        <div class="flex flex-col gap-2 flex-1">
<div class="flex items-start gap-2"><div class="chk-ok"><svg viewBox="0 0 10 10" fill="none" stroke="var(--tl)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span class="text-sm" style="color:var(--w60)" data-en="Full diploma catalog browsing" data-ar="تصفح كامل لكتالوج الدبلومات">تصفح كامل لكتالوج الدبلومات</span></div>
<div class="flex items-start gap-2"><div class="chk-ok"><svg viewBox="0 0 10 10" fill="none" stroke="var(--tl)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span class="text-sm" style="color:var(--w60)" data-en="3 free preview videos per track" data-ar="3 فيديوهات مجانية معاينة لكل مسار">3 فيديوهات مجانية معاينة لكل مسار</span></div>
<div class="flex items-start gap-2"><div class="chk-ok"><svg viewBox="0 0 10 10" fill="none" stroke="var(--tl)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span class="text-sm" style="color:var(--w60)" data-en="Basic professional profile" data-ar="ملف مهني أساسي">ملف مهني أساسي</span></div>
<div class="flex items-start gap-2"><div class="chk-ok"><svg viewBox="0 0 10 10" fill="none" stroke="var(--tl)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span class="text-sm" style="color:var(--w60)" data-en="Apply for jobs — free" data-ar="التقديم على الوظائف مجاناً">التقديم على الوظائف مجاناً</span></div>
<div class="flex items-start gap-2"><div class="chk-ok"><svg viewBox="0 0 10 10" fill="none" stroke="var(--tl)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span class="text-sm" style="color:var(--w60)" data-en="Browse mentor profiles" data-ar="تصفح ملفات المنتورز">تصفح ملفات المنتورز</span></div>
<div class="flex items-start gap-2"><div class="chk-no"></div><span class="text-sm" style="color:var(--w40)" data-en="Watch full tracks (via points)" data-ar="مشاهدة مسارات كاملة (بالنقاط)">مشاهدة مسارات كاملة (بالنقاط)</span></div>
<div class="flex items-start gap-2"><div class="chk-no"></div><span class="text-sm" style="color:var(--w40)" data-en="Priority in hiring" data-ar="أولوية في التوظيف">أولوية في التوظيف</span></div>
<div class="flex items-start gap-2"><div class="chk-no"></div><span class="text-sm" style="color:var(--w40)" data-en="Live session recordings" data-ar="تسجيلات الجلسات المباشرة">تسجيلات الجلسات المباشرة</span></div>
        </div>
        <a href="#" class="btn-g text-sm font-bold py-2.5 w-full text-center inline-block rounded-xl" data-en="Start Free" data-ar="ابدأ مجاناً">ابدأ مجاناً</a>
      </div>

      <!-- PREMIUM -->
      <div class="plan-card featured relative">
        <div class="absolute top-3 end-3 text-[.58rem] font-bold px-2.5 py-1 rounded-full" style="background:var(--tl);color:#020e18" data-en="Most Popular ⭐" data-ar="الأكثر شيوعاً ⭐">الأكثر شيوعاً ⭐</div>
        <div>
          <div class="font-display font-extrabold text-xl mb-0.5" style="color:var(--w)" data-en="Premium" data-ar="بريميم">بريميم</div>
          <div class="text-xs" style="color:var(--w40)" data-en="For serious career builders" data-ar="للجادين في مسيرتهم المهنية">للجادين في مسيرتهم المهنية</div>
        </div>
        <div>
          <span class="plan-price" id="prem-price">149</span>
          <span class="text-sm ms-1" style="color:var(--w60)" data-en="EGP / month" data-ar="ج.م / شهر">ج.م / شهر</span>
          <div class="text-[.62rem] mt-1" style="color:var(--tl)" id="prem-note" data-en="Save 33% with annual (99 EGP/mo)" data-ar="وفّر 33% مع السنوي (99 ج.م/شهر)">وفّر 33% مع السنوي (99 ج.م/شهر)</div>
        </div>
        <div class="flex flex-col gap-2 flex-1">
          <div class="flex items-start gap-2"><div class="chk-ok"><svg viewBox="0 0 10 10" fill="none" stroke="var(--tl)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span class="text-sm" style="color:var(--w60)" data-en="Everything in Free" data-ar="كل مزايا المجاني">كل مزايا المجاني</span></div><div class="flex items-start gap-2"><div class="chk-ok"><svg viewBox="0 0 10 10" fill="none" stroke="var(--tl)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span class="text-sm" style="color:var(--w60)" data-en="Priority applicant visibility" data-ar="أولوية ظهور في قائمة المتقدمين">أولوية ظهور في قائمة المتقدمين</span></div><div class="flex items-start gap-2"><div class="chk-ok"><svg viewBox="0 0 10 10" fill="none" stroke="var(--tl)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span class="text-sm" style="color:var(--w60)" data-en="Live session recordings access" data-ar="وصول لتسجيلات الجلسات المباشرة">وصول لتسجيلات الجلسات المباشرة</span></div><div class="flex items-start gap-2"><div class="chk-ok"><svg viewBox="0 0 10 10" fill="none" stroke="var(--tl)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span class="text-sm" style="color:var(--w60)" data-en="Skills & certificates verified profile" data-ar="ملف موثق بالمهارات والشهادات">ملف موثق بالمهارات والشهادات</span></div><div class="flex items-start gap-2"><div class="chk-ok"><svg viewBox="0 0 10 10" fill="none" stroke="var(--tl)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span class="text-sm" style="color:var(--w60)" data-en="Profile analytics dashboard" data-ar="تحليلات ملفك الشخصي">تحليلات ملفك الشخصي</span></div><div class="flex items-start gap-2"><div class="chk-ok"><svg viewBox="0 0 10 10" fill="none" stroke="var(--tl)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span class="text-sm" style="color:var(--w60)" data-en="Personalized job alerts" data-ar="إشعارات وظائف مخصصة">إشعارات وظائف مخصصة</span></div><div class="flex items-start gap-2"><div class="chk-ok"><svg viewBox="0 0 10 10" fill="none" stroke="var(--tl)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span class="text-sm" style="color:var(--w60)" data-en="Early access to new content" data-ar="وصول مبكر لمحتوى جديد">وصول مبكر لمحتوى جديد</span></div><div class="flex items-start gap-2"><div class="chk-ok"><svg viewBox="0 0 10 10" fill="none" stroke="var(--tl)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span class="text-sm" style="color:var(--w60)" data-en="Priority support" data-ar="دعم أولوية">دعم أولوية</span></div>
        </div>
        <a href="#" class="btn-p text-sm font-bold py-2.5 w-full text-center inline-block rounded-xl" data-en="Get Premium" data-ar="اشترك في البريميم">اشترك في البريميم</a>
        <div class="text-center text-xs" style="color:var(--w40)" data-en="Cancel anytime · No lock-in" data-ar="إلغاء في أي وقت · لا عقود">إلغاء في أي وقت · لا عقود</div>
      </div>
    </div>

    <!-- Pricing note: points for content -->
    <div class="mt-6 p-4 rounded-xl text-center reveal" style="max-width:760px;margin:1.5rem auto 0;background:rgba(0,212,184,.05);border:1px solid rgba(0,212,184,.15)">
      <p class="text-sm" style="color:var(--w60)"
         data-en="⚡ Content viewing (recorded courses) uses the Points system — separate from Premium. See below."
         data-ar="⚡ مشاهدة المحتوى (التدريبات المسجلة) تعمل بنظام النقاط — منفصل عن البريميم. انظر أدناه.">⚡ مشاهدة المحتوى (التدريبات المسجلة) تعمل بنظام النقاط — منفصل عن البريميم. انظر أدناه.</p>
    </div>
  </div>
</section>

<!-- 2. POINTS PACKS ──────────────────────────────── -->
<section class="py-20" style="background:var(--bg2);border-top:1px solid var(--ta12)">
  <div class="max-w-[1100px] mx-auto px-6">
    <div class="text-center mb-12 reveal">
      <div class="sec-label justify-center" data-en="Points System" data-ar="نظام النقاط">نظام النقاط</div>
      <h2 class="font-display font-extrabold text-3xl mb-3" style="color:var(--w)"
          data-en="Choose your pack — watch what you want"
          data-ar="اختر حزمتك — شاهد ما تريد">اختر حزمتك — شاهد ما تريد</h2>
      <p class="text-sm max-w-xl mx-auto" style="color:var(--w60)"
         data-en="Buy once. Never expires. No auto-renewal. Spend points on any video you want across the platform."
         data-ar="اشترِ مرة. لا تنتهي. لا تجديد تلقائي. أنفق النقاط على أي فيديو تريده في المنصة.">اشترِ مرة. لا تنتهي. لا تجديد تلقائي. أنفق النقاط على أي فيديو تريده في المنصة.</p>
    </div>

    <!-- Region grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 mb-10 reveal">
      <div class="reg-row">
  <div class="reg-flag">🇪🇬</div>
  <div class="flex-1"><div class="font-bold text-sm" style="color:var(--w)" data-en="Egypt" data-ar="مصر">مصر</div><div class="text-[.6rem]" style="color:var(--w40)">EGP</div></div>
  <div class="text-end"><div class="font-display font-bold text-base grad">4 نقاط</div><div class="text-[.58rem]" style="color:var(--w40)" data-en="per video" data-ar="/ فيديو">/ فيديو</div></div>
</div><div class="reg-row">
  <div class="reg-flag">🇸🇦</div>
  <div class="flex-1"><div class="font-bold text-sm" style="color:var(--w)" data-en="Gulf Region" data-ar="الخليج العربي">الخليج العربي</div><div class="text-[.6rem]" style="color:var(--w40)">SAR · AED</div></div>
  <div class="text-end"><div class="font-display font-bold text-base grad">20 نقطة</div><div class="text-[.58rem]" style="color:var(--w40)" data-en="per video" data-ar="/ فيديو">/ فيديو</div></div>
</div><div class="reg-row">
  <div class="reg-flag">🇩🇪</div>
  <div class="flex-1"><div class="font-bold text-sm" style="color:var(--w)" data-en="Europe" data-ar="أوروبا">أوروبا</div><div class="text-[.6rem]" style="color:var(--w40)">EUR</div></div>
  <div class="text-end"><div class="font-display font-bold text-base grad">60 نقطة</div><div class="text-[.58rem]" style="color:var(--w40)" data-en="per video" data-ar="/ فيديو">/ فيديو</div></div>
</div><div class="reg-row">
  <div class="reg-flag">🇺🇸</div>
  <div class="flex-1"><div class="font-bold text-sm" style="color:var(--w)" data-en="USA & Canada" data-ar="أمريكا وكندا">أمريكا وكندا</div><div class="text-[.6rem]" style="color:var(--w40)">USD · CAD</div></div>
  <div class="text-end"><div class="font-display font-bold text-base grad">100 نقطة</div><div class="text-[.58rem]" style="color:var(--w40)" data-en="per video" data-ar="/ فيديو">/ فيديو</div></div>
</div>
    </div>

    <!-- Pack selector -->
    <div class="text-center mb-6 reveal">
      <h3 class="font-display font-bold text-xl mb-1" style="color:var(--w)" data-en="Select your pack" data-ar="اختر حزمتك">اختر حزمتك</h3>
      <p class="text-xs" style="color:var(--w40)" data-en="Prices shown for Egypt. Other regions shown in pack." data-ar="الأسعار للسوق المصري. باقي المناطق داخل الحزمة.">الأسعار للسوق المصري. باقي المناطق داخل الحزمة.</p>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6 reveal">
      <div class="pts-card " onclick="selectPack(this)">
  
  
  <div class="pts-big">200</div>
  <div class='text-[.6rem]' style='color:var(--w40)'>بلا بونص</div>
  <div class="text-xs font-bold mb-3" style="color:var(--w)" data-en="Points" data-ar="نقطة">نقطة</div>
  <div style="border-top:1px solid var(--ta12);margin:.65rem 0"></div>
  <div class="flex flex-col gap-1 text-xs mb-4">
    <div class="flex justify-between"><span style="color:var(--w60)">🇪🇬</span><span class="font-bold" style="color:var(--w)">30 ج.م</span></div>
    <div class="flex justify-between"><span style="color:var(--w60)">🇸🇦</span><span class="font-bold" style="color:var(--w)">4 ر.س</span></div>
    <div class="flex justify-between"><span style="color:var(--w60)">🇩🇪</span><span class="font-bold" style="color:var(--w)">3.60€</span></div>
    <div class="flex justify-between"><span style="color:var(--w60)">🇺🇸</span><span class="font-bold" style="color:var(--w)">$3.60</span></div>
  </div>
  <div class="text-center py-1.5 rounded-lg text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="≈ 50 videos" data-ar="≈ 50 فيديو">≈ 50 فيديو</div>
</div><div class="pts-card " onclick="selectPack(this)">
  
  
  <div class="pts-big">600</div>
  <div class='text-[.6rem] font-bold' style='color:var(--tl)'>+ 60 بونص</div>
  <div class="text-xs font-bold mb-3" style="color:var(--w)" data-en="Points" data-ar="نقطة">نقطة</div>
  <div style="border-top:1px solid var(--ta12);margin:.65rem 0"></div>
  <div class="flex flex-col gap-1 text-xs mb-4">
    <div class="flex justify-between"><span style="color:var(--w60)">🇪🇬</span><span class="font-bold" style="color:var(--w)">70 ج.م</span></div>
    <div class="flex justify-between"><span style="color:var(--w60)">🇸🇦</span><span class="font-bold" style="color:var(--w)">9.40 ر.س</span></div>
    <div class="flex justify-between"><span style="color:var(--w60)">🇩🇪</span><span class="font-bold" style="color:var(--w)">8.60€</span></div>
    <div class="flex justify-between"><span style="color:var(--w60)">🇺🇸</span><span class="font-bold" style="color:var(--w)">$8.40</span></div>
  </div>
  <div class="text-center py-1.5 rounded-lg text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="≈ 165 videos" data-ar="≈ 165 فيديو">≈ 165 فيديو</div>
</div><div class="pts-card best" onclick="selectPack(this)">
  <div style='position:absolute;top:2.5px;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent,#2de0ca,transparent)'></div>
  <div class='absolute top-3 end-3 text-[.55rem] font-bold px-2 py-0.5 rounded-full' style='background:var(--tl);color:#020e18'>الأفضل قيمةً</div>
  <div class="pts-big">1200</div>
  <div class='text-[.6rem] font-bold' style='color:var(--tl)'>+ 300 بونص</div>
  <div class="text-xs font-bold mb-3" style="color:var(--w)" data-en="Points" data-ar="نقطة">نقطة</div>
  <div style="border-top:1px solid var(--ta12);margin:.65rem 0"></div>
  <div class="flex flex-col gap-1 text-xs mb-4">
    <div class="flex justify-between"><span style="color:var(--w60)">🇪🇬</span><span class="font-bold" style="color:var(--w)">120 ج.م</span></div>
    <div class="flex justify-between"><span style="color:var(--w60)">🇸🇦</span><span class="font-bold" style="color:var(--w)">16 ر.س</span></div>
    <div class="flex justify-between"><span style="color:var(--w60)">🇩🇪</span><span class="font-bold" style="color:var(--w)">14.70€</span></div>
    <div class="flex justify-between"><span style="color:var(--w60)">🇺🇸</span><span class="font-bold" style="color:var(--w)">$14.40</span></div>
  </div>
  <div class="text-center py-1.5 rounded-lg text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="≈ 375 videos" data-ar="≈ 375 فيديو">≈ 375 فيديو</div>
</div><div class="pts-card " onclick="selectPack(this)">
  
  
  <div class="pts-big">3000</div>
  <div class='text-[.6rem] font-bold' style='color:var(--tl)'>+ 900 بونص</div>
  <div class="text-xs font-bold mb-3" style="color:var(--w)" data-en="Points" data-ar="نقطة">نقطة</div>
  <div style="border-top:1px solid var(--ta12);margin:.65rem 0"></div>
  <div class="flex flex-col gap-1 text-xs mb-4">
    <div class="flex justify-between"><span style="color:var(--w60)">🇪🇬</span><span class="font-bold" style="color:var(--w)">249 ج.م</span></div>
    <div class="flex justify-between"><span style="color:var(--w60)">🇸🇦</span><span class="font-bold" style="color:var(--w)">33 ر.س</span></div>
    <div class="flex justify-between"><span style="color:var(--w60)">🇩🇪</span><span class="font-bold" style="color:var(--w)">30.50€</span></div>
    <div class="flex justify-between"><span style="color:var(--w60)">🇺🇸</span><span class="font-bold" style="color:var(--w)">$29.80</span></div>
  </div>
  <div class="text-center py-1.5 rounded-lg text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="≈ 975 videos" data-ar="≈ 975 فيديو">≈ 975 فيديو</div>
</div>
    </div>

    <!-- Gold course note -->
    <div class="p-4 rounded-xl reveal" style="background:rgba(251,191,36,.05);border:1px solid rgba(251,191,36,.18)">
      <div class="flex items-start gap-3">
        <span style="font-size:1.3rem;flex-shrink:0">⭐</span>
        <div>
          <div class="font-bold text-sm mb-1" style="color:#fbbf24" data-en="Gold Courses — Base Value + Points" data-ar="الكورسات الذهبية — قيمة افتراضية + نقاط">الكورسات الذهبية — قيمة افتراضية + نقاط</div>
          <p class="text-xs leading-relaxed" style="color:var(--w60)"
             data-en="Gold courses have a one-time base value to unlock full access, plus the standard per-video points for each lesson based on your region."
             data-ar="الكورسات الذهبية لها قيمة افتراضية لمرة واحدة لفتح الوصول الكامل، بالإضافة لنقاط المشاهدة المعتادة لكل فيديو حسب منطقتك.">الكورسات الذهبية لها قيمة افتراضية لمرة واحدة لفتح الوصول الكامل، بالإضافة لنقاط المشاهدة المعتادة لكل فيديو حسب منطقتك.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 3. OTHER SERVICES ─────────────────────────────── -->
<section class="py-16" style="background:var(--bg);border-top:1px solid var(--ta12)">
  <div class="max-w-[1100px] mx-auto px-6">
    <div class="text-center mb-10 reveal">
      <div class="sec-label justify-center" data-en="Other Services" data-ar="خدمات أخرى">خدمات أخرى</div>
      <h2 class="font-display font-extrabold text-2xl" style="color:var(--w)"
          data-en="Each service priced on its own"
          data-ar="كل خدمة بتسعيرها الخاص">كل خدمة بتسعيرها الخاص</h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 reveal">
      <div class="feat-card">
  <div class="flex items-center gap-3 mb-3">
    <div class="feat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
    <div><div class="font-display font-bold text-sm" style="color:var(--w)" data-en="Mentorship & Communities" data-ar="الإرشاد والمجتمعات">الإرشاد والمجتمعات</div>
    <div class="text-[.62rem] font-bold" style="color:var(--tl)" data-en="Mentor sets the price" data-ar="حسب تسعير المنتور">حسب تسعير المنتور</div></div>
  </div>
  <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="70% of every session goes to the mentor. Each mentor sets their own prices and community subscription. 100% refund if mentor cancels." data-ar="70% من كل جلسة للمنتور. كل منتور يحدد أسعاره واشتراك مجتمعه بنفسه. استرداد 100% إذا ألغى المنتور.">70% من كل جلسة للمنتور. كل منتور يحدد أسعاره واشتراك مجتمعه بنفسه. استرداد 100% إذا ألغى المنتور.</p>
</div><div class="feat-card">
  <div class="flex items-center gap-3 mb-3">
    <div class="feat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 1l4 4-4 4M3 11V9a4 4 0 014-4h14M7 23l-4-4 4-4M21 13v2a4 4 0 01-4 4H3"/></svg></div>
    <div><div class="font-display font-bold text-sm" style="color:var(--w)" data-en="Live Training Sessions" data-ar="التدريبات المباشرة Live">التدريبات المباشرة Live</div>
    <div class="text-[.62rem] font-bold" style="color:var(--tl)" data-en="Per session pricing" data-ar="حسب تسعير الجلسة">حسب تسعير الجلسة</div></div>
  </div>
  <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Each live session has its own price set by the organizer. Premium subscribers automatically receive the session recording after it ends." data-ar="كل جلسة مباشرة بسعر خاص يحدده المنظم. المشتركون البريميم يحصلون على تسجيل الجلسة تلقائياً بعد انتهائها.">كل جلسة مباشرة بسعر خاص يحدده المنظم. المشتركون البريميم يحصلون على تسجيل الجلسة تلقائياً بعد انتهائها.</p>
</div><div class="feat-card">
  <div class="flex items-center gap-3 mb-3">
    <div class="feat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2zM16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div>
    <div><div class="font-display font-bold text-sm" style="color:var(--w)" data-en="Job Applications" data-ar="التقديم على الوظائف">التقديم على الوظائف</div>
    <div class="text-[.62rem] font-bold" style="color:var(--tl)" data-en="Free for limited time 🎉" data-ar="مجاني لفترة محدودة 🎉">مجاني لفترة محدودة 🎉</div></div>
  </div>
  <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Job applications are currently free. Premium subscribers appear with priority at the top of company applicant lists." data-ar="التقديم على الوظائف مجاني حالياً. المشتركون البريميم يظهرون بأولوية في أعلى قائمة المتقدمين لدى الشركات.">التقديم على الوظائف مجاني حالياً. المشتركون البريميم يظهرون بأولوية في أعلى قائمة المتقدمين لدى الشركات.</p>
</div>
    </div>
  </div>
</section>

</div><!-- /pi -->

<!-- ══════════════════════════════════
     COMPANIES PANEL
══════════════════════════════════ -->
<div id="pc" class="hidden">

<!-- CONFIGURATOR ─────────────────────────────────── -->
<section class="py-20" style="background:var(--bg)">
  <div class="max-w-[1100px] mx-auto px-6">
    <div class="text-center mb-10 reveal">
      <div class="sec-label justify-center" data-en="Build Your Plan" data-ar="ابنِ خطتك">ابنِ خطتك</div>
      <h2 class="font-display font-extrabold text-3xl mb-3" style="color:var(--w)"
          data-en="Move the sliders. See your price."
          data-ar="حرّك المنزلقات. شاهد سعرك.">حرّك المنزلقات. شاهد سعرك.</h2>
      <p class="text-sm max-w-lg mx-auto mb-6" style="color:var(--w60)"
         data-en="Start free. Add what you need. Pay for exactly that — nothing forced."
         data-ar="ابدأ مجاناً. أضف ما تحتاجه. ادفع لذلك بالضبط — لا شيء مفروض.">ابدأ مجاناً. أضف ما تحتاجه. ادفع لذلك بالضبط — لا شيء مفروض.</p>
      <!-- Currency pills -->
      <div class="flex justify-center gap-2 flex-wrap">
        <button class="curr-pill on" data-rate="1"       data-sym="EGP" onclick="pickCurr(this)">🇪🇬 EGP</button>
        <button class="curr-pill"    data-rate="0.0689"  data-sym="SAR" onclick="pickCurr(this)">🇸🇦 SAR</button>
        <button class="curr-pill"    data-rate="0.0675"  data-sym="AED" onclick="pickCurr(this)">🇦🇪 AED</button>
        <button class="curr-pill"    data-rate="0.01595" data-sym="€"   onclick="pickCurr(this)">🌍 EUR</button>
        <button class="curr-pill"    data-rate="0.01837" data-sym="$"   onclick="pickCurr(this)">🇺🇸 USD</button>
      </div>
      <p class="text-center text-[.6rem] mt-2" style="color:var(--w40)">CBE rates · Apr 2026 · $1=54.43 EGP · €1=62.71 EGP · 1 AED=14.82 EGP · 1 SAR=14.50 EGP</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-[1fr_280px] gap-6 reveal">
      <!-- Sliders -->
      <div class="flex flex-col gap-3">

        <div class="pricing-row">
          <div class="flex items-center gap-3">
            <div class="pricing-row-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
            <div><div class="text-sm font-bold" style="color:var(--w)" data-en="Employee Seats" data-ar="مقاعد الموظفين">مقاعد الموظفين</div><div class="text-[.65rem]" style="color:var(--w40)" data-en="Team access to platform" data-ar="وصول الفريق للمنصة">وصول الفريق للمنصة</div></div>
          </div>
          <div class="relative pb-5">
            <div class="sl-track"><div class="sl-fill" id="fill-emp"></div></div>
            <input type="range" class="hc-slider" id="sl-emp" min="0" max="5" value="0" step="1" oninput="updateRow('emp',this.value)">
            <div class="sl-ticks">
              <span>5<br><small class="tick-price" data-egp="0" data-free="1">مجاني</small></span>
              <span>20<br><small class="tick-price" data-egp="1500">1,500</small></span>
              <span>50<br><small class="tick-price" data-egp="3000">3,000</small></span>
              <span>100<br><small class="tick-price" data-egp="5500">5,500</small></span>
              <span>500<br><small class="tick-price" data-egp="18000">18K</small></span>
              <span>1K<br><small class="tick-price" data-egp="32000">32K</small></span>
            </div>
          </div>
          <div class="text-end"><div class="pricing-val" id="val-emp">5</div><div class="pricing-price" id="price-emp" style="color:var(--tl)" data-en="Free" data-ar="مجاني">مجاني</div></div>
        </div>

        <div class="pricing-row">
          <div class="flex items-center gap-3">
            <div class="pricing-row-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg></div>
            <div><div class="text-sm font-bold" style="color:var(--w)" data-en="Active Job Posts" data-ar="وظائف نشطة">وظائف نشطة</div><div class="text-[.65rem]" style="color:var(--w40)" data-en="Simultaneous listings" data-ar="إعلانات متزامنة">إعلانات متزامنة</div></div>
          </div>
          <div class="relative pb-5">
            <div class="sl-track"><div class="sl-fill" id="fill-job"></div></div>
            <input type="range" class="hc-slider" id="sl-job" min="0" max="5" value="0" step="1" oninput="updateRow('job',this.value)">
            <div class="sl-ticks">
              <span>2<br><small class="tick-price" data-egp="0" data-free="1">مجاني</small></span>
              <span>5<br><small class="tick-price" data-egp="500">500</small></span>
              <span>10<br><small class="tick-price" data-egp="900">900</small></span>
              <span>20<br><small class="tick-price" data-egp="1600">1,600</small></span>
              <span>35<br><small class="tick-price" data-egp="2500">2,500</small></span>
              <span>50<br><small class="tick-price" data-egp="3200">3,200</small></span>
            </div>
          </div>
          <div class="text-end"><div class="pricing-val" id="val-job">2</div><div class="pricing-price" id="price-job" style="color:var(--tl)" data-en="Free" data-ar="مجاني">مجاني</div></div>
        </div>

        <div class="pricing-row">
          <div class="flex items-center gap-3">
            <div class="pricing-row-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></div>
            <div><div class="text-sm font-bold" style="color:var(--w)" data-en="Candidate Data Views" data-ar="عرض بيانات المرشحين">عرض بيانات المرشحين</div><div class="text-[.65rem]" style="color:var(--w40)" data-en="Contact info & credentials" data-ar="بيانات الاتصال والمؤهلات">بيانات الاتصال والمؤهلات</div></div>
          </div>
          <div class="relative pb-5">
            <div class="sl-track"><div class="sl-fill" id="fill-views"></div></div>
            <input type="range" class="hc-slider" id="sl-views" min="0" max="5" value="0" step="1" oninput="updateRow('views',this.value)">
            <div class="sl-ticks">
              <span>5<br><small class="tick-price" data-egp="0" data-free="1">مجاني</small></span>
              <span>20<br><small class="tick-price" data-egp="500">500</small></span>
              <span>50<br><small class="tick-price" data-egp="1000">1,000</small></span>
              <span>100<br><small class="tick-price" data-egp="1800">1,800</small></span>
              <span>250<br><small class="tick-price" data-egp="3500">3,500</small></span>
              <span>500<br><small class="tick-price" data-egp="6000">6,000</small></span>
            </div>
          </div>
          <div class="text-end"><div class="pricing-val" id="val-views">5</div><div class="pricing-price" id="price-views" style="color:var(--tl)" data-en="Free" data-ar="مجاني">مجاني</div></div>
        </div>

        <div class="pricing-row">
          <div class="flex items-center gap-3">
            <div class="pricing-row-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
            <div><div class="text-sm font-bold" style="color:var(--w)" data-en="Candidate Messages" data-ar="رسائل للمرشحين">رسائل للمرشحين</div><div class="text-[.65rem]" style="color:var(--w40)" data-en="Direct outreach" data-ar="تواصل مباشر">تواصل مباشر</div></div>
          </div>
          <div class="relative pb-5">
            <div class="sl-track"><div class="sl-fill" id="fill-msg"></div></div>
            <input type="range" class="hc-slider" id="sl-msg" min="0" max="5" value="0" step="1" oninput="updateRow('msg',this.value)">
            <div class="sl-ticks">
              <span>0<br><small class="tick-price" data-egp="0" data-dash="1">—</small></span>
              <span>20<br><small class="tick-price" data-egp="1000">1,000</small></span>
              <span>50<br><small class="tick-price" data-egp="2000">2,000</small></span>
              <span>100<br><small class="tick-price" data-egp="3500">3,500</small></span>
              <span>250<br><small class="tick-price" data-egp="7000">7,000</small></span>
              <span>500<br><small class="tick-price" data-egp="12000">12K</small></span>
            </div>
          </div>
          <div class="text-end"><div class="pricing-val" id="val-msg" style="color:var(--w40)">0</div><div class="pricing-price" id="price-msg" style="color:var(--w40)">—</div></div>
        </div>

        <div class="pricing-row" style="border-color:rgba(0,212,184,.2)">
          <div class="flex items-center gap-3">
            <div class="pricing-row-icon" style="border-color:rgba(0,212,184,.25)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2h14a2 2 0 002-2v-5z"/><path d="M16 12a2 2 0 000 4h5v-4h-5z"/></svg></div>
            <div><div class="text-sm font-bold" style="color:var(--w)" data-en="Training Wallet" data-ar="محفظة التدريب">محفظة التدريب</div><div class="text-[.65rem]" style="color:var(--w40)" data-en="½ cost per recorded video" data-ar="نصف التكلفة لكل فيديو مسجل">نصف التكلفة لكل فيديو مسجل</div></div>
          </div>
          <div class="relative pb-5">
            <div class="sl-track"><div class="sl-fill" id="fill-wallet" style="background:linear-gradient(to right,#2de0ca,#009e85)"></div></div>
            <input type="range" class="hc-slider" id="sl-wallet" min="0" max="5" value="0" step="1" oninput="updateRow('wallet',this.value)">
            <div class="sl-ticks">
              <span>0<br><small class="tick-price" data-egp="0" data-dash="1">—</small></span>
              <span>1K<br><small class="tick-price" data-egp="1000">1,000</small></span>
              <span>5K<br><small class="tick-price" data-egp="5000">5,000</small></span>
              <span>10K<br><small class="tick-price" data-egp="10000">10K</small></span>
              <span>20K<br><small class="tick-price" data-egp="20000">20K</small></span>
              <span>50K<br><small class="tick-price" data-egp="50000">50K</small></span>
            </div>
          </div>
          <div class="text-end"><div class="pricing-val" id="val-wallet" style="color:var(--w40)">0</div><div class="pricing-price" id="price-wallet" style="color:var(--w40)">—</div></div>
        </div>

      </div><!-- /sliders -->

      <!-- Summary card (sticky) -->
      <div>
        <div style="position:sticky;top:80px">
          <div class="summary-card">
            <div class="text-[.6rem] font-bold tracking-[.14em] uppercase mb-3" style="color:var(--w40)" data-en="Monthly Total" data-ar="المجموع الشهري">المجموع الشهري</div>
            <div class="flex flex-col mb-3" id="breakdown">
              <div class="breakdown-row" id="b-emp"><span style="color:var(--w60)">موظفين (5)</span><span style="color:var(--tl)" data-en="Free" data-ar="مجاني">مجاني</span></div>
              <div class="breakdown-row" id="b-job"><span style="color:var(--w60)">وظائف (2)</span><span style="color:var(--tl)" data-en="Free" data-ar="مجاني">مجاني</span></div>
              <div class="breakdown-row" id="b-views"><span style="color:var(--w60)">عرض بيانات (5)</span><span style="color:var(--tl)" data-en="Free" data-ar="مجاني">مجاني</span></div>
              <div class="breakdown-row" id="b-msg"><span style="color:var(--w60)">رسائل (0)</span><span style="color:var(--w40)">—</span></div>
              <div class="breakdown-row" id="b-wallet"><span style="color:var(--w60)" data-en="Training wallet" data-ar="محفظة التدريب">محفظة التدريب</span><span style="color:var(--w40)">0</span></div>
            </div>
            <div style="border-top:1px solid var(--ta15);margin:.75rem 0"></div>
            <div class="flex items-end justify-between mb-3">
              <span class="text-sm font-bold" style="color:var(--w)" data-en="Total / month" data-ar="المجموع / شهر">المجموع / شهر</span>
              <div class="text-end">
                <div class="font-display font-extrabold grad" id="grand-total" style="font-size:1.8rem">0</div>
                <div class="text-[.6rem]" style="color:var(--w40)" id="total-curr">EGP</div>
              </div>
            </div>
            <div id="bonus-wrap">
              <div class="flex justify-between text-[.6rem] mb-1">
                <span id="bonus-lbl" style="color:var(--w40)" data-en="Progress to 5,000 bonus" data-ar="حتى مكافأة 5,000">حتى مكافأة 5,000</span>
                <span id="bonus-pct" style="color:var(--tl)">0%</span>
              </div>
              <div style="height:4px;border-radius:999px;background:var(--ta12);overflow:hidden">
                <div id="bonus-bar" style="height:100%;width:0%;border-radius:999px;background:linear-gradient(to right,#2de0ca,#009e85);transition:width .35s"></div>
              </div>
            </div>
            <a href="#corp-form" class="btn-p w-full py-2.5 text-sm font-bold mt-4 block text-center" id="cta-plan" data-en="Get This Plan →" data-ar="احصل على هذه الخطة ←">احصل على هذه الخطة ←</a>
          </div>
          <!-- Bonus banners -->
          <div id="bonus-5k" class="hidden mt-3 rounded-xl p-3" style="background:var(--ta08);border:1px solid var(--ta20)">
            <div class="font-bold text-xs mb-1" style="color:var(--tl)" data-en="🎁 5,000 bonus unlocked!" data-ar="🎁 مكافأة 5,000 مفعّلة!">🎁 مكافأة 5,000 مفعّلة!</div>
            <div class="text-[.65rem]" style="color:var(--w60)" data-en="Training (5 seats) · Account manager · Analytics · Phone support" data-ar="تدريب (5 مقاعد) · مدير حساب · تحليلات · دعم هاتفي">تدريب (5 مقاعد) · مدير حساب · تحليلات · دعم هاتفي</div>
          </div>
          <div id="bonus-10k" class="hidden mt-3 rounded-xl p-3" style="background:rgba(251,191,36,.07);border:1px solid rgba(251,191,36,.2)">
            <div class="font-bold text-xs mb-1" style="color:#fbbf24" data-en="👑 10,000 bonus unlocked!" data-ar="👑 مكافأة 10,000 مفعّلة!">👑 مكافأة 10,000 مفعّلة!</div>
            <div class="text-[.65rem]" style="color:var(--w60)" data-en="All above + Training (10 seats) + HR consultant + Advanced analytics" data-ar="كل ما سبق + تدريب (10 مقاعد) + مستشار HR + تحليلات متقدمة">كل ما سبق + تدريب (10 مقاعد) + مستشار HR + تحليلات متقدمة</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- EMPLOYEE TRAINING ────────────────────────────── -->
<section class="py-20" style="background:var(--bg2);border-top:1px solid var(--ta12)">
  <div class="max-w-[1100px] mx-auto px-6">
    <div class="text-center mb-12 reveal">
      <div class="sec-label justify-center" data-en="Employee Training" data-ar="تدريب الموظفين">تدريب الموظفين</div>
      <h2 class="font-display font-extrabold text-3xl mb-3" style="color:var(--w)"
          data-en="Train your team — three ways"
          data-ar="طوّر فريقك — بثلاث طرق">طوّر فريقك — بثلاث طرق</h2>
      <p class="text-sm max-w-lg mx-auto" style="color:var(--w60)"
         data-en="Choose the training format that fits your team — from self-paced internal tracks to live programs at HalaCareer centers."
         data-ar="اختر طريقة التدريب المناسبة لفريقك — من المسارات الذاتية الداخلية إلى البرامج المباشرة في مراكز هلا كارير.">اختر طريقة التدريب المناسبة لفريقك — من المسارات الذاتية الداخلية إلى البرامج المباشرة في مراكز هلا كارير.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 reveal">

      <div class="train-card">
        <div class="feat-icon mb-4"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></div>
        <h3 class="font-display font-bold text-base mb-1" style="color:var(--w)" data-en="Recorded Training (via Wallet)" data-ar="تدريب مسجل (من المحفظة)">تدريب مسجل (من المحفظة)</h3>
        <div class="text-[.62rem] font-bold mb-3" style="color:var(--tl)" data-en="½ standard viewing cost" data-ar="نصف تكلفة المشاهدة العادية">نصف تكلفة المشاهدة العادية</div>
        <p class="text-xs leading-relaxed mb-4" style="color:var(--w60)"
           data-en="Assign platform diploma tracks to your employees. When they watch through your company account, each video is deducted from your training wallet at half the standard cost."
           data-ar="خصص مسارات دبلومات المنصة لموظفيك. عندما يشاهدون عبر حساب شركتك، يُخصم كل فيديو من محفظة التدريب بنصف التكلفة العادية.">خصص مسارات دبلومات المنصة لموظفيك. عندما يشاهدون عبر حساب شركتك، يُخصم كل فيديو من محفظة التدريب بنصف التكلفة العادية.</p>
        <div class="p-3 rounded-xl" style="background:rgba(0,212,184,.06);border:1px solid var(--ta12)">
          <div class="text-[.6rem] font-bold mb-1.5" style="color:var(--w40)" data-en="Example cost for Egypt" data-ar="مثال للتكلفة في مصر">مثال للتكلفة في مصر</div>
          <div class="flex justify-between text-xs"><span style="color:var(--w60)">موظف واحد · فيديو</span><span class="font-bold" style="color:var(--tl)">2 نقطة فقط</span></div>
          <div class="flex justify-between text-xs mt-1"><span style="color:var(--w60)">بدلاً من</span><span style="color:var(--w40);text-decoration:line-through">4 نقاط</span></div>
        </div>
      </div>

      <div class="train-card">
        <div class="feat-icon mb-4"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg></div>
        <h3 class="font-display font-bold text-base mb-1" style="color:var(--w)" data-en="Live Training at Your Site" data-ar="تدريب مباشر في مؤسستك">تدريب مباشر في مؤسستك</h3>
        <div class="text-[.62rem] font-bold mb-3" style="color:var(--tl)" data-en="Custom price per session" data-ar="سعر مخصص لكل جلسة">سعر مخصص لكل جلسة</div>
        <p class="text-xs leading-relaxed mb-4" style="color:var(--w60)"
           data-en="We send a professional certified trainer to your company premises. Price is customized based on number of participants, duration, and topic."
           data-ar="نرسل لك مدرباً محترفاً معتمداً لمقر شركتك. السعر مخصص بناءً على عدد المشاركين والمدة والموضوع.">نرسل لك مدرباً محترفاً معتمداً لمقر شركتك. السعر مخصص بناءً على عدد المشاركين والمدة والموضوع.</p>
        <div class="flex flex-col gap-1.5">
          <div class="flex items-center gap-2 text-xs" style="color:var(--w60)"><svg class="w-3.5 h-3.5 shrink-0" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg><span data-en="Certified trainer comes to you" data-ar="مدرب معتمد يأتي إليك">مدرب معتمد يأتي إليك</span></div><div class="flex items-center gap-2 text-xs" style="color:var(--w60)"><svg class="w-3.5 h-3.5 shrink-0" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg><span data-en="Flexible timing and location" data-ar="مرن في التوقيت والمكان">مرن في التوقيت والمكان</span></div><div class="flex items-center gap-2 text-xs" style="color:var(--w60)"><svg class="w-3.5 h-3.5 shrink-0" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg><span data-en="Performance report post-session" data-ar="تقرير أداء بعد الجلسة">تقرير أداء بعد الجلسة</span></div><div class="flex items-center gap-2 text-xs" style="color:var(--w60)"><svg class="w-3.5 h-3.5 shrink-0" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg><span data-en="Contact us for pricing" data-ar="اتصل بنا للتسعير">اتصل بنا للتسعير</span></div>
        </div>
      </div>

      <div class="train-card" style="border-color:rgba(0,212,184,.22);background:linear-gradient(135deg,rgba(0,212,184,.06),rgba(5,14,26,.85))">
        <div class="feat-icon mb-4" style="background:var(--ta12);border-color:var(--ta25)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <h3 class="font-display font-bold text-base mb-1 grad" data-en="Training at HalaCareer Centers" data-ar="تدريب في مقرات هلا كارير">تدريب في مقرات هلا كارير</h3>
        <div class="text-[.62rem] font-bold mb-3" style="color:var(--tl)" data-en="Custom price per program" data-ar="سعر مخصص لكل برنامج">سعر مخصص لكل برنامج</div>
        <p class="text-xs leading-relaxed mb-4" style="color:var(--w60)"
           data-en="Book seats in structured training programs at HalaCareer centers. Each program has a different price based on specialization, level, and duration."
           data-ar="احجز مقاعد في برامج تدريبية منظمة في مراكز هلا كارير. كل برنامج بسعر مختلف حسب التخصص والمستوى والمدة.">احجز مقاعد في برامج تدريبية منظمة في مراكز هلا كارير. كل برنامج بسعر مختلف حسب التخصص والمستوى والمدة.</p>
        <div class="flex flex-col gap-1.5">
          <div class="flex items-center gap-2 text-xs" style="color:var(--w60)"><svg class="w-3.5 h-3.5 shrink-0" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg><span data-en="Professional equipped learning environment" data-ar="بيئة تعلم احترافية ومجهزة">بيئة تعلم احترافية ومجهزة</span></div><div class="flex items-center gap-2 text-xs" style="color:var(--w60)"><svg class="w-3.5 h-3.5 shrink-0" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg><span data-en="Internationally certified trainers" data-ar="مدربون معتمدون دولياً">مدربون معتمدون دولياً</span></div><div class="flex items-center gap-2 text-xs" style="color:var(--w60)"><svg class="w-3.5 h-3.5 shrink-0" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg><span data-en="Accredited certificates upon completion" data-ar="شهادات معتمدة بعد الإتمام">شهادات معتمدة بعد الإتمام</span></div><div class="flex items-center gap-2 text-xs" style="color:var(--w60)"><svg class="w-3.5 h-3.5 shrink-0" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg><span data-en="Catering and materials included" data-ar="طعام ومستلزمات مشمولة">طعام ومستلزمات مشمولة</span></div>
        </div>
      </div>

    </div>

    <!-- Training wallet explainer -->
    <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4 reveal">
      <div class="feat-card text-center"><div style="font-size:1.6rem;margin-bottom:.5rem">💰</div><div class="font-display font-bold text-sm mb-1" style="color:var(--w)" data-en="Top Up Your Wallet" data-ar="اشحن محفظتك">اشحن محفظتك</div><div class="text-xs" style="color:var(--w60)" data-en="Add balance to your company wallet anytime. Balance never expires." data-ar="أضف رصيداً لمحفظة الشركة في أي وقت. الرصيد لا ينتهي.">أضف رصيداً لمحفظة الشركة في أي وقت. الرصيد لا ينتهي.</div></div><div class="feat-card text-center"><div style="font-size:1.6rem;margin-bottom:.5rem">📚</div><div class="font-display font-bold text-sm mb-1" style="color:var(--w)" data-en="Assign Tracks to Team" data-ar="خصص مسارات للفريق">خصص مسارات للفريق</div><div class="text-xs" style="color:var(--w60)" data-en="Choose suitable diplomas and assign them to employees from your dashboard." data-ar="اختر الدبلومات المناسبة وخصصها للموظفين من لوحة تحكمك.">اختر الدبلومات المناسبة وخصصها للموظفين من لوحة تحكمك.</div></div><div class="feat-card text-center"><div style="font-size:1.6rem;margin-bottom:.5rem">📊</div><div class="font-display font-bold text-sm mb-1" style="color:var(--w)" data-en="Track Progress" data-ar="تتبع التقدم">تتبع التقدم</div><div class="text-xs" style="color:var(--w60)" data-en="Real-time reports on each employee's training track progress." data-ar="تقارير لحظية لتقدم كل موظف في مساره التدريبي.">تقارير لحظية لتقدم كل موظف في مساره التدريبي.</div></div>
    </div>
  </div>
</section>

</div><!-- /pc -->

<!-- ══ FAQ ══ -->
<section class="py-16" style="border-top:1px solid var(--ta12)">
  <div class="max-w-[700px] mx-auto px-6">
    <div class="text-center mb-10 reveal">
      <div class="sec-label justify-center" data-en="FAQ" data-ar="أسئلة شائعة">أسئلة شائعة</div>
      <h2 class="font-display font-extrabold text-2xl" style="color:var(--w)"
          data-en="Still have questions?" data-ar="لديك أسئلة؟">لديك أسئلة؟</h2>
    </div>
    <div class="flex flex-col gap-2 reveal">
      <div class="faq-item" id="fq0" onclick="tFaq(0)">
  <div class="faq-q"><span data-en="Points vs Premium — what's the difference?" data-ar="ما الفرق بين نظام النقاط والاشتراك البريميم؟">ما الفرق بين نظام النقاط والاشتراك البريميم؟</span>
  <div class="faq-ico"><svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></div></div>
  <div class="faq-a"><div class="faq-body" data-en="Points are for watching recorded content — pay only for what you watch. Premium is for employment benefits (priority visibility, live recordings, verified profile). Both are different and complementary." data-ar="النقاط لمشاهدة المحتوى المسجل — تدفع فقط لما تشاهد. البريميم لمزايا التوظيف (أولوية الظهور، تسجيلات المباشر، ملف موثق). الاثنان مختلفان ومكملان.">النقاط لمشاهدة المحتوى المسجل — تدفع فقط لما تشاهد. البريميم لمزايا التوظيف (أولوية الظهور، تسجيلات المباشر، ملف موثق). الاثنان مختلفان ومكملان.</div></div>
</div><div class="faq-item" id="fq1" onclick="tFaq(1)">
  <div class="faq-q"><span data-en="Do points expire?" data-ar="هل النقاط تنتهي صلاحيتها؟">هل النقاط تنتهي صلاحيتها؟</span>
  <div class="faq-ico"><svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></div></div>
  <div class="faq-a"><div class="faq-body" data-en="Never. Points you purchase stay in your account indefinitely. No pressure, no auto-renewal." data-ar="لا أبداً. النقاط التي تشتريها تبقى في حسابك إلى أجل غير مسمى. لا ضغط، لا تجديد تلقائي.">لا أبداً. النقاط التي تشتريها تبقى في حسابك إلى أجل غير مسمى. لا ضغط، لا تجديد تلقائي.</div></div>
</div><div class="faq-item" id="fq2" onclick="tFaq(2)">
  <div class="faq-q"><span data-en="Will job applications stay free?" data-ar="هل التقديم على الوظائف سيبقى مجاناً؟">هل التقديم على الوظائف سيبقى مجاناً؟</span>
  <div class="faq-ico"><svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></div></div>
  <div class="faq-a"><div class="faq-body" data-en="Applications are currently free for a limited period to support early growth. Any change will be announced with sufficient advance notice." data-ar="التقديم مجاني حالياً لفترة محدودة لتعزيز النمو الأولي. سيتم الإعلان عن أي تغيير مسبقاً بفترة كافية.">التقديم مجاني حالياً لفترة محدودة لتعزيز النمو الأولي. سيتم الإعلان عن أي تغيير مسبقاً بفترة كافية.</div></div>
</div><div class="faq-item" id="fq3" onclick="tFaq(3)">
  <div class="faq-q"><span data-en="How does recorded training from the company wallet work?" data-ar="كيف يعمل التدريب المسجل من محفظة الشركة؟">كيف يعمل التدريب المسجل من محفظة الشركة؟</span>
  <div class="faq-ico"><svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></div></div>
  <div class="faq-a"><div class="faq-body" data-en="When you assign training tracks to employees, half the standard viewing cost is deducted from your wallet. In Egypt: 2 points instead of 4 per video." data-ar="عند تخصيص مسارات تدريبية لموظفيك، يُخصم نصف تكلفة المشاهدة العادية من محفظتك. في مصر: 2 نقطة بدلاً من 4 لكل فيديو.">عند تخصيص مسارات تدريبية لموظفيك، يُخصم نصف تكلفة المشاهدة العادية من محفظتك. في مصر: 2 نقطة بدلاً من 4 لكل فيديو.</div></div>
</div><div class="faq-item" id="fq4" onclick="tFaq(4)">
  <div class="faq-q"><span data-en="What happens at the 5,000 EGP threshold?" data-ar="ما الذي يحدث عند بلوغ حد 5,000 ج؟">ما الذي يحدث عند بلوغ حد 5,000 ج؟</span>
  <div class="faq-ico"><svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></div></div>
  <div class="faq-a"><div class="faq-body" data-en="You automatically get: corporate training (5 seats) + dedicated account manager + analytics dashboard + phone support. At 10,000 EGP you get all above + 10 extra seats + HR consultant + advanced analytics." data-ar="تلقائياً تحصل على: تدريب شركات (5 مقاعد) + مدير حساب مخصص + لوحة تحليلات + دعم هاتفي. وعند 10,000 ج تحصل على كل ما سبق + 10 مقاعد إضافية + مستشار HR + تحليلات متقدمة.">تلقائياً تحصل على: تدريب شركات (5 مقاعد) + مدير حساب مخصص + لوحة تحليلات + دعم هاتفي. وعند 10,000 ج تحصل على كل ما سبق + 10 مقاعد إضافية + مستشار HR + تحليلات متقدمة.</div></div>
</div>
    </div>
  </div>
</section>

<!-- ══ CTA ══ -->
<section class="py-16" style="border-top:1px solid var(--ta12)">
  <div class="max-w-[800px] mx-auto px-6 text-center reveal">
    <h2 class="font-display font-extrabold text-3xl mb-4" style="color:var(--w)"
        data-en="Ready to start?" data-ar="مستعد تبدأ؟">مستعد تبدأ؟</h2>
    <p class="text-base mb-7" style="color:var(--w60)"
       data-en="Free to start. No credit card. No contracts. Upgrade when you're ready."
       data-ar="مجاني للبدء. لا بطاقة ائتمان. لا عقود. اترقَّ عندما تكون مستعداً.">مجاني للبدء. لا بطاقة ائتمان. لا عقود. اترقَّ عندما تكون مستعداً.</p>
    <div class="flex flex-wrap items-center justify-center gap-3">
      <a href="#" class="btn-p inline-flex items-center gap-2 px-8 py-3 text-base font-bold">
        <span data-en="Create Free Account →" data-ar="أنشئ حساباً مجاناً ←">أنشئ حساباً مجاناً ←</span>
      </a>
      <a href="#" class="btn-g inline-flex items-center gap-2 px-8 py-3 text-base font-semibold"
         data-en="Talk to Sales" data-ar="تحدث مع المبيعات">تحدث مع المبيعات</a>
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
// Spbar
window.addEventListener('scroll',function(){var s=document.getElementById('spbar');if(!s)return;var h=document.documentElement.scrollHeight-window.innerHeight;s.style.width=(h>0?(window.scrollY/h*100):0)+'%';},{passive:true});
window.addEventListener('scroll',function(){var n=document.getElementById('hc-nav');if(!n)return;var l=document.documentElement.classList.contains('light');n.style.background=window.scrollY>40?(l?'#fff':'rgba(3,13,23,.98)'):(l?'#fff':'rgba(3,13,23,.96)');n.style.borderColor=window.scrollY>40?(l?'#e5e7eb':'rgba(255,255,255,.12)'):(l?'#e5e7eb':'rgba(255,255,255,.08)');},{passive:true});

// Reveal
var obs=new IntersectionObserver(function(e){e.forEach(function(x){if(x.isIntersecting){x.target.classList.add('visible');obs.unobserve(x.target);}});},{threshold:.08,rootMargin:'0px 0px -40px 0px'});
document.querySelectorAll('.reveal').forEach(function(el,i){el.style.transitionDelay=(i%5*.07)+'s';obs.observe(el);});

// Tab switch
function switchTab(t){
  ['i','c'].forEach(function(k){
    document.getElementById('t'+k).classList.toggle('on',k===t);
    document.getElementById('p'+k).classList.toggle('hidden',k!==t);
  });
  window.scrollTo({top:document.querySelector('section').offsetTop-80,behavior:'smooth'});
}

// Billing toggle individual
var annual=false;
function toggleBill(){
  annual=!annual;
  var tr=document.getElementById('btog'),kn=document.getElementById('bknob');
  if(tr){tr.style.background=annual?'var(--tl)':'var(--ta20)';}
  if(kn){kn.style.transform=annual?'translateX(16px)':'';}
  var pp=document.getElementById('prem-price');
  var pn=document.getElementById('prem-note');
  if(pp)pp.textContent=annual?'99':'149';
  if(pn){
    pn.setAttribute('data-ar',annual?'(1,188 ج.م سنوياً — توفير 600 ج.م)':'وفّر 33% مع السنوي (99 ج.م/شهر)');
    pn.setAttribute('data-en',annual?'(1,188 EGP/year — Save 600 EGP)':'Save 33% with annual (99 EGP/mo)');
    pn.textContent=annual?'(1,188 ج.م سنوياً — توفير 600 ج.م)':'وفّر 33% مع السنوي (99 ج.م/شهر)';
  }
}

// Pack selector
function selectPack(el){
  document.querySelectorAll('.pts-card').forEach(function(c){c.classList.remove('sel');});
  el.classList.add('sel');
}

// FAQ
function tFaq(i){var el=document.getElementById('fq'+i);if(el)el.classList.toggle('open');}

// Companies slider system (from hc-companies.js)
var CURR_RATE=1, CURR_SYM='EGP';
var TIERS={
  emp:   [{v:5,p:0},{v:20,p:1500},{v:50,p:3000},{v:100,p:5500},{v:500,p:18000},{v:1000,p:32000}],
  job:   [{v:2,p:0},{v:5,p:500},{v:10,p:900},{v:20,p:1600},{v:35,p:2500},{v:50,p:3200}],
  views: [{v:5,p:0},{v:20,p:500},{v:50,p:1000},{v:100,p:1800},{v:250,p:3500},{v:500,p:6000}],
  msg:   [{v:0,p:0},{v:20,p:1000},{v:50,p:2000},{v:100,p:3500},{v:250,p:7000},{v:500,p:12000}],
  wallet:[{v:0,p:0},{v:1000,p:1000},{v:5000,p:5000},{v:10000,p:10000},{v:20000,p:20000},{v:50000,p:50000}],
};
var NAMES_AR={emp:'موظفين',job:'وظائف',views:'عرض بيانات',msg:'رسائل',wallet:'محفظة التدريب'};

function fmt(egp){
  if(egp===0) return isEn?'Free':'مجاني';
  var v=Math.round(egp*CURR_RATE);
  return ['$','€'].includes(CURR_SYM)?CURR_SYM+v.toLocaleString():v.toLocaleString()+' '+CURR_SYM;
}
function pickCurr(btn){
  document.querySelectorAll('.curr-pill').forEach(function(b){b.classList.remove('on');});
  btn.classList.add('on');
  CURR_RATE=parseFloat(btn.getAttribute('data-rate'));
  CURR_SYM=btn.getAttribute('data-sym');
  document.querySelectorAll('.tick-price').forEach(function(el){
    if(el.getAttribute('data-dash')==='1'){el.textContent='—';return;}
    if(el.getAttribute('data-free')==='1'){el.textContent=isEn?'Free':'مجاني';return;}
    var egp=parseInt(el.getAttribute('data-egp')||0);if(!egp)return;
    var v=Math.round(egp*CURR_RATE);
    el.textContent=v>=10000?Math.round(v/1000)+'K':v.toLocaleString();
  });
  ['emp','job','views','msg','wallet'].forEach(function(f){var sl=document.getElementById('sl-'+f);if(sl)updateRow(f,sl.value);});
  updateTotal();
}
function updateRow(feat,raw){
  raw=parseInt(raw);var tier=TIERS[feat][raw];var v=tier.v,p=tier.p;
  var fill=document.getElementById('fill-'+feat);if(fill)fill.style.width=Math.round(raw/5*100)+'%';
  var valEl=document.getElementById('val-'+feat);
  if(valEl){valEl.textContent=v>=1000?v.toLocaleString():v;valEl.style.color=feat==='wallet'&&v===0?'var(--w40)':feat==='msg'&&v===0?'var(--w40)':'var(--tl)';}
  var priceEl=document.getElementById('price-'+feat);
  if(priceEl){
    if(feat==='wallet'){priceEl.style.color=p===0?'var(--w40)':'var(--tl)';priceEl.textContent=p===0?'—':fmt(p)+'/'+(isEn?'mo':'شهر');}
    else if(p===0){priceEl.style.color=feat==='msg'&&v===0?'var(--w40)':'var(--tl)';priceEl.textContent=feat==='msg'&&v===0?'—':(isEn?'Free':'مجاني');}
    else{priceEl.style.color='var(--tl)';priceEl.textContent=fmt(p)+'/'+(isEn?'mo':'شهر');}
  }
  updateTotal();
}
function updateTotal(){
  var total=0;
  ['emp','job','views','msg','wallet'].forEach(function(f){var sl=document.getElementById('sl-'+f);if(sl)total+=TIERS[f][parseInt(sl.value)].p;});
  ['emp','job','views','msg','wallet'].forEach(function(f){
    var sl=document.getElementById('sl-'+f);var el=document.getElementById('b-'+f);if(!sl||!el)return;
    var tier=TIERS[f][parseInt(sl.value)];
    var lbl=NAMES_AR[f]+' ('+tier.v.toLocaleString()+')';
    var price,color;
    if(f==='wallet'){price=tier.p===0?'0':fmt(tier.p);color=tier.p===0?'var(--w40)':'var(--tl)';}
    else if(tier.p===0){price=f==='msg'&&tier.v===0?'—':(isEn?'Free':'مجاني');color=f==='msg'&&tier.v===0?'var(--w40)':'var(--tl)';}
    else{price=fmt(tier.p);color='var(--tl)';}
    el.innerHTML='<span style="color:var(--w60)">'+lbl+'</span><span style="color:'+color+'">'+price+'</span>';
  });
  var gt=document.getElementById('grand-total');var tc=document.getElementById('total-curr');
  if(gt){gt.textContent=total===0?(isEn?'Free':'مجاني'):Math.round(total*CURR_RATE).toLocaleString();}
  if(tc)tc.textContent=total===0?'':(CURR_SYM+'/'+(isEn?'mo':'شهر'));
  var next=total<5000?5000:total<10000?10000:null;
  var bb=document.getElementById('bonus-bar'),bl=document.getElementById('bonus-lbl'),bp=document.getElementById('bonus-pct');
  if(next&&bb&&bl&&bp){var pct=Math.min(100,Math.round(total/next*100));bb.style.width=pct+'%';bp.textContent=pct+'%';}
  var b5=document.getElementById('bonus-5k'),b10=document.getElementById('bonus-10k');
  if(b5)b5.classList.toggle('hidden',total<5000);
  if(b10)b10.classList.toggle('hidden',total<10000);
}

document.addEventListener('DOMContentLoaded',function(){
  ['emp','job','views','msg','wallet'].forEach(function(f){updateRow(f,0);});
});

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(function(a){
  a.addEventListener('click',function(e){var el=document.querySelector(a.getAttribute('href'));if(!el)return;e.preventDefault();el.scrollIntoView({behavior:'smooth'});});
});
</script>
</body>
</html>