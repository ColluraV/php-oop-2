<?php 
trait WithFormato{

    protected $formato;

    public function setFormato($formato){
        $this->formato= $formato;
    }

    public function getFormato(){
        if($this-> formato=="grande"){
            $this-> formato="XL";
        }
        if($this-> formato=="medio"){
            $this-> formato="M";
        }
        if($this-> formato=="convenienza"){
            $this-> formato="EASY";
        }
        return $this-> formato;
    }



}