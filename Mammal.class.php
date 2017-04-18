<?php
class Mammal extends Thing{

	protected $name = '';
	
	public function setName($name){
		$this->name = $name;
	}

	public function name(){
		return $this->name;
	}	

	public function load() {
		return true;
	}
	
}