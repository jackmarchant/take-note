<?php
	include_once('/password_compat-master/lib/password.php');
	include_once('class.database.php');

	class ManageUsers {
		public $link;

		function __construct(){
			$db_connection = new dbConnection();
			$this->link = $db_connection->connect();
			return $this->link;
		}

		function verifyPassword($username,$password) {
			$verification;
			$query = $this->link->query("SELECT password FROM users2 WHERE username = '$username'");
			while ($result = $query->fetch(PDO::FETCH_OBJ)) {
	            $hashed_password = $result->password;
	        }
			if (password_verify($password,$hashed_password)) {
			    $verification = 'true';
			} else {  
			   	$verification = 'false';
			}
			return $verification;
		}

		// function hashPassword($input_password) {
		// 	$passwordHash = password_hash($input_password, PASSWORD_DEFAULT);
		// 	return $passwordHash;
		// }

		function registerUser($first_name,$last_name,$username,$password,$confirm_password,$email,$time,$date,$user_status) {			
			$password = password_hash($password, PASSWORD_DEFAULT);
			$confirm_password = password_hash($confirm_password, PASSWORD_DEFAULT);
			$query = $this->link->prepare("INSERT INTO users2 (first_name,last_name,username,password,confirm_password,email,time,date,user_status) VALUES (?,?,?,?,?,?,?,?,?)");
			$values = array($first_name,$last_name,$username,$password,$confirm_password,$email,$time,$date,$user_status);
			
			$query->execute($values);
			$counts = $query->rowCount();
			return $counts;
		}

		// function loginUser($username,$password) {
		// 	$query = $this->link->query("SELECT * FROM users2 WHERE username = '$username' AND password = '$password'");
		// 	$rowCount = $query->rowCount();
		// 	return $rowCount;
		// }

		function getUserInfo($username) {
			$query = $this->link->query("SELECT * FROM users2 WHERE username = '$username'");
			$rowCount = $query->rowCount();
			if ($rowCount == 1)
			{
				$result = $query->fetchAll();
				return $result;
			}
			else {
				return $rowCount;
			}
		}

		function getEmail($email) {
			$query = $this->link->query("SELECT email FROM users2 WHERE email = '$email'");
			$rowCount = $query->rowCount();
			if ($rowCount == 1)
			{
				$result = $query->fetchAll();
				$return_email = $result[0]['email'];
				return $return_email;
			}
			else {
				return $rowCount;
			}
		}


		function updatePassword($new_password, $confirm_new_password, $email) {
			$new_password = password_hash($new_password, PASSWORD_DEFAULT);
			$confirm_new_password = password_hash($confirm_new_password, PASSWORD_DEFAULT);
			$user = new ManageUsers();
			$check_email = $user->getEmail($email);
			if ($check_email) {
				$query = $this->link->query("UPDATE users2 SET password = '$new_password', confirm_password = '$confirm_new_password'  WHERE email = '$email'");
				$rowCount = $query->rowCount();
				return $rowCount;
			}
			
		}

	}
	
		// $user = new ManageUsers();
		// echo $user->updatePassword('hellobro', 'hellobro', 'test@email.com');

?>