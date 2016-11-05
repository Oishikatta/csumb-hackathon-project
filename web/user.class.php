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

class Node {
	public var $id;
	public var $name;
	public var $template;
	public var $children = array();

	public function Node($properties) {
		foreach($properties as $key => $value) {
			$this->key = $value;
		}
	}

	public function setId($id) {
		$this->id = $id;
		return this;
	}

	public function setTemplate($template) {
		$this->template = $template;
		return this;
	}

	public function addChild($childNode) {
		array_push($this->children, $childNode);
		return this;
	}
}

function buildTree() {

	// First node has two children -- Get Job or Go to College
	var $nodeProperties = array(
		"id" => 0,
		"name" => "Job or College",
		"template" => "job_or_college.twig"
	);

	var $startNode = new Node($nodeProperties);

	$nodeProperties = array(
		"id"		=> 1,
		"name"		=> "Get a Job",
		"template"	=> "choose_job.twig"
	);

	$startNode->addChild($nodeProperties);

}

