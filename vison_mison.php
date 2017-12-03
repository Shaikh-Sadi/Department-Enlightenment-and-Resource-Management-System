<?php

include_once 'top.php';
?>
   <div class="clearfix" style="margin-bottom:5px;"> </div>
<html>


<style>
h2 {
    border: 3px solid #ddd;
   
	border-radius: 8px;
    padding: 3px;
    border-bottom: 6px solid lightgrey;
    background-color: lightgrey;
}

h4{

    text-indent: 25px;

}
</style>



   <body>
         <div class="container theme-showcase" role="main">
              <div class ="row">
			 
	               <div class="col-sm-4" >
	                    <div class="panel panel-default" style= "border: 3px solid #ddd; border-radius: 7px; padding: 3px; height:300px">
	                         <h2  >About us</h2>
	                         <h4> <a href="history.php">History</a></h4>
	                         <div class="clearfix" style="margin-bottom:px;"> </div>
		                     <h4> <a href="vison_mison.php"  >Vision and mission</a></h4>
		                     <div class="clearfix" style="margin-bottom:px;"> </div>
		                     <h4> <a href="how_reach_us.php"  >How to reach us</a></h4>
	                    </div>
	                </div>

                    <div class="col-sm-8" >
                         <div id="myCarousel" class="carousel slide" data-ride="carousel">
                               <ol class="carousel-indicators">
                                   <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                   <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                   <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                               </ol>
                 
                               <div class="carousel-inner" role="listbox">
                                     <div class="item active">
	                                      <img class="brightness" src="image/sad.jpg" alt="img1">
	                                            <div class="carousel-caption">
                                                     <p> asd bbh  jjk </p>
                                                </div>
                                     </div>
                                     <div class="item">
	                                       <img class="brightness" src="image/sa.jpg" alt="img2">
                                          
                                                <div class="carousel-caption">
                                                </div>
                                      </div>
	                                  <div class="item">
                                           <img src="image/s.jpg" alt="img2">
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
                           <div class="text-box">
				                 <h2 > Vision and Mission</h2>
	                             <div class="clearfix" style="margin-bottom:5px;"> </div>
				                 <div class="content">           
                                      <div class="contentTemplate">
                                           <div class="title pageTitle">
                                           </div>
                                           <p><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>Vision:&nbsp;</strong></span><br />
<span style="line-height: 1.6em;">To promote innovation centric education and perform cutting edge research in Computer Science &amp; Engineering.</span></span></p>

<p><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>Mission:</strong></span><br />
<span style="line-height: 1.6em;">1. Continuously endeavour to create and sustain an academic environment conducive to the highest level of research and teaching.</span><br />
<span style="line-height: 1.6em;">2. Develop human resources with sound knowledge in theory and practice of Computer Science &amp; Engineering.</span><br />
<span style="line-height: 1.6em;">3. Facilitate the development of academia-industry collaborations and societal outreach programmes.&nbsp;</span></span></p>
                                     </div>
                                </div>
                           </div>
				     </div>
					 </div>
				</div>
		   </div>
	 </body>
 </html>
				     <div class="clearfix" style="margin-bottom:25px;"> </div>


<?php
include_once 'bottom.php';
?>