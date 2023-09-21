<?php 
    require_once __DIR__."/Categoria.php";

    class Gatti extends Categoria {
        protected $icon;

        public function __construct()
        {
            $this->icon ='<i class="fa-solid fa-cat"></i>';
        }


        /**
         * Get the value of icon
         */ 
        public function geticon()
        {
                return $this->icon;
        }

        /**
         * Set the value of icon
         *
         * @return  self
         */ 
        public function seticon($icon)
        {
                $this->icon = $icon;

                return $this;
        }
    }
?>