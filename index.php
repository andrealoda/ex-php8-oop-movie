<?php

trait SeenMovie
{
    public bool $seen = false;

    public function markAsSeen()
    {
        $this->seen = true;
    }
}

class Genre
{
    public string $genreName;

    function __construct(string $_genreName)
    {
        $this->genreName = $_genreName;
    }
}


class Movie
{
    public string $title;
    public string $director;
    public array $genres;

    function __construct(string $_title, string $_director, array $_genres)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genres = $_genres;
    }

    public function getMovieInfo()
    {
        $genreNames = array_map(fn($genre) => $genre->genreName, $this->genres);
        return $this->title . " - " . $this->director . " - " . implode(", ",  $genreNames);
    }
}

class WatchedMovie extends Movie
{
    use SeenMovie;
}


$movie1 = new WatchedMovie("Inception", "Christopher Nolan", [new Genre("Sci-Fi"), new Genre("Thriller")]);
$movie1->markAsSeen();
$movie2 = new WatchedMovie("The Dark Knight", "Christopher Nolan", [new Genre("Action"), new Genre("Crime")]);
// $movie2->markAsSeen();
$movie3 = new WatchedMovie("Interstellar", "Christopher Nolan", [new Genre("Sci-Fi"), new Genre("Drama")]);
$movie3->markAsSeen();
$movie4 = new WatchedMovie("Pulp Fiction", "Quentin Tarantino", [new Genre("Crime"), new Genre("Drama"), new Genre("Thriller")]);
$movie4->markAsSeen();

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
    <p><?php echo $movie1->getMovieInfo(); ?> - <?php echo $movie1->seen ? "Seen" : "Not Seen"; ?></p>

    <h2>Movie 2</h2>
    <p><?php echo $movie2->getMovieInfo(); ?> - <?php echo $movie2->seen ? "Seen" : "Not Seen"; ?></p>

    <h2>Movie 3</h2>
    <p><?php echo $movie3->getMovieInfo(); ?> - <?php echo $movie3->seen ? "Seen" : "Not Seen"; ?></p>


    <h2>Movie 4</h2>
    <p><?php echo $movie4->getMovieInfo(); ?> - <?php echo $movie4->seen ? "Seen" : "Not Seen"; ?></p>

</body>

</html>