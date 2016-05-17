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

// $smarty ->testInstall();//调试方法
//设定模版变量

$arr=[
	[1,"标题1"],
	[2,"标题2"],
	[3,"标题3"],
	[4,"标题4"]
];

$arr2=[
	'one'=>['name'=>"刘宝南"],
	'two'=>['name'=>"刘晓森"]
];

$arr3=[
	'one'=>['name'=>"刘宝南"],
	'two'=>['name'=>"刘晓森"]
];
$obj = (object)$arr3;
//var_dump($obj);
$smarty->assign('arr',$arr);
$smarty->assign('arr2',$arr2);
$smarty->assign('obj',$obj);
$smarty->assign('date',date("Y-m-d"));
$smarty->assign('date2',time());
$smarty->assign('title',"我 是 景县刘宝南 在启奥学习");

$smarty->assign('sen','吼哈哈');




$smarty->display('index2.html');
































?>