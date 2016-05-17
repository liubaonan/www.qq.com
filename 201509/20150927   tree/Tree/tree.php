<link rel="stylesheet" href="./css/demo.css" type="text/css">
<link rel="stylesheet" href="./css/zTreeStyle/zTreeStyle.css" type="text/css">
<script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="./js/jquery.ztree.core-3.5.js"></script>
<SCRIPT type="text/javascript">	
	//index里粘贴	D:\wamp\www\www.qq.com\20150927   tree\Tree\zTree-zTree_v3-master\zTree_v3\demo\en
	var setting = {
		view: {
			dblClickExpand: false,
			showLine: true,
			selectedMulti: false
		},
		data: {
			simpleData: {
				enable:true,
				idKey: "id",
				pIdKey: "pId",
				rootPId: ""
			}
		},
/* 		callback: {
			beforeClick: function(treeId, treeNode) {
				var zTree = $.fn.zTree.getZTreeObj("tree");
				if (treeNode.isParent) {
					zTree.expandNode(treeNode);
					return false;
				} else {
					demoIframe.attr("src",treeNode.file + ".html");
					return true;
				}
			}
		} */
	};
	//var zNodes =[{"id":1,"pId":0,"name":"\u4e2d\u56fd"},{"id":2,"pId":1,"name":"\u5317\u4eac"},{"id":3,"pId":1,"name":"\u6cb3\u5317"},{"id":4,"pId":3,"name":"\u5510\u5c71"}];
	//D:\wamp\www\www.qq.com\20150927   tree\Tree\zTree-zTree_v3-master\zTree_v3\demo\en\core  standardData.html
	$(document).ready(function(){		
		$.ajax({
			type:"post",
			url:"tree2.php",
			dataType:"json",
			success:function(msg){
				$.fn.zTree.init($("#tree"), setting, msg);
			}
		})		
	});
</SCRIPT>
<div class="zTreeDemoBackground left">
	<ul id="tree" class="ztree"></ul>
</div>				