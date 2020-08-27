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
    <div id="landingheader">  
            <div id="form">
                <p class="title" style="margin-top: 15px;">Find Your Best Haircut</p>
                <p style="text-align:center; color: grey; margin-top: -20px;">recommended by Top Stylists</p>
                <form>
                    <input style="margin-top: 40px;" type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <button type="submit" value="submit">Stay a Cut <br>Above the Rest</button>
                </form>
            </div>
    </div>
    <div id="sotce">
        <div id="sotceimg"></div>
        <div id="tired">
            <p class="title" style="font-size: 36px;">Tired of choosing the same Haircut over and over again?</p>
            <p>Snip to Snip is here for you looking to get the <span style="text-decoration:underline; font-size: 1.1em; color: rgb(201, 0, 0);">best</span> haircut.
                We help you choose what hairstyle fits best for you 
                based on the feedback of renowned hair 
                stylists chosen by you.</p>
        </div>
    </div>
    <div id="process">
        <div class="container">
        <p class="title" style="margin: 0; padding: 30px 0px;">It's this simple</p>
            <div class="first">
                <div class="icons">
                    <img src="images/process1.png">
                    <img src="images/process2.png">
                </div>
                <div class="text">
                    <p>Choose any hair stylist and be recommended 
                        about the haircut that suits you best based on the 
                        information you provide.</p>
                </div>
            </div>
            <div class="second">
                <div class="text">
                    <p>Tell your local barber to cut your hair like your 
                        personal hair stylist said and now <br> go rock your new Haircut!</p>
                </div>
                <div class="icons">
                    <img src="images/process4.png">
                    <img src="images/process3.png">
                </div>
            </div>
        </div>
    </div>
    <div class="cta">
        <p class="title" style="color: white;">Be a Cut above the rest</p>
        <p class="getstarted"><a href="register.php">Get Started</a></p>
    </div>
<!--     <div id="testimonials" class="container">
        <p class="title">Testimonials</p>
            <br>
            <ul id="slides">
                <li class="slide showing">
                    <img src="images/testimonial1.png">
                    <p>Feeling fresher than ever.<br>10/10 would recommend</p>
                </li>
                <li class="slide">
                    <img src="images/testimonial2.png">
                    <p>Hey, it works for kids too!<br>My boy loved it.</p>
                </li>
            </ul>
            <br><br><br>
            <div id="quotes" style="margin-top: -5%;">
                <div>
                    <p class="title"><q>Being stylish was never this easy</q></p>
                    <img src="images/alphamlogo.png" style="width: 200px;">
                </div>
                <div>
                    <p class="title"><q>Best WebApp ever</q></p>
                    <img src="images/mensjournallogo.png" style="width: 200px;">
                </div><br><br><br>
            </div>
    </div> -->
    
    <hr class="progress container">
    <div id="subscribe" class="container">
        <p class="title">Want to know everything about hair?</p>
        <form>
            <input type="email" placeholder="Enter your email">
            <button type="submit" value="submit">Subscribe</button>
        </form>
    </div>
    <?php include("footer.php"); ?>
</div>
<script>
    var slides = document.querySelectorAll('#slides .slide');
    var currentSlide = 0;
    var slideInterval = setInterval(nextSlide,3000);

    function nextSlide() {
        slides[currentSlide].className = 'slide';
        currentSlide = (currentSlide+1)%slides.length;
        slides[currentSlide].className = 'slide showing';
    }
</script>
</body>
</html>