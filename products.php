<?php
require_once 'categories.php';

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

// instanziare i prodotti e restituirli in array
function getProducts() {
    $categorie = getCategories();

    $prodotti = array(
        new Prodotto("Royal Canin Mini Adult", "https://cdn.dogsitter.it/it/images/shop/rc-dog-mini-adult-big.jpg", $categorie[0]),
        new Prodotto("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", $categorie[0]),
        new Prodotto("Almo Nature Cat Daily Lattina", "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", $categorie[1]),
        new Prodotto("Mangime per Pesci Guppy in Fiocchi", "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", $categorie[3]),
        new Prodotto("Voliera Wilma in Legno", "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", $categorie[2]),
        new Prodotto("Cartucce Filtranti per Filtro EasyCrystal", "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", $categorie[3]),
        new Prodotto("Kong Classic", "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", $categorie[0]),
        new Prodotto("Topini di peluche Trixie", "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", $categorie[1]),
    );

    return $prodotti;
}
?>