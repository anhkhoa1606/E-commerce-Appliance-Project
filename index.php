<?php include 'connection.php' ?>

<!DOCTYPE php>
<php lang="en">
    <meta charset="UTF-8">
    <title>Smart Customer Services</title>
    <link rel="stylesheet" href="./css/base.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="./js/controller.js"></script>
    <script type="text/javascript" src="./js/drag.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

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
            <!-- <div class="container2">
                <div class="item-list-parent" id="flex-child">
                    <div>
                        <div class="item">
                            <div class="item-img">
                                <img id="product_0_Dishwasher_599.99" draggable="true"
                                    ondragstart="drag(event)" src="./images/dishwasher.png">
                            </div>
                            <div class="item-desc">
                                <h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_0">
                                    Dishwasher</h2>
                                <h1>$599.99</h1>
                                <button onclick="updateCart(0, 'Dishwasher', 599.99)" type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-img"><img id="product_1_Toaster_29.99" draggable="true"
                                    ondragstart="drag(event)" src="./images/toaster.jpg"></div>
                            <div class="item-desc">
                                <h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_1">
                                    Toaster</h2>
                                <h1>$29.99</h1><button onclick="updateCart(1, 'Toaster', 29.99)" type="button">Add to
                                    Cart</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-img"><img id="product_2_Blender_59.99" draggable="true"
                                    ondragstart="drag(event)" src="./images/blender.jpg"></div>
                            <div class="item-desc">
                                <h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_2">
                                    Blender</h2>
                                <h1>$59.99</h1><button onclick="updateCart(2, 'Blender', 59.99)" type="button">Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item-list-row">
                        <div class="item">
                            <div class="item-img"><img id="product_3_Microwave_99.99" draggable="true"
                                    ondragstart="drag(event)" src="./images/microwave.jpg"></div>
                            <div class="item-desc">
                                <h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_3">
                                    Microwave</h2>
                                <h1>$99.99</h1><button onclick="updateCart(3, 'Microwave', 99.99)" type="button">Add to
                                    Cart</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-img"><img id="product_4_Coffee-Maker_39.99" draggable="true"
                                    ondragstart="drag(event)" src="./images/coffeemaker.jpg"></div>
                            <div class="item-desc">
                                <h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_4">
                                    Coffee Maker</h2>
                                <h1>$39.99</h1><button onclick="updateCart(4, 'Coffee Maker', 39.99)" type="button">Add
                                    to Cart</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-img"><img id="product_5_Waffle-Maker_49.99" draggable="true"
                                    ondragstart="drag(event)" src="./images/wafflemaker.jpg"></div>
                            <div class="item-desc">
                                <h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_5">
                                    Waffle Maker</h2>
                                <h1>$49.99</h1><button onclick="updateCart(5, 'Waffle Maker', 49.99)" type="button">Add
                                    to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item-list-row">
                        <div class="item">
                            <div class="item-img"><img id="product_6_Air-Fryer_79.99" draggable="true"
                                    ondragstart="drag(event)" src="./images/airfryer.jpg"></div>
                            <div class="item-desc">
                                <h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_6">Air
                                    Fryer</h2>
                                <h1>$79.99</h1><button onclick="updateCart(6, 'Air Fryer', 79.99)" type="button">Add to
                                    Cart</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-img"><img id="product_7_Food-Processor_89.99" draggable="true"
                                    ondragstart="drag(event)" src="./images/foodprocessor.jpg"></div>
                            <div class="item-desc">
                                <h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_7">Food
                                    Processor</h2>
                                <h1>$89.99</h1><button onclick="updateCart(7, 'Food Processor', 89.99)"
                                    type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-img"><img id="product_8_Slow Cooker_49.99" draggable="true"
                                    ondragstart="drag(event)" src="./images/slowcooker.jpg"></div>
                            <div class="item-desc">
                                <h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_8">Slow
                                    Cooker</h2>
                                <h1>$49.99</h1><button onclick="updateCart(8, 'Slow Cooker', 49.99)" type="button">Add
                                    to Cart</button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="topright" id="flex-child" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <h3 style="text-align: center;"><u>Shopping Cart</u></h3>
                </div>

            </div> -->
            <div class="container">
                <div class="row">
                    <div class="col sm-9">
                        <div class="row">
                            <div class="col">
                                <div class="item">
                                    <div class="item-img">
                                        <img id="product_0_Dishwasher_599.99" draggable="true" ondragstart="drag(event)"
                                            src="./images/dishwasher.png">
                                    </div>
                                    <div class="item-desc">
                                        <h2 class="item-list-row">
                                            Dishwasher</h2>
                                        <h1>$599.99</h1>
                                        <button onclick="updateCart(0, 'Dishwasher', 599.99)" type="button">Add to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="item">
                                    <div class="item-img"><img id="product_1_Toaster_29.99" draggable="true"
                                            ondragstart="drag(event)" src="./images/toaster.jpg"></div>
                                    <div class="item-desc">
                                        <h2 class="item-list-row">
                                            Toaster</h2>
                                        <h1>$29.99</h1><button onclick="updateCart(1, 'Toaster', 29.99)"
                                            type="button">Add to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="item">
                                    <div class="item-img"><img id="product_2_Blender_59.99" draggable="true"
                                            ondragstart="drag(event)" src="./images/blender.jpg"></div>
                                    <div class="item-desc">
                                        <h2 class="item-list-row">
                                            Blender</h2>
                                        <h1>$59.99</h1><button onclick="updateCart(2, 'Blender', 59.99)"
                                            type="button">Add to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="item">
                                    <div class="item-img"><img id="product_3_Microwave_99.99" draggable="true"
                                            ondragstart="drag(event)" src="./images/microwave.jpg"></div>
                                    <div class="item-desc">
                                        <h2 class="item-list-row">
                                            Microwave</h2>
                                        <h1>$99.99</h1><button onclick="updateCart(3, 'Microwave', 99.99)"
                                            type="button">Add to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="item">
                                    <div class="item-img"><img id="product_4_Coffee-Maker_39.99" draggable="true"
                                            ondragstart="drag(event)" src="./images/coffeemaker.jpg"></div>
                                    <div class="item-desc">
                                        <h2 class="item-list-row">
                                            Coffee Maker</h2>
                                        <h1>$39.99</h1><button onclick="updateCart(4, 'Coffee Maker', 39.99)"
                                            type="button">Add
                                            to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="item">
                                    <div class="item-img"><img id="product_5_Waffle-Maker_49.99" draggable="true"
                                            ondragstart="drag(event)" src="./images/wafflemaker.jpg"></div>
                                    <div class="item-desc">
                                        <h2 class="item-list-row">
                                            Waffle Maker</h2>
                                        <h1>$49.99</h1><button onclick="updateCart(5, 'Waffle Maker', 49.99)"
                                            type="button">Add
                                            to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="item">
                                    <div class="item-img"><img id="product_6_Air-Fryer_79.99" draggable="true"
                                            ondragstart="drag(event)" src="./images/airfryer.jpg"></div>
                                    <div class="item-desc">
                                        <h2 class="item-list-row">
                                            Air Fryer</h2>
                                        <h1>$79.99</h1><button onclick="updateCart(6, 'Air Fryer', 79.99)"
                                            type="button">Add to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="item">
                                    <div class="item-img"><img id="product_7_Food-Processor_89.99" draggable="true"
                                            ondragstart="drag(event)" src="./images/foodprocessor.jpg"></div>
                                    <div class="item-desc">
                                        <h2 class="item-list-row">Food
                                            Processor</h2>
                                        <h1>$89.99</h1><button onclick="updateCart(7, 'Food Processor', 89.99)"
                                            type="button">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="item">
                                    <div class="item-img"><img id="product_8_Slow-Cooker_49.99" draggable="true"
                                            ondragstart="drag(event)" src="./images/slowcooker.jpg"></div>
                                    <div class="item-desc">
                                        <h2 class="item-list-row">Slow
                                            Cooker</h2>
                                        <h1>$49.99</h1><button onclick="updateCart(8, 'Slow Cooker', 49.99)"
                                            type="button">Add
                                            to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <h3 style="text-align: center;"><u>Shopping Cart</u></h3>
                        <button type="button" class="btn btn-primary" onclick="clearCart()">Clear Cart</button>
                        <div class="topright shopping-cart" id="shopping-cart" ondrop="drop(event)"
                            ondragover="allowDrop(event)">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="bottomleft">
            <h4 style="color: white; text-align: center;">Item Has Been Added To Your Cart</h4>
        </div>
        <div class="max-items">
            <h4 style="color: white; text-align: center;">Max quantity is 5 items</h4>
        </div> -->

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