<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - PHP</title>
</head>
<body>
    <h1>
        Pagina del form
    </h1>

    <!-- 
        nei form  avremo un parametro "action"

        questo parametro rappresenta la pagina da caricare una volta compilato il form
        e a cui passare i parametri indicati dai campi di input
     -->
    <form action="results.php">
        <div>
            <label for="">Come ti chiami</label>
            <input name="user-name" type="text" placeholder="Nome">
        </div>
        <div>
            <label for="">Quanti anni hai?</label>
            <input type="number" name="eta">
        </div>
        <input type="submit">
    </form>

    <!-- 
        se vogliamo possiamo salvarci dei link che contengono già i nostri dati
        più o meno come succedeva con le api
    -->
    <a href="results.php?user-name=Paperino&eta=60">Link per paperino</a>

    
</body>
</html>