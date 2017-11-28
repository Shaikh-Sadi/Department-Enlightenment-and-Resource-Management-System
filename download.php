
<?php


if (isset($_GET["name"]) && $_GET["name"] != ""){
	 $file= "uploads/".$_GET["name"];
	//echo"$file";
	//header("location: up_form.php?error=error: $file");
	 header("Content-type: application/octet-stream");
     header("Content-Disposition: attachment; filename= '.basename($file).'");
	 //header("location: up_form.php?error=error: '.basename($file)");
	  //header('Content-disposition: attachment; filename=$file');
	  // header("Content-length: . filesize( $file ));
	   header('Content-Length:' .filesize( $file));
	   readfile( $file );
	  
	 
} 
else{
		header("location: up_form.php?error=error: invalid filename");
}

?>


