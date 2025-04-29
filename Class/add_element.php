<?php 
function add_element($tag, $class = "", $id = "", $content = "") {
    $class_attr = $class !== "" ? ' class="' . $class . '"' : "";
    $id_attr = $id !== "" ? ' id="' . $id . '"' : "";
    return "<$tag$class_attr$id_attr>$content</$tag>";
}


function add_element2($attributes = "", $_div = "div", $div_ = "div", $class = "", $id = "", $children = null) {
    $content = "";
    if (is_array($children)) {
        $content = implode("", $children);
    } elseif (!is_null($children)) {
        $content = $children;
    }

    $attr_str = trim($attributes);
    return "<$_div class=\"$class\" id=\"$id\" $attr_str>$content</$div_>";
}

 
/*
$children = [
    '<div><img src="https://example.com/image.jpg" alt="Image"></div>',
    '<div><h1>Mon élément</h1></div>',
];

echo add_element("Contenu principal", "div", "div", "class_dodo", "id_dodo", $children);


*/

/* 

echo add_element("Contenu principal", "div", "div", "class_dodo", "id_dodo");


*/



