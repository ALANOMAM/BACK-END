<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
 // the loop below is a simple for loop.
 for($i=1; $i<=5; $i++){
echo"$i <br>";
 }
echo"<hr>";
 // lets apply our for loop to loop through an array.

 $luckyNumbers = array(6,84,8,9,5,4,7);
 for($i=0; $i<count($luckyNumbers);$i++){
echo"$luckyNumbers[$i] <br>";
 }

?>



</body>
</html>