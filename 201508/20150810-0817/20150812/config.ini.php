<?php

/*
	定义一个常量 WEBROOT	//代表的是项目根目录的绝对路径
	$dir = __FILE__;//D:\wamp\www\include\confi.ini.php	
$dir = dirname(__FILE__); //D:\wamp\www\include
$dir = substr($dir,0,strrpos($dir,"\\"));
$dir = str_replace("\\","/",$dir);

*/

$dir = str_replace("\\","/",substr(dirname(__FILE__),0,strrpos(dirname(__FILE__),"\\")));
define('WEBROOT',$dir);