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
	<title>Edit Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center text-uppercase text-info">Edit Data</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">

				<form action="update.php?Id=<?= $row['Id'] ?>" method="post">
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" name="Name" type="text" value="<?= $row['Name'] ?>">
					</div>
					<div class="form-group">
						<label for="">Teacher Name</label>
						<input class="form-control" name="teacher" type="text" value="<?= $row['teacher'] ?>">
					</div>
					<div class="form-group">
						<label for="">Course</label>
						<input class="form-control" name="Course" type="text" value="<?= $row['Course'] ?>">
					</div>

					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" name="email" type="email" value="<?= $row['email'] ?>">
					</div>
					<div class="form-group">
						<label for="">section</label>
						<input class="form-control" name="section" type="text" value="<?= $row['section'] ?>">
					</div>

					<input class="btn btn-outline-info" type="submit" value="Update">
				</form>
			</div>
		</div>
	</div>



	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>