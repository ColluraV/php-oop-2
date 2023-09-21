<?php
    require_once __DIR__."/Prodotto.php";

    class Gioco extends Prodotto{

        public $materiale;
        public $img;
        public $prezzo;
        public $tipologia;
        public $brand;
        public $descrizione;


        public function __construct (string $name, string $category, string $thumb,string $description, string $price, string $material, $formato)
        {
                $this->nome = $name;
                $this->categoria = $category;
                $this->img = $thumb;
                $this->prezzo = $price;
                $this->descrizione = $description;
                $this->materiale = $material;
                $this->formato = $formato;

        }




        /**
         * Get the value of Material
         */ 
        public function getMaterial()
        {
                return $this->materiale;
        }

        /**
         * Set the value of Material
         *
         * @return  self
         */ 
        public function setMaterial($material)
        {
                $this->materiale = $material;

                return $this;
        }

       
    }


?>
