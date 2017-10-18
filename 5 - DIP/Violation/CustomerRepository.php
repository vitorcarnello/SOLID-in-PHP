<?php

require "Customer.php"

class ClassName
{
	function save(Customer $customer)
	{
		$connection = mysqli_connect("localhost","root","","customers");

		mysqli_query($connection, 
			"INSERT INTO customers (`name`, `email`, `registerDate`)
			 VALUES (`{$customer->name}`, `{$customer->email}`, `{date(\"Y-m-d H:i:s\")}`) 
			 or die(mysqli_error($connection)"
		);
	}
}