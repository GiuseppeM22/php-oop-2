<?php 

trait Store{
    public $indirizzo;

    public function getIndirizzo() {
		return $this->indirizzo;
	}

	public function setIndirizzo($via, $citta) {
		$this->indirizzo = "$via $citta";
	}
}

?>