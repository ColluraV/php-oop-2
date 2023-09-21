<?php
       require_once __DIR__."/Cani.php";
       require_once __DIR__."/Gatti.php";
       require_once __DIR__."/Cibo.php";
       require_once __DIR__."/Attrezzatura.php";
       require_once __DIR__."/Gioco.php";

    try {

    $cane = new Cani();
    $gatto = new Gatti();

    }catch(Exception $e){
        echo $e->getMessage();
    }



$rawProductList = [
    new Cibo(
        name : "Rocco Sticks",
        category:$cane->getIcon(),
        price:"6.50€",
        description:"Stick da masticare",
        thumb: "./imgs/rocco_sticks.jpg",
        formato: "grande",

    ),
    new Cibo(
        name : "Rocco Cibo in Scatola",
        category:$cane->getIcon(),
        price:"10.99€",
        description:"Cibo per cani con gengive sensibili",
        thumb: "./imgs/rocco_sensitive.jpg",
        formato: "medio",

    ),
    
    new Cibo(
        name : "Smilla Cibo in Scatola",
        category:$gatto->getIcon(),
        price:"8.99€",
        description:"cibo per gatti in scatola",
        thumb: "./imgs/smilla_scatola.jpg",
        formato: "convenienza",

    ),
    new Cibo(
        name : "Purizon Crocchette",
        category:$gatto->getIcon(),
        price:"51.99€",
        description:"cibo per gatti in formato secco",
        thumb: "./imgs/purizon_cat.jpg",
        formato:  "medio",

    ),
    new Attrezzatura(
        name : "Museruola",
        category:$cane->getIcon(),
        price:"17.00€",
        description:"guinzaglio per cani",
        thumb: "./imgs/museruola.jpg",
        formato: "convenienza",

    ),
    new Attrezzatura(
        name : "Tiragraffi",
        category:$gatto->getIcon(),
        price:"99.99€",
        description:"tiragraffi Banana Gatti",
        thumb: "./imgs/tiragraffi.jpg",
        formato: "convenienza",

    ),
    new Gioco(
        name : "Peluche per Gatti",
        category:$gatto->getIcon(),
        price:"4.99€",
        description:"Topini dio peluche Trixie",
        thumb: "./imgs/peluche_topo.jpg",
        material: "50% cotone, 50% poliestere",
        formato: "grande",

    
    ),
    new Gioco(
        name : "Pollo di Gomma",
        category:$cane->getIcon(),        
        price:"10.99€",
        description:"Squezing pollo di gomma",
        thumb: "./imgs/pollo_gomma.jpg",
        material: "50% cotone, 50% poliestere",
        formato: "grande",


    ),
   
    ];
