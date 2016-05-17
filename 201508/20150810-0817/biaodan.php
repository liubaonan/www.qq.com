<?php


class Person{
	var $username;
	var $pwd;
		
	function __construct($username,$pwd){
		$this->username=$username;
		$this->pwd=$pwd;
	}
	function fun(){
	
	}
	
}
$liu=new Person();

echo $liu->fun();











?>


<form action="" method="post" name="login"/>
	用户名：<input type="text" name="username"/>
	密码：<input type="password" name="pwd"/>
	<input type="submit" value="登录"/>
</form>









