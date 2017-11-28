<?php
include_once 'conct.php';
$ss = $_REQUEST['send_id'];

$qry = "select *
		from article
		where course_code = '$ss' ";

	$result = mysqli_query($conn,$qry);
	
	if($result){
	
	while($row=mysqli_fetch_array($result)){
		
		echo $row['file_id']." ";
		//echo "<a href =delete_now.php?send_id=".$row['course_code']." > ".$row['course_title'].  "</a>     ";
		echo $row['title']."</br>"; 
		
	}
	}
	else 
		echo mysqli_error();

?>