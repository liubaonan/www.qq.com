<?php 
include_once('shuzu.php');

$id=$_GET['id'];

echo $news[$id]['title'];

echo "<hr/>";

echo $news[$id]['discription'];

?>