<?php

class EmailServices
{
	static function isValid($email){
		return (strpos($email, '@') !== false);
	}

	static function send($from, $to, $subject, $message){
		$headers = 'From: webmaster@example.com' . "\r\n" .
		    'Reply-To: webmaster@example.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);
	}
}