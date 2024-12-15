
<?php

// prendo la lunghezza generata dal mio form che salvo dentro una variabile
$passwordLenght = $_GET["lunghezzaPassword"];



//funzione che mi restituisce un array formato da elementi casuali
function randomGenerator($passwordLenght){
    //stringa composta dai miei elementi casuali
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789*-+'!|";
    //array che riempiro sotto
    $passwordArray = [];
    $alphabetLenght = strlen($alphabet);

   //qusto è il ciclo che definisce quanyi elementi saranno dentro il mio array finale
    for ($i = 0; $i < $passwordLenght; $i++) {
        //la funzione "rand" mi genera numeri casuali da 0 alla lunghezza di alphabet
        $random = rand(0, $alphabetLenght-1);
        //riempio ogni index del mio array finale con elementi scelti casualmenti nella mia stringa alphabet
        $passwordArray[$i] = $alphabet[$random];
    }
    return $passwordArray ;
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark" >

<div class="container">


<form method="GET" action="index.php">
 <label for="lunghezzaPassword">Inserisci la lungezza della password : </label>
 <input type="number" name="lunghezzaPassword" id="lunghezzaPassword" min="0">
 <input type="submit">
</form>    


<div>
<span>la lunghezza inserita è : </span>  
<span> <?php echo $passwordLenght?> </span>
</div>

    

<p>
 <span>La password casuale generata è : </span>
<?php
            //richaimo la funzione "randomGenerator" iterando tra tutti gli elementi del mio array
           for ($i = 0; $i <$passwordLenght ; $i++){
            echo randomGenerator ($passwordLenght)[$i];
           }       
?>

</p>



</div>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>