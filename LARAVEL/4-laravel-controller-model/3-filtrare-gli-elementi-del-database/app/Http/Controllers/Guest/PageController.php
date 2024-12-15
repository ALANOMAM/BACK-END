<?php

// serve per non dover ogni volta inserire i percorsi degli eventuali altri elementi che vorremmo importare qui dentro
namespace App\Http\Controllers\Guest;
//collego il mio model "Movie" tramite questo link
use App\Models\Movie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{


   //FUNZIONE CHE VERRà SPUTATA NELLA PRIMA PAGINA
    public function index() {
        return view('home');
    }

  //--------------------------------------------------------
  //FUNZIONE CHE VERRà SPUTATA NELLA SECONDA PAGINA (QUI FARO ANCHE I FILTRI)
   public function showSeconda() {
     //FILTRO 1:
    //nella tabella o model Movie filtro prendendo solo il film con id 2 
    //il metodo "->first()" ci preleva il primo elemento risultate dalla query
    $movieElement = Movie::where('id' , 2)->first();
    
    //dd($movieElement);

   //FILTRO 2:
   //nella tabella o model Movie filtro prendendo solo i film con id maggiore o uguale a tre 
    //il metodo "->get()" tutti gli elementi risultanti dalla query
    $movieElements = Movie::where('id' ,'>=', 3)->get();
    //dd($movieElements);


    return view('secondaPagina',compact('movieElement','movieElements'));
   } 

  //--------------------------------------------------------  
   //FUNZIONE CHE VERRà SPUTATA NELLA TERZA PAGINA (PAGINA MOVIES) 
   public function showMovie() {

    // preleviamo tutti i film dalla tabella movies
    // il metodo all() ci restituisce tutte le righe della tabella collegata al Model
    $moviesTable = Movie::all();

    //una specie di console log che ci fa accedere alle proprietà della variabile inserita
    // dd($moviesObject);

   // questo commando ci manda tutte le righe della tabella salvate nella variabile $moviesObject 
   // nella nostra vista "movies.php" dalla vista potremo avere accesso a questi dati.
   return view('movies',   compact('moviesTable'));
  

}


}
