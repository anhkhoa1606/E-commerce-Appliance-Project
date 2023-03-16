<?php include 'connection.php' ?>

<!DOCTYPE html>
<html>

<head>
  <title>Update Records</title>
  <link rel="stylesheet" href="./css/base.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<div style="text-align:center;">

  <body>

    <?php
    include('bar_with_dbmaintain.php')
    ?>

    <h1 style="text-align:center;">Update Records</h1>

    <form class="update" action="update.php" method="post">
      <div class="form-group">
        <label for="seeAnotherField">Which table would you like to Update?</label><br>
        <select class="form-control" name="table" id="seeAnotherField">
          <option value="orders">orders</option>
          <option value="items">items</option>
          <option value="users">users</option>
          <option value="trip">trip</option>
          <option value="truck">truck</option>
          <option value="stock">stock</option>
          <option value="payment">payment</option>
        </select>
      </div>

      <div class="form-group" id="orderDiv">
        <label for="orderField">Choose type:</label>
        <select class="form-control" name="orderVari" id="orderVari">
          <option value="date_issued">Date Issued</option>
          <option value="date_recieved">Date Recieved</option>
          <option value="total_price">Total Price</option>
          <option value="branch">Branch</option>
        </select>
        <p>Enter Order ID:
        <p>
          <input type="text" id="orderOldItem" name="orderOldItem"><br>
        <p>Enter replacement:
        <p>
          <input type="text" id="orderNewItem" name="orderNewItem"><br>
      </div>


      <div class="form-group" id="itemDiv">
        <label for="itemField">Choose type:</label>
        <select class="form-control" name="itemVari" id="itemVari">
          <option value="name">Name</option>
          <option value="price">Price</option>
          <option value="quantity">Quantity</option>
        </select>
        <p>Enter Item ID:
        <p>
          <input type="text" id="itemOldItem" name="itemOldItem"><br>
        <p>Enter replacement:
        <p>
          <input type="text" id="itemNewItem" name="itemNewItem"><br>
      </div>

      <div class="form-group" id="userDiv">
        <label for="userField">Choose type:</label>
        <select class="form-control" name="userVari" id="userVari">
          <option value="name">Name</option>
          <option value="tel_no">Phone Number</option>
          <option value="home_address">Home Address</option>
          <option value="email">Email</option>
          <option value="password">Password</option>
        </select>
        <p>Enter User ID:
        <p>
          <input type="text" id="userOldItem" name="userOldItem"><br>
        <p>Enter replacement:
        <p>
          <input type="text" id="userNewItem" name="userNewItem"><br>
      </div>

      <div class="form-group" id="tripDiv">
        <label for="tripField">Choose type:</label>
        <select class="form-control" name="tripVari" id="tripVari">
          <option value="branch">Branch</option>
          <option value="destination">Destination</option>
          <option value="distance">Distance</option>
        </select>
        <p>Enter Trip ID:
        <p>
          <input type="text" id="tripOldItem" name="tripOldItem"><br>
        <p>Enter replacement:
        <p>
          <input type="text" id="tripNewItem" name="tripNewItem"><br>
      </div>

      <div class="form-group" id="truckDiv">
        <label for="truckField">Choose type:</label>
        <select class="form-control" name="truckVari" id="truckVari">
          <option value="truck_code">Truck code</option>
          <option value="available">Availability</option>
        </select>
        <p>Enter Truck ID:
        <p>
          <input type="text" id="truckOldItem" name="truckOldItem"><br>
        <p>Enter replacement:
        <p>
          <input type="text" id="truckNewItem" name="truckNewItem"><br>
      </div>

      <div class="form-group" id="stockDiv">
        <label for="stockField">Choose type:</label>
        <select class="form-control" name="stockVari" id="stockVari">
          <option value="name">Name</option>
          <option value="price">Price</option>
          <option value="quantity">Quantity</option>
        </select>
        <p>Enter Shopping ID:
        <p>
          <input type="text" id="stockOldItem" name="stockOldItem"><br>
        <p>Enter replacement:
        <p>
          <input type="text" id="stockNewItem" name="stockNewItem"><br>
      </div>

      <div class="form-group" id="paymentDiv">
        <label for="paymentField">Choose type:</label>
        <select class="form-control" name="paymentVari" id="paymentVari">
          <option value="cc_num">CC Number</option>
          <option value="ccv">CCV</option>
        </select>
        <p>Enter User ID:
        <p>
          <input type="text" id="paymentOldItem" name="paymentOldItem"><br>
        <p>Enter replacement:
        <p>
          <input type="text" id="paymentNewItem" name="paymentNewItem"><br>
      </div>


      <input type="submit" name="submit" value="Submit">
    </form>

    <script>
      $("#seeAnotherField").change(function() {
        if ($(this).val() == "items") {
          $('#itemDiv').show();
          $('#userDiv').hide();
          $('#orderDiv').hide();
          $('#tripDiv').hide();
          $('#truckDiv').hide();
          $('#stockDiv').hide();
          $('#paymentDiv').hide();
        } else if ($(this).val() == "users") {
          $('#userDiv').show();
          $('#itemDiv').hide();
          $('#orderDiv').hide();
          $('#tripDiv').hide();
          $('#truckDiv').hide();
          $('#stockDiv').hide();
          $('#paymentDiv').hide();
        } else if ($(this).val() == "orders") {
          $('#orderDiv').show();
          $('#itemDiv').hide();
          $('#userDiv').hide();
          $('#tripDiv').hide();
          $('#truckDiv').hide();
          $('#stockDiv').hide();
          $('#paymentDiv').hide();
        } else if ($(this).val() == "trip") {
          $('#tripDiv').show();
          $('#itemDiv').hide();
          $('#userDiv').hide();
          $('#orderDiv').hide();
          $('#truckDiv').hide();
          $('#stockDiv').hide();
          $('#paymentDiv').hide();
        } else if ($(this).val() == "truck") {
          $('#truckDiv').show();
          $('#tripDiv').hide();
          $('#itemDiv').hide();
          $('#userDiv').hide();
          $('#orderDiv').hide();
          $('#stockDiv').hide();
          $('#paymentDiv').hide();
        } else if ($(this).val() == "shopping") {
          $('#truckDiv').hide();
          $('#tripDiv').hide();
          $('#itemDiv').hide();
          $('#userDiv').hide();
          $('#orderDiv').hide();
          $('#stockDiv').hide();
          $('#paymentDiv').hide();
        } else if ($(this).val() == "stock") {
          $('#stockDiv').show();
          $('#truckDiv').hide();
          $('#tripDiv').hide();
          $('#itemDiv').hide();
          $('#userDiv').hide();
          $('#orderDiv').hide();
          $('#paymentDiv').hide();
        } else if ($(this).val() == "payment") {
          $('#paymentDiv').show();
          $('#truckDiv').hide();
          $('#tripDiv').hide();
          $('#itemDiv').hide();
          $('#userDiv').hide();
          $('#orderDiv').hide();
          $('#stockDiv').hide();
        } else {
          $('#itemDiv').hide();
          $('#userDiv').hide();
          $('#orderDiv').hide();
          $('#tripDiv').hide();
          $('#truckDiv').hide();
          $('#stockDiv').hide();
          $('#paymentDiv').hide();
        }
      });
      $("#seeAnotherField").trigger("change");
    </script>

  </body>

</div>

</html>

<?php
require __DIR__ . './functions.php';

if (isset($_POST['submit'])) {

  $table = $_POST['table'];

  if ($_POST['table'] === 'orders') {
    $orderOldItem = $_POST['orderOldItem'];
    echo $orderOldItem;
    $orderNewItem = $_POST['orderNewItem'];
    $vari = $_POST['orderVari'];
    $result = $connect->query("UPDATE $table SET $vari = '$orderNewItem' WHERE order_id=$orderOldItem;");
    echo "Updated Order Table";
  }

  if ($_POST['table'] === 'items') {
    $itemOldItem = $_POST['itemOldItem'];
    $itemNewItem = $_POST['itemNewItem'];
    $vari = $_POST['itemVari'];
    $result = $connect->query("UPDATE $table SET $vari = '$itemNewItem' WHERE item_id=$itemOldItem;");
    echo "Updated Item Table";
  }

  if ($_POST['table'] === 'users') {
    $userOldItem = $_POST['userOldItem'];
    $userNewItem = $_POST['userNewItem'];
    $vari = $_POST['userVari'];
    $result = $connect->query("UPDATE $table SET $vari = '$userNewItem' WHERE user_id=$userOldItem;");
    echo "Updated User Table";
  }

  if ($_POST['table'] === 'trip') {
    $OldItem = $_POST['tripOldItem'];
    $NewItem = $_POST['tripNewItem'];
    $vari = $_POST['tripVari'];
    $result = $connect->query("UPDATE $table SET $vari = '$NewItem' WHERE trip_id=$OldItem;");
    echo "Updated Trip Table";
  }

  if ($_POST['table'] === 'truck') {
    $OldItem = $_POST['truckOldItem'];
    $NewItem = $_POST['truckNewItem'];
    $vari = $_POST['truckVari'];
    $result = $connect->query("UPDATE $table SET $vari = '$NewItem' WHERE truck_id=$OldItem;");
    echo "Updated Truck Table";
  }

  if ($_POST['table'] === 'stock') {
    $OldItem = $_POST['stockOldItem'];
    $NewItem = $_POST['stockNewItem'];
    $vari = $_POST['stockVari'];
    $result = $connect->query("UPDATE $table SET $vari = '$NewItem' WHERE stock_id=$OldItem;");
    echo "Updated Stock Table";
  }

  if ($_POST['table'] === 'payment') {
    $OldItem = $_POST['paymentOldItem'];
    $NewItem = $_POST['paymentNewItem'];
    $vari = $_POST['paymentVari'];
    $result = $connect->query("UPDATE $table SET $vari = '$NewItem' WHERE user_id=$OldItem;");
    echo "Updated Payment Table";
  }
}


?>