<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Signup</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="text-center text-uppercase badge-dark">Registration Form</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">



				<?php if (isset($_SESSION['exitemail'])) { ?>

					<div class="alert alert-danger">
						Already used this email! Please try another one
					</div>

				<?php } ?>

				<form action="confirmregistration.php" method="post">
					<div class="form-group">

						<input required class="form-control" name="Name" type="text" placeholder="Enter Your Name">
					</div>
					<div class="form-group">

						<input required class="form-control" name="teacher" type="text" placeholder="Enter Your Teacher Name">
					</div>
					<div class="form-group">

						<input required class="form-control" name="Course" type="text" placeholder="Enter Your Course Name">
					</div>

					<div class="form-group">

						<input required class="form-control" name="email" type="email" required="" placeholder="Enter Your Email Address">
					</div>
					<div class="form-group">

						<input required class="form-control" name="section" type="text" placeholder="Enter Your section">
					</div>

			</div>

			<button onclick="myFunction()" class="btn btn-info btn-md btn-block text-uppercase " type="submit">Registration </button>



			<div class="p-5">
				<button onclick="location.href='index.php'" type="button" class="btn btn-outline-danger btn-md btn-block">Logout</button>
				<button onclick="location.href='display.php'" type="button" class="btn btn-outline-danger btn-md btn-block">Back</button>
			</div>


			</form>
		</div>
	</div>
	</div>





	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script>
		function myFunction() {
			alert('Seccesfully registered')
		}
	</script>

	<?php

	unset($_SESSION['exitemail']);
	?>

</body>

</html>