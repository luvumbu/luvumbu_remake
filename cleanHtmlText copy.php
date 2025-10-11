<?php
// La fonction qu'on a définie
function cleanHtmlText(string $raw): string {
    // Normaliser toutes les balises <br> en une seule forme
    $tmp = preg_replace('/<br\s*\/?>/i', "\n", $raw);

    // Supprimer les espaces ou <br> multiples transformés en lignes vides
    $tmp = preg_replace("/\r\n|\r/", "\n", $tmp);
    $tmp = preg_replace("/\n{2,}/", "\n\n", $tmp); // au max 2 sauts

    // Découper en paragraphes sur les doubles sauts
    $parts = preg_split("/\n\s*\n/", trim($tmp));

    // Convertir les URLs en liens cliquables
    $linkified = function($s) {
        return preg_replace(
            '#(https?://[^\s<]+)#i',
            '<a href="$1" target="_blank" rel="noopener noreferrer">$1</a>',
            $s
        );
    };

    // Construire proprement
    $htmlParts = array_map(function($p) use ($linkified) {
        $p = trim($p);
        // Échapper pour sécurité
        $p = htmlspecialchars($p, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        // Reconvertir les sauts simples restants en <br>
        $p = nl2br($p, false);
        // Rendre les liens cliquables
        $p = $linkified($p);
        return "<p>$p</p>";
    }, $parts);

    return implode("\n", $htmlParts);
}


/*
// ------------------------------------
// Exemple d'utilisation avec ton texte
// ------------------------------------
$rawText = "
<br />
 <br />
<br />
Toute l’équipe vous souhaite une belle rentrée.<br />
<br />
Merci de noter quelques dates.<br />
<br />
 <br />
<br />
 <br />
<br />
 <br />
<br />
 <br />
<br />
 <br />
<br />
A vos agendas !<br />
<br />
";

// On transforme en HTML propre
$html = cleanHtmlText($rawText);

// Affichage direct (par exemple dans un mail ou une page web)
echo $html;


*/