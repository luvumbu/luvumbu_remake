<div class="display_flex_2">



    <div>
        <a href="../index.php">
            <img width="30" height="30" src="https://img.icons8.com/ios/30/home--v1.png" alt="home--v1" />
        </a>
    </div>


    <div>
        <?php

        if ($id_sha1_parent_projet[0] != "") {
        ?>
            <a href="<?= $id_sha1_parent_projet[0] ?>">
                <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/return.png" alt="return" />
            </a>


        <?php
        }
        ?>
    </div>


</div>

 