<?php
use App\Http\Controllers\Guest\PageController; // questo è associato alla funzione che importo dai controllers 
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

// NB:Questo file gestirà solo ed esclusivamente le rotte mentre la logica sarà nei controllers 

// lanciare la funzione "index" del pagecontroller quando visitiamo l'homepage
Route::get('/', [PageController::class, 'index'])->name("home");


// rotta per seconda pagina
Route::get('/secondaPagina', [PageController::class, 'showSeconda'])->name('seconda');

// rotta per terza pagina, dove andranno i movies
Route::get('/movies', [PageController::class, 'showMovie'])->name('terza');