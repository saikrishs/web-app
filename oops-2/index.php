<?php
// declare(strict_types=1);

require_once "song.php";
require_once "playlist.php";

$playlist = new playlist;
// print_r($playlist);

$song1 = new Song("aaaaa", 100);
$song2 = new Song("bbbbbb", 200);
$song3 = new Song("cccccc", 300);
// print_r($song1);
$playlist->addSong($song1);
$playlist->addSong($song2);
$playlist->addSong($song3);

// var_dump($playlist->songs);
$playlistSongs = $playlist->songs;
// var_dump($playlistSongs);
foreach ($playlistSongs as $song) {
    echo $song->name . ' has been played ' . $song->numberOfPlays . ' times' . PHP_EOL;
}