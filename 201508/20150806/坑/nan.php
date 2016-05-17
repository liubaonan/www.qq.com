<?php
include_once("shuzu.php");


$temp="<div><ul>";
foreach($news as $v){
		$temp="<div><ul>";
		//$temp .="<li><a target=\"_blank\" href=\"show.php?id=".$v['id']."\">"."<img src=\".$v['img']\"/></a></li>";		
		$temp .="<li><a target=\"_blank\" href=\"show.php?id=".$v['id']."\">"."<img src=\"".$v['img']."/></a></li>";
		$temp .="<li><a  target=\"_blank\"  href=\"show.php?id=".$v['id']."\">".$v['title']."</a>"."<br/></li>";
		$temp .=$v['discription'];
		
}
$temp="</div></ul>";
	echo $temp;



?>















<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>每日牛吧</title>
<style type="text/css">
body{
	margin:100px;
}

</style>
<body>
-->