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