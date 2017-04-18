<?php

/**
 * Class PersonStrategy
 * @extends StrategyInterface
 * @copyright Jamie Greenway
 */
class PersonStrategy implements StrategyInterface{

	/**
	 * Gets the report
	 * @param $report string
	 * @return int
	 */
	public function getReport($report) {
		switch ($report){
		case "good":
			$report = BookOfThings::KREPORT_GOOD;
			break;
		case "bad":
			$report = BookOfThings::KREPORT_BAD;
			break;
		}
		return $report;
	}

}