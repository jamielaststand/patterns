<?php

/**
 * Class BookOfThingsFacade
 * @copyright Jamie Greenway
 */
class BookOfThingsFacade {
	//Constant for storing the book of things CSV
	const KBLACKBOOKCSV = "blackbook.txt";

	/**
	 * Instructions
	 * To create a new category you will need to create a factory which be used to load all category classes
	 * A Adapter class - which controls the data manipulation for category
	 * A Strategy class - which controls the report type to use
	 * a constant - which stores the name of the category.
	 */

	//Category constants - Is the name of the factory class which encapsulates all the classes for the categories
	const KTYPEGOAT = 'GoatFactory';
	const KTYPEPERSON = 'PersonFactory';
	const KTYPEBOOK = 'BookFactory';
	const KTYPEOTHER = 'OtherFactory';

	/**
	 * Function for loading and parsing the book of things
	 * @return BookOfThings
	 */
	static function LoadBot() {
		$thingsFactory = new ThingsFactory();
		$bot = $thingsFactory->makeBookOfThings();																			// Get an instance of book of things

		$file = fopen(self::KBLACKBOOKCSV, "r");																			// Open the File
		while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {																// Iterate through the objects in the CSV
			$fieldCount = count($data);
			$name = trim($data[0]);
			$factory = null;																								// This will be over written by the category factory class name if exists
-
			if($factory) {																									// If we have a factory class load the strategy and adapter
				$strategyClass = $thingsFactory->makeStrategy($factory, $data);												// Load a strategy class for each row to handle the parsing of the data
				$adapterClass = $thingsFactory->makeAdapter($factory, $data, $bot);											// Load a adapter class for each row to handle the conversion of the data
				if($strategyClass && $adapterClass) {																		// Unsupported Category
					$bot->addReport($adapterClass->getName(), $adapterClass->getReference(), $strategyClass->getReport());	// Add an entry to the book of things
				}																											// This can be expanded to report unsupported categories
			}																												// This can be expanded to report unsupported categories
		}
		fclose($file); 																										// Close the file

		return $bot;																										// Return the book of things
	}
}