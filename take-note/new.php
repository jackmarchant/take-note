<?php 
    include_once('database/insert-note.php');
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
        		<!-- <h4><a href="index.php">Note List</a></h4> -->
        	</div>
        </header>
        <div id="main" class="new-note">
            <h2>Create a new note</h2>
            <?php if (isset($error_msg)) {echo $error_msg;}?>
            <form action="new.php" method="POST">
                <input type="text" id="title" name="title" placeholder="Title">
                <textarea id="note" name="note" placeholder="Note"></textarea>
                <input type="submit" value="Save" name="save">
            </form>
        </div>
<?php include_once('common/footer.php');?>