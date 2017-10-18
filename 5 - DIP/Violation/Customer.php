<?php

require "EmailServices.php";

class Customer
{
	private $name;
	private $email;
	
	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}	

	public function setName($name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

	function isValid(){
		$service = new EmailServices();

		return $service->isValid($this->email);
	}
}