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
    
    $polloGomma = new Gioco('Pollo di gomma','./imgs/pollo_gomma.jpg','cani','Squezing pollo di gomma','10.99€','Plastica');
    $pelucheGatto = new Gioco('Peluche per Gatti','./imgs/peluche_topo.jpg','gatti','Topini dio peluche Trixie','4.99€','50% Cotone, 50% Poliestere');

    echo var_dump($polloGomma);
?>
