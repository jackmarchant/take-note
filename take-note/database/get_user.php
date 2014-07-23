<?php
	session_start();
    $author = $_SESSION['user'];
    $getInfo = $mysqli->query("SELECT * FROM users2 WHERE username = '$author'");
		while ($row = mysqli_fetch_assoc($getInfo)) {
			echo 	"<div class='userInfo first-name'>". $row['first_name'] ."<span class='label'>First Name</span></div>";
			echo 	"<div class='userInfo last-name'>". $row['last_name'] ."<span class='label'>Last Name</span></div>";
			echo 	"<div class='userInfo username'>". $row['username'] ."<span class='label'>Username</span></div>";
			echo 	"<div class='userInfo email'>". $row['email'] ."<span class='label'>Email</span></div>";
			echo 	"<div class='userInfo date'>". $row['date'] ."<span class='label'>Date Registered</span></div>";
			echo 	"<div class='userInfo time'>". $row['time'] ."<span class='label'>Time Registered</span></div>";
		}
?>