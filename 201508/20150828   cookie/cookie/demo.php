<?php

/*
	声明周期 打开浏览器 到关闭 
	session_set_cookie_params(60);
*/


session_start();

$name = session_name();
$id = session_id();
setcookie($name,$id,time()+10);		//第二种设置session 声明周期的一种方式

var_dump($_SESSION);

//获取session 名字

echo session_name();	//获取 session 名字	php.ini

echo session_id();		//获取session id;

$_SESSION['name'] = "名字";


var_dump($_SESSION);

unset($_SESSION['name']);		//销毁掉其中一个

setcookie($name,$id,time()-1);
session_destroy();	//销毁回话
