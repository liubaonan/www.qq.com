<?php

 class liu{
	public $name;
		
	 function eat(){
		echo "我的名字";
	}
}

class bao extends liu{
	public $b;
	
	function gaga(){
		echo "哇哈哈".$this->b;
	}
}
$object=new bao();
$object->b=$b="一口价";

$object->gaga();
$object->eat();

echo "<hr/>";

//final 的用法。

class cui{
	public $a;
	
	/*final*/ public function yan(){
		echo "我是".__class__."";
	}
}
class wei extends cui{
	
	public function yan(){
		parent::yan();//
		echo "我是刘宝南";
	}
	public function hua(){
		parent::yan();
	}
}
$as=new wei;
$as->yan();
$as->hua();

echo "<hr/>";

//static 的用法。
class li{
	public $name;
	static $age;
	static $country;
	const number=20;
	
	public function __construct($name){
		$this->name=$name;
	}

	public function __toString(){
		return "我叫".$this->name."年龄".self::$age."国籍".self::$country."<br/>";
	}	
}
$q1=new li("张三");
li::$country="中国";
li::$age=40;
$q2=new li("李四");
$q3=new li("王五");
echo $q3;
echo $q2;
echo $q1;

echo "<hr/>";
//static 的练习，还挺简单的哈。
class plople{
	public $name;
	static $age;
	static $height;
	
	public function fun(){
		echo "我的名字是".$this->name."今年".self::$age."身高".self::$height."<br/>";
	}
	public function __construct($name){
		$this->name=$name;
	}
}
plople::$age=20;
plople::$height=177;
$p1= new plople("刘宝南");
$p1->fun();
$p2=new plople("王五");
$p2->fun();

echo '<hr/>';

//抽象类里面不一定有抽象方法，而有抽象方法的一定是抽象类
abstract class ji{
	function a(){
		echo "我是抽象类";
	}
}
abstract class yi{
	function run(){
		echo "我在跑";
	}
	abstract function liu();//像这种没有方法体的方法就是抽象方法，没有方法体就是没有大括号以及其中的内容。
}
class jiyi extends yi{
	function liu(){
		echo "我是父类中没有写完的那个吼吼";
	}
}
$bao=new jiyi;
$bao->liu();

echo "<hr/>";
//clone克隆的使用 可以直接在最后套用，如果需要修改，则需要在_clone中重写原来的属性和方法。
class zhang{
	public $name;
	public $age;
	
	function tun(){
		echo "我叫".$this->name."今年".$this->age;
	}
	function _clone(){
		echo "我是假的".$this->name;
		echo $this->age;
	}
}
$jie=new zhang;
$jie->name=$name="李连杰";
$jie->age=$age="50";
$sensen=clone $jie;
$sensen->tun();
$sensen->_clone();


echo "<hr/>";



class Person {
    private $name;
    private $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function say() {
        echo "我的名字叫：".$this->name;
	echo " 我的年龄是：".$this->age."<br />";
    }
    function __clone() {
        $this->name = "我是假的".$this->name;
        $this->age = 30;
    }
}

$p1 = new Person("张三", 20);
$p1->say();
$p2 = clone $p1;
$p2->say();
	
echo "<hr/>";
//接口练习，，
interface A{
	const A_NAME="建筑设计院";
	function say();
	function work();
}  
interface B{
	const B_NAME="消防部门";
	function outfire();
}
abstract class my{
	public $name;
	function __construct($name){
		$this->name=$name;
	}
	abstract function teaching();
	function studying(){
		echo $this->name."我在这里办公<br/>";
	}
	
}
class c extends my implements A,B{
	function say(){
		echo A::A_NAME."对我们要求很严厉<br/>";
	}
	function work(){
		echo A::A_NAME."要求我们尽快完工<br/>";
	}
	function outfire(){
		echo B::B_NAME."注意生产安全<br/>";
	}
	function teaching(){
		echo $this->name."我在这里学习<br/>";
	}
}

$p1=new c("启奥");
$p1->say();
$p1->work();
$p1->outfire();
$p1->teaching();
$p1->studying();


//对象的序列化
var_dump($p1);
$p1=serialize($p1);
var_dump($p1);
//对象的反序列化
$p1=unserialize($p1);
var_dump($p1);












































































