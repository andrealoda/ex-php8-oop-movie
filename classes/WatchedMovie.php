<?php
require_once "./traits/SeenMovie.php";
require_once "./classes/Movie.php";


class WatchedMovie extends Movie
{
    use SeenMovie;
}

?>