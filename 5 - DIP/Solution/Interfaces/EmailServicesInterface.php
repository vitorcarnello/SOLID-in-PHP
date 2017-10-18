<?php

interface EmailServicesInterface
{
	static function isValid($email);
	static function send($from, $to, $subject, $message);
}