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

class Cani extends Prodotto{
    public $icona;
    public $categoria;

    public function __construct(String $icona, String $categoria) {
        $this->icona = $icona;
        $this->categoria = $categoria;

    }
}

$coccoleCuccia = new Cani('https://www.google.com/search?q=icona+cane&rlz=1C1VDKB_itIT1012IT1012&sxsrf=ALiCzsa21R8X-pCio5ByKRZXm5Ji9bmM4A:1670854836254&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjHkvGno_T7AhVFYPEDHTUmBQAQ_AUoAXoECAEQAw&biw=1005&bih=1163&dpr=1.1#imgrc=ZrRMzuq2YHyhsM',
'cuccia');
$coccoleCuccia->img = 'https://m.media-amazon.com/images/I/5149DWJnytL._AC_SY355_.jpg';
$coccoleCuccia->nome = 'Sogni e Capricci Coccole-Cuccia';
$coccoleCuccia->prezzo ='24$';
var_dump($coccoleCuccia);

class Gatti{

}