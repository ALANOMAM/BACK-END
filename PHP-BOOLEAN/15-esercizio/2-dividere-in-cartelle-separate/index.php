<?php
 //inserissco la cartella database.php
 require './db.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
.image-box{
width: 300px;
}
.image-box img{
width: 100%;
}
</style>

</head>
<body data-bs-theme="dark">

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container">
 <ul>
   <?php
    foreach($movies as $movie){
        echo "
        <div class='image-box'>
        <img
            src= $movie->image , 
        />
        </div>
        ";


        echo "
        <li>
            ". $movie->title . ", " . $movie->mainCharacter . ", " . $movie->year. ", ". $movie->genre[0]. ",
        </li>";


    }

    ?>
 </ul>

</div>


 <!--bootstrap-->   
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>



