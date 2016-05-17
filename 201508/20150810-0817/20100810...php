<?php

$array = [	0=>"启奥",
			1=>"科技",
			2=>"实训",
			"城市"=>["河北",'天津',"上海","实训"],
			4=>"日本",
			
];
$temp="";
foreach($array as $key=>$value){
	if(is_string($key)){
		$temp.=$key.":".implode("&nbsp;",$value)."<br/>";
	}else{
		$temp.=$value."<br/>";
	}
}
echo $temp;


var_dump(array_reverse($array));//将键值后面的倒叙，
var_dump(array_reverse($array,true));//将键值包括后面的都倒序。
$news=[1,2,3,4,5,6,7,8,9];
var_dump(array_values($news));  //返回数组中所有的值。
var_dump(array_count_values($news));//统计数组中所有值出现的次数。
var_dump(count(array_unique($news)));//移除数组中重复的值。
//加密。
$a="刘宝南！";
echo md5($a);

$temp = [1,2,3,4];
var_dump($temp);
function StringAdd($var,$key){		
		echo "key:".$key."值".$var."<br />";	
}
array_walk($temp,"StringAdd");

echo "<hr/>";


$stemp = [
	1,			//0
	'11',		//1
	'启奥',		//2
	'zzzaa',		//3
	'zzza',		//4
	"aaaa",		//5
	1,			//0
	'11',		//1
	'启奥',		//2
	'zzzaa',	//3
	'zzza',		//4
	1,			//0
	'11',		//1	
	'奥',		//-3
	'zaa',	//-2
	45=>'zzza',		//-1
];
$stemp=array_keys($stemp);
var_dump($stemp);

$liu="启奥";
$bao=10002;
$na="100";
echo printf("%s共有%d名老师,共有%d名学生",$liu,$bao,$na);
echo "<hr/>";

$la="         唐山             学院    东校区     哇哈哈      ";
echo ltrim($la);
echo "\r\n",str_replace(" ","",$la);

$hou="liubaonanLIUBAONANSHIZUISHUAIDE OUYE dfsdfsdfsdfsdfdfasdfadasasdfsadfadafsd";
echo strtolower($hou);
echo strrev($hou);//字符串反转
echo "&lt"."&gt";//输出<>
$p="baonan";
$str = "--";
echo str_pad($p,200,$str);

$xiao="刘小森";
echo md5($xiao);
echo "<hr/>";

















?>
