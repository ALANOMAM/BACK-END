<?php

class PremiumUser extends User {

    public $subscriptionYear;


    function __construct($username, $email, $subscriptionYear) {
        
        parent::__construct($username, $email);

        //vado a compilare le variabili d'istanza in più
        $this->subscriptionYear = $subscriptionYear;
    }


    // Polimorfismo:
    //NB: ovviamente vale anche il polimorfismo qui,
    // se vogliamo possiamo chiamare un metodo con lo stesso nome che ha nella classe genitore
    // in questo modo stiamo sovrascrivendo il metodo

   /*  public function setPassword($newPassword) {
        // possiamo cambiare il comportamento del metodo

        if(strlen($newPassword) < 8) {
            $newPassword = str_pad($newPassword, 8, 'x');
        }


        $this->password = $newPassword;

    }*/
}