<?php 

class Prodotto{
    public $nome;
    public $prezzo;
    public $categorie;

    public function __construct($nome, $prezzo, array $categorie)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categorie = $categorie;

    }
}

?>