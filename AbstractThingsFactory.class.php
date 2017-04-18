<?php
/**
 * Class AbstractThingsFactory
 * @copyright Jamie Greenway
 */
abstract class AbstractThingsFactory {

	/**
	 * Gets instance of Strategy
	 * @return Strategy class
	 */
	abstract function makeStrategy();

	/**
	 * Gets instance of Adapter
	 * @param $data array
	 * @param $bot BookOfThings
	 * @return adapter class
	 */
	abstract function makeAdapter($data, $bot, $thingsFactory);

}