<?php

/*
		php  两套工具
		
			preg
	
	preg_match("//");	//匹配查找功能
	preg_match_all();	//匹配字符串当中所有的字符串
	ereg_replace(;//替换功能
*/


$mail = "43434@126.com";
$email = "sdafdsfsd@163.gov.cn";

/*
$allBaidu = file_get_contents("http://news.baidu.com");
file_put_contents("a.html",$allBaidu);
//echo $allBaidu;

$int = preg_match("/php/i", "PHP is the web scripting PHp language of choice.",$showphp);
var_dump($int);
var_dump($showphp);
$imgUrls = preg_match_all('/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i',$allBaidu,$allImgArray); 
var_dump($allImgArray);

*/

$mail = "43";
$email = "sdafdsfsd@163.gov.cn";

$a= preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/ui",$email);


var_dump($a);




?>