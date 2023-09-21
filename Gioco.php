<?php
    require_once __DIR__."/Prodotto.php";

    class Gioco extends Prodotto{

        public $materiale;
        public $img;
        public $prezzo;
        public $tipologia;
        public $brand;
        public $descrizione;


        public function __construct (string $name, string $category, string $thumb,string $description, string $price, string $material)
        {
                $this->nome = $name;
                $this->categoria = $category;
                $this->img = $thumb;
                $this->prezzo = $price;
                $this->descrizione = $description;
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
