<?php

if(!defined("WEBROOT"))
	exit("REQUEST ERROR!");

//error_reporting(0);	



define("HOST",'10.2.27.79');
define("USER",'php02');
define("PAS",'123');
define("CHAR",'utf8');
define('DB','dsdemo02');



$dsn = "mysql:host=".HOST.";dbname=".DB."";	
$dsn = "mysql:host=".HOST.";dbname=".DB."";	//链接字符集
	$options = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,//警告级别
		PDO::ATTR_CASE => PDO::CASE_LOWER,//列字符大小
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,		//设置检索返回类型
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8 "//设置连接字符集
	];




?>