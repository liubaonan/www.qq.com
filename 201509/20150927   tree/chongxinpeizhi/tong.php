<div id="main" style="height:400px;"></div>
<script type="text/javascript" src="./src/els.js"></script>
<script type="text/javascript" src="./src/area.js"></script>
<script type="text/javascript" src="./src/jquery.js"></script>
<script type="text/javascript">

require.config({
    packages: [
        {
            name: 'echarts',
            location: './src',
            main: 'echarts'
        },
        {
            name: 'zrender',
            location: 'src/zrender-master/src', // zrender and echarts are in the same directory.
            main: 'zrender'
        }
    ]
});



require(
            [
                'echarts',
                'echarts/chart/line',   // load-on-demand, don't forget the Magic switch type.
                'echarts/chart/bar'
            ],
            function (ec) {
                var myChart = ec.init(document.getElementById('main'));
				
				$.ajax({
					type:'post',
					url:'tong2.php',
					dataType:'json',
				success:function(result){
						option.series[0].data=result.lm;
						option.series[1].data=result.emil;
						option.series[2].data=result.sp;
						option.series[3].data=result.zj;
						option.series[4].data=result.sou;	
						 myChart.hideLoading();
						myChart.setOption(option);
				}
				})
	 
	 
	 
	 
	 
              
            }
        );
	
var option = {
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['邮件营销','联盟广告','视频广告','直接访问','搜索引擎']
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
            name:'邮件营销',
            type:'line',
            stack: '总量',
            itemStyle: {normal: {areaStyle: {type: 'default'}}},
            data:[]
        },
        {
            name:'联盟广告',
            type:'line',
            stack: '总量',
            itemStyle: {normal: {areaStyle: {type: 'default'}}},
            data:[]
        },
        {
            name:'视频广告',
            type:'line',
            stack: '总量',
            itemStyle: {normal: {areaStyle: {type: 'default'}}},
            data:[]
        },
        {
            name:'直接访问',
            type:'line',
            stack: '总量',
            itemStyle: {normal: {areaStyle: {type: 'default'}}},
            data:[]
        },
        {
            name:'搜索引擎',
            type:'line',
            stack: '总量',
            itemStyle: {normal: {areaStyle: {type: 'default'}}},
            data:[]
        }
    ]
};                  
</script>


