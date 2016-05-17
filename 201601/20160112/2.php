<?php
session_start();

var_dump($_SESSION);

//echo file_get_contents('http://www.baidu.com');

var_dump(basename(__FILE__));

$url = 'http://localhost/www.qq.com/201601/20160112/2.php';
var_dump($url);
var_dump(basename($url));
$a = explode('.',$url);
$a = $a[2];
echo substr($a,0,3);
var_dump($_SERVER['PHP_SELF']);
var_dump($_SERVER['HTTP_REFERER']);

$path = __DIR__;
var_dump(scandir($path));exit;
if ($handle = opendir($path)) {
	while (false !== ($file = readdir($handle))) {
		if ($file != "." && $file != "..") {
			echo "$file\n";
		}
		}
		closedir($handle);
}
?>
