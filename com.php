
<?php
	$conn=mysql_connect("localhost","root","");
	if(!$conn)
	{
		die("Could not connect : ".mysql_error());
	}
	$db_select=mysql_select_db("bootstrap");
	if(!$db_select)
	{
		die('Database Connection Failed : '.mysql_error());
	}
?>
<html>
<body>
<h3> Registration complete </h3>
</body>
</html>