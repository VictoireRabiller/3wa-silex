<?php

namespace MonProjet\Controller;

use Silex\Application;
use \MonProjet\Service\FlickrService;

class HomeController {


	 public function main(Application $app)  { 


	 
		return $app['twig']->render('home.twig', array(
	        'name' => 'dalton',
	        'firstname' => "joe"
	    ));
	}

}
