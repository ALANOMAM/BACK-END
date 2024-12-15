<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// getters and setters are functions that allow us to control the access that people have to the attributes of those classes.
// lets consider the movie class below, in real life the possible ratinsgs are limited and we therefore need a way to limit and control the number of possible values for the rating variable. 

class Movie {
public $title; // "public" and "var" are the same and this makes our attribute accessible even from outside our class. the "private" attribute restricts the access to our class.
private $rating; // "public" keyword is a visibility modifier and in this case we made our variable private for the sake of our example

function __construct($title,$rating){
$this->title =$title;
$this-> setRating($rating);
}



function getRating(){ // this is our getter, i can only access the rating variable if i pass through this function.
return $this->rating;
}

function setRating($rating){ //this is my setter, i can only modify the rating variable if a pass through this function. Here i am also limiting the possinble values for ratings

if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
    $this->rating = $rating;
}
else{
    $this->rating = "INVALID";
}

}

}

$avengers = new Movie("Avengers","PG-13");
     
    $avengers->setRating("PG"); // the rating will move from "pg-13" to "pg"
echo $avengers -> getRating() ; // me accessing through the getter function

$avengers->setRating("lm"); // the rating will give me the invalid statement.
echo $avengers -> getRating() ; 


?>


</body>
</html>