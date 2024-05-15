<?php

require_once "SongHolder.php";
class Album implements SingHolder {
    private array $songs = [];

    public function addSong(Song $song):void {
        $this->songs[]= $song;
    }
    public function getsong():array{
        return $this->songs;
    }

}