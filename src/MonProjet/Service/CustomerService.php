<?php

namespace MonProjet\Service;

use MonProjet\Infrastructure\Database;

class CustomerService {
	
	function getCustomerList() {

		$db = new Database();

		$sql = "SELECT * FROM customers LIMIT 10";
		
		$customers = $db->query($sql);

		return $customers;
	}
}