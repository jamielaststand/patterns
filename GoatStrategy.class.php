<?php
/**
 * Class GoatStrategy
 * @extends StrategyInterface
 * @copyright Jamie Greenway
 */
class GoatStrategy implements StrategyInterface {
	/**
	 * Get the report
	 * @param $report string
	 * @return int
	 */
	public function getReport($report) {
		switch ($report){
		case "good goat":
			$report = BookOfThings::KREPORT_GOOD;
			break;
		case "naughty goat":
			$report = BookOfThings::KREPORT_BAD;
			break;
		}

		return $report;
	}

}