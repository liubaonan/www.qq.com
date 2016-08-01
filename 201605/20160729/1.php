<?php 
            $pdo = new PDO("mysql:host=localhost;dbname=adtest_liansuo_com","root",""); 
            //replace用法     插入和修改
            $sql = "replace into ad_table_column(id,table_name) values ('1','2222')";
            $sql = "update ad_table_column set table_name=replace(table_name,'qerson','person')";
            //join   left  right  inner
            $sql = "select * from ad_user as a inner join ds_users as b on a.id=b.uid";
            $sql = "select * from ad_user as a right join ds_users as b on a.id=b.uid";
            $sql = "select * from ad_user as a left join ds_users as b on a.id=b.uid";
            //in字句
            $sql = "select * from ad_user where id=1 or id=2 or id=3";
            $sql = "select * from ad_user where id in (select id from ad_user)";
            //union
            $sql = "select uid,username from ad_user union all select uid,username from ds_users";
            //alter
            $sql = "alter table ad_user add name int not null comment '名字'";  //增加列
            $sql = "alter table ad_user drop name";                            //删除列
		    //  $stmt = $pdo->query($sql);
		    // $res = $stmt->fetchAll();
            // $a = mktime(23,59,0,7,30,2016);//返回时间戳
            // echo date('Y-m-d',time());
            // echo time();

            str_repeat('刘宝南',10);//重复输出
            substr('liubaonan',0,-1);  //liubaona
            
            echo trim('liubaonan','lian');
            


?>