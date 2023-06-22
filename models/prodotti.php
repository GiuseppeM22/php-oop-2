<?php 
require_once __DIR__ . "/../traits/store.php";
class Prodotto{
    public $nome;
    public $immagine;
    public $prezzo;
    public $categorie;

    use Store;

    public function __construct($nome, $immagine, $prezzo, array $categorie)
    {
        $this->nome = $nome;
        $this->immagine = $immagine;
        $this->prezzo = $prezzo;
        $this->categorie = $categorie;

    }
}

?>