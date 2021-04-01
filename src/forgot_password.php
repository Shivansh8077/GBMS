<?php
require 'connection.php';
if (isset($_SESSION['email'])) {
    header('location:home.php');
}
require 'header.html';
?>
<div style="text-align: center;margin-top: 200px">
    You would be getting an email on your provided email id soon.
    You can reset your password from there.
</div>
<?php
require 'footer.html';
