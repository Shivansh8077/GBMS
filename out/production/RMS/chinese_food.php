<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chinese Food</title>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
    <link rel="stylesheet" type="text/css"
          href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="index.js"></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css"
          rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="js/jquery-1.8.3.js"></script>
    <script src="js/jquery.jqZoom.js"></script>
    <link href="js/jquery.jqZoom.css" rel="stylesheet">
    <style> a:hover {
            background-color: transparent;
        }</style>
</head>
<body style="background: linear-gradient(45deg, rgb(255,245,253) 0%, rgb(1,1,1) 97%, rgb(1,1,1) 100%)">
<?php
require 'connection.php';
if(isset($_SESSION['email'])){
    require 'headerLoggedIn.html';
}else{
    require  'header.html';
}?>

<?php //echo "<div style='margin-top: 60px'> HIIIIIII</div>" ?>
<?php
//$con =mysqli_connect("localhost","root","","gbms") or die(mysqli_error($con));

$select_indian_food_name_query = "select * from chinese_food";
$select_indian_food_name_query_result = mysqli_query($con, $select_indian_food_name_query) or die(mysqli_error($con));
$count_names = mysqli_num_rows($select_indian_food_name_query_result);

//$select_indian_food_image_link_query = "select imageLink from indian_food";
//$select_indian_food_image_link_query_result = mysqli_query($con,$select_indian_food_image_link_query) or die(mysqli_error($con));
//$count_links = mysqli_num_rows($select_indian_food_image_link_query_result);
?>
<div class="container-fluid" style="margin-top: 60px">
    <div class="row">
        <?php for ($i = 0; $i < $count_names; $i++) {
            $row = mysqli_fetch_array($select_indian_food_name_query_result);

            echo "
        <div class='col-sm-4' >
            <div class='panel panel-default' >
                <div class='panel-heading' style='text-align: center;font-weight:bolder;font-size: 20px'>
                    <i>$row[name]</i>
                </div>
                <div class='panel-body' >
                    <a class='thumbnail'>
                        <div class='zoom-box'><img src='$row[imageLink]' style='height: 400px;width: max-content'
                       onclick='zoom()'
                       '></div>
                    </a>
                    <div class='caption' >
                        <p style='text-align: center'>
                          <span style='font-size: 23px;font-weight: bolder'> &#8377 </span><i class=\"fa fa-rupee\"> <span style='color:purple;font-size: 25px;font-weight: bolder'> $row[price]/- </span></i>
                        </p>
                    </div>
                    <a href='signup.php'>
                        <center>
                            <button type='button' class='btn btn-primary btn-block'>Order Now!</button>
                        </center>
                    </a>
                </div>
            </div>
        </div>";
        } ?>
    </div>
</div>
<script> function zoom() {
        $(function () {
            $("img").jqZoom({
                // settings here

            });
        });
        $(function () {
            $("img").jqZoom({
                selectorWidth: 20,
                selectorHeight: 20
            });
        });
        $(function () {
            $("img").jqZoom({
                selectorWidth: 0,
                selectorHeight: 0,
                viewerWidth: 400,
                viewerHeight: 300
            });
        })
    }</script>

<?php
require  'footer.html';
?>

</body>
</html>
