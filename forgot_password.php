<?php
	include_once('login_user.php');
	// Take login success to /login/take-note/index.php
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lost password</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
		<link rel="icon" href="favicon.ico" type="image/x-icon">
	</head>
	<body>
		<header>
			<div class="register-hold">
				<a href="index.php">Login</a>
			</div>
			<h1>Lost password</h1>
		</header>
		<div id="main" class="login">
			<?php 
	        	if (isset($error)){ echo "<div class='error_msg'>" . $error . "</div>";}
	        ?>
			<div id="form-holder">	
				<form action="forgot_password.php" method="post">
				    <label>
				        <input id="email" type="email" name="email" placeholder="Email" />
				    </label>
				     <label>
				        <input type="submit" class="button" value="Send email" name="password_reset"/>
				    </label>    
				</form>
			</div>
		</div>
		<footer>
		</footer>
	</body>
</html>