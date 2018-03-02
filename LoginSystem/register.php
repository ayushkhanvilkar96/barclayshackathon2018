<?php
	
	include('server.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Registration Form</title>
</head>
<body>
<div class="container">
	<div class="col-sm-6">
		<h1>Registration Form</h1>
		<form action="register.php" method="post">
		<!--Display Validation here-->
		<?php include('errors.php') ?>
		<br><br>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo $username;?>">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo $email;?>">
			</div>
			<div class="form-group">
				<label for="password_1">Password</label>
				<input type="password" name="password_1" class="form-control">
			</div>
			<div class="form-group">
				<label for="password_2">Confirm Password</label>
				<input type="password" name="password_2" class="form-control">
			</div>
			<input class="btn btnprimary" type="submit" name="register" value="Register">
			<br><br>
			<p>Already a member?  <a href="login.php">Sign in</a></p>
		</form>
	</div>
</div>

</body>
</html>

