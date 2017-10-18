<?php

abstract class Debit
{
	private $transactionNumber;

	function getTransactionNumber(){
		return $this->transactionNumber;
	}

	function getTransactionNumber($transactionNumber){
		$this->transactionNumber = $transactionNumber;
	}

	public abstract function toDebit($value, $account);

	function commonBehavior(){
		// commom behavior for all account types
	}
}