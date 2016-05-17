<?php

class Person{
	public $name;
	static $age=22;
	
	public function __construct($name){
		$this->name = $name;
	}
	private function intro(){
		echo "大家好,我叫".$this->name,"今年".self::$age."岁",'<br/>';
	}
	public function fun($name){
		$this->name = $name;
	}
	public function show(){
		$this->intro();
	}
}
$p = new Person("刘宝南");
$p->show();
$p->fun("刘小森");
Person::$age=33;
$p->show();





















