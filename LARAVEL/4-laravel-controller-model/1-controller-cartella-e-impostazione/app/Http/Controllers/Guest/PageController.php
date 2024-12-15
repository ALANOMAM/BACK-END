<?php

/* per aggiungere la cartella necessaria per il controller
   usare " php artisan make:controller Cartella/NomeController "
   per convenzione si usa spesso "php artisan make:controller Guest/PageController"
   anche se il nome della cartella e del file sono na scelta nostra

   NB:la chiamata va fatta in un terminale diverso da quello del backend e frontend
   NB:Questo file gestirà la logica dei dati che verranno poi passati nel file delle diverse rotte.
*/

// serve per non dover ogni volta inserire i percorsi degli eventuali altri elementi che vorremmo importare qui dentro
namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // creo una funzione *pubblica* chiamata index() in cui ci inserisco la logica che voglio eseguire
    public function index() {
        //qui abbiamo una logica base, cioè ritorna la pagina home
        //questa logica verrà mandata alla rotta adeguata che poi sarà assciata ad una pagina in output.
        return view('home');
    }


   // creo una funzione *pubblica* chiamata showSeconda() in cui ci inserisco la logica che voglio eseguire 
   public function showSeconda() {
    // anche qui c'e una logica abastanza di base.
    //mi ritorna i contenuti della seconda pagina.
    return view('secondaPagina');
   }



}
