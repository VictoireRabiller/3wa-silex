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

$app->get('/flickr', 'MonProjet\Controller\FlickrController::main')
	->bind('flickr');

$app->get('/customers', 'MonProjet\Controller\CustomersController::main')
	->bind('customers');

$app->get('/bonjour/{name}', function ($name) use ($app) {


	 return $app['twig']->render('bonjour.twig', array(
        'name' => $name
    ));
})->bind("bonjour");

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

	

// $app->register(new Silex\Provider\RoutingServiceProvider());


$app->run();


