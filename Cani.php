<?php 
    require_once __DIR__."/Categoria.php";

    class Cani extends Categoria {
        public $icon;

        public function __construct()
        {
            $this->icon ='<i class="fa-solid fa-dog"></i>';
        }


        /**
         * Get the value of icon
         */ 
        public function getIcon()
        {
                return $this->icon;
        }

        /**
         * Set the value of icon
         *
         * @return  self
         */ 
        public function setIcon($icon)
        {
                $this->icon = $icon;

                return $this;
        }
    }
?>