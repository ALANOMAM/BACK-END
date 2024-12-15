<?php

// serve per non dover ogni volta inserire i percorsi degli eventuali altri elementi che vorremmo importare qui dentro
namespace App\Http\Controllers\Guest;
//collego il mio model "Movie" tramite questo link
use App\Models\Movie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index() {
        return view('home');
    }


   public function showSeconda() {
    return view('secondaPagina');
   }

   // creo una funzione *pubblica* chiamata showMovie() in cui ci inserisco la logica che voglio eseguire 
   public function showMovie() {

    // preleviamo tutti i film dalla tabella movies
    // il metodo all() ci restituisce tutte le righe della tabella collegata al Model
    $moviesTable = Movie::all();

    //una specie di console log che ci fa accedere alle proprietà della variabile inserita
    // dd($moviesObject);

   return view('movies',   compact('moviesTable'));
   /* "compact('moviesTable')" passa la variabile o tabella "$moviesTable" 
      tramite la rotta associata al file "movies.blade.php" cosi posso 
      accedere agli elementi della detta tabella.
   */
}

}
