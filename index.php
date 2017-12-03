<?php

include_once 'conct.php';
?>
<?php

include_once 'top.php';
?>

<html>	

<body>
      <div class="container theme-showcase" role="main">
	    <div class ="row">
		<div class= "row">
	        <div class="col-sm-12">	
		         <div class="clearfix" style="margin-bottom:12px;"> </div>
				 <div class="nav nav-justified"></div>
				 <div class="clearfix" style="margin-bottom:5px;"> </div>
                 <div class="panel panel-default" style="border-redius:0px !important; margin-bottom:0px; width:100%;">
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
                 <div class="col-sm-5"  >
                      <div class="panel panel-default" style="border-redius:0px !important;color:#B22222; margin-bottom:0px; width:100%;">
                           <div class="panel-heading" style= "color:#D00000;">
                                <i class="fa fa-bell fa-fw" style="color:#B22222;"></i>
                                <td><h4>Notice Board</h4></td>
                           </div>
                           <div data-spy="scroll" data-target="#navbarExample" data-offset="0" class="scrollspy-example"" style="height:300px;">
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
                                            <a class="list-group-item" href="jim/Thesis Template.doc" download>
                                                <i class="fa fa-comment fa-fw"></i>
                                                <h4>জামাল স্যারের অধীনে থিসিস করছে তাদের জন্য থিসিস রিপোর্ট ফরমেট</h4>
                                                <div class="clearfix" style="margin-bottom:5px;"> </div>
                                                <p class='list-group-item-text'>30/01/2017 </p> 
                                            </a>
                                            <a class="list-group-item" href="jim/14 December Notice0001.pdf" download>
                                                <i class="fa fa-comment fa-fw"></i>
                                                <h4>শহীদ বুদ্ধিজীবী দিবস এবং মহান বিজয় দিবস-২০১৬ উদযাপন সংক্রান্ত বিজ্ঞপ্তি।</h4>
                                                <div class="clearfix" style="margin-bottom:5px;"> </div>
                                                <p class='list-group-item-text'>30/01/2017 </p> 
                                            </a>
                                            <a class="list-group-item" href="jim/14 December Notice0001.pdf" download>
                                                 <i class="fa fa-comment fa-fw"></i>
                                                 <h4>Ntice2</h4>
                                                 <div class="clearfix" style="margin-bottom:5px;"> </div>
                                                 <p class='list-group-item-text'>30/01/2017 </p> 
                                            </a>
                                            <a class="list-group-item" href="jim/14 December Notice0001.pdf" download>
                                                 <i class="fa fa-comment fa-fw"></i>
                                                 <h4>Ntice3</h4>
                                                 <div class="clearfix" style="margin-bottom:5px;"> </div>
                                                 <p class='list-group-item-text'>30/01/2017 </p> 
                                            </a>
                              </div>  
                       </div>
                

                <div class="page-header">
                    <div class="panel-heading">
                        <i class="fa fa-bell fa-fw" ></i>
                        <th><h2 style= "color:#D00000;">help site</h2></th>
                    </div>
                </div>
  
                <ul class="nav navbar-nav">
                <div class="dropdown">
                    <h4 class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style= color:midnightblue;>First year<span class="caret"></span></h4>
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
                     <h4 class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style= color:midnightblue;>Second year<span class="caret"></span></h4>
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
                      <h4 class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style= color:midnightblue;>Third year<span class="caret"></span></h4>
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
                      <h4 class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style= color:midnightblue;>Fourth year<span class="caret"></span></h4>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="show_first_year_course_table.php? value=4-1">First Semister</a>
                          </li>
                          <li>
                              <a href="show_first_year_course_table.php? value=4-2">Second Semister</a>
                          </li>
                      </ul>
                 </div>

				 <div class="clearfix" style="margin-bottom:5px;"> </div>
				 </ul>
				
            </div>

 
  <div class="col-md-7">
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
               <div class="item active">
	                <img class="brightness" src="image/s.jpg" alt="img1">
                         <div class="carousel-caption">
                              <p> </p>
                          </div>
               </div>
               <div class="item">
	                <img class="brightness" src="image/sa.jpg" alt="img2">
                         <div class="carousel-caption">
						      <p> </p>
                         </div>
               </div>
	           <div class="item">
                    <img src="image/sadir.jpg" alt="img2">
                         <div class="carousel-caption">
                              <p> </p>
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

     <section id="tabs">
          <ul id="myTab" class="nav nav-pills">
			  <li role="presentation" class="active"><a href="#home" data-toggle="tab"style= "border:2px solid #ddd;border:border-radius:6px;">About the dept</a></li>
             
              <li role="presentation" ><a href="#profile" data-toggle="tab" style= "border:2px solid #ddd;border-radius:10px;">Research Spotlight</a></li>
           
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
          </div>
     </section>
  </div>
</div>

<div class="clearfix" style="margin-bottom:35px;"> </div>


   <div class ="row">
        <div class="col-sm-4"  >
             <div class="panel panel-default" style="border-redius:0px !important; margin-bottom:0px; width:100%;">
                  <div class="panel-heading"style="color:#D00000 ;">
                       <i class="fa fa-bell fa-fw"></i>
                       <td><h4>Department achievement</h4></td>
                  </div>
                  <div class="panel-body">
                       <div class="list-group">
                            <a class="list-group-item" href="journal_pub.php">
                               <i class="fa fa-comment fa-fw"></i>Journal publication
                            </a>
                            <a class="list-group-item" href="leadest_project.php">
                               <i class="fa fa-twitter fa-fw"></i>Leadest project
                            </a>
                            <a class="list-group-item" href="ACMICPC_rank.php">
                               <i class="fa fa-envelope fa-fw"></i>world wide ACMCP ranking position
                            </a>
                            <a class="list-group-item" href="jim/14 December Notice0001.pdf" download>
                               <i class="fa fa-tasks fa-fw"></i>Sports
                            </a>
                            <a class="list-group-item" href="jim/14 December Notice0001.pdf" download>
                               <i class="fa fa-upload fa-fw"></i>Cultural
                            </a>
                       </div>
                  </div>
             </div>
        </div>
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
        </div>
        <div class="col-sm-4">
             <div class="panel panel-default" style="border-redius:0px !important; margin-bottom:0px; width:100%;">
                  <div class="panel-heading"style="color:#D00000;">
                       <i class="fa fa-bell fa-fw"></i>
                       <td><h4>Department activity</h4></td>
                  </div>
                  <div class="panel-body">
                       <div class="list-group">
                            <a class="list-group-item" href="jim/14 December Notice0001.pdf" download>
							   <i class="fa fa-comment fa-fw"></i>Seminar
                            </a>
                            <a class="list-group-item" href="jim/14 December Notice0001.pdf" download>
                               <i class="fa fa-twitter fa-fw"></i>Programming booth camp
                            </a>
                            <a class="list-group-item" href="jim/14 December Notice0001.pdf" download>
                               <i class="fa fa-envelope fa-fw"></i>NSPC organization
                            </a>
                            <a class="list-group-item" href="jim/AdvancedCoding.pdf" download>
                               <i class="fa fa-tasks fa-fw"></i>Programming contest
                            </a>
                       </div>
                  </div>
		     </div>
        </div>
   </div>
 </div>
</div>
    <div class="clearfix" style="margin-bottom:10px;"> </div>
	
 </body>
</html>


<?php
include_once 'bottom.php';
?>





