<?php

class Prodotto{

    public $img;
    public $nome;
    public $prezzo;

    public function __construct(String $img, String $nome, String $prezzo) {
        $this->img = $img;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }
}

class Cane extends Prodotto{
    public $icona;
    public $categoria;

    public function __construct(String $icona, String $categoria) {
        $this->icona = $icona;
        $this->categoria = $categoria;

    }
}

class Gatto extends Prodotto{
    public $icona;
    public $categoria;

    public function __construct(String $icona, String $categoria) {
        $this->icona = $icona;
        $this->categoria = $categoria;

    }
}


$coccoleCuccia = new Cane('<i class="fa-solid fa-dog"></i>', 'cuccia');
$coccoleCuccia->img = 'https://m.media-amazon.com/images/I/5149DWJnytL._AC_SY355_.jpg';
$coccoleCuccia->nome = 'Sogni e Capricci Coccole-Cuccia';
$coccoleCuccia->prezzo ='24$';
var_dump($coccoleCuccia);

$shebaFilets = new Gatto('<i class="fa-solid fa-cat"></i>', 'cibo');
$shebaFilets->img = 'https://m.media-amazon.com/images/I/71AkPaJJW+L._AC_SL1500_.jpg';
$shebaFilets->nome = 'Sheba Filets';
$shebaFilets->prezzo = '37$';
var_dump($shebaFilets);

$pesceGiocattolo = new Gatto('<i class="fa-solid fa-cat"></i>', 'giocattolo');
$pesceGiocattolo->img = 'https://m.media-amazon.com/images/I/61z3PL6eB2L._AC_SL1200_.jpg';
$pesceGiocattolo->nome = 'Pesce Giocattolo';
$pesceGiocattolo->prezzo = '13$';
var_dump($pesceGiocattolo);

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
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo  $shebaFilets->img ?>" alt="">
                    <div class="card-body">
                        <p>Nome: <?php echo $shebaFilets->nome ?> </p>
                        <p>Prezzo: <?php echo $shebaFilets->prezzo ?> </p>
                        <p><?php echo  $shebaFilets->icona ?></p>
                        <p>Categoria: <?php echo $shebaFilets->categoria ?> </p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo  $coccoleCuccia->img ?>" alt="">
                    <div class="card-body">
                        <p>Nome: <?php echo $coccoleCuccia->nome ?> </p>
                        <p>Prezzo: <?php echo $coccoleCuccia->prezzo ?> </p>
                        <p><?php echo  $coccoleCuccia->icona ?></p>
                        <p>Categoria: <?php echo $coccoleCuccia->categoria ?> </p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo  $pesceGiocattolo->img ?>" alt="">
                    <div class="card-body">
                        <p>Nome: <?php echo $pesceGiocattolo->nome ?> </p>
                        <p>Prezzo: <?php echo $pesceGiocattolo->prezzo ?> </p>
                        <p><?php echo  $shebaFilets->icona ?></p>
                        <p>Categoria: <?php echo $pesceGiocattolo->categoria ?> </p>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>