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
	
	
	
	
# College

#Trade
$nodeProperties = array(
		"id"		=> 3000,
		"name"		=> "Trade School",
		"template"	=> "choose_Trade.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$tradeNode = $nodes[count($nodes)-1];
	$collegeNode->addChild($nodes[count($nodes)-1]);
	
#trade options	
        $nodeProperties = array(
            "id"		=> 4000,
            "name"		=> "Automotive",
            "template"	=> "choose_Automotive.twig"
        );
        
        array_push($nodes, new Node($nodeProperties));
        $automotiveNode = $nodes[count($nodes)-1];
        $tradeNode->addChild($nodes[count($nodes)-1]);
	                
        $nodeProperties = array(
            "id"		=> 4001,
            "name"		=> "HVAC",
            "template"	=> "choose_HVAC.twig"
        );
        
        array_push($nodes, new Node($nodeProperties));
        $HVACNode = $nodes[count($nodes)-1];
        $tradeNode->addChild($nodes[count($nodes)-1]);
        
         $nodeProperties = array(
            "id"		=> 4002,
            "name"		=> "Pipefitter",
            "template"	=> "choose_Pipefitter.twig"
        );
        
        array_push($nodes, new Node($nodeProperties));
        $PipefitterNode = $nodes[count($nodes)-1];
        $tradeNode->addChild($nodes[count($nodes)-1]);	                

#community college
	
$nodeProperties = array(
		"id"		=> 3001,
		"name"		=> "Community College",
		"template"	=> "choose_Community.twig"
	);
		
	array_push($nodes, new Node($nodeProperties));
	$communityNode = $nodes[count($nodes)-1];
	$collegeNode->addChild($nodes[count($nodes)-1]);

# community college options
	
			$nodeProperties = array(
            "id"		=> 5000,
            "name"		=> "Gavilan College",
            "template"	=> "choose_Gavilan.twig"
        );
        
        array_push($nodes, new Node($nodeProperties));
        $GavilanNode = $nodes[count($nodes)-1];
        $communityNode->addChild($nodes[count($nodes)-1]);
        
        		$nodeProperties = array(
            "id"		=> 5001,
            "name"		=> "Cabrillo College",
            "template"	=> "choose_Cabrillo.twig"
        );
        
        array_push($nodes, new Node($nodeProperties));
        $CabrilloNode = $nodes[count($nodes)-1];
        $communityNode->addChild($nodes[count($nodes)-1]);	  
        
        
        $nodeProperties = array(
            "id"		=> 5002,
            "name"		=> "Evergreen College",
            "template"	=> "choose_Evergreen.twig"
        );
        
        array_push($nodes, new Node($nodeProperties));
        $EvergreenNode = $nodes[count($nodes)-1];
        $communityNode->addChild($nodes[count($nodes)-1]);	          
        	      
# State Schools
	
$nodeProperties = array(
		"id"		=> 3002,
		"name"		=> "State School",
		"template"	=> "choose_State.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$stateNode = $nodes[count($nodes)-1];
	$collegeNode->addChild($nodes[count($nodes)-1]);
	
#State school options

		$nodeProperties = array(
		"id"		=> 6000,
		"name"		=> "Idaho State",
		"template"	=> "choose_Idaho.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$IdahoNode = $nodes[count($nodes)-1];
	$stateNode->addChild($nodes[count($nodes)-1]);
		
	$nodeProperties = array(
		"id"		=> 6001,
		"name"		=> "Monterey State",
		"template"	=> "choose_Monterey.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$MontereyNode = $nodes[count($nodes)-1];
	$stateNode->addChild($nodes[count($nodes)-1]);
	
	$nodeProperties = array(
		"id"		=> 6002,
		"name"		=> "Sacramento State",
		"template"	=> "choose_Sacramento.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$SacramentoNode = $nodes[count($nodes)-1];
	$stateNode->addChild($nodes[count($nodes)-1]);

#university	
$nodeProperties = array(
		"id"		=> 3003,
		"name"		=> "University",
		"template"	=> "choose_University.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$universityNode = $nodes[count($nodes)-1];
	$collegeNode->addChild($nodes[count($nodes)-1]);
	
# university options

		$nodeProperties = array(
		"id"		=> 7000,
		"name"		=> "Berkely University",
		"template"	=> "choose_Berkley.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$BerkelyNode = $nodes[count($nodes)-1];
	$universityNode->addChild($nodes[count($nodes)-1]);
	
	$nodeProperties = array(
		"id"		=> 7001,
		"name"		=> "Santa Cruz University",
		"template"	=> "choose_SantaCruz.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$SantaCruzNode = $nodes[count($nodes)-1];
	$universityNode->addChild($nodes[count($nodes)-1]);
	
	$nodeProperties = array(
		"id"		=> 7002,
		"name"		=> "Illinois University",
		"template"	=> "choose_Illinois.twig"
	);

	array_push($nodes, new Node($nodeProperties));
	$IllinoisNode = $nodes[count($nodes)-1];
	$universityNode->addChild($nodes[count($nodes)-1]);
	
	
	

	
