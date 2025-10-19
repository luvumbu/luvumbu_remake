<?php
// ✅ Tableau d’options réutilisable
$test_array = ["Option AA", "Option BN"];

// ✅ Tableau principal des menus
$allMenus = [
    "HTML" => [
        array_merge(["HEADER HTML"], $test_array),
        array_merge(["HEADER JS"], $test_array),
        array_merge(["SECTION HTML"], $test_array),
        array_merge(["SECTION CSS"], $test_array),
        array_merge(["SECTION JS"], $test_array),
        array_merge(["SECTION CHILD HTML"], $test_array),
        array_merge(["SECTION CHILD CSS"], $test_array),
        array_merge(["SECTION CHILD JS"], $test_array),
        array_merge(["FOOTER HTML"], $test_array),
        array_merge(["FOOTER CSS"], $test_array),
        array_merge(["FOOTER JS"], $test_array)
    ]
];

$headerColors = ["#a0d8f1", "#70c1e0", "#3caed6"];
$sectionColors = ["#a8d5ba", "#7ebf95", "#5fae7b", "#3f9f5e", "#2d8149", "#1f6e3e"];
$footerColors = ["#d9b382", "#c79c6e", "#b3825c", "#9f6e45"];
$autoColor = true;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menus multiples PHP + JS</title>
<style>
.menu-container { display: flex; align-items: center; gap: 100px; position: relative; border: 1px solid #ccc; padding: 20px; margin-bottom:40px; background:#fff; border-radius:10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);}
.menu-title { font-size: 50px; font-weight: bold; position: relative; z-index: 2; color:#333; }
.menu-branches { display: flex; flex-direction: column; justify-content: flex-start; gap: 20px; position: relative; z-index: 2; }
.menu-branch { display: flex; align-items: center; gap: 10px; }
.menu-branch select { padding: 5px 10px; font-size: 16px; border: 2px solid #000; cursor: pointer; border-radius: 5px; color:#fff; font-weight:bold; }
.color-display { width:30px; height:30px; border:1px solid #000; border-radius:5px; display:flex; align-items:center; justify-content:center; color:#fff; font-weight:bold; font-size:14px; }
.legend { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 20px; border-top:1px solid #ccc; padding-top:10px; }
.legend-item { display: flex; align-items: center; gap: 5px; font-weight:bold; color:#333; }
svg.connections { position: absolute; left: 0; top: 0; width: 100%; height: 100%; overflow: visible; z-index: 1; }
path { fill: none; stroke: #333; stroke-width: 2; stroke-linecap: round; stroke-dasharray: 400; stroke-dashoffset: 400; animation: draw 1.5s ease forwards; }
path.marker { marker-end: url(#arrow); }
@keyframes draw { to { stroke-dashoffset: 0; } }
</style>
</head>
<body>

<div id="menu-root">
    <?php foreach($allMenus as $title => $menus): ?>
    <div class="menu-container">
        <div class="menu-title"><?= $title ?></div>
        <div class="menu-branches">
            <?php 
            $elementColors = [];
            $sectionIndex = 0;
            $counter = 1;
            foreach($menus as $index => $menu): 
                $elementName = $menu[0];
                if(strpos($elementName,"HEADER")!==false){
                    $color = $headerColors[$index % count($headerColors)];
                } elseif(strpos($elementName,"SECTION")!==false){
                    $color = $sectionColors[$sectionIndex % count($sectionColors)];
                    $sectionIndex++;
                } else { // FOOTER
                    $color = $footerColors[$index % count($footerColors)];
                }
                $elementColors[] = ['name'=>$elementName, 'color'=>$color, 'number'=>$counter];
            ?>
            <div class="menu-branch">
                <select style="background:<?= $color ?>">
                    <?php foreach($menu as $option): ?>
                    <option><?= $option ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="color-display" style="background:<?= $color ?>"><?= $counter ?></div>
            </div>
            <?php 
            $counter++;
            endforeach; 
            ?>
        </div>

        <div class="legend">
            <?php foreach($elementColors as $el): ?>
            <div class="legend-item">
                <div class="color-display" style="background:<?= $el['color'] ?>"><?= $el['number'] ?></div>
                <span><?= $el['name'] ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<script>
function generateConnections(container) {
    const titleDiv = container.querySelector('.menu-title');
    const branches = container.querySelectorAll('.menu-branch select');

    const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg.classList.add('connections');
    svg.setAttribute("viewBox", `0 0 ${container.offsetWidth} ${container.offsetHeight}`);

    const defs = document.createElementNS("http://www.w3.org/2000/svg", "defs");
    const marker = document.createElementNS("http://www.w3.org/2000/svg", "marker");
    marker.setAttribute("id", "arrow");
    marker.setAttribute("markerWidth", "10");
    marker.setAttribute("markerHeight", "10");
    marker.setAttribute("refX", "8");
    marker.setAttribute("refY", "3");
    marker.setAttribute("orient", "auto");
    const pathArrow = document.createElementNS("http://www.w3.org/2000/svg", "path");
    pathArrow.setAttribute("d", "M0,0 L0,6 L9,3 z");
    pathArrow.setAttribute("fill", "#333");
    marker.appendChild(pathArrow);
    defs.appendChild(marker);
    svg.appendChild(defs);

    const titleRect = titleDiv.getBoundingClientRect();
    const containerRect = container.getBoundingClientRect();
    const titleY = titleRect.top - containerRect.top + titleRect.height / 2;
    const titleX = titleRect.right - containerRect.left;

    branches.forEach(branch => {
        const branchRect = branch.getBoundingClientRect();
        const branchY = branchRect.top - containerRect.top + branchRect.height / 2;
        const branchX = branchRect.left - containerRect.left;

        const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
        path.classList.add('marker');
        const offsetY = (branchY - titleY) * 0.3;
        const midX = (titleX + branchX) / 2;
        const midY = titleY + offsetY;
        path.setAttribute("d",
            `M${titleX},${titleY} C${midX},${titleY} ${midX},${midY} ${branchX},${branchY}`);
        svg.appendChild(path);
    });

    container.appendChild(svg);
}

window.addEventListener('load', () => {
    document.querySelectorAll('.menu-container').forEach(container => {
        generateConnections(container);
    });
});
</script>

</body>
</html>
