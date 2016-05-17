<?php

include_once("./include/config.ini.php");//网站配置文件
include_once(WEBROOT."/include/comm.ini.php");	//数据库配置文件
include_once(WEBROOT."/class/page.class.php");

$link=mysql_connect($host,$user,$password);
mysql_query("SET NAMES ".$charset);//names后面留一个空格
mysql_query($link);

mysql_select_db($dbname);//选择数据库

















































