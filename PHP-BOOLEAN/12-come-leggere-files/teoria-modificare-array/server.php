<?php

//METODO 2 PER ACCEDERE AI DATI CHE POI DIVENTARRANNO API (OVVERO TRAMITE UN FILE JSON CONVERTITO IN PHP E POI RICONVERTITO IN JSON )

$todoContent = file_get_contents('./todo-list.json');
 $todoList = json_decode($todoContent);


/*--------------------------------------------------------------------------------*/
/* DI SOLITO E IN QUESTO SPAZIO CHE APPLICO LE MODFICHE CHE VOGLIO
AL MIO DATABASE, TIPO AGGIUNTA ELEMENTI, FILTRARE ELEMENTI CHE VENGONO DAL DATABASE
ECC */

//Infatti ora useremmo quetso spazio per impostare l'aggiunta di nuove stringhe nella lista
// se riceve un parametro per aggiungere il todo, esegue le operazioni necessarie
if(isset( $_GET['newTodo'] )) {
    // var_dump($_GET['newTodo']);


    // prendo il file json di todo
    $todoContent = file_get_contents('./todo-list.json');


    // lo trasformo in un array
    $todoList = json_decode($todoContent);


    // all'array pusho il nuovo todo che ricevo
    $todoList[] = $_GET['newTodo'];

    // var_dump($todoList);
    // scrivo nel file il nuovo array in formato json
    file_put_contents('./todo-list.json', json_encode($todoList));

    // fine 🌟
}

/*---------------------------------------------------------------------------------*/




header("Content-Type: application/json");
//la riga sotto prende l'array leggibile in php  lo rende un di nuovo un array json, leggibile dal main.js tramite axios
echo json_encode($todoList);