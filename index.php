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

$coccoleCuccia = new Cane('icona', 'cuccia');
$coccoleCuccia->img = 'https://m.media-amazon.com/images/I/5149DWJnytL._AC_SY355_.jpg';
$coccoleCuccia->nome = 'Sogni e Capricci Coccole-Cuccia';
$coccoleCuccia->prezzo ='24$';
var_dump($coccoleCuccia);

class Gatto extends Prodotto{
    public $icona;
    public $categoria;

    public function __construct(String $icona, String $categoria) {
        $this->icona = $icona;
        $this->categoria = $categoria;

    }
}

$shebaFilets = new Gatto('icona', 'cibo');
$shebaFilets->img = 'https://m.media-amazon.com/images/I/71AkPaJJW+L._AC_SL1500_.jpg';
$shebaFilets->nome = 'Sheba Filets';
$shebaFilets->prezzo = '37$';
var_dump($shebaFilets);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="<?php echo  $shebaFilets->img ?>" alt="">
                    <p>Nome: <?php echo $shebaFilets->nome ?> </p>
                    <p>Prezzo: <?php echo $shebaFilets->prezzo ?> </p>
                    <img src="<?php echo  $shebaFilets->icona ?>" alt="">
                    <p>Categoria: <?php echo $shebaFilets->categoria ?> </p>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <img src="<?php echo  $coccoleCuccia->img ?>" alt="">
                    <p>Nome: <?php echo $coccoleCuccia->nome ?> </p>
                    <p>Prezzo: <?php echo $coccoleCuccia->prezzo ?> </p>
                    <img src="<?php echo  $coccoleCuccia->icona ?>" alt="">
                    <p>Categoria: <?php echo $coccoleCuccia->categoria ?> </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>