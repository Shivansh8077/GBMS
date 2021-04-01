<?php
require 'connection.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$inputQuantity = $_GET['inputQuantity'];
$item_id=$_GET['id'];
$user_id = $_SESSION['id'];
$type = $_GET['type'];
$redirectedFrom = $_GET['redirectedFrom'];
$dish_price = $_GET['dishPrice'];
$insert_query = "INSERT INTO user_items(user_id,item_id,status,quantity,type,final_price) VALUES ('$user_id','$item_id','Added to cart','$inputQuantity','$type','$dish_price')";
$insert_query_result = mysqli_query($con,$insert_query) or die(mysqli_error($con));
header('location:'.$redirectedFrom);
echo $inputQuantity." --  ".$item_id;

//From here send the data to success.php