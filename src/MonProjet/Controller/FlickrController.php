<?php

namespace MonProjet\Controller;

use Silex\Application;
use \MonProjet\Service\FlickrService;
use Symfony\Component\HttpFoundation\Request;

class FlickrController {


	 public function main(Application $app, Request $request)  { 

	 	$tags = $request->query->get('tags');

	 	$flickrService = new FlickrService();

	 	$photos = $flickrService->searchPhotos($tags);

		return $app['twig']->render('flickr.twig', array(
	        'photos' => $photos
	    ));
	}

}
