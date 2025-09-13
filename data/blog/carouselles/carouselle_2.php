    <link href="../templatemo-3d-coverflow.css" rel="stylesheet">
    <!-- Header -->
    <header class="header" id="header">
        <a href="#home" class="logo-container">
            <div class="logo">

            </div>

        </a>



        <div class="menu-toggle" id="menuToggle"> </div>
    </header>

    <!-- Home Section -->
    <section id="home" class="section">
        <div class="coverflow-wrapper">
            <div class="coverflow-container" tabindex="0">
                <div class="coverflow" id="coverflow">







                    <?php



                    for ($i = 0; $i < count($id_projet_img); $i++) {





                        $img_user_b_  =  $id_projet_img[$i];



                        if ($img_user_b_ != "") {
                            if (file_exists('img_dw/' . $img_user_b_)) {
                                $img_user_b_ = '../img_dw/' . $img_user_b_;
                    ?>

 










                                <div class="coverflow-item" data-index="2">
                                    <div class="cover image-loading">
                                        <img src="<?= $img_user_b_ ?>" alt="Lake Reflection" loading="lazy">
                                    </div>
                                    <div class="reflection"></div>
                                </div>



                    <?php
                            }
                        }
                    }


                    ?>



                    <?php


                    ?>

                </div>

                <button class="nav-button prev" onclick="navigate(-1)">⟵</button>
                <button class="nav-button next" onclick="navigate(1)">⟶</button>

                <div class="dots-container" id="dots"></div>

                <!-- Play/Pause Button -->
                <button class="play-pause-button" id="playPauseBtn" onclick="toggleAutoplay()">
                    <span class="play-icon">▶</span>
                    <span class="pause-icon" style="display: none;">❚❚</span>
                </button>
            </div>
        </div>
    </section>

    <!-- About Section -->


    <!-- Scroll to top button -->
 




    <link rel="stylesheet" href="../data/blog/css/blog_template_img_css.css">

    <script src="../data/blog/js/blog_template_img_js.js"></script>