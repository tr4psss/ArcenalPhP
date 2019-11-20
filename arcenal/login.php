<?php include('server.php') ?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Lowkey Esports</title>
			<link rel="stylesheet" type="text/css" href="CSS/login.css">
			<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montserrat|Quicksand&display=swap" rel="stylesheet">
		</head>
		<body>
			<div class="pic">
				<img class="logo" src="Pictures/lk.png" alt="">
			</div>

			<div class="reg">
				<div class="header">
					<h2>Login</h2>
				</div>
			
			<form method="post" action="login.php">
				<?php include('errors.php'); ?>
					<div class="input-group">
						<label>Username</label>
							<input type="text" name="username" >
					</div>
					<div class="input-group">
						<label>Password</label>
						<input type="password" name="password">
					</div>
					<div class="input-group">
						<button type="submit" class="btn" name="login_user">Login</button>
					</div>
					<p>
						Not yet a member? <a href="register.php">Sign up</a>
					</p>
			</form>
			</div>
			
		</body>
</html>