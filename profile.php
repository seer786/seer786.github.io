<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ahmed El-Sayed — Mentor Profile — HalaCareer</title>
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


/* ── Profile-specific ── */
.cover{height:220px;position:relative;overflow:hidden;background:linear-gradient(150deg,#020c16 0%,#041a28 45%,#062820 100%)}
.cover::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 65% 120% at 18% 60%,rgba(0,212,184,.22),transparent 60%),radial-gradient(ellipse 40% 70% at 85% 25%,rgba(0,158,133,.1),transparent 55%)}
.cover-dots{position:absolute;inset:0;background-image:radial-gradient(rgba(0,212,184,.055) 1px,transparent 1px);background-size:36px 36px}
.cover::after{content:'';position:absolute;bottom:0;left:0;right:0;height:60px;background:linear-gradient(to bottom,transparent,var(--bg2))}

/* Avatar */
.av-wrap{width:104px;height:104px;border-radius:50%;padding:3px;background:conic-gradient(#2de0ca 0%,#009e85 50%,#2de0ca 100%);box-shadow:0 0 0 4px rgba(0,212,184,.12),0 8px 32px rgba(0,0,0,.45);position:relative;margin-top:-52px;flex-shrink:0}
.av-inner{width:100%;height:100%;border-radius:50%;display:flex;align-items:center;justify-content:center;font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:2.1rem;background:linear-gradient(135deg,#2de0ca,#009e85);color:rgba(0,0,0,.65)}
.av-dot{position:absolute;bottom:6px;right:6px;width:16px;height:16px;border-radius:50%;background:#22c55e;border:3px solid var(--bg2);animation:pulse-dot 2s ease-in-out infinite}

/* XP */
.xp-track{height:6px;border-radius:999px;background:var(--ta12);overflow:hidden}
.xp-fill{height:100%;border-radius:999px;background:linear-gradient(90deg,#2de0ca,#009e85);transition:width 1s cubic-bezier(.22,1,.36,1)}

/* Sticky nav */
.snav{position:sticky;top:64px;z-index:40;background:rgba(3,13,23,.96);border-bottom:1px solid var(--ta12);backdrop-filter:blur(20px)}
html.light .snav{background:rgba(239,254,250,.96)}
.snav-a{padding:.75rem 1rem;font-size:.8rem;font-weight:600;color:var(--w40);cursor:pointer;white-space:nowrap;border-bottom:2px solid transparent;transition:all .2s;text-decoration:none;display:inline-block}
.snav-a:hover{color:var(--w80)}
.snav-a.on{color:var(--tl);border-bottom-color:var(--t)}

/* Section heading */
.sh{font-family:'Bricolage Grotesque',sans-serif;font-weight:700;font-size:1.1rem;color:var(--w);display:flex;align-items:center;gap:.6rem;padding-bottom:.65rem;border-bottom:1px solid var(--ta12);margin-bottom:1.25rem}
.sh-dot{width:6px;height:6px;border-radius:50%;background:linear-gradient(135deg,#2de0ca,#009e85);flex-shrink:0}

/* Service row */
.srow{display:flex;align-items:center;gap:.9rem;padding:1rem 1.1rem;border-radius:1.1rem;border:1px solid var(--ta12);background:rgba(5,14,26,.88);transition:all .22s;position:relative}
.srow:hover{border-color:rgba(0,212,184,.3);background:rgba(5,14,26,.95)}
.srow.feat{border-color:rgba(0,212,184,.4);background:linear-gradient(135deg,rgba(0,212,184,.07),rgba(5,14,26,.95) 60%)}
.srow.feat::before{content:'';position:absolute;left:0;top:0;bottom:0;width:3px;border-radius:3px 0 0 3px;background:linear-gradient(to bottom,#2de0ca,#009e85)}
html.light .srow{background:#fff;border-color:rgba(0,212,184,.14);box-shadow:0 1px 8px rgba(0,90,80,.06)}
html.light .srow.feat{background:linear-gradient(135deg,rgba(0,212,184,.05),#fff 55%)}
.svc-icon-wrap{width:44px;height:44px;border-radius:.85rem;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all .2s}
.srow:hover .svc-icon-wrap{box-shadow:0 0 14px rgba(0,212,184,.18)}
.svc-price{background:linear-gradient(135deg,#2de0ca,#009e85);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}

/* Resource strip */
.res-strip-item{display:flex;align-items:center;gap:.5rem}
.res-strip-icon{width:26px;height:26px;border-radius:.5rem;display:flex;align-items:center;justify-content:center;background:var(--ta08);border:1px solid var(--ta12);flex-shrink:0}

/* Follower avatars */
.fav{width:34px;height:34px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:.65rem;font-weight:700;flex-shrink:0;border:2.5px solid var(--bg2)}
html.light .fav{border-color:#fff}

/* Community card */
.ccard{border-radius:1.1rem;border:1px solid var(--ta15);background:rgba(5,14,26,.9);overflow:hidden;transition:all .25s}
.ccard:hover{border-color:rgba(0,212,184,.38);transform:translateY(-2px);box-shadow:0 12px 36px rgba(0,80,70,.18)}
html.light .ccard{background:#fff;border-color:rgba(0,212,184,.12);box-shadow:0 2px 10px rgba(0,90,80,.05)}
.ccover{height:90px;overflow:hidden;position:relative}
.cav{width:52px;height:52px;border-radius:.75rem;border:3px solid var(--bg2);margin-top:-26px;margin-inline-start:16px;display:flex;align-items:center;justify-content:center;font-family:'Bricolage Grotesque',sans-serif;font-weight:800;font-size:1.05rem;flex-shrink:0;box-shadow:0 4px 12px rgba(0,0,0,.3);position:relative;z-index:1}
html.light .cav{border-color:#fff}
.cfeed-row{display:flex;align-items:center;gap:.6rem;padding:.55rem .9rem;border-bottom:1px solid var(--ta08)}
.cfeed-row:last-child{border-bottom:none}

/* Achievement */
.ach-item{display:flex;align-items:flex-start;gap:.9rem;padding:1rem 1.1rem;border-radius:1rem;border:1px solid var(--ta12);background:rgba(5,14,26,.65);transition:border-color .2s}
.ach-item:hover{border-color:rgba(0,212,184,.22)}
html.light .ach-item{background:#f8fffe;border-color:rgba(0,212,184,.12)}
.ach-icon{width:44px;height:44px;border-radius:.85rem;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.ach-prog{height:5px;border-radius:999px;background:var(--ta12);overflow:hidden;margin-top:.5rem}
.ach-fill{height:100%;border-radius:999px;background:linear-gradient(90deg,#009e85,#2de0ca);transition:width .9s cubic-bezier(.22,1,.36,1)}

/* Resources grid */
.rgrid{display:grid;grid-template-columns:repeat(auto-fill,minmax(100px,1fr));gap:.85rem}
.ritem{display:flex;flex-direction:column;align-items:center;gap:.5rem;padding:1.1rem .6rem;border-radius:1rem;border:1px solid var(--ta12);background:var(--ta08);text-align:center;transition:all .2s;cursor:default}
.ritem:hover{border-color:rgba(0,212,184,.28);background:var(--ta12);transform:translateY(-1px)}
.ritem-icon{width:40px;height:40px;border-radius:.75rem;display:flex;align-items:center;justify-content:center}
.rcount{font-family:'Bricolage Grotesque',sans-serif;font-size:1.1rem;font-weight:800;color:var(--w)}
.rlabel{font-size:.6rem;font-weight:600;color:var(--w40)}

/* Certificate */
.cert-card{border-radius:1rem;border:1px solid var(--ta12);overflow:hidden;background:rgba(5,14,26,.8);transition:all .2s;cursor:pointer}
.cert-card:hover{border-color:rgba(0,212,184,.3);transform:translateY(-2px);box-shadow:0 8px 24px rgba(0,80,70,.15)}
html.light .cert-card{background:#fff}
.cert-header{height:80px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden}
.cert-header::before{content:'';position:absolute;inset:0;background:radial-gradient(circle at 30% 50%,rgba(255,255,255,.12),transparent 60%)}
.cert-seal{width:52px;height:52px;border-radius:50%;background:rgba(255,255,255,.15);border:2px solid rgba(255,255,255,.25);display:flex;align-items:center;justify-content:center;backdrop-filter:blur(4px)}

/* Badges */
.bgrid{display:grid;grid-template-columns:repeat(auto-fill,minmax(80px,1fr));gap:.75rem}
.bitem{display:flex;flex-direction:column;align-items:center;gap:.4rem;padding:.9rem .4rem;border-radius:.9rem;border:1px solid var(--ta12);background:var(--ta08);cursor:pointer;transition:all .22s;text-align:center}
.bitem:hover:not(.blocked){border-color:rgba(0,212,184,.35);background:var(--ta15);transform:translateY(-1px)}
.bitem.blocked{opacity:.35;cursor:default;filter:grayscale(.4)}
.bemoji{font-size:1.75rem;line-height:1}
.bname{font-size:.58rem;font-weight:700;color:var(--w60);line-height:1.3}

/* Reviews */
.rcard{border:1px solid var(--ta12);border-radius:1rem;padding:1rem 1.1rem;background:rgba(5,14,26,.65);transition:border-color .2s}
.rcard:hover{border-color:rgba(0,212,184,.22)}
html.light .rcard{background:#f8fffe}
.rev-av{width:34px;height:34px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:.65rem;font-weight:700;flex-shrink:0}
.skbar{height:4px;border-radius:999px;background:var(--ta12);overflow:hidden}
.skfill{height:100%;border-radius:999px;background:linear-gradient(90deg,#009e85,#2de0ca)}
.sf{color:var(--tl)}

/* Sidebar */
.sbar{position:sticky;top:calc(64px + 45px)}

/* Modals */
.mwrap{position:fixed;inset:0;z-index:200;display:none;align-items:center;justify-content:center;padding:1rem;background:rgba(0,0,0,.75);backdrop-filter:blur(16px)}
.mwrap.open{display:flex}
.mbox{background:var(--bg2);border:1px solid var(--ta20);border-radius:1.25rem;width:100%;max-width:480px;max-height:92vh;overflow-y:auto;animation:fadeup .2s ease both;box-shadow:0 36px 72px rgba(0,0,0,.5)}
html.light .mbox{background:#fff}

/* Gift / Picker / Steps */
.gitem{display:flex;flex-direction:column;align-items:center;gap:.35rem;padding:.8rem .4rem;border-radius:.85rem;cursor:pointer;border:2px solid transparent;background:var(--ta08);transition:all .2s}
.gitem:hover{border-color:var(--ta30);background:var(--ta12)}
.gitem.on{border-color:var(--t);background:var(--ta15)}
.prow{display:flex;align-items:center;justify-content:space-between;gap:1rem;padding:.8rem .95rem;border-radius:.85rem;cursor:pointer;border:1px solid var(--ta12);transition:all .2s}
.prow:hover{border-color:rgba(0,212,184,.28);background:var(--ta08)}
.prow.on{border-color:rgba(0,212,184,.4);background:var(--ta12)}
.hcr{width:16px;height:16px;border-radius:50%;border:2px solid rgba(255,255,255,.22);display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all .18s}
html.light .hcr{border-color:rgba(6,38,32,.22)}
.hcr.on{border-color:var(--t);background:var(--t)}
.hcr.on::after{content:'';width:6px;height:6px;border-radius:50%;background:#020e18;display:block}
.sc{width:24px;height:24px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:.68rem;font-weight:700;flex-shrink:0;transition:all .2s}
.sc.pend{background:var(--ta08);border:1px solid var(--ta20);color:var(--w60)}
.sc.act{background:var(--ta12);border:1px solid var(--t);color:var(--t)}
.sc.done{background:var(--t);color:#020e18}

</style>
</head><body><!-- Cursor -->
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
        <div class="nav-drop"><a href="hc-diplomas.html" class="nav-drop-item" data-en="Accredited Diplomas" data-ar="الدبلومات المعتمدة"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></div><span>الدبلومات المعتمدة</span></a><a href="hc-mentorship.html" class="nav-drop-item active" data-en="Mentorship" data-ar="الإرشاد"><div class="nav-drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" ><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><span>الإرشاد</span></a></div>
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

<!-- ══ COVER ══ -->
<div class="cover"><div class="cover-dots"></div></div>

<!-- ══ PROFILE HEADER ══ -->
<div style="background:var(--bg2);border-bottom:1px solid var(--ta12)">
  <div class="max-w-[1280px] mx-auto px-5">

    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 pt-0 pb-4">
      <div class="flex flex-col sm:flex-row sm:items-end gap-4">
        <div class="av-wrap">
          <div class="av-inner">AE</div>
          <div class="av-dot"></div>
        </div>
        <div class="flex-1 min-w-0 pt-3 sm:pt-0 sm:pb-1">
          <div class="flex flex-wrap items-center gap-2 mb-1">
            <h1 class="font-display font-extrabold text-xl" style="color:var(--w)" data-en="Ahmed El-Sayed" data-ar="أحمد السيد">Ahmed El-Sayed</h1>
            <span class="text-[.58rem] font-bold px-2 py-0.5 rounded-md flex items-center gap-1" style="background:rgba(0,212,184,.12);border:1px solid rgba(0,212,184,.28);color:var(--tl)">
              <svg class="w-2.5 h-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              Premium
            </span>
            <span class="text-[.58rem] font-bold px-2 py-0.5 rounded-md flex items-center gap-1" style="background:rgba(0,212,184,.1);border:1px solid rgba(0,212,184,.25);color:var(--tl)">
              <svg class="w-2.5 h-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg>
              Verified
            </span>
          </div>
          <div class="text-xs mb-2" style="color:var(--w60)" data-en="Senior Sales Director · Savills Egypt · 12 years experience" data-ar="مدير مبيعات أول · Savills مصر · 12 سنة خبرة">Senior Sales Director · Savills Egypt · 12 years experience</div>
          <div class="flex items-center gap-3 mb-2.5">
            <span class="text-[.62rem] font-bold shrink-0" style="color:var(--tl)" data-en="Lv.12 Expert" data-ar="مستوى 12 خبير">Lv.12 Expert</span>
            <div class="xp-track flex-1 max-w-[180px]"><div class="xp-fill" style="width:72%"></div></div>
            <span class="text-[.6rem]" style="color:var(--w40)">3,600 / 5,000 XP</span>
          </div>
          <div class="flex flex-wrap items-center gap-3 text-xs mb-2">
            <div class="flex items-center gap-1">
              <span class="sf">★★★★★</span>
              <b class="ms-0.5" style="color:var(--w)">4.9</b>
              <span style="color:var(--w40)">(312)</span>
            </div>
            <div class="flex items-center gap-1.5" style="color:var(--w40)">
              <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M8 2v4M16 2v4M3 10h18M3 4h18v16a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4z"/></svg>
              <span data-en="342 sessions" data-ar="342 جلسة">342 sessions</span>
            </div>
            <div class="flex items-center gap-1.5" style="color:var(--w40)">
              <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0zM12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>
              <span>Cairo, Egypt</span>
            </div>
            <div class="flex items-center gap-1.5" style="color:var(--w40)">
              <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M12 8v4l3 3M12 2a10 10 0 1 0 0 20A10 10 0 0 0 12 2z"/></svg>
              <span data-en="Replies ~2h" data-ar="يرد ~ساعتين">Replies ~2h</span>
            </div>
          </div>
          <div class="flex items-center gap-4 text-xs">
            <div class="flex items-center gap-1.5">
              <span class="font-bold" style="color:var(--w)">578</span>
              <span style="color:var(--w40)" data-en="Followers" data-ar="متابع">Followers</span>
            </div>
            <div class="flex items-center gap-1.5">
              <span class="font-bold" style="color:var(--w)">1</span>
              <span style="color:var(--w40)" data-en="Following" data-ar="يتابع">Following</span>
            </div>
            <div class="flex -space-x-2 rtl:space-x-reverse">
              <div class="fav" style="background:linear-gradient(135deg,#2de0ca,#009e85);color:rgba(0,0,0,.65)">MH</div>
              <div class="fav" style="background:linear-gradient(135deg,#a3e635,#65a30d);color:rgba(0,0,0,.65)">SK</div>
              <div class="fav" style="background:linear-gradient(135deg,#fde68a,#ca8a04);color:rgba(0,0,0,.65)">ON</div>
              <div class="fav" style="background:linear-gradient(135deg,#67e8f9,#0891b2);color:rgba(0,0,0,.65)">AT</div>
              <div class="fav text-[.55rem]" style="background:var(--ta12);border:1px solid var(--ta20);color:var(--w60)">+574</div>
            </div>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap items-center gap-2 sm:pb-1">
        <button id="btn-follow" class="flex items-center gap-1.5 px-4 py-2 rounded-xl text-sm font-semibold transition-all" style="background:var(--ta08);border:1px solid var(--ta20);color:var(--w80)" data-en="+ Follow" data-ar="+ تابع">+ Follow</button>
        <button id="btn-gift" class="flex items-center gap-1.5 px-3.5 py-2 rounded-xl text-sm font-semibold" style="background:var(--ta08);border:1px solid var(--ta15);color:var(--tl)">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12v10H4V12M22 7H2v5h20V7zM12 22V7M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7zM12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"/></svg>
          <span data-en="Gift" data-ar="هدية">Gift</span>
        </button>
        <button id="btn-share" class="flex items-center gap-1.5 px-3.5 py-2 rounded-xl text-sm font-semibold" style="background:var(--ta08);border:1px solid var(--ta15);color:var(--w60)">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12v8a2 2 0 002 2h12a2 2 0 002-2v-8M16 6l-4-4-4 4M12 2v13"/></svg>
          <span data-en="Share" data-ar="مشاركة">Share</span>
        </button>
        <button id="btn-book-hero" class="btn-p flex items-center gap-1.5 px-5 py-2 text-sm font-bold">
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4M16 2v4M3 10h18M3 4h18v16a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4z"/></svg>
          <span data-en="Book" data-ar="احجز">Book</span>
        </button>
        <button id="btn-msg-hero" class="btn-g flex items-center gap-1.5 px-4 py-2 text-sm">
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          <span data-en="Message" data-ar="راسله">Message</span>
        </button>
      </div>
    </div>

    <!-- Resource strip -->
    <div class="flex items-center gap-4 pb-4 overflow-x-auto" style="scrollbar-width:none;border-top:1px solid var(--ta12);padding-top:.75rem">
      <div class="res-strip-item shrink-0">
          <div class="res-strip-icon">
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <span class="text-xs font-bold" style="color:var(--w)">2,000</span>
          <span class="text-[.62rem]" style="color:var(--w40)" data-en="Stars" data-ar="نجوم">Stars</span>
        </div>
<div class="w-px h-5 shrink-0" style="background:var(--ta15)"></div>
<div class="res-strip-item shrink-0">
          <div class="res-strip-icon">
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/></svg>
          </div>
          <span class="text-xs font-bold" style="color:var(--w)">4,932</span>
          <span class="text-[.62rem]" style="color:var(--w40)" data-en="Tickets" data-ar="تذاكر">Tickets</span>
        </div>
<div class="w-px h-5 shrink-0" style="background:var(--ta15)"></div>
<div class="res-strip-item shrink-0">
          <div class="res-strip-icon">
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15V22M8 22h8M7.21 15l-2.08 3.07A1 1 0 0 0 6 20h12a1 1 0 0 0 .87-1.5L16.79 15M19 8A7 7 0 1 1 5 8a7 7 0 0 1 14 0z"/></svg>
          </div>
          <span class="text-xs font-bold" style="color:var(--w)">14</span>
          <span class="text-[.62rem]" style="color:var(--w40)" data-en="Gold" data-ar="ذهب">Gold</span>
        </div>
<div class="w-px h-5 shrink-0" style="background:var(--ta15)"></div>
<div class="res-strip-item shrink-0">
          <div class="res-strip-icon">
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 0 1 0 8h-1M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8zM6 1v3M10 1v3M14 1v3"/></svg>
          </div>
          <span class="text-xs font-bold" style="color:var(--w)">7</span>
          <span class="text-[.62rem]" style="color:var(--w40)" data-en="Coffee" data-ar="قهوة">Coffee</span>
        </div>
<div class="w-px h-5 shrink-0" style="background:var(--ta15)"></div>
<div class="res-strip-item shrink-0">
          <div class="res-strip-icon">
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15V22M8 22h8M7.21 15l-2.08 3.07A1 1 0 0 0 6 20h12a1 1 0 0 0 .87-1.5L16.79 15M19 8A7 7 0 1 1 5 8a7 7 0 0 1 14 0z"/></svg>
          </div>
          <span class="text-xs font-bold" style="color:var(--w)">3</span>
          <span class="text-[.62rem]" style="color:var(--w40)" data-en="Silver" data-ar="فضة">Silver</span>
        </div>
<div class="w-px h-5 shrink-0" style="background:var(--ta15)"></div>
<div class="res-strip-item shrink-0">
          <div class="res-strip-icon">
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h12l4 6-10 13L2 9 6 3z"/></svg>
          </div>
          <span class="text-xs font-bold" style="color:var(--w)">0</span>
          <span class="text-[.62rem]" style="color:var(--w40)" data-en="Jewel" data-ar="جوهرة">Jewel</span>
        </div>
    </div>
  </div>
</div>

<!-- ══ STICKY NAV ══ -->
<div class="snav">
  <div class="max-w-[1280px] mx-auto px-5 flex gap-0 overflow-x-auto" style="scrollbar-width:none">
    <a class="snav-a on" href="#sec-services" data-en="Services" data-ar="الخدمات">Services</a>
    <a class="snav-a" href="#sec-community" data-en="Communities" data-ar="المجتمعات">Communities</a>
    <a class="snav-a" href="#sec-about" data-en="About" data-ar="نبذة">About</a>
    <a class="snav-a" href="#sec-reviews" data-en="Reviews" data-ar="التقييمات">Reviews</a>
    <a class="snav-a" href="#sec-achievements" data-en="Achievements" data-ar="الإنجازات">Achievements</a>
    <a class="snav-a" href="#sec-resources" data-en="Resources" data-ar="الموارد">Resources</a>
    <a class="snav-a" href="#sec-certs" data-en="Certificates" data-ar="الشهادات">Certificates</a>
    <a class="snav-a" href="#sec-badges" data-en="Badges" data-ar="الشارات">Badges</a>
  </div>
</div>

<!-- ══ CONTENT ══ -->
<div class="max-w-[1280px] mx-auto px-5 py-8">
  <div class="grid grid-cols-1 lg:grid-cols-[1fr,300px] gap-8">

    <!-- LEFT -->
    <div class="flex flex-col gap-10 min-w-0">

      <!-- ─ SERVICES ─ -->
      <section id="sec-services">
        <div class="sh"><div class="sh-dot"></div><span data-en="Services & Prices" data-ar="الخدمات والأسعار">Services & Prices</span></div>
        <div class="flex items-start gap-2 p-3.5 rounded-xl mb-4 text-xs" style="background:rgba(0,212,184,.05);border:1px solid rgba(0,212,184,.14);color:var(--w60)">
          <svg class="w-4 h-4 shrink-0 mt-0.5" style="color:var(--t)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg>
          <span data-en="Ahmed sets his own services and pricing. Click Details for full info, or Book to reserve." data-ar="أحمد يحدد خدماته وأسعاره بنفسه. اضغط التفاصيل للمعلومات الكاملة أو احجز مباشرة.">Ahmed sets his own services and pricing. Click Details for full info, or Book to reserve.</span>
        </div>

        <div class="srow feat relative mb-3 last:mb-0">
          <span class="absolute top-2 end-2 text-[.56rem] font-bold px-2 py-0.5 rounded-full" style="background:rgba(0,212,184,.15);border:1px solid rgba(0,212,184,.3);color:var(--tl)" data-en="Most Booked" data-ar="الأكثر حجزاً">Most Booked</span>
          <div class="svc-icon-wrap" style="background:rgba(0,212,184,.12);border:1px solid rgba(0,212,184,.2)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M23 7 16 12 23 17 23 7M1 5h15a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H1"/></svg>
          </div>
          <div class="flex-1 min-w-0">
            <div class="font-bold text-sm leading-tight" style="color:var(--w)" data-en="1-on-1 Strategy Session" data-ar="جلسة استراتيجية فردية">1-on-1 Strategy Session</div>
            <div class="text-[.67rem] mt-0.5 flex items-center gap-1.5" style="color:var(--w40)">
              <span data-en="60 min · Video call" data-ar="60 دقيقة · فيديو">60 min · Video call</span>
            </div>
            <div class="text-[.72rem] mt-1.5 leading-snug line-clamp-1" style="color:var(--w60)" data-en="Your pipeline, objections, scripts, and targets — 30-day plan." data-ar="خطك التجاري والاعتراضات والنصوص والأهداف — خطة عمل 30 يوماً.">Your pipeline, objections, scripts, and targets — 30-day plan.</div>
          </div>
          <div class="flex flex-col items-end gap-2 shrink-0">
            <div class="svc-price font-display font-extrabold text-base leading-none grad">250 EGP</div>
            <div class="flex gap-1.5">
              <button class="svc-det text-[.67rem] font-semibold px-2.5 py-1 rounded-lg"
                style="background:var(--ta08);border:1px solid var(--ta15);color:var(--w60)"
                data-id="s1" data-en-n="1-on-1 Strategy Session" data-ar-n="جلسة استراتيجية فردية"
                data-price="250 EGP" data-fmt-en="60 min · Video call" data-fmt-ar="60 دقيقة · فيديو"
                data-en-l="Ahmed reviews your actual pipeline before the call via a pre-session questionnaire. Every session is built around your specific numbers and situation.\n\n✓ Pre-session questionnaire to prepare\n✓ 60-min live video call\n✓ Written 30-day action plan after session\n✓ 3-day follow-up message check-in" data-ar-l="أحمد يراجع خطك التجاري الفعلي قبل المكالمة. كل جلسة مبنية حول أرقامك وضعك المحدد.\n\n✓ استبيان تحضيري قبل الجلسة\n✓ مكالمة فيديو مباشرة 60 دقيقة\n✓ خطة عمل كتابية 30 يوماً\n✓ متابعة بعد 3 أيام"
                data-en="Details" data-ar="التفاصيل">Details</button>
              <button class="bk-btn btn-p text-[.67rem] px-3 py-1.5 font-bold" data-svc="s1" data-en="Book" data-ar="احجز">Book</button>
            </div>
          </div>
        </div>

        <div class="srow relative mb-3 last:mb-0">
          
          <div class="svc-icon-wrap" style="background:rgba(0,212,184,.07);border:1px solid rgba(0,212,184,.13)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8zM14 2v6h6M16 13H8M16 17H8"/></svg>
          </div>
          <div class="flex-1 min-w-0">
            <div class="font-bold text-sm leading-tight" style="color:var(--w)" data-en="CV & LinkedIn Audit" data-ar="مراجعة CV وLinkedIn">CV & LinkedIn Audit</div>
            <div class="text-[.67rem] mt-0.5 flex items-center gap-1.5" style="color:var(--w40)">
              <span data-en="Async · 48h turnaround" data-ar="Async · 48 ساعة">Async · 48h turnaround</span>
            </div>
            <div class="text-[.72rem] mt-1.5 leading-snug line-clamp-1" style="color:var(--w60)" data-en="ATS score, full rewrite suggestions, LinkedIn headline — delivered in 48h." data-ar="درجة ATS، اقتراحات إعادة كتابة CV كاملة، عنوان LinkedIn.">ATS score, full rewrite suggestions, LinkedIn headline — delivered in 48h.</div>
          </div>
          <div class="flex flex-col items-end gap-2 shrink-0">
            <div class="svc-price font-display font-extrabold text-base leading-none grad">150 EGP</div>
            <div class="flex gap-1.5">
              <button class="svc-det text-[.67rem] font-semibold px-2.5 py-1 rounded-lg"
                style="background:var(--ta08);border:1px solid var(--ta15);color:var(--w60)"
                data-id="s2" data-en-n="CV & LinkedIn Audit" data-ar-n="مراجعة CV وLinkedIn"
                data-price="150 EGP" data-fmt-en="Async · 48h turnaround" data-fmt-ar="Async · 48 ساعة"
                data-en-l="You upload your CV and share your LinkedIn. Ahmed sends back a detailed written report.\n\n✓ ATS score analysis\n✓ Full CV rewrite suggestions with examples\n✓ LinkedIn headline + about section rewrite\n✓ 48-hour turnaround guaranteed" data-ar-l="ترفع الـ CV وترسل رابط LinkedIn. أحمد يرسل تقريراً كتابياً.\n\n✓ تحليل درجة ATS\n✓ اقتراحات إعادة كتابة CV كاملة مع أمثلة\n✓ إعادة كتابة عنوان وملخص LinkedIn\n✓ ضمان الرد خلال 48 ساعة"
                data-en="Details" data-ar="التفاصيل">Details</button>
              <button class="bk-btn btn-p text-[.67rem] px-3 py-1.5 font-bold" data-svc="s2" data-en="Book" data-ar="احجز">Book</button>
            </div>
          </div>
        </div>

        <div class="srow relative mb-3 last:mb-0">
          
          <div class="svc-icon-wrap" style="background:rgba(0,212,184,.07);border:1px solid rgba(0,212,184,.13)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20v-10M18 20V4M6 20v-4"/></svg>
          </div>
          <div class="flex-1 min-w-0">
            <div class="font-bold text-sm leading-tight" style="color:var(--w)" data-en="Career Roadmap Session" data-ar="جلسة خارطة الطريق">Career Roadmap Session</div>
            <div class="text-[.67rem] mt-0.5 flex items-center gap-1.5" style="color:var(--w40)">
              <span data-en="90 min · Video + written doc" data-ar="90 دقيقة · فيديو + وثيقة">90 min · Video + written doc</span>
            </div>
            <div class="text-[.72rem] mt-1.5 leading-snug line-clamp-1" style="color:var(--w60)" data-en="2-year career map: gaps, target companies, skills, step-by-step plan." data-ar="خارطة طريق مهنية لسنتين: الفجوات، الشركات المستهدفة، الجدول الزمني.">2-year career map: gaps, target companies, skills, step-by-step plan.</div>
          </div>
          <div class="flex flex-col items-end gap-2 shrink-0">
            <div class="svc-price font-display font-extrabold text-base leading-none grad">350 EGP</div>
            <div class="flex gap-1.5">
              <button class="svc-det text-[.67rem] font-semibold px-2.5 py-1 rounded-lg"
                style="background:var(--ta08);border:1px solid var(--ta15);color:var(--w60)"
                data-id="s3" data-en-n="Career Roadmap Session" data-ar-n="جلسة خارطة الطريق"
                data-price="350 EGP" data-fmt-en="90 min · Video + written doc" data-fmt-ar="90 دقيقة · فيديو + وثيقة"
                data-en-l="For people at a crossroads. We map exactly where you want to be in 2 years.\n\n✓ 90-min deep-dive video call\n✓ Written 2-year career roadmap document\n✓ Target company list by sector\n✓ Skill priority ranking\n✓ 7-day follow-up check-in" data-ar-l="لمن هم أمام مفترق طرق. نرسم أين تريد أن تكون خلال سنتين.\n\n✓ مكالمة فيديو تعمّق 90 دقيقة\n✓ وثيقة خارطة طريق مهنية 2 سنة\n✓ قائمة شركات مستهدفة حسب القطاع\n✓ ترتيب أولويات المهارات\n✓ متابعة بعد 7 أيام"
                data-en="Details" data-ar="التفاصيل">Details</button>
              <button class="bk-btn btn-p text-[.67rem] px-3 py-1.5 font-bold" data-svc="s3" data-en="Book" data-ar="احجز">Book</button>
            </div>
          </div>
        </div>

        <div class="srow relative mb-3 last:mb-0">
          
          <div class="svc-icon-wrap" style="background:rgba(0,212,184,.07);border:1px solid rgba(0,212,184,.13)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <div class="flex-1 min-w-0">
            <div class="font-bold text-sm leading-tight" style="color:var(--w)" data-en="Sales Team Audit" data-ar="تدقيق فريق المبيعات">Sales Team Audit</div>
            <div class="text-[.67rem] mt-0.5 flex items-center gap-1.5" style="color:var(--w40)">
              <span data-en="1 week · 2 calls + report" data-ar="أسبوع · مكالمتان + تقرير">1 week · 2 calls + report</span>
            </div>
            <div class="text-[.72rem] mt-1.5 leading-snug line-clamp-1" style="color:var(--w60)" data-en="Team structure, KPIs, comp design. 10–15 page written improvement plan." data-ar="هيكل الفريق والـ KPI وتصميم الحوافز. خطة تحسين 10-15 صفحة.">Team structure, KPIs, comp design. 10–15 page written improvement plan.</div>
          </div>
          <div class="flex flex-col items-end gap-2 shrink-0">
            <div class="svc-price font-display font-extrabold text-base leading-none grad">800 EGP</div>
            <div class="flex gap-1.5">
              <button class="svc-det text-[.67rem] font-semibold px-2.5 py-1 rounded-lg"
                style="background:var(--ta08);border:1px solid var(--ta15);color:var(--w60)"
                data-id="s4" data-en-n="Sales Team Audit" data-ar-n="تدقيق فريق المبيعات"
                data-price="800 EGP" data-fmt-en="1 week · 2 calls + report" data-fmt-ar="أسبوع · مكالمتان + تقرير"
                data-en-l="For managers who know something is wrong but cannot pinpoint it.\n\n✓ Kick-off discovery call (60 min)\n✓ Team structure + process review\n✓ KPI & compensation design audit\n✓ 10–15 page written improvement plan\n✓ Implementation follow-up call" data-ar-l="للمدراء الذين يعلمون أن هناك مشكلة لكن لا يستطيعون تحديدها.\n\n✓ مكالمة اكتشاف (60 دقيقة)\n✓ مراجعة هيكل الفريق والعمليات\n✓ تدقيق KPI وتصميم الحوافز\n✓ خطة تحسين كتابية 10-15 صفحة\n✓ مكالمة متابعة التنفيذ"
                data-en="Details" data-ar="التفاصيل">Details</button>
              <button class="bk-btn btn-p text-[.67rem] px-3 py-1.5 font-bold" data-svc="s4" data-en="Book" data-ar="احجز">Book</button>
            </div>
          </div>
        </div>
      </section>

      <!-- ─ COMMUNITIES ─ -->
      <section id="sec-community">
        <div class="sh"><div class="sh-dot"></div><span data-en="Communities" data-ar="المجتمعات">Communities</span></div>
        <p class="text-sm mb-4" style="color:var(--w60)" data-en="Ongoing access to Ahmed's knowledge, live sessions, and network — independent from 1-on-1 mentorship." data-ar="وصول مستمر لمعرفة أحمد وجلساته وشبكته — مستقل عن الإرشاد الفردي.">Ongoing access to Ahmed's knowledge, live sessions, and network — independent from 1-on-1 mentorship.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

      <div class="ccard">
        <div class="ccover" style="background:linear-gradient(135deg,#031818,#062f2a,#031c14);"><div style="position:absolute;inset:0;background:radial-gradient(ellipse 70% 110% at 20% 55%,rgba(0,212,184,.14),transparent 60%)"></div></div>
        <div class="px-5 pb-5">
          <div class="flex items-end gap-3 mb-3">
            <div class="cav" style="background:linear-gradient(135deg,#2de0ca,#009e85);color:rgba(0,0,0,.65)">AE</div>
            <div class="flex-1 min-w-0 pb-0.5">
              <h3 class="font-display font-bold text-sm leading-tight" style="color:var(--w)" data-en="Sales Mastery Community" data-ar="مجتمع إتقان المبيعات">Sales Mastery Community</h3>
              <div class="flex flex-wrap items-center gap-2 text-[.67rem] mt-0.5" style="color:var(--w40)">
                <span data-en="240 members" data-ar="240 عضو">240 members</span>
                <span data-en="4× live/week" data-ar="4 بث/أسبوع">4× live/week</span>
              </div>
            </div>
            <div class="text-end pb-0.5 shrink-0">
              <div class="font-display font-extrabold text-lg leading-none" style="color:var(--tl)">199 EGP</div>
              <div class="text-[.58rem]" style="color:var(--w40)" data-en="/month" data-ar="/شهر">/month</div>
            </div>
          </div>
          <p class="text-xs leading-relaxed mb-3.5" style="color:var(--w60)" data-en="Private community for serious sales professionals. Weekly live Q&As, deal reviews, and 50+ exclusive scripts." data-ar="مجتمع خاص لمحترفي المبيعات الجادين. Q&A مباشر أسبوعي ومراجعات صفقات و50+ نص وقالب حصري.">Private community for serious sales professionals. Weekly live Q&As, deal reviews, and 50+ exclusive scripts.</p>
          <div class="grid grid-cols-4 gap-1.5 mb-3.5"><div class="rounded-xl p-2.5 text-center" style="background:var(--ta08);border:1px solid var(--ta12)"><div class="font-display font-bold text-sm" style="color:var(--tl)">4.9</div><div class="text-[.55rem] font-semibold mt-0.5" style="color:var(--w40)" data-en="Rating" data-ar="التقييم">Rating</div></div><div class="rounded-xl p-2.5 text-center" style="background:var(--ta08);border:1px solid var(--ta12)"><div class="font-display font-bold text-sm" style="color:var(--tl)">50+</div><div class="text-[.55rem] font-semibold mt-0.5" style="color:var(--w40)" data-en="Resources" data-ar="موارد">Resources</div></div><div class="rounded-xl p-2.5 text-center" style="background:var(--ta08);border:1px solid var(--ta12)"><div class="font-display font-bold text-sm" style="color:var(--tl)">4×</div><div class="text-[.55rem] font-semibold mt-0.5" style="color:var(--w40)" data-en="Lives/wk" data-ar="بث/أسبوع">Lives/wk</div></div><div class="rounded-xl p-2.5 text-center" style="background:var(--ta08);border:1px solid var(--ta12)"><div class="font-display font-bold text-sm" style="color:var(--tl)">∞</div><div class="text-[.55rem] font-semibold mt-0.5" style="color:var(--w40)" data-en="Cancel" data-ar="إلغاء">Cancel</div></div></div>
          <div class="rounded-xl overflow-hidden mb-3.5" style="border:1px solid var(--ta12)">
            <div class="px-3.5 py-2 flex items-center justify-between" style="background:var(--ta08);border-bottom:1px solid var(--ta12)">
              <span class="text-[.58rem] font-bold uppercase tracking-wider" style="color:var(--w40)" data-en="Recent Activity" data-ar="نشاط حديث">Recent Activity</span>
              <span class="text-[.56rem]" style="color:var(--w40)" data-en="Members only" data-ar="للأعضاء فقط">Members only</span>
            </div>
            <div class="cfeed-row"><div class="w-6 h-6 rounded-full flex items-center justify-center text-[.55rem] font-bold shrink-0" style="background:linear-gradient(135deg,#2de0ca,#009e85);color:rgba(0,0,0,.65)">AE</div><div class="flex-1 min-w-0"><div class="text-[.7rem] font-semibold truncate" style="color:var(--w)" data-en="📌 Cold call opener — 40% callback" data-ar="📌 فاتحة مكالمة باردة — 40% استجابة">📌 Cold call opener — 40% callback</div><div class="text-[.6rem]" style="color:var(--w40)" data-en="Pinned · 2h ago" data-ar="مثبّت · منذ ساعتين">Pinned · 2h ago</div></div><svg class="w-3 h-3 shrink-0 opacity-15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div><div class="cfeed-row"><div class="w-6 h-6 rounded-full flex items-center justify-center text-[.55rem] font-bold shrink-0" style="background:linear-gradient(135deg,#fde68a,#f59e0b);color:rgba(0,0,0,.65)">MH</div><div class="flex-1 min-w-0"><div class="text-[.7rem] truncate" style="color:var(--w)" data-en="Closed first deal using Ahmed's framework 🎉" data-ar="أغلقت أول صفقة بإطار أحمد 🎉">Closed first deal using Ahmed's framework 🎉</div><div class="text-[.6rem]" style="color:var(--w40)" data-en="5h · 12 likes" data-ar="5 ساعات · 12 إعجاب">5h · 12 likes</div></div><svg class="w-3 h-3 shrink-0 opacity-15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div><div class="cfeed-row"><div class="w-6 h-6 rounded-full flex items-center justify-center text-[.55rem] font-bold shrink-0" style="background:linear-gradient(135deg,#93c5fd,#3b82f6);color:rgba(0,0,0,.65)">NK</div><div class="flex-1 min-w-0"><div class="text-[.7rem] truncate" style="color:var(--w)" data-en="How do you handle the price objection?" data-ar="كيف تتعامل مع اعتراض السعر؟">How do you handle the price objection?</div><div class="text-[.6rem]" style="color:var(--w40)" data-en="8h · 6 replies" data-ar="8 ساعات · 6 ردود">8h · 6 replies</div></div><svg class="w-3 h-3 shrink-0 opacity-15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
          </div>
          <button class="btn-p w-full py-2.5 text-sm font-bold" data-en="Join Community" data-ar="انضم للمجتمع">Join Community</button>
          <p class="text-center text-[.58rem] mt-1.5" style="color:var(--w40)" data-en="Cancel anytime · No lock-in" data-ar="إلغاء في أي وقت · بلا التزام">Cancel anytime · No lock-in</p>
        </div>
      </div>

      <div class="ccard">
        <div class="ccover" style="background:linear-gradient(135deg,#0c0a20,#1a1244,#0c0a1c);"><div style="position:absolute;inset:0;background:radial-gradient(ellipse 70% 110% at 20% 55%,rgba(0,212,184,.14),transparent 60%)"></div></div>
        <div class="px-5 pb-5">
          <div class="flex items-end gap-3 mb-3">
            <div class="cav" style="background:linear-gradient(135deg,#2de0ca,#009e85);color:rgba(0,0,0,.65)">RE</div>
            <div class="flex-1 min-w-0 pb-0.5">
              <h3 class="font-display font-bold text-sm leading-tight" style="color:var(--w)" data-en="Real Estate Deals Club" data-ar="نادي صفقات العقارات">Real Estate Deals Club</h3>
              <div class="flex flex-wrap items-center gap-2 text-[.67rem] mt-0.5" style="color:var(--w40)">
                <span data-en="118 members" data-ar="118 عضو">118 members</span>
                <span data-en="2× live/week" data-ar="2 بث/أسبوع">2× live/week</span>
              </div>
            </div>
            <div class="text-end pb-0.5 shrink-0">
              <div class="font-display font-extrabold text-lg leading-none" style="color:var(--tl)">149 EGP</div>
              <div class="text-[.58rem]" style="color:var(--w40)" data-en="/month" data-ar="/شهر">/month</div>
            </div>
          </div>
          <p class="text-xs leading-relaxed mb-3.5" style="color:var(--w60)" data-en="For real estate agents and managers in Egypt. Deal breakdowns, market analysis, and commission negotiation tactics." data-ar="لوكلاء ومدراء العقارات في مصر. تحليل صفقات وتحليل سوق وتكتيكات تفاوض العمولة.">For real estate agents and managers in Egypt. Deal breakdowns, market analysis, and commission negotiation tactics.</p>
          <div class="grid grid-cols-4 gap-1.5 mb-3.5"><div class="rounded-xl p-2.5 text-center" style="background:var(--ta08);border:1px solid var(--ta12)"><div class="font-display font-bold text-sm" style="color:var(--tl)">4.9</div><div class="text-[.55rem] font-semibold mt-0.5" style="color:var(--w40)" data-en="Rating" data-ar="التقييم">Rating</div></div><div class="rounded-xl p-2.5 text-center" style="background:var(--ta08);border:1px solid var(--ta12)"><div class="font-display font-bold text-sm" style="color:var(--tl)">30+</div><div class="text-[.55rem] font-semibold mt-0.5" style="color:var(--w40)" data-en="Case Studies" data-ar="دراسات">Case Studies</div></div><div class="rounded-xl p-2.5 text-center" style="background:var(--ta08);border:1px solid var(--ta12)"><div class="font-display font-bold text-sm" style="color:var(--tl)">2×</div><div class="text-[.55rem] font-semibold mt-0.5" style="color:var(--w40)" data-en="Lives/wk" data-ar="بث/أسبوع">Lives/wk</div></div><div class="rounded-xl p-2.5 text-center" style="background:var(--ta08);border:1px solid var(--ta12)"><div class="font-display font-bold text-sm" style="color:var(--tl)">∞</div><div class="text-[.55rem] font-semibold mt-0.5" style="color:var(--w40)" data-en="Cancel" data-ar="إلغاء">Cancel</div></div></div>
          <div class="rounded-xl overflow-hidden mb-3.5" style="border:1px solid var(--ta12)">
            <div class="px-3.5 py-2 flex items-center justify-between" style="background:var(--ta08);border-bottom:1px solid var(--ta12)">
              <span class="text-[.58rem] font-bold uppercase tracking-wider" style="color:var(--w40)" data-en="Recent Activity" data-ar="نشاط حديث">Recent Activity</span>
              <span class="text-[.56rem]" style="color:var(--w40)" data-en="Members only" data-ar="للأعضاء فقط">Members only</span>
            </div>
            <div class="cfeed-row"><div class="w-6 h-6 rounded-full flex items-center justify-center text-[.55rem] font-bold shrink-0" style="background:linear-gradient(135deg,#2de0ca,#009e85);color:rgba(0,0,0,.65)">AE</div><div class="flex-1 min-w-0"><div class="text-[.7rem] font-semibold truncate" style="color:var(--w)" data-en="🏢 New Cairo Q2 2025 breakdown" data-ar="🏢 تحليل القاهرة الجديدة Q2 2025">🏢 New Cairo Q2 2025 breakdown</div><div class="text-[.6rem]" style="color:var(--w40)" data-en="Pinned · 1d ago" data-ar="مثبّت · منذ يوم">Pinned · 1d ago</div></div><svg class="w-3 h-3 shrink-0 opacity-15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div><div class="cfeed-row"><div class="w-6 h-6 rounded-full flex items-center justify-center text-[.55rem] font-bold shrink-0" style="background:linear-gradient(135deg,#fde68a,#f59e0b);color:rgba(0,0,0,.65)">SK</div><div class="flex-1 min-w-0"><div class="text-[.7rem] truncate" style="color:var(--w)" data-en="Closed 3M EGP deal with commission script 💰" data-ar="أغلقت صفقة 3M EGP بنص العمولة 💰">Closed 3M EGP deal with commission script 💰</div><div class="text-[.6rem]" style="color:var(--w40)" data-en="6h · 18 likes" data-ar="6 ساعات · 18 إعجاب">6h · 18 likes</div></div><svg class="w-3 h-3 shrink-0 opacity-15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div><div class="cfeed-row"><div class="w-6 h-6 rounded-full flex items-center justify-center text-[.55rem] font-bold shrink-0" style="background:linear-gradient(135deg,#93c5fd,#3b82f6);color:rgba(0,0,0,.65)">OM</div><div class="flex-1 min-w-0"><div class="text-[.7rem] truncate" style="color:var(--w)" data-en="How to deal with devs cutting commission?" data-ar="كيف أتعامل مع المطورين الذين يخفضون العمولة؟">How to deal with devs cutting commission?</div><div class="text-[.6rem]" style="color:var(--w40)" data-en="1d · 9 replies" data-ar="يوم · 9 ردود">1d · 9 replies</div></div><svg class="w-3 h-3 shrink-0 opacity-15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
          </div>
          <button class="btn-g w-full py-2.5 text-sm font-bold" data-en="Join Community" data-ar="انضم للمجتمع">Join Community</button>
          <p class="text-center text-[.58rem] mt-1.5" style="color:var(--w40)" data-en="Cancel anytime · No lock-in" data-ar="إلغاء في أي وقت · بلا التزام">Cancel anytime · No lock-in</p>
        </div>
      </div>
        </div>
      </section>

      <!-- ─ ABOUT ─ -->
      <section id="sec-about">
        <div class="sh"><div class="sh-dot"></div><span data-en="About & Experience" data-ar="نبذة وخبرات">About & Experience</span></div>
        <div class="rounded-2xl p-5 mb-5" style="background:rgba(5,14,26,.75);border:1px solid var(--ta12)">
          <p class="text-sm leading-relaxed mb-2" style="color:var(--w60)" data-en="Sales Director with 12+ years building high-performance teams across real estate, FMCG, and B2B in Egypt and the Gulf. Closed over $50M in deals and trained 200+ professionals." data-ar="مدير مبيعات بخبرة 12+ سنة في بناء فرق عالية الأداء في العقارات والـ FMCG والـ B2B. أغلق أكثر من 50 مليون دولار ودرّب 200+ محترف.">Sales Director with 12+ years building high-performance teams across real estate, FMCG, and B2B in Egypt and the Gulf. Closed over $50M in deals and trained 200+ professionals.</p>
          <p class="text-sm leading-relaxed" style="color:var(--w60)" data-en="Direct and results-focused. Every session is built around your specific situation — not generic frameworks." data-ar="مباشر ومبني على النتائج. كل جلسة مبنية حول وضعك المحدد — لا أطر عمل عامة.">Direct and results-focused. Every session is built around your specific situation — not generic frameworks.</p>
          <div class="flex flex-wrap gap-2 mt-4 pt-4" style="border-top:1px solid var(--ta12)">
            <span class="px-2.5 py-1 rounded-full text-[.65rem] font-bold tag-biz" data-en="Sales & Marketing" data-ar="مبيعات وتسويق">Sales & Marketing</span>
            <span class="px-2.5 py-1 rounded-full text-[.65rem] font-bold tag-biz" data-en="B2B Strategy" data-ar="استراتيجية B2B">B2B Strategy</span>
            <span class="px-2.5 py-1 rounded-full text-[.65rem] font-bold tag-re" data-en="Real Estate" data-ar="العقارات">Real Estate</span>
            <span class="px-2.5 py-1 rounded-full text-[.65rem] font-bold tag-biz" data-en="Team Leadership" data-ar="قيادة الفرق">Team Leadership</span>
            <span class="px-2.5 py-1 rounded-full text-[.65rem] font-bold tag-biz" data-en="Entrepreneurship" data-ar="ريادة الأعمال">Entrepreneurship</span>
          </div>
        </div>
        <div class="flex flex-col gap-3">
          <div class="flex gap-3 items-start p-4 rounded-xl" style="background:rgba(5,14,26,.6);border:1px solid var(--ta12)">
            <div class="w-9 h-9 rounded-xl flex items-center justify-center font-display font-bold text-sm shrink-0" style="background:var(--ta12);border:1px solid var(--ta20);color:var(--tl)">S</div>
            <div><div class="font-bold text-sm" style="color:var(--w)">Sales Director · Savills Egypt</div><div class="text-xs" style="color:var(--tl)">2019 – Present</div><div class="text-xs mt-0.5" style="color:var(--w40)" data-en="Led 40-person team · Revenue +140% in 3 years" data-ar="قاد 40 شخصاً · الإيرادات +140% في 3 سنوات">Led 40-person team · Revenue +140% in 3 years</div></div>
          </div>
          <div class="flex gap-3 items-start p-4 rounded-xl" style="background:rgba(5,14,26,.6);border:1px solid var(--ta12)">
            <div class="w-9 h-9 rounded-xl flex items-center justify-center font-display font-bold text-sm shrink-0" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)">C</div>
            <div><div class="font-bold text-sm" style="color:var(--w)">Senior Sales Manager · CBRE Egypt</div><div class="text-xs" style="color:var(--tl)">2015 – 2019</div><div class="text-xs mt-0.5" style="color:var(--w40)" data-en="Closed $22M+ in commercial real estate" data-ar="أغلق أكثر من 22 مليون دولار في العقارات التجارية">Closed $22M+ in commercial real estate</div></div>
          </div>
          <div class="flex gap-3 items-start p-4 rounded-xl" style="background:rgba(5,14,26,.6);border:1px solid var(--ta12)">
            <div class="w-9 h-9 rounded-xl flex items-center justify-center font-display font-bold text-sm shrink-0" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)">U</div>
            <div><div class="font-bold text-sm" style="color:var(--w)">Sales Executive · Unilever Egypt</div><div class="text-xs" style="color:var(--tl)">2012 – 2015</div><div class="text-xs mt-0.5" style="color:var(--w40)" data-en="Exceeded quota by 30%+ consistently" data-ar="تجاوز الحصة بنسبة 30%+ باستمرار">Exceeded quota by 30%+ consistently</div></div>
          </div>
        </div>
      </section>

      <!-- ─ REVIEWS ─ -->
      <section id="sec-reviews">
        <div class="sh"><div class="sh-dot"></div><span data-en="Reviews" data-ar="التقييمات">Reviews</span></div>
        <div class="rounded-2xl p-5 mb-4" style="background:rgba(5,14,26,.75);border:1px solid var(--ta12)">
          <div class="grid grid-cols-[auto,1fr] gap-6 items-center">
            <div class="text-center">
              <div class="font-display font-extrabold" style="font-size:4rem;line-height:1;color:var(--w)">4.9</div>
              <div class="sf text-lg my-1.5">★★★★★</div>
              <div class="text-xs" style="color:var(--w40)" data-en="312 reviews" data-ar="312 تقييم">312 reviews</div>
            </div>
            <div class="flex flex-col gap-1.5"><div class="flex items-center gap-3"><span class="text-xs w-3 font-bold text-end" style="color:var(--w)">5</span><div class="flex-1 skbar"><div class="skfill" style="width:87%"></div></div><span class="text-xs w-8 text-end" style="color:var(--w40)">87%</span></div><div class="flex items-center gap-3"><span class="text-xs w-3 font-bold text-end" style="color:var(--w)">4</span><div class="flex-1 skbar"><div class="skfill" style="width:10%"></div></div><span class="text-xs w-8 text-end" style="color:var(--w40)">10%</span></div><div class="flex items-center gap-3"><span class="text-xs w-3 font-bold text-end" style="color:var(--w)">3</span><div class="flex-1 skbar"><div class="skfill" style="width:2%"></div></div><span class="text-xs w-8 text-end" style="color:var(--w40)">2%</span></div><div class="flex items-center gap-3"><span class="text-xs w-3 font-bold text-end" style="color:var(--w)">2</span><div class="flex-1 skbar"><div class="skfill" style="width:1%"></div></div><span class="text-xs w-8 text-end" style="color:var(--w40)">1%</span></div><div class="flex items-center gap-3"><span class="text-xs w-3 font-bold text-end" style="color:var(--w)">1</span><div class="flex-1 skbar"><div class="skfill" style="width:0%"></div></div><span class="text-xs w-8 text-end" style="color:var(--w40)">0%</span></div></div>
          </div>
        </div>
        <div class="flex flex-col gap-3">
<div class="rcard"><div class="flex items-start justify-between gap-3 mb-3"><div class="flex items-center gap-2.5"><div class="rev-av" style="background:linear-gradient(135deg,في 60 دقيقة أعاد كتابة نهجي في المبيعات. انتقلت من 3 إلى 9 صفقات/شهر في 6 أسابيع.,#2de0ca);color:rgba(0,0,0,.65)">AE</div><div><div class="text-sm font-semibold" style="color:var(--w)" data-en="Mohamed H." data-ar="محمد ح.">Mohamed H.</div><div class="text-[.62rem]" style="color:var(--w40)" data-en="1-on-1 Strategy" data-ar="جلسة استراتيجية">1-on-1 Strategy</div></div></div><div class="text-end shrink-0"><div class="sf text-xs">★★★★★</div><div class="text-[.6rem] mt-0.5" style="color:var(--w40)" data-en="3 days ago" data-ar="منذ 3 أيام">3 days ago</div></div></div><p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="60 minutes completely rewrote my sales approach. Went from 3 to 9 deals/month in 6 weeks." data-ar="في 60 دقيقة أعاد كتابة نهجي في المبيعات. انتقلت من 3 إلى 9 صفقات/شهر في 6 أسابيع.">60 minutes completely rewrote my sales approach. Went from 3 to 9 deals/month in 6 weeks.</p></div>
<div class="rcard"><div class="flex items-start justify-between gap-3 mb-3"><div class="flex items-center gap-2.5"><div class="rev-av" style="background:linear-gradient(135deg,أراني سبب توقفي بالضبط. حصلت على مقابلتين من نصيحة LinkedIn وحدها.,#c4b5fd);color:rgba(0,0,0,.65)">SK</div><div><div class="text-sm font-semibold" style="color:var(--w)" data-en="Sara K." data-ar="سارة ك.">Sara K.</div><div class="text-[.62rem]" style="color:var(--w40)" data-en="Career Roadmap" data-ar="خارطة الطريق">Career Roadmap</div></div></div><div class="text-end shrink-0"><div class="sf text-xs">★★★★★</div><div class="text-[.6rem] mt-0.5" style="color:var(--w40)" data-en="1 week ago" data-ar="منذ أسبوع">1 week ago</div></div></div><p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Showed me exactly why I was stuck. Got 2 interviews from his LinkedIn advice alone." data-ar="أراني سبب توقفي بالضبط. حصلت على مقابلتين من نصيحة LinkedIn وحدها.">Showed me exactly why I was stuck. Got 2 interviews from his LinkedIn advice alone.</p></div>
<div class="rcard"><div class="flex items-start justify-between gap-3 mb-3"><div class="flex items-center gap-2.5"><div class="rev-av" style="background:linear-gradient(135deg,8 صفحات من التغذية الراجعة المحددة. 3 مقابلات في الأسبوع الذي طبّقت فيه التغييرات.,#fde68a);color:rgba(0,0,0,.65)">ON</div><div><div class="text-sm font-semibold" style="color:var(--w)" data-en="Omar N." data-ar="عمر ن.">Omar N.</div><div class="text-[.62rem]" style="color:var(--w40)" data-en="CV & LinkedIn Audit" data-ar="مراجعة CV">CV & LinkedIn Audit</div></div></div><div class="text-end shrink-0"><div class="sf text-xs">★★★★★</div><div class="text-[.6rem] mt-0.5" style="color:var(--w40)" data-en="2 weeks ago" data-ar="منذ أسبوعين">2 weeks ago</div></div></div><p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="8 pages of specific feedback. 3 interview calls the week I applied the changes." data-ar="8 صفحات من التغذية الراجعة المحددة. 3 مقابلات في الأسبوع الذي طبّقت فيه التغييرات.">8 pages of specific feedback. 3 interview calls the week I applied the changes.</p></div>
<div class="rcard"><div class="flex items-start justify-between gap-3 mb-3"><div class="flex items-center gap-2.5"><div class="rev-av" style="background:linear-gradient(135deg,تقرير 12 صفحة و6 نقاط ضعف حرجة. الإيراد ارتفع 35% في شهرين.,#34d399);color:rgba(0,0,0,.65)">AT</div><div><div class="text-sm font-semibold" style="color:var(--w)" data-en="Ahmed T." data-ar="أحمد ت.">Ahmed T.</div><div class="text-[.62rem]" style="color:var(--w40)" data-en="Sales Team Audit" data-ar="تدقيق الفريق">Sales Team Audit</div></div></div><div class="text-end shrink-0"><div class="sf text-xs">★★★★★</div><div class="text-[.6rem] mt-0.5" style="color:var(--w40)" data-en="1 month ago" data-ar="منذ شهر">1 month ago</div></div></div><p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="12-page report, 6 critical weaknesses found. Revenue up 35% in 2 months." data-ar="تقرير 12 صفحة و6 نقاط ضعف حرجة. الإيراد ارتفع 35% في شهرين.">12-page report, 6 critical weaknesses found. Revenue up 35% in 2 months.</p></div>
        </div>
      </section>

      <!-- ─ ACHIEVEMENTS ─ -->
      <section id="sec-achievements">
        <div class="sh"><div class="sh-dot"></div><span data-en="Achievements" data-ar="الإنجازات">Achievements</span></div>
        <div class="flex flex-col gap-3">

        <div class="ach-item">
          <div class="ach-icon" style="background:rgba(0,212,184,.12);border:1px solid rgba(0,212,184,.25)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <div class="flex-1 min-w-0">
            <div class="flex items-center justify-between gap-2 mb-1">
              <div class="font-bold text-sm" style="color:var(--w)" data-en="Account Level" data-ar="مستوى الحساب">Account Level</div>
              <div class="text-xs font-bold shrink-0" style="color:var(--tl)">72%</div>
            </div>
            <div class="text-[.7rem] mb-2" style="color:var(--w60)" data-en="Level 12 Expert · 3,600 / 5,000 XP" data-ar="لرفع المستوى احصل على 1400 XP">Level 12 Expert · 3,600 / 5,000 XP</div>
            <div class="ach-prog"><div class="ach-fill" style="width:72%"></div></div>
            <div class="text-[.62rem] mt-1" style="color:var(--w40)" data-en="لرفع المستوى احصل على 1400 XP" data-ar="لرفع المستوى احصل على 1400 XP"></div>
          </div>
        </div>

        <div class="ach-item">
          <div class="ach-icon" style="background:rgba(251,191,36,.1);border:1px solid rgba(251,191,36,.22)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>
          </div>
          <div class="flex-1 min-w-0">
            <div class="flex items-center justify-between gap-2 mb-1">
              <div class="font-bold text-sm" style="color:var(--w)" data-en="5AM Club" data-ar="نادي الخامسة صباحاً">5AM Club</div>
              <div class="text-xs font-bold shrink-0" style="color:var(--tl)">90%</div>
            </div>
            <div class="text-[.7rem] mb-2" style="color:var(--w60)" data-en="16 days · 19/21 to next level" data-ar="قم بالاستيقاظ 2 أيام للمستوى التالي">16 days · 19/21 to next level</div>
            <div class="ach-prog"><div class="ach-fill" style="width:90%"></div></div>
            <div class="text-[.62rem] mt-1" style="color:var(--w40)" data-en="قم بالاستيقاظ 2 أيام للمستوى التالي" data-ar="قم بالاستيقاظ 2 أيام للمستوى التالي"></div>
          </div>
        </div>

        <div class="ach-item">
          <div class="ach-icon" style="background:rgba(0,212,184,.12);border:1px solid rgba(0,212,184,.25)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4-6.2-4.5-6.2 4.5 2.4-7.4L2 9.4h7.6L12 2z"/></svg>
          </div>
          <div class="flex-1 min-w-0">
            <div class="flex items-center justify-between gap-2 mb-1">
              <div class="font-bold text-sm" style="color:var(--w)" data-en="Support Leader" data-ar="دعم القائد">Support Leader</div>
              <div class="text-xs font-bold shrink-0" style="color:var(--tl)">96%</div>
            </div>
            <div class="text-[.7rem] mb-2" style="color:var(--w60)" data-en="Given 48 stars total" data-ar="قم بإرسال 2 نجمة إضافية">Given 48 stars total</div>
            <div class="ach-prog"><div class="ach-fill" style="width:96%"></div></div>
            <div class="text-[.62rem] mt-1" style="color:var(--w40)" data-en="قم بإرسال 2 نجمة إضافية" data-ar="قم بإرسال 2 نجمة إضافية"></div>
          </div>
        </div>

        <div class="ach-item">
          <div class="ach-icon" style="background:rgba(96,165,250,.1);border:1px solid rgba(96,165,250,.22)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a3 3 0 0 0-3-3M16 3.13a4 4 0 0 1 0 7.74"/></svg>
          </div>
          <div class="flex-1 min-w-0">
            <div class="flex items-center justify-between gap-2 mb-1">
              <div class="font-bold text-sm" style="color:var(--w)" data-en="Friends Invited" data-ar="دعوة الأصدقاء">Friends Invited</div>
              <div class="text-xs font-bold shrink-0" style="color:var(--tl)">93%</div>
            </div>
            <div class="text-[.7rem] mb-2" style="color:var(--w60)" data-en="277 friends · 279/300 to next" data-ar="قم بدعوة 21 صديق إضافي">277 friends · 279/300 to next</div>
            <div class="ach-prog"><div class="ach-fill" style="width:93%"></div></div>
            <div class="text-[.62rem] mt-1" style="color:var(--w40)" data-en="قم بدعوة 21 صديق إضافي" data-ar="قم بدعوة 21 صديق إضافي"></div>
          </div>
        </div>

        <div class="ach-item">
          <div class="ach-icon" style="background:rgba(0,212,184,.12);border:1px solid rgba(0,212,184,.25)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/></svg>
          </div>
          <div class="flex-1 min-w-0">
            <div class="flex items-center justify-between gap-2 mb-1">
              <div class="font-bold text-sm" style="color:var(--w)" data-en="Tickets" data-ar="التذاكر">Tickets</div>
              <div class="text-xs font-bold shrink-0" style="color:var(--tl)">1%</div>
            </div>
            <div class="text-[.7rem] mb-2" style="color:var(--w60)" data-en="4,932 tickets · 5,014/500,000" data-ar="احصل على 495,068 تذكرة إضافية">4,932 tickets · 5,014/500,000</div>
            <div class="ach-prog"><div class="ach-fill" style="width:1%"></div></div>
            <div class="text-[.62rem] mt-1" style="color:var(--w40)" data-en="احصل على 495,068 تذكرة إضافية" data-ar="احصل على 495,068 تذكرة إضافية"></div>
          </div>
        </div>

        <div class="ach-item">
          <div class="ach-icon" style="background:rgba(248,113,113,.1);border:1px solid rgba(248,113,113,.22)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15V22M8 22h8M7.21 15l-2.08 3.07A1 1 0 0 0 6 20h12a1 1 0 0 0 .87-1.5L16.79 15M19 8A7 7 0 1 1 5 8a7 7 0 0 1 14 0z"/></svg>
          </div>
          <div class="flex-1 min-w-0">
            <div class="flex items-center justify-between gap-2 mb-1">
              <div class="font-bold text-sm" style="color:var(--w)" data-en="Battle Wins" data-ar="انتصارات المعارك">Battle Wins</div>
              <div class="text-xs font-bold shrink-0" style="color:var(--tl)">33%</div>
            </div>
            <div class="text-[.7rem] mb-2" style="color:var(--w60)" data-en="1 win · 1/3 to next level" data-ar="انتصر في 2 معارك إضافية">1 win · 1/3 to next level</div>
            <div class="ach-prog"><div class="ach-fill" style="width:33%"></div></div>
            <div class="text-[.62rem] mt-1" style="color:var(--w40)" data-en="انتصر في 2 معارك إضافية" data-ar="انتصر في 2 معارك إضافية"></div>
          </div>
        </div>

        <div class="ach-item">
          <div class="ach-icon" style="background:rgba(156,163,175,.1);border:1px solid rgba(156,163,175,.22)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>
          </div>
          <div class="flex-1 min-w-0">
            <div class="flex items-center justify-between gap-2 mb-1">
              <div class="font-bold text-sm" style="color:var(--w)" data-en="Job Applications" data-ar="التقديم على الوظائف">Job Applications</div>
              <div class="text-xs font-bold shrink-0" style="color:var(--tl)">0%</div>
            </div>
            <div class="text-[.7rem] mb-2" style="color:var(--w60)" data-en="0 applications · 0/3" data-ar="تقدّم على 3 وظائف">0 applications · 0/3</div>
            <div class="ach-prog"><div class="ach-fill" style="width:0%"></div></div>
            <div class="text-[.62rem] mt-1" style="color:var(--w40)" data-en="تقدّم على 3 وظائف" data-ar="تقدّم على 3 وظائف"></div>
          </div>
        </div>

        <div class="ach-item">
          <div class="ach-icon" style="background:rgba(167,139,250,.1);border:1px solid rgba(167,139,250,.22)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20M4 19.5A2.5 2.5 0 0 0 6.5 22H20V2H6.5A2.5 2.5 0 0 0 4 4.5v15z"/></svg>
          </div>
          <div class="flex-1 min-w-0">
            <div class="flex items-center justify-between gap-2 mb-1">
              <div class="font-bold text-sm" style="color:var(--w)" data-en="Learning Streak" data-ar="استمرارية التعلم">Learning Streak</div>
              <div class="text-xs font-bold shrink-0" style="color:var(--tl)">95%</div>
            </div>
            <div class="text-[.7rem] mb-2" style="color:var(--w60)" data-en="19 videos · 19/20 to next" data-ar="أكمل فيديو تدريبي واحد إضافي">19 videos · 19/20 to next</div>
            <div class="ach-prog"><div class="ach-fill" style="width:95%"></div></div>
            <div class="text-[.62rem] mt-1" style="color:var(--w40)" data-en="أكمل فيديو تدريبي واحد إضافي" data-ar="أكمل فيديو تدريبي واحد إضافي"></div>
          </div>
        </div>
        </div>
      </section>

      <!-- ─ RESOURCES ─ -->
      <section id="sec-resources">
        <div class="sh"><div class="sh-dot"></div><span data-en="Resources" data-ar="الموارد">Resources</span></div>
        <div class="rgrid">

        <div class="ritem">
          <div class="ritem-icon" style="background:rgba(0,212,184,.12);border:1px solid rgba(0,212,184,.25)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/></svg>
          </div>
          <div class="rcount">4,932</div>
          <div class="rlabel" data-en="Tickets" data-ar="تذاكر">Tickets</div>
        </div>

        <div class="ritem">
          <div class="ritem-icon" style="background:rgba(251,191,36,.1);border:1px solid rgba(251,191,36,.22)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <div class="rcount">2,000</div>
          <div class="rlabel" data-en="Stars" data-ar="نجوم">Stars</div>
        </div>

        <div class="ritem">
          <div class="ritem-icon" style="background:rgba(251,191,36,.12);border:1px solid rgba(251,191,36,.25)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15V22M8 22h8M7.21 15l-2.08 3.07A1 1 0 0 0 6 20h12a1 1 0 0 0 .87-1.5L16.79 15M19 8A7 7 0 1 1 5 8a7 7 0 0 1 14 0z"/></svg>
          </div>
          <div class="rcount">14</div>
          <div class="rlabel" data-en="Gold" data-ar="ذهب">Gold</div>
        </div>

        <div class="ritem">
          <div class="ritem-icon" style="background:rgba(156,163,175,.1);border:1px solid rgba(156,163,175,.22)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15V22M8 22h8M7.21 15l-2.08 3.07A1 1 0 0 0 6 20h12a1 1 0 0 0 .87-1.5L16.79 15M19 8A7 7 0 1 1 5 8a7 7 0 0 1 14 0z"/></svg>
          </div>
          <div class="rcount">3</div>
          <div class="rlabel" data-en="Silver" data-ar="فضة">Silver</div>
        </div>

        <div class="ritem">
          <div class="ritem-icon" style="background:rgba(205,127,50,.1);border:1px solid rgba(205,127,50,.22)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15V22M8 22h8M7.21 15l-2.08 3.07A1 1 0 0 0 6 20h12a1 1 0 0 0 .87-1.5L16.79 15M19 8A7 7 0 1 1 5 8a7 7 0 0 1 14 0z"/></svg>
          </div>
          <div class="rcount">0</div>
          <div class="rlabel" data-en="Bronze" data-ar="برونز">Bronze</div>
        </div>

        <div class="ritem">
          <div class="ritem-icon" style="background:rgba(0,212,184,.12);border:1px solid rgba(0,212,184,.25)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h12l4 6-10 13L2 9 6 3z"/></svg>
          </div>
          <div class="rcount">0</div>
          <div class="rlabel" data-en="Jewel" data-ar="جوهرة">Jewel</div>
        </div>

        <div class="ritem">
          <div class="ritem-icon" style="background:rgba(251,191,36,.08);border:1px solid rgba(251,191,36,.18)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 0 1 0 8h-1M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8zM6 1v3M10 1v3M14 1v3"/></svg>
          </div>
          <div class="rcount">7</div>
          <div class="rlabel" data-en="Coffee" data-ar="قهوة">Coffee</div>
        </div>

        <div class="ritem">
          <div class="ritem-icon" style="background:rgba(52,211,153,.1);border:1px solid rgba(52,211,153,.22)">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C6 2 2 6 2 12s4 10 10 10 10-4 10-10S18 2 12 2zM12 8v8M8 12h8"/></svg>
          </div>
          <div class="rcount">0</div>
          <div class="rlabel" data-en="Clover" data-ar="كلوفر">Clover</div>
        </div>
        </div>
      </section>

      <!-- ─ CERTIFICATES ─ -->
      <section id="sec-certs">
        <div class="sh"><div class="sh-dot"></div><span data-en="Certificates" data-ar="الشهادات">Certificates</span></div>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">

        <div class="cert-card">
          <div class="cert-header" style="background:linear-gradient(135deg,#2de0ca,#009e85)">
            <div class="cert-seal">
              <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.8)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
            </div>
          </div>
          <div class="p-3">
            <div class="flex items-center gap-1.5 mb-1.5">
              <svg class="w-3 h-3 shrink-0" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg>
              <span class="text-[.62rem] font-bold" style="color:var(--tl)" data-en="Verified" data-ar="موثّقة">Verified</span>
            </div>
            <div class="text-xs font-bold leading-tight" style="color:var(--w)" data-en="Sales Excellence Diploma" data-ar="دبلومة تميز المبيعات">Sales Excellence Diploma</div>
            <div class="text-[.6rem] mt-1" style="color:var(--w40)">Advanced · 2024</div>
          </div>
        </div>

        <div class="cert-card">
          <div class="cert-header" style="background:linear-gradient(135deg,#60a5fa,#3b82f6)">
            <div class="cert-seal">
              <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.8)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
            </div>
          </div>
          <div class="p-3">
            <div class="flex items-center gap-1.5 mb-1.5">
              <svg class="w-3 h-3 shrink-0" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg>
              <span class="text-[.62rem] font-bold" style="color:var(--tl)" data-en="Verified" data-ar="موثّقة">Verified</span>
            </div>
            <div class="text-xs font-bold leading-tight" style="color:var(--w)" data-en="B2B Negotiation Mastery" data-ar="إتقان تفاوض B2B">B2B Negotiation Mastery</div>
            <div class="text-[.6rem] mt-1" style="color:var(--w40)">Intermediate · 2023</div>
          </div>
        </div>

        <div class="cert-card">
          <div class="cert-header" style="background:linear-gradient(135deg,#fbbf24,#d97706)">
            <div class="cert-seal">
              <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.8)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
            </div>
          </div>
          <div class="p-3">
            <div class="flex items-center gap-1.5 mb-1.5">
              <svg class="w-3 h-3 shrink-0" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg>
              <span class="text-[.62rem] font-bold" style="color:var(--tl)" data-en="Verified" data-ar="موثّقة">Verified</span>
            </div>
            <div class="text-xs font-bold leading-tight" style="color:var(--w)" data-en="Real Estate Sales Pro" data-ar="محترف مبيعات العقارات">Real Estate Sales Pro</div>
            <div class="text-[.6rem] mt-1" style="color:var(--w40)">Advanced · 2023</div>
          </div>
        </div>

        <div class="cert-card">
          <div class="cert-header" style="background:linear-gradient(135deg,#a78bfa,#7c3aed)">
            <div class="cert-seal">
              <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.8)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
            </div>
          </div>
          <div class="p-3">
            <div class="flex items-center gap-1.5 mb-1.5">
              <svg class="w-3 h-3 shrink-0" style="color:var(--tl)" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M20 6L9 17l-5-5"/></svg>
              <span class="text-[.62rem] font-bold" style="color:var(--tl)" data-en="Verified" data-ar="موثّقة">Verified</span>
            </div>
            <div class="text-xs font-bold leading-tight" style="color:var(--w)" data-en="Sales Leadership" data-ar="قيادة فرق المبيعات">Sales Leadership</div>
            <div class="text-[.6rem] mt-1" style="color:var(--w40)">Expert · 2022</div>
          </div>
        </div>
        </div>
      </section>

      <!-- ─ BADGES ─ -->
      <section id="sec-badges">
        <div class="sh"><div class="sh-dot"></div><span data-en="Badges" data-ar="الشارات">Badges</span></div>
        <div class="bgrid">
<div class="bitem"><div class="bemoji">🏆</div><div class="bname" data-en="Level 12" data-ar="المستوى 12">Level 12</div></div>
<div class="bitem"><div class="bemoji">⚔️</div><div class="bname" data-en="Warrior" data-ar="المحارب">Warrior</div></div>
<div class="bitem"><div class="bemoji">🌅</div><div class="bname" data-en="5AM Club" data-ar="نادي 5 ص">5AM Club</div></div>
<div class="bitem"><div class="bemoji">🤝</div><div class="bname" data-en="Connector" data-ar="الرابط">Connector</div></div>
<div class="bitem"><div class="bemoji">📚</div><div class="bname" data-en="Learner" data-ar="المتعلم">Learner</div></div>
<div class="bitem"><div class="bemoji">🌟</div><div class="bname" data-en="Top Mentor" data-ar="المرشد الأفضل">Top Mentor</div></div>
<div class="bitem"><div class="bemoji">❤️</div><div class="bname" data-en="Giving" data-ar="المعطاء">Giving</div></div>
<div class="bitem blocked"><div class="bemoji">🚀</div><div class="bname" data-en="🔒 Pioneer" data-ar="🔒 الرائد">🔒 Pioneer</div></div>
<div class="bitem blocked"><div class="bemoji">👑</div><div class="bname" data-en="🔒 Leader" data-ar="🔒 القائد">🔒 Leader</div></div>
<div class="bitem blocked"><div class="bemoji">💎</div><div class="bname" data-en="🔒 Diamond" data-ar="🔒 الماس">🔒 Diamond</div></div>
<div class="bitem blocked"><div class="bemoji">🔥</div><div class="bname" data-en="🔒 On Fire" data-ar="🔒 ملتهب">🔒 On Fire</div></div>
<div class="bitem blocked"><div class="bemoji">💰</div><div class="bname" data-en="🔒 Top Earner" data-ar="🔒 أعلى دخل">🔒 Top Earner</div></div>
        </div>
        <p class="text-xs mt-3" style="color:var(--w40)" data-en="🔒 Locked badges are earned through activity on the platform." data-ar="🔒 الشارات المقفلة تُكسب من خلال النشاط على المنصة.">🔒 Locked badges are earned through activity on the platform.</p>
      </section>

    </div>

    <!-- ─ SIDEBAR ─ -->
    <div class="hidden lg:block">
      <div class="sbar flex flex-col gap-4">

        <div class="rounded-2xl p-5" style="background:var(--bg2);border:1px solid var(--ta20)">
          <div class="text-[.6rem] font-bold uppercase tracking-wider mb-1" style="color:var(--w40)" data-en="Services from" data-ar="الخدمات تبدأ من">Services from</div>
          <div class="font-display font-extrabold text-3xl leading-none grad mb-0.5">150 EGP</div>
          <div class="text-xs mb-4" style="color:var(--w40)" data-en="4 services · each priced separately" data-ar="4 خدمات · كل واحدة بسعرها">4 services · each priced separately</div>
          <div class="flex items-center gap-2 p-2.5 rounded-xl mb-4" style="background:rgba(0,212,184,.07);border:1px solid rgba(0,212,184,.18)">
            <span class="w-2 h-2 rounded-full bg-green-400 shrink-0" style="animation:pulse-dot 2s ease-in-out infinite"></span>
            <div><div class="text-[.62rem] font-bold" style="color:var(--tl)" data-en="Next slot: Tomorrow 10 AM" data-ar="أقرب موعد: غداً 10 ص">Next slot: Tomorrow 10 AM</div></div>
          </div>
          <button id="btn-book-sb" class="btn-p w-full py-2.5 text-sm font-bold mb-2" data-en="Book a Session" data-ar="احجز جلسة">Book a Session</button>
          <button id="btn-msg-sb" class="btn-g w-full py-2 text-sm" data-en="Send Message" data-ar="راسله">Send Message</button>
          <div class="flex items-center justify-center gap-1.5 mt-3 text-[.6rem]" style="color:var(--w40)">
            <svg class="w-2.5 h-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <span data-en="100% refund if mentor cancels" data-ar="ضمان استرداد 100%">100% refund if mentor cancels</span>
          </div>
        </div>

        <div class="rounded-2xl p-5" style="background:var(--bg2);border:1px solid var(--ta12)">
          <div class="font-display font-bold text-sm mb-3" style="color:var(--w)" data-en="Mentor Stats" data-ar="الإحصائيات">Mentor Stats</div>
          <div class="flex flex-col gap-2.5">
            <div class="flex justify-between items-center">
              <span class="text-xs flex items-center gap-1.5" style="color:var(--w60)">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M8 2v4M16 2v4M3 10h18M3 4h18v16a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4z"/></svg>
                <span data-en="Sessions done" data-ar="جلسات مكتملة">Sessions done</span>
              </span>
              <span class="text-xs font-bold" style="color:var(--w)">342</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-xs flex items-center gap-1.5" style="color:var(--w60)">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <span data-en="Rating" data-ar="التقييم">Rating</span>
              </span>
              <span class="text-xs font-bold" style="color:var(--tl)">4.9 ★</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-xs flex items-center gap-1.5" style="color:var(--w60)">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M20 7H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>
                <span data-en="Placement rate" data-ar="معدل التوظيف">Placement rate</span>
              </span>
              <span class="text-xs font-bold" style="color:var(--tl)">89%</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-xs flex items-center gap-1.5" style="color:var(--w60)">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M17 1l4 4-4 4M3 11V9a4 4 0 0 1 4-4h14M7 23l-4-4 4-4M21 13v2a4 4 0 0 1-4 4H3"/></svg>
                <span data-en="Repeat clients" data-ar="عملاء يعودون">Repeat clients</span>
              </span>
              <span class="text-xs font-bold" style="color:var(--tl)">74%</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-xs flex items-center gap-1.5" style="color:var(--w60)">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M12 8v4l3 3M12 2a10 10 0 1 0 0 20A10 10 0 0 0 12 2z"/></svg>
                <span data-en="Response time" data-ar="وقت الاستجابة">Response time</span>
              </span>
              <span class="text-xs font-bold" style="color:var(--w)" data-en="~2 hours" data-ar="~ساعتين">~2 hours</span>
            </div>
          </div>
        </div>

        <div class="rounded-2xl p-5" style="background:var(--bg2);border:1px solid var(--ta12)">
          <div class="font-display font-bold text-sm mb-3" style="color:var(--w)" data-en="Details" data-ar="تفاصيل">Details</div>
          <div class="flex flex-col gap-2.5">
            <div class="flex justify-between items-center">
              <span class="text-xs flex items-center gap-1.5" style="color:var(--w60)">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10"/></svg>
                <span data-en="Languages" data-ar="اللغات">Languages</span>
              </span>
              <span class="text-xs font-semibold" style="color:var(--w)">العربية · English</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-xs flex items-center gap-1.5" style="color:var(--w60)">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                <span data-en="Member since" data-ar="عضو منذ">Member since</span>
              </span>
              <span class="text-xs font-semibold" style="color:var(--w)">Jan 2024</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-xs flex items-center gap-1.5" style="color:var(--w60)">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a3 3 0 0 0-3-3M16 3.13a4 4 0 0 1 0 7.74"/></svg>
                <span data-en="Communities" data-ar="مجتمعات">Communities</span>
              </span>
              <span class="text-xs font-semibold" style="color:var(--w)" data-en="2 active" data-ar="2 نشطة">2 active</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-xs flex items-center gap-1.5" style="color:var(--w60)">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4-6.2-4.5-6.2 4.5 2.4-7.4L2 9.4h7.6L12 2z"/></svg>
                <span data-en="Certificates" data-ar="شهادات">Certificates</span>
              </span>
              <span class="text-xs font-semibold" style="color:var(--w)">4</span>
            </div>
          </div>
        </div>

      </div>
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

<!-- ══ DETAILS MODAL ══ -->
<div class="mwrap" id="det-modal">
  <div class="mbox">
    <div class="flex items-center justify-between px-5 py-4" style="border-bottom:1px solid var(--ta12)">
      <div><div class="font-display font-bold text-base" style="color:var(--w)" id="dm-name">—</div><div class="text-xs mt-0.5" style="color:var(--w40)" id="dm-fmt">—</div></div>
      <button class="modal-x w-7 h-7 rounded-lg flex items-center justify-center" style="background:var(--ta08);color:var(--w60)"><svg class="w-3.5 h-3.5 pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M18 6L6 18M6 6l12 12"/></svg></button>
    </div>
    <div class="p-5">
      <div class="flex items-center justify-between mb-4">
        <div class="font-display font-extrabold text-2xl grad" id="dm-price">—</div>
        <span class="text-[.62rem] font-bold px-2.5 py-1 rounded-full" style="background:var(--ta12);border:1px solid var(--ta20);color:var(--tl)" data-en="per service" data-ar="للخدمة">per service</span>
      </div>
      <div class="text-sm leading-relaxed whitespace-pre-line mb-5" style="color:var(--w60)" id="dm-desc">—</div>
      <button class="btn-p w-full py-3 text-sm font-bold" id="dm-book" data-en="Book This Service" data-ar="احجز هذه الخدمة">Book This Service</button>
    </div>
  </div>
</div>

<!-- ══ BOOK MODAL ══ -->
<div class="mwrap" id="book-modal">
  <div class="mbox">
    <div class="flex items-center justify-between px-5 py-4" style="border-bottom:1px solid var(--ta12)">
      <div><div class="font-display font-bold text-base" style="color:var(--w)" data-en="Book a Session" data-ar="احجز جلسة">Book a Session</div><div class="text-xs mt-0.5" style="color:var(--w40)" data-en="with Ahmed El-Sayed" data-ar="مع أحمد السيد">with Ahmed El-Sayed</div></div>
      <button class="modal-x w-7 h-7 rounded-lg flex items-center justify-center" style="background:var(--ta08);color:var(--w60)"><svg class="w-3.5 h-3.5 pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M18 6L6 18M6 6l12 12"/></svg></button>
    </div>
    <div class="flex items-center gap-2 px-5 py-3" style="border-bottom:1px solid var(--ta12)">
      <div class="sc act" id="sc1">1</div><span class="text-xs font-semibold" style="color:var(--w)" data-en="Service" data-ar="الخدمة">Service</span>
      <div class="flex-1 h-px mx-1" style="background:var(--ta12)"></div>
      <div class="sc pend" id="sc2">2</div><span class="text-xs" style="color:var(--w60)" data-en="Details" data-ar="تفاصيل">Details</span>
      <div class="flex-1 h-px mx-1" style="background:var(--ta12)"></div>
      <div class="sc pend" id="sc3">3</div><span class="text-xs" style="color:var(--w60)" data-en="Confirm" data-ar="تأكيد">Confirm</span>
    </div>
    <div id="ms1" class="p-5">
      <div class="text-xs font-bold mb-3" style="color:var(--w60)" data-en="Select service:" data-ar="اختر خدمة:">Select service:</div>
      <div class="flex flex-col gap-2 mb-4" id="svc-picker"></div>
      <button id="s1next" class="btn-p w-full py-2.5 text-sm font-bold" data-en="Continue →" data-ar="متابعة →">Continue →</button>
    </div>
    <div id="ms2" class="p-5 hidden">
      <div class="flex flex-col gap-3 mb-4">
        <div><label class="text-xs font-bold mb-1.5 block" style="color:var(--w60)" data-en="Your Name" data-ar="اسمك">Your Name</label><input class="hc-input" data-en="Full name..." data-ar="الاسم الكامل..." placeholder="Full name..."></div>
        <div><label class="text-xs font-bold mb-1.5 block" style="color:var(--w60)" data-en="Your Goal" data-ar="هدفك">Your Goal</label><textarea class="hc-input" rows="3" style="resize:none" data-en="What result do you need?" data-ar="ما النتيجة التي تحتاجها؟" placeholder="What result do you need?"></textarea></div>
        <div><label class="text-xs font-bold mb-1.5 block" style="color:var(--w60)" data-en="Preferred Date & Time" data-ar="التاريخ والوقت">Preferred Date & Time</label><input type="datetime-local" class="hc-input" id="inp-dt" style="color-scheme:dark"></div>
      </div>
      <div class="flex gap-2"><button class="sback btn-g flex-1 py-2.5 text-sm" data-en="← Back" data-ar="← رجوع">← Back</button><button id="s2next" class="btn-p flex-1 py-2.5 text-sm font-bold" data-en="Review →" data-ar="مراجعة →">Review →</button></div>
    </div>
    <div id="ms3" class="p-5 hidden">
      <div class="rounded-xl p-4 mb-4" style="background:var(--ta08);border:1px solid var(--ta15)">
        <div class="text-xs font-bold mb-2" style="color:var(--w60)" data-en="Booking Summary" data-ar="ملخص الحجز">Booking Summary</div>
        <div class="flex justify-between mb-1"><span class="text-sm font-semibold" style="color:var(--w)" id="cs-n">—</span><span class="text-sm font-bold grad" id="cs-p">—</span></div>
        <div class="text-xs" style="color:var(--w40)" id="cs-t">—</div>
      </div>
      <div class="flex items-start gap-2 p-3 rounded-xl mb-4" style="background:rgba(0,212,184,.06);border:1px solid rgba(0,212,184,.15)">
        <svg class="w-4 h-4 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="var(--tl)" stroke-width="2" stroke-linecap="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        <p class="text-xs" style="color:var(--w60)" data-en="100% refund if Ahmed cancels. Reschedule up to 12h before." data-ar="استرداد 100% إذا ألغى أحمد. إعادة جدولة حتى 12 ساعة قبل.">100% refund if Ahmed cancels. Reschedule up to 12h before.</p>
      </div>
      <div class="flex gap-2"><button class="sback btn-g flex-1 py-2.5 text-sm" data-en="← Back" data-ar="← رجوع">← Back</button><button class="btn-p flex-1 py-3 text-sm font-bold" data-en="Confirm & Pay →" data-ar="تأكيد والدفع →">Confirm & Pay →</button></div>
    </div>
  </div>
</div>

<!-- ══ GIFT MODAL ══ -->
<div class="mwrap" id="gift-modal">
  <div class="mbox">
    <div class="flex items-center justify-between px-5 py-4" style="border-bottom:1px solid var(--ta12)">
      <div class="font-display font-bold text-base" style="color:var(--w)" data-en="Send a Gift" data-ar="أرسل هدية">Send a Gift</div>
      <button class="modal-x w-7 h-7 rounded-lg flex items-center justify-center" style="background:var(--ta08);color:var(--w60)"><svg class="w-3.5 h-3.5 pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M18 6L6 18M6 6l12 12"/></svg></button>
    </div>
    <div class="p-5">
      <p class="text-xs mb-4" style="color:var(--w60)" data-en="Choose a gift for Ahmed. Deducted from your points balance." data-ar="اختر هدية لأحمد. تُخصم من رصيد نقاطك.">Choose a gift for Ahmed. Deducted from your points balance.</p>
      <div class="grid grid-cols-4 gap-2.5 mb-5" id="gift-grid"></div>
      <div class="flex items-center gap-3 mb-4">
        <span class="text-xs font-bold shrink-0" style="color:var(--w60)" data-en="Quantity:" data-ar="الكمية:">Quantity:</span>
        <div class="flex items-center gap-2">
          <button id="qty-m" class="w-8 h-8 rounded-xl flex items-center justify-center font-bold" style="background:var(--ta08);border:1px solid var(--ta15);color:var(--w60)">−</button>
          <span id="qty-v" class="font-display font-bold text-xl" style="color:var(--w);min-width:2rem;text-align:center">1</span>
          <button id="qty-p" class="w-8 h-8 rounded-xl flex items-center justify-center font-bold" style="background:var(--ta08);border:1px solid var(--ta15);color:var(--w60)">+</button>
        </div>
      </div>
      <div class="rounded-xl p-3.5 mb-4" style="background:var(--ta08);border:1px solid var(--ta15)">
        <span class="text-xs" style="color:var(--w60)" id="gift-sum" data-en="Select a gift above" data-ar="اختر هدية من الأعلى">Select a gift above</span>
      </div>
      <button id="send-gift" class="btn-p w-full py-3 text-sm font-bold" data-en="Send Gift →" data-ar="أرسل الهدية →">Send Gift →</button>
    </div>
  </div>
</div>

<!-- ══ MSG MODAL ══ -->
<div class="mwrap" id="msg-modal">
  <div class="mbox">
    <div class="flex items-center justify-between px-5 py-4" style="border-bottom:1px solid var(--ta12)">
      <div class="font-display font-bold text-base" style="color:var(--w)" data-en="Message Ahmed" data-ar="راسل أحمد">Message Ahmed</div>
      <button class="modal-x w-7 h-7 rounded-lg flex items-center justify-center" style="background:var(--ta08);color:var(--w60)"><svg class="w-3.5 h-3.5 pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M18 6L6 18M6 6l12 12"/></svg></button>
    </div>
    <div class="p-5 flex flex-col gap-3">
      <div class="p-3 rounded-xl text-xs" style="background:var(--ta08);border:1px solid var(--ta12);color:var(--w60)" data-en="Replies in ~2 hours. Ask anything before booking." data-ar="يرد خلال ~ساعتين. اسأل أي شيء قبل الحجز.">Replies in ~2 hours. Ask anything before booking.</div>
      <input class="hc-input" data-en="Your name..." data-ar="اسمك..." placeholder="Your name...">
      <textarea class="hc-input" rows="4" style="resize:none" data-en="Your message..." data-ar="رسالتك..." placeholder="Your message..."></textarea>
      <button class="btn-p w-full py-3 text-sm font-bold" data-en="Send Message" data-ar="أرسل الرسالة">Send Message</button>
    </div>
  </div>
</div>

<!-- ══ SHARE MODAL ══ -->
<div class="mwrap" id="share-modal">
  <div class="mbox" style="max-width:400px">
    <div class="flex items-center justify-between px-5 py-4" style="border-bottom:1px solid var(--ta12)">
      <div class="font-display font-bold text-base" style="color:var(--w)" data-en="Share Profile" data-ar="مشاركة البروفايل">Share Profile</div>
      <button class="modal-x w-7 h-7 rounded-lg flex items-center justify-center" style="background:var(--ta08);color:var(--w60)"><svg class="w-3.5 h-3.5 pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M18 6L6 18M6 6l12 12"/></svg></button>
    </div>
    <div class="p-5">
      <p class="text-xs mb-4" style="color:var(--w60)" data-en="Share Ahmed's profile with your network." data-ar="شارك بروفايل أحمد مع شبكتك.">Share Ahmed's profile with your network.</p>
      <div class="flex gap-2 mb-4">
        <input class="hc-input flex-1 text-xs" id="share-link" value="halacareer.com/mentor/ahmed-elsayed" readonly style="color:var(--tl)">
        <button id="copy-btn" class="btn-g px-4 py-2 text-xs font-semibold shrink-0" data-en="Copy" data-ar="نسخ">Copy</button>
      </div>
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
var SVCS=[{id:"s1",en:"1-on-1 Strategy Session",ar:"جلسة استراتيجية فردية",price:"250 EGP",meta_en:"60 min · Video call",meta_ar:"60 دقيقة · فيديو"},{id:"s2",en:"CV & LinkedIn Audit",ar:"مراجعة CV وLinkedIn",price:"150 EGP",meta_en:"Async · 48h turnaround",meta_ar:"Async · 48 ساعة"},{id:"s3",en:"Career Roadmap Session",ar:"جلسة خارطة الطريق",price:"350 EGP",meta_en:"90 min · Video + written doc",meta_ar:"90 دقيقة · فيديو + وثيقة"},{id:"s4",en:"Sales Team Audit",ar:"تدقيق فريق المبيعات",price:"800 EGP",meta_en:"1 week · 2 calls + report",meta_ar:"أسبوع · مكالمتان + تقرير"}];
var GIFTS=[{e:"⭐",en:"Star",ar:"نجمة"},{e:"🎟️",en:"Ticket",ar:"تذكرة"},{e:"☕",en:"Coffee",ar:"قهوة"},{e:"🥇",en:"Gold",ar:"ذهب"},{e:"🥈",en:"Silver",ar:"فضة"},{e:"🥉",en:"Bronze",ar:"برونز"},{e:"💎",en:"Jewel",ar:"جوهرة"},{e:"🍀",en:"Clover",ar:"كلوفر"}];
var selSvc=SVCS[0],curStep=1,detSvcId=null,selGift=null,giftQty=1;

/* ─ SCROLL SPY ─ */
var SECS=['sec-services','sec-community','sec-about','sec-reviews','sec-achievements','sec-resources','sec-certs','sec-badges'];
var SNAV_OFF=64+44+20;
document.querySelectorAll('.snav-a').forEach(function(a){
  a.addEventListener('click',function(e){
    e.preventDefault();
    var el=document.getElementById(a.getAttribute('href').slice(1));
    if(el)window.scrollTo({top:el.getBoundingClientRect().top+window.scrollY-SNAV_OFF,behavior:'smooth'});
  });
});
window.addEventListener('scroll',function(){
  var cur='';
  SECS.forEach(function(id){var el=document.getElementById(id);if(el&&el.getBoundingClientRect().top<=SNAV_OFF)cur=id;});
  document.querySelectorAll('.snav-a').forEach(function(a){a.classList.toggle('on',a.getAttribute('href')==='#'+cur);});
},{passive:true});

/* ─ MODALS ─ */
function openM(id){document.getElementById(id).classList.add('open');document.body.style.overflow='hidden';}
function closeM(id){document.getElementById(id).classList.remove('open');document.body.style.overflow='';}
document.querySelectorAll('.mwrap').forEach(function(m){m.addEventListener('click',function(e){if(e.target===m){m.classList.remove('open');document.body.style.overflow='';}})});
document.querySelectorAll('.modal-x').forEach(function(b){b.addEventListener('click',function(){var m=b.closest('.mwrap');if(m){m.classList.remove('open');document.body.style.overflow='';}})});

/* ─ BOOK ─ */
function openBook(svcId){
  if(svcId)for(var i=0;i<SVCS.length;i++){if(SVCS[i].id===svcId){selSvc=SVCS[i];break;}}
  renderPicker();setStep(1);openM('book-modal');
}
document.querySelectorAll('.bk-btn').forEach(function(b){b.addEventListener('click',function(){openBook(b.getAttribute('data-svc'));});});
['btn-book-hero','btn-book-sb'].forEach(function(id){var el=document.getElementById(id);if(el)el.addEventListener('click',function(){openBook(null);});});

/* ─ DETAILS ─ */
document.querySelectorAll('.svc-det').forEach(function(b){
  b.addEventListener('click',function(){
    detSvcId=b.getAttribute('data-id');
    var n=document.getElementById('dm-name'),f=document.getElementById('dm-fmt'),p=document.getElementById('dm-price'),d=document.getElementById('dm-desc');
    if(n){n.dataset.en=b.getAttribute('data-en-n');n.dataset.ar=b.getAttribute('data-ar-n');n.textContent=isEn?n.dataset.en:n.dataset.ar;}
    if(f){f.dataset.en=b.getAttribute('data-fmt-en');f.dataset.ar=b.getAttribute('data-fmt-ar');f.textContent=isEn?f.dataset.en:f.dataset.ar;}
    if(p)p.textContent=b.getAttribute('data-price');
    if(d){d.dataset.en=b.getAttribute('data-en-l').replace(/\\n/g,'\n');d.dataset.ar=b.getAttribute('data-ar-l').replace(/\\n/g,'\n');d.textContent=isEn?d.dataset.en:d.dataset.ar;}
    openM('det-modal');
  });
});
document.getElementById('dm-book').addEventListener('click',function(){closeM('det-modal');openBook(detSvcId);});

/* ─ MSG ─ */
['btn-msg-hero','btn-msg-sb'].forEach(function(id){var el=document.getElementById(id);if(el)el.addEventListener('click',function(){openM('msg-modal');});});

/* ─ FOLLOW ─ */
var following=false;
document.getElementById('btn-follow').addEventListener('click',function(){
  following=!following;
  this.dataset.en=following?'✓ Following':'+ Follow';
  this.dataset.ar=following?'✓ تتابعه':'+ تابع';
  this.style.background=following?'var(--ta15)':'var(--ta08)';
  this.style.borderColor=following?'var(--ta30)':'var(--ta20)';
  this.style.color=following?'var(--tl)':'var(--w80)';
  applyLang();
});

/* ─ SHARE ─ */
document.getElementById('btn-share').addEventListener('click',function(){openM('share-modal');});
document.getElementById('copy-btn').addEventListener('click',function(){
  var inp=document.getElementById('share-link');
  navigator.clipboard.writeText(inp.value).then(function(){
    var btn=document.getElementById('copy-btn');
    btn.dataset.en='Copied!';btn.dataset.ar='تم النسخ!';btn.style.color='var(--tl)';applyLang();
    setTimeout(function(){btn.dataset.en='Copy';btn.dataset.ar='نسخ';btn.style.color='';applyLang();},2000);
  }).catch(function(){inp.select();document.execCommand('copy');});
});

/* ─ GIFT ─ */
document.getElementById('btn-gift').addEventListener('click',function(){renderGifts();openM('gift-modal');});
function renderGifts(){
  var g=document.getElementById('gift-grid');
  g.innerHTML=GIFTS.map(function(x,i){
    return '<div class="gitem" data-gi="'+i+'"><div style="font-size:1.7rem;line-height:1">'+x.e+'</div><div style="font-size:.6rem;font-weight:700;color:var(--w60)" data-en="'+x.en+'" data-ar="'+x.ar+'">'+(isEn?x.en:x.ar)+'</div></div>';
  }).join('');
  g.querySelectorAll('.gitem').forEach(function(el){
    el.addEventListener('click',function(){
      g.querySelectorAll('.gitem').forEach(function(x){x.classList.remove('on');});
      el.classList.add('on');selGift=parseInt(el.getAttribute('data-gi'));updateGSum();
    });
  });
}
function updateGSum(){
  var s=document.getElementById('gift-sum');if(!s)return;
  if(selGift===null){s.dataset.en='Select a gift above';s.dataset.ar='اختر هدية من الأعلى';s.textContent=isEn?s.dataset.en:s.dataset.ar;return;}
  var g=GIFTS[selGift];
  s.textContent=g.e+' '+(isEn?g.en:g.ar)+' × '+giftQty;
}
document.getElementById('qty-m').addEventListener('click',function(){if(giftQty>1){giftQty--;document.getElementById('qty-v').textContent=giftQty;updateGSum();}});
document.getElementById('qty-p').addEventListener('click',function(){giftQty++;document.getElementById('qty-v').textContent=giftQty;updateGSum();});

/* ─ STEPS ─ */
function setStep(n){
  curStep=n;
  [1,2,3].forEach(function(i){
    var el=document.getElementById('ms'+i),sc=document.getElementById('sc'+i);
    if(el)el.classList.toggle('hidden',i!==n);
    if(sc)sc.className='sc '+(i<n?'done':i===n?'act':'pend');
  });
}
document.getElementById('s1next').addEventListener('click',function(){setStep(2);});
document.getElementById('s2next').addEventListener('click',function(){
  var cn=document.getElementById('cs-n'),cp=document.getElementById('cs-p'),ct=document.getElementById('cs-t');
  if(cn){cn.dataset.en=selSvc.en;cn.dataset.ar=selSvc.ar;cn.textContent=isEn?selSvc.en:selSvc.ar;}
  if(cp)cp.textContent=selSvc.price;
  var dt=document.getElementById('inp-dt');
  if(ct)ct.textContent=(dt&&dt.value)?new Date(dt.value).toLocaleString():'—';
  setStep(3);
});
document.querySelectorAll('.sback').forEach(function(b){b.addEventListener('click',function(){setStep(curStep-1);});});

/* ─ PICKER ─ */
function renderPicker(){
  var g=document.getElementById('svc-picker');
  g.innerHTML=SVCS.map(function(s){
    var on=s.id===selSvc.id;
    return '<div class="prow'+(on?' on':'')+'" data-id="'+s.id+'">'+
      '<div class="flex items-center gap-3"><div class="hcr'+(on?' on':'')+' "></div>'+
      '<div><div class="text-sm font-semibold" style="color:var(--w)" data-en="'+s.en+'" data-ar="'+s.ar+'">'+(isEn?s.en:s.ar)+'</div>'+
      '<div class="text-[.65rem]" style="color:var(--w40)" data-en="'+s.meta_en+'" data-ar="'+s.meta_ar+'">'+(isEn?s.meta_en:s.meta_ar)+'</div></div></div>'+
      '<div class="font-display font-bold text-sm grad shrink-0">'+s.price+'</div></div>';
  }).join('');
  g.querySelectorAll('.prow').forEach(function(row){
    row.addEventListener('click',function(){
      var id=row.getAttribute('data-id');
      for(var i=0;i<SVCS.length;i++){if(SVCS[i].id===id){selSvc=SVCS[i];break;}}
      renderPicker();applyLang();
    });
  });
}

/* ─ INIT ─ */
document.addEventListener('DOMContentLoaded',function(){renderPicker();applyLang();});
</script>
</body></html>