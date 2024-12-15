<?php


// voglio memorizzare questa mail e renderla disponibile a tutte le pagine del mio sito
$userEmail = "gabrielspanu96@gmail.com";

// inizio la sessione
session_start();

$_SESSION['userEmail'] = $userEmail;

$_SESSION['userPassword'] = "123456";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    
<?php

require "./partials/navbar.php";

?>
   
     <h1>pagina dove memorizzo la  mail in UNA VARIABILE DI SESSIONE per renderla disponibile a tutte le pagine del mio sito</h1>



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>