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
if(isset($_POST['emp_resume'])){
	$emp_id = $_POST['emp_id'];
	$emp_name = $_POST['emp_name'];
	$emp_state = $_POST['emp_state'];
	$emp_city = $_POST['emp_city'];
	$emp_hobbies = $_POST['emp_hobbies'];
	$emp_contact = $_POST['emp_contact'];
	$emp_resume = $_POST['emp_resume'];

	$sql_query = "INSERT INTO emp_details (emp_id,emp_name,emp_state,emp_city,emp_hobbies,emp_contact,emp_resume)
	VALUES ('$emp_id','$emp_name','$emp_state','$emp_city','$emp_hobbies','$emp_contact','$emp_resume')";

if(mysqli_query($conn, $sql_query))
{
	echo "New Details Inserted Successfully !";
}
else
{
	echo "Error : ".$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}


?>


