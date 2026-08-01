<?php

require_once "./classes/Genre.php";
require_once "./classes/Movie.php";
require_once "./classes/WatchedMovie.php";

$movie1 = new WatchedMovie("Inception", "Christopher Nolan", [new Genre("Sci-Fi"), new Genre("Thriller")]);
$movie1->setAsSeen();

$movie2 = new WatchedMovie("The Dark Knight", "Christopher Nolan", [new Genre("Action"), new Genre("Crime")]);
$movie2->setAsSeen();

$movie3 = new WatchedMovie("Interstellar", "Christopher Nolan", [new Genre("Sci-Fi"), new Genre("Drama")]);
$movie3->setAsSeen();

$movie4 = new WatchedMovie("Pulp Fiction", "Quentin Tarantino", [new Genre("Crime"), new Genre("Drama"), new Genre("Thriller")]);
$movie4->setAsSeen();

$movie5 = new WatchedMovie("The Shawshank Redemption", "Frank Darabont", [new Genre("Drama")]);
// $movie5->setAsSeen();

?>