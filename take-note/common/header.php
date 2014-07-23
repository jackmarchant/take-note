<?php 
	include_once('../login_user.php');
    // user not logged in
    if (!isset($_COOKIE['UserSession']))
    {
        header('location: /login/index.php');
    }
?>
	<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Take Note</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
 		<link type="text/css" rel="stylesheet" href="style.css">
 		<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
	 	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	 	<script src="ckeditor/ckeditor.js"></script>
 		<script type="text/javascript" src="functions.js"></script>
    </head>