<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    // con la funzione config() stiamo importando un elemento dai file presenti nella cartella config/
    // il file è db.php e la chiave dell'elemento è $pasta
    // quindi scrivo "db.pasta"
    $pasta = config("db.pasta");

    // divido l'array in più array per tipo
    $pastaLunga = array_filter($pasta, function ($singlePasta) {
        if($singlePasta['tipo'] == "lunga") {
            return true;
        }
    });

    $pastaCorta = array_filter($pasta, function ($singlePasta) {
        if($singlePasta['tipo'] == "corta") {
            return true;
        }
    });


    $pastaCortissima = array_filter($pasta, function ($singlePasta) {
        if($singlePasta['tipo'] == "cortissima") {
            return true;
        }
    });


    // dd($pastaCortissima);

    // li passo alla view
    return view('home', compact('pastaLunga', 'pastaCorta', 'pastaCortissima'));
})->name('home');



Route::get('/product', function () {

    $pasta = config('db.pasta');

    // dd($pasta);

    // prendiamo il primo elemento
    $singlePasta = $pasta[0];
    // dd($singlePasta);

    return view('prodotto', compact("singlePasta"));
})->name('prodotto');
