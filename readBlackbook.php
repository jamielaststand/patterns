<?php

	spl_autoload_register(function ($class) {
		$fname = $class . '.class.php';
		if (file_exists($fname)){
			include $fname;
		} else {
			echo "Cant find $class";
		}
	});

	/**
	 * Load the book of things using the facade
	 */
	$bot = BookOfThingsFacade::LoadBot();

	echo $bot->getReport();