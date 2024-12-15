<?php
//classe gioco  erede della classe prodotti
class Gioco extends Prodotto{
    public $materiale;
    
    /**
     * __construct
     *
     * @param  string $_nome
     * @param  string $_prezzo
     * @param  Categoria $_categoria
     * @param  string $_materiale
     */
    //creo il costruttore della classe figlia integrando parametri del genitore piu i parametri creati nella classe figlia
    function __construct($_nome,$_prezzo, Categoria $_categoria,$_materiale) {
        //richiamo il costruttore del genitore, ovvero la classe prodotto
        parent::__construct($_nome,$_prezzo, $_categoria );
        $this->materiale = $_materiale ;
}

}

?>