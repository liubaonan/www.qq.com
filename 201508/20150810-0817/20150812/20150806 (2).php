<?php


/*


*/

$news[0]=1;
$news[1]['name']= "启奥";

$news[]=1;
$news[]['name']= "启奥";


$news = array(
	0=>1,
	1=>array('name'=>"启奥")
);

$news = array(1,array('name'=>"启奥"));


$news =[
	1,
	['name'=>"启奥"]

];


echo $news[1]['name'];

$news3[] =1;
$news3["5"]=2;		//5
$news3["06"]=2;		//06
$news3[3.8] =2;		//3
$news3["3.8"] =2;	//3.8
$news3["3aaaa"] =2;	//3aaaa
$news3[]=3;
var_dump($news3);




/*
	河北省包含。。。。。。
	山东包含 。。。。。。
	北京市直辖市
	天津也是直辖市
	
*/
$citys = [
	"河北"=>['唐山','石家庄','沧州','保定'],
	"山东"=>['青岛','德州','烟台'],
	'北京',
	'天津'
];


$count = count($citys);	//4
$keys = array_keys($citys);

$temp = "";
for($i=0;$i<4;$i++){
	if(is_string($keys[$i])){
		$temp.=$keys[$i]."省包含".implode(",",$citys[$keys[$i]])."<br />";	
	}else{
		$temp.=$citys[$keys[$i]]."是直辖市<br />";
	}
}

echo $temp;

echo "<hr />";
$temp = "";
foreach($citys as $k=>$v){

	if(is_string($k)){
		$temp .= $k."省包括".implode(",",$v)."<br />";
	}else{
		$temp .=$v."是直辖市<br />";
	}
}

echo $temp ;




$content = ["河北"=>"我是值","唐山"=>1,2,3,4,5];

foreach($content as $k=>$v){
	echo $v;
	//var_dump(current($content));
}

reset($content);

while($r = each($content)){
	var_dump($r);
}



$listArray = ["启奥","学校","2015","PHP"];

/*
$name = $listArray[0];
$school = $listArray[1];
$year = $listArray[2];
$job = $listArray[3];
*/

list(,,$year)= $listArray;

echo $year;




var_dump($_GET);





