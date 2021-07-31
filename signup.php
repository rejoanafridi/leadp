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
				<h4 class="text-center text-uppercase badge-dark">Signup Form</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">


				<?php if (isset($_SESSION['exitemail'])) { ?>

					<div class="alert alert-danger">
						Already Used! Please try another one
					</div>

				<?php } ?>
				<?php if (isset($_SESSION['signup'])) { ?>

					<div class="alert alert-success">
						Signup Successfully!! Please Login
					</div>

				<?php } ?>

				<form action="confirmsignup.php" method="post">
					<div class="form-group">

						<input class="form-control" name="Name" type="text" placeholder="Enter Your Name">
					</div>

					<div class="form-group">

						<input class="form-control" name="email" type="email" required="" placeholder="Enter Your Email Address">
					</div>
					<div class="form-group">

						<input class="form-control" name="password" id="password" type="password" placeholder="Password">
					</div>

					<div class="form-group">

						<input class="form-control" name="cpassword" id="cpassword" type="password" placeholder="Confirm Password">
						<h5 id="message"></h5>
					</div>

					<input class="btn btn-info btn-md btn-block text-uppercase" type="submit" value="Sign up">
					<button onclick="location.href='index.php'" type="button" class="btn btn-primary btn-md btn-block">Back</button>
				</form>
			</div>
		</div>
	</div>





	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script>
		$(document).ready(function() {
			$('#password,#cpassword').on('keyup', function() {
				if ($('#password').val() == $('#cpassword').val()) {
					$('#message').html('Password Matched').css('color', 'green');
				} else {
					$('#message').html('Password did not Matched').css('color', 'red');
				}
			});
		})
	</script>

	<?php

	unset($_SESSION['exitemail']);
	?>

</body>

</html>