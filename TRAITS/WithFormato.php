<?php 
trait WithFormato{
    public static $Grande = "grande";
    public static $Medio = "medio";
    public static $Convenienza = "convenienza";

    protected $formato;

    public function setFormato($formato){
        $this->formato= $formato;
    }

    public function getFormato(){
        return $this-> formato;
    }

}