﻿<?php
if(isset($_POST)){	//也就是有提交的数据 要进行数据验证
	$username = trim($_POST['username']);		//用户名
	$pwd = trim($_POST['pwd']);					//密码
	$repwd = trim($_POST['repwd']);				//确认密码
	$mail= trim($_POST['email']);				//用户邮箱
	
	$address=trim($_POST['address']);
	$sex=trim($_POST['sex']);
	$phonp=trim($_POST['phono']);
	

	$usernameResult = preg_match("/^[A-Za-z0-9]{4,8}$/ui",$username);
	if(empty($username)){
		exit("<script>alert(\"用户名不能为空\");window.history.go(-1);</script>");
	}
	
	if(empty($pwd)){
		exit("<script>alert(\"密码不能为空\");window.history.go(-1);</script>");
	}
	if(empty($repwd)){
		exit("<script>alert(\"确认密码不能为空\");window.history.go(-1);</script>");
	}
	
	if(!($pwd===$repwd)){
		exit("<script>alert(\"确认密码不一致\");window.history.go(-1);</script>");
	}

	if(empty($mail)){
		exit("<script>alert(\"邮箱不能为空\");window.history.go(-1);</script>");
	}
	
	//^[A-Za-z0-9]+$　　//匹配由数字和26个英文字母组成的字符串 /^[A-Za-z0-9]{4,8}$/ui

	$usernameResult = preg_match("/^[A-Za-z0-9]\w{1,7}$/ui",$username);
	
	if(!$usernameResult){
		exit("<script>alert(\"用户名不符合要求\");window.history.go(-1);</script>");
	}
	
	$pwdResult =  preg_match("/^\w{6,10}$/",$repwd);
	
	if(!$pwdResult){
		exit("<script>alert(\"密码不符合要求!\");window.history.go(-1);</script>");
	}
	

	//email 规则验证
	$emailResult = preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/ui",$mail);
	if(!$emailResult){
		exit("<script>alert(\"邮箱规则不正确\");window.history.go(-1);</script>");
	}

	error_reporting("0");+
	$host="localhost";
	$user="root";
	$password="222";
	mysql_query('set names utf8');		
	//建立数据库连接
	$lian=mysql_connect($host,$user,$password);	
	mysql_select_db("students",$lian);
	
$sql="insert into users values('','$username','$pwd','$mail')";
		if(mysql_query($sql)){
			echo "插入成功";
		}else{
			echo "插入失败";
		}
$sql="insert into users_message values('','$address','$phono','$sex')";
		if(mysql_query($sql)){
			echo "插入成功";
		}else{
			echo "插入失败";
		}	
	
		
}

