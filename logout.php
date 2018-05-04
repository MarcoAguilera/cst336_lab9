<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CSUMB Online Quiz</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        <div class="content-wrapper">
            <!--Display Quiz Content-->
            <div id="quiz">
                <h1>CSUMB Quiz</h1>
            </div>
            <br>
            <div>
                <img src="img/mascot.png" alt="CSUMB Mascot" width="350" />
                <h3>Thank You Taking The Quiz. <br> You Have Logged Out Successfully. <br> Click The Return Button To Go To The Login Page.<br></bt></h3>
                <form method="post" action="login.php">
                    <input type="submit" value="Return"/>
                </form>
            </div>
        </div>
    </body>
</html>