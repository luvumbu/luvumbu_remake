<?php
// =======================================
//  Arborescence interactive + prévisualisation
//  PHP 5.4 compatible
// =======================================

date_default_timezone_set('Europe/Paris');

// ----------------------------
// GESTION DE LA PRÉVISUALISATION
// ----------------------------
if (isset($_GET['view'])) {
    $file = $_GET['view'];
    if (file_exists($file) && is_file($file)) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $mime = mime_content_type($file);

        // Calcul du chemin relatif pour le navigateur
        if (isset($_SERVER['DOCUMENT_ROOT'])) {
            $relativePath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $file);
            $relativePath = str_replace('\\','/',$relativePath); // Windows
            if (substr($relativePath,0,1)!='/') $relativePath = '/'.$relativePath;
        } else {
            $relativePath = $file; // fallback
        }

        header('Content-Type: application/json');

        if (in_array($ext, array('jpg','jpeg','png','gif','bmp','webp'))) {
            echo json_encode(array('type'=>'image','src'=>$relativePath));
        } elseif (in_array($ext, array('txt','php','js','css','html','json','xml','log','md'))) {
            $content = @file_get_contents($file);
            $content = htmlspecialchars($content, ENT_QUOTES, 'UTF-8');
            echo json_encode(array('type'=>'text','content'=>$content));
        } else {
            echo json_encode(array('type'=>'other','src'=>$relativePath,'mime'=>$mime));
        }
    } else {
        echo json_encode(array('error'=>'Fichier introuvable.'));
    }
    exit;
}

// ----------------------------
// ANALYSE DU DOSSIER
// ----------------------------
function buildTree($dir) {
    // Fichiers et dossiers à ignorer
    $excludeFiles = array('dbCheck.php', '.htaccess', 'config.php'); // fichiers à cacher
    $excludeDirs = array('.git', 'node_modules', 'vendor'); // dossiers à cacher

    $tree = array(
        'name'=>basename($dir),
        'path'=>$dir,
        'type'=>'dir',
        'children'=>array()
    );

    $items=@scandir($dir);
    if (!$items) return $tree;

    foreach ($items as $item) {
        if ($item==='.' || $item==='..') continue;
        if (in_array($item, $excludeFiles)) continue;
        if (in_array($item, $excludeDirs)) continue;

        $path=$dir.DIRECTORY_SEPARATOR.$item;
        if (is_dir($path)) {
            $tree['children'][] = buildTree($path);
        } else {
            $tree['children'][] = array(
                'name'=>$item,
                'path'=>str_replace('\\','/',$path),
                'type'=>'file',
                'size'=>@filesize($path),
                'modified'=>date('Y-m-d H:i:s', @filemtime($path))
            );
        }
    }
    return $tree;
}

$projectPath=__DIR__;
$tree=buildTree($projectPath);
$jsonTree=json_encode($tree);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Arborescence interactive + aperçu</title>
<style>
html, body{margin:0;overflow:hidden;background:#0b0c10;color:#eee;font-family:Arial,sans-serif;}
h1{color:#66fcf1;text-align:center;margin:8px 0;}
canvas{display:block;width:100%;height:100%;cursor:grab;}
canvas:active{cursor:grabbing;}
#info{position:absolute;top:10px;left:10px;background:rgba(0,0,0,0.7);padding:8px;border-radius:6px;font-size:12px;display:none;pointer-events:none;}
#viewer{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.9);display:none;align-items:center;justify-content:center;flex-direction:column;z-index:10;}
#viewer-content{max-width:90%;max-height:80%;overflow:auto;background:#1e1e1e;padding:20px;border-radius:10px;color:#ccc;box-shadow:0 0 15px #000;}
#viewer img{max-width:100%;max-height:80vh;border:2px solid #555;}
#closeBtn{position:absolute;top:20px;right:30px;font-size:26px;color:#fff;cursor:pointer;}
</style>
</head>
<body>
<h1>📂 Arborescence interactive (clic = ouvrir, clic fichier = prévisualiser)</h1>
<canvas id="canvas"></canvas>
<div id="info"></div>

<!-- Fenêtre modale d’affichage -->
<div id="viewer">
    <div id="closeBtn">✖</div>
    <div id="viewer-content"></div>
</div>

<script type="text/javascript">
var tree=<?php echo $jsonTree; ?>;
function markClosed(node){ if(node.type==='dir'){ node.open=false; for(var i=0;i<node.children.length;i++) markClosed(node.children[i]); } }
markClosed(tree);
tree.open=true;

var canvas=document.getElementById('canvas');
var ctx=canvas.getContext('2d');
canvas.width=window.innerWidth;
canvas.height=window.innerHeight;

var levelHeight=120, nodeRadius=8, nodes=[], zoom=1, offsetX=canvas.width/2, offsetY=80, dragging=false, lastX, lastY;
var nodeSpacingX = 180; // espace horizontal entre fichiers/dossiers
var nodeSpacingY = levelHeight; // espace vertical entre niveaux

function drawTree(node,x,y,depth){
    var color=(node.type==='dir')?'#00ffd5':'#ffcc00';
    nodes.push({x:x,y:y,node:node,color:color});
    ctx.beginPath(); ctx.arc(x,y,nodeRadius,0,Math.PI*2); ctx.fillStyle=color; ctx.fill();
    ctx.fillStyle='#ccc'; ctx.font='12px Arial'; ctx.fillText(node.name,x+12,y+4);

    if(node.type==='dir' && node.open && node.children.length>0){
        var count=node.children.length,totalWidth=count*nodeSpacingX,startX=x-totalWidth/2+nodeSpacingX/2;
        for(var i=0;i<count;i++){
            var c=node.children[i],cx=startX+i*nodeSpacingX,cy=y+nodeSpacingY;
            ctx.beginPath(); ctx.moveTo(x,y+nodeRadius); ctx.lineTo(cx,cy-nodeRadius); ctx.strokeStyle='rgba(255,255,255,0.3)'; ctx.stroke();
            drawTree(c,cx,cy,depth+1);
        }
    }
}

function render(){ 
    ctx.setTransform(1,0,0,1,0,0); 
    ctx.clearRect(0,0,canvas.width,canvas.height); 
    ctx.translate(offsetX,offsetY); 
    ctx.scale(zoom,zoom); 
    nodes=[]; 
    drawTree(tree,0,0,0); 
}
render();

// Zoom
canvas.addEventListener('wheel',function(e){ 
    e.preventDefault(); 
    var mouseX=(e.offsetX-offsetX)/zoom,mouseY=(e.offsetY-offsetY)/zoom; 
    var factor=e.deltaY<0?1.1:0.9; 
    zoom*=factor; 
    zoom=Math.max(0.3,Math.min(zoom,5)); 
    offsetX=e.offsetX-mouseX*zoom; 
    offsetY=e.offsetY-mouseY*zoom; 
    render(); 
});

// Déplacement
canvas.addEventListener('mousedown',function(e){ dragging=true; lastX=e.clientX; lastY=e.clientY; });
canvas.addEventListener('mouseup',()=>dragging=false); 
canvas.addEventListener('mouseleave',()=>dragging=false);
canvas.addEventListener('mousemove',function(e){ 
    if(dragging){ 
        offsetX+=e.clientX-lastX; 
        offsetY+=e.clientY-lastY; 
        lastX=e.clientX; 
        lastY=e.clientY; 
        render(); 
    } 
});

// Survol info
var infoBox=document.getElementById('info');
canvas.addEventListener('mousemove',function(e){
    if(dragging){ infoBox.style.display='none'; return; }
    var rect=canvas.getBoundingClientRect(),x=(e.clientX-rect.left-offsetX)/zoom,y=(e.clientY-rect.top-offsetY)/zoom,found=null;
    for(var i=0;i<nodes.length;i++){ 
        var n=nodes[i],dx=n.x-x,dy=n.y-y; 
        if(Math.sqrt(dx*dx+dy*dy)<nodeRadius+3){ found=n.node; break; } 
    }
    if(found){ 
        infoBox.style.display='block'; 
        infoBox.style.left=(e.pageX+10)+'px'; 
        infoBox.style.top=(e.pageY+10)+'px';
        if(found.type==='file'){ 
            infoBox.innerHTML='<strong>'+found.name+'</strong><br>📄 Fichier<br>📅 '+found.modified+'<br>⚙️ '+Math.round((found.size||0)/1024)+' Ko';
        } else { 
            infoBox.innerHTML='<strong>'+found.name+'</strong><br>'+(found.open?'▼ Ouvert':'▶ Fermé')+'<br>Éléments : '+found.children.length; 
        }
    } else infoBox.style.display='none';
});

// Clic
canvas.addEventListener('click',function(e){
    var rect=canvas.getBoundingClientRect(),x=(e.clientX-rect.left-offsetX)/zoom,y=(e.clientY-rect.top-offsetY)/zoom;
    for(var i=0;i<nodes.length;i++){ 
        var n=nodes[i],dx=n.x-x,dy=n.y-y; 
        if(Math.sqrt(dx*dx+dy*dy)<nodeRadius+4){ 
            if(n.node.type==='dir'){ n.node.open=!n.node.open; render(); }
            else if(n.node.type==='file'){ openViewer(n.node.path); }
            break;
        } 
    }
});

window.addEventListener('resize',function(){ 
    canvas.width=window.innerWidth; 
    canvas.height=window.innerHeight; 
    render(); 
});

// ===============================
// Fenêtre d’aperçu
// ===============================
var viewer=document.getElementById('viewer'),viewerContent=document.getElementById('viewer-content'),closeBtn=document.getElementById('closeBtn');
closeBtn.onclick=function(){ viewer.style.display='none'; }

function openViewer(path){
    fetch('?view='+encodeURIComponent(path))
    .then(r=>r.json())
    .then(data=>{
        viewerContent.innerHTML='';
        if(data.type==='image'){ viewerContent.innerHTML='<img src="'+data.src+'">'; }
        else if(data.type==='text'){ viewerContent.innerHTML='<pre style="white-space:pre-wrap;">'+data.content+'</pre>'; }
        else if(data.type==='other'){ viewerContent.innerHTML='<p>Fichier non prévisualisable ('+data.mime+')</p><a href="'+data.src+'" target="_blank" style="color:#00ffd5">📥 Télécharger</a>'; }
        else { viewerContent.innerHTML='<p>Erreur : '+(data.error||'Inconnue')+'</p>'; }
        viewer.style.display='flex';
    });
}
</script>
</body>
</html>
