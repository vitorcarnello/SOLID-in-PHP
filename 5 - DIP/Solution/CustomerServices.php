<?php

require "Customer.php";
require "CustomerRepository.php";
require "Interfaces/CustomerRepositoryInterface.php";
require "Interfaces/EmailServicesInterface.php";

class CustomerServices
{
	private $repository;
	private $emailServices;

	function __construct(CustomerRepositoryInterface $repository, EmailServicesInterface $emailServices){
		$this->repository = $repository;
		$this->emailServices = $emailServices;
	}

	function save(Customer $customer){

		if(!$customer->isValid())
			return "Invalid data!";

		$this->repository->addCustomer($customer);

		$this->emailServices->send("sample@mail.com", $customer->email, "Welcome!", "You're registered!");

		return "Customer registered!";
	}
}