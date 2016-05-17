<?php

error_reporting("0");
$host="localhost";
$user="root";
$password="222";

mysql_query('set names utf8');
	
//建立数据库连接
$lian=mysql_connect($host,$user,$password);
if($lian){
	echo "成功<br/>";
}else{
	echo "失败";
}
mysql_select_db('students',$lian);

$sql="delete from users where id=4";
if(mysql_query($sql)){
	echo "删除成功";
}else{
	echo "删除失败";
}

$sql="insert into users values('','张丹','小丹','222','222','','',now(),'3443',1)";
if(mysql_query($sql)){
	echo "插入成功";
}else{
	echo "插入失败";
}
echo "<hr/>";

$sql="update users set `password`='333' where uid=1";

if(mysql_query($sql)){
	echo "更新成功";
}else{
	echo "更新失败";
}



$sql = "select * from users  ";
$result = mysql_query($sql);
while($arr = mysql_fetch_row($result)){
	
	var_dump($arr);
}












































/*
//选择数据库
mysql_select_db("board",$lian);

//定义mysql指令
$sql="select * from message";
$send=mysql_query($sql);
//数据检索

while($row=mysql_fetch_row($send)){
	var_dump($row);

$sql="insert into message values('','标题','张三',2015-11-11,3,0,4,'11.11.11')";
if(mysql_query($sql)){
	echo "插入成功";
}else{
	echo "插入失败";
}
$sql="delete from message where id=1";
if(mysql_query($sql)){
	echo "删除成功<br/>";
}else{
	echo "删除失败";
}
$sql="update message set `title`='biaoti' where id=2 ";

if(mysql_query($sql)){
	echo "更新成功";
}else{
	echo "更新失败";
}
$result = mysql_query($sql,$lian);
*/
			






















//关闭数据库连接
mysql_close($lian);
