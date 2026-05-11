<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Diplomas & Courses — HalaCareer</title>
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


.dip-card{position:relative;overflow:hidden;border-radius:1rem;cursor:pointer}
.dip-card:hover .dip-thumb{transform:scale(1.04)}
.dip-thumb{transition:transform .4s ease}
.dip-card:hover .dip-overlay{opacity:1}
.dip-overlay{position:absolute;inset:0;background:rgba(0,0,0,.45);display:flex;align-items:center;justify-content:center;opacity:0;transition:opacity .3s;z-index:2}
.prem-lock{background:rgba(251,191,36,.12);border:1px solid rgba(251,191,36,.3);color:#fbbf24;font-size:.6rem;font-weight:700;padding:.2rem .6rem;border-radius:999px;display:inline-flex;align-items:center;gap:.3rem}


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

/* ── Mobile filter sheet (diplomas) ── */
@media(max-width:1023px){ aside{ display:none !important; } }
@media(min-width:1024px){ #dip-filter-fab{ display:none !important; } }

#dip-filter-fab{
  display:flex; align-items:center; gap:.6rem;
  padding:.55rem 1.1rem; border-radius:999px;
  border:1px solid var(--ta20); background:rgba(5,14,26,.85);
  font-size:.82rem; font-weight:600; color:var(--tl);
  cursor:pointer; transition:all .18s;
  position:relative; white-space:nowrap; flex-shrink:0;
}
#dip-filter-fab:hover{ background:var(--ta12); border-color:var(--ta30); }
html.light #dip-filter-fab{ background:#fff; border-color:rgba(0,212,184,.25); }
#dip-fab-count{
  display:none; position:absolute; top:-5px; inset-inline-end:-5px;
  width:18px; height:18px; border-radius:50%;
  background:var(--t); color:#020e18;
  font-size:.58rem; font-weight:800;
  align-items:center; justify-content:center;
}
#dip-fab-count.show{ display:flex; }

#dip-filter-overlay{
  position:fixed; inset:0; z-index:9995;
  background:rgba(0,0,0,.7);
  display:none; align-items:flex-end; justify-content:center;
  backdrop-filter:blur(6px);
}
#dip-filter-overlay.open{ display:flex; }
#dip-filter-sheet{
  width:100%; max-width:560px; max-height:90vh; overflow-y:auto;
  border-radius:1.5rem 1.5rem 0 0;
  background:var(--bg2); border:1px solid var(--ta15); border-bottom:none;
  padding:1.5rem 1.25rem 2rem;
  transform:translateY(100%);
  transition:transform .3s cubic-bezier(.22,1,.36,1);
}
#dip-filter-sheet.open{ transform:translateY(0); }
html.light #dip-filter-sheet{ background:#ffffff; border-color:rgba(0,212,184,.2); }
.dip-sheet-handle{
  width:36px; height:4px; border-radius:999px;
  background:var(--ta20); margin:0 auto 1.25rem;
}

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
</head>
<body>
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
        <button class="nav-btn font-semibold" style="color:var(--tl)" data-en="Learn" data-ar="تعلّم">
          تعلّم
          <svg class="nav-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="nav-drop"><a href="hc-diplomas.html" class="nav-drop-item active" data-en="Accredited Diplomas" data-ar="الدبلومات المعتمدة"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></div><span>الدبلومات المعتمدة</span></a><a href="hc-mentorship.html" class="nav-drop-item" data-en="Mentorship" data-ar="الإرشاد"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><span>الإرشاد</span></a></div>
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

<!-- ═══ HERO ═══ -->
<section class="relative pt-28 pb-16 overflow-hidden" style="background:var(--bg2)">
  <div class="linegrid absolute inset-0 opacity-40 pointer-events-none"></div>
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse 55% 60% at 50% -10%,rgba(0,212,184,.1),transparent 65%);pointer-events:none"></div>
  <div class="relative z-10 max-w-[1280px] mx-auto px-5 text-center">
    <div class="sec-eyebrow mb-3" data-en="200+ Diplomas · 4 Sectors" data-ar="أكثر من 200 دبلومة · 4 قطاعات">200+ Diplomas · 4 Sectors</div>
    <h1 class="font-display font-extrabold tracking-tight mb-4" style="font-size:clamp(2.2rem,4.5vw,3.5rem);color:var(--w)">
      <span data-en="Learn what the market" data-ar="تعلّم ما يطلبه">Learn what the market</span><br>
      <span class="grad" data-en="actually needs." data-ar="السوق فعلاً.">actually needs.</span>
    </h1>
    <p class="text-base max-w-xl mx-auto mb-8 leading-relaxed" style="color:var(--w60)"
       data-en="No monthly fees. No full-course upfront cost. Buy points, watch what you need, earn verified diplomas — and get hired."
       data-ar="لا اشتراكات شهرية. لا دفع مسبق للكورس كله. اشتري نقاطاً، شاهد ما تحتاجه، احصل على دبلومات موثّقة — ووُظِّف.">
      No monthly fees. No full-course upfront cost. Buy points, watch what you need, earn verified diplomas — and get hired.
    </p>

    <!-- Search bar -->
    <div class="flex flex-col sm:flex-row gap-3 max-w-2xl mx-auto mb-10">
      <div class="relative flex-1">
        <svg class="absolute start-3.5 top-1/2 -translate-y-1/2 w-4 h-4 pointer-events-none" style="color:var(--w40)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
        <input class="hc-input ps-10 py-3" id="search-inp"
          data-en="Search diplomas, sectors, skills..." data-ar="ابحث عن دبلومات وقطاعات ومهارات..."
          placeholder="Search diplomas, sectors, skills...">
      </div>
      <button class="btn-p px-7 py-3 text-sm font-bold" data-en="Search" data-ar="بحث">Search</button>
    </div>

    <!-- Stats strip -->
    <div class="inline-grid grid-cols-2 sm:grid-cols-4 gap-px rounded-2xl overflow-hidden" style="border:1px solid var(--ta20)">
      <div class="px-7 py-4 text-center" style="background:rgba(5,16,30,.8)">
        <div class="font-display font-extrabold text-2xl grad leading-none mb-0.5">200+</div>
        <div class="text-[.65rem]" style="color:var(--w40)" data-en="Diplomas Available" data-ar="دبلومة متاحة">Diplomas Available</div>
      </div>
      <div class="px-7 py-4 text-center" style="background:rgba(5,16,30,.8)">
        <div class="font-display font-extrabold text-2xl grad leading-none mb-0.5">85%</div>
        <div class="text-[.65rem]" style="color:var(--w40)" data-en="Avg. Placement Rate" data-ar="متوسط معدل التوظيف">Avg. Placement Rate</div>
      </div>
      <div class="px-7 py-4 text-center" style="background:rgba(5,16,30,.8)">
        <div class="font-display font-extrabold text-2xl grad leading-none mb-0.5">4 pts</div>
        <div class="text-[.65rem]" style="color:var(--w40)" data-en="Per Video (Egypt)" data-ar="لكل فيديو (مصر)">Per Video (Egypt)</div>
      </div>
      <div class="px-7 py-4 text-center" style="background:rgba(5,16,30,.8)">
        <div class="font-display font-extrabold text-2xl grad leading-none mb-0.5">10K+</div>
        <div class="text-[.65rem]" style="color:var(--w40)" data-en="Active Learners" data-ar="متدرب نشط">Active Learners</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ MAIN CONTENT ═══ -->
<section class="py-12" style="background:var(--bg)">
  <div class="max-w-[1280px] mx-auto px-5">
    <div class="grid grid-cols-1 lg:grid-cols-[260px,1fr] gap-8">

      <!-- ── SIDEBAR ── -->
      <aside>
        <div class="hc-card p-6 sticky top-20">
          <div class="flex items-center justify-between mb-5">
            <div class="font-display font-bold text-sm" style="color:var(--w)" data-en="Filters" data-ar="الفلاتر">Filters</div>
            <button class="text-[.65rem] font-bold" style="color:var(--t)" data-en="Reset all" data-ar="مسح الكل">Reset all</button>
          </div>

          <!-- Sector -->
          <div class="mb-6">
            <div class="text-[.65rem] font-bold tracking-[.14em] uppercase mb-3" style="color:var(--w40)" data-en="Sector" data-ar="القطاع">Sector</div>
            <div class="flex flex-col gap-2">
              <label class="flex items-center gap-3 cursor-pointer group">
                <div class="w-4 h-4 rounded border-2 flex items-center justify-center" style="border-color:var(--t);background:var(--t)">
                  <svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="none" stroke="#020e18" stroke-width="2.5"><path d="M1.5 5l2.5 2.5 4.5-4.5"/></svg>
                </div>
                <span class="text-sm group-hover:opacity-100 opacity-80" style="color:var(--w)" data-en="All Sectors" data-ar="كل القطاعات">All Sectors</span>
                <span class="ms-auto text-[.65rem] font-bold px-2 py-0.5 rounded-full" style="background:var(--ta12);color:var(--t)">248</span>
              </label>
              <label class="flex items-center gap-3 cursor-pointer group">
                <input type="checkbox" class="accent-[#00d4b8] w-4 h-4 rounded">
                <span class="text-sm group-hover:opacity-100 opacity-70" style="color:var(--w)" data-en="Business & Management" data-ar="بيزنس وإدارة">Business & Management</span>
                <span class="ms-auto text-[.65rem] font-bold px-2 py-0.5 rounded-full" style="background:rgba(0,212,184,.08);color:var(--t)">94</span>
              </label>
              <label class="flex items-center gap-3 cursor-pointer group">
                <input type="checkbox" class="accent-[#22c55e] w-4 h-4 rounded">
                <span class="text-sm group-hover:opacity-100 opacity-70" style="color:var(--w)" data-en="Languages" data-ar="اللغات">Languages</span>
                <span class="ms-auto text-[.65rem] font-bold px-2 py-0.5 rounded-full" style="background:rgba(34,197,94,.08);color:#4ade80">72</span>
              </label>
              <label class="flex items-center gap-3 cursor-pointer group">
                <input type="checkbox" class="accent-[#f59e0b] w-4 h-4 rounded">
                <span class="text-sm group-hover:opacity-100 opacity-70" style="color:var(--w)" data-en="Real Estate" data-ar="العقارات">Real Estate</span>
                <span class="ms-auto text-[.65rem] font-bold px-2 py-0.5 rounded-full" style="background:rgba(245,158,11,.08);color:#fbbf24">48</span>
              </label>
              <label class="flex items-center gap-3 cursor-pointer group">
                <input type="checkbox" class="accent-[#a78bfa] w-4 h-4 rounded">
                <span class="text-sm group-hover:opacity-100 opacity-70" style="color:var(--w)" data-en="Education & Teaching" data-ar="التعليم والتدريس">Education & Teaching</span>
                <span class="ms-auto text-[.65rem] font-bold px-2 py-0.5 rounded-full" style="background:rgba(167,139,250,.08);color:#c4b5fd">34</span>
              </label>
            </div>
          </div>

          <!-- Level -->
          <div class="mb-6">
            <div class="text-[.65rem] font-bold tracking-[.14em] uppercase mb-3" style="color:var(--w40)" data-en="Level" data-ar="المستوى">Level</div>
            <div class="flex flex-wrap gap-1.5 chip-group">
              <span class="chip on" data-en="All" data-ar="الكل">All</span>
              <span class="chip" data-en="Beginner" data-ar="مبتدئ">Beginner</span>
              <span class="chip" data-en="Intermediate" data-ar="متوسط">Intermediate</span>
              <span class="chip" data-en="Advanced" data-ar="متقدم">Advanced</span>
            </div>
          </div>

          <!-- Duration -->
          <div class="mb-6">
            <div class="text-[.65rem] font-bold tracking-[.14em] uppercase mb-3" style="color:var(--w40)" data-en="Duration" data-ar="المدة">Duration</div>
            <div class="flex flex-col gap-2">
              <label class="flex items-center gap-3 cursor-pointer"><input type="radio" name="dur" checked class="accent-[#00d4b8]"><span class="text-sm" style="color:var(--w60)" data-en="Any duration" data-ar="أي مدة">Any duration</span></label>
              <label class="flex items-center gap-3 cursor-pointer"><input type="radio" name="dur" class="accent-[#00d4b8]"><span class="text-sm" style="color:var(--w60)" data-en="< 30 days (Quick)" data-ar="أقل من 30 يوم (سريع)">< 30 days (Quick)</span></label>
              <label class="flex items-center gap-3 cursor-pointer"><input type="radio" name="dur" class="accent-[#00d4b8]"><span class="text-sm" style="color:var(--w60)" data-en="30–60 days" data-ar="30–60 يوم">30–60 days</span></label>
              <label class="flex items-center gap-3 cursor-pointer"><input type="radio" name="dur" class="accent-[#00d4b8]"><span class="text-sm" style="color:var(--w60)" data-en="60–90 days" data-ar="60–90 يوم">60–90 days</span></label>
              <label class="flex items-center gap-3 cursor-pointer"><input type="radio" name="dur" class="accent-[#00d4b8]"><span class="text-sm" style="color:var(--w60)" data-en="90+ days (Comprehensive)" data-ar="90+ يوم (شامل)">90+ days (Comprehensive)</span></label>
            </div>
          </div>

          <!-- Placement rate -->
          <div class="mb-6">
            <div class="flex items-center justify-between mb-3">
              <div class="text-[.65rem] font-bold tracking-[.14em] uppercase" style="color:var(--w40)" data-en="Min. Placement Rate" data-ar="أدنى معدل توظيف">Min. Placement Rate</div>
              <span class="text-[.65rem] font-bold" style="color:var(--t)" id="placement-val">75%</span>
            </div>
            <input type="range" min="50" max="100" value="75" class="w-full accent-[#00d4b8]" oninput="document.getElementById('placement-val').textContent=this.value+'%'">
            <div class="flex justify-between mt-1"><span class="text-[.6rem]" style="color:var(--w40)">50%</span><span class="text-[.6rem]" style="color:var(--w40)">100%</span></div>
          </div>

          <!-- Region / Points -->
          <div>
            <div class="text-[.65rem] font-bold tracking-[.14em] uppercase mb-3" style="color:var(--w40)" data-en="Your Region" data-ar="منطقتك">Your Region</div>
            <div class="flex flex-wrap gap-1.5 chip-group mb-3">
              <span class="chip on">🇪🇬 Egypt</span>
              <span class="chip">🇸🇦 Gulf</span>
              <span class="chip">🇪🇺 EU</span>
              <span class="chip">🇺🇸 US/CA</span>
            </div>
            <div class="rounded-xl p-3 text-[.7rem] leading-relaxed" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)">
              <span data-en="🇪🇬 4 pts/video · 🇸🇦 10 pts · 🇪🇺 30 pts · 🇺🇸 50 pts" data-ar="🇪🇬 4 نقاط/فيديو · 🇸🇦 10 نقاط · 🇪🇺 30 نقطة · 🇺🇸 50 نقطة">🇪🇬 4 pts/video · 🇸🇦 10 pts · 🇪🇺 30 pts · 🇺🇸 50 pts</span>
            </div>
          </div>
        </div>
      </aside>

      <!-- ── GRID ── -->
      <div>
        <!-- Toolbar -->
        <div class="flex flex-col sm:flex-row gap-3 items-start sm:items-center justify-between mb-6">
          <!-- Mobile filter FAB -->
          <button id="dip-filter-fab" onclick="openDipSheet()">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="6" x2="20" y2="6"/><line x1="8" y1="12" x2="16" y2="12"/><line x1="11" y1="18" x2="13" y2="18"/></svg>
            <span data-en="Filters" data-ar="الفلاتر">الفلاتر</span>
            <div id="dip-fab-count"></div>
          </button>
          <div class="flex gap-2 flex-wrap chip-group">
            <span class="chip on" data-en="All (248)" data-ar="الكل (248)">All (248)</span>
            <span class="chip" data-en="🔥 Most Demanded" data-ar="🔥 الأكثر طلباً">🔥 Most Demanded</span>
            <span class="chip" data-en="⭐ Highest Rated" data-ar="⭐ الأعلى تقييماً">⭐ Highest Rated</span>
            <span class="chip" data-en="✦ New" data-ar="✦ جديد">✦ New</span>
            <span class="chip" data-en="💰 High Placement" data-ar="💰 توظيف عالٍ">💰 High Placement</span>
          </div>
          <select class="hc-input w-auto text-sm py-2" style="cursor:pointer;min-width:140px">
            <option data-en="Most Popular" data-ar="الأكثر شعبية">Most Popular</option>
            <option data-en="Newest First" data-ar="الأحدث أولاً">Newest First</option>
            <option data-en="Highest Rated" data-ar="الأعلى تقييماً">Highest Rated</option>
            <option data-en="Least Points" data-ar="أقل نقاطاً">Least Points</option>
          </select>
        </div>

        <!-- Diploma cards grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-5" id="dip-grid"></div>

        <!-- Pagination -->
        <div class="flex items-center justify-center gap-2 mt-10">
          <button class="w-9 h-9 rounded-xl btn-g text-sm flex items-center justify-center">‹</button>
          <button class="w-9 h-9 rounded-xl btn-p text-sm flex items-center justify-center">1</button>
          <button class="w-9 h-9 rounded-xl btn-g text-sm flex items-center justify-center">2</button>
          <button class="w-9 h-9 rounded-xl btn-g text-sm flex items-center justify-center">3</button>
          <span style="color:var(--w40)">…</span>
          <button class="w-9 h-9 rounded-xl btn-g text-sm flex items-center justify-center">9</button>
          <button class="w-9 h-9 rounded-xl btn-g text-sm flex items-center justify-center">›</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ POINTS EXPLAINER BANNER ═══ -->
<section class="py-16" style="background:var(--bg2)">
  <div class="max-w-[1280px] mx-auto px-5">
    <div class="rounded-3xl overflow-hidden border" style="border-color:rgba(0,212,184,.2);background:linear-gradient(135deg,rgba(0,212,184,.07),rgba(0,158,133,.03))">
      <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="p-10 lg:p-14">
          <div class="sec-eyebrow mb-4" data-en="How Pricing Works" data-ar="كيف يعمل التسعير">How Pricing Works</div>
          <h2 class="font-display font-extrabold text-3xl mb-5" style="color:var(--w)" data-en="Pay per video. Not per course." data-ar="ادفع بالفيديو. مش بالكورس.">Pay per video. Not per course.</h2>
          <p class="text-sm leading-relaxed mb-8" style="color:var(--w60)"
             data-en="Buy a points pack once. Spend 4 points per video (Egypt). No subscriptions. No expiry. Your points stay until you use them."
             data-ar="اشتري باقة نقاط مرة واحدة. أنفق 4 نقاط لكل فيديو (مصر). لا اشتراكات. لا صلاحية. نقاطك تفضل معك حتى تستخدمها.">
            Buy a points pack once. Spend 4 points per video (Egypt). No subscriptions. No expiry. Your points stay until you use them.
          </p>
          <a href="hc-pricing.html" class="btn-p inline-flex items-center gap-2 px-6 py-3 text-sm" data-en="View Points Packs →" data-ar="عرض باقات النقاط ←">View Points Packs →</a>
        </div>
        <div class="p-10 lg:p-14 border-s" style="border-color:rgba(0,212,184,.12)">
          <div class="grid grid-cols-2 gap-4">
            <div class="rounded-2xl p-5" style="background:rgba(0,212,184,.08);border:1px solid var(--ta20)">
              <div class="text-2xl mb-2">🇪🇬</div>
              <div class="font-display font-extrabold text-3xl grad leading-none mb-1">4</div>
              <div class="text-xs" style="color:var(--w60)" data-en="pts per video · Egypt" data-ar="نقطة/فيديو · مصر">pts per video · Egypt</div>
              <div class="mt-3 text-[.65rem] font-bold" style="color:var(--w40)" data-en="≈ 0.8 EGP/video" data-ar="≈ 0.8 جنيه/فيديو">≈ 0.8 EGP/video</div>
            </div>
            <div class="rounded-2xl p-5" style="background:rgba(0,212,184,.08);border:1px solid var(--ta20)">
              <div class="text-2xl mb-2">🇸🇦</div>
              <div class="font-display font-extrabold text-3xl grad leading-none mb-1">10</div>
              <div class="text-xs" style="color:var(--w60)" data-en="pts per video · Gulf" data-ar="نقطة/فيديو · خليج">pts per video · Gulf</div>
              <div class="mt-3 text-[.65rem] font-bold" style="color:var(--w40)">≈ 0.5 SAR/video</div>
            </div>
            <div class="rounded-2xl p-5" style="background:rgba(0,212,184,.08);border:1px solid var(--ta20)">
              <div class="text-2xl mb-2">🇪🇺</div>
              <div class="font-display font-extrabold text-3xl grad leading-none mb-1">30</div>
              <div class="text-xs" style="color:var(--w60)" data-en="pts per video · Europe" data-ar="نقطة/فيديو · أوروبا">pts per video · Europe</div>
              <div class="mt-3 text-[.65rem] font-bold" style="color:var(--w40)">≈ €0.35/video</div>
            </div>
            <div class="rounded-2xl p-5" style="background:rgba(0,212,184,.08);border:1px solid var(--ta20)">
              <div class="text-2xl mb-2">🇺🇸</div>
              <div class="font-display font-extrabold text-3xl grad leading-none mb-1">50</div>
              <div class="text-xs" style="color:var(--w60)" data-en="pts per video · US/CA" data-ar="نقطة/فيديو · أمريكا">pts per video · US/CA</div>
              <div class="mt-3 text-[.65rem] font-bold" style="color:var(--w40)">≈ $0.50/video</div>
            </div>
          </div>
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
const DIPLOMAS=[
  {sec:'biz',en:'Professional Sales Mastery Diploma',ar:'دبلومة المبيعات الاحترافية',sub_en:'Master B2B/B2C sales, negotiation, pipeline management and closing techniques.',sub_ar:'أتقن مبيعات B2B/B2C والتفاوض وإدارة pipeline وتقنيات الإغلاق.',videos:28,days:60,pts:4,rating:4.9,reviews:1240,badge:'🔥',badgeEn:'Most Demanded',badgeAr:'الأكثر طلباً',placement:91,instructor:'Ahmed El-Sayed',level:'Intermediate',levelAr:'متوسط',sector_label:'Business',sector_label_ar:'بيزنس',tag:'tag-biz',grad:'linear-gradient(135deg,rgba(0,212,184,.18),rgba(0,158,133,.06))',stroke:'var(--t)',icon:'M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z'},
  {sec:'lang',en:'Business English B2 — 90 Days Diploma',ar:'دبلومة إنجليزي الأعمال B2 — 90 يوم',sub_en:'Reach B2 business English level in 90 days. Emails, presentations, meetings and negotiations.',sub_ar:'أوصل مستواك في إنجليزي الأعمال لـ B2 خلال 90 يوم. إيميلات وعروض واجتماعات وتفاوض.',videos:36,days:90,pts:4,rating:4.8,reviews:2100,badge:'⚡',badgeEn:'Fast Results',badgeAr:'نتيجة سريعة',placement:82,instructor:'Nora Ali',level:'Beginner',levelAr:'مبتدئ',sector_label:'Languages',sector_label_ar:'لغات',tag:'tag-lang',grad:'linear-gradient(135deg,rgba(34,197,94,.15),rgba(16,185,129,.06))',stroke:'#22c55e',icon:'M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zM2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z'},
  {sec:'re',en:'Professional Real Estate Agent Diploma',ar:'دبلومة وكيل العقارات المحترف',sub_en:'From zero to licensed agent. Valuations, contracts, client acquisition and deal closing.',sub_ar:'من الصفر لوكيل محترف. تقييمات وعقود واستقطاب عملاء وإغلاق صفقات.',videos:22,days:45,pts:4,rating:4.9,reviews:870,badge:'💰',badgeEn:'No Salary Ceiling',badgeAr:'راتب بلا سقف',placement:96,instructor:'Omar Fathy',level:'Beginner',levelAr:'مبتدئ',sector_label:'Real Estate',sector_label_ar:'عقارات',tag:'tag-re',grad:'linear-gradient(135deg,rgba(245,158,11,.18),rgba(245,158,11,.05))',stroke:'#f59e0b',icon:'M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z M9 22V12h6v10'},
  {sec:'biz',en:'Digital Marketing & Growth Diploma',ar:'دبلومة التسويق الرقمي والنمو',sub_en:'SEO, paid ads, content strategy, analytics and growth hacking. Full funnel mastery.',sub_ar:'SEO وإعلانات مدفوعة واستراتيجية محتوى وتحليلات وhacking النمو. إتقان كامل للقمع.',videos:24,days:55,pts:4,rating:4.8,reviews:980,badge:'✦',badgeEn:'New',badgeAr:'جديد',placement:87,instructor:'Sara Kamal',level:'Intermediate',levelAr:'متوسط',sector_label:'Business',sector_label_ar:'بيزنس',tag:'tag-biz',grad:'linear-gradient(135deg,rgba(0,212,184,.18),rgba(0,158,133,.06))',stroke:'var(--t)',icon:'M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z'},
  {sec:'edu',en:'Teacher Preparation Diploma',ar:'دبلومة إعداد المعلمين',sub_en:'Modern pedagogy, classroom management, lesson planning and student engagement methods.',sub_ar:'علم التربية الحديث وإدارة الفصل وتخطيط الدروس وأساليب تفاعل الطلاب.',videos:20,days:50,pts:4,rating:4.8,reviews:740,badge:'',badgeEn:'',badgeAr:'',placement:85,instructor:'Dr. Layla Ahmed',level:'Intermediate',levelAr:'متوسط',sector_label:'Education',sector_label_ar:'تعليم',tag:'tag-edu',grad:'linear-gradient(135deg,rgba(167,139,250,.15),rgba(139,92,246,.05))',stroke:'#a78bfa',icon:'M22 10v6M2 10l10-5 10 5-10 5z M6 12v5c3 3 9 3 12 0v-5'},
  {sec:'lang',en:'IELTS Academic Preparation Diploma',ar:'دبلومة التحضير للآيلتس الأكاديمي',sub_en:'Full IELTS prep: Reading, Writing, Listening, Speaking. Proven band 7+ strategy.',sub_ar:'تحضير كامل للآيلتس: قراءة وكتابة واستماع وتحدث. استراتيجية مُثبَتة للبند 7+.',videos:32,days:75,pts:4,rating:4.9,reviews:1560,badge:'',badgeEn:'',badgeAr:'',placement:79,instructor:'Dr. Reem Hassan',level:'Intermediate',levelAr:'متوسط',sector_label:'Languages',sector_label_ar:'لغات',tag:'tag-lang',grad:'linear-gradient(135deg,rgba(34,197,94,.15),rgba(16,185,129,.06))',stroke:'#22c55e',icon:'M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zM2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z'},
  {sec:'re',en:'Property Valuation & Investment Diploma',ar:'دبلومة تقييم العقارات والاستثمار',sub_en:'Market analysis, yield calculation, investment strategies and portfolio management.',sub_ar:'تحليل السوق وحساب العائد واستراتيجيات الاستثمار وإدارة المحافظ.',videos:16,days:35,pts:4,rating:4.7,reviews:420,badge:'',badgeEn:'',badgeAr:'',placement:91,instructor:'Khaled Nasser',level:'Advanced',levelAr:'متقدم',sector_label:'Real Estate',sector_label_ar:'عقارات',tag:'tag-re',grad:'linear-gradient(135deg,rgba(245,158,11,.18),rgba(245,158,11,.05))',stroke:'#f59e0b',icon:'M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z M9 22V12h6v10'},
  {sec:'biz',en:'HR Management & Talent Acquisition Diploma',ar:'دبلومة إدارة الموارد البشرية والاستقطاب',sub_en:'Full HR cycle: Recruitment, compensation, performance management, labor law.',sub_ar:'الدورة الكاملة للموارد البشرية: التوظيف والتعويضات وإدارة الأداء وقانون العمل.',videos:20,days:50,pts:4,rating:4.7,reviews:640,badge:'',badgeEn:'',badgeAr:'',placement:84,instructor:'Mohamed Tarek',level:'Intermediate',levelAr:'متوسط',sector_label:'Business',sector_label_ar:'بيزنس',tag:'tag-biz',grad:'linear-gradient(135deg,rgba(0,212,184,.18),rgba(0,158,133,.06))',stroke:'var(--t)',icon:'M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2 M9 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8z M23 21v-2a4 4 0 0 0-3-3.87 M16 3.13a4 4 0 0 1 0 7.75'},
  {sec:'biz',en:'Operations & Supply Chain Diploma',ar:'دبلومة العمليات وسلاسل الإمداد',sub_en:'End-to-end operations: Process design, logistics, inventory and KPI management.',sub_ar:'عمليات شاملة: تصميم العمليات واللوجستيات والمخزون وإدارة KPI.',videos:18,days:45,pts:4,rating:4.6,reviews:510,badge:'',badgeEn:'',badgeAr:'',placement:83,instructor:'Heba Soliman',level:'Intermediate',levelAr:'متوسط',sector_label:'Business',sector_label_ar:'بيزنس',tag:'tag-biz',grad:'linear-gradient(135deg,rgba(0,212,184,.18),rgba(0,158,133,.06))',stroke:'var(--t)',icon:'M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z'},
];

const RATING_STARS = r => '★'.repeat(Math.round(r)) + '☆'.repeat(5-Math.round(r));

function renderDips(){
  const g = document.getElementById('dip-grid');
  g.innerHTML = DIPLOMAS.map(d => `
    <article class="hc-card dip-card" onclick="void(0)">
      <!-- Thumbnail -->
      <div class="dip-thumb relative h-36 overflow-hidden" style="background:${d.grad}">
        <svg class="absolute inset-0 w-full h-full opacity-20 p-8" viewBox="0 0 24 24" fill="none" stroke="${d.stroke}" stroke-width=".7"><path d="${d.icon}"/></svg>
        <div class="absolute inset-0 flex items-end p-4">
          <div class="flex items-center gap-2 w-full">
            ${d.badge ? `<span class="px-2.5 py-1 rounded-full text-[.58rem] font-bold" style="background:rgba(0,0,0,.5);color:#fff;backdrop-filter:blur(8px)">${d.badge} <span data-en="${d.badgeEn}" data-ar="${d.badgeAr}">${d.badgeEn}</span></span>` : ''}
            <span class="ms-auto px-2.5 py-1 rounded-full text-[.58rem] font-bold" style="background:rgba(0,0,0,.5);color:var(--w60);backdrop-filter:blur(8px)" data-en="${d.videos} videos" data-ar="${d.videos} فيديو">${d.videos} videos</span>
          </div>
        </div>
        <div class="dip-overlay rounded-none"><span class="btn-p px-5 py-2 text-xs" data-en="Preview Diploma" data-ar="معاينة الدبلومة">Preview Diploma</span></div>
      </div>
      <!-- Body -->
      <div class="p-5">
        <div class="flex items-center gap-2 mb-2.5">
          <span class="px-2 py-0.5 rounded text-[.58rem] font-bold ${d.tag}" data-en="${d.sector_label}" data-ar="${d.sector_label_ar}">${d.sector_label}</span>
          <span class="px-2 py-0.5 rounded text-[.58rem] font-medium" style="background:var(--w10);color:var(--w40)" data-en="${d.level}" data-ar="${d.levelAr}">${d.level}</span>
          <div class="ms-auto flex items-center gap-1 stars text-xs">${RATING_STARS(d.rating)} <span style="color:var(--w40);font-size:.62rem">${d.rating}</span></div>
        </div>
        <h3 class="font-display font-bold text-[.95rem] leading-tight mb-1.5" style="color:var(--w)" data-en="${d.en}" data-ar="${d.ar}">${d.en}</h3>
        <p class="text-[.75rem] leading-relaxed mb-3" style="color:var(--w40)" data-en="${d.sub_en}" data-ar="${d.sub_ar}">${d.sub_en}</p>
        <div class="flex items-center gap-1.5 text-[.7rem] mb-4" style="color:var(--w40)">
          <svg class="w-3 h-3 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          ${d.instructor}
          <span class="mx-1" style="color:var(--w20)">·</span>
          <span data-en="${d.reviews.toLocaleString()} reviews" data-ar="${d.reviews.toLocaleString()} مراجعة">${d.reviews.toLocaleString()} reviews</span>
        </div>
        <!-- Progress bar (random for demo) -->
        <div class="pbar mb-1"><div class="pbar-fill" style="width:${Math.floor(55+Math.random()*40)}%"></div></div>
        <div class="flex items-center justify-between text-[.62rem] mb-4" style="color:var(--w40)">
          <span data-en="${d.placement}% placement rate" data-ar="${d.placement}% معدل توظيف">${d.placement}% placement rate</span>
          <span data-en="${d.days} days" data-ar="${d.days} يوم">${d.days} days</span>
        </div>
        <div class="flex items-center justify-between pt-3" style="border-top:1px solid rgba(0,212,184,.1)">
          <div>
            <div class="flex items-baseline gap-1">
              <span class="font-display font-extrabold text-xl grad">${d.pts}</span>
              <span class="text-[.7rem] font-bold" style="color:var(--t)" data-en="pts/video" data-ar="نقاط/فيديو">pts/video</span>
            </div>
            <div class="text-[.6rem]" style="color:var(--w40)" data-en="Pay as you watch" data-ar="ادفع وأنت تتفرج">Pay as you watch</div>
          </div>
          <button class="btn-p px-4 py-2 text-xs" data-en="Start Learning" data-ar="ابدأ التعلم">Start Learning</button>
        </div>
      </div>
    </article>
  `).join('');
  applyLang();
}
document.addEventListener('DOMContentLoaded', renderDips);
</script>

<!-- ── Diploma Filter Sheet ── -->
<div id="dip-filter-overlay" onclick="if(event.target===this)closeDipSheet()">
  <div id="dip-filter-sheet">
    <div class="dip-sheet-handle"></div>
    <div class="flex items-center justify-between mb-5">
      <div class="font-display font-bold text-base" style="color:var(--w)" data-en="Filters" data-ar="الفلاتر">الفلاتر</div>
      <button onclick="closeDipSheet()" style="color:var(--w40);background:var(--ta08);border:1px solid var(--ta12);border-radius:.5rem;padding:.35rem .65rem;font-size:.75rem" data-en="Close" data-ar="إغلاق">إغلاق</button>
    </div>
    <!-- Cloned sidebar content -->
    <div id="dip-sheet-content"></div>
    <div class="flex gap-3 mt-5 pt-4" style="border-top:1px solid var(--ta12)">
      <button onclick="closeDipSheet()" class="btn-g flex-1 py-2.5 text-sm" data-en="Reset" data-ar="إعادة تعيين">إعادة تعيين</button>
      <button onclick="closeDipSheet()" class="btn-p flex-1 py-2.5 text-sm font-bold" data-en="Show Results →" data-ar="عرض النتائج ←">عرض النتائج ←</button>
    </div>
  </div>
</div>


<script>
function openDipSheet(){
  var overlay = document.getElementById('dip-filter-overlay');
  var sheet   = document.getElementById('dip-filter-sheet');
  var dest    = document.getElementById('dip-sheet-content');
  if(!overlay || !sheet) return;

  // Clone sidebar content (the hc-card inside aside)
  var sidebar = document.querySelector('aside .hc-card');
  if(sidebar && dest){
    dest.innerHTML = sidebar.innerHTML;
    // Remove the title/reset row from clone
    var header = dest.querySelector('.flex.items-center.justify-between');
    if(header) header.remove();
  }

  overlay.classList.add('open');
  requestAnimationFrame(function(){ sheet.classList.add('open'); });
  document.body.style.overflow = 'hidden';
}

function closeDipSheet(){
  var sheet   = document.getElementById('dip-filter-sheet');
  var overlay = document.getElementById('dip-filter-overlay');
  if(!sheet || !overlay) return;
  sheet.classList.remove('open');
  setTimeout(function(){ overlay.classList.remove('open'); }, 300);
  document.body.style.overflow = '';
}
</script>

</body>
</html>