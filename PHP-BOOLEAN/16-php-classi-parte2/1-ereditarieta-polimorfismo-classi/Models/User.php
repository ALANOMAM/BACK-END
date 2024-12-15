<?php


class User {

    public $username;
    public $email;
    public $password;

    function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }
    
    /**
     * setPassword
     *
     * @param  string $newPassword
     */
    public function setPassword($newPassword) {

        // facciamo tutti i controlli del caso
        $this->password = $newPassword;

    }

}