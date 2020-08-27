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
    <div id="forstylistsheader">  
        <div class="image">
            <img src="images/forstylistsheaderbg.png">
        </div>
        <div class="cta">
            <p class="title">Expand your business and get more customers</p>
            <p class="getstarted"><a href="register_stylists.php">Get Started</a></p>
        </div>
    </div>
    <div id="whyusests">
        <p class="title">Why should hair stylists use Snip to Snip</p>
        <div class="grid">
            <div>
                <img src="images/why1.png">
                <p style="font-weight: bold; font-size: 1.1em;">Expand your earning potential</p>
                <p>Have an additional revenue stream that gives you the freedom to be selective with brands and advertisers.</p>
            </div>
            <div>
                <img src="images/why2.png">
                <p style="font-weight: bold; font-size: 1.1em;">Help more people around the world</p>
                <p>Like what you do? Why not help as many people as possible while you’re at it?</p>
            </div>
            <div>
                <img src="images/why3.png">
                <p style="font-weight: bold; font-size: 1.1em;">Grow your community</p>
                <p>Gain your fans here to support you on your other endeavors out there!</p>
            </div>
        </div>
    </div>
    <div id="wwydh">
        <p class="title">Why should hair stylists use Snip to Snip</p>
        <div class="grid">
            <div>
                <img src="images/wwydh1.png">
                <p style="font-weight: bold; font-size: 1.1em;">Advise Your Clients</p>
                <p>Offer your opinion to clients about what they should do to with their hair whether it is about a cut or better ways to take care of their hair.</p>
            </div>
            <div>
                <img src="images/wwydh2.png">
                <p style="font-weight: bold; font-size: 1.1em;">Advertise</p>
                <p>Be free to suggest your or your company products to your clients for them to use in order to take their hair to the next level!</p>
            </div>
            <div>
                <img src="images/logo.png">
                <p style="font-weight: bold; font-size: 1.1em;">Lorem</p>
                <p>Lorem</p>
            </div>
        </div>
    </div>
    <div id="testimonialsfs" class="container">
        <p class="title">Testimonials</p>
            <ul class="slides">
                <li class="slide showing">
                    <div>
                        <img src="images/barber1.jpg">
                        <p style="text-align: center; margin-top: 15px; font-weight: bold; font-size: 24px;">John Doe</p>
                        <p style="text-align: center; margin-top: 15px; font-size: 24px;">Hair Stylist</p>
                    </div>
                    <div style="display: flex; justify-content: center; flex-direction: column;">
                        <p>"It allows me to continue helping people reach their A-game in terms of style but on a much larger scale."</p>
                    </div>
                </li>
                <li class="slide">
                    <div>
                        <img src="images/barber2.jpg">
                        <p style="text-align: center; margin-top: 15px; font-weight: bold; font-size: 24px;">John Doe</p>
                        <p style="text-align: center; margin-top: 15px; font-size: 24px;">Hair Stylist</p>
                    </div>
                    <div style="display: flex; justify-content: center; flex-direction: column;">   
                        <p>"StS has a good community and I feel accomplished knowing that I can help more people this way. I just love it."</p>
                    </div>
                </li>
            </ul>
    </div>



    <div class="cta">
        <p class="title" style="color: white;">Ready to expand your business?</p>
        <p class="getstarted"><a href="register_stylists.php">Get Started</a></p>
    </div>
    <br><br><br>
    <?php include("footer.php"); ?>
</div>
<script>
    var slides = document.querySelectorAll('.slides .slide');
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