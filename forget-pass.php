<?php 

$cont=mysqli_connect('localhost','root','','ledp_evening');

session_start();

$email=$_POST['email'];
$password=$_POST['password'];

$password=md5($password);

$sql="UPDATE ledp_signup SET password='$password' WHERE email='$email'";

if (mysqli_query($cont,$sql)) {
	header('location: login.php');

	$_SESSION['forget']="true";
}
