<?php

class person{	
	var $name;
	var $age;	
function bao(){
	echo "我叫".$this->name."今年".$this->age."<br/>";
}
function bao2(){
	echo "暗礁".$this->name."现在".$this->age."<br/>";
}
function __construct($name,$age){
		$this->name=$name;
		$this->age=$age;		
	}
}
$liu=new person("刘宝南","22");
$liu->bao();
$liu=new person("呜哇哇","33");
$liu->bao();
$liu->bao2();

echo "<hr/>";

class sports{	
	var $lan;
	var $zou;
	var $tai;	
		function fun(){	
			echo "我最喜欢的是&nbsp".$this->lan."很少打".$this->tai."&nbsp".$this->zou;
	}
		function fun2(){
			echo "搞起".$this->tai;
		}
}
$sen=new sports;
$sen->lan="篮球";
$sen->zou="足球";	
$sen->tai="台球";
$sen->fun();
$sen->fun2();
echo "<hr/>";


		
class zhou{
	var $tiao;
	var $you;	
	function jie(){
		echo "我最喜欢的运动是".$this->tiao."&nbsp因为它可以".$this->you."<br/>";
	}
	function __construct($tiao,$you){		
		$this->tiao=$tiao;
		$this->you=$you;
	}	
	   function __tostring(){

        return  "Hello,".$this->tiao."!<br/>";    
    }
}	
$lun= new zhou("跳伞","能够挑站人的极限");
$lun->jie();
echo $lun;

echo "<br/>";



































