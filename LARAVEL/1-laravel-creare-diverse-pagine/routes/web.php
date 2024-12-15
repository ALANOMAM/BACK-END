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

    $saluto = "Ciao a tutti!";

    $secondoTitolo = "Questa è la mia prima applicazione di Laravel";

    // $data = [
    //     'saluto' => "Come state?",
    // ];

    return view('home', compact('saluto', 'secondoTitolo'));
})->name('home');// con il commando "->name('home')" stiamo dando un nome alla nostra route


Route::get('/second', function() {
    return view('second');
})->name('second');// con il commando "->name('second')" stiamo dando un nome alla nostra route

Route::get('/third', function() {
    return view('third');
})->name('third'); // con il commando "->name('third')" stiamo dando un nome alla nostra route