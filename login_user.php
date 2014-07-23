<?php

	if (isset($_POST['register']))
	{
		session_start();
		include_once('classes/class.ManageUsers.php');
		$user = new ManageUsers();

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$email = $_POST['email'];
		$date = date("d-m-Y");
		$time = date("H:m:s");
		$user_status = 'registered';
		
		function UserRegistrationEmail($first_name,$last_name,$email,$username,$date,$time) 
		{
			$to      = 'jack@jackmarchant.com';
			$subject = 'New Sign Up';
			$message = '<html><head>';
			$message .= '<style>h1 {width: 280px;padding: 10px;background-color:#588c7e;color: #ffffff;} a {color:#588c7e;text-decoration:none;}</style>';
			$message .= '</head>';
			$message .= '<body><table rules="all" style="background-color: #ffffff;color:#588c7e" cellpadding="10">';
			$message .= 	'<th><h1>Someone has just signed up for a Take Note account!</h1>' . "</th>";
			$message .= 		'<tr><td><h3>Here are their details: ' . "</h3></td></tr>";
			$message .= 		'<tr><td><h4>Full name: </h4>' . $first_name . ' ' . $last_name . '</td></tr>';
			$message .= 		'<tr><td><h4>Email address: </h4>'.$email.'</td></tr>';
			$message .= 		'<tr><td><h4>Username: </h4>'. $username .'</td></tr>';
			$message .= 		'<tr><td><h4>Date and Time:</h4>' . $date . ' at ' . $time . '</td></tr>';
			$message .= '</table>';
			$message .= '</body></html>';
			$headers = "From: jack@jackmarchant.com" . "\r\n" .
					    "Reply-To: jack@jackmarchant.com" . "\r\n" .
					    "MIME-Version: 1.0\r\n" .
						"Content-Type: text/html; charset=ISO-8859-1\r\n";
			$mail_success = mail($to,$subject,$message,$headers);
			return $mail_success;
		}

		function UserRegistrationEmail($first_name,$last_name,$email,$username,$date,$time) 
		{
			$to      = 'jack@jackmarchant.com';
			$subject = 'New Sign Up';
			$message = '<html><head>';
			$message .= '<style>h1 {width: 280px;padding: 10px;background-color:#588c7e;color: #ffffff;} a {color:#588c7e;text-decoration:none;}</style>';
			$message .= '</head>';
			$message .= '<body><table rules="all" style="background-color: #ffffff;color:#588c7e" cellpadding="10">';
			$message .= 	'<th><h1>Someone has just signed up for a Take Note account!</h1>' . "</th>";
			$message .= 		'<tr><td><h3>Here are their details: ' . "</h3></td></tr>";
			$message .= 		'<tr><td><h4>Full name: </h4>' . $first_name . ' ' . $last_name . '</td></tr>';
			$message .= 		'<tr><td><h4>Email address: </h4>'.$email.'</td></tr>';
			$message .= 		'<tr><td><h4>Username: </h4>'. $username .'</td></tr>';
			$message .= 		'<tr><td><h4>Date and Time:</h4>' . $date . ' at ' . $time . '</td></tr>';
			$message .= '</table>';
			$message .= '</body></html>';
			$headers = "From: jack@jackmarchant.com" . "\r\n" .
					    "Reply-To: jack@jackmarchant.com" . "\r\n" .
					    "MIME-Version: 1.0\r\n" .
						"Content-Type: text/html; charset=ISO-8859-1\r\n";
			$mail_success = mail($to,$subject,$message,$headers);
			return $mail_success;
		}


		function ThanksForRegistering($first_name,$username,$email)
		{
			$to      = $email;
			$subject = 'Thanks for registering with Take Note';
			$message = '<html><head>';
			$message .= '<style>h1 {min-width: 280px;padding: 10px;background-color:#588c7e;color: #ffffff;} a {color:#588c7e;text-decoration:none;}</style>';
			$message .= '</head>';
			$message .= '<body><table rules="all" style="background-color: #ffffff;color:#588c7e" cellpadding="10">';
			$message .= 	'<th><h1>Thanks for creating an account!</h1>' . "</th>";
			$message .= 		'<tr><td><h2>Hi ' . $first_name . ",</h2></td></tr>";
			$message .=			'<tr><td><p>You&rsquo;ve recently created an account to use Take Note.</p>';
			$message .=					'<p>You can use this email address in case you forget your password</p>';
			$message .= 				'<p>Log in to <a target="_blank" href="http://www.jackmarchant.com">Take Note</a> with your username and start putting those thoughts down on paper!</p>';
			$message .= 				'<p><b>Your new username: </b>' . $username . '</p>';
			$message .= 		'</td></tr>';
			$message .= '</table>';
			$message .= '</body></html>';
			$headers = "From: jack@jackmarchant.com" . "\r\n" .
					    "Reply-To: jack@jackmarchant.com" . "\r\n" .
					    "MIME-Version: 1.0\r\n" .
						"Content-Type: text/html; charset=ISO-8859-1\r\n";
			$mail_success = mail($to,$subject,$message,$headers);
			return $mail_success;
		}
		

		function ThanksForRegistering($first_name,$username,$email)
		{
			$to      = $email;
			$subject = 'Thanks for registering with Take Note';
			$message = '<html><head>';
			$message .= '<style>h1 {min-width: 280px;padding: 10px;background-color:#588c7e;color: #ffffff;} a {color:#588c7e;text-decoration:none;}</style>';
			$message .= '</head>';
			$message .= '<body><table rules="all" style="background-color: #ffffff;color:#588c7e" cellpadding="10">';
			$message .= 	'<th><h1>Thanks for creating an account!</h1>' . "</th>";
			$message .= 		'<tr><td><h2>Hi ' . $first_name . ",</h2></td></tr>";
			$message .=			'<tr><td><p>You&rsquo;ve recently created an account to use Take Note.</p>';
			$message .=					'<p>You can use this email address in case you forget your password</p>';
			$message .= 				'<p>Log in to <a target="_blank" href="http://www.jackmarchant.com">Take Note</a> with your username and start putting those thoughts down on paper!</p>';
			$message .= 				'<p><b>Your new username: </b>' . $username . '</p>';
			$message .= 		'</td></tr>';
			$message .= '</table>';
			$message .= '</body></html>';
			$headers = "From: jack@jackmarchant.com" . "\r\n" .
					    "Reply-To: jack@jackmarchant.com" . "\r\n" .
					    "MIME-Version: 1.0\r\n" .
						"Content-Type: text/html; charset=ISO-8859-1\r\n";
			$mail_success = mail($to,$subject,$message,$headers);
			return $mail_success;
		}

		if (empty($first_name) || empty($last_name) || empty($email) || empty($username) || empty($password) || empty($confirm_password))
		{
			$error = 'Please complete all fields.';
		}
		elseif ($password !== $confirm_password)
		{
			$error = 'Passwords do not match';
		}
		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{	
			$error = 'Email is not valid';
		}
		else 
		{


			$check_availability = $user->getUserInfo($username);
			if ($check_availability == 0)
			{
				$register_user = $user->registerUser($first_name,$last_name,$username,$password,$confirm_password,$email,$time,$date,$user_status);
				if ($register_user == 1){
					// Send notification mail
					UserRegistrationEmail($first_name,$last_name,$email,$username,$date,$time);
					ThanksForRegistering($first_name,$username,$email);
					$make_session = $user->getUserInfo($username);
					foreach ($make_session as $userSession) 
					{
						$_SESSION['name'] = $userSession['username'];
						if (isset($_SESSION['name']))
						{
							header('location: index.php');
						}
					}
				}
			}
			else
			{
				$error = 'Username already exists';
			}
		}
	}

	if (isset($_POST['login']))
	{
		session_start();
		include_once('classes/class.ManageUsers.php');
		$user = new ManageUsers();

		$username = $_POST['username'];
		$password = $_POST['password'];

		

		if (empty($username) || empty($password))
		{
			$error = 'Please complete all fields.';
		}
		else 
		{
			$check_username = $user->getUserInfo($username);
			if ($check_username == 0) 
			{
				$error = 'Username does not exist';
			}
			else
			{
				$login_user = $user->verifyPassword($username,$password);
				if ($login_user == 'true'){
					$make_session = $user->getUserInfo($username);
					foreach ($make_session as $userSession) 
					{
						$_SESSION['user'] = $userSession['username'];
						if (isset($_SESSION['user']))
						{
							$author = $_SESSION['user'];
							setcookie('UserSession',$author,time()+1200);
							header('location: take-note/index.php');
						}
					}
				}
				elseif ($login_user == 'false') {
					$error = 'Invalid password';
				}
			}
			
		}
	}

	if (isset($_POST['password_reset'])) 
	{
		include_once('classes/class.ManageUsers.php');
		function ForgotPassword($email)
		{
			$to      = $email;
			$subject = 'Reset password for Take Note';
			$message = '<html><head>';
			$message .= '<style>h1 {min-width: 280px;padding: 10px;background-color:#588c7e;color: #ffffff;} a {color:#588c7e;text-decoration:none;}</style>';
			$message .= '</head>';
			$message .= '<body><table rules="all" style="background-color: #ffffff;color:#588c7e" cellpadding="10">';
			$message .= 	'<th><h1>Need a new password?</h1>' . "</th>";
			$message .= 		'<tr><td><h2>Hi there! ' . "</h2></td></tr>";
			$message .=			'<tr><td><p>You&rsquo;ve asked for a new password</p>';
			$message .=					'<p>Here&rsquo;s the link you&rsquo;ll need:</p>';
			$message .= 				'<p><a target="_blank" href="http://www.takenote.jackmarchant.com/reset_password.php">Reset password</a></p>';
			$message .= 		'</td></tr>';
			$message .= '</table>';
			$message .= '</body></html>';
			$headers = "From: jack@jackmarchant.com" . "\r\n" .
					    "Reply-To: jack@jackmarchant.com" . "\r\n" .
					    "MIME-Version: 1.0\r\n" .
						"Content-Type: text/html; charset=ISO-8859-1\r\n";
			$mail_success = mail($to,$subject,$message,$headers);
			return $mail_success;
		}
		
		// // create new object
		$user_email = new ManageUsers();
		// // capture data
	 	$email = $_POST['email'];
		// check data using object
		$check_email = $user_email->getEmail($email);
		if ($check_email) {
			ForgotPassword($email);
		 	$error = 'You&rsquo;ve been sent an email with a reset password link.';
		} else {
			$error = 'Email does not exist';
		}
		
	}


	if (isset($_POST['update_password']))
	{

		include_once('classes/class.ManageUsers.php');
		$user = new ManageUsers();
		$email = $_POST['email'];
		$new_password = $_POST['new_password'];
		$confirm_new_password = $_POST['confirm_new_password'];

		if (empty($email) || empty($new_password) || empty($confirm_new_password))
		{
			$error = 'Please complete all fields.';
		} 
		else if ($new_password != $confirm_new_password) {
			$error = 'Sorry, those passwords don&rsquo;t match.';
		}
		else {
			$password_changed = $user->updatePassword($new_password,$confirm_new_password,$email);
			if ($password_changed) {
				$error = 'Your password has been changed. ' . "<a href='index.php'>Login</a>";
			} else {
				$error = 'Sorry, that email doesn&rsquo;t exist';
			}
		}
		
	}


?>