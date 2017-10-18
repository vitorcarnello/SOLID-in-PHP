<?php

require "Square.php";
require "Rectangle.php";

class ClassName
{
	static function Calcular(){
	    $square = new Square(10, 5);

	    getRectangleArea($square);
	}

	private function getRectangleArea(Rectangle $rectangle){
        return "Area: {$rectangle->area()}";
	}
}