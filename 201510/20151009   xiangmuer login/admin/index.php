<!DOCTYPE html>
<?php

include_once '../include/config.ini.php';
include_once WEBROOT.'/include/comm.ini.php';
include_once WEBROOT.'/include/smarty.class.php';

if(!isset($_SESSION['isloging']) ){
	exit("<script>alert(\"请登录后操作\");window.location.href=\"login.php\"</script>");
}



$smarty = new smarty_web();

$bao = $_SESSION["name"];
$smarty->assign("liu",$bao);



$smarty->display('admin/index.html');


?>


