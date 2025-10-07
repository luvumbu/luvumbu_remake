<?php
$dossiersIgnore = ['qr_code_1', '.git', 'img', 'documentation'];

$lignesParDossier = [];
$cheminsDossier = [];
$lignesParFichier = [];
$elementsParFichier = [];

function parcourirDossier($racine, &$totalLignes = 0, $dossiersIgnore = [], &$lignesParDossier = [], &$cheminsDossier = [], &$lignesParFichier = [], &$elementsParFichier = []) {
    if (!is_dir($racine)) return;

    $elements = scandir($racine);
    $lignesDansDossier = 0;

    foreach ($elements as $element) {
        if ($element === '.' || $element === '..') continue;

        $cheminComplet = $racine . DIRECTORY_SEPARATOR . $element;

        if (is_dir($cheminComplet) && in_array($element, $dossiersIgnore)) continue;

        if (is_dir($cheminComplet)) {
            parcourirDossier($cheminComplet, $totalLignes, $dossiersIgnore, $lignesParDossier, $cheminsDossier, $lignesParFichier, $elementsParFichier);
        } else {
            $ext = strtolower(pathinfo($cheminComplet, PATHINFO_EXTENSION));
            $extensionsIgnorees = ["jpg","jpeg","png","gif","exe","zip","pdf","mp4","mp3","bin","ico","mov","avi","rar"];
            if (in_array($ext, $extensionsIgnorees)) continue;

            $nbLignes = 0;
            $elementsFichier = [];
            $handle = @fopen($cheminComplet, "r");
            if ($handle) {
                while (!feof($handle)) {
                    $line = fgets($handle);
                    $nbLignes++;
                    if(trim($line) !== '') $elementsFichier[] = $line; // compter chaque ligne comme un élément
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
parcourirDossier($racine, $totalLignes, $dossiersIgnore, $lignesParDossier, $cheminsDossier, $lignesParFichier, $elementsParFichier);

$jsDossiers = json_encode($cheminsDossier);
$jsFichiers = json_encode($lignesParFichier);
$jsElements = json_encode($elementsParFichier);
?>

<style>
table { border-collapse: collapse; width: 100%; margin-bottom: 20px; }
th, td { border: 1px solid #ccc; padding: 6px 10px; text-align: left; }
button.view-btn { background-color: #28a745; color: white; border: none; padding: 5px 12px; cursor: pointer; border-radius: 4px; }
button.view-btn:hover { background-color: #218838; }
</style>

<h2>📊 Détails par dossier</h2>
<table id="tableDossiers">
<tr><th>Dossier</th><th>Chemin complet</th><th>Nombre de lignes</th><th>Action</th></tr>
<?php foreach($lignesParDossier as $nom => $lignes): ?>
<tr>
<td><?php echo htmlspecialchars($nom); ?></td>
<td><?php echo htmlspecialchars($cheminsDossier[$nom]); ?></td>
<td><?php echo $lignes; ?></td>
<td><button class="view-btn" data-dossier="<?php echo htmlspecialchars($nom); ?>">Voir fichiers</button></td>
</tr>
<?php endforeach; ?>
</table>

<h2>📄 Nombre d’éléments dans les fichiers du dossier sélectionné</h2>
<table id="tableFichiers">
<tr><th>Fichier</th><th>Nombre d’éléments</th></tr>
</table>

<script>
const dossiers = <?php echo $jsDossiers; ?>;
const fichiers = <?php echo $jsFichiers; ?>;
const elementsFichiers = <?php echo $jsElements; ?>;

document.querySelectorAll('button.view-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const dossier = btn.getAttribute('data-dossier');
        const chemin = dossiers[dossier];

        const fichiersDansDossier = Object.keys(fichiers).filter(f => f.startsWith(chemin));
        const tableFichiers = document.getElementById('tableFichiers');
        tableFichiers.innerHTML = "<tr><th>Fichier</th><th>Nombre d’éléments</th></tr>";

        fichiersDansDossier.forEach(f => {
            const nbElements = elementsFichiers[f].length;
            const tr = document.createElement('tr');
            tr.innerHTML = `<td>${f}</td><td>${nbElements}</td>`;
            tableFichiers.appendChild(tr);
        });
    });
});
</script>
