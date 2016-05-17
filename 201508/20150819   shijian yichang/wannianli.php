<?php
class Clender{	
	public $years;
	public $months;
	public $currentYear;   //当前年
	public $currentMonth;	//当前月
	public $premonth;		//上一月
	public $preyears;		//上一年
	public $nextmonth;		//下一月
	public $nextyears;		//下一年
	public $spaceCell;
	
	public function __construct(){
		//$this->years=date("Y",time());
		//$this->months=date("n",time());
		$this->years=(isset($_GET['year']))?$_GET['year']:date("Y",time());
		$this->months=(isset($_GET['month']))?$_GET['month']:date("n",time());		
		$this->premonth = ($this->months-1)?$this->months-1:12;
		$this->preyears = $this->premonth == 12?$this->years-1:$this->years;			
		$this->nextmonth = ($this->months+1>12)?1:$this->months+1;
		$this->nextyears = $this->nextmonth == 1?$this->years+1:$this->years;	
	}	
	//打印上一月代码
	public function preMonths(){
		echo "<a href=\"?year=".$this->preyears."&month=".$this->premonth."\">上一月</a>";	
	}	
	//打印下一月代码
	public function nextMonths(){	
		echo "<a href=\"?year=".$this->nextyears."&month=".$this->nextmonth."\">下一月</a>";		
	}
	
	public function ShowYearSelect(){	
	    $yearSelect = "<select onchange=\"MM_jumpMenu('parent',this,0)\">";
	    $yearSelect .= "\r\n\t<option>请选择年份</option>";
	    $startYear = 2015-10;
	    $endYear = 2015+10;
	    for($i=$startYear;$i<=$endYear;$i++){
		//1.当前没有传递year 我们需要显示2015 如有有显示当前传递过来的年份			
			$showSelect = ($i==$this->years)?" selected=\"selected\"":"";
			//$yearSelect .= "<option".$showSelect." value=\"?year=".$i."\">".$i."</option>";
			$yearSelect .= "<option".$showSelect." value=\"?month=".$this->months ."&year=".$i."\">".$i."</option>";
	    }
	    $yearSelect .="\r\n</select>";	
	    echo $yearSelect;
	}
	
	public function ShowMonthSelect(){
		$monthSelect="<select onchange=\"MM_jumpMenu('parent',this,0)\">";
	    $monthSelect .= "\r\n\t<option>请选择月份</option>";
		for($i=1;$i<=12;$i++){
		    /*
			if(isset($_GET['month'])){
			$this->months = intval($_GET['month']);
			$showSelect = ($i==$this->months)?"selected=\"selected\"":"";	
			$monthSelect .= "<option".$showSelect."value=\"?month=".$i."\">".$i."</option>";
			*/
			$showSelect = ($i==$this->months)?" selected=\"selected\"":"";	
			$monthSelect .= "<option".$showSelect." value=\"?year=".$this->years."&month=".$i."\">".$i."</option>";
			//$monthSelect .= "<option".$showSelect." value=\"?month=".$i."\">".$i."</option>";
		   }		
		$monthSelect .="\r\n</select>";
		echo $monthSelect;
	}
	
	public function ShowDays(){
		return date("t",mktime(0,0,0,$this->months+1,0,$this->years));
	}
	
	public function ShowSpaceCell(){
		return date("w",mktime(0,0,0,$this->months,1,$this->years));
	}
	
	public function rows(){
		return ceil(($this->ShowDays()+$this->ShowSpaceCell())/7)+1;
	}
	
	public function ShowTable(){
		$temp="<table>";
		$temp.="<tr align=\"center\" style=\"background:#c0c0c0\"><td>星期日</td><td>星期一</td><td>星期二</td><td>星期三</td><td>星期四</td><td>星期五</td><td>星期六</td></tr>";
		$k=1;
		for($i=2;$i<=$this->rows();$i++){
			$temp.="<tr style=\"background:#c0c0c0\">";
			for($j=0;$j<=6;$j++){
				if($i==2){
					if($j<$this->ShowSpaceCell()){
						$temp.="<td></td>";
					}					
				    else{
						$temp.="<td>".$k++."</td>";
					}					
				}
				else{
					if($k<=$this->ShowDays()){
						$temp.="<td>".$k++."</td>";
					}
					else{
						$temp.="<td></td>";
					}
				}				
			}
			$temp.="</tr>";
		}
		$temp.="</table>";
		echo $temp;
	}	
	public function Show(){
		$this->preMonths();
		$this->ShowYearSelect();
		$this->ShowMonthSelect();
		$this->nextMonths();
		$this->ShowTable();
	}
}
$clender=new Clender();
$clender->Show();
?>
<script>

	function MM_jumpMenu(targ,selObj,restore){ 
	eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'"); 
		if (restore) selObj.selectedIndex=0; 
} 

</script>










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


