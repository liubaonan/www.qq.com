<?php

$name = "启奥科技.txt";

$zh_name = iconv("utf-8","GBK",$name);	//字符编码及转换

$handle = fopen($zh_name,"w+");
fwrite($handle,"启奥科技");
fclose($handle);



/*

	$_GET
	$_POST
	$_FILES	//
	$_SEESION
	$_COOKIE
	$_REQUEST
	$_GLOBAL
*/
//上传文件的处理 

var_dump($_POST);
var_dump($_FILES);

?>



<form method="POST" action="./classUpload.php" enctype="multipart/form-data" >
	<input type="file" name="pic[]" /><BR />
	<input type="file" name="pic[]" /><BR />
	<input type="file" name="pic[]" /><BR />
	<input type="file" name="pic[]" /><BR />
	<input type="file" name="pic[]" /><BR />
	<input type="hidden" name="upload" value="1" />
	<input type="submit" value="upload" />
</form>