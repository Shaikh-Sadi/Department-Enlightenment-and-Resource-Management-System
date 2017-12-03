<?php
session_start();
include_once 'conct.php';
$ss = $_SESSION['topic_name'];
//echo $ss;

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

    if($ext == 'doc' || $ext == 'pdf' || $ext == 'txt' || $ext == 'ppt'){
	    $uploaded= move_uploaded_file($tmp_dr, $target_dir);
	    if($uploaded){
		    $sql="INSERT INTO files (name, location,size,topic_name) VALUES('$file_name','$target_dir','$size','$topic_name')" ;
		    $stmt= mysqli_query($conn,$sql);
		    if($stmt== true){
			   echo " insert";
			   header("location: duplicate_file_view.php");
		   }
		    else{
			     echo"not insert";
			}
		}
	     else{
		      echo "upload error"; 
	     }
       }
    else{
	    echo "it is not file type ";
      }
    }
  else{

 }

?>