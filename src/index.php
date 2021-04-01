<?php
require 'connection.php';
if(isset($_SESSION['email'])){
    header('location:home.php');
}
require 'header.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GBMS</title>
    <link rel="stylesheet" type="text/css" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
 <script src="index.js" defer></script>
</head>
<style>
    a:hover {
        background-color: transparent;
    }

    * {
        box-sizing: border-box
    }

    /* Slideshow container */
    .slideshow-container {

    }

    /* Hide the images by default */
    .mySlides {
        display: none;

    }

    /* Next & previous buttons */
    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }.my_navbar
     {
         background-color: rgba(249,249,249,0.6);
     }
    .navbar-toggle
    {
        background-color: transparent;
        background-image: none;
        border: 1px solid transparent;
    }
    .navbar-toggle .icon-bar {
        background-color: #030303;
        border: 1px solid transparent;
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 10%;
        background-color:transparent;
        border: 2px solid black;
       left: 170px;
    }

    /* The dots/bullets/indicators */
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {
            opacity: .4
        }
        to {
            opacity: 1
        }
    }

    @keyframes fade {
        from {
            opacity: .4
        }
        to {
            opacity: 1
        }
    }
</style>
<!--id="body" style="background-image: url(https://www.wallpapertip.com/wmimgs/12-124331_fast-food-items-wallpaper-design.jpg);-->
<!--;background-repeat: no-repeat;background-size: 1400px 730px"-->
<body style="background: linear-gradient(45deg, rgb(255,245,253) 0%, rgb(1,1,1) 97%, rgb(1,1,1) 100%)">

<div class="slideshow-container" style="margin-top: 0px">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 5</div>
        <img src="includes/img1.jpg" style="width:1540px;height: 780px" alt="">

    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 5</div>
        <img src="includes/img2.jpg" style="width:1550px;height: 780px">

    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 5</div>
        <img src="includes/img3.jpg" style="width:1550px;height: 780px" alt="">

    </div>
    <div class="mySlides fade">
        <div class="numbertext">4 / 5</div>
        <img src="includes/img4.jpg" style="width:1550px;height: 780px">

    </div>    <div class="mySlides fade">
        <div class="numbertext">5 / 5</div>
        <img src="includes/img5.jpg" style="width:1550px;height: 780px">

    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script>
    var slideIndex = 0;
    showSlides();
    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 1700); // Change image every 2 seconds
    }
</script>

<div id="belowNavbar" class="numbertext">
    <div class="container">
        <div onclick="myfunc() "
             style="font-family: Algerian,sans-serif;font-size: 100px;color: #ffffff;text-align: center;margin: auto;width: 500px;border: 3px solid  white"
             id="welcome">Welcome
        </div>
        <div style="font-family: Algerian,sans-serif;font-size: 16px;color: #ffffff;margin: auto;margin-bottom: 20px;width: 300px;border: 3px solid  white;margin-top: 10px;margin-left: 420px;background-color: black">Please mark
            your current status
        </div>
        <div style="margin: auto;width: 60%">
            <a href="inRestaurant.php">
                <button type="button" class="btn btn-primary btn-lg" style="width: 200px;height: 60px;margin-left: 20px;" id="in" >In Restaurant</button>
            </a>
            <a href="orderOnline.html">
                <button type="button" class="btn btn-success btn-lg" style="width: 200px;height: 60px;margin-left: 20px;" id="online">Order Online</button>
            </a>
            <a href="incoming.html">
                <button type="button" class="btn btn-danger btn-lg" style="width: 200px;height: 60px;margin-left: 20px" id="incoming">On the  way </button>
            </a>
        </div>
    </div>
</div>
<?php
require 'footer.html';
?>
</body>
</html>