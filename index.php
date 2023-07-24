<?php
require_once 'categories.php';
require_once 'products.php';

// Istanzio tutte le categorie
$categorie = getCategories();

// Istanzio tutti i prodotti
$prodotti = getProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP LINK -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous'/>
    <title>Shop Online per Animali</title>
</head>
<body>
<div class="container">
        <h1>Shop Online per Animali</h1>
        <div class="row">
            <?php
            foreach ($prodotti as $prodotto) : 
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo $prodotto->immagineUrl; ?>" class="card-img-top" alt="<?php echo $prodotto->nome; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotto->nome; ?></h5>
                            <p class="card-text"><?php echo $prodotto->categoria->nome; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>