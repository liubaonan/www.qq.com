<?php 

//echo concat('abc','d','ef','g');

$arr = array(1,2,3,4,5,8);

echo array_search(2,$arr);

echo time(),'<br/>';
echo date('Y-m-d'),'<br/>';
echo date('Y-m-d',strtotime('-1 days')),'<br/>';
echo date('Y-m-d',strtotime('-1 month')),'<br/>';
echo strtotime('1 days'),'<br/>';

//$nvtime = date('Y-m-d H:i:s', strtotime ("+11 day", strtotime($visittime)));

echo strtotime('+1 day');
echo date('Y-m-d',11463311596).'<br/>';

parse_str("name=Bill&age=60",$arr);
var_dump($arr);

$a = error_log("我这是做一个33实验\t\r\n",3,'./webdate/error_log.txt');
var_dump($a);

echo rand(),'<br/>';
echo md5(uniqid(rand(),true));
echo '<hr/>';

$arr = array('liu','bao','nan');
var_dump(json_encode($arr));

echo $b = json_encode($arr);

var_dump(json_decode($b));

?>




















