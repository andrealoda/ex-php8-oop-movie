<?php

class Movie {
    public $title;
    public $director;
    public $genre;

function __construct($_title, $_director, $_genre) {
    $this->title = $_title;
    $this->director = $_director;
    $this->genre = $_genre;
}


}

$movie1 = new Movie("Inception", "Christopher Nolan", "Sci-Fi");

$movie2 = new Movie("The Dark Knight", "Christopher Nolan", "Action");

$movie3 = new Movie("Interstellar", "Christopher Nolan", "Sci-Fi");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-php8-oop-movie</title>
</head>
<body>
    <h1>OOP</h1>
    <ul>
        <li><?php echo $movie1->title; ?> - <?php echo $movie1->director; ?> - <?php echo $movie1->genre; ?></li>
        <li><?php echo $movie2->title; ?> - <?php echo $movie2->director; ?> - <?php echo $movie2->genre; ?></li>
        <li><?php echo $movie3->title; ?> - <?php echo $movie3->director; ?> - <?php echo $movie3->genre; ?></li>
    </ul>
</body>
</html>