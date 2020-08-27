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
    <div id="aboutheader">  
            <div style="position: relative; top: 40%;">
                <p class="title">About Us</p>
                <p class="title" style="font-size: 2em;">Snip to Snip</p>
            </div>
    </div>
    <div id="thennow" class="container">
        <div>
            <p style="font-size: 1.1em; font-weight: bold;">2020</p>
            <p>Snip to Snip was created by one guy that didn’t know 
            what haircut to choose and how to take care of his own hair.</p>
            <p>After experiencing this pain, he decided never more 
            and created Snip to Snip for you looking to get rid of this pain.</p>
        </div>
        <div>
            <p style="font-size: 1.1em; font-weight: bold;">Present</p>
            <p>Snip to Snip is helping +200 000 men around the world to look the best they can with better haircuts than ever.</p>
            <p>We also helped +50 000 stylists help you through the consultations they offer you.</p>
            <p>Snip to Snip is a win-win model where one hand washes another.</p>
        </div>
    </div>
    
    <div id="ournumbers"><div class="container">
        <p class="title" style="color: white;">Our Numbers</p>
        <div class="grid">
            <div>
                <p style="font-size: 36px; font-weight: bold;">+<span class="count">200000</span> happy customers</p>
                <p>and counting</p>
            </div>
            <div>
                <p style="font-size: 36px; font-weight: bold;">+<span class="count">50000</span> active stylists</p>
                <p>who are happy to help you</p>
            </div>
        </div>
    </div>
    </div>
    <div id="whatdrivesus" class="container">
        <p class="title">What drives us</p>
        <p>Proin aliquam aliquet ex sed commodo. Mauris augue sapien, luctus sit amet ultricies et, dictum et est. 
            Pellentesque ultrices mauris a justo dapibus rutrum sit amet a nunc. Nunc nec lectus a ipsum tempus malesuada. 
            Sed porttitor vestibulum nisi id ultricies. Aenean congue sodales ante, eu venenatis ante mattis sit amet. 
            Praesent volutpat ante nec augue dapibus, quis euismod nunc tempus. Vivamus scelerisque, dolor nec hendrerit rhoncus, 
            mauris odio facilisis augue, vitae facilisis arcu nunc et erat. Morbi sit amet dolor enim. Curabitur maximus consectetur sapien in rutrum.</p>
            <p>Quisque scelerisque massa vel arcu egestas, vitae congue mi ornare. Curabitur volutpat, magna a eleifend dictum, massa tellus euismod quam, 
                eget suscipit eros enim eu neque. Praesent tempus, mi ut varius lobortis, erat sem tincidunt metus, sit amet faucibus lacus urna in felis.</p>
</div>
    <div class="cta">
        <p class="title" style="color: white;">Be a Cut above the rest</p>
        <p class="getstarted"><a href="register.php">Get Started</a></p>
    </div>
    <br><br><br>
    <?php include("footer.php"); ?>
</div>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script>
    $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>
</body>
</html>