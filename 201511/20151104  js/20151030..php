<?php

$a=3;
$b=3;
if($a=5 || $b=5){
	$a++;
	$b++;
}
echo $a;
echo "<br/>";
echo $b;


 for($a=1;$a<=9;$a++){
	for($b=1;$b<=$a;$b++){
		echo $b;
	}
	echo "<br/>";	
}
 

for($a=1;$a<20;$a++){
	for($b=1;$b<=30;$b++){
		for($c=1;$c<=300;$c++){
			if(5*$a+3*$b+1/3*$c==100&&$a+$b+$c==100){
				echo $a." ".$b." ".$c."<br/>";
			}
		}
	}
} 