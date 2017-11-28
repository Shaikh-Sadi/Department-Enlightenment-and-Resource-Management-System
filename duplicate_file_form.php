<?php
session_start();
include_once 'conct.php';
$ss = $_REQUEST['send_id'];
$_SESSION["topic_nam"] = $ss;
//echo $_SESSION['topic_nam'];
include_once 'top.php';
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

<div class="container theme-showcase" role="main">
 <div class ="row">
 
 <div class='col-sm-1'  >
		
		
		</div>
 
 <div class="col-md-9">
 <div class="clearfix" style="margin-bottom:33px;"> </div>

<h4 style="color:red;"> Do you want to Upload any file. Please <a href="universal_user_login_form.php">Click Here</a></h4>


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
			echo"<div class='clearfix' style='margin-bottom:11px;'>"; echo" </div>";
			  
		  // echo "</br> ","</br>","</br> ";
		   //echo " ";
	       //echo "</br> ","</br>","</br> ";
		  }
		}
?>
</div>
</div>
</div>
</div>
</div>

</body>

<div class="clearfix" style="margin-bottom:45px;"> </div>
</html>

<?php
include_once 'bottom.php';
?>
