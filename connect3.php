<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "testdb";

$conn=mysqli_connect($servername, $username, $password, $database_name);

if(!$conn)
{
	die("Unable to connect : ".mysqli_connect_error());
}

$emp_id=$_POST['emp_id'];
 $sql = "SELECT emp_details.emp_id,emp_details.emp_name,emp3.emp_doj,emp3.emp_des FROM emp_details INNER JOIN emp3 ON emp_details.emp_id = emp3.emp_id
WHERE emp_details.emp_id = " .$emp_id;
 
$retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysqli_fetch_assoc($retval)) {
      echo "EMP ID :" .$row["emp_id"].
	"<br>EMP NAME :" .$row["emp_name"].
 	"<br>DOJ :" .$row["emp_doj"].
	"<br>DESIGNATION :" .$row["emp_des"];
	echo "<br>";
	
   }
   
   echo "Fetched data successfully\n";
mysqli_close($conn);

 

?>