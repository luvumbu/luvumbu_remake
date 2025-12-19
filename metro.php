<?php
// ----------------------------------
// ARRAY DES METROS (ligne 1 + ligne 2 complètes)
// ----------------------------------
$metro = array(
    "ligne_1" => array(
        array("station" => "Quatre Cantons – Stade Pierre Mauroy", "next" => 1),
        array("station" => "Cité Scientifique – Professeur Gabillard", "next" => 1),
        array("station" => "Triolo", "next" => 1),
        array("station" => "Villeneuve‑d’Ascq – Hôtel de Ville", "next" => 1),
        array("station" => "Pont de Bois", "next" => 1),
        array("station" => "Square Flandres", "next" => 1),
        array("station" => "Mairie d’Hellemmes", "next" => 1),
        array("station" => "Marbrerie", "next" => 1),
        array("station" => "Fives", "next" => 1),
        array("station" => "Caulier", "next" => 1),
        array("station" => "Gare Lille‑Flandres", "next" => 1),
        array("station" => "Rihour", "next" => 1),
        array("station" => "République – Beaux‑Arts", "next" => 1),
        array("station" => "Gambetta", "next" => 1),
        array("station" => "Wazemmes", "next" => 1),
        array("station" => "Porte des Postes", "next" => 1),
        array("station" => "CHU – Centre Oscar‑Lambret", "next" => 1),
        array("station" => "CHU – Eurasanté", "next" => null)
    ),
    "ligne_2" => array(
        array("station" => "Saint‑Philibert", "next" => 1),
        array("station" => "Bourg", "next" => 1),
        array("station" => "Maison des Enfants", "next" => 1),
        array("station" => "Mitterie", "next" => 1),
        array("station" => "Pont Supérieur", "next" => 1),
        array("station" => "Lomme – Lambersart", "next" => 1),
        array("station" => "Canteleu", "next" => 1),
        array("station" => "Bois Blancs", "next" => 1),
        array("station" => "Port de Lille", "next" => 1),
        array("station" => "Cormontaigne", "next" => 1),
        array("station" => "Montebello", "next" => 1),
        array("station" => "Porte des Postes", "next" => 1),
        array("station" => "Porte d’Arras", "next" => 1),
        array("station" => "Porte de Douai", "next" => 1),
        array("station" => "Porte de Valenciennes", "next" => 1),
        array("station" => "Lille Grand Palais", "next" => 1),
        array("station" => "Mairie de Lille", "next" => 1),
        array("station" => "Gare Lille‑Flandres", "next" => 1),
        array("station" => "Gare Lille‑Europe", "next" => 1),
        array("station" => "Saint‑Maurice Pellevoisin", "next" => 1),
        array("station" => "Mons Sarts", "next" => 1),
        array("station" => "Mairie de Mons", "next" => 1),
        array("station" => "Fort de Mons", "next" => 1),
        array("station" => "Les Prés – Edgard‑Pisani", "next" => 1),
        array("station" => "Jean‑Jaurès", "next" => 1),
        array("station" => "Wasquehal – Pavé de Lille", "next" => 1),
        array("station" => "Wasquehal – Hôtel de Ville", "next" => 1),
        array("station" => "Croix – Centre", "next" => 1),
        array("station" => "Mairie de Croix", "next" => 1),
        array("station" => "Épeule – Montesquieu", "next" => 1),
        array("station" => "Roubaix – Charles‑de‑Gaulle", "next" => 1),
        array("station" => "Eurotéléport", "next" => 1),
        array("station" => "Roubaix – Grand‑Place", "next" => 1),
        array("station" => "Gare Jean‑Lebas", "next" => 1),
        array("station" => "Alsace", "next" => 1),
        array("station" => "Mercure", "next" => 1),
        array("station" => "Carliers", "next" => 1),
        array("station" => "Tourcoing – Centre", "next" => 1),
        array("station" => "Tourcoing – Sébastopol", "next" => 1),
        array("station" => "Colbert", "next" => 1),
        array("station" => "Phalempins", "next" => 1),
        array("station" => "Pont de Neuville", "next" => 1),
        array("station" => "Bourgogne", "next" => 1),
        array("station" => "CH Dron", "next" => null)
    )
);

// ----------------------------------
// VARIABLES POST (PHP 5.4 compatible)
// ----------------------------------
$selectedLigne = isset($_POST['ligne']) ? $_POST['ligne'] : '';
$selectedDepart = isset($_POST['depart']) ? $_POST['depart'] : '';
$selectedArrivee = isset($_POST['arrivee']) ? $_POST['arrivee'] : '';
$simDuration = isset($_POST['sim_duration']) ? (int)$_POST['sim_duration'] : 10;

// ----------------------------------
// FONCTION POUR CALCULER TEMPS
// ----------------------------------
function getTime($ligne, $depart, $arrivee, $metro) {
    $stations = $metro[$ligne];
    $start = -1;
    $end = -1;

    foreach ($stations as $index => $s) {
        if ($s['station'] == $depart) $start = $index;
        if ($s['station'] == $arrivee) $end = $index;
    }

    if ($start == -1 || $end == -1) return "Station invalide";
    if ($start == $end) return "Déjà à la station";

    $time = 0;
    if ($start < $end) {
        for ($i = $start; $i < $end; $i++) {
            $time += $stations[$i]['next'];
        }
    } else {
        for ($i = $start - 1; $i >= $end; $i--) {
            $time += $stations[$i]['next'];
        }
    }
    return $time . " min";
}

// ----------------------------------
// CALCUL RESULTAT
// ----------------------------------
$result = '';
if ($selectedLigne && $selectedDepart && $selectedArrivee) {
    $result = getTime($selectedLigne, $selectedDepart, $selectedArrivee, $metro);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculateur et Simulation Métro Lille</title>
    <style>
        canvas {border:1px solid #333;background-color:#f0f0f0;margin-top:10px;}
    </style>
</head>
<body>
    <h1>Calculateur et Simulation Métro Lille</h1>

    <!-- FORMULAIRE CALCUL -->
    <form method="POST">
        <label>Ligne :</label>
        <select name="ligne" id="ligne" onchange="updateStations()">
            <option value="">-- Choisir --</option>
            <?php foreach ($metro as $ligne => $stations) { ?>
                <option value="<?php echo $ligne; ?>" <?php echo ($selectedLigne==$ligne ? 'selected' : ''); ?>>
                    <?php echo ucfirst(str_replace('_',' ',$ligne)); ?>
                </option>
            <?php } ?>
        </select><br><br>

        <label>Station départ :</label>
        <select name="depart" id="depart">
            <option value="">-- Choisir --</option>
            <?php
            if ($selectedLigne) {
                foreach ($metro[$selectedLigne] as $s) {
                    $sel = ($selectedDepart==$s['station']) ? 'selected' : '';
                    echo '<option value="'.$s['station'].'" '.$sel.'>'.$s['station'].'</option>';
                }
            }
            ?>
        </select><br><br>

        <label>Station arrivée :</label>
        <select name="arrivee" id="arrivee">
            <option value="">-- Choisir --</option>
            <?php
            if ($selectedLigne) {
                foreach ($metro[$selectedLigne] as $s) {
                    $sel = ($selectedArrivee==$s['station']) ? 'selected' : '';
                    echo '<option value="'.$s['station'].'" '.$sel.'>'.$s['station'].'</option>';
                }
            }
            ?>
        </select><br><br>

        <label>Durée simulation (secondes) :</label>
        <input type="number" name="sim_duration" value="<?php echo $simDuration; ?>" min="1"><br><br>

        <button type="submit">Calculer & Simuler</button>
    </form>

    <?php if ($result) { ?>
        <h2>Temps estimé : <?php echo $result; ?></h2>
    <?php } ?>

    <!-- CANVAS SIMULATION -->
    <canvas id="metroCanvas" width="1200" height="200"></canvas>

    <script>
        var metro = <?php echo json_encode($metro); ?>;
        var selectedLigne = "<?php echo $selectedLigne; ?>";
        var duration = <?php echo $simDuration; ?>;

        var canvas = document.getElementById('metroCanvas');
        var ctx = canvas.getContext('2d');
        var stationPos = [];
        var metroX = 0;
        var metroY = 100;
        var interval;

        function drawStations() {
            ctx.clearRect(0,0,canvas.width,canvas.height);
            if(!selectedLigne) return;
            var stations = metro[selectedLigne];
            var spacing = canvas.width / (stations.length + 1);
            stationPos = [];
            for(var i=0;i<stations.length;i++){
                var x = spacing*(i+1);
                stationPos.push(x);
                ctx.beginPath();
                ctx.arc(x, metroY, 10, 0, 2*Math.PI);
                ctx.fillStyle = "#555";
                ctx.fill();
                ctx.fillStyle = "#000";
                ctx.font = "12px Arial";
                ctx.textAlign = "center";
                ctx.fillText(stations[i].station, x, metroY+25);
            }
        }

        drawStations();

        // Lancer simulation automatiquement après soumission
        if(selectedLigne){
            var stationsArray = metro[selectedLigne];
            var totalStations = stationsArray.length;
            var timePerStation = (duration*1000)/(totalStations-1);
            var current = 0;
            metroX = stationPos[0];

            clearInterval(interval);
            interval = setInterval(function(){
                drawStations();
                ctx.beginPath();
                ctx.arc(metroX, metroY, 12, 0, 2*Math.PI);
                ctx.fillStyle = "red";
                ctx.fill();
                current++;
                if(current<stationPos.length){
                    metroX = stationPos[current];
                }else{
                    clearInterval(interval);
                }
            }, timePerStation);
        }

        // Mettre à jour les select des stations selon la ligne
        function updateStations(){
            var ligneSelect = document.getElementById('ligne');
            var departSelect = document.getElementById('depart');
            var arriveeSelect = document.getElementById('arrivee');
            var ligne = ligneSelect.value;
            departSelect.innerHTML = '<option value="">-- Choisir --</option>';
            arriveeSelect.innerHTML = '<option value="">-- Choisir --</option>';
            selectedLigne = ligne;
            drawStations();
            if(ligne){
                for(var i=0;i<metro[ligne].length;i++){
                    var s = metro[ligne][i];
                    var option1 = document.createElement('option');
                    option1.value = s.station;
                    option1.text = s.station;
                    departSelect.add(option1);

                    var option2 = document.createElement('option');
                    option2.value = s.station;
                    option2.text = s.station;
                    arriveeSelect.add(option2);
                }
            }
        }
    </script>
</body>
</html>
