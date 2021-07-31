<?php 
$conn=mysqli_connect('localhost','root','','ledp_evening');

session_start();

$Id=$_GET['Id'];

$sql="DELETE FROM ledp_registration WHERE Id=$Id";

if (mysqli_query($conn,$sql)) {
	header('location: display.php');

	$_SESSION['delete']="true";
}

 ?>