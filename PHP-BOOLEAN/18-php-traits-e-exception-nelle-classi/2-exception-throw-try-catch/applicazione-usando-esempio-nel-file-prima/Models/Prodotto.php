
<?php

class Prodotto{
  public $immagine;
  public $nome;
  public $prezzo;
  //pezzo che subirà la composizione
  public $categoria;


/**
 * __construct
 *
 * @param  string $_nome
 * @param  float $_prezzo
 */
function __construct($_nome,$_prezzo, Categoria $_categoria ){
 $this->categoria = $_categoria;
 $this->nome = $_nome;

 //------------------------------------------
     //QUI SOTTO LANCIO EXCEPTION 
 //------------------------------------------
 

// controlla che il prezzo fornito sia effettivamente un numero
if(is_numeric($_prezzo)) {

  $this->prezzo = $_prezzo;
  
} else {
  // DOVE LANCIO LA MIA EXECPTION. Qui inserisco il messaggio che sarà visto 
  //quando se verifica l'errore o se notiamo che sta succedendo qualcosa che non vorremmo
  throw new Exception("Il prezzo inserito non è di valore numerico");
}



}

    



}



?>

