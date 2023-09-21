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

            try {

                if($this-> formato=="EASY"){
                    throw new Exception('Troppo');
                }
            
                }catch(Exception $e){
                    echo $e->getMessage();
                }

        }
        return $this-> formato;
    }



}