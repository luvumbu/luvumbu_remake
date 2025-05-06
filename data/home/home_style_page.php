<?php
require_once "data/home/sql/home_style_page_sql_1.php";
require_once "data/home/js/home_style_page_js.php";

?>



<div class="parent_input" >
    <label for="">name_style_pages</label>
    <input type="text" class="input_info_1 input_info" id="name_style_pages" placeholder="name_style_pages">
    <label for="">header_style_pages</label>
    <textarea class="textarea_info_1 textarea_info" id="header_style_pages" placeholder="header_style_pages"></textarea>
    <label for="">total_style_pages</label>
    <textarea class="textarea_info_2 textarea_info" id="total_style_pages" placeholder="total_style_pages"></textarea>
    <label for="">total_style_text_pages</label>
    <textarea class="textarea_info_3 textarea_info" id="total_style_text_pages" placeholder="total_style_text_pages"></textarea>
    <label for="">total_style_parent_pages</label>
    <textarea class="textarea_info_4 textarea_info" id="total_style_parent_pages" placeholder="total_style_parent_pages"></textarea>
    <div class="btn_input" onclick="btn_input(this)">ENVOYER</div>

</div>


<div class="barr_noire"></div>

<?php

for ($i = 0; $i < count($dynamicVariables['id_style_page_auto']); $i++) {


    $id_sha1_style_page_  = $dynamicVariables['id_sha1_style_page'][$i];
    $name_style_pages_  = $dynamicVariables['name_style_pages'][$i];
    $total_style_pages_  = $dynamicVariables['total_style_pages'][$i];
    $header_style_pages_  = $dynamicVariables['header_style_pages'][$i];
    $total_style_parent_pages_  = $dynamicVariables['total_style_parent_pages'][$i];
    $total_style_text_pages_  = $dynamicVariables['total_style_text_pages'][$i];
    $total_style_pages_ =  AsciiConverter::asciiToString($total_style_pages_); // Affiche "Hello"
    $header_style_pages_ =  AsciiConverter::asciiToString($header_style_pages_); // Affiche "Hello"
    $total_style_parent_pages_ =  AsciiConverter::asciiToString($total_style_parent_pages_); // Affiche "Hello"
    $total_style_text_pages_ =  AsciiConverter::asciiToString($total_style_text_pages_); // Affiche "Hello"
?>
    <div class="parent_input">
        <label for="">name_style_pages</label>
        <input title="<?= $id_sha1_style_page_ ?>" value="<?= $name_style_pages_  ?>" type="text" class="input_info_1 input_info" id="name_style_pages_<?= $id_sha1_style_page_ ?>" placeholder="name_style_pages">
        <label for="">header_style_pages</label>
        <textarea title="<?= $id_sha1_style_page_ ?>" class="textarea_info_1 textarea_info" id="header_style_pages_<?= $id_sha1_style_page_ ?>" placeholder="header_style_pages"><?= $header_style_pages_  ?></textarea>
        <label for="">total_style_pages</label>
        <textarea title="<?= $id_sha1_style_page_ ?>" class="textarea_info_2 textarea_info" id="total_style_pages_<?= $id_sha1_style_page_ ?>" placeholder="total_style_pages"><?= $total_style_pages_  ?></textarea>
        <label for="">total_style_text_pages</label>
        <textarea title="<?= $id_sha1_style_page_ ?>" class="textarea_info_3 textarea_info" id="total_style_text_pages_<?= $id_sha1_style_page_ ?>" placeholder="total_style_text_pages"><?= $total_style_text_pages_  ?></textarea>
        <label for="">total_style_parent_pages</label>
        <textarea title="<?= $id_sha1_style_page_ ?>" class="textarea_info_4 textarea_info" id="total_style_parent_pages_<?= $id_sha1_style_page_ ?>" placeholder="total_style_parent_pages"><?= $total_style_parent_pages_  ?></textarea>

        <div class="flex_blox">
            <div class="btn_input" onclick="btn_update(this)" title="<?= $id_sha1_style_page_ ?>">UPDATE</div>
            <a href="<?= 'style_page_flex_box.php/' . $id_sha1_style_page_  ?>">
                <div class="btn_input">FLEX-BOX</div>
            </a>
        </div>
    </div>
<?php
}
?>