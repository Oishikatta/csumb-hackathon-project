<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/user.class.php';
require_once __DIR__.'/usergenerator.class.php';

error_reporting(E_ALL);

$app = new Silex\Application();
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));
$app->register(new Silex\Provider\SessionServiceProvider());
$app['debug'] = true;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app->get('/', function () use($app) {
	$user = new User( array(
		"name"		=> userGenerator::getName(),
		"gender"	=> userGenerator::getGender(),
		"luck"		=> userGenerator::getLuck(),
		"city"		=> userGenerator::getCity(),
		"state"		=> userGenerator::getState(),
		"cityType"	=> userGenerator::getCityType(),
		"difficulty"	=> userGenerator::getDifficulty(),
		"money"		=> userGenerator::getMoney()
	));
	//die($user->name . "aa" . var_dump($user, true));

	$app['session']->set("user", serialize($user));

	return $app['twig']->render('index.twig', array("user" => $user->getArray()));
});

$app->post('/start', function (Request $request) use ($app) {
	$user = unserialize($app['session']->get("user"));

	$customVars = array("name", "gender", "city", "state", "difficulty");
	foreach( $customVars as $customVar ) {
		// Does not validate user input.
		$user->$customVar = $request->get($customVar, $user->$customVar);
	}

	return $app->redirect('/play');

});

$app->get('/play', function (Request $request) use ($app) {
	$nodeTree = buildNodeTree();

	$user = unserialize($app['session']->get("user"));

	$node = findNode($user->getNodeId(), $nodeTree);

	//die( var_dump($node) );
	return $app['twig']->render('choice.twig', array("tree" => $node, "user" => $user));
});

$app->run();
