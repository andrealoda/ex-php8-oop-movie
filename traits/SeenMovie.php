<?php

trait SeenMovie
{
    public bool $seen = false;

    public function markAsSeen()
    {
        $this->seen = true;
    }
}

?>