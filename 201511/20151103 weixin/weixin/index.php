<?php
include_once 'wxMessage.php';

header("Content-type:text/html;charset=utf-8");


$appId = "wxeab33010a4f2716c";
$appSecret = "f703eb634135aac1b31bd5cc6d75b706";

$wx = new wxMessage($appId, $appSecret);
$wx->getTextMessage();		//自动回复消息

if(isset($_GET['action']) && $_GET['action']="createMenu"){
	echo $wx->createMenu();
}


?>


<a href="./index.php?action=createMenu">创建菜单</a>
