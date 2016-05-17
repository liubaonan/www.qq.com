<?php

/*
	无限极分类

*/
$sorts = [
	['id'=>1,'name'=>'新闻','pid'=>0],
	['id'=>5,'name'=>'NBA','pid'=>4],
	['id'=>6,'name'=>'CBA','pid'=>4],
	['id'=>7,'name'=>'足球','pid'=>4],
	['id'=>8,'name'=>'德甲','pid'=>7],
	['id'=>9,'name'=>'游戏','pid'=>0],
	['id'=>10,'name'=>'银熊联盟','pid'=>9],
	['id'=>2,'name'=>'娱乐','pid'=>1],
	['id'=>3,'name'=>'军事','pid'=>1],
	['id'=>4,'name'=>'体育','pid'=>1],
];
function getSorts(&$sorts,$pid=0,$lenth,$html="--"){
	static $temparr = [];		
	foreach($sorts as $v){	
			//var_dump(current($sorts));
			echo $lenth;
			
			if($v['pid']== $pid){			
				$v['html'] = str_repeat($html,$lenth); //""
				$temparr[] = $v;
				getSorts($sorts,$v['id'],$lenth+1);				
			}
	}	
	return $temparr;
}
$temparr = getSorts($sorts,0,0);
var_dump($temparr);

$temp ="<select name=\"sort\">";

foreach($temparr as $s){
	$temp .= "<option value=\"".$s['id']."\">".$s['html'].$s['name']."</option>";
}

$temp .="</select>";

echo $temp;









?>