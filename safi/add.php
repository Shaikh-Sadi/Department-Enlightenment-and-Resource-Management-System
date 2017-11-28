<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<body bgcolor="#00FF33">
<center><img src="alu.jpg" /></center>
<?php 
	$host='localhost';
	$user='root';
	$pass='';
	$conn=mysql_connect($host,$user,$pass);
	if(!$conn)
	{
		die('Could not connect : '.mysql_error());
	}
	$db_select=mysql_select_db("fm",$conn);
	if(!$db_select)
	{
		die('Database Connection Failed : '.mysql_error());
	}
	$sql="INSERT INTO `member` (name, s_id, gender, ic_name,content,time_limit)
		VALUES('$_POST[name]','$_POST[s_id]','$_POST[gender]','$_POST[ic_name]','$_POST[content]','$_POST[time_limit]')";
		
		$result=mysql_query($sql,$conn);
	if(!$result)
	{
		die('Could not get data : '.mysql_error());
	}	
	
	
mysql_close($conn);

	?>
	<center><img src="ala.jpg" /></center>
</body>
</html>
