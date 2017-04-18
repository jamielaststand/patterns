<?php

/**
 * Class GoatFactory
 * @copyright Jamie Greenway
 */
class GoatFactory Extends AbstractThingsFactory {

	/**
	 * Get instance of GoatStrategy class
	 * @return GoatStrategy
	 */
	function makeStrategy() {
		return new GoatStrategy();
	}

	/**
	 * Get instance of GoatAdapter class
	 * @param $data array
	 * @param $bot BookOfThings
	 * @param $thingsFactory factory class
	 * @return GoatAdapter
	 */
	function makeAdapter($data, $bot, $thingsFactory) {
		return new GoatAdapter($data, $bot, $thingsFactory);
	}

	/**
	 * Get instance of GoatPen class
	 * @return GoatPen
	 */
	function makeGoatPen() {
		return new GoatPen();
	}

	/**
	 * Get instance of Goat class
	 * @return Goat
	 */
	function makeOtherStrategy(){
		return new Goat();
	}
}