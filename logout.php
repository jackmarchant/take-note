<?php
	session_destroy();
	if (isset($_COOKIE['UserSession']))
	{
		unset($_COOKIE['UserSession']);
		setcookie('UserSession', 'dead', time()-3600);
	}
	header('location: index.php');
?>