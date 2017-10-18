<?php

require "RegisterInterface.php"

class RegisterCustomer implements RegisterInterface
{
	function save(){
		// save customer data
	}

	function sendEmail(){
		// send email after saving
	}
}