<?php

if(!defined("WEBROOT"))
	exit("REQUEST ERROR!");

//error_reporting(0);	

/*
$host = "localhost";
$user = "zhang";
$password = "123";
$charset = "utf8";
$dbname = "demo01";
*/


define("HOST",'localhost');
define("USER",'root');
define("PAS",'');
define("CHAR",'utf8');
define('DB','students');

/*
$dbServer['host'] = "localhost";
$dbServer['user'] = "zhang";
*/


	$dsn = "mysql:host=".HOST.";dbname=".DB."";			//链接字符集
	$options = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,				//警告级别
		PDO::ATTR_CASE => PDO::CASE_LOWER,						//列字符大小
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,		//设置检索返回类型
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".CHAR		//设置连接字符集
	];

?>