<?php
    include_once('/database/db-connection.php');
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
        <div id="main">
            <div class="wrapper">
                <h2>Have you got questions? .. I've got answers.</h2>
                <div class="section">
                    <h3>Why should I use it?</h3>
                    <p>Take Note is revolutionary, not since the notepad and pen 
                        has taking notes been this easy.</p>
                </div>
                <div class="section">
                    <h3>What's it all about?</h3>
                    <p>It's a cool Web App that's aimed at people
                     who need to take notes on the go and want 
                     these notes available to them on all their devices.</p>
                </div>
                <div class="section">
                    <h3>Where can I find my notes?</h3>
                    <p>Tap the top left corner of your browser on the logo. 
                        This will take you back to the notes list page.
                        You'll be able to see all the notes you've made there.</p>
                </div>
                <div class="section">
                    <h3>I want to make a new note.</h3>
                    <p>Tap the icon in the top right start taking notes!</p>
                </div>
            </div>
            <!-- end notes list -->
        </div>
<?php include_once('common/footer.php');?>