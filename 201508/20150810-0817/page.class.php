<?php
/*
	数据？条 一共？页  首页  上一页  当前页1  1 2 3 4 5 下一页 尾页 
*/
class page{
	public $page;		// 当前页	
	public $total;		//数据总数	
	public  $number = 5;	//一页显示5条	
	protected $offset = 3;	//显示页面偏移量	
	protected $maxpage;	//最大页面数	
	protected $minpage;	//最小页面数
	protected $prepage;	//上一页
	protected $nextpage;//下一页	
	protected $pageStr;	
	public function __construct($total,$pageStr="page"){		
		$this->pageStr = $pageStr;		
		$this->total = $total;		//数据总数 21
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
			return "&nbsp;&nbsp;<a href=\"?\".$this->pageStr.\"=1\">首页</a>&nbsp;&nbsp;";	
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
$page = new page(200);
echo $page->show();