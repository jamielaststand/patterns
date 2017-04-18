<?php

class Person extends Mammal {

	public function load() {
		$this->reference = $this->getNINumber();
		return true;
	}
	
	public function save() {
		return true;
	}
	
	public function getNINumber(){
		return "AB123405C";
	}
}