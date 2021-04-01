<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>In Restaurant</title>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.9.7/js/bootstrap.min.js "></script>
    <link rel="stylesheet" type="text/css"
          href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="index.js"></script>
    <style>
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: #ff0003;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }
    </style>
</head>
<body>
<?php
require 'connection.php';
if (!isset($_SESSION['email'])) {
    require 'header.html';
} else {
    require 'headerLoggedIn.html';
}
?>
<div>
    <img src="includes/img1.jpg" class="img" style="background-repeat: no-repeat; width: 1520px ;height: 600px">
    <img src="includes/img2.jpg" class="img" style="background-repeat: no-repeat; width: 1520px ;height: 600px">
    <img src="includes/img3.jpg" class="img" style="background-repeat: no-repeat; width: 1520px ;height: 600px">
    <button class="btn btn-lg w3-button w3-display-left next" onclick="plusDivs(-1)" style="float:left;">&#10094;
    </button>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("img");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            ;
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }
    </script>
</div>
<!--<nav class="navbar navbar-fixed-top container-fluid">-->
<!--    <div style="background: linear-gradient(45deg, rgba(255,134,82,1) 0%, rgba(186,108,189,1) 97%, rgba(186,108,189,1) 100%);"-->
<!--         class="navbar my_navbar">-->
<!--        <div class="navbar-header">-->
<!--            <div><a href="index.php" style="color: purple;font-family: Algerian,sans-serif;font-size: 35px"-->
<!--                    class="navbar-brand black_color"><strong><em>GBMS</em></strong></a></div>-->
<!--        </div>-->
<!--        <div class="collapse navbar-collapse" id="myNavbar">-->
<!--            <ul class="nav navbar-nav navbar-right">-->
<!--                <li><a href="signup.html" target="_blank" class="black_color" style="color: black;"><span-->
<!--                        class="glyphicon glyphicon-user"></span>Sign Up</a></li>-->
<!--                  <li><a href=".modal" data-toggle="modal"  class="black_color"><span class="glyphicon glyphicon-log-in">Login</span> </a> </li>-->
<!--                <li><a href="about.html" target="_blank" class="black_color" style="color: black"><span-->
<!--                        class="glyphicon glyphicon-tasks"></span>About Us </a></li>-->
<!--                <li><a href="contact.html" target="_blank" class="black_color" style="color: black"><span-->
<!--                        class="glyphicon glyphicon-phone"></span>Contact Us</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->

<div style="font-family: Algerian,sans-serif;font-size: 70px;color: red;margin: auto;width: auto;text-align: center">
    Select
    a Category
</div>
<div class="container">
    <a href="indian_food.php">
        <button class="btn btn-danger  btn-lg" style="width: 30%;height: 70px;margin-right: 30px">Indian<sup
                style="color: yellow">*hot</sup></button>
    </a>
    <a href="chinese_food.php">
    <button type="button" class="btn btn-primary  btn-lg" style="width: 30%;height: 70px;;margin-right: 30px">Chinese
    </button></a>
    <a href="italian_food.php">
    <button type="button" class="btn btn-success   btn-lg" style="width: 30%;height: 70px;margin-right: 30px">Italian
    </button></a>
    <a href="japnese_food.php">
    <button type="button" class="btn btn-warning  btn-lg"
            style="width: 30%;height: 70px;margin-top: 15px;margin-right: 30px">Japanese
    </button></a>
    <button type="button" class="btn btn-danger  btn-lg"
            style="width: 30%;height: 70px;margin-top: 15px;margin-right: 30px">Thai
    </button>
    <button type="button" class="btn btn-warning  btn-lg"
            style="width: 30%;height: 70px;margin-top: 15px;margin-right: 30px">American-Piatza
    </button>
    <button type="button" class="btn btn-success  btn-lg"
            style="width: 30%;height: 70px;margin-top: 15px;margin-right: 30px">Sweet Dish
    </button>
    <button type="button" class="btn btn-info  btn-lg"
            style="width: 30%;height: 70px;margin-top: 15px;margin-right: 30px;color: black"><b>Salads</b></button>
    <button type="button" class="btn btn-danger  btn-lg"
            style="width: 30%;height: 70px;margin-top: 15px;margin-right: 30px">Fast Food
    </button>
</div>
<footer class="container " style="margin-top: 120px">
    <div class="footer"
         style="width: 100%;background: linear-gradient(45deg, rgba(255,134,82,1) 0%, rgba(186,108,189,1) 97%, rgba(186,108,189,1) 100%);position: center;bottom:0 ">
        <div class="row">
            <div class="col-sm-3 col-sm-offset-1">
                <p style="font-size:18px "><b style="color: white ">Information</b></p>
                <a href="aboutUs.html" style="text-decoration:none;color:white">About Us</a><br>
                <a href="contact.php" style="text-decoration:none;color:white">Contact Us</a>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
                <p style="font-size:18px "><b style="color: white ">My Account</b></p>
                <a href=".modal" data-toggle="modal" style="text-decoration:none;color:white">Login </a><br>
                <a href="signup.php" style="text-decoration:none;color:white">Signup</a>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
                <p style="font-size:18px "><b style="color: white ">Contact Us</b></p>
                <p style="color: white"> Contact: +91-80777-875-875</p>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
                <a href="workWithUs.html" style="text-decoration:none;color:white"><p style="color: white">Work with
                    us</p></a>
            </div>
        </div>
    </div>
</footer>
</body>

</html>