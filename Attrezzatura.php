<?php
    require_once __DIR__."/Prodotto.php";

    class Attrezzatura extends Prodotto{
        public $size;
        public $descrizione;
        public $tipologia;
        public $img;
        public $prezzo;


        public function __construct (string $name, string $category, string $thumb,string $description, string $price,)
        {
                $this->nome = $name;
                $this->categoria = $category;
                $this->img = $thumb;
                $this->prezzo = $price;
                $this->descrizione = $description;


        }


        /**
         * Get the value of size
         */ 
        public function getSize()
        {
                return $this->size;
        }

        /**
         * Set the value of size
         *
         * @return  self
         */ 
        public function setSize($size)
        {
                $this->size = $size;

                return $this;
        }

        /**
         * Get the value of descrizione
         */ 
        public function getDescrizione()
        {
                return $this->descrizione;
        }

        /**
         * Set the value of descrizione
         *
         * @return  self
         */ 
        public function setDescrizione($descrizione)
        {
                $this->descrizione = $descrizione;

                return $this;
        }

        /**
         * Get the value of tipologia
         */ 
        public function getTipologia()
        {
                return $this->tipologia;
        }

        /**
         * Set the value of tipologia
         *
         * @return  self
         */ 
        public function setTipologia($tipologia)
        {
                $this->tipologia = $tipologia;

                return $this;
        }

        /**
         * Get the value of img
         */ 
        public function getImg()
        {
                return $this->img;
        }

        /**
         * Set the value of img
         *
         * @return  self
         */ 
        public function setImg($img)
        {
                $this->img = $img;

                return $this;
        }

        /**
         * Get the value of prezzo
         */ 
        public function getPrezzo()
        {
                return $this->prezzo;
        }

        /**
         * Set the value of prezzo
         *
         * @return  self
         */ 
        public function setPrezzo($prezzo)
        {
                $this->prezzo = $prezzo;

                return $this;
        }
    }
?>