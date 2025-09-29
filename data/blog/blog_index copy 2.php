<!DOCTYPE html>
<html lang="fr">

<head>
    <?php

require_once "data/blog/blog_index_head_1.php";
?>
</head>

<body>




    <?php



    ?>
    <nav id="navbar">


        <?php
require_once "data/blog/blog_index_head_2.php";



?>
    </nav>
    <!-- Hero Section -->
    <section class="hero" id="home">


    <?php
require_once "data/blog/blog_index_section_1.php";

    ?>

    </section>
    <?php



    if (count($id_projet_img) != 0) {
        require_once "data/blog/carouselles/carouselle_2.php";
    }


    ?>











    <?php
    echo "<div class='index_0'>";
    require_once "data/blog/blog_index_0.php";
    echo "</div>";

    echo "<div class='index_1'>";
    require_once "data/blog/blog_index_1.php";
    echo "</div>";


    echo "<div class='index_2'>";
    require_once "data/blog/blog_index_2.php";
    echo "</div>";

    echo "<div class='index_3'>";
    require_once "data/blog/blog_index_3.php";
    echo "</div>";

    ?>
    <script src="../x.js"></script>


</body>



</html>