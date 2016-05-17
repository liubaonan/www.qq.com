<?php





if($_GET['id'] ==1){

	$readfile = "20.jpg";
	$nameFile = "zly.jpg";

}

/*
	文件下载
*/
//告诉浏览器这是个二进制文件
header ("Content-Type: application/octet-stream"); 
//来告诉浏览器我的这个文件是当作附件被下载的 文件名是xxxx
header ( "Content-Disposition: attachment; filename=".$nameFile);
readfile($readfile);








?>