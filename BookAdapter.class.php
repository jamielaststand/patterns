<?php
/**
 * Class BookAdapter
 * @implements AdapterInterface
 * @copyright Jamie Greenway
 */
class BookAdapter implements AdapterInterface {
	//Class properties
	private $book = null;
	private $title = '';
	private $auther = '';
	private $isbn = '';

	// Class constants
	const KUNKNOWNBOOK = 'unknown book';

	/**
	 * BookAdapter constructor.
	 * @param $data array
	 * @param  $bot BookOfThings
	 * @param  $thingsFactory factory class
	 */
	public function __construct($data, $bot, $thingsFactory) {
		// Set class properties
		$this->title = trim($data[0]);
		$this->auther = trim($data[1]);
		$this->isbn = trim($data[2]);

		// Check if the book is in the local Library
		$this->book = $thingsFactory->MakeSowerbyBridgeLibrary()->getBook($this->title, $this->auther);

		if (!$this->book instanceof Book){                                                                                              // Else get the book from the British library
			$this->book = $thingsFactory->makeBritishLibrary()->getBook($this->isbn);
		}
	}

	/**
	 * Get the name
	 * @return string
	 */
	public function getName() {
		return $this->title;
	}

	/**
	 * Get the reference
	 * @return string
	 */
	public function getReference() {
		if ($this->book  instanceof Book){
			return $this->book->reference();
		} else {
			return self::KUNKNOWNBOOK;
		}
	}
}