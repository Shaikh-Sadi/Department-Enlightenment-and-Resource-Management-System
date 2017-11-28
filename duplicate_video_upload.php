<?php
session_start();
include_once 'conct.php';
$ss = $_SESSION['topic_nam'];

if(isset($_POST["button"])){
$topic_name= $ss;
	
$target_dir  = "uploads/";
$file_name   = $_FILES["fileToUpload"]["name"];
$target_dir .=$file_name;
//$file_name   =basename($target_dir);
//$file_name   = basename($target_dir);
$tmp_dr      =$_FILES["fileToUpload"]["tmp_name"];
$size        =$_FILES["fileToUpload"]["size"];
$ext         = pathinfo($file_name,PATHINFO_EXTENSION);



 /*if($ext == 'mp4' || $ext == '3gp' $ext == 'jpg' || $ext == 'png' || $ext == 'jpeg'
|| $ext == 'gif' )*/
      if($ext == 'mp4' || $ext == '3gp') {
	//echo   "it is image";
	//echo"<br>";
	$uploaded= move_uploaded_file($tmp_dr, $target_dir);
	if($uploaded){
		//echo "file uplod succesfuly";
		$sql="INSERT INTO video (name, location,size,topic_name) VALUES('$file_name','$target_dir','$size','$topic_name')" ;
		$stmt= mysqli_query($conn,$sql);
		if($stmt== true){
			echo " insert";
			header("location: duplicate_video_file_view.php");
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