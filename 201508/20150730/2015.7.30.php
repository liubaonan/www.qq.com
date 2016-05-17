<?php
$type = [
	["学生用书","学生教材","教辅用书","课外读物","考试题集"],
	["名著","中国古典","世界名著","英文原著"],
	["考试用书","公务员","会计师","医药师"],
	["儿童读物","看图识字","动漫人物"],
	["武侠小说","金庸小说","古龙小说","玄幻小说"]
];
$colspan = 2;				//定义显示共几列 默认是2列
$width = 200;				//定义表格的宽度;
$tableColor = "#f0f0f0";	//表格背景色
$sortColor = "#999900";		//分类的背景色
$temp = "";					//定义空字符串变量
$temp .= "<table width=".$width." border=1 bgcolor=".$tableColor.">";
foreach($type as $v){
		$n = 1;
		$count = count($v);	//统计一下这个数组里面有多少个数据
		foreach($v as $b){
		if($n==1){
				$temp .= "<td colspan=".$colspan." bgcolor=".$sortColor.">".$b;
			}else{	//不是分类名称的时候输出
					//判断是$n=2;
				if($n==2)
					$temp .= "<tr>";
				$temp .= "<td>".$b."</td>";
				//加上中间闭合的tr标签
				if($n%$colspan ==1 && $n != $count)
					$temp .= "</tr><tr>";
				//补全空格
				if($n == $count && ($count-1)%$colspan !=0 ){
					$sum = $colspan-(($count-1)%$colspan);
				for($u=1;$u<=$sum;$u++){	//定义一下循环输出几个td	$colspan-(($count-1)%$colspan)
						$temp .= "<td>&nbsp;</td>";
					}
}
if($n == $count)
					$temp .= "</tr>";
				}
		$n++;
		}
}
$temp .= "</table>";
echo $temp;

/*
	函数累加
		任何区间数的累加
	如果返回值是FALSE 的话 说明两个输入的形参不能相等
*/
function NumberAdd($starNumber,$endNumber){
		if($starNumber==$endNumber)
		return FALSE;		
		$s = $starNumber>$endNumber?$endNumber:$starNumber;
		$e = $starNumber<$endNumber?$endNumber:$starNumber;
		$number = 0;		
		for($i = $s;$i<=$e;$i++){
			$number +=$i;
}
		return $number;	

}
$Cumulative = NumberAdd(1,100);
if(!$Cumulative)
	echo "输入的参数有错误！";
else
	echo "累加的结果为:".$Cumulative;
echo "<hr/>";




$colspan=2;
$temp = "";
$temp .= "<table  border=\"1\" bgcolor=\"#cfcfcf\" cellspacing=\"0\">";

for($i=0;$i<count($type);$i++){
	
	$temp .= "<tr><td colspan=$colspan bgcolor=\"#999900\">".$type[$i][0]."</td></tr>";
//判断表格是否需要添加空单元格
	$a=count($type[$i])-1;
	$j=$colspan-$a%$colspan;
	if($j!=$colspan){
		for($b=1;$b<=$j;$b++){
			$type[$i][$a+$b]="";
		}
	}
	for($k=1;$k<count($type[$i]);$k++){
//判断是否换行		
		if($k%$colspan==1){
			$temp .= "<tr><td>".$type[$i][$k]."</td>";
		}elseif($k%$colspan==0){
			$temp .= "<td width=\"65\">".$type[$i][$k]."</td></tr>";
		}else{
			$temp .= "<td width=\"65\">".$type[$i][$k]."</td>";
		}
	}
}
$temp .= "</table>";

echo $temp;

























?>

