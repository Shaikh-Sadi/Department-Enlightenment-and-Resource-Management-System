<?php

include_once 'conct.php';
?>
<?php

include_once 'top.php';
?>

<!--?php
session_start();
include("reg.php");
?>
   <!--?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
//$mysql_database="bootstrap";

// Create connection
$bd = mysql_connect($mysql_hostname,$mysql_user,$mysql_password ) or die ("opps something went wrong");

//mysql_select_db(mysql_database,$bd) or die ("opps something wrong");
?-->



<!--DOCTYPE html-->
<!--html lang="en"-->
  
  
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

<html>	

<body>
      <div class="container theme-showcase" role="main">
	  <div class ="row">
	  <div class="col-sm-12">
	 <!--
                   <div class="page-header" style="">
                        <h1>Department Enlightenment and Resource Management System</h1>
						<h4>BSMRSTU, Gopalgonj, Bangladesh </h4>
                   </div>
<!--				   
 <nav class="navbar navbar-inverse" style= "border-redius:0px !important; margin-bottom:0px;">				   
<div class="container">
     <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">Home</a></li>
        <li role="presentation"><a href="#">Profile</a></li>
        <li role="presentation"><a href="#">Messages</a></li>
     </ul>
</div>
</nav>
--><!--

                   <nav class="navbar navbar-inverse" style= "border-redius:0px !important; margin-bottom:0px;">
                        <div class="container">
                          <!-- <div class="navbar-header">
						   <!--
                                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                </button>
                                        <!--<a class="navbar-brand" href="#">Project name</a>
	     <div class="bs-docs-example tooltip-demo">
            <ul class="bs-docs-tooltip-examples">
              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</a></li>
              <li><a href="#" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</a></li>
              <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</a></li>
              <li><a href="#" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</a></li>
            </ul>
          </div>			
                            </div> -->
							<!--
							
                            <div class="navbar-collapse collapse">
                               <ul class="nav navbar-nav">
                                  <li class="">
                                      <a href="#">Home</a>
                                  </li>
								
                                  <li class="dropdown">
                                     <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                              About Us
											    <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu">
                                             <li>
                                                  <a href="history.php">History</a>
                                             </li>
                                             <li>
                                                  <a href="top-bottom.php">Vision and Mission</a>
                                             </li>
                                             <li>
                                                  <a href="top-bot-comb.php">How to reach us</a>
                                             </li>
											 </ul>
                                  </li>
								  <li class="dropdown">
                                     <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                              Academic
											    <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu">
                                             <li>
                                                  <a href="dep-program.php">department program</a>
                                             </li>
                                             <li>
                                                  <a href="course_structure.php">Course structure</a>
                                             </li>
                                             <li>
                                                  <a href="course-offer.php">Course offer</a>
                                             </li>
											 </ul>
                                  </li>
								  <li class="dropdown">
                                     <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                             People
											    <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu">
                                             <li>
                                                  <a href="faculty_mem.php">Fucalty member</a>
                                             </li>
                                             <li>
                                                  <a href="student.php">Student</a>
                                             </li>
                                             <li>
                                                  <a href="office-staf.php">Office staff</a>
                                             </li>
											 <li>
                                                  <a href="research-scholar.php">Research scholars</a>
                                             </li>
											 </ul>
                                  </li>
								   <li class="dropdown">
                                     <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                              Research
											    <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu">
                                             <li>
                                                  <a href="#">Research area</a>
                                             </li>
                                             <li>
                                                  <a href="#">Research lab</a>
                                             </li>
                                             <li>
                                                  <a href="#">Current project</a>
                                             </li>
											   <li>
                                                  <a href="#">Current thesise</a>
                                             </li>
											 </ul>
                                  </li>
								   <li class="dropdown">
                                     <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                             Facilities
											    <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu">
                                             <li>
                                                  <a href="#">Departmental library</a>
                                             </li>
                                             <li>
                                                  <a href="#">Student fund</a>
                                             </li>
                                             <li>
                                                  <a href="#">Scholarship</a>
                                             </li>
											 </ul>
                                  </li>
								   <li class="dropdown">
                                     <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                             Contact
											    <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu">
                                             <li>
                                                  <a href="#">Fucalty member</a>
                                             </li>
                                             <li>
                                                  <a href="#">Department office/a>
                                             </li>
                                             <li>
                                                  <a href="#">Department CR</a>
                                             </li>
											 </ul>
                                  </li>
                                 
                                       <li class="dropdown">
                                          <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                              Lab
                                              <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu">
                                             <li>
                                                  <a href="#">Software lab1</a>
                                             </li>
                                             <li>
                                                  <a href="#">Software lab2</a>
                                             </li>
                                             <li>
                                                  <a href="#">Network lab</a>
                                             </li>
											 <li>
                                                  <a href="#">Hardware lab</a>
                                             </li>
											 <!--
                                             <li class="divider" role="separator"></li>
                                             <li class="dropdown-header">Nav header</li>
                                             <li>
                                                  <a href="#">Separated link</a>
                                             </li>
                                             <li>
                                                  <a href="#">One more separated link</a>
                                             </li>-->
											 <!--
                                          </ul>
                                       </li>
                                </ul>
                            </div>
                        </div>
                   </nav>
				   -->
				   
				   <div class="clearfix" style="margin-bottom:12px;"> </div>
				   
                   <div class="nav nav-justified">
                         <!--form class="navbar-form navbar-right" role="search">
                               <div class="form-group">
                                   <input type="text" class="form-control" placeholder="Search">
                               </div>
                         <button type="submit" class="btn btn-default">Submit</button>
                         </form-->
                   </div>
				   

<div class="clearfix" style="margin-bottom:5px;"> </div>


<!--img src="uploads/routine4.jpg" alt="Mountain View" style="width:1135px;height:300px;">



<div class="clearfix" style="margin-bottom:5px;"> </div-->


<div class="panel panel-default" style="border-redius:0px !important; margin-bottom:0px; width:100%;">
<!--div class="panel-heading"-->
<div data-spy="scroll" data-target="#navbarExample" data-offset="0" class="scrollspy-example"  style="width:1135px;height:300px;border:1;">
<div class="table-responsive" >

<table class="table table-bordered" style="colors:blue;">
<thead>
<tr>
<th>Day</th>
<th>Semester</th>
<th>9-10 AM</th>
<th>10-11 AM</th>
<th>11-12 AM</th>
<th>2-3 PM</th>
<th>3-4 PM</th>
<th>4-5 PM</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">Sunday</th>
<td>4-1(R:407)</br>3-1(R:407)</br>2-1(R:408)</br>1-1(R:408)</td>
<td>  </br>CSE300</br> </br>CSE101,MAA</td>
<td>CSE401</br>CSE310,MAA</br> </br>ENG105</td>
<td>CSE401</br>CSE320,MNH</br> </br>MAT105</td>
<td>CSE410</br>CSE313,MMI</br>STA204</br>CSE104,MJU</td>
<td>CSE412,MNH</br>CSE313,MMI</br>MAT204</br>CSE104,MJU</td>
<td>CSE400</br> </br>CSE200</br> </td>
</tr>
<tr>
<th scope="row">monday</th>
<td>4-1(R:407)</br>3-1(R:407)</br>2-1(R:408)</br>1-1(R:408)</td>
<td>  </br>CSE302,MJU</br>CSE221</br>EEE105</td>
<td>CSE403,MNH</br>CSE312,MMI</br>CSE221</br>CSE103,MJU</td>
<td>CSE403,MNH</br>CSE300</br> </br> </td>
<td>CSE402,MNH</br>CSE321,MNH</br>ACC204</br>EEE106</td>
<td>CSE400,</br>CSE321,MNH</br>ECO204</br>EEE106</td>
<td>CSE422,MAA</br>CSE321,MNH</br>CSE202,MMI</br>EEE106,</td>
</tr>
<tr>
<th scope="row">tuesday</th>
<td>4-1(R:407)</br>3-1(R:407)</br>2-1(R:408)</br>1-1(R:408)</td>
<td>  </br>CSE320,MNH</br> </br>MAT105</td>
<td>CSE411</br>CSE302,MJU</br>CSE203,MMI</br>CSE101,MAA</td>
<td>CSE411</br>CSE310,MAA</br>CSE203,MMI</br>EEE105</td>
<td>CSE412,MNH</br> </br>CSE202,MMI</br>ENG106</td>
<td>CSE410</br>CSE303,MJU</br>STA204</br>ENG106,</td>
<td>CSE400</br>CSE303,MJU</br>MAT204</br></td>
</tr>
<tr>
<th scope="row">wednestday</th>
<td>4-1(R:407)</br>3-1(R:407)</br>2-1(R:408)</br>1-1(R:408)</td>
<td>  </br>CSE320,MNH</br> </br>MAT105</td>
<td>CSE411</br>CSE302,MJU</br>CSE203,MMI</br>CSE101,MAA</td>
<td>CSE411</br>CSE310,MAA</br>CSE203,MMI</br>EEE105</td>
<td>CSE412,MNH</br> </br>CSE202,MMI</br>ENG106</td>
<td>CSE410</br>CSE303,MJU</br>STA204</br>ENG106,</td>
<td>CSE400</br>CSE303,MJU</br>MAT204</br></td>
</tr>
<tr>
<th scope="row">thursday</th>
<td>4-1(R:407)</br>3-1(R:407)</br>2-1(R:408)</br>1-1(R:408)</td>
<td>  </br>CSE320,MNH</br> </br>MAT105</td>
<td>CSE411</br>CSE302,MJU</br>CSE203,MMI</br>CSE101,MAA</td>
<td>CSE411</br>CSE310,MAA</br>CSE203,MMI</br>EEE105</td>
<td>CSE412,MNH</br> </br>CSE202,MMI</br>ENG106</td>
<td>CSE410</br>CSE303,MJU</br>STA204</br>ENG106,</td>
<td>CSE400</br>CSE303,MJU</br>MAT204</br></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!--/div-->


<div class="clearfix" style="margin-bottom:35px;"> </div>
<div class ="row">
<!--div class="container"-->
<!--div class="col-sm-13" style="background-color:beige" -->
<div class="col-sm-5"  >
<div class="panel panel-default" style="border-redius:0px !important;color:#B22222; margin-bottom:0px; width:100%;">
<div class="panel-heading" style= "color:#D00000;">
<i class="fa fa-bell fa-fw" style="color:#B22222;"></i>
<td><h4>Notice Board</h4></td>
</div>
 <div data-spy="scroll" data-target="#navbarExample" data-offset="0" class="scrollspy-example"" style="height:300px;">
<div class="panel-body">
<div class="list-group">
<a class="list-group-item" href="jim/ICT Tranning Notice0001.pdf" download>
<i class="fa fa-comment fa-fw"></i>
<h4>২০১২-১৩ শিক্ষা বর্ষের শিক্ষার্থীদের আইসিটি প্রশিক্ষণ সংক্রান্ত বিজ্ঞপ্তি</h4>

<div class="clearfix" style="margin-bottom:5px;"> </div>
<p class='list-group-item-text'>30/01/2017 </p> 
 
   
</a>
<a class="list-group-item" href="jim/Project Date0001(1).pdf" download>
<i class="fa fa-comment fa-fw"></i>
<h4>সিএসই সকল বর্ষের ফাইনাল প্রজেক্ট/ থিসিস এর তারিখ দেয়া হলো।.....সিএসই অফিস।</h4>

<div class="clearfix" style="margin-bottom:5px;"> </div>
<p class='list-group-item-text'>30/01/2017 </p> 
 
   
</a>
<!--span class="pull-right text-muted small">
<em>27 minutes ago</em>
</span-->

<a class="list-group-item" href="jim/Thesis Template.doc" download>
<i class="fa fa-comment fa-fw"></i>
<h4>জামাল স্যারের অধীনে থিসিস করছে তাদের জন্য থিসিস রিপোর্ট ফরমেট</h4>

<div class="clearfix" style="margin-bottom:5px;"> </div>
<p class='list-group-item-text'>30/01/2017 </p> 
 
   
<!--span class="pull-right text-muted small">
<em>27 minutes ago</em>
</span-->
</a>
<a class="list-group-item" href="jim/14 December Notice0001.pdf" download>
<i class="fa fa-comment fa-fw"></i>
<h4>শহীদ বুদ্ধিজীবী দিবস এবং মহান বিজয় দিবস-২০১৬ উদযাপন সংক্রান্ত বিজ্ঞপ্তি।</h4>

<div class="clearfix" style="margin-bottom:5px;"> </div>
<p class='list-group-item-text'>30/01/2017 </p> 
 
   
<!--span class="pull-right text-muted small">
<em>27 minutes ago</em>
</span-->
</a>
<a class="list-group-item" href="jim/14 December Notice0001.pdf" download>
<i class="fa fa-comment fa-fw"></i>
<h4>Ntice2</h4>

<div class="clearfix" style="margin-bottom:5px;"> </div>
<p class='list-group-item-text'>30/01/2017 </p> 
 
   
<!--span class="pull-right text-muted small">
<em>27 minutes ago</em>
</span-->
</a>
<a class="list-group-item" href="jim/14 December Notice0001.pdf" download>
<i class="fa fa-comment fa-fw"></i>
<h4>Ntice3</h4>

<div class="clearfix" style="margin-bottom:5px;"> </div>
<p class='list-group-item-text'>30/01/2017 </p> 
 
   

<!--span class="pull-right text-muted small">
<em>27 minutes ago</em>
</span-->
</a>




</div>
</div>
</div>

</div>

 <div class="page-header">
 <div class="panel-heading">
<i class="fa fa-bell fa-fw" ></i>
<th><h2 style= "color:#D00000;">help site</h2></th>
</div>
  
 <!-- <h1>help site</h1>-->
  </div>
  <!--ul class="list-group"-->
    <ul class="nav navbar-nav">
   <div class="dropdown">
   <h4 class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style= color:midnightblue;>

  First year

 <span class="caret"></span>
</h4>
 <ul class="dropdown-menu">
    <li>
      <a href="show_first_year_course_table.php? value=1-1">First Semister</a>
     </li>
    <li>
      <a href="show_first_year_course_table.php? value=1-2">Second Semister</a>
    </li>
</ul>
</div>
<div class="clearfix" style="margin-bottom:5px;"> </div>

 <div class="dropdown">
   <h4 class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style= color:midnightblue;>

  Second year

 <span class="caret"></span>
</h4>
 <ul class="dropdown-menu">
    <li>
      <a href="show_first_year_course_table.php? value=2-1">First Semister</a>
     </li>
    <li>
      <a href="show_first_year_course_table.php? value=2-2">Second Semister</a>
    </li>
</ul>
</div>
<div class="clearfix" style="margin-bottom:5px;"> </div>

 <div class="dropdown">
   <h4 class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style= color:midnightblue;>

  Third year

 <span class="caret"></span>
</h4>
 <ul class="dropdown-menu">
    <li>
      <a href="show_first_year_course_table.php? value=3-1">First Semister</a>
     </li>
    <li>
      <a href="show_first_year_course_table.php? value=3-2">Second Semister</a>
    </li>
</ul>
</div>
<div class="clearfix" style="margin-bottom:5px;"> </div>

 <div class="dropdown">
   <h4 class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style= color:midnightblue;>

  Fourth year

 <span class="caret"></span>
</h4>
 <ul class="dropdown-menu">
    <li>
      <a href="show_first_year_course_table.php? value=4-1">First Semister</a>
     </li>
    <li>
      <a href="show_first_year_course_table.php? value=4-2">Second Semister</a>
    </li>

<!--/ul-->
</div>
<div class="clearfix" style="margin-bottom:5px;"> </div>
	 
                                    
                                         
                                  



</ul>

  


</div>

  <!--div class="container"-->
  <div class="col-md-7">
   <!--div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 500px; height: 250px; overflow: hidden;"-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
	<img class="brightness" src="image/s.jpg" alt="img1">
      <!--img src="image/sad.jpg" alt="img1"-->
	  
      <div class="carousel-caption">
        <p> </p>
      </div>
    </div>
    <div class="item">
	<img class="brightness" src="image/sa.jpg" alt="img2">
      <!--img src="image/sa.jpg" alt="img2"-->
      <div class="carousel-caption">
      </div>
    </div>
	<div class="item">
      <img src="image/sadir.jpg" alt="img2">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="clearfix" style="margin-bottom:0px;"> </div>



<!--div class="col-md-4"-->

 <section id="tabs">
         
          <!--div class="bs-docs-example"-->
            <ul id="myTab" class="nav nav-pills">
			  <li role="presentation" class="active"><a href="#home" data-toggle="tab"style= "border:2px solid #ddd;border:border-radius:6px;">About the dept</a></li>
              <!--li class="active"><a href="#home" data-toggle="tab">About the dept.</a></li-->
              <li role="presentation" ><a href="#profile" data-toggle="tab" style= "border:2px solid #ddd;border-radius:10px;">Research Spotlight</a></li>
              <!--li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#dropdown1" data-toggle="tab">@fat</a></li>
                  <li><a href="#dropdown2" data-toggle="tab">@mdo</a></li>
                </ul>
              </li-->
            </ul>
			<div class="clearfix" style="margin-bottom:8px;"> </div>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="home">
                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.Global Excellence and Local Relevance in research, teaching, and technology development is the vision of the Department. The Department was started as the Computer Centre in 1973 with the acquisition of an IBM 370, perhaps the most powerful computer in India at that time. It offered M.Tech, M.S and PhD degree programmes. In 1983, the B.Tech degree programme was started.

Today the Department has a vibrant student body numbering about 700. Over 60% are postgraduate, mostly supported by scholarships. The Department also offers several attractive industry-sponsored Fellowships for outstanding PhD scholars and liberally supports participation in top-ranking international conferences. Over 50 full-time engineers work on R&D projects enriching the academic environment.</p>
              </div>
              <div class="tab-pane fade" id="profile">
                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
              </div>
              <!--div class="tab-pane fade" id="dropdown1">
                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
              </div>
              <div class="tab-pane fade" id="dropdown2">
                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
              </div-->
            </div>
          <!--/div-->
		  </section>
<!--/div-->


</div>
  
   </div>




<div class="clearfix" style="margin-bottom:35px;"> </div>



<!--div class="container"-->
<div class ="row">
<!--div class="col-sm-13" style="background-color:beige" -->
<div class="col-sm-4"  >



<div class="panel panel-default" style="border-redius:0px !important; margin-bottom:0px; width:100%;">
<div class="panel-heading"style="color:#D00000 ;">
<i class="fa fa-bell fa-fw"></i>
<td><h4>Department achievement</h4></td>
</div>
<div class="panel-body">
<div class="list-group">
<a class="list-group-item" href="journal_pub.php">
<i class="fa fa-comment fa-fw"></i>
Journal publication

</a>
<a class="list-group-item" href="leadest_project.php">
<i class="fa fa-twitter fa-fw"></i>
Leadest project
<!--span class="pull-right text-muted small">
<em>27 minutes ago</em>
</span-->
</a>
<a class="list-group-item" href="ACMICPC_rank.php">
<i class="fa fa-envelope fa-fw"></i>
world wide ACMCP ranking position
<!--span class="pull-right text-muted small">
<em>27 minutes ago</em>
</span-->
</a>
<a class="list-group-item" href="jim/14 December Notice0001.pdf" download>
<i class="fa fa-tasks fa-fw"></i>
Sports
<!--span class="pull-right text-muted small">
<em>27 minutes ago</em>
</span-->
</a>
<a class="list-group-item" href="jim/14 December Notice0001.pdf" download>
<i class="fa fa-upload fa-fw"></i>
Cultural
<!--span class="pull-right text-muted small">
<em>27 minutes ago</em>
</span-->
</a>
<!--a class="list-group-item" href="#">
<i class="fa fa-tasks fa-fw"></i>

<!--span class="pull-right text-muted small">
<em>27 minutes ago</em>
</span-->
<!--/a-->



</div>
</div>

</div>
</div>






<!--div class="col-sm-13" style="background-color:beige" -->
  <div class="col-sm-4">

                    <div class="panel panel-default">

                        <div class="panel-heading" style="color:#D00000;">
                           <td> <h2 class="panel-title" style="color::#D00000;">Message from Chairman Sir</h2</td>
                        </div>

                        <div class="panel-body">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="image/sir.jpg" alt="VC" style =" border: 3px solid #ddd;border-radius: 8px;height:90px;width:115px;padding: 3px;">
                                    </a>
                                    <hr> <h6> <b> Md. Akkas Ali, </b></h6>
                                    <h6> <i>Chairman of </br> CSE Department</i> </h6>  <hr>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"></h4>
                                  <i> <p align="justify">Welcome to The department of Computer Science & Engineering (CSE), Bangabandhu Sheikh Mujibur Rahman Science and Technology university, is one of the leading Graduate department in Bangladesh.The curriculum offered by our department has been designed ......</p><p></p>

                                    <p align="justify">cocequently  </p></i>  <a href="cairman.php"></a>
                                </div>
                            </div>


                        </div>
                    </div>
                 <!-- END of VC message -->


            </div>


<div class="col-sm-4"  >


<div class="panel panel-default" style="border-redius:0px !important; margin-bottom:0px; width:100%;">
<div class="panel-heading"style="color:#D00000;">
<i class="fa fa-bell fa-fw"></i>
<td><h4>Department activity</h4></td>
</div>
<div class="panel-body">
<div class="list-group">
<a class="list-group-item" href="jim/14 December Notice0001.pdf" download>
<i class="fa fa-comment fa-fw"></i>
Seminar

</a>
<a class="list-group-item" href="jim/14 December Notice0001.pdf" download>
<i class="fa fa-twitter fa-fw"></i>
Programming booth camp
<!--span class="pull-right text-muted small">
<em>27 minutes ago</em>
</span-->
</a>
<a class="list-group-item" href="jim/14 December Notice0001.pdf" download>
<i class="fa fa-envelope fa-fw"></i>
NSPC organization
<!--span class="pull-right text-muted small">
<em>27 minutes ago</em>
</span-->
</a>
<a class="list-group-item" href="jim/AdvancedCoding.pdf" download>
<i class="fa fa-tasks fa-fw"></i>
Programming contest
<!--span class="pull-right text-muted small">
<em>27 minutes ago</em>
</span-->
</a>



</div>
</div>

</div>
</div>
</div>
</div>



<div class="clearfix" style="margin-bottom:10px;"> </div>


<!--div class="wrapper"-->
<!--
   <div id="academiclinks" class="clear" style="border-radius: 8px; border: 0px solid #ddd;padding: 3px;">
   <div class="col-sm-4"  >
    <div class="linkbox">
      <h2>For Current Students</h2>
      <ul>
        <li><a href="#">»Meet your faculty advisor</a></li>
        <li><a href="#">»Academic calender</a></li>
        <li><a href="#">» co-curricular activity</a></li>
        <li><a href="#">»Dept. library</a></li>
        <li><a href="#">»Funding opportunity</a></li>
		
	
      </ul>
    </div>
	 </div>
	  <div class="col-sm-4"  >
    <div class="linkbox">
      <h2>For Prospective Students</h2>
      <ul>
        
        </a><li><a href="#">»PhD Admission Process.</a></li>
        <li><a href="#">» Research Highlights.</a></li>
        <li><a href="#">» New selective persion in dept.</a></li>
        <li><a href="#">» Work life instruction</a></li>
		
       
      </ul>
    </div>
	  </div>
	   <div class="col-sm-4"  >
    <div class="linkbox">
      <h2>For Visitors</h2>
      <ul>
        <li><a href="#">» Reaching BSMRSTU CSE</a></li>
        <li><a href="#">» Locate Offices Dept. cse</a></li>
        <li><a href="#">» How reach people in dept.</a></li>
        <li><a href="#">» survival guide for visitor</a></li>
      
        </ul>
    </div>

	   </div>
   	<div class="clearfix" style="margin-bottom:20px;"> </div>
  </div>



</div>
</div>



<!--
<div class="col-sm-4" style="background-color: cornsilk">
<div class="panel-body">
<div class="list-group">
 

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
	<!--
	</div>
	</div>
	
	
	
<div class="col-sm-3" style="background-color: cornsilk">
<form action="add.php" method="post">
	<label> Name &nbsp;</label> <input name="name" type="text" size="40px" /> <br>
	<label>Student Id &nbsp;</label><input name="s_id" type="text" size="40px" /> <br>
	<label>CGPA &nbsp;</label><input name="cgpa" type="text" size="40px" /><br>
	<label>Gender</label><input name="gender" type="text" size="40px" /><br>
	<label>Contact NO</label><input name="c_no" type="text" size="40px" /><br><br><br><br>
	
	<input name="sub" type="submit" value="Submit" /><br><br>



</form>
</div>
-->





	

 

<!--div class="clearfix" style="margin-bottom:30px;"> </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!--
    <script src="jQuery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--script src="js/bootstrap.min.js"></script>
	<!--
	<script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
	-->
	<!--script src="js/bootstrap.js"></script>
	<script src="js/npm.js"></script-->
	
  </body>
  
  
</html>


<?php
include_once 'bottom.php';
?>





