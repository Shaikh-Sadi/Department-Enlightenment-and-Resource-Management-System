<?php
session_start();
include_once 'conct.php';
$ss = $_REQUEST['send_id'];
$_SESSION['topic_nam'] = $ss;
//echo $_SESSION['topic_nam'];
include_once 'top.php';

?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
#img-wrapper{margin-top:50px;}
.fram{width:350px; height:250px; display:inline-block; }
.fram > img{width: 100%; height:100%}
</style>
</head>


<body>

<div class="container theme-showcase" role="main">
     <div class ="row">
          <div class='col-sm-1'  >
		  </div>
          <div class="col-md-11">
               <div class="clearfix" style="margin-bottom:33px;"> </div>
                    <h4 style="color:red;"> Do you want to Upload any file. Please <a href="video_login_form.php">Click Here</a></h4>
               <div>
<?php
if (isset($_GET["error"])){
	echo $_GET["error"];
	
}
?>


<div id="img-wrapper">
<?php 
$sql="select *
		from video
		where topic_name = '$ss' ";


  $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)> 0){
	
	  while($data=mysqli_fetch_array($result)){

	
		 
          echo "<div class='fram'>";
		  echo "<video width='350' height='250' controls>";
		 
		  echo "<source src='" .$data["location"]. "' type='video/mp4'>";
	
		  echo "</video>";
		  
		 
		  echo"<a href='download.php?name=".$data["name"]."'> download </a>" ;
		  echo "</div>";
		    echo " ";
			
		  }
		  
		 
	   }
		
?>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

</html>

<div class="clearfix" style="margin-bottom:30px;"> </div>	
<?php
include_once 'bottom.php';
?>

