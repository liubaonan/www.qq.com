<html>
<head>
</head>
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
            location: './src/zrender-2.1.0', // zrender��echarts��ͬһ��Ŀ¼
            main: 'zrender'
        }
    ]
});

/*
 require(
            [
                'echarts',
                'echarts/chart/line',   // load-on-demand, don't forget the Magic switch type.
                'echarts/chart/bar'
            ],
            function (ec) {
                var myChart = ec.init(document.getElementById('main'));
    
                myChart.setOption(option);
            }
        );
*/


require(
            [
                'echarts',
                'echarts/chart/line',   // �����������ͼ�?���趯̬�����л����ܣ�������ͬʱ������Ӧͼ��
                'echarts/chart/bar'
            ],
            function (ec) {
                var myChart = ec.init(document.getElementById('main'));
					// loading������
					myChart.showLoading({
						text: '��������� ',    //loading text
					});
				$.ajax({
					typt:"post",
					url:"tu2.php",	
					//async:false,
					dataType:"json",
					success:function(result){
						option.series[0].data=result.cj;
						option.series[1].data=result.yg;
						option.series[2].data=result.ys;
						
						myChart.hideLoading();
						myChart.setOption(option);
				
					}										
				})		
			
            }
        );
	

var option = {
    title : {
        text: 'ĳ¥���������һ����',
        subtext: '�����鹹�������ɺ�'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['����','Ԥ��','�ɽ�']
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
            data : ['��һ','�ܶ�','����','����','����','����','����']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'�ɽ�',
            type:'line',
            smooth:true,
            itemStyle: {normal: {areaStyle: {type: 'default'}}},
            data:[0,0,0,0,0,0,0]
        },
        {
            name:'Ԥ��',
            type:'line',
            smooth:true,
            itemStyle: {normal: {areaStyle: {type: 'default'}}},
            data:[0,0,0,0,0,0,0]
        },
        {
            name:'����',
            type:'line',
            smooth:true,
            itemStyle: {normal: {areaStyle: {type: 'default'}}},
            data:[0,0,0,0,0,0,0]
        }
    ]
};
                    
</script>

</body>
</html>