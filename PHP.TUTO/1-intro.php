<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- 
       NB:

      to have access to the folder go to the terminal
      make sure that using "cd" you enter the "PHP.TUTO" folder
      then write "php -S localhost:4000". press enter and use the link that appears 
      without closing the terminal and just by modifying the end of the link by adding the name of a file,
      you can access all the files in the php.tuto folder. 

      "localhost:4000/name of file.php"
-->
<?php 

echo("hello world");
echo ("<h1>we can also put valid html<h>");
echo"<hr>";

// lets have a quick look at how VARIABLES work in php

$characterName="john"; // this is how we create variables.
$characterAge= 35;

echo "There once was a man named $characterName <br>";
echo "He was $characterAge years old <br>";
echo "He really liked the name $characterName  <br>";
echo "But did not like being $characterAge <br>";

// There are different DATA TYPES we can represent in any give php program

$phrase = " to be or not to be"; // strings
$age = 30; // integers
$gpa=3.8967; //floating point numbers 
$isMale = false; //boolean
null // this means "no value"

?>



</body>
</html>