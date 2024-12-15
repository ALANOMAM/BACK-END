<?php

function saluta($userName)
{

    // se vogliamo passare dei dati ad una funzione DOBBIAMO utilizzare i parametri

    echo "Ciao a tutti! Sono $userName <br>";

}

function checkIfEven($number)
{

    return $number % 2 === 0;

}

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


    <div class="container py-4" style="background-color: <?php echo $primaryColor ?>">

        <p>
            <?php

            for ($i = 0; $i < 10; $i++) {

                if (checkIfEven($i)) {

                    saluta($i);

                }

            }
            ?>
        </p>

    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>