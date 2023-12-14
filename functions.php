<?php
function convert_to_title($text) {
  $string = str_replace('-', ' ', $text);

  return ucwords($string, " ");
}

function return_show_list($array) {
  foreach ($array as $item) {
    $img_path = "./contents/shows/$item/thumb.jpg";

    $name = convert_to_title($item);

    echo("<li class='content-row-item'><a href='./watch/$item.php'><img src='$img_path' alt='Capa de $name'></a></li>");
  }
}