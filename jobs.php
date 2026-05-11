<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jobs — Find Your Next Opportunity — HalaCareer</title>
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


/* ── Job card ── */
.job-card{display:flex;flex-direction:column;
  border-radius:1.1rem;border:1px solid var(--ta12);
  background:rgba(5,14,26,.88);
  transition:all .28s ease;cursor:pointer;position:relative;overflow:hidden;
}
.job-card::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 80% 60% at 0% 0%,rgba(0,212,184,.04),transparent 70%);pointer-events:none}
.job-card:hover{border-color:rgba(0,212,184,.35);transform:translateY(-2px);box-shadow:0 12px 36px rgba(0,80,70,.16)}
.job-card.featured{border-color:rgba(251,191,36,.3);background:linear-gradient(145deg,rgba(251,191,36,.06),rgba(5,14,26,.95))}
.job-card.locked{border-color:rgba(167,139,250,.22);background:rgba(5,14,26,.7)}
html.light .job-card{display:flex;flex-direction:column;background:#fff;border-color:rgba(0,212,184,.14);box-shadow:0 2px 8px rgba(0,90,80,.06)}
html.light .job-card:hover{box-shadow:0 10px 30px rgba(0,90,80,.1)}
html.light .job-card.featured{background:linear-gradient(145deg,rgba(251,191,36,.05),#fff 55%)}

/* ── Match bar ── */
.match-track{height:5px;border-radius:999px;background:var(--ta12);overflow:hidden}
.match-fill{height:100%;border-radius:999px;transition:width .9s cubic-bezier(.22,1,.36,1)}

/* ── Filter sidebar ── */
.sidebar-sticky{position:sticky;top:80px}
.filter-group{margin-bottom:1.25rem}
.filter-label{font-size:.62rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--w40);margin-bottom:.65rem;display:block}
.filter-opt{
  display:flex;align-items:center;gap:.65rem;
  padding:.45rem .65rem;border-radius:.7rem;cursor:pointer;
  transition:all .2s;font-size:.8rem;color:var(--w60);
}
.filter-opt:hover{background:var(--ta08);color:var(--w80)}
.filter-opt.on{background:var(--ta12);color:var(--tl)}
.filter-opt .fo-radio{
  width:15px;height:15px;border-radius:50%;border:2px solid rgba(255,255,255,.2);
  display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all .18s;
}
html.light .filter-opt .fo-radio{border-color:rgba(6,38,32,.2)}
.filter-opt.on .fo-radio{border-color:var(--t);background:var(--t)}
.filter-opt.on .fo-radio::after{content:'';width:5px;height:5px;border-radius:50%;background:#020e18;display:block}

/* ── Gamification ticker ── */
.gticker{display:flex;align-items:center;gap:1.25rem;padding:.7rem 1.25rem;border-radius:1rem;border:1px solid var(--ta15);background:rgba(5,14,26,.7);overflow-x:auto;scrollbar-width:none}
html.light .gticker{background:rgba(255,255,255,.9);box-shadow:0 2px 8px rgba(0,90,80,.06)}
.gticker-item{display:flex;align-items:center;gap:.5rem;white-space:nowrap;flex-shrink:0}
.gticker-sep{width:1px;height:18px;background:var(--ta15);flex-shrink:0}

/* ── Type badges ── */
.badge-full{background:rgba(0,212,184,.1);border:1px solid rgba(0,212,184,.22);color:var(--tl);padding:.2rem .65rem;border-radius:999px;font-size:.62rem;font-weight:700}
.badge-remote{background:rgba(34,197,94,.1);border:1px solid rgba(34,197,94,.22);color:#4ade80;padding:.2rem .65rem;border-radius:999px;font-size:.62rem;font-weight:700}
.badge-part{background:rgba(251,191,36,.1);border:1px solid rgba(251,191,36,.22);color:#fbbf24;padding:.2rem .65rem;border-radius:999px;font-size:.62rem;font-weight:700}
.badge-hybrid{background:rgba(167,139,250,.1);border:1px solid rgba(167,139,250,.22);color:#c4b5fd;padding:.2rem .65rem;border-radius:999px;font-size:.62rem;font-weight:700}

/* ── Lock overlay ── */
.lock-banner{
  display:flex;align-items:center;justify-content:center;gap:.5rem;
  padding:.55rem .9rem;border-radius:.75rem;
  background:rgba(167,139,250,.1);border:1px solid rgba(167,139,250,.22);
  font-size:.75rem;font-weight:600;color:#c4b5fd;
}

/* ── Milestone pills (hero) ── */
.ms-pill{
  display:flex;flex-direction:column;align-items:center;gap:.3rem;
  padding:.75rem 1.15rem;border-radius:1rem;border:1px solid;
  min-width:80px;text-align:center;transition:transform .2s;
}
.ms-pill:hover{transform:translateY(-2px)}

/* ── Streak / league tags ── */
.streak-tag{display:inline-flex;align-items:center;gap:.3rem;padding:.22rem .65rem;border-radius:999px;font-size:.68rem;font-weight:700;background:linear-gradient(135deg,rgba(251,146,60,.18),rgba(245,158,11,.12));border:1px solid rgba(251,146,60,.3);color:#fb923c}
.league-tag{display:inline-flex;align-items:center;gap:.3rem;padding:.22rem .65rem;border-radius:999px;font-size:.68rem;font-weight:700;background:rgba(167,139,250,.12);border:1px solid rgba(167,139,250,.28);color:#c4b5fd}
.live-tag{display:inline-flex;align-items:center;gap:.3rem;padding:.22rem .65rem;border-radius:999px;font-size:.68rem;font-weight:700;background:rgba(34,197,94,.1);border:1px solid rgba(34,197,94,.22);color:#4ade80}

/* ── Search input ── */
.search-wrap{position:relative}
.search-wrap svg{position:absolute;left:1rem;top:50%;transform:translateY(-50%);color:var(--w40);pointer-events:none}
html[dir=rtl] .search-wrap svg{left:auto;right:1rem}
.search-wrap input{padding-inline-start:2.8rem}

/* ── Premium banner ── */
.prem-banner{
  border-radius:1.1rem;overflow:hidden;
  background:linear-gradient(135deg,rgba(251,191,36,.12),rgba(245,158,11,.06));
  border:1px solid rgba(251,191,36,.25);
  padding:1rem 1.25rem;
}

/* ── Apply modal ── */
.mwrap{position:fixed;inset:0;z-index:200;display:none;align-items:center;justify-content:center;padding:1rem;background:rgba(0,0,0,.72);backdrop-filter:blur(14px)}
.mwrap.open{display:flex}
.mbox{background:var(--bg2);border:1px solid var(--ta20);border-radius:1.25rem;width:100%;max-width:500px;max-height:92vh;overflow-y:auto;animation:fadeup .2s ease both;box-shadow:0 36px 72px rgba(0,0,0,.5)}
html.light .mbox{background:#fff}

/* company avatar */
.co-av{width:44px;height:44px;border-radius:.85rem;display:flex;align-items:center;justify-content:center;font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:.9rem;flex-shrink:0;border:1px solid var(--ta15)}


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

/* ── Mobile filter popup ── */
#filter-overlay{
  position:fixed;inset:0;z-index:9995;
  background:rgba(0,0,0,.7);
  display:none;align-items:flex-end;justify-content:center;
  backdrop-filter:blur(6px);-webkit-backdrop-filter:blur(6px);
}
#filter-overlay.open{display:flex}
#filter-sheet{
  width:100%;max-width:560px;
  max-height:90vh;overflow-y:auto;
  border-radius:1.5rem 1.5rem 0 0;
  background:var(--bg2);
  border:1px solid var(--ta15);
  border-bottom:none;
  padding:1.5rem 1.25rem 2rem;
  transform:translateY(100%);
  transition:transform .3s cubic-bezier(.22,1,.36,1);
}
#filter-sheet.open{transform:translateY(0)}
html.light #filter-sheet{background:#ffffff;border-color:rgba(0,212,184,.2)}
.filter-sheet-handle{
  width:36px;height:4px;border-radius:999px;
  background:var(--ta20);margin:0 auto 1.25rem;
}
/* Filter FAB - always visible on screens < lg */
@media(max-width:1023px){
  aside{ display:none !important; }
}
@media(min-width:1024px){
  #filter-fab{ display:none !important; }
}
#filter-fab{
  display:flex;
  align-items:center;gap:.6rem;
  padding:.55rem 1.1rem;border-radius:999px;
  border:1px solid var(--ta20);background:rgba(5,14,26,.85);
  font-size:.82rem;font-weight:600;color:var(--tl);
  cursor:pointer;transition:all .18s;
  position:relative;white-space:nowrap;flex-shrink:0;
}
#filter-fab:hover{background:var(--ta12);border-color:var(--ta30)}
html.light #filter-fab{background:#fff;border-color:rgba(0,212,184,.25)}
#filter-fab-count{
  display:none;
  position:absolute;top:-5px;inset-inline-end:-5px;
  width:18px;height:18px;border-radius:50%;
  background:var(--t);color:#020e18;
  font-size:.58rem;font-weight:800;
  align-items:center;justify-content:center;
}
#filter-fab-count.show{display:flex}
html.light #filter-fab{background:#fff;border-color:rgba(0,212,184,.25)}
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
      <a href="hc-jobs.html" class="nav-btn font-semibold" style="color:var(--tl)" data-en="Jobs" data-ar="الوظائف">الوظائف</a>

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

<!-- ══ HERO ══ -->
<section class="relative pt-28 pb-14 overflow-hidden" style="background:var(--bg2)">
  <div class="linegrid absolute inset-0 opacity-30 pointer-events-none"></div>
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse 55% 60% at 85% 50%,rgba(0,212,184,.07),transparent 60%);pointer-events:none"></div>
  <div class="relative z-10 max-w-[1280px] mx-auto px-5">
    <div class="grid grid-cols-1 lg:grid-cols-[1fr,380px] gap-10 items-center">
      <div>
        <div class="sec-eyebrow mb-4" data-en="Your Next Career Step" data-ar="خطوتك التالية في مسيرتك">Your Next Career Step</div>
        <h1 class="font-display font-extrabold tracking-tight mb-4" style="font-size:clamp(2.2rem,4vw,3.2rem);color:var(--w)">
          <span data-en="Your first step toward" data-ar="خطوتك الأولى نحو">Your first step toward</span><br>
          <span class="grad" data-en="a job you love." data-ar="عمل تحبه.">a job you love.</span>
        </h1>
        <p class="text-base leading-relaxed mb-6 max-w-xl" style="color:var(--w60)"
           data-en="Every skill you earn on HalaCareer unlocks real job opportunities. The more you learn, the better your match score — and the more companies compete for you."
           data-ar="كل مهارة تكسبها على هلا كارير تفتح فرص عمل حقيقية. كلما تعلمت أكثر، ارتفعت نسبة مطابقتك — وزادت الشركات المتنافسة عليك.">
          Every skill you earn on HalaCareer unlocks real job opportunities. The more you learn, the better your match score — and the more companies compete for you.
        </p>

        <!-- Duolingo milestone pills -->
        <div class="flex flex-wrap gap-3 mb-6">
          <div class="ms-pill" style="border-color:rgba(0,212,184,.25);background:rgba(0,212,184,.07)">
            <div class="text-xl">💼</div>
            <div class="font-display font-extrabold text-xl grad leading-none">1,200+</div>
            <div class="text-[.58rem] font-semibold" style="color:var(--w40)" data-en="Active Jobs" data-ar="وظيفة نشطة">Active Jobs</div>
          </div>
          <div class="ms-pill" style="border-color:rgba(251,191,36,.22);background:rgba(251,191,36,.06)">
            <div class="text-xl">🏢</div>
            <div class="font-display font-extrabold text-xl leading-none" style="color:#fbbf24">340+</div>
            <div class="text-[.58rem] font-semibold" style="color:var(--w40)" data-en="Hiring Companies" data-ar="شركة توظيف">Hiring Companies</div>
          </div>
          <div class="ms-pill" style="border-color:rgba(34,197,94,.22);background:rgba(34,197,94,.06)">
            <div class="text-xl">🎯</div>
            <div class="font-display font-extrabold text-xl leading-none" style="color:#4ade80">82%</div>
            <div class="text-[.58rem] font-semibold" style="color:var(--w40)" data-en="Match Accuracy" data-ar="دقة التطابق">Match Accuracy</div>
          </div>
          <div class="ms-pill" style="border-color:rgba(167,139,250,.22);background:rgba(167,139,250,.06)">
            <div class="text-xl">⚡</div>
            <div class="font-display font-extrabold text-xl leading-none" style="color:#c4b5fd">48h</div>
            <div class="text-[.58rem] font-semibold" style="color:var(--w40)" data-en="Avg. Response" data-ar="متوسط الرد">Avg. Response</div>
          </div>
        </div>

        <!-- Social proof -->
        <div class="flex flex-wrap items-center gap-3">
          <div class="flex -space-x-2 rtl:space-x-reverse">
            <div class="w-8 h-8 rounded-full border-2 flex items-center justify-center text-[.6rem] font-bold" style="background:linear-gradient(135deg,#2de0ca,#009e85);color:rgba(0,0,0,.65);border-color:var(--bg2)">MH</div>
            <div class="w-8 h-8 rounded-full border-2 flex items-center justify-center text-[.6rem] font-bold" style="background:linear-gradient(135deg,#fde68a,#f59e0b);color:rgba(0,0,0,.65);border-color:var(--bg2)">SK</div>
            <div class="w-8 h-8 rounded-full border-2 flex items-center justify-center text-[.6rem] font-bold" style="background:linear-gradient(135deg,#c4b5fd,#7c3aed);color:rgba(0,0,0,.65);border-color:var(--bg2)">ON</div>
          </div>
          <span class="text-sm" style="color:var(--w60)">
            <span data-en="Join " data-ar="انضم مع ">Join </span><b style="color:var(--w)">8,400+</b>
            <span data-en=" learners who found jobs through HalaCareer" data-ar=" متعلم وجدوا وظائف عبر هلا كارير"> learners who found jobs through HalaCareer</span>
          </span>
          <span class="live-tag"><span class="w-1.5 h-1.5 rounded-full bg-green-400" style="animation:pulse-dot 2s ease-in-out infinite"></span><span data-en="156 applied today" data-ar="156 تقدّموا اليوم">156 applied today</span></span>
        </div>
      </div>

      <!-- Right: Upgrade premium + how it works -->
      <div class="hidden lg:flex flex-col gap-3">
        <!-- Premium upgrade -->
        <div class="prem-banner">
          <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 rounded-xl flex items-center justify-center text-xl" style="background:rgba(251,191,36,.12);border:1px solid rgba(251,191,36,.22)">⭐</div>
            <div>
              <div class="font-display font-bold text-sm" style="color:var(--w)" data-en="Premium Members Get Hired Faster" data-ar="الأعضاء البريميم يُوظَّفون أسرع">Premium Members Get Hired Faster</div>
              <div class="text-xs" style="color:var(--w60)" data-en="Your application appears first in every company's inbox." data-ar="طلبك يظهر أولاً في بريد كل شركة.">Your application appears first in every company's inbox.</div>
            </div>
          </div>
          <div class="grid grid-cols-3 gap-2 mb-3">
            <div class="rounded-lg p-2 text-center" style="background:rgba(251,191,36,.08);border:1px solid rgba(251,191,36,.15)">
              <div class="font-display font-bold text-base" style="color:#fbbf24">3×</div>
              <div class="text-[.56rem]" style="color:var(--w40)" data-en="More views" data-ar="مشاهدات">More views</div>
            </div>
            <div class="rounded-lg p-2 text-center" style="background:rgba(251,191,36,.08);border:1px solid rgba(251,191,36,.15)">
              <div class="font-display font-bold text-base" style="color:#fbbf24">⚡</div>
              <div class="text-[.56rem]" style="color:var(--w40)" data-en="Priority inbox" data-ar="بريد أولوية">Priority inbox</div>
            </div>
            <div class="rounded-lg p-2 text-center" style="background:rgba(251,191,36,.08);border:1px solid rgba(251,191,36,.15)">
              <div class="font-display font-bold text-base" style="color:#fbbf24">🔓</div>
              <div class="text-[.56rem]" style="color:var(--w40)" data-en="All jobs" data-ar="كل الوظائف">All jobs</div>
            </div>
          </div>
          <button class="w-full py-2.5 text-sm font-bold rounded-xl" style="background:linear-gradient(135deg,#fbbf24,#f59e0b);color:#020e18" data-en="Upgrade to Premium — 99 EGP/mo" data-ar="ترقية للبريميم — 99 EGP/شهر">Upgrade to Premium — 99 EGP/mo</button>
        </div>
        <!-- How matching works -->
        <div class="hc-card p-5" style="transform:none !important">
          <div class="font-display font-bold text-sm mb-4" style="color:var(--w)" data-en="How Your Match Score Works" data-ar="كيف تعمل نسبة التطابق">How Your Match Score Works</div>
          <div class="flex flex-col gap-3">
            <div class="flex items-center gap-3">
              <div class="w-8 h-8 rounded-xl flex items-center justify-center shrink-0 text-sm font-bold" style="background:rgba(0,212,184,.12);border:1px solid rgba(0,212,184,.25);color:var(--tl)">1</div>
              <div class="text-xs" style="color:var(--w60)" data-en="Complete diplomas & courses → skills verified" data-ar="أكمل الدبلومات والكورسات → مهارات موثّقة">Complete diplomas & courses → skills verified</div>
            </div>
            <div class="flex items-center gap-3">
              <div class="w-8 h-8 rounded-xl flex items-center justify-center shrink-0 text-sm font-bold" style="background:rgba(251,191,36,.1);border:1px solid rgba(251,191,36,.25);color:#fbbf24">2</div>
              <div class="text-xs" style="color:var(--w60)" data-en="System matches your skills to job requirements" data-ar="النظام يطابق مهاراتك مع متطلبات الوظيفة">System matches your skills to job requirements</div>
            </div>
            <div class="flex items-center gap-3">
              <div class="w-8 h-8 rounded-xl flex items-center justify-center shrink-0 text-sm font-bold" style="background:rgba(34,197,94,.1);border:1px solid rgba(34,197,94,.25);color:#4ade80">3</div>
              <div class="text-xs" style="color:var(--w60)" data-en="Apply with confidence — your credentials are verified" data-ar="قدّم بثقة — مؤهلاتك موثّقة">Apply with confidence — your credentials are verified</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ GAMIFICATION TICKER ══ -->
<div style="background:var(--bg2);border-bottom:1px solid var(--ta12)">
  <div class="max-w-[1280px] mx-auto px-5 py-3">
    <div class="gticker">
      <div class="gticker-item">
        <span>🔥</span>
        <span class="text-xs font-bold" style="color:var(--w)">24</span>
        <span class="text-xs" style="color:var(--w40)" data-en="new jobs today" data-ar="وظيفة جديدة اليوم">new jobs today</span>
      </div>
      <div class="gticker-sep"></div>
      <div class="gticker-item">
        <span class="w-2 h-2 rounded-full bg-green-400" style="animation:pulse-dot 2s ease-in-out infinite"></span>
        <span class="text-xs" style="color:var(--w40)" data-en="Latest: " data-ar="آخر وظيفة: ">Latest: </span>
        <span class="text-xs font-bold" style="color:var(--w)" data-en="Sales Manager @ Savills — 2h ago" data-ar="مدير مبيعات @ Savills — منذ ساعتين">Sales Manager @ Savills — 2h ago</span>
      </div>
      <div class="gticker-sep"></div>
      <div class="gticker-item">
        <span>🏢</span>
        <span class="text-xs font-bold" style="color:var(--w)">340+</span>
        <span class="text-xs" style="color:var(--w40)" data-en="verified companies hiring" data-ar="شركة موثّقة توظّف">verified companies hiring</span>
      </div>
      <div class="gticker-sep"></div>
      <div class="gticker-item">
        <span>⭐</span>
        <span class="text-xs" style="color:var(--w40)" data-en="Top match this week: " data-ar="أعلى تطابق هذا الأسبوع: ">Top match this week: </span>
        <span class="text-xs font-bold" style="color:var(--tl)" data-en="Real Estate Specialist — 96%" data-ar="أخصائي عقارات — 96%">Real Estate Specialist — 96%</span>
      </div>
    </div>
  </div>
</div>

<!-- ══ MAIN CONTENT ══ -->
<div class="max-w-[1280px] mx-auto px-5 py-8">
  <div class="grid grid-cols-1 lg:grid-cols-[260px,1fr] gap-8">

    <!-- ── SIDEBAR FILTERS ── -->
    <aside>
      <div class="sidebar-sticky">
        <div class="rounded-2xl p-5" style="background:var(--bg2);border:1px solid var(--ta12)">
          <div class="flex items-center justify-between mb-5">
            <div class="font-display font-bold text-sm" style="color:var(--w)" data-en="Filters" data-ar="الفلاتر">Filters</div>
            <button onclick="resetFilters()" class="text-xs font-semibold" style="color:var(--t)" data-en="Reset all" data-ar="إعادة تعيين">Reset all</button>
          </div>

      <div class="filter-group">
        <span class="filter-label" data-en="Job Level" data-ar="المستوى الوظيفي">Job Level</span>
        <div class="filter-opt on" data-filter="level" data-val="all" onclick="setFilter(this)"><div class="fo-radio on"></div><span data-en="All Levels" data-ar="كل المستويات">All Levels</span></div><div class="filter-opt " data-filter="level" data-val="Entry" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Fresh Grad" data-ar="حديث تخرج">Fresh Grad</span></div><div class="filter-opt " data-filter="level" data-val="Junior" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Junior (1–5 yrs)" data-ar="مبتدئ (1–5 سنوات)">Junior (1–5 yrs)</span></div><div class="filter-opt " data-filter="level" data-val="Mid" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Mid (5–10 yrs)" data-ar="متوسط (5–10 سنوات)">Mid (5–10 yrs)</span></div><div class="filter-opt " data-filter="level" data-val="Senior" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Senior (10–20 yrs)" data-ar="متقدم (10–20 سنة)">Senior (10–20 yrs)</span></div>
      </div>
      <div class="filter-group">
        <span class="filter-label" data-en="Sector" data-ar="القطاع">Sector</span>
        <div class="filter-opt on" data-filter="sector" data-val="all" onclick="setFilter(this)"><div class="fo-radio on"></div><span data-en="All Sectors" data-ar="كل القطاعات">All Sectors</span></div><div class="filter-opt " data-filter="sector" data-val="Sales" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Sales & Marketing" data-ar="مبيعات وتسويق">Sales & Marketing</span></div><div class="filter-opt " data-filter="sector" data-val="Real Estate" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Real Estate" data-ar="العقارات">Real Estate</span></div><div class="filter-opt " data-filter="sector" data-val="Languages" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Languages" data-ar="اللغات">Languages</span></div><div class="filter-opt " data-filter="sector" data-val="Teaching" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Teaching / Education" data-ar="تعليم">Teaching / Education</span></div><div class="filter-opt " data-filter="sector" data-val="HR" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Human Resources" data-ar="الموارد البشرية">Human Resources</span></div><div class="filter-opt " data-filter="sector" data-val="Logistics" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Logistics & Ops" data-ar="لوجستيات">Logistics & Ops</span></div><div class="filter-opt " data-filter="sector" data-val="Training" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Corporate Training" data-ar="التدريب">Corporate Training</span></div><div class="filter-opt " data-filter="sector" data-val="Marketing" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Marketing" data-ar="التسويق">Marketing</span></div>
      </div>
      <div class="filter-group">
        <span class="filter-label" data-en="Work Type" data-ar="نوع العمل">Work Type</span>
        <div class="filter-opt on" data-filter="type" data-val="all" onclick="setFilter(this)"><div class="fo-radio on"></div><span data-en="All Types" data-ar="كل الأنواع">All Types</span></div><div class="filter-opt " data-filter="type" data-val="full" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Full-time" data-ar="دوام كامل">Full-time</span></div><div class="filter-opt " data-filter="type" data-val="remote" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Remote" data-ar="عن بعد">Remote</span></div><div class="filter-opt " data-filter="type" data-val="hybrid" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Hybrid" data-ar="هجين">Hybrid</span></div><div class="filter-opt " data-filter="type" data-val="part" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Part-time" data-ar="دوام جزئي">Part-time</span></div>
      </div>
      <div class="filter-group">
        <span class="filter-label" data-en="Location" data-ar="الموقع">Location</span>
        <div class="filter-opt on" data-filter="loc" data-val="all" onclick="setFilter(this)"><div class="fo-radio on"></div><span data-en="All Locations" data-ar="كل المواقع">All Locations</span></div><div class="filter-opt " data-filter="loc" data-val="Cairo" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Cairo" data-ar="القاهرة">Cairo</span></div><div class="filter-opt " data-filter="loc" data-val="New Cairo" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="New Cairo" data-ar="القاهرة الجديدة">New Cairo</span></div><div class="filter-opt " data-filter="loc" data-val="Alexandria" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Alexandria" data-ar="الإسكندرية">Alexandria</span></div><div class="filter-opt " data-filter="loc" data-val="Remote" onclick="setFilter(this)"><div class="fo-radio "></div><span data-en="Remote" data-ar="عن بعد">Remote</span></div>
      </div>
        </div>
      </div>
    </aside>

    <!-- ── JOBS AREA ── -->
    <div class="min-w-0">

      <!-- Search + sort row -->
      <div class="flex flex-col sm:flex-row gap-3 mb-6">
        <!-- Mobile filter button -->
        <button id="filter-fab" onclick="openFilterSheet()">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="6" x2="20" y2="6"/><line x1="8" y1="12" x2="16" y2="12"/><line x1="11" y1="18" x2="13" y2="18"/></svg>
          <span data-en="Filters" data-ar="الفلاتر">الفلاتر</span>
          <div id="filter-fab-count"></div>
        </button>
        <div class="search-wrap flex-1">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
          <input class="hc-input" id="job-search" data-en="Search by title or company..." data-ar="ابحث بالمسمى أو الشركة..." placeholder="Search by title or company...">
        </div>
        <div class="flex items-center gap-2">
          <span class="text-xs shrink-0" style="color:var(--w40)" data-en="Sort:" data-ar="ترتيب:">Sort:</span>
          <div class="flex gap-1.5">
            <span class="chip on text-xs" data-en="Best Match" data-ar="الأعلى تطابقاً">Best Match</span>
            <span class="chip text-xs" data-en="Newest" data-ar="الأحدث">Newest</span>
            <span class="chip text-xs" data-en="Featured" data-ar="المميزة">Featured</span>
          </div>
        </div>
      </div>

      <!-- Results count -->
      <div class="flex items-center justify-between mb-5">
        <div class="text-sm" style="color:var(--w60)">
          <span class="font-bold" style="color:var(--w)" id="job-count">12</span>
          <span data-en=" jobs found" data-ar=" وظيفة"> jobs found</span>
        </div>
        <div class="flex items-center gap-2 text-xs" style="color:var(--w40)">
          <span>🔒</span>
          <span data-en="Some jobs require course completion to unlock" data-ar="بعض الوظائف تتطلب إكمال كورس لفتحها">Some jobs require course completion to unlock</span>
        </div>
      </div>

      <!-- Job grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4" id="jobs-grid">

      <article class="job-card featured p-5" data-sector="Sales" data-type="full" data-level="Senior" data-loc="New Cairo" data-feat="1">
        <span class="absolute top-3 end-3 text-[.58rem] font-bold px-2 py-0.5 rounded-full" style="background:rgba(251,191,36,.15);border:1px solid rgba(251,191,36,.28);color:#fbbf24" data-en="⭐ Featured" data-ar="⭐ مميزة">⭐ Featured</span>
        <!-- Header row -->
        <div class="flex items-start gap-3 mb-4">
          <div class="co-av" style="background:linear-gradient(135deg,#2de0ca,#009e85);color:rgba(0,0,0,.65)">SE</div>
          <div class="flex-1 min-w-0">
            <h3 class="font-display font-bold text-sm leading-tight mb-0.5" style="color:var(--w)" data-en="Senior Sales Manager" data-ar="مدير مبيعات أول">Senior Sales Manager</h3>
            <div class="flex flex-wrap items-center gap-2 text-xs" style="color:var(--w40)">
              <span class="font-semibold" style="color:var(--w60)" data-en="Savills Egypt" data-ar="Savills مصر">Savills Egypt</span>
              <span>·</span>
              <span data-en="New Cairo" data-ar="القاهرة الجديدة">New Cairo</span>
              <span>·</span>
              <span data-en="2h ago" data-ar="منذ ساعتين">2h ago</span>
            </div>
          </div>
        </div>

        <!-- Badges -->
        <div class="flex flex-wrap items-center gap-2 mb-4">
          <span class="badge-full" data-en="Full-time" data-ar="دوام كامل">Full-time</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Senior" data-ar="متقدم">Senior</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Sales" data-ar="مبيعات">Sales</span>
          <span class="text-[.6rem] font-bold px-2 py-0.5 rounded-full" style="background:rgba(0,212,184,.1);border:1px solid rgba(0,212,184,.25);color:var(--tl)" data-en="⚡ Premium Priority" data-ar="⚡ أولوية بريميم">⚡ Premium Priority</span>
        </div>

        <!-- Description -->
        <p class="text-xs leading-relaxed mb-4 flex-1" style="color:var(--w60)" data-en="Lead a 20+ person sales team. Minimum 7 years in B2B sales required." data-ar="قيادة فريق مبيعات 20+ شخص. يُشترط 7 سنوات خبرة في مبيعات B2B.">Lead a 20+ person sales team. Minimum 7 years in B2B sales required.</p>
        <!-- CTA -->
        <a href="#" class="btn-g w-full py-2.5 mt-4 border-t" style="border-color:var(--ta12) !important;border-radius:0 0 .85rem .85rem;padding-top:.85rem" text-sm font-semibold flex items-center justify-center gap-2" data-en="View Job →" data-ar="عرض الوظيفة ←">عرض الوظيفة ←</a>
      </article>

      <article class="job-card featured p-5" data-sector="Real Estate" data-type="full" data-level="Junior" data-loc="Cairo" data-feat="1">
        <span class="absolute top-3 end-3 text-[.58rem] font-bold px-2 py-0.5 rounded-full" style="background:rgba(251,191,36,.15);border:1px solid rgba(251,191,36,.28);color:#fbbf24" data-en="⭐ Featured" data-ar="⭐ مميزة">⭐ Featured</span>
        <!-- Header row -->
        <div class="flex items-start gap-3 mb-4">
          <div class="co-av" style="background:linear-gradient(135deg,#fde68a,#f59e0b);color:rgba(0,0,0,.65)">MV</div>
          <div class="flex-1 min-w-0">
            <h3 class="font-display font-bold text-sm leading-tight mb-0.5" style="color:var(--w)" data-en="Real Estate Sales Specialist" data-ar="أخصائي مبيعات عقارية">Real Estate Sales Specialist</h3>
            <div class="flex flex-wrap items-center gap-2 text-xs" style="color:var(--w40)">
              <span class="font-semibold" style="color:var(--w60)" data-en="Mountain View" data-ar="Mountain View">Mountain View</span>
              <span>·</span>
              <span data-en="Cairo" data-ar="القاهرة">Cairo</span>
              <span>·</span>
              <span data-en="5h ago" data-ar="منذ 5 ساعات">5h ago</span>
            </div>
          </div>
        </div>

        <!-- Badges -->
        <div class="flex flex-wrap items-center gap-2 mb-4">
          <span class="badge-full" data-en="Full-time" data-ar="دوام كامل">Full-time</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Junior" data-ar="مبتدئ">Junior</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Real Estate" data-ar="عقارات">Real Estate</span>
          
        </div>

        <!-- Description -->
        <p class="text-xs leading-relaxed mb-4 flex-1" style="color:var(--w60)" data-en="Join our growing real estate team. Fresh grads with strong communication welcome." data-ar="انضم لفريق العقارات المتنامي. خريجون بمهارات تواصل قوية مرحب بهم.">Join our growing real estate team. Fresh grads with strong communication welcome.</p>
        <!-- CTA -->
        <a href="#" class="btn-g w-full py-2.5 mt-4 border-t" style="border-color:var(--ta12) !important;border-radius:0 0 .85rem .85rem;padding-top:.85rem" text-sm font-semibold flex items-center justify-center gap-2" data-en="View Job →" data-ar="عرض الوظيفة ←">عرض الوظيفة ←</a>
      </article>

      <article class="job-card p-5" data-sector="Languages" data-type="remote" data-level="Mid" data-loc="Remote" data-feat="0">
        
        <!-- Header row -->
        <div class="flex items-start gap-3 mb-4">
          <div class="co-av" style="background:linear-gradient(135deg,#93c5fd,#3b82f6);color:rgba(0,0,0,.65)">BZ</div>
          <div class="flex-1 min-w-0">
            <h3 class="font-display font-bold text-sm leading-tight mb-0.5" style="color:var(--w)" data-en="English Language Trainer" data-ar="مدرب لغة إنجليزية">English Language Trainer</h3>
            <div class="flex flex-wrap items-center gap-2 text-xs" style="color:var(--w40)">
              <span class="font-semibold" style="color:var(--w60)" data-en="Berlitz Egypt" data-ar="برليتز مصر">Berlitz Egypt</span>
              <span>·</span>
              <span data-en="Remote" data-ar="عن بعد">Remote</span>
              <span>·</span>
              <span data-en="1d ago" data-ar="منذ يوم">1d ago</span>
            </div>
          </div>
        </div>

        <!-- Badges -->
        <div class="flex flex-wrap items-center gap-2 mb-4">
          <span class="badge-remote" data-en="Remote" data-ar="عن بعد">Remote</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Mid" data-ar="متوسط">Mid</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Languages" data-ar="لغات">Languages</span>
          <span class="text-[.6rem] font-bold px-2 py-0.5 rounded-full" style="background:rgba(0,212,184,.1);border:1px solid rgba(0,212,184,.25);color:var(--tl)" data-en="⚡ Premium Priority" data-ar="⚡ أولوية بريميم">⚡ Premium Priority</span>
        </div>

        <!-- Description -->
        <p class="text-xs leading-relaxed mb-4 flex-1" style="color:var(--w60)" data-en="Deliver online English training sessions for corporate clients." data-ar="تقديم جلسات تدريب لغة إنجليزية أونلاين لعملاء الشركات.">Deliver online English training sessions for corporate clients.</p>
        <!-- CTA -->
        <a href="#" class="btn-g w-full py-2.5 mt-4 border-t" style="border-color:var(--ta12) !important;border-radius:0 0 .85rem .85rem;padding-top:.85rem" text-sm font-semibold flex items-center justify-center gap-2" data-en="View Job →" data-ar="عرض الوظيفة ←">عرض الوظيفة ←</a>
      </article>

      <article class="job-card p-5" data-sector="HR" data-type="full" data-level="Senior" data-loc="6th of October" data-feat="0">
        
        <!-- Header row -->
        <div class="flex items-start gap-3 mb-4">
          <div class="co-av" style="background:linear-gradient(135deg,#34d399,#0d9488);color:rgba(0,0,0,.65)">UE</div>
          <div class="flex-1 min-w-0">
            <h3 class="font-display font-bold text-sm leading-tight mb-0.5" style="color:var(--w)" data-en="HR Business Partner" data-ar="شريك أعمال موارد بشرية">HR Business Partner</h3>
            <div class="flex flex-wrap items-center gap-2 text-xs" style="color:var(--w40)">
              <span class="font-semibold" style="color:var(--w60)" data-en="Unilever Egypt" data-ar="يونيليفر مصر">Unilever Egypt</span>
              <span>·</span>
              <span data-en="6th of October" data-ar="السادس من أكتوبر">6th of October</span>
              <span>·</span>
              <span data-en="2d ago" data-ar="منذ يومين">2d ago</span>
            </div>
          </div>
        </div>

        <!-- Badges -->
        <div class="flex flex-wrap items-center gap-2 mb-4">
          <span class="badge-full" data-en="Full-time" data-ar="دوام كامل">Full-time</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Senior" data-ar="متقدم">Senior</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="HR" data-ar="موارد بشرية">HR</span>
          
        </div>

        <!-- Description -->
        <p class="text-xs leading-relaxed mb-4 flex-1" style="color:var(--w60)" data-en="Partner with business leaders to drive people strategy across the organization." data-ar="التعاون مع قيادة الأعمال لدفع استراتيجية الأفراد عبر المؤسسة.">Partner with business leaders to drive people strategy across the organization.</p>
        <!-- CTA -->
        <a href="#" class="btn-g w-full py-2.5 mt-4 border-t" style="border-color:var(--ta12) !important;border-radius:0 0 .85rem .85rem;padding-top:.85rem" text-sm font-semibold flex items-center justify-center gap-2" data-en="View Job →" data-ar="عرض الوظيفة ←">عرض الوظيفة ←</a>
      </article>

      <article class="job-card locked p-5" data-sector="Marketing" data-type="hybrid" data-level="Mid" data-loc="Cairo" data-feat="0">
        
        <!-- Header row -->
        <div class="flex items-start gap-3 mb-4">
          <div class="co-av" style="background:linear-gradient(135deg,#fde68a,#eab308);color:rgba(0,0,0,.65)">SN</div>
          <div class="flex-1 min-w-0">
            <h3 class="font-display font-bold text-sm leading-tight mb-0.5" style="color:var(--w)" data-en="Digital Marketing Specialist" data-ar="أخصائي تسويق رقمي">Digital Marketing Specialist</h3>
            <div class="flex flex-wrap items-center gap-2 text-xs" style="color:var(--w40)">
              <span class="font-semibold" style="color:var(--w60)" data-en="Snap Inc." data-ar="Snap Inc.">Snap Inc.</span>
              <span>·</span>
              <span data-en="Cairo — Hybrid" data-ar="القاهرة — هجين">Cairo — Hybrid</span>
              <span>·</span>
              <span data-en="3d ago" data-ar="منذ 3 أيام">3d ago</span>
            </div>
          </div>
        </div>

        <!-- Badges -->
        <div class="flex flex-wrap items-center gap-2 mb-4">
          <span class="badge-hybrid" data-en="Hybrid" data-ar="هجين">Hybrid</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Mid" data-ar="متوسط">Mid</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Marketing" data-ar="تسويق">Marketing</span>
          
        </div>

        <!-- Description -->
        <p class="text-xs leading-relaxed mb-4 flex-1" style="color:var(--w60)" data-en="Manage performance campaigns across Meta, Google, and TikTok." data-ar="إدارة حملات الأداء عبر Meta وGoogle وTikTok.">Manage performance campaigns across Meta, Google, and TikTok.</p>
        <!-- CTA -->
        <div class="lock-banner" data-en="🔒 Complete Digital Marketing Diploma to unlock this job" data-ar="🔒 أكمل دبلومة التسويق الرقمي لفتح هذه الوظيفة">🔒 Complete Digital Marketing Diploma to unlock</div>
      </article>

      <article class="job-card p-5" data-sector="Teaching" data-type="full" data-level="Entry" data-loc="Cairo" data-feat="0">
        
        <!-- Header row -->
        <div class="flex items-start gap-3 mb-4">
          <div class="co-av" style="background:linear-gradient(135deg,#c4b5fd,#7c3aed);color:rgba(0,0,0,.65)">GE</div>
          <div class="flex-1 min-w-0">
            <h3 class="font-display font-bold text-sm leading-tight mb-0.5" style="color:var(--w)" data-en="K-12 Math Teacher" data-ar="معلم رياضيات K-12">K-12 Math Teacher</h3>
            <div class="flex flex-wrap items-center gap-2 text-xs" style="color:var(--w40)">
              <span class="font-semibold" style="color:var(--w60)" data-en="GEMS Education" data-ar="GEMS Education">GEMS Education</span>
              <span>·</span>
              <span data-en="Cairo" data-ar="القاهرة">Cairo</span>
              <span>·</span>
              <span data-en="3d ago" data-ar="منذ 3 أيام">3d ago</span>
            </div>
          </div>
        </div>

        <!-- Badges -->
        <div class="flex flex-wrap items-center gap-2 mb-4">
          <span class="badge-full" data-en="Full-time" data-ar="دوام كامل">Full-time</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Entry" data-ar="حديث تخرج">Entry</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Teaching" data-ar="تعليم">Teaching</span>
          
        </div>

        <!-- Description -->
        <p class="text-xs leading-relaxed mb-4 flex-1" style="color:var(--w60)" data-en="Full-time math teaching position at an international school in Cairo." data-ar="وظيفة تدريس رياضيات بدوام كامل في مدرسة دولية بالقاهرة.">Full-time math teaching position at an international school in Cairo.</p>
        <!-- CTA -->
        <a href="#" class="btn-g w-full py-2.5 mt-4 border-t" style="border-color:var(--ta12) !important;border-radius:0 0 .85rem .85rem;padding-top:.85rem" text-sm font-semibold flex items-center justify-center gap-2" data-en="View Job →" data-ar="عرض الوظيفة ←">عرض الوظيفة ←</a>
      </article>

      <article class="job-card locked p-5" data-sector="Sales" data-type="remote" data-level="Mid" data-loc="Cairo" data-feat="0">
        
        <!-- Header row -->
        <div class="flex items-start gap-3 mb-4">
          <div class="co-av" style="background:linear-gradient(135deg,#fb923c,#ef4444);color:rgba(0,0,0,.65)">OR</div>
          <div class="flex-1 min-w-0">
            <h3 class="font-display font-bold text-sm leading-tight mb-0.5" style="color:var(--w)" data-en="Sales Operations Analyst" data-ar="محلل عمليات المبيعات">Sales Operations Analyst</h3>
            <div class="flex flex-wrap items-center gap-2 text-xs" style="color:var(--w40)">
              <span class="font-semibold" style="color:var(--w60)" data-en="Oracle EMEA" data-ar="Oracle EMEA">Oracle EMEA</span>
              <span>·</span>
              <span data-en="Cairo — Remote" data-ar="القاهرة — عن بعد">Cairo — Remote</span>
              <span>·</span>
              <span data-en="4d ago" data-ar="منذ 4 أيام">4d ago</span>
            </div>
          </div>
        </div>

        <!-- Badges -->
        <div class="flex flex-wrap items-center gap-2 mb-4">
          <span class="badge-remote" data-en="Remote" data-ar="عن بعد">Remote</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Mid" data-ar="متوسط">Mid</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Sales" data-ar="مبيعات">Sales</span>
          
        </div>

        <!-- Description -->
        <p class="text-xs leading-relaxed mb-4 flex-1" style="color:var(--w60)" data-en="Drive data-driven decisions across the sales team using CRM and BI tools." data-ar="قيادة القرارات المبنية على البيانات عبر فريق المبيعات باستخدام CRM وBI.">Drive data-driven decisions across the sales team using CRM and BI tools.</p>
        <!-- CTA -->
        <div class="lock-banner" data-en="🔒 Complete Business Analytics Diploma to unlock this job" data-ar="🔒 أكمل دبلومة تحليل الأعمال لفتح هذه الوظيفة">🔒 Complete Business Analytics Diploma to unlock</div>
      </article>

      <article class="job-card p-5" data-sector="Real Estate" data-type="full" data-level="Senior" data-loc="New Cairo" data-feat="0">
        
        <!-- Header row -->
        <div class="flex items-start gap-3 mb-4">
          <div class="co-av" style="background:linear-gradient(135deg,#2de0ca,#0d9488);color:rgba(0,0,0,.65)">JL</div>
          <div class="flex-1 min-w-0">
            <h3 class="font-display font-bold text-sm leading-tight mb-0.5" style="color:var(--w)" data-en="Luxury Real Estate Consultant" data-ar="مستشار عقارات فاخرة">Luxury Real Estate Consultant</h3>
            <div class="flex flex-wrap items-center gap-2 text-xs" style="color:var(--w40)">
              <span class="font-semibold" style="color:var(--w60)" data-en="JLL Egypt" data-ar="JLL مصر">JLL Egypt</span>
              <span>·</span>
              <span data-en="New Cairo" data-ar="القاهرة الجديدة">New Cairo</span>
              <span>·</span>
              <span data-en="5d ago" data-ar="منذ 5 أيام">5d ago</span>
            </div>
          </div>
        </div>

        <!-- Badges -->
        <div class="flex flex-wrap items-center gap-2 mb-4">
          <span class="badge-full" data-en="Full-time" data-ar="دوام كامل">Full-time</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Senior" data-ar="متقدم">Senior</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Real Estate" data-ar="عقارات">Real Estate</span>
          <span class="text-[.6rem] font-bold px-2 py-0.5 rounded-full" style="background:rgba(0,212,184,.1);border:1px solid rgba(0,212,184,.25);color:var(--tl)" data-en="⚡ Premium Priority" data-ar="⚡ أولوية بريميم">⚡ Premium Priority</span>
        </div>

        <!-- Description -->
        <p class="text-xs leading-relaxed mb-4 flex-1" style="color:var(--w60)" data-en="Handle high-net-worth client portfolios across premium Cairo developments." data-ar="إدارة محافظ عملاء بثروات عالية في مشاريع القاهرة الراقية.">Handle high-net-worth client portfolios across premium Cairo developments.</p>
        <!-- CTA -->
        <a href="#" class="btn-g w-full py-2.5 mt-4 border-t" style="border-color:var(--ta12) !important;border-radius:0 0 .85rem .85rem;padding-top:.85rem" text-sm font-semibold flex items-center justify-center gap-2" data-en="View Job →" data-ar="عرض الوظيفة ←">عرض الوظيفة ←</a>
      </article>

      <article class="job-card p-5" data-sector="Languages" data-type="part" data-level="Mid" data-loc="Alexandria" data-feat="0">
        
        <!-- Header row -->
        <div class="flex items-start gap-3 mb-4">
          <div class="co-av" style="background:linear-gradient(135deg,#60a5fa,#2563eb);color:rgba(0,0,0,.65)">IF</div>
          <div class="flex-1 min-w-0">
            <h3 class="font-display font-bold text-sm leading-tight mb-0.5" style="color:var(--w)" data-en="French Language Instructor" data-ar="مدرس لغة فرنسية">French Language Instructor</h3>
            <div class="flex flex-wrap items-center gap-2 text-xs" style="color:var(--w40)">
              <span class="font-semibold" style="color:var(--w60)" data-en="Institut Français" data-ar="المعهد الفرنسي">Institut Français</span>
              <span>·</span>
              <span data-en="Alexandria" data-ar="الإسكندرية">Alexandria</span>
              <span>·</span>
              <span data-en="1w ago" data-ar="منذ أسبوع">1w ago</span>
            </div>
          </div>
        </div>

        <!-- Badges -->
        <div class="flex flex-wrap items-center gap-2 mb-4">
          <span class="badge-part" data-en="Part-time" data-ar="دوام جزئي">Part-time</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Mid" data-ar="متوسط">Mid</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Languages" data-ar="لغات">Languages</span>
          
        </div>

        <!-- Description -->
        <p class="text-xs leading-relaxed mb-4 flex-1" style="color:var(--w60)" data-en="Part-time French instruction for adult learners. DALF C1 required." data-ar="تدريس فرنسي جزئي للبالغين. يُشترط DALF C1.">Part-time French instruction for adult learners. DALF C1 required.</p>
        <!-- CTA -->
        <a href="#" class="btn-g w-full py-2.5 mt-4 border-t" style="border-color:var(--ta12) !important;border-radius:0 0 .85rem .85rem;padding-top:.85rem" text-sm font-semibold flex items-center justify-center gap-2" data-en="View Job →" data-ar="عرض الوظيفة ←">عرض الوظيفة ←</a>
      </article>

      <article class="job-card p-5" data-sector="Logistics" data-type="full" data-level="Junior" data-loc="Cairo" data-feat="0">
        
        <!-- Header row -->
        <div class="flex items-start gap-3 mb-4">
          <div class="co-av" style="background:linear-gradient(135deg,#a78bfa,#6366f1);color:rgba(0,0,0,.65)">PG</div>
          <div class="flex-1 min-w-0">
            <h3 class="font-display font-bold text-sm leading-tight mb-0.5" style="color:var(--w)" data-en="Supply Chain Coordinator" data-ar="منسق سلسلة التوريد">Supply Chain Coordinator</h3>
            <div class="flex flex-wrap items-center gap-2 text-xs" style="color:var(--w40)">
              <span class="font-semibold" style="color:var(--w60)" data-en="P&G Egypt" data-ar="P&G مصر">P&G Egypt</span>
              <span>·</span>
              <span data-en="Cairo" data-ar="القاهرة">Cairo</span>
              <span>·</span>
              <span data-en="1w ago" data-ar="منذ أسبوع">1w ago</span>
            </div>
          </div>
        </div>

        <!-- Badges -->
        <div class="flex flex-wrap items-center gap-2 mb-4">
          <span class="badge-full" data-en="Full-time" data-ar="دوام كامل">Full-time</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Junior" data-ar="مبتدئ">Junior</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Logistics" data-ar="لوجستيات">Logistics</span>
          
        </div>

        <!-- Description -->
        <p class="text-xs leading-relaxed mb-4 flex-1" style="color:var(--w60)" data-en="Coordinate supply chain operations. SAP experience preferred." data-ar="تنسيق عمليات سلسلة التوريد. يُفضّل خبرة SAP.">Coordinate supply chain operations. SAP experience preferred.</p>
        <!-- CTA -->
        <a href="#" class="btn-g w-full py-2.5 mt-4 border-t" style="border-color:var(--ta12) !important;border-radius:0 0 .85rem .85rem;padding-top:.85rem" text-sm font-semibold flex items-center justify-center gap-2" data-en="View Job →" data-ar="عرض الوظيفة ←">عرض الوظيفة ←</a>
      </article>

      <article class="job-card p-5" data-sector="Sales" data-type="full" data-level="Mid" data-loc="Cairo" data-feat="0">
        
        <!-- Header row -->
        <div class="flex items-start gap-3 mb-4">
          <div class="co-av" style="background:linear-gradient(135deg,#f472b6,#a855f7);color:rgba(0,0,0,.65)">VZ</div>
          <div class="flex-1 min-w-0">
            <h3 class="font-display font-bold text-sm leading-tight mb-0.5" style="color:var(--w)" data-en="Account Manager — B2B" data-ar="مدير حسابات B2B">Account Manager — B2B</h3>
            <div class="flex flex-wrap items-center gap-2 text-xs" style="color:var(--w40)">
              <span class="font-semibold" style="color:var(--w60)" data-en="Vezeeta" data-ar="فيزيتا">Vezeeta</span>
              <span>·</span>
              <span data-en="Cairo" data-ar="القاهرة">Cairo</span>
              <span>·</span>
              <span data-en="1w ago" data-ar="منذ أسبوع">1w ago</span>
            </div>
          </div>
        </div>

        <!-- Badges -->
        <div class="flex flex-wrap items-center gap-2 mb-4">
          <span class="badge-full" data-en="Full-time" data-ar="دوام كامل">Full-time</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Mid" data-ar="متوسط">Mid</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Sales" data-ar="مبيعات">Sales</span>
          
        </div>

        <!-- Description -->
        <p class="text-xs leading-relaxed mb-4 flex-1" style="color:var(--w60)" data-en="Manage and grow corporate client accounts in the healthcare tech sector." data-ar="إدارة وتنمية حسابات الشركات في قطاع التكنولوجيا الصحية.">Manage and grow corporate client accounts in the healthcare tech sector.</p>
        <!-- CTA -->
        <a href="#" class="btn-g w-full py-2.5 mt-4 border-t" style="border-color:var(--ta12) !important;border-radius:0 0 .85rem .85rem;padding-top:.85rem" text-sm font-semibold flex items-center justify-center gap-2" data-en="View Job →" data-ar="عرض الوظيفة ←">عرض الوظيفة ←</a>
      </article>

      <article class="job-card locked p-5" data-sector="Training" data-type="hybrid" data-level="Senior" data-loc="Cairo" data-feat="0">
        
        <!-- Header row -->
        <div class="flex items-start gap-3 mb-4">
          <div class="co-av" style="background:linear-gradient(135deg,#6ee7b7,#059669);color:rgba(0,0,0,.65)">P&G</div>
          <div class="flex-1 min-w-0">
            <h3 class="font-display font-bold text-sm leading-tight mb-0.5" style="color:var(--w)" data-en="Corporate Trainer — Sales" data-ar="مدرب شركات — مبيعات">Corporate Trainer — Sales</h3>
            <div class="flex flex-wrap items-center gap-2 text-xs" style="color:var(--w40)">
              <span class="font-semibold" style="color:var(--w60)" data-en="Procter & Gamble" data-ar="P&G">Procter & Gamble</span>
              <span>·</span>
              <span data-en="Cairo — Hybrid" data-ar="القاهرة — هجين">Cairo — Hybrid</span>
              <span>·</span>
              <span data-en="2w ago" data-ar="منذ أسبوعين">2w ago</span>
            </div>
          </div>
        </div>

        <!-- Badges -->
        <div class="flex flex-wrap items-center gap-2 mb-4">
          <span class="badge-hybrid" data-en="Hybrid" data-ar="هجين">Hybrid</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Senior" data-ar="متقدم">Senior</span>
          <span class="text-[.62rem] font-semibold px-2 py-0.5 rounded-full" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Training" data-ar="تدريب">Training</span>
          
        </div>

        <!-- Description -->
        <p class="text-xs leading-relaxed mb-4 flex-1" style="color:var(--w60)" data-en="Design and deliver sales training programs across Egypt and North Africa." data-ar="تصميم وتقديم برامج تدريب مبيعات في مصر وشمال أفريقيا.">Design and deliver sales training programs across Egypt and North Africa.</p>
        <!-- CTA -->
        <div class="lock-banner" data-en="🔒 Complete Sales Excellence Diploma to unlock this job" data-ar="🔒 أكمل دبلومة تميز المبيعات لفتح هذه الوظيفة">🔒 Complete Sales Excellence Diploma to unlock</div>
      </article>
      </div>

      <!-- No results -->
      <div id="no-results" class="hidden text-center py-16">
        <div class="text-4xl mb-3">🔍</div>
        <div class="font-display font-bold text-lg mb-2" style="color:var(--w)" data-en="No jobs match your filters" data-ar="لا توجد وظائف تطابق فلاترك">No jobs match your filters</div>
        <div class="text-sm" style="color:var(--w60)" data-en="Try adjusting your filters or search term." data-ar="جرب تغيير الفلاتر أو مصطلح البحث.">Try adjusting your filters or search term.</div>
        <button onclick="resetFilters()" class="btn-p px-6 py-2.5 text-sm font-bold mt-4" data-en="Clear All Filters" data-ar="مسح الفلاتر">Clear All Filters</button>
      </div>

      <!-- Load more -->
      <div class="text-center mt-8">
        <button class="btn-g px-8 py-3 text-sm font-semibold" data-en="Load More Jobs ↓" data-ar="تحميل المزيد ↓">Load More Jobs ↓</button>
      </div>

    </div>
  </div>
</div>

<!-- ══ FOR COMPANIES CTA ══ -->
<section class="py-14" style="background:var(--bg2)">
  <div class="max-w-[1280px] mx-auto px-5">
    <div class="rounded-3xl p-10 lg:p-14 overflow-hidden relative" style="background:linear-gradient(135deg,rgba(0,212,184,.1),rgba(0,158,133,.03));border:1px solid rgba(0,212,184,.2)">
      <div class="linegrid absolute inset-0 opacity-30 pointer-events-none"></div>
      <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
        <div>
          <div class="sec-eyebrow mb-3" data-en="For Companies" data-ar="للشركات">For Companies</div>
          <h2 class="font-display font-extrabold text-3xl mb-3" style="color:var(--w)" data-en="Find pre-qualified talent instantly." data-ar="اعثر على مواهب مؤهّلة على الفور.">Find pre-qualified talent instantly.</h2>
          <p class="text-sm leading-relaxed mb-6" style="color:var(--w60)"
             data-en="HalaCareer verifies every candidate's skills through our diploma and course system. You see real credentials, not just CVs. Post a job and receive ranked applicants — sorted by match score."
             data-ar="هلا كارير تتحقق من مهارات كل مرشح عبر نظام الدبلومات والكورسات. ترى مؤهلات حقيقية لا مجرد CVs. انشر وظيفة واستقبل متقدمين مُرتَّبين بنسبة التطابق.">
            HalaCareer verifies every candidate's skills through our diploma and course system. You see real credentials, not just CVs. Post a job and receive ranked applicants — sorted by match score.
          </p>
          <div class="flex flex-wrap gap-3">
            <a href="hc-companies.html" class="btn-p px-7 py-3 text-sm font-bold" data-en="Post a Job →" data-ar="انشر وظيفة ←">Post a Job →</a>
            <a href="hc-companies.html" class="btn-g px-7 py-3 text-sm" data-en="Learn About Plans" data-ar="اعرف عن الباقات">Learn About Plans</a>
          </div>
        </div>
        <div class="grid grid-cols-3 gap-3">
          <div class="rounded-xl p-4 text-center" style="background:rgba(0,212,184,.08);border:1px solid var(--ta20)">
            <div class="font-display font-extrabold text-2xl grad mb-0.5">340+</div>
            <div class="text-[.6rem]" style="color:var(--w40)" data-en="Companies" data-ar="شركة">Companies</div>
          </div>
          <div class="rounded-xl p-4 text-center" style="background:rgba(0,212,184,.08);border:1px solid var(--ta20)">
            <div class="font-display font-extrabold text-2xl grad mb-0.5">48h</div>
            <div class="text-[.6rem]" style="color:var(--w40)" data-en="Avg. time to hire" data-ar="متوسط وقت التوظيف">Avg. time to hire</div>
          </div>
          <div class="rounded-xl p-4 text-center" style="background:rgba(0,212,184,.08);border:1px solid var(--ta20)">
            <div class="font-display font-extrabold text-2xl grad mb-0.5">Free</div>
            <div class="text-[.6rem]" style="color:var(--w40)" data-en="First job post" data-ar="أول وظيفة">First job post</div>
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

<!-- ══ APPLY MODAL ══ -->
<div class="mwrap" id="apply-modal">
  <div class="mbox">
    <div class="flex items-center justify-between px-5 py-4" style="border-bottom:1px solid var(--ta12)">
      <div>
        <div class="font-display font-bold text-base" style="color:var(--w)" id="apply-title" data-en="Apply for Position" data-ar="التقدم للوظيفة">Apply for Position</div>
        <div class="text-xs mt-0.5" style="color:var(--w40)" id="apply-company">—</div>
      </div>
      <button class="modal-x w-7 h-7 rounded-lg flex items-center justify-center" style="background:var(--ta08);color:var(--w60)">
        <svg class="w-3.5 h-3.5 pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 6L6 18M6 6l12 12"/></svg>
      </button>
    </div>

    <!-- Match score in modal -->
    <div id="apply-match-wrap" class="px-5 py-4" style="border-bottom:1px solid var(--ta12);background:var(--ta08)">
      <div class="flex items-center justify-between mb-1.5">
        
        <span class="text-sm font-extrabold" id="apply-match-pct" style="color:#2de0ca">—</span>
      </div>
      
    </div>

    <div class="p-5 flex flex-col gap-4">
      <div>
        <label class="text-xs font-bold mb-1.5 block" style="color:var(--w60)" data-en="Full Name" data-ar="الاسم الكامل">Full Name</label>
        <input class="hc-input" data-en="Your full name..." data-ar="اسمك الكامل..." placeholder="Your full name...">
      </div>
      <div>
        <label class="text-xs font-bold mb-1.5 block" style="color:var(--w60)" data-en="Email" data-ar="البريد الإلكتروني">Email</label>
        <input type="email" class="hc-input" data-en="your@email.com" data-ar="بريدك@email.com" placeholder="your@email.com">
      </div>
      <div>
        <label class="text-xs font-bold mb-1.5 block" style="color:var(--w60)" data-en="Phone" data-ar="رقم الهاتف">Phone</label>
        <input type="tel" class="hc-input" placeholder="+20 1XX XXX XXXX">
      </div>
      <div>
        <label class="text-xs font-bold mb-1.5 block" style="color:var(--w60)" data-en="Why are you a great fit? (optional)" data-ar="لماذا أنت الأنسب؟ (اختياري)">Why are you a great fit? (optional)</label>
        <textarea class="hc-input" rows="3" style="resize:none" data-en="Tell the company what makes you stand out..." data-ar="أخبر الشركة ما الذي يميزك..." placeholder="Tell the company what makes you stand out..."></textarea>
      </div>
      <!-- XP reward notice -->
      <div class="flex items-center gap-3 p-3 rounded-xl" style="background:rgba(0,212,184,.07);border:1px solid rgba(0,212,184,.15)">
        <span class="text-xl">⚡</span>
        <div>
          <div class="text-xs font-bold" style="color:var(--tl)" data-en="You'll earn XP for applying!" data-ar="ستكسب XP مقابل تقديمك!">You'll earn XP for applying!</div>
          <div class="text-[.65rem]" style="color:var(--w60)" id="apply-xp-note" data-en="+ 100 XP added to your profile" data-ar="+ 100 XP تُضاف لبروفايلك">+ 100 XP added to your profile</div>
        </div>
      </div>
      <button class="btn-p w-full py-3 text-sm font-bold" data-en="Submit Application →" data-ar="أرسل الطلب ←">Submit Application →</button>
      <p class="text-center text-[.62rem]" style="color:var(--w40)" data-en="Your HalaCareer credentials are automatically attached to your application." data-ar="مؤهلاتك على هلا كارير تُرفق تلقائياً مع طلبك.">Your HalaCareer credentials are automatically attached to your application.</p>
    </div>
  </div>
</div>

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
// ── FILTER STATE ──
var activeFilters = {level:'all', sector:'all', type:'all', loc:'all'};

function setFilter(el) {
  var fid = el.getAttribute('data-filter');
  var val = el.getAttribute('data-val');
  // deactivate siblings
  document.querySelectorAll('[data-filter="' + fid + '"]').forEach(function(x) {
    x.classList.remove('on');
    x.querySelector('.fo-radio').classList.remove('on');
  });
  el.classList.add('on');
  el.querySelector('.fo-radio').classList.add('on');
  activeFilters[fid] = val;
  runFilter();
}

function resetFilters() {
  activeFilters = {level:'all', sector:'all', type:'all', loc:'all'};
  document.querySelectorAll('.filter-opt').forEach(function(el) {
    var on = el.getAttribute('data-val') === 'all';
    el.classList.toggle('on', on);
    el.querySelector('.fo-radio').classList.toggle('on', on);
  });
  document.getElementById('job-search').value = '';
  runFilter();
}

function runFilter() {
  var q = document.getElementById('job-search').value.toLowerCase().trim();
  var cards = document.querySelectorAll('.job-card');
  var visible = 0;
  cards.forEach(function(card) {
    var sector  = card.getAttribute('data-sector') || '';
    var type    = card.getAttribute('data-type')   || '';
    var level   = card.getAttribute('data-level')  || '';
    var loc     = card.getAttribute('data-loc')    || '';
    var titleEl = card.querySelector('[data-en]');
    var title   = titleEl ? (titleEl.dataset.en + ' ' + titleEl.dataset.ar).toLowerCase() : '';

    var pass = true;
    if(q && !title.includes(q)) pass = false;
    if(activeFilters.level  !== 'all' && level  !== activeFilters.level)  pass = false;
    if(activeFilters.sector !== 'all' && sector !== activeFilters.sector) pass = false;
    if(activeFilters.type   !== 'all' && type   !== activeFilters.type)   pass = false;
    if(activeFilters.loc    !== 'all' && !loc.toLowerCase().includes(activeFilters.loc.toLowerCase())) pass = false;

    card.style.display = pass ? '' : 'none';
    if(pass) visible++;
  });

  document.getElementById('job-count').textContent = visible;
  document.getElementById('no-results').classList.toggle('hidden', visible > 0);
}

// Debounce search
var sTimer;
document.getElementById('job-search').addEventListener('input', function() {
  clearTimeout(sTimer);
  sTimer = setTimeout(runFilter, 200);
});

// Sort chips
document.querySelectorAll('.chip-group .chip').forEach(function(chip) {
  chip.addEventListener('click', function() {
    document.querySelectorAll('.chip-group .chip').forEach(function(c){ c.classList.remove('on'); });
    chip.classList.add('on');
  });
});
document.querySelectorAll('.chip').forEach(function(chip) {
  chip.addEventListener('click', function() {
    var group = chip.closest('.flex');
    if(group) {
      group.querySelectorAll('.chip').forEach(function(c){ c.classList.remove('on'); });
      chip.classList.add('on');
    }
  });
});

// ── APPLY MODAL ──
var JOB_DATA = {};
JOB_DATA[1] = {title_en:"Senior Sales Manager",title_ar:"مدير مبيعات أول",co_en:"Savills Egypt",co_ar:"Savills مصر",match:92,xp:150,match_color:"#2de0ca"};
JOB_DATA[2] = {title_en:"Real Estate Sales Specialist",title_ar:"أخصائي مبيعات عقارية",co_en:"Mountain View",co_ar:"Mountain View",match:85,xp:100,match_color:"#2de0ca"};
JOB_DATA[3] = {title_en:"English Language Trainer",title_ar:"مدرب لغة إنجليزية",co_en:"Berlitz Egypt",co_ar:"برليتز مصر",match:78,xp:80,match_color:"#4ade80"};
JOB_DATA[4] = {title_en:"HR Business Partner",title_ar:"شريك أعمال موارد بشرية",co_en:"Unilever Egypt",co_ar:"يونيليفر مصر",match:71,xp:120,match_color:"#4ade80"};
JOB_DATA[5] = {title_en:"Digital Marketing Specialist",title_ar:"أخصائي تسويق رقمي",co_en:"Snap Inc.",co_ar:"Snap Inc.",match:55,xp:90,match_color:"#fbbf24"};
JOB_DATA[6] = {title_en:"K-12 Math Teacher",title_ar:"معلم رياضيات K-12",co_en:"GEMS Education",co_ar:"GEMS Education",match:88,xp:70,match_color:"#2de0ca"};
JOB_DATA[7] = {title_en:"Sales Operations Analyst",title_ar:"محلل عمليات المبيعات",co_en:"Oracle EMEA",co_ar:"Oracle EMEA",match:62,xp:110,match_color:"#fbbf24"};
JOB_DATA[8] = {title_en:"Luxury Real Estate Consultant",title_ar:"مستشار عقارات فاخرة",co_en:"JLL Egypt",co_ar:"JLL مصر",match:80,xp:130,match_color:"#4ade80"};
JOB_DATA[9] = {title_en:"French Language Instructor",title_ar:"مدرس لغة فرنسية",co_en:"Institut Français",co_ar:"المعهد الفرنسي",match:76,xp:75,match_color:"#4ade80"};
JOB_DATA[10] = {title_en:"Supply Chain Coordinator",title_ar:"منسق سلسلة التوريد",co_en:"P&G Egypt",co_ar:"P&G مصر",match:68,xp:85,match_color:"#fbbf24"};
JOB_DATA[11] = {title_en:"Account Manager — B2B",title_ar:"مدير حسابات B2B",co_en:"Vezeeta",co_ar:"فيزيتا",match:83,xp:95,match_color:"#4ade80"};
JOB_DATA[12] = {title_en:"Corporate Trainer — Sales",title_ar:"مدرب شركات — مبيعات",co_en:"Procter & Gamble",co_ar:"P&G",match:60,xp:140,match_color:"#fbbf24"};

function openApply(id) {
  var d = JOB_DATA[id];
  if(!d) return;
  var t = document.getElementById('apply-title');
  var c = document.getElementById('apply-company');
  var mp = document.getElementById('apply-match-pct');
  var mb = document.getElementById('apply-match-bar');
  var xn = document.getElementById('apply-xp-note');
  if(t){ t.dataset.en = 'Apply — ' + d.title_en; t.dataset.ar = 'التقديم — ' + d.title_ar; t.textContent = isEn ? t.dataset.en : t.dataset.ar; }
  if(c){ c.dataset.en = d.co_en; c.dataset.ar = d.co_ar; c.textContent = isEn ? d.co_en : d.co_ar; }
  if(mp){ mp.textContent = d.match + '%'; mp.style.color = d.match_color; }
  if(mb){ mb.style.width = d.match + '%'; mb.style.background = d.match_color; }
  if(xn){ xn.dataset.en = '+ ' + d.xp + ' XP added to your profile'; xn.dataset.ar = '+ ' + d.xp + ' XP تُضاف لبروفايلك'; xn.textContent = isEn ? xn.dataset.en : xn.dataset.ar; }
  document.getElementById('apply-modal').classList.add('open');
  document.body.style.overflow = 'hidden';
}

// Modal close
document.querySelectorAll('.mwrap').forEach(function(m) {
  m.addEventListener('click', function(e) { if(e.target===m){ m.classList.remove('open'); document.body.style.overflow=''; } });
});
document.querySelectorAll('.modal-x').forEach(function(btn) {
  btn.addEventListener('click', function() { var m=btn.closest('.mwrap'); if(m){ m.classList.remove('open'); document.body.style.overflow=''; } });
});

// ── NAV SCROLL ──
window.addEventListener('scroll', function() {
  var n = document.getElementById('hc-nav');
  if(!n) return;
  if(window.scrollY > 40){ n.style.background='rgba(3,13,23,.97)'; n.style.boxShadow='0 1px 0 rgba(0,212,184,.12)'; }
  else { n.style.background='rgba(3,13,23,.88)'; n.style.boxShadow=''; }
}, {passive:true});

document.addEventListener('DOMContentLoaded', function() { applyLang(); });
</script>

<!-- ── Mobile Filter Popup ── -->
<div id="filter-overlay" onclick="if(event.target===this)closeFilterSheet()">
  <div id="filter-sheet">
    <div class="filter-sheet-handle"></div>
    <div class="flex items-center justify-between mb-5">
      <div class="font-display font-bold text-base" style="color:var(--w)" data-en="Filters" data-ar="الفلاتر">الفلاتر</div>
      <button onclick="closeFilterSheet()" style="color:var(--w40);background:var(--ta08);border:1px solid var(--ta12);border-radius:.5rem;padding:.35rem .65rem;font-size:.75rem" data-en="Close" data-ar="إغلاق">إغلاق</button>
    </div>
    <!-- Cloned filter content (JS will copy from sidebar) -->
    <div id="filter-sheet-content"></div>
    <div class="flex gap-3 mt-5 pt-4" style="border-top:1px solid var(--ta12)">
      <button onclick="resetFilters();updateFabCount()" class="btn-g flex-1 py-2.5 text-sm" data-en="Reset" data-ar="إعادة تعيين">إعادة تعيين</button>
      <button onclick="closeFilterSheet()" class="btn-p flex-1 py-2.5 text-sm font-bold" data-en="Apply Filters →" data-ar="تطبيق الفلاتر ←">تطبيق الفلاتر ←</button>
    </div>
  </div>
</div>

<script>
// ── Mobile Filter Sheet ──
function openFilterSheet(){
  var overlay = document.getElementById('filter-overlay');
  var sheet   = document.getElementById('filter-sheet');
  if(!overlay || !sheet) return;

  // Clone sidebar filter content
  var sidebar = document.querySelector('aside');
  var dest    = document.getElementById('filter-sheet-content');
  if(sidebar && dest){
    dest.innerHTML = sidebar.querySelector('.rounded-2xl').innerHTML;
    // Remove the title row from cloned content (already in sheet header)
    var titleRow = dest.querySelector('.flex.items-center.justify-between');
    if(titleRow) titleRow.remove();
    // Re-wire click handlers on cloned options
    dest.querySelectorAll('.filter-opt').forEach(function(sheetEl){
      var f = sheetEl.getAttribute('data-filter');
      var v = sheetEl.getAttribute('data-val');
      var origEl = document.querySelector('aside .filter-opt[data-filter="'+f+'"][data-val="'+v+'"]');
      // Sync active state
      if(origEl && origEl.classList.contains('on')){
        sheetEl.classList.add('on');
        var r = sheetEl.querySelector('.fo-radio');
        if(r) r.classList.add('on');
      } else {
        sheetEl.classList.remove('on');
        var r = sheetEl.querySelector('.fo-radio');
        if(r) r.classList.remove('on');
      }
      sheetEl.onclick = function(){
        if(origEl) setFilter(origEl);
        updateFabCount();
        // Sync visual state back to sheet
        dest.querySelectorAll('.filter-opt[data-filter="'+f+'"]').forEach(function(el){
          var ov = document.querySelector('aside .filter-opt[data-filter="'+f+'"][data-val="'+el.getAttribute('data-val')+'"]');
          if(ov){
            el.classList.toggle('on', ov.classList.contains('on'));
            var r = el.querySelector('.fo-radio');
            if(r) r.className = ov.querySelector('.fo-radio')?.className || '';
          }
        });
      };
    });
  }

  overlay.classList.add('open');
  requestAnimationFrame(function(){
    sheet.classList.add('open');
  });
  document.body.style.overflow = 'hidden';
}

function closeFilterSheet(){
  var sheet   = document.getElementById('filter-sheet');
  var overlay = document.getElementById('filter-overlay');
  if(!sheet || !overlay) return;
  sheet.classList.remove('open');
  setTimeout(function(){ overlay.classList.remove('open'); }, 300);
  document.body.style.overflow = '';
}

function updateFabCount(){
  var active = document.querySelectorAll('aside .filter-opt.on:not([data-val="all"])').length;
  var cnt = document.getElementById('filter-fab-count');
  if(cnt){
    cnt.textContent = active || '';
    cnt.classList.toggle('show', active > 0);
  }
}
</script>

</body>
</html>