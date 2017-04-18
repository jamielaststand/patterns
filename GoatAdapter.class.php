<?php

/**
 * Class GoatAdapter
 * @implements AdapterInterface
 * @copyright Jamie Greenway
 */
class GoatAdapter implements AdapterInterface {
	protected $goat = null;

	/**
	 * GoatAdapter constructor.
	 * @param $data array
	 * @param $bot BookOfThings
	 * @param $thingsFactory factory class
	 */
	public function __construct($data, $bot, $thingsFactory) {
		$goatPen = $thingsFactory->makeGoatPen();
		$name = trim($data[0]);
		$name = substr($name, 0, strlen($name) - 5);
		$this->goat = $goatPen->getGoat($name);
		if($this->goat == null) {
			$this->goat = $goatPen->addGoat($name, $bot->getNewReference());
		}
	}

	/**
	 * Gets the name
	 * @return string
	 */
	public function getName() {
		return $this->goat->name();
	}

	/**
	 * Gets the reference
	 * @return string
	 */
	public function getReference() {
		return $this->goat->reference();
	}
}