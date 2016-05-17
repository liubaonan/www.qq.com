<?php
/*
	事物！
	在执行多条SQL 语句 必须同时成功，如果有一条不成功其他执行全部撤销
*/
	$dsn = "mysql:host=localhost;dbname=students";	//链接字符集
	$options = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,//警告级别
		PDO::ATTR_CASE => PDO::CASE_LOWER,//列字符大小
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,		//设置检索返回类型
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8 "//设置连接字符集
	];
	$pdo = new PDO($dsn,'root','',$options);
	$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,FALSE);	//禁止SQL 自动提交

	try{

		$pdo->beginTransaction();	//开启事务
		
		$money = 100;	//转账金额
		$name = 'ddd';
		$name2 = 'eee';
		$sql = "update biao set `money`=`money`-:money where `name`=:name"; //-5
		$stmt = $pdo->prepare($sql);
		$stmt-> bindParam(':money',$money);
		$stmt-> bindParam(':name',$name);
		$stmt->execute();
		$result2 = $stmt->rowCount();
		if(!$result2)
			throw new Exception("扣款失效",1);
		
		
		$sql = "update biao set `money`=`money`+:money where `name`=:name";	//
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(':money',$money);
		$stmt->bindParam(':name',$name2);
		$stmt->execute();
		$result3 = $stmt->rowCount();
		if(!$result3)
			throw new Exception("转入失败",2);
		
		$sql = "select * from biao where `name`= 'ddd' and `money`>=0";	//money 小于0 
		$stmt = $pdo->query($sql);
		$res = $stmt->fetch();
		if(!$res)
			throw new Exception("账户余额不足",3);
		$pdo->commit();//提交事物
		
		echo "转账成功！";
		
		
	}catch(Exception $e){
		
		echo "错误信息为:".$e->getMessage();
		$pdo->rollBack();	//事务回滚 

	}
	
	
	



?>