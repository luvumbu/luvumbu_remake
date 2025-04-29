<?php
require_once $home_select_all_sql_1;
require_once $home_select_all_css;
require_once $home_select_all_js;
?>
<div class="div_elements" style="margin-top:150px">
  <?php
  for ($i = 0; $i < count($title_projet); $i++) {
    $title_projet__ =   AsciiConverter::asciiToString($dynamicVariables['title_projet'][$i]);

    $img_projet_src1_ = $dynamicVariables['img_projet_src1'][$i];
  ?>
    <div class="card_element">
      <div class="card_element_img">

        <?php
        if ($img_projet_src1_ == "") {
          echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwfimb60bedU2xAWQhwyEC40kxb8z3efu7CtFK0XzOEE9iVfcBpEvM96wwTUKZ-hqKtMy3UN5KPuWUI1flHUY4nRY2sq-hKIEqvW3rox4" alt="">';
        } else {

        ?>
          <img src="<?= 'img_dw/' . $img_projet_src1_ ?>" alt="" srcset="">
        <?php
        }

        ?>
      </div>
      <div class="card_element_title">
        <?= $title_projet__ ?>
      </div>

      <div class="sittings_">

        <div onclick="child_element(this)" title="<?= $id_sha1_projet[$i] ?>">
          <img class="cursor_pointer" width="50" height="50" src="https://img.icons8.com/ios/50/settings--v1.png" alt="settings--v1" />

        </div>
        <div class="img_height">
          <a href="blog.php/<?= $id_sha1_projet[$i] ?>">
            <img class="cursor_pointer" width="50" height="50" src="https://img.icons8.com/material-outlined/50/link--v1.png" alt="link--v1" />

          </a>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
  <style>
    .img_height{
      height: 100px;
    }
    .sittings_ {
      margin: 25px;
      display: flex;
      justify-content: space-around;
    
    }
    .card_element_title{
      height:  100px;

       
      overflow-y: hidden; /* Hide vertical scrollbar */
      overflow-x: hidden; /* Hide vertical scrollbar */

    }
  </style>