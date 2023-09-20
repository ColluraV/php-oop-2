<?php

class Prodotto
{
    
    public $nome;
    public $categoria;
    public $prezzo;
    public $descrizione;
    public $immagine;
    public $sfondo;

    public function __construct( string $name, string $thumb ,string $category, string $description, string $price )
    {
        $this->nome = $name;
        $this->categoria = $category;
        $this ->prezzo = $price;
        $this->descrizione = $description;
        $this->immagine = $thumb;

    }
}


?>