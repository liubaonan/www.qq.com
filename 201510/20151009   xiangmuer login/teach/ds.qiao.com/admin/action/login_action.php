<?php
//引入配置文件 
include_once '../../include/config.ini.php';
include_once WEBROOT.'/include/comm.ini.php';

try{
	$pdo= new PDO($dsn, USER, PAS, $options);
}catch (Exception $e){
	exit("<script>alert(\"数据库连接异常\");window.history.go(-1);</script>");
}

//login 登录处理
if(isset($_POST['action']) && $_POST['action'] =='login'){
		
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		
		/*
		$sql = "select * from members where username = ':username'";
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(':username', $username);
		$result = $stmt->fetch();
		var_dump($result);
		*/
		
		$sql = "select * from members where username='".$username."'";
		$stmt = $pdo->query($sql);
		$result = $stmt->fetch();
		//密码判断
		if($password == $result['password']){
			//session 赋值
			
			exit("<script>alert(\"登录成功!\");window.location.href=\"../index.php\"</script>");
		}else{
			exit("<script>alert(\"密码错误!\");window.location.href=\"../login.php\"</script>");
		}

}

	//ajax 异步验证
	if(isset($_POST['action']) && $_POST['action'] =='ajax_user'){
		
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);
			
			$msgJson = [];
	
			if(empty($username) || empty($password)){
				$msgJson = ['code'=>1,'message'=>"用户名或者密码不能为空"];
				exit(json_encode($msgJson));
			}

			if(!empty($username)){
				//用户名或者密码不正确验证
				$sql = "select * from members where username='".$username."'";
				$stmt = $pdo->query($sql);
				$result = $stmt->fetch();
				
				if(!$result){
						$msgJson = ['code'=>1,'message'=>"没有此用户"];
				}else{	//判断密码是否正确
						if($result['password'] != $password){
							$msgJson = ['code'=>1,'message'=>"密码不正确"];
						}
				}				
				exit(json_encode($msgJson));
			}
	
			$msgJson = ['code'=>0];
			echo  json_encode($msgJson);
		
	}

?>