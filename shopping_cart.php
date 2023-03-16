<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Smart Customer Services</title>
<link rel="stylesheet" href="./css/shopping_cart.css">



<script type="text/javascript" src="./js/controller.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


<script type="text/javascript" src="./js/drag.js"></script>

<script type="text/javascript">
    window.onload = (function() {
        populateTable()

        console.log("uiysgdfgg")

        localStorage.setItem("userID", <?php session_start();
                                        $user_id = $_SESSION['user_id'];
                                        echo $user_id ?>)

    });
</script>

<body>

    <?php
    include('bar.php')
    ?>

    <div class="container">

        <div id="results">

            <div id="title">
                <h1>Shopping Cart</h1>
            </div>

            <div class="cart">

                <div>
                    <table id="shopping-cart">

                    </table>
                </div>



                <div class="shopping-info">

                    <form action="./invoice.php">
                        <p>Please select branch to ship from:</p>
                        <input type="radio" id="downtown" name="branch" value="Ryerson University, Victoria Street, Toronto, ON" checked>
                        <label for="downtown">Downtown</label><br>
                        <input type="radio" id="east-york" name="branch" value="Michael Garron Hospital, Coxwell Avenue, Toronto, ON">
                        <label for="css">East York</label><br>
                        <input type="radio" id="etobicoke" name="branch" value="CF Sherway Gardens, The West Mall, Etobicoke, ON">
                        <label for="etobicoke">Etobicoke</label>

                        <br><br>

                        <label for="shipment-time">Enter a date and time for your shipment:</label>
                        <input id="shipment-time" type="datetime-local" name="shipment-time" value="2023-03-15T09:00">

                        <br><br>

                        <input type="submit" value="Proceed to checkout" onclick="sendPost()">
                    </form>

                </div>
            </div>


        </div>
    </div>







</body>

</html>