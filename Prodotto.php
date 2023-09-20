<?php 

$rawProductList = [
    [
        'name' => 'Rocco Sticks',
        'category'=> 'cibo',
        'animal_type'=> 'cani',
        'price'=>'6.50€',
        'description'=>'Stick da masticare',
        'thumb'=> './imgs/rocco_sticks.jpg'
    ],
    [
        'name' => 'Rocco Cibo in Scatola',
        'category'=> 'cibo',
        'animal_type'=> 'cani',
        'price'=>'10.99€',
        'description'=>'Cibo per cani con gengive sensibili',
        'thumb'=> './imgs/rocco_sensitive.jpg'
    ],
    [
        'name' => 'Smilla Cibo in Scatola',
        'category'=> 'cibo',
        'animal_type'=> 'gatti',
        'price'=>'8.99€',
        'description'=>'cibo per gatti in scatola',
        'thumb'=> './imgs/smilla_scatola.jpg'
    ],
    [
        'name' => 'Purizon Crocchette',
        'category'=> 'cibo',
        'animal_type'=> 'gatti',
        'price'=>'51.99€',
        'description'=>'cibo per gatti in formato secco',
        'thumb'=> './imgs/purizon_cat.jpg'
    ],
    [
        'name' => 'Museruola',
        'category'=> 'attrezzatura','cani',
        'animal_type'=> 'cani',
        'price'=>'17.00€',
        'description'=>'guinzaglio per cani',
        'thumb'=> './imgs/museruola.jpg'
    ],
    [
        'name' => 'Tiragraffi',
        'category'=> 'attrezzatura',
        'animal_type'=> 'gatti',
        'price'=>'99.99€',
        'description'=>'tiragraffi Banana Gatti',
        'thumb'=> './imgs/tiragraffi.jpg'
    ],
    [
        'name' => 'Peluche per Gatti',
        'category'=> 'gioco',
        'animal_type'=> 'gatti',
        'price'=>'4.99€',
        'description'=>'Topini dio peluche Trixie',
        'thumb'=> './imgs/peluche_topo.jpg'
    ],
    [
        'name' => 'Pollo di Gomma',
        'category'=> 'gioco',
        'animal_type'=> 'cani',
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
    public $immagine;
    public $sfondo;


    function __construct( string $name, string $thumb ,string $category, string $description, string $price ){

        $this->nome = $name;
        $this->categoria = $category;
        $this ->prezzo = $price;
        $this->descrizione = $description;
        $this->immagine = $thumb;

    
    }
    public function printHTMLCard() {
        ?>
            <div class="text-center py-3 col-5 mx-auto" style="background-image: url(<?php echo  $this->sfondo ?>);">
              <h2><?php echo  $this->nome ?></h2>
              <p><?php echo  $this->categoria ?></p>
              <ul>
                <li class="list-group-item"><img src="<?php echo  $this->immagine ?>" alt=""></li>
                <li class="list-group-item"> <?php echo  $this->descrizione ?></li>
                <li class="list-group-item">prezzo : <?php echo $this->prezzo?></li>
              </ul>
            </div>
          <?php
          }
}
