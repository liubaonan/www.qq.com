<?php


$user=[
	"admin"=>111,
	"刘宝南"=>222
];


if(isset($_POST['action']) && $_POST['action']=='login'){
	
	$username=trim($_POST['username']);
	$password=trim($_POST['pwd']);
	
	if(empty($username)){
		exit("<script>alert(\"用户名不能为空\");window.history.go(-1);</script>");
	}
	if(empty($password)){
		exit("<script>alert(\"密码不能为空\");window.history.go(-1);</script>");
	}
	
	if(isset($user[$username]) && $user[$username]==$password){
			setcookie('isloging','1',time()+60);
			setcookie('username',$username,time()+60);
		exit("<script>alert(\"登陆成功\");window.location.href=\"tuichu.php\";</script>");
		
	}else{	
		exit("<script>alert(\"用户名或密码不正确\");window.history.go(-1);</script>");
		}	
}


if(isset($_GET['action']) && $_GET['action']=='logout'){
	
	exit("<script>alert(\"退出成功\");window.location.href=\"20150830...php\";</script>");
}
















































































