<?PHP
$xml="fuxi1.xml";
$file=simplexml_load_file($xml);
var_dump($file);

//给节点添加内容
$liu=$file->addchild('student');
$liu->addAttribute('id','300');//添加属性

$liu=$file->addchild('student');
$liu->addAttribute("id","222");
/*
$liu=$file->addchild('name','汪峰');
$liu->addAttribute('gerder','男');//这种方式不行 如果吧name建在student里面，应该用$file->student[3]->name="刘宝南";
*/
unset($file->student[1]->name);//删除节点

$file->student[3]->name="呜哈哈";//修改节点内容,没有自动添加
$file->student[3]->age="55";
$file->student[3]->name['ing']="333";//修改元素属性值,如果没有属性值的话，则自动添加

$file->student[4]->name="双节伦";
$file->student[4]->age="33";


$file->asXML('fuxi2.xml');//与fuxi2.xml关联