<?php
require_once './Traits/weightable.php';
require_once './Traits/Expireable.php';
 //classe cibo erede della classe prodotti
 class Cibo extends Prodotto{
    //dove uso i traits, ovvero uso la o le proprietà presenti in ogni trait.
    use Weightable;
    use Expireable;

    public $ingedienti;
    
    /**
     * __construct
     *
     * @param  string $_nome
     * @param  string $_prezzo
     * @param  Categoria $_categoria
     * @param  string $_peso
     * @param  array $_ingredienti
     * @param  string $_dataScadenza
     */
    //creo il costruttore della classe figlia integrando parametri del genitore piu i parametri creati nella classe figlia
    function __construct($_nome,$_prezzo, Categoria $_categoria,$_peso, $_ingredienti,$_dataScadenza) {
        //richiamo il costruttore del genitore, ovvero la classe prodotto
        parent::__construct($_nome,$_prezzo, $_categoria );
        $this-> peso = $_peso ;
        $this-> ingedienti = $_ingredienti; 
        $this-> dataScadenza = $_dataScadenza;
    }

 }

?>