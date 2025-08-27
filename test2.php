<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sega Mega Drive — Fanpage</title>
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg:#0b0b0f; /* deep black */
      --panel:#0f1720; /* dark slate */
      --accent-1:#00cfff; /* cyan */
      --accent-2:#ff2d95; /* magenta */
      --accent-3:#ffd400; /* yellow */
      --muted:#9aa4b2;
      --glass: rgba(255,255,255,0.04);
      --pixel: 'Press Start 2P', monospace;
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      font-family: Roboto, system-ui, -apple-system, 'Segoe UI', Arial;
      background: radial-gradient(1200px 600px at 10% 10%, rgba(0,207,255,0.05), transparent),
                  radial-gradient(800px 400px at 90% 90%, rgba(255,45,149,0.04), transparent),
                  var(--bg);
      color:#e6eef8;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
      padding:32px;
      display:flex;
      align-items:center;
      justify-content:center;
    }

    .page{
      width:100%;
      max-width:1100px;
      background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(0,0,0,0.04));
      border-radius:12px;
      box-shadow: 0 8px 40px rgba(3,8,14,0.7);
      overflow:hidden;
      border:1px solid rgba(255,255,255,0.03);
      display:grid;
      grid-template-columns: 380px 1fr;
      gap:0;
    }

    /* left column: console mock */
    .sidebar{
      background: linear-gradient(180deg, #0b1220 0%, #09111b 100%);
      padding:28px;
      border-right: 1px solid rgba(255,255,255,0.02);
    }
    .logo{
      font-family: var(--pixel);
      font-size:20px;
      letter-spacing:2px;
      color:var(--accent-1);
      text-shadow: 0 2px 0 rgba(0,0,0,0.6), 0 4px 20px rgba(0,207,255,0.06);
      display:flex;
      gap:8px;
      align-items:center;
    }
    .logo .tag{
      font-size:10px;
      color:var(--muted);
      font-family: Roboto;
      letter-spacing:1px;
    }

    .cartridge{
      margin-top:20px;
      background: linear-gradient(180deg,#0b1626,#07111a);
      border-radius:8px;
      padding:18px;
      box-shadow: inset 0 -6px 20px rgba(0,0,0,0.6), 0 8px 30px rgba(0,0,0,0.7);
      border:1px solid rgba(255,255,255,0.02);
    }
    .cart-top{
      height:110px;
      display:flex;
      align-items:center;
      justify-content:center;
      background: linear-gradient(90deg, rgba(0,207,255,0.06), rgba(255,45,149,0.04));
      border-radius:6px;
      position:relative;
      overflow:hidden;
    }
    .cart-top:before{
      content:"";
      position:absolute;
      left:-40px;top:-40px;
      width:140px;height:140px;
      background:radial-gradient(circle at 20% 20%, rgba(255,255,255,0.06), transparent 40%);
      transform:rotate(15deg);
    }
    .cart-label{
      font-family:var(--pixel);
      font-size:11px;
      text-align:center;
      line-height:1.2;
    }

    .specs{
      margin-top:14px;
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:8px;
      color:var(--muted);
      font-size:12px;
    }
    .spec{background:var(--glass);padding:8px;border-radius:6px}

    .btn-play{
      margin-top:16px;
      display:inline-block;
      padding:10px 14px;
      border-radius:8px;
      background: linear-gradient(90deg,var(--accent-1),var(--accent-2));
      font-family:var(--pixel);
      font-size:12px;
      letter-spacing:1px;
      color:#07111a;
      border: none;
      cursor:pointer;
      box-shadow: 0 6px 20px rgba(0,0,0,0.6);
    }

    /* right content */
    .content{
      padding:28px;
    }
    .hero{
      display:flex;
      align-items:center;
      gap:20px;
    }
    .hero-text{
      flex:1;
    }
    .hero h1{
      margin:0 0 6px 0;
      font-family:var(--pixel);
      font-size:26px;
      color:var(--accent-1);
      letter-spacing:1px;
    }
    .hero p{
      margin:0;
      color:var(--muted);
      max-width:640px;
    }

    .ribbon{
      font-family:var(--pixel);
      font-size:10px;
      padding:6px 10px;
      background: linear-gradient(90deg,var(--accent-2),var(--accent-3));
      border-radius:6px;
      color:#07111a;
      display:inline-block;
      box-shadow: 0 6px 20px rgba(0,0,0,0.5);
    }

    .grid-games{
      margin-top:22px;
      display:grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap:14px;
    }
    .game-card{
      background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(0,0,0,0.06));
      border-radius:8px;
      padding:12px;
      min-height:120px;
      display:flex;
      flex-direction:column;
      justify-content:space-between;
      border:1px solid rgba(255,255,255,0.02);
    }
    .game-thumb{
      height:72px;
      border-radius:6px;
      background:linear-gradient(90deg, rgba(0,207,255,0.08), rgba(255,45,149,0.06));
      display:flex;align-items:center;justify-content:center;
      font-family:var(--pixel);
      font-size:10px;color:var(--muted)
    }
    .game-title{font-weight:700;margin-top:8px;font-size:13px}
    .game-meta{font-size:11px;color:var(--muted)}

    footer{margin-top:20px;color:var(--muted);font-size:12px}

    /* responsive */
    @media (max-width:900px){
      .page{grid-template-columns:1fr}
      .sidebar{order:2}
      .content{order:1}
    }
  </style>
</head>
<body>
  <div class="page" role="main">
    <aside class="sidebar">
      <div class="logo">
        <div>MEGA<span style="color:var(--accent-2)">DRIVE</span></div>
        <div class="tag">FAN PAGE</div>
      </div>

      <div class="cartridge">
        <div class="cart-top">
          <div class="cart-label">
            <div style="font-size:12px; color:var(--muted);">SEGA</div>
            <div style="margin-top:6px; font-size:11px; color:var(--accent-3);">16-BIT</div>
          </div>
        </div>

        <div class="specs">
          <div class="spec">CPU: Motorola 68000</div>
          <div class="spec">Sound: Yamaha YM2612</div>
          <div class="spec">RAM: 64KB</div>
          <div class="spec">Date: 1988</div>
        </div>

        <button class="btn-play" onclick="alert('Play demo not implemented — but imagine the 16-bit beats!')">LAUNCH DEMO</button>
      </div>

      <div style="margin-top:18px;color:var(--muted);font-size:12px;">
        <strong style="color:var(--accent-1);font-family:var(--pixel);font-size:12px;">Caractéristiques</strong>
        <p style="margin:8px 0 0 0;">Pages: jeux, histoire, ressources, sons chiptune et wallpapers « 16-bit ».</p>
      </div>
    </aside>

    <section class="content">
      <div class="hero">
        <div class="hero-text">
          <h1>SEGA Mega Drive</h1>
          <p>Page hommage au style visuel des consoles 16-bit : typographie pixel, accents cyan / magenta, et ambiances néon.
          Utilise cette page comme template pour présenter des jeux, des roms (respecter la loi), ou des ressources graphiques 16‑bit.</p>
        </div>

        <div>
          <div class="ribbon">16-BIT CLASSICS</div>
        </div>
      </div>

      <div class="grid-games" aria-label="Sélection de jeux Megadrive">
        <article class="game-card">
          <div class="game-thumb">SONIC</div>
          <div>
            <div class="game-title">Sonic the Hedgehog</div>
            <div class="game-meta">Plateforme: Megadrive — 1991</div>
          </div>
        </article>
        <article class="game-card">
          <div class="game-thumb">STREET</div>
          <div>
            <div class="game-title">Streets of Rage</div>
            <div class="game-meta">Beat 'em up — 1991</div>
          </div>
        </article>




        <article class="game-card">
          <div class="game-thumb">ALTERED</div>
          <div>
            <div class="game-title">Altered Beast</div>
            <div class="game-meta">Arcade port — 1988</div>
          </div>
        </article>

        <article class="game-card">
          <div class="game-thumb">TOO</div>
          <div>
            <div class="game-title">Shinobi</div>
            <div class="game-meta">Action — 1989</div>
          </div>
        </article>
      </div>

      <footer>
        © Fanpage — Design inspiré par la charte visuelle 16-bit. Pour intégrer un logo officiel Sega, tu dois posséder la permission ou utiliser une version fan-made.
      </footer>
    </section>
  </div>

  <script>
    // small interactive touches
    document.querySelectorAll('.game-card').forEach(card=>{
      card.addEventListener('mouseenter', ()=>{
        card.style.transform='translateY(-6px)';
        card.style.transition='transform 220ms ease';
      });
      card.addEventListener('mouseleave', ()=>{
        card.style.transform='translateY(0)';
      });
    });
  </script>
</body>
</html>
