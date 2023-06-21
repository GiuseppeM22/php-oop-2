<?php 

class Prodotto{
    public $nome;
    public $immagine;
    public $prezzo;
    public $categorie;

    public function __construct($nome, $immagine, $prezzo, array $categorie)
    {
        $this->nome = $nome;
        $this->immagine = $immagine;
        $this->prezzo = $prezzo;
        $this->categorie = $categorie;

    }
}

?>