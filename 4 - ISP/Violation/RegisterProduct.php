<?php

require "RegisterInterface.php"

class RegisterProduct implements RegisterInterface
{
	function save(){
		// save product data
	}

	function sendEmail(){

		return "Not necessary send email after product saving";
	}
}