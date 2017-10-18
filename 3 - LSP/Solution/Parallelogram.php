<?php

abstract class Parallelogram
{
	public $height;
	public $width;
	
	function __construct($height, $width){
		$this->height = $height;
		$this->width = $width;
	}

	function calculateArea(){
		return $this->height * $this->width;
	}

}