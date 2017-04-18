<?php

class GoatPen {

	public function getGoat($name){
		$goat = new Goat();
		$goat->setName($name);
		$goat->setReference('1234567890');
		$goat->load();
	}

	public function addGoat($name, $reference){
		$goat = new Goat();
		$goat->setName($name);
		$goat->setReference($reference);
		return $goat;
	}
	
};