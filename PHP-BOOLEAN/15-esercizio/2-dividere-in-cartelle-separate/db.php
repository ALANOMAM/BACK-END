<?php
 //inserisco la cartella che contiene la classe "Movie"
 //in questo file si creano e si modificano gli oggetti associati alle classi create nell'altra cartella.
 require './Models/Movie.php';


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