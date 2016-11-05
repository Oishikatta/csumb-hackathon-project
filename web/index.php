<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/user.class.php';
require_once __DIR__.'/usergenerator.class.php';

error_reporting(E_ALL);
$app = new Silex\Application();
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));
$app['debug'] = true;

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
	return $app['twig']->render('index.twig', array("user" => $user->getArray()));
});

$app->post('/start', function () use ($app) {
	return $app['twig']->render('start.twig', array());
});

$app->run();
