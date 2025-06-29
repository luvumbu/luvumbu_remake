 
 </head>
 <?php
    $id_sha1_projet_info  = $id_sha1_projet[0];
    $filename__ = 'all_comment/' . $id_sha1_projet_info . '.php';
    $verif_file = true;
    if (!file_exists($filename__)) {
        $verif_file  = false;
    } else {
        require_once $filename__;
    }

    ?>
<?php

if (isset($_SESSION["index"])) {

?>
<div class="all_comment">
<?php 

$id_sha1_projet_comment = $row_projet[0]["id_sha1_projet"] ; 



if($verif_file){
    for ($i = 0; $i < count($row_projet_comment); $i++) {

                



      
        
        
        
        
                        if($verif_file ){
                            
                        }
                        if($verif_file ){
                    ?>
                     <div class="comment">
                         <?php
                            if ($row_projet_comment[$i]["id_ip_5"] == $dbname) {
                                echo '<div class="name">ADMIN</div>';
                            } else {
                            ?>
                             <div class="name"><?=$row_projet_comment[$i]["id_ip_5"]  ?></div>
                         <?php
                            }
                            ?>
                         <div class="date"><?= formaterDateFr($row_projet_comment[$i]["date_inscription_comment"]) ?></div>
                         <p><?= AsciiConverter::asciiToString($row_projet_comment[$i]["id_comment_text"]) ?></p>
                         <?php
        
        
         
         
                            ?>
        
        
                     </div>
                 <?php
                        }
                
                    }
}







?>
 <h2>Laissez un commentaire</h2>
 <textarea id="message" placeholder="Votre commentaire" rows="4" required></textarea>
 <button type="submit" title="<?= $id_sha1_projet_comment ?>" onclick="envoyer_comment(this)">Envoyer</button>

</div>
</div>
<?php 

}
?>
 <script>
     function envoyer_comment(_this) {

  
        
         const id_comment_text_ = document.getElementById("message").value;
         var ok = new Information("../req_sql/envoyer_comment.php"); // création de la classe 
         ok.add("id_comment_text", id_comment_text_); // ajout de l'information pour lenvoi 
         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // envoie l'information au code pkp 
         const myTimeout = setTimeout(x, 1000);

         function x() {
           location.reload();
         }
     }
 </script>