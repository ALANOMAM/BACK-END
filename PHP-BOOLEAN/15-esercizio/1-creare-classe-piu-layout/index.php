<?php

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


//creo e modifico il primo oggetto della mia classe "Movie", che chiamo "movie1"
 $movie1 = new Movie("TITANIC","1997","Leonardo Di Caprio");
 $movie1->image = "./img/titanic.jpg";
 //imposto il numero di stelle del film 1
 $movie1->stars = 4;
 //imposto i vari generi  del film 2
 $movie1->genre[0] = "horror";
 $movie1->genre[1] = "thriller";
  //var_dump($movie1);
 //chiamo il metodo presente nella mia classe per l'oggetto 1
 //$movie1->ratings();

 //------------------------------------------------------------------------

 //creo e modifico il primo oggetto della mia classe "Movie", che chiamo "movie1"
 $movie2 = new Movie("CAPTAIN PHILLIPS","2013","Tom Hanks");
 $movie2->image = "./img/captain-phillips.jpg";
 //imposto il numero di stelle del film 2
 $movie2->stars = 5;
 //imposto i vari generi  del film 2
 $movie2->genre[0] = "thriller";
 $movie2->genre[1] = "horror";
 $movie2->genre[2] = "horror";
 
 //var_dump($movie2);
  //chiamo il metodo presente nella mia classe per l'oggetto 2
 //$movie2->ratings();


 //creo un array che contiene i miei films
 $movies = [
    $movie1,
    $movie2,
 ];
 var_dump($movies)
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <style>
  .image-box{
    width: 300px;
  }

  .image-box img{
    width: 100%;
  }
  </style>

</head>
<body  data-bs-theme="dark" >

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container">
 <ul>
   <?php
    foreach($movies as $movie){
        echo "
        <div class='image-box'>
        <img
            src= $movie->image , 
        />
        </div>
        ";


        echo "
        <li>
            ". $movie->title . ", " . $movie->mainCharacter . ", " . $movie->year. ", ". $movie->genre[0]. ",
        </li>";


    }

    ?>
 </ul>

</div>


 <!--bootstrap-->   
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>



