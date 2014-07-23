<?php
	include_once('login_user.php');
	// Take login success to /login/take-note/index.php
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Reset password</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
		<link rel="icon" href="favicon.ico" type="image/x-icon">
	</head>
	<body>
		<header>
			<div class="register-hold">
				<a href="index.php">Login</a>
			</div>
			<h1>Reset password</h1>
		</header>
		<div id="main" class="login">
			<?php 
	        	if (isset($error)){ echo "<div class='error_msg'>" . $error . "</div>";}
	        ?>
			<div id="form-holder">	
				<form action="reset_password.php" method="post">
				    <label>
				        <input id="email" type="email" name="email" placeholder="Email" />
				    </label>
				    <label>
				        <input id="new_password" type="password" name="new_password" placeholder="New Password" />
				    </label>
				    <label>
				        <input id="confirm_new_password" type="password" name="confirm_new_password" placeholder="Confirm New Password" />
				    </label>
				     <label>
				        <input type="submit" class="button" value="Reset password" name="update_password"/>
				    </label>    
				</form>
			</div>
		</div>
		<footer>
		</footer>
	</body>
</html>