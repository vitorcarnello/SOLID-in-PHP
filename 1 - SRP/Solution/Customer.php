<?php

require "EmailServices.php";

class Customer
{
	private $name;
	private $email;
	private $registerDate;

	function getName(){
		return $this->name;
	}

	function setName($name){
		$this->name = $name;
	}

	function getEmail(){
		return $this->email;
	}

	function setEmail(){
		$this->email = $email;
	}

	function getRegisterDate(){
		return $this->registerDate;
	}

	function setRegisterDate(){
		$this->registerDate = $registerDate;
	}

	function isValid(){
		$service = new EmailServices();

		return $service->isValid($this->email);
	}
}