<?php 

	require 'backend/functions.php';

	if( isset($_POST["submit"]) ) {

		$email = $_POST["email"]; 
		$password = $_POST["password"];

		$result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' ");

		if( mysqli_num_rows($result) === 1 ) {
			$row = mysqli_fetch_assoc($result); 
			if( password_verify($password, $row["password"]) ) {
				header("Location: index.php"); 
				exit;
			}
		}

		$error = true;
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Login</title>

	<style type="text/css">
		body {
			background: #DCDCDC;
		}
		.row {
			width: 100%;
			height: 100vh;
		}
		.btn {
			border: 2px solid #EC994B;
			border-radius: 4px;
		}
		form {
			background: #fff;
			padding: 10px;
			border-radius: 4px;
		}
	</style>
</head>
<body>
	<form action="" method="post">
		<div class="container">
		<?php if( isset($error) ) : ?>
			<script>
				alert('email / password yang anda masukkan salah')
			</script>
    	<?php endif ?>
			<div class="row d-flex align-items-center justify-content-center">
				<div class="col-md-4">
					<form>
						<h1 class="text-center">Login</h1>
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label" name="email">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
							<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label" name="password">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" name="password">
						</div>
						<button type="submit" class="btn" name="submit">Login</button>
					</form>
				</div>
			</div>
		</div>
	</form>

	<script src="assets/js/script.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>