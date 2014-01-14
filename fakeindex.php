<?php
	$con = mysql_connect("localhost","root","BabyBibo1117");
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
	

	mysql_query("set names 'utf8';");
	mysql_select_db("UMUNC_CHEETAH", $con);
	
	$str = "UPDATE `stat` SET `key1`=`key1`+1 WHERE `id`=1;";
	$result = mysql_query($str);	
	mysql_close($con); 
?>
<html>
<head>
	<title>MPC @UMUNC 2013</title>
</head>
<body style='text-align:center;font-family:"Microsoft YaHei";font-weight:bold;'>
	<img src="MPC.jpg" /><br/>
	<img src="mpc-logo.png" height="60px"  style="margin: 20px;"	/><br/>	<img src="cheetah-logo.png" height="60px" /><br/>
	<p>期待与你们的再次见面,祝大家新年快乐！</p>
	<p>UMUNC 2013 华中-武汉分会 组委会</p>
</body>
</html>