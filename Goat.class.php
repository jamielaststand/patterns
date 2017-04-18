<?php

class Goat extends Mammal {

	public function load() {
		return true;
	}
	
	public function setName($name){
		$this->name = $name." the Goat";
	}
	
};