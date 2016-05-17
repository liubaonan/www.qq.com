
<?php
include_once("shuzu.php");

$stemp="";
	$stemp.="<div><ul>";
foreach($news as $v){

	$stemp.="<li><a href=\"shuzu.php?id=".$v['id']."\" target=\"_blank\">".$v['img']."</a></li>";
}

echo $stemp;
?>


