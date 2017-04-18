<?php

/**
 * Class OtherFactory
 * @copyright Jamie Greenway
 */
class OtherFactory Extends AbstractThingsFactory {

	/**
	 * Get instance of OtherStrategy class
	 * @return OtherStrategy
	 */
	function makeStrategy() {
		return new OtherStrategy();
	}

	/**
	 * Get instance of OtherAdapter class
	 * @param $data array
	 * @param $bot BookOfThings
	 * @param $thingsFactory factory class
	 * @return OtherAdapter
	 */
	function makeAdapter($data, $bot, $thingsFactory) {
		return new OtherAdapter($data, $bot, $thingsFactory);
	}
}