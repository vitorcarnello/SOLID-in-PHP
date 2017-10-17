<?php

require "EmailServices.php";

class Customer
{
	public $name;
	public $email;
	public $cpf;
	public $registerDate;

	function __construct($name, $email)
	{
		$this->name = $name;
		$this->email = $email;
	}	

	function isValid(Customer $customer)
	{
		$service = new EmailServices();

		return $service->isValid($customer->email);
	}
}