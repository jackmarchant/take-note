<?php
	include_once('login_user.php');
	// Take login success to /login/take-note/index.php
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login to Take Note</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
		<link rel="icon" href="favicon.ico" type="image/x-icon">
	</head>
	<body>
		<header>
			<div class="register-hold">
				<a href="register.php">Sign Up</a>
			</div>
			<h1>Login to Take Note</h1>
		</header>
		<div id="main" class="login">
			<?php 
	        	if (isset($error)){ echo "<div class='error_msg'>" . $error . "</div>";}
	        ?>
			<div id="form-holder">	
				<form action="index.php" method="post">
				    <label>
				        <input id="username" type="text" name="username" placeholder="Username" />
				    </label> 
				    <label>
				        <input id="password" type="password" name="password" placeholder="Password" />
				    </label> 
				     <label>
				        <input type="submit" class="button" value="Log In" name="login"/>
				    </label>    
				</form>
				<div class="lost-password">
					<a href="forgot_password.php">I've lost my password</a>
				</div>
			</div>
		</div>
		<footer>
		</footer>
	</body>
</html>