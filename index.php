<?php
$folder_paths = [
  'movies' => './contents/movies',
  'shows' => './contents/shows'
];

$movies_list = array_diff(scandir($folder_paths['movies']), array('.', '..'));
$shows_list = array_diff(scandir($folder_paths['shows']), array('.', '..'));

if ($movies_list) {
  $movies = [];

  foreach ($movies_list as $movie_name) {
    array_push($movies, $movie_name);
  }
}

if ($shows_list) {
  $shows = [];

  foreach ($shows_list as $show_name) {
    array_push($shows, $show_name);
  }
}

require('./functions.php');
require('./views/index.view.php');