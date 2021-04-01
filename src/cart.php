<head>
    <title>Your Cart</title>
    <style>
        td{
            text-align: center;
        }
        th{font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;font-size: 18px}
    </style>
</head>
<div style='margin-top: 100px;text-align: center'></div>
<?php
require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}else {
    require 'headerLoggedIn.html';
    $user_id = $_SESSION['id'];
    $user_name = $_SESSION['name'];
    $select_query = "SELECT * FROM user_items INNER JOIN food_items ON user_items.item_id=food_items.food_id WHERE user_items.user_id='$user_id' AND user_items.status='Added to cart'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $count_of_rows = mysqli_num_rows($select_query_result);
    if ($count_of_rows == 0) {
        echo "<div style='margin-top: 200px;text-align: center' class='purple_colour'>Add items to the cart first!</div>";
    } else {
        ?>
        <?php echo "<div style='text-align: center;border-bottom: 2px solid black'><span  style='text-align: center;' class='purple_colour purple_button'>" . $user_name . " 's Order </span></div>" ?>
        <div class="container" style="margin-top: 30px">
        <center>
        <table class="table table-bordered table-striped table-hover table-responsive">
        <tbody>
        <tr>
            <th style="text-align: center">Dish Unique number</th>
            <th style="text-align: center">Dish Name</th>
            <th style="text-align: center">Quantity</th>
            <th style="text-align: center">Dish Price</th>
            <th style="text-align: center">Changed your mind?</th>
        </tr>
        <?php
        $sum = 0;
        $id = array();
        $i = 0;
        while ($row = mysqli_fetch_array($select_query_result)) {
            $id[$i++] = $row['food_id'];
            $sum += $row['final_price'];
            echo "<tr><td>" . $row['food_id'] . "</td><td style='font-weight: bolder;'>" . $row['name'] . "</td><td>" . $row['quantity'] . "</td><td class='purple_colour'><span>&#8377</span>" . $row['final_price'] . "</td><td><a href='cart_remove.php?id={$row['food_id']}' class='remove_item_link' ><button class='purple_button' style='width:auto;background: red'>Remove</button></a></td></tr>";
        }
        $a = serialize($id);
        echo "<tr class='purple_colour'><td style='font-weight: bolder' colspan='3'>Total Bill :</td><td style='font-weight: bolder'>Rs/-" . $sum . "</td><td><a href='success.php?ids={$a}'><button class='purple_button' style='width: 100%'>Confirm Order</button></a></td></tr>";
    }
    ?>
    </tbody>
    </table>
    </center>
    </div>
    <?php require 'footer.html';
}










