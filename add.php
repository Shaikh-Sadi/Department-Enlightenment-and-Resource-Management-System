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
?>

<?php 



if(isset($_POST['sub'])){
	
	$room_no = $_POST['room'];
	$time_prio = $_POST['time'];
	$day_schu        =$_POST['day'];
	
	$teacher_name = $_POST['teacher'];
	$course_no = $_POST['course'];
	
	
	//$stud = "student";
	//$tec = "teacher";
	
	//if($account_type == $stud){
		
		//$check_qry = "select *
					//from routine
					//where time='$time_prio' and day='$day_schu'";
		//$res = mysql_query($check_qry);
		//if($res)
		//{
			
			echo "complete1";
			echo "<br>";
			echo "$teacher_name";
			echo "<br>";
			echo "$time_prio";
			echo "<br>";
			//$sql="INSERT INTO routine  (`room`,`teacher`,`course`)  VALUES('$room_no','$teacher_name','course_no') where time='$time_prio' and day='$day_schu' " ;
		   	
			//$sql=" select from routine where time='$time_prio' and day='$day_schu' && insert into routine  (`room`,`teacher`,`course`)  VALUES('$room_no','$teacher_name','course_no')  " ;
			//$sql="SELECT room,time,day,teacher,course FROM routine WHERE time='$time_prio' and day='$day_schu' INSERT INTO routine  (room,time,day,teacher,course)  values('$room_no','$time_prio','$day_schu','$teacher_name','$course_no')
			//";
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
	
	}
		
		
		//}
	/*
	else if($account_type == $tec){
		
		$qry = "select *
					from teacher_reg
					where name='$user' and brows_kye='$brows_kye'";
		$res2 = mysql_query($qry);
		
		if($res2)
		{
			$sql="INSERT INTO teacher  (`user_name`,`passw`)  VALUES('$user','$user_pass')" ;
		   	$stmt= mysql_query($sql);
			if($stmt==true)
			{
				echo "complete";
			}
			
		}
		
		if(!$res2){
			echo " not permited";
			//echo mysql_error();
		}
		
		
		}
		
		}







//



	$sql="INSERT INTO routine (name, s_id, cgpa, gender, c_no)
		VALUES('$_POST[name]','$_POST[s_id]','$_POST[cgpa]','$_POST[gender]','$_POST[c_no]')";
		
		$result=mysql_query($sql,$conn);
	if(!$result)
	{
		die('Could not get data : '.mysql_error());
	}	
	
	
mysql_close($conn);
*/

?>
