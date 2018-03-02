<?php include('server.php'); 
//if user is not logged in they cannot see this page
	if (empty($_SESSION['username'])) {
		header('location:login.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Home page</title>
</head>
<body>
<div class="container">
	




	<div class="col-sm-6">
		<h1>Home Page</h1>
		<div class="content">
			


			<?php if(isset($_SESSION['success'])):?>
				<div class="error success">
					<h3>
						<?php
							echo $_SESSION['success'];
							unset($_SESSION['success']);
						 ?>
					</h3>
				</div>
			<?php endif ?>

		








			<?php if(isset($_SESSION["username"])):?>

				<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>

				<p><a href="index.php?logout='1'">Logout</a></p>
			<?php endif ?>
		


			<?php if(isset($_SESSION["username"])):?>

				<?php $usd=$_SESSION['username']; 
				$rec=mysqli_query($db,"SELECT * FROM users WHERE username='$usd' ");
				$record=mysqli_fetch_array($rec);
				$name=$record['name'];
				$kgs=$record['kgs'];
				$price=$record['price'];
				$id=$record['id'];
				?>




				<p>Welcome <strong>BLEH.</strong></p>
			<?php endif ?>




		</div>
	</div>




</div>




</body>
</html>