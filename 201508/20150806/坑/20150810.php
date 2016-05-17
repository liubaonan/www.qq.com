<?php
/*
	返回一个单元顺序相反的数组
*/
$array = [	0=>"启奥",
			1=>"科技",
			2=>"实训",
			3=>["河北",'天津',"上海"],
			4=>"日本",			
];
var_dump(array_reverse($array));
var_dump(array_reverse($array,true));

$temp = [1,2,3,4,5,6,7,8,8,1,10];

var_dump(array_count_values($temp));
var_dump(count(array_unique($temp)));
/*
	演示回调函数
*/
function Myfunction ($a,$b){
	echo $b($a); //ShowString("PHP")
}
function showString($a){

}
Myfunction("PHP","showString");
$temp = array_filter($array,"SelectString");
/*
自定义函数
*/
function SelectString($var){
	if(is_array($var)){	
		if(in_array("实训",$var) || in_array("日本",$var))
			return true;
		else
			return false;
	}else{	
		if("实训" == $var || "日本" == $var)
			return TRUE;
		else
			return FALSE;	
	}
}
var_dump($temp);
$temp = [1,2,3,4];

var_dump($temp);
function StringAdd($var,$key){		
		echo "key:".$key."值".$var."<br />";	
}

array_walk($temp,"StringAdd");

$temp = [
	1=>1,			//0
	2=>'11',		//1
	0=>'启奥',		//2
	3=>'zzzaa',		//3
	4=>'zzza',		//4
	5=>"aaaa",		//5
	11=>1,			//0
	21=>'11',		//1
	01=>'启奥',		//2
	31=>'zzzaa',	//3
	41=>'zzza',		//4
	12=>1,			//0
	22=>'11',		//1
	33=>'启奥',		//-3
	34=>'zzzaa',	//-2
	45=>'zzza',		//-1
];


//natsort($temp);

var_dump($temp);

/*
	数组的切割
*/

$stemp = array_slice($temp,2,2);

var_dump($stemp);

$stemp = array_slice($temp,-3,3);
var_dump($stemp);

$stemp = array_slice($temp,4);

var_dump($stemp);









?>