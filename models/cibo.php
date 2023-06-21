<?php 

class Cibo extends Prodotto {
   public $scadenza;

   public function __construct($nome, $immagine, $prezzo, array $categorie, $scadenza)
   {
        $this->nome = $nome;
        $this->immagine = $immagine;
        $this->prezzo = $prezzo;
        $this->categorie = $categorie;
        $this->scadenza = $scadenza;
   }
}

?>