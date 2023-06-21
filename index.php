<?php 
require __DIR__ . "/models/prodotti.php";
require __DIR__ . "/models/cibo.php";
require __DIR__ . "/models/cuccia.php";
require __DIR__ . "/models/gioco.php";
require __DIR__ . "/models/categoria.php";

$collare = new Prodotto ('colllare', 'https://pawee.it/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-06-at-13.59.57.jpeg', 12, ['cane', 'gatti']);
$lettiera = new Prodotto ('lettiera', 'https://m.media-amazon.com/images/I/71Sr19wTZjL._AC_SX679_.jpg', 50, ['gatti']);
$croccantini = new Cibo ('croccantini', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuFxGC2ghWCTVTvCLEyUv_aeYnIl80mzAZAg&usqp=CAU', 10, ['cani', 'gatti'], '12/2023');
$osso = new Prodotto ('osso', 'https://www.petingros.it/images/ossa_di_bufalo_440/ossa_pelle_di_bufalo.jpg', 5, ['cani']);
$spazzola = new Prodotto ('spazzola', 'https://m.media-amazon.com/images/I/81yGlC8OFpL._AC_UF1000,1000_QL80_.jpg', 5, ['gatti', 'cani']);

$prodotti = [$collare, $lettiera, $croccantini, $osso, $spazzola];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>e-commerce</title>
</head>
<body>
    <div class="big_container">
        <?php foreach($prodotti as $prodotto){ ?>
                <div class="container">
                    <h1><?php echo $prodotto->nome?></h1>
                    <img src="<?= $prodotto->immagine ?>" alt="">
                    <h2>prezzo: <?php echo $prodotto->prezzo . ' €' ?></h2>
                    <h2>categoria:</h2>
                    <?php foreach($prodotto->categorie as $categoria){ ?>
                        <li><?php echo $categoria ?></li>
                    <?php }?> 
                </div>
        <?php } ?>
    </div>
     
 
</body>
</html>