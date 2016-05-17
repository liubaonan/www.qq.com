<?php
//一个多维数组，如果单元值是数字，则修改为其2倍
$arr = [1,2,4,'a',['liu',5,7,]];

function liu($arr){
	
	foreach($arr as $k=>$v){
		if(is_int($v))
			echo $v = $v*2;
		elseif(is_string($v))
			echo $v;
		else
			$arr[$k] = liu($arr[$k]);		
	}
	return $arr;
}

liu($arr);
echo '<br/>';
$k = 11;
for($a = 1;$a<9;$a++){
	for($b=1;$b<$k-$a;$b++){
		echo '&nbsp';
	}
	for($c=1;$c<=2*$a-1;$c++){
		echo "*";
	}
	echo '<br/>';
}

$a = 98;
switch($a){
	case 39:
		echo '不及格';
	break;
	case ($a>90 && $a<100);
		echo 'ok';
	break;
	default;
}
echo "<br>";
$i = 0;
while(++$i){
	switch ($i){
		case 5:
			echo '这是5';
		break;
		
		case 10:
			echo '这是10';
		break 2;
		
		default;
		break;
		
	}		
}
echo $i;  //输出结果为：这是5 这是10  10

echo '<br/>';
for($i=0;$i<13;$i++){
	if($i == 10){
		continue;
	}
	echo '$i='.$i.'<br/>';
}

goto a;
echo 'aa';
a:
echo 'bb';

for($i=0,$j=50;$i<100;$i++){
	while ($j--){
		if($j == 17) goto end;
	}
}
echo "i = $i";
end:
echo 'j = 17';

echo $i;
?>