<?php
include_once 'config.php';

if(isset($_POST['subBtn'])){
	
	
	
	$new_file_name = $_FILE['up_file']['name'];
	$file_loc = $_FILE['up_file']['tmp_name'];
	$fil_size = $_FILE['up_file']['size'];
	$file_type = $_FILE['up_file']['type'];
	$folder = "user_uploads/";
	
	$new_size = $file_size/1024;
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO files(course_code,file_title,file_name,file_size) 
		VALUES('','','','')";
		
		$qry = "insert into doctors_info(doctor_name,designation,department)
					values('$doct_name','$doct_desig','$doct_deptart')";
					
		mysql_query($sql);
		mysql_query($qry);
		
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='doctors_info_insert_form.php';
        </script>
		<?php
	}
	else
	{
		echo mysql_error();
		?>
		<script>
		alert('error while uploading file');
        //window.location.href='doctors_info_insert_form.php?fail';
        </script>
		<?php
	}
}

?>



<html>
<head></head>

<body>

<form action="#" method="post" enctype="multipart/form-data">
Enter lesson Topic <input type="text" name="topic" /></br>

Select file <input type="file" name="up_file"></br>

<input type="submit" name="subBtn" value="Upload">

</form>

<body>


</html>