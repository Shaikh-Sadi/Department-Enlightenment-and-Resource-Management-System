<?php
include_once 'conct.php';
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


<body>

<form action="duplicate_file_upload.php" method="post" enctype="multipart/form-data">
    <fieldset>
	<legend> file upload </legend>
    <!--Select file to upload:-->
    <!--input type="file" name="fileToUpload" id="fileToUpload"-->
	<input type="file" name="fileToUpload" >
    <button type="submit" value="pressed" name="button">	Upload </button>
	 </fieldset>
</form>


</body>
</html>