<?php


class User {
    //qui stiamo definendo le nostre variabili PROTECTED invece di publiche
    //queste prorietà veranno EREDITATE nel caso avessimo classe figlie 
    //questo ci obbliga a creare funzione GETTERS e SETTERS dentro questa classe
    // queste funzioni ci permettono di poter prendere e/o modificare le nostre varibili protette.
    protected $username;
    protected $email;
    protected $password;

    function __construct($_username, $_email) {
        $this->username = $_username;
        $this->email = $_email;
    }
    
    /**
     * setPassword
     *
     * @param  string $newPassword
     */

//questa funzione public del tipo SET ci permette di MODIFICARE o DARE un valore alla nostra proprietà protetta password.
//in altre parole, tramite questa posso avere accesso alla proprieta password and fuori da questa classe. 
//queste funzioni veranno EREDITATE nel caso avessimo classe figlie 
    public function setPassword($newPassword) {

        // facciamo tutti i controlli del caso
        $this->password = $newPassword;

    }

 // questa funzione public tipo GET ci permette di PRENDERE la nostra proprietà protetta password
 //in altre parole, tramite questa posso avere accesso alla proprieta password and fuori da questa classe.
 //queste funzioni veranno EREDITATE nel caso avessimo classe figlie 
    public function getPassword() {
        return $this->password;
    }


}