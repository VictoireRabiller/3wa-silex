<?php

namespace MonProjet\Controller;

use Silex\Application;
use MonProjet\Service\CustomerService;


class CustomersController {


	 public function main(Application $app)  { 


	 	$customerService = new CustomerService();
	 	$customers = $customerService->getCustomerList();

	 
		return $app['twig']->render('customers.twig', array(
	        'customers' => $customers
	    ));
	}

}
