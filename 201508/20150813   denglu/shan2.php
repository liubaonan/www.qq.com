<?php
include_once("shan.php");
$stemp="<div>\r\n\t<ul>";

foreach($news as $key=>$value){
	$stemp.="<li><a target=\"_self\" href=\"shan3.php?id=".$key."\">".$value['title']."</a></li> ";
	
}$stemp.="\r\n\t</ul>\r\n</div>";
echo $stemp;
