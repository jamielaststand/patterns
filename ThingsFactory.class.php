<?php

/**
 * Class ThingsFactory
 * @copyright Jamie Greenway
 */
class ThingsFactory {

	/**
	 * Get instance of ThingsStrategy class
	 * @param $factoryClass factoryClass
	 * @param $data array
	 * @return ThingsStrategy
	 */
	function makeStrategy($factoryClass, $data) {
		return new ThingsStrategy($factoryClass, $data);
	}

	/**
	 * Get instance of ThingsAdapter class
	 * @param $factoryClass factoryClass
	 * @param $data array
	 * @param $bot BookOfThings
	 * @return ThingsAdapter
	 */
	function makeAdapter($factoryClass, $data, $bot) {
		return new ThingsAdapter($factoryClass, $data, $bot);
	}

	/**
	 * Gets instance of categoryFactory
	 * @param $category string
	 * @return categoryFactory
	 */
	function makeCategoryFactory($category){
		return new $category();
	}

	/**
	 * Gets instance of BookOfThings
	 * @return BookOfThings
	 */
	function makeBookOfThings(){
		return new BookOfThings();
	}
}