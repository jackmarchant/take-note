<?php 
    include_once('database/db-connection.php');
    include_once('database/delete-note.php');
?>
<?php include_once('common/header.php');?>
    <body>
        <header>
        	<div class="container">
        		<a href="index.php">
                    <h1>Take Note</h1>
                    <div class="icon"></div>
                </a>
        	</div>
        	<div class="new">
        		<a href="new.php"><img src="images/appbar.clipboard.png"/></a>
        	</div>
        </header>  
        <div id="main" class="note-list">
            <div class="wrapper">
            	<?php
                    include_once('database/select-notes.php');
                ?>
            </div>
            <!-- end notes list -->
        </div>
<?php include_once('common/footer.php');?>