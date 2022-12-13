<?php

require_once __DIR__ . './Models/Movie.php';



$first_movie = new Movie('Avatar', 2009, 'Adventure');

// var_dump($first_movie);

// echo $first_movie->getTitle();


$second_movie = new Movie('The Irishman', 2019, 'Crime');

// var_dump($second_movie);

// echo $second_movie->getTitle();


include __DIR__ . './partials-templates/header.php';
include __DIR__ . './partials-templates/main.php';
include __DIR__ . './partials-templates/footer.php';
