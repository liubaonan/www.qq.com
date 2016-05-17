<?php
include_once("./include/config.ini.php");//网站配置文件
include_once(WEBROOT."/include/comm.ini.php");	//数据库配置文件

if(isset($_POST['action']) && $_POST['action'] == 1){

	if(empty($_POST['title']))
		exit("<script>alert(\"留言标题不能为空\");window.history.go(-1)</script>;");
	
	if(empty($_POST['message']))
		exit("<script>alert(\"留言内容不能为空\");window.history.go(-1);</script>");
	
	$link=mysql_connect($host,$user,$password);
	mysql_query("SET NAMES ".$charset);
	mysql_select_db($dbname);//选择数据库
	
	$title=trim($_POST['title']);
	$message=htmlspecialchars(trim($_POST['message']));
	$uid=intval($_POST['uid']);
		
	//写入数据库
	$sql="insert into message values('','".$title."','".$message."',now(),'".$uid."','1',1,'".$_SERVER['REMOTE_ADDR']."')";
	
	if(mysql_query($sql))
		exit("<script>alert(\"留言成功\");window.location.href=\"indexx...php\";</script>");	
	else
		exit("<script>alter(\"留言失败\");window.location.href=\"message...php\";<script>");
	
}
?>
<form method="POST" action="">
	留言标题：<input type="text" name="title"/><br/>
	留言内容：<textarea name="message" id="textarea" cols="45" rows="5"></textarea><br />
			  <input type="hidden" name="action" value="1"/>
			  <input type="hidden" name="uid" value="1"/>
			  <input type="submit" value="提交"/>
</form>