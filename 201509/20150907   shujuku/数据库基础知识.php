<?php
DB  database 
DBMS  database managenment system;

DBS database system

db �����ַ���ͼ�Ρ�ͼ�� ����
mysql �����ڹ�ϵ�����ݿ�

mysql ��������  MyiSam Innodb;

mysql 5.6.17 ���ݿ�汾


mysql ���ݿ��ص㼰�ŵ�

�����汾����� ���ӷ���������ѡ����С

���������ݹ������Խ�����ͬ������û�Ȩ��


//����

 ���ݿ� database;
 
 һ��� tables;
 
 ���ݣ���һ�� ����record  �������һ����ʵ���ڵ�ʵ��
		��	�ֶΣ��ֶ������ֶ����ԣ� column;



//Ҫ������Щ�������� Ӧ�ð� mysql/bin Ŀ¼·�����ص� ϵͳ��������path����ȥ 




mysql ��������

1. 
	1.1 mysql -h localhost -u root -p  �������ݿ�
	1.2 �鿴�������ݿ� show databases;
	1.3 mysql> show tables;
	1.4 mysql> describe ���� 	�鿴��Ľṹ
	1.5 mysql> create database ���ݿ�����		�������ݿ�
	1.5 mysql> drop database  ���ݿ���			ɾ�����ݿ�
	1.6 mysql> show grants;			//�鿴�Լ���Ȩ��
	1.7 mysql> show grants for �û�[dai@'localhost'\dai@'%' dai@'10.2.27.86'];
	1.8 mysql> flush privileges;		���¶�ȡȨ�ޱ�
	1.9 mysql> grant select,update,insert,delete on [���ݿ�.���� *] to  dai@'%' identified by "password";
	1.10 mysql> drop user dai@'%';
	1.11 mysql> status;	//��ʾ��ǰ���ݿ���Ϣ
	1.12 mysql> \q;		//�˳�����
	


2.�޸����� mysqladmin -u root -p password  newpassword



3.���ݿ⵼�� mysqldump -u root -p [--��������] ���ݿ� > ·��.sql;
  ���ݿ⵼�� a. �������ݿ� �ڲ������� 
			b. ѡ��Ҫ�������ݵ����ݿ� 
			c  source ���ݿ�·�� ��������
			
			
			
//�������phpmyadmin

config.ini.php �����ļ�����

auth_type  �������������Թ�ѡ��

auth_type = "config"  //������һ��password �����������

cookie http	//����ѡ��ʽ



//CRUD ����

//����
$sql = "insert into (`id`,`name`,`date`) values (1,'�޵�','2015-09-06')";
insert into (`date`,`id`) values ();@
insert into values(��ֵ...��ֵN);
����($sql);

//����ĳ�� ��ĳ������
update employee(����) set id=3,`name`='����' where id = 10;
//ɾ�����
delete from employee where id=10;



//��ѯ����

select * from employee ;	//��ѯ��������

select `id`,`name` from employee where id=10;


DISTINCT	//�ؼ��� ȥ�����ظ��С���������

select distinct id,name from employee ;

//�����

> < >= <= <>(!=)  


//������
in between like  as 

select a.* from employee as a ;


select * from employee where id in(1,2,3,4,5);

select * from employee where id between 1 and 4;

//%a �����������ĸA ���м�¼  a% ��������ĸa��ͷ�����м�¼  %a% �����а�����ĸa �����м�¼
select * from employee where name like '%a%'

//��������
order by  //desc �������� 5.4.3.2 1  ���� �� asc 

//��¼�Ľ�ȡ
limit 
select * from employee [����] order by desc limit 0,3;

//mysql ���ú���
count() max() min() avg() sum() ; �ۺϺ���

//ϵͳ�Դ�����
select version();	//���ݿ�汾

select  md5()

select database();	//��ǰѡ�õ����ݿ�

select user();		//��ǰ�û�

//���ڸ�ʽ��

date_format("���ֶλ���ʵ����","��ʽ���ַ��� %Y/%m/%d");	//


/*
	
	ʵ�������� 	����Լ������ʶ�С�Ψһ��
	
	��������    �ֶ��������ƣ���Ϊ�����á����Լ����Ĭ��ֵԼ��
	
	����������	���Լ��
	

*/


//����Լ��
primary key (`uid`,`username`);	�������� ����������

//��ʶ�� 
auto_increment ;		�����ֶ�

//Ψһ��
unique(`�ֶ���`);		unique("����ֶ�");


//Ψһ������Ϊ�գ�����������Ϊ�� 



//�������� 
 not null //��Ϊ�� 
 
 enum('1','2') default '1';
 
 
//���Լ��
constraint pk_uid  foreign key (`uid`) references ����������`����`��;



//��������
/*
	��ͨ����
	��������
	Ψһ����
	��������
*/

���Դ����߲�ѯ�ٶȡ��Ż����ݿ�

//����ڴ������ʱ��
INDEX (`�ֶ���`);

//������ͨ����
alter table ���� add  INDEX (`�ֶ���`);
alter table ���� drop INDEX '��������'


//���ϲ�ѯ

//1.ȫ����
select a.uid,a.name,b.scroe 
from students as a,scroe as b
where a.uid=b.uid;		//����һ����

select a.*,b.* from students as a 
inner join scroe as b
on a.uid = b.uid;




//��������
select a.*,b.* from students as a 
left join scroe as b
on a.uid = b.uid;

//��������
select a.*,b.* from students as a 
right join scroe as b
on a.uid = b.uid;



//�Ӳ�ѯ

//��ѯ�����ġ������ĳɼ�

select a.uid,a.name,b.score 
from students as a,score as b
where a.uid=b.uid and (a.name="����" or a.name="����")


2.select * from score where uid in(11,2);

select uid from students where name="����" or name="����";




	







	

























