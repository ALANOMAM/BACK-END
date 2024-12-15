<?php

// PremiumUser è figlio di User
class PremiumUser extends User {

    // in automatico, siccome PremiumUser ESTENDE User, 
    // ho tutte le variabili d'istanza di User
    public $subscriptionYear;

    
    // anche con la classe figlia mi serve il costruttore per istanziare l'oggetto
    function __construct($username, $email, $subscriptionYear) {
        
        // usa il costruttore del genitore
        parent::__construct($username, $email);

        // poi vado a compilare le variabili d'istanza in più
        $this->subscriptionYear = $subscriptionYear;
    }


    // la classe estesa ha anche TUTTI i metodi della classe genitore

    // Polimorfismo:
    // se vogliamo possiamo chiamare un metodo con lo stesso nome che ha nella classe genitore
    // in questo modo stiamo sovrascrivendo il metodo
    public function setPassword($newPassword) {
        // possiamo cambiare il comportamento del metodo

        if(strlen($newPassword) < 8) {
            $newPassword = str_pad($newPassword, 8, 'x');
        }


        $this->password = $newPassword;

    }
}