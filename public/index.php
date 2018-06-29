<?php
include '../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;


$app = new Application();


$app['debug'] = true;

$app->register(new Silex\Provider\AssetServiceProvider());

$app->get('/', 'MonProjet\Controller\HomeController::main')
	->bind('home');


$app->get('/hello', function () use ($app) {

	 return $app['twig']->render('hello.twig', array(
        'name' => 'dalton',
        'firstname' => "joe"
    ));
})->bind('hello');

$app->get('/flickr-photos', function () use ($app) {

	 return $app['twig']->render('home.twig', array(
        'name' => 'dalton',
        'firstname' => "joe"
    ));
})->bind("flickr");

$app->get('/customers', function (Application $app, Request $request) {

	$search = $request->query->get('search');

	 return $app['twig']->render('customers.twig', array(
        'name' => 'dalton',
        'firstname' => "joe"
    ));
})->bind('customers');

$app->get('/bonjour', function () use ($app) {

	 return $app['twig']->render('home.twig', array(
        'name' => 'dalton',
        'firstname' => "joe"
    ));
})->bind("bonjour");

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

	

// $app->register(new Silex\Provider\RoutingServiceProvider());


$app->run();


