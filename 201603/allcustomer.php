<?php
namespace Home\Model;

use Think\Model;

class CustomerModel extends Model{
    
    protected $tableName = 'client';                //如果没有在配置文件中设置表前缀，就应该设置为protected $trueTableName = 'crm28_client'; 
  
    /**
     * 连锁网公共用户异步获取列表数据
     */
    public function getAllCustomerPost($start,$length,$draw,$search){      
       //搜索正则
       if($search){
           $where = "client.id = trace.cid && client.uid = user.id &&  client.state = 0 && brand like '%".$search."%' ";
       } else{
           $where = 'client.uid = user.id && client.id = trace.cid && client.state = 0';
       }
       
        //查询数据库
       $model = new Model('client');
       $array = $model->table('crm28_client client,crm28_user user,crm28_trace trace')
       ->field('client.brand as brand,client.id as id,user.username as username,client.state as state,
           trace.visittime as visittime,trace.visitcontent as visitcontent,trace.nvtime as nvtime,
           trace.nvcontent as nvcontent,trace.communication as communication,trace.firsttime as firsttime')
       ->where($where)->limit($start,$length)->order('brand desc')->group('id')->select(); 
    
/*        $model = new Model('client');
       $array = $model->join('crm28_trace ON crm28_client.id=crm28_trace.cid && crm28_client.state=0')
                ->join('crm28_user ON crm28_client.uid = crm28_user.id')->field('client.brand as brand,client.id as id,user.username as username,client.state as state,
                trace.visittime as visittime,trace.visitcontent as visitcontent,trace.nvtime as nvtime,
                trace.nvcontent as nvcontent,trace.communication as communication,trace.firsttime as firsttime')
                ->limit($start,$length)->order('brand desc')->select();
        */
       
       //查询符合搜索条件总条数
       $total = $model->table('crm28_client client,crm28_user user,crm28_trace trace')->where($where)->count();
       //查询总条数
       $Filteredtotal = $model->table('crm28_client client,crm28_user user,crm28_trace trace')->where('client.uid = user.id && trace.cid = client.id && client.state = 0')->count();
      
       //遍历数据
       $data = [];
       foreach($array as $v){
           $temp = [];
           $temp['brand']=$v['brand'];
           $temp['username'] = $v['username'];
           $temp['visittime'] = $v['visittime'];
           $temp['visitcontent'] = $v['visitcontent'];
           $temp['nvtime'] = $v['nvtime'];
           $temp['nvcontent'] = $v['nvcontent'];
           $temp['communication'] = $v['communication'];
           $temp['firsttime'] = $v['firsttime'];
           $temp['check'] = '<a href="/index.php/Home/Index/publictrack?id='.$v['id'].'&brand='.$v['brand'].'">跟踪</a>';
           $data[] = $temp;
       }
        
       $temp = [
           'draw'=>intval($draw),							//页数
           'recordsTotal'=>intval($Filteredtotal),			//表的总记录数
           'recordsFiltered'=>intval($total),				//条件过滤后记录数
           'data'=>$data
       ];
       echo json_encode($temp);
    }
   
    /**
     * 连锁网管理所有用户异步获取数据
     */
     public function getAllCustomerajax($start,$length,$draw,$search){
            //搜索正则
            if($search){
                $where = "client.uid = user.id && trace.cid = client.id && brand like '%".$search."%' ";
            } else{
                $where = 'client.uid = user.id && trace.cid = client.id ';
            }
             
            //查询数据库
            $model = new Model('client');
            $array = $model->table('crm28_client client,crm28_user user,crm28_trace trace')
            ->field('client.brand as brand,client.id as id,client.person1phone as person1phone,user.username as username,client.state as state,trace.visittime as visittime,
              trace.visitcontent as visitcontent,trace.nvtime as nvtime,trace.nvcontent as nvcontent,trace.communication as communication,trace.firsttime as firsttime')
               ->where($where)->limit($start,$length)->order('brand desc')->group('id')->select();
            //查询符合搜索条件总条数
            $total = $model->table('crm28_client client,crm28_user user,crm28_trace trace')->where($where)->count();
            //查询总条数
            $Filteredtotal = $model->table('crm28_client client,crm28_user user,crm28_trace trace')->where('client.uid = user.id && trace.cid = client.id && client.state = 0')->count();
        
            //遍历数据
            $data = [];
            foreach($array as $v){
                $temp = [];
                $temp['chose']='<th class="" style="width:100px;text-align:center">
									<input type="checkbox" class="ace" />
								</th>';
                $temp['brand'] = $v['brand'];
                $temp['username'] = $v['username'];
                if($v['state'] ==0){
                    $temp['state'] = '公共';
                }elseif($v['state'] == 1){
                    $temp['state'] = '保护';
                }elseif($v['state'] == 2){
                    $temp['state'] = '已答';
                }else{
                    $temp['state'] = '未知';
                }
                if($v['communication'] == 1){
                    $temp['communication'] == '电话';
                }elseif($v['communication'] == 2){
                    $temp['communication'] = '面谈';
                }elseif($v['communication'] == 3){
                    $temp['communication'] = 'QQ或MSN';
                } 
                $temp['visittime'] = $v['visittime'];
                $temp['visitcontent'] = $v['visitcontent'];
                $temp['nvtime'] = $v['nvtime'];
                $temp['nvcontent'] = $v['nvcontent'];
                $temp['communication'] = $v['communication'];
                $temp['firsttime'] = $v['firsttime'];
                $temp['check'] = '<div class="hidden-sm hidden-xs action-buttons">
							<a href="/index.php/Home/Index/mobilePhone?phone='.$v['person1phone'].'">电话</a>
							<a href="/index.php/Home/Index/mytrack?id='.$v['id'].'">跟踪记录</a>
							<a class="red"  onclick="return supplierdelete('.$v['id'].')" href="#">
								<i class="ace-icon fa fa-trash-o bigger-130"></i>
							</a>				
						</div>';
                $data[] = $temp;
            }
        
            $temp = [
                'draw'=>intval($draw),							//页数
                'recordsTotal'=>intval($Filteredtotal),			//表的总记录数
                'recordsFiltered'=>intval($total),				//条件过滤后记录数
                'data'=>$data
            ];
            echo json_encode($temp);
        
    }
    
    
    
    
    
    
    
    

}

?>