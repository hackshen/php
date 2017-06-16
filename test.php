<?php
	header('content-type:text/html;charset="utf-8"');
	$con=mysql_connect('localhost','root','root');
	mysql_query('SET NAMES UTF8');
	mysql_select_db('mi');
	$query='SELECT * FROM list';
	$qu=mysql_query($query);
	//$arr1=mysql_fetch_array($qu,MYSQL_ASSOC);
	//print_r ($arr1);
	//echo json_encode($arr1);
	for($i=0;$i<mysql_num_rows($qu);$i++){
		$arr[$i]=mysql_fetch_array($qu,MYSQL_ASSOC);
	}
	//echo print_r($arr);
	echo json_encode($arr);
	
?>