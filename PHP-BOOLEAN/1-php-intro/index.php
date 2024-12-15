<?php

// http://localhost/boolean/php-hello/index.php?eta=27&nome=Gabriel

// come posso prelevare un parametro dalla url?
// come ricevo il parametro "eta" ?



// prelevo il parametro "nome" dall'url
$nome = $_GET['nome'];


// prelevo il parametro "eta" dall'url
$eta = $_GET['eta'];


?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La mia prima pagina php</title>
</head>
<body>
    <h1>Ciao a tutti!</h1>
    <p>
        Ciao sono <?php echo $nome ?>, e ho <?php echo $eta ?> anni.
    </p>
    
</body>
</html>