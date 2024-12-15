<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- the include statement helps us include other HTML files in our php file--> 

 <?php include "header.html"?>  <!--i have all of the code from my header file right here--> 
 <p>Hello World</p>
 <?php include "footer.html"?>
 <hr>
   <!--we can also include other php files in our php file, not just html-->


<?php
$title ="My first post"; // here i am asigning values to the variables that i declared in the other file.
$author = "Mike sotero";
$wordCount =400;
include "article-header.php" // this is how to include another php file in our php file.
?>
</body>
</html>