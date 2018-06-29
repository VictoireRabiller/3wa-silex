<?php

namespace MonProjet\Service;

class CustomerService {
	

	function getCustomerList() {

		$db = new Database();

		$sql = "SELECT * FROM customers LIMIT 10";
		
		$customers = $db->query($sql);

		return $customers;
	}
}