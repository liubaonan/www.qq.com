<?php
class action{
	public $username;	//用户名
	public $pwd;		//密码	
	
	public function __construct($username,$pwd){
		$this->username = $username;
		$this->pwd = $pwd;
	}	
//获取数据库内容
	private function getDbUser(){
		return [
			'admin'=>'111',
			'dai'=>'222'
		];
	}	
//登录的动作
	public function login(){	
		$users = $this->getDbUser();
		$usersinfo = array_keys($users);	//['admin','dai']		
		if(in_array($this->username,$usersinfo) && $this->pwd == $users[$this->username])
			return true;
		else
			return false;
	}
}
if(!empty($_POST)){
	$user = new action($_POST['username'],$_POST['pwd']);	
	if($user->login()){
		echo $user->username."登录成功";
		exit;
	}else{	
		echo "<script>alert(\"没有此用户，或密码错误\")</script>";
	}
}



?>

<form action="" method="post">
	用户:<input type="text" name="username" />
	密码:<input type="text" name="pwd" />
		<input type="submit" value="登录" />	
</form>