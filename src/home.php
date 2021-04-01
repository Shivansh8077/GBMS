<?php
require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
} else {
    require 'headerLoggedIn.html';
    echo "<marquee scrollamount='15'><div style='margin-top: 60px'><b style='font-size: 20px'>Welcome:</b> <span style='color: purple;font-size: 35px;font-weight: bolder;font-family: cursive'><i><u> " . $_SESSION['name'] . "</u></i></span> </div></marquee>";
    ?>
    <div style="border-bottom: 2px solid black"></div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>GBMS</title>
        <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
        <link rel="stylesheet" type="text/css"
              href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="index.js" defer></script>
    </head>
    <body style="background: linear-gradient(45deg, rgb(255,255,255) 0%, rgb(255,255,255) 97%, rgb(25,255,174) 100%)">
    <div id="belowNavbar" class="numbertext">
        <div class="container">
            <div onclick="myfunc() "
                 style="font-family: Algerian,sans-serif;font-size: 100px;color: #ffffff;text-align: center;margin: auto;width: 500px;border: 3px solid  #010101"
                 id="welcome">
            </div>
            <div
                style="font-family: Algerian,sans-serif;font-size: 16px;color: #ffffff;margin: auto;margin-bottom: 20px;width: 300px;border: 3px solid  white;margin-top: 10px;margin-left: 420px;background-color: black">
                Please mark
                your current status
            </div>
            <div style="margin: auto;width: 60%">
                <a href="inRestaurant.php">
                    <button type="button" class="btn btn-primary btn-lg"
                            style="width: 200px;height: 60px;margin-left: 20px;" id="in">In Restaurant
                    </button>
                </a>
                <a href="orderOnline.html">
                    <button type="button" class="btn btn-success btn-lg"
                            style="width: 200px;height: 60px;margin-left: 20px;" id="online">Order Online
                    </button>
                </a>
                <a href="incoming.html">
                    <button type="button" class="btn btn-danger btn-lg"
                            style="width: 200px;height: 60px;margin-left: 20px" id="incoming">On the way
                    </button>
                </a>
            </div>
        </div>
    </div>
    <?php
    require 'footer.html';
    ?>
    </body>
    </html>
    <?php
}
?>