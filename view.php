<?php
$conn = mysqli_connect('localhost', 'root', '', 'ledp_evening');

session_start();

if (!isset($_SESSION['login'])) {
	header('location: login.php');
	$_SESSION['plzlogin'] = "true";
}

$Id = $_GET['Id'];

$sql = "SELECT* FROM ledp_registration WHERE Id=$Id";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Data View</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center text-uppercase text-info">View Single Data</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
						<th>Id</th>
						<td> <?= $row['Id'] ?> </td>
					</tr>
					<tr>
						<th>Name</th>
						<td><?= $row['Name'] ?> </td>
					</tr>
					<tr>
						<th>Teacher Name</th>
						<td><?= $row['teacher'] ?> </td>
					</tr>
					<tr>
						<th>Course</th>
						<td><?= $row['Course'] ?> </td>
					</tr>
					<tr>
						<th>Email</th>
						<td><?= $row['email'] ?> </td>
					</tr>
					<tr>
						<th>section</th>
						<td><?= $row['section'] ?> </td>
					</tr>
				</table>
				<a class="btn btn-danger" href="display.php">Back</a>
			</div>
		</div>

	</div>



	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>