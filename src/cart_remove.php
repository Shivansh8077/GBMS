<?php
require 'connection.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$item_id=$_GET['id'];           //Id of product to be removed from cart from the Cart page.
$user_id=$_SESSION['id'];
$delete_query="DELETE FROM user_items WHERE user_id='$user_id' AND item_id=$item_id AND status='Added to cart'";
$delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
header('location:cart.php');
?>

