<?php
	header('content-type:text/html;charset="utf-8"');
//	$category=$_POST['category'];
//	$name=$_POST['name'];
//	$time=$_POST['time'];
//	$level=$_POST['level'];

//	$category=$_POST['category'];
//	$name=$_POST['name'];
//	$url=$_POST['url'];
//	$image=$_POST['image'];
//	$time=$_POST['image'];
//	$posts=$_POST['posts'];
//	$reportto=$_POST['reportto'];
//	$peoples=$_POST['peoples'];
//	$projects=$_POST['projects'];
	
	
	$category=$_POST['category'];
	$name=$_POST['name'];
	$url=$_POST['url'];
	$image=$_POST['image'];
	$description=$_POST['description'];
	$detail=$_POST['detail'];
	$tech=$_POST['tech'];
	
	$con=mysql_connect('qdm209094230.my3w.com','qdm209094230','root');
	mysql_query('SET NAMES UTF8');
	mysql_select_db('qdm209094230_db');
	//$cha='INSERT INTO skill (category,name,time,level) VALUES("'.$category.'","'.$name.'","'.$time.'","'.$level.'")';//插入数据
	//$cha='INSERT INTO work (category,name,url,image,time,posts,reportto,peoples,projects) VALUES("'.$category.'","'.$name.'","'.$url.'","'.$image.'","'.$time.'","'.$posts.'","'.$reportto.'","'.$peoples.'","'.$projects.'")';//插入数据
	$cha='INSERT INTO project (category,name,url,image,description,detail,tech) VALUES("'.$category.'","'.$name.'","'.$url.'","'.$image.'","'.$description.'","'.$detail.'","'.$tech.'")';//插入数据
	$ok=mysql_query($cha);
	echo '1';
	mysql_close();
?>
