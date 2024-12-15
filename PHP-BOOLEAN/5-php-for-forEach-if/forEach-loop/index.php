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
        <hr>

        <?php 
        $studenti = [
            [
                "nome" => "Gabriel",
                "cognome" => "Spanu",
                "classe" => 118,
                "media_voti" => 7,
            ],
            [
                "nome" => "Alberto",
                "cognome" => "Arrighetti",
                "classe" => 118
            ],
            [
                "nome" => "Topolino",
                "cognome" => "Mouse",
                "classe" => 118
            ]
        ];  


        
        ?>


        <hr>
        
        <ul>

            <?php
            
            foreach($studenti as $currentStudente) {
                echo "
                <li>
                    <ul>
                        ";
                        // questa sintassi ci restituisce non solo il valore singolo di ogni elemento
                        // ma anche la chiave di ogni elemento (se presente)
                        // se stiamo lavorando con un array quel $key sarà l'indice
                        // se stiamo lavorando con un oggetto, quel $key sarà la chiave
                        foreach($currentStudente as $key => $value) {
                            echo "
                            <li>
                                $key:  $value
                            </li>";
                        }
                        echo "
                    </ul>
                    
                </li>
                ";

            }

            ?>

        </ul>
    

    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>