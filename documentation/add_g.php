<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple Add_2</title>
    <style>
        /* Style de la page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
            margin: 0;
            padding: 20px;
        }

        /* Style du div cliquable */
        .add_2__root__id_sha1_user__12345__id_parent_user__67890 {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 15px 30px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Effet au survol */
        .add_2__root__id_sha1_user__12345__id_parent_user__67890:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <!-- Section avec un événement 'onclick' pour déclencher la fonction 'add_2' -->
    <div onclick="add_2(this)" class="add_2__root__id_sha1_user__12345__id_parent_user__67890">
        ADD
    </div>

    <script>
        // Fonction pour diviser une chaîne par "__" et retourner un tableau de valeurs
        function afficherValeursFormattees(chaine) {
            return chaine.split("__"); // Retourne directement le tableau
        }

        // Fonction principale appelée au clic de l'élément HTML
        function add_2(_this) {
            const texteFormatte = afficherValeursFormattees(_this.className);
            console.log(texteFormatte); // Affichage des valeurs formatées dans la console

            var ok = new Information("function/general.php"); // Instance de la classe Information

            // Ajout de la première information (option00 est vide ici)
            ok.add("option00", "");

            // On parcourt chaque élément du tableau 'texteFormatte' et on l'ajoute à 'ok'
            for (let i = 0; i < texteFormatte.length; i++) {
                if (texteFormatte[i] !== undefined) {
                    let optionKey = `option${Math.floor(i / 2)}_${(i % 2) + 1}`;
                    ok.add(optionKey, texteFormatte[i]);
                }
            }

            console.log(ok.info()); // Affiche les informations collectées dans la console
            ok.push(); // Envoie les informations collectées vers le script PHP via la méthode 'push'
        }

 
    </script>
</body>
</html>
