  <?php
  $title_projet = $dynamicVariables['title_projet'];
  $img_projet_src1 = $dynamicVariables['img_projet_src1'];
  $id_sha1_projet = $dynamicVariables['id_sha1_projet'];
  $id_sha1_projet = $dynamicVariables['id_sha1_projet'];
  $visibility_1_projet = $dynamicVariables['visibility_1_projet'];
   for ($i = 0; $i < count($title_projet); $i++) {
    $title_projet_ =   AsciiConverter::asciiToString($title_projet[$i]);
      if( $visibility_1_projet[$i]=="1"){
      $visibility_1_projet_ ="1" ; 
    }
    else{
      $visibility_1_projet_ ="0.2" ; 

    }
  ?>
    <div class="card" style="margin-bottom:90px;margin-top:90px;opacity:<?=  $visibility_1_projet_ ?>">
      <?php
      if ($img_projet_src1[$i] != "") {
      ?>
        <img src="<?= 'img_dw/' . $img_projet_src1[$i] ?>" alt="Image de la carte">
      <?php
      }

      ?>
      <div class="card-content">
        <h2 class="h2_1"><?= $title_projet_ ?></h2>
        <div class="sittings_">

          <?php
          if (isset($_SESSION["index"])) {
          ?>
            <div onclick="child_element(this)" title="<?= $id_sha1_projet[$i] ?>">
              <div class="link1 cursor_pointer"></div>
            </div>
          <?php
          }

          ?>
          <div class="img_height">
            <a href="blog.php/<?= $id_sha1_projet[$i] ?>">
              <div class="link2 cursor_pointer"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  require_once "data/all/all_select_all_css.php";
  ?>

 