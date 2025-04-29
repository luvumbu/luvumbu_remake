 
    <!-- Section avec un événement 'onclick' pour déclencher la fonction 'add_2' -->
    <div id="" onclick="add_2(this)" class="add_2__root__id_sha1_user__<?php echo $_SESSION["index"][2] ?>__id_parent_user__id_parent_user_info">
        ADD
    </div>
 

 

<script>
    // Fonction pour diviser une chaîne par "__" et retourner un tableau de valeurs
    function afficherValeursFormattees(chaine) {
        // Séparation de la chaîne par "__" en un tableau
        const valeurs = chaine.split("__");
        return valeurs; // Retourne le tableau des valeurs obtenues
    }

    // Fonction principale appelée au clic de l'élément HTML
    function add_2(_this) {
        // Exemple de la structure de l'élément sur lequel on a cliqué
        // <div id="" onclick="add_2(this)" class="add_2__root__id_sha1_user__id_parent_user__id_parent_user_info">
        //      ADD
        //  </div>

        // Récupération et formatage des valeurs de la classe de l'élément cliqué
        const texteFormatte = afficherValeursFormattees(_this.className);
        console.log(texteFormatte); // Affichage des valeurs formatées dans la console

        // Création d'une instance de la classe 'Information' pour envoyer les données
        var ok = new Information("function/general.php"); 

        // Ajout de la première information (option00 est vide ici)
        ok.add("option00", "");

        // Si la première valeur existe, on l'ajoute à l'instance 'ok'
        if (texteFormatte[0] != undefined) {
            ok.add("option0_1", texteFormatte[0]);
        }
        // Répétition du processus pour chaque valeur possible (jusqu'à 8 valeurs)
        if (texteFormatte[1] != undefined) {
            ok.add("option0_2", texteFormatte[1]);
        }
        if (texteFormatte[2] != undefined) {
            ok.add("option1_1", texteFormatte[2]);
        }
        if (texteFormatte[3] != undefined) {
            ok.add("option1_2", texteFormatte[3]);
        }
        if (texteFormatte[4] != undefined) {
            ok.add("option2_1", texteFormatte[4]);
        }
        if (texteFormatte[5] != undefined) {
            ok.add("option2_2", texteFormatte[5]);
        }
        if (texteFormatte[6] != undefined) {
            ok.add("option3_1", texteFormatte[6]);
        }
        if (texteFormatte[7] != undefined) {
            ok.add("option3_2", texteFormatte[7]);
        }

        console.log(ok.info()); // Affiche les informations collectées dans la console
        ok.push(); // Envoie les informations collectées vers le script PHP via la méthode 'push'
    }
</script>

 