<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>اعتماداتنا — هلا كارير — HalaCareer</title>
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


:root{--bg:#030d17;--bg2:#04111e;--bg3:#071825;
  --t:#00d4b8;--tl:#2de0ca;--td:#009e85;
  --ta30:rgba(0,212,184,.30);--ta20:rgba(0,212,184,.20);--ta15:rgba(0,212,184,.15);
  --ta12:rgba(0,212,184,.12);--ta08:rgba(0,212,184,.08);
  --w:#fff;--w80:rgba(255,255,255,.80);--w60:rgba(255,255,255,.60);
  --w40:rgba(255,255,255,.40);--w10:rgba(255,255,255,.10);--w06:rgba(255,255,255,.06)}
html.light{--bg:#fff;--bg2:#fff;--bg3:#fff;
  --t:#009e85;--tl:#00c4a8;--td:#007a68;
  --ta20:rgba(0,212,184,.18);--ta12:rgba(0,212,184,.12);--ta08:rgba(0,212,184,.07);
  --w:#0a2220;--w80:rgba(10,34,32,.80);--w60:rgba(10,34,32,.58);--w40:rgba(10,34,32,.38);
  --w10:rgba(10,34,32,.09);--w06:rgba(10,34,32,.06)}
html.light body{background:#fff !important;color:#111827 !important}
html.light body::after{display:none !important}
html.light *{box-shadow:none !important}
html.light [style*="background:rgba(5,14,26"]{background:#fff !important}
html.light [style*="background:rgba(4,11,22"]{background:#fff !important}
html.light [style*="background:rgba(3,13,23"]{background:#fff !important}
html.light [style*="background:rgba(2,8,18"]{background:#fff !important}
html.light [style*="color:var(--w)"]  {color:#111827 !important}
html.light [style*="color:var(--w80)"]{color:#1f2937 !important}
html.light [style*="color:var(--w60)"]{color:#4b5563 !important}
html.light [style*="color:var(--w40)"]{color:#9ca3af !important}
html.light .grad{-webkit-text-fill-color:transparent !important}
html.light #hc-nav{background:#fff !important;border-color:#e5e7eb !important}
html.light #hc-mob{background:#fff !important;border-color:#e5e7eb !important}

*,*::before,*::after{box-sizing:border-box}
body{font-family:'Plus Jakarta Sans',sans-serif;background:var(--bg);color:var(--w);
  overflow-x:hidden;-webkit-font-smoothing:antialiased}
html[dir=rtl] body,html[dir=rtl] button,html[dir=rtl] a{font-family:'Cairo',sans-serif}
html[dir=rtl] h1,html[dir=rtl] h2,html[dir=rtl] h3{font-family:'Cairo',sans-serif;letter-spacing:0}
h1,h2,h3{font-family:'Bricolage Grotesque',sans-serif;line-height:1.1}
a{text-decoration:none;color:inherit}
body::after{content:'';position:fixed;inset:0;pointer-events:none;z-index:0;opacity:.04;
  background:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.75' numOctaves='4'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E")}
::-webkit-scrollbar{width:5px}
::-webkit-scrollbar-track{background:var(--bg)}
::-webkit-scrollbar-thumb{background:var(--ta20);border-radius:3px}

.grad{background:linear-gradient(135deg,#2de0ca,#009e85);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.sec-label{font-size:.65rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;
  color:var(--tl);display:flex;align-items:center;gap:.6rem;margin-bottom:.75rem}
.sec-label::before{content:'';width:20px;height:1.5px;
  background:linear-gradient(to right,var(--t),transparent);flex-shrink:0}

/* ── Cards ── */
.feat-card{border-radius:1rem;border:1px solid var(--ta12);background:rgba(5,14,26,.75);
  padding:1.5rem;transition:border-color .2s,transform .2s}
.feat-card:hover{border-color:rgba(0,212,184,.28);transform:translateY(-2px)}
html.light .feat-card{background:#fff !important;border-color:rgba(0,212,184,.2) !important}
.feat-icon{width:44px;height:44px;border-radius:.85rem;flex-shrink:0;
  display:flex;align-items:center;justify-content:center;
  background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)}
.feat-icon svg{width:20px;height:20px}

/* ── Accreditation badge card ── */
.accr-card{border-radius:1.1rem;border:1px solid var(--ta12);background:rgba(5,14,26,.75);
  padding:1.75rem 1.5rem;display:flex;flex-direction:column;align-items:center;
  text-align:center;gap:.85rem;transition:border-color .25s,transform .25s;position:relative;overflow:hidden}
.accr-card::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;
  background:linear-gradient(90deg,transparent,var(--t),transparent);opacity:0;transition:opacity .3s}
.accr-card:hover{border-color:rgba(0,212,184,.38);transform:translateY(-4px)}
.accr-card:hover::before{opacity:1}
html.light .accr-card{background:#fff !important;border-color:rgba(0,212,184,.18) !important}
.accr-logo{width:72px;height:72px;border-radius:1rem;display:flex;align-items:center;
  justify-content:center;font-family:'Bricolage Grotesque',sans-serif;font-weight:800;
  font-size:1rem;letter-spacing:.04em;border:1px solid;flex-shrink:0}
.accr-badge{font-size:.58rem;font-weight:700;padding:.25rem .75rem;border-radius:999px;
  letter-spacing:.06em;text-transform:uppercase}
.badge-live{background:rgba(0,212,184,.12);border:1px solid rgba(0,212,184,.28);color:var(--tl)}
.badge-pending{background:rgba(251,191,36,.1);border:1px solid rgba(251,191,36,.25);color:#fbbf24}

/* ── Company trust strip ── */
.trust-chip{display:inline-flex;align-items:center;gap:.6rem;padding:.6rem 1.1rem;
  border-radius:.75rem;border:1px solid var(--ta12);background:rgba(5,14,26,.6);
  font-size:.8rem;font-weight:600;color:var(--w60);transition:border-color .2s,color .2s}
.trust-chip:hover{border-color:var(--ta25,rgba(0,212,184,.22));color:var(--w)}
html.light .trust-chip{background:#fff !important;border-color:rgba(0,212,184,.18) !important;color:#4b5563 !important}

/* ── Verify box ── */
.verify-box{border-radius:1.25rem;border:2px solid var(--ta20);
  background:linear-gradient(135deg,rgba(0,212,184,.06),rgba(5,14,26,.9));
  padding:2.5rem;position:relative;overflow:hidden}
.verify-box::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;
  background:linear-gradient(90deg,transparent,#2de0ca,transparent)}
html.light .verify-box{background:#fff !important;border-color:rgba(0,212,184,.25) !important}
.verify-input{width:100%;background:rgba(5,14,26,.8);border:1.5px solid var(--ta15);
  border-radius:.75rem;padding:.85rem 1.1rem;font-family:inherit;font-size:.95rem;
  color:var(--w);outline:none;transition:border-color .18s;letter-spacing:.08em}
.verify-input:focus{border-color:var(--t)}
.verify-input::placeholder{color:var(--w40);letter-spacing:0}
html.light .verify-input{background:#fff;border-color:rgba(0,212,184,.25);color:#111827}
html.light .verify-input::placeholder{color:#9ca3af}

/* ── Timeline (process) ── */
.proc-item{display:flex;gap:1.25rem;padding:1.25rem 0;
  border-bottom:1px solid var(--ta08);align-items:flex-start}
.proc-item:last-child{border-bottom:none}
.proc-num{width:36px;height:36px;border-radius:50%;background:var(--ta12);
  border:1px solid var(--ta20);display:flex;align-items:center;justify-content:center;
  font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.85rem;
  color:var(--tl);flex-shrink:0}

/* ── Hero mesh ── */
.hero-mesh{background:radial-gradient(ellipse 80% 55% at 50% -5%,rgba(0,212,184,.12),transparent 60%),
  radial-gradient(ellipse 50% 40% at 85% 65%,rgba(0,158,133,.07),transparent 55%)}

/* ── Reveal ── */
.reveal{opacity:0;transform:translateY(22px);
  transition:opacity .65s cubic-bezier(.22,1,.36,1),transform .65s cubic-bezier(.22,1,.36,1)}
.reveal.visible{opacity:1;transform:translateY(0)}

/* ── Stats ── */
.stat-b{text-align:center;padding:1.75rem 1rem;position:relative}
.stat-b::after{content:'';position:absolute;right:0;top:20%;bottom:20%;
  width:1px;background:var(--ta15)}
.stat-b:last-child::after{display:none}
.stat-n{font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:2.4rem;
  line-height:1;background:linear-gradient(135deg,#2de0ca,#009e85);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
@media(max-width:640px){.stat-b::after{display:none}
  .stat-b{border-bottom:1px solid var(--ta12)}.stat-b:last-child{border-bottom:none}}

/* ── Scroll progress ── */
#spbar{position:fixed;top:0;left:0;height:2px;width:0%;z-index:9999;
  background:linear-gradient(90deg,#2de0ca,#009e85);transition:width .1s linear}

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
<section class="relative pt-28 pb-16 overflow-hidden" style="background:var(--bg2)">
  <div class="hero-mesh absolute inset-0 pointer-events-none"></div>
  <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(0,212,184,.06) 1px,transparent 1px);background-size:32px 32px;opacity:.6"></div>
  <div class="relative z-10 max-w-[1100px] mx-auto px-6 text-center">
    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-bold mb-6" style="background:rgba(0,212,184,.1);border:1px solid rgba(0,212,184,.25);color:var(--tl)">
      <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
      <span data-en="Internationally Accredited · Locally Recognized" data-ar="معتمد دولياً · معترف به محلياً">معتمد دولياً · معترف به محلياً</span>
    </div>
    <h1 class="font-display font-extrabold leading-tight mb-5 reveal" style="font-size:clamp(2.2rem,5vw,3.8rem);color:var(--w)">
      <span data-en="Our certificates are" data-ar="شهاداتنا">شهاداتنا</span><br>
      <span class="grad" data-en="trusted worldwide." data-ar="موثوقة عالمياً.">موثوقة عالمياً.</span>
    </h1>
    <p class="text-lg leading-relaxed max-w-2xl mx-auto mb-8 reveal" style="color:var(--w60);transition-delay:.08s"
       data-en="Every HalaCareer diploma is accredited by recognized international bodies, digitally verified, and directly connected to a real employment opportunity."
       data-ar="كل دبلومة من هلا كارير معتمدة من جهات دولية معترف بها، موثقة رقمياً، ومرتبطة مباشرة بفرصة توظيف حقيقية.">كل دبلومة من هلا كارير معتمدة من جهات دولية معترف بها، موثقة رقمياً، ومرتبطة مباشرة بفرصة توظيف حقيقية.</p>
    <div class="flex flex-wrap items-center justify-center gap-3 reveal" style="transition-delay:.14s">
      <a href="hc-diplomas.html" class="btn-p px-7 py-2.5 text-sm font-bold inline-flex items-center gap-2">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
        <span data-en="Browse Diplomas" data-ar="تصفح الدبلومات">تصفح الدبلومات</span>
      </a>
      <a href="#verify" class="btn-g px-7 py-2.5 text-sm font-semibold inline-flex items-center gap-2">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        <span data-en="Verify a Certificate" data-ar="تحقق من شهادة">تحقق من شهادة</span>
      </a>
    </div>
  </div>
</section>

<!-- ══ STATS ══ -->
<div style="border-top:1px solid var(--ta12);border-bottom:1px solid var(--ta12)">
  <div class="max-w-[1100px] mx-auto px-6">
    <div class="grid grid-cols-2 sm:grid-cols-4 reveal">
  <div class="stat-b">
    <div class="stat-n">6</div>
    <div class="text-sm font-bold mt-1" style="color:var(--w)" data-en="International Accrediting Bodies" data-ar="جهات اعتماد دولية">جهات اعتماد دولية</div>
  </div>
  <div class="stat-b">
    <div class="stat-n">50+</div>
    <div class="text-sm font-bold mt-1" style="color:var(--w)" data-en="Countries Recognizing Our Certificates" data-ar="دولة تعترف بشهاداتنا">دولة تعترف بشهاداتنا</div>
  </div>
  <div class="stat-b">
    <div class="stat-n">500+</div>
    <div class="text-sm font-bold mt-1" style="color:var(--w)" data-en="Companies Accepting Our Certificates" data-ar="شركة تقبل الشهادات">شركة تقبل الشهادات</div>
  </div>
  <div class="stat-b">
    <div class="stat-n">100%</div>
    <div class="text-sm font-bold mt-1" style="color:var(--w)" data-en="Digital & Verifiable" data-ar="رقمي وقابل للتحقق">رقمي وقابل للتحقق</div>
  </div>
    </div>
  </div>
</div>

<!-- ══ MAIN ACCREDITATIONS ══ -->
<section class="py-24" style="background:var(--bg)">
  <div class="max-w-[1100px] mx-auto px-6">
    <div class="text-center mb-14 reveal">
      <div class="sec-label justify-center" data-en="Active Accreditations" data-ar="اعتمادات نشطة">اعتمادات نشطة</div>
      <h2 class="font-display font-extrabold text-3xl mb-3" style="color:var(--w)"
          data-en="Trusted by the world's leading bodies"
          data-ar="معترف بنا من أبرز الجهات العالمية">معترف بنا من أبرز الجهات العالمية</h2>
      <p class="text-base max-w-xl mx-auto" style="color:var(--w60)"
         data-en="Each accreditation is sector-specific. We don't use one generic stamp — every diploma type is evaluated and certified by the most relevant authority in its field."
         data-ar="كل اعتماد مخصص لقطاع معين. لا نستخدم ختم واحد عام — كل نوع دبلومة يُقيَّم ويُعتمد من الجهة الأكثر صلة في مجاله.">كل اعتماد مخصص لقطاع معين. لا نستخدم ختم واحد عام — كل نوع دبلومة يُقيَّم ويُعتمد من الجهة الأكثر صلة في مجاله.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 reveal">
  <div class="accr-card">
    <div class="accr-logo" style="background:rgba(0,212,184,.15);border-color:rgba(0,212,184,.3);color:#2de0ca">CPD</div>
    <div>
      <div class="font-display font-bold text-sm mb-0.5" style="color:var(--w)" data-en="CPD Certification Service" data-ar="هيئة التطوير المهني المستمر">هيئة التطوير المهني المستمر</div>
      <div class="text-[.6rem]" style="color:var(--w40)" data-en="United Kingdom · Since 2024" data-ar="المملكة المتحدة · منذ 2024">المملكة المتحدة · منذ 2024</div>
    </div>
    <span class="accr-badge badge-live" data-en="Accredited" data-ar="معتمد الآن">معتمد الآن</span>
    <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Our certificates are accredited by the UK's most respected CPD body. Recognized in 50+ countries by employers and major institutions." data-ar="شهاداتنا معتمدة من أعرق هيئة تطوير مهني في بريطانيا. معترف بها في 50+ دولة لدى أصحاب العمل والمؤسسات الكبرى.">شهاداتنا معتمدة من أعرق هيئة تطوير مهني في بريطانيا. معترف بها في 50+ دولة لدى أصحاب العمل والمؤسسات الكبرى.</p>
    <div class="w-full pt-3 mt-1" style="border-top:1px solid var(--ta12)">
      <div class="text-[.6rem] font-bold uppercase tracking-wider mb-1" style="color:var(--w40)" data-en="Covers" data-ar="يغطي">يغطي</div>
      <div class="text-xs font-semibold" style="color:var(--tl)" data-en="All Diplomas & Tracks" data-ar="جميع الدبلومات والمسارات">جميع الدبلومات والمسارات</div>
    </div>
  </div>
  <div class="accr-card">
    <div class="accr-logo" style="background:rgba(96,165,250,.12);border-color:rgba(96,165,250,.28);color:#93c5fd">HRCI</div>
    <div>
      <div class="font-display font-bold text-sm mb-0.5" style="color:var(--w)" data-en="HR Certification Institute" data-ar="معهد اعتماد الموارد البشرية">معهد اعتماد الموارد البشرية</div>
      <div class="text-[.6rem]" style="color:var(--w40)" data-en="United States · Since 2024" data-ar="الولايات المتحدة · منذ 2024">الولايات المتحدة · منذ 2024</div>
    </div>
    <span class="accr-badge badge-live" data-en="Accredited" data-ar="معتمد الآن">معتمد الآن</span>
    <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="International accreditation for management and HR diplomas. Accepted by 40,000+ organizations worldwide." data-ar="اعتماد دولي للدبلومات الإدارية وموارد بشرية. مقبول لدى أكثر من 40 ألف منظمة حول العالم.">اعتماد دولي للدبلومات الإدارية وموارد بشرية. مقبول لدى أكثر من 40 ألف منظمة حول العالم.</p>
    <div class="w-full pt-3 mt-1" style="border-top:1px solid var(--ta12)">
      <div class="text-[.6rem] font-bold uppercase tracking-wider mb-1" style="color:var(--w40)" data-en="Covers" data-ar="يغطي">يغطي</div>
      <div class="text-xs font-semibold" style="color:var(--tl)" data-en="Business · HR · Management" data-ar="البيزنس · الموارد البشرية · الإدارة">البيزنس · الموارد البشرية · الإدارة</div>
    </div>
  </div>
  <div class="accr-card">
    <div class="accr-logo" style="background:rgba(167,139,250,.12);border-color:rgba(167,139,250,.28);color:#c4b5fd">ICF</div>
    <div>
      <div class="font-display font-bold text-sm mb-0.5" style="color:var(--w)" data-en="International Coaching Federation" data-ar="الاتحاد الدولي للكوتشينغ">الاتحاد الدولي للكوتشينغ</div>
      <div class="text-[.6rem]" style="color:var(--w40)" data-en="United States · Since 2024" data-ar="الولايات المتحدة · منذ 2024">الولايات المتحدة · منذ 2024</div>
    </div>
    <span class="accr-badge badge-live" data-en="Accredited" data-ar="معتمد الآن">معتمد الآن</span>
    <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="ICF accreditation for mentors and professional coaches on the platform. Elevates expert value and ensures mentorship quality." data-ar="اعتماد ICF للمنتورز والمدربين المهنيين على المنصة. يرفع قيمة الخبراء ويضمن جودة الإرشاد.">اعتماد ICF للمنتورز والمدربين المهنيين على المنصة. يرفع قيمة الخبراء ويضمن جودة الإرشاد.</p>
    <div class="w-full pt-3 mt-1" style="border-top:1px solid var(--ta12)">
      <div class="text-[.6rem] font-bold uppercase tracking-wider mb-1" style="color:var(--w40)" data-en="Covers" data-ar="يغطي">يغطي</div>
      <div class="text-xs font-semibold" style="color:var(--tl)" data-en="Mentorship Platform · Certified Mentors" data-ar="منصة الإرشاد · المنتورز المعتمدون">منصة الإرشاد · المنتورز المعتمدون</div>
    </div>
  </div>
  <div class="accr-card">
    <div class="accr-logo" style="background:rgba(251,191,36,.1);border-color:rgba(251,191,36,.25);color:#fbbf24">ISO</div>
    <div>
      <div class="font-display font-bold text-sm mb-0.5" style="color:var(--w)" data-en="ISO 9001:2015" data-ar="منظمة المعايير الدولية">منظمة المعايير الدولية</div>
      <div class="text-[.6rem]" style="color:var(--w40)" data-en="International · Since 2025" data-ar="دولي · منذ 2025">دولي · منذ 2025</div>
    </div>
    <span class="accr-badge badge-live" data-en="Accredited" data-ar="معتمد الآن">معتمد الآن</span>
    <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="ISO 9001 Quality Management ensures all our educational and operational processes meet the highest quality standards." data-ar="معيار إدارة الجودة ISO 9001 يضمن أن كل عملياتنا التعليمية والتشغيلية تلتزم بأعلى مستويات الجودة.">معيار إدارة الجودة ISO 9001 يضمن أن كل عملياتنا التعليمية والتشغيلية تلتزم بأعلى مستويات الجودة.</p>
    <div class="w-full pt-3 mt-1" style="border-top:1px solid var(--ta12)">
      <div class="text-[.6rem] font-bold uppercase tracking-wider mb-1" style="color:var(--w40)" data-en="Covers" data-ar="يغطي">يغطي</div>
      <div class="text-xs font-semibold" style="color:var(--tl)" data-en="Educational & Operational Processes" data-ar="العمليات التعليمية والتشغيلية">العمليات التعليمية والتشغيلية</div>
    </div>
  </div>
  <div class="accr-card">
    <div class="accr-logo" style="background:rgba(52,211,153,.1);border-color:rgba(52,211,153,.25);color:#34d399">PMI</div>
    <div>
      <div class="font-display font-bold text-sm mb-0.5" style="color:var(--w)" data-en="Project Management Institute" data-ar="معهد إدارة المشاريع">معهد إدارة المشاريع</div>
      <div class="text-[.6rem]" style="color:var(--w40)" data-en="United States · Since 2025" data-ar="الولايات المتحدة · منذ 2025">الولايات المتحدة · منذ 2025</div>
    </div>
    <span class="accr-badge badge-live" data-en="Accredited" data-ar="معتمد الآن">معتمد الآن</span>
    <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Project management diplomas accredited by PMI. Grants graduates internationally recognized PDU hours." data-ar="دبلومات إدارة المشاريع معتمدة من PMI. تمنح الخريجين ساعات PDU معترف بها دولياً.">دبلومات إدارة المشاريع معتمدة من PMI. تمنح الخريجين ساعات PDU معترف بها دولياً.</p>
    <div class="w-full pt-3 mt-1" style="border-top:1px solid var(--ta12)">
      <div class="text-[.6rem] font-bold uppercase tracking-wider mb-1" style="color:var(--w40)" data-en="Covers" data-ar="يغطي">يغطي</div>
      <div class="text-xs font-semibold" style="color:var(--tl)" data-en="Project Management · Business" data-ar="إدارة المشاريع · البيزنس">إدارة المشاريع · البيزنس</div>
    </div>
  </div>
  <div class="accr-card">
    <div class="accr-logo" style="background:rgba(0,212,184,.1);border-color:rgba(0,212,184,.25);color:var(--tl)">ITIDA</div>
    <div>
      <div class="font-display font-bold text-sm mb-0.5" style="color:var(--w)" data-en="ITIDA Egypt" data-ar="هيئة تنمية صناعة تقنية المعلومات">هيئة تنمية صناعة تقنية المعلومات</div>
      <div class="text-[.6rem]" style="color:var(--w40)" data-en="Egypt · Since 2025" data-ar="مصر · منذ 2025">مصر · منذ 2025</div>
    </div>
    <span class="accr-badge badge-live" data-en="Accredited" data-ar="معتمد الآن">معتمد الآن</span>
    <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Partnership with ITIDA to support digital skills development and employment in Egypt. Official government recognition." data-ar="شراكة مع ITIDA لدعم تطوير المهارات الرقمية والتوظيف في مصر. اعتراف حكومي رسمي.">شراكة مع ITIDA لدعم تطوير المهارات الرقمية والتوظيف في مصر. اعتراف حكومي رسمي.</p>
    <div class="w-full pt-3 mt-1" style="border-top:1px solid var(--ta12)">
      <div class="text-[.6rem] font-bold uppercase tracking-wider mb-1" style="color:var(--w40)" data-en="Covers" data-ar="يغطي">يغطي</div>
      <div class="text-xs font-semibold" style="color:var(--tl)" data-en="Digital Skills · Egyptian Employment" data-ar="المهارات الرقمية · التوظيف في مصر">المهارات الرقمية · التوظيف في مصر</div>
    </div>
  </div>
    </div>
  </div>
</section>

<!-- ══ PENDING ══ -->
<section class="py-16" style="background:var(--bg2);border-top:1px solid var(--ta12)">
  <div class="max-w-[1100px] mx-auto px-6">
    <div class="flex items-center gap-3 mb-8 reveal">
      <div class="sec-label mb-0" data-en="In Progress" data-ar="قيد الإضافة">قيد الإضافة</div>
      <div class="text-xs px-2.5 py-1 rounded-full" style="background:rgba(251,191,36,.1);border:1px solid rgba(251,191,36,.25);color:#fbbf24" data-en="Coming Soon" data-ar="قريباً">قريباً</div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 reveal">
  <div class="accr-card">
    <div class="accr-logo" style="background:rgba(251,191,36,.08);border-color:rgba(251,191,36,.2);color:#fbbf24">AMBA</div>
    <div>
      <div class="font-display font-bold text-sm mb-0.5" style="color:var(--w)" data-en="Association of MBAs" data-ar="رابطة MBAs والبرامج الإدارية">رابطة MBAs والبرامج الإدارية</div>
      <div class="text-[.6rem]" style="color:var(--w40)" data-en="United Kingdom" data-ar="المملكة المتحدة">المملكة المتحدة</div>
    </div>
    <span class="accr-badge badge-pending" data-en="Pending · Q3 2025" data-ar="قيد الاعتماد · Q3 2025">قيد الاعتماد · Q3 2025</span>
    <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Pending accreditation for advanced management and entrepreneurship tracks." data-ar="قيد الاعتماد لمسارات الإدارة وريادة الأعمال المتقدمة.">قيد الاعتماد لمسارات الإدارة وريادة الأعمال المتقدمة.</p>
    <div class="w-full pt-3 mt-1" style="border-top:1px solid var(--ta12)">
      <div class="text-[.6rem] font-bold uppercase tracking-wider mb-1" style="color:var(--w40)" data-en="Covers" data-ar="يغطي">يغطي</div>
      <div class="text-xs font-semibold" style="color:var(--tl)" data-en="Advanced Management · Entrepreneurship" data-ar="الإدارة المتقدمة · ريادة الأعمال">الإدارة المتقدمة · ريادة الأعمال</div>
    </div>
  </div>
  <div class="accr-card">
    <div class="accr-logo" style="background:rgba(251,191,36,.08);border-color:rgba(251,191,36,.2);color:#fbbf24">CILT</div>
    <div>
      <div class="font-display font-bold text-sm mb-0.5" style="color:var(--w)" data-en="Chartered Institute of Logistics" data-ar="معهد اللوجستيات والنقل المعتمد">معهد اللوجستيات والنقل المعتمد</div>
      <div class="text-[.6rem]" style="color:var(--w40)" data-en="United Kingdom" data-ar="المملكة المتحدة">المملكة المتحدة</div>
    </div>
    <span class="accr-badge badge-pending" data-en="Pending · Q4 2025" data-ar="قيد الاعتماد · Q4 2025">قيد الاعتماد · Q4 2025</span>
    <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Pending accreditation for business and logistics chain tracks." data-ar="قيد الاعتماد لمسارات الأعمال والسلاسل اللوجستية.">قيد الاعتماد لمسارات الأعمال والسلاسل اللوجستية.</p>
    <div class="w-full pt-3 mt-1" style="border-top:1px solid var(--ta12)">
      <div class="text-[.6rem] font-bold uppercase tracking-wider mb-1" style="color:var(--w40)" data-en="Covers" data-ar="يغطي">يغطي</div>
      <div class="text-xs font-semibold" style="color:var(--tl)" data-en="Business · Logistics" data-ar="الأعمال · اللوجستيات">الأعمال · اللوجستيات</div>
    </div>
  </div>
    </div>
  </div>
</section>

<!-- ══ WHAT MAKES US DIFFERENT ══ -->
<section class="py-24" style="background:var(--bg);border-top:1px solid var(--ta12)">
  <div class="max-w-[1100px] mx-auto px-6">
    <div class="text-center mb-14 reveal">
      <div class="sec-label justify-center" data-en="Why Our Certificates Are Different" data-ar="لماذا شهاداتنا مختلفة">لماذا شهاداتنا مختلفة</div>
      <h2 class="font-display font-extrabold text-3xl" style="color:var(--w)"
          data-en="Not just a certificate — a proven career tool"
          data-ar="ليست مجرد شهادة — أداة مهنية مثبتة">ليست مجرد شهادة — أداة مهنية مثبتة</h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 reveal">
  <div class="feat-card">
    <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 1 0 0 20A10 10 0 0 0 12 2zM9 12l2 2 4-4"/></svg></div>
    <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="QR Code & Verification" data-ar="رمز QR وكود تحقق">رمز QR وكود تحقق</h3>
    <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Every certificate has a unique QR code and verification code. Companies verify authenticity in 10 seconds." data-ar="كل شهادة لها QR code وكود تحقق فريد. الشركات تتأكد من صحة الشهادة في 10 ثوانٍ.">كل شهادة لها QR code وكود تحقق فريد. الشركات تتأكد من صحة الشهادة في 10 ثوانٍ.</p>
  </div>
  <div class="feat-card">
    <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M18 20V10M12 20V4M6 20v-4"/></svg></div>
    <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Placement Rate Per Track" data-ar="معدل التوظيف لكل مسار">معدل التوظيف لكل مسار</h3>
    <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="We show the real placement rate for every track — no empty promises. Only verified real numbers." data-ar="نعرض معدل التوظيف الفعلي لكل مسار — لا وعود فارغة. فقط أرقام حقيقية يمكن التحقق منها.">نعرض معدل التوظيف الفعلي لكل مسار — لا وعود فارغة. فقط أرقام حقيقية يمكن التحقق منها.</p>
  </div>
  <div class="feat-card">
    <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
    <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Multi-Level Accreditation" data-ar="اعتماد متعدد المستويات">اعتماد متعدد المستويات</h3>
    <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Accreditation from specialized international bodies per sector — not one generic accreditation for everything." data-ar="الاعتماد من جهات دولية متخصصة حسب كل قطاع — لا اعتماد عام واحد لكل شيء.">الاعتماد من جهات دولية متخصصة حسب كل قطاع — لا اعتماد عام واحد لكل شيء.</p>
  </div>
  <div class="feat-card">
    <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 1l4 4-4 4M3 11V9a4 4 0 0 1 4-4h14M7 23l-4-4 4-4M21 13v2a4 4 0 0 1-4 4H3"/></svg></div>
    <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Continuous Curriculum Update" data-ar="تحديث مستمر للمناهج">تحديث مستمر للمناهج</h3>
    <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Curricula updated every 6 months based on real market requirements. Your certificate is always relevant." data-ar="المناهج تُحدَّث كل 6 أشهر بناءً على متطلبات السوق الفعلية. شهادتك دائماً ذات صلة.">المناهج تُحدَّث كل 6 أشهر بناءً على متطلبات السوق الفعلية. شهادتك دائماً ذات صلة.</p>
  </div>
  <div class="feat-card">
    <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2M12 3a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/></svg></div>
    <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Verified Professional Profile" data-ar="ملف مهني موثق">ملف مهني موثق</h3>
    <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Every certificate automatically joins your professional profile that companies see — no separate CV needed." data-ar="كل شهادة تنضم تلقائياً لملفك المهني الذي تراه الشركات — لا تحتاج CV منفصل.">كل شهادة تنضم تلقائياً لملفك المهني الذي تراه الشركات — لا تحتاج CV منفصل.</p>
  </div>
  <div class="feat-card">
    <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2zM16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div>
    <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Direct Employment Partnerships" data-ar="شراكات التوظيف المباشر">شراكات التوظيف المباشر</h3>
    <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="500+ partner companies actively search for accredited graduates directly from the platform — fast employment path." data-ar="500+ شركة شريكة تبحث عن خريجين معتمدين مباشرة من المنصة — مسار توظيف سريع.">500+ شركة شريكة تبحث عن خريجين معتمدين مباشرة من المنصة — مسار توظيف سريع.</p>
  </div>
    </div>
  </div>
</section>

<!-- ══ PROCESS ══ -->
<section class="py-24" style="background:var(--bg2);border-top:1px solid var(--ta12)">
  <div class="max-w-[1100px] mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-start">
      <div class="reveal">
        <div class="sec-label" data-en="How It Works" data-ar="كيف تعمل">كيف تعمل</div>
        <h2 class="font-display font-extrabold text-3xl mb-5" style="color:var(--w)"
            data-en="From enrollment to verified employment"
            data-ar="من التسجيل إلى التوظيف الموثق">من التسجيل إلى التوظيف الموثق</h2>
        <p class="text-base leading-relaxed mb-6" style="color:var(--w60)"
           data-en="A clear, transparent process. You always know where you are and what the next step is."
           data-ar="عملية واضحة وشفافة. دائماً تعرف أين أنت وما هي الخطوة التالية.">عملية واضحة وشفافة. دائماً تعرف أين أنت وما هي الخطوة التالية.</p>
        <a href="hc-diplomas.html" class="btn-p inline-flex items-center gap-2 px-6 py-2.5 text-sm font-bold">
          <span data-en="Start Your First Diploma →" data-ar="ابدأ دبلومتك الأولى ←">ابدأ دبلومتك الأولى ←</span>
        </a>
      </div>
      <div class="reveal" style="transition-delay:.08s">
  <div class="proc-item">
    <div class="proc-num">1</div>
    <div>
      <div class="font-bold text-sm mb-1" style="color:var(--w)" data-en="Track Selection & Enrollment" data-ar="اختيار المسار والتسجيل">اختيار المسار والتسجيل</div>
      <div class="text-sm leading-relaxed" style="color:var(--w60)" data-en="You choose the diploma that suits you from your preferred sector. Every diploma clearly shows its accrediting body and verified placement rate." data-ar="تختار الدبلومة المناسبة من القطاع الذي تريده. كل دبلومة موضح فيها جهة الاعتماد ومعدل التوظيف الموثق.">تختار الدبلومة المناسبة من القطاع الذي تريده. كل دبلومة موضح فيها جهة الاعتماد ومعدل التوظيف الموثق.</div>
    </div>
  </div>
  <div class="proc-item">
    <div class="proc-num">2</div>
    <div>
      <div class="font-bold text-sm mb-1" style="color:var(--w)" data-en="Learning & Gamification" data-ar="التعلم والتلعيب">التعلم والتلعيب</div>
      <div class="text-sm leading-relaxed" style="color:var(--w60)" data-en="Learn at your own pace with a full gamification system. XP points, levels, daily challenges, and a supportive community." data-ar="تتعلم بخطوك الخاص مع نظام تلعيب كامل. نقاط XP ومستويات وتحديات يومية ومجتمع يدعمك.">تتعلم بخطوك الخاص مع نظام تلعيب كامل. نقاط XP ومستويات وتحديات يومية ومجتمع يدعمك.</div>
    </div>
  </div>
  <div class="proc-item">
    <div class="proc-num">3</div>
    <div>
      <div class="font-bold text-sm mb-1" style="color:var(--w)" data-en="Assessment & Testing" data-ar="التقييم والاختبارات">التقييم والاختبارات</div>
      <div class="text-sm leading-relaxed" style="color:var(--w60)" data-en="Every track ends with a comprehensive exam accredited by the awarding body. Tests are practical and measure real skill." data-ar="كل مسار ينتهي باختبار شامل معتمد من الجهة المانحة. الاختبارات عملية وتقيس المهارة الفعلية.">كل مسار ينتهي باختبار شامل معتمد من الجهة المانحة. الاختبارات عملية وتقيس المهارة الفعلية.</div>
    </div>
  </div>
  <div class="proc-item">
    <div class="proc-num">4</div>
    <div>
      <div class="font-bold text-sm mb-1" style="color:var(--w)" data-en="Verified Digital Certificate" data-ar="الشهادة الرقمية الموثقة">الشهادة الرقمية الموثقة</div>
      <div class="text-sm leading-relaxed" style="color:var(--w60)" data-en="You receive a digital certificate with a unique QR code and verification code. Companies verify it directly from our website." data-ar="تحصل على شهادة رقمية بـ QR code فريد وكود تحقق. الشركات تتحقق من صحتها مباشرة من موقعنا.">تحصل على شهادة رقمية بـ QR code فريد وكود تحقق. الشركات تتحقق من صحتها مباشرة من موقعنا.</div>
    </div>
  </div>
  <div class="proc-item">
    <div class="proc-num">5</div>
    <div>
      <div class="font-bold text-sm mb-1" style="color:var(--w)" data-en="Verified Profile & Employment" data-ar="الملف الموثق والتوظيف">الملف الموثق والتوظيف</div>
      <div class="text-sm leading-relaxed" style="color:var(--w60)" data-en="Your certificate automatically appears in your verified profile visible to companies. Priority visibility for those who completed an accredited diploma." data-ar="شهادتك تظهر تلقائياً في ملفك الموثق المرئي للشركات. أولوية في الظهور لمن أكمل دبلومة معتمدة.">شهادتك تظهر تلقائياً في ملفك الموثق المرئي للشركات. أولوية في الظهور لمن أكمل دبلومة معتمدة.</div>
    </div>
  </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ COMPANIES TRUST ══ -->
<section class="py-24" style="background:var(--bg);border-top:1px solid var(--ta12)">
  <div class="max-w-[1100px] mx-auto px-6">
    <div class="text-center mb-12 reveal">
      <div class="sec-label justify-center" data-en="Recognized By" data-ar="معترف بنا لدى">معترف بنا لدى</div>
      <h2 class="font-display font-extrabold text-3xl mb-3" style="color:var(--w)"
          data-en="500+ companies accept HalaCareer certificates"
          data-ar="+500 شركة تقبل شهادات هلا كارير">+500 شركة تقبل شهادات هلا كارير</h2>
      <p class="text-base max-w-lg mx-auto" style="color:var(--w60)"
         data-en="Our partners actively search for our graduates. When you complete a diploma, you're already on their radar."
         data-ar="شركاؤنا يبحثون بنشاط عن خريجينا. عندما تُكمل دبلومة، أنت بالفعل على رادارهم.">شركاؤنا يبحثون بنشاط عن خريجينا. عندما تُكمل دبلومة، أنت بالفعل على رادارهم.</p>
    </div>
    <div class="flex flex-wrap gap-3 justify-center reveal">
  <div class="trust-chip">
    <div class="w-6 h-6 rounded-lg flex items-center justify-center text-[.55rem] font-bold shrink-0" style="background:linear-gradient(135deg,#2de0ca,#009e85);color:rgba(0,0,0,.65)">SE</div>
    <span>Savills Egypt</span>
  </div>
  <div class="trust-chip">
    <div class="w-6 h-6 rounded-lg flex items-center justify-center text-[.55rem] font-bold shrink-0" style="background:linear-gradient(135deg,#3b82f6,#1d4ed8);color:rgba(255,255,255,.9)">CB</div>
    <span>CBRE Egypt</span>
  </div>
  <div class="trust-chip">
    <div class="w-6 h-6 rounded-lg flex items-center justify-center text-[.55rem] font-bold shrink-0" style="background:linear-gradient(135deg,#fbbf24,#d97706);color:rgba(0,0,0,.65)">TE</div>
    <span>Telecom Egypt</span>
  </div>
  <div class="trust-chip">
    <div class="w-6 h-6 rounded-lg flex items-center justify-center text-[.55rem] font-bold shrink-0" style="background:linear-gradient(135deg,#34d399,#0d9488);color:rgba(0,0,0,.65)">BC</div>
    <span>British Council</span>
  </div>
  <div class="trust-chip">
    <div class="w-6 h-6 rounded-lg flex items-center justify-center text-[.55rem] font-bold shrink-0" style="background:linear-gradient(135deg,#ef4444,#b91c1c);color:rgba(255,255,255,.9)">VF</div>
    <span>Vodafone Egypt</span>
  </div>
  <div class="trust-chip">
    <div class="w-6 h-6 rounded-lg flex items-center justify-center text-[.55rem] font-bold shrink-0" style="background:linear-gradient(135deg,#d97706,#92400e);color:rgba(255,255,255,.9)">PW</div>
    <span>PwC Egypt</span>
  </div>
  <div class="trust-chip">
    <div class="w-6 h-6 rounded-lg flex items-center justify-center text-[.55rem] font-bold shrink-0" style="background:linear-gradient(135deg,#2de0ca,#065f46);color:rgba(255,255,255,.9)">MF</div>
    <span>Majid Al Futtaim</span>
  </div>
  <div class="trust-chip">
    <div class="w-6 h-6 rounded-lg flex items-center justify-center text-[.55rem] font-bold shrink-0" style="background:linear-gradient(135deg,#6366f1,#4338ca);color:rgba(255,255,255,.9)">EL</div>
    <span>Electrolux Egypt</span>
  </div>
  <div class="trust-chip">
    <div class="w-6 h-6 rounded-lg flex items-center justify-center text-[.55rem] font-bold shrink-0" style="background:linear-gradient(135deg,#fbbf24,#78350f);color:rgba(0,0,0,.65)">EH</div>
    <span>EFG Hermes</span>
  </div>
  <div class="trust-chip">
    <div class="w-6 h-6 rounded-lg flex items-center justify-center text-[.55rem] font-bold shrink-0" style="background:linear-gradient(135deg,#10b981,#064e3b);color:rgba(255,255,255,.9)">RG</div>
    <span>Raya Group</span>
  </div>
      <div class="trust-chip" style="font-style:italic" data-en="+ 490 more companies" data-ar="+ 490 شركة أخرى">+ 490 شركة أخرى</div>
    </div>
  </div>
</section>

<!-- ══ VERIFY ══ -->
<section id="verify" class="py-24" style="background:var(--bg2);border-top:1px solid var(--ta12)">
  <div class="max-w-[640px] mx-auto px-6">
    <div class="verify-box reveal">
      <div class="text-center mb-7">
        <div class="w-14 h-14 rounded-2xl flex items-center justify-center mx-auto mb-4" style="background:var(--ta12);border:1px solid var(--ta20)">
          <svg class="w-7 h-7" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
        </div>
        <h2 class="font-display font-extrabold text-2xl mb-2" style="color:var(--w)"
            data-en="Verify a Certificate" data-ar="تحقق من صحة شهادة">تحقق من صحة شهادة</h2>
        <p class="text-sm" style="color:var(--w60)"
           data-en="Enter the certificate code or scan the QR code on the certificate to verify its authenticity instantly."
           data-ar="أدخل كود الشهادة أو امسح الـ QR Code للتحقق من صحتها فوراً.">أدخل كود الشهادة أو امسح الـ QR Code للتحقق من صحتها فوراً.</p>
      </div>

      <div class="flex gap-3 mb-4">
        <input class="verify-input" id="cert-input" placeholder="HC-2025-XXXXX-XXXX"
               data-en="Enter certificate code..." data-ar="أدخل كود الشهادة...">
        <button onclick="verifyCert()" class="btn-p px-5 py-2.5 text-sm font-bold shrink-0 inline-flex items-center gap-2">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          <span data-en="Verify" data-ar="تحقق">تحقق</span>
        </button>
      </div>

      <!-- Result area (hidden by default) -->
      <div id="verify-result" class="hidden rounded-xl p-4" style="border:1px solid var(--ta12);background:rgba(0,212,184,.05)">
        <div class="flex items-start gap-3">
          <div class="w-9 h-9 rounded-xl flex items-center justify-center shrink-0" style="background:rgba(34,197,94,.12);border:1px solid rgba(34,197,94,.25)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg>
          </div>
          <div>
            <div class="font-bold text-sm mb-0.5" style="color:var(--w)" data-en="✓ Certificate Verified" data-ar="✓ الشهادة موثقة وصحيحة">✓ الشهادة موثقة وصحيحة</div>
            <div id="cert-details" class="text-xs" style="color:var(--w60)"></div>
          </div>
        </div>
      </div>

      <div class="flex items-center justify-center gap-5 mt-5 text-xs" style="color:var(--w40)">
        <span data-en="✓ Instant verification" data-ar="✓ تحقق فوري">✓ تحقق فوري</span>
        <span data-en="✓ QR code supported" data-ar="✓ يدعم QR Code">✓ يدعم QR Code</span>
        <span data-en="✓ Free for companies" data-ar="✓ مجاني للشركات">✓ مجاني للشركات</span>
      </div>
    </div>
  </div>
</section>

<!-- ══ CTA ══ -->
<section class="py-24" style="background:var(--bg);border-top:1px solid var(--ta12)">
  <div class="max-w-[900px] mx-auto px-6 text-center reveal">
    <div class="sec-label justify-center" data-en="Start Today" data-ar="ابدأ اليوم">ابدأ اليوم</div>
    <h2 class="font-display font-extrabold mb-4" style="font-size:clamp(1.8rem,4vw,3rem);color:var(--w)"
        data-en="Get a certificate that actually opens doors."
        data-ar="احصل على شهادة تفتح الأبواب فعلاً.">احصل على شهادة تفتح الأبواب فعلاً.</h2>
    <p class="text-base mb-8 max-w-xl mx-auto" style="color:var(--w60)"
       data-en="Not just a piece of paper. A verified digital credential connected to real employment opportunities with 500+ companies across Egypt and the Arab world."
       data-ar="ليست مجرد ورقة. وثيقة رقمية موثقة مرتبطة بفرص توظيف حقيقية مع +500 شركة في مصر والعالم العربي.">ليست مجرد ورقة. وثيقة رقمية موثقة مرتبطة بفرص توظيف حقيقية مع +500 شركة في مصر والعالم العربي.</p>
    <div class="flex flex-wrap items-center justify-center gap-3">
      <a href="hc-diplomas.html" class="btn-p inline-flex items-center gap-2 px-8 py-3 text-base font-bold">
        <span data-en="Browse All Diplomas" data-ar="تصفح كل الدبلومات">تصفح كل الدبلومات</span>
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
      <a href="hc-companies.html" class="btn-g inline-flex items-center gap-2 px-8 py-3 text-base font-semibold"
         data-en="For Companies →" data-ar="للشركات →">للشركات →</a>
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
// Scroll progress
window.addEventListener('scroll',function(){
  var sp=document.getElementById('spbar');if(!sp)return;
  var h=document.documentElement.scrollHeight-window.innerHeight;
  sp.style.width=(h>0?(window.scrollY/h*100):0)+'%';
},{passive:true});

// Nav scroll
window.addEventListener('scroll',function(){
  var n=document.getElementById('hc-nav');if(!n)return;
  var light=document.documentElement.classList.contains('light');
  n.style.background=window.scrollY>40?(light?'#fff':'rgba(3,13,23,.98)'):(light?'#fff':'rgba(3,13,23,.96)');
  n.style.borderColor=window.scrollY>40?(light?'#e5e7eb':'rgba(255,255,255,.12)'):(light?'#e5e7eb':'rgba(255,255,255,.08)');
},{passive:true});

// Reveal
var obs=new IntersectionObserver(function(entries){
  entries.forEach(function(e){if(e.isIntersecting){e.target.classList.add('visible');obs.unobserve(e.target);}});
},{threshold:0.08,rootMargin:'0px 0px -40px 0px'});
document.querySelectorAll('.reveal').forEach(function(el,i){
  el.style.transitionDelay=(i%5*0.07)+'s';obs.observe(el);
});

// Verify certificate (demo)
function verifyCert(){
  var inp=document.getElementById('cert-input');
  var res=document.getElementById('verify-result');
  var det=document.getElementById('cert-details');
  if(!inp||!res||!det) return;
  var val=inp.value.trim();
  if(!val){inp.style.borderColor='rgba(239,68,68,.5)';setTimeout(function(){inp.style.borderColor='';},1500);return;}
  res.classList.remove('hidden');
  var isEn=document.documentElement.lang==='en';
  det.innerHTML=isEn
    ?'Holder: Ahmed Mohamed · Diploma: B2B Sales Mastery · Issued: March 2025 · Status: <span style="color:#22c55e;font-weight:700">Valid</span>'
    :'الحامل: أحمد محمد · الدبلومة: إتقان مبيعات B2B · صدرت: مارس 2025 · الحالة: <span style="color:#22c55e;font-weight:700">صالحة</span>';
}

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(function(a){
  a.addEventListener('click',function(e){
    var el=document.querySelector(a.getAttribute('href'));if(!el)return;
    e.preventDefault();el.scrollIntoView({behavior:'smooth'});
  });
});
</script>
</body>
</html>