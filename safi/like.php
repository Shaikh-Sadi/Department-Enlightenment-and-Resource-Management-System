<html>
	<head>
	</head>
	<?php
		 
	?>
	<body bgcolor="green">
		<a href="search.html">Click here to go back</a><br/>
		 
		<table border="1px" width="100%">
			<tr>
		         
                        <th>Student Id</th>
			<th>Name</th>
			<th>Book Name</th>
			<th>Author Name</th>
			<th>Submission  Date</th>
			<th>Fee</th>
                         <th>Contact No</th>
 
			
		</tr>
			</tr>
			<?php
			       
					mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
					mysql_select_db("library") or die("Cannot connect to database"); //connect to database
					$query = mysql_query("Select * From lib Where name LIKE 's%'"); // SQL Query
					$count = mysql_num_rows($query);
					if($count > 0)
					{
						while($row = mysql_fetch_array($query))
						{
							Print "<tr>";
						Print '<td align="center">'. $row['s_id'] . "</td>";
						Print '<td align="center">'. $row['name'] . "</td>";
						Print '<td align="center">'. $row['book_name'] . "</td>";
						Print '<td align="center">'. $row['atr_name'] . "</td>";
						Print '<td align="center">'. $row['sub_date'] . "</td>";
                                                Print '<td align="center">'. $row['fee'] . "</td>";
						Print '<td align="center">'. $row['co_no'] . "</td>";
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
