<!DOCTYPE html>
<?php
define("WEB", dirname(__FILE__));
define("WEBROOT", substr(str_replace("\\", "/",WEB),0,-6));
echo WEBROOT;
echo "<br/>";
include_once WEBROOT.'/libs/smarty.class.php';
//实例化
$smarty = new Smarty();
// 基本设置
$smarty ->setTemplateDir(WEBROOT."/template");
$smarty->setCompileDir(WEBROOT.'/template_c');
$smarty->setCacheDir(WEBROOT.'/cache');
$smarty->setConfigDir(WEBROOT.'/config');
$smarty->caching = FALSE;
$smarty ->debugging = true;
$smarty->left_delimiter = '{#';
$smarty->right_delimiter = '#}';



$smarty->display('tree.html');
