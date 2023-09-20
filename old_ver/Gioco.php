<?php
require_once __DIR__ . '/Prodotto.php';
class Gioco extends Prodotto{
    protected $materiale;


    public function __construct( $name, $thumb ,$category, $description, $price , $material)
    {

        $this->materiale = $material;

        parent::__construct($name, $thumb ,$category, $description, $price );   
    }

    
}





?>
