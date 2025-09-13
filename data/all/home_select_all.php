<style>
    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        background: #f4f6f9;
        margin: 0;
        padding: 0;
    }

    .card_all_element {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        padding: 20px;
        max-width: 1400px;
        margin: auto;
    }

    .card_all {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card_all:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.15);
    }

    .img_card {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }

    .card_content {
        padding: 15px;
        text-align: center;
    }

    .card_content p {
        font-size: 1rem;
        font-weight: bold;
        margin: 0 0 5px;
        color: #333;
        word-break: break-word;
    }

    .spetit {
        font-size: 0.8em;
        color: #888;
    }

    .flex_card_all {
        display: flex;
        justify-content: center;
        gap: 15px;
        padding: 12px;
        background: #fafafa;
        border-top: 1px solid #eee;
    }

    .action_btn {
        background: none;
        border: none;
        cursor: pointer;
        padding: 8px;
        border-radius: 50%;
        transition: background 0.2s ease;
    }

    .action_btn:hover {
        background: rgba(0, 0, 0, 0.05);
    }

    .action_btn img {
        width: 28px;
        height: 28px;
    }

    .petitos {
        width: 50%;
        background-color: rgba(0, 0, 0, 0.15);
    }
    .petitas{
   display: none;
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

    $filename =  $img_projet_src1_i_a;

    if (!file_exists($filename)) {
        $databaseHandler_up_img = new DatabaseHandler($dbname, $username);
        $databaseHandler_up_img->action_sql('UPDATE  `projet` SET `img_projet_src1` = "" WHERE  `id_sha1_projet` ="' . $id_sha1_projet[$i_a] . '" ');
        $img_projet_src1_i_a  = "src/img/lumumba.jpg";
    }




    if ($id_sha1_parent_projet[$i_a] == "") {
        $styles_element = "";
    } else {
      
        if (isset($_SESSION["index"])) {
            $styles_element = "petitos";
        } else {
            $styles_element = "petitas";
        }
    }






 

if(isset($_SESSION["index"])){
?>



    <div class="card_all <?= $styles_element ?>">
        <img class="img_card" src="<?= $img_projet_src1_i_a ?>" alt="Image projet">
        <div class="card_content">
            <p><?= replace_element_2($title_projet_1[$i_a]) ?></p>
            <span class="spetit"><?= $id_sha1_projet[$i_a] ?></span>
        </div>
        <div class="flex_card_all">
            <?php if (isset($_SESSION["index"]) && $_SESSION["index"][3] == $id_sha1_user_projet[$i_a]) { ?>
                <button class="action_btn" title="<?= $id_sha1_projet_i_a ?>" onclick="home_all_element_projet(this)">
                    <img src="https://img.icons8.com/ios-glyphs/40/settings--v1.png" alt="settings" />
                </button>
            <?php } ?>
            <a href="<?= 'blog.php/' . $id_sha1_projet_i_a ?>" class="action_btn">
                <img src="https://img.icons8.com/ios/30/link--v1.png" alt="link" />
            </a>
        </div>
    </div>
<?php

}
else{
 
if($visibility_1_projet[$i_a]!=""){
?>



    <div class="card_all <?= $styles_element ?>">
        <img class="img_card" src="<?= $img_projet_src1_i_a ?>" alt="Image projet">
        <div class="card_content">
            <p><?= replace_element_2($title_projet_1[$i_a]) ?></p>
            <span class="spetit"><?= $id_sha1_projet[$i_a] ?></span>
        </div>
        <div class="flex_card_all">
            <?php if (isset($_SESSION["index"]) && $_SESSION["index"][3] == $id_sha1_user_projet[$i_a]) { ?>
                <button class="action_btn" title="<?= $id_sha1_projet_i_a ?>" onclick="home_all_element_projet(this)">
                    <img src="https://img.icons8.com/ios-glyphs/40/settings--v1.png" alt="settings" />
                </button>
            <?php } ?>
            <a href="<?= 'blog.php/' . $id_sha1_projet_i_a ?>" class="action_btn">
                <img src="https://img.icons8.com/ios/30/link--v1.png" alt="link" />
            </a>
        </div>
    </div>
<?php

}
    
}




    //$id_sha1_parent_projet[$i_a]

}
echo '</div>';
?>

<script>
    function home_all_element_projet(_this) {
        var ok = new Information("data/all/req_sql/home_all_element_projet.php");
        ok.add("index_4", _this.title);
        ok.push();
        setTimeout(() => location.reload(), 200);
    }
</script>