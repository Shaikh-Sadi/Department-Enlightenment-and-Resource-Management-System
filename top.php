<?php

include_once 'conct.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>class system</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="js/index.js" type="text/javascript" />
    <link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="newsticker.css" rel="stylesheet" type="text/css">
    <!-- DataTables-->
    <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
       
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/docs.css" rel="stylesheet">
	<link href="css/prettify.css" rel="stylesheet">
	<link  rel="stylesheet"  type="text/css"  href="css/style.css">
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
	  
  }
  
img {
    border: 3px solid #ddd;
   
	border-radius: 14px;
    padding: 3px;
}
.brightness {-webkit-filter: brightness(100%);filter: brightness(100%);}
.contrast {-webkit-filter: contrast(140%);filter: contrast(140%);}
 </style>
</head>
	
	
<body>
     <div class="container theme-showcase" role="main">
	  <div class ="row" style="border-width:20px;">
	  <div class="row">
	    <div class="col-sm-12"  >
	      <div class="page-header" style="color:#E80000;">
                    <h1>Department Enlightenment and Resource Management System</h1>
				    <h4>BSMRSTU, Gopalgonj, Bangladesh </h4>
					</div>
					
          <nav class="navbar navbar-inverse" style= "border-redius:0px !important; margin-bottom:0px;">
               <div class="container">
               <div class="navbar-collapse collapse" >
                    <ul class="nav navbar-nav">
					     <li class="" >
                             <a href="index.php" style="color:#339900;">Home</a>
                             </li>
	                     <li class="dropdown">
                             <a class="dropdown-toggle" style="color:#339900;" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About U<span class="caret"></span></a>
                                 <ul class="dropdown-menu">
                                       <li>
                                           <a href="history.php">History</a>
                                       </li>
                                       <li>
                                           <a href="vison_mison.php">Vision and Mission</a>
                                       </li>
                                       <li>
                                           <a href="how_reach_us.php">How to reach us</a>
                                       </li>
		                         </ul>
                         </li>
					     <li class="dropdown">
                             <a class="dropdown-toggle" href="#" style="color:#339900;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Academic<span class="caret"></span> </a>
                                 <ul class="dropdown-menu">
                                       <li>
                                           <a href="program.php">department program</a>
                                       </li>
                                       <li>
                                           <a href="course_structure.php">Course structure</a>
                                       </li>
                                 </ul>
                         </li>
					     <li class="dropdown">
                              <a class="dropdown-toggle" href="#" style="color:#339900;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">People<span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                       <li>
                                           <a href="faculty_mem.php">Fucalty member</a>
                                       </li>
                                       <li>
                                            <a href="student_member.php">Student</a>
                                       </li>
                                       <li>
                                            <a href="office_staff.php">Office staff</a>
                                       </li>
								  </ul>
                         </li>
					     <li class="dropdown">
                              <a class="dropdown-toggle" href="#" style="color:#339900;"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Research<span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                        <li>
                                            <a href="research.php">Research area</a>
                                        </li>
                                        <li>
                                             <a href="research_lab.php">Research lab</a>
                                        </li>
                                        <li>
                                             <a href="current_thes.php">Current thesise</a>
                                        </li>
								   </ul>
                          </li>
						  <li class="dropdown">
                               <a class="dropdown-toggle" href="#" style="color:#339900;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Facilitie<span class="caret"></span></a>
                                   <ul class="dropdown-menu">
                                        <li>
                                            <a href="dep_lib.php">Departmental library</a>
                                        </li>
                                        <li>
                                            <a href="student_fund.php">Student fund</a>
                                        </li>
                                            
								   </ul>
                           </li>
						   <li class="dropdown">
                               <a class="dropdown-toggle" href="#" style="color:#339900;"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lab<span class="caret"></span></a>
                                   <ul class="dropdown-menu">
                                        <li>
                                             <a href="lab1.php">Software lab1</a>
                                        </li>
                                        <li>
                                            <a href="lab2.php">Software lab2</a>
                                        </li>
                                        <li>
                                            <a href="lab3.php">Network lab</a>
                                        </li>
									    <li>
                                            <a href="lab4.php">Hardware lab</a>
                                        </li>
								   </ul>
                           </li>
						   <li class="dropdown">
                               <a class="dropdown-toggle" href="#" style="color:#339900;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User registration<span class="caret"></span> </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="user_registration.php">Student</a>
                                        </li>
                                        <li>
                                            <a href="user_registration.php">Teacher</a>
                                        </li>
                                    </ul>
                            </li>
                  </ul>
               </div>
             </div>
          </nav>
	    </div>
	 </div>
  </div>
 </div>
				                       <div class="clearfix" style="margin-bottom:px;"> </div>
				   			   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	
               <script src="jQuery.min.js"></script>
               <script src="js/bootstrap.min.js"></script>
	           <script src="js/bootstrap-scrollspy.js"></script>
               <script src="js/bootstrap-tooltip.js"></script>
  </body>
</html>
                  