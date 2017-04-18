<?php
/**
 * Class OtherAdapter
 * @implements AdapterInterface
 * @copyright Jamie Greenway
 */
class OtherAdapter implements AdapterInterface {
	// Class properties
	private $name = '';
	private $ref = '';

	/**
	 * OtherAdapter constructor.
	 * @param $data array
	 * @param $bot BookOfThings
	 * @param $thingsFactory factory class
	 */
	public function __construct($data, $bot, $thingsFactory) {
		$this->name = trim($data[0]);
		$this->ref = trim($data[1]);
	}

	/**
	 * Gets the name
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets the Reference
	 * @return string
	 */
	public function getReference() {
		return $this->ref;
	}
}