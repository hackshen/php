<?php
	header('content-type:text/html;charset="utf-8"');

	$category=$_POST['category']; //插入的字段名
	$name=$_POST['name'];
	$time=$_POST['time'];
	$url=$_POST['url'];
	
	
	$con=mysql_connect('localhost','root','root');
	mysql_query('SET NAMES UTF8');
	mysql_select_db('qdm209094230_db');
	$cha='INSERT INTO skill (category,name,time,url) VALUES("'.$category.'","'.$name.'","'.$time.'","'.$url.'")';//插入数据
	$ok=mysql_query($cha);
	echo 'OK';
	mysql_close();
?>
