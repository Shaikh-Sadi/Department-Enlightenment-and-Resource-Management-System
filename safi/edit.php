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
	$s_id=$_REQUEST['s_id'];
	if(!$db_select)
	{
		die('Database Connection Failed : '.mysql_error());
	}
	
	$view=mysql_query("SELECT * 
	FROM member
	WHERE s_id='$s_id'");
	$updt=mysql_fetch_array($view);
	
	if(!$updt)
	{
		die('Could not get data : '.mysql_error());
	}
	
	$name=$updt['name'];
	$s_id=$updt['s_id'];
	$gender=$updt['gender'];
	$ic_name=$updt['ic_name'];
	$content=$updt['content'];
	$time_limit=$updt['time_limit'];
	
	if(isset($_POST['update']))
	
	{
	$name=$_POST['name'];
	$s_id=$_POST['s_id'];
	$gender=$_POST['gender'];
	$ic_name=$_POST['ic_name'];
	$content=$_POST['content'];
	$time_limit=$_POST['time_limit'];
	
	
	mysql_query("UPDATE member
	SET name='$name',s_id='$s_id',gender='$gender',ic_name='$ic_name',content='$content',time_limit='$time_limit' WHERE s_id='$s_id'
	")
	or die(mysql_error());
	}
	
	
	
	
		mysql_close($conn);

	?>
	
	<form action="#" method="post">
	<label> Name &nbsp;</label> <input name="name" type="text" size="40px" value="<?php echo $name?>"/> <br>
	<label>Student Id &nbsp;</label><input name="s_id" type="text" size="40px" value="<?php echo $s_id?>" /> <br>
	<label>gender &nbsp;</label><input name="gender" type="text" size="40px" value="<?php echo $gender?>"/><br>
	<label>icname</label><input name="ic_name" type="text" size="40px" value="<?php echo $ic_name?>"/><br>
	<label>content </label><input name="content" type="text" size="40px" value="<?php echo $content?>"/><br><br><br><br>
	<label>timelimit</label><input name="time_limit" type="text" size="40px" value="<?php echo $time_limit?>"/><br>
	
	<input name="update" type="submit" value="update" /><br><br>



</form>
<center><img src="ala.jpg" /></center>

</body>
</html>
