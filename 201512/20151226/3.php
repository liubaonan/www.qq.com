<?php

$horse = false;
$car = true;

$i = 1;
if($horse || ($i=6)){ 
$i++;
}
echo $i;


$pdo = new PDO("mysql:host='localhost';dbname='数据库名'","用户名","密码");
?>