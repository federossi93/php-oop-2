<?php

class Cane extends Prodotto{
    public $icona;
    public $categoria;
    //fai un trait per icona e categoria

    public function __construct(String $img, String $nome, String $prezzo ,String $icona, String $categoria) {
        parent::__construct($img, $nome, $prezzo);
        $this->icona = $icona;
        $this->categoria = $categoria;
        //fai dei metodi per leggere o scrivere le tue proprietà
    }
}