<?php
$id_sha1_user_ = $id_sha1_user_projet_x[0];

$id_sha1_projet = $url_;
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `$dbname` WHERE `id_sha1_user` ='$id_sha1_user_'";
// Instanciation de la classe
$db = new DatabaseHandler($dbname, $username);
// Appel de la fonction
$result = $db->know_variables_name($dbname, "_zz", $req_sql);







?>

<div class="profil_style">
    <div>
        <?= 'Crée par : ' . strtoupper(AsciiConverter::asciiToString($title_user_zz[0]) . '   '); ?>

        <?= AsciiConverter::asciiToString($description_user_zz[0]); ?>
    </div>
</div>


<?php
 


if ($img_user_zz[0] != "") {
?>
    <div class="image_profil"> 
          <img src="<?= '../img_dw/' . $img_user_zz[0] ?>" alt="" srcset="">
    </div>

<?php
}

?>






<style>
 .image_profil {
  width: 300px;      /* largeur du cadre */
  height: 300px;     /* hauteur du cadre */
  overflow: hidden;  /* cache ce qui dépasse */
}

.image_profil img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* évite les déformations et garde le bon ratio */
  border-radius: 10px; /* optionnel : coins arrondis */
}

    .image_profil{
        width: 200px;
        margin: auto;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius:7px ;
    }
    .profil_style {
        display: flex;
        justify-content: space-around;
    }

    .profil_style div {

        text-align: justify;

        color: grey;
        text-align: center;
        padding: 15px;


    }
</style>