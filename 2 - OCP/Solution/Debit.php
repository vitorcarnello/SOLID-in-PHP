<?php

abstract class Debit
{
	public $transactionNumber;
	public abstract function toDebit($value, $account);

	function commonBehavior(){
		// commom behavior for all account types
	}
}