<html>
<body>

<!--?php
    $host="localhost";
	$user="root";
	$pass=" ";
	$database="bootstrap";
$con=mysql_connect($host,$user,$pass);
// Check connection
if (!$con)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } -->
  
   <?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database="bootstrap";

// Create connection
$con = mysql_connect("$mysql_hostname","$mysql_user","$mysql_password" ); 
if(!$con)
  {
	die('Could not connect : '.mysql_error());
  }
  
  mysql_select_db("$mysql_user",$con);
	if(!$db_select)
	{
		die('Database Connection Failed : '.mysql_connect_error());
	}
	
	$sql = "INSERT INTO mim (name, s_id, cgpa, gender, c_no)
	VALUES
	('$_POST[name]','$_POST[s_id]','$_POST[cgpa]','$_POST[gender]','$_POST[c_no]')";
	//"('$name','$s_id','$cgpa','$gender','$c_no')";
	//"('bill', '44', 'Microsoft','ghh','ghgh')";

//$sql="INSERT INTO member (name, s_id, cgpa, gender, c_no)
//VALUES
//('$_POST[name]','$_POST[s_id]','$_POST[cgpa]','$_POST[gender]','$_POST[c_no]')"; 

  if (!mysql_query($sql,$con))
   {
    die('Error: ' . mysql_error());
  }
  
echo "1 record added";

mysql_close($con);
?> 
</body>
</html>