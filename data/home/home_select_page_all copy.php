<?php
// Exemple d'utilisation
$header_html = 'data/blog/header/html';
$header_css = 'data/blog/header/css';
$header_js = 'data/blog/header/js';
$header_sql = 'data/blog/header/sql';
$header_src = 'data/blog/header/src';

$section_html = 'data/blog/section/html';
$section_css = 'data/blog/section/css';
$section_js = 'data/blog/section/js';
$section_sql = 'data/blog/section/sql';
$section_src = 'data/blog/section/src';

$section_child_html = 'data/blog/section_child/html';
$section_child_css = 'data/blog/section_child/css';
$section_child_js = 'data/blog/section_child/js';
$section_child_sql = 'data/blog/section_child/sql';
$section_child_src = 'data/blog/section_child/src';

$footer_html = 'data/blog/footer/html';
$footer_css = 'data/blog/footer/css';
$footer_js = 'data/blog/footer/js';
$footer_sql = 'data/blog/footer/sql';
$footer_src = 'data/blog/footer/src';

// --- Récupération des fichiers ---
$header_html_array = getFilesFromDir($header_html, "");
$header_css_array  = getFilesFromDir($header_css, "");
$header_js_array   = getFilesFromDir($header_js, "");
$header_sql_array  = getFilesFromDir($header_sql, "");
$header_src_array  = getFilesFromDir($header_src, "");

$section_html_array = getFilesFromDir($section_html, "");
$section_css_array  = getFilesFromDir($section_css, "");
$section_js_array   = getFilesFromDir($section_js, "");
$section_sql_array  = getFilesFromDir($section_sql, "");
$section_src_array  = getFilesFromDir($section_src, "");

$section_child_html_array = getFilesFromDir($section_child_html, "");
$section_child_css_array  = getFilesFromDir($section_child_css, "");
$section_child_js_array   = getFilesFromDir($section_child_js, "");
$section_child_sql_array  = getFilesFromDir($section_child_sql, "");
$section_child_src_array  = getFilesFromDir($section_child_src, "");

$footer_html_array = getFilesFromDir($footer_html, "");
$footer_css_array  = getFilesFromDir($footer_css, "");
$footer_js_array   = getFilesFromDir($footer_js, "");
$footer_sql_array  = getFilesFromDir($footer_sql, "");
$footer_src_array  = getFilesFromDir($footer_src, "");




// ✅ Tableau principal des menus
$allMenus = [
    "HTML" => [
        array_merge(["HEADER HTML*"], $header_html_array),
        array_merge(["HEADER CSS*"], $header_css_array),
        array_merge(["HEADER JS*"], $header_js_array),
        array_merge(["HEADER SQL*"], $header_sql_array),
        array_merge(["HEADER SRC*"], $header_src_array),

        array_merge(["SECTION HTML*"], $section_html_array),
        array_merge(["SECTION CSS*"], $section_css_array),
        array_merge(["SECTION JS*"], $section_js_array),
        array_merge(["SECTION SQL*"], $section_sql_array),
        array_merge(["SECTION SRC*"], $section_src_array),

        array_merge(["SECTION CHILD HTML*"], $section_child_html_array),
        array_merge(["SECTION CHILD CSS*"], $section_child_css_array),
        array_merge(["SECTION CHILD JS*"], $section_child_js_array),
        array_merge(["SECTION CHILD SQL*"], $section_child_sql_array),
        array_merge(["SECTION CHILD SRC*"], $section_child_src_array),

        array_merge(["FOOTER HTML*"], $footer_html_array),
        array_merge(["FOOTER CSS*"], $footer_css_array),
        array_merge(["FOOTER JS*"], $footer_js_array),
        array_merge(["FOOTER SQL*"], $footer_sql_array),
        array_merge(["FOOTER SRC*"], $footer_src_array)
    ]
];

// --- Couleurs ---
$headerColors       = ["#cde0e9ff", "#a0d8f1", "#70c1e0", "#3caed6", "#31748dff"];
$sectionColors      = ["#a8d5ba", "#7ebf95", "#5fae7b", "#3f9f5e", "#2d8149", "#1f6e3e"];
$sectionChildColors = ["#ffd9b3", "#ffbf80", "#ffa64d", "#ff8c1a", "#e67300"]; // orange clair → foncé
$footerColors       = ["#e4c7a1ff", "#dfb78dff", "#bd8f6bff", "#be8d65ff", "#774f2fff"];
$defaultColors      = ["#f7d9b3", "#f3c680", "#f0b34d", "#e6991a"]; // tons chauds harmonieux
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menus multiples PHP + JS</title>
    <style>
    .menu-container {
        display: flex;
        align-items: center;
        gap: 100px;
        position: relative;
        border: 1px solid #ccc;
        padding: 20px;
        margin-bottom: 40px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .menu-title {
        font-size: 50px;
        font-weight: bold;
        position: relative;
        z-index: 2;
        color: #333;
    }

    .menu-branches {
        display: flex;
        flex-direction: column;
        gap: 20px;
        position: relative;
        z-index: 2;
    }

    .menu-branch {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .menu-branch select {
        padding: 5px 10px;
        font-size: 16px;
        border: 2px solid #000;
        cursor: pointer;
        border-radius: 5px;
        color: #fff;
        font-weight: bold;
    }

    .color-display {
        width: 30px;
        height: 30px;
        border: 1px solid #000;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: bold;
        font-size: 14px;
    }

    .legend {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 20px;
        border-top: 1px solid #ccc;
        padding-top: 10px;
    }

    .legend-item {
        display: flex;
        align-items: center;
        gap: 5px;
        font-weight: bold;
        color: #333;
    }

    svg.connections {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: visible;
        z-index: 1;
    }

    path {
        fill: none;
        stroke: #333;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-dasharray: 400;
        stroke-dashoffset: 400;
        animation: draw 1.5s ease forwards;
    }

    path.marker {
        marker-end: url(#arrow);
    }

    @keyframes draw {
        to {
            stroke-dashoffset: 0;
        }
    }
    </style>
</head>

<body>
    <?php


?>
    <div id="menu-root">
        <?php foreach($allMenus as $title => $menus): ?>
        <div class="menu-container">
            <div class="menu-title"><?= $title ?></div>
            <div class="menu-branches">
                <?php
$elementColors = [];
$sectionIndex = 0;
$counter = 1;

for ($index = 0; $index < count($menus); $index++) {
    $menu = $menus[$index];
    $elementName = $menu[0];

    switch (true) {
        case stripos($elementName, "HEADER") !== false:
            $color = $headerColors[$index % count($headerColors)];
            break;

        case stripos($elementName, "SECTION CHILD") !== false:
            $color = $sectionChildColors[$sectionIndex % count($sectionChildColors)];
            $sectionIndex++;
            break;

        case stripos($elementName, "SECTION") !== false:
            $color = $sectionColors[$sectionIndex % count($sectionColors)];
            $sectionIndex++;
            break;

        case stripos($elementName, "FOOTER") !== false:
            $color = $footerColors[$index % count($footerColors)];
            break;

        default:
            $color = $defaultColors[$index % count($defaultColors)];
            break;
    }

    $elementColors[] = [
        'name' => $elementName,
        'color' => $color,
        'number' => $counter
    ];

    $selectId = "select_" . strtolower($title) . "_" . $counter;
    ?>
                <div class="menu-branch">
                    <select id="<?= $selectId ?>" style="background:<?= $color ?>"
                        onchange="home_select_page_all_function(this)">
                        <?php for ($j = 0; $j < count($menu); $j++): ?>
                    
                        <?php 
if($j==0){
    ?>
    <option><?= $home_select_page_all_array[$index] ?></option>
<?php
}
else{
?>
    <option><?= $menu[$j] ?></option>

<?php
}


?>
                        <?php endfor; ?>
                    </select>
                    <div class="color-display" style="background:<?= $color ?>"><?= $counter ?></div>
                </div>
                <?php
    $counter++;
}
?>

            </div>


        </div>
        <?php endforeach; ?>
    </div>

 
<div class="legend">
    <?php 
    $count = count($elementColors);
    for ($i = 0; $i < $count; $i++): 
        $el = $elementColors[$i];
    ?>
        <div class="legend-item">
            <div class="color-display" style="background:<?= $el['color'] ?>"><?= $el['number'] ?></div>
            <div><?= $el['name'] ?></div>
        </div>

        <?php if (($i + 1) % 3 === 0): ?>
            <div class="barr_noir"></div>
        <?php endif; ?>

    <?php endfor; ?>
</div>

<style>
.legend {
    display: flex;
    flex-wrap: wrap; /* permet de passer à la ligne automatiquement */
    gap: 10px; /* espace entre les éléments */
    justify-content: flex-start;
    align-items: center;
    width: 100%;
    font-family: 'Poppins', sans-serif;
    

}
.legend-item div{
 
    width: 100%;
    text-align: center;
}

.legend-item {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 6px 10px;
    border-radius: 8px;
    background: #f5f5f5;
    flex: 1 1 calc(33.333% - 20px); /* 3 items par ligne */
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    

}

.color-display {
    width: 25px;
    height: 25px;
    border-radius: 4px;
    color: #fff;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
}

.barr_noir {
    height: 2px;
    background-color: #f5f5f562;
    width: 100%;
    margin: 6px 0;
}
</style>




    <script>
    // Fonction appelée à chaque changement de <select>
    function home_select_page_all_function(element) {
        const selectId = element.id;
        console.log("Sélecteur modifié : ID =", selectId);




        // HEADER
        var header_html_pages_projet = document.getElementById("select_html_1").value;
        var header_css_pages_projet = document.getElementById("select_html_2").value;
        var header_js_pages_projet = document.getElementById("select_html_3").value;
        var header_sql_pages_projet = document.getElementById("select_html_4").value;
        var header_src_pages_projet = document.getElementById("select_html_5").value;








 





        // SECTION
        var section_html_pages_projet = document.getElementById("select_html_6").value;
        var section_css_pages_projet = document.getElementById("select_html_7").value;
        var section_js_pages_projet = document.getElementById("select_html_8").value;
        var section_sql_pages_projet = document.getElementById("select_html_9").value;
        var section_src_pages_projet = document.getElementById("select_html_10").value;


 

        // SECTION CHILD
        var section_child_html_pages_projet = document.getElementById("select_html_11").value;
        var section_child_css_pages_projet = document.getElementById("select_html_12").value;
        var section_child_js_pages_projet = document.getElementById("select_html_13").value;
        var section_child_sql_pages_projet = document.getElementById("select_html_14").value;
        var section_child_src_pages_projet = document.getElementById("select_html_15").value;

 
        // FOOTER
        var footer_html_pages_projet = document.getElementById("select_html_16").value;
        var footer_css_pages_projet = document.getElementById("select_html_17").value;
        var footer_js_pages_projet = document.getElementById("select_html_18").value;
        var footer_sql_pages_projet = document.getElementById("select_html_19").value;
        var footer_src_pages_projet = document.getElementById("select_html_20").value;


 

        var ok = new Information("req_sql/update_home_select_page_all.php"); // création de la classe 
        ok.add("header_html_pages_projet", header_html_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("header_css_pages_projet", header_css_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("header_js_pages_projet", header_js_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("header_sql_pages_projet", header_sql_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("header_src_pages_projet", header_src_pages_projet); // ajout de l'information pour lenvoi 

        ok.add("section_html_pages_projet", section_html_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("section_css_pages_projet", section_css_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("section_js_pages_projet", section_js_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("section_sql_pages_projet", section_sql_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("section_src_pages_projet", section_src_pages_projet); // ajout de l'information pour lenvoi 

        ok.add("section_child_html_pages_projet",
        section_child_html_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("section_child_css_pages_projet", section_child_css_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("section_child_js_pages_projet", section_child_js_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("section_child_sql_pages_projet", section_child_sql_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("section_child_src_pages_projet", section_child_src_pages_projet); // ajout de l'information pour lenvoi 

        ok.add("footer_html_pages_projet", footer_html_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("footer_css_pages_projet", footer_css_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("footer_js_pages_projet", footer_js_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("footer_sql_pages_projet", footer_sql_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("footer_src_pages_projet", footer_src_pages_projet); // ajout de l'information pour lenvoi 

        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 

    }

    // Génération des liens SVG entre le titre et les sélecteurs
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

            const menuType = branch.parentElement.querySelector("select option:first-child").textContent;
            let controlPoints;
            switch (true) {
                case menuType.includes("HEADER"):
                    controlPoints = {
                        midX: (titleX + branchX) / 2,
                        midY: titleY - Math.abs(branchY - titleY) * 0.3
                    };
                    break;
                case menuType.includes("SECTION CHILD"):
                    controlPoints = {
                        midX: (titleX + branchX) / 2,
                        midY: titleY + (branchY - titleY) * 0.4
                    };
                    break;
                case menuType.includes("SECTION"):
                    controlPoints = {
                        midX: (titleX + branchX) / 2,
                        midY: titleY + (branchY - titleY) * 0.3
                    };
                    break;
                case menuType.includes("FOOTER"):
                    controlPoints = {
                        midX: (titleX + branchX) / 2,
                        midY: titleY + (branchY - titleY) * 0.5
                    };
                    break;
                default:
                    controlPoints = {
                        midX: (titleX + branchX) / 2,
                        midY: (titleY + branchY) / 2
                    };
            }
            const d =
                `M${titleX},${titleY} C${controlPoints.midX},${titleY} ${controlPoints.midX},${controlPoints.midY} ${branchX},${branchY}`;
            path.setAttribute("d", d);
            svg.appendChild(path);
        });

        container.appendChild(svg);
    }

    window.addEventListener('load', () => {
        document.querySelectorAll('.menu-container').forEach(container => generateConnections(container));
    });
    </script>


 
</body>

</html>