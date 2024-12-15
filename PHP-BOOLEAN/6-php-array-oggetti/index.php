<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <div class="container py-5">
        <h1>PHP Parte 2</h1>

        <?php 


        $array = [
            "studente 0",
            'studente 1',
        ];

        var_dump($array);

        ?>

        <hr>

        <?php 
        
        // oggetto dello studente singolo
        $studente = [
            "nome" => "Gabriel",
            "cognome" => "Spanu",
            "classe" => 118
        ];

        // array di oggetti
        // in php questo viene chiamato più propriamente "array di array associativi"
        // in JS vengono chiamati esattamente così, ma più colloquialmente "array di oggetti"
        // possiamo chiamarli così anche in PHP, ricordiamoci che nei var_dump però non ci sarà
        // distinzione tra array (con indice numerico) e oggetti (array con indice associativo, quindi chiavi)
        $classe = [
            [
                "nome" => "Gabriel",
                "cognome" => "Spanu",
                "classe" => 118
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Arrighetti",
                "classe" => 118
            ]
        ];  

// per aggiungere un elemento al nostro array la sintassi è uguale a JS
        
$classe[] = [
    "nome" => "Topolino",
    "cognome" => "De Paperoni",
    "classe" => 118
];


        var_dump($classe);

        ?>

        <hr>

        <!-- il nome dell'oggetto $studente -->

        <h2>
            <?php  
            // la lettura di un array (o oggetto) è esattamente uguale a JS

            // possiamo però usare solo la notazione oggetto['chiave']
            echo $studente['cognome'];
            // non esiste la notazione oggetto.chiave
            // $studente.cognome  : ci da errore di sintassi

            echo "<br>";

            // scrivi il cognome del secondo studente dentro l'array $classe
            echo $classe[1]['cognome'];
            // in JS avremmo scritto questo classe[1].cognome
            // il risultato però è IDENTICO

            ?>
        </h2>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>