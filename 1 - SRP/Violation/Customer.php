<?php

class Customer
{
	public $name;
	public $email;
	public $registerDate;

	function __construct($name, $email)
	{
		$this->name = $name;
		$this->email = $email;
	}

	function addCustomer(Customer $customer)
	{
		if(strpos($this->email, '@') !== true)
			return "Invalid email!";

		$connection = mysqli_connect("localhost","root","","customers");

		mysqli_query($connection, 
			"INSERT INTO customers (`name`, `email`, `registerDate`)
			 VALUES (`{$this->name}`, `{$this->email}`, `{date(\"Y-m-d H:i:s\")}`) 
			 or die(mysqli_error($connection)"
		);

		$to      = 'nobody@example.com';
		$subject = 'Welcome!';
		$message = 'Congratulations! You are registered!';
		$headers = 'From: webmaster@example.com' . "\r\n" .
		    'Reply-To: webmaster@example.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);

		return "Customer registered successfully!";
	}
}