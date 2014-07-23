<?php
	include_once('login_user.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
	</head>
	<body>
		<header>
			<div class="register-hold">
				<a href="index.php">Log in</a>
			</div>
			<h1>Sign up to Take Note</h1>
		</header>
		<div id="main" class="register">
			 <?php 
		        if (isset($error)){ echo "<div class='error_msg'>" . $error . "</div>";}
		     ?>
			<div id="form-holder">
				<form action="register.php" method="post">
				    <label>
				        <input id="first-name" type="text" name="first_name" placeholder="Your First Name" />
				    </label>
				    <label>
				        <input id="last-name" type="text" name="last_name" placeholder="Your Last Name" />
				    </label>
				    <label>
				        <input id="email" type="email" name="email" placeholder="A Valid Email Address" />
				    </label>
				    <label>
				        <input id="username" type="username" name="username" placeholder="Your New Username" />
				    </label> 
				    <label>
				        <input id="password" type="password" name="password" placeholder="Your New Password" />
				    </label> 
				    <label>
				        <input id="confirm-password" type="password" name="confirm_password" placeholder="Confirm New Password" />
				    </label>
				    <div>
				        <input type="submit" class="button" value="Sign Up" name="register"/> 
				    </div>    
				</form>
			</div>
		</div>
		<footer>
		</footer>
	</body>
</html>