<?php

include_once 'top.php';
?>

 <div class="clearfix" style="margin-bottom:20px;"> </div>
<html>

<!--div class='clearfix' style='margin-bottom:35px;> </div> -->
<body>
<div class="container theme-showcase" role="main">
	  <div class ="row">
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
		
		
		
		//echo "<div class='col-sm-4'  >";
		//echo "</div>";
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
                                             //echo"<li>";
                                               //      echo "<a href =book_form.php?send_id=".$row['course_code']." > " ,"Book", "</a>     ";
                                             //echo"</li>";
											   //echo"<li>";
                                                 //    echo "<a href =article_form.php?send_id=".$row['course_code']." > " ,"Article", "</a>     ";
                                             //echo"</li>";
											 echo"</ul>";
											
											echo"</div>";
											echo"</div>";
											
											
											echo "</br>";
											echo "</br>";
											
		//echo "<a href =delete_now.php?send_id=".$row['course_code']." > ".$row['course_title'].  "</a>     ";
		//echo $row['title']."</br>"; 
		
		
	}
	}
	else 
		echo mysqli_error();

?>
</div>
</div>

 
</html >
<div class="clearfix" style="margin-bottom:30px;"> </div>	
<?php
include_once 'bottom.php';
?>

