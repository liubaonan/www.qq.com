<?php




$name="启奥科技.txt";

$zhstring=iconv("utf-8","GBK",$name);//强文本$name由utf-8格式转换为GBK格式，

$handle=fopen($zhstring,"w+");
fwrite($handle,"我叫刘宝南");
fclose($handle);

/*
	超全局变量
	$_GET
	$_POST
	$_FILES	//
	$_SEESION
	$_COOKIE
	$_REQUEST
	$_GLOBAL
*/




		
?>


<form method="POST" action="upload...php" enctype="multipart/form-data">
	<input type="file" name="picture[]"/><br/>	
	<input type="file" name="picture[]"/><br/>
	<input type="file" name="picture[]"/><br/>
	<input type="submit" value="upload"/>
	
	<input type="hidden" name="upload" value="1" />
</form>
	



<?php
/*

$liu=fopen("liu.txt","a");
$bao="www.baidu.com";
echo fwrite($liu,$bao)."<br/>";
fclose($liu);

echo getcwd();
echo "<br/>";
$ha= dirname(__FILE__);
echo "<br/>";
var_dump(gettimeofday());

echo is_dir("liu.txt");



var_dump(scandir($ha));

*/






























































































































































































