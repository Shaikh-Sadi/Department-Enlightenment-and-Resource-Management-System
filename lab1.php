<?php

include_once 'top.php';
?>
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
           <div class="clearfix" style="margin-bottom:5px;"> </div> 
                <div class="col-sm-4" >
	                 <div class="panel panel-default" style= "border: 3px solid #ddd; border-radius: 7px; padding: 3px; height:300px">
	                      <div class="clearfix" style="margin-bottom:5px;"> </div> 
	                      <h4> <a href="history.php">About us</a></h4>
	                      <div class="clearfix" style="margin-bottom:px;"> </div>
		                  <h4> <a href="program.php"  >Academic</a></h4>
		                  <div class="clearfix" style="margin-bottom:px;"> </div>
		                  <h4> <a href="faculty_mem.php"  >People</a></h4>
		                  <div class="clearfix" style="margin-bottom:px;"> </div>
		                  <h4> <a href="research.php"  >Research</a></h4>
		                  <div class="clearfix" style="margin-bottom:px;"> </div>
		                  <h4> <a href="dep_lib.php">facilities</a></h4>
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
				                <h2 >Software Lab</h2>
	                            <div class="clearfix" style="margin-bottom:5px;"> </div>
                                <p >
Department of Computer Science was established in University of Bangabandhu sheikh mujibur rahman science and technology university, in the year 2011, with the objective of imparting quality education in the field of Computer Science. With rapidly evolving technology and the continuous need for innovation the department has always produced quality professionals, holding important positions in Information Technology industry in bangladesh and abroad.

The Department started the three year Master of Computer Applications (MCA) programme in the year 2011, which was among the first such programmes in bangladesh.

The Department has started B.Sc. Computer Science course in the year 2011 with the aim to develop core competence in Computer Science and prepare the students to carry out development work, as well as take up challenges in research.

Besides these the Department has strong research interests in diverse branches of Computer Science and offers a Doctor of Philosophy (Ph.D.) Programme aimed at producing quality researchers.

The Undergraduate programmes B.Sc. (H) Computer Science, B.Sc. Applied Sciences and B.A. Programmes are offered by the University through its constituent colleges.
                                </p>
                          </div>
				    </div>
			  </div>
		</div>
  </body>

</html>

<?php
include_once 'bottom.php';
?>