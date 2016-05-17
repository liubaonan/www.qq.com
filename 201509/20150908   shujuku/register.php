<?php
/*
											   _ooOoo_
											  o8888888o
											  88" . "88
											  (| -_- |)
											  O\  =  /O
										   ____/`---'\____
										 .'  \\|     |//  `.
										/  \\|||  :  |||//  \
									   /  _||||| -:- |||||-  \
									   |   | \\\  -  /// |   |
									   | \_|  ''\---/''  |   |
									   \  .-\__  `-`  ___/-. /
									 ___`. .'  /--.--\  `. . __
								  ."" '<  `.___\_<|>_/___.'  >'"".
								 | | :  `- \`.;`\ _ /`;.`/ - ` : | |
								 \  \ `-.   \_ __\ /__ _/   .-` /  /
							======`-.____`-.___\_____/___.-`____.-'======
											   `=---='
							^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
									   佛祖保佑       永无BUG
*/


/*
	用户注册
*/
include_once("./include/config.ini.php");//网站配置文件
include_once(WEBROOT."/include/comm.ini.php");	//数据库配置文件
include_once(WEBROOT."/class/upload.class.php");	//上传类


//注册动作的执行
if(isset($_POST['action']) && $_POST['action'] == 'register'){

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$repassword = trim($_POST['repassword']);
	$nickname = trim($_POST['nickname']);
	$address = trim($_POST['address']);
	$phone = trim($_POST['phone']);
	$tel = trim($_POST['tel']);
	$pictrue = "";
	//判断用户名规则
	if(empty($username))
		exit("<script>alert(\"用户名不能为空\");window.history.go(-1);</script>");		
	if(!preg_match("/^[a-zA-z][a-zA-Z0-9_]{2,14}$/",$username))
		exit("<script>alert(\"用户名不符合规则 最少是3个字符 最多是10个字符\");window.history.go(-1);</script>");
	if(empty($password))
		exit("<script>alert(\"密码不能为空\");window.history.go(-1);</script>");	
	if($password != $repassword )
		exit("<script>alert(\"确认密码书写不正确\");window.history.go(-1);</script>");	
	//提交的验证码	
	$code = strtolower(trim($_POST['code']));	
	$picode = $_SESSION['code'];
	if($code != $picode)
		exit("<script>alert(\"验证码书写不正确\");window.location.href=\"register.php\";</script>");
		
	//进行图片的处理 
	if(!empty($_FILES['picture']['name'][0])){
		$files = $_FILES['picture'];
		$upload = new upload($files);
		$msg = $upload->actionUpload();	//文件上传	`
		$pictrue = $msg['errorMsg'][0];		//获取路径
	}	
	
	//查看是否允许有重复注册的现象
	$link = mysql_connect(HOST,USER,PAS);
	mysql_query("SET NAMES ".CHAR);
	mysql_select_db(DB);	//选择数据库

	try{
		//查询是否有重复的用户名
		$sql = "select * from users where `username`='".$username."'";
		$resultRepetUser = mysql_query($sql);
	
		if(mysql_fetch_array($resultRepetUser))
			throw new Exception("有重复的用户名，请重新注册",1);
		
		//数据库里面书写数据 users
		$password = md5($password);
		$sql = "insert into users values('','".$username."','".$nickname."','".$password."','".$pictrue."',NOW(),'','".$_SERVER['REMOTE_ADDR']."','1')";
	
		if(!mysql_query($sql))
			throw new Exception("USERS 插入失败",2);
	
		//获取users表插入的UID；
		$sql = "select uid from users order by uid desc limit 1";
		if(mysql_query($sql)){
		$resultuid =mysql_query($sql);

		$arr = mysql_fetch_array($resultuid,MYSQL_ASSOC);	
		}else{
		throw new Exception("查询UID 失败",3);}
		$uid = $arr['uid'];
	
		$sql = "insert into users_info values('".$uid."','".$address."','".$phone."','".$tel."')";
		if(!mysql_query($sql))
			throw new Exception("插入users_info表 失败",4);

	}catch(Exception $e){
			if(!empty($pictrue))
				unlink($pictrue);	//删除文件
			exit("<script>alert(\"".$e->getMessage()."\");window.history.go(-1);</script>");	
	}
	//成功标志
	exit("<script>alert(\"注册成功请登录\");window.location.href=\"login.php\";</script>");		
}
?>
<form method="post" action=""  enctype="multipart/form-data">
<table width="700" border="0" align="center" cellpadding="0" cellspacing="2" style="background-color:#c0c0c0">
  <tr>
    <td width="100" bgcolor="#FFFFFF">用户名:</td>
    <td bgcolor="#FFFFFF">
      <input type="text" name="username" >
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">密码：</td>
    <td bgcolor="#FFFFFF"><input type="password" name="password" ></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">确认密码:</td>
    <td bgcolor="#FFFFFF"><input type="password" name="repassword" ></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">昵称</td>
    <td bgcolor="#FFFFFF"><input type="text" name="nickname" ></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">头像</td>
    <td bgcolor="#FFFFFF"><input type="file" name="picture[]" ></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">地址</td>
    <td bgcolor="#FFFFFF"><input type="text" name="address" ></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">移动电话:</td>
    <td bgcolor="#FFFFFF"><input type="text" name="phone" ></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">宅电:</td>
    <td bgcolor="#FFFFFF"><input type="text" name="tel" ></td>
  </tr>
    <tr>
    <td bgcolor="#FFFFFF">验证码:</td>
    <td bgcolor="#FFFFFF"><input type="text" name="code" ><img src="./class/code.class.php"  onclick="this.src='./class/code.class.php?'+Math.random();" /></td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF"><input type="hidden" value="register" name="action" /></td>
    <td bgcolor="#FFFFFF"><input type="submit" value="注册"></td>
  </tr>
</table>
</form>

