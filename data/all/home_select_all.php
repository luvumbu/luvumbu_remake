<style>
    /*  
  STYLE DE TOUS LES PROJET EN INDEX.PHP ET EN  CONNEXION STYLE COMMUN
 */
    .spetit {
        font-size: 0.7em;
        float: left;
    }

    .card_all_element {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        margin-top: 40px;
        gap: 20px;
    }

    .parent_off {
        background-color: black;
        color: white;
    }

    .parent_off div {
        background-color: white;
    }

    .card_all {
        width: 350px;
        margin-bottom: 45px;
        display: flex;
        flex-direction: column;
        align-items: center;
        overflow: hidden;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;

    }

    .img_card {
        width: 100%;
        height: 100px;
        object-fit: cover;

        display: block;
    }

    .card_all p {
        text-align: center;
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        height: 50px;
        padding: 10px 10px 0 10px;
        box-sizing: border-box;
        font-size: 16px;
    }

    .flex_card_all {
        display: flex;
        justify-content: space-around;
        width: 100%;
        padding: 10px 0;
        box-sizing: border-box;
    }

    .cursor_pointer:hover {
        cursor: pointer;
    }

    .padding_10 {
        padding: 10px;
        margin-bottom: 10px;
    }
</style>

<?php
$val_knock = "";
$nom_table = "projet";
$req_sql = "SELECT * FROM `$nom_table` WHERE 1";


$img_projet_src1_01  = "https://i.pinimg.com/736x/b6/b9/cc/b6b9cc428522e74a9d51351945eebac7.jpg";

require "data/all/databaseHandler_general_0.php";
require "data/all/databaseHandler_general_1.php";
require "data/all/databaseHandler_general_2.php";

echo '<div class="card_all_element">';
for ($i_a = 0; $i_a < count($id_sha1_projet); $i_a++) {





    $id_sha1_projet_i_a =  $id_sha1_projet[$i_a];

    if (!empty($img_projet_src1[$i_a])) {
        $img_projet_src1_i_a = 'img_dw/' . $img_projet_src1[$i_a];
    } else {
        $img_projet_src1_i_a = $img_projet_src1_01;
    }






    if ($id_sha1_parent_projet[$i_a] != "") {


        if (isset($_SESSION["index"])) {
            $id_sha1_parent_projet = "flex_card_all parent_off";
            $id_sha1_parent_projet_general = "";
        } else {
            $id_sha1_parent_projet = "flex_card_all parent_off display_none";
            $id_sha1_parent_projet_general = "petit";
        }
    } else {
        $id_sha1_parent_projet = "flex_card_all";
    }


?>
    <div class="card_all <?=  $id_sha1_parent_projet_general ?>">

        <img class="img_card" src="<?= $img_projet_src1_i_a ?>" alt="Image projet">

        <div>
            <p><?= $title_projet_1[$i_a] ?><br><b class="spetit"><?= $id_sha1_projet[$i_a] ?></b></p>
        </div>





        <div class="<?= $id_sha1_parent_projet ?>">
            <?php
            if (isset($_SESSION["index"])) {



                if ($_SESSION["index"][3] == $id_sha1_user_projet[$i_a]) {




            ?>


                    <div title="<?= $id_sha1_projet_i_a ?>" class="cursor_pointer padding_10" onclick="home_all_element_projet(this)">
                        <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/40/settings--v1.png" alt="settings" />
                    </div>
            <?php
                }
            }
            ?>
            <div class="cursor_pointer padding_10">

                <a href="<?= 'blog.php/' . $id_sha1_projet_i_a ?>">
                    <img width="30" height="30" src="https://img.icons8.com/ios/30/link--v1.png" alt="link" />
                </a>
            </div>
        </div>
    </div>
<?php
}
echo '</div>';






?>


<script>
    function home_all_element_projet(_this) {



        var ok = new Information("data/all/req_sql/home_all_element_projet.php"); // création de la classe 
        ok.add("index_4", _this.title); // ajout de l'information pour lenvoi 

        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 




        const myTimeout = setTimeout(h, 200);

        function h() {
            location.reload();
        }



    }
</script>



<style>
    .display_none {
        display: none;
    }
    .petit{
        width: 100px;
        height: 100px;
    }
</style>