<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rectangle 2D → Objet 3D</title>
<style>
body { margin: 0; font-family: sans-serif; display: flex; height: 100vh; background: #030b17; color: #cbdfff; }
#left, #right { flex: 1; padding: 10px; box-sizing: border-box; }
canvas { background: #0a1a2f; border: 1px solid #145ab3; cursor: crosshair; display: block; }
button { background: #2f80ed; color: white; border: none; padding: 6px 12px; cursor: pointer; margin-top: 5px; }
button:hover { filter: brightness(1.2); }
#three { width: 100%; height: 400px; background: #0a1a2f; border: 1px solid #145ab3; }
</style>
</head>
<body>
<div id="left">
<h2>1) Dessine un rectangle</h2>
<canvas id="drawCanvas" width="400" height="400"></canvas>
<button id="generateBtn">Générer 3D</button>
</div>
<div id="right">
<h2>2) Vue 3D</h2>
<div id="three"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.160.0/examples/js/controls/OrbitControls.js"></script>
<script>
// Canvas 2D
const canvas = document.getElementById('drawCanvas');
const ctx = canvas.getContext('2d');
let isDown = false;
let rect = null;
let start = {};

canvas.addEventListener('mousedown', e => { isDown=true; start={x:e.offsetX,y:e.offsetY}; rect={x:start.x,y:start.y,w:0,h:0}; draw(); });
canvas.addEventListener('mousemove', e => { if(!isDown) return; rect.w = e.offsetX - start.x; rect.h = e.offsetY - start.y; draw(); });
window.addEventListener('mouseup', ()=>{ isDown=false; });
function draw(){ ctx.clearRect(0,0,canvas.width,canvas.height); if(rect){ ctx.fillStyle='rgba(47,128,237,0.2)'; ctx.strokeStyle='#2f80ed'; ctx.lineWidth=2; ctx.fillRect(rect.x,rect.y,rect.w,rect.h); ctx.strokeRect(rect.x,rect.y,rect.w,rect.h); } }

// Three.js 3D
const scene = new THREE.Scene();
scene.background = new THREE.Color(0x0b1626);
const camera = new THREE.PerspectiveCamera(50,1,0.1,2000);
camera.position.set(200,200,200);
const renderer = new THREE.WebGLRenderer({antialias:true});
renderer.setSize(document.getElementById('three').clientWidth,document.getElementById('three').clientHeight);
document.getElementById('three').appendChild(renderer.domElement);
const controls = new THREE.OrbitControls(camera,renderer.domElement);
controls.enableDamping=true;
controls.autoRotate=true;
controls.minDistance = 10;
controls.maxDistance = 2000;
scene.add(new THREE.AmbientLight(0xffffff,0.5));
let dirLight=new THREE.DirectionalLight(0xffffff,0.8); dirLight.position.set(1,2,1); scene.add(dirLight);
scene.add(new THREE.GridHelper(500,20));
let mesh=null;
function animate(){ requestAnimationFrame(animate); controls.update(); renderer.render(scene,camera); }
animate();

function fitTo(obj){ const box=new THREE.Box3().setFromObject(obj); const center=box.getCenter(new THREE.Vector3()); const size=box.getSize(new THREE.Vector3()); const maxDim=Math.max(size.x,size.y,size.z); const fov=camera.fov*(Math.PI/180); let dist=maxDim/(2*Math.tan(fov/2))*1.6; camera.position.set(center.x+dist,center.y+dist,center.z+dist); camera.lookAt(center); controls.target.copy(center); controls.update(); }

document.getElementById('generateBtn').addEventListener('click',()=>{
if(!rect) return;
if(mesh){ scene.remove(mesh); mesh.geometry.dispose(); mesh.material.dispose(); mesh=null; }
const geo = new THREE.BoxGeometry(Math.abs(rect.w),Math.abs(rect.h),50);
mesh = new THREE.Mesh(geo,new THREE.MeshStandardMaterial({color:0x2f80ed}));
scene.add(mesh);
fitTo(mesh);
});
</script>
</body>
</html>
