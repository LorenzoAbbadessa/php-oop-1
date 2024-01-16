<?php
require __DIR__ . "/Models/Movie.php";


$film_one = new Movie("Film 1", "Regista 1", "Anno 1", "Genere 1");
$film_one->genre .= ", genere 1.2, genere1.3.";

$film_two = new Movie("Film 2", "Regista 2", "Anno 2", "Genere 2");
$film_two->genre .= ", genere 2.1.";

var_dump($film_one);
var_dump($film_two);

echo "<h1>FILM:</h1>";
echo $film_one->getMovieInfo() . "<br>";
echo $film_two->getMovieInfo();
