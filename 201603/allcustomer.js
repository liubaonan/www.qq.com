
jQuery(function($) {
				//initiate dataTables plugin
			
				var myTable = 
				$('#dynamic-table').DataTable( {
						
					"processing":true,
					"serverSide":true,
					
					 "ajax": {
							url: "/index.php/Home/Index/myCustomerajax",
							type: "POST",
				        },
				    "order": [[ 0, "desc" ]],//默认排序
				    
				  //禁用排序
					"columnDefs":[
					   {"orderable":false,"targets":[0,0]},
					   {"orderable":false,"targets":[0,1]},
					   {"orderable":false,"targets":[0,2]},
					   {"orderable":false,"targets":[0,3]},
					   {"orderable":false,"targets":[0,4]},
					   {"orderable":false,"targets":[0,5]},
					   {"orderable":false,"targets":[0,6]},
					   {"orderable":false,"targets":[0,7]},
					   {"orderable":false,"targets":[0,8]},
					],
				    
			        "columns": [	
								{ "data": "chose" },
								{ "data": "brand" },
								{ "data": "username" },
								{ "data": "state" },
					            { "data": "communication" },
					            { "data": "visittime" },
					            { "data": "visitcontent" },
					            { "data": "nvtime" },
					            { "data": "nvcontent" },		          
					            { "data": "communication" },
					            { "data": "firsttime" },
					            { "data": "check" },
					        ],
				})
} );
