<?php
//METODO 1 PER ACCEDERE AI DATI CHE POI DIVENTARRANNO API (OVVERO TRAMITE UN ARRAY DIRETTAMENTE NEL FILE SERVER.PHP SCRITTO IN PHP)
 /*$dischi = [
    [
        "title"=> "New Jersey",
        "author"=> "Bon Jovi",
        "year"=> 1988,
        "poster"=> "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
        "genre"=> "Rock"
    ],
    [
        "title"=> "Live at Wembley 86",
        "author"=> "Queen",
        "year"=> 1992,
        "poster"=> "https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg",
        "genre"=> "Pop"
    ],
    [
        "title"=> "Ten\"s Summoner\"s Tales",
        "author"=> "Sting",
        "year"=> 1993,
        "poster"=> "https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg",
        "genre"=> "Pop"
    ],
    [
        "title"=> "Steve Gadd band",
        "author"=> "Steve Gadd Band",
        "year"=> 2018,
        "poster"=> "https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg",
        "genre"=> "Jazz"
    ],
    [
        "title"=> "Brave new World",
        "author"=> "Iron Maiden",
        "year"=> 2000,
        "poster"=> "https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg",
        "genre"=> "Metal"
    ],
    [
        "title"=> "One more car, one more rider",
        "author"=> "Eric Clapton",
        "year"=> 2002,
        "poster"=> "https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg",
        "genre"=> "Rock"
    ]
]; 
 
header("Content-Type: application/json");

echo json_encode($dischi); */

 
//METODO 2 PER ACCEDERE AI DATI CHE POI DIVENTARRANNO API (OVVERO TRAMITE UN FILE JSON CONVERTITO IN PHP E POI CONVERTITO IN JS)

//la riga sotto prende il file json che passo e lo trasforma in stinga 
$dischi = file_get_contents("./dischi.json");
//la riga sotto prende la riga passata sopra(ancora in json) e lo rende leggibile in php
$disks  = json_decode($dischi);











header("Content-Type: application/json");
echo json_encode($disks); 


?>