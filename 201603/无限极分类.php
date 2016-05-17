/**
 * 无限极分类获取子集
 * $sub二维数组
 * $parent为$sub中父级字段索引
 * $falg=1,返回一个排好序的2维数组，0代表返回依次递归的多位数组
 * $id父级标志位
 */
/*
$area=array(
     array('id'=>1,'name'=>'河北','parent'=>0),
     array('id'=>2,'name'=>'石家庄','parent'=>1),
     array('id'=>3,'name'=>'唐山','parent'=>1),
     array('id'=>4,'name'=>'路北区','parent'=>3),
     array('id'=>5,'name'=>'北京','parent'=>0),
     array('id'=>6,'name'=>'海淀','parent'=>5),
     array('id'=>7,'name'=>'上地','parent'=>6),
     array('id'=>8,'name'=>'昌平','parent'=>5),
     array('id'=>9,'name'=>'山东','parent'=>0),
     array('id'=>10,'name'=>'青岛','parent'=>9),
     array('id'=>11,'name'=>'济南','parent'=>9),
     array('id'=>12,'name'=>'路南区','parent'=>3)
   );
   如果需要类似该数组递归排序:getSon($area,'parent',1,0);
*/
function getSon($sub,$parent,$id=0,$flag=1,$html='--',$level=0){
    $arr=array();
    foreach($sub as $val){
        if($flag){
            if($val[$parent]==$id){
                $val['level']=$level+1;
                $val['html']=str_repeat($html,$val['level']);
                $arr[]=$val;
                $arr=array_merge($arr,getSon($sub,$parent,$val['id'],1,$html,$level+1));
            }
        }else{
            if($val['parent']==$id){
                $tmp=getSon($sub,$parent,$val['id'],0,$html='');
                if(!empty($tmp)){
                    $val['child']=$tmp;
                }
                $arr[]=$val;
            }
        }
    }
    return $arr;
}
/**
 * 无限极分类获取父集
 * $sub二维数组
 * $parent为$sub中父级字段索引
 * $id子集id
 * $falg=1,返回一个排好序的2维数组，0代表返回依次递归的多位数组
 * 如果需要类似该数组递归排序 getParent($area,'parent',6,1);
 */
function getParent($sub,$parent='parent',$id,$flag=1){
    $arr=array();
    foreach ($sub as $val) {
        if($flag){
            if($id==$val['id']){
                $arr[]=$val;
                if($val[$parent]!=0){
                    $arr=array_merge($arr,getParent($sub,$parent,$val[$parent],1));
                }
            }
        }else{
            if($val['id']==$id){
                $tmp=getParent($sub,$parent,$val[$parent],0);
                if(!empty($tmp)){
                    $val[$parent]=$tmp;
                }
                $arr[]=$val;
            }
        }
    }
    return $arr;
}
/**
 * @return 当前时间毫秒时间戳
 */
function getMicTime(){
    list($usec, $sec) = explode(" ", microtime());
    return intval(((float)$usec + (float)$sec)*1000);
}
