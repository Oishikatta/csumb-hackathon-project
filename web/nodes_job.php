<?php

#Work options

$nodeProperties = array(
		"id"		=> 1000,
		"name"		=> "Military",
		"template"	=> "choose_Military.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$militaryNode = $nodes[count($nodes)-1];
	$jobNode->addChild($nodes[count($nodes)-1]);
	
	
	        $nodeProperties = array(
		        "id"		=> 2000,
		        "name"		=> "Start a checking account",
		        "template"	=> "choose_Checking.twig"
	        );

	        array_push($nodes, new Node($nodeProperties));
	        $checkingNode = $nodes[count($nodes)-1];
	        $militaryNode->addChild($nodes[count($nodes)-1]);

$nodeProperties = array(
		"id"		=> 1001,
		"name"		=> "Construction",
		"template"	=> "choose_Construction.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$constructionNode = $nodes[count($nodes)-1];
	$jobNode->addChild($nodes[count($nodes)-1]);
	
	         $nodeProperties = array(
		        "id"		=> 2001,
		        "name"		=> "Start a checking account",
		        "template"	=> "choose_Checking.twig"
	        );

	        array_push($nodes, new Node($nodeProperties));
	        $checking1Node = $nodes[count($nodes)-1];
	        $constructionNode->addChild($nodes[count($nodes)-1]);

$nodeProperties = array(
		"id"		=> 1002,
		"name"		=> "Mcdonalds",
		"template"	=> "choose_Mcdonalds.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$mcdonaldsNode = $nodes[count($nodes)-1];
	$jobNode->addChild($nodes[count($nodes)-1]);

$nodeProperties = array(
		"id"		=> 1003,
		"name"		=> "Retail",
		"template"	=> "choose_Retail.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$retailNode = $nodes[count($nodes)-1];
	$jobNode->addChild($nodes[count($nodes)-1]);
	
	
	
	
# College

$nodeProperties = array(
		"id"		=> 3000,
		"name"		=> "Trade School",
		"template"	=> "choose_Trade.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$tradeNode = $nodes[count($nodes)-1];
	$collegeNode->addChild($nodes[count($nodes)-1]);
	
$nodeProperties = array(
		"id"		=> 3001,
		"name"		=> "Community College",
		"template"	=> "choose_Community.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$communityNode = $nodes[count($nodes)-1];
	$collegeNode->addChild($nodes[count($nodes)-1]);
	
$nodeProperties = array(
		"id"		=> 3002,
		"name"		=> "State School",
		"template"	=> "choose_State.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$stateNode = $nodes[count($nodes)-1];
	$collegeNode->addChild($nodes[count($nodes)-1]);
	
$nodeProperties = array(
		"id"		=> 3003,
		"name"		=> "University",
		"template"	=> "choose_University.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$universityNode = $nodes[count($nodes)-1];
	$collegeNode->addChild($nodes[count($nodes)-1]);
