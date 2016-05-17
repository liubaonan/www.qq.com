<?php
/*
static 关键字
	在类的外部 调用静态方法和静态属性的时候 用	
	类名::$静态属性名
	类名::静态成员方法	
	在类的内部调用静态的属性 用 self:: 关键字
*/
class A{	
	public $name;
	static $age;
	static $country;
	const number = 20;	
	public function __construct($name){
		$this->name = $name;		
	}	
	static function add(){		
		echo "cc";		
	}		
	public function __toString(){
			return  "我叫".$this->name."年龄".self::
			$age."国籍".self::$country."<br />";
	}
}
$p1 = new A("张三");
A::$country = "中国p1";
$p2 = new A("李四");
A::$age = 40;
$p3 = new A("王五");
echo $p3;

