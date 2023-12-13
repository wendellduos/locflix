<?php
$folder_paths = [
  'movies' => './contents/movies',
  'shows' => './contents/shows'
];

$show_list = array_diff(scandir($folder_paths['shows']), array('.', '..'));

if ($show_list) {
  $shows = [];

  foreach ($show_list as $show_name) {
  array_push($shows, $show_name);
  }
}

function convert_to_title($text) {
  $string = str_replace('-', ' ', $text);

  return ucwords($string, " ");
}

function return_show_list($array) {
  foreach ($array as $item) {
    $img_path = "./contents/shows/$item/thumb.jpg";

    $name = convert_to_title($item);

    echo("<li><img src='$img_path' alt='Foto de capa de $name' /><p>$name</p></li>");
  }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Locflix</title>
  <style>
    body {
      background-color: #242424;
      
      color: white;
    }
    
    ul {
      list-style-type: none;
    }

    li {
      display: inline-block;

      width: 300px;
      margin-right: 1rem;

      border: 1px solid gray;
      border-radius: 5px;

      overflow: hidden;

      cursor: pointer;
    }

    li img {
      display: block;

      width: calc(100% - 1rem);
      margin: .5rem;
    }

    li p {
      text-align: center;
    }
  </style>
</head>
<body>
  <ul>
    <?php return_show_list($shows) ?>
  </ul>
</body>
</html>