<?php
class Categoria {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

// instanziare le categorie e restituirle in array
function getCategories() {
    $categorie = array(
        new Categoria("Cane"),
        new Categoria("Gatto"),
        new Categoria("Uccelli"),
        new Categoria("Pesci"),
    );

    return $categorie;
}
?>