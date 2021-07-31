<?php 
$conn=mysqli_connect('localhost','root','','ledp_evening');
session_start();

$name=$_POST['Name'];
$teacher=$_POST['teacher'];
$Course=$_POST['Course'];
$email=$_POST['email'];
$section=$_POST['section'];

$valid="SELECT* FROM ledp_registration WHERE email='$email'";

$result=mysqli_query($conn,$valid);

$rowcount=mysqli_num_rows($result);

if ($rowcount==1) {
	header('location:Registration.php');
	$_SESSION['exitemail']="true";
}else{

$sql="INSERT INTO ledp_registration VALUES ('','$name','$teacher','$Course','$email','$section')";

if (mysqli_query($conn,$sql)) {
	header('location: Registration.php');

	$_SESSION['signup']="true";
}
}
 ?>