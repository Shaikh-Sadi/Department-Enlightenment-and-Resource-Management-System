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
	$account_type = $_POST['acc_type'];
	
	$stud = "student";
	$tec = "teacher";
	
	if($account_type == $stud){
		
		$check_qry = "select *
					from student
					where user_name='$user' and passw='$user_pass'";
		$res = mysql_query($check_qry);
		if(!$res){
			echo mysql_error();
		}
		$row=mysql_fetch_array($res);
			if($row>0)
			{
			{header("Location:video_upload_form.php");}
			}
			else
				{
				{header("Location:video_login_form.php");}
				}
		
		}
	
	else if($account_type == $tec){
		
		$qry = "select *
					from teacher
					where user_name='$user' and passw='$user_pass'";
		$res_2 = mysql_query($qry);
		if(!$res_2){
			echo mysql_error();
		}
		$new=mysql_fetch_array($res_2);
			if($new>0)
			{
			{header("Location:video_upload_form.php");}
			}
			else
				{
				{header("Location:video_login_form.php");}
				}
		
		}
		
		}


?>


<html>

<body>

<form action="#" method="post">
Enter your user name: <input type="text" name="user_nam"/></br></br>
Enter your password: <input type="password" name="passKey"/></br></br>
Select Your Account Type: <select name="acc_type">
<option value="student">Student</option>
<option value="teacher">Teacher</option>
</select></br></br>
<input type="submit" name="subBtn" value="Submit">
</form>

</body>

</html>