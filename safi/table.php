<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Table</title>
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
	$sql='SELECT *
		FROM member';
		$result=mysql_query($sql,$conn);
	if(!$result)
	{
		die('Could not get data : '.mysql_error());
	}	
	
	echo "<table border=1 width=100%>
		<tr>
			<th>Name</th>
			<th>Student Id</th>
			<th>Gender</th>
			<th>ic name</th>
			<th>content</th>
			<th>time limit</th>
			
		</tr>";
	while($row=mysql_fetch_array($result))
	{
	echo "<tr>
			<td>".$row["name"]."</td>
			<td>".$row["s_id"]."</td>
			<td>".$row["gender"]."</td>
			<td>".$row["ic_name"]."</td>
			<td>".$row["content"]."</td>
			<td>".$row["time_limit"]."</td>
			<td><a href='deiete.php?s_id=".$row['s_id']."'>  <button>Delete</button></a></td>
			<td><a href='edit.php?s_id=".$row['s_id']."'>  <button>Update</button></a></td>
			</tr>";
	
	}	
	echo "</table>";
	echo "<td><a href='reg.php?s_id=".$row['s_id']."'>  <button>Insert</button></a></td>";
mysql_close($conn);

	?>
	<center><img src="ala.jpg" /></center>
</body>
</html>
