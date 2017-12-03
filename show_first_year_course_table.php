
<?php

include_once 'top.php';
?>


<html >

 <body>
     <div class="container theme-showcase" role="main">
	      <div class ="row">
		      <div class="row">
	               <div class="col-sm-12"></br>
                          <div class="clearfix" style="margin-bottom:10px;"> </div>
                          <h3 style= "text-align: center;"> All course include this semester</h3></br>
                   </div>
              </div>
          </div>
	</div>
<?php
include_once 'conct.php';

     $year = $_REQUEST['value'];
      $qry = "select *
		     from course
		     where id = '$year' ";
   $result = mysqli_query($conn,$qry);
	if($result){
		    echo "</br>";
		    echo "</br>";
	while($row=mysqli_fetch_array($result)){
		    echo "<div class='container theme-showcase' role='main'>";
		        echo "<div class='row'  >";
		            echo "<div class='col-sm-1'  >";
		            echo "</div>";
		            echo "<div class='col-sm-1'  >";
		                echo $row['course_code']." ";
		            echo "</div>";
		            echo "<div class='col-sm-4'  >";
		                 echo "<a href =topic.php?send_id=".$row['course_code']." > " .$row['course_title'].  "</a>     ";
	                echo "</div>";                  
		            echo "<div class='col-sm-1'  >";
		                 echo $row['credit'].""; 
		            echo "</div>";
		            echo "<div class='col-sm-2'  >";
		                 echo "<a href ='#' >Refarence book  </a>  ";
		            echo "</div>";
		 	        echo "<div class='col-sm-2'  >";
		                echo "<a href ='#' >Course teacher</a>  ";
		            echo "</div>";
		            echo"</br>";
		            echo"</br>";
		            echo"</br>";
		        echo "</div>";
		    echo "</div>";
		}
	}
	else 
		    echo mysqli_error();

?>
								
<div class="clearfix" style="margin-bottom:35px;"> </div>

</body>

 </html>
        
<?php
include_once 'bottom.php';
?>


		