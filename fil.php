<html>


    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!--link  rel="stylesheet"  type="text/css"  href="css/style.css"-->
	
  
	   <script src="jQuery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  
		

<?php
include_once 'conct.php';

$ss = $_REQUEST['send_id'];

$qry = "select *
		from uplot
		where topic_name = '$ss' ";

	$result = mysqli_query($conn,$qry);
	
	if($result){
	
	while($row=mysqli_fetch_array($result)){
		echo"<div class=","col-sm-1", " >";
		echo "</br>";
		//echo $row['file_title']." ";
		   echo "<a href ="," up_form.php", " > " .$row['file_title']. "</a>";
		echo "</br>";
		//echo "<a href =delete_now.php?send_id=".$row['course_code']." > ".$row['course_title'].  "</a>     ";
		//echo $row['data']."</br>"; 
		 
		 echo"</div>";
	}
	}
	else 
		echo mysqli_error();

?>

</html>