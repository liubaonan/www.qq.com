<?php
include_once '../../include/config.ini.php';
include_once WEBROOT.'/include/comm.ini.php';

//连接数据库
try{
	$pdo= new PDO($dsn, USER, PAS, $options);
}catch(Exception $e){
	exit("<script>alert(\"数据库连接异常\")；window.history.go(-1);</script>");
}

//登录验证
/*
if(isset($_POST['action']) && $_POST['action'] == 'login'){

	echo "222";

}
*/

//退出登录
if(isset($_GET['action']) && $_GET['action'] == 'logout'){
	$_SESSION = array();
	if (isset($_COOKIE[session_name()])) {
		setcookie(session_name(), '', time()-1);
	}
	session_destroy();
	exit("<script>alert(\"退出成功\");window.location.href=\"../login.php\";</script>");
}


//异步验证
if(isset($_POST['action']) && $_POST['action'] == 'ajax'){
	
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$code = strtolower(trim($_POST['code'])); //提交验证码

	
//判断该用户是否以登录
if(isset($_SESSION['name']) && $_SESSION['name'] == $username){
	exit("<script>alert(\"您以登录，请勿重新登录\");window.location.href=\"index.php\"</script>");	
}
	
	if(empty($username)){
			exit("请输入用户名");
	}
	if(empty($password)){
			exit("请输入密码");
	}
	if(empty($code)){
			exit("验证码不能为空");
	}else{
		if($code !== $_SESSION['code']){
			exit("验证码不正确");
		}
	}
	
	if(!empty($username)){
			//用户名或者密码验证
			$sql = "select * from ds_users where username='".$username."'";
			$stmt = $pdo->query($sql);
			$arr = $stmt->fetch();
			
			if(!$arr){
				exit("您没有权限，请注册");						
			}else{	//判断密码是否正确
				if($arr['password'] != $password){
					exit("密码不正确");				
				}else{
					$_SESSION['isloging'] = '2';
					$_SESSION['name'] = $username;
					$_SESSION['password'] = $password;
					
					if(isset($_POST['liu']) && $_POST['liu'] == 'bao'){
						$lifetime = time()+60*60*3;
						setcookie(session_name(),session_id(),$lifetime,"/");
					}
					exit("<script>alert(\"登录成功\");window.location.href=\"index.php\"</script>");
			}
		}				
	}
}








?>