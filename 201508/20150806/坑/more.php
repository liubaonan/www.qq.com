<?php

include_once("./data.php");

if(isset($_GET["sid"])){
	
	$temp = "";
	
	$sid = (int)$_GET['sid'];	//获取分类的数值
	$arrayData = $sid==1?"imgNews":"textNews";

	foreach($$arrayData as $k=>$t){
		$temp .= "<a target=\"_blank\" href=\"show.php?id=".$k."&sid=".$sid."\">".$t["title"]."</a><br />";
	}
	echo $temp;

}else{
	exit("<script>alert(\"请正确访问该脚本\")</script>");
}