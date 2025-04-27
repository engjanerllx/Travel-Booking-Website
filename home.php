<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<html>



<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="homepage.css" type="text/css" rel="stylesheet"/>
    <title>Palawan Travel Companion</title>

    <script>
        var slideIndex = 0;
        showSlides();

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides() {
        var i;
        var slides = document.getElementsByClassName("slides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 5 seconds
        }
    </script>
</head>

<body onload="currentSlide(0)">
    <a href="home.php"><img id="logo" src="images/ptclogo.png" alt="logo" style="width:30%"></a>
    <img id="motto" src="images/motto.png" alt="motto" style="width:40%">
    <div class="loginregister">
        <?php
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
        {
            echo "Welcome," . htmlspecialchars($_SESSION['username']) . " | <a href='logout.php' class='btn btn-danger'>Log Out</a>";
        } else {
            echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
        }
        ?>
    </div>

    <div class = "topnav">
        <a class="active" href="home.php">Home</a>
        <a href="aboutus.php">About Us</a>
        <a href="aboutpal.php">About Palawan</a>
        <div class="destinationsdrop">
            <button class="destinationsbutton">Destinations
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="destinationscontent">
                <a href="puerto.php">Puerto Princessa</a>
                <a href="araceli.php">Araceli</a>
                <a href="elnido.php">El Nido</a>
            </div>
        </div>
        <a href="trips.php">Manage Trips</a>
        <a href="contactus.php">Contact Us</a>
    </div>

    <div class="slideshow-container">
        <div class="slides fade">
            <a href="puerto.php"><img src="images/ppc.png" alt="puerto" style="width: 100%; "></a>
        </div>

        <div class="slides fade">
            <a href="araceli.php"><img src="images/araceli.png" alt="araceli" style="width: 100%"></a>
        </div>

        <div class="slides fade">
            <a href="elnido.php"><img src="images/elnido.png" alt="elnido" style="width: 100%"></a>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot active" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span>
    </div> 
    <br>
    
    <img src="images/why.png" alt="why choose us" id="why" style="width:auto">

    <img src="images/3why.png" alt="whys" id="whys" style="width: 100%">
    
    <hr>

    <div class="footer">
        <img src="images/whitelogo.png" alt="" style="max-width:30%">
        <a href="#instagram/palawancompanion"><img src="images/instagram.png" alt="" style="max-width:3%; position: relative; top:-10px;"></a>
        <a href="#email"><img src="images/mail.png" alt="" style="max-width:3%; position: relative; top:-8px; margin:5px;"></a>
        <a href="#twitter/palawancompanion"><img src="images/twitter.png" alt="" style="max-width:2.5%; position: relative; top:-6px; margin:5px"></a>
    </div>
</body>

</html>
