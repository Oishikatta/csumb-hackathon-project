<?php

class User {
	var $name;
	var $gender;
	var $luck;
	var $city;
	var $state;
	var $cityType; // Small/Medium/Large
	var $difficulty; // Easy/Medium/Hard?

	var $money;

	function User ($properties) {
		foreach ($properties as $key => $value) {
			$this->$key = $value;
		}
	}

	function getArray() {
		return array(
			"name"		=> $this->name,
			"gender"	=> $this->gender,
			"luck"		=> $this->luck,
			"city"		=> $this->city,
			"state"		=> $this->state,
			"cityType"	=> $this->cityType,
			"difficulty"=> $this->difficulty,
			"money"		=> $this->money
		);
	}
}
