<?php
include_once("shan.php");

$id=$_GET['id'];




echo "标题是:".$news[$id]['title'];

echo "内容:".$news[$id]['content'];

?>