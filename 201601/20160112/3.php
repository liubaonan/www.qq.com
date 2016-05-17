<?php

class Person{
	
	static $a = null;
	
	private function __construct(){
		
	}
	
	static function fun(){
		if(is_null(self::$a))
			self::$a = new self;
		return  self::$a;
	}
	
	function __destruct(){
		echo "#############<br/>";
	}
	
	function say(){
		echo "ddddddd";
	}
}
$p = Person::fun();
$p = Person::fun();
$p = Person::fun();
$p = Person::fun();
$p = Person::fun();
$p = Person::fun();


