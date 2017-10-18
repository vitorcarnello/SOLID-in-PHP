<?php

require "Rectangle.php";

class Square extends Rectangle
{
	public $height;
	public $width;

	function __construct($height, $width)
	{
		$this->height = $width;
		$this->width = $height;
	}
}