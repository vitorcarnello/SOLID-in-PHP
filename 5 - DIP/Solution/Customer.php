<?php

require "EmailServices.php";
require "Interfaces/EmailServicesInterface.php";

class Customer implements EmailServicesInterface
{
	private $name;
	private $email;
	private $emailServices;
	
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

	function __construct(EmailServicesInterface $emailServices){
		$this->emailServices = $emailServices;
	}

	function isValid(){
		
		return $this->emailServices->isValid($this->email);
	}
}