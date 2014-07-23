<?php
	session_start();
    $author = $_SESSION['user'];
    $confirm = 'return confirm("Do you really want to delete this note?");';


	$counting = $mysqli->query("SELECT COUNT(*) FROM notes WHERE Author = '$author'");
		while ($count = mysqli_fetch_assoc($counting)) {
			if ($count['COUNT(*)'] == 1) {
				$notes = 'note';
			} 
			else {$notes = 'notes';}
			echo "<div class='note-count'>";
	        echo        "<h2>You have <b>". $count['COUNT(*)'] ."</b> " . $notes ."</h2>";
	        echo  "</div>"; 
		}
	
	$result = $mysqli->query("SELECT * from notes WHERE Author = '$author' ORDER BY ID DESC");
		while ($row = mysqli_fetch_assoc($result)) {
		    echo "<div class='note' id=".$row['ID'].">";
		    echo 	"<div class='inner'>";
		    echo 		"<div class='note-wrap'>";
		    echo 			"<div class='title'>". $row['Title'] ."</div>";
		    echo 			"<div class='date'>". $row['Date'] ."</div>";
		    echo 		"</div>";
		    echo 		"<div class='arrow-right grey'></div>";
		    echo 		"<div class='arrow-right white'></div>";
		    echo 	"</div>";
		    echo 	"<div class='outer'>";
		    echo 		"<div class='note-content'>". $row['Note'] ."</div>"; 
		    echo 		"<div class='control-buttons'>";
		    echo 			"<form onsubmit='$confirm' name='controls' method='POST'>";
		    echo 				"<input type='hidden' name='ID' value='".$row['ID']."'>";
		    echo 				"<input class='delete-note' type='submit' value='DELETE' name'delete'>";
		    echo 			"</form>";
		    echo 		"</div>";
		    echo 	"</div>";
		    echo "</div>";
		}
?>