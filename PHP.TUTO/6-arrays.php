<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$friends = array("kevin", "alan" ,"oscar", "jim"); // how to create an array
echo $friends[2]; // how to access elements by index.
echo"<br>";

$friends[1]="karen"; //i can modify an element in the array
echo $friends[1];
echo"<br>";

$friends[4] = "angela"; // i can also add an element to the array that was not there.
echo $friends[4];
echo"<br>";

echo count($friends); // i can figure out how many elements are in the array.

?>
<hr>
<!--Now lets use what we know about arrays and apply that knowledge with checkboxes-->

<form action="6-arrays.php" method="post" >
 Apples: <input type="checkbox" name="fruits[]" value="apples" autocomplete="on" > <br>
 Oranges: <input type="checkbox" name="fruits[]" value="oranges" autocomplete="on" > <br>
 Banana: <input type="checkbox" name="fruits[]" value="banana" autocomplete="on"> <br>

 <input type="submit" >
</form>

<?php
$fruits  = $_POST["fruits"];
echo $fruits[0];
echo $fruits[1];
echo $fruits[2];
?>
<hr>

<!-- now lets talk about ASSOCIATIVE ARRAYS. these are very specific types or arrays where we can store a series ok "KEY:VALUE pairs" and not only values -->
<!-- to see this, lets assume we want to make a table for our class in which we have the students and the grades associated to each student-->

<form action="6-arrays.php" method="post">
<input type ="text" name="student" autocomplete="on">
<input type="submit">
</form>


<?php

$grades = array("jim"=> "A+", "pam"=>"B-", "oscar"=>"C+");
echo $grades[$_POST["student"]]; // this will print out "A+", in an associative array we dont access the elements using their index but instead using thier keys, and in this case the keys are the names.


?>








</body>
</html>