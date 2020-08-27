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
    <div id="header">  
            <div class="cta">
                <p class="title">Stay on the Cutting Edge</p>
                <p class="getstarted"><a href="register.php">Get Started</a></p>
            </div>
    </div>
    <div id="process">
        <div class="container">
        <p class="title" style="margin: 0; padding: 30px 0px;">Tired of getting the same haircut?</p>
        <p class="title" style="font-size: 38px; margin: 0; padding: 20px 0px 30px 0px;">It's this simple</p>
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
        <p class="getstarted"><a href="login.php">Get Started</a></p>
    </div>
    <div id="testimonials" class="container">
        <p class="title">Testimonials</p>
            <br>
            <ul class="slides">
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
    </div>
    <hr class="progress container">
    <div id="blog" class="container">
        <p class="title">Blog</p>
            <div id="blogpost">
                <div id="blogpostimage">
                    <img src="images/blogpost1.png">
                </div>
                <div>
                    <p class="title">Top 10 Yada Yada</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Assumenda deleniti quidem quis sit, tempore deserunt, 
                        optio non dolore distinctio, ullam iste quas eos 
                        molestiae sint? Est odio quod hic eveniet?</p>
                    <p>Tempore deserunt, 
                        optio non dolore distinctio, ullam iste quas eos 
                        molestiae sint? Est odio quod hic eveniet?</p>
                </div>
            </div>
            <div id="blogpost">
                <div id="blogpostimage">
                    <img src="images/blogpost2.png">
                </div>
                <div>
                    <p class="title">Top 5 Bla Ble Bli</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Assumenda deleniti quidem quis sit, tempore deserunt, 
                        optio non dolore distinctio, ullam iste quas eos 
                        molestiae sint? Est odio quod hic eveniet?</p>
                    <p>Tempore deserunt, 
                        optio non dolore distinctio, ullam iste quas eos 
                        molestiae sint? Est odio quod hic eveniet?</p>
                </div>
            </div>
            <div id="blogpost">
                <div id="blogpostimage">
                    <img src="images/blogpost3.png">
                </div>
                <div>
                    <p class="title">Top 5 Bla Ble Bli</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Assumenda deleniti quidem quis sit, tempore deserunt, 
                        optio non dolore distinctio, ullam iste quas eos 
                        molestiae sint? Est odio quod hic eveniet?</p>
                    <p>Tempore deserunt, 
                        optio non dolore distinctio, ullam iste quas eos 
                        molestiae sint? Est odio quod hic eveniet?</p>
                </div>
            </div>
    </div>
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