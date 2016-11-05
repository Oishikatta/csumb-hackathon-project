<?php

class userGenerator {
	public static function getName() {
		$names = array('Corey', 'Mac', 'Melissa', 'Serhii');
		return $names[array_rand($names)];
	}

	public static function getGender() {
		$genders = array("Female", "Male");
		return $genders[array_rand($genders)];
	}

	public static function getLuck() {
		$luck = mt_rand(1, 1000);

		if ( $luck >= 999 ) {
			$luck = 10;
		} else if ( $luck >= 950 ) {
			$luck = 9;
		} else if ( $luck >= 900 ) {
			$luck = 8;
		} else if ( $luck >= 850 ) {
			$luck = 7;
		} else if ( $luck >= 800 ) {
			$luck = 6;
		} else if ( $luck >= 500 ) {
			$luck = 5;
		} else {
			$luck = 1;
		}

		return $luck;
	}

	public static function getCity() {
		return "San Francisco";
	}

	public static function getState() {
		return "California";
	}

	public static function getCitytype() {
		return "Large";
	}

	public static function getDifficulty() {
		//$difficulties = array('Easy', 'Medium', 'Hard');
		//return $difficulties[array_rand($difficulties)];
		return 'Medium';
	}

	public static function getMoney($difficulty = false) {
		if ( !$difficulty ) {
			return 250;
		} else {
			switch ($difficulty) {
				case 'Easy':
					return 5000;
					break;
				case 'Medium':
					return 500;
					break;
				case 'Hard':
					return 0;
					break;
			}
		}
	}
}
