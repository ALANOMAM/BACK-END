<?php 
/*
Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere maiuscole, lettere minuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

*/


include './functions.php';

// preparo una variabile che conterrà il numero di caratteri (se indicato)
$passwordLength = null;

// controllo se è settato il parametro 
if (isset($_GET['passwordCharacters']) && $_GET['passwordCharacters'] != '' ) {

    $generatedPassword = generatePassword($_GET['passwordCharacters']);

    // apriamo la sessione
    session_start();

    // creare la variabile di sessione
    $_SESSION['password'] = $generatedPassword;

    // effettuiamo il redirect
    header('Location: new-password.php');

    // sovrascrivo la variabile con il numero di caratteri
    $passwordLength = $_GET['passwordCharacters'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Strong Password Generator</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <div class="container py-5">
        <h1>Strong Password Generator</h1>

        <form class="mb-5">

            <div class="mb-3">

                <label for="passwordCharacters">Numero di caratteri</label>
                <input 
                    name="passwordCharacters" 
                    id="passwordCharacters" 
                    type="number" 
                    placeholder="N°"
                    min="6"
                    max="20"
                    value="<?php echo $passwordLength ?>"
                >

            </div>

            <button class="btn btn-primary" type="submit">Genera</button>

        </form>

        
        
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>