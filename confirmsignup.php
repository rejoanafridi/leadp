<?php 
$conn=mysqli_connect('localhost','root','','ledp_evening');
session_start();

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if ($password==$cpassword) {
	$password=md5($password);
}

$valid="SELECT* FROM ledp_signup WHERE email='$email'";

$result=mysqli_query($conn,$valid);

$rowcount=mysqli_num_rows($result);

if ($rowcount==1) {
	header('location: signup.php');
	$_SESSION['exitemail']="true";
}else{

$sql="INSERT INTO ledp_signup VALUES ('','$name','$email','$password')";

if (mysqli_query($conn,$sql)) {
	header('location: signup.php');

	$_SESSION['signup']="true";
}
}
 ?>