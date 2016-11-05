$nodeProperties = array(
		"id"		=> 1000,
		"name"		=> "Military",
		"template"	=> "choose_Military.twig"
	);

	array_push($nodes, new Node($nodeProperties));

	$nodes[1]->addChild($nodes[count($nodes)-1]);

$nodeProperties = array(
		"id"		=> 1001,
		"name"		=> "Construction",
		"template"	=> "choose_Construction.twig"
	);

	array_push($nodes, new Node($nodeProperties));

	$nodes[1]->addChild($nodes[count($nodes)-1]);

$nodeProperties = array(
		"id"		=> 1002,
		"name"		=> "Mcdonalds",
		"template"	=> "choose_Mcdonalds.twig"
	);

	array_push($nodes, new Node($nodeProperties));

	$nodes[1]->addChild($nodes[count($nodes)-1]);

$nodeProperties = array(
		"id"		=> 1003,
		"name"		=> "Retail",
		"template"	=> "choose_Retail.twig"
	);

	array_push($nodes, new Node($nodeProperties));

	$nodes[1]->addChild($nodes[count($nodes)-1]);

