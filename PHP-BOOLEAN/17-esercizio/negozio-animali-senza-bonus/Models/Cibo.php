<?php
 //classe cibo erede della classe prodotti
 class Cibo extends Prodotto{
    public $peso;
    public $ingedienti;
    
    /**
     * __construct
     *
     * @param  string $_nome
     * @param  string $_prezzo
     * @param  Categoria $_categoria
     * @param  string $_peso
     * @param  array $_ingredienti
     */
    //creo il costruttore della classe figlia integrando parametri del genitore piu i parametri creati nella classe figlia
    function __construct($_nome,$_prezzo, Categoria $_categoria,$_peso, $_ingredienti) {
        //richiamo il costruttore del genitore, ovvero la classe prodotto
        parent::__construct($_nome,$_prezzo, $_categoria );
        $this-> peso = $_peso ;
        $this-> ingedienti = $_ingredienti;   
    }

 }

?>