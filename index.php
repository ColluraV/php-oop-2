<?php
require_once __DIR__ . './Prodotto.php';
require_once __DIR__ . './Gioco.php';
require_once __DIR__ . './db.php';
require_once __DIR__ . './Cani.php';
require_once __DIR__ . './Gatti.php';
require_once __DIR__ . './Attrezzatura.php';
require_once __DIR__ . './Categoria.php';






?>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>petshop</title>

    <link rel="stylesheet" href="">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
     
<main>
        <div class="container mt-5 pb-5">
            <div class="row row-cols-4 g-3">
                <?php foreach ($rawProductList as $product) { ?>
                    <div class="col text-center">
                        <div class="card h-100 rounded-4">
                            <img src="<?php echo $product->img ?>" class="card-img-top rounded-4">
                            <div class="card-body d-flex flex-column">
                                <h2><?php echo $product-> nome ?></h2>
                                <h5 class="card-title mt-3"><?php echo $product-> descrizione ?> <?php echo $product-> categoria ?> </h5>
                                <p class="card-text mt-auto"> <strong>Prezzo: </strong> <?php echo $product-> prezzo ?> </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </main>

    <script src=""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>