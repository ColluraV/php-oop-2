<?php 
include __DIR__ . '/Categoria.php';

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
            <div class="text-center py-3 col-5 mx-auto" style="background-image: url(./.<?php echo  $this->sfondo ?>);">
              <h2><?php echo  $this->nome ?></h2>
              <p><?php echo  $this->categoria ?></p>
              <ul>
                <li class="list-group-item"><img src="./.<?php echo  $this->immagine ?>" alt=""></li>
                <li class="list-group-item"> <?php echo  $this->descrizione ?></li>
                <li class="list-group-item">prezzo : <?php echo $this->prezzo?></li>
              </ul>
            </div>
          <?php
          }
}
