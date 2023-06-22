<?php 

trait Store{
    public $indirizzo;

    public function getIndirizzo() {
        if(is_null($this->indirizzo)){
            throw new Exception ("La via non è impostata");
        }
		return $this->indirizzo;
	}

	public function setIndirizzo($via, $citta) {
		$this->indirizzo = "$via $citta";
       

	}
}

?>