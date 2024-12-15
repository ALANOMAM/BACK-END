
<?php

class Categoria{
   public $name;
   public $icon;
  
/**
 * __construct
 *
 * @param  string $_nome
 * @param  string $_icona
 */
function __construct($_name,$_icon)
{
    $this -> name = $_name;
    $this -> icon = $_icon;
}

}

?>