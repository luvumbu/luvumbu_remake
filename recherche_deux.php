<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analyse du code sans doublons</title>
</head>
<body>

<?php
$dossiersIgnore = ['qr_code_1', '.git', 'img', 'documentation'];

$lignesParDossier = [];
$cheminsDossier = [];
$lignesParFichier = [];
$elementsParFichier = [];

// 🧠 Liste globale des fichiers déjà comptés pour éviter les doublons
$fichiersDejaVus = [];

function parcourirDossier($racine, &$totalLignes = 0, $dossiersIgnore = [], &$lignesParDossier = [], &$cheminsDossier = [], &$lignesParFichier = [], &$elementsParFichier = [], &$fichiersDejaVus = []) {
    if (!is_dir($racine)) return;

    $elements = scandir($racine);
    $lignesDansDossier = 0;

    foreach ($elements as $element) {
        if ($element === '.' || $element === '..') continue;

        $cheminComplet = $racine . DIRECTORY_SEPARATOR . $element;

        // Ignorer les dossiers inutiles
        if (is_dir($cheminComplet) && in_array($element, $dossiersIgnore)) continue;

        if (is_dir($cheminComplet)) {
            parcourirDossier($cheminComplet, $totalLignes, $dossiersIgnore, $lignesParDossier, $cheminsDossier, $lignesParFichier, $elementsParFichier, $fichiersDejaVus);
        } else {
            $ext = strtolower(pathinfo($cheminComplet, PATHINFO_EXTENSION));
            $extensionsIgnorees = ["jpg","jpeg","png","gif","exe","zip","pdf","mp4","mp3","bin","ico","mov","avi","rar"];
            if (in_array($ext, $extensionsIgnorees)) continue;

            // 🔒 Vérifier si le fichier n'a pas déjà été compté
            $cheminReel = realpath($cheminComplet);
            if ($cheminReel === false || isset($fichiersDejaVus[$cheminReel])) {
                continue; // doublon ignoré
            }
            $fichiersDejaVus[$cheminReel] = true;

            // Lecture et comptage des lignes
            $nbLignes = 0;
            $elementsFichier = [];
            $handle = @fopen($cheminComplet, "r");
            if ($handle) {
                while (!feof($handle)) {
                    $line = fgets($handle);
                    $nbLignes++;
                    if(trim($line) !== '') $elementsFichier[] = $line;
                }
                fclose($handle);
                $totalLignes += $nbLignes;
                $lignesDansDossier += $nbLignes;

                $lignesParFichier[$cheminComplet] = $nbLignes;
                $elementsParFichier[$cheminComplet] = $elementsFichier;
            }
        }
    }

    $nomDossier = basename($racine);
    $lignesParDossier[$nomDossier] = $lignesDansDossier;
    $cheminsDossier[$nomDossier] = $racine;
}

$racine = __DIR__;
$totalLignes = 0;
parcourirDossier($racine, $totalLignes, $dossiersIgnore, $lignesParDossier, $cheminsDossier, $lignesParFichier, $elementsParFichier, $fichiersDejaVus);

$jsDossiers = json_encode($cheminsDossier);
$jsFichiers = json_encode($lignesParFichier);
$jsElements = json_encode($elementsParFichier);
?>

<style>
body { font-family: Consolas, monospace; background: #f7f9fc; padding: 20px; }
table { border-collapse: collapse; width: 100%; margin-bottom: 20px; }
th, td { border: 1px solid #ccc; padding: 6px 10px; text-align: left; }
button.view-btn { background-color: #28a745; color: white; border: none; padding: 5px 12px; cursor: pointer; border-radius: 4px; }
button.view-btn:hover { background-color: #218838; }
.subtable { margin: 5px 0 15px 30px; border: 1px solid #aaa; }
.subtable th, .subtable td { border: 1px solid #ccc; padding: 4px 8px; font-size: 0.9em; }
</style>

<h2>📊 Détails par dossier (sans doublons)</h2>
<table id="tableDossiers">
<tr><th>Dossier</th><th>Chemin complet</th><th>Nombre de lignes</th><th>Action</th></tr>
<?php foreach($lignesParDossier as $nom => $lignes): ?>
<tr>
<td><?php echo htmlspecialchars($nom); ?></td>
<td><?php echo htmlspecialchars($cheminsDossier[$nom]); ?></td>
<td><?php echo $lignes; ?></td>
<td><button class="view-btn" data-dossier="<?php echo htmlspecialchars($nom); ?>">Voir fichiers</button></td>
</tr>
<tr class="fichiers-row" style="display:none;"><td colspan="4">
    <table class="subtable"></table>
</td></tr>
<?php endforeach; ?>
</table>

<h2>📊 Graphique par dossier</h2>
<canvas id="graphLignes" width="800" height="400"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const dossiers = <?php echo $jsDossiers; ?>;
const fichiers = <?php echo $jsFichiers; ?>;
const elementsFichiers = <?php echo $jsElements; ?>;

const ctx = document.getElementById('graphLignes').getContext('2d');
const graph = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode(array_keys($lignesParDossier)); ?>,
        datasets: [{
            label: 'Nombre de lignes par dossier',
            data: <?php echo json_encode(array_values($lignesParDossier)); ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: { legend: { display: true }, title: { display: true, text: 'Répartition des lignes de code (sans doublons)' } },
        scales: { y: { beginAtZero: true } }
    }
});

// Gestion des affichages dynamiques
document.querySelectorAll('button.view-btn').forEach((btn, idx) => {
    btn.addEventListener('click', () => {
        const dossier = btn.getAttribute('data-dossier');
        const chemin = dossiers[dossier];

        const fichiersDansDossier = Object.keys(fichiers).filter(f => f.startsWith(chemin));
        const subtable = btn.closest('tr').nextElementSibling.querySelector('.subtable');
        subtable.innerHTML = "<tr><th>Fichier</th><th>Nombre d’éléments</th><th>Action</th></tr>";

        let total = 0;
        fichiersDansDossier.forEach(f => {
            const nbElements = elementsFichiers[f].length;
            total += nbElements;
            const tr = document.createElement('tr');
            tr.innerHTML = `<td>${f}</td><td>${nbElements}</td><td><button class="view-btn-file" data-fichier="${f}">Voir éléments</button></td>`;
            subtable.appendChild(tr);

            const trElements = document.createElement('tr');
            const tdElements = document.createElement('td');
            tdElements.colSpan = 3;
            tdElements.innerHTML = `<table class="subtable elements-subtable" style="display:none;"></table>`;
            trElements.appendChild(tdElements);
            subtable.appendChild(trElements);
        });

        const trTotal = document.createElement('tr');
        trTotal.innerHTML = `<td><strong>Total</strong></td><td colspan="2"><strong>${total}</strong></td>`;
        subtable.appendChild(trTotal);

        btn.closest('tr').nextElementSibling.style.display =
            btn.closest('tr').nextElementSibling.style.display === 'none' ? '' : 'none';

        subtable.querySelectorAll('.view-btn-file').forEach(bf => {
            bf.addEventListener('click', () => {
                const fichier = bf.getAttribute('data-fichier');
                const elementsTable = bf.closest('tr').nextElementSibling.querySelector('.elements-subtable');
                elementsTable.style.display = elementsTable.style.display === 'none' ? '' : 'none';
                if(elementsTable.innerHTML === '') {
                    elementsTable.innerHTML = "<tr><th>Élément</th><th>Lignes</th></tr>";
                    elementsFichiers[fichier].forEach((el,i) => {
                        if(el.trim() === '') return;
                        const trEl = document.createElement('tr');
                        trEl.innerHTML = `<td>${el}</td><td>1</td>`;
                        elementsTable.appendChild(trEl);
                    });
                }
            });
        });
    });
});
</script>

<h2>🔢 Total de lignes de code (sans doublons)</h2>
<p style="font-weight:bold; font-size:1.2em; color:#000;"><?php echo $totalLignes; ?> lignes</p>

<style>
button.view-btn { 
    background-color: #28a745;
    color: white; border: none; padding: 5px 12px; cursor: pointer; border-radius: 4px; 
}
button.view-btn:hover { background-color: #218838; }

button.view-btn-file { 
    background-color: #007bff;
    color: white; border: none; padding: 3px 8px; cursor: pointer; border-radius: 4px;
}
button.view-btn-file:hover { background-color: #0056b3; }
</style>

</body>
</html>
