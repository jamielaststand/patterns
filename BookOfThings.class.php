<?php

class BookOfThings {
	const KREPORT_GOOD = 1;
	const KREPORT_BAD = -1;
	
	protected $data = array();
	
	public function addReport($name, $reference, $report){
		$this->data[] = array('name'=>$name, 'reference' => $reference, 'report' => $report);
	}

	public function getNewReference () {
		return rand();
	}
	
	public function markDeceased ($reference){
	
	}
	
	public function getReport(){
		//return $this->data;
		return "Service unavailable pending technical upgrade";
	}
	
};