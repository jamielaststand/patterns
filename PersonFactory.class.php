<?php

/**
 * Class PersonFactory
 * @copyright Jamie Greenway
 */
class PersonFactory Extends AbstractThingsFactory {

	/**
	 * Get instance of PersonStrategy class
	 * @return PersonStrategy
	 */
	function makeStrategy() {
		return new PersonStrategy();
	}

	/**
	 * Get instance of PersonAdapter class
	 * @param $data array
	 * @param $bot BookOfThings
	 * @param $thingsFactory factory class
	 * @return PersonAdapter
	 */
	function makeAdapter($data, $bot, $thingsFactory) {
		return new PersonAdapter($data, $bot, $thingsFactory);
	}

	/**
	 * Get instance of Person class
	 * @return Person
	 */
	function makePerson() {
		return new Person();
	}

}