<?php

include_once 'top.php';
?>

 <div class="clearfix" style="margin-bottom:20px;"> </div>
<html>
    <body>
         <div class="container theme-showcase" role="main">
	          <div class ="row">
	               <div class= "row">
	                    <div class="col-sm-12">
	                         <h3 style= "text-align: center;color:#B22222;">All topic include this subject<h3>
                        </div>

						<div class="clearfix" style="margin-bottom:18px;"> </div>	  

<?php
include_once 'conct.php';
       
	   $ss = $_REQUEST['send_id'];
       $qry = "select *
		     from topic
		     where course_code = '$ss' ";
       $result = mysqli_query($conn,$qry);
	   if($result){
			 echo "</br>";
             echo "</br>";
	   while($row=mysqli_fetch_array($result)){
		     echo "<div class='col-sm-4'  >";
                 echo"<div class='dropdown'>";
                      echo "<a class='dropdown-toggle' href='#' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>";
                           echo $row['topic_name']." ";
		                   echo "<span class='caret'>";
			               echo"</span>";
                      echo"</a>";
                      echo "<ul class='dropdown-menu'>";
                           echo" <li>";
                                echo "<a href =duplicate_file_form.php?send_id=".$row['topic_name']." > " ,"File", "</a>     ";
                           echo"</li>";
                           echo"<li>";
                                echo "<a href =duplicate_video_form.php?send_id=".$row['topic_name']." > " ,"Video", "</a>     ";
                           echo"</li>";
                       echo"</ul>";
			      echo"</div>";
	         echo"</div>";
			 echo "</br>";
			 echo "</br>";
												
	}
	}
	else 
		echo mysqli_error();

?>
                  </div >
		     </div>
       </div>
  </body>	
</html >
<div class="clearfix" style="margin-bottom:30px;"> </div>	
<?php
include_once 'bottom.php';
?>

