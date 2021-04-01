<head>
    <link rel="stylesheet" href="includes/fontAwsome/css/font-awesome.min.css">
    <title>GBMS</title>
</head>
<?php
$con =mysqli_connect("localhost","root","","gbms") or die(mysqli_error($con));
if(!isset($_SESSION['email'])){
    session_start();
}
?>