<?php

session_start();

$user = [
	'admin'=>'111',
	'dai'=>'222'
];

//密码验证的判断
if(isset($_POST['action']) && $_POST['action'] == "login"){

		$username = trim($_POST['user']);
		$pwd = trim($_POST['pwd']);
		$code = strtolower($_POST['code']);
		
		//验证码 正确不
		if($code != strtolower($_SESSION['code']))
			exit("<script>alert(\"验证码不正确\");window.history.go(-1);</script>");
		if(empty($username))
			exit("<script>alert(\"用户名不能为空\");window.history.go(-1);</script>");
		if(empty($pwd))
			exit("<script>alert(\"密码不能为空\");window.history.go(-1);</script>");
			

		if(isset($user[$username]) && $user[$username] == $pwd){
		
				/*
				$time = 60;	//过期时间为 60秒
				setcookie("isloging","1",time()+60);
				setcookie("username",$username,time()+60);
				*/
				
				
				if(isset($_POST['lifetime']) && $_POST['lifetime'] ==1){
					$name = session_name();
					$id = session_id();
					$lifetime = time()+3600;
					setcookie($name,$id,$lifetime);		//第二种设置session 声明周期的一种方式
				}
				
				$_SESSION['isloging'] =1;
				$_SESSION['username'] = "admin";
				
				

				exit("<script>alert(\"登录成功\");window.location.href=\"member.php\";</script>");
		}else{
			exit("<script>alert(\"用户名或者密码不正确\");window.history.go(-1);</script>");
		}
			

}


//判断注销操作

if(isset($_GET['action']) && $_GET['action'] == "logout"){
				/*
				setcookie("isloging","1",time()-1);
				setcookie("username","",time()-1);
				*/

				
				$name = session_name();
				$id = session_id();
				$lifetime = time()-1;
				setcookie($name,$id,$lifetime);		//第二种设置销毁cookie
				unset($_SESSION['isloging']);
				unset($_SESSION['username']);
				session_destroy();
				exit("<script>alert(\"退出成功\");window.location.href=\"login.php\";</script>");
}











?>