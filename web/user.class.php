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
	private $treeId;

	function User ($properties) {
		foreach ($properties as $key => $value) {
			$this->$key = $value;
		}

		$this->nodeId = 0;
		$this->treeId = 0;
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

	function setTreeId($treeId) {
		$this->treeId = $treeId;
	}

	function getTreeId() {
		return $this->treeId;
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

	$returnTree = null;

	for ( $i = 0; $returnTree == null && $i < count($nodeTree->children); $i++ )
		$returnTree = findNode($nodeId, $nodeTree->children[$i]);

	return $returnTree;
}

function buildNodeTree($treeId) {
	switch ($treeId) {
		case CHECKING_TREE_ID:
			return buildCheckingTree();

		case STUDENT_LOAN_TREE_ID:
			return buildStudentLoanTree();

		default:
			return buildRootTree();
	}
}

function buildCheckingTree() {
	$nodeProperties = array(
		"id"		=> 0,
		"name"		=> "Checking account",
		"template"	=> "choose_Checking.twig"
	);

	$checkingTree = new Node($nodeProperties);

	return $checkingTree;
}

function buildStudentLoanTree() {
	$nodeProperties = array(
		"id"		=> 20000,
		"name"		=> "Student Loans",
		"template"	=> "student_loans.twig"
	);

	$studentLoanTree = new Node($nodeProperties);

	return $studentLoanTree;
}

function buildRootTree() {
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

	$jobNode = $nodes[count($nodes)-1];

	$rootNode->addChild($nodes[1]);

	$nodeProperties = array(
		"id"		=> 2,
		"name"		=> "Go to College",
		"template"	=> "go_to_college.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$collegeNode = $nodes[count($nodes)-1];
	$rootNode->addChild($nodes[2]);

	include("nodes_job.php");
	//include("nodes_college.php");

	return $rootNode;
}

