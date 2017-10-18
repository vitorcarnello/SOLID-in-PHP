<?php

require "Customer.php";
require "CustomerRepository.php";

class CustomerServices
{
	function save(Customer $customer){

		if(!$customer->isValid())
			return "Invalid data!";

		$repository = new CustomerRepository();
		$repository->addCustomer($customer);

		$email = new EmailServices();
		$email->send("sample@mail.com", $customer->email, "Welcome!", "You're registered!");

		return "Customer registered!";
	}
}