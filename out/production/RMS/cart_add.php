<?php
require 'connection.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$inputQuantity = $_GET['inputQuantity'];
$item_id=$_GET['id'];
$user_id = $_SESSION['id'];
$insert_query = "INSERT INTO users_indian_food(user_id,item_id,status,quantity) VALUES ('$user_id','$item_id','Added to cart','$inputQuantity')";
$insert_query_result = mysqli_query($con,$insert_query) or die(mysqli_error($con));
header('location:indian_food.php');
echo $inputQuantity." --  ".$item_id;

//From here send the data to sussess.php