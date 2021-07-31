<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Masud Rana - Forget Password</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center text-uppercase text-primary my-3">Forget Password</h1>
			</div>
		</div>

		<div class="row my-3">
			<div class="col-md-12">
				<form action="forget-pass.php" method="post">
					<div class="form-group">
						<input class="form-control" type="email" name="email" placeholder="Enter Email Address">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="password" placeholder="Enter New Password">
					</div>
					<input class="btn btn-success" type="submit" value="Forget">
				</form>
				<a class="btn btn-warning mt-3" href="login.php">Back</a>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>