<?php 
/*
Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza (con un design accettabile)
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
(cercate nella documentazione online quale sia la funzione corretta di PHP da utilizzare per sostituire la stringa corretta)

P. S.
Per debuggare la vostra pagina utilizzate la funzione var_dump(), 
ma una volta completato l'esercizio fate sparire le stampe di debug, 
scrivete tutto con echo e in maniera ordinata e piacevole per l'utente.
*/ 
?>

<?php 

$paragrafo = $_GET['Paragraph'];

$parola = $_GET['Word'];

$lunghezza = strlen($paragrafo);

 $paragrafo2 =  str_replace($parola,"***", $paragrafo);
 $lunghezza2 = strlen($paragrafo2);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> RESULTS </title>

<!--inizio stile-->
    <style>
*{
 margin:0;
 padding:0;
 box-sizing:border-box;
}

body{
 font-family:sans-serif;
 font-size:20px;
 background-color:lightblue;
 display:flex;
 justify-content: center;
}

.container{
 margin-top:50px;
 padding: 20px;
 border: 1px solid black;
 border-radius:5px;
 background-color:lightpink;
 display: flex;
 flex-direction:column;
 align-items: start;
 gap:40px;
}


strong{
    padding:10px;
    background-color:lightblue;
    color:white;
    border: 1px solid lightpink;
    border-radius:5px;
}

 </style>
 <!--fine stile-->

</head>
<body>



<div class="container">
<div>Il paragrafo scritto è : <strong><?php echo $paragrafo ?></strong></div>
<div> La parola vietata è :  <strong><?php echo $parola?></strong></div>
<div> La lunghezza del paragrafo è : <strong><?php echo $lunghezza?></strong></div>
<div>Il secondo paragrafo scritto è : <strong><?php echo $paragrafo2 ?></strong></div>
<div>La lunghezza del secondo paragrafo è : <strong><?php echo $lunghezza2?></strong></div>
</div>



    
</body>
</html>