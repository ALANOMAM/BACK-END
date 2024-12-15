<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// INHERITANCE is when a class inherits the attributes of a parent class


class Chef{

    function makeChiken(){
       echo "The chef makes chiken <br>"; 
    }
    function makeSalad(){
        echo "The chef makes salad <br>" ;
     }
     function makeSpacialDish(){
        echo "The chef makes bbq ribs <br>"; 
     }

}

$chef = new Chef();
$chef -> makeChiken();

 // suppose i want my italian chef to be able to do everything that a normal chef can do and then some more.

 class ItalianChef extends Chef {

 function makePasta(){ //i can add a new function in this child class.
    echo"i can make pasta!! <br>";
 }

 function makeSpacialDish(){ // i can also OVERWRITE a function already present in the parent class that i inherited, like this one.
     echo" i make spacial dish called parm.";
 }
}

$italianchef = new ItalianChef();
$italianchef -> makeSalad(); // i still have acces to the make salad method
$italianchef -> makePasta(); // i also have access to the make pasta method which is only present in the italian chef class. 
$italianchef -> makeSpacialDish(); 



?>


</body>
</html>