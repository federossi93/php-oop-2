<?php

require_once __DIR__ . '../../Trait/Categoria.php';



class Gatto extends Prodotto{
    use Categoria;

    public function __construct(String $img, String $nome, String $prezzo ,String $icona, String $categoria) {
        parent::__construct($img, $nome, $prezzo);
        //fai dei metodi per leggere o scrivere le tue proprietà
    }
}