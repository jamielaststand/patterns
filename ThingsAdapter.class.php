<?php

/**
 * Class ThingsAdapter
 * @copyright Jamie Greenway
 */
class ThingsAdapter {
	// Class properties
	private $adapter = null;

	/**
	 * ThingsStrategy constructor.
	 * @param $factoryClass factoryClass
	 * @param $data array
	 * @param $bot BookOfThings
	 */
	public function __construct($factoryClass, $data, $bot) {
		// Get the adapter class from factory class
		$this->adapter = $factoryClass->makeAdapter($data, $bot, $factoryClass);
	}

	/**
	 * Get the  name
	 * @return string
	 */
	public function getName() {
		return $this->adapter->getName();
	}

	/**
	 * Get the Reference
	 * @return string
	 */
	public function getReference() {
		return $this->adapter->getReference();
	}
}