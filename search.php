<html>
<?php
session_start();
include("conct.php");
?>
	<head>
	</head>
	<?php
		 
	?>
	<body bgcolor="green">
		<a href="search.html">Click here to go back</a><br/>
		 
		<table border="1px" width="100%">
			<tr>
		         <th>Name</th>
                  <th>Student Id</th>
			  
			<th>CGPA:</th>
			<th>Gender:</th>
			<th>contact:</th>
 
			
		</tr>
			</tr>
			<?php
			       
					//mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
					//mysql_select_db("bootstrap") or die("Cannot connect to database"); //connect to database
					$query = mysql_query("Select * From mim Where name='sadik'"); // SQL Query
					$count = mysql_num_rows($query);
					if($count > 0)
					{
						while($row = mysql_fetch_array($query))
						{
							Print "<tr>";
						Print '<td align="center">'. $row['name'] . "</td>";
						Print '<td align="center">'. $row['s_id'] . "</td>";
						Print '<td align="center">'. $row['cgpa'] . "</td>";
						Print '<td align="center">'. $row['gender'] . "</td>";
						Print '<td align="center">'. $row['c_no'] . "</td>";
                                                //Print '<td align="center">'. $row['fee'] . "</td>";
						//Print '<td align="center">'. $row['co_no'] . "</td>";
					        Print "</tr>";
						}
					}
					else
					{
						Print '<script>alert("No such record exists!");</script>'; //Prompts the user
			         
					}
				
			?>
		</table>
	</body>
</html>
