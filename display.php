<?php
$conn = mysqli_connect('localhost', 'root', '', 'ledp_evening');

session_start();

if (!isset($_SESSION['login'])) {
	header('location: login.php');
	$_SESSION['plzlogin'] = "true";
}


$sql = "SELECT* FROM ledp_registration";

$result = mysqli_query($conn, $sql);
?>




<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Course Info</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center text-uppercase text-info">Student Course Information</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">

				<?php

				if (isset($_SESSION['update'])) { ?>

					<div class="alert alert-success">
						Data Update Successfully!
					</div>
				<?php } ?>


				<?php

				if (isset($_SESSION['delete'])) { ?>

					<div class="alert alert-danger">
						Data Delete Successfully!
					</div>
				<?php } ?>



				<table class="table table-bordered text-center">
					<tr>
						<th> ID </th>
						<th>Name</th>
						<th>Teacher Name</th>
						<th>Course</th>
						<th>Email</th>
						<th>Section</th>

					</tr>

					<?php while ($row = mysqli_fetch_assoc($result)) { ?>


						<tr>
							<td><?= $row['Id'] ?> </td>
							<td><?= $row['Name'] ?></td>
							<td><?= $row['teacher'] ?></td>
							<td><?= $row['Course'] ?></td>
							<td><?= $row['email'] ?></td>
							<td><?= $row['section'] ?></td>
							<td>
								<a class="btn btn-success" href="view.php?Id=<?= $row['Id'] ?>">View</a>
								<a class="btn btn-info" href="edit.php?Id=<?= $row['Id'] ?>">Edit</a>
								<a class="btn btn-danger" onclick="return confirm('Are you Sure??')" href="delete.php?Id=<?= $row['Id'] ?>">Delete</a>
							</td>
						</tr>

					<?php } ?>

				</table>
				<button onclick="location.href='Registration.php'" type="button" class=" btn btn-primary btn-md btn-block display-block  ">Add Course</button>

				<a class="btn btn-dark" href="login.php">Back</a>
				<a class="btn btn-danger" href="index.php">Logout</a>
			</div>
		</div>
	</div>





	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<?php
	unset($_SESSION['update']);
	unset($_SESSION['delete']);
	?>
</body>

</html>