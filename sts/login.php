<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/tablogo.png"/>
    <title>StS - Login</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/tablet.css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
</head>
<body>
<div id=wrapper>
    <?php include("navbar.php"); ?>
    <div id="loginform">
        <p class="title">Welcome back!</p>
        <p style="text-align: center; color: rgb(114, 118, 125);">Login to your StS account</p>
        <form method="POST" action="signin.php">
            <p>EMAIL</p>
            <input type="email" name="email" required>
            <p>PASSWORD</p>
            <input type="password" name="password" required>
            <p><a href="forgotpassword.php"><span style="color: rgb(220, 0, 0)">Forgot your password?</span></a></p>
            <button type="submit" value="submit">Login</button>
            <p>Need an account? <a href="register.php"><span style="color: rgb(220, 0, 0)">Register</span></a></p>
        </form>
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
        <hr>
        <br>
        <p style="text-align: center;">Are you a Stylist? Login <a href="login_stylists.php" style="text-decoration: underline;">here</a></p>
    </div>
    <?php include("footer.php"); ?>
</div>
</body>
</html>