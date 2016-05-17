<?php
session_set_cookie_params(60);
session_start();	//声明开启session;

/*
$name = session_name();
$id = session_id();
setcookie($name,$id,time()+60);
*/

$_SESSION['isloging'] = 1;
$_SESSION['name'] = "admin";


