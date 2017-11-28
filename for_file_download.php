
<?php


if (isset($_GET["name"]) && $_GET["name"] != ""){
      $file="go/".$_GET["name"];
	 header('Content-type: application/octet-stream');
	  header('Content-disposition: attachment; filename="'.basename($file).'"');
	  //header('Content-disposition: attachment; filename=$file');
	   header('Content-length: '.filesize($file));
	   readfile($file);
	 
	  
	 
} 
else{
		header("location: up_form.php?error=error: invalid filename");
}

?>

