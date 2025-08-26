<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Galactic Retro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Police pixel style -->
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  <style>
  
    .galactic-net {
      position: relative;
      padding: 6rem 2rem;
      text-align: center;
      overflow: hidden;
      background-color: #FFD700; /* Jaune rétro */
      border: 4px solid #000;
     
      color: white;
      text-shadow: 2px 2px 0 #000;
    }

    .color_white {
      color: white;
    }

    #galacticCanvas {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 400px;
      pointer-events: none;
      z-index: 1;
      display: block;
    }

    .galactic-net h2 {
      position: relative;
      z-index: 2;
      font-size: 16px;
      margin-bottom: 20px;
    }

    section {
      max-width: 100%;
      overflow-x: hidden;
      box-sizing: border-box;
    }
  </style>
</head>

<body>
  <section class="galactic-net color_white">
    <h2><?= replace_element_2($title_projet[0]) ?></h2>
    <canvas id="galacticCanvas"></canvas>
  </section>

  <script>
    const canvas = document.getElementById('galacticCanvas');
    const ctx = canvas.getContext('2d');

    function resize() {
      canvas.width = window.innerWidth * devicePixelRatio;
      canvas.height = 400 * devicePixelRatio;
      canvas.style.width = window.innerWidth + 'px';
      canvas.style.height = '400px';
      ctx.setTransform(1, 0, 0, 1, 0, 0);
      ctx.scale(devicePixelRatio, devicePixelRatio);
    }
    resize();
    window.addEventListener('resize', resize);

    const sunPos = { x: 80, y: 80 };
    const earthPos = { x: window.innerWidth * 0.8, y: 200 };

    class Bubble {
      constructor() {
        this.reset();
      }

      reset() {
        this.z = 0.2 + Math.random() * 0.8;
        this.sizeBase = 0.5 + Math.random() * 0.7;
        this.size = this.sizeBase * this.z;
        const deg30 = Math.PI / 6;
        this.angle = (Math.random() * 2 * deg30) - deg30;
        this.speedBase = 0.4 + Math.random() * 0.6;
        this.speed = this.speedBase * this.z;
        this.distance = 0;
        this.maxDistance = (earthPos.x - sunPos.x + 50 + Math.random() * 100);
        this.yOffset = (Math.random() - 0.5) * 40 * (1 - this.z);
      }

      update() {
        this.distance += this.speed;
        this.x = sunPos.x + Math.cos(this.angle) * this.distance;
        this.y = sunPos.y + Math.sin(this.angle) * this.distance + this.yOffset;
        if (this.distance > this.maxDistance) {
          this.reset();
          this.distance = 0;
        }
      }

      draw(ctx) {
        const opacity = Math.max(0, 1 - this.distance / this.maxDistance);
        ctx.shadowColor = 'rgba(0,0,0,0.6)';
        ctx.shadowBlur = this.size * 3;
        ctx.shadowOffsetX = 1 * this.z;
        ctx.shadowOffsetY = 1 * this.z;

        ctx.fillStyle = `rgba(255, 255, 180, ${(opacity * this.z).toFixed(2)})`;

        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, 2 * Math.PI);
        ctx.fill();

        ctx.shadowBlur = 0;
        ctx.shadowOffsetX = 0;
        ctx.shadowOffsetY = 0;
      }
    }

    let bubbles = [];
    const maxBubbles = 150;
    for (let i = 0; i < 5; i++) {
      bubbles.push(new Bubble());
    }

    const darkColors = [
      { r: 3, g: 2, b: 8 }, { r: 8, g: 4, b: 15 }, { r: 2, g: 6, b: 9 }, { r: 6, g: 8, b: 12 },
      { r: 12, g: 7, b: 18 }, { r: 3, g: 10, b: 7 }, { r: 8, g: 3, b: 13 }, { r: 4, g: 5, b: 6 },
      { r: 7, g: 8, b: 4 }, { r: 5, g: 3, b: 11 }, { r: 1, g: 9, b: 7 }, { r: 10, g: 3, b: 8 },
      { r: 6, g: 7, b: 5 }, { r: 9, g: 2, b: 12 }, { r: 5, g: 11, b: 10 }, { r: 7, g: 4, b: 3 }
    ];

    const contactColors = [
      { sun: 'rgba(255, 160, 100, 0.9)', earth: '#2b66ff' },
      { sun: 'rgba(255, 200, 150, 0.9)', earth: '#3d89ff' },
      { sun: 'rgba(255, 120, 80, 0.9)', earth: '#4a9dff' },
      { sun: 'rgba(255, 180, 110, 0.9)', earth: '#1f57d6' },
      { sun: 'rgba(255, 140, 70, 0.9)', earth: '#3366cc' }
    ];

    let currentContactColorIndex = -1;
    let currentIndex = 0;
    let nextIndex = 1;
    let transitionProgress = 0;
    const transitionDuration = 1800;
    let framesSinceChange = 0;
    const framesBetweenChange = 1800;

    function lerp(a, b, t) {
      return a + (b - a) * t;
    }

    function getBackgroundColor() {
      if (transitionProgress < 1) {
        return {
          r: lerp(darkColors[currentIndex].r, darkColors[nextIndex].r, transitionProgress),
          g: lerp(darkColors[currentIndex].g, darkColors[nextIndex].g, transitionProgress),
          b: lerp(darkColors[currentIndex].b, darkColors[nextIndex].b, transitionProgress),
        };
      } else {
        return darkColors[nextIndex];
      }
    }

    function isTouchingEarth(bubble) {
      const dx = bubble.x - earthPos.x;
      const dy = bubble.y - earthPos.y;
      const dist = Math.sqrt(dx * dx + dy * dy);
      const earthRadius = 40;
      return dist <= earthRadius + bubble.size;
    }

    function drawSun(color) {
      const sunRadius = 60;
      const gradient = ctx.createRadialGradient(sunPos.x, sunPos.y, sunRadius * 0.1, sunPos.x, sunPos.y, sunRadius);
      gradient.addColorStop(0, color);
      gradient.addColorStop(1, 'rgba(0,0,0,0)');
      ctx.fillStyle = gradient;
      ctx.beginPath();
      ctx.arc(sunPos.x, sunPos.y, sunRadius, 0, 2 * Math.PI);
      ctx.fill();
    }

    function drawEarth(color) {
      const earthRadius = 40;
      const gradient = ctx.createRadialGradient(earthPos.x, earthPos.y, earthRadius * 0.5, earthPos.x, earthPos.y, earthRadius);
      gradient.addColorStop(0, color);
      gradient.addColorStop(1, '#0a1f3d');
      ctx.fillStyle = gradient;
      ctx.beginPath();
      ctx.arc(earthPos.x, earthPos.y, earthRadius, 0, 2 * Math.PI);
      ctx.fill();

      ctx.strokeStyle = 'rgba(74, 144, 226, 0.5)';
      ctx.lineWidth = 5;
      ctx.beginPath();
      ctx.arc(earthPos.x, earthPos.y, earthRadius + 3, 0, 2 * Math.PI);
      ctx.stroke();
    }

    let frame = 0;

    function animate() {
      framesSinceChange++;
      if (framesSinceChange > framesBetweenChange) {
        framesSinceChange = 0;
        transitionProgress = 0;
        currentIndex = nextIndex;
        nextIndex = (nextIndex + 1) % darkColors.length;
      }
      if (transitionProgress < 1) {
        transitionProgress += 1 / transitionDuration;
        if (transitionProgress > 1) transitionProgress = 1;
      }

      const bgColor = getBackgroundColor();
      ctx.fillStyle = `rgba(${bgColor.r}, ${bgColor.g}, ${bgColor.b}, 0.3)`;
      ctx.fillRect(0, 0, canvas.width / devicePixelRatio, canvas.height / devicePixelRatio);

      let anyTouching = false;
      for (let b of bubbles) {
        if (isTouchingEarth(b)) {
          anyTouching = true;
          break;
        }
      }

      if (anyTouching) {
        if (currentContactColorIndex === -1) {
          currentContactColorIndex = Math.floor(Math.random() * contactColors.length);
        }
      } else {
        currentContactColorIndex = -1;
      }

      if (currentContactColorIndex !== -1) {
        const col = contactColors[currentContactColorIndex];
        drawSun(col.sun);
        drawEarth(col.earth);
      } else {
        drawSun('rgba(255, 255, 180, 0.9)');
        drawEarth('#4a90e2');
      }

      if (frame % 4 === 0 && bubbles.length < maxBubbles) {
        bubbles.push(new Bubble());
      }

      for (let b of bubbles) {
        b.update();
        b.draw(ctx);
      }

      frame++;
      requestAnimationFrame(animate);
    }

    animate();
  </script>
</body>
</html>
