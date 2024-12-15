<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<form action="9-switch_statements.php" method="post">
 what was your grade?
 <input type="text" name="grade">

 <input type="submit">

</form>

<?php
$grade = $_POST["grade"];

// lets make a swicth statement so that we can respond to the grade of our student
// Switch statements are simmilar to if statements, but generally switch statements are used when you have ONE VALUE that you want to compare against differenr outcomes.
switch($grade){
case "A":
    echo"You did amazing!";
    break;

case "B":
    echo"You did preety good";
    break;

case "C":
        echo"You poorly!";
        break;

case "D":
     echo"You did very bad!";
     break;
          
case "F":
    echo"You failed!";
    break;

  default:
  echo"invalid grade";  

    }


?>

</body>
</html>