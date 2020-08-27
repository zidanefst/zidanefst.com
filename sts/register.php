<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/tablogo.png"/>
    <title>StS - Register</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/tablet.css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
</head>
<body>
<div id=wrapper>
    <?php include("navbar.php"); ?>
    <div id="loginform">
        <p class="title">Welcome to StS!</p>
        <p style="text-align: center; color: rgb(114, 118, 125);">Register to get the best haircut</p>
        <form method="POST" action="signup.php">
            <p>NAME</p>
            <input type="text" name="name" required>
            <p>USERNAME</p>
            <input type="text" name="username" required>
                <div style="height: 15px;"></div>
                <div style="color: yellow; font-size: 15px;">
                    <center>
                    <?php
                        if(isset($_SESSION['usernamesign_msg'])){
                            echo $_SESSION['usernamesign_msg'];
                            unset($_SESSION['usernamesign_msg']);
                        }
                    ?>
                    </center>
                </div>
            <p>EMAIL</p>
            <input type="email" name="email" required>
            <div style="height: 15px;"></div>
                <div style="color: yellow; font-size: 15px;">
                    <center>
                    <?php
                        if(isset($_SESSION['emailsign_msg'])){
                            echo $_SESSION['emailsign_msg'];
                            unset($_SESSION['emailsign_msg']);
                        }
                    ?>
                    </center>
                </div>
            <p>PASSWORD</p>
            <input type="password" name="password" required>
            <button type="submit" value="submit" style="margin-top: 30px;">Register</button>
            <p>Already have an account? <a href="login.php"><span style="color: rgb(220, 0, 0)">Login</span></a></p>
        </form>
        
    </div>
    <?php include("footer.php"); ?>
</div>
</body>
</html>