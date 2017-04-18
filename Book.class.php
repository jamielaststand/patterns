<?php

class Book extends Thing {

	protected $title = '';
	protected $author = '';
	protected $pages = 0;
	protected $isbn = '';
	
	function __construct ($title, $author, $pages, $isbn){
		$this->title = $title;
		$this->author = $author;
		$this->pages = $pages;
		$this->reference = $this->isbn = $isbn;
	}
	
	public function author(){
		return $this->author;
	}
	
	public function title(){
		return $this->title;
	}
	
	public function isbn(){
		return $this->isbn;
	}
	
	public function pages(){
		return $this->pages;
	}
	
}