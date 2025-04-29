<?php
session_start();
 
class DivGenerator
{
    public $name;
    public $function_name;
    public $className_array;
    public $className_array_total;
    public $function_split;
    public $dbname;
    public $text;
    public $onclick_text ="";

    public $type ="" ; 
    public $class_style ="";



    function __construct($dbname, $name, $function_name, $function_split, $text)
    {
        $this->dbname = $dbname;
        $this->name = $name;
        $this->function_name = $function_name;
        $this->function_split = $function_split;
        $this->text = $text;
    }

    function set_input($type)
    {
     
        $this->type = $type;

    }

    function set_onclick_text($onclick_text){
        $this->onclick_text = $onclick_text;
    }
    function get_onclick_text(){
        return $this->onclick_text ;
    }
    function get_input()
    {


    

echo '<style>
    #'.$this->name.'{
        display: none;
    }
</style>';

        if($this->type=="input"){
            $divHtml = '<input placeholder="'.$this->text.'" type ="text" id="' . $this->name .'_input" onkeyup="' . $this->function_name . '(this)" onclick="' . $this->function_name . '(this)" class="' . $this->className_array_total . '">';
        }
        else {
  
            $divHtml = '<textarea id="' . $this->name .'_input" onkeyup="' . $this->function_name . '(this)" onclick="' . $this->function_name . '(this)" class="' . $this->className_array_total . '">' . $this->text . '</textarea>';

        }


        return $divHtml; // Retourne le code HTML généré
      
    }


    function set_class_style($class_style){
            $this->class_style = $class_style ;
    }
    function get_text()
    {


    if($this->onclick_text==""){
        $divHtml = '<div id="' . $this->name .'_input" onkeyup="' . $this->function_name . '(this)">' . $this->text . '</div>';

    }
    else {
        $divHtml = '<div onclick="'.$this->onclick_text.'" id="' . $this->name .'_input" onkeyup="' . $this->function_name . '(this)">' . $this->text . '</div>';

    }

      
      
        return $divHtml; // Retourne le code HTML généré



  
      
    }

    function set_className($nom_class, $parametre)
    {


        $nom_class = htmlspecialchars($this->function_split . $nom_class . $this->function_split);
        $parametre = htmlspecialchars($parametre);


        
        $this->className_array[] = [$nom_class, $parametre]; // Ajoute une nouvelle ligne avec 2 éléments
    }

    function className_array()
    {

       $name = $this->function_name . $this->function_split . $this->dbname;
        $count = count($this->className_array);

        for ($a = 0; $a < $count; $a++) {
            for ($b = 0; $b < $count; $b++) {
                $name = $name . $this->className_array[$a][$b];
            }
        }
        $this->className_array_total = $name;
    }

    // Méthode pour générer le div
    public function generateDiv()
    {


            $this->className_array() ;
       
        $divHtml = '<div id="' . $this->name . '" onclick="' . $this->function_name . '(this)" class="' . $this->className_array_total . '">' . $this->text . '</div>';

        return $divHtml; // Retourne le code HTML généré
    }
}






 /*
 <?php
 


 
 


// Dernier exemple d'ajout d'éléments à un div
// Dans cet exemple, nous demandons des informations de la table "root".
// "div_generator" est l'identifiant que nous générons, "add_2" est un nom de type d'ajout,
// et "__" est un élément de séparation pour les classes ajoutées.

$divGenerator = new DivGenerator("root", "div_generator_idedlededededed", "update_1", "__", 'My source');
$divGenerator->set_className("id_user", "200"); // Modification de l'ID utilisateur
$divGenerator->set_className("id_parent_user", ""); // Suppression de l'ID du parent utilisateur

// Génération du div et affichage
echo $divGenerator->generateDiv(); // Cela va directement afficher le div généré

// Générer un champ de texte
echo $divGenerator->get_input("text"); // Crée le champ de texte (input)

 

*/

?>

<script>
    // Fonction pour diviser une chaîne de caractères par "__" et retourner un tableau de valeurs
    function afficherValeursFormattees(chaine) {
        // La méthode split() sépare la chaîne en un tableau de sous-chaînes, en utilisant "__" comme séparateur
        const valeurs = chaine.split("__");
        // Retourne le tableau des valeurs obtenues après séparation
        return valeurs;
    }

    // Fonction principale appelée lorsqu'un élément HTML est cliqué
    function remove_1(_this) {
        // Exemple de la structure de l'élément cliqué : <div id="" onclick="remove_1(this)" class="add_1__root__id_sha1_user__Valeur_a_ajouter__<?php echo $_SESSION["index"][2] ?>">
        // Cette fonction sera déclenchée lors du clic sur un div qui contient une classe avec des valeurs séparées par "__"

        // Récupère et formate les valeurs de la classe de l'élément cliqué en utilisant la fonction afficherValeursFormattees
        const texteFormatte = afficherValeursFormattees(_this.className);
        console.log(texteFormatte); // Affiche les valeurs formatées dans la console pour le débogage

        // Création d'une instance de la classe 'Information' pour envoyer des données au script PHP
        var ok = new Information("function/general.php");

        // Ajout d'une première information (option00 est vide ici)
        ok.add("option00", "");

        // Vérifie si chaque valeur extraite de la classe existe et l'ajoute à l'instance 'ok'
        // Chaque valeur est ajoutée avec un nom de paramètre unique (option0_1, option0_2, etc.)
        if (texteFormatte[0] != undefined) {
            ok.add("option0_1", texteFormatte[0]);
        }
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

        // Affiche les informations collectées dans la console pour vérification
        console.log(ok.info());

        // Envoie les informations collectées vers le script PHP via la méthode 'push'
        ok.push();
    }


 

    // Fonction similaire à 'remove_1', mais avec un nom différent pour des actions spécifiques
    function add_2(_this) {
        // Récupère et formate les valeurs de la classe de l'élément cliqué
        const texteFormatte = afficherValeursFormattees(_this.className);
        console.log(texteFormatte); // Affiche les valeurs formatées dans la console

        // Création d'une instance de la classe 'Information' pour envoyer des données
        var ok = new Information("function/general.php");

        // Ajout de la première information (option00 est vide ici)
        ok.add("option00", "");

        // Si une valeur existe, elle est ajoutée à l'instance 'ok'
        if (texteFormatte[0] != undefined) {
            ok.add("option0_1", texteFormatte[0]);
        }
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

        // Affiche les informations collectées dans la console pour vérification
        console.log(ok.info());

        // Envoie les informations collectées vers le script PHP via la méthode 'push'
        ok.push();
    }

    // Une autre fonction similaire à 'remove_1' et 'add_2', mais avec des actions légèrement différentes
    function add_1(_this) {

       
        // Récupère et formate les valeurs de la classe de l'élément cliqué
        const texteFormatte = afficherValeursFormattees(_this.className);
        console.log(texteFormatte); // Affiche les valeurs formatées dans la console

        // Création d'une instance de la classe 'Information' pour envoyer des données
        var ok = new Information("function/general.php");

        // Ajout de la première information (option00 est vide ici)
        ok.add("option00", "");

        // Ajout des valeurs de la classe à l'instance 'ok', si elles existent
        if (texteFormatte[0] != undefined) {
            ok.add("option0_1", texteFormatte[0]);
        }
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

        // Affiche les informations collectées dans la console pour vérification
        console.log(ok.info());

        // Envoie les informations collectées vers le script PHP via la méthode 'push'
        ok.push();
    }

    // Fonction pour gérer les mises à jour de l'élément HTML cliqué
    function update_1(_this) {
        // Exemple de la structure de l'élément sur lequel on a cliqué : <div id="" onclick="update_1(this)" class="add_1__root__id_sha1_user__Valeur_a_ajouter__43">
        // Cette fonction sera déclenchée lors du clic sur un div avec une structure similaire

        // Récupère et formate les valeurs de la classe et de l'ID de l'élément cliqué
        const texteFormatte = afficherValeursFormattees(_this.className);
        console.log(texteFormatte); // Affiche les valeurs formatées dans la console pour débogage

        const texteFormatte2 = afficherValeursFormattees(_this.id);
        console.log(texteFormatte2); // Affiche également les valeurs formatées de l'ID

        // Création d'une instance de la classe 'Information' pour envoyer des données
        var ok = new Information("function/general.php");

        // Ajout d'une première information (option00 est vide ici)
        ok.add("option00", "");

        // Ajout des valeurs au tableau d'informations, vérifie leur existence avant
        if (texteFormatte[1] != undefined) {
            ok.add("option0_1", texteFormatte[0]);
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
            ok.add("option2_2", _this.value); // Utilise la valeur spécifique de l'élément cliqué
        }

        // Affiche les informations collectées dans la console pour vérification
        console.log(ok.info());

        // Envoie les informations collectées vers le script PHP via la méthode 'push'
        ok.push();
    }
</script>


<?php
/*
// Testé et validé le 07/12/2024 - Test OK

// METHODE update_1 add 
// Création d'un nouvel objet DivGenerator
// Paramètre n°1 : Nom de la table à utiliser, ici "root".
// Paramètre n°2 : Identifiant unique du div généré, ici "div_generator".
// Paramètre n°3 : Méthode d'envoi des données, ici "add_1" (se référer à la documentation pour plus de détails sur les autres méthodes).
// Paramètre n°4 : Séparateur des noms de classe, ici "__".
// Paramètre n°5 : Texte à afficher, ici "mon_text".

// Création d'un nouvel objet DivGenerator avec les paramètres spécifiés
$divGenerator = new DivGenerator("root", "div_generator", "add_1", "__", "mon_text");

// Ajout d'une classe au div généré
$divGenerator->set_className("id_sha1_user", "123456"); // Ici, on associe la classe "id_sha1_user" avec la valeur "123456"

// Ligne n°1 : Spécifie l'endroit où l'information doit être ajoutée dans le div (ici le div identifié par "div_generator").
// Ligne n°2 : Détermine la source des informations, par exemple, en recherchant l'utilisateur ayant un ID égal à 168 dans la base de données.
// Le changement se fait directement sur le div identifié dans la ligne n°1 en utilisant l'ID de l'utilisateur spécifié.

// Génération du tableau des classes qui contiendra les informations mises à jour
$divGenerator->className_array();

// Appel direct de la méthode pour générer et afficher le div avec les classes définies
echo $divGenerator->generateDiv(); // Affiche le div généré avec les classes et valeurs associées

// Testé et validé le 07/12/2024 - Test OK
*/

?>



 
<?php

/*
// Testé et validé le 07/12/2024
// Paramètre n°1 : Nom de la table à utiliser, ici "root".
// Paramètre n°2 : Identifiant unique à attribuer au div généré, ici "div_generator".
// Paramètre n°3 : Méthode d'envoi des données (définie par défaut), ici "add_2" (se référer à la documentation pour d'autres méthodes d'envoi possibles).
// Paramètre n°4 : Séparateur pour les noms de classe, ici "__".
// Paramètre n°5 : Message à afficher, ici "MA OK" (peut être personnalisé).
// Ce code génère dynamiquement un div avec les classes spécifiées, selon les paramètres ci-dessus.

// METHODE update_1 add (Exemple avec plusieurs classes)
// Création d'un nouvel objet DivGenerator
$divGenerator = new DivGenerator("root", "div_generator", "add_2", "__", "MA OK");

// Définition de classes à associer au div généré
$divGenerator->set_className("id_sha1_user", "123456"); // Associe la classe "id_sha1_user" avec la valeur "123456"
$divGenerator->set_className("description_user", "description_user123456"); // Associe la classe "description_user" avec la valeur "description_user123456"

// Ligne n°1 : Détermine l'endroit où l'information sera ajoutée dans la structure HTML générée (ici dans un div avec l'ID "div_generator").
// Ligne n°2 : Recherche les informations dans la base de données ou dans un tableau d'entrée, ici on cherche l'utilisateur avec l'ID = 168, et on modifie les valeurs associées à certaines classes.

// Génération du tableau des classes qui contient les informations mises à jour
$divGenerator->className_array();

// Génération du div et affichage
echo $divGenerator->generateDiv(); // Affiche directement le div généré avec les classes et les valeurs associées

// Testé et validé le 07/12/2024
*/

?>
<?php 
/*
// METHODE remove_1 (Suppression d'éléments)
// Cette méthode permet de supprimer des informations ou des éléments d'une base de données ou d'un affichage.

// Création d'un nouvel objet DivGenerator avec les paramètres suivants :
// Paramètre n°1 : Nom de la table à utiliser, ici "root".
// Paramètre n°2 : Identifiant unique du div généré, ici "div_generator".
// Paramètre n°3 : Méthode d'envoi des données, ici "remove_1" (indique qu'il s'agit d'une opération de suppression).
// Paramètre n°4 : Séparateur des noms de classe, ici "__".
// Paramètre n°5 : Texte affiché, ici "REMOVE ALL" (indiquer l'action effectuée).

$divGenerator = new DivGenerator("root", "div_generator", "remove_1", "__", "REMOVE ALL");

// Ajout d'une classe au div généré pour spécifier l'élément à supprimer.
// Ligne n°1 : Spécifie la classe "id_user" et associe la valeur "9", ce qui correspond à la suppression de l'utilisateur avec l'ID 9.
// Ligne n°2 : L'association de la classe vide avec une valeur vide ("") permet de supprimer l'information liée à l'élément spécifié.
$divGenerator->set_className("id_user", "9");  // Suppression de l'utilisateur avec l'ID 9
$divGenerator->set_className("", ""); // Suppression de l'information associée

// Génération du tableau des classes qui va contenir les informations à afficher après la suppression.
$divGenerator->className_array();

// Appel direct de la méthode pour générer et afficher le div avec les classes et valeurs définies
echo $divGenerator->generateDiv(); // Affiche le div généré après l'opération de suppression.

// METHODE remove_1 terminée

*/
?>

 

<?php 
/*
// Dernier exemple d'ajout d'éléments à un div
// Ce script illustre comment modifier et ajouter des éléments à un div généré en utilisant la classe DivGenerator.

// Création d'un nouvel objet DivGenerator avec les paramètres suivants :
// Paramètre n°1 : Nom de la table à utiliser, ici "root".
// Paramètre n°2 : Identifiant unique du div généré, ici "div_generator_idedlededededed".
// Paramètre n°3 : Méthode d'envoi des données, ici "update_1" (indique qu'il s'agit d'une opération de mise à jour).
// Paramètre n°4 : Séparateur des noms de classe, ici "__".
// Paramètre n°5 : Texte affiché dans le div généré, ici 'My source' (indique la source ou une note d'information).

$divGenerator = new DivGenerator("root", "div_generator_idedlededededed", "update_1", "__", 'My source');

// Ajout ou modification de classes au div généré
// Ligne n°1 : Spécifie la classe "id_user" et associe la valeur "200", ce qui permet de modifier l'ID de l'utilisateur.
// Ligne n°2 : Spécifie la classe "id_parent_user" et la vide, ce qui correspond à la suppression de l'ID du parent utilisateur.
$divGenerator->set_className("id_user", "200"); // Modification de l'ID utilisateur
$divGenerator->set_className("id_parent_user", ""); // Suppression de l'ID du parent utilisateur

// Génération du div avec les classes et les valeurs définies ci-dessus
echo $divGenerator->generateDiv(); // Affiche le div généré après modification.

// Générer un champ de texte (input)
// Appel de la méthode "get_input" pour créer un champ de texte (input) de type "input".
echo $divGenerator->get_input("input"); // Crée un champ de texte (input)
*/
?>
