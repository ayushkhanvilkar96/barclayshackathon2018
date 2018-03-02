<?php
$db=mysqli_connect('localhost','root','','registration');
	
$id=8;
	
$url_bank1='https://api.myjson.com/bins/v07h1';
$url_bank2='https://api.myjson.com/bins/vypr9';
$url_bank3='https://api.myjson.com/bins/1f0l45';



if (isset($_POST['register'])) 
	{
		$username=$_POST['username'];
	 	$email=$_POST['email'];
	 	$password_1=$_POST['password_1'];
		$password_2=$_POST['password_2'];

		$username=mysqli_real_escape_string($db,$username);
		$email=mysqli_real_escape_string($db,$email);
		$password_1=mysqli_real_escape_string($db,$password_1);
		$password_2=mysqli_real_escape_string($db,$password_2);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}


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
		<br><br>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" value="">
			</div>
			<input class="btn btnprimary" type="submit" name="register" value="Register">
			<br><br>
		</form>
	</div>
</div>

</body>
</html>




