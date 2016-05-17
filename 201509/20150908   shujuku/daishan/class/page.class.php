<?php
/*
	分页类	
		分页类	
	数据？条 一共？页  首页  上一页  当前页1  1 2 3 4 5 下一页 尾页 
*/
class page{
	public $page;		// 当前页	
	public $total;		//数据总数	
	public  $number;	//一页显示5条	
	protected $offset = 3;	//显示页面偏移量	
	protected $maxpage;	//最大页面数	
	protected $minpage;	//最小页面数
	protected $prepage;	//上一页
	protected $nextpage;//下一页	
	protected $pageStr;	
	
	public function __construct($total,$pageStr="page",$number = '5'){
		
		$this->pageStr = $pageStr;
		$this->total = $total;		//数据总数 21
		$this->number = $number;
		$this->maxpage = ceil($this->total/$this->number);
		$this->page = isset($_GET[$this->pageStr])?intval($_GET[$this->pageStr]):1;	//当前页属性初始化
		if($this->page >$this->maxpage)
			$this->page = $this->maxpage;		
	}	
	protected function total(){	
		return "数据共".$this->total."条&nbsp;&nbsp;";		
	}	
	protected function totalPage(){		
		return "一共".$this->maxpage."页&nbsp;&nbsp;";
	}	
	//显示首页
	protected function showIndexPage(){
		if($this->page != 1 )
			return "&nbsp;&nbsp;<a href=\"?".$this->pageStr."=1\">首页</a>&nbsp;&nbsp;";	
	}	
	//显示上一页
	protected function showPrePage(){	
		$page = $this->page-1;
		if($this->page != 1 )
			return "&nbsp;&nbsp;<a href=\"?".$this->pageStr."=".$page."\">上一页</a>&nbsp;&nbsp;";	
	}	
	//当前页
	protected function currentPage(){
		return "&nbsp;当前为:".$this->page."页&nbsp;";
	}	
	//循环页码
	protected function showAllPageNumber(){	
		//开始循环的页码
		$s = $this->page<=$this->offset?1:$this->page-$this->offset;		
		//结束的页码
		$end = ($this->maxpage-$this->page) <=$this->offset?$this->maxpage:$this->page+$this->offset;		
		$temp = "";
		for($i=$s;$i<=$end;$i++){
			$temp .=  "&nbsp;<a href=\"?".$this->pageStr."=".$i."\">".$i."</a>&nbsp;";
		}
		return $temp;	
	}
	//下一页
	protected function showNextPage(){		
		$page = $this->page+1;
		if($this->page != $this->maxpage )
			return "&nbsp;<a href=\"?".$this->pageStr."=".$page."\">下一页</a>&nbsp;";
	}	
	//尾页
	protected function showMaxPage(){	
		if($this->page != $this->maxpage  )
			return "&nbsp;<a href=\"?".$this->pageStr."=".$this->maxpage."\">末页</a>&nbsp;";			
	}	
	//显示分页
	public function show(){
	
		$temp = "";
		
		$temp .= $this->total();
		$temp .= $this->totalPage();
		$temp .= $this->currentPage();
		$temp .= $this->showIndexPage();
		$temp .= $this->showPrePage();
		$temp .= $this->showAllPageNumber();
		$temp .= $this->showNextPage();
		$temp .= $this->showMaxPage();
		return $temp;
	
	}

}
/*
$data =[
	1=>['id'=>1,'title'=>'新闻1'],
	2=>['id'=>2,'title'=>'新闻1'],
	3=>['id'=>3,'title'=>'新闻1'],
	4=>['id'=>4,'title'=>'新闻1'],
	5=>['id'=>5,'title'=>'新闻1'],
	6=>['id'=>6,'title'=>'新闻1'],
	7=>['id'=>7,'title'=>'新闻1'],
	['id'=>8,'title'=>'新闻81'],
	['id'=>9,'title'=>'新闻82'],
	['id'=>10,'title'=>'新闻83'],
	['id'=>11,'title'=>'新闻8'],
	['id'=>12,'title'=>'新闻8'],
	['id'=>13,'title'=>'新闻8'],
	['id'=>14,'title'=>'新闻8'],
	['id'=>15,'title'=>'新闻8'],
	['id'=>16,'title'=>'新闻8'],
	['id'=>17,'title'=>'新闻83'],
	['id'=>18,'title'=>'新闻8'],
	['id'=>19,'title'=>'新闻8'],
	['id'=>20,'title'=>'新闻8'],
	['id'=>21,'title'=>'新闻8'],
	['id'=>22,'title'=>'新闻8'],
	['id'=>23,'title'=>'新闻8'],
	['id'=>24,'title'=>'新闻8'],
	['id'=>25,'title'=>'新闻8'],
	['id'=>26,'title'=>'新闻8'],
	['id'=>27,'title'=>'新闻8'],
	['id'=>28,'title'=>'新闻8'],
	['id'=>29,'title'=>'新闻8'],
	['id'=>30,'title'=>'新闻8'],
	['id'=>31,'title'=>'新闻8'],
	['id'=>32,'title'=>'新闻8'],
	['id'=>33,'title'=>'新闻8'],
	['id'=>34,'title'=>'新闻8'],
	['id'=>35,'title'=>'新闻8'],

];


$number = 5;	//每页显示多少条数据
$page = isset($_GET['page'])?intval($_GET['page']):1;	//当前是第几页

$startNumber = ($page ==1)?1:($page-1)*$number+1;
$total = count($data);

$temp = "";
for($i=$startNumber;$i<$startNumber+$number;$i++){

	if($i >$total)
		break;
	$temp .= "新闻ID".$data[$i]['id']."新闻标题".$data[$i]['title']."</br >";
	
	
}
echo $temp;


$page = new page($total);
echo $page->show();

*/