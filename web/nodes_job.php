<?php
$nodeProperties = array(
		"id"		=> 1000,
		"name"		=> "Military",
		"template"	=> "choose_Military.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$militaryNode = $nodes[count($nodes)-1];
	$jobNode->addChild($nodes[count($nodes)-1]);

$nodeProperties = array(
		"id"		=> 1001,
		"name"		=> "Construction",
		"template"	=> "choose_Construction.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$constructionNode = $nodes[count($nodes)-1];
	$jobNode->addChild($nodes[count($nodes)-1]);

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

