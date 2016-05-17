<?php
/*
static 关键字 
	在类内部 类外部 及子类中应用
const 关键字
	在类内部 类外部 及子类中应用
*/
class A{
	public static $name;
	const TYPE =1;
	public $age;
	public $gender;	
	
	public function work(){	
		echo "我年龄是".$this->age;
	}
	public static  function say(){	
		echo "常量".self::TYPE;
		self::$name = "张三";	
	}
}
class B extends A{
	public  function run(){	
		A::$name = "李四";
		echo "我是类B".A::TYPE;
	}
}
$object = new B;
$object->run();//我是类B1;

echo "<br />类的外部调用常量".A::TYPE;
echo "<hr />";

A::say();
$object::say();
B::say();

echo "<hr />";
$p1 = new A;
$p1->age = 20;
$p1->gender = "男";
var_dump($p1);
$p2 = clone $p1;
$p2->gender = "女";
var_dump($p2);






?>