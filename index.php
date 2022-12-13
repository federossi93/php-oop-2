<?php

require_once __DIR__ . '../Models/Prodotto.php';
require_once __DIR__ . '../Models/Cane.php';
require_once __DIR__ . '../Models/Gatto.php';
require_once __DIR__ . '../Trait/Categoria.php';



$coccoleCuccia = new Cane('https://m.media-amazon.com/images/I/5149DWJnytL._AC_SY355_.jpg','Sogni e Capricci Coccole-Cuccia', '24$',  '<i class="fa-solid fa-dog"></i>', 'cuccia');

var_dump($coccoleCuccia);

$shebaFilets = new Gatto('https://m.media-amazon.com/images/I/71AkPaJJW+L._AC_SL1500_.jpg','Sheba Filets','37$', '<i class="fa-solid fa-cat"></i>', 'cibo');

var_dump($shebaFilets);

$pesceGiocattolo = new Gatto('https://m.media-amazon.com/images/I/61z3PL6eB2L._AC_SL1200_.jpg','Pesce Giocattolo','13$', '<i class="fa-solid fa-cat"></i>', 'giocattolo');

var_dump($pesceGiocattolo);


$cardPodotti =[
    $coccoleCuccia,
    $shebaFilets,
    $pesceGiocattolo,
];

var_dump($cardPodotti);

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach($cardPodotti as $value){ ?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo  $value->img ?>" alt="">
                    <div class="card-body">
                        <p>Nome: <?php echo $value->nome ?> </p>
                        <p>Prezzo: <?php echo $value->prezzo ?> </p>
                        <p><?php echo  $value->icona ?></p>
                        <p>Categoria: <?php echo $value->categoria ?> </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>