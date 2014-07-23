<?php 
	
	$mysqli = new mysqli('localhost', 'root', '', 'login');
	if ($mysqli->connect_error) {
	    die('Connect Error (' . $mysqli->connect_errno . ') '
	            . $mysqli->connect_error);
	}
	else {
		/* return name of current default database */
		if ($result = $mysqli->query("SELECT DATABASE()")) {
		    $row = $result->fetch_row();
		    $result->close();
		}
	}
?>