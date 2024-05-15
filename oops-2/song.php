<?php
class Song
{
    // public $name;
    // public $numberOfPlays;
    
    public function __construct(public string $name, public int $numberOfPlays)
    {
    // $this->name = $name;
    // $this->numberOfPlays = $numberOfPlays;
    }
}