<?php

class Rectangle
{
	public $height;
	public $width;

	public function getHeight(){
		return $this->height;
	}

	public function setHeight($height){
		$this->height = $height;
	}	

	public function setWidth($width){
		$this->width = $width;
	}

	public function getwidth(){
		return $this->width;
	}

	function area(){
		return $this->height * $this->width;
	}
}