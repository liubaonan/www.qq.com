<?php

interface A{
	const A_name="消防总队";
	function fun();
	function run();
}
interface B{
	const B_name="学校";
	function student();
	function teaching();
}

class c implements A,B{
	function fun(){
		echo "我是刘宝南";
	}
	function run(){
		echo B::B_name."要求我们好好学习";
	}
	function student(){
		echo "刘宝南";
	}
	function teaching(){
		echo "刘小森";
	}
}
$liu=new c("qi");
$liu->run();

echo "<hr/>";



if(file_exists("20150819.php")){
	$a = fopen('20150819.php','r'); 
}else{
	echo "没有找到";
}










?>
<table style="border:1px double red;width=500px;height=400px;">
<tr>
	<td colspan="6" style="text-align=center">2015年08月19日</td>
</tr>

<tr>
	<td>日</td>
	<td>一</td>
	<td>二</td>
	<td>三</td>
	<td>四</td>
	<td>五</td>
	<td>六</td>
</tr>
<tr>
	<td>1</td>
	<td>2</td>
	<td>3</td>
	<td>4</td>
	<td>5</td>
	<td>6</td>
	<td>7</td>
</tr>
<tr>
	<td>8</td>
	<td>9</td>
	<td>10</td>
	<td>11</td>
	<td>12</td>
	<td>13</td>
	<td>14</td>
</tr>
<tr>
	<td>15</td>
	<td>16</td>
	<td>17</td>
	<td>18</td>
	<td>19</td>
	<td>20</td>
	<td>21</td>
</tr>
<tr>
	<td>22</td>
	<td>23</td>
	<td>24</td>
	<td>25</td>
	<td>26</td>
	<td>27</td>
	<td>28</td>
</tr>
<tr>
	<td>29</td>
	<td>30</td>
	<td>31</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>






<?php 
class Calendar{ 
protected $_table;//table表格 
protected $_currentDate;//当前日期 
protected $_year; //年 
protected $_month; //月 
protected $_days; //给定的月份应有的天数 
protected $_dayofweek;//给定月份的 1号 是星期几 

public function __construct() 
{ 
$this->_table=""; 
$this->_year = isset($_GET["y"])?$_GET["y"]:date("Y"); 
$this->_month = isset($_GET["m"])?$_GET["m"]:date("m"); 
if ($this->_month>12){//处理出现月份大于12的情况 
$this->_month=1; 
$this->_year++; 
} 
if ($this->_month<1){//处理出现月份小于1的情况 
$this->_month=12; 
$this->_year--; 
} 
$this->_currentDate = $this->_year.'年'.$this->_month.'月份';//当前得到的日期信息 
$this->_days = date("t",mktime(0,0,0,$this->_month,1,$this->_year));//得到给定的月份应有的天数 
$this->_dayofweek = date("w",mktime(0,0,0,$this->_month,1,$this->_year));//得到给定的月份的 1号 是星期几 
} 

protected function _showTitle() 
{ 
$this->_table="<table><thead><tr align='center'><th colspan='7'>".$this->_currentDate."</th></tr></thead>"; 
$this->_table.="<tbody><tr>"; 
$this->_table .="<td style='color:red'>星期日</td>"; 
$this->_table .="<td>星期一</td>"; 
$this->_table .="<td>星期二</td>"; 
$this->_table .="<td>星期三</td>"; 
$this->_table .="<td>星期四</td>"; 
$this->_table .="<td>星期五</td>"; 
$this->_table .="<td style='color:red'>星期六</td>"; 
$this->_table.="</tr>"; 
} 

protected function _showDate() 
{ 
$nums=$this->_dayofweek+1; 
for ($i=1;$i<=$this->_dayofweek;$i++){//输出1号之前的空白日期 
$this->_table.="<td> </td>"; 
} 
for ($i=1;$i<=$this->_days;$i++){//输出天数信息 
if ($nums%7==0){//换行处理：7个一行 
$this->_table.="<td>$i</td></tr><tr>"; 
}else{ 
$this->_table.="<td>$i</td>"; 
} 
$nums++; 
} 
$this->_table.="</tbody></table>"; 
$this->_table.="<h3><a href='?y=".($this->_year)."&m=".($this->_month-1)."'>上一月</a>   "; 
$this->_table.="<a href='?y=".($this->_year)."&m=".($this->_month+1)."'>下一月</a></h3>"; 
} 

public function showCalendar() 
{ 
$this->_showTitle(); 
$this->_showDate(); 
echo $this->_table; 
} 
} 
$calc=new Calendar(); 
$calc->showCalendar();


































































