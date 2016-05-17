<?php
DB  database 
DBMS  database managenment system;

DBS database system

db 数字字符、图形、图形 声音
mysql 是属于关系型数据库

mysql 数据引擎  MyiSam Innodb;

mysql 5.6.17 数据库版本


mysql 数据库特点及优点

社区版本、灵活 主从服务器、免费、体积小

有利于数据共享、可以建立不同级别的用户权限


//概念

 数据库 database;
 
 一组表 tables;
 
 数据，，一行 代表record  代表的是一种真实存在的实体
		列	字段（字段名、字段属性） column;



//要调用这些常用命令 应该吧 mysql/bin 目录路径加载到 系统环境变量path里面去 




mysql 常用命令

1. 
	1.1 mysql -h localhost -u root -p  连接数据库
	1.2 查看所有数据库 show databases;
	1.3 mysql> show tables;
	1.4 mysql> describe 表名 	查看表的结构
	1.5 mysql> create database 数据库名称		创建数据库
	1.5 mysql> drop database  数据库名			删除数据库
	1.6 mysql> show grants;			//查看自己的权限
	1.7 mysql> show grants for 用户[dai@'localhost'\dai@'%' dai@'10.2.27.86'];
	1.8 mysql> flush privileges;		重新读取权限表
	1.9 mysql> grant select,update,insert,delete on [数据库.表名 *] to  dai@'%' identified by "password";
	1.10 mysql> drop user dai@'%';
	1.11 mysql> status;	//显示当前数据库信息
	1.12 mysql> \q;		//退出操作
	


2.修改密码 mysqladmin -u root -p password  newpassword



3.数据库导出 mysqldump -u root -p [--参数部分] 数据库 > 路径.sql;
  数据库导入 a. 连接数据库 在操作符下 
			b. 选择要导入数据的数据库 
			c  source 数据库路径 。。。。
			
			
			
//如何设置phpmyadmin

config.ini.php 配置文件里面

auth_type  有三个参数可以供选择

auth_type = "config"  //下面有一行password 必须加上密码

cookie http	//三种选择方式



//CRUD 部分

//插入
$sql = "insert into (`id`,`name`,`date`) values (1,'无敌','2015-09-06')";
insert into (`date`,`id`) values ();@
insert into values(数值...数值N);
函数($sql);

//更新某条 或某列数据
update employee(表名) set id=3,`name`='张三' where id = 10;
//删除语句
delete from employee where id=10;



//查询部分

select * from employee ;	//查询所有数据

select `id`,`name` from employee where id=10;


DISTINCT	//关键字 去除掉重复行。。。。。

select distinct id,name from employee ;

//运算符

> < >= <= <>(!=)  


//操作数
in between like  as 

select a.* from employee as a ;


select * from employee where id in(1,2,3,4,5);

select * from employee where id between 1 and 4;

//%a 名字最后是字母A 所有记录  a% 名字以字母a开头的所有记录  %a% 名字中包含字母a 的所有记录
select * from employee where name like '%a%'

//排序问题
order by  //desc 倒序排列 5.4.3.2 1  正序 是 asc 

//记录的截取
limit 
select * from employee [条件] order by desc limit 0,3;

//mysql 常用函数
count() max() min() avg() sum() ; 聚合函数

//系统自带函数
select version();	//数据库版本

select  md5()

select database();	//当前选用的数据库

select user();		//当前用户

//日期格式化

date_format("列字段或真实日期","格式化字符串 %Y/%m/%d");	//


/*
	
	实体完整性 	主键约束、标识列、唯一性
	
	域完整性    字段类型限制，不为空设置、检查约束、默认值约束
	
	引用完整性	外键约束
	

*/


//主键约束
primary key (`uid`,`username`);	单独主键 及联合主键

//标识列 
auto_increment ;		自增字段

//唯一性
unique(`字段名`);		unique("多个字段");


//唯一性允许为空，而主键不能为空 



//域完整性 
 not null //不为空 
 
 enum('1','2') default '1';
 
 
//外键约束
constraint pk_uid  foreign key (`uid`) references 主键表名（`主键`）;



//索引分类
/*
	普通索引
	主键索引
	唯一索引
	联合索引
*/

可以大大提高查询速度、优化数据库

//如果在创建表的时候
INDEX (`字段名`);

//建立普通索引
alter table 表名 add  INDEX (`字段名`);
alter table 表名 drop INDEX '索引名字'


//联合查询

//1.全连接
select a.uid,a.name,b.scroe 
from students as a,scroe as b
where a.uid=b.uid;		//联合一个表

select a.*,b.* from students as a 
inner join scroe as b
on a.uid = b.uid;




//左外链接
select a.*,b.* from students as a 
left join scroe as b
on a.uid = b.uid;

//右外链接
select a.*,b.* from students as a 
right join scroe as b
on a.uid = b.uid;



//子查询

//查询出李四、李六的成绩

select a.uid,a.name,b.score 
from students as a,score as b
where a.uid=b.uid and (a.name="李四" or a.name="李六")


2.select * from score where uid in(11,2);

select uid from students where name="李四" or name="李六";




	







	

























