<?php

$db = new DatabaseHandler($dbname, $username);
$id_user_mail_user =  $_SESSION["index"][3];
$req_sql = "SELECT * FROM `mail_user` WHERE `id_user_mail_user`='$id_user_mail_user'";
// Appel de la fonction
$result = $db->know_variables_name("mail_user", "_x", $req_sql);



?>

<style>
.body {
    width: 80%;
    margin: auto;
    font-size: 2em;
    font-family: Arial, sans-serif;
    color: #333;
}

td, tr {
    width: 100%;
    text-align: center;
}

td {
    padding: 15px;
    background-color: #f0f0f0; /* gris très clair */
    color: #333; /* texte sombre */
    border-radius: 4px;
    transition: background-color 0.2s ease;
}

td:hover {
    background-color: #e0e0e0; /* gris légèrement plus foncé au survol */
    cursor: pointer;
}
</style>




 


<table>



    <?php

    if (isset($_SESSION["info_mail"])) {


    ?>

        <div id="info_mail">
            <?= $_SESSION["info_mail"] ?>
        </div>

        <script>
            const myTimeout = setTimeout(myGreeting, 3000);

            function myGreeting() {
                document.getElementById("info_mail").style.display = "none";
            }
        </script>
    <?php


        unset($_SESSION["info_mail"]);
    }


    ?>
    <tr>
        <th>Nom</th>
        <th>Email</th>
    </tr>
    <?php for ($i = 0; $i < count($info_mail_user_x); $i++): ?>
        <tr>
            <td><?= htmlspecialchars($name_mail_user_x[$i]) ?></td>
            <td><?= htmlspecialchars($info_mail_user_x[$i]) ?></td>
            <td><input onchange="function_checked(this)" title="<?= $id_mail_user_x[$i]?>" 
            type="checkbox"
            <?php  if($activation_mail_user_x[$i]!=""){
                echo "checked" ;
            }         
                ?>
            ></td>

        </tr>
    <?php endfor; ?>
</table>
 </div>

 

<script>
function function_checked(_this){
    console.log("Checked :", _this.checked); // true = coché, false = décoché
    console.log("ID du mail :", _this.title); // ton id stocké dans title




if(_this.checked==false){
var activation_mail_user = "";
}
else{
var activation_mail_user = "1";
}
 




            var ok = new Information("req_sql/update_1_mail_submit.php"); // création de la classe 
            ok.add("activation_mail_user", activation_mail_user); // ajout de l'information pour lenvoi 
            ok.add("id_mail_user",  _this.title); // ajout de l'information pour lenvoi 
           
           
            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp 


console.log("ok") ; 



}

</script>