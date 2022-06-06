<?php 
class Movie{
    private $title;
    public $genre;
    public $year;

    function __construct($_title, $_genre, $_year){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
    }

    public function getTitle(){
        return $this->title;
    } 
}
?>

