<?php

require "Debit.php";

class DebitAnotherAccountType extends Debit
{
	function toDebit($value, $account){
		// debit as a another account type

		commonBehavior();
	}
}