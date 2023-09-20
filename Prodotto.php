<?php 

$rawProductList = [
    [
        'nome' => 'Rocco Sticks',
        'category'=> ['cibo','cani'],
        'price'=>'6.50€',
        'description'=>'Stick da masticare',
        'thumb'=> './imgs/rocco_sticks.jpg'
    ],
    [
        'nome' => 'Rocco Cibo in Scatola',
        'category'=> ['cibo','cani'],
        'price'=>'10.99€',
        'description'=>'Cibo per gengive sensibili',
        'thumb'=> './imgs/rocco_sensitive.jpg'
    ],
    [
        'nome' => 'Smilla Cibo in Scatola',
        'category'=> ['cibo','gatti'],
        'price'=>'8.99€',
        'description'=>'cibo per gatti in scatola',
        'thumb'=> './imgs/smilla_scatola.jpg'
    ],
    [
        'nome' => 'Purizon Crocchette',
        'category'=> ['cibo','gatti'],
        'price'=>'51.99€',
        'description'=>'cibo per gatti in formato secco',
        'thumb'=> './imgs/purizon_cat.jpg'
    ],
    [
        'nome' => 'Museruola',
        'category'=> ['attrezzatura','cani'],
        'price'=>'17.00€',
        'description'=>'guinzaglio per cani',
        'thumb'=> './imgs/museruola.jpg'
    ],
    [
        'nome' => 'Tiragraffi',
        'category'=> ['attrezzatura','gatti'],
        'price'=>'99.99€',
        'description'=>'tiragraffi Banana Gatti',
        'thumb'=> './imgs/tiragraffi.jpg'
    ],
    [
        'nome' => 'Peluche per Gatti',
        'category'=> ['gioco','gatti'],
        'price'=>'4.99€',
        'description'=>'Topini dio peluche Trixie',
        'thumb'=> './imgs/peluche_topo.jpg'
    ],
    [
        'nome' => 'Pollo di Gomma',
        'category'=> ['gioco','cani'],
        'price'=>'10.99€',
        'description'=>'Squezing pollo di gomma',
        'thumb'=> './imgs/pollo_gomma.jpg'
    ],
   
    ];

class Prodotto{

    public $nome;
    public $categoria;
    public $prezzo;
    public $descrizione;

    function __construct( string $name, int $category, string $description, string $price ){

        $this->nome = $name;
        $this->categoria = $category;
        $this ->prezzo = $price;
        $this->descrizione = $description;
    
    }

}
