<?php
require_once __DIR__ 'categories.php';

class Prodotto {
    public $nome;
    public $immagineUrl;
    public $categoria;

    public function __construct($nome, $immagineUrl, Categoria $categoria) {
        $this->nome = $nome;
        $this->immagineUrl = $immagineUrl;
        $this->categoria = $categoria;
    }
}