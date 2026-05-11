<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>هلا كارير — من التعلم إلى الفرصة — HalaCareer</title>
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
[style*="background:rgba(239,68,68"]{background: rgb(215 65 65) !important;}
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


/* ════ CSS VARS ════ */
:root{--bg:#030d17;--bg2:#04111e;--bg3:#071825;
  --t:#00d4b8;--tl:#2de0ca;--td:#009e85;
  --ta30:rgba(0,212,184,.30);--ta20:rgba(0,212,184,.20);--ta15:rgba(0,212,184,.15);
  --ta12:rgba(0,212,184,.12);--ta08:rgba(0,212,184,.08);
  --w:#fff;--w80:rgba(255,255,255,.80);--w60:rgba(255,255,255,.60);
  --w40:rgba(255,255,255,.40);--w10:rgba(255,255,255,.10);--w06:rgba(255,255,255,.06)}

/* ════ LIGHT MODE ════ */
html.light{--bg:#fff;--bg2:#fff;--bg3:#fff;--panel-bg:#fff;
  --t:#009e85;--tl:#00c4a8;--td:#007a68;
  --ta20:rgba(0,212,184,.18);--ta12:rgba(0,212,184,.12);--ta08:rgba(0,212,184,.07);
  --w:#0a2220;--w80:rgba(10,34,32,.80);--w60:rgba(10,34,32,.58);--w40:rgba(10,34,32,.38);
  --w10:rgba(10,34,32,.09);--w06:rgba(10,34,32,.06)}
html.light body{background:#fff !important;color:#111827 !important}
html.light body::after,html.light canvas{display:none !important}
html.light *{box-shadow:none !important}
html.light [style*="background:rgba(5,14,26"]{background:#fff !important}
html.light [style*="background:rgba(4,11,22"]{background:#fff !important}
html.light [style*="background:rgba(5,16,30"]{background:#fff !important}
html.light [style*="background:rgba(3,13,23"]{background:#fff !important}
html.light [style*="background:rgba(2,8,18"]{background:#fff !important}
html.light [style*="background:rgba(0,5,14"]{background:#fff !important}
html.light [style*="background:rgba(0,0,0"]{background:#fff !important}
html.light [style*="background:linear-gradient(135deg,#031"]{background:#fff !important}
html.light [style*="background:linear-gradient(135deg,#020"]{background:#fff !important}
html.light [style*="background:linear-gradient(135deg,rgba(0,212,184,.08)"]{background:rgba(0,212,184,.05) !important}
html.light [style*="background:linear-gradient(135deg,rgba(0,212,184,.1)"]{background:rgba(0,212,184,.06) !important}
html.light [style*="color:var(--w)"]  {color:#111827 !important}
html.light [style*="color:var(--w80)"]{color:#1f2937 !important}
html.light [style*="color:var(--w60)"]{color:#4b5563 !important}
html.light [style*="color:var(--w40)"]{color:#9ca3af !important}
html.light .grad{-webkit-text-fill-color:transparent !important}
html.light .dotgrid,html.light .linegrid{opacity:.1 !important}
html.light #hc-nav{background:#fff !important;border-color:#e5e7eb !important}
html.light #hc-mob{background:#fff !important;border-color:#e5e7eb !important}

/* ════ BASE ════ */
*,*::before,*::after{box-sizing:border-box}
body{font-family:'Plus Jakarta Sans',sans-serif;background:var(--bg);color:var(--w);
  overflow-x:hidden;-webkit-font-smoothing:antialiased}
html[dir=rtl] body,html[dir=rtl] button,html[dir=rtl] a{font-family:'Cairo',sans-serif}
html[dir=rtl] h1,html[dir=rtl] h2,html[dir=rtl] h3{font-family:'Cairo',sans-serif;letter-spacing:0}
h1,h2,h3,h4{font-family:'Bricolage Grotesque',sans-serif;line-height:1.1}
a{text-decoration:none;color:inherit}
body::after{content:'';position:fixed;inset:0;pointer-events:none;z-index:0;opacity:.04;
  background:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.75' numOctaves='4'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E")}

/* ════ TYPOGRAPHY ════ */
.grad{background:linear-gradient(135deg,#2de0ca,#009e85);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.sec-label{font-size:.65rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;
  color:var(--tl);display:flex;align-items:center;gap:.6rem;margin-bottom:.75rem}
.sec-label::before{content:'';width:20px;height:1.5px;
  background:linear-gradient(to right,var(--t),transparent);flex-shrink:0}

/* ════ SCROLLBAR ════ */
::-webkit-scrollbar{width:5px}
::-webkit-scrollbar-track{background:var(--bg)}
::-webkit-scrollbar-thumb{background:var(--ta20);border-radius:3px}

/* ════ SCROLL PROGRESS ════ */
#spbar{position:fixed;top:0;left:0;height:2px;width:0%;z-index:9999;
  background:linear-gradient(90deg,#2de0ca,#009e85);transition:width .1s linear}

/* ════ FEAT CARD (companies pattern) ════ */
.feat-card{border-radius:1rem;border:1px solid var(--ta12);background:rgba(5,14,26,.75);
  padding:1.5rem;transition:border-color .2s,transform .2s}
.feat-card:hover{border-color:var(--ta25,rgba(0,212,184,.22));transform:translateY(-2px)}
html.light .feat-card{background:#fff !important;border-color:rgba(0,212,184,.2) !important}
.feat-icon{width:44px;height:44px;border-radius:.85rem;flex-shrink:0;
  display:flex;align-items:center;justify-content:center;
  background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)}
.feat-icon svg{width:20px;height:20px}

/* ════ STEP CARD ════ */
.step-card{border-radius:1.25rem;border:1px solid var(--ta12);background:rgba(5,14,26,.75);
  padding:2rem;transition:border-color .2s,transform .2s;position:relative;overflow:hidden}
.step-card::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;
  background:linear-gradient(90deg,var(--t),transparent)}
.step-card:hover{border-color:rgba(0,212,184,.35);transform:translateY(-3px)}
html.light .step-card{background:#fff !important;border-color:rgba(0,212,184,.2) !important}

/* ════ SECTOR CARD ════ */
.sec-card{border-radius:1.25rem;border:1px solid var(--ta12);background:rgba(5,14,26,.75);
  padding:1.75rem;transition:border-color .2s,transform .2s;cursor:pointer}
.sec-card:hover,.sec-card.on{border-color:rgba(0,212,184,.38);transform:translateY(-2px)}
.sec-card.on{background:linear-gradient(135deg,rgba(0,212,184,.08),rgba(5,14,26,.9))}
html.light .sec-card{background:#fff !important;border-color:rgba(0,212,184,.18) !important}
html.light .sec-card.on{background:rgba(0,212,184,.05) !important;border-color:rgba(0,212,184,.35) !important}

/* ════ AUDIENCE CARD ════ */
.aud-card{border-radius:1.25rem;border:1px solid var(--ta12);background:rgba(5,14,26,.75);
  padding:2rem;display:flex;flex-direction:column;transition:border-color .2s,transform .2s}
.aud-card:hover{border-color:rgba(0,212,184,.35);transform:translateY(-3px)}
html.light .aud-card{background:#fff !important;border-color:rgba(0,212,184,.2) !important}

/* ════ JOB CARD ════ */
.job-card{border-radius:1rem;border:1px solid var(--ta12);background:rgba(5,14,26,.75);
  padding:1.25rem 1.5rem;display:flex;align-items:center;gap:1rem;
  transition:border-color .2s,transform .2s;cursor:pointer}
.job-card:hover{border-color:rgba(0,212,184,.35);transform:translateY(-2px)}
html.light .job-card{background:#fff !important;border-color:rgba(0,212,184,.18) !important}

/* ════ TRACK CARD ════ */
.track-card{border-radius:1.1rem;border:1px solid var(--ta12);background:rgba(5,14,26,.8);
  overflow:hidden;transition:border-color .2s,transform .2s}
.track-card:hover{border-color:rgba(0,212,184,.35);transform:translateY(-3px)}
html.light .track-card{background:#fff !important;border-color:rgba(0,212,184,.18) !important}
.track-thumb{height:110px;display:flex;align-items:center;justify-content:center;
  position:relative;overflow:hidden}
.track-thumb-grid{position:absolute;inset:0;opacity:.06;
  background-image:linear-gradient(rgba(0,212,184,1) 1px,transparent 1px),
  linear-gradient(90deg,rgba(0,212,184,1) 1px,transparent 1px);
  background-size:24px 24px}

/* ════ STAT BLOCK ════ */
.stat-b{text-align:center;padding:2rem 1rem;position:relative}
.stat-b::after{content:'';position:absolute;right:0;top:20%;bottom:20%;
  width:1px;background:var(--ta15)}
.stat-b:last-child::after{display:none}
.stat-n{font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:2.6rem;
  line-height:1;background:linear-gradient(135deg,#2de0ca,#009e85);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
@media(max-width:640px){.stat-b::after{display:none}
  .stat-b{border-bottom:1px solid var(--ta12)}.stat-b:last-child{border-bottom:none}}

/* ════ HERO ════ */
.hero-section{position:relative;min-height:100vh;display:flex;align-items:center;
  overflow:hidden;padding-top:64px;background:var(--bg)}
.hero-mesh{position:absolute;inset:0;pointer-events:none;
  background:radial-gradient(ellipse 60% 55% at 25% 55%,rgba(0,212,184,.1),transparent 60%),
  radial-gradient(ellipse 40% 45% at 75% 40%,rgba(0,158,133,.07),transparent 55%)}
html.light .hero-mesh{background:radial-gradient(ellipse 60% 55% at 25% 55%,rgba(0,212,184,.12),transparent 60%)}
.dotgrid{background-image:radial-gradient(rgba(0,212,184,.07) 1px,transparent 1px);background-size:32px 32px}
html.light .dotgrid{opacity:.12 !important}
.hero-badge{display:inline-flex;align-items:center;gap:.5rem;padding:.35rem 1rem;
  border-radius:999px;font-size:.72rem;font-weight:700;letter-spacing:.06em;
  background:var(--ta08);border:1px solid var(--ta20);color:var(--tl)}

/* ════ HIRED TICKER ════ */
.ticker-wrap{overflow:hidden;padding:.65rem 0;
  border-top:1px solid var(--ta12);border-bottom:1px solid var(--ta12)}
html.light .ticker-wrap{background:#fff;border-color:rgba(0,212,184,.15)}
.ticker-track{display:inline-flex;gap:3rem;white-space:nowrap;
  animation:ticker 28s linear infinite}
@keyframes ticker{0%{transform:translateX(0)}100%{transform:translateX(-50%)}}
.t-word{font-size:.68rem;font-weight:700;letter-spacing:.12em;color:var(--w40)}
.t-dot{font-size:.68rem;color:var(--tl);font-weight:700}
html.light .t-word{color:rgba(10,34,32,.45)}

/* ════ PLACEMENT BAR ════ */
.pbar-wrap{height:5px;border-radius:999px;background:var(--ta12);overflow:hidden}
.pbar-fill{height:100%;border-radius:999px;
  background:linear-gradient(90deg,#009e85,#2de0ca);width:0;
  transition:width 1.6s cubic-bezier(.22,1,.36,1)}

/* ════ GAMI METER ════ */
.gbar-wrap{height:8px;border-radius:999px;background:rgba(0,212,184,.12);overflow:hidden}
.gbar-fill{height:100%;border-radius:999px;
  background:linear-gradient(90deg,#009e85,#2de0ca);width:0;
  transition:width 1.8s cubic-bezier(.22,1,.36,1)}

/* ════ SECTORS ════ */
.sec-panel{display:none}
.sec-panel.on{display:block}

/* ════ REVEAL ════ */
.reveal{opacity:0;transform:translateY(22px);
  transition:opacity .65s cubic-bezier(.22,1,.36,1),transform .65s cubic-bezier(.22,1,.36,1)}
.reveal.visible{opacity:1;transform:translateY(0)}

/* ════ CTA ════ */
.cta-band{position:relative;overflow:hidden;border-radius:1.5rem;
  border:1px solid var(--ta20);background:rgba(5,14,26,.85);
  padding:4rem 2rem;text-align:center}
.cta-band::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;
  background:linear-gradient(90deg,transparent,#2de0ca,transparent)}
html.light .cta-band{background:#fff !important;border-color:rgba(0,212,184,.2) !important}

/* ════ SCROLL ARROW ════ */
@keyframes bobdown{0%,100%{transform:translateX(-50%) translateY(0)}
  50%{transform:translateX(-50%) translateY(6px)}}
@keyframes spin-slow{from{transform:rotate(0deg)}to{transform:rotate(360deg)}}

</style>
</head>
<body>

<!-- Scroll progress -->
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
        <button class="nav-btn font-semibold" style="color:var(--w60)" data-en="Companies" data-ar="الشركات">
          الشركات
          <svg class="nav-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="nav-drop">
			<a href="hc-companies.html" class="nav-drop-item " data-en="Hiring" data-ar="التوظيف"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div><span>التوظيف</span></a>
			<a href="hc-live.html" class="nav-drop-item" data-en="Live Training" data-ar="التدريبات المباشرة"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg></div><span>التدريبات المباشرة</span></a>
		  </div>
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

<!-- ══════════ HERO ══════════ -->
<section class="hero-section">
  <div class="hero-mesh absolute inset-0 pointer-events-none"></div>
  <div class="dotgrid absolute inset-0 opacity-60 pointer-events-none"></div>

  <div class="relative z-10 w-full max-w-[1180px] mx-auto px-6 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

      <!-- Left -->
      <div class="reveal">
        <div class="hero-badge mb-7">
          <span class="w-1.5 h-1.5 rounded-full animate-pulse shrink-0" style="background:var(--tl)"></span>
          <span data-en="#1 Talent Development Ecosystem · MENA" data-ar="منظومة تطوير المواهب الأولى · MENA">#1 Talent Development Ecosystem · MENA</span>
        </div>

        <h1 class="font-display font-extrabold leading-[1.06] tracking-tight mb-5" style="font-size:clamp(2.6rem,4.8vw,4rem);color:var(--w)">
          <span data-en="From" data-ar="من">من</span>
          <span class="grad" data-en=" Learning" data-ar=" التعلم"> التعلم</span><br>
          <span data-en="to Opportunity" data-ar="إلى الفرصة">إلى الفرصة</span>
        </h1>

        <p class="text-base sm:text-lg leading-relaxed mb-8 max-w-[440px]" style="color:var(--w60)"
           data-en="We teach people exactly what they need to land the career they want — then connect them directly with 500+ companies that are hiring."
           data-ar="نُعلّم الناس بالضبط ما يحتاجونه للحصول على مسيرة مهنية يريدونها — ثم نربطهم مباشرة بأكثر من 500 شركة تبحث عن مواهب.">نُعلّم الناس بالضبط ما يحتاجونه للحصول على مسيرة مهنية يريدونها — ثم نربطهم مباشرة بأكثر من 500 شركة تبحث عن مواهب.</p>

        <div class="flex flex-wrap gap-3 mb-10">
          <a href="#how" class="btn-p inline-flex items-center gap-2 px-6 py-3 rounded-xl font-bold text-sm">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 3l14 9-14 9V3z"/></svg>
            <span data-en="Start Learning" data-ar="ابدأ التعلم">ابدأ التعلم</span>
          </a>
          <a href="hc-companies.html" class="btn-g inline-flex items-center gap-2 px-6 py-3 rounded-xl font-semibold text-sm">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2zM16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>
            <span data-en="For Companies" data-ar="للشركات">للشركات</span>
          </a>
        </div>

        <!-- Stats mini -->
        <div class="grid grid-cols-2 gap-4 pt-6" style="border-top:1px solid var(--ta12)">
          <div>
            <div class="font-display font-extrabold text-2xl grad">85%</div>
            <div class="text-xs mt-0.5" style="color:var(--w40)" data-en="Employment placement rate" data-ar="معدل التوظيف الفعلي">معدل التوظيف الفعلي</div>
          </div>
          <div>
            <div class="font-display font-extrabold text-2xl grad">42 يوم</div>
            <div class="text-xs mt-0.5" style="color:var(--w40)" data-en="Average time to employment" data-ar="متوسط الوقت للتوظيف">متوسط الوقت للتوظيف</div>
          </div>
        </div>
      </div>

      <!-- Right: Visual cards -->
      <div class="relative reveal" style="transition-delay:.1s">
        <div class="grid gap-3" style="grid-template-columns:1fr 1fr">

          <!-- Placement rate -->
          <div class="feat-card" style="background:linear-gradient(135deg,rgba(0,212,184,.15),rgba(5,14,26,.9));border-color:rgba(0,212,184,.3);animation:float 6s ease-in-out infinite">
            <div class="text-[.58rem] font-bold tracking-widest uppercase mb-2" style="color:var(--td)" data-en="✦ Placement Rate" data-ar="✦ معدل التوظيف">✦ معدل التوظيف</div>
            <div class="font-display font-extrabold text-5xl grad mb-1" style="line-height:1">85%</div>
            <div class="text-xs" style="color:var(--w60)" data-en="of graduates placed" data-ar="من الخريجين وُظِّفوا">من الخريجين وُظِّفوا</div>
          </div>

          <!-- Latest hire -->
          <div class="feat-card flex flex-col gap-2.5" style="animation:float 7s ease-in-out 1s infinite">
            <div class="text-[.58rem] font-bold tracking-widest uppercase" style="color:var(--w40)" data-en="Latest Hires" data-ar="آخر التوظيفات">آخر التوظيفات</div>
            <div class="flex items-center gap-2 p-2.5 rounded-xl" style="background:rgba(34,197,94,.07);border:1px solid rgba(34,197,94,.18)">
              <div class="w-7 h-7 rounded-full flex items-center justify-center text-[.65rem] font-bold shrink-0" style="background:linear-gradient(135deg,#2de0ca,#009e85);color:rgba(0,0,0,.65)">SM</div>
              <div class="flex-1 min-w-0">
                <div class="text-xs font-bold" style="color:var(--w)">Sara M.</div>
                <div class="text-[.6rem]" style="color:var(--w40)" data-en="Sales Manager · Dubai" data-ar="مدير مبيعات · دبي">مدير مبيعات · دبي</div>
              </div>
              <svg class="w-3.5 h-3.5 shrink-0" viewBox="0 0 10 10" fill="none" stroke="#22c55e" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg>
            </div>
            <div class="flex items-center gap-2 p-2.5 rounded-xl" style="background:rgba(0,212,184,.06);border:1px solid var(--ta15)">
              <div class="w-7 h-7 rounded-full flex items-center justify-center text-[.65rem] font-bold shrink-0" style="background:linear-gradient(135deg,#fbbf24,#d97706);color:rgba(0,0,0,.65)">AK</div>
              <div class="flex-1 min-w-0">
                <div class="text-xs font-bold" style="color:var(--w)">Ahmed K.</div>
                <div class="text-[.6rem]" style="color:var(--w40)" data-en="RE Agent · Cairo" data-ar="وكيل عقارات · القاهرة">وكيل عقارات · القاهرة</div>
              </div>
              <svg class="w-3.5 h-3.5 shrink-0" viewBox="0 0 10 10" fill="none" stroke="#22c55e" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg>
            </div>
          </div>

          <!-- Time to hire -->
          <div class="feat-card" style="animation:float 5.5s ease-in-out .5s infinite">
            <div class="text-[.58rem] font-bold tracking-widest uppercase mb-2" style="color:var(--w40)" data-en="⚡ Time to Employment" data-ar="⚡ وقت التوظيف">⚡ وقت التوظيف</div>
            <div class="font-display font-extrabold text-3xl mb-1" style="color:var(--w);line-height:1">42 <span class="text-lg font-semibold" style="color:var(--w60)" data-en="day" data-ar="يوم">يوم</span></div>
            <div class="pbar-wrap mb-1.5"><div class="pbar-fill" style="--w:100%;width:100%;background-size:200% 100%;animation:shimmer 2s linear infinite;background:linear-gradient(90deg,#009e85,#2de0ca,#009e85)"></div></div>
            <div class="text-[.6rem]" style="color:var(--w40)" data-en="vs 4.5 months market average" data-ar="مقابل 4.5 شهر متوسط السوق">مقابل 4.5 شهر متوسط السوق</div>
          </div>

          <!-- Gamification -->
          <div class="feat-card" style="background:linear-gradient(135deg,rgba(251,191,36,.08),rgba(5,14,26,.85));border-color:rgba(251,191,36,.2);animation:float 6.5s ease-in-out 2s infinite">
            <div class="text-[.58rem] font-bold tracking-widest uppercase mb-2" style="color:rgba(251,191,36,.8)" data-en="⭐ Gamification" data-ar="⭐ التلعيب">⭐ التلعيب</div>
            <div class="font-display font-extrabold text-3xl mb-1" style="color:var(--w);line-height:1">70%</div>
            <div class="text-[.6rem]" style="color:var(--w60)" data-en="Completion rate (vs 5–10% industry)" data-ar="معدل الإتمام (مقابل 5–10% السوق)">معدل الإتمام (مقابل 5–10% السوق)</div>
          </div>

        </div>
      </div>
    </div>

    <!-- Scroll cue -->
    <div class="absolute bottom-6 left-1/2" style="transform:translateX(-50%);animation:bobdown 2.5s ease-in-out infinite">
      <div style="position:relative;width:44px;height:44px">
        <svg style="position:absolute;inset:0;animation:spin-slow 4s linear infinite" width="44" height="44" viewBox="0 0 44 44">
          <circle cx="22" cy="22" r="18" fill="none" stroke="rgba(0,212,184,.15)" stroke-width="1.5"/>
          <circle cx="22" cy="22" r="18" fill="none" stroke="rgba(0,212,184,.65)" stroke-width="1.5" stroke-dasharray="113" stroke-dashoffset="80" stroke-linecap="round" style="transform-origin:22px 22px"/>
        </svg>
        <div style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center">
          <svg width="10" height="16" viewBox="0 0 10 16" fill="none" stroke="var(--tl)" stroke-width="1.5"><rect x="1" y="1" width="8" height="14" rx="4"/><line x1="5" y1="4" x2="5" y2="7" stroke-linecap="round"/></svg>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════ TICKER ══════════ -->
<div class="ticker-wrap">
  <div class="ticker-track"><span class="t-dot">✦</span><span class="t-word">تعلّم</span><span class="t-dot">✦</span><span class="t-word">إرشاد مهني</span><span class="t-dot">✦</span><span class="t-word">توظيف موثق</span><span class="t-dot">✦</span><span class="t-word">تلعيب</span><span class="t-dot">✦</span><span class="t-word">خبراء حقيقيون</span><span class="t-dot">✦</span><span class="t-word">مجتمع</span><span class="t-dot">✦</span><span class="t-word">شركات شريكة</span><span class="t-dot">✦</span><span class="t-word">مهارات عملية</span><span class="t-dot">✦</span><span class="t-word">نمو مهني</span><span class="t-dot">✦</span><span class="t-word">تعلّم</span><span class="t-dot">✦</span><span class="t-word">إرشاد مهني</span><span class="t-dot">✦</span><span class="t-word">توظيف موثق</span><span class="t-dot">✦</span><span class="t-word">تلعيب</span><span class="t-dot">✦</span><span class="t-word">خبراء حقيقيون</span><span class="t-dot">✦</span><span class="t-word">مجتمع</span><span class="t-dot">✦</span><span class="t-word">شركات شريكة</span><span class="t-dot">✦</span><span class="t-word">مهارات عملية</span><span class="t-dot">✦</span><span class="t-word">نمو مهني</span></div>
</div>

<!-- ══════════ STATS ══════════ -->
<div style="background:var(--bg2);border-bottom:1px solid var(--ta12)">
  <div class="max-w-[1180px] mx-auto px-6">
    <div class="grid grid-cols-2 sm:grid-cols-4 reveal">
    <div class="stat-b">
      <div class="stat-n">10K+</div>
      <div class="text-sm font-bold mt-1.5" style="color:var(--w)" data-en="Active Learners" data-ar="متعلم نشط">متعلم نشط</div>
      <div class="text-xs mt-0.5" style="color:var(--w40)" data-en="Across Egypt & the region" data-ar="في مصر والمنطقة">في مصر والمنطقة</div>
    </div>
    <div class="stat-b">
      <div class="stat-n">+85%</div>
      <div class="text-sm font-bold mt-1.5" style="color:var(--w)" data-en="Placement Rate" data-ar="معدل التوظيف">معدل التوظيف</div>
      <div class="text-xs mt-0.5" style="color:var(--w40)" data-en="For our track graduates" data-ar="لخريجي مساراتنا">لخريجي مساراتنا</div>
    </div>
    <div class="stat-b">
      <div class="stat-n">500+</div>
      <div class="text-sm font-bold mt-1.5" style="color:var(--w)" data-en="Experts & Mentors" data-ar="خبير ومنتور">خبير ومنتور</div>
      <div class="text-xs mt-0.5" style="color:var(--w40)" data-en="With real-world expertise" data-ar="بخبرة حقيقية">بخبرة حقيقية</div>
    </div>
    <div class="stat-b">
      <div class="stat-n">42 يوم</div>
      <div class="text-sm font-bold mt-1.5" style="color:var(--w)" data-en="Time to Employment" data-ar="وقت التوظيف">وقت التوظيف</div>
      <div class="text-xs mt-0.5" style="color:var(--w40)" data-en="vs 4.5 months market avg" data-ar="مقابل 4.5 شهر بالسوق">مقابل 4.5 شهر بالسوق</div>
    </div>
    </div>
  </div>
</div>

<!-- ══════════ HOW IT WORKS ══════════ -->
<section id="how" class="py-24" style="background:var(--bg)">
  <div class="max-w-[1180px] mx-auto px-6">
    <div class="text-center mb-14 reveal">
      <div class="sec-label justify-center" data-en="The Journey" data-ar="الرحلة">الرحلة</div>
      <h2 class="font-display font-extrabold mb-4" style="font-size:clamp(1.9rem,3.5vw,2.8rem);color:var(--w)"
          data-en="Three steps to your dream career"
          data-ar="ثلاث خطوات لمسيرتك المهنية الحقيقية">ثلاث خطوات لمسيرتك المهنية الحقيقية</h2>
      <p class="text-base leading-relaxed max-w-xl mx-auto" style="color:var(--w60)"
         data-en="A complete system that takes you from zero to employed — with real skills, real mentors, and real companies."
         data-ar="منظومة كاملة تأخذك من الصفر للتوظيف — بمهارات حقيقية ومنتورز حقيقيين وشركات حقيقية.">منظومة كاملة تأخذك من الصفر للتوظيف — بمهارات حقيقية ومنتورز حقيقيين وشركات حقيقية.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 reveal">
    <div class="step-card">
      <div class="text-[.58rem] font-bold tracking-widest uppercase mb-4" style="color:var(--td)">STEP 1</div>
      <div class="flex items-center gap-3 mb-5">
        <div class="feat-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2zM22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
        </div>
        <h3 class="font-display font-bold text-xl" style="color:var(--w)" data-en="Learn" data-ar="تعلّم">تعلّم</h3>
      </div>
      <p class="text-sm leading-relaxed mb-5" style="color:var(--w60)" data-en="Diplomas built on what employers actually need. Recorded, live, and interactive content — with gamification that pushes completion to 70%." data-ar="دبلومات مبنية على ما يحتاجه أصحاب العمل فعلاً. جلسات مسجلة ومباشرة وكتب تفاعلية — مع نظام تلعيب يرفع معدل الإتمام لـ 70%.">دبلومات مبنية على ما يحتاجه أصحاب العمل فعلاً. جلسات مسجلة ومباشرة وكتب تفاعلية — مع نظام تلعيب يرفع معدل الإتمام لـ 70%.</p>
      <ul class="flex flex-col gap-2.5"><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Accredited Diplomas" data-ar="دبلومات معتمدة">دبلومات معتمدة</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Live Sessions" data-ar="جلسات مباشرة">جلسات مباشرة</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Gamification & XP" data-ar="تلعيب و XP">تلعيب و XP</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Interactive Books" data-ar="كتب تفاعلية">كتب تفاعلية</span></li></ul>
    </div>
    <div class="step-card">
      <div class="text-[.58rem] font-bold tracking-widest uppercase mb-4" style="color:var(--td)">STEP 2</div>
      <div class="flex items-center gap-3 mb-5">
        <div class="feat-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h3 class="font-display font-bold text-xl" style="color:var(--w)" data-en="Mentor" data-ar="استشر">استشر</h3>
      </div>
      <p class="text-sm leading-relaxed mb-5" style="color:var(--w60)" data-en="Real experts with real experience. Every mentor sets their own services, pricing, and community — you book directly in minutes." data-ar="خبراء حقيقيون بتجارب حقيقية. كل منتور يحدد خدماته وأسعاره ومجتمعه — وأنت تحجز معه مباشرة في دقائق.">خبراء حقيقيون بتجارب حقيقية. كل منتور يحدد خدماته وأسعاره ومجتمعه — وأنت تحجز معه مباشرة في دقائق.</p>
      <ul class="flex flex-col gap-2.5"><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="1:1 Sessions" data-ar="جلسات 1:1">جلسات 1:1</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Private Communities" data-ar="مجتمعات خاصة">مجتمعات خاصة</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Exclusive Content" data-ar="محتوى حصري">محتوى حصري</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Ongoing Follow-up" data-ar="متابعة مستمرة">متابعة مستمرة</span></li></ul>
    </div>
    <div class="step-card">
      <div class="text-[.58rem] font-bold tracking-widest uppercase mb-4" style="color:var(--td)">STEP 3</div>
      <div class="flex items-center gap-3 mb-5">
        <div class="feat-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>
        </div>
        <h3 class="font-display font-bold text-xl" style="color:var(--w)" data-en="Get Hired" data-ar="وُظِّف">وُظِّف</h3>
      </div>
      <p class="text-sm leading-relaxed mb-5" style="color:var(--w60)" data-en="Your verified profile automatically reaches companies searching for your skills. 500+ companies source talent directly from the platform — no middleman." data-ar="ملفك الموثق يصل تلقائياً للشركات الباحثة عن مهاراتك. 500+ شركة تحصل على مواهب مباشرة من المنصة — بلا وسيط.">ملفك الموثق يصل تلقائياً للشركات الباحثة عن مهاراتك. 500+ شركة تحصل على مواهب مباشرة من المنصة — بلا وسيط.</p>
      <ul class="flex flex-col gap-2.5"><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Skills-Verified Profile" data-ar="ملف موثق بالمهارات">ملف موثق بالمهارات</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="500+ Partner Companies" data-ar="500+ شركة شريكة">500+ شركة شريكة</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Smart Matching" data-ar="تطابق ذكي">تطابق ذكي</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Priority for Subscribers" data-ar="أولوية للمشتركين">أولوية للمشتركين</span></li></ul>
    </div>
    </div>
  </div>
</section>

<!-- ══════════ SECTORS ══════════ -->
<section id="sectors" class="py-24" style="background:var(--bg2);border-top:1px solid var(--ta12)">
  <div class="max-w-[1180px] mx-auto px-6">
    <div class="text-center mb-14 reveal">
      <div class="sec-label justify-center" data-en="Four Sectors" data-ar="أربعة قطاعات">أربعة قطاعات</div>
      <h2 class="font-display font-extrabold mb-4" style="font-size:clamp(1.9rem,3.5vw,2.8rem);color:var(--w)"
          data-en="Focus. Depth. Real Employment."
          data-ar="تركيز. عمق. توظيف حقيقي.">تركيز. عمق. توظيف حقيقي.</h2>
      <p class="text-base max-w-xl mx-auto" style="color:var(--w60)"
         data-en="We don't try to cover everything. We chose 4 high-demand sectors where we can guarantee a verified placement rate."
         data-ar="لا نحاول تغطية كل شيء. اخترنا 4 قطاعات عالية الطلب يمكننا فيها ضمان معدل توظيف موثق.">لا نحاول تغطية كل شيء. اخترنا 4 قطاعات عالية الطلب يمكننا فيها ضمان معدل توظيف موثق.</p>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-[280px,1fr] gap-5 reveal">
      <div class="flex flex-col gap-3">
    <div class="sec-card on" onclick="switchSector(0,this)" data-i="0">
      <div class="flex items-center gap-3 mb-2">
        <div class="feat-icon shrink-0">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
        </div>
        <div>
          <div class="font-display font-bold text-base" style="color:var(--w)" data-en="Business" data-ar="البيزنس">البيزنس</div>
          <div class="text-[.62rem] mt-0.5" style="color:var(--tl)">⚡ Core Revenue Engine</div>
        </div>
      </div>
      <div class="flex items-center gap-3 text-xs" style="color:var(--w40)">
        <span data-en="45 tracks" data-ar="45 مساراً">45 مساراً</span>
        <span>·</span>
        <span data-en="90% placement" data-ar="90% توظيف">90% توظيف</span>
      </div>
    </div>
    <div class="sec-card " onclick="switchSector(1,this)" data-i="1">
      <div class="flex items-center gap-3 mb-2">
        <div class="feat-icon shrink-0">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 1 0 0 20A10 10 0 0 0 12 2zM2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        </div>
        <div>
          <div class="font-display font-bold text-base" style="color:var(--w)" data-en="Languages" data-ar="اللغات">اللغات</div>
          <div class="text-[.62rem] mt-0.5" style="color:var(--tl)">📈 High Volume · Fast Cash</div>
        </div>
      </div>
      <div class="flex items-center gap-3 text-xs" style="color:var(--w40)">
        <span data-en="28 tracks" data-ar="28 مساراً">28 مساراً</span>
        <span>·</span>
        <span data-en="88% placement" data-ar="88% توظيف">88% توظيف</span>
      </div>
    </div>
    <div class="sec-card " onclick="switchSector(2,this)" data-i="2">
      <div class="flex items-center gap-3 mb-2">
        <div class="feat-icon shrink-0">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2zM9 22V12h6v10"/></svg>
        </div>
        <div>
          <div class="font-display font-bold text-base" style="color:var(--w)" data-en="Real Estate" data-ar="العقارات">العقارات</div>
          <div class="text-[.62rem] mt-0.5" style="color:var(--tl)">💎 Premium High-Ticket</div>
        </div>
      </div>
      <div class="flex items-center gap-3 text-xs" style="color:var(--w40)">
        <span data-en="18 tracks" data-ar="18 مساراً">18 مساراً</span>
        <span>·</span>
        <span data-en="95% placement" data-ar="95% توظيف">95% توظيف</span>
      </div>
    </div>
    <div class="sec-card " onclick="switchSector(3,this)" data-i="3">
      <div class="flex items-center gap-3 mb-2">
        <div class="feat-icon shrink-0">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5zM6 12v5c3 3 9 3 12 0v-5"/></svg>
        </div>
        <div>
          <div class="font-display font-bold text-base" style="color:var(--w)" data-en="Teacher Prep" data-ar="إعداد المعلمين">إعداد المعلمين</div>
          <div class="text-[.62rem] mt-0.5" style="color:var(--tl)">🏛️ Strategic Stability</div>
        </div>
      </div>
      <div class="flex items-center gap-3 text-xs" style="color:var(--w40)">
        <span data-en="22 tracks" data-ar="22 مساراً">22 مساراً</span>
        <span>·</span>
        <span data-en="85% placement" data-ar="85% توظيف">85% توظيف</span>
      </div>
    </div>
      </div>
      <div style="min-height:320px">
    <div class="sec-panel on" id="sp-0">
      <div class="feat-card h-full">
        <div class="text-[.58rem] font-bold tracking-widest uppercase mb-4" style="color:var(--td)">⚡ Core Revenue Engine</div>
        <h3 class="font-display font-bold text-2xl mb-3 grad" data-en="Business" data-ar="البيزنس">البيزنس</h3>
        <p class="text-sm leading-relaxed mb-5" style="color:var(--w60)" data-en="Core Money Engine. Highest LTV as learners take multiple tracks with continuous upskilling." data-ar="المحرك الأساسي. أعلى LTV لأن المتعلم يأخذ أكثر من مسار مع upskilling مستمر.">المحرك الأساسي. أعلى LTV لأن المتعلم يأخذ أكثر من مسار مع upskilling مستمر.</p>
        <div class="flex flex-wrap gap-2 mb-6"><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Sales & Marketing" data-ar="مبيعات وتسويق">مبيعات وتسويق</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Business Management" data-ar="إدارة أعمال">إدارة أعمال</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Entrepreneurship" data-ar="ريادة أعمال">ريادة أعمال</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Finance & Accounting" data-ar="تمويل وحسابات">تمويل وحسابات</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="HR Management" data-ar="موارد بشرية">موارد بشرية</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="E-Commerce" data-ar="تجارة إلكترونية">تجارة إلكترونية</span></div>
        <div class="flex items-center gap-4 pt-4" style="border-top:1px solid var(--ta12)">
          <div class="text-center">
            <div class="font-display font-bold text-xl grad" data-en="45 tracks" data-ar="45 مساراً">45 مساراً</div>
            <div class="text-[.62rem]" style="color:var(--w40)" data-en="tracks" data-ar="مسارات">مسارات</div>
          </div>
          <div class="w-px h-8" style="background:var(--ta12)"></div>
          <div class="text-center">
            <div class="font-display font-bold text-xl grad" data-en="90% placement" data-ar="90% توظيف">90% توظيف</div>
            <div class="text-[.62rem]" style="color:var(--w40)" data-en="placement rate" data-ar="معدل توظيف">معدل توظيف</div>
          </div>
          <div class="ms-auto">
            <a href="hc-diplomas.html" class="btn-p text-sm font-bold py-2 px-5 inline-flex items-center gap-1.5">
              <span data-en="Explore →" data-ar="استكشف ←">استكشف ←</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="sec-panel " id="sp-1">
      <div class="feat-card h-full">
        <div class="text-[.58rem] font-bold tracking-widest uppercase mb-4" style="color:var(--td)">📈 High Volume · Fast Cash</div>
        <h3 class="font-display font-bold text-2xl mb-3 grad" data-en="Languages" data-ar="اللغات">اللغات</h3>
        <p class="text-sm leading-relaxed mb-5" style="color:var(--w60)" data-en="Fastest revenue sector. Consistent demand in corporates, call centers, translation, and teaching." data-ar="أسرع قطاع لتحقيق دخل. الطلب ثابت في الشركات ومراكز الاتصال والترجمة والتدريس.">أسرع قطاع لتحقيق دخل. الطلب ثابت في الشركات ومراكز الاتصال والترجمة والتدريس.</p>
        <div class="flex flex-wrap gap-2 mb-6"><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Business English" data-ar="إنجليزي للأعمال">إنجليزي للأعمال</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Conversational English" data-ar="إنجليزي المحادثة">إنجليزي المحادثة</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="IELTS & TOEFL" data-ar="IELTS & TOEFL">IELTS & TOEFL</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Sales English" data-ar="إنجليزي المبيعات">إنجليزي المبيعات</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="French" data-ar="فرنساوي">فرنساوي</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="German" data-ar="ألماني">ألماني</span></div>
        <div class="flex items-center gap-4 pt-4" style="border-top:1px solid var(--ta12)">
          <div class="text-center">
            <div class="font-display font-bold text-xl grad" data-en="28 tracks" data-ar="28 مساراً">28 مساراً</div>
            <div class="text-[.62rem]" style="color:var(--w40)" data-en="tracks" data-ar="مسارات">مسارات</div>
          </div>
          <div class="w-px h-8" style="background:var(--ta12)"></div>
          <div class="text-center">
            <div class="font-display font-bold text-xl grad" data-en="88% placement" data-ar="88% توظيف">88% توظيف</div>
            <div class="text-[.62rem]" style="color:var(--w40)" data-en="placement rate" data-ar="معدل توظيف">معدل توظيف</div>
          </div>
          <div class="ms-auto">
            <a href="hc-diplomas.html" class="btn-p text-sm font-bold py-2 px-5 inline-flex items-center gap-1.5">
              <span data-en="Explore →" data-ar="استكشف ←">استكشف ←</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="sec-panel " id="sp-2">
      <div class="feat-card h-full">
        <div class="text-[.58rem] font-bold tracking-widest uppercase mb-4" style="color:var(--td)">💎 Premium High-Ticket</div>
        <h3 class="font-display font-bold text-2xl mb-3 grad" data-en="Real Estate" data-ar="العقارات">العقارات</h3>
        <p class="text-sm leading-relaxed mb-5" style="color:var(--w60)" data-en="Fewer learners but highest post-placement earnings. Commission-based mindset — investor favorite." data-ar="أقل عدد طلاب لكن أعلى راتب بعد التوظيف. Commission-based mindset — مفضل المستثمرين.">أقل عدد طلاب لكن أعلى راتب بعد التوظيف. Commission-based mindset — مفضل المستثمرين.</p>
        <div class="flex flex-wrap gap-2 mb-6"><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Real Estate Marketing" data-ar="تسويق عقاري">تسويق عقاري</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Property Management" data-ar="إدارة العقارات">إدارة العقارات</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Contract Law" data-ar="قانون العقود">قانون العقود</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Property Valuation" data-ar="تقييم عقاري">تقييم عقاري</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Unit Sales" data-ar="مبيعات الوحدات">مبيعات الوحدات</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Asset Management" data-ar="إدارة الأصول">إدارة الأصول</span></div>
        <div class="flex items-center gap-4 pt-4" style="border-top:1px solid var(--ta12)">
          <div class="text-center">
            <div class="font-display font-bold text-xl grad" data-en="18 tracks" data-ar="18 مساراً">18 مساراً</div>
            <div class="text-[.62rem]" style="color:var(--w40)" data-en="tracks" data-ar="مسارات">مسارات</div>
          </div>
          <div class="w-px h-8" style="background:var(--ta12)"></div>
          <div class="text-center">
            <div class="font-display font-bold text-xl grad" data-en="95% placement" data-ar="95% توظيف">95% توظيف</div>
            <div class="text-[.62rem]" style="color:var(--w40)" data-en="placement rate" data-ar="معدل توظيف">معدل توظيف</div>
          </div>
          <div class="ms-auto">
            <a href="hc-diplomas.html" class="btn-p text-sm font-bold py-2 px-5 inline-flex items-center gap-1.5">
              <span data-en="Explore →" data-ar="استكشف ←">استكشف ←</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="sec-panel " id="sp-3">
      <div class="feat-card h-full">
        <div class="text-[.58rem] font-bold tracking-widest uppercase mb-4" style="color:var(--td)">🏛️ Strategic Stability</div>
        <h3 class="font-display font-bold text-2xl mb-3 grad" data-en="Teacher Prep" data-ar="إعداد المعلمين">إعداد المعلمين</h3>
        <p class="text-sm leading-relaxed mb-5" style="color:var(--w60)" data-en="Strategic stability. Partnerships with schools and EdTech. Long-term contracts provide consistent revenue." data-ar="استقرار استراتيجي. شراكات مع مدارس وEdTech. عقود طويلة الأجل توفر إيرادات ثابتة.">استقرار استراتيجي. شراكات مع مدارس وEdTech. عقود طويلة الأجل توفر إيرادات ثابتة.</p>
        <div class="flex flex-wrap gap-2 mb-6"><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Curriculum Design" data-ar="مناهج تعليمية">مناهج تعليمية</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="EdTech Integration" data-ar="تكنولوجيا التعليم">تكنولوجيا التعليم</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Classroom Management" data-ar="إدارة الفصل">إدارة الفصل</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Student Assessment" data-ar="تقييم الطلاب">تقييم الطلاب</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Language Teaching" data-ar="تعليم اللغات">تعليم اللغات</span><span class="px-3 py-1.5 rounded-full text-xs font-semibold" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Creative Education" data-ar="التعليم الإبداعي">التعليم الإبداعي</span></div>
        <div class="flex items-center gap-4 pt-4" style="border-top:1px solid var(--ta12)">
          <div class="text-center">
            <div class="font-display font-bold text-xl grad" data-en="22 tracks" data-ar="22 مساراً">22 مساراً</div>
            <div class="text-[.62rem]" style="color:var(--w40)" data-en="tracks" data-ar="مسارات">مسارات</div>
          </div>
          <div class="w-px h-8" style="background:var(--ta12)"></div>
          <div class="text-center">
            <div class="font-display font-bold text-xl grad" data-en="85% placement" data-ar="85% توظيف">85% توظيف</div>
            <div class="text-[.62rem]" style="color:var(--w40)" data-en="placement rate" data-ar="معدل توظيف">معدل توظيف</div>
          </div>
          <div class="ms-auto">
            <a href="hc-diplomas.html" class="btn-p text-sm font-bold py-2 px-5 inline-flex items-center gap-1.5">
              <span data-en="Explore →" data-ar="استكشف ←">استكشف ←</span>
            </a>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════ GAMIFICATION ══════════ -->
<section class="py-24" style="background:var(--bg);border-top:1px solid var(--ta12)">
  <div class="max-w-[1180px] mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
      <div class="reveal">
        <div class="sec-label" data-en="Gamification Engine" data-ar="محرك التلعيب">محرك التلعيب</div>
        <h2 class="font-display font-extrabold mb-5" style="font-size:clamp(1.8rem,3vw,2.5rem);color:var(--w)"
            data-en="The engine that turns learners into committed players"
            data-ar="المحرك الذي يحوّل المتدربين إلى لاعبين مُلتزمين">المحرك الذي يحوّل المتدربين إلى لاعبين مُلتزمين</h2>
        <p class="text-base leading-relaxed mb-6" style="color:var(--w60)"
           data-en="Traditional platforms have 5–10% completion rates. HalaCareer's gamification engine pushes that to 40–70%+, driving retention and lifetime value."
           data-ar="المنصات التقليدية لديها معدل إتمام 5–10%. محرك هلا كارير يرفعه لـ 40–70%+، ويزيد الاحتفاظ بالمستخدمين وقيمة العمر.">المنصات التقليدية لديها معدل إتمام 5–10%. محرك هلا كارير يرفعه لـ 40–70%+، ويزيد الاحتفاظ بالمستخدمين وقيمة العمر.</p>

        <!-- Completion bar comparison -->
        <div class="feat-card mb-4">
          <div class="flex justify-between mb-2">
            <span class="text-sm font-semibold" style="color:var(--w60)" data-en="Traditional platforms" data-ar="المنصات التقليدية">المنصات التقليدية</span>
            <span class="font-display font-bold" style="color:rgba(239,68,68,.9)">5–10%</span>
          </div>
          <div class="pbar-wrap mb-4"><div class="pbar-fill" style="width:10%;background:rgba(239,68,68,.5)"></div></div>
          <div class="flex justify-between mb-2">
            <span class="text-sm font-bold" style="color:var(--t)" data-en="HalaCareer" data-ar="هلا كارير">هلا كارير</span>
            <span class="font-display font-bold grad">40–70%+</span>
          </div>
          <div class="pbar-wrap obs-bar" data-w="70%"><div class="pbar-fill"></div></div>
        </div>
        <p class="text-sm" style="color:var(--w40)"
           data-en="Stars · Tickets · XP · Levels · Leaderboards · Challenges · Community pressure · Rewards"
           data-ar="نجوم · تذاكر · XP · مستويات · ليدربورد · تحديات · ضغط المجتمع · مكافآت">نجوم · تذاكر · XP · مستويات · ليدربورد · تحديات · ضغط المجتمع · مكافآت</p>
      </div>
      <div class="grid grid-cols-2 gap-4 reveal" style="transition-delay:.1s">
    <div class="feat-card text-center">
      <div class="feat-icon mx-auto mb-3">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
      </div>
      <div class="font-display font-extrabold text-2xl grad mb-1">17K+</div>
      <div class="text-sm font-semibold" style="color:var(--w)" data-en="Challenges & Achievements" data-ar="تحدي وإنجاز">تحدي وإنجاز</div>
    </div>
    <div class="feat-card text-center">
      <div class="feat-icon mx-auto mb-3">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M18 20V10M12 20V4M6 20v-4"/></svg>
      </div>
      <div class="font-display font-extrabold text-2xl grad mb-1">∞</div>
      <div class="text-sm font-semibold" style="color:var(--w)" data-en="Levels & Leaderboard" data-ar="مستويات وترتيب">مستويات وترتيب</div>
    </div>
    <div class="feat-card text-center">
      <div class="feat-icon mx-auto mb-3">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
      </div>
      <div class="font-display font-extrabold text-2xl grad mb-1">5×</div>
      <div class="text-sm font-semibold" style="color:var(--w)" data-en="Motivation Systems" data-ar="أنظمة تحفيز">أنظمة تحفيز</div>
    </div>
    <div class="feat-card text-center">
      <div class="feat-icon mx-auto mb-3">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14M22 4L12 14.01l-3-3"/></svg>
      </div>
      <div class="font-display font-extrabold text-2xl grad mb-1">70%</div>
      <div class="text-sm font-semibold" style="color:var(--w)" data-en="Completion Rate" data-ar="معدل الإتمام">معدل الإتمام</div>
    </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════ WHO IT'S FOR ══════════ -->
<section id="who" class="py-24" style="background:var(--bg2);border-top:1px solid var(--ta12)">
  <div class="max-w-[1180px] mx-auto px-6">
    <div class="text-center mb-14 reveal">
      <div class="sec-label justify-center" data-en="Who It's For" data-ar="لمن هلا كارير">لمن هلا كارير</div>
      <h2 class="font-display font-extrabold mb-4" style="font-size:clamp(1.9rem,3.5vw,2.8rem);color:var(--w)"
          data-en="One ecosystem. Three audiences."
          data-ar="منظومة واحدة. ثلاثة جمهور.">منظومة واحدة. ثلاثة جمهور.</h2>
      <p class="text-base max-w-lg mx-auto" style="color:var(--w60)"
         data-en="Every role in the talent equation has a dedicated experience built for them."
         data-ar="كل طرف في معادلة التوظيف له تجربة مخصصة مبنية خصيصاً له.">كل طرف في معادلة التوظيف له تجربة مخصصة مبنية خصيصاً له.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 reveal">
    <div class="aud-card">
      <div class="feat-icon mb-5">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2zM22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
      </div>
      <div class="font-bold text-sm mb-1" style="color:var(--tl)" data-en="Job Seekers" data-ar="الباحثون عن عمل">الباحثون عن عمل</div>
      <h3 class="font-display font-bold text-lg mb-3" style="color:var(--w)" data-en="Students · Graduates · Career Switchers" data-ar="طلاب · خريجون · محوّلو المهنة">طلاب · خريجون · محوّلو المهنة</h3>
      <p class="text-sm leading-relaxed mb-5 flex-1" style="color:var(--w60)" data-en="Learn the skills the market demands. Build your verified profile. Land a job you love in 42 days." data-ar="تعلّم المهارات التي يطلبها السوق. ابنِ ملفك الموثق. احصل على وظيفة تحبها في 42 يوماً.">تعلّم المهارات التي يطلبها السوق. ابنِ ملفك الموثق. احصل على وظيفة تحبها في 42 يوماً.</p>
      <ul class="flex flex-col gap-2.5 mb-6"><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Accredited Diplomas" data-ar="دبلومات معتمدة">دبلومات معتمدة</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Skills-Verified Profile" data-ar="ملف موثق بالمهارات">ملف موثق بالمهارات</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Priority Hiring" data-ar="أولوية في التوظيف">أولوية في التوظيف</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Supportive Community" data-ar="مجتمع داعم">مجتمع داعم</span></li></ul>
      <a href="#" class="btn-p text-sm font-bold py-2.5 px-4 w-full text-center inline-block"
         data-en="Start Learning Free ←" data-ar="ابدأ التعلم مجاناً ←">ابدأ التعلم مجاناً ←</a>
    </div>
    <div class="aud-card">
      <div class="feat-icon mb-5">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>
      </div>
      <div class="font-bold text-sm mb-1" style="color:var(--tl)" data-en="Companies" data-ar="الشركات">الشركات</div>
      <h3 class="font-display font-bold text-lg mb-3" style="color:var(--w)" data-en="Startups · Corporates · Agencies" data-ar="ناشئات · كبرى · وكالات">ناشئات · كبرى · وكالات</h3>
      <p class="text-sm leading-relaxed mb-5 flex-1" style="color:var(--w60)" data-en="Direct access to trained and qualified talent. Cut onboarding costs. Hire in 2 weeks not 3 months." data-ar="وصول مباشر لمواهب مؤهلة ومدربة. وفّر تكاليف الonboarding. وظّف في أسبوعين لا 3 أشهر.">وصول مباشر لمواهب مؤهلة ومدربة. وفّر تكاليف الonboarding. وظّف في أسبوعين لا 3 أشهر.</p>
      <ul class="flex flex-col gap-2.5 mb-6"><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Verified Talent Pool" data-ar="قاعدة مواهب موثقة">قاعدة مواهب موثقة</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Smart Matching" data-ar="تطابق ذكي">تطابق ذكي</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Corporate Training" data-ar="تدريب مؤسسي">تدريب مؤسسي</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Dashboard & Analytics" data-ar="لوحة تحكم وتحليلات">لوحة تحكم وتحليلات</span></li></ul>
      <a href="#" class="btn-p text-sm font-bold py-2.5 px-4 w-full text-center inline-block"
         data-en="For Companies ←" data-ar="للشركات ←">للشركات ←</a>
    </div>
    <div class="aud-card">
      <div class="feat-icon mb-5">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
      </div>
      <div class="font-bold text-sm mb-1" style="color:var(--tl)" data-en="Experts & Trainers" data-ar="الخبراء والمدربون">الخبراء والمدربون</div>
      <h3 class="font-display font-bold text-lg mb-3" style="color:var(--w)" data-en="Coaches · Consultants · Professionals" data-ar="مدربون · مستشارون · محترفون">مدربون · مستشارون · محترفون</h3>
      <p class="text-sm leading-relaxed mb-5 flex-1" style="color:var(--w60)" data-en="Turn your expertise into sustainable income. Set your services and pricing. Build your community. The platform handles the rest." data-ar="حوّل خبرتك لدخل مستدام. حدد خدماتك وأسعارك. ابنِ مجتمعك. المنصة تتولى الباقي.">حوّل خبرتك لدخل مستدام. حدد خدماتك وأسعارك. ابنِ مجتمعك. المنصة تتولى الباقي.</p>
      <ul class="flex flex-col gap-2.5 mb-6"><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="1:1 Sessions" data-ar="جلسات 1:1">جلسات 1:1</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Private Communities" data-ar="مجتمعات خاصة">مجتمعات خاصة</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="Paid Content" data-ar="محتوى مدفوع">محتوى مدفوع</span></li><li class="flex items-center gap-2 text-sm" style="color:var(--w60)"><div class="w-4 h-4 rounded shrink-0 flex items-center justify-center" style="background:var(--ta12);border:1px solid var(--ta20)"><svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="var(--t)" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg></div><span data-en="70% Mentor Revenue Share" data-ar="70% عائد للمنتور">70% عائد للمنتور</span></li></ul>
      <a href="#" class="btn-p text-sm font-bold py-2.5 px-4 w-full text-center inline-block"
         data-en="Join as Expert ←" data-ar="انضم كخبير ←">انضم كخبير ←</a>
    </div>
    </div>
  </div>
</section>

<!-- ══════════ FEATURED TRACKS ══════════ -->
<section class="py-24" style="background:var(--bg);border-top:1px solid var(--ta12)">
  <div class="max-w-[1180px] mx-auto px-6">
    <div class="flex items-end justify-between mb-10 reveal">
      <div>
        <div class="sec-label" data-en="Featured Tracks" data-ar="دبلومات مميزة">دبلومات مميزة</div>
        <h2 class="font-display font-extrabold" style="font-size:clamp(1.6rem,3vw,2.2rem);color:var(--w)"
            data-en="Start with the most popular" data-ar="ابدأ بالأكثر طلباً">ابدأ بالأكثر طلباً</h2>
      </div>
      <a href="hc-diplomas.html" class="hidden sm:inline-flex items-center gap-1.5 text-sm font-semibold" style="color:var(--tl)"
         data-en="View all →" data-ar="عرض الكل ←">عرض الكل ←</a>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4 reveal">
    <div class="track-card">
      <div class="track-thumb" style="background:linear-gradient(135deg,#031c18,#052e28)">
        <div class="track-thumb-grid"></div>
        <div class="absolute top-3 start-3 text-[.6rem] font-bold px-2 py-0.5 rounded-full" style="background:rgba(0,212,184,.15);border:1px solid rgba(0,212,184,.3);color:var(--tl)">Business</div>
        <div class="w-12 h-12 rounded-xl flex items-center justify-center relative z-10" style="background:rgba(0,0,0,.25);border:1px solid rgba(255,255,255,.15)">
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#2de0ca" stroke-width="1.8" stroke-linecap="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
        </div>
      </div>
      <div class="p-4">
        <h3 class="font-display font-bold text-sm mb-1" style="color:var(--w)" data-en="Professional B2B Sales" data-ar="مبيعات B2B الاحترافية">مبيعات B2B الاحترافية</h3>
        <div class="text-xs mb-2" style="color:var(--w40)" data-en="12 courses · 48 hours" data-ar="12 كورس · 48 ساعة">12 كورس · 48 ساعة</div>
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-1 text-xs">
            <span style="color:#fbbf24">★</span>
            <span style="color:var(--w)">4.9</span>
            <span style="color:var(--w40)">(342)</span>
          </div>
          <span class="text-[.62rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="90% placed" data-ar="90% توظيف">90% توظيف</span>
        </div>
      </div>
    </div>
    <div class="track-card">
      <div class="track-thumb" style="background:linear-gradient(135deg,#0c0a20,#1a1244)">
        <div class="track-thumb-grid"></div>
        <div class="absolute top-3 start-3 text-[.6rem] font-bold px-2 py-0.5 rounded-full" style="background:rgba(0,212,184,.15);border:1px solid rgba(0,212,184,.3);color:var(--tl)">Languages</div>
        <div class="w-12 h-12 rounded-xl flex items-center justify-center relative z-10" style="background:rgba(0,0,0,.25);border:1px solid rgba(255,255,255,.15)">
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#a78bfa" stroke-width="1.8" stroke-linecap="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
        </div>
      </div>
      <div class="p-4">
        <h3 class="font-display font-bold text-sm mb-1" style="color:var(--w)" data-en="Advanced Conversational English" data-ar="إنجليزي المحادثة المتقدم">إنجليزي المحادثة المتقدم</h3>
        <div class="text-xs mb-2" style="color:var(--w40)" data-en="8 courses · 32 hours" data-ar="8 كورس · 32 ساعة">8 كورس · 32 ساعة</div>
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-1 text-xs">
            <span style="color:#fbbf24">★</span>
            <span style="color:var(--w)">4.8</span>
            <span style="color:var(--w40)">(289)</span>
          </div>
          <span class="text-[.62rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="88% placed" data-ar="88% توظيف">88% توظيف</span>
        </div>
      </div>
    </div>
    <div class="track-card">
      <div class="track-thumb" style="background:linear-gradient(135deg,#1a1000,#2a1a00)">
        <div class="track-thumb-grid"></div>
        <div class="absolute top-3 start-3 text-[.6rem] font-bold px-2 py-0.5 rounded-full" style="background:rgba(0,212,184,.15);border:1px solid rgba(0,212,184,.3);color:var(--tl)">Real Estate</div>
        <div class="w-12 h-12 rounded-xl flex items-center justify-center relative z-10" style="background:rgba(0,0,0,.25);border:1px solid rgba(255,255,255,.15)">
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#fbbf24" stroke-width="1.8" stroke-linecap="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
        </div>
      </div>
      <div class="p-4">
        <h3 class="font-display font-bold text-sm mb-1" style="color:var(--w)" data-en="Professional Real Estate Marketing" data-ar="تسويق عقاري احترافي">تسويق عقاري احترافي</h3>
        <div class="text-xs mb-2" style="color:var(--w40)" data-en="10 courses · 40 hours" data-ar="10 كورس · 40 ساعة">10 كورس · 40 ساعة</div>
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-1 text-xs">
            <span style="color:#fbbf24">★</span>
            <span style="color:var(--w)">4.9</span>
            <span style="color:var(--w40)">(198)</span>
          </div>
          <span class="text-[.62rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="95% placed" data-ar="95% توظيف">95% توظيف</span>
        </div>
      </div>
    </div>
    <div class="track-card">
      <div class="track-thumb" style="background:linear-gradient(135deg,#031818,#062a22)">
        <div class="track-thumb-grid"></div>
        <div class="absolute top-3 start-3 text-[.6rem] font-bold px-2 py-0.5 rounded-full" style="background:rgba(0,212,184,.15);border:1px solid rgba(0,212,184,.3);color:var(--tl)">Teacher Prep</div>
        <div class="w-12 h-12 rounded-xl flex items-center justify-center relative z-10" style="background:rgba(0,0,0,.25);border:1px solid rgba(255,255,255,.15)">
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#34d399" stroke-width="1.8" stroke-linecap="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
        </div>
      </div>
      <div class="p-4">
        <h3 class="font-display font-bold text-sm mb-1" style="color:var(--w)" data-en="Teaching with Technology" data-ar="التعليم بالتكنولوجيا">التعليم بالتكنولوجيا</h3>
        <div class="text-xs mb-2" style="color:var(--w40)" data-en="9 courses · 36 hours" data-ar="9 كورس · 36 ساعة">9 كورس · 36 ساعة</div>
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-1 text-xs">
            <span style="color:#fbbf24">★</span>
            <span style="color:var(--w)">4.7</span>
            <span style="color:var(--w40)">(156)</span>
          </div>
          <span class="text-[.62rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="85% placed" data-ar="85% توظيف">85% توظيف</span>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>

<!-- ══════════ LATEST JOBS ══════════ -->
<section class="py-24" style="background:var(--bg2);border-top:1px solid var(--ta12)">
  <div class="max-w-[1180px] mx-auto px-6">
    <div class="flex items-end justify-between mb-10 reveal">
      <div>
        <div class="sec-label" data-en="Live Opportunities" data-ar="فرص مفتوحة الآن">فرص مفتوحة الآن</div>
        <h2 class="font-display font-extrabold" style="font-size:clamp(1.6rem,3vw,2.2rem);color:var(--w)"
            data-en="Companies actively hiring" data-ar="شركات تبحث الآن">شركات تبحث الآن</h2>
      </div>
      <a href="hc-jobs.html" class="hidden sm:inline-flex items-center gap-1.5 text-sm font-semibold" style="color:var(--tl)"
         data-en="View all jobs →" data-ar="عرض كل الوظائف ←">عرض كل الوظائف ←</a>
    </div>
    <div class="flex flex-col gap-3 reveal">
    <div class="job-card">
      <div class="w-10 h-10 rounded-xl shrink-0 flex items-center justify-center font-display font-bold text-xs" style="background:linear-gradient(135deg,#2de0ca,#009e85);color:rgba(0,0,0,.65)">SE</div>
      <div class="flex-1 min-w-0">
        <div class="font-bold text-sm" style="color:var(--w)" data-en="Sales Manager" data-ar="مدير مبيعات">مدير مبيعات</div>
        <div class="text-xs" style="color:var(--w60)">Savills Egypt · <span data-en="Cairo · Full-time" data-ar="القاهرة · دوام كامل">القاهرة · دوام كامل</span></div>
      </div>
      <div class="text-end shrink-0">
        <div class="font-bold text-sm grad">15,000 – 22,000 EGP</div>
        <div class="text-[.58rem] px-2 py-0.5 rounded-full mt-0.5" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="B2B Sales" data-ar="مبيعات B2B">مبيعات B2B</div>
      </div>
      <svg class="w-4 h-4 shrink-0 opacity-25" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
    </div>
    <div class="job-card">
      <div class="w-10 h-10 rounded-xl shrink-0 flex items-center justify-center font-display font-bold text-xs" style="background:linear-gradient(135deg,#a78bfa,#7c3aed);color:rgba(0,0,0,.65)">TE</div>
      <div class="flex-1 min-w-0">
        <div class="font-bold text-sm" style="color:var(--w)" data-en="Digital Marketing Specialist" data-ar="أخصائي تسويق رقمي">أخصائي تسويق رقمي</div>
        <div class="text-xs" style="color:var(--w60)">Telecom Egypt · <span data-en="Cairo · Hybrid" data-ar="القاهرة · هجين">القاهرة · هجين</span></div>
      </div>
      <div class="text-end shrink-0">
        <div class="font-bold text-sm grad">10,000 – 15,000 EGP</div>
        <div class="text-[.58rem] px-2 py-0.5 rounded-full mt-0.5" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Marketing" data-ar="تسويق">تسويق</div>
      </div>
      <svg class="w-4 h-4 shrink-0 opacity-25" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
    </div>
    <div class="job-card">
      <div class="w-10 h-10 rounded-xl shrink-0 flex items-center justify-center font-display font-bold text-xs" style="background:linear-gradient(135deg,#fbbf24,#d97706);color:rgba(0,0,0,.65)">CB</div>
      <div class="flex-1 min-w-0">
        <div class="font-bold text-sm" style="color:var(--w)" data-en="Senior Real Estate Agent" data-ar="وكيل عقاري أول">وكيل عقاري أول</div>
        <div class="text-xs" style="color:var(--w60)">CBRE Egypt · <span data-en="Cairo + Commission" data-ar="القاهرة + عمولة">القاهرة + عمولة</span></div>
      </div>
      <div class="text-end shrink-0">
        <div class="font-bold text-sm grad">8,000 EGP + عمولة</div>
        <div class="text-[.58rem] px-2 py-0.5 rounded-full mt-0.5" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Real Estate" data-ar="عقارات">عقارات</div>
      </div>
      <svg class="w-4 h-4 shrink-0 opacity-25" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
    </div>
    <div class="job-card">
      <div class="w-10 h-10 rounded-xl shrink-0 flex items-center justify-center font-display font-bold text-xs" style="background:linear-gradient(135deg,#34d399,#0d9488);color:rgba(0,0,0,.65)">BC</div>
      <div class="flex-1 min-w-0">
        <div class="font-bold text-sm" style="color:var(--w)" data-en="English Language Teacher" data-ar="معلم لغة إنجليزية">معلم لغة إنجليزية</div>
        <div class="text-xs" style="color:var(--w60)">British Council · <span data-en="Alexandria · Full-time" data-ar="الإسكندرية · دوام كامل">الإسكندرية · دوام كامل</span></div>
      </div>
      <div class="text-end shrink-0">
        <div class="font-bold text-sm grad">12,000 – 18,000 EGP</div>
        <div class="text-[.58rem] px-2 py-0.5 rounded-full mt-0.5" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)" data-en="Education" data-ar="تعليم">تعليم</div>
      </div>
      <svg class="w-4 h-4 shrink-0 opacity-25" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
    </div>
    </div>
    <div class="mt-5 text-center reveal">
      <a href="hc-jobs.html" class="btn-g inline-flex items-center gap-2 px-6 py-2.5 text-sm font-semibold"
         data-en="Browse all 500+ opportunities →" data-ar="تصفح كل +500 فرصة ←">تصفح كل +500 فرصة ←</a>
    </div>
  </div>
</section>

<!-- ══════════ CTA ══════════ -->
<section class="py-24" style="background:var(--bg);border-top:1px solid var(--ta12)">
  <div class="max-w-[900px] mx-auto px-6">
    <div class="cta-band reveal">
      <div class="sec-label justify-center mb-4" data-en="Join the Mission" data-ar="انضم للمهمة">انضم للمهمة</div>
      <h2 class="font-display font-extrabold mb-4" style="font-size:clamp(1.8rem,4vw,3rem);color:var(--w)"
          data-en="Your career. Built here." data-ar="مسيرتك المهنية. تبدأ هنا.">مسيرتك المهنية. تبدأ هنا.</h2>
      <p class="text-base mb-8 max-w-xl mx-auto" style="color:var(--w60)"
         data-en="Join thousands of learners in Egypt and the Arab world who are building the skills that actually get them hired."
         data-ar="انضم لآلاف المتدربين في مصر والعالم العربي يبنون المهارات التي تُوظّفهم فعلاً.">انضم لآلاف المتدربين في مصر والعالم العربي يبنون المهارات التي تُوظّفهم فعلاً.</p>
      <div class="flex flex-wrap items-center justify-center gap-3">
        <a href="#" class="btn-p inline-flex items-center gap-2 px-8 py-3 text-base font-bold">
          <span data-en="Create Free Account" data-ar="أنشئ حساباً مجاناً">أنشئ حساباً مجاناً</span>
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="hc-companies.html" class="btn-g inline-flex items-center gap-2 px-8 py-3 text-base font-semibold"
           data-en="For Companies →" data-ar="للشركات →">للشركات →</a>
      </div>
      <div class="flex flex-wrap items-center justify-center gap-6 mt-6 text-xs" style="color:var(--w40)">
        <span data-en="✓ No credit card required" data-ar="✓ لا تحتاج بطاقة ائتمان">✓ لا تحتاج بطاقة ائتمان</span>
        <span data-en="✓ Free to get started" data-ar="✓ مجاني للبدء">✓ مجاني للبدء</span>
        <span data-en="✓ Egypt · UAE · Saudi Arabia" data-ar="✓ مصر · الإمارات · السعودية">✓ مصر · الإمارات · السعودية</span>
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
// ── Scroll progress bar ──
window.addEventListener('scroll', function() {
  var sp = document.getElementById('spbar'); if (!sp) return;
  var h = document.documentElement.scrollHeight - window.innerHeight;
  sp.style.width = (h > 0 ? (window.scrollY / h * 100) : 0) + '%';
}, {passive:true});

// ── Nav scroll effect ──
window.addEventListener('scroll', function() {
  var n = document.getElementById('hc-nav'); if (!n) return;
  var light = document.documentElement.classList.contains('light');
  if (window.scrollY > 40) {
    n.style.background = light ? '#fff' : 'rgba(3,13,23,.98)';
    n.style.borderColor = light ? '#e5e7eb' : 'rgba(255,255,255,.12)';
  } else {
    n.style.background = light ? '#fff' : 'rgba(3,13,23,.96)';
    n.style.borderColor = light ? '#e5e7eb' : 'rgba(255,255,255,.08)';
  }
}, {passive:true});

// ── Reveal on scroll ──
var rObs = new IntersectionObserver(function(entries) {
  entries.forEach(function(e) {
    if (e.isIntersecting) { e.target.classList.add('visible'); rObs.unobserve(e.target); }
  });
}, {threshold: 0.08, rootMargin: '0px 0px -40px 0px'});
document.querySelectorAll('.reveal').forEach(function(el, i) {
  el.style.transitionDelay = (i % 4 * 0.07) + 's';
  rObs.observe(el);
});

// ── Progress bar animate on scroll ──
var bObs = new IntersectionObserver(function(entries) {
  entries.forEach(function(e) {
    if (!e.isIntersecting) return;
    var fill = e.target.querySelector('.pbar-fill');
    if (fill) { setTimeout(function() { fill.style.width = e.target.dataset.w || '70%'; }, 200); }
    bObs.unobserve(e.target);
  });
}, {threshold: 0.4});
document.querySelectorAll('.obs-bar').forEach(function(el) { bObs.observe(el); });

// ── Sector switcher ──
function switchSector(i, el) {
  document.querySelectorAll('.sec-card').forEach(function(c) { c.classList.remove('on'); });
  document.querySelectorAll('.sec-panel').forEach(function(p) { p.classList.remove('on'); });
  el.classList.add('on');
  var panel = document.getElementById('sp-' + i);
  if (panel) { panel.classList.add('on'); }
}

// ── Float animation (keyframes) ──
var styleEl = document.createElement('style');
styleEl.textContent = '@keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}} @keyframes shimmer{0%{background-position:-200% 0}100%{background-position:200% 0}}';
document.head.appendChild(styleEl);

// ── Smooth scroll for anchor links ──
document.querySelectorAll('a[href^="#"]').forEach(function(a) {
  a.addEventListener('click', function(e) {
    var id = a.getAttribute('href'); if (id === '#') return;
    var el = document.querySelector(id); if (!el) return;
    e.preventDefault();
    el.scrollIntoView({behavior: 'smooth'});
  });
});
</script>
</body>
</html>