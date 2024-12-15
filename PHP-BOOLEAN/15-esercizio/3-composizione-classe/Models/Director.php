<?php 
// in questo file creo le classi e basta.
//creo la classe "Director" che sarà usato come parametro nella classe "Movie"
class Director {
    public $name;
    public $lastName;
    public $nationality;
    
    /**
     * __construct
     *
     * @param  string $name
     * @param  string $lastName
     * @param  string $nationality
     * @return void
     */
    function __construct($name, $lastName, $nationality) {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->nationality = $nationality;
    }

    public function getFullName() {
        return $this->name . " " . $this->lastName;
    }
}

?>