<?php

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
}

?>