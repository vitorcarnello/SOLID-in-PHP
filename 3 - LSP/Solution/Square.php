<?php

require "Parallelogram.php"

class ClassName extends Parallelogram
{
	function __construct($height, $width){

		if($height != $width)
			return "Both sides must be equals!"

		parent::__construct($height, $width);
	}
}