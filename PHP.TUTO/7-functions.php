<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


  <?php

 // creating a basic function with no paramenters 
function sayHI(){ 
    echo "Hello User";
}

sayHI(); // calling our function
echo"<hr>";

// creating a basic function with paramenters
function greet($name){
echo "Hello $name <br>";
}

greet("andy");
greet("tom");
greet("chloe");

echo"<hr>";
// now lets talk about the RETURN STATEMENT 

function cube($num){
 return $num*$num*$num; // whenever php sees the return statement it breaks out of the function. so if i write something else under the return, it will not be considered.
}

$cubeResult = cube(5);
 echo $cubeResult;
  
  ?> 

</body>
</html>