<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Login Form</title>
</head>
<body>
<div class="container">
	<div class="col-sm-6">
		<h1>Login Form</h1>
		<form action="login.php" method="post">
		<!--Display Validation here-->
		<?php include('errors.php') ?>
		<br><br>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<input class="btn btnprimary" type="submit" name="login" value="Register">
			<br><br>
			<p>Not Yet a member?  <a href="register.php">Sign in</a></p>
		</form>
	</div>
</div>

</body>
</html>
