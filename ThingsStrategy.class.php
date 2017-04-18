<?php

/**
 * Class ThingsStrategy
 * @copyright Jamie Greenway
 */
class ThingsStrategy {
	// Class properties
	private $strategy = null;
	private $report = '';

	/**
	 * ThingsStrategy constructor.
	 * @param $factoryClass factoryClass
	 * @param $data array
	 */
	public function __construct($factoryClass, $data) {
		// Set the properties from data array
		$this->report = trim($data[1]);

		//Get an instance of the strategy class
		$this->strategy = $factoryClass->makeStrategy();
	}

	/**
	 * Get the report
	 * @return int|string
	 */
	public function getReport() {
		return $this->strategy->getReport($this->report);
	}
}