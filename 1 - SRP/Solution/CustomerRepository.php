<?php

class CustomerRepository
{
	public function addCustomer(Customer $customer)
	{
		$connection = mysqli_connect("localhost","root","","customers");

		mysqli_query($connection, 
			"INSERT INTO customers (`name`, `email`, `registerDate`)
			 VALUES (`{$this->name}`, `{$this->email}`, `{date(\"Y-m-d H:i:s\")}`) 
			 or die(mysqli_error($connection)"
		);
	}
}