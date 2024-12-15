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
})->name('home');


Route::get('/second', function() {
    return view('second');
})->name('second');

Route::get('/third', function() {
    return view('third');
})->name('third');