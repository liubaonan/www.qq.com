<?php
/*
	我要有留言的输入框
*/

include_once("./include/config.ini.php");//网站配置文件
include_once(WEBROOT."/include/comm.ini.php");	//数据库配置文件



//权限判断
if(!isset($_SESSION['islogin']) && $_SESSION['islogin'] !=1)
	exit("<script>alert(\"没有登录，请登录后操作\");window.location.href=\"login.php\";</script>");



if(isset($_POST['action']) && $_POST['action'] == 1){

//写入数据库
	if(empty($_POST['title']))
		exit("<script>alert(\"标题不能为空\");window.history.go(-1);</script>");
		
	if(empty($_POST['message']))
		exit("<script>alert(\"内容不能为空\");window.history.go(-1);</script>");

				
	$link = mysql_connect(HOST,USER,PAS);
	mysql_query("SET NAMES ".CHAR);
	mysql_select_db(DB);	//选择数据库
	
	$title = trim($_POST['title']);
	$message = htmlspecialchars(trim($_POST['message']));
	$uid = intval($_POST['uid']);
	
	$sql = "insert into message values('','".$title."','".$message."',now(),'".$uid."','1',1,'".$_SERVER['REMOTE_ADDR']."')";
	
	if(mysql_query($sql))
		exit("<script>alert(\"留言成功!\");window.location.href=\"index.php\";</script>");
	else
		exit("<script>alert(\"插入失败!\");window.location.href=\"message.php\";</script>");
		
	
}

?>
<html>
<title><?= $web['title'] ?></title>
<body>
<form action="" method="POST">
	留言标题:<input type="text" name="title" /><br /><br />
	留言内容:<textarea name="message" id="textarea" cols="45" rows="5"></textarea><br />
			<input type="hidden" value="1" name="action" />
			<input type="hidden" value="<?= $_SESSION['uid'] ?>" name="uid" />
			<input type="submit" value="提交"  />
	
</form>
</body>
</html>

