<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte Google Maps</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            text-align: center;
            padding: 20px;
        }
        input {
            width: 300px;
            padding: 10px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 8px;
            border: none;
            background: #0078ff;
            color: white;
            cursor: pointer;
            margin-left: 5px;
        }
        iframe {
            width: 90%;
            height: 500px;
            border: none;
            margin-top: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>
    <h1>Afficher une adresse sur Google Maps</h1>

    <input type="text" id="adresse" placeholder="Entrez une adresse...">
    <button onclick="afficherCarte()">Afficher</button>

    <div id="mapContainer">
        <iframe id="carte" 
                src="https://www.google.com/maps?q=Paris&output=embed"
                allowfullscreen>
        </iframe>
    </div>

    <script>
        function afficherCarte() {
            const adresse = document.getElementById("adresse").value.trim();
            const iframe = document.getElementById("carte");

            if (adresse) {
                const url = "https://www.google.com/maps?q=" + encodeURIComponent(adresse) + "&output=embed";
                iframe.src = url;
            } else {
                alert("Veuillez entrer une adresse !");
            }
        }
    </script>
</body>
</html>
