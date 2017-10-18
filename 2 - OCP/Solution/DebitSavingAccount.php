<?php

require "Debit.php";

class DebitSavingAccount extends Debit
{
	function toDebit($value, $account){
		// debit as a saving account

		commonBehavior();
	}
}