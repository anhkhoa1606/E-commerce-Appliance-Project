<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Smart Customer Services</title>
<link rel="stylesheet" href="./css/base.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
</style>

<script>
    window.onload = (function() {
        $.ajax({
            type: "POST",
            url: "processPostType.php",
            data: {
                type: "getOrderId"
            },
            success: function(data) {
                document.getElementById("orderID").innerHTML = data;
            }
        })
    });
</script>

<?php include 'connection.php' ?>

<body>
    <?php
    include('bar.php')
    ?>

    <div class="thankyou" style="margin-top: 5em"><img style="height: 100px" src="images/greencheck.png"></div>

    <div class="thankyou">
        <h1 style="padding: 2em 0 2em 0">Thank you for shopping with us!</h1>
    </div>
    <div class="thankyou">
        <h2>Your order has been placed</h2>
    </div>
    <div class="thankyou">
        <h2>Your order# is: <b id="orderID"></b></h2>
    </div>

</body>

</html>


<?php

session_start();
$_SESSION['cart_id']++;
?>