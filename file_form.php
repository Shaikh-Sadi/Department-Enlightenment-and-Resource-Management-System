<?php
session_start();
include_once 'conct.php';
$ss = $_REQUEST['send_id'];

$_SESSION['subject'] = $ss;



?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
#img-wrapper{margin-top:50px;}
.fram{width:140px; height:100px; display:inline-block; }
.fram > img{width: 100%; height:100%}
</style>
</head>

<!--
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!--link  rel="stylesheet"  type="text/css"  href="css/style.css">
	
	<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
  
	   <!--script src="jQuery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--script src="js/bootstrap.min.js"></script-->  
	

<body>

<h4> Do you want to Upload any file. Please <a href="universal_user_login_form.php">Click Here</a></h4>

<form action="" method="post" enctype="multipart/form-data">

    <fieldset>
	<legend> file upload </legend>
    <!--Select file to upload:-->
    <!--input type="file" name="fileToUpload" id="fileToUpload"-->
	<input type="file" name="fileToUpload" >
    <button type="submit" value="pressed" name="button">	Upload </button>
	 </fieldset>
</form>


<?php
if(isset($_POST["button"])){
$topic_name= $ss;
	
$target_dir  = "go/";
$file_name   = $_FILES["fileToUpload"]["name"];
$target_dir .=$file_name;
//$file_name   =basename($target_dir);
//$file_name   = basename($target_dir);
$tmp_dr      =$_FILES["fileToUpload"]["tmp_name"];
$size        =$_FILES["fileToUpload"]["size"];
$ext         = pathinfo($file_name,PATHINFO_EXTENSION);



 /*if($ext == 'mp4' || $ext == '3gp' $ext == 'jpg' || $ext == 'png' || $ext == 'jpeg'
|| $ext == 'gif' )*/
      if($ext == 'doc' || $ext == 'pdf' || $ext == 'txt' || $ext == 'ppt'){
	//echo   "it is image";
	//echo"<br>";
	$uploaded= move_uploaded_file($tmp_dr, $target_dir);
	if($uploaded){
		//echo "file uplod succesfuly";
		$sql="INSERT INTO files (name, location,size,topic_name) VALUES('$file_name','$target_dir','$size','$topic_name')" ;
		$stmt= mysqli_query($conn,$sql);
		if($stmt== true){
			echo " insert";
			//header("location: up_form.php?succes=file saved");
		}
		else{
			echo"not insert";
		}
		/*$stmt=mysqli_prepare($conn,$sql);
		if($stmt){
			mysqli_stmt_bind_param($stmt,'sss', $file_name,$target_dir,$size);
			$saved=mysqli_stmt_execute($stmt);
			
			if($saved){
				//echo "file saved";
				header("location: up_form.php?succes=file saved");
			}
			else{
				if(file_exists($target_dir)){
					unlink($target_dir);
				}
				else{
						header("location: up_form.php?error=error:unable to store in db");
				}
			}
		}*/
	}
	else{
		echo "upload error"; 
		//header("location: up_form.php?error=error: upload error");
	}
}
else{
	echo "it is not file type ";
		//header("location: up_form.php?error=error: not image");
}
}
else{
	//echo"you r not allow";
	//header("location: up_form.php?error=error: plz uplod file");
}

/*$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}*/
?>





<div>
<?php
if (isset($_GET["error"])){
	echo $_GET["error"];
	
}
?>


<div id="img-wrapper">
<?php 


//include_once 'topic_na.php';
//$ss=$row['topic_name'].

//$ss = $_REQUEST['topic_name'];


$sql="select *
		from files
		where topic_name = '$ss' ";


  $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)> 0){
	
	  while($data=mysqli_fetch_array($result)){
	//if($data['name'].= 'movie')	
//echo"<div>";	
	//echo "<video width='320' height='240' controls>";
  //echo "<source src='" .$data["location"]. "' type='video/mp4'>";

  //$data["name"]. " ";

  //<source src="movie.ogg" type="video/ogg">
//echo "  Your browser does not support the video tag.";
//echo "</video>";
	
	 
	//echo "</div>";
		
          //echo "<div class='fram'>";
		  echo "<div>";
		 // echo $data["name"]."";
		 // echo $data["name"]. " ";
		 // echo $size["name"]. " "
		 ?>
		 <!--a href=go/<!?php echo $data["name"].""; echo"> "; echo $data["name"]." "; echo"</a>" ; ?-->
		 <?php
		 echo"<a href='for_file_download.php?name=".$data["name"]."'> "; echo $data["name"].""; echo"</a>" ;
		  //echo "</div>";
		  echo "</div>";
		    echo " ";
			  
		  // echo "</br> ","</br>","</br> ";
		   //echo " ";
	       //echo "</br> ","</br>","</br> ";
		  }
		}
?>
</div>

</body>
</html>