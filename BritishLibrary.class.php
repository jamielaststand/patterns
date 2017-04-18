<?php

class BritishLibrary {

	public function getBook ($isbn){
		return new Book ('Harry Potter and the Cursed publishing deal', 'JK Rowling', 100, $isbn);
	}
	
}