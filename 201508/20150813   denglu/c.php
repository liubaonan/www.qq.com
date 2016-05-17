<?php
/*
	用来进行密码验证 并登录
*/

include_once("./b.php");


var_dump($users);
exit;

$memberinfo = array_keys($users);

if(in_array($_POST['username'],$memberinfo) && $_POST['pwd'] == $users[$_POST['username']]){
	echo "登录成功！";
}else{
	echo "登录失败";
}	
?>