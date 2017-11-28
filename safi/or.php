<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT student_name,id,department,phone_no,hall_name,room_no,bed_no
               
        FROM students 
        WHERE department="CSE" OR bed_no="A"';

mysql_select_db('hall_data');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

	echo "<table border=1 width=100%>
		<tr>
			<th>Name</th>
			<th>Student Id</th>
			<th>Department</th>
			<th>Phone_no</th>
			<th>Hall_name</th>
                        <th>Room__no</th>
                         <th>Bed_no</th>
			
			
		</tr>";
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
   echo "<tr>
			<td>".$row["student_name"]."</td>
			<td>".$row["id"]."</td>
			<td>".$row["department"]."</td>
			<td>".$row["phone_no"]."</td>
			<td>".$row["hall_name"]."</td>
                        <td>".$row["room_no"]."</td>
                        <td>".$row["bed_no"]."</td>
			
			</tr>";
	
		}
	echo "</table>";


mysql_close($conn);
?>