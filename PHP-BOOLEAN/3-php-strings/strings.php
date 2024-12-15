<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Lavorare con le stringhe</title>
</head>
<body>
    <h1>PHP - Le stringhe</h1>
    <?php 

    $frase = "Ciao a tutti, come state? Ciao";

    $fraseSeparata = explode(" ", $frase);
    // var_dump() è l'equivalente del console.log() in js
    // NON DEVE ESSERE MAI UTILIZZATO per stampare elementi a schermo da visualizzare all'utente
    var_dump( $fraseSeparata );

    ?>

    <hr>

    <?php 

    $risultato = str_repeat("x", 10);
    var_dump($risultato);

    ?>

    <hr>

    <?php 
    
    $risultato = substr_count($frase, 'ciao');
    var_dump($risultato);
    
    ?>

    <hr>

    <?php

    $risultato = strlen($frase);
    var_dump($risultato);

    ?>
</body>
</html>