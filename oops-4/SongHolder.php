<?php

interface SongHolder {
    public function addSong(Song $song):void;
    public function getSong():array;
}