<?php
//中文字符串截取

$str = "ss我是刘宝南吼吼哈嘿sdkfj,asdjiol,sdfjkl";

function str_sub($str,$len,$charset="utf-8",$lastChar="..."){
	
	$zhlen = $charset=="utf-8"?3:2;
	$total =strlen($str);
	$length = $len>$total?$total:$len;
	$temp = "";	
	
	for($i=0;$i<$length;$i++){
	    $zifu= substr($str,$i,1);		
		if(ord($zifu)>127){
			$zifu = substr($str,$i,$zhlen);
			$temp.=$zifu;
			$i = $i+$zhlen-1;
		}else{
			$temp.=$zifu;
		}
	}
	return $temp.$lastChar;
}
echo str_sub($str,30);