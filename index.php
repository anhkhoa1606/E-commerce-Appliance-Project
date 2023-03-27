<?php include 'connection.php' ?>

<!DOCTYPE php>
<php lang="en">
    <meta charset="UTF-8">
    <title>Smart Customer Services</title>
    <link rel="stylesheet" href="./css/base.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="./js/controller.js"></script>
    <script type="text/javascript" src="./js/drag.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <body>

        <?php
        include('bar_with_search.php')
        ?>

        <div class="bottomright">
            <?php
            require __DIR__ . '/functions.php';
            if (isset($_POST['submit'])) {
                $item = $_POST['item'];
                $result = $connect->query("SELECT * from orders WHERE order_id=$item;");
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    echo "Order ID: " . $row["order_id"] . "<br>Trip ID: " . $row["trip_id"] . "<br>receipt ID: "
                        . $row["receipt_id"] . "<br>User ID: " . $row["user_id"] . "<br>Branch: " . $row["branch"]
                        . "<br>Date Issued: " . $row["date_issued"] . "<br>Date Received: " . $row["date_recieved"]
                        . "<br>Total Price: " . $row["total_price"];
                } else
                    echo "No entry found.";
            }
            ?>
        </div>

        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col sm-9">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-img-top">
                                        <img id="product_0_Dishwasher_599.99" draggable="true" ondragstart="drag(event)" src="./images/dishwasher.png">
                                    </div>
                                    <div class="card-body">
                                        <h2 class="card-title">Dishwasher</h2>
                                        <h1 class="card-text">$599.99</h1>
                                        <button class="btn btn-primary" onclick="updateCart(0, 'Dishwasher', 599.99)" type="button">Add to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-img-top"><img id="product_1_Toaster_29.99" draggable="true" ondragstart="drag(event)" src="./images/toaster.jpg"></div>
                                    <div class="card-body">
                                        <h2 class="card-title">
                                            Toaster</h2>
                                        <h1 class="card-text">$29.99</h1><button class="btn btn-primary" onclick="updateCart(1, 'Toaster', 29.99)" type="button">Add to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-img-top"><img id="product_2_Blender_59.99" draggable="true" ondragstart="drag(event)" src="./images/blender.jpg"></div>
                                    <div class="card-body">
                                        <h2 class="card-title">
                                            Blender</h2>
                                        <h1 class="card-text">$59.99</h1><button class="btn btn-primary" onclick="updateCart(2, 'Blender', 59.99)" type="button">Add to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-img-top"><img id="product_3_Microwave_99.99" draggable="true" ondragstart="drag(event)" src="./images/microwave.jpg"></div>
                                    <div class="card-body">
                                        <h2 class="card-title">
                                            Microwave</h2>
                                        <h1 class="card-text">$99.99</h1><button class="btn btn-primary" onclick="updateCart(3, 'Microwave', 99.99)" type="button">Add to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-img-top"><img id="product_4_Coffee-Maker_39.99" draggable="true" ondragstart="drag(event)" src="./images/coffeemaker.jpg"></div>
                                    <div class="card-body">
                                        <h2 class="card-title">
                                            Coffee Maker</h2>
                                        <h1>$39.99</h1><button class="btn btn-primary" onclick="updateCart(4, 'Coffee Maker', 39.99)" type="button">Add
                                            to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-img-top"><img id="product_5_Waffle-Maker_49.99" draggable="true" ondragstart="drag(event)" src="./images/wafflemaker.jpg"></div>
                                    <div class="card-body">
                                        <h2 class="card-title">
                                            Waffle Maker</h2>
                                        <h1>$49.99</h1><button class="btn btn-primary" onclick="updateCart(5, 'Waffle Maker', 49.99)" type="button">Add
                                            to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-img-top"><img id="product_6_Air-Fryer_79.99" draggable="true" ondragstart="drag(event)" src="./images/airfryer.jpg"></div>
                                    <div class="card-body">
                                        <h2 class="card-title">
                                            Air Fryer</h2>
                                        <h1>$79.99</h1><button class="btn btn-primary" onclick="updateCart(6, 'Air Fryer', 79.99)" type="button">Add to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-img-top"><img id="product_7_Food-Processor_89.99" draggable="true" ondragstart="drag(event)" src="./images/foodprocessor.jpg"></div>
                                    <div class="card-body">
                                        <h2 class="card-title">Food
                                            Processor</h2>
                                        <h1>$89.99</h1><button class="btn btn-primary" onclick="updateCart(7, 'Food Processor', 89.99)" type="button">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-img-top"><img id="product_8_Slow-Cooker_49.99" draggable="true" ondragstart="drag(event)" src="./images/slowcooker.jpg"></div>
                                    <div class="card-body">
                                        <h2 class="card-title">Slow
                                            Cooker</h2>
                                        <h1>$49.99</h1><button class="btn btn-primary" onclick="updateCart(8, 'Slow Cooker', 49.99)" type="button">Add
                                            to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <h3 style="text-align: center;"><u>Shopping Cart</u></h3>
                        <button type="button" class="btn btn-primary" onclick="clearCart()">Clear Cart</button>
                        <div class="topright shopping-cart" id="shopping-cart" ondrop="drop(event)" ondragover="allowDrop(event)">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>


        <!-- Footer to display browser information-->
        <div class="text-center fixed-bottom opacity-25 mt-3 pt-3 px-4">
            <p class="fs-6" id="footerText"></p>
        </div>
        <script src="./js/websiteInfo.js"></script>

    </body>
</php>

<?php
if (isset($_POST['submit'])) {
    $search = $_POST['search'];
    $sql = "SELECT * FROM orders WHERE order_id=$search";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['order_id'] !== '0000-00-00 00:00:0') {
            echo "<div class='bottomright'>";
            echo "<h4 style='color: white; text-align: center;'>That order is not done</h4>";
            echo "</div>";
        } else {
            echo "<div class='bottomright'>";
            echo "<h4 style='color: white; text-align: center;'>That order is done</h4>";
            echo "</div>";
        }
    } else {
        echo "<div class='bottomright'>";
        echo "<h4 style='color: white; text-align: center;'>That order does not exist</h4>";
        echo "</div>";
    }
}
?>