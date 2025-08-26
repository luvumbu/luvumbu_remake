

<nav  class="navbar">
    <div id="<?= $id_sha1_projet_x[0] ?>" class="logo"><?= replace_element_2($title_projet_x[0]) ?></div>
    <!-- Bouton burger pour mobile -->
    <div class="burger" onclick="toggleMenu()">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
<?php 
 
?>
    <div class="menu" id="nav_div">
        <?php
    
        for ($i = 0; $i < count($id_sha1_projet_y); $i++) {
            $id_sha1_projet_ = '#' . $id_sha1_projet_y[$i];
 

         

 if($visibility_1_projet_y[$i] == "1" ) {
?>
                <a href="<?= $id_sha1_projet_ ?>"><?=   $title_projet_y[$i] ?></a>

<?php
 }
            
        ?>


            <?php
       
            ?>
        <?php } ?>
    </div>
</nav>

<script>
    function toggleMenu() {
        document.getElementById("nav_div").classList.toggle("active");
    }
</script>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 50px;
        border-bottom: 1px solid #ccc;
        position: relative;
        z-index: 1000;
     
    }

    .navbar .logo {
        letter-spacing: 3px;
    }

    /* Menu desktop */
    .navbar .menu {
        display: flex;
        gap: 30px;
        letter-spacing: 2px;
    }

    .navbar a {
        text-decoration: none;
        color: black;
        font-size: 14px;
    }

    /* Burger menu */
    .burger {
        display: none;
        flex-direction: column;
        gap: 5px;
        cursor: pointer;
        z-index: 1100;
        /* reste au-dessus */
    }

    .burger .line {
        width: 25px;
        height: 3px;
        background-color: black;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .burger {
            display: flex;
        }

        .navbar .menu {
            position: absolute;
            top: 65px;
            right: 0;
            background-color: #fff;
            flex-direction: column;
            width: 200px;
            padding: 10px;
            border: 1px solid #ccc;
            display: none;
            /* caché par défaut */
        }

        /* Quand on clique sur burger */
        .navbar .menu.active {
            display: flex;
        }

        .navbar .menu a {
            margin: 10px 0;
        }
    }
</style>




