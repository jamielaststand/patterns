<?php
/**
 * Class BookStrategy
 * @implements StrategyInterface
 * @copyright Jamie Greenway
 */
class BookStrategy implements StrategyInterface {

	/**
	 * Gets the book report
	 * @param $report string
	 * @return int
	 */
	public function getReport($report) {
		switch ($report){
		case "good":
			$report = BookOfThings::KREPORT_GOOD;
			break;
		default:
		case "bad":
			$report = BookOfThings::KREPORT_BAD;
			break;
		}

		return $report;
	}

}