 <?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
//$mysql_database="bootstrap";

// Create connection
$bd = mysql_connect($mysql_hostname,$mysql_user,$mysql_password ) or die ("opps something went wrong");

$con = mysql_select_db()

//mysql_select_db(mysql_database,$bd) or die ("opps something wrong");
?> 