<?php

$users=[
	"admin"=>"111",
	"liu"=>"222",
];
if(!empty($_post)){
	if($user['username']==$_POST['username'] && $users['pwd']==$_POST['pwd']){
		echo "登录成功";
		exit;
	}else{
		echo "<script>alert(\"登录失败\")</script>";
	}
}
?>
<form method="POST" name="login" action="" enctype="multipart/form-data">
	用户名:<input type="text" name="username" /><br />
	密  码:<input type="password" name="pwd" /><br />	
	<input type="submit" value="提交">
</form>















































