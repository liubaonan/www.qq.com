
<html>
<head></head>
<body>
<div id="main" style="height:400px;"></div>
<script type="text/javascript" src="./src/els.js"></script>
<script type="text/javascript" src="./src/area.js"></script>
<script type="text/javascript" src="./src/jquery.js"></script>

<script>
	require.config({
		packages:[
		{
			name:'echarts',
			location:'./src',
			main:'echarts'
		},
		{
			name:'zrender',
			location:'./src/zrender-2.1.0/src',
			main:'zrender'
		}
		]
		
	});



require(
            [
                'echarts',
                'echarts/chart/line',   // 按需加载所需图表，如需动态类型切换功能，别忘了同时加载相应图表
                'echarts/chart/bar'
            ],
            function (ec) {
                var myChart = ec.init(document.getElementById('main'));
					// 过渡
					myChart.showLoading({
						text: 'Were building the buildings as fast as we can...please wait! ',    //loading text
					});
				$.ajax({
					typt:post,
					url:"tu2.php",	
					async:false,
					dataType:"json",
					success:function(result){
						option.series[0].data.result.cj;
						option.series[1].data.result.yg;
						option.series[2].data.result.ys;
					}										
				})		
				myChart.hideLoading();
                myChart.setOption(option);
				
            }
        );
var option = {
    title : {
        text: '某楼盘销售情况',
        subtext: '纯属虚构'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['意向','预购','成交']
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data : ['周一','周二','周三','周四','周五','周六','周日']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'成交',
            type:'line',
            smooth:true,
            itemStyle: {normal: {areaStyle: {type: 'default'}}},
            data:[]
        },
        {
            name:'预购',
            type:'line',
            smooth:true,
            itemStyle: {normal: {areaStyle: {type: 'default'}}},
            data:[]
        },
        {
            name:'意向',
            type:'line',
            smooth:true,
            itemStyle: {normal: {areaStyle: {type: 'default'}}},
            data:[]
        }
    ]
};              	
</script>

