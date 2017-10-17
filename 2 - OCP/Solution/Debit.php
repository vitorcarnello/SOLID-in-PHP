<?php

abstract class Debit
{
	public $transactionNumber;
	public abstract function toDebit($value, $account);

	function commonBehavior()
	{
		// do a behavior commom for all account types
	}
}