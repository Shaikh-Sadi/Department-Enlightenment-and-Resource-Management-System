
<?php

include_once 'top.php';
?>


<html >

 <body>
 
 <div class="container theme-showcase" role="main">
	  <div class ="row">
	  <div class="col-sm-12">
	  </br>
 
<div class="clearfix" style="margin-bottom:10px;"> </div>

 
 <h3 style= "text-align: center;"> All course include this semester</h3>
 </br>
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
		//echo "<a href =emm.php?send_id=".$row['course_code']." > ".$row['course_title'].  "</a>     ";
		echo "<a href =topic.php?send_id=".$row['course_code']." > " .$row['course_title'].  "</a>     ";
	       echo "</div>";                  
		                            
		
		
		 //"<a href =emm.php?send_id=".$row['course_code']." > ".$row['course_title']. "</a>     ";
		// "send_id=".$row['course_code']."   ";
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

	<!--
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!--link  rel="stylesheet"  type="text/css"  href="css/style.css">
	
  
	   <script src="jQuery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed >
    <script src="js/bootstrap.min.js"></script>  
								  
	
 <!-- 
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
	
	  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 600%;
	  hight:500%;
      margin: auto;
  }
  </style>
  -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	   <![endif]-->

		


     



                   <!--nav class="navbar navbar-inverse" style= "border-redius:0px !important; margin-bottom:0px;"-->
                        <!--div class="container"-->
                          <!-- <div class="navbar-header">
						   <!--
                                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                </button>
                                        <!--<a class="navbar-brand" href="#">Project name</a>
                            </div> -->
                            <!--div class="navbar-collapse collapse">
                               <ul class="nav navbar-nav"-->
							   <!--
                                  <li class="active">
                                      <a href="#">Home</a>
                                  </li-->
                                 <!--li class="dropdown">
                                     <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"-->
                                            
<!--?php

                                           $result = mysqli_query($conn,$qry);
                                           if($result){
	
	                                       while($row=mysqli_fetch_array($result)){
											   
											     
											   
											   ?>
											   
											<!--  echo $row['course_code']." ";  	
											  $send_id=.$row['course_code']."   ";
											  -->
											    
										  
											  <!--html>
											 
											
										<ul>
										
										<div class="col-sm-1"  >
											
                                           <!--?php  
                                          
                                        $send=$row['course_code']."   ";
		                                 echo $send;
										   ?>
										   </div>
										
											<div class="col-sm-1"  >
											
                                           <!--?php  
                                          
										   echo $row['course_code']."" ?>
										   </div>
										   <div class="col-sm-3"  >
									     <div class="dropdown">
                                     <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        
		
		 <!--?php
	                           //"<a href =emm.php?send_id=".$row['course_code']." > " .$row['course_title'].  "</a>     ";
							    
		
		                            echo $row['course_title'].  " "  ;
		                            //"send_id=".$row['course_code']."   ";
		                             ?>

                                           <span class="caret"></span>
                                          
										 
										  </a>
                                          <ul class="dropdown-menu">
                                             <li>
                                                <!--?php   echo "<a href =fil.php?send_id=".$row['course_code']." > " ,"File", "</a>     ";?>
                                             </li>
                                             <li>
                                               <!?php   echo "<a href =vid.php?send_id=".$row['course_code']." > " ,"Video", "</a>     ";?>
                                             </li>
                                             <li>
                                                  <!?php   echo "<a href =bo.php?send_id=".$row['course_code']." > " ,"Book", "</a>     ";?>
                                             </li>
											   <li>
                                                  <!?php   echo "<a href =art.php?send_id=".$row['course_code']." > " ,"Article", "</a>     ";?>
                                             </li>
											 </ul>
											
											</div>
											</div >
											
										</ul>
											
                                 
									   <!--/ul>
									   </div>
									   </html>
		<!?php
		
	                                    echo $row['credit']."</br>";	
	                                }
	                                }
	                              else 
		                  echo mysqli_error();


											
											
											
											?>
									
									<!--
								  <li class="dropdown">
                                     <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                              Academic
											    <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu">
                                             <li>
                                                  <a href="#">Action</a>
                                             </li>
                                             <li>
                                                  <a href="#">Another action</a>
                                             </li>
                                             <li>
                                                  <a href="#">Something else here</a>
                                             </li>
											 </ul>
                                  </li>
								  </ul>
								  </div>
								  
								  -->
								  
								  
								
								  
								  
								  
								  
								  
								  
								
								  
								
<div class="clearfix" style="margin-bottom:35px;"> </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	
 
								  
								  
								  
								  
								 
								  
		

</body>

 </html>
        

<?php
include_once 'bottom.php';
?>


		