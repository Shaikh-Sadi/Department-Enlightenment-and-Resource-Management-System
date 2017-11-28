<?php
session_start();
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
	
	
		//echo "room";
			$sql="INSERT INTO routine (room,time,day,teacher,course)VALUES 
			
(SELECT qw,er,ty,yu,io FROM DUAL 
WHERE NOT EXISTS (SELECT room FROM routine WHERE room = qw)
)";
			$stmt= mysql_query($sql);
			//echo "room";
			
			if($stmt==true)
			{
				echo "complete";
			}
			
		//}
		else if(!$stmt){
			echo"not permited";
			//echo mysql_error();
		}
	
	
		
	
	
?>
