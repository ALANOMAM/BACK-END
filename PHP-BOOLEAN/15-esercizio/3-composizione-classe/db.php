<?php
 require './Models/Movie.php';
 require './Models/Director.php';

//qui creo oggetti della classe "Director"
$venier = new Director("Massimo", "Venier", "italiana");
$lanthimos = new Director("Yorgos", "Lanthimos", "greca");

 /*passo oggetto "$venier" della classe "Director come parametro della classe movie"*/
 $movie1 = new Movie("TITANIC","1997","Leonardo Di Caprio",$venier);
 $movie1->image = "./img/titanic.jpg";
 $movie1->stars = 4;
 $movie1->genre[0] = "horror";
 $movie1->genre[1] = "thriller";
  //var_dump($movie1);
 //chiamo il metodo presente nella mia classe per l'oggetto 1
 //$movie1->ratings();

 //------------------------------------------------------------------------

 /*passo oggetto "$lanthimos" della classe "Director come parametro della classe movie"*/
 $movie2 = new Movie("CAPTAIN PHILLIPS","2013","Tom Hanks",$lanthimos);
 $movie2->image = "./img/captain-phillips.jpg";
 $movie2->stars = 5;
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