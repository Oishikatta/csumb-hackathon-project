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

	private $nodeId;

	function User ($properties) {
		foreach ($properties as $key => $value) {
			$this->$key = $value;
		}

		$this->nodeId = 0;
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

	function setNodeId($nodeId) {
		$this->nodeId = $nodeId;
	}

	function getNodeId() {
		return $this->nodeId;
	}
}

class Node {
	public $id;
	public $name;
	public $template;
	public $children = array();

	public function Node($properties) {
		foreach($properties as $key => $value) {
			$this->$key = $value;
		}
	}

	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	public function setTemplate($template) {
		$this->template = $template;
		return $this;
	}

	public function addChild($childNode) {
		array_push($this->children, $childNode);
		return $this;
	}
}

function findNode($nodeId, $nodeTree) {
	if ( $nodeTree->id == $nodeId ) {
		return $nodeTree;
	}

	foreach ( $nodeTree->children as $node ) {
		return findNode($nodeId, $node);
	}
}

function buildNodeTree() {
	$nodes = array();

	// First node has two children -- Get Job or Go to College
	$nodeProperties = array(
		"id"		=> 0,
		"name"		=> "Job or College",
		"template"	=> "job_or_college.twig"
	);

	array_push($nodes, new Node($nodeProperties));

	$rootNode = $nodes[0];

	$nodeProperties = array(
		"id"		=> 1,
		"name"		=> "Get a Job",
		"template"	=> "choose_job.twig"
	);

	array_push($nodes, new Node($nodeProperties));

	$rootNode->addChild($nodes[1]);

	$nodeProperties = array(
		"id"		=> 2,
		"name"		=> "Go to College",
		"template"	=> "go_to_college.twig"
	);

	array_push($nodes, new Node($nodeProperties));

	$rootNode->addChild($nodes[2]);

	return $rootNode;
}

