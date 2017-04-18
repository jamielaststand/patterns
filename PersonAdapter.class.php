<?php

/**
 * Class PersonAdapter
 * @implements AdapterInterface
 * @copyright Jamie Greenway
 */
class PersonAdapter implements AdapterInterface{
	// Class properties
	protected $person = null;

	// Class constants
	const KDECEASED = 'deceased';

	/**
	 * PersonAdapter constructor.
	 * @param $data array
	 * @param $bot BookOfThings
	 * @param $thingsFactory factory class
	 */
	public function __construct($data, $bot, $thingsFactory) {
		$name = trim($data[0]);
		$report = trim($data[1]);

		if ($name == "The Foreign Secretary"){
			$name = "Boris Johnson";
		}
		if ($name == "George"){
			$name = "Gideon";
		}

		$person = $thingsFactory->makePerson();
		$person->setName($name);

		if (!$person->load()) {
			$person->setReference($bot->getNewReference());
			$person->save();
		}

		if($report == SELF::KDECEASED) {
			$bot->markDeceased($person->reference());
		}

		$this->person = $person;
	}

	/**
	 * Get the name
	 * @return string
	 */
	public function getName() {
		return $this->person->name();
	}

	/**
	 * Get the reference
	 * @return string
	 */
	public function getReference() {
		return $this->person->reference();
	}
}