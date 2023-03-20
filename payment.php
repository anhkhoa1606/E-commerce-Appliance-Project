<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
    <title>Smart Customer Services</title>
    <link rel="stylesheet" href="./css/base.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/controller.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
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