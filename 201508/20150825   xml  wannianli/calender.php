<?php	
	/*
		万年历类
	*/
class calender{
	protected $current_year;	//当前年
	protected $current_month;	//当前月
	protected $pre_year;		//去年
	protected $pre_month;		//上一个月
	protected $next_year;		//明年
	protected $next_month;		//下一个月
	protected $current_month_days;		//当前月有多少天31
	protected $current_month_one_week;	//当前月1号是星期几; 6
	protected $current_month_last_week;	//当前月最后一天是星期几;5
		
	//构造方法
	public function __construct($year,$month){
	
		$this->current_year = $year;
		$this->current_month = $month;
		
		//上一个月的初始化
		$this->pre_month = $this->current_month-1<1?12:$this->current_month-1;
		//去年的初始化
		$this->pre_year = $this->pre_month ==12?$this->current_year-1:$this->current_year;
		
		//下一个月
		$this->next_month = $this->current_month+1>12?1:$this->current_month+1;
		//明年
		$this->next_year = $this->next_month ==1?$this->current_year+1:$this->current_year;
		//当前月有多少天
		$this->current_month_days = date("t",mktime(0,0,0,$this->current_month,15,$this->current_year));	
		//当前月1号是星期几
		$this->current_month_one_week = date("N",mktime(0,0,0,$this->current_month,1,$this->current_year));
		
		//当前月最后一天是星期几;
		$this->current_month_last_week = date("N",mktime(0,0,0,$this->current_month,$this->current_month_days,$this->current_year));
	
	}
	//下拉菜单年代码
	protected function getMenuYear(){	
		$temp = "<select onchange=\"MM_jumpMenu('parent',this,0)\">";
		for($i=$this->current_year-10;$i<=$this->current_year+10;$i++){
			$showSelect = ($i==$this->current_year)?"selected=\"selected\"":"";
			$temp .= "<option  $showSelect value=\"?year=".$i."&month=".$this->current_month."\">".$i."</option>";
		}
		$temp .= "</select>";
		return $temp;
	}
	
	//下拉菜月份
	protected function getMenuMonth(){
		$temp = "<select onchange=\"MM_jumpMenu('parent',this,0)\">";
		for($i=1;$i<=12;$i++){
			$showSelect = ($i==$this->current_month)?"selected=\"selected\"":"";
			$temp .= "<option $showSelect value=\"?year=".$this->current_year."&month=".$i."\">".$i."</option>";
		}
		$temp .= "</select>";
		return $temp;
	}	
	//上一个月
	protected function getPreMonth(){
		$temp = "<a href=\"?year=".$this->pre_year."&month=".$this->pre_month."\">上月</a>";
		return $temp;
	}
	
	//下一个月
	protected function getNextMonth(){
	
		$temp = "<a href=\"?year=".$this->next_year."&month=".$this->next_month."\">下月</a>";
		return $temp;
	}
	
	//显示星期几
	protected function getWeekShow(){
	
		$week = ["星期日","星期一","星期二","星期三","星期四","星期五","星期六"];
		$temp = "\r\n\t<tr>";
		for($i=0;$i<=6;$i++){
			$temp .="\r\n\t\t<td>".$week[$i]."</td>";
		}
		$temp .= "\r\n\t</tr>";
		return $temp;
	}
	
	//显示日期
	protected function getMonthDays(){
		
		$lastSpace = $this->current_month_last_week==7?6:6-$this->current_month_last_week;
	
		$j = 0;//计算折行取余次数的 计数变量
		$temp = "\r\n\t<tr>";
		
			//首先计算出1号之前循环出多少空格 1 7 0 1 1 1 // 1 2 1 3 3
			if($this->current_month_one_week != 7){
				for($m=1;$m<=$this->current_month_one_week;$m++){
					$temp .="\r\n\t<td>&nbsp;</td>";
					$j++;
				}
			}
			
			for($i=1;$i<=$this->current_month_days;$i++){
				$temp .="\r\n\t\t<td>".$i."</td>";
				$j++;
				
				if($j%7 ==0){
					if($this->current_month_last_week == 6 && $i== $this->current_month_days)
						 $temp .="";
					else
						 $temp .="\r\n</tr>\r\n<tr>";
				}
			}
			//首先计算出31号之后循环出多少空格  76   15    24   33   42  51  60
			for($n=1;$n<=$lastSpace;$n++){
				$temp .="\r\n\t\t<td>&nbsp;</td>";
			}
		$temp .="\r\n\t</tr>";
		
		return $temp;
	}
	

	//显示万年历
	public function ShowCalender(){
		$temp = "<table>";
		$temp .= "\r\n\t<tr>
					\r\n\t\t<td>".$this->getPreMonth()."</td>
					\r\n\t\t<td>".$this->getMenuYear()."</td>
					\r\n\t\t<td>".$this->getMenuMonth()."</td>
					\r\n\t\t<td>".$this->getNextMonth()."</td>
				\r\n\t</tr>";
		$temp .= "\r\n</table>";
		
		$temp.="\r\n<table>";
		$temp.=	$this->getWeekShow();	//显示的星期几
		$temp .= $this->getMonthDays();
		$temp .="\r\n</table>";
		
		return $temp;
	}
	
}

$year = isset($_GET['year'])?intval($_GET['year']):date("Y",time());
$month = isset($_GET['month'])?intval($_GET['month']):date("n",time());


$calender = new calender($year,$month);
echo $calender->ShowCalender();

?>

<script>
function MM_jumpMenu(targ,selObj,restore){ 
	eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'"); 
		if (restore) selObj.selectedIndex=0; 
} 
</script>