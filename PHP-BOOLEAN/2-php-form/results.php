<?php 

$user_name = $_GET['user-name'];

$eta = $_GET['eta'];

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati dal form</title>
</head>
<body>
    <h1>Risultati dal form:</h1>

    <p>
        Ciao <?php echo $user_name ?>! Hai <?php echo $eta ?> anni.
    </p>
</body>
</html>