<?php

include_once 'top.php';
?>
   <div class="clearfix" style="margin-bottom:5px;"> </div>
<html>


<style>
h2{
    border: 3px solid #ddd;
   
	border-radius: 8px;
    padding: 3px;
    border-bottom: 6px solid lightgrey;
    background-color: lightgrey;
}

h4{

    text-indent: 25px;

}
img
 {
    border: 3px solid #ddd;
   
	border-radius: 8px;
	height:60px;
	width:60px
    padding: 3px;
    border-bottom: 6px solid lightgrey;
    background-color: lightgrey;
}
</style>



<body>
      <div class="container theme-showcase" role="main">
           <div class ="row">
	            <div class="col-sm-4" >
	                <div class="panel panel-default" style= "border: 3px solid #ddd; border-radius: 7px; padding: 3px; height:300px">
	                     <h2  >people</h2>
	                     <h4> <a href="faculty_mem.php">faculty member</a></h4>
	                     <div class="clearfix" style="margin-bottom:px;"> </div>
		                 <h4> <a href="student_member.php"  >Student</a></h4>
		                 <div class="clearfix" style="margin-bottom:px;"> </div>
		                 <h4> <a href="office_staff.php"  >office staff</a></h4>
	  
	  </div>
                </div>

                <div class="col-sm-8" >
                     <h2 > Faculty member</h2>
                         <div class="panel panel-default" style= "border: 3px solid #ddd; border-radius: 7px; padding: 3px;>
                              <table class="table table-bordered" > 
							  <a href="#" class="list-group-item ">
                                  <img src="image/ui.jpg" alt="..." class=" img-circle">
                                  <h4 class="list-group-item-heading">Md. Akkas Ali</h4>
                                  <p class="list-group-item-text"> Assistant Professor & Chairman <i style="color: green"> <small> Computer Science and Engineering </small> </i> </p>
                              </a>
                              <a href="#" class="list-group-item ">
                                 <img src="image/ui.jpg" alt="..." class=" img-circle">
                                 <h4 class="list-group-item-heading">Md. Jamal Uddin</h4>
                                 <p class="list-group-item-text"> Assistant Professor <i style="color: green"> <small> Computer Science and Engineering </small> </i> </p>
                              </a>
							  <a href="#" class="list-group-item ">
                                 <img src="image/ui.jpg" alt="..." class=" img-circle">
                                 <h4 class="list-group-item-heading">Md. Nesarul Hoque</h4>
                                 <p class="list-group-item-text"> Lecturer <i style="color: green"> <small> Computer Science and Engineering </small> </i> </p>
                              </a> </table>
                              <div class="clearfix" style="margin-bottom:15px;"> </div>
                              <footer  id="sfot">
                                       <div class="container-fluid" id="foot1">
                                            <div class="container">
                                                 <div class="row">
                                                      <div class="col-sm-5">
                                                            <p style="font-size: small">  Bangabandhu Sheikh Mujibur Rahman Science & Technology University, </p> <p style="font-size: x-small">   Gopalganj  8100,  Dhaka, <br>Bangladesh <br><a  href="https://maps.google.com/maps?q=Bangabandhu+Sheikh+Mujibur+Rahman+Science++and+Technology+University&hl=en&sll=37.0625,-95.677068&sspn=39.320439,86.572266&hq=Bangabandhu+Sheikh+Mujibur+Rahman+Science++and+Technology+University&radius=15000&t=m&z=13"  style="color: #04acec">Coordinate:  22.966095, 89.817135</a>
                                                            </p>
                                                      </div>
                                                      <div class="col-sm-4">
                                                            <p style="font-size: small"> Contact:  </p>
                                                            <p style="font-size: x-small"> Email: registrar@bsmrstu.edu.bd   </p>
                                                            <p style="font-size: x-small"> Phone: 02-6682257   </p>
                                                      </div>
                                                      <div class="col-sm-3">
                                                            <p  style="font-size: medium; color: chartreuse"> Developed by <b>  CSE </b> </p>
                                                            <p style="font-size: small">  <a href="developer_team.php" style="color: #04acec">  Developer Team  </a> </p>
                                                            <p style="font-size: small"> <a href="report.php" style="color: #04acec"> Report security issue </a>    </p>
                                                      </div>
                                                 </div>
                                           </div>
		                             </div>
		                     </footer>
		               </div>
				 </div>
			</div>
	  </body>
</html>
<div class="clearfix" style="margin-bottom:25px;"> </div>


<?php
include_once 'bottom.php';
?>