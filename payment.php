<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
    <title>Smart Customer Services</title>
    <link rel="stylesheet" href="./css/base.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/controller.js"></script>
</head>

<body>

    <?php
    include('bar.php')
    ?>



    <div id="paymentField">
        <h2>Please enter your credit card info</h2>
        <label>Credit Card Number:</label> <input type="text" name="cc_num" id="cc_num" required><br>
        <label>CVV: </label> <input type="password" name="cvv" id="cvv" required><br>
        <button style="font-size: 20px" onclick="payment(),  window.location.href='./thank_you.php'">Submit</button>
    </div>


</body>

</html>