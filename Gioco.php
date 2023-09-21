<?php
    require_once __DIR__."/Prodotto.php";

    class Gioco extends Prodotto{

        public $materiale;
        public $img;
        public $prezzo;
        public $tipologia;
        public $brand;
        public $descrizione;



        public function __construct( string $name, string $thumb ,string $category, string $description, string $price , string $material)
        {
            $this->nome = $name;
            $this->categoria = $category;
            $this ->prezzo = $price;
            $this->descrizione = $description;
            $this->immagine = $thumb;
            $this->materiale = $material;

    
        }


        /**
         * Get the value of color
         */ 
        public function getColor()
        {
                return $this->materiale;
        }

        /**
         * Set the value of color
         *
         * @return  self
         */ 
        public function setColor($material)
        {
                $this->materiale = $material;

                return $this;
        }

       
    }


?>
