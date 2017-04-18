<?php

class SowerbyBridgeLibrary {

	public function getBook ($title, $author){
		return new Book ($title, $author, 100, 'xyz');
	}
	
}