<?php
function isValidCSS($cssString, &$errorMsg = null) {
    $css = preg_replace('!/\*.*?\*/!s', '', $cssString);
    $css = trim($css);

    if ($css === '') {
        $errorMsg = "La chaîne CSS est vide.";
        return false;
    }

    $openCount  = substr_count($css, '{');
    $closeCount = substr_count($css, '}');
    if ($openCount !== $closeCount) {
        $errorMsg = "Les accolades ne sont pas équilibrées.";
        return false;
    }

    // liste de propriétés valides (résumé)
    $allowed = array('font-size','color','width','height','margin','padding','background','background-color','border','border-width','border-color','display','position','top','left','right','bottom','z-index','flex','transform','transition');
    $allowedMap = array();
    foreach ($allowed as $p) $allowedMap[$p] = true;

    preg_match_all('/([^{]+)\{([^}]+)\}/', $css, $matches, PREG_SET_ORDER);
    if (empty($matches)) {
        $errorMsg = "Aucun bloc CSS valide trouvé.";
        return false;
    }

    foreach ($matches as $block) {
        $selector = trim($block[1]);
        $body     = trim($block[2]);

        if (!preg_match('/^[a-zA-Z0-9\.\#\*\:\-\s\,\>\+\~\[\]\=\"\'\_]+$/', $selector)) {
            $errorMsg = "Sélecteur invalide : $selector";
            return false;
        }

        $lines = explode(';', $body);
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '') continue;

            $parts = explode(':', $line, 2);
            if (count($parts) != 2) {
                $errorMsg = "Erreur de syntaxe dans : $line";
                return false;
            }

            $prop = strtolower(trim($parts[0]));
            $val  = trim($parts[1]);

            if (!isset($allowedMap[$prop])) {
                $errorMsg = "Propriété non reconnue : $prop";
                return false;
            }

            // vérification des valeurs numériques
            if (preg_match('/(width|height|font-size|margin|padding|top|left|right|bottom)/', $prop)) {
                // autorise 0, sinon exige unité
                if (!preg_match('/^(0|[0-9]+(\.[0-9]+)?(px|em|rem|%|vh|vw|vmin|vmax|pt|cm|mm|in))$/', $val)) {
                    $errorMsg = "Valeur invalide pour $prop : '$val' (unité manquante ?)";
                    return false;
                }
            }

            // vérification des couleurs
            if ($prop === 'color' || strpos($prop, 'background') === 0 || strpos($prop, 'border-color') === 0) {
                if (!preg_match('/^(#[0-9a-fA-F]{3,8}|rgb[a]?\([^)]*\)|hsl[a]?\([^)]*\)|[a-zA-Z]+)$/', $val)) {
                    $errorMsg = "Couleur invalide : $val";
                    return false;
                }
            }

            if (strpos($val, '{') !== false || strpos($val, '}') !== false) {
                $errorMsg = "Accolade inattendue dans la valeur de $prop";
                return false;
            }

            if (substr_count($val, '(') !== substr_count($val, ')')) {
                $errorMsg = "Parenthèses déséquilibrées dans la valeur de $prop";
                return false;
            }
        }
    }

    return true;
}

// --- page test ---
$result = null;
$errorMsg = '';
$inputCSS = isset($_POST['css']) ? $_POST['css'] : '';

if ($inputCSS !== '') {
    $valid = isValidCSS($inputCSS, $errorMsg);
    $result = $valid ? "✔️ CSS Valide" : "❌ Invalide — " . $errorMsg;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Validateur CSS Strict PHP 5.4</title>
<style>
body{background:#0d1117;color:#c9d1d9;font-family:sans-serif;padding:20px}
form{background:#161b22;padding:20px;border-radius:10px;width:600px;margin:auto}
textarea{width:100%;height:200px;background:#0d1117;color:#fff;border:1px solid #30363d;border-radius:8px;padding:10px}
button{margin-top:10px;padding:10px 20px;background:#238636;border:none;color:white;border-radius:8px}
.result{margin-top:15px;padding:10px;border-radius:8px;text-align:center}
.valid{background:#1b4332;color:#80ed99}
.invalid{background:#641e16;color:#ffb3b3}
</style>
</head>
<body>
<h2>🧩 Validateur CSS Strict (PHP 5.4)</h2>
<form method="POST">
<textarea name="css"><?php echo htmlspecialchars($inputCSS); ?></textarea><br>
<button type="submit">Vérifier</button>
<?php if ($result): ?>
<div class="result <?php echo (strpos($result,'Valide')!==false)?'valid':'invalid'; ?>">
<?php echo htmlspecialchars($result); ?>
</div>
<?php endif; ?>
</form>
</body>
</html>
