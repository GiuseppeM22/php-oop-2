<?php 

trait Store{
    public $indirizzo;

    public function getIndirizzo() {
		return $this->indirizzo;
	}

	public function setIndirizzo($via, $citta) {
		$this->indirizzo = "$via $citta";
        if($via == '' || $citta == ''){
            throw new Exception ("La via non è impostata");
        }

	}
}

?>