<?php

class Movie {
    public $title;
    public $director;
    public $genre;
}

$movie1 = new Movie();
$movie1->title = "Inception";

$movie2 = new Movie();
$movie2->title = "The Dark Knight";


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
        <li><?php echo $movie1->title; ?></li>
        <li><?php echo $movie2->title; ?></li>
    </ul>
</body>
</html>