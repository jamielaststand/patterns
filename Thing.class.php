<?php

class Thing {

	private $reference = '';

	public function setReference($reference){
		$this->reference = $reference;
	}

	public function reference(){
		return $this->reference;
	}	
	
};