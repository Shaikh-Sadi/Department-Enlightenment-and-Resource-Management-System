<?php 
	//$host='localhost';
	//$user='root';
	//$pass='';
	$conn=mysqli_connect("localhost","root","","bootstrap");
	if(!$conn)
	{
		die("Could not connect : ".mysqli_error());
	}
	/*$db_select=mysqli_select_db("bootstrap",$conn);
	if(!$db_select)
	{
		die('Database Connection Failed : '.mysqli_error());
	}*/
	?>