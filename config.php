 <?php
$mysqli_hostname = "localhost";
$mysqli_user = "root";
$mysqli_password = "";
$mysqli_database="bootstrap";

// Create connection
$bd = mysqli_connect($mysqli_hostname,$mysqli_user,$mysqli_password ) or die ("opps something went wrong");

mysqli_select_db($mysqli_database,$bd) or die ("opps something wrong");
?> 