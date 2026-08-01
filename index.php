<?php

class Genre
{
    public $genreName;

    function __construct($_genreName)
    {
        $this->genreName = $_genreName;
    }
}


class Movie
{
    public $title;
    public $director;
    public $genre;

    function __construct($_title, $_director, Genre $_genre)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
    }

    public function getMovieInfo()
    {
        return $this->title . " - " . $this->director . " - " . $this->genre->genreName;
    }
}


$movie1 = new Movie("Inception", "Christopher Nolan", new Genre("Sci-Fi"));

$movie2 = new Movie("The Dark Knight", "Christopher Nolan", new Genre("Action"));

$movie3 = new Movie("Interstellar", "Christopher Nolan", new Genre("Sci-Fi"));


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
    <p><?php echo $movie1->getMovieInfo(); ?></p>

    <h2>Movie 2</h2>
    <p><?php echo $movie2->getMovieInfo(); ?></p>

    <h2>Movie 3</h2>
    <p><?php echo $movie3->getMovieInfo(); ?></p>

</body>

</html>