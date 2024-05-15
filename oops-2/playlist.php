<?php
class playlist 
{
public array $songs =[];
public function addsong(Song $song): void
    {
        $this->songs[] = $song;
    }
}