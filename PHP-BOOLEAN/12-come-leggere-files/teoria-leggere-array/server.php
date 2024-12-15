<?php
//METODO 1 PER ACCEDERE AI DATI CHE POI DIVENTARRANNO API (OVVERO TRAMITE UN ARRAY DIRETTAMENTE NEL FILE SERVER.PHP SCRITTO IN PHP)
//["Ciao","Nuovo todo","Nuovo ancora","Parlare del feedback dei ragazzi a riunione"]


//METODO 2 PER ACCEDERE AI DATI CHE POI DIVENTARRANNO API (OVVERO TRAMITE UN FILE JSON CONVERTITO IN PHP E POI RICONVERTITO IN JSON )

// prendo il file json di todo e lo passo sotto forma di stringa sempre in json
$todoContent = file_get_contents('./todo-list.json');
 //la riga sotto prende la riga passata sopra(ancora in json) e lo rende un array leggibile in php
//questa conversione mi serve nel caso io debba applicare modifiche al mio database, tipo filtrare, modificare ecc
 $todoList = json_decode($todoContent);


/*--------------------------------------------------------------------------------*/
/* DI SOLITO E IN QUESTO SPAZIO CHE APPLICO LE MODFICHE CHE VOGLIO
AL MIO DATABASE, TIPO AGGIUNTA ELEMENTI, FILTRARE ELEMENTI CHE VENGONO DAL DATABASE
ECC */

/*---------------------------------------------------------------------------------*/





// // dobbiamo dire che il nostro file (server.php) quando il server lo renderizza
// // indichi che siano informazioni json
// // copia e incolla
header("Content-Type: application/json");
//la riga sotto prende l'array leggibile in php  lo rende un di nuovo un array json, leggibile dal main.js tramite axios
echo json_encode($todoList);