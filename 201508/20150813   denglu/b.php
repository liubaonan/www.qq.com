<?php


/*

	用于存储 数据
*/

//var_dump($_POST);

$users = [
	'admin'=>'111',
	'dai'=>'222'
];


//var_dump($users);

if(isset($_POST['username_r'])){
	$users[$_POST['username_r']] = $_POST['pwd_r'];
}

echo "====B users===";
var_dump($users);
echo "====B users===";

var_dump($_GET);


