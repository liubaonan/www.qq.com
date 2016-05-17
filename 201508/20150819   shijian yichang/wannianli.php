<?php
class Clender{	
	public $years;
	public $months;
	public $currentYear;   //��ǰ��
	public $currentMonth;	//��ǰ��
	public $premonth;		//��һ��
	public $preyears;		//��һ��
	public $nextmonth;		//��һ��
	public $nextyears;		//��һ��
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
	//��ӡ��һ�´���
	public function preMonths(){
		echo "<a href=\"?year=".$this->preyears."&month=".$this->premonth."\">��һ��</a>";	
	}	
	//��ӡ��һ�´���
	public function nextMonths(){	
		echo "<a href=\"?year=".$this->nextyears."&month=".$this->nextmonth."\">��һ��</a>";		
	}
	
	public function ShowYearSelect(){	
	    $yearSelect = "<select onchange=\"MM_jumpMenu('parent',this,0)\">";
	    $yearSelect .= "\r\n\t<option>��ѡ�����</option>";
	    $startYear = 2015-10;
	    $endYear = 2015+10;
	    for($i=$startYear;$i<=$endYear;$i++){
		//1.��ǰû�д���year ������Ҫ��ʾ2015 ��������ʾ��ǰ���ݹ��������			
			$showSelect = ($i==$this->years)?" selected=\"selected\"":"";
			//$yearSelect .= "<option".$showSelect." value=\"?year=".$i."\">".$i."</option>";
			$yearSelect .= "<option".$showSelect." value=\"?month=".$this->months ."&year=".$i."\">".$i."</option>";
	    }
	    $yearSelect .="\r\n</select>";	
	    echo $yearSelect;
	}
	
	public function ShowMonthSelect(){
		$monthSelect="<select onchange=\"MM_jumpMenu('parent',this,0)\">";
	    $monthSelect .= "\r\n\t<option>��ѡ���·�</option>";
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
		$temp.="<tr align=\"center\" style=\"background:#c0c0c0\"><td>������</td><td>����һ</td><td>���ڶ�</td><td>������</td><td>������</td><td>������</td><td>������</td></tr>";
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
protected $_table;//table��� 
protected $_currentDate;//��ǰ���� 
protected $_year; //�� 
protected $_month; //�� 
protected $_days; //�������·�Ӧ�е����� 
protected $_dayofweek;//�����·ݵ� 1�� �����ڼ� 

public function __construct() 
{ 
$this->_table=""; 
$this->_year = isset($_GET["y"])?$_GET["y"]:date("Y"); 
$this->_month = isset($_GET["m"])?$_GET["m"]:date("m"); 
if ($this->_month>12){//��������·ݴ���12����� 
$this->_month=1; 
$this->_year++; 
} 
if ($this->_month<1){//��������·�С��1����� 
$this->_month=12; 
$this->_year--; 
} 
$this->_currentDate = $this->_year.'��'.$this->_month.'�·�';//��ǰ�õ���������Ϣ 
$this->_days = date("t",mktime(0,0,0,$this->_month,1,$this->_year));//�õ��������·�Ӧ�е����� 
$this->_dayofweek = date("w",mktime(0,0,0,$this->_month,1,$this->_year));//�õ��������·ݵ� 1�� �����ڼ� 
} 

protected function _showTitle() 
{ 
$this->_table="<table><thead><tr align='center'><th colspan='7'>".$this->_currentDate."</th></tr></thead>"; 
$this->_table.="<tbody><tr>"; 
$this->_table .="<td style='color:red'>������</td>"; 
$this->_table .="<td>����һ</td>"; 
$this->_table .="<td>���ڶ�</td>"; 
$this->_table .="<td>������</td>"; 
$this->_table .="<td>������</td>"; 
$this->_table .="<td>������</td>"; 
$this->_table .="<td style='color:red'>������</td>"; 
$this->_table.="</tr>"; 
} 

protected function _showDate() 
{ 
$nums=$this->_dayofweek+1; 
for ($i=1;$i<=$this->_dayofweek;$i++){//���1��֮ǰ�Ŀհ����� 
$this->_table.="<td> </td>"; 
} 
for ($i=1;$i<=$this->_days;$i++){//���������Ϣ 
if ($nums%7==0){//���д���7��һ�� 
$this->_table.="<td>$i</td></tr><tr>"; 
}else{ 
$this->_table.="<td>$i</td>"; 
} 
$nums++; 
} 
$this->_table.="</tbody></table>"; 
$this->_table.="<h3><a href='?y=".($this->_year)."&m=".($this->_month-1)."'>��һ��</a>   "; 
$this->_table.="<a href='?y=".($this->_year)."&m=".($this->_month+1)."'>��һ��</a></h3>"; 
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


