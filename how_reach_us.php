
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
				               <h2 >  How To Reach Us </h2>
	                      <div class="clearfix" style="margin-bottom:5px;"> </div>	 
                          <div class="content">           
                               <div class="contentTemplate">
                                    <div class="title pageTitle">
                                    </div>
                                    <p><span style="font-size:14px;"><strong>Postal Address:</strong><br />
                                       <span style="line-height: 1.6em;">Department of Computer Science and Engineering.</span><br />
                                       <span style="line-height: 1.6em;">Bangabandhu Sheikh Mujibur Rahman Science and Technology University.</span><br />
                                       <span style="line-height: 1.6em;">Gobra Road.</span><br />
                                       <span style="line-height: 1.6em;">Gopalgonj, Bangladesh.</span></span>
									</p>

                                    <p><strong style="font-size: 14px; font-family: arial, helvetica, sans-serif; line-height: 1.6em;">Email:&nbsp;</strong><span style="font-size: 14px; line-height: 20.8px;">will be add.</span></p>
                                    <p style="line-height: 20.8px;"><strong style="font-size: 14px; font-family: arial, helvetica, sans-serif; line-height: 1.6em;">Telephone:&nbsp;</strong><span style="font-size: 14px; line-height: 1.6em;">will be add.</span></p>
                                    <p style="line-height: 20.8px;"><span style="font-size: 14px; line-height: 1.6em;"><strong>Fax:&nbsp;</strong></span><span style="font-size: 14px; line-height: 1.6em;">will be add.</span></p>
                                    <p><strong style="line-height: 20.8px; font-size: 14px;">HEAD:</strong><br />
                                    <a href="#" style="line-height: 20.8px; font-size: 14px;"><strong>Akkas Ali</strong></a><br />
                                    <span style="font-size: 14px; line-height: 20.8px;"><strong>Tel:</strong>will be add</span><br />
                                    <span style="line-height: 20.8px; font-size: 14px;"><strong>Email:</strong>will be add</span></p>
                                    <p><br />
                                    <strong style="font-size: 14px; line-height: 1.6em;">Map:</strong></p>
                                    <p><iframe frameborder="0" height="450" src="https://www.google.com/maps/embed/v1/directions?origin=Bangabandhu Sheikh Mujibur Rahman Science and Technology University;" style="border:0" width="600"></iframe></p>
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