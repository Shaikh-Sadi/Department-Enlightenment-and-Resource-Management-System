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

if(isset($_POST['subBtn'])){
	
	$user = $_POST['user_nam'];
	$user_pass = $_POST['passKey'];
	$brows_kye        =$_POST['kye'];
	
	$account_type = $_POST['acc_type'];
	
	
	$stud = "student";
	$tec = "teacher";
	
	if($account_type == $stud){
		
		$check_qry = "select *
					from student_reg
					where name='$user' and brows_kye='$brows_kye'";
		$res = mysql_query($check_qry);
		if($res)
		{
			$sql="INSERT INTO student  (user_name,passw)  VALUES('$user','$user_pass')" ;
		   	$stmt= mysql_query($sql);
			if($stmt==true)
			{
				echo "complete";
			}
			
		}
		else if(!$res){
			echo"not permited";
			//echo mysql_error();
		}
	

		
		
		}
	
	else if($account_type == $tec){
		
		$qry = "select *
					from teacher_reg
					where name='$user' and brows_kye='$brows_kye'";
		$res2 = mysql_query($qry);
		
		if($res2)
		{
			$sql="INSERT INTO teacher  (user_name,passw)  VALUES('$user','$user_pass')" ;
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


?>


<html>

<body>

<form action="#" method="post">
Enter your user name: <input type="text" name="user_nam"/></br></br>
Enter your password: <input type="password" name="passKey"/></br></br>
Enter browsing kye: <input type="text" name="kye"/></br></br>
Select Your Account Type: <select name="acc_type">
<option value="student">Student</option>
<option value="teacher">Teacher</option>
</select></br></br>
<input type="submit" name="subBtn" value="Submit">
</form>

</body>

</html>