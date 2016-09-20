<?php
/**
 * User: Junade Ali
 * Date: 10/04/2016
 * Time: 11:38
 */

require_once('Music.php');
require_once('Playlist.php');
require_once('Song.php');

$songOne = new Song('Lost In Stereo');
$songTwo = new Song('Running From Lions');
$songThree = new Song('Guts');
$playlistOne = new Playlist();
$playlistTwo = new Playlist();
$playlistThree = new Playlist();
$playlistTwo->addSong($songOne);
$playlistTwo->addSong($songTwo);
$playlistThree->addSong($songThree);
$playlistOne->addSong($playlistTwo);
$playlistOne->addSong($playlistThree);
$playlistOne->play();
