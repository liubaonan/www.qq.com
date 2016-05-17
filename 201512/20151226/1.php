<?php
echo "患者信息";
?>
<?php 
//$a = fopen('liu.txt','a'); //建立文件
//fwrite($a,'hello 大家好,我是刘宝南');//写入数据

$a = fopen('liu.txt','a+');
//fwrite($a, '南锅锅');

$b = fstat($a);
var_dump($b);

echo $b['mtime'],'<br/>';

echo date("Y-m-d H:i:s",$b['mtime']);

echo fread($a,filesize('liu.txt'));

$con = "北京你好！";
for($i=0;$i<10;$i++){
	$con .= "北京你好\r\n";
}
echo $con;
$a = file_put_contents('liu.txt',$con);

//copy(iconv("utf-8","gb2312", "E:/备份/杂项/1.jpg"),"d:/123.jpg");

?>
