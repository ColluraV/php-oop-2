<?php
    require_once __DIR__."/Categoria.php";
    require_once __DIR__."/TRAITS/WithFormato.php";



class Prodotto
{
    use WithFormato;
    
    public $nome;
    public $categoria;
    public $prezzo;
    public $descrizione;
    public $immagine;
    public $sfondo;

    public function __construct( string $name, string $thumb ,string $category, string $description, string $price, $formato )
    {
        $this->nome = $name;
        $this->categoria = $category;
        $this ->prezzo = $price;
        $this->descrizione = $description;
        $this->immagine = $thumb;
        $this->formato = $formato;


    }


}
?>