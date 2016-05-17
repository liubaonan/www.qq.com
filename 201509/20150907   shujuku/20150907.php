<?php

/*
	链接数据库
*/

$host = "localhost";
$user = "root";
$password = "123";



//连接数据库
error_reporting(0);	//屏蔽所有错误




$db = mysql_connect($host,$user,$password);			//连接数据库 mysql -h localhost -u root -p
mysql_query('set names utf8');						//set names utf8;	//客户端字符编码集

mysql_select_db('demo01',$db);						//use demo01;


//插入数据
$sql = "insert into message_replay values('',1,1,'插入的内容',now(),1,'".$_SERVER['REMOTE_ADDR']."')";
if(mysql_query($sql)){

	echo "插入成功";
}else{

	echo "写入失败";
}

echo "<hr />";



//删除数据
$sql = "delete from message_replay where id =10";
if(mysql_query($sql)){
	echo "删除成功";
}else{
	echo "删除失败";
}
echo "<hr />";



//更新数据
$sql = "update message_replay set `content`= '更新的内容' where id=1";
if(mysql_query($sql)){

	echo "更新成功";
}else{

	echo "更新失败";
}
echo "<hr />";



$sql = "select * from message_replay where mid=1";
$result = mysql_query($sql,$db);

/*				//
while($arr = mysql_fetch_row($result)){
	
	var_dump($arr);
}

*/


//MYSQL_NUM  MYSQL_BOTH(默认) MYSQL_ASSOC//关联
while($arr = mysql_fetch_array($result,MYSQL_NUM)){
	
	var_dump($arr);
}




mysql_close($db);	//释放资源