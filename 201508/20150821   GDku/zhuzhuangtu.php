<?php


$data  = [
	"2010"=>['php'=>20,'java'=>30,'web'=>100],
	"2011"=>['php'=>30,'java'=>40,'web'=>190],
	"2012"=>['php'=>30,'java'=>40,'web'=>190],
	"2013"=>['php'=>30,'java'=>40,'web'=>190],
	"2014"=>['php'=>30,'java'=>40,'web'=>190],
	"2015"=>['php'=>26,'java'=>0,'web'=>74],
];




$graph = new Graph(800,600,'auto');				//画一个背景

$graph->SetScale('textint');

$graph->SetTitleBackground('wheat2',TITLEBKG_STYLE3,TITLEBKG_FRAME_BOTTOM);	//头部北京颜色

$zhStr = iconv("utf-8","GB2312","启奥科技招生人数统计表");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD); // 设置中文字体
$graph->title->set($zhStr);


//设置Y轴数据
$phpdata = [20,30,30,30,25,26];
$javadata =[30,40,60,10,20,0];
$webdata = [100,110,130,130,90,74];

$phpbar = new BarPlot($phpdata);
$javabar = new BarPlot($javadata); 
$webbar = new BarPlot($webdata); 

$arrBars = [$phpbar,$javabar,$webbar];
$groupBars = new AccBarPlot($arrBars);

$graph->Add($groupBars);




//设置X轴坐标 
$xzhStr = iconv("utf-8","GB2312","招生年份");

$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD); 	// 设置中文字体
$graph->xaxis->SetTitle($xzhStr,'high');
$graph->xaxis->SetFont(FF_ARIAL,FS_BOLD,6); 
$graph->xaxis->SetLabelAngle(45); 
//设置X轴坐标轴数据
$xdataLable = array_keys($data);
$graph->xaxis->SetTickLabels($xdataLable);


 
$graph->Stroke();


?>