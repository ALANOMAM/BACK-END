<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

  <form action="4-user_input.php" method="get" > <!-- the form will become the link between our html and php-->
     Name : <input type="text" name="name" autocomplete="on">
     <br>
     Age : <input type="number" name="age" autocomplete="on">

   <input type="submit">
  </form>
<br>

   Your name is: <?php echo $_GET["name"]?> <!-- this is ho we get the name when it is submited through our form above. -->
   <br>
   Your age is : <?php echo $_GET["age"]?>
    
<!--lets use what we have learned to build a basic calculator-->
  <hr>
  
  <form action="4-user_input.php" method="get">
  <input type="number" name="num1" autocomplete="on">
  <br>
  <input type="number" name="num2" autocomplete="on">
   <input type="submit">
 </form>
<br>

Answer : <?php echo $_GET["num1"] + $_GET["num2"]?>


</body>
</html>