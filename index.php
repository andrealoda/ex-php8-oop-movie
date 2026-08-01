<?php

class Movie
{
    public $title;
    public $director;
    public $genre;

    function __construct($_title, $_director, $_genre)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
    }

    public static function getMovieInfo($movie) {
        return $movie->title . " - " . $movie->director . " - " . $movie->genre;
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

    <h2>Movie 1</h2>
    <p><?php echo Movie::getMovieInfo($movie1); ?></p>

    <h2>Movie 2</h2>
    <p><?php echo Movie::getMovieInfo($movie2); ?></p>

    <h2>Movie 3</h2>
    <p><?php echo Movie::getMovieInfo($movie3); ?></p>
    
</body>

</html>