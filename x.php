<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= replace_element_2(AsciiConverter::asciiToString($google_title_projet[0])) ?></title>
    <link
        href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <link href="../test_index.css" rel="stylesheet">
    <!--

TemplateMo 596 <?= replace_element_2(AsciiConverter::asciiToString($title_projet[0])) ?>

https://templatemo.com/tm-596-electric-xtra

-->
</head>

<body>
    <!-- Animated Grid Background -->
    <div class="grid-bg"></div>
    <div class="gradient-overlay"></div>
    <div class="scanlines"></div>

    <!-- Animated Shapes -->
    <div class="shapes-container">
        <div class="shape shape-circle"></div>
        <div class="shape shape-triangle"></div>
        <div class="shape shape-square"></div>
    </div>

    <!-- Floating Particles -->
    <div id="particles"></div>

    <!-- Navigation -->
    <nav id="navbar">
        <div class="nav-container">
            <a href="#home" class="logo-link">
                <svg class="logo-svg" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#FF5E00;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#00B2FF;stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <polygon points="20,2 38,14 38,26 20,38 2,26 2,14" fill="none" stroke="url(#logoGradient)"
                        stroke-width="2" />
                    <polygon points="20,8 32,16 32,24 20,32 8,24 8,16" fill="url(#logoGradient)" opacity="0.3" />
                    <circle cx="20" cy="20" r="3" fill="url(#logoGradient)" />
                </svg>
                <span class="logo-text"><?= replace_element_2(AsciiConverter::asciiToString($title_projet[0])) ?></span>
            </a>


            <ul class="nav-links" id="navLinks">


                <?php
                for ($i = 0; $i < count($title_projet_a); $i++) {
                ?>

                    <li><a href="#<?= $id_sha1_projet_a[$i] ?>"
                            class="nav-link"><?= replace_element_2(AsciiConverter::asciiToString($title_projet_a[$i])) ?></a>
                    </li>
                <?php
                }

                ?>
                <li><a href="#Apropos" class="nav-link">À propos</a></li>

            </ul>
            <div class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>




    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <div class="text-rotator">
                <div class="text-set active">
                    <h1 class="glitch-text"
                        data-text="<?= replace_element_2(AsciiConverter::asciiToString($title_projet[0])) ?>">
                        <?= replace_element_2(AsciiConverter::asciiToString($title_projet[0])) ?></h1>
                    <p class="subtitle">
                        <?php
                        $text = replace_element_2(AsciiConverter::asciiToString($description_projet[0]));
                        echo mb_strlen($text, 'UTF-8') > 230
                            ? mb_substr($text, 0, 230, 'UTF-8') . '...'
                            : $text;
                        ?>
                    </p>

                </div>
            </div>
        </div>

    </section>


    <?php

    require_once "data/blog/carouselles/carouselle_2.php";


    ?>










    <section class="about" id="about">
        <h2 class="section-title"><?= replace_element_2(AsciiConverter::asciiToString($title_projet[0])) ?></h2>
        <div class="about-content">
            <div class="about-text">

                <p><?= replace_element_2(AsciiConverter::asciiToString($description_projet[0])) ?></p>
            </div>
            <div class="about-visual">
                <div class="about-graphic"></div>
            </div>
        </div>

        <!-- Second row with reversed layout -->

        <?php
        for ($i = 0; $i < count($title_projet_a); $i++) {


            $b = 2;
            $reste = $i % $b; // 10 modulo 3 => 1




            if ($reste == 0) {
        ?>
                <div id="<?= $id_sha1_projet_a[$i] ?>" class="about-content">
                    <div class="about-visual">
                        <div class="about-graphic-alt">
                            <div class="hexagon"></div>
                            <div class="hexagon"></div>
                            <div class="hexagon"></div>
                        </div>
                    </div>
                    <div class="about-text">
                        <h2><?= replace_element_2(AsciiConverter::asciiToString($title_projet_a[$i])) ?> </h2>
                        <p><?= replace_element_2(AsciiConverter::asciiToString($description_projet_a[$i])) ?></p>
                    </div>


                </div>
            <?php
            } else {
            ?>

                <div id="<?= $id_sha1_projet_a[$i] ?>" class="about-content">

                    <div class="about-text">
                        <h2><?= replace_element_2(AsciiConverter::asciiToString($title_projet_a[$i])) ?> </h2>
                        <p><?= replace_element_2(AsciiConverter::asciiToString($description_projet_a[$i])) ?></p>
                    </div>
                    <div class="about-visual">
                        <div class="about-graphic"></div>
                    </div>

                </div>
                <?php
            }










            $img_user_b_ = $img_projet_src1_a[$i];



            if ($img_user_b_ != "") {
                if (file_exists('img_dw/' . $img_user_b_)) {
                    $img_user_b_ = '../img_dw/' . $img_user_b_;
                ?>

                    <div class="original">
                        <img src="<?= $img_user_b_ ?>" alt="" srcset="">

                    </div>

            <?php
                }
            }









            ?>



            <a href="<?= $id_sha1_projet_a[$i] ?>" class="cta-button cta-primary">Voir page compléte</a>

        <?php



        }

        ?>
    </section>

    <section class="about" id="Apropos">
        <h2 class="section-title">À propos</h2>
        <div class="about-content">




            <div class="about-text">
                <?php



                $img_user_b_ = 'img_dw/' . $img_user_c[0];
                if ($img_user_b_ != "") {
                    if (file_exists($img_user_b_)) {
                        $img_user_b_ = '../' . $img_user_b_;
                ?>

                        <div class="original">
                            <img src="<?= $img_user_b_ ?>" alt="" srcset="">

                        </div>

                <?php
                    }
                }
                ?>
            </div>

            <div class="about-text">
                <p><?= $info_user_1_b_ ?></p>

                <p><?= $info_user_2_b_ ?></p>

                <div class="about-text">
                    <p><?= $info_user_3_b_ ?></p>
                </div>

            </div>


        </div>


    </section>

    <!-- Footer -->















    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <?php
                if ($id_sha1_parent_projet[0] != "") {
                ?>
                    <a href="<?= $id_sha1_parent_projet[0] ?>" class=""> ↰ Page parent</a>


                <?php
                }

                ?>

                <a href="../index.php">Home</a>
                <a href="#privacy">Privacy Policy</a>
                <a href="#terms">Terms of Service</a>
                <a href="#careers">Careers</a>
                <?php

                if (isset($_SESSION["password_projet"])) {

                ?>
                    <a href="../Class/session_destroy.php">off</a>
                <?php
                }
                ?>

            </div>
            <p class="copyright">© 2025 <?php
                                        $text = replace_element_2(AsciiConverter::asciiToString($title_projet[0]));
                                        echo (mb_strlen($text, 'UTF-8') > 100) ? mb_substr($text, 0, 100, 'UTF-8') . '...' : $text;
                                        ?>
                . All rights reserved. Building tomorrow, today. | Design: <a href="https://templatemo.com"
                    target="_blank" rel="nofollow noopener">TemplateMo</a></p>
        </div>
    </footer>
    <script src="../x.js"></script>

    <style>
        .profil_user_image {

            width: 350px;
            margin: auto;

        }

        .profil_user_image img {
            width: 100%;


        }

        .original {
            width: 40%;
            /* largeur du conteneur */
            height: auto;
            /* hauteur du conteneur s’adapte à l’image */
            margin: auto;
            display: flex;
            justify-content: center;
            /* centre horizontalement */
            align-items: center;
            /* centre verticalement si hauteur plus grande */
            overflow: hidden;
            /* cache le débordement si nécessaire */

            margin-top: 45px;
            margin-bottom: 45px;

        }

        .original img {
            width: 100%;
            /* prend toute la largeur du conteneur */
            height: auto;
            /* garde le ratio original */
            display: block;
            filter: brightness(0.6);
            /* filtre sombre */
        }
    </style>
</body>

</html>