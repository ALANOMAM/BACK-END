<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php

  $isMale = true;
  $isTall = true;

   if($isMale && $isTall){
    echo" you are a tall  male";
   } elseif($isMale && !$isTall){
     echo"you are a short male";
   }
   elseif(!$isMale && $isTall){
    echo"you are tall but not male";
  }
   else{
    echo"you are not a male and not tall";
   }
  echo"<br>";
// we can also use COMPARISON OPERATORS for if statements in php
// to study it we will create a function that gives us the max between numbers.

function getMax($num1, $num2){
 if($num1 > $num2){
     return $num1;
 } else{
    return $num2;
 }
}
echo getMax(45,6);
echo"<br>";

function getMax2($num1, $num2, $num3){
    if($num1 > $num2 && $num1>$num3){
        return $num1;
    } elseif($num2 > $num1 && $num2>$num3){
        return $num2;
    } 
    else{
       return $num3;
    }
   }
   echo getMax2(45,6000,900);
   echo"<br>";
?>  
<hr>
<!-- lets use what we have learned till now t build a better calculator where we can choose two numbers and the operation we want to carry out-->

  <form action=" 8-if_statements.php" method="post">
   First Num:<input type="number" name="num1"  ><br>
   OP:<input type="text" name="op" ><br>
   Second Num:<input type="number" name="num2" ><br>
   <input type="submit">
  </form>

  <?php

  $number1 = $_POST["num1"];
  $number2 = $_POST["num2"];
  $op = $_POST["op"];

  if($op == "+"){
    echo $number1 + $number2;
  }elseif($op == "-"){
    echo $number1 - $number2;
  }if($op == "*"){
    echo $number1 * $number2;
  }if($op == "/"){
    echo $number1 / $number2;
  }
  else{
    echo"invalid operator";
  }

  ?>







</body>
</html>