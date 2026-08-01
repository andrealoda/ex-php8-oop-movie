<?php

trait SeenMovie
{
    private bool $seen = false;

    //setter method to mark the movie as seen
    public function setAsSeen()
    {
        $this->seen = true;
    }

    //getter method to check if the movie has been seen
    public function getSeen(): bool {
        return $this->seen;
    }
}

?>