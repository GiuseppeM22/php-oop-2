<?php 
require __DIR__ . "/models/prodotti.php";
require __DIR__ . "/models/cibo.php";
require __DIR__ . "/models/cuccia.php";
require __DIR__ . "/models/gioco.php";
require __DIR__ . "/models/categoria.php";

$collare = new Prodotto ('colllare', 12, ['cane', 'gatti']);
$lettiera = new Prodotto ('lettiera', 50, ['gatti']);
$croccantini = new Prodotto ('croccantini', 10, ['cani', 'gatti']);
$osso = new Prodotto ('osso', 5, ['cani']);
$spazzola = new Prodotto ('spazzola', 5, ['gatti', 'cani']);

$prodotti = [$collare, $lettiera, $croccantini, $osso, $spazzola];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce</title>
</head>
<body>
        <?php foreach($prodotti as $prodotto){ ?>
            <h1>prodotto: <?php echo $prodotto->nome?></h1>
            <h2>prezzo: <?php echo $prodotto->prezzo . ' €' ?></h2>
            <h2>categoria:</h2>
            <?php foreach($prodotto->categorie as $categoria){ ?>
                <li><?php echo $categoria ?></li>
            <?php }?>    
        <?php } ?>
 
</body>
</html>