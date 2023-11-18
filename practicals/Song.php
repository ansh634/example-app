<?php
// Define a Song class
namespace Practicals;
class Song {
    // Private properties
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    // Setter for title property
    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter for title property
    public function getTitle() {
        return $this->title;
    }

    // Setter for artist property
    public function setArtist($artist) {
        $this->artist = $artist;
    }

    // Getter for artist property
    public function getArtist() {
        return $this->artist;
    }

    // Setter for genre property
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    // Getter for genre property
    public function getGenre() {
        return $this->genre;
    }

    // Setter for tempo property
    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }

    // Getter for tempo property
    public function getTempo() {
        return $this->tempo;
    }
}
?>

