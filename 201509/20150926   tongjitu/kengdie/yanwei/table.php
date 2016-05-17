
<html>
<head></head>

<body>
<div id="main" style="height:400px;"></div>
<script type="text/javascript" src="./src/els.js"></script>
<script type="text/javascript" src="./src/area.js"></script>

<script type="text/javascript" src="./src/js.js"></script>


<script>

require.config({
    packages: [
        {
            name: 'echarts',
            location: './src',
            main: 'echarts'
        },
        {
            name: 'zrender',
            location: './src/zrender-2.1.0', // zrender与echarts在同一级目录
            main: 'zrender'
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
                
                myChart.setOption(option);
            }
        );

	

var option = {
    title : {
        text: '某楼盘销售情况一览表',
        subtext: '如有虚构，纯属巧合'
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
            data:[10, 12, 21, 54, 260, 830, 710]
        },
        {
            name:'预购',
            type:'line',
            smooth:true,
            itemStyle: {normal: {areaStyle: {type: 'default'}}},
            data:[30, 182, 434, 791, 390, 30, 10]
        },
        {
            name:'意向',
            type:'line',
            smooth:true,
            itemStyle: {normal: {areaStyle: {type: 'default'}}},
            data:[1320, 1132, 601, 234, 120, 90, 20]
        }
    ]
};
                    
</script>

</body>
</html>