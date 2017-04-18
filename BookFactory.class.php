<?php

/**
 * Class BookFactory
 * @copyright Jamie Greenway
 */
class BookFactory Extends AbstractThingsFactory {

	/**
	 * Get instance of BookStrategy class
	 * @return BookStrategy
	 */
	function makeStrategy() {
		return new BookStrategy();
	}

	/**
	 * Get instance of BookAdapter class
	 * @param $data array
	 * @param $bot BookOfThings
	 * @param $thingsFactory factory class
	 * @return BookAdapter
	 */
	function makeAdapter($data, $bot, $thingsFactory) {
		return new BookAdapter($data, $bot, $thingsFactory);
	}

	/**
	 * Gets instance of BritishLibrary
	 * @return BritishLibrary
	 */
	function makeBritishLibrary(){
		return new BritishLibrary();
	}

	/**
	 * Gets instance of SowerbyBridgeLibrary
	 * @return SowerbyBridgeLibrary
	 */
	function MakeSowerbyBridgeLibrary(){
		return new SowerbyBridgeLibrary();
	}
}