
<?php
  // in questo file creo le classi e basta.
 //inizio classe
 class Movie{
    public $image;
    public $title;
    public $year;
    public $mainCharacter;
    public $stars;
    public $discription;
    //imposto il genere come array in modo tale che possa prendere più valori
    public $genre=[];


  
  function __construct($_title, $_year , $_mainCharacter) {

    $this->title = $_title;
    $this->year = $_year;
    $this->mainCharacter = $_mainCharacter;
  }

  //creo un metodo dentro la mia classe Movie
 function ratings(){
    echo "This movie has ". $this->stars." stars";
 }

 }
 //fine classe



?>