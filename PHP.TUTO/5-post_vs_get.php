<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<form action="5-post_vs_get.php" method="post"> <!--when we use the "get" method in our form, as we have till this point, whenever we submit the form our elements also show up in the url, this is not safe because that means it can be modified easily, the alternative is the "post" method-->
Password: <input type="password" name="password" autocomplete="on" > <br>
<input type="submit">
</form>
<br>


<?php
echo $_POST["password"]; // I does almost exactly what get does, exept that it doesnt post all our data in the url.
?>

</body>
</html>