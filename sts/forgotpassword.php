<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/tablogo.png"/>
    <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/tablet.css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
</head>
<body>
<div id=wrapper>
    <?php include("navbar.php"); ?>
    <div id="loginform">
        <p class="title">Forgot Your Password?</p>
        <p style="text-align: center; color: rgb(114, 118, 125); width: 75%; margin: 25px auto;">We will send detailed instructions on how to reset your password to the email address used to register with us.</p>
        <form method="POST" action="forgotpwd.php">
            <p>EMAIL</p>
            <input type="email" name="email" required>
            <div style="height: 15px;"></div>
                <div class="warning" style="color: yellow; font-size: 15px;">
                    <center>
                    <?php
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                    ?>
                    </center>
                </div>
            <button type="submit" value="submit">Send</button>
            <p><a href="login.php"><span style="color: rgb(180, 0, 0)">Go Back</span></a></p>
        </form>
        
    </div>
    <?php include("footer.php"); ?>
</div>
</body>
</html>