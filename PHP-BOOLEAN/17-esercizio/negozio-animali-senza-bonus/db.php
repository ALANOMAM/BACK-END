<?php

require './Models/Prodotto.php';
require './Models/Categoria.php';
require './Models/Cibo.php';
require './Models/Gioco.php';


//oggetti cane e gatto  della classe categoria.
$cane = new Categoria("cane","fa-solid fa-dog");
 //var_dump($cane);
$gatto = new Categoria("gatto","fa-solid fa-cat");
//var_dump($gatto);


//oggetto prod1 della classe prodotto
$prod1 = new Prodotto("yes","23.90", $cane);
 //var_dump($prod1);



//oggetti delle classi cibo e gioco che hanno ereditato alcune proprietà dalla classe prodotto.

$cibo1 = new Cibo("Croccantini","11.99$",$cane,"19kg","proteine,sale,farina");
$cibo1->immagine ="./img/croccantini.jpg";
 //var_dump($cibo1);

$cibo2 = new Cibo("Crocchette","13.85$",$gatto,"10kg", "sale,pesce,farina");
$cibo2->immagine ="./img/crocchette-gatto.jpg";
 //var_dump($cibo2);

$gioco1 = new Gioco("Gioco Gatto","20$",$gatto,"palstica");
$gioco1->immagine ="./img/gioco-gatto.jpg";
//var_dump($gioco1);

$gioco2 = new Gioco("Gioco Cane","40$",$cane,"silicone");
$gioco2->immagine ="./img/gioco-cane.jpg";
//var_dump($gioco1);


//creo un array che contiene tutti i miei prodotti
$foodItems=[
    $cibo1,
    $cibo2,
];

$toyItems=[
    $gioco1,
    $gioco2,  
];


var_dump($items);

?>