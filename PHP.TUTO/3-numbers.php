<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo 40; // we can save numbers directly
    echo"<br>";
    echo 3.6 * 6; // we can perform basic operations
    echo"<br>";
    $num = 10; // we can save numbers in variables as we know
    $num++; // this just adds one to the number we already have.
    echo $num; 
    echo"<br>";
   // just as with strings, we can also use some math functions to perform more complex operations.
    
   echo abs(-200); // this gives me the absolute value of the number i pass.
   echo"<br>";
   echo pow(2,4); // this gives me 2 raised to the power 4.
   echo"<br>";
   echo sqrt(144); // this gives me the square root.
   echo"<br>";
   echo max(4,70); // this gives me the bigger of the two.
    
    ?>
</body>
</html>