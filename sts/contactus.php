<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/tablogo.png"/>
    <title>Snip to Snip</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/tablet.css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
</head>
<body>
<div id="wrapper">
    <?php include("navbar.php"); ?>
    <div style="clear: both;"></div>
    <div id="contactusform">
        <p class="title">Contact StS</p>
        <p style="text-align: center; color: rgb(114, 118, 125);">Talk to Us</p>
        <form method="POST" action="contactusvalidate.php">
            <p>NAME</p>
            <input type="text" name="name" required>
            <p>EMAIL</p>
            <input type="email" name="email" required>
            <p>SUBJECT</p>
            <select name="subject" id="subject_contactus">
                <option value="enterprisedeals">Enterprise Deals</option>
                <option value="suggestions">Suggestions</option>
                <option value="issues">Issues / Problems</option>
                <option value="others">Others</option>
            </select>
            <p>MESSAGE <span style="font-size: 0.9em;">(400 characters max)</span></p>
            <textarea name="message" maxlength="400" placeholder="Write Your Message Here..."></textarea>
            <button type="submit" value="submit">Send Message</button>
        </form>
        <div style="height: 15px;"></div>
		<div class="warning" style="color: lightgreen; font-size: 15px;">
			<center>
			<?php
				if(isset($_SESSION['contact_msg'])){
					echo $_SESSION['contact_msg'];
					unset($_SESSION['contact_msg']);
				}
			?>
			</center>
		</div>
    </div>
    <?php include("footer.php"); ?>
</div>
</body>
</html>