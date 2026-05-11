<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>For Companies — HalaCareer — HalaCareer</title>
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


/* ── Stat box ── */
.stat-box{border-radius:.85rem;border:1px solid var(--ta12);background:rgba(5,14,26,.6);
  padding:.9rem 1rem;text-align:center}
html.light .stat-box{background:#fff !important}

/* ── Feature card ── */
.feat-card{border-radius:1rem;border:1px solid var(--ta12);background:rgba(5,14,26,.75);
  padding:1.5rem;transition:border-color .2s}
.feat-card:hover{border-color:var(--ta25,rgba(0,212,184,.22))}
html.light .feat-card{background:#fff !important;border-color:rgba(0,212,184,.2) !important}
.feat-icon{width:44px;height:44px;border-radius:.85rem;flex-shrink:0;
  display:flex;align-items:center;justify-content:center;
  background:var(--ta08);border:1px solid var(--ta12);color:var(--tl)}
.feat-icon svg{width:20px;height:20px}

/* ── Problem cards ── */
.prob-card{border-radius:1rem;border:1px solid var(--ta12);padding:1.5rem;
  background:rgba(5,14,26,.6);transition:border-color .2s}
html.light .prob-card{background:#f0fdfb !important;border-color:rgba(0,212,184,.25) !important}

/* ── Pricing row ── */
.pricing-row{display:grid;grid-template-columns:200px 1fr 90px;align-items:center;
  gap:1.25rem;padding:1rem 1.25rem;border-radius:1rem;border:1px solid var(--ta15);
  background:rgba(5,14,26,.5);transition:border-color .18s}
.pricing-row:hover{border-color:var(--ta25,rgba(0,212,184,.22))}
@media(max-width:768px){.pricing-row{grid-template-columns:1fr}}
html.light .pricing-row{background:#fff !important;border-color:rgba(0,212,184,.2) !important}
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
.summary-card{border-radius:1.1rem;padding:1.25rem;border:1px solid var(--ta15);
  background:rgba(5,14,26,.75)}
html.light .summary-card{background:#fff !important;border-color:rgba(0,212,184,.25) !important}
.breakdown-row{display:flex;justify-content:space-between;align-items:center;
  font-size:.75rem;padding:.4rem 0;border-bottom:1px solid var(--ta08)}
.breakdown-row:last-child{border-bottom:none}

/* ── Currency pill ── */
.curr-pill{padding:.3rem .85rem;border-radius:999px;font-size:.75rem;font-weight:600;
  border:1px solid var(--ta15);background:transparent;color:var(--w60);
  cursor:pointer;transition:all .18s}
.curr-pill.on,.curr-pill:hover{background:var(--ta12);border-color:var(--ta30);color:var(--tl)}
html.light .curr-pill{color:#6b7280;border-color:rgba(0,212,184,.2)}
html.light .curr-pill.on{background:rgba(0,212,184,.08);color:var(--td);border-color:rgba(0,188,164,.4)}

/* ── Ticker ── */
.tp-section{padding:2.5rem 0;border-top:1px solid var(--ta12);border-bottom:1px solid var(--ta12)}
.tp-label{font-size:.65rem;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:var(--w40)}
html.light .tp-label{color:#9ca3af}
.tp-outer{position:relative;overflow:hidden}
.tp-fade{position:absolute;top:0;bottom:0;width:120px;pointer-events:none;z-index:2}
.tp-fade-l{left:0;background:linear-gradient(to right,var(--bg2,var(--bg)) 20%,transparent)}
.tp-fade-r{right:0;background:linear-gradient(to left,var(--bg2,var(--bg)) 20%,transparent)}
.tp-belt{display:flex;align-items:center;gap:.9rem;position:relative;white-space:nowrap;height:48px;padding:.25rem 0}
.tp-pill{display:inline-flex;align-items:center;padding:.5rem 1.2rem;border-radius:999px;
  border:1px solid var(--ta15);background:transparent;font-size:.82rem;font-weight:600;
  color:var(--w60);white-space:nowrap;flex-shrink:0;position:absolute;
  font-family:'Plus Jakarta Sans',sans-serif;transition:border-color .15s,color .15s}
html[dir=rtl] .tp-pill{font-family:'Cairo',sans-serif}
.tp-pill:hover{border-color:rgba(0,212,184,.35);color:var(--w)}
html.light .tp-pill{color:#6b7280;border-color:rgba(0,212,184,.2)}

/* ── Form plan summary ── */
.plan-summary-bar{border-radius:.85rem;padding:.85rem 1rem;
  background:var(--ta08);border:1.5px solid var(--ta15);
  display:flex;align-items:center;justify-content:space-between;min-height:48px}
html.light .plan-summary-bar{background:#f0fdfb;border-color:rgba(0,188,164,.3)}

/* ── hc-label ── */
.hc-label{font-size:.72rem;font-weight:700;color:var(--w60);display:block;margin-bottom:.4rem}
html.light .hc-label{color:#4b5563}


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
</style></head><body><!-- Cursor -->
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
  <div class="linegrid absolute inset-0 opacity-25 pointer-events-none"></div>
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse 50% 65% at 85% 55%,rgba(0,212,184,.08),transparent 60%);pointer-events:none"></div>
  <div class="relative z-10 max-w-[1280px] mx-auto px-5">
    <div class="grid grid-cols-1 lg:grid-cols-[1fr_400px] gap-12 items-center">
      <div>
        <div class="sec-eyebrow mb-4" data-en="HalaCareer for Companies" data-ar="هلا كارير للشركات">هلا كارير للشركات</div>
        <h1 class="font-display font-extrabold tracking-tight mb-5" style="font-size:clamp(2.2rem,4.2vw,3.4rem);color:var(--w)">
          <span data-en="Stop training hires." data-ar="أوقف تدريب الموظفين.">أوقف تدريب الموظفين.</span><br>
          <span class="grad shimmer-text" data-en="Hire the trained." data-ar="وظّف المُدرَّب فعلاً.">وظّف المُدرَّب فعلاً.</span>
        </h1>
        <p class="text-base leading-relaxed mb-8 max-w-xl" style="color:var(--w60)"
           data-en="Connect with candidates whose skills are verified by HalaCareer's diploma system. Post a job, get ranked applicants, hire with confidence."
           data-ar="تواصل مع مرشحين مهاراتهم موثّقة بنظام دبلومات هلا كارير. انشر وظيفة، استقبل متقدمين مُرتَّبين، وظّف بثقة.">
          تواصل مع مرشحين مهاراتهم موثّقة بنظام دبلومات هلا كارير. انشر وظيفة، استقبل متقدمين مُرتَّبين، وظّف بثقة.
        </p>
        <div class="flex flex-wrap gap-3 mb-10">
          <a href="#plans" class="btn-p px-8 py-3.5 text-sm font-bold" data-en="Build Your Plan →" data-ar="ابنِ خطتك ←">ابنِ خطتك ←</a>
          <a href="#register" class="btn-g px-7 py-3.5 text-sm" data-en="Register Company" data-ar="سجّل شركتك">سجّل شركتك</a>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
          <div class="stat-box"><div class="font-display font-extrabold text-2xl grad leading-none mb-0.5">340+</div><div class="text-[.6rem] font-semibold" style="color:var(--w40)" data-en="Companies Hiring" data-ar="شركة توظف">شركة توظف</div></div>
          <div class="stat-box"><div class="font-display font-extrabold text-2xl grad leading-none mb-0.5">48h</div><div class="text-[.6rem] font-semibold" style="color:var(--w40)" data-en="Avg. Time to Hire" data-ar="متوسط التوظيف">متوسط التوظيف</div></div>
          <div class="stat-box"><div class="font-display font-extrabold text-2xl grad leading-none mb-0.5">82%</div><div class="text-[.6rem] font-semibold" style="color:var(--w40)" data-en="Match Accuracy" data-ar="دقة التطابق">دقة التطابق</div></div>
          <div class="stat-box"><div class="font-display font-extrabold text-2xl grad leading-none mb-0.5">Free</div><div class="text-[.6rem] font-semibold" style="color:var(--w40)" data-en="First Job Post" data-ar="أول وظيفة">أول وظيفة</div></div>
        </div>
      </div>
      <!-- Hero preview -->
      <div class="hidden lg:block">
        <div class="rounded-2xl p-5" style="background:rgba(4,11,22,.9);border:1px solid var(--ta20)">
          <div class="text-[.62rem] font-bold uppercase tracking-wider mb-4" style="color:var(--w40)" data-en="Incoming applicants — Sales Manager" data-ar="متقدمون — مدير مبيعات">متقدمون — مدير مبيعات</div>
          <div class="flex flex-col gap-2.5">
            <div class="flex items-center gap-3 p-3 rounded-xl hero-cand-top" style="background:linear-gradient(135deg,rgba(0,212,184,.1),rgba(5,14,26,.6));border:1px solid rgba(0,212,184,.25)">
              <div class="w-9 h-9 rounded-xl flex items-center justify-center font-display font-bold text-xs" style="background:linear-gradient(135deg,#2de0ca,#009e85);color:rgba(0,0,0,.65)">MH</div>
              <div class="flex-1 min-w-0">
                <div class="font-bold text-xs" style="color:var(--w)">Mohamed Hassan</div>
                <div class="text-[.62rem]" style="color:var(--w40)">Sales Excellence Diploma ✓ · 6 yrs</div>
              </div>
              <div class="text-end shrink-0">
                <div class="font-display font-bold text-sm grad">96%</div>
                <div class="text-[.55rem]" style="color:var(--w40)">match</div>
              </div>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-xl hero-cand-row" style="background:rgba(5,14,26,.6);border:1px solid var(--ta12)">
              <div class="w-9 h-9 rounded-xl flex items-center justify-center font-display font-bold text-xs" style="background:linear-gradient(135deg,#2de0ca,#009e85);color:rgba(0,0,0,.65)">SK</div>
              <div class="flex-1 min-w-0">
                <div class="font-bold text-xs" style="color:var(--w)">Sara Kamal</div>
                <div class="text-[.62rem]" style="color:var(--w40)">B2B Strategy Diploma ✓ · 4 yrs</div>
              </div>
              <div class="text-end shrink-0">
                <div class="font-display font-bold text-sm grad">88%</div>
                <div class="text-[.55rem]" style="color:var(--w40)">match</div>
              </div>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-xl hero-cand-row" style="background:rgba(5,14,26,.6);border:1px solid var(--ta12)">
              <div class="w-9 h-9 rounded-xl flex items-center justify-center font-display font-bold text-xs" style="background:linear-gradient(135deg,#2de0ca,#007a68);color:rgba(0,0,0,.65)">AE</div>
              <div class="flex-1 min-w-0">
                <div class="font-bold text-xs" style="color:var(--w)">Ahmed El-Sayed</div>
                <div class="text-[.62rem]" style="color:var(--w40)">Business Dev. Diploma ✓ · 8 yrs</div>
              </div>
              <div class="text-end shrink-0">
                <div class="font-display font-bold text-sm grad">81%</div>
                <div class="text-[.55rem]" style="color:var(--w40)">match</div>
              </div>
            </div>
          </div>
          <div class="mt-3 pt-3 flex items-center justify-between" style="border-top:1px solid var(--ta12)">
            <div class="text-xs" style="color:var(--w40)" data-en="8,400+ verified candidates" data-ar="+8,400 مرشح موثّق">+8,400 مرشح موثّق</div>
            <div class="flex items-center gap-1.5 text-xs" style="color:var(--tl)">
              <span class="w-1.5 h-1.5 rounded-full" style="background:var(--tl);animation:pulse-dot 2s infinite"></span>
              <span data-en="Live matching" data-ar="تطابق مباشر">تطابق مباشر</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ PROBLEM ══ -->
<section class="py-16" style="background:var(--bg)">
  <div class="max-w-[1280px] mx-auto px-5">
    <div class="text-center mb-12">
      <div class="sec-eyebrow mb-3" data-en="The Real Problem" data-ar="المشكلة الحقيقية">المشكلة الحقيقية</div>
      <h2 class="font-display font-extrabold" style="font-size:clamp(1.6rem,3vw,2.4rem);color:var(--w)"
          data-en="Traditional hiring is broken." data-ar="التوظيف التقليدي مكسور.">التوظيف التقليدي مكسور.</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
      <div class="prob-card accent-card accent-teal">
        <div class="font-display font-extrabold text-3xl grad mb-2">6 wks</div>
        <div class="font-bold text-sm mb-2" style="color:var(--w)" data-en="Average time-to-hire" data-ar="متوسط وقت التوظيف">متوسط وقت التوظيف</div>
        <div class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Industry average for a mid-level role. Screening unqualified CVs is the #1 bottleneck." data-ar="المتوسط في مصر لدور متوسط. فرز CVs غير مؤهلة هو أكبر عائق.">المتوسط في مصر لدور متوسط. فرز CVs غير مؤهلة هو أكبر عائق.</div>
      </div>
      <div class="prob-card accent-card accent-teal">
        <div class="font-display font-extrabold text-3xl grad mb-2">40%</div>
        <div class="font-bold text-sm mb-2" style="color:var(--w)" data-en="Of salary spent on onboarding" data-ar="من الراتب على التأهيل">من الراتب على التأهيل</div>
        <div class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Avg. first-year cost spent training new hires before they become productive." data-ar="متوسط تكلفة السنة الأولى على تدريب الموظفين الجدد قبل إنتاجيتهم.">متوسط تكلفة السنة الأولى على تدريب الموظفين الجدد قبل إنتاجيتهم.</div>
      </div>
      <div class="prob-card accent-card accent-teal" style="border-color:var(--ta25,rgba(0,212,184,.22))">
        <div class="font-display font-extrabold text-3xl grad mb-2">48h</div>
        <div class="font-bold text-sm mb-2" style="color:var(--w)" data-en="HalaCareer avg. time to hire" data-ar="متوسط هلا كارير للتوظيف">متوسط هلا كارير للتوظيف</div>
        <div class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Candidates arrive pre-verified and skills-matched. Interview for culture fit only." data-ar="المرشحون يصلون موثّقين ومطابَقين. قابل للتوافق الثقافي فقط.">المرشحون يصلون موثّقين ومطابَقين. قابل للتوافق الثقافي فقط.</div>
      </div>
    </div>
  </div>
</section>

<!-- ══ HOW IT WORKS — horizontal track ══ -->
<section class="py-16" style="background:var(--bg2)">
  <div class="max-w-[900px] mx-auto px-5">
    <div class="text-center mb-12">
      <div class="sec-eyebrow mb-3" data-en="How It Works" data-ar="كيف يعمل">كيف يعمل</div>
      <h2 class="font-display font-extrabold" style="font-size:clamp(1.6rem,3vw,2.4rem);color:var(--w)">
        <span data-en="From job post to hire —" data-ar="من نشر الوظيفة للتوظيف —">من نشر الوظيفة للتوظيف —</span>
        <span class="grad shimmer-text" data-en=" in 48 hours." data-ar=" في 48 ساعة."> في 48 ساعة.</span>
      </h2>
    </div>
    <div class="hiw-track">
      <div class="hiw-step">
        <div class="hiw-icon-wrap"><div class="hiw-num">1</div>
          <div class="hiw-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg></div></div>
        <div class="hiw-content">
          <div class="hiw-title" data-en="Post a job" data-ar="انشر وظيفة">انشر وظيفة</div>
          <div class="hiw-badge" data-en="Under 3 min" data-ar="أقل من 3 دقائق">أقل من 3 دقائق</div>
          <div class="hiw-desc" data-en="Title, requirements, skills. That's it." data-ar="المسمى والمتطلبات والمهارات. هذا كل شيء.">المسمى والمتطلبات والمهارات. هذا كل شيء.</div>
        </div>
      </div>
      <div class="hiw-connector"><svg viewBox="0 0 40 12" fill="none"><path d="M0 6h36M30 1l6 5-6 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      <div class="hiw-step">
        <div class="hiw-icon-wrap"><div class="hiw-num">2</div>
          <div class="hiw-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></div></div>
        <div class="hiw-content">
          <div class="hiw-title" data-en="AI matches candidates" data-ar="الذكاء يطابق المرشحين">الذكاء يطابق المرشحين</div>
          <div class="hiw-badge" data-en="Auto-ranked" data-ar="مُرتَّب تلقائياً">مُرتَّب تلقائياً</div>
          <div class="hiw-desc" data-en="Skills, diplomas, experience — weighted and ranked." data-ar="المهارات والدبلومات والخبرة — مُرجَّحة ومُرتَّبة.">المهارات والدبلومات والخبرة — مُرجَّحة ومُرتَّبة.</div>
        </div>
      </div>
      <div class="hiw-connector"><svg viewBox="0 0 40 12" fill="none"><path d="M0 6h36M30 1l6 5-6 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      <div class="hiw-step">
        <div class="hiw-icon-wrap"><div class="hiw-num">3</div>
          <div class="hiw-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg></div></div>
        <div class="hiw-content">
          <div class="hiw-title" data-en="Review & shortlist" data-ar="راجع واختصر">راجع واختصر</div>
          <div class="hiw-badge" data-en="Verified only" data-ar="موثّق فقط">موثّق فقط</div>
          <div class="hiw-desc" data-en="Real credentials, not self-reported CVs." data-ar="مؤهلات حقيقية لا CVs معلَنة ذاتياً.">مؤهلات حقيقية لا CVs معلَنة ذاتياً.</div>
        </div>
      </div>
      <div class="hiw-connector"><svg viewBox="0 0 40 12" fill="none"><path d="M0 6h36M30 1l6 5-6 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      <div class="hiw-step">
        <div class="hiw-icon-wrap"><div class="hiw-num">4</div>
          <div class="hiw-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l8.84 8.84 8.84-8.84a5.5 5.5 0 000-7.78z"/></svg></div></div>
        <div class="hiw-content">
          <div class="hiw-title" data-en="Interview & hire" data-ar="قابل ووظّف">قابل ووظّف</div>
          <div class="hiw-badge" data-en="Culture check" data-ar="توافق ثقافي">توافق ثقافي</div>
          <div class="hiw-desc" data-en="They're qualified. Just confirm culture fit." data-ar="هم مؤهَّلون. أكّد التوافق الثقافي فقط.">هم مؤهَّلون. أكّد التوافق الثقافي فقط.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ FEATURES ══ -->
<section class="py-16" style="background:var(--bg)">
  <div class="max-w-[1280px] mx-auto px-5">
    <div class="text-center mb-12">
      <div class="sec-eyebrow mb-3" data-en="Platform Features" data-ar="مزايا المنصة">مزايا المنصة</div>
      <h2 class="font-display font-extrabold" style="font-size:clamp(1.6rem,3vw,2.4rem);color:var(--w)"
          data-en="Everything you need to hire smarter." data-ar="كل ما تحتاجه للتوظيف بذكاء.">كل ما تحتاجه للتوظيف بذكاء.</h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <div class="feat-card">
        <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></div>
        <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Smart Candidate Matching" data-ar="تطابق ذكي للمرشحين">تطابق ذكي للمرشحين</h3>
        <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="System ranks applicants by match score — skills, experience, and diploma completions all weighted automatically." data-ar="النظام يرتب المتقدمين بنسبة تطابق — المهارات والخبرة وإتمام الدبلومات مُرجَّحة تلقائياً.">النظام يرتب المتقدمين بنسبة تطابق — المهارات والخبرة وإتمام الدبلومات مُرجَّحة تلقائياً.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg></div>
        <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Verified Skills & Credentials" data-ar="مهارات وشهادات موثّقة">مهارات وشهادات موثّقة</h3>
        <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Every candidate's diploma and course completions are verified by HalaCareer. Real credentials, not self-reported CVs." data-ar="كل إتمام دبلومة وكورس للمرشح موثّق من هلا كارير. مؤهلات حقيقية لا CVs معلَنة ذاتياً.">كل إتمام دبلومة وكورس للمرشح موثّق من هلا كارير. مؤهلات حقيقية لا CVs معلَنة ذاتياً.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg></div>
        <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Dashboard & Analytics" data-ar="لوحة تحكم وتحليلات">لوحة تحكم وتحليلات</h3>
        <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Track active jobs, applicant pipeline, team training progress, and hiring reports — all in one place." data-ar="تتبع الوظائف النشطة وخط المتقدمين وتقدم تدريب الفريق وتقارير التوظيف — كل ذلك في مكان واحد.">تتبع الوظائف النشطة وخط المتقدمين وتقدم تدريب الفريق وتقارير التوظيف — كل ذلك في مكان واحد.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
        <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Priority Inbox" data-ar="بريد الأولوية">بريد الأولوية</h3>
        <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Premium applicants with verified diplomas jump to the top of your inbox. No more sifting through unqualified CVs." data-ar="المتقدمون البريميم بالدبلومات الموثّقة يقفزون لأعلى بريدك. لا مزيد من فرز الـ CVs غير المؤهلة.">المتقدمون البريميم بالدبلومات الموثّقة يقفزون لأعلى بريدك.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M8 14l-2 7 6-3 6 3-2-7"/></svg></div>
        <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Corporate Training Programs" data-ar="برامج تدريب الشركات">برامج تدريب الشركات</h3>
        <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Build custom learning paths for your team using our diploma system. Upskill without external training firms." data-ar="ابنِ مسارات تعلم مخصصة لفريقك. طوّر موظفيك بدون شركات تدريب خارجية.">ابنِ مسارات تعلم مخصصة لفريقك. طوّر موظفيك بدون شركات تدريب خارجية.</p>
      </div>
      <div class="feat-card">
        <div class="feat-icon mb-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
        <h3 class="font-display font-bold text-sm mb-2" style="color:var(--w)" data-en="Dedicated Account Manager" data-ar="مدير حساب مخصص">مدير حساب مخصص</h3>
        <p class="text-xs leading-relaxed" style="color:var(--w60)" data-en="Every Growth and Enterprise company gets a dedicated rep who helps set up jobs, filter candidates, and optimize results." data-ar="كل شركة Growth وEnterprise تحصل على ممثل مخصص يساعد في الوظائف والمرشحين وتحسين النتائج.">كل شركة Growth وEnterprise تحصل على ممثل مخصص يساعد في الوظائف والمرشحين وتحسين النتائج.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ TRUSTED BY — RING LOOP ══ -->
<section class="tp-section">
  <div class="text-center mb-6">
    <p class="tp-label" data-en="Trusted by 340+ companies in Egypt &amp; the Gulf" data-ar="موثوق به من +340 شركة في مصر والخليج">موثوق به من +340 شركة في مصر والخليج</p>
  </div>
  <div class="tp-outer">
    <div class="tp-fade tp-fade-l"></div>
    <div class="tp-fade tp-fade-r"></div>
    <div class="tp-belt" id="tp-belt">
      <span class="tp-pill">Savills Egypt</span><span class="tp-pill">Mountain View</span><span class="tp-pill">Oracle</span><span class="tp-pill">Hilton</span><span class="tp-pill">JLL</span><span class="tp-pill">CBRE</span><span class="tp-pill">P&G</span><span class="tp-pill">Berlitz</span><span class="tp-pill">Emaar</span><span class="tp-pill">ADNOC</span><span class="tp-pill">Saudi Aramco</span><span class="tp-pill">STC</span><span class="tp-pill">Aldar</span><span class="tp-pill">DP World</span><span class="tp-pill">Majid Al Futtaim</span><span class="tp-pill">Careem</span><span class="tp-pill">Talabat</span><span class="tp-pill">Chalhoub Group</span><span class="tp-pill">Unilever</span><span class="tp-pill">Vezeeta</span>
    </div>
  </div>
</section>

<!-- ══ PRICING SLIDERS ══ -->
<section class="py-16" style="background:var(--bg)" id="plans">
  <div class="max-w-[1200px] mx-auto px-5">
    <div class="text-center mb-10">
      <div class="sec-eyebrow mb-3" data-en="Company Pricing" data-ar="تسعير الشركات">تسعير الشركات</div>
      <h2 class="font-display font-extrabold" style="font-size:clamp(1.6rem,3vw,2.4rem);color:var(--w)">
        <span data-en="Build your plan." data-ar="ابنِ خطتك.">ابنِ خطتك.</span>
        <span class="grad shimmer-text" data-en=" Pay for what you use." data-ar=" ادفع على ما تستخدمه."> ادفع على ما تستخدمه.</span>
      </h2>
      <p class="text-sm mt-2 max-w-lg mx-auto" style="color:var(--w60)"
         data-en="Slide each feature to the level you need. Total updates instantly."
         data-ar="حرّك كل ميزة للمستوى الذي تحتاجه. مجموعك يتحدث فوراً.">حرّك كل ميزة للمستوى الذي تحتاجه. مجموعك يتحدث فوراً.</p>
    </div>
    <!-- Currency -->
    <div class="flex items-center justify-center gap-2 mb-8 flex-wrap">
      <span class="text-xs font-semibold me-1" style="color:var(--w60)" data-en="Currency:" data-ar="العملة:">العملة:</span>
      <button class="curr-pill on" data-rate="1"      data-sym="EGP" onclick="pickCurr(this)">🇪🇬 EGP</button>
      <button class="curr-pill"    data-rate="0.0689" data-sym="SAR" onclick="pickCurr(this)">🇸🇦 SAR</button>
      <button class="curr-pill"    data-rate="0.0675" data-sym="AED" onclick="pickCurr(this)">🇦🇪 AED</button>
      <button class="curr-pill"    data-rate="0.01595" data-sym="€" onclick="pickCurr(this)">🌍 EUR</button>
      <button class="curr-pill"    data-rate="0.01837" data-sym="$" onclick="pickCurr(this)">🇺🇸 USD</button>
    </div>
    <p class="text-center text-[.6rem] mb-8" style="color:var(--w40)">CBE rates · Apr 10 2026 · $1=54.43 EGP · €1=62.71 EGP · 1 AED=14.82 EGP · 1 SAR=14.50 EGP</p>

    <!-- Grid: sliders + summary -->
    <div class="grid grid-cols-1 lg:grid-cols-[1fr_280px] gap-6">
      <!-- Sliders -->
      <div class="flex flex-col gap-3">

        <div class="pricing-row">
          <div class="flex items-center gap-3">
            <div class="pricing-row-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
            <div><div class="text-sm font-bold" style="color:var(--w)" data-en="Employee Seats" data-ar="مقاعد الموظفين">مقاعد الموظفين</div><div class="text-[.65rem]" style="color:var(--w40)" data-en="Team access" data-ar="وصول الفريق">وصول الفريق</div></div>
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
          <div class="text-end">
            <div class="pricing-val" id="val-emp">5</div>
            <div class="pricing-price" id="price-emp" style="color:var(--tl)" data-en="Free" data-ar="مجاني">مجاني</div>
          </div>
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
          <div class="text-end">
            <div class="pricing-val" id="val-job">2</div>
            <div class="pricing-price" id="price-job" style="color:var(--tl)" data-en="Free" data-ar="مجاني">مجاني</div>
          </div>
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
          <div class="text-end">
            <div class="pricing-val" id="val-views">5</div>
            <div class="pricing-price" id="price-views" style="color:var(--tl)" data-en="Free" data-ar="مجاني">مجاني</div>
          </div>
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
          <div class="text-end">
            <div class="pricing-val" id="val-msg" style="color:var(--w40)">0</div>
            <div class="pricing-price" id="price-msg" style="color:var(--w40)">—</div>
          </div>
        </div>

        <div class="pricing-row" style="border-color:rgba(0,212,184,.2)">
          <div class="flex items-center gap-3">
            <div class="pricing-row-icon" style="border-color:rgba(0,212,184,.25)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2h14a2 2 0 002-2v-5z"/><path d="M16 12a2 2 0 000 4h5v-4h-5z"/></svg></div>
            <div><div class="text-sm font-bold" style="color:var(--w)" data-en="Training Wallet" data-ar="محفظة التدريب">محفظة التدريب</div><div class="text-[.65rem]" style="color:var(--w40)" data-en="Deducted per video" data-ar="تُخصَم لكل فيديو">تُخصَم لكل فيديو</div></div>
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
          <div class="text-end">
            <div class="pricing-val" id="val-wallet" style="color:var(--w40)">0</div>
            <div class="pricing-price" id="price-wallet" style="color:var(--w40)">—</div>
          </div>
        </div>

      </div>

      <!-- Summary card -->
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
            <!-- Progress bar -->
            <div id="bonus-wrap">
              <div class="flex justify-between text-[.6rem] mb-1">
                <span id="bonus-lbl" style="color:var(--w40)">حتى مكافأة 5,000 EGP</span>
                <span id="bonus-pct" style="color:var(--tl)">0%</span>
              </div>
              <div style="height:4px;border-radius:999px;background:var(--ta12);overflow:hidden">
                <div id="bonus-bar" style="height:100%;width:0%;border-radius:999px;background:linear-gradient(to right,#2de0ca,#009e85);transition:width .35s"></div>
              </div>
            </div>
            <a href="#register" class="btn-p w-full py-2.5 text-sm font-bold mt-4 block text-center" id="cta-plan" data-en="Get This Plan →" data-ar="احصل على هذه الخطة ←">احصل على هذه الخطة ←</a>
          </div>
          <!-- Bonus banners -->
          <div id="bonus-5k" class="hidden mt-3 rounded-xl p-3" style="background:var(--ta08);border:1px solid var(--ta20)">
            <div class="font-bold text-xs mb-1" style="color:var(--tl)" data-en="🎁 5,000 bonus unlocked!" data-ar="🎁 مكافأة 5,000 مفعّلة!">🎁 مكافأة 5,000 مفعّلة!</div>
            <div class="text-[.65rem]" style="color:var(--w60)" data-en="Training (5 seats) · Account manager · Analytics · Phone support" data-ar="تدريب (5 مقاعد) · مدير حساب · تحليلات · دعم هاتفي">تدريب (5 مقاعد) · مدير حساب · تحليلات · دعم هاتفي</div>
          </div>
          <div id="bonus-10k" class="hidden mt-3 rounded-xl p-3" style="background:var(--ta08);border:1px solid var(--ta20)">
            <div class="font-bold text-xs mb-1" style="color:var(--tl)" data-en="👑 10,000 bonus unlocked!" data-ar="👑 مكافأة 10,000 مفعّلة!">👑 مكافأة 10,000 مفعّلة!</div>
            <div class="text-[.65rem]" style="color:var(--w60)" data-en="All above + Training (10 seats) + HR consultant + Advanced analytics" data-ar="كل ما سبق + تدريب (10 مقاعد) + مستشار HR + تحليلات متقدمة">كل ما سبق + تدريب (10 مقاعد) + مستشار HR + تحليلات متقدمة</div>
          </div>
          <!-- Fixed plans -->
          <div class="mt-4 p-3 rounded-xl text-center" style="border:1px solid var(--ta12);background:var(--ta08)">
            <div class="text-[.65rem] mb-1.5" style="color:var(--w60)" data-en="Prefer a fixed plan?" data-ar="تفضّل خطة ثابتة؟">تفضّل خطة ثابتة؟</div>
            <div class="flex justify-center gap-3 text-xs font-bold flex-wrap">
              <span style="color:var(--tl)">Basic: 499 EGP</span>
              <span style="color:var(--w40)">·</span>
              <span style="color:var(--tl)">Pro: 1,499 EGP</span>
              <span style="color:var(--w40)">·</span>
              <a href="#register" style="color:var(--tl)" data-en="Enterprise →" data-ar="Enterprise ←">Enterprise ←</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ REGISTER FORM ══ -->
<section class="py-16" style="background:var(--bg2)" id="register">
  <div class="max-w-[640px] mx-auto px-5">
    <div class="text-center mb-8">
      <div class="sec-eyebrow mb-3" data-en="Register Your Company" data-ar="سجّل شركتك">سجّل شركتك</div>
      <h2 class="font-display font-extrabold text-2xl mb-2" style="color:var(--w)" data-en="Get started today." data-ar="ابدأ اليوم.">ابدأ اليوم.</h2>
      <p class="text-sm" style="color:var(--w60)" data-en="Free to start. We'll contact you within 24 hours." data-ar="مجاني للبدء. سنتواصل معك خلال 24 ساعة.">مجاني للبدء. سنتواصل معك خلال 24 ساعة.</p>
    </div>
    <div class="ds-card p-7">
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
        <div>
          <label class="hc-label" data-en="Company Name *" data-ar="اسم الشركة *">اسم الشركة *</label>
          <input class="hc-input" data-en="Your company name..." data-ar="اسم شركتك..." placeholder="اسم شركتك...">
        </div>
        <div>
          <label class="hc-label" data-en="Sector" data-ar="القطاع">القطاع</label>
          <select class="hc-select w-full" style="width:100%">
            <option>اختر...</option>
            <option data-en="Sales & Marketing" data-ar="مبيعات وتسويق">مبيعات وتسويق</option>
            <option data-en="Real Estate" data-ar="العقارات">العقارات</option>
            <option data-en="Education" data-ar="التعليم">التعليم</option>
            <option data-en="Technology" data-ar="التكنولوجيا">التكنولوجيا</option>
            <option data-en="FMCG / Retail" data-ar="FMCG / تجزئة">FMCG / تجزئة</option>
            <option data-en="Other" data-ar="أخرى">أخرى</option>
          </select>
        </div>
        <div>
          <label class="hc-label" data-en="Contact Name *" data-ar="اسم جهة الاتصال *">اسم جهة الاتصال *</label>
          <input class="hc-input" data-en="Full name..." data-ar="الاسم الكامل..." placeholder="الاسم الكامل...">
        </div>
        <div>
          <label class="hc-label" data-en="Job Title" data-ar="المسمى الوظيفي">المسمى الوظيفي</label>
          <input class="hc-input" data-en="e.g. HR Manager..." data-ar="مثال: مدير HR..." placeholder="مثال: مدير HR...">
        </div>
        <div>
          <label class="hc-label" data-en="Email *" data-ar="البريد الإلكتروني *">البريد الإلكتروني *</label>
          <input type="email" class="hc-input" placeholder="company@email.com">
        </div>
        <div>
          <label class="hc-label" data-en="Phone *" data-ar="رقم الهاتف *">رقم الهاتف *</label>
          <input type="tel" class="hc-input" placeholder="+20 1XX XXX XXXX">
        </div>
        <!-- Plan summary — auto-filled from sliders -->
        <div class="sm:col-span-2">
          <label class="hc-label" data-en="Your Selected Plan (from sliders above)" data-ar="خطتك المختارة (من المنزلقات أعلاه)">خطتك المختارة (من المنزلقات أعلاه)</label>
          <div class="plan-summary-bar">
            <span id="form-plan-label" style="color:var(--w60);font-size:.82rem" data-en="Move the sliders above to set your plan" data-ar="حرّك المنزلقات أعلاه لتحديد خطتك">حرّك المنزلقات أعلاه لتحديد خطتك</span>
            <span id="form-plan-price" class="font-display font-bold grad" style="font-size:1.1rem"></span>
          </div>
          <input type="hidden" id="form-plan-value" value="">
        </div>
        <div class="sm:col-span-2">
          <label class="hc-label" data-en="Hiring needs (optional)" data-ar="احتياجات التوظيف (اختياري)">احتياجات التوظيف (اختياري)</label>
          <textarea class="hc-input" rows="3" style="resize:none" data-en="Describe the roles you need to fill..." data-ar="صف الأدوار التي تبحث عن شغلها..." placeholder="صف الأدوار التي تبحث عن شغلها..."></textarea>
        </div>
      </div>
      <button class="btn-p w-full py-3.5 text-sm font-bold" data-en="Submit — We'll call you within 24h" data-ar="أرسل — سنتواصل معك خلال 24 ساعة">أرسل — سنتواصل معك خلال 24 ساعة</button>
      <p class="text-center text-xs mt-3" style="color:var(--w40)" data-en="Free to start · No contracts · Cancel anytime" data-ar="مجاني للبدء · لا عقود · إلغاء في أي وقت">مجاني للبدء · لا عقود · إلغاء في أي وقت</p>
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
// ── PRICING ──
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
  document.querySelectorAll('.curr-pill').forEach(function(b){b.classList.remove('on')});
  btn.classList.add('on');
  CURR_RATE=parseFloat(btn.getAttribute('data-rate'));
  CURR_SYM=btn.getAttribute('data-sym');
  // Update ticks
  document.querySelectorAll('.tick-price').forEach(function(el){
    if(el.getAttribute('data-dash')==='1'){el.textContent='—';return}
    if(el.getAttribute('data-free')==='1'){el.textContent=isEn?'Free':'مجاني';return}
    var egp=parseInt(el.getAttribute('data-egp')||0);
    if(!egp)return;
    var v=Math.round(egp*CURR_RATE);
    el.textContent=v>=10000?Math.round(v/1000)+'K':v.toLocaleString();
  });
  ['emp','job','views','msg','wallet'].forEach(function(f){
    var sl=document.getElementById('sl-'+f);
    if(sl)updateRow(f,sl.value);
  });
  updateTotal();
}

function updateRow(feat,raw){
  raw=parseInt(raw);
  var tier=TIERS[feat][raw];
  var v=tier.v,p=tier.p;
  // fill bar
  var fill=document.getElementById('fill-'+feat);
  if(fill)fill.style.width=Math.round(raw/5*100)+'%';
  // value
  var valEl=document.getElementById('val-'+feat);
  if(valEl){
    valEl.textContent=v>=1000?v.toLocaleString():v;
    valEl.style.color=feat==='wallet'&&v===0?'var(--w40)':feat==='msg'&&v===0?'var(--w40)':'var(--tl)';
  }
  // price
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
  ['emp','job','views','msg','wallet'].forEach(function(f){
    var sl=document.getElementById('sl-'+f);
    if(sl)total+=TIERS[f][parseInt(sl.value)].p;
  });
  // breakdown
  ['emp','job','views','msg','wallet'].forEach(function(f){
    var sl=document.getElementById('sl-'+f);
    var el=document.getElementById('b-'+f);
    if(!sl||!el)return;
    var tier=TIERS[f][parseInt(sl.value)];
    var lbl=NAMES_AR[f]+' ('+tier.v.toLocaleString()+')';
    var price,color;
    if(f==='wallet'){price=tier.p===0?'0':fmt(tier.p);color=tier.p===0?'var(--w40)':'var(--tl)';}
    else if(tier.p===0){price=f==='msg'&&tier.v===0?'—':(isEn?'Free':'مجاني');color=f==='msg'&&tier.v===0?'var(--w40)':'var(--tl)';}
    else{price=fmt(tier.p);color='var(--tl)';}
    el.innerHTML='<span style="color:var(--w60)">'+lbl+'</span><span style="color:'+color+'">'+price+'</span>';
  });
  // grand total
  var gt=document.getElementById('grand-total');
  var tc=document.getElementById('total-curr');
  if(gt){gt.textContent=total===0?(isEn?'Free':'مجاني'):Math.round(total*CURR_RATE).toLocaleString();gt.style.color=total===0?'var(--tl)':total>=10000?'var(--tl)':'var(--tl)';}
  if(tc)tc.textContent=total===0?'':(CURR_SYM+'/'+(isEn?'mo':'شهر'));
  // progress bar
  var next=total<5000?5000:total<10000?10000:null;
  var bb=document.getElementById('bonus-bar'),bl=document.getElementById('bonus-lbl'),bp=document.getElementById('bonus-pct');
  if(next&&bb&&bl&&bp){
    var pct=Math.min(100,Math.round(total/next*100));
    bb.style.width=pct+'%';
    bl.textContent=(isEn?'Progress to ':'حتى مكافأة ')+fmt(next);
    bp.textContent=pct+'%';
  }
  var b5=document.getElementById('bonus-5k'),b10=document.getElementById('bonus-10k');
  if(b5)b5.classList.toggle('hidden',total<5000);
  if(b10)b10.classList.toggle('hidden',total<10000);

  // ── Update form plan summary ──
  var fl=document.getElementById('form-plan-label');
  var fp=document.getElementById('form-plan-price');
  var fv=document.getElementById('form-plan-value');
  if(fl&&fp){
    if(total===0){
      fl.textContent=isEn?'Free plan (default limits)':'الخطة المجانية (الحدود الافتراضية)';
      fp.textContent='';
    } else {
      // Build summary string
      var parts=[];
      ['emp','job','views','msg','wallet'].forEach(function(f){
        var sl=document.getElementById('sl-'+f);
        if(!sl)return;
        var tier=TIERS[f][parseInt(sl.value)];
        if(tier.p>0||f==='emp'||f==='job')parts.push(NAMES_AR[f]+': '+tier.v);
      });
      fl.textContent=parts.join(' · ');
      fp.textContent=Math.round(total*CURR_RATE).toLocaleString()+' '+CURR_SYM;
    }
    if(fv)fv.value=total===0?'free':Math.round(total*CURR_RATE)+' '+CURR_SYM;
  }
}

// ── RING BUFFER MARQUEE ──
(function(){
  var belt=document.getElementById('tp-belt');
  var outer=belt?belt.parentElement:null;
  if(!belt||!outer)return;
  var GAP=14,SPEED=0.6;
  window.addEventListener('load',function(){
    var pills=Array.from(belt.querySelectorAll('.tp-pill'));
    var x=0;
    pills.forEach(function(p){
      p.style.left=x+'px';p.style.top='50%';p.style.transform='translateY(-50%)';
      x+=p.offsetWidth+GAP;
    });
    belt.style.height=pills[0].offsetHeight+'px';
    var totalW=x-GAP;
    while(totalW<outer.offsetWidth*2.5){
      pills.forEach(function(p){
        var clone=p.cloneNode(true);
        clone.style.left=x+'px';clone.style.top='50%';clone.style.transform='translateY(-50%)';
        belt.appendChild(clone);x+=p.offsetWidth+GAP;totalW=x-GAP;
      });
    }
    var all=Array.from(belt.querySelectorAll('.tp-pill'));
    function tick(){
      all.forEach(function(p){
        var cur=parseFloat(p.style.left)-SPEED;
        if(cur+p.offsetWidth<0){
          var max=-Infinity;all.forEach(function(q){max=Math.max(max,parseFloat(q.style.left));});
          cur=max+p.offsetWidth+GAP;
        }
        p.style.left=cur+'px';
      });
      requestAnimationFrame(tick);
    }
    tick();
  });
  outer.addEventListener('mouseenter',function(){SPEED=0});
  outer.addEventListener('mouseleave',function(){SPEED=0.6});
})();

// Nav scroll
window.addEventListener('scroll',function(){
  var n=document.getElementById('hc-nav');if(!n)return;
  var light=document.documentElement.classList.contains('light');
  n.style.background=window.scrollY>40?(light?'#ffffff':'rgba(3,13,23,.98)'):(light?'#ffffff':'rgba(3,13,23,.96)');
  n.style.borderColor=light?'#e5e7eb':(window.scrollY>40?'rgba(255,255,255,.12)':'rgba(255,255,255,.08)');
},{passive:true});

document.addEventListener('DOMContentLoaded',function(){
  ['emp','job','views','msg','wallet'].forEach(function(f){updateRow(f,0)});
  applyLang();
});
</script>
</body></html>