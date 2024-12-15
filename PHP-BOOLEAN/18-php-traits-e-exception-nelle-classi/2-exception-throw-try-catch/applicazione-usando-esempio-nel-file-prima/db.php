<?php

require './Models/Prodotto.php';
require './Models/Categoria.php';
require './Models/Cibo.php';
require './Models/Gioco.php';
require_once './Traits/weightable.php';
require_once './Traits/Expireable.php';

//oggetti cane e gatto  della classe categoria.
$cane = new Categoria("cane","fa-solid fa-dog");
 //var_dump($cane);
$gatto = new Categoria("gatto","fa-solid fa-cat");
//var_dump($gatto);



//oggetti delle classi cibo e gioco che hanno ereditato alcune proprietà dalla classe prodotto.

//------------------------------------------
     //QUI SOTTO RICEVO EXCEPTION 
 //------------------------------------------

 // praticamente qui dice TRY di creare l'oggetto cibo1 
//e se succede un errore(nel nostro caso specifico se il valore del prezzo non è numerico) stampa il messaggio di errore
try{
    $cibo1 = new Cibo("Croccantini", 11.98,$cane,"19kg","proteine,sale,farina","1/02/2023"); 
} catch(Exception $e){
    echo $e->getMessage();
    var_dump($e);//permette di vedere i dettagli dell'errore come riga in cui c'e ecc, opzionale da fare
}
$cibo1->immagine ="./img/croccantini.jpg";


try{
    $cibo2 = new Cibo("Crocchette",3.85,$gatto,"10kg", "sale,pesce,farina","18/06/2023");
}catch(Exception $e){
    echo $e->getMessage();
    var_dump($e);//permette di vedere i dettagli dell'errore come riga in cui c'e ecc, opzionale da fare
}
$cibo2->immagine ="./img/crocchette-gatto.jpg";


try{
$gioco1 = new Gioco("Gioco Gatto",20,$gatto,"palstica","3kg","19/09/2025");
}catch(Exception $e){
    echo $e->getMessage();
    var_dump($e);//permette di vedere i dettagli dell'errore come riga in cui c'e ecc, opzionale da fare
}
$gioco1->immagine ="./img/gioco-gatto.jpg";


try{
$gioco2 = new Gioco("Gioco Cane",40,$cane,"silicone","2kg","25/05/2021");
}catch(Exception $e){
    echo $e->getMessage();
    var_dump($e);//permette di vedere i dettagli dell'errore come riga in cui c'e ecc, opzionale da fare
}
$gioco2->immagine ="./img/gioco-cane.jpg";



//creo un array che contiene tutti i miei prodotti
$foodItems=[
    $cibo1,
    $cibo2,
];

$toyItems=[
    $gioco1,
    $gioco2,  
];


//var_dump($foodItems);
//var_dump($toyItems);

?>