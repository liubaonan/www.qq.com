<?php
/*
	类的内部  private 	
	类的外部	
	子类
*/
class Computer{	
	private $type;		//型号
	private $mouse;		//鼠标
	var $size;		    //内存大小
	function __construct($type,$size){	
		$this->type = $type;
		$this->size = $size;
	}	
	function Work(){
		echo "计算机型号为".$this->type."计算机的内存大小".$this->size;	
	}			
	function __toString(){
		return  "我的类名是".__CLASS__;
	}		
	/*
	//调用私有属性$type;
	function getType(){	
		return $this->type;
	}
	
	//我要设置私有属性
	function setType($type){
		$this->type=$type;
	}
tion __set($name,$value){
		$this->$name = $value;
	}
	
	function __get($name){
		return $this->$name;
	}
	//析构成员方法
	/*
	function __destruct(){
		echo $this->type;
		echo "对象已经销毁";	
	}
	*/
}
$lenovo = new Computer("联想V2000","1G");
$lenovo->type="联想V3000";
$lenovo->Work();
echo $lenovo->type;
var_dump($lenovo);
echo $lenovo;
echo "<br />";
/*
$lenovo = new Computer;

$lenovo->type="联想V1000";
$lenovo->size = "4G";
$lenovo->Work();
echo "<hr />";

$ibm = new Computer;
$lenovo->type="IBMS300";
$lenovo->size = "16G";
$lenovo->Work();
*/





class Sport{
	
	   var $item;
	   var $why;
   function emotion(){	
	echo "我最喜欢的运动是-".$this->item ."，因为它".$this->why."。";	
   }
   function emotion2(){
	   echo "生命在于".$this->item.",".$this->why."我们心怀未来 。";
   }
   function  __construct($item,$why){
	   $this->item=$item;
	   $this->why=$why;
   }
}
$spo=new Sport("乒乓","是一项有趣的运动");
$spo->emotion();
echo "<br/>";
$spo=new Sport("跳伞","是一项刺激的运动");
$spo->emotion();
echo "<br/>";
$sp=new Sport("运动","因为");
$sp->emotion2();
echo "<br/>-------";












class Sport2{	
	   var $item;
	   var $why;
   function emotion(){	
	echo "我最喜欢的运动是-".$this->item ."，因为它".$this->why."。";
   }
   function emotion2(){
	   echo "生命在于".$this->item.",".$this->why."我们心怀未来 。";
   }
   function  __construct($item,$why){
	   $this->item=$item;
	   $this->why=$why;
   }
   function __destruct(){
	   echo "oop";
	   echo "释放上面的方法";
   }
}

/*
$spo=new Sport2();
$spo->item="游泳";
$spo->why="很炫";
$spo->emotion();
*/

$spo=new Sport("乒乓","是一项有趣的运动");
$spo->emotion();
echo "<br/>";
$spo=new Sport("跳伞","是一项刺激的运动");
$spo->emotion();
echo "<br/>";
$sp=new Sport("运动","因为");
$sp->emotion2();
echo "<br/>-------";












?>

<?php

echo"holle world every day";

echo __DIR__;         //文件的根目录  
       
echo"该文件是". __FILE__;

function test(){
	echo '该文件是：'.__FUNCTION__;
}
test();

echo"<hr/>";
/*

面向对象的练习
*/
class Person{
	var $name;
	var $age;
    var $country;
	function run(){
		echo  $this->name."can run ".$this->country."是意大利";
	}
    function fly(){
		echo "can fly";
	}
}
$zs=new Person();
$zs->name="张三";
$zs->age=18;
$zs->country="国家";
$zs->run();
//echo $zs->name.$zs->run()."<br/>";
//echo $zs->name.$zs->fly();



echo "<hr/>";
class Sport3{	
	   var $item;
	   var $why;
   function emotion(){	
	echo "我最喜欢的运动是-".$this->item ."，因为它".$this->why."。";	
   }
   function emotion2(){
	   echo "生命在于".$this->item.",".$this->why."我们心怀未来 。";
   }
   function  __construct($item,$why){
	   $this->item=$item;
	   $this->why=$why;
   }
   function __destruct(){
	   echo "oop";
	   echo "释放上面的方法";
   }
}
$spo=new Sport("乒乓","是一项有趣的运动");
$spo->emotion();
echo "<br/>";
$spo=new Sport("跳伞","是一项刺激的运动");
$spo->emotion();
echo "<br/>";
$sp=new Sport("运动","因为");
$sp->emotion2();
echo "<br/>-------";




























?>