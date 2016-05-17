<?php

//final 不能重写，
class A{
	public $name;	

	function fun(){
		echo "我就是".$this->name."<br/>";
	}
}
class B extends A{
	public $age;
	
	 function run(){
		echo "今年".$this->age."<br/>";
	}
	function fun(){
		parent::fun();
		echo "就是我".$this->name;
	}
}
$liu=new B;
$liu->name=$name="刘宝南";
$liu->fun();


//static 的用法。静态变量。。
class P{
	public $naem;
	static $age;
	static $height;
	const width=5;
	
	public function __toString(){
		return "我就是".$this->name."今年".self::$age."身高".self::$height."体重".P::width;
	}
}
$liu=new P;
$liu->name=$name="刘宝南";
P::$age=22;
P::$height=177;
echo $liu;

//错误类型：语法错误、运行时错误、逻辑错误
//error reporting(0); error reporting(1);
echo "<hr/>";
try{
	$a=1;
	if($a==0){
		echo "程序运行正确";
	}else{
		throw new exception("我是刘宝南");
	}
}catch(exception $m){
	echo $m->getLine();//输出错误的行号
	echo ($m->getMessage());
}
echo "<hr/>";

echo date("Y-m-d-H-s");
echo "<br/>";
echo date_default_timezone_set("Asia/Shanghai");
echo date_default_timezone_get();
echo "<br/>";
echo microtime();

echo '<hr/>';




















































































