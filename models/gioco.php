<?php 

class Gioco extends Prodotto{
    public $resistenza;

      public function __construct($nome, $immagine, $prezzo, array $categorie, $resistenza)
   {
        $this->nome = $nome;
        $this->immagine = $immagine;
        $this->prezzo = $prezzo;
        $this->categorie = $categorie;
        $this->resistenza = $resistenza;
   }
}

?>