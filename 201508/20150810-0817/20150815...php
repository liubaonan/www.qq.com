<?php


class Person{	
	var $name;
	var $age;
	var $height;
	function __construct($name="",$age="",$height=""){
			$this->name=$name;
			$this->age=$age;
			$this->height=$height;
	}	
	 function fun(){
		echo "他的名字是:".$this->name."&nbsp今年".$this->age."岁"."&nbsp"."身高是：".$this->height."<br>";
	}
	function __destruct(){
		echo "释放".$this->name."<br/>";
	}
	   function __tostring(){//魔术方法__tostring()的应用，必须有返回值  用于直接打印输出实例  用它打印类的相关信息

        return  "Hello,".$this->name."!<br/>";    
    }
}
$liu=new Person("崔艳伟","23","174");
echo $liu->fun();
$bao=new Person("刘宝南","22","177");
echo $bao->fun();
echo $bao;