<?php

require "Customer.php";
require "CustomerRepository.php";
require "EmailServices.php";

class CustomerService
{
	function addCustomer(Customer $customer)
	{
		if(!$customer->isValid($customer))
			return "Dados inválidos";

		$repository = new CustomerRepository();
		$repository->addCustomer($customer);
	}
}