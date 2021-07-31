<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Loginpage</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="text-center text-uppercase "> Login Form</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">

				<?php if (isset($_SESSION['plzlogin'])) { ?>
					<div class="alert alert-warning">
						Please Login
					</div>
				<?php } ?>


				


				<?php if (isset($_SESSION['forget'])) { ?>

					<div class="alert alert-success">
						Password Chenged
					</div>

				<?php } ?>

				<form action="confirmlogin.php" method="post">
					<div class="form-group">
						<input class="form-control" name="email" type="text" placeholder=" Enter User Email">
					</div>
					<div class="form-group">
						<input class="form-control" name="password" type="password" id="password" placeholder="Enter Password">
					</div>

					<input class="btn btn-info btn-md btn-block" type="submit" value="Login">
				</form>
				<a href="forget.php" class="text-danger">Forget Password??</a>
			</div>
		</div>
	</div>

	</div>

	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script>
		$(document).ready(function() {

			const password = $('#password');

			$('#show').click(function() {
				if (password.prop('type') == 'password') {
					password.attr('type', 'text');
				} else {
					password.attr('type', 'password');
				}
			})
		})
	</script>





	<?php
	unset($_SESSION['plzlogin']);
	unset($_SESSION['signup']);
	unset($_SESSION['forget']);

	?>

</body>

</html>