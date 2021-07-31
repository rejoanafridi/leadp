<?php 
$conn=mysqli_connect('localhost','root','','ledp_evening');

session_start();

$Id=$_GET['Id'];

$Name=$_POST['Name'];
$teacher=$_POST['teacher'];
$Course=$_POST['Course'];
$email=$_POST['email'];
$section=$_POST['section'];

$sql="UPDATE ledp_registration SET Name='$Name',teacher='$teacher',Course='$Course', email='$email', section='$section' WHERE Id=$Id";


if (mysqli_query($conn,$sql)) {
	header('location: display.php');

	$_SESSION['update']="true";
}
