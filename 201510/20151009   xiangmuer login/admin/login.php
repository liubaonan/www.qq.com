<?php
include_once('../include/config.ini.php');
include_once(WEBROOT.'/include/smarty.class.php');

$smarty = new smarty_web();




$smarty->display('admin/login.html');



?>